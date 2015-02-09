<?php
if (!defined('TYPO3_MODE')) {
	die ('Access denied.');
}
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
	'tx_t3sportsextended_games_coach_home' => array (		
		'exclude' => 0,		
		'label' => 'LLL:EXT:t3sportsextended/locallang_db.xml:tx_cfcleague_games.tx_t3sportsextended_games_coach_home',		
		'config' => array (
			'type' => 'input',	
			'size' => '40',	
			'eval' => 'trim',
		)
	),
	'tx_t3sportsextended_games_coach_guest' => array (		
		'exclude' => 0,		
		'label' => 'LLL:EXT:t3sportsextended/locallang_db.xml:tx_cfcleague_games.tx_t3sportsextended_games_coach_guest',		
		'config' => array (
			'type' => 'input',	
			'size' => '40',	
			'eval' => 'trim',
		)
	),
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
t3lib_extMgm::addToAllTCAtypes('tx_cfcleague_games','tx_t3sportsextended_report_headline;;;;1-1-1, tx_t3sportsextended_report_subtitle, tx_t3sportsextended_games_coach_home, tx_t3sportsextended_games_coach_guest, tx_t3sportsextended_games_topgame','','before:game_report');

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