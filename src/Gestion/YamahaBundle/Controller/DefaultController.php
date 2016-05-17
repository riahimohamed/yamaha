<?php

namespace Gestion\YamahaBundle\Controller;

use Gestion\YamahaBundle\Entity\User;
use Gestion\YamahaBundle\Form\UserType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    public function indexAction(Request $request)
    {
        $check = 'hide';

        $form =$this->createForm(new UserType());
        $em = $this->getDoctrine()->getManager();

        if ($request->isMethod('POST')) {
            $form->bind($this->get('request'));

            $username = $form->get('username')->getData();
            $password = $form->get('password')->getData();

            $entitie = $em->getRepository('GestionYamahaBundle:User')->checkUser($username, $password);


            if($entitie){
                return $this->redirect($this->generateUrl('employer'));
            }else{
                $check = 'show';
            }
        }

        return $this->render('GestionYamahaBundle:login:login.html.twig',array(
            'form' => $form->createView(),
            'check' => $check,
        ));
    }

    public function registerAction(Request $request){

        $entity  = new User();

        $form =$this->createForm(new UserType());

        if ($request->isMethod('POST')) {
            $form->handleRequest($request);

            if ($form->isValid()) {
                $em = $this->getDoctrine()->getManager();
                $em->persist($entity);
                $em->flush();

                return $this->redirect($this->generateUrl('employer'));
            }
        }

        return $this->render('GestionYamahaBundle:Register:register.html.twig',array(
            'form' => $form->createView(),
        ));
    }
}