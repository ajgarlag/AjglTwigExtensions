<?php
/**
 * This file is part of the AJ General Libraries
 *
 * Copyright (C) 2010-2013 Antonio J. García Lagar <aj@garcialagar.es>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

/**
 * @author Antonio J. García Lagar <aj@garcialagar.es>
 */
class Ajgl_Twig_Extension_Tests_BreakpointExtensionTest extends PHPUnit_Framework_TestCase
{
    /**
     * @var Ajgl_Twig_Extension_BreakpointExtension
     */
    protected $extension;

    protected function setUp()
    {
        $this->extension = new Ajgl_Twig_Extension_BreakpointExtension();
    }

    public function testGetName()
    {
        $this->assertSame('breakpoint', $this->extension->getName());
    }

    public function testGetFunctions()
    {
        $functions = $this->extension->getFunctions();
        $this->assertCount(1, $functions);
        $function = reset($functions);
        $this->assertInstanceOf('Twig_SimpleFunction', $function);
        $callable = $function->getCallable();
        $this->assertTrue(is_array($callable));
        $this->assertCount(2, $callable);
        $this->assertSame($this->extension, $callable[0]);
        $this->assertSame('setBreakpoint', $callable[1]);
    }
}
