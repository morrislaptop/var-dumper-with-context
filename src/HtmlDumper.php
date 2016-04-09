<?php

namespace Morrislaptop\VarDumperWithContext;

use Symfony\Component\VarDumper\Dumper\HtmlDumper as BaseDumper;

class HtmlDumper extends BaseDumper implements DumpContextInterface {

	use ContextDumper;

	public function getContext($file, $line) {
		return "<pre><small>{$file}:{$line}</small></pre>";
	}

}