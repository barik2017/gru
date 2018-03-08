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
     * @Route("/all", name = "all")
     */

    public function AllAction()
    {
        return $this->render('micro/all.html.twig');
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
        //$form-> add('submit', SubmitType::class);

        if ($request->isMethod($request::METHOD_POST))
        {
            $form->handleRequest($request);

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

            if($mailer->send($message)){
                return $this->redirect('contact');

            }

        }

        return $this->render('micro/contact.html.twig', array(
            'form' => $form->createView()
        ));
    }

    /**
     * @Route("/reviews", name="reviews")
     *
     */

    public function ReviewsAction(Request $request)
    {
        $comment = $this->getDoctrine()
            ->getRepository(Comment::class)
            ->findAll();
        // var_dump($comment);die;
        $enquiry = new Comment();
        $form = $this->CreateForm(CommentType::class, $enquiry);

        $cloned = clone $form;

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
                'comment' => $comment,
                 'form' => $form->createView())
        );
    }




}

