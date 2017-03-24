<?php

namespace Psr\Log\Test;

<<<<<<< HEAD
use Psr\Log\LoggerInterface;
use Psr\Log\LogLevel;

/**
 * Provides a base test class for ensuring compliance with the LoggerInterface.
 *
 * Implementors can extend the class and implement abstract methods to run this
 * as part of their test suite.
=======
use Psr\Log\LogLevel;

/**
 * Provides a base test class for ensuring compliance with the LoggerInterface
 *
 * Implementors can extend the class and implement abstract methods to run this as part of their test suite
>>>>>>> c81b45ba9a8b61239547a84a8e02a8dc1003e74a
 */
abstract class LoggerInterfaceTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @return LoggerInterface
     */
<<<<<<< HEAD
    abstract public function getLogger();

    /**
     * This must return the log messages in order.
     *
     * The simple formatting of the messages is: "<LOG LEVEL> <MESSAGE>".
     *
     * Example ->error('Foo') would yield "error Foo".
     *
     * @return string[]
     */
    abstract public function getLogs();
=======
    abstract function getLogger();

    /**
     * This must return the log messages in order with a simple formatting: "<LOG LEVEL> <MESSAGE>"
     *
     * Example ->error('Foo') would yield "error Foo"
     *
     * @return string[]
     */
    abstract function getLogs();
>>>>>>> c81b45ba9a8b61239547a84a8e02a8dc1003e74a

    public function testImplements()
    {
        $this->assertInstanceOf('Psr\Log\LoggerInterface', $this->getLogger());
    }

    /**
     * @dataProvider provideLevelsAndMessages
     */
    public function testLogsAtAllLevels($level, $message)
    {
        $logger = $this->getLogger();
        $logger->{$level}($message, array('user' => 'Bob'));
        $logger->log($level, $message, array('user' => 'Bob'));

        $expected = array(
            $level.' message of level '.$level.' with context: Bob',
            $level.' message of level '.$level.' with context: Bob',
        );
        $this->assertEquals($expected, $this->getLogs());
    }

    public function provideLevelsAndMessages()
    {
        return array(
            LogLevel::EMERGENCY => array(LogLevel::EMERGENCY, 'message of level emergency with context: {user}'),
            LogLevel::ALERT => array(LogLevel::ALERT, 'message of level alert with context: {user}'),
            LogLevel::CRITICAL => array(LogLevel::CRITICAL, 'message of level critical with context: {user}'),
            LogLevel::ERROR => array(LogLevel::ERROR, 'message of level error with context: {user}'),
            LogLevel::WARNING => array(LogLevel::WARNING, 'message of level warning with context: {user}'),
            LogLevel::NOTICE => array(LogLevel::NOTICE, 'message of level notice with context: {user}'),
            LogLevel::INFO => array(LogLevel::INFO, 'message of level info with context: {user}'),
            LogLevel::DEBUG => array(LogLevel::DEBUG, 'message of level debug with context: {user}'),
        );
    }

    /**
<<<<<<< HEAD
     * @expectedException \Psr\Log\InvalidArgumentException
=======
     * @expectedException Psr\Log\InvalidArgumentException
>>>>>>> c81b45ba9a8b61239547a84a8e02a8dc1003e74a
     */
    public function testThrowsOnInvalidLevel()
    {
        $logger = $this->getLogger();
        $logger->log('invalid level', 'Foo');
    }

    public function testContextReplacement()
    {
        $logger = $this->getLogger();
        $logger->info('{Message {nothing} {user} {foo.bar} a}', array('user' => 'Bob', 'foo.bar' => 'Bar'));

        $expected = array('info {Message {nothing} Bob Bar a}');
        $this->assertEquals($expected, $this->getLogs());
    }

    public function testObjectCastToString()
    {
<<<<<<< HEAD
        if (method_exists($this, 'createPartialMock')) {
            $dummy = $this->createPartialMock('Psr\Log\Test\DummyTest', array('__toString'));
        } else {
            $dummy = $this->getMock('Psr\Log\Test\DummyTest', array('__toString'));
        }
=======
        $dummy = $this->getMock('Psr\Log\Test\DummyTest', array('__toString'));
>>>>>>> c81b45ba9a8b61239547a84a8e02a8dc1003e74a
        $dummy->expects($this->once())
            ->method('__toString')
            ->will($this->returnValue('DUMMY'));

        $this->getLogger()->warning($dummy);
<<<<<<< HEAD

        $expected = array('warning DUMMY');
        $this->assertEquals($expected, $this->getLogs());
=======
>>>>>>> c81b45ba9a8b61239547a84a8e02a8dc1003e74a
    }

    public function testContextCanContainAnything()
    {
        $context = array(
            'bool' => true,
            'null' => null,
            'string' => 'Foo',
            'int' => 0,
            'float' => 0.5,
            'nested' => array('with object' => new DummyTest),
            'object' => new \DateTime,
            'resource' => fopen('php://memory', 'r'),
        );

        $this->getLogger()->warning('Crazy context data', $context);
<<<<<<< HEAD

        $expected = array('warning Crazy context data');
        $this->assertEquals($expected, $this->getLogs());
=======
>>>>>>> c81b45ba9a8b61239547a84a8e02a8dc1003e74a
    }

    public function testContextExceptionKeyCanBeExceptionOrOtherValues()
    {
<<<<<<< HEAD
        $logger = $this->getLogger();
        $logger->warning('Random message', array('exception' => 'oops'));
        $logger->critical('Uncaught Exception!', array('exception' => new \LogicException('Fail')));

        $expected = array(
            'warning Random message',
            'critical Uncaught Exception!'
        );
        $this->assertEquals($expected, $this->getLogs());
=======
        $this->getLogger()->warning('Random message', array('exception' => 'oops'));
        $this->getLogger()->critical('Uncaught Exception!', array('exception' => new \LogicException('Fail')));
>>>>>>> c81b45ba9a8b61239547a84a8e02a8dc1003e74a
    }
}

class DummyTest
{
<<<<<<< HEAD
    public function __toString()
    {
    }
}
=======
}
>>>>>>> c81b45ba9a8b61239547a84a8e02a8dc1003e74a
