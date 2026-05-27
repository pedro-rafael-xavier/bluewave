<?php

require_once __DIR__ . "/../config/config.php";

// Database
require_once __DIR__ . "/helpers/database_helper.php";

// Core content 

require_once __DIR__ . "/helpers/home_helper.php";
require_once __DIR__ . "/helpers/about_helper.php";

// Dynamic sections

require_once __DIR__ . "/helpers/carousel_helper.php";
require_once __DIR__ . "/helpers/highlights_helper.php";
require_once __DIR__ . "/helpers/news_helper.php";
require_once __DIR__ . "/helpers/solutions_helper.php";
require_once __DIR__ . "/helpers/innovation_helper.php";
require_once __DIR__ . "/helpers/contact_helper.php";
require_once __DIR__ . "/helpers/partners_helper.php";
require_once __DIR__ . "/helpers/banners_helper.php";

// Utilities 
require_once __DIR__ . "/helpers/extras_helper.php";

// Backoffice 
require_once __DIR__ . "/helpers/backoffice_helper.php";

?>