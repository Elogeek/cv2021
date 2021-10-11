<?php



class Controller {
    private ?string $errorMessage = null;
    private ?string $succesMessage = null;
    private ?array $controllerJavascripts = null;

    public function __construct(){}

    public function showView(string $viewName, array $params = []) {
        if(!is_null($this->controllerJavascripts)) {
        $javaScripts = array_map(function ($js) { return '/assets/js/' . $js;}, $this->controllerJavaScripts);
        $this->controllerJavaScripts = null;
        }
        else {
                $javaScripts = [];
            }

        // Checking if there are at least one error or success message.
        if(!is_null($this->errorMessage)) {
        $error = $this->errorMessage;
        $this->errorMessage = null;
        }

        if(!is_null($this->successMessage)) {
            $success = $this->successMessage;
            $this->successMessage = null;
        }
    }

    /**
     * Add an error message to be displayed.
     * @param string $message
     */
    public function setErrorMessage(string $message) {
        $this->errorMessage = $message;
    }


    /**
     * Add a succes message to be displayed.
     * @param string $message
     */
    public function setSuccessMessage(string $message) {
        $this->successMessage = $message;
    }

    /**
     * Add JavaScript to the next view.
     * @param array $javaScripts
     */
    public function addJavaScript(array $javaScripts) {
        $this->controllerJavaScripts = $javaScripts;
    }

}