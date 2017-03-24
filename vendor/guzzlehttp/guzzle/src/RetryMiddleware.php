<?php
namespace GuzzleHttp;

use GuzzleHttp\Promise\PromiseInterface;
use GuzzleHttp\Promise\RejectedPromise;
use GuzzleHttp\Psr7;
use Psr\Http\Message\RequestInterface;
<<<<<<< HEAD
use Psr\Http\Message\ResponseInterface;
=======
>>>>>>> c81b45ba9a8b61239547a84a8e02a8dc1003e74a

/**
 * Middleware that retries requests based on the boolean result of
 * invoking the provided "decider" function.
 */
class RetryMiddleware
{
    /** @var callable  */
    private $nextHandler;

    /** @var callable */
    private $decider;

    /**
     * @param callable $decider     Function that accepts the number of retries,
     *                              a request, [response], and [exception] and
     *                              returns true if the request is to be
     *                              retried.
     * @param callable $nextHandler Next handler to invoke.
     * @param callable $delay       Function that accepts the number of retries
<<<<<<< HEAD
     *                              and [response] and returns the number of
     *                              milliseconds to delay.
=======
     *                              and returns the number of milliseconds to
     *                              delay.
>>>>>>> c81b45ba9a8b61239547a84a8e02a8dc1003e74a
     */
    public function __construct(
        callable $decider,
        callable $nextHandler,
        callable $delay = null
    ) {
        $this->decider = $decider;
        $this->nextHandler = $nextHandler;
        $this->delay = $delay ?: __CLASS__ . '::exponentialDelay';
    }

    /**
     * Default exponential backoff delay function.
     *
     * @param $retries
     *
     * @return int
     */
    public static function exponentialDelay($retries)
    {
        return (int) pow(2, $retries - 1);
    }

    /**
     * @param RequestInterface $request
     * @param array            $options
     *
     * @return PromiseInterface
     */
    public function __invoke(RequestInterface $request, array $options)
    {
        if (!isset($options['retries'])) {
            $options['retries'] = 0;
        }

        $fn = $this->nextHandler;
        return $fn($request, $options)
            ->then(
                $this->onFulfilled($request, $options),
                $this->onRejected($request, $options)
            );
    }

    private function onFulfilled(RequestInterface $req, array $options)
    {
        return function ($value) use ($req, $options) {
            if (!call_user_func(
                $this->decider,
                $options['retries'],
                $req,
                $value,
                null
            )) {
                return $value;
            }
<<<<<<< HEAD
            return $this->doRetry($req, $options, $value);
=======
            return $this->doRetry($req, $options);
>>>>>>> c81b45ba9a8b61239547a84a8e02a8dc1003e74a
        };
    }

    private function onRejected(RequestInterface $req, array $options)
    {
        return function ($reason) use ($req, $options) {
            if (!call_user_func(
                $this->decider,
                $options['retries'],
                $req,
                null,
                $reason
            )) {
                return new RejectedPromise($reason);
            }
            return $this->doRetry($req, $options);
        };
    }

<<<<<<< HEAD
    private function doRetry(RequestInterface $request, array $options, ResponseInterface $response = null)
    {
        $options['delay'] = call_user_func($this->delay, ++$options['retries'], $response);
=======
    private function doRetry(RequestInterface $request, array $options)
    {
        $options['delay'] = call_user_func($this->delay, ++$options['retries']);
>>>>>>> c81b45ba9a8b61239547a84a8e02a8dc1003e74a

        return $this($request, $options);
    }
}
