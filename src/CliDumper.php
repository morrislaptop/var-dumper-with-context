<?php

namespace Morrislaptop\VarDumperWithContext;

use Symfony\Component\VarDumper\Dumper\CliDumper as BaseDumper;
use Symfony\Component\VarDumper\Cloner\Data;

class CliDumper extends BaseDumper implements ContextDumper {

	use GetLineNumber;

	public function getContext($file, $line) {
		return "{$file}:{$line}";
	}

}