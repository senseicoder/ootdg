<?php

if( ! isset($argv)) $argv = array();

require_once dirname(__FILE__) . '/base.inc.php';
$o = new OOControler(dirname(__FILE__), 'CConfTDG');
$o->Execute($argv);