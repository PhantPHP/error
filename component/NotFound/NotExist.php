<?php

declare(strict_types=1);

namespace Phant\Error\NotFound;

use Phant\Error\NotFound;

/**
 * This error is thrown when a requested resource does not exist
 * e.g. trying to access a user that does not exist.
 */
class NotExist extends NotFound {}
