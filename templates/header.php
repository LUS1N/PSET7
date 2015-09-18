<!DOCTYPE html>

<html>

<head>

    <link href="/PSET7/public/css/bootstrap.min.css" rel="stylesheet"/>
    <link href="/PSET7/public/css/bootstrap-theme.min.css" rel="stylesheet"/>
    <link href="/PSET7/public/css/styles.css" rel="stylesheet"/>

    <?php if (isset($title)): ?>
        <title>C$50 Finance: <?= htmlspecialchars($title) ?></title>
    <?php else: ?>
        <title>C$50 Finance</title>
    <?php endif ?>

    <script src="/PSET7/public/js/jquery-1.11.1.min.js"></script>
    <script src="/PSET7/public/js/bootstrap.min.js"></script>
    <script src="/PSET7/public/js/scripts.js"></script>

</head>

<body>

    <div class="container">

        <div id="top">
            <a href="/"><img alt="C$50 Finance" src="/PSET7/public/img/logo.gif"/></a>
        </div>

        <div id="middle">
