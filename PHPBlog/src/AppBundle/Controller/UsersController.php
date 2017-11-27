<?php

namespace AppBundle\Controller;

use AppBundle\Entity\User;
use AppBundle\Form\UserType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class UsersController extends Controller
{

    public function indexAction($name)
    {
        return $this->render('', array('name' => $name));
    }

    /**
     * @Route("register", name="user_register")
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function registerAction(Request $request){
        $user = new User();
        $form = $this->createForm(UserType::class,$user);
        $form ->handleRequest($request);
        if($form->isSubmitted()){
            $password = $this->get('security.password_encoder')
                ->encodePassword($user,$user->getPassword());

            $user->setPassword($password);
            $em = $this->getDoctrine()->getManager();
            $em ->persist($user);
            $em->flush();
            return $this->redirectToRoute('security_login');
        }
        return $this->render("default/register.html.twig");
    }
}
