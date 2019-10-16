<?php

namespace Morrislaptop\VarDumperWithContext;

use Symfony\Component\VarDumper\Cloner\Data;

trait ContextDumper
{
    /**
     * Finds the first file NOT in the /vendor/ directory from the
     * backtrace.
     */
    protected function getCaller()
    {
        foreach (debug_backtrace(DEBUG_BACKTRACE_IGNORE_ARGS) as $trace) {
            if (strpos($trace['file'], '/vendor/') === false ) {
                return $trace;
            }
        }
    }

    public function dump(Data $data, $output = null, array $extraDisplayOptions = array())
    {
        $caller = $this->getCaller();

        if (! $caller) return parent::dump($data, $output);

        $line = $this->getContext($caller['file'], $caller['line']);
        parent::echoLine($line, 0, '');
        parent::dump($data, $output);
    }
}
