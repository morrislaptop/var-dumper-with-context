<?php

namespace Morrislaptop\VarDumperWithContext;

use Symfony\Component\VarDumper\VarDumper;
use Symfony\Component\VarDumper\Cloner\VarCloner;

VarDumper::setHandler(function ($var) {
    $cloner = new VarCloner();
    $dumper = 'cli' === PHP_SAPI ? new CliDumper() : new HtmlDumper();

    $dumper->dump($cloner->cloneVar($var));
});