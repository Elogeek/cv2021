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
        $allList = [];

        if($request->execute() && $data = $request->fetchAll()) {
            foreach($data as $allData) {
                $allList[] = new Ul($allData['id'], $allData['contentUl'], $allData['contentLi']);
            }
        }

        return $allList;
    }

    /** Return list via id
     * @param int $id
     * @return Ul|null
     */
    public function getListById(int $id): ?Ul {
        $listLi = null;
        $request = DB::getInstance()->prepare("SELECT * FROM ul WHERE id = :id ");
        $request->bindValue(':id', $id);
        $result = $request->execute();
        $data = $request->fetch();

        if ($result && $data) {
            $ulManager = new self();
            $listLi = new Ul($data['id'], $data['contentUl'], $data['contentLi']);
        }
        return $listLi;
    }

    /** Return the last contentList in the BDD
     * @param Ul $content
     * @return Ul
     */
    public function getLastContentList(Ul $content): Ul {
        $request = DB::getInstance()->prepare("SELECT * FROM ul ORDER BY id = :id DESC LIMIT 1 ");
        $request->bindValue(':id', $content->getId());
        $res = $request->execute();
        $data = $request->fetch();
        $lastLi = null;

        if ($res && $data) {
            $ulManager = new self();
            $lastLi = new Ul($data['id'], $data['contentUl'], $data['contentLi']);
        }
        return $lastLi;
    }

    /** Add li in the database
     * @param Ul $list
     * @return bool
     */
    public function addContentList(Ul $list): bool {
        $request = DB::getInstance()->prepare("INSERT INTO ul (contentUl,contentLi) VALUES (:contentUl,:contentLi)");
        $request->bindValue(':contentUl', $list->getContentUl());
        $request->bindValue(':contentLi', $list->getContentLi());
        $res = $request->execute();
        $list->setId(DB::getInstance()->lastInsertId());
        return $res;
    }

    /** Delete li in the database
     * @param Ul $liste
     * @return bool
     */
    public function deleteList(Ul $liste): bool {
        $request = DB::getInstance()->prepare("DELETE FROM ul WHERE id = :id");
        $request->bindValue(':id', $liste->getId());
        return $request->execute();
    }

}