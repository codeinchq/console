<?php
//
// +---------------------------------------------------------------------+
// | CODE INC. SOURCE CODE - CONFIDENTIAL                                |
// +---------------------------------------------------------------------+
// | Copyright (c) 2017 - Code Inc. SAS - All Rights Reserved.           |
// | Visit https://www.codeinc.fr for more information about licensing.  |
// +---------------------------------------------------------------------+
// | NOTICE:  All information contained herein is, and remains the       |
// | property of Code Inc. SAS. The intellectual and technical concepts  |
// | contained herein are proprietary to Code Inc. SAS are protected by  |
// | trade secret or copyright law. Dissemination of this information or |
// | reproduction of this material  is strictly forbidden unless prior   |
// | written permission is obtained from Code Inc. SAS.                  |
// +---------------------------------------------------------------------+
//
// Author:   Joan Fabrégat <joan@codeinc.fr>
// Date:     19/12/2017
// Time:     13:09
// Project:  Console
//
namespace CodeInc\Console\Exceptions;
use CodeInc\Console\CommandLineException;
use Throwable;


/**
 * Class CommandLineRequiredException
 *
 * @package CodeInc\CommandLine\Exceptions
 * @author Joan Fabrégat <joan@codeinc.fr>
 */
class CommandLineRequiredException extends CommandLineException {
	/**
	 * CLIRequiredException constructor.
	 *
	 * @param Throwable|null $previous
	 */
	public function __construct(Throwable $previous = null)
	{
		parent::__construct("This script is only available in command line", $previous);
	}
}