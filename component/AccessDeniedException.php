<?php

declare(strict_types=1);

namespace Phant\Error;

/**
 * This error is thrown when an action is attempted without proper access rights
 * e.g. trying to access a restricted resource without the necessary permissions.
 */
class AccessDeniedException extends \RuntimeException {}
