<?php $template = $page->template() ?>
<!DOCTYPE html>
<html lang="nl">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Kirby Vite Multi-Page</title>
  <!-- Include the shared js/css ... -->
  <?= vite()->js('index.js', ['defer' => true]) ?>
  <?= vite()->css('index.js') ?>
  <!-- ... and the template's js/css (if it exists) -->
  <?= vite()->js("templates/$template/index.js", ['defer' => true], try: true) ?>
  <?= vite()->css("templates/$template/index.js", try: true) ?>
</head>
<body class="bg-white">
<?php snippet('menu'); ?>