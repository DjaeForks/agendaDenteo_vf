<?php

namespace EvenementBundle\Controller;

use EvenementBundle\Entity\Delimiteur;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use DateTime;
use EvenementBundle\Entity\Rdv;
use EvenementBundle\Form\RdvType;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpKernel\Exception\AccessDeniedHttpException;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Component\HttpFoundation\Response;
use UsersBundle\Entity\User;
use Symfony\Component\Security\Core\SecurityContext;
use FOS\UserBundle\FOSUserEvents;
use FOS\UserBundle\Event\GetResponseUserEvent;
use FOS\UserBundle\Model\UserInterface;

/**
 * Rdv controller.
 *
 */
class RdvController extends Controller
{


    /**
     * Creates a new Rdv entity.
     *
     */
    public function newRdvAction(Request $request)
    {

        $rdv = new Rdv();
        $form = $this->createForm('EvenementBundle\Form\RdvType', $rdv);
        $form->handleRequest($request);
        $em = $this->getDoctrine()->getManager();
        if ($form->isSubmitted() && $form->isValid()) {
            $em->persist($rdv);
            $em->flush();

        }


    }


    public function chargeEventsAction()
    {

        $em = $this->getDoctrine()->getManager();
        $connectedUser = $this->getUser();
        $events = $this->get('calendar')->loadUserEvents($connectedUser);
        $jasonEvents = $this->get('calendar')->eventsToCalendar($events);
        return new JsonResponse($jasonEvents);
    }

    public function allRdvsAction(Request $request)
    {

        $rdv = new Rdv();
        $form = $this->createForm('EvenementBundle\Form\RdvType', $rdv);
        $form->handleRequest($request);
        $em = $this->getDoctrine()->getManager();

        $connectedUser = $this->getUser();
        $rdv->setUser($connectedUser);
        $idConfiguration = $connectedUser->getConfiguration();
        $myConfiguration = $em->getRepository('EvenementBundle:Configuration')->find($idConfiguration);

        $editForm = $this->createForm('EvenementBundle\Form\RdvType', $rdv);


        $rdvTypes = $em->getRepository('EvenementBundle:RdvType')->findAll();



        if ($form->isSubmitted() && $form->isValid()) {

            $rdvType = $em->getRepository('EvenementBundle:RdvType')->find($request->request->get('rdvTtpee'));
            $rdv->setCouleur($rdvType->getCouleur());
            $em->persist($rdv);
            $em->flush();
        }
        return $this->render('EvenementBundle:Default:Agenda.html.twig', array(
            'rdvTypes' => $rdvTypes,
            'form' => $form->createView(),
            'editForm' => $editForm->createView(),
            'myConfiguration'=>$myConfiguration,
        ));

    }

    public function dropAction($id, $start, $startH, $end, $endH)
    {
        $em = $this->getDoctrine()->getManager();
        $rdv = $em->getRepository('EvenementBundle:Rdv')->find($id);
        $rdv->setDateDebut(new DateTime($start . ' ' . $startH));
        $rdv->setDateFin(new DateTime($end . ' ' . $endH));
        $em->flush();
        return new Response('OK');
    }


    public function resizeAction($id, $end, $endH)
    {
        $em = $this->getDoctrine()->getManager();
        $rdv = $em->getRepository('EvenementBundle:Rdv')->find($id);
        $rdv->setDateFin(new DateTime($end . ' ' . $endH));
        $em->flush();
        return new Response('OK');
    }



    public function editerAction($id, Request $request)
    {

        $em = $this->getDoctrine()->getManager();
        $rdv = $em->getRepository('EvenementBundle:Rdv')->find($id);

        //$rdv->setDateDebut(new DateTime($form['m_rdv[dateDebut]']->getData()));
        // $rdv->setDateFin(new DateTime($form['m_rdv[dateFin]']->getData()));

        $editForm = $this->createForm('EvenementBundle\Form\RdvType', $rdv);
        $editForm->handleRequest($request);
        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $rdv->setTitre($editForm->get('m_rdv[titre]')->getData());
            $rdv->setDescription($editForm->get('m_rdv[description]')->getData());
            $em->flush();

            return new Response('OK');

        }

        //$rdv->setTitre($request->request->get('titreEdit'));
        //$rdv->setDescription($request->request->get('descriptionEdit'));
        // $em->persist($rdv);
        //$em->flush();

        return new Response('OK');
    }

    public function deletedAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $rdv = $em->getRepository('EvenementBundle:Rdv')->find($id);
        $em->remove($rdv);
        $em->flush();
        return new Response('OK');
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
            ->getForm();
    }

    /**
     * Creates a form to delete a Rdv entity.
     *
     * @param Rdv $rdv The Rdv entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createEdiForm(Rdv $rdv)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('rdv_delete', array('id' => $rdv->getId())))
            ->getForm();
    }
}
