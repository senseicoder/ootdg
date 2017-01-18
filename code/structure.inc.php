<?php

class CConfTDG
{
	static $aTables = array();
}

#todo 
#fk potentiellement nulles ? 
#fusion records sur relation 1-1 entre projet et tâche primaire

#CConfTDG::$aTables['tdg_users'] = array(
#	'champs' => array(
#		'id' => array('type' => COOTypesChamps::PRIMARY, 'nature' => COONatureChamps::AUTOINC),
#		'lib' => array('type' => COOTypesChamps::STRING, 'nature' => COONatureChamps::SAISIE, 'label' => TRUE),
#	),
#	'index' => array(
#		'lib' => array('type' => COOIndex::UNIQUE, 'champs' => array('lib')),
#	),
#);

#CConfTDG::$aTables['tdg_users_domaines'] = array(
#	'champs' => array(
#		'id' => array('type' => COOTypesChamps::PRIMARY, 'nature' => COONatureChamps::AUTOINC),
#		'id_domaine' => array('type' => COOTypesChamps::FK, 'nature' => COONatureChamps::FK, 'FK' => 'tdg_domaines'),
#		'id_user' => array('type' => COOTypesChamps::FK, 'nature' => COONatureChamps::FK, 'FK' => 'tdg_users'),
#	),
#	'index' => array(
#		'lien' => array('type' => COOIndex::UNIQUE, 'champs' => array('id_domaine', 'id_user')),
#	),
#);

#CConfTDG::$aTables['tdg_domaines'] = array(
#	'champs' => array(
#		'id' => array('type' => COOTypesChamps::PRIMARY, 'nature' => COONatureChamps::AUTOINC),
#		'lib' => array('type' => COOTypesChamps::STRING, 'nature' => COONatureChamps::SAISIE, 'label' => TRUE),
#	),
#	'index' => array(
#		'lib' => array('type' => COOIndex::UNIQUE, 'champs' => array('lib')),
#	),
#);

#CConfTDG::$aTables['tdg_users_projets'] = array(
#	'champs' => array(
#		'id' => array('type' => COOTypesChamps::PRIMARY, 'nature' => COONatureChamps::AUTOINC),
#		'id_projet' => array('type' => COOTypesChamps::FK, 'nature' => COONatureChamps::FK, 'FK' => 'tdg_projets'),
#		'id_user' => array('type' => COOTypesChamps::FK, 'nature' => COONatureChamps::FK, 'FK' => 'tdg_users'),
#	),
#	'index' => array(
#		'lien' => array('type' => COOIndex::UNIQUE, 'champs' => array('id_projet', 'id_user')),
#	),
#);

CConfTDG::$aTables['tdg_projets'] = array(
	'champs' => array(
		'id' => array('type' => COOTypesChamps::PRIMARY, 'nature' => COONatureChamps::AUTOINC),
		#'id_domaine' => array('type' => COOTypesChamps::FK, 'nature' => COONatureChamps::FK, 'FK' => 'tdg_domaines'),
		'id_tache' => array('type' => COOTypesChamps::FK, 'nature' => COONatureChamps::FK, 'FK' => 'tdg_taches'),
		'lib' => array('type' => COOTypesChamps::STRING, 'nature' => COONatureChamps::SAISIE, 'label' => TRUE),
	),
	'index' => array(
		'lib' => array('type' => COOIndex::UNIQUE, 'champs' => array('lib')),
	),
);

CConfTDG::$aTables['tdg_taches'] = array(
	'champs' => array(
		'id' => array('type' => COOTypesChamps::PRIMARY, 'nature' => COONatureChamps::AUTOINC),
		'id_parente' => array('type' => COOTypesChamps::FK, 'nature' => COONatureChamps::FK, 'FK' => 'tdg_taches'),
		'lib' => array('type' => COOTypesChamps::STRING, 'nature' => COONatureChamps::SAISIE, 'label' => TRUE),
	),
	'index' => array(
		'lib' => array('type' => COOIndex::UNIQUE, 'champs' => array('lib')),
	),
);

#CConfTDG::$aTables['tdg_notes'] = array(
#	'champs' => array(
#		'id' => array('type' => COOTypesChamps::PRIMARY, 'nature' => COONatureChamps::AUTOINC),
#		'id_tache' => array('type' => COOTypesChamps::FK, 'nature' => COONatureChamps::FK, 'FK' => 'tdg_taches'),
#		'lib' => array('type' => COOTypesChamps::STRING, 'nature' => COONatureChamps::SAISIE, 'label' => TRUE),
#		'txt' => array('type' => COOTypesChamps::TEXT, 'nature' => COONatureChamps::SAISIE),
#	),
#	'index' => array(
#		'lib' => array('type' => COOIndex::UNIQUE, 'champs' => array('lib')),
#	),
#);