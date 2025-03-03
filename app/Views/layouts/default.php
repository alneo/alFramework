<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Default :: <?= $title ?? ''; ?></title>
    <link rel="stylesheet" href="<?= PATHF; ?>/assets/bootstrap/css/bootstrap.min.css">
    <link rel="icon" href="<?= PATHF; ?>/images/framework.png">
    <!--
<a href="https://www.flaticon.com/ru/free-icons/" title="фреймворк иконки">Фреймворк иконки от Flat Icons - Flaticon</a>
-->
</head>
<body>

<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
        <a class="navbar-brand" href="<?= base_url('/') ?>">Navbar</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="<?= base_url('/') ?>">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('/contact') ?>">Contact</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<?= $this->content; ?>

<script src="<?= PATHF; ?>/assets/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>
