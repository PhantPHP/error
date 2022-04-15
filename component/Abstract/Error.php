<?php
declare(strict_types=1);

namespace Phant\Error\Abstract;

abstract class Error extends \Exception
{
	function __construct(?string $detail = null)
	{
		if ($detail) {
			$this->message .= ' (' . $detail . ')';
		}
	}
}
