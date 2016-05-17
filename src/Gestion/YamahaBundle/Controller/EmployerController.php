<?php

namespace Gestion\YamahaBundle\Controller;

use Gestion\YamahaBundle\Form\RechercheType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Gestion\YamahaBundle\Entity\Employer;
use Gestion\YamahaBundle\Form\EmployerType;

/**
 * Employer controller.
 *
 */
class EmployerController extends Controller
{

    /**
     * Lists all Employer entities.
     *
     */
    public function indexAction()
    {
        $form = $this->createForm(new RechercheType());

        $em = $this->getDoctrine()->getManager();

        if ($this->get('request')->getMethod() == 'POST') {
            $form->bind($this->get('request'));

            $entities = $em->getRepository('GestionYamahaBundle:Employer')->recherche($form['recherche']->getData());
        }else{
            $entities = $em->getRepository('GestionYamahaBundle:Employer')->findAll();
        }


        return $this->render('GestionYamahaBundle:Employer:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    public function PdoAction(){

    }

    /**
     * Creates a new Employer entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity  = new Employer();
        $form = $this->createForm(new EmployerType(), $entity);

        if ($request->isMethod('POST')) {
            $form->handleRequest($request);

            if ($form->isValid()) {
                $em = $this->getDoctrine()->getManager();
                $em->persist($entity);
                $em->flush();

                return $this->redirect($this->generateUrl('employer'));
            }
        }

        return $this->render('GestionYamahaBundle:Employer:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Displays a form to create a new Employer entity.
     *
     */
    public function newAction()
    {
        $entity = new Employer();
        $form   = $this->createForm(new EmployerType(), $entity);

        return $this->render('GestionYamahaBundle:Employer:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Employer entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('GestionYamahaBundle:Employer')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Employer entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('GestionYamahaBundle:Employer:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),        ));
    }

    /**
     * Displays a form to edit an existing Employer entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('GestionYamahaBundle:Employer')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Employer entity.');
        }

        $editForm = $this->createForm(new EmployerType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('GestionYamahaBundle:Employer:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Edits an existing Employer entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('GestionYamahaBundle:Employer')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Employer entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createForm(new EmployerType(), $entity);
        $editForm->submit($request);

        if ($editForm->isValid()) {
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('employer'));
        }

        return $this->render('GestionYamahaBundle:Employer:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a Employer entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->submit($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('GestionYamahaBundle:Employer')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Employer entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('employer'));
    }

    /**
     * Creates a form to delete a Employer entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder(array('id' => $id))
            ->add('id', 'hidden')
            ->getForm()
        ;
    }

    public function rechercheAction(){

        $form = $this->createForm(new RechercheType());

        return $this->render('GestionYamahaBundle:Employer:recherche.html.twig', array(
            'form' => $form->createView(),
        ));
    }
}
