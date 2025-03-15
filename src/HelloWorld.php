<?php

namespace Neoncitylights\ExampleLibrary;

class HelloWorld {
	public static function greet( string $s = "World" ): string {
		return "Hello {$s}";
	}
}
