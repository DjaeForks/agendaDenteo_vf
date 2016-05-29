<?php
/**
 * Created by PhpStorm.
 * User: Adnane
 * Date: 5/24/2016
 * Time: 12:38 PM
 */

namespace EvenementBundle\Service;


use Doctrine\ORM\EntityManager;
use EvenementBundle\Entity\Delimiteur;
use EvenementBundle\Entity\Rdv;
use UsersBundle\Entity\User;

class CalendarService
{
    private $em;
    public function  __construct(EntityManager $em)
    {
        $this->em = $em;
    }


    public function loadUserEvents(User $user)
    {

        $allEvents = array();
        $rdvs = array();
        $delimiteurs = array();

        //Traitement Load Rdv
        $rdvs = $this->loadUserRdv($user);
        //Traitement Load Delimiteurs
        $delimiteurs = $this->loadUserDelimiteur($user);
        //Traitement Load RdvPeriodicité

        //Traitement Load DelimiteurPeriodicite

        return $allEvents = array_merge($rdvs,$delimiteurs);
    }

    public function loadUserRdv(User $user){
        $rdvRepository = $this->em->getRepository('EvenementBundle:Rdv');
        return $rdvRepository->findByUser($user);
    }

    public function loadUserDelimiteur(User $user){
        $delimiteurRepository = $this->em->getRepository('EvenementBundle:Delimiteur');
        return $delimiteurRepository->findByUser($user);
    }

    public function loadUserRdvPeriodicite(User $user){

    }

    public function eventToCalendar($event){
        $aide = array();
        if($event instanceof Rdv ){
            return array_merge($aide, $this->rdvToCalendar($event));
        }else{
            return array_merge($aide, $this->delimiteurToCalendar($event));
        }
        return;
    }

    public function eventsToCalendar(array $events){
        $jasonEvent = array();
        foreach($events as $event){
            if($this->eventToCalendar($event)!= null){
                $jasonEvent[] = $this->eventToCalendar($event);
            }
        }
        return $jasonEvent;
    }

    private function rdvToCalendar(Rdv $rdv){
        if($rdv->getPatient() != null) {
            $patientInfos = '<Strong>Client Info: </Strong><br/>' .
                'Nom: ' . $rdv->getPatient()->getNom() . ' ' . $rdv->getPatient()->getPrenom() . '<br/>';


            return array(
                'id'      => $rdv->getId(),
                'title'   => $rdv->getTitre().' - '.$rdv->getPatient()->getNom(),
                'start'   => $rdv->getDateDebut()->format(\DateTime::ISO8601),
                'end'     => $rdv->getDateFin()->format(\DateTime::ISO8601),

                'description' =>$rdv->getDescription(),
            );

            }else{
            return array(
                'id'      => $rdv->getId(),
                'title'   => $rdv->getTitre(),
                'start'   => $rdv->getDateDebut()->format(\DateTime::ISO8601),
                'end'     => $rdv->getDateFin()->format(\DateTime::ISO8601),

                'description' =>$rdv->getDescription(),
            );
        }

    }

    private function delimiteurToCalendar(Delimiteur $delimiteur){
            return array(
                'id'   => $delimiteur->getId(),
                'title' => $delimiteur->getTitre(),
                'start' => $delimiteur->getDebut()->format(\DateTime::ISO8601),
                'end'   => $delimiteur->getFin()->format(\DateTime::ISO8601),
                'className' => $delimiteur->getClassName(),
                'color'=> '#0a0a0a',
            );
    }
}