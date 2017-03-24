<?php

namespace Psr\Log;

/**
<<<<<<< HEAD
 * This Logger can be used to avoid conditional log calls.
=======
 * This Logger can be used to avoid conditional log calls
>>>>>>> c81b45ba9a8b61239547a84a8e02a8dc1003e74a
 *
 * Logging should always be optional, and if no logger is provided to your
 * library creating a NullLogger instance to have something to throw logs at
 * is a good way to avoid littering your code with `if ($this->logger) { }`
 * blocks.
 */
class NullLogger extends AbstractLogger
{
    /**
     * Logs with an arbitrary level.
     *
<<<<<<< HEAD
     * @param mixed  $level
     * @param string $message
     * @param array  $context
     *
     * @return void
=======
     * @param mixed $level
     * @param string $message
     * @param array $context
     * @return null
>>>>>>> c81b45ba9a8b61239547a84a8e02a8dc1003e74a
     */
    public function log($level, $message, array $context = array())
    {
        // noop
    }
}
