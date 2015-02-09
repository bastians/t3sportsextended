#
# Table structure for table 'tx_cfcleague_games'
#
CREATE TABLE tx_cfcleague_games (
	tx_t3sportsextended_report_headline varchar(255) DEFAULT '' NOT NULL,
	tx_t3sportsextended_report_subtitle varchar(255) DEFAULT '' NOT NULL,
	tx_t3sportsextended_games_topgame tinyint(3) DEFAULT '0' NOT NULL
	tx_t3sportsextended_games_coach_home_static varchar(255) DEFAULT '' NOT NULL,
	tx_t3sportsextended_games_coach_guest_static varchar(255) DEFAULT '' NOT NULL,
);



#
# Table structure for table 'tx_cfcleague_profiles'
#
CREATE TABLE tx_cfcleague_profiles (
	tx_t3sportsextended_profiles_phone varchar(255) DEFAULT '' NOT NULL
);