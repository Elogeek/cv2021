<?php

namespace Controller;

use App\Model\Entity\Ul;
use App\Model\Manager\UlManager;

class UlController {

    public function addList(array $data) {

        $list = new Ul();

        if (isset($data['content'])) {

            $list->setContentUl($data['contentUl']);
            $list->setContentLi($data['contentLi']);
            $manager = new UlManager();
            $result = $manager->addArticle($list);
            if ($result) {
                require_once './View/addList.php';
            }
        }

    }

}