<?php
declare(strict_types=1);

namespace Phant\Error;

/**
 * This error is thrown when an attempt is made to create a resource that already exists
 * e.g. trying to register a user with an email that is already taken.
 */
class AlreadyExists extends \LogicException {}
