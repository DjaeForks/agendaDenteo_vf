<?php

namespace EvenementBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use EvenementBundle\Entity\Rdv;
use EvenementBundle\Form\RdvType;

/**
 * Rdv controller.
 *
 */
class RdvController extends Controller
{
    /**
     * Lists all Rdv entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $rdvs = $em->getRepository('EvenementBundle:Rdv')->findAll();

        return $this->render('rdv/index.html.twig', array(
            'rdvs' => $rdvs,
        ));
    }

    /**
     * Creates a new Rdv entity.
     *
     */
    public function newAction(Request $request)
    {
        $rdv = new Rdv();
        $form = $this->createForm('EvenementBundle\Form\MRdvType', $rdv);
        $form->handleRequest($request);
        $em = $this->getDoctrine()->getManager();
        $entitys = $em->getRepository('EvenementBundle:Rdv')->findAll();
        if ($form->isSubmitted() && $form->isValid()) {

            $em->persist($rdv);
            $em->flush();

            return $this->redirectToRoute('EvenementBundle:Default:Agenda.html.twig', array(
                'id' => $rdv->getId(),
                'entitys'=>$entitys,
                'form' => $form->createView(),
                ));
        }

        return $this->render('EvenementBundle:Default:Agenda.html.twig', array(
            'rdv' => $rdv,
            'entitys'=>$entitys,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Rdv entity.
     *
     */
    public function showAction(Rdv $rdv)
    {
        $deleteForm = $this->createDeleteForm($rdv);

        return $this->render('rdv/show.html.twig', array(
            'rdv' => $rdv,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Rdv entity.
     *
     */
    public function editAction(Request $request, Rdv $rdv)
    {
        $deleteForm = $this->createDeleteForm($rdv);
        $editForm = $this->createForm('EvenementBundle\Form\RdvType', $rdv);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($rdv);
            $em->flush();

            return $this->redirectToRoute('rdv_edit', array('id' => $rdv->getId()));
        }

        return $this->render('rdv/edit.html.twig', array(
            'rdv' => $rdv,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Rdv entity.
     *
     */
    public function deleteAction(Request $request, Rdv $rdv)
    {
        $form = $this->createDeleteForm($rdv);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($rdv);
            $em->flush();
        }

        return $this->redirectToRoute('rdv_index');
    }

    /**
     * Creates a form to delete a Rdv entity.
     *
     * @param Rdv $rdv The Rdv entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Rdv $rdv)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('rdv_delete', array('id' => $rdv->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
