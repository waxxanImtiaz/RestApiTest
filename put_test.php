<?php 




 $params = Array();
//function _parseParams() {
    $method = $_SERVER['REQUEST_METHOD'];
    if ($method == "PUT" || $method == "DELETE") {
        parse_str(file_get_contents('php://input'), $params);
        $GLOBALS["_{$method}"] = $params;
		echo "succesful";
        // Add these request vars into _REQUEST, mimicing default behavior, PUT/DELETE will override existing COOKIE/GET vars
        $_REQUEST = $this->params + $_REQUEST;
    } else if ($method == "GET") {
        $params = $_GET;
    } else if ($method == "POST") {
        $params = $_POST;
    }
	
	print_r($params);
 // }
  /*
class Params {
  private $params = Array();

  public function __construct() {
    $this->_parseParams();
  }
*/
  /**
    * @brief Lookup request params
    * @param string $name Name of the argument to lookup
    * @param mixed $default Default value to return if argument is missing
    * @returns The value from the GET/POST/PUT/DELETE value, or $default if not set
    */
	/*
  public function get($name, $default = null) {
    if (isset($this->params[$name])) {
      return $this->params[$name];
    } else {
      return $default;
    }
  }

  private function _parseParams() {
    $method = $_SERVER['REQUEST_METHOD'];
    if ($method == "PUT" || $method == "DELETE") {
        parse_str(file_get_contents('php://input'), $this->params);
        $GLOBALS["_{$method}"] = $this->params;
		echo "succesful";
        // Add these request vars into _REQUEST, mimicing default behavior, PUT/DELETE will override existing COOKIE/GET vars
        $_REQUEST = $this->params + $_REQUEST;
    } else if ($method == "GET") {
        $this->params = $_GET;
    } else if ($method == "POST") {
        $this->params = $_POST;
    }
  }
}
*/
?>