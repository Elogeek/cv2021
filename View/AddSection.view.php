
<section>

    <?php

    use App\Manager\ArticleManager;

    $art = new ArticleManager();
    $allArt = $art->getAllArticles();

    foreach ($allArt as $art) {
        ?>
        <div class="articles">
            <dl id="wordDefinition">
                <dt></dt>
                    <h4><?=$art->getTittle() ?></h4>
                    <dd class="description"><?=$art->getContent() ?></dd>
            </dl>
        </div>
        <?php
    }
    ?>


</section>

