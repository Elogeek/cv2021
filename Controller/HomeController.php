<?php

class HomeController extends Controller {

    private array $javaScripts;


    /**
     * HomeController constructor.
     */
    public function __construct() {
        parent::__construct();
        $this->javaScripts = [
            '',
            '',
        ];
    }
}
