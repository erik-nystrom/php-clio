<?php

require_once '../vendor/autoload.php';

use PHPClio\Console as Console;

Console::out();
Console::out("###################################");
Console::out("########## PHP CLIO TEST ##########");
Console::out("###################################");
Console::out();
$in = Console::in("Enter your name");
Console::out(sprintf("Hello, %s", $in));
Console::out();
$in = Console::in("Enter a valid option", ['1','2','3']);
Console::out(sprintf("You selected: %s", $in));
Console::out();
Console::out('Done!');

?>