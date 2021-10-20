<?php

namespace App\Manager;

use App\Entity\Article;
use App\Entity\User;
use Model\DB;

use PDO;
use PDOException;

class ArticleManager  {


    /**  Return all article in table section
     * @return array|null
     */
    public function getAllArticles(): ?array {
        $array = [];
        $stmt = DB::getInstance()->prepare("SELECT * FROM article");

        if($stmt->execute() && $art = $stmt->fetchAll()) {
            foreach ($art as $a) {
                $array[] = new Article($a['id'], $a['title'], $a['content'],$a['authorFk']);
            }
        }
        return $array;
    }

    /**
     * Return an Article or null
     * @param $id
     * @return Article|null
     */
    public function get($id): ?Article {
        $request = DB::getInstance()->prepare("SELECT * FROM Article WHERE id = :id");
        $request->bindValue(':id', $id);
        $result = $request->execute();
        $article = null;

        if($result && $data = $request->fetch()) {
            $article = new Article($data['id'],$data['title'], $data['content'], $data['author_fk']);
        }

        return $article;
    }


    /** Return a article(s) of the author-fk
     * @param int $id
     * @return User|null
     */
    public function getDefByAuthor(int $id): ?Article {
        $request = DB::getInstance()->prepare("SELECT COUNT(authorFk AS author) FROM article WHERE  id > 0");
        $author = [];
        $request->bindValue('author', $id);
        $result = $request->execute();
        $data = $request->fetch();
        if ($result && $data) {
            $author = new Article($data['id'], $data['title'], $data['content'],$data['authorFk']);
        }
        return $author;
    }


    public function addArticles(Article $art): bool {
            $request = DB::getInstance()->prepare("INSERT INTO article (title,content,authorFk) VALUES (:t,:content,:authorFk)");
            $request->bindValue(':t', $art->getTitle());
            $request->bindValue(':content', $art->getContent());
            $request->bindValue(':authorFk', $art->getAuthorFk());

            $result = $request->execute();
            $art->setId(DB::getInstance()->lastInsertId());
            return $result;
    }

    /**
     * @param Article $section
     * @return bool
     */
    public function deleteArticle(Article $section): bool {
        $request = DB::getInstance()->prepare("DELETE FROM article WHERE id = :id");
        $request->bindValue('id', $section->getId());
        return $request->execute();
   }

}