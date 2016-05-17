<?php

namespace Gestion\YamahaBundle\Controller;

use Gestion\YamahaBundle\Form\RechercheType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Gestion\YamahaBundle\Entity\Produit;
use Gestion\YamahaBundle\Form\ProduitType;

/**
 * Produit controller.
 *
 */
class ProduitController extends Controller
{

    /**
     * Lists all Produit entities.
     *
     */
    public function indexAction(Request $request)
    {
        $form = $this->createForm(new RechercheType());

        $em = $this->getDoctrine()->getManager();

        if ($this->get('request')->getMethod() == 'POST') {
            $form->bind($this->get('request'));

            $entities = $em->getRepository('GestionYamahaBundle:Produit')->recherche($form['recherche']->getData());
        }else {
            $entities = $em->getRepository('GestionYamahaBundle:Produit')->findAll();
        }

        return $this->render('GestionYamahaBundle:Produit:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new Produit entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity  = new Produit();
        $form = $this->createForm(new ProduitType(), $entity);

        if ($request->isMethod('POST')) {

            $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            //return $this->redirect($this->generateUrl('produit_show', array('id' => $entity->getId())));
            return $this->redirect($this->generateUrl('produit'));
        }}

        return $this->render('GestionYamahaBundle:Produit:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Displays a form to create a new Produit entity.
     *
     */
    public function newAction()
    {
        $entity = new Produit();
        $form   = $this->createForm(new ProduitType(), $entity);

        return $this->render('GestionYamahaBundle:Produit:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Produit entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('GestionYamahaBundle:Produit')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Produit entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('GestionYamahaBundle:Produit:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),        ));
    }

    /**
     * Displays a form to edit an existing Produit entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('GestionYamahaBundle:Produit')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Produit entity.');
        }

        $editForm = $this->createForm(new ProduitType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('GestionYamahaBundle:Produit:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Edits an existing Produit entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('GestionYamahaBundle:Produit')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Produit entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createForm(new ProduitType(), $entity);
        $editForm->submit($request);

        if ($editForm->isValid()) {
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('produit'));
        }
        return $this->render('GestionYamahaBundle:Produit:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a Produit entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->submit($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('GestionYamahaBundle:Produit')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Produit entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('produit'));
    }

    /**
     * Creates a form to delete a Produit entity by id.
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

        return $this->render('GestionYamahaBundle:Produit:recherche.html.twig', array(
            'form' => $form->createView(),
        ));
    }
}
