<?php

//////////////////////////////////////////////////////////////
//===========================================================
// universal.php
//===========================================================
// SOFTACULOUS 
// Version : 1.1
// Inspired by the DESIRE to be the BEST OF ALL
// ----------------------------------------------------------
// Started by: Alons
// Date:       10th Jan 2009
// Time:       21:00 hrs
// Site:       http://www.softaculous.com/ (SOFTACULOUS)
// ----------------------------------------------------------
// Please Read the Terms of use at http://www.softaculous.com
// ----------------------------------------------------------
//===========================================================
// (c)Softaculous Inc.
//===========================================================
//////////////////////////////////////////////////////////////

if(!defined('SOFTACULOUS')){

	die('Hacking Attempt');

}

$globals['path'] = '';
$globals['softscripts'] = '';
$globals['sn'] = '';
$globals['cookie_name'] = '';
$globals['gzip'] = '';
$globals['language'] = '';
$globals['soft_email'] = '';
$globals['from_email'] = '';
$globals['theme_folder'] = '';
$globals['timezone'] = '';
$globals['mail'] = '';
$globals['mail_authtype'] = '';
$globals['mail_server'] = '';
$globals['mail_port'] = '';
$globals['mail_user'] = '';
$globals['mail_pass'] = '';
$globals['off'] = '';
$globals['off_subject'] = '';
$globals['off_message'] = '';
$globals['update'] = '';
$globals['update_softs'] = '';
$globals['add_softs'] = '';
$globals['email_update'] = '';
$globals['email_update_softs'] = '';
$globals['cron_time'] = '';
$globals['chmod_files'] = '';
$globals['chmod_dir'] = '';
$globals['is_vps'] = '';
$globals['eu_news_off'] = '';
$globals['eu_email_off'] = '';
$globals['random_username'] = '';
$globals['random_pass'] = '';
$globals['random_dbprefix'] = '';
$globals['off_demo_link'] = '';
$globals['off_screenshot_link'] = '';
$globals['off_rating_link'] = '';
$globals['off_review_link'] = '';
$globals['off_email_link'] = '';
$globals['logo_url'] = '';
$globals['php_bin'] = '';
$globals['chmod_conf_file'] = '';
$globals['off_sync_link'] = '';
$globals['off_panel_link'] = '';
$globals['no_prefill'] = '';
$globals['footer_link'] = '';
$globals['remote_mysql'] = '';
$globals['perl_scripts'] = '';
$globals['show_top_scripts'] = '';
$globals['append_apps'] = '';
$globals['user_mod_dir'] = '';
$globals['show_in_notice'] = '';
$globals['disable_classes'] = '';
$globals['panel_hf'] = '';
$globals['disable_backup_restore'] = '';
$globals['nolabels'] = '';
$globals['group_order'] = '';
$globals['disable_reseller_panel'] = '';
$globals['default_protocol'] = '';
$globals['network_interface'] = '';
$globals['proxy_ip'] = '';
$globals['proxy_port'] = '';
$globals['proxy_user'] = '';
$globals['proxy_pass'] = '';
$globals['proxy_check'] = '';
$globals['bandwidth_limit'] = '';
$globals['adomain_path'] = '';
$globals['empty_pass'] = '';
$globals['empty_username'] = '';
$globals['show_cscript_in_top'] = '';
$globals['pass_strength'] = '';
$globals['admin_prefix'] = '';
$globals['off_remove_mail'] = '';
$globals['off_backup_mail'] = '';
$globals['off_install_mail'] = '';
$globals['off_edit_mail'] = '';
$globals['disable_auto_backup'] = '';
$globals['bandwidth_up_limit'] = '';
$globals['webuzo_disable_username'] = '';
$globals['off_clone_mail'] = '';
$globals['disable_clone'] = '';
$globals['disable_backup_upgrade'] = '';
$globals['ephp_bin'] = '';
$globals['no_ampps'] = '';
$globals['no_strong_mysql_pass'] = '';
$globals['install_tweet_off'] = '';
$globals['install_tweet'] = '';
$globals['upgrade_tweet_off'] = '';
$globals['upgrade_tweet'] = '';
$globals['clone_tweet_off'] = '';
$globals['clone_tweet'] = '';
$globals['no_ftp_encrypted'] = '';
$globals['salt'] = '';
$globals['pre_download_all'] = '';
$globals['session_timeout'] = '';
$globals['eu_enable_themes'] = '';
$globals['auto_backup_limit'] = '';
$globals['disable_cats'] = '';
$globals['remove_dir'] = '';
$globals['remove_db'] = '';
$globals['remove_datadir'] = '';
$globals['remove_wwwdir'] = '';
$globals['custom_handler'] = '';
$globals['custom_protocol'] = '';
$globals['blank_domain'] = '';
$globals['ent_dbhost'] = '';
$globals['ent_db'] = '';
$globals['ent_dbuser'] = '';
$globals['ent_dbuserpass'] = '';
$globals['off_upgrade_plugins'] = '';
$globals['off_upgrade_themes'] = '';
$globals['eu_themes_premium'] = '';
$globals['amp_path'] = '';
$globals['amp_php'] = '';
$globals['amp_private'] = '';
$globals['amp_htdocs'] = '';
$globals['disable_auto_backup_daily'] = '';
$globals['disable_auto_backup_weekly'] = '';
$globals['disable_auto_backup_monthly'] = '';
$globals['backups_expire'] = '';
$globals['max_backups'] = '';
$globals['default_hf_bg'] = '';
$globals['default_cat_hover'] = '';
$globals['default_hf_text'] = '';
$globals['default_scriptname_text'] = '';
$globals['enable_myins'] = '';
$globals['default_landing'] = '';
$globals['curl_timeout'] = '';
$globals['no_add_domain'] = '';
$globals['enable_auto_upgrade'] = '';
$globals['force_auto_upgrade'] = '';
$globals['set_backup_dir'] = '';
$globals['off_restore_mail'] = '';
$globals['off_customize_theme'] = '';
$globals['enc_db_pass'] = '';
$globals['hide_api_pass'] = '';
$globals['time_format'] = '';
$globals['off_backup_au'] = '';
$globals['pref_cron_minute'] = '';
$globals['pref_cron_hour'] = '';
$globals['pref_cron_day'] = '';
$globals['pref_cron_weekday'] = '';
$globals['no_prefill_db'] = '';


$globals['enduser'] = $globals['path'].(substr_count($globals['path'], 'directadmin') > 0 ? '/images' : '/enduser');
$globals['mainfiles'] = $globals['enduser'].'/main';
$globals['adminfiles'] = $globals['mainfiles'].'/admin';
$globals['euthemes'] = $globals['enduser'].'/themes';

?>