<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="<?php echo base_url() . '/assets/css/main.css'; ?>">
</head>
<body>

    <header>
        <h1 class="main-title">Filmamanía</h1>
        <h2 class="secondary-title"><?php echo (!empty($title_page)) ? $title_page : ""; ?></h2>
    </header>
