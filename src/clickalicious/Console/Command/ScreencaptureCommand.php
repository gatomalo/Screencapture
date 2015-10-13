<?php

namespace clickalicious\Console\Command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;
use Fleshgrinder\Validator\URL;
use Openbuildings\Spiderling\Page;
use Openbuildings\Spiderling\Driver_Phantomjs;

class ScreencaptureCommand extends Command
{
    protected function configure()
    {
        $this
            ->setName('capture:url')
            ->setDescription('Captures a complete website beginning with URL.')
            ->addArgument(
                'url',
                InputArgument::REQUIRED,
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
        // Retrieve URL from arguments
        $url = $input->getArgument('url');

        try {
            $urlValidator = new URL();
            $urlValidator->validate($url);

        } catch (\InvalidArgumentException $exception) {
            $output->writeln(
                sprintf('<error>%s</error>', $exception->getMessage())
            );
        }

        // Starting PhantomJS server
        $output->writeln('Starting PhantomJS server ...');

        $page = new Page(new Driver_Phantomjs());

        // Start Crawling
        $output->writeln(sprintf('Crawling %s ...', $url));

        $page->visit($url);
        $links = $page->all('a[href]');

        foreach ($links as $link) {
            $output->writeln($link->attribute('href'));
        };

        // Done
        $output->writeln('Done.');

        // Start taking screenshots
        $output->writeln(
            'Taking screenshots of http://foo.com ...'
        );

        sleep(2);

        // Done
        $output->writeln('Done.');

        /*
        if ($input->getOption('simulate')) {
            $text = strtoupper($text);
        }
        */
    }
}
