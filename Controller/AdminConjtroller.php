
<?php

    class AdminController extends Controller {
        /**
         * Affiche la page admin, si l'id est égal à 1.
         */
        public function adminPage() {
            if(isset($_SESSION['admin'])) {
                $admin = $_SESSION['admin']= $_SESSION['id']= 1;
                $this->adminPage();
                session_start();
                $this->render('admin', 'Mon espace super admin');
            }

            //si c'est un user et qu'il est plus grand que 1 alors ===> retour à l'accueil
            $user = 'Anonymous';
            if($_SESSION['user'] && !isset($_SESSION['user']) > 1 !== null) {
                $user = $_SESSION['user'];
            }
            $this->render('home', 'admin', [
                'user' => $user,
            ]);
        }
    }