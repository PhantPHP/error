<?php
declare(strict_types=1);

namespace Phant\Error\Abstract;

abstract class Error extends \Exception
{
	function __construct(?string $message = null)
	{
		if ($message) {
			$this->message = $message;
		}
	}
}
