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
     * @param User $user
     * @param Dd $definition
     * @param Section $section
     * @return array
     */
    public function getAllDefinition(User $user, Dd $definition, Section $section): array {
        $request = DB::getInstance()->prepare("SELECT COUNT(dd-fk) FROM section WHERE author-fk OR dd-fk > 0");
        $request->bindValue('author-fk', $user->getId());
        $request->bindValue('dd-fk', $definition->getContentDd());
        $request->bindValue('dd-fk',$definition->getContentDt());
        return [$request->execute()];
    }

    /** Return a list(content ul and li) via (id user) author-fk
     * @param User $user
     * @param Ul $li
     * @param Section $section
     * @return array
     */
    public function getAllList(User $user, Ul $li, Section $section): array {
        $request = DB::getInstance()->prepare("SELECT COUNT(ul-fk) FROM section WHERE author-fk OR ul-fk > 0");
        $request->bindValue('author-fk', $user->getId());
        $request->bindValue('ul-fk', $li->getContentUl());
        $request->bindValue('ul-fk', $li->getContentLi());
        return [$request->execute()];
    }

}