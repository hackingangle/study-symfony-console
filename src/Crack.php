<?php namespace Hackingangle;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class Crack extends Command
{
    public function configure()
    {
        $this->setName("ready")
            ->addArgument("host", InputArgument::OPTIONAL, '嗅探主机', 'baidu.com')
            ->setDescription("嗅探程序");
    }

    public function execute(InputInterface $input, OutputInterface $output)
    {
        $host = $input->getArgument('host');
        $output->writeln("嗅探主机:{$host}");
    }
}
