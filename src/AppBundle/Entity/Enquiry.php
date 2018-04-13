<?php

namespace AppBundle\Entity;

use Symfony\Component\Validator\Mapping\ClassMetadata;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\Validator\Constraints\Length;
use Symfony\Component\Validator\Constraints as Assert;
use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;




class Enquiry/* extends BaseUser*/
{
//    public static function loadValidatorMetadata(ClassMetadata $metadata)
//    {
//        $metadata->addPropertyConstraint('name', new NotBlank(array(
//
//        )));
//
//        $metadata->addPropertyConstraint('name', new Length(array(
//            'min' => 2,
//            'minMessage' => "Ваше имя должно состоять из {{ limit }} и более символов",
//        )));
//        /*$metadata->addPropertyConstraint('phone', new Number(array(
//            'message' => 'symblog does not like invalid emails. Give me a real one!'
//        )));*/
//        $metadata->addPropertyConstraint('phone',  new Length(array(
//            'min' => 6,
//        )));
//
//    }

    /**
     * @var $name
     *
     * @Assert\NotBlank(
     *     message = "Заполните поле"
     * )
     * @Assert\Length(
     *     min = 2,
     *     minMessage = "Ваше имя должно состоять из {{ limit }}-х и более символов"
     * )
     */
    protected $name;

    /**
     * @var $phone
     *
     * @Assert\NotBlank(
     *     message = "Заполните поле"
     * )
     */
    protected $phone;

    protected $body;

    /**
     * @return mixed
     *
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * @param mixed $phone
     */
    public function setPhone($phone)
    {
        $this->phone = $phone;
    }

    /**
     * @return mixed
     */
    public function getBody()
    {
        return $this->body;
    }

    /**
     * @param mixed $body
     */
    public function setBody($body)
    {
        $this->body = $body;
    }

}