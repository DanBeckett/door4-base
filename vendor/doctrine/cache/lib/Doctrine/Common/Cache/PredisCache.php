<?php

namespace Doctrine\Common\Cache;

<<<<<<< HEAD
use Predis\ClientInterface;
=======
use Predis\Client;
>>>>>>> c81b45ba9a8b61239547a84a8e02a8dc1003e74a

/**
 * Predis cache provider.
 *
 * @author othillo <othillo@othillo.nl>
 */
class PredisCache extends CacheProvider
{
    /**
<<<<<<< HEAD
     * @var ClientInterface
=======
     * @var Client
>>>>>>> c81b45ba9a8b61239547a84a8e02a8dc1003e74a
     */
    private $client;

    /**
<<<<<<< HEAD
     * @param ClientInterface $client
     *
     * @return void
     */
    public function __construct(ClientInterface $client)
=======
     * @param Client $client
     *
     * @return void
     */
    public function __construct(Client $client)
>>>>>>> c81b45ba9a8b61239547a84a8e02a8dc1003e74a
    {
        $this->client = $client;
    }

    /**
     * {@inheritdoc}
     */
    protected function doFetch($id)
    {
        $result = $this->client->get($id);
        if (null === $result) {
            return false;
        }

        return unserialize($result);
    }

    /**
     * {@inheritdoc}
     */
    protected function doFetchMultiple(array $keys)
    {
        $fetchedItems = call_user_func_array(array($this->client, 'mget'), $keys);

<<<<<<< HEAD
        return array_map('unserialize', array_filter(array_combine($keys, $fetchedItems)));
    }

    /**
     * {@inheritdoc}
     */
    protected function doSaveMultiple(array $keysAndValues, $lifetime = 0)
    {
        if ($lifetime) {
            $success = true;

            // Keys have lifetime, use SETEX for each of them
            foreach ($keysAndValues as $key => $value) {
                $response = $this->client->setex($key, $lifetime, serialize($value));

                if ((string) $response != 'OK') {
                    $success = false;
                }
            }

            return $success;
        }

        // No lifetime, use MSET
        $response = $this->client->mset(array_map(function ($value) {
            return serialize($value);
        }, $keysAndValues));

        return (string) $response == 'OK';
    }

=======
        return array_filter(array_combine($keys, array_map('unserialize', $fetchedItems)));
    }
>>>>>>> c81b45ba9a8b61239547a84a8e02a8dc1003e74a
    /**
     * {@inheritdoc}
     */
    protected function doContains($id)
    {
<<<<<<< HEAD
        return (bool) $this->client->exists($id);
=======
        return $this->client->exists($id);
>>>>>>> c81b45ba9a8b61239547a84a8e02a8dc1003e74a
    }

    /**
     * {@inheritdoc}
     */
    protected function doSave($id, $data, $lifeTime = 0)
    {
        $data = serialize($data);
        if ($lifeTime > 0) {
            $response = $this->client->setex($id, $lifeTime, $data);
        } else {
            $response = $this->client->set($id, $data);
        }

        return $response === true || $response == 'OK';
    }

    /**
     * {@inheritdoc}
     */
    protected function doDelete($id)
    {
<<<<<<< HEAD
        return $this->client->del($id) >= 0;
=======
        return $this->client->del($id) > 0;
>>>>>>> c81b45ba9a8b61239547a84a8e02a8dc1003e74a
    }

    /**
     * {@inheritdoc}
     */
    protected function doFlush()
    {
        $response = $this->client->flushdb();

        return $response === true || $response == 'OK';
    }

    /**
     * {@inheritdoc}
     */
    protected function doGetStats()
    {
        $info = $this->client->info();

        return array(
            Cache::STATS_HITS              => $info['Stats']['keyspace_hits'],
            Cache::STATS_MISSES            => $info['Stats']['keyspace_misses'],
            Cache::STATS_UPTIME            => $info['Server']['uptime_in_seconds'],
            Cache::STATS_MEMORY_USAGE      => $info['Memory']['used_memory'],
            Cache::STATS_MEMORY_AVAILABLE  => false
        );
    }
}
