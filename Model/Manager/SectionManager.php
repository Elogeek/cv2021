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
     * @param Dd $definition
     * @return User|null
     */
    public function getDefByUser(Dd $definition): ?User {
        $request = DB::getInstance()->prepare("SELECT COUNT(dd-fk) FROM section WHERE author-fk OR dd-fk > 0");
        $request->bindValue('author-fk', $definition->getId());
        $request->bindValue('dd-fk', $definition->getId());

        if($request->execute() && $data = $request->fetchAll()) {
            $sectionManager = new self();
            foreach($data as $userData) {
                $users[] = new self($userData['id'], $userData['author-fk'],$userData['dd-fk'],$userData['date']);
            }
        }

        return [$users];
    }

    /** Return a list(content ul and li) via (id user) author-fk
     * @param User $user
     * @param Ul $li
     * @param Section $section
     * @return array
     */
    public function getListByUser(User $user, Ul $li, Section $section): array {
        $request = DB::getInstance()->prepare("SELECT COUNT(ul-fk) FROM section WHERE author-fk OR ul-fk > 0");
        $request->bindValue('author-fk', $user->getId());
        $request->bindValue('ul-fk', $li->getContentUl());
        $request->bindValue('ul-fk', $li->getContentLi());
        return [$request->execute()];
    }

    public function addSection(){

    }

    public function deletSection(){}
}