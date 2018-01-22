<?php

namespace Morrislaptop\VarDumperWithContext;

use Symfony\Component\VarDumper\Cloner\Data;

trait ContextDumper
{
	protected function getCaller() {
		return debug_backtrace()[6];
	}

	protected function getLineNumber() {
		$caller = $this->getCaller();
		return $caller['line'];
	}

	protected function getFile() {
		$caller = $this->getCaller();
		$file = $caller['file'];
		$root = realpath(__DIR__ . '/../../../../');
		return str_replace($root, '', $file);
	}

	public function dump(Data $data, $output = null, array $extraDisplayOptions = array())
    {
    	$line = $this->getLineNumber();
    	$file = $this->getFile();
    	$line = $this->getContext($file, $line);
    	parent::echoLine($line, 0, '');
        parent::dump($data, $output);
    }
}
