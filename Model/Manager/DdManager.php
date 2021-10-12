<?php

namespace App\Manager;

use App\Entity\Dd;
use Model\DB;
use PDO;
use PDOException;

class DdManager {

    /** Return table all definitions
     * @return array
     */
    public function getDefinition(): array {
        $request = DB::getInstance()->prepare('SELECT * FROM dd');
        $resultDd = [];
       if($request->execute() && $data = $request->fetchAll()) {
            foreach($data as $ddData) {
                $resultDd[] = new Dd($ddData['id'], $ddData['contentDd'], $ddData['contentDt']);
            }
        }
        return $resultDd;
    }

    /** Return id a definition
     * @return bool
     */
     public function getDefById(): bool {
        $request = DB::getInstance()->prepare("SELECT id FROM dd");
        $def = $request->execute();
        return $def;
    }

    /** Add a definition in the database
     * @param Dd $word
     * @return bool
     */
    public function addWord(Dd $word): bool {
        $request = DB::getInstance()->prepare("INSERT INTO dd (contentDd,contentDt) VALUES (:contentWord,:contentDefinition)");
        $request->bindValue(':contentWord', $word->getContentDd());
        $request->bindValue(':contentDefinition', $word->getContentDt());
        $res = $request->execute();
        $word->setId(DB::getInstance()->lastInsertId());
        return $res;
    }

    /** Delete a definition in the database
     * @param Dd $word
     * @return bool
     */
    public function deleteWord(Dd $word): bool {
        $request = DB::getInstance()->prepare("DELETE FROM dd WHERE id = :id");
        $request->bindValue(':id', $word->getId());
        return $request->execute();
    }

}