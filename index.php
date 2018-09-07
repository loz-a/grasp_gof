<?php

use Handlers\Menu\{PrintGeHandler, PrintUkHandler};
use Infrastructure\Request\Request as HttpRequest;
use Infrastructure\Request\Handler\NotFoundHandler;
use Infrastructure\Request\Handler\Exception\NotFoundHandlerException;

require_once 'autoload.php';

try {
    $httpRequest = new HttpRequest();

    $handlers = new PrintGeHandler(
        new PrintUkHandler(
            new NotFoundHandler()
        )
    );

   $response = $handlers->handle($httpRequest);

} catch (NotFoundHandlerException $e) {
    $response = '<h1>Page Not Found</h1>';
}

?>

<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <title>GRASP and GoF</title>
    </head>
    <body>
            <?= $response ?>
    </body>
</html>
