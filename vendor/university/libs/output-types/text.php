<?php
use Symfony\Component\Console\Style\SymfonyStyle;

$symfonyStyle = new SymfonyStyle($input, $output);
$symfonyStyle->success($console_message);
