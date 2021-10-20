<?php

use App\Entity\Article;
use App\Manager\ArticleManager;

class ArticleController extends Controller {
    /**
     *  all article
     */
    public function articles(){
        $manager = new ArticleManager();
        $articles = $manager->getAllArticles();

        $this->render('home', 'Les articles', [
            'articles' => $articles,
        ]);
    }

    /**
     *  add an article into DBB
     */
    public function addArticle()
    {
        if (isset( $_POST['title'],$_POST['content'])) {
            $articleManager = new ArticleManager();

            $title = htmlentities($_POST['title']);
            $content = htmlentities($_POST['content']);

            $article = new Article();
            $article->setContent($content)->setTitle($title);
            $articleManager->addArticles($article);

            $controller = new HomeController();
            $controller->index();
        } else {
            $this->render('addArticle', 'Ajouter un article');
        }
    }

    /**
     * Poster article page
     * @param $id
     */
    public function readArticle($id)
    {
        $article = ArticleManager::->get($id);

        $this->render('article', 'Article', [
            "article" => $article,

        ]);
    }

    /**
     * delete an article
     */
    public function deleteArticle(){
        $controller = new HomeController();

        if (isset($_GET['article'])) {
            $article = ArticleManager::->get($_GET['article']);
            if (ArticleManager::->delete($article)) {
                $controller->index();
            }

          }

    }
}