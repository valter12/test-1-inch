<?php
///////////////////////////////////////////////////////////////////////////////////////
// CUBUS Translation                                             http://www.cubus.md //
///////////////////////////////////////////////////////////////////////////////////////
// Please read the license.txt file before using / modifying this software           //
// Original author:         CUBUS Tranlsation, CUBUS - info@cubus.md                 //
// Last modification date:  28.01.2008                                               //
// Version:                 CUBUS  0.3b                                              //
//                                                                                   //
// (C) 2007-2009  CUBUS Translation - All rights reserved                            //
///////////////////////////////////////////////////////////////////////////////////////


// SYSTEM INSTALLATION DETECTION //////////////////////////////////////////////////////	
	define("INSTALLED", true);

// RETROCOMPATIBILITY MODE ////////////////////////////////////////////////////////////
	$CONF["RETRO_844_COMPAT_MODE"] = 						false;

// MYSQL-RELATED CONFIGURATIONS ///////////////////////////////////////////////////////
	
	/*
	$CONF["MYSQL_DATABASE_TABLES_PREFIX"] =					"cubustrans_";
	$CONF["MYSQL_DATABASE_USERNAME"] =						"root";
	$CONF["MYSQL_DATABASE_PASSWORD"] =						"";
	$CONF["MYSQL_DATABASE_HOSTNAME"] = 						"localhost";
	$CONF["MYSQL_DATABASE_DATABASENAME"] =					"cubus_nou";
	*/
 	
 	$CONF["MYSQL_DATABASE_TABLES_PREFIX"] =					"cubustrans_";
	$CONF["MYSQL_DATABASE_USERNAME"] =						"focusgr_betacub";
	$CONF["MYSQL_DATABASE_PASSWORD"] =						"azsxdc";
	$CONF["MYSQL_DATABASE_HOSTNAME"] = 						"mysql.royaltyservers.com";
	$CONF["MYSQL_DATABASE_DATABASENAME"] =					"focusgr_betacubus";
	
	
// ERROR HANDLING & DEBUG CONFIGURATIONS //////////////////////////////////////////////
	$CONF["ERROR_BROWSER_OUTPUT"] =							true;
	$CONF["ERROR_LOGFILE_OUTPUT"] = 						true;
	$CONF["ERROR_REPORT_ERRORS"] = 							true;
	$CONF["ERROR_REPORT_WARNINGS"] =						true;
	$CONF["ERROR_REPORT_PARSES"] =							true;
	$CONF["ERROR_REPORT_NOTICES"] = 						false;
	$CONF["MYSQL_ONSCREEN_ERROR_REPORTS"] =					true;

// SYSTEM ERROR MESSAGES //////////////////////////////////////////////////////////////
	$CONF["404_NOT_FOUND_ERROR_MESSAGE"] =					"404, Page not found";
	$CONF["NO_ACCESS_MESSAGE"] =							"Sorry. You are not allowed to access this page";

// LOGIN SYSTEM CONFIGURATIONS ////////////////////////////////////////////////////////
	$CONF["SESSION_CACHE_EXPIRE"] = 31536000;
	$CONF["SESSION_CACHE_LIMITER"] = 0;
	$CONF["SESSION_NAME"] = "CUBUS";
	$CONF["SESSION_SAVE_PATH"] = 0;
	$CONF["SESSION_OVERRIDE"] = 							true;
	$CONF["LOGIN_SIGNAL_TRIGGER"] = "userlogin";
	$CONF["LOGIN_REQUIRE_ACTIVE"] = 1;
	$CONF["LOGIN_ROUTE_TO"] = "?L=pictures.upload";
	$CONF["LOGIN_FIRST_ROUTE_TO"] = "?L=pictures.upload";
	$CONF["LOGIN_FAILED_ERROR_MESSAGE"] = "Incorrect login information";
	$CONF["LOGIN_BRUTEFORCE_PROTECT:ENABLE"] = 1;
	$CONF["LOGIN_BRUTEFORCE_FAILCOUNT"] = 5;
	$CONF["LOGIN_BRUTEFORCE_DISABLE_DURATION"] = 3600;
	$CONF["LOGIN_BRUTEFORCE_SHOWERROR"] = 1;
	$CONF["LOGIN_BRUTEFORCE_ERROR_MESSAGE"] = "Too many login failures. Account suspended";
	$CONF["LOGIN_REMEMBERME_ENABLED"] = 1;
	$CONF["LOGIN_REMEMBERME_COOKIENAME"] = "phpizabi_relogin";
	$CONF["LOGIN_REMEMBERME_SHOWOPTION"] = 0;
	$CONF["LOGIN_REMEMBERME_TIMETOLIVE"] = 2592000;
	$CONF["LOGOUT_SIGNAL_TRIGGER"] = "logout";
	$CONF["LOGOUT_ROUTE_TO"] = "?L";


// MAINTENANCE MODE CONFIGURATIONS ////////////////////////////////////////////////////
	$CONF["MAINTENANCE_MODE_ON"] = 							false;
	$CONF["MAINTENANCE_MODE_TEMPLATE"] = 					"!theme/default/templates/GLOBALS/maintenance_mode.tpl";
	$CONF["MAINTENANCE_MODE_ADMIN_TEMPLATE"] =				"!theme/default/templates/GLOBALS/maintenance_admin.tpl";

// THEMES CONFIGURATIONS //////////////////////////////////////////////////////////////
	$CONF["DEFAULT_THEME"] = 								"default";
	$CONF["ALLOW_THEME_OVERRIDE"] = 						false;
	$CONF["SHARE_FRAME_FILE_WITH_HOME"] =					true;
	$CONF["HOME_THEME_FILE"] = 								"home";
	$CONF["FRAME_THEME_FILE"] = 							"frame.tpl";
	$CONF["FRAME_THEME_FILE_INT"] = 						"frame_int.tpl";
	$CONF["FRAME_THEME_FILE_MODERATOR"] =                   "frame.tpl";
	$CONF["DOCUMENT_ENCODING"] = 							"text/html; charset=iso-8859-1";
	$CONF["META_DESCRIPTION"] =								"PHPizabi - Create worlds";
	$CONF["META_KEYWORDS"] =								"PHPizabi, Communities, Community, Software, PHP, Script";
	$CONF["ALLOW_LANGUAGE_ENCODING_OVERRIDE"] = 			true;
	$CONF["ALLOW_CHROME_CONTROL"] = 						true;

// MISCS SETTINGS /////////////////////////////////////////////////////////////////////
	$CONF["ALLOW_USERNAMES_URL_CALLS"] = 					true;
	$CONF["USE_SELFDATA_DUAL_BUFFERING"] =					true;
	$CONF["BAN_INFO_FILE"] =								"system/cache/ban.dat";
	$CONF["BAN_TEMPLATE_FILE"] =							"STRICT:banned.tpl";
	$CONF["TRANSLATOR_ENABLED"] =							true;
	$CONF["TRANSLATOR_FLAT_MODE"] =							false;
	$CONF["HOROSCOPES_DATAFILE"] =							"system/cache/horoscopes.dat";
	$CONF["NOTIFICATIONS_DATAFILE"] =						"system/cache/notifications.dat";

	$CONF["USE_VIRTUAL_HOSTS"] =							false;
	$CONF["VIRTUAL_HOSTS_AUTO_TRY_PREFIX"] =				true;
	$CONF["VIRTUAL_HOSTS_INFOFILE"] =						"system/cache/virtual_hosts.dat";
	
	$CONF["ENABLE_USER_LEVEL_HERITAGE"] =					true;
	$CONF["HERITAGE_INFOFILE"] =							"system/cache/ul_heritage.dat";
	
	$CONF["BODY_TRIM_METHOD_STRLEN"] =						false; // False will use "words" trimming instead //
	
	$CONF["HTTPS_ROLLBACK"] =								false;
	$CONF["DISTANCE_VALUES_UNIT:MILES"] =					true;
	
// SEARCH CONFIGURATIONS //////////////////////////////////////////////////////////////
	$CONF["SEARCH_RESULTS_PER_PAGE"] =						10;
	$CONF["SEARCH_PAGINATION_PADDING"] =					10;
	$CONF["SEARCH_PRIORITIZE_ACCOUNTTYPES"] =				false;
	$CONF["SEARCH_REQUIRES_ACTIVE"] =						false;
	
// ACCESS RESTRICTIONS CONTROL RULES //////////////////////////////////////////////////
	$CONF["DEFAULT_ACCESS_RULE:ALLOW"] =					true;
	
// HELP SYSTEM CONFIGURATION //////////////////////////////////////////////////////////
	$CONF["HELP_REPROCESS_ORIGIN"] =						true;
	$CONF["HELP_QUERY_ORIGIN_KEY"] =						true;
	$CONF["HELP_FORCE_ORIGIN"] =							false;
	$CONF["HELP_RELATED_RESULTS_LIMIT"] =					10;

// BANNING CONTROL ////////////////////////////////////////////////////////////////////
	$CONF["BAN_ENABLE_BANCHECK"] =							true;
	$CONF["BAN_CHECK_PROXY"] =								true;
	$CONF["BAN_ENFORCE"] =									true;
	$CONF["BAN_INFOFILE"] =									"system/cache/ban.dat";
	$CONF["BAN_TEMPLATE_FILE"] =							"STRICT:banned.tpl";
	$CONF["BAN_FORCE_SUICIDE"] = 							true;
	$CONF["BAN_FORCE_SUICIDE_MESSAGE"] =					"Banned";

// GENERAL SITE CONFIGURATIONS ////////////////////////////////////////////////////////
	$CONF["SITE_NAME"] = "CUBUS Translation";
	$CONF["SITE_SYSTEM_EMAIL"] = "info@cubus.md";
	$CONF["SITE_ADMIN_EMAIL"] = "info@cubus.md";
	$CONF["SITE_CONTACT_US"] = "Report Abuse:feedback@realitymedias.com,Accounting:reality";
	$CONF["USERS_GENDERS"] = "Man,Woman";
	$CONF["USERS_MIN_AGE"] = 18;
	$CONF["USERS_USERNAME_MIN_LEN"] = 3;
	$CONF["USERS_USERNAME_MAX_LEN"] = 25;
	$CONF["USERS_PASSWORD_MIN_LEN"] = 5;
	$CONF["REGISTER_YEAR_STARTAT"] = 1901;

// REGISTRATION-RELATED CONFIGURATIONS ////////////////////////////////////////////////
	$CONF["REGISTRATION_AUTO_APPROVE"] = 1;
	$CONF["REGISTRATION_APPROVE_UPON_EMAIL_CHECK"] = 1;
	$CONF["REGISTRATION_ALLOW_DUPLICATE_EMAIL"] = 0;
	$CONF["REGISTRATION_PASSWORD_MIN_CHAR"] = 3;
	$CONF["REGISTRATION_SAVE_REFERENCE"] = 1;
	$CONF["REGISTRATION_REFERENCE:HTTP_REFERER"] = 0;

// DISPLAY SETTINGS ///////////////////////////////////////////////////////////////////
	$CONF["DISPLAY_PROFILE_DATA:INLINE"] =					true;	

// REGULAR EXPRESSIONS ////////////////////////////////////////////////////////////////
	$CONF["REGEXP_EMAIL"] =									"/^[A-z0-9][\w.-]*@[A-z0-9][\w\-\.]+\.[A-z0-9]{2,6}$/";
	$CONF["REGEXP_USERNAME"] =								"/^[\w\d._-]+$/";

// OUTPUT POSTPROCESS /////////////////////////////////////////////////////////////////
	$CONF["POST_PROCESS_CLEAN_OUTPUT"] =					false;
	$CONF["POST_PROCESS_COMPRESS_OUTPUT"] =					false;
	$CONF["POST_PROCESS_COMPRESSION_RATE"] =				5;

// TABS CONFIGURATIONS ////////////////////////////////////////////////////////////////
	$CONF["TABS_DATAFILE"] =								"system/cache/tabs.dat";

// INKSPOT CONFIGURATIONS /////////////////////////////////////////////////////////////
	$CONF["INKSPOT_DATA_FILE"] =							"system/cache/inkspot.dat";
	$CONF["INKSPOT_POSTS_PER_PAGE"] =						10;
	$CONF["INKSPOT_PAGINATION_PADDING"] =					10;
	$CONF["INKSPOT_SPAN_POSTS"] =							true;
	$CONF["INKSPOT_SPAN_CHARLEN"] =							6000;

// INTERNAL MAILS CONFIGURATIONS //////////////////////////////////////////////////////
	$CONF["MAILS_INBOX_NAME"] = 							"INBOX";
	$CONF["MAILS_TRASHBOX_NAME"] = 							"TRASH";
	$CONF["MAILS_SENTBOX_NAME"] =							"SENT";
	$CONF["MAILS_AUTO_KEEP_SENT"] =							true;
	$CONF["MAILS_SENT_SUBJECT_PREFIX"] = 					"To: ";
	$CONF["MAILS_REPLY_SUBJECT_PREFIX"] =					"Re: ";
	$CONF["MAILS_REPLY_QUOTE_SEPARATOR_PREFIX"] = 			"\n\n[quote]\n";
	$CONF["MAILS_REPLY_QUOTE_SEPARATOR_SUFFIX"] = 			"\n[/quote]\n";
	$CONF["MAILS_FORWARD_SUBJECT_PREFIX"] =					"Fw: "; 
	$CONF["MAILS_FORWARD_BODY_PREFIX"] = 					"From: {originalUsername}, Forwarded by: {forwarderUsername}\n\n[quote]\n";
	$CONF["MAILS_FORWARD_FROM_ORIGIN"] =					true;
	$CONF["MAILS_FORWARD_BODY_SUFFIX"] = 					"\n[/quote]\n";
	$CONF["MAILS_QUOTA_MAX_KILOBYTES"] =					100;
	$CONF["MAILS_CUSTOM_MAILBOX_ALLOWED"] =					true;
	$CONF["MAILS_CUSTOM_MAILBOX_NAME_MAX_LEN"] =			20;
	$CONF["MAILS_CUSTOM_MAILBOX_MAX_BOXES"] = 				4;
	$CONF["MAILS_MAX_SUBJECT_LENGHT"] = 					100;
	$CONF["MAILS_MIN_REMAIL_DELAY"] =						15;
	
	$CONF["MAILS_USERTYPE_QUOTA_OVERRIDE"] =				true;									// ??
	$CONF["MAILS_USERTYPE_QUOTA_INFOFILE"] =				"system/cache/mailquotas.dat";			// ??

// LOCALES SETTINGS ///////////////////////////////////////////////////////////////////
	$CONF["LOCALE_SHORT_DATE_TIME"] = "m/d/y h:i";
	$CONF["LOCALE_SHORT_DATE"] = "m/d/y";
	$CONF["LOCALE_SHORT_TIME"] = "g:i A";
	$CONF["LOCALE_LONG_DATE_TIME"] = "l, F jS Y, g:i A";
	$CONF["LOCALE_LONG_DATE"] = "l, F jS Y";
	$CONF["LOCALE_LONG_TIME"] = "h:i:s A";
	$CONF["LOCALE_HEADER_TIME"] = "h:i A";
	$CONF["LOCALE_HEADER_DATE_TIME"] = "M. jS h:i A";
	$CONF["LOCALE_HEADER_DATE"] = "M. jS";
	$CONF["LOCALE_MONETARY_ISO639"] = "en_US";
	$CONF["LOCALE_MONETARY_ISO3166"] = "USA";
	$CONF["LOCALE_MONETARY_STRINGFORMAT"] = "%i";
	$CONF["LOCALE_MONETARY_USEISO:639"] = 1;
	$CONF["LOCALE_MONETARY_RETURNFLAT"] = 0;
	$CONF["LOCALE_SITE_LANGUAGES"] = "ro,ru";
	$CONF["LOCALE_LANGUAGE_ALLOW_OVERRIDE"] = 1;
	$CONF["LOCALE_SITE_DEFAULT_LANGUAGE"] = "ro";
	$CONF["LOCALE_LANGUAGEPACK_LOCATION"] = "system/cache/languages";
	$CONF["LOCALE_LANGUAGEPACK_TRYDEFAULT_ON_ERROR"] = 1;
	$CONF["LOCALE_LANGUAGE_CACHE_ON_LOAD_SUCCESS"] = 1;
	$CONF["LOCALE_SYSTEM_TIMEZONE"] = "+02:00";
	$CONF["LOCALE_FORCE_UTF8_HEADER_OVERRIDE"] = 1;

// MAILS CONFIGURATIONS ///////////////////////////////////////////////////////////////
	$CONF["SYSMAIL_USE_IMAP_GATE"] = 						false; //// DEPRECATED ////
	$CONF["SYSMAIL_ROLLBACK_ON_ERROR"] =					true;  //// DEPRECATED ////
	$CONF["SYSMAIL_CONVERT_CR_TO_BR"] = 					false; //// DEPRECATED ////
	$CONF["SYSMAIL_CONVERT_NR_TO_N"] =						true;  //// DEPRECATED ////
	$CONF["SYSMAIL_STRIP_TAB"] =		 					true;  //// DEPRECATED ////
	
// SENDMAIL CLASS CONFIGURATIONS //////////////////////////////////////////////////////
	$CONF["MAIL_METHOD"] = "smtp";
	$CONF["MAIL_CHARSET"] = "iso-8859-1";
	$CONF["MAIL_ENCODING"] = "8bit";
	$CONF["MAIL_SMTP_HOST"] = "mail.cubus.md";
	$CONF["MAIL_SMTP_PORT"] = 25;
	$CONF["MAIL_SMTP_USER"] = "info@cubus.md";
	$CONF["MAIL_SMTP_PASSWORD"] = "cubus14";
	$CONF["MAIL_SMTP_TIMEOUT"] = 10;
	$CONF["MAIL_SENDMAIL_PATH"] = "/usr/sbin/sendmail";

// LOGGING AND STATISTICS /////////////////////////////////////////////////////////////
	$CONF["LOG_ENABLED"] =									true;
	$CONF["LOG_DIRECTORY"] =								"system/cache/logs";
	$CONF["LOG_ERRORLOG_FILE"] =							"errors.log";
	$CONF["LOG_DAILY_MODE"] =								true;
	$CONF["LOG_FILE_EXTENTION"] =							"log";
	$CONF["LOG_UNILOG_FILE"] =								"phpizabi.log";
	$CONF["LOG_CHROMELESS_CALLS"] =							true;
	$CONF["LOG_DATA_SEPARATORS"] =							"||";
	$CONF["LOG_LINE_SEPARATORS"] =							"\r\n";
	$CONF["LOG_LOGFILE_ERROR:OPEN"] = 						"Error openning the log file";
	$CONF["LOG_LOGFILE_ERROR:WRITE"] = 						"Error writing to log file";

// UPLOADS, FILES AND PICTURES ////////////////////////////////////////////////////////
	$CONF["PICTURES_MAX_SIZE"] = 777777;
	$CONF["PICTURES_MAX_TOTAL_SIZE"] = "M10";
	$CONF["PICTURES_MAX_TOTAL_FILES"] = 100;
	$CONF["PICTURES_MAX_GALLERIES"] = 100;
	$CONF["PICTURES_MAX_FILES_PER_GALLERIE"] = 100;
	$CONF["PICTURES_ALLOW_DATAFILE_OVERRIDE"] =				true;
	$CONF["PICTURES_DATAFILE"] =							"system/cache/picturesQuota.dat";
	$CONF["PICTURES_ALLOWED_EXTENTIONS"] = "gif,jpg,jpeg,png,doc,txt,xls,rtf,pdf,ppt";
	$CONF["FILES_COUNTED_EXTENTIONS"] = "doc,txt,rtf";
	$CONF["PICTURES_AUTO_APPROVE"] = 0;
	$CONF["ATTACHMENT_MAX_SIZE"] = "K100";
	$CONF["ATTACHMENT_MAX_TOTAL_SIZE"] = "M10";
	$CONF["ATTACHMENT_MAX_TOTAL_FILES"] = 100;
	$CONF["ATTACHMENT_ALLOW_DATAFILE_OVERRIDE"] =			true;
	$CONF["ATTACHMENT_DATAFILE"] =							"system/cache/attachQuota.dat";
	$CONF["ATTACHMENT_ALLOWED_EXTENTIONS"] = "txt,doc,zip,rar,gif,jpg,jpeg,png,pdf,rtf,bmp,ppt";
	$CONF["MAX_UPLOAD_FILE_SIZE"] = "10485760";

	
// CHAT SYSTEM ////////////////////////////////////////////////////////////////////////
	$CONF["CHAT_DEFAULT_CHANNEL"] =							"#general";
	$CONF["CHAT_GUEST_PREFIX"] =							"Guest";
	$CONF["CHAT_GUEST_SUFFIX"] =							false;
	$CONF["CHAT_GUEST:USE_IP"] =							true;
	
// GEOLOCALIZATION ////////////////////////////////////////////////////////////////////
	$CONF["GEOLOC_PROVIDER_URL"] =							"demo.phpizabi.net/geo.php";//"geoserve.phpizabi.net";
	$CONF["GEOLOC_PROVIDER_PORT"] =							80;
	$CONF["GEOLOC_USERNAME"] =								"";
	$CONF["GEOLOC_PASSWORD"] =								"";
	$CONF["GEOLOC_STREAM_MARKER"] =							"GEO:";
	$CONF["GEOLOC_ALLOW_UPDATE:CITY"] =						true;
	$CONF["GEOLOC_ALLOW_UPDATE:STATE"] =					true;
	$CONF["GEOLOC_ALLOW_UPDATE:COUNTRY"] =					true;
	$CONF["GEOLOC_ALLOW_UPDATE:ZIPCODE"] =					true;
	$CONF["GEOLOC_POST:CITY"] =								true;
	$CONF["GEOLOC_POST:STATE"] =							true;
	$CONF["GEOLOC_POST:COUNTRY"] =							true;
	$CONF["GEOLOC_POST:ZIPCODE"] =							true;
	$CONF["GEOLOC_STRAPON_REGISTER"] =						true;
	$CONF["GEOLOC_STRAPON_ZIPCHANGE"] =						true;

// IMAGE PROCESSOR ////////////////////////////////////////////////////////////////////
	$CONF["IMAGE_ENABLE_PROCESSOR:GD"] =					true;
	$CONF["IMAGE_PROCESSOR:GD2"] =							true;
	$CONF["IMAGE_DEFAULT_DIRECTORY"] =						"system/cache/pictures";
	$CONF["IMAGE_PROCESSOR_DEBUG_MODE"] =					false;
	$CONF["IMAGE_FORCE_CONSTRAIN_PROPORTIONS"] =			true;      // DEPRECATED //
	$CONF["IMAGE_PROCESS_MODE"] = 							"fill";
	$CONF["IMAGE_CONSTRAIN_PROPORTIONS_ASPECT_RATIO"] =		0.75;
	$CONF["IMAGE_MAX_FILE_SIZE"] =							777777;
	$CONF["IMAGE_HEADER_STRING"] =							"Content-type: image/jpeg";
	$CONF["IMAGE_NOFILE_DEFAULT_FILE"] =					"nopicture.gif";
	$CONF["IMAGE_CACHE_PROCESSED"] =						true;
	$CONF["IMAGE_CACHE_DISPLAY:USE_FORWARD"] =				true;
	$CONF["IMAGE_USE_STAMP_TEXT"] =							true;
	$CONF["IMAGE_STAMP_TEXT"] =								"PHPizabi";
	$CONF["IMAGE_STAMP_TEXT_COLOR"] =						"0,0,0";
	$CONF["IMAGE_STAMP_TEXT_SIZE"] =						10;
	$CONF["IMAGE_STAMP_TEXT_LOCATION_Y"] =					"top"; // top, middle, bottom
	$CONF["IMAGE_STAMP_TEXT_LOCATION_X"] =					"left"; // left, middle, right
	$CONF["IMAGE_STAMP_TEXT_PADDING_Y"] =					5;
	$CONF["IMAGE_STAMP_TEXT_PADDING_X"] =					5;
	$CONF["IMAGE_STAMP_TEXT_DROPHILIGHT"] =					true;
	$CONF["IMAGE_STAMP_TEXT_DROPHILIGHT_DEPHASE"] =			1;
	$CONF["IMAGE_STAMP_TEXT_DROPHILIGHT_COLOR"] =			"255,255,255";
	$CONF["IMAGE_QUALITY"] =								95;
	$CONF["IMAGE_MAX_WIDTH"] =								600;
	$CONF["IMAGE_THUMBNAILS_SIZE"] =						90;
	$CONF["IMAGE_STAMP_MINWIDTH"] = 						100;
	$CONF["IMAGE_USE_WATERMARK"] = 							false;
	$CONF["IMAGE_WATERMARK_FILE"] = 						"";
	$CONF["IMAGE_WATERMARK_PADDING"] = 						10;
	$CONF["IMAGE_WATERMARK_RESIZE_FACTOR"] = 				40;
	$CONF["IMAGE_WATERMARK_MINWIDTH"] = 					100;
	$CONF["IMAGE_WATERMARK_BLEND_VISIBILITY"] = 			80;
	
// SCHEDULED TASKS ////////////////////////////////////////////////////////////////////
	$CONF["CRON_CYCLE_DELAY"] =								60*10;

	// Cron cleans the chat IO buffer //
	$CONF["CRON_CLEAR_CHAT_IO"] =							true;
	$CONF["CRON_CLEAR_CHAT_IO_DELAY"] =						60*30; 		// 30 minutes //

	// Cron clear old lane tokens //
	$CONF["CRON_CLEAR_LANE_TOKEN"] =						true;
	$CONF["CRON_CLEAR_LANE_TOKEN_DELAY"] =					60*60;		// 60 minutes //
	$CONF["CRON_CLEAR_LANE_TOKEN_OLD_THRESHOLD"] =			1800;		// tokens older than 30 minutes ago //
	
	// Cron optimizes database tables
	$CONF["CRON_OPTIMIZE_DATABASE"] =						true;
	$CONF["CRON_OPTIMIZE_DATABASE_DELAY"] =					60*60*24*7;  // One week //

	// Cron backup the configuration file
	$CONF["CRON_BACKUP_CONFIGURATIONS"] =					true;
	$CONF["CRON_BACKUP_CONFIGURATIONS_DELAY"] =				60*60*24*7;  // One week //
	$CONF["CRON_BACKUP_CONFIG_FILE"] =						"system/cache/backups/conf-[DATE].back.php";

	// Cron updage users ages avalues
	$CONF["CRON_UPDATE_AGE_VALUE"] =						true;
	$CONF["CRON_UPDATE_AGE_VALUE_DELAY"] =					60*60*24;    // Once a day //
	
	// Cron update geoloc data
	$CONF["CRON_UPDATE_GEODATA"] =							true;
	$CONF["CRON_UPDATE_GEODATA_DELAY"] =					60*60*24;    // Once a day //
	
	// Cron build stats from logs
	$CONF["CRON_BUILD_STATS"] =								true;
	$CONF["CRON_BUILD_STATS_DELAY"] = 						60*60*24;    // Once a day //
	
	
	$CONF["CRON_LOGFILE"] =									"system/cache/logs/cron.log";

	$CONF["CRON_DATABASE_BACKUP"] =							true;
	$CONF["CRON_DATABASE_BACKUP_METHOD:PHP"] =				false;
	$CONF["CRON_DATABASE_BACKUP_FILE"] =					"system/cache/backups/dbBK-[DATE]";

// WAP ////////////////////////////////////////////////////////////////////////////////
	$CONF["WAP_GATEWAY_ENABLED"] =							true;
	$CONF["WAP_LOGIN_ROUTE_TO"] = 							"?L=wap.desktop";
	$CONF["WAP_HOME_FILE"] =								"wap/index";

// Links ////////////////////////////////////////////////////////////////////////////////
	$CONF["css_files"] =					    		    'theme/default/components/css';
	$CONF["js_files"]  = 				    	    	    'theme/default/components/js';
	$CONF["img_files"] =	 				    	        'theme/default/components/images';
	
// Account Payment Images /////////////////////////////////////////////////////////////////
 	$CONF["AP_LINK"] =			    		    		    'theme/default/components/images/ap/';
	$CONF["AP_IMG_COMPANY_LOGO"] =	   		    		    'image001.jpg';
	$CONF["AP_IMG_SIGNATURE"] =		   		    		    'image004.jpg';
	$CONF["AP_IMG_STAMP"] =			   		    		    'image003.png';
	$CONF["AP_IMG_SMALL_COMPANY_LOGO"] =	    		    'image005.jpg';
 	
	
	$CONF["new_files"] =	 				    	        'sys/pictures';
	$CONF["edited_files"] =	 				    	        'sys/editate';
	$CONF["translated_files"] =				    	        'sys/translation';
	$CONF["account_payment"] =				    	        'sys/accountsPayment';

	/*
	$CONF["new_files"] =	 				    	        '../cubus.md/system/cache/pictures';
	$CONF["edited_files"] =	 				    	        '../cubus.md/system/cache/editate';
	$CONF["translated_files"] =				    	        '../cubus.md/system/cache/translation';
	*/
	/*
	$CONF["new_files"] =	 				    	        '../docs.cubus.md/files/files_new';
	$CONF["edited_files"] =	 				    	        '../docs.cubus.md/files/files_edited';
	$CONF["translated_files"] =				    	        '../docs.cubus.md/files/files_translated';
	*/
	
	
// ClickaTell ////////////////////////////////////////////////////////////////////////////////
	$CONF["CLICKATELL_USER"] =					    	    'bagrinser';
	$CONF["CLICKATELL_PASSWORD"]  = 				   	    'camera7a';
	$CONF["CLICKATELL_API"] =	 				            '3116699';
	
// Translation DATA ////////////////////////////////////////////////////////////////////////////////
	$CONF["NR_CHARACTERS_ON_PAGE_WITHOUT_SPACE"] =    	    1800;
	$CONF["NR_CHARACTERS_ON_PAGE_WITH_SPACE"]    =    	    2200;
 	
// Mail Alert ////////////////////////////////////////////////////////////////////////////////
	$CONF["COMPANY_MAIL_ALERT"] =  	                        true;
	$CONF["COMPANY_MAIL_ALERT_NEW_FILE"] =                  true;
	$CONF["EMPROYEES_MAIL_ALERT"] =  	                    true;
	$CONF["EMPROYEES_MAIL_LIST"] =                  	    'bagrin.sergiu@gmail.com'; //,bagrin.sergiu@yahoo.com';
 	
// Company Contact Information ////////////////////////////////////////////////////////////////////////////////
	$CONF["COMPANY_NAME"] =  			                    'SC "Mentor-Grup" SRL';
	$CONF["COMPANY_JUR_ADDRESS_LONG"] =                     ' MD-2068, str. Florilor, 4/2, ap. C,M, mun. Chisinau';
	$CONF["COMPANY_OFFICE_ADDRESS_LONG"] =                  ' MD-2005, str. Banulescu-Bodoni 59, mun. Chisinau';
	$CONF["COMPANY_TEL_NUMBERS"] =  	                    '+373 22 925090';
	$CONF["COMPANY_FAX_NUMBERS"] =             			    '+373 22 402862';
	$CONF["COMPANY_MOBILE_NUMBERS"] =          			    '+373 69405136';
	$CONF["COMPANY_EMAIL"] =  	                   			'info@cubus.md';
	$CONF["COMPANY_CD"] =  	                   				'22511010848';
	$CONF["COMPANY_FISCAL_CODE"] =             				'1007600060826';  
	$CONF["COMPANY_BANK"] = 	            				'BC "Moldova AgroindBank", fil. DOCCB,';  
	$CONF["COMPANY_BANK_CODE"] =            				'AGRNMD2X';    
	$CONF["COMPANY_CEO_NAME"] = 	           				'Mihai Stipanov';  

// Default languages dislay ////////////////////////////////////////////////////////////////////////////////
	// DEFAULT_FROM_TO_LANGUAGE default is 0
	$CONF["DEFAULT_FROM_TO_LANGUAGE"] = 4;
	$CONF["DEFAULT_FROM_LANGUAGE"] =  	                    1;
	$CONF["DEFAULT_TO_LANGUAGE"] =             			    2;
	$CONF["DEFAULT_FILE_TYPE"] =  	               			'normal_text';
  	
// Account payment ////////////////////////////////////////////////////////////////////////////////
	$CONF["MIN_ACCOUNT_PAYMENT"] =  	                    100;
	$CONF["ACCOUNT_PAYMENT_AVAILEBLE_DAYS"] =               3;
  	
// Account payment ////////////////////////////////////////////////////////////////////////////////
	$CONF["DEADLINE_ENABLED"] =  	                	    true;
  	
?>