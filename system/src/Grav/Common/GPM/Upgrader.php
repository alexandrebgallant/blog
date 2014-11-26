<?php
namespace Grav\Common\GPM;

use Grav\Common\Filesystem\Folder;
use Grav\Common\GPM\Installer;

class Upgrader
{
    /**
     * Remote details about latest Grav version
     * @var Packages
     */
    private $remote;

    /**
     * Internal cache
     * @var Iterator
     */
    protected $cache;

    /**
     * Creates a new GPM instance with Local and Remote packages available
     * @param boolean  $refresh  Applies to Remote Packages only and forces a refetch of data
     * @param callable $callback Either a function or callback in array notation
     */
    public function __construct($refresh = false, $callback = null)
    {
        $this->remote = new Remote\Grav($refresh, $callback);
    }

    /**
     * Returns the release date of the latest version of Grav
     * @return string
     */
    public function getReleaseDate()
    {
        return $this->remote->getDate();
    }

    /**
     * Returns the version of the installed Grav
     * @return string
     */
    public function getLocalVersion()
    {
        return GRAV_VERSION;
    }

    /**
     * Returns the version of the remotely available Grav
     * @return string
     */
    public function getRemoteVersion()
    {
        return $this->remote->getVersion();
    }

    /**
     * Returns an array of assets available to download remotely
     * @return array
     */
    public function getAssets()
    {
        return $this->remote->getAssets();
    }

    /**
     * Returns the changelog list for each version of Grav
     * @param string $diff the version number to start the diff from
     *
     * @return array return the chagenlog list for each version
     */
    public function getChangelog($diff = null)
    {
        return $this->remote->getChangelog($diff);
    }

    /**
     * Checks if the currently installed Grav is upgradable to a newer version
     * @return boolean True if it's upgradable, False otherwise.
     */
    public function isUpgradable()
    {
        return version_compare($this->getLocalVersion(), $this->getRemoteVersion(), "<");
    }
}
