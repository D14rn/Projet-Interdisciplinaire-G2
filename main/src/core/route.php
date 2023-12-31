<?php
require_once __DIR__ . "/controller.php";

class Route {

    private static array $supported_methods = ["GET", "POST"];
    private array $methods;
    private string $uri;
    private string $controller;

    public function __construct(array $methods, string $uri, string $controller) {
        self::validateMethods($methods);
        $this->methods = $methods;
        $this->uri = $uri;
        $this->controller = $controller;
    }

    # Debugging method
    public function __toString() {
        $methods = implode(",", $this->methods);
        return "Methods: {$methods} | URI: '{$this->uri}' | Controller: '{$this->controller}'";
    }


    # Method used to validate if methods are supported
    private static function validateMethods(array $methods) {
        foreach ($methods as $method) {
            if (!in_array(strtoupper($method), self::$supported_methods)) {
                throw new InvalidArgumentException("Unsupported HTTP method: \"$method\"");
            }
        }
    }

    # Execute the associated controller
    public function executeController() {
        require_once __DIR__ . "/../controllers/" . $this->controller . ".php";
        call_user_func($this->controller . "::setRequest");
        call_user_func($this->controller . "::execute");
    }

    # Get the associated URI
    public function getURI() {
        return $this->uri;
    }

    # Get the associated HTTP methods
    public function getMethods() {
        return $this->methods;
    }
}

?>