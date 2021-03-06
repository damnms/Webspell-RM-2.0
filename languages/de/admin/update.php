<?php
/*¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯\
| _    _  ___  ___  ___  ___  ___  __    __      ___   __  __       |
|( \/\/ )(  _)(  ,)/ __)(  ,\(  _)(  )  (  )    (  ,) (  \/  )      |
| \    /  ) _) ) ,\\__ \ ) _/ ) _) )(__  )(__    )  \  )    (       |
|  \/\/  (___)(___/(___/(_)  (___)(____)(____)  (_)\_)(_/\/\_)      |
|                       ___          ___                            |
|                      |__ \        / _ \                           |
|                         ) |      | | | |                          |
|                        / /       | | | |                          |
|                       / /_   _   | |_| |                          |
|                      |____| (_)   \___/                           |
\___________________________________________________________________/
/                                                                   \
|        Copyright 2005-2018 by webspell.org / webspell.info        |
|        Copyright 2018-2019 by webspell-rm.de                      |
|                                                                   |
|        - Script runs under the GNU GENERAL PUBLIC LICENCE         |
|        - It's NOT allowed to remove this copyright-tag            |
|        - http://www.fsf.org/licensing/licenses/gpl.html           |
|                                                                   |
|               Code based on WebSPELL Clanpackage                  |
|                 (Michael Gruber - webspell.at)                    |
\___________________________________________________________________/
/                                                                   \
|                     WEBSPELL RM Version 2.0                       |
|           For Support, Mods and the Full Script visit             |
|                       webspell-rm.de                              |
\__________________________________________________________________*/

$language_array = Array(

/* do not edit above this line */

  'access_denied' => 'Zugriff verweigert',
  'error' => 'Server ist nicht Update Kompatibel oder die Updatedatei ist nicht vorhanden!',
  'step1' => 'Step 1: Updateserver Online',
  'step2' => 'Step 2: Remote Installationsfile vorhanden',
  'error_step2_1' => 'Installationsfile nicht gefunden! <br />Update abgebrochen.',
  'error_step2_2' => 'Installationsfile gefunden! <br />Update wird nun fortgesetzt mit Datei-Upload und der Tabellen Installation.',
  'file_loaded' => 'File geladen',
  'file_not_loaded' => 'File nicht geladen',
  'file_deleted' => 'File gel&ouml;scht',
  'file_not_deleted' => 'File nicht gel&ouml;scht',
  'all_files_have_been_edited' => 'Es wurden alle Dateien bearbeitet!<br />Result',
  'of' => 'von',
  'installcomplete_1' => 'Webspellupdate wurde erfolgreich auf die Version',
  'installcomplete_2' => 'erfolgreich installiert!',
  'back_to_overview' => 'Zur&uuml;ck zur &Uuml;bersicht',
  'step4' => 'Step 4: Tabellen Installation',
  'syq_error' => 'MYSQL-Fehler: Bitte melde dich beim Support!',
  'not_all_files_edited' => 'Es wurden nicht alle Dateien bearbeitet!',
  'step3' => 'Step 3: Lade Dateien...',
  'webspell_update' => 'webSPELL aktualisieren',
  'webspellupdater' => 'Webspellupdater',
  'check_version' => '&Uuml;berpr&uuml;fe Version',
  'update' => 'Update',
  'data saved' => 'Daten gespeichert!',
  'update_now' => 'Jetzt Updaten',
  'fill_in_ftp_settings' => 'Bitte FTP - Einstellungen ausf&uuml;llen!',
  'new_version_available' => 'Eine neue Webspellversion ist vorhanden!',
  'update_info1' => 'Bitte beachte vor dem Update folgende Hinweise!',
  'update_info2' => '- Mysqlbackup gemacht ?<br />- Webspelldateien via FTP gesichert ?<br />WebspellRM &uuml;bernimmt keinerlei Haftung bei sch&auml;den und das Update erfolgt auf eigene Gefahr!',
  'update_info3' => 'Deine Version ist aktuell!',
  'update_info4' => 'Sofern du mitbekommst, das ein Update innerhalb dieser Version erschienen ist, kannst du dann auch deine Version RE-Updaten!<br />Bedenke, das die Mysql-Install wieder durchl&auml;uft und Einstellungen, die du nach dem Update gemacht hast neu eingestellt werden m&uuml;ssen !<br /><br />',
  're_update' => 'Jetzt RE-Updaten',
  'update_info5' => 'Deine Version ist h&ouml;her, wie die von Webspell-RM. Kontaktiere das Webspellteam!',
  'your_version' => 'Deine Webspellversion',
  'latest_version' => 'Aktuellste Webspellversion',
  'result' => 'Ergebniss',
  'ftp_settings' => 'FTP - Einstellungen',
  'server_ip' => 'FTP-Serverip',
  'ftp_ip' => 'Wie lautet Deine ServerIP (Bsp.: 123.345.654.899)',
  'server_port' => 'FTP-Serverport',
  'ftp_port' => 'Wie lautet dein Serverport (Bsp.: 21 )',
  'server_pfad' => 'Pfad zum Verzeichnis',
  'ftp_pfad' => 'Pfad zu deinen Webspellverzeichniss (Bsp.: / oder /webspell/)',
  'server_username' => 'FTP-Benutzername',
  'ftp_username' => 'Benutzername vom FTP-Server',
  'server_password' => 'FTP-Password',
  'ftp_password' => 'Password vom FTP-Server',
  'save' => 'Speichern',
  'ftp_host_check' => 'Hostname',
  'ftp_host_error' => 'Fehler beim Hostnamen',

  'updateserversuccess'=>'Updateserver ist Online.',
  'filename'=>'Dateiname',
  'get_new_version'=>'Hol dir hier die neuste webSPELL Version!',
  'information'=>'Informationen',
  'new_functions'=>'Neue Funktionen für webSPELL vorhanden',
  'new_updates'=>'Neue Updates für webSPELL vorhanden',
  'new_version'=>'Neue webSPELL Version vorhanden',
  'no_updates'=>'Keine Updates vorhanden!',
  'version'=>'Version',
  
  'install_complete'=>'Installation war erfolgreich!',
  'install_running'=>'Installation wird ausgef&uuml;hrt!',
  'finish_install'=>'Installation abschliessen',
  'view_site'=>'Betrachte Deine Seite',
  'transaction_invalid'=>'Transaktions ID ung&uuml;ltig'
);

