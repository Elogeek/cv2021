<?php

use App\Entity\Article;
use App\Manager\ArticleManager;


class HomeController extends Controller {

    public function index(): void
    {

        $this->render('index.php');
    }


    /**
     * Display all articles.*/

    public function articles(): void {
        $manager = new ArticleManager();
        $articlesArray = $manager->getAllArticles();

        $articleList = [];
        foreach($articlesArray as $article) {
            $art = new Article();
            $art->setId($article['id'])
                ->setTitle($article['title'])
                ->setContent($article['content']);
            $articleList[] = $art;
        }

        $this->render('articles.view.php', $articleList);
    }

}