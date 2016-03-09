<?php

/*
 * AJGL Twig Extensions Component Library
 *
 * Copyright (C) Antonio J. García Lagar <aj@garcialagar.es>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Ajgl\Twig\Extension;

/**
 * @author Antonio J. García Lagar <aj@garcialagar.es>
 */
class BreakpointExtension extends \Twig_Extension
{
    public function getName()
    {
        return 'breakpoint';
    }

    public function getFunctions()
    {
        return array(
            new \Twig_SimpleFunction('breakpoint', array($this, 'setBreakpoint')),
        );
    }

    /**
     * If XDebug is detected, makes the debugger break.
     */
    public function setBreakpoint()
    {
        if (function_exists('xdebug_break')) {
            xdebug_break();
        }
    }
}
