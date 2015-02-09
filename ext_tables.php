<?php
if (!defined('TYPO3_MODE')) {
	die ('Access denied.');
}

// Erweiterung der Detailansicht eines Spieles um die Möglichkeit es als Top-Spiel zu markieren
$tempColumns = array (
	'tx_t3sportsextended_games_topgame' => array (		
		'exclude' => 0,		
		'label' => 'LLL:EXT:t3sportsextended/locallang_db.xml:tx_cfcleague_games.tx_t3sportsextended_games_topgame',		
		'config' => array (
			'type' => 'check',
		)
	),
);

t3lib_div::loadTCA('tx_cfcleague_games');
t3lib_extMgm::addTCAcolumns('tx_cfcleague_games',$tempColumns,1);
t3lib_extMgm::addToAllTCAtypes('tx_cfcleague_games','tx_t3sportsextended_games_topgame;;;;1-1-1','','after:match_no');

// Erweiterung der Detailansicht eines Spieles um ein statisches Feld Heimtrainer
$tempColumns = array (

	'tx_t3sportsextended_games_coach_home_static' => array (		
		'exclude' => 0,		
		'label' => 'LLL:EXT:t3sportsextended/locallang_db.xml:tx_cfcleague_games.tx_t3sportsextended_games_coach_home_static',		
		'config' => array (
			'type' => 'input',	
			'size' => '25',	
			'eval' => 'trim',
		)
	),
);

t3lib_div::loadTCA('tx_cfcleague_games');
t3lib_extMgm::addTCAcolumns('tx_cfcleague_games',$tempColumns,1);
t3lib_extMgm::addToAllTCAtypes('tx_cfcleague_games','tx_t3sportsextended_games_coach_home_static;;;;1-1-1','','after:substitutes_home_stat');

// Erweiterung der Detailansicht eines Spieles um ein statisches Feld Gasttrainer
$tempColumns = array (

	'tx_t3sportsextended_games_coach_guest_static' => array (		
		'exclude' => 0,		
		'label' => 'LLL:EXT:t3sportsextended/locallang_db.xml:tx_cfcleague_games.tx_t3sportsextended_games_coach_guest_static',		
		'config' => array (
			'type' => 'input',	
			'size' => '25',	
			'eval' => 'trim',
		)
	),
);

t3lib_div::loadTCA('tx_cfcleague_games');
t3lib_extMgm::addTCAcolumns('tx_cfcleague_games',$tempColumns,1);
t3lib_extMgm::addToAllTCAtypes('tx_cfcleague_games','tx_t3sportsextended_games_coach_guest_static;;;;1-1-1','','after:substitutes_guest_stat');

// Erweiterung der Detailansicht eines Spieles um eine Überschrift und einen Untertitel beim Spielbericht
$tempColumns = array (
	'tx_t3sportsextended_report_headline' => array (		
		'exclude' => 0,		
		'label' => 'LLL:EXT:t3sportsextended/locallang_db.xml:tx_cfcleague_games.tx_t3sportsextended_report_headline',		
		'config' => array (
			'type' => 'input',	
			'size' => '40',	
			'eval' => 'trim',
		)
	),
	'tx_t3sportsextended_report_subtitle' => array (		
		'exclude' => 0,		
		'label' => 'LLL:EXT:t3sportsextended/locallang_db.xml:tx_cfcleague_games.tx_t3sportsextended_report_subtitle',		
		'config' => array (
			'type' => 'input',	
			'size' => '40',	
			'eval' => 'trim',
		)
	),
);

t3lib_div::loadTCA('tx_cfcleague_games');
t3lib_extMgm::addTCAcolumns('tx_cfcleague_games',$tempColumns,1);
t3lib_extMgm::addToAllTCAtypes('tx_cfcleague_games','tx_t3sportsextended_report_headline;;;;1-1-1, tx_t3sportsextended_report_subtitle','','before:game_report');

// Erweiterung der Detailansicht einer Person um ein Feld für die Telefonnummer
$tempColumns = array (
	'tx_t3sportsextended_profiles_phone' => array (		
		'exclude' => 0,		
		'label' => 'LLL:EXT:t3sportsextended/locallang_db.xml:tx_cfcleague_profiles.tx_t3sportsextended_profiles_phone',		
		'config' => array (
			'type' => 'input',	
			'size' => '30',	
			'eval' => 'trim',
		)
	),
);

t3lib_div::loadTCA('tx_cfcleague_profiles');
t3lib_extMgm::addTCAcolumns('tx_cfcleague_profiles',$tempColumns,1);
t3lib_extMgm::addToAllTCAtypes('tx_cfcleague_profiles','tx_t3sportsextended_profiles_phone;;;;1-1-1','','after:email');
?>