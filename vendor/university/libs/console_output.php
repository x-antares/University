<?php

use Symfony\Component\Console\Output\ConsoleOutput;
use Symfony\Component\Console\Input\ArgvInput;

$output = new ConsoleOutput();
$input = new ArgvInput();

require 'output-types/' . $console_output_type .'.php';
