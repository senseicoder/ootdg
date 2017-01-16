<?php

require_once CHEMIN_LIB_PARTAGEE . '/oowiki/coeur.inc.php';
require_once dirname(__FILE__) . '/config.inc.php';
require_once CHEMIN_LIB_PARTAGEE . '/oowiki/data.inc.php';
require_once CHEMIN_LIB_PARTAGEE . '/oowiki/html.inc.php';
require_once CHEMIN_LIB_PARTAGEE . '/oowiki/import.inc.php';
require_once CHEMIN_LIB_PARTAGEE . 'oowiki/controler.inc.php';
require_once dirname(__FILE__) . '/structure.inc.php';
COOData::MajBdd(CConfTDG::$aTables);