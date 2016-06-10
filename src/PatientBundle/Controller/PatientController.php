<?php

namespace PatientBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use PatientBundle\Entity\Patient;
use PatientBundle\Form\PatientType;

/**
 * Patient controller.
 *
 */
class PatientController extends Controller
{
    /**
     * Lists all Patient entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $patients = $em->getRepository('PatientBundle:Patient')->findAll();

        return $this->render('patient/dashboord.html.twig', array(
            'patients' => $patients,
        ));
    }

    /**
     * Creates a new Patient entity.
     *
     */
    public function newAction(Request $request)
    {
        $patient = new Patient();
        $form = $this->createForm('PatientBundle\Form\PatientType', $patient);
        $form->handleRequest($request);
        $em = $this->getDoctrine()->getManager();


        $connectedUser = $this->getUser();
        $patient->setUser($connectedUser);

        $patients = $em->getRepository('PatientBundle:Patient')->findAll();


        if ($form->isSubmitted() && $form->isValid()) {

            $em->persist($patient);
            $em->flush();

            return $this->redirectToRoute('patient_new');
        }

        return $this->render('PatientBundle:patient:new.html.twig', array(
            'patients' => $patients,
            'patient' => $patient,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Patient entity.
     *
     */
    public function showAction(Patient $patient)
    {
        $deleteForm = $this->createDeleteForm($patient);

        return $this->render('patient/show.html.twig', array(
            'patient' => $patient,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Patient entity.
     *
     */
    public function editAction(Request $request, Patient $patient)
    {
        $deleteForm = $this->createDeleteForm($patient);
        $editForm = $this->createForm('PatientBundle\Form\PatientType', $patient);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($patient);
            $em->flush();

            return $this->redirectToRoute('patient_edit', array('id' => $patient->getId()));
        }

        return $this->render('patient/edit.html.twig', array(
            'patient' => $patient,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Patient entity.
     *
     */
    public function deleteAction(Request $request, Patient $patient)
    {
        $form = $this->createDeleteForm($patient);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($patient);
            $em->flush();
        }

        return $this->redirectToRoute('patient_index');
    }

    /**
     * Creates a form to delete a Patient entity.
     *
     * @param Patient $patient The Patient entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Patient $patient)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('patient_delete', array('id' => $patient->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
