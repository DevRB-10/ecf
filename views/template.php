<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des marques</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link href="/style.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js" integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/45e38e596f.js" crossorigin="anonymous"></script>
</head>
<body>
    <?php if(isset($msg)) :?>
        <div class="msg <?= $msg['code'] ?>">
            <?= $msg['txt'] ?>
        </div>
    <?php endif ?>
    <header>
        <div class="d-flex justify-content-between">
            <div class="logo m-3">
                <a href="#">
                    <img src="/images/logo.png" alt="logo" width="120%">
                </a>
            </div>
            <div class="nav m-3">
                <nav class="navbar navbar-expand-lg navbar-light bg-light">
                    <div class="container">
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav m-4">
                            <li class="nav-item">
                                <a class="nav-link" href="#" style="color:#B5752B">Les instruments</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#" style="color:#B5752B;">Les marques</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#" style="color:#B5752B">Les types</a>
                            </li>
                        </ul>
                    </div>
                    </div>
                </nav>
            </div>
            
        </div>
        <h2 class="m-4"><?= $title ?></h2>
    </header>

    <main>
       <?= $content ?>
    </main>
</body>
</html>