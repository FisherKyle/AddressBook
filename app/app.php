<?php

    require_once(__DIR__ . '/../vendor/autoload.php');
    require_once(__DIR__ . '/../src/Contact.php');
    date_default_timezone_set('America/New_York');

    session_start();

      if (empty($_SESSION['list_of_contacts'])){
        $_SESSION['list_of_contacts'] = array();
      }
    $app = new Silex\Application();
    $app->register(new Silex\Provider\TwigServiceProvider(),array('twig.path' => __DIR__.'/../views'
    ));

    $app->get('/', function() use ($app){

          return $app['twig']->render('contacts_home.html.twig', array('contacts'=> Contact::getAll()));
    });

// -----: contacts : add :-----//

$app->post('/contacts_add', function() use($app){
    $contact = new Contact($_POST['contact_name'],$_POST['contact_phone'],$_POST['contact_email']);
    $contact->save();

    return $app['twig']->render('contacts_add.html.twig', array('new_contact' => $contact));
});

// -----:: contacts : delete ::------------------------------------------------>
$app->post('/contacts_delete', function() use($app){
    Contact::deleteAll();

    return $app['twig']->render('contacts_delete.html.twig');
});

return $app;
?>
