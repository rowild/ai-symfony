<?php

/**
 * @license LGPLv3, http://opensource.org/licenses/LGPL-3.0
 * @copyright Aimeos (aimeos.org), 2015-2020
 */


namespace Aimeos\MW\View\Helper\Response;


class Symfony2Test extends \PHPUnit\Framework\TestCase
{
	private $object;
	private $mock;


	protected function setUp() : void
	{
		$view = new \Aimeos\MW\View\Standard();
		$this->object = new \Aimeos\MW\View\Helper\Response\Symfony2( $view );
	}


	public function testTransform()
	{
		$this->assertInstanceOf( '\Aimeos\MW\View\Helper\Response\Symfony2', $this->object->transform() );
	}


	public function testCreateStream()
	{
		$this->assertInstanceOf( \Psr\Http\Message\StreamInterface::class, $this->object->createStream( __FILE__ ) );
	}
}
