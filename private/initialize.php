<?php

  ob_start(); // turn on output buffering


  //require_once('functions.php');
  //require_once('status_error_functions.php');
  require_once('db_credentials.php');
  require_once('database_functions.php');
  //require_once('validation_functions.php');

  foreach(glob('classes/*.class.php') as $file) {
    require_once($file);
  }

  // Autoload class definitions
  function my_autoload($class) {
    if(preg_match('/\A\w+\Z/', $class)) {
      include('classes/' . $class . '.class.php');
    }
  }
  spl_autoload_register('my_autoload');

  $database = db_connect();
  Habit::set_database($database);
  //$res = Habit::find_all();
  //var_dump($res);

?>
