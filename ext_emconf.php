<?php

/***************************************************************
 * Extension Manager/Repository config file for ext "t3sportsextended".
 *
 * Auto generated 23-03-2013 14:16
 *
 * Manual updates:
 * Only the data in the array - everything else is removed by next
 * writing. "version" and "dependencies" must not be touched!
 ***************************************************************/

$EM_CONF[$_EXTKEY] = array(
        'title' => 'T3SPORTS Extended',
        'description' => 'Erweiterung der Frontend-Extension von T3SPORTS um zusätzliche Felder (Überschrift und Untertitel bei Spielberichten, statisches Feld für Heim- und Gasttrainer, Spiel als TOP-Spiel markieren, Telefonnummer bei Personen hinzufügen)',
        'category' => 'plugin',
        'author' => 'Bastian Schlenker',
        'author_email' => 'info@be-linked.de',
        'shy' => '',
        'dependencies' => 'cfc_league,cfc_league_fe',
        'conflicts' => '',
        'priority' => '',
        'module' => '',
        'state' => 'beta',
        'internal' => '',
        'uploadfolder' => 0,
        'createDirs' => '',
        'modify_tables' => '',
        'clearCacheOnLoad' => 0,
        'lockType' => '',
        'author_company' => '',
        'version' => '0.0.3',
        'constraints' => array(
                'depends' => array(
                        'typo3' => '4.5.0-4.7.99',
                        'cfc_league' => '',
                        'cfc_league_fe' => '',
                ),
                'conflicts' => array(
                ),
                'suggests' => array(
                ),
        ),
        '_md5_values_when_last_written' => 'a:9:{s:9:"ChangeLog";s:4:"56a2";s:12:"ext_icon.gif";s:4:"0eb4";s:14:"ext_tables.php";s:4:"b4e0";s:14:"ext_tables.sql";s:4:"a275";s:17:"ext_tables_bk.php";s:4:"bf6e";s:16:"locallang_db.xml";s:4:"60c1";s:10:"README.txt";s:4:"ee2d";s:19:"doc/wizard_form.dat";s:4:"6f87";s:20:"doc/wizard_form.html";s:4:"246e";}',
        'suggests' => array(
        ),
);

?>