<?php
/*
 * THIS SOFTWARE IS PROVIDED BY THE COPYRIGHT HOLDERS AND CONTRIBUTORS
 * "AS IS" AND ANY EXPRESS OR IMPLIED WARRANTIES, INCLUDING, BUT NOT
 * LIMITED TO, THE IMPLIED WARRANTIES OF MERCHANTABILITY AND FITNESS FOR
 * A PARTICULAR PURPOSE ARE DISCLAIMED. IN NO EVENT SHALL THE COPYRIGHT
 * OWNER OR CONTRIBUTORS BE LIABLE FOR ANY DIRECT, INDIRECT, INCIDENTAL,
 * SPECIAL, EXEMPLARY, OR CONSEQUENTIAL DAMAGES (INCLUDING, BUT NOT
 * LIMITED TO, PROCUREMENT OF SUBSTITUTE GOODS OR SERVICES; LOSS OF USE,
 * DATA, OR PROFITS; OR BUSINESS INTERRUPTION) HOWEVER CAUSED AND ON ANY
 * THEORY OF LIABILITY, WHETHER IN CONTRACT, STRICT LIABILITY, OR TORT
 * (INCLUDING NEGLIGENCE OR OTHERWISE) ARISING IN ANY WAY OUT OF THE USE
 * OF THIS SOFTWARE, EVEN IF ADVISED OF THE POSSIBILITY OF SUCH DAMAGE.
 *
 * This software consists of voluntary contributions made by many individuals
 * and is licensed under the MIT license. For more information, see
 * <http://www.doctrine-project.org>.
 */

namespace Doctrine\Common\Cache;

/**
 * Array cache driver.
 *
 * @link   www.doctrine-project.org
 * @since  2.0
 * @author Benjamin Eberlei <kontakt@beberlei.de>
 * @author Guilherme Blanco <guilhermeblanco@hotmail.com>
 * @author Jonathan Wage <jonwage@gmail.com>
 * @author Roman Borschel <roman@code-factory.org>
 * @author David Abdemoulaie <dave@hobodave.com>
 */
class ArrayCache extends CacheProvider
{
    /**
<<<<<<< HEAD
     * @var array[] $data each element being a tuple of [$data, $expiration], where the expiration is int|bool
     */
    private $data = [];

    /**
     * @var int
     */
    private $hitsCount = 0;

    /**
     * @var int
     */
    private $missesCount = 0;

    /**
     * @var int
     */
    private $upTime;

    /**
     * {@inheritdoc}
     */
    public function __construct()
    {
        $this->upTime = time();
    }
=======
     * @var array $data
     */
    private $data = array();
>>>>>>> c81b45ba9a8b61239547a84a8e02a8dc1003e74a

    /**
     * {@inheritdoc}
     */
    protected function doFetch($id)
    {
<<<<<<< HEAD
        if (! $this->doContains($id)) {
            $this->missesCount += 1;

            return false;
        }

        $this->hitsCount += 1;

        return $this->data[$id][0];
=======
        return $this->doContains($id) ? $this->data[$id] : false;
>>>>>>> c81b45ba9a8b61239547a84a8e02a8dc1003e74a
    }

    /**
     * {@inheritdoc}
     */
    protected function doContains($id)
    {
<<<<<<< HEAD
        if (! isset($this->data[$id])) {
            return false;
        }

        $expiration = $this->data[$id][1];

        if ($expiration && $expiration < time()) {
            $this->doDelete($id);

            return false;
        }

        return true;
=======
        // isset() is required for performance optimizations, to avoid unnecessary function calls to array_key_exists.
        return isset($this->data[$id]) || array_key_exists($id, $this->data);
>>>>>>> c81b45ba9a8b61239547a84a8e02a8dc1003e74a
    }

    /**
     * {@inheritdoc}
     */
    protected function doSave($id, $data, $lifeTime = 0)
    {
<<<<<<< HEAD
        $this->data[$id] = [$data, $lifeTime ? time() + $lifeTime : false];
=======
        $this->data[$id] = $data;
>>>>>>> c81b45ba9a8b61239547a84a8e02a8dc1003e74a

        return true;
    }

    /**
     * {@inheritdoc}
     */
    protected function doDelete($id)
    {
        unset($this->data[$id]);

        return true;
    }

    /**
     * {@inheritdoc}
     */
    protected function doFlush()
    {
<<<<<<< HEAD
        $this->data = [];
=======
        $this->data = array();
>>>>>>> c81b45ba9a8b61239547a84a8e02a8dc1003e74a

        return true;
    }

    /**
     * {@inheritdoc}
     */
    protected function doGetStats()
    {
<<<<<<< HEAD
        return [
            Cache::STATS_HITS             => $this->hitsCount,
            Cache::STATS_MISSES           => $this->missesCount,
            Cache::STATS_UPTIME           => $this->upTime,
            Cache::STATS_MEMORY_USAGE     => null,
            Cache::STATS_MEMORY_AVAILABLE => null,
        ];
=======
        return null;
>>>>>>> c81b45ba9a8b61239547a84a8e02a8dc1003e74a
    }
}
