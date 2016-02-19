<?php
    require_once __DIR__."/../vendor/autoload.php";
    require_once __DIR__."/../src/RepeatCounter.php";
    $app = new Silex\Application();
    $app->register(new Silex\Provider\TwigServiceProvider(), array(
        'twig.path' => __DIR__.'/../views'
    ));
    $app->get("/", function() use ($app) {
        return $app['twig']->render('form.html.twig');
    });
    $app->get("/word_sentence", function() use($app) {
        $my_RepeatCounter = new RepeatCounter;
        $check_results = $my_RepeatCounter->countRepeats($_GET['word'], $_GET['sentence']);
        return $app['twig']->render('results.html.twig', array('result' => $check_results));
    });
    return $app;
?>
