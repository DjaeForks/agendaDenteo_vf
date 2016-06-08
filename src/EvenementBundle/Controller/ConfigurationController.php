<?php

namespace EvenementBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use EvenementBundle\Entity\Configuration;
use EvenementBundle\Form\ConfigurationType;

/**
 * Configuration controller.
 *
 */
class ConfigurationController extends Controller
{
    /**
     * Lists all Configuration entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $configurations = $em->getRepository('EvenementBundle:Configuration')->findAll();

        return $this->render('EvenementBundle:configuration:dashboord.html.twig', array(
            'configurations' => $configurations,
        ));
    }

    /**
     * Creates a new Configuration entity.
     *
     */
    public function newAction(Request $request)
    {
        $configuration = new Configuration();
        $form = $this->createForm('EvenementBundle\Form\ConfigurationType', $configuration);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($configuration);
            $em->flush();

            //return $this->redirectToRoute('configuration_show', array('id' => $configuration->getId()));
        }

        return $this->render('EvenementBundle:configuration:new.html.twig', array(
            'configuration' => $configuration,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Configuration entity.
     *
     */
    public function showAction(Configuration $configuration)
    {
        $deleteForm = $this->createDeleteForm($configuration);

        return $this->render('configuration/show.html.twig', array(
            'configuration' => $configuration,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Configuration entity.
     *
     */
    public function editAction(Request $request, Configuration $configuration)
    {
        //$deleteForm = $this->createDeleteForm($configuration);
        $editForm = $this->createForm('EvenementBundle\Form\ConfigurationType', $configuration);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($configuration);
            $em->flush();

           return $this->redirectToRoute('allRdvs');
        }

        return $this->render('EvenementBundle:configuration:new.html.twig', array(
            'configuration' => $configuration,
            'form' => $editForm->createView(),
        ));
    }

    /**
     * Deletes a Configuration entity.
     *
     */
    public function deleteAction(Request $request, Configuration $configuration)
    {
        $form = $this->createDeleteForm($configuration);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($configuration);
            $em->flush();
        }

        return $this->redirectToRoute('configuration_index');
    }

    /**
     * Creates a form to delete a Configuration entity.
     *
     * @param Configuration $configuration The Configuration entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Configuration $configuration)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('configuration_delete', array('id' => $configuration->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
