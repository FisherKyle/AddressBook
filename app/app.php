<?php

    require_once(__DIR__ . "/../vendor/autoload.php");
    require_once(__DIR__ . "/../src/Contact.php");

    session_start();

      if (empty($_SESSION['list_of_contacts'])) {
        $_SESSION['list_of_contacts'] = array();
      }

    $app->register(new Silex\Provider\TwigServiceProvider(),array(

        'twig.path' => __DIR__.'/../views'
    ));

// -----:: end : required ::--------------------------------------------------->


// -----:: contacts : add ::--------------------------------------------------->


// -----:: contacts : delete ::------------------------------------------------>

?>
