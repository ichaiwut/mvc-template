<?php
	/**
	 * Controller :: for process this project.
	 *
	 * @package Maximize by 3Musketters
	 * @version 1.0
	 * @author Ting <ichaiwut.s@gmail.com>
	 */
	class Controller {
	    private $model;

	    /**
	     * Contruct Function
	     */
	    public function Controller( $model ) {
	        $this->model = $model;
	    }

	    /**
	     * Index page for project
	     * @author Ting <ichaiwut.s@gmail.com>
	     */
	    public function index() {
	    	include 'templates/header.php';
	    	//Set default start and end date
	    	/*
	    	 	your code here
	        	require_once('templates/index.tpl.php');

	        */
			include 'templates/footer.php';
	    }
	}
?>