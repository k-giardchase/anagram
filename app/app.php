<?php
    require_once __DIR__."/../vendor/autoload.php";
    require_once __DIR__."/../src/anagram.php";

    $app = new Silex\Application();

    $app->register(new Silex\Provider\TwigServiceProvider(), array(
        'twig.path' => __DIR__.'/../views'
    ));

    $app->get("/", function() use ($app) {
        return $app['twig']->render('form.twig');
    });

    $app->get("/view_result", function() use($app) {
         $input_word = new Anagram;
         $final_result = $input_word->generateAnagram($_GET['input_word'], $_GET['possible_matches']);

         return $app['twig']->render('view_result.twig', array( 'result' => $final_result));
    });
    
    return $app;
?>
