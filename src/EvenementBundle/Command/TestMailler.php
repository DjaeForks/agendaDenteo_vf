<?php
namespace EvenementBundle\Command;

use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;
use Swift_Message;



class TestMailler extends ContainerAwareCommand
{
    protected function configure()
    {
        $this
            ->setName('testMailler')
            ->setDescription('my first test Mailer');
        /*->addArgument(
            'name',
            InputArgument::OPTIONAL,
            'Who do you want to greet?'
        )
        ->addOption(
            'yell',
            null,
            InputOption::VALUE_NONE,
            'If set, the task will yell in uppercase letters'
        )*/

    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {

        $msg ='<html> <h1> this is my first test with the Mailer Bundle :) , bon reception</h1> </html>';

        $output->writeln('sending...');
        $message = \Swift_Message::newInstance()
            ->setSubject('Hello Adnane your Friend Hamid is rendring sms/Mail hhh')
            ->setFrom('lidrissihamid@gmail.com')
            ->setTo('zaher1adnane@gmail.com')
            ->setBody($msg ,'text/html')
        ;
        $this->getContainer()->get('mailer')->send($message);
        $output->writeln('succes send ');

    }
}