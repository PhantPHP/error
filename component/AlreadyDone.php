<?php
declare(strict_types=1);

namespace Phant\Error;

/**
 * This error is thrown when an action has already been completed
 * e.g. trying to complete a task that is already done.
 */
class AlreadyDone extends \LogicException {}
