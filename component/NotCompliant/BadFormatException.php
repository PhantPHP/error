<?php

declare(strict_types=1);

namespace Phant\Error\NotCompliant;

use Phant\Error\NotCompliant;

/**
 * This error is thrown when an argument does not comply with the expected format
 * e.g. an email that is not valid.
 */
class BadFormatException extends NotCompliant {}
