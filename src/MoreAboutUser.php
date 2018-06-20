<?php

namespace Mole\MAU;

class MoreAboutUser {

	//Constructor Variables
	private $PLUGIN_NAME = 'MoreAboutUser';

	private $VERSION = '0.1.0';

	private $currentUser;

  //Contructor
  public function __construct()
  { 
		// add_action( 'plugins_loaded', array($this, 'run') );
		add_action( 'admin_menu', array($this,'contruct_admin_menu') );
	}

	public function contruct_admin_menu() {
		add_menu_page( 
			'More About User',
			'More About User',
			'manage_options',
			'more_about_user_unique_slug',
			array($this,'more_about_user_plugin_options'),
			'dashicons-post-status'
		);
	}

	public function more_about_user_plugin_options() {
	
    $bootstrap = Helpers::get_template_path('Bootstrap.php');
		$admin_page = Helpers::get_template_path('AdminPage.php');
    include $bootstrap;
		include $admin_page;
  }

	public function run()
  { 		
		$currentUser = $this->getCurrentUserByID();
		echo "<div style='font-size:4em;text-align:center;'>$currentUser->user_registered</div>";
	}

	private function getCurrentUserByID(){
		// USE WP GET CURRENT USER FUNCTION
		$current_user = wp_get_current_user();
		return $current_user;
	}

}