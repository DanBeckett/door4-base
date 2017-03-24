<?php

namespace Psr\Log;

/**
 * Basic Implementation of LoggerAwareInterface.
 */
trait LoggerAwareTrait
{
<<<<<<< HEAD
    /**
     * The logger instance.
     *
     * @var LoggerInterface
     */
=======
    /** @var LoggerInterface */
>>>>>>> c81b45ba9a8b61239547a84a8e02a8dc1003e74a
    protected $logger;

    /**
     * Sets a logger.
<<<<<<< HEAD
     *
=======
     * 
>>>>>>> c81b45ba9a8b61239547a84a8e02a8dc1003e74a
     * @param LoggerInterface $logger
     */
    public function setLogger(LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
