<?php

use \App\Classe\Controller;

/**
 * Class HomeController
 */
class HomeController extends Controller {

    private array $javaScripts;


    /**
     * HomeController constructor.
     */
    public function __construct() {
        parent::__construct();
        $this->javaScripts = [
            '../asset/js/animate-section.js',
            '../asset/js/dancingLetters.js',
            '../asset/js/app.js',
        ];

    }

    /**
     * Handle the home page.
     */
    public function index() {

        $this->showView('home');
    }

}