<?php

namespace App\Manager;

use App\Entity\Ul;
use Model\DB;
use PDO;
use PDOException;

class UlManager {

    /** Return table all list
     * @return array
     */
    public function getContentAll(): array {
        $request= DB::getInstance()->prepare('SELECT * FROM ul');
        $request->execute();
        return [$request];
    }

    /** Return the last contentLi in the BDD
     * @param Ul $contentLi
     * @return bool
     */
    public function getContentLi(Ul $content): bool {
        $request = DB::getInstance()->prepare("SELECT contentLi = :contentLi FROM ul ORDER BY DESC LIMIT 1");
        $request->bindValue(':contentLi', $content->getContentLi());
        $request->execute();
        return $request;
    }

    /** Add li in the database
     * @param Ul $list
     * @return Ul
     */
    public function addContentList(Ul $list): Ul {
        $request = DB::getInstance()->prepare("INSERT INTO ul VALUES('contentUl' = :contentUl,'contentLi' = :contentLi) ");
        $request->bindValue(':contenUl', $list->getContentUl());
        $request->bindValue(':contentli', $list->getContentLi());
        $res = $request->execute();
        $list->setId(DB::getInstance()->lastInsertId());
        return $list;
    }

    /** Delete li in the database
     * @param Ul $liste
     * @return bool
     */
    public function deleteList(Ul $liste): bool {
        $request = DB::getInstance()->prepare("DELETE FROM ul WHER id = :id");
        $request->bindValue(':id', $liste->getId());
        return $request->execute();
    }

}