<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Default :: <?= $title ?? ''; ?></title>
    <link rel="icon" href="<?= PATH; ?>/images/framework.png">
    <!--
<a href="https://www.flaticon.com/ru/free-icons/" title="фреймворк иконки">Фреймворк иконки от Flat Icons - Flaticon</a>
-->
</head>
<body>

<?= $this->content; ?>


</body>
</html>
