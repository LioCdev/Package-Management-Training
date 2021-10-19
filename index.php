<?php

require 'vendor/autoload.php';

use CowSay\Cow;

$bessie = new Cow('Hello, Wilder !');
$bessie->setEyes('oO');
$bessie->setTongue('U');
$bessie->setPoop('@@@');

echo $bessie.PHP_EOL;