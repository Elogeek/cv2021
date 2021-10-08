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
        $request->execute();
        $result = $request->fetchAll();
       // print_r($result);
        return [$result];
    }

    /** Return a definition via id
     * @return bool
     */
    public function getDefById(): bool {
        $request = DB::getInstance()->prepare("SELECT id FROM dd");
        $request->execute();
        return $request;
    }

    /** Add a definition in the database
     * @param Dd $word
     * @return bool
     */
    public function addDefinition(Dd $word): bool {
        $request = DB::getInstance()->prepare("INSERT INTO dd VALUES('contentDd' = :contentWord, 'contentDt' = :contentDefinition)");
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
        $request = DB::getInstance()->prepare("DELETE FROM dd WHER id = :id");
        $request->bindValue(':id', $word->getId());
        return $request->execute();
    }

}