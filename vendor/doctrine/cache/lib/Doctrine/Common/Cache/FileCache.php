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
 * Base file cache driver.
 *
 * @since  2.3
 * @author Fabio B. Silva <fabio.bat.silva@gmail.com>
<<<<<<< HEAD
 * @author Tobias Schultze <http://tobion.de>
=======
>>>>>>> c81b45ba9a8b61239547a84a8e02a8dc1003e74a
 */
abstract class FileCache extends CacheProvider
{
    /**
     * The cache directory.
     *
     * @var string
     */
    protected $directory;

    /**
     * The cache file extension.
     *
     * @var string
     */
    private $extension;

    /**
<<<<<<< HEAD
     * @var int
     */
    private $umask;

    /**
     * @var int
     */
    private $directoryStringLength;
=======
     * @var string[] regular expressions for replacing disallowed characters in file name
     */
    private $disallowedCharacterPatterns = array(
        '/\-/', // replaced to disambiguate original `-` and `-` derived from replacements
        '/[^a-zA-Z0-9\-_\[\]]/' // also excludes non-ascii chars (not supported, depending on FS)
    );

    /**
     * @var string[] replacements for disallowed file characters
     */
    private $replacementCharacters = array('__', '-');
>>>>>>> c81b45ba9a8b61239547a84a8e02a8dc1003e74a

    /**
     * @var int
     */
<<<<<<< HEAD
    private $extensionStringLength;

    /**
     * @var bool
     */
    private $isRunningOnWindows;
=======
    private $umask;
>>>>>>> c81b45ba9a8b61239547a84a8e02a8dc1003e74a

    /**
     * Constructor.
     *
     * @param string $directory The cache directory.
     * @param string $extension The cache file extension.
     *
     * @throws \InvalidArgumentException
     */
    public function __construct($directory, $extension = '', $umask = 0002)
    {
        // YES, this needs to be *before* createPathIfNeeded()
        if ( ! is_int($umask)) {
            throw new \InvalidArgumentException(sprintf(
                'The umask parameter is required to be integer, was: %s',
                gettype($umask)
            ));
        }
        $this->umask = $umask;

        if ( ! $this->createPathIfNeeded($directory)) {
            throw new \InvalidArgumentException(sprintf(
                'The directory "%s" does not exist and could not be created.',
                $directory
            ));
        }

        if ( ! is_writable($directory)) {
            throw new \InvalidArgumentException(sprintf(
                'The directory "%s" is not writable.',
                $directory
            ));
        }

        // YES, this needs to be *after* createPathIfNeeded()
        $this->directory = realpath($directory);
        $this->extension = (string) $extension;
<<<<<<< HEAD

        $this->directoryStringLength = strlen($this->directory);
        $this->extensionStringLength = strlen($this->extension);
        $this->isRunningOnWindows    = defined('PHP_WINDOWS_VERSION_BUILD');
=======
>>>>>>> c81b45ba9a8b61239547a84a8e02a8dc1003e74a
    }

    /**
     * Gets the cache directory.
     *
     * @return string
     */
    public function getDirectory()
    {
        return $this->directory;
    }

    /**
     * Gets the cache file extension.
     *
<<<<<<< HEAD
     * @return string
=======
     * @return string|null
>>>>>>> c81b45ba9a8b61239547a84a8e02a8dc1003e74a
     */
    public function getExtension()
    {
        return $this->extension;
    }

    /**
     * @param string $id
     *
     * @return string
     */
    protected function getFilename($id)
    {
<<<<<<< HEAD
        $hash = hash('sha256', $id);

        // This ensures that the filename is unique and that there are no invalid chars in it.
        if (
            '' === $id
            || ((strlen($id) * 2 + $this->extensionStringLength) > 255)
            || ($this->isRunningOnWindows && ($this->directoryStringLength + 4 + strlen($id) * 2 + $this->extensionStringLength) > 258)
        ) {
            // Most filesystems have a limit of 255 chars for each path component. On Windows the the whole path is limited
            // to 260 chars (including terminating null char). Using long UNC ("\\?\" prefix) does not work with the PHP API.
            // And there is a bug in PHP (https://bugs.php.net/bug.php?id=70943) with path lengths of 259.
            // So if the id in hex representation would surpass the limit, we use the hash instead. The prefix prevents
            // collisions between the hash and bin2hex.
            $filename = '_' . $hash;
        } else {
            $filename = bin2hex($id);
        }

        return $this->directory
            . DIRECTORY_SEPARATOR
            . substr($hash, 0, 2)
            . DIRECTORY_SEPARATOR
            . $filename
=======
        return $this->directory
            . DIRECTORY_SEPARATOR
            . implode(str_split(hash('sha256', $id), 2), DIRECTORY_SEPARATOR)
            . DIRECTORY_SEPARATOR
            . preg_replace($this->disallowedCharacterPatterns, $this->replacementCharacters, $id)
>>>>>>> c81b45ba9a8b61239547a84a8e02a8dc1003e74a
            . $this->extension;
    }

    /**
     * {@inheritdoc}
     */
    protected function doDelete($id)
    {
<<<<<<< HEAD
        $filename = $this->getFilename($id);

        return @unlink($filename) || ! file_exists($filename);
=======
        return @unlink($this->getFilename($id));
>>>>>>> c81b45ba9a8b61239547a84a8e02a8dc1003e74a
    }

    /**
     * {@inheritdoc}
     */
    protected function doFlush()
    {
        foreach ($this->getIterator() as $name => $file) {
<<<<<<< HEAD
            if ($file->isDir()) {
                // Remove the intermediate directories which have been created to balance the tree. It only takes effect
                // if the directory is empty. If several caches share the same directory but with different file extensions,
                // the other ones are not removed.
                @rmdir($name);
            } elseif ($this->isFilenameEndingWithExtension($name)) {
                // If an extension is set, only remove files which end with the given extension.
                // If no extension is set, we have no other choice than removing everything.
                @unlink($name);
            }
=======
            @unlink($name);
>>>>>>> c81b45ba9a8b61239547a84a8e02a8dc1003e74a
        }

        return true;
    }

    /**
     * {@inheritdoc}
     */
    protected function doGetStats()
    {
        $usage = 0;
<<<<<<< HEAD
        foreach ($this->getIterator() as $name => $file) {
            if (! $file->isDir() && $this->isFilenameEndingWithExtension($name)) {
                $usage += $file->getSize();
            }
=======
        foreach ($this->getIterator() as $file) {
            $usage += $file->getSize();
>>>>>>> c81b45ba9a8b61239547a84a8e02a8dc1003e74a
        }

        $free = disk_free_space($this->directory);

        return array(
            Cache::STATS_HITS               => null,
            Cache::STATS_MISSES             => null,
            Cache::STATS_UPTIME             => null,
            Cache::STATS_MEMORY_USAGE       => $usage,
            Cache::STATS_MEMORY_AVAILABLE   => $free,
        );
    }

    /**
     * Create path if needed.
     *
     * @param string $path
     * @return bool TRUE on success or if path already exists, FALSE if path cannot be created.
     */
    private function createPathIfNeeded($path)
    {
        if ( ! is_dir($path)) {
            if (false === @mkdir($path, 0777 & (~$this->umask), true) && !is_dir($path)) {
                return false;
            }
        }

        return true;
    }

    /**
     * Writes a string content to file in an atomic way.
     *
     * @param string $filename Path to the file where to write the data.
     * @param string $content  The content to write
     *
     * @return bool TRUE on success, FALSE if path cannot be created, if path is not writable or an any other error.
     */
    protected function writeFile($filename, $content)
    {
        $filepath = pathinfo($filename, PATHINFO_DIRNAME);

        if ( ! $this->createPathIfNeeded($filepath)) {
            return false;
        }

        if ( ! is_writable($filepath)) {
            return false;
        }

        $tmpFile = tempnam($filepath, 'swap');
        @chmod($tmpFile, 0666 & (~$this->umask));

        if (file_put_contents($tmpFile, $content) !== false) {
            if (@rename($tmpFile, $filename)) {
                return true;
            }

            @unlink($tmpFile);
        }

        return false;
    }

    /**
     * @return \Iterator
     */
    private function getIterator()
    {
<<<<<<< HEAD
        return new \RecursiveIteratorIterator(
            new \RecursiveDirectoryIterator($this->directory, \FilesystemIterator::SKIP_DOTS),
            \RecursiveIteratorIterator::CHILD_FIRST
        );
    }

    /**
     * @param string $name The filename
     *
     * @return bool
     */
    private function isFilenameEndingWithExtension($name)
    {
        return '' === $this->extension
            || strrpos($name, $this->extension) === (strlen($name) - $this->extensionStringLength);
    }
=======
        return new \RegexIterator(
            new \RecursiveIteratorIterator(new \RecursiveDirectoryIterator($this->directory)),
            '/^.+' . preg_quote($this->extension, '/') . '$/i'
        );
    }
>>>>>>> c81b45ba9a8b61239547a84a8e02a8dc1003e74a
}
