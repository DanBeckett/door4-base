<?php

namespace Psr\Log;

/**
<<<<<<< HEAD
 * Describes a logger instance.
=======
 * Describes a logger instance
>>>>>>> c81b45ba9a8b61239547a84a8e02a8dc1003e74a
 *
 * The message MUST be a string or object implementing __toString().
 *
 * The message MAY contain placeholders in the form: {foo} where foo
 * will be replaced by the context data in key "foo".
 *
<<<<<<< HEAD
 * The context array can contain arbitrary data. The only assumption that
=======
 * The context array can contain arbitrary data, the only assumption that
>>>>>>> c81b45ba9a8b61239547a84a8e02a8dc1003e74a
 * can be made by implementors is that if an Exception instance is given
 * to produce a stack trace, it MUST be in a key named "exception".
 *
 * See https://github.com/php-fig/fig-standards/blob/master/accepted/PSR-3-logger-interface.md
 * for the full interface specification.
 */
interface LoggerInterface
{
    /**
     * System is unusable.
     *
     * @param string $message
<<<<<<< HEAD
     * @param array  $context
     *
     * @return void
=======
     * @param array $context
     * @return null
>>>>>>> c81b45ba9a8b61239547a84a8e02a8dc1003e74a
     */
    public function emergency($message, array $context = array());

    /**
     * Action must be taken immediately.
     *
     * Example: Entire website down, database unavailable, etc. This should
     * trigger the SMS alerts and wake you up.
     *
     * @param string $message
<<<<<<< HEAD
     * @param array  $context
     *
     * @return void
=======
     * @param array $context
     * @return null
>>>>>>> c81b45ba9a8b61239547a84a8e02a8dc1003e74a
     */
    public function alert($message, array $context = array());

    /**
     * Critical conditions.
     *
     * Example: Application component unavailable, unexpected exception.
     *
     * @param string $message
<<<<<<< HEAD
     * @param array  $context
     *
     * @return void
=======
     * @param array $context
     * @return null
>>>>>>> c81b45ba9a8b61239547a84a8e02a8dc1003e74a
     */
    public function critical($message, array $context = array());

    /**
     * Runtime errors that do not require immediate action but should typically
     * be logged and monitored.
     *
     * @param string $message
<<<<<<< HEAD
     * @param array  $context
     *
     * @return void
=======
     * @param array $context
     * @return null
>>>>>>> c81b45ba9a8b61239547a84a8e02a8dc1003e74a
     */
    public function error($message, array $context = array());

    /**
     * Exceptional occurrences that are not errors.
     *
     * Example: Use of deprecated APIs, poor use of an API, undesirable things
     * that are not necessarily wrong.
     *
     * @param string $message
<<<<<<< HEAD
     * @param array  $context
     *
     * @return void
=======
     * @param array $context
     * @return null
>>>>>>> c81b45ba9a8b61239547a84a8e02a8dc1003e74a
     */
    public function warning($message, array $context = array());

    /**
     * Normal but significant events.
     *
     * @param string $message
<<<<<<< HEAD
     * @param array  $context
     *
     * @return void
=======
     * @param array $context
     * @return null
>>>>>>> c81b45ba9a8b61239547a84a8e02a8dc1003e74a
     */
    public function notice($message, array $context = array());

    /**
     * Interesting events.
     *
     * Example: User logs in, SQL logs.
     *
     * @param string $message
<<<<<<< HEAD
     * @param array  $context
     *
     * @return void
=======
     * @param array $context
     * @return null
>>>>>>> c81b45ba9a8b61239547a84a8e02a8dc1003e74a
     */
    public function info($message, array $context = array());

    /**
     * Detailed debug information.
     *
     * @param string $message
<<<<<<< HEAD
     * @param array  $context
     *
     * @return void
=======
     * @param array $context
     * @return null
>>>>>>> c81b45ba9a8b61239547a84a8e02a8dc1003e74a
     */
    public function debug($message, array $context = array());

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
    public function log($level, $message, array $context = array());
}
