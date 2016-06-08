<?php

namespace EvenementBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use DateTime;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Intl\DateFormatter\DateFormat;
use PatientBundle\Entity\Patient;
use Swift_Message;


/**
 * Configuration controller.
 *
 */
class AcueilController extends Controller
{

    public function dashboordAction()
    {

        $em  = $this->getDoctrine()->getManager();

        $query = $em->createQuery("SELECT r FROM EvenementBundle:Rdv r WHERE DATE(r.dateDebut) = :date");
        $query->setParameters(array('date' => date("y-m-d")));

        $rdvs =  $query->getResult();

        var_dump(rdvs);
        die();

        $patients = $em->getRepository('PatientBundle:Patient')->findAll();

        return $this->render('EvenementBundle:Default:dashboord.html.twig', array(
            'patients' => $patients
        ));
    }


    public function sendMailToPatientAction($mailPatient)
    {

        $msg = ' i want just tell you that there is something wrong , excuse us for desturbiing , sanMecrosysteme  ';
        $message = Swift_Message::newInstance()
            ->setSubject('Denteo')
            ->setFrom('contact.magenda@gmail.com')
            ->setTo($mailPatient)
            ->setBody($msg, 'text/html');
        $this->get('mailer')->send($message);

        return new Response('yeees');
    }


    public function sendSmsToPatientAction()
    {
        $msg = ' salut hamid ca marche tres bien  pour les Sms ';
        $twilio = $this->get('twilio.api');
        $message = $twilio->account->messages->sendMessage(
            '+12056492686', '+122641676176', $msg
        );

        return new Response('done');
    }
}
