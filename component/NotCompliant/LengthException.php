<?php

declare(strict_types=1);

namespace Phant\Error\NotCompliant;

use Phant\Error\NotCompliant;

/**
 * This error is thrown when an argument does not comply with the expected length
 * e.g. a password that is too short.
 */
class LengthException extends NotCompliant {}
