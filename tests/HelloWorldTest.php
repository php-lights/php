<?php

namespace Neoncitylights\ExampleLibrary\Tests;

use Neoncitylights\ExampleLibrary\HelloWorld;
use PHPUnit\Framework\Attributes\CoversClass;
use PHPUnit\Framework\TestCase;

#[CoversClass( HelloWorld::class )]
class HelloWorldTest extends TestCase {
	public function testDefault(): void {
		$this->assertSame( 'Hello World', HelloWorld::greet() );
	}

	public function testWithArgument(): void {
		$this->assertSame( 'Hello Bob', HelloWorld::greet( 'Bob' ) );
	}
}
