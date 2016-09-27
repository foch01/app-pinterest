<?php
namespace Entity;

class DbSingleton {
	private $_connection;
	private static $_instance; //The single instance

	private $_host = "localhost";
	private $_username = "trainer";
	private $_password = "facesimplon2016";
	private $_database = "app-pinterest";
	/*
	Get an instance of the Database
	@return Instance
	*/
	public static function getInstance() {
		if(!self::$_instance) { // If no instance then make one
			self::$_instance = new self();
		}
		return self::$_instance;
	}
	// Constructor
	private function __construct() {
		$this->_connection = new \PDO("mysql:host=$this->_host;dbname=$this->_database", $this->_username, $this->_password);
	}
	// Magic method clone is empty to prevent duplication of connection
	private function __clone() { }
	// Get mysqli connection
	public function getConnection() {
		return $this->_connection;
	}
}