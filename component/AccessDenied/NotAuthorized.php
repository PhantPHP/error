<?php

declare(strict_types=1);

namespace Phant\Error\AccessDenied;

use Phant\Error\AccessDeniedException;

/**
 * This error is thrown when an action is attempted without proper authorization
 * e.g. trying to access a restricted resource without the necessary permissions.
 */
class NotAuthorized extends AccessDeniedException {}
