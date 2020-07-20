<?php
namespace App\Commands;


use Jan\Component\Console\Command\Command;
use Jan\Component\Console\Input\InputInterface;
use Jan\Component\Console\Output\OutputInterface;



/**
 * Class MakeEntityCommand
 * @package App\Commands
 *
 * <Generated By JanFramework>
*/
class MakeEntityCommand extends Command
{

    /** @var string  */
    protected $name = 'make:entity';


    /**
     * @param InputInterface $input
     * @param OutputInterface $output
     * @return mixed|void
    */
    public function execute(InputInterface $input, OutputInterface $output)
    {
           // put some logic here
           $output->write('Excecution command make:entity');
    }
}