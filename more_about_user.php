<?php
 /**
 * Plugin Name: More about user
 * Description: Get more information about user
 * Version: 0.1.0
 * Author: Nick Mole
 * Text Domain: mau-more-about-user
 */

require_once plugin_dir_path(__FILE__) . 'src/MoreAboutUser.php';

use Mole\MAU;
use Mole\MAU\MoreAboutUser;

new MoreAboutUser();
