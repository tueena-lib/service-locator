<?php

/**
 * Part of the tueena lib
 *
 * @license http://www.opensource.org/licenses/mit-license.php MIT License
 * @link http://tueena.org/
 * @author Bastian Fenske <bastian.fenske@tueena.org>
 * @file
 */

declare(strict_types=1);

namespace tueenaLib\dependencyInjection\stubs;

function injectionTarget(IServiceA $serviceA, IServiceB $serviceB): array
{
	return array_merge(func_get_args(), ['something added by the function']);
}
