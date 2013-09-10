<?php


namespace HappyR\Google\AnalyticsBundle\CacheServices;
use Doctrine\Common\Cache\CacheProvider;


/**
 * Class DoctrineCache
 *
 * @author Tobias Nyholm
 *
 */
class DoctrineCache implements CacheInterface
{

    /**
     * @var CacheProvider cache
     *
     *
     */
    private $cache;

    function __construct(CacheProvider $cache)
    {
        $this->cache = $cache;
    }


    /**
     * The namespace of the cache
     *
     * @param $name
     *
     * @return mixed
     */
    public function setNamespace($name)
    {
        $this->cache->setNamespace($name);
    }

    /**
     * Fetch a new cache by its id
     *
     * @param $id
     *
     * @return mixed|boolean false if nothing found
     */
    public function fetch($id)
    {
        return $this->cache->fetch($id);
    }

    /**
     * Save data into cache
     *
     * @param $id
     * @param $data
     * @param int $lifeTime
     *
     */
    public function save($id, $data, $lifeTime = 0)
    {
        return $this->cache->save($id, $data, $lifeTime);
    }

}