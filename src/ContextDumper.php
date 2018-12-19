<?php

namespace Morrislaptop\VarDumperWithContext;

use Symfony\Component\VarDumper\Cloner\Data;

trait ContextDumper
{
    /**
     * 5 is the magic number by the time is reaches this function.
     *
     * @todo Make this smarter (look for the first file not in the /vendor/ directory?)
     */
    protected function getCaller() {
        return debug_backtrace()[4];
    }

    public function dump(Data $data, $output = null, array $extraDisplayOptions = array())
    {
        $caller = $this->getCaller();
        $line = $this->getContext($caller['file'], $caller['line']);
        parent::echoLine($line, 0, '');
        parent::dump($data, $output);
    }
}
