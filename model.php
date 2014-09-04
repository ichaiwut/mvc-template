<?php
	/**
	 * Model :: Use for connect database.
	 * @package Maximize by 3Musketters
     * @version 1.0
	 * @author Ting <ichaiwut.s@gmail.com>
	 */
	class Model {
        /**
         * Connect database using `PDO`
         * @author Ting <ichaiwut.s@gmail.com>
         */
    	public function connect() {
    		global $db;
    		//Connect database use `PDO`;
    		try {
	    		return new PDO("mysql:host=" . $db['host'] . ";dbname=" . $db['database_name'], $db['username'], $db['password']);
    		} catch ( PDOException $e ) {
				echo 'ERROR! : ' . $e->getMessage();
    		}
    	}

	}
?>