<?php
namespace App\Services;

/**
 * Refrence code from previous semester to use for Part2.3b
 * @author creep
 *
 */
class DatabaseService
{
    /**
     * @var string : The username to mySQLServer.
     */
    private string $DBuserName = "root";
    /**
     * @var string : The password to mySQLServer.
     */
    private string $DBpassword = "root";
    /**
     * @var string : The name of the database.
     */
    private string $DBname = "cst236_milestone2";
    /**
     * @var string : The host to mySQLServer.
     */
    private string $DBhost = "localhost";
    /**
     * @var int : The port to mySQLServer.
     */
    private int $DBport = 3306;
    
    // [Server Values]
    /**
     * The link to the MySQL server
     */
    private $link;
    /**
     * The connection to the MySQL server
     */
    private $connect;
    
    
    
    //--------------------------------[Constructor]-------------------------------------------------------
    
    /**
     * @desc Default Constructor. Connects to the mySQL server
     *      if it has yet to connect yet.
     */
    public function __construct()
    {
        // Link to the server
        $this->link = mysqli_init();
        
        // Connect to the server
        $this->connect = mysqli_real_connect
        (
            $this->link,
            $this->DBhost,
            $this->DBuserName,
            $this->DBpassword,
            $this->DBname,
            $this->DBport
            );
    }
    //--------------------------------[Functions]-------------------------------------------------------
    
    //--------------------------------[Getters/Setters]-------------------------------------------------------
    
    /**
     * @return mixed : The mySQL server Link.
     */
    public function getLink()
    {
        return $this->link;
    }
    
    /**
     * @return mixed : The mySQL connection.
     */
    public function getConnect()
    {
        return $this->connect;
    }
}

