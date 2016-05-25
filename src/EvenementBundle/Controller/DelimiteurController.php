<?php

namespace EvenementBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use DateTime;
use EvenementBundle\Entity\Delimiteur;
use EvenementBundle\Form\DelimiteurType;

/**
 * Delimiteur controller.
 *
 */
class DelimiteurController extends Controller
{
    /**
     * Lists all Delimiteur entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $delimiteurs = $em->getRepository('EvenementBundle:Delimiteur')->findAll();

        $serializer = $this->get('jms_serializer');
        $data = $serializer->serialize($delimiteurs, 'json');

        return $data;
    }

    /**
     * Creates a new Delimiteur entity.
     *
     */
    public function newAction(Request $request)
    {
        $delimiteur = new Delimiteur();
        $form = $this->createForm('EvenementBundle\Form\DelimiteurType', $delimiteur);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($delimiteur);
            $em->flush();

            return $this->redirectToRoute('delimiteur_show', array('id' => $delimiteur->getId()));
        }

        return $this->render('delimiteur/new.html.twig', array(
            'delimiteur' => $delimiteur,
            'form' => $form->createView(),
        ));
    }

    public function addDelAction($start,$startH,$end,$endH){
        $delimiteur = new Delimiteur();
        $delimiteur->setDebut(new DateTime($start.' '.$startH));
        $delimiteur->setFin(new DateTime($end.' '.$endH));
        $delimiteur->setBlockage(0);
        $em = $this->getDoctrine()->getManager();
        $em->persist($delimiteur);
        $em->flush();
        return $this->render('delimiteur/new.html.twig', array(
            'delimiteur' => $delimiteur,

        ));

    }

    /**
     * Finds and displays a Delimiteur entity.
     *
     */
    public function showAction(Delimiteur $delimiteur)
    {
        $deleteForm = $this->createDeleteForm($delimiteur);

        return $this->render('delimiteur/show.html.twig', array(
            'delimiteur' => $delimiteur,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Delimiteur entity.
     *
     */
    public function editAction(Request $request, Delimiteur $delimiteur)
    {
        $deleteForm = $this->createDeleteForm($delimiteur);
        $editForm = $this->createForm('EvenementBundle\Form\DelimiteurType', $delimiteur);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($delimiteur);
            $em->flush();

            return $this->redirectToRoute('delimiteur_edit', array('id' => $delimiteur->getId()));
        }

        return $this->render('delimiteur/edit.html.twig', array(
            'delimiteur' => $delimiteur,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Delimiteur entity.
     *
     */
    public function deleteAction(Request $request, Delimiteur $delimiteur)
    {
        $form = $this->createDeleteForm($delimiteur);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($delimiteur);
            $em->flush();
        }

        return $this->redirectToRoute('delimiteur_index');
    }

    /**
     * Creates a form to delete a Delimiteur entity.
     *
     * @param Delimiteur $delimiteur The Delimiteur entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Delimiteur $delimiteur)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('delimiteur_delete', array('id' => $delimiteur->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
