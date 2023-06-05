<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= get_the_title() ?></title>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />

    <?= wp_head() ?>
</head>

<body>
    <header>
        <nav class="navbar">
            <div class="container">
                <a class="" href="<?= home_url() ?>">
                    <img src="<?= get_template_directory_uri() ?>/assets/img/Logo.png" alt="" />
                </a>
                <a class="sobre-link" href="<?= home_url() ?>/sobre/">Sobre nós</a>
            </div>
        </nav>
    </header>
