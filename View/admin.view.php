<?php

use App\Manager\ArticleManager;

require 'include.php';

if (isset($_SESSION['id'], $_SESSION['username'], $_SESSION['key']))
{
    ?>

    <!DOCTYPE html>
    <html lang="fr">
    <head>
        <meta charset="UTF-8">
        <title>Curriculum Vitae</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="icon" href="">
        <!-- Styles -->
        <link rel="stylesheet" href="/asset/css/style.css">
    </head>

    <body>

    <header>
        <h1>Administration</h1>
        <nav>
            <ul>
                <li><a href="../index.php">Revenir au CV</a></li>
                <li><a href="/php/disconnect.php">Log-out</a></li>
            </ul>
        </nav>
    </header>

    <div id="container">
        <section>
            <h3>Ajouter un article:</h3>
            <div>
                <ul>
                    <?php
                    $art = new ArticleManager();
                    $a = $art->getAllArticles();

                    foreach ($a as $art) {
                        echo "<li>". $art->getTitle() . " | " . $art->getContent() . ' | <a href="Controller/DeleteArticle.php?error=0&id='. $art->getId() .'">Delete</a></li>';
                    }
                    ?>
                </ul>
            </div>
            <form name="addArticle" action="Controller/AddArticle.php?error=0" method="post">
                <fieldset>
                    Name:
                    <input name="name" type="text" maxlength="45" required placeholder="title article">
                    Content:
                    <input name="content" type="text" maxlength="100" required placeholder="content article">
                    <button type="submit">Soumettre mon article</button>
                </fieldset>
            </form>
        </section>
    </div>


    </body>
    </html>

    <?php
}
else {
    header("location:index.php");
}