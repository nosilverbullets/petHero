<?php namespace Config;

define("ROOT", dirname(__DIR__) . "/");
//Path to your project's root folder

define("FRONT_ROOT", "/pethero/");

define("VIEWS_PATH", "Views/");
define("CSS_PATH", FRONT_ROOT.VIEWS_PATH . "css/");
define("JS_PATH", FRONT_ROOT.VIEWS_PATH . "js/");
define("USER_UPLOADS_PATH", "uploads/user-uploads/");
define("PET_UPLOADS_PATH", "uploads/pet-uploads/");
define("VACUNATION_UPLOADS_PATH", "uploads/vacunation-uploads/");
define("UPLOADS_PATH", "uploads/user-uploads/");

define("DB_HOST", "localhost");
define("DB_NAME", "pethero");
define("DB_USER", "root");
define("DB_PASS", "");
?>