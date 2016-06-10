<?php

/*
 * This file is part of the M-Agenda Project.
 *
 * (c) Multi Information Technology <http://www.mit.co.ma>
 *
 * This source file is subject to the license that is bundled
 * with this source code in the file LICENSE.
 */

namespace command\commandBundle\rappelCommands;

/*
 * Description of RDVCommand
 *
 * @author ahmed
 */

use EvenementBundle\Entity\Rdv;
use DateTime;
use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class SmsRappelCommand extends ContainerAwareCommand
{
    protected function configure()
    {
        $this->setName('rappelSms')
                ->setDescription('hamid test cron job ')
        ;
    }

    /**
     * @param InputInterface  $input
     * @param OutputInterface $output
     */
    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $output->writeln('succes...');

    }


}
