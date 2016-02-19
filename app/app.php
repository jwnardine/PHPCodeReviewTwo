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
    $app->post("/results", function() use($app) {
        $my_CountRepeat = new CountRepeat;
        $check_results = $my_CountRepeat->countRepeats($_POST['word'], $_POST['sentence']);
        return $app['twig']->render('results.html.twig', array('result' => $check_results));
    });
    return $app;
?>
