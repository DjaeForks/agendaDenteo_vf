<?php

namespace EvenementBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use EvenementBundle\Entity\RdvType;
use EvenementBundle\Form\RdvTypeType;

/**
 * RdvType controller.
 *
 */
class RdvTypeController extends Controller
{
    /**
     * Lists all RdvType entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $rdvTypes = $em->getRepository('EvenementBundle:RdvType')->findAll();

        return $this->render('rdvtype/index.html.twig', array(
            'rdvTypes' => $rdvTypes,
        ));
    }

    /**
     * Creates a new RdvType entity.
     *
     */
    public function newAction(Request $request)
    {

        $em = $this->getDoctrine()->getManager();
        $rdvTypes = $em->getRepository('EvenementBundle:RdvType')->findAll();

        $rdvType = new RdvType();
        $form = $this->createForm('EvenementBundle\Form\RdvTypeType', $rdvType);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($rdvType);
            $em->flush();

            return $this->redirectToRoute('rdvtype_new');
        }

        return $this->render('EvenementBundle:rdvtype:new.html.twig', array(
            'rdvType' => $rdvType,
            'rdvTypes' => $rdvTypes,
            'form' => $form->createView(),
        ));
    }



    public function deleteAction(RdvType $rdvType)
    {

        $em = $this->getDoctrine()->getManager();
        $em->remove($rdvType);
        $em->flush();

        return $this->redirectToRoute('rdvtype_new');
    }

    /**
     * Displays a form to edit an existing RdvType entity.
     *
     */
    public function editAction(Request $request, RdvType $rdvType)
    {
        $deleteForm = $this->createDeleteForm($rdvType);
        $editForm = $this->createForm('EvenementBundle\Form\RdvTypeType', $rdvType);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($rdvType);
            $em->flush();

            return $this->redirectToRoute('rdvtype_edit', array('id' => $rdvType->getId()));
        }

        return $this->render('rdvtype/edit.html.twig', array(
            'rdvType' => $rdvType,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }


    /**
     * Creates a form to delete a RdvType entity.
     *
     * @param RdvType $rdvType The RdvType entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(RdvType $rdvType)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('rdvtype_delete', array('id' => $rdvType->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
