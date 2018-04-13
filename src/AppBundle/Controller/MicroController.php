<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Comment;
use AppBundle\Form\CommentType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Entity\Enquiry;
use AppBundle\Form\EnquiryType;
use Symfony\Component\HttpFoundation\Response;
use Pagerfanta\Adapter\ArrayAdapter;
use Pagerfanta\Pagerfanta;


class MicroController extends Controller
{


    /**
     * @Route("/", name = "home_page")
     */
    public function randomAction()
    {
        return $this->render('micro/firstpage.html.twig');
    }

    /**
     * @Route("/about", name = "about")
     */

    public function aboutAction()
    {
        return $this->render('micro/about.html.twig');
    }

    /**
     * @Route("/stevedores", name = "stevedores")
     */

    public function stevedoresAction()
    {
        return $this->render('micro/stevedores.html.twig');
    }

    /**
     * @Route("/trucking", name = "trucking")
     */

    public function TruckingAction()
    {
        return $this->render('micro/trucking.html.twig');
    }

    /**
     * @Route("/contact", name = "contact")
     **
     * @param Request $request
     *
     * @return Response
     */

    public function ContactAction(Request $request)
    {
        $mailer = $this->get('mailer');
        $enquiry = new Enquiry();
        $form = $this->CreateForm(EnquiryType::class, $enquiry);

        if ($request->isMethod($request::METHOD_POST))
        {
            $form->handleRequest($request);
                if ($form->isValid()) {

                    $message = (new \Swift_Message('Hello Email'))
                        ->setFrom($this->getParameter('mailer_user'))
                        ->setTo($this->getParameter('mailer_user'))
                        ->setBody(
                            $this->renderView(
                                'micro/contactEmail.txt.twig',
                                array('enquiry' => $enquiry)),
                            'text/html'
                        );
                    $mailer->send($message);

                    $this->addFlash(
                        'notice',
                        'Спасибо! Ваша заявка принята, мы свяжеся с Вами в течении 5 минут!'
                    );
                    return $this->redirectToRoute('contact');

            }

        }

        return $this->render('micro/contact.html.twig', array(
            'form' => $form->createView(),
        ));
    }

    /**
     * @Route("/reviews", name="reviews")
     *
     */

    public function ReviewsAction(Request $request)
    {
        $em = $this->container->get('doctrine')->getEntityManager();
        $pagerfanta = new Pagerfanta(new ArrayAdapter(array_reverse($em->getRepository('AppBundle:Comment')->findAll())));
        $pagerfanta -> setMaxPerPage(5);
        $pagerfanta->setCurrentPage($request->get('page',1));




        $enquiry = new Comment();
        $form = $this->CreateForm(CommentType::class, $enquiry);

        $form->handleRequest($request);


        if ($form -> isSubmitted() && $form -> isValid())
        {
            $em = $this -> getDoctrine()->getManager();
            $em -> persist($enquiry);
            $em -> flush();

            return $this->redirect('reviews');

           // $this-> addFlash('success', 'Thank you for you comment!');
        }

        return $this->render('micro/reviews.html.twig', array(
                'comments' => $pagerfanta,
         //       'firstComment' => $firstElArr,
                'form' => $form->createView())

        );
    }




}

