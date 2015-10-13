<?php

namespace clickalicious\Console\Command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;

class ScreencaptureCommand extends Command
{
    protected function configure()
    {
        $this
            ->setName('capture:url')
            ->setDescription('Captures a complete website beginning with URL.')
            ->addArgument(
                'url',
                InputArgument::OPTIONAL,
                'Which site do you want to capture?'
            )
            ->addOption(
                'simulate',
                null,
                InputOption::VALUE_NONE,
                'If set, the app will crawl the website and echo a list of found URLs without capturing them.'
            )
        ;
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $url    = $input->getArgument('url');

        if ($url) {
            $text = 'Hello '.$url;
        } else {
            $text = 'Hello';
        }

        if ($input->getOption('simulate')) {
            $text = strtoupper($text);
        }

        $output->writeln($text);
    }
}
