<?php

function print_header (string $title): void
{
  echo <<<HEADER
    <!DOCTYPE html>
    <html lang="en">
    <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="stylesheet" href="https://unpkg.com/@picocss/pico@latest/css/pico.fluid.classless.min.css">
      <style>
        .container {
          max-width: 60vw;
          margin: auto;
        }
      </style>
      <title>$title</title>
    </head>
    <body>

      <div class="container">
        <h1>$title</h1>
  HEADER;
}

?>
