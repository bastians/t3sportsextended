# 
# Table structure for table 'tx_cfcleague_games'
#
CREATE TABLE tx_cfcleague_games (
    tx_t3sportsextended_report_headline tinytext,
    tx_t3sportsextended_report_subtitle tinytext,
    tx_t3sportsextended_games_topgame tinyint(4) DEFAULT '0' NOT NULL,
    tx_t3sportsextended_games_coach_home_static text,
    tx_t3sportsextended_games_coach_guest_static text
);
#
# Table structure for table 'tx_cfcleague_profiles'
#
CREATE TABLE tx_cfcleague_profiles (
    tx_t3sportsextended_profiles_phone varchar(30) DEFAULT '' NOT NULL
);