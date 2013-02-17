<?php
/**
 * MongoClient STUB File
 *
 * This class is *only* useful as a stub file to help your IDE provide autocompletion information.  You should never
 * require, include, or otherwise use this class in your application code.
 */
class MongoClient
{
    const VERSION = '3.x';
    const DEFAULT_HOST = "localhost" ;
    const DEFAULT_PORT = 27017 ;
    const RP_PRIMARY = "primary" ;
    const RP_PRIMARY_PREFERRED = "primaryPreferred" ;
    const RP_SECONDARY = "secondary" ;
    const RP_SECONDARY_PREFERRED = "secondaryPreferred" ;
    const RP_NEAREST = "nearest" ;

    /* Properties */
    public $connected = FALSE ;
    public $status = NULL ;
    protected $server = NULL ;
    protected $persistent = NULL ;

    /* Methods */
    /**
     * Constructor
     * @param string $server
     * @param array $options
     */
    public function __construct ($server = "mongodb://localhost:27017", $options = array("connect" => TRUE))
    {}

    /**
     * Close
     * Forcefully closes a connection to the database, even if persistent connections are being used. You should never
     * have to do this under normal circumstances.
     * @param bool|string $connection
     * @return bool
     */
    public function close ($connection)
    {}

    /**
     * Connect
     * @return bool
     */
    public function connect ()
    {}

    /**
     * Drop DB
     * @param mixed $db
     * @return array
     */
    public function dropDB ($db)
    {}

    /**
     * Magic database getter
     * @param string $dbname
     * @return MongoDB
     */
    public function __get ($dbname)
    {}

    /**
     * Get connections
     * Returns an array of all open connections, and information about each of the servers
     * @static
     * @return array
     */
    static public function getConnections ()
    {}

    /**
     * Get hosts
     * This method is only useful with a connection to a replica set. It returns the status of all of the hosts in the
     * set. Without a replica set, it will just return an array with one element containing the host that you are
     * connected to.
     * @return array
     */
    public function getHosts ()
    {}

    /**
     * Get read preference
     * Get the read preference for this connection
     * @return array
     */
    public function getReadPreference ()
    {}

    /**
     * List databases
     * @return array
     */
    public function listDBs ()
    {}

    /**
     * Select collection
     * Gets a database collection
     * @param string $db The database name
     * @param string $collection The collection name
     * @return MongoCollection
     */
    public function selectCollection ($db, $collection)
    {}

    /**
     * Select database
     * @param string $name
     * @return MongoDB
     */
    public function selectDB ($name)
    {}

    /**
     * Set read preference
     * @param string $readPreference
     * @param array $tags
     * @return bool
     */
    public function setReadPreference ($readPreference, $tags=null)
    {}

    /**
     * Magic to string method
     * @return string
     */
    public function __toString ()
    {}
}