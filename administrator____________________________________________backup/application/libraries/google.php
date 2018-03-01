<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
 
//Ðu?ng d?n t?i thu m?c ch?a b? thu vi?n c?a mà b?n luu.
//require_once  ('/var/www/clients/client0/web321/web/administrator/application/third_party/google-api-php-client/src/Google/autoload.php');
 //require_once(APPPATH.'third_party/google-api-php-client/src/Google/autoload.php');

//require_once dirname(__FILE__).'/third_party/google-api-php-client/src/Google/autoload.php';

 require_once (BASEPATH . '../application/libraries/Google/autoload.php');

class Google extends Google_Client {
 function __construct($params = array()) {
 parent::__construct();
 }
}


