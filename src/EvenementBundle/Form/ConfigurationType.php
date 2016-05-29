<?php

namespace EvenementBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ConfigurationType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('dateDeb', 'time',array('widget'=>'single_text'))
            ->add('dateFin', 'time',array('widget'=>'single_text'))
            ->add('creneau' ,'choice' , array('choices' =>  array('10' => '10 Min' , '15' => '15 Min' , '20' => '20 Min' , '25' => '25 Min' ,'30' => '30 Min')))
            ->add('firstDay' ,'choice' , array('choices' =>  array('0' => 'Dimanche' , '1' => 'Lundi' , '2' => 'Mardi' , '3' => 'Mercredi' ,'4' => 'Jeudi' , '5' => 'Vendredi' , '6' => 'Samedi')))
            ->add('weeksNumber')
            ->add('daysSelected' ,'choice' , array('choices' =>array('0' =>'Dimanche' , '1' => 'Lundi', '2' => 'Mardi', '3' => 'Mercredi', '4' => 'Jeudi', '5' => 'Vebdredi', '6' => 'Samedi') , 'multiple' => true , 'required' => false))
            ->add('lang' ,'choice' , array('choices' => array('anglais' => 'Anglais' , 'francais' => 'Francais' , 'arabe' =>'Arabe' )))
        ;
    }
    
    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'EvenementBundle\Entity\Configuration'
        ));
    }
}
