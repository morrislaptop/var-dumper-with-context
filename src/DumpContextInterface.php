<?php

namespace Morrislaptop\VarDumperWithContext;

interface DumpContextInterface {

	public function getContext($file, $line);

}