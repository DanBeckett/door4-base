<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @see       http://github.com/zendframework/zend-diactoros for the canonical source repository
<<<<<<< HEAD
 * @copyright Copyright (c) 2015-2016 Zend Technologies USA Inc. (http://www.zend.com)
=======
 * @copyright Copyright (c) 2015 Zend Technologies USA Inc. (http://www.zend.com)
>>>>>>> c81b45ba9a8b61239547a84a8e02a8dc1003e74a
 * @license   https://github.com/zendframework/zend-diactoros/blob/master/LICENSE.md New BSD License
 */

namespace Zend\Diactoros;

use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\StreamInterface;
<<<<<<< HEAD
use Psr\Http\Message\UriInterface;
=======
>>>>>>> c81b45ba9a8b61239547a84a8e02a8dc1003e74a

/**
 * HTTP Request encapsulation
 *
 * Requests are considered immutable; all methods that might change state are
 * implemented such that they retain the internal state of the current
 * message and return a new instance that contains the changed state.
 */
class Request implements RequestInterface
{
    use MessageTrait, RequestTrait;

    /**
<<<<<<< HEAD
     * @param null|string|UriInterface $uri URI for the request, if any.
=======
     * @param null|string $uri URI for the request, if any.
>>>>>>> c81b45ba9a8b61239547a84a8e02a8dc1003e74a
     * @param null|string $method HTTP method for the request, if any.
     * @param string|resource|StreamInterface $body Message body, if any.
     * @param array $headers Headers for the message, if any.
     * @throws \InvalidArgumentException for any invalid value.
     */
    public function __construct($uri = null, $method = null, $body = 'php://temp', array $headers = [])
    {
        $this->initialize($uri, $method, $body, $headers);
    }

    /**
     * {@inheritdoc}
     */
    public function getHeaders()
    {
        $headers = $this->headers;
        if (! $this->hasHeader('host')
<<<<<<< HEAD
            && $this->uri->getHost()
=======
            && ($this->uri && $this->uri->getHost())
>>>>>>> c81b45ba9a8b61239547a84a8e02a8dc1003e74a
        ) {
            $headers['Host'] = [$this->getHostFromUri()];
        }

        return $headers;
    }

    /**
     * {@inheritdoc}
     */
    public function getHeader($header)
    {
        if (! $this->hasHeader($header)) {
            if (strtolower($header) === 'host'
<<<<<<< HEAD
                && $this->uri->getHost()
=======
                && ($this->uri && $this->uri->getHost())
>>>>>>> c81b45ba9a8b61239547a84a8e02a8dc1003e74a
            ) {
                return [$this->getHostFromUri()];
            }

            return [];
        }

        $header = $this->headerNames[strtolower($header)];
        $value  = $this->headers[$header];
        $value  = is_array($value) ? $value : [$value];

        return $value;
    }
}
