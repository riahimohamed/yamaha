<?php

namespace Gestion\YamahaBundle\Controller;

use Gestion\YamahaBundle\Form\RechercheType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Gestion\YamahaBundle\Entity\Stock;
use Gestion\YamahaBundle\Form\StockType;

/**
 * Stock controller.
 *
 */
class StockController extends Controller
{

    /**
     * Lists all Stock entities.
     *
     */
    public function indexAction()
    {
        $form = $this->createForm(new RechercheType());

        $em = $this->getDoctrine()->getManager();

        if ($this->get('request')->getMethod() == 'POST') {
            $form->bind($this->get('request'));

            $entities = $em->getRepository('GestionYamahaBundle:Stock')->recherche($form['recherche']->getData());
        }else{
            $entities = $em->getRepository('GestionYamahaBundle:Stock')->findAll();
        }

        return $this->render('GestionYamahaBundle:Stock:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new Stock entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity  = new Stock();
        $form = $this->createForm(new StockType(), $entity);

        if ($request->isMethod('POST')) {
            $form->handleRequest($request);

            if ($form->isValid()) {
                $em = $this->getDoctrine()->getManager();
                $em->persist($entity);
                $em->flush();

                return $this->redirect($this->generateUrl('stock'));
            }
        }

        return $this->render('GestionYamahaBundle:Stock:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Displays a form to create a new Stock entity.
     *
     */
    public function newAction()
    {
        $entity = new Stock();
        $form   = $this->createForm(new StockType(), $entity);

        return $this->render('GestionYamahaBundle:Stock:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Stock entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('GestionYamahaBundle:Stock')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Stock entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('GestionYamahaBundle:Stock:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),        ));
    }

    /**
     * Displays a form to edit an existing Stock entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('GestionYamahaBundle:Stock')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Stock entity.');
        }

        $editForm = $this->createForm(new StockType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('GestionYamahaBundle:Stock:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Edits an existing Stock entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('GestionYamahaBundle:Stock')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Stock entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createForm(new StockType(), $entity);
        $editForm->submit($request);

        if ($editForm->isValid()) {
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('stock'));
        }

        return $this->render('GestionYamahaBundle:Stock:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a Stock entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->submit($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('GestionYamahaBundle:Stock')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Stock entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('stock'));
    }

    /**
     * Creates a form to delete a Stock entity by id.
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

        return $this->render('GestionYamahaBundle:Stock:recherche.html.twig', array(
            'form' => $form->createView(),
        ));
    }
}
