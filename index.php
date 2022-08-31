<?php

$questions = [
   [
    'question' => '<h2>pippo</h2>',
    'answer' => '<p>ciccio</p>',
    'answer' => '<p>ciccio</p>',
    'answer' => '<p>ciccio</p>',
    'answer' => '<p>ciccio</p>',
    'answer' => '<p>ciccio</p>',
   ],
   [
    'question' => '<h2>pippo</h2>',
    'answer' => '<p>ciccio</p>',
    'answer' => '<p>ciccio</p>',
    'answer' => '<p>ciccio</p>',
    'answer' => '<p>ciccio</p>',
   ],
   [
    'question' => '<h2>pippo</h2>',
    'answer' => '<p>ciccio</p>',
    'answer' => '<ol><li>ciccio<ul>',
    'answer' => '<li>ciccio</li>',
    'answer' => '<li>ciccio</li></ul></li>',
    'answer' => '<li> ciccio</li></ol>',
   ],
   [
    'question' => '<h2>pippo</h2>',
    'answer' => '<p>ciccio</p>',
    'answer' => '<p>ciccio</p>',
    'answer' => '<p>ciccio</p>',
   ],
   [
    'question' => '<h2>pippo</h2>',
    'answer' => '<p>ciccio</p>',
   ],
   [
    'question' => '<h2>pippo</h2>',
    'answer' => '<p>ciccio</p>',
   ]
   ];

   ?>

   <!DOCTYPE html>
   <html lang="it">
   <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <title>Domande frequenti - Privacy e termini</title>
   </head>
   <body>
    <main class="container">
        <?php foreach($questions as $question) : ?>
            <?php foreach($question as $value) : ?>
                <?= $value ?>
            <?php endforeach; ?>
        <?php endforeach; ?>
    </main>

   </body>
   </html>