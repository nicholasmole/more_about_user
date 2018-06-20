<?php

namespace Mole\MAU;

class Helpers {

  //Returns Template path for emails : Thx James
  public static function get_template_path($template_filename) {

    $templates_path = plugin_dir_path(dirname(__FILE__)) . "partials";
    $template_path = "$templates_path/$template_filename";
    return $template_path;

  }

}