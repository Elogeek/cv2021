<?php

namespace App\Manager;

use App\Entity\Dd;
use App\Entity\Section;
use App\Entity\Ul;
use App\Entity\User;
use Model\DB;
use PDO;
use PDOException;

class SectionManager {

    /** Return a definition(s) via (id user) author-fk
     * @param int $id
     * @return User|null
     */
    public function getDefByAuthor(int $id): ?Section {
        $request = DB::getInstance()->prepare("SELECT COUNT(authorFk AS author) FROM section WHERE ddFk OR ddFk > 0");
        $author = [];
        $request->bindValue('author', $id);
        $result = $request->execute();
        $data = $request->fetch();
        if ($result && $data) {
            $author = new Section($data['id'],$data['authorFk'],$data['ulFk'],$data['ddFk'],$data['date']);
        }
        return $author;
    }

    /** Return a list(articles) by author-fk
     * @param int $id
     * @return Section
     */
    public function getListByAuthor(int $id): Section {
        $request = DB::getInstance()->prepare("SELECT COUNT(author AS author) FROM section WHERE ulFk OR ulFk > 0");
        $author = null;
        $request->bindValue('author', $id);
        $result = $request->execute();
        $data = $request->fetch();
        if ($result && $data) {
            $author = new Section($data['id'],$data['authorFk'],$data['ulFk'],$data['ddFk'],$data['date']);
        }
        return $author;
    }




    public function addSection(Section $section): bool {
            $request = DB::getInstance()->prepare("INSERT INTO section (authorFk,ulFk,ddFk,date) VALUES (:author,:ul,:dd,:date)");
            $request->bindValue(':author', $section->getAuthorFk());
            $request->bindValue(':ul', $section->getUl());
            $request->bindValue(':dd', $section->getDdFk());
            $request->bindValue(':date', $section->getDate());
            $result = $request->execute();
            $section->setId(DB::getInstance()->lastInsertId());
            return $result;
    }

    /**
     * @param Section $section
     * @return bool
     */
    public function deleteSection(Section $section): bool {
        $request = DB::getInstance()->prepare("DELETE FROM section WHERE id = :id");
        $request->bindValue('id', $section->getId());
        return $request->execute();
   }

}