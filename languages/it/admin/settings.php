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

  'access_denied'=>'Accesso negato',
  'activated'=>'Attivato',
  'additional_options'=>'Opzioni Addizionali',
  'additional_options_startpage'=>'Disabilitare il front-end e selezionare la Pagina iniziale',
  'admin_email'=>'E-mail Admin',
  'admin_name'=>'Nome Admin',
  'allow_usergalleries'=>'Consentire le Gallerie utenti',
  'archive'=>'Archivio',
  'articles'=>'Articoli',
  'autoresize'=>'Funzione di ridimensionamento dell\'immagine',
  'autoresize_js'=>'JavaScript',
  'autoresize_off'=>'Disattivato',
  'autoresize_php'=>'PHP',
  'awards'=>'Premi',
  'captcha'=>'Captcha',
  'reCaptcha'=>'Google reCaptcha',
  'captcha_autodetect'=>'Automaticamente',
  'captcha_bgcol'=>'Colore Background',
  'captcha_both'=>'Entrambi',
  'captcha_fontcol'=>'Colore Font',
  'captcha_image'=>'Immagine',
  'captcha_linenoise'=>'Rumore di linea',
  'captcha_noise'=>'Rumore',
  'captcha_only_math'=>'Solo matematica',
  'captcha_only_text'=>'Solo testo',
  'captcha_text'=>'Testo',
  'captcha_type'=>'Tipo captcha',
  'captcha_style'=>'Stile-captcha',
  'clan_name'=>'Nome Clan',
  'clan_tag'=>'Tag Clan',
  'clanwars'=>'Clanwars',
  'comments'=>'Commenti',
  'content_size'=>'Dimensioni del contenuto',
  'deactivated'=>'Disattivato',
  'default_language'=>'lingua predefinita',
  'demos'=>'Demo',
  'demos_top'=>'Top 5 Demo',
  'demos_latest'=>'Latest 5 Demo',
  'detect_visitor_language'=>'Rilevare la lingua dei visitatori',
  'forum'=>'Forum',
  'forum_posts'=>'Post del forum',
  'forum_topics'=>'Argomenti del forum',
  'format_date'=>'Formato Data',
  'format_time'=>'Formato Ora',
  'files'=>'File',
  'files_top'=>'Top 5 Download',
  'files_latest'=>'Ultimi 5 Download',
  'gallery'=>'Galleria',
  'guestbook'=>'Guestbook',
  'headlines'=>'Titoli',
  'insert_links'=>'Inserire i collegamenti dei membri',
  'latest_articles'=>'Ultimi articoli',
  'latest_results'=>'Ultimi risultati',
  'latest_topics'=>'Ultimi argomenti',
  'login_duration'=>'Durata dell\'accesso',
  'max_length_headlines'=>'Mass.. lunghezza titoli',
  'max_length_latest_articles'=>'Mass.. lunghezza ultimi articoli',
  'max_length_latest_topics'=>'Mass.. lunghezza ultimi argomenti',
  'max_length_topnews'=>'Lunghezza max. topnews',
  'max_wrong_pw'=>'Mass.. password sbagliate',
  'messenger'=>'Messaggi',
  'msg_on_gb_entry'=>'Msg on GB entry',
  'news'=>'Notizie',
  'other'=>'Altro',
  'page_title'=>'Titolo Homepage',
  'page_url'=>'Homepage URL',
  'pagelock'=>'Pagelock (Blocco Pagine)',
  'pictures'=>'Immagini',
  'profile_last_posts'=>'Profilo Ultimi post',
  'public_admin'=>'Area pubblica admin',
  'registered_users'=>'Utenti registrati',
  'register_per_ip'=>'Registrazione con lo stesso IP?',
  'search_min_length'=>'Lunghezza min di ricerca',
  'settings'=>'Settaggi',
  'shoutbox'=>'Shoutbox',
  'shoutbox_all_messages'=>'Shoutbox tutti i messaggi',
  'shoutbox_refresh'=>'Aggiornamento Shoutbox',
  'space_user'=>'Spazio per utente (MByte)',
  'spam_check'=>'Convalida post?',
  'spamapiblockerror'=>'Blocca post?',
  'spamapihost'=>'API URL',
  'spamapikey'=>'API Key',
  'spamfilter'=>'Spam Filtro',
  'spammaxposts'=>'Numero massimo di post',
  'sc_modules'=>'SC Moduli',
  'thumb_width'=>'Larghezza anteprima immagini',
  'tooltip_1'=>'Questo è l\'URL della tua pagina, ad esempio (yourdomain.com/path/webspell).<br>Senza http:// all\'inizio e non finire con una barra!<br>Dovrebbe essere cosi',
  'tooltip_2'=>'Questo è il titolo della pagina, mostrato come titolo della finestra',
  'tooltip_3'=>'Il nome della tua organizzazione',
  'tooltip_4'=>'Il nome breve/tag della tua organizzazione',
  'tooltip_5'=>'webmaster\'s nome = il tuo nome',
  'tooltip_6'=>'L\'indirizzo e-mail del webmaster',
  'tooltip_7'=>'Notizie Max che sono mostrate completamente',
  'tooltip_8'=>'Argomenti del forum per pagina',
  'tooltip_9'=>'Immagini per pagina',
  'tooltip_10'=>'Notizie elencate nell\'archivio per pagina',
  'tooltip_11'=>'Post del forum per pagina',
  'tooltip_12'=>'Dimensioni (larghezza) per i immagini della Galleria',
  'tooltip_13'=>'Titoli elencati per sc_headlines',
  'tooltip_14'=>'Argomenti elencati in base agli ultimi argomenti',
  'tooltip_15'=>'Spazio Web per la Galleria per utente in MByte',
  'tooltip_16'=>'Lunghezza massima dei titoli in sc_headlines',
  'tooltip_17'=>'Durata minima dei termini di ricerca',
  'tooltip_18'=>'Si desidera consentire usergalleries per ogni utente?',
  'tooltip_19'=>'Vuoi amministrare le immagini della galleria direttamente sulla tua pagina? (meglio se selezionato)',
  'tooltip_20'=>'Articoli per pagina',
  'tooltip_21'=>'Awards per page',
  'tooltip_22'=>'Articoli elencati da sc_articles',
  'tooltip_23'=>'Demos per pagina',
  'tooltip_24'=>'Lunghezza massima dei titoli degli articoli in sc_articles',
  'tooltip_25'=>'Guestbook per pagina',
  'tooltip_26'=>'Commenti per pagina',
  'tooltip_27'=>'Messaggi per pagina',
  'tooltip_28'=>'Clanwars per pagina',
  'tooltip_29'=>'Utenti registrati per pagina',
  'tooltip_30'=>'Risultati elencati per sc_results',
  'tooltip_31'=>'Ultimi post elencati nel profilo',
  'tooltip_32'=>'Voci elencate da sc_upcoming',
  'tooltip_33'=>'Durata dell\'accesso [in ore] (0 = 20 minuti)',
  'tooltip_34'=>'Dimensioni massime (larghezza) del contenuto (immagini, aree di testo, ecc.) (0 - disattiva)',
  'tooltip_35'=>'Dimensioni massime (altezza) del contenuto (immagini) (0 - disattiva)',
  'tooltip_36'=>'Se gli amministratori di feedback ricevono un messaggio sulle nuove voci del guestbook?',
  'tooltip_37'=>'Shoutbox commenti che vengono visualizzati nel shoutbox',
  'tooltip_38'=>'Commenti Massimi salvati in shoutbox',
  'tooltip_39'=>'Periodo (in secondi) per l\'aggiornamento di shoutbox',
  'tooltip_40'=>'Lingua predefinita per il sito Web',
  'tooltip_41'=>'Inserire automaticamente i collegamenti al profilo dei membri?',
  'tooltip_42'=>'Lunghezza massima degli argomenti negli ultimi argomenti',
  'tooltip_43'=>'Numero massimo di voci non corrette della password prima del ban IP',
  'tooltip_44'=>'Tipo di visualizzazione del Captcha',
  'tooltip_45'=>'Colore di sfondo di Captcha',
  'tooltip_46'=>'Colore del Font Captcha',
  'tooltip_47'=>'Tipo di contenuto/stile di Captcha',
  'tooltip_48'=>'Numero di pixel di disturbo',
  'tooltip_49'=>'Numero di linee di rumore',
  'tooltip_50'=>'Selezione della funzione di ridimensionamento automatico dell\'immagine',
  'tooltip_51'=>'Lunghezza massima dei topnews in sc_topnews',
  'tooltip_52'=>'Rileva automaticamente la lingua del visitatore',
  'tooltip_53'=>'Convalida dei post con database esterno',
  'tooltip_54'=>'Inserire qui la chiave API Spam, se disponibile',
  'tooltip_55'=>'Immettere qui l\'URL del server host API.<br>Default: https://api.webspell.org',
  'tooltip_56'=>'Numero di post da quando non saranno più convalidati con database esterno',
  'tooltip_57'=>'Blocca post quando si è verificato un errore',
  'tooltip_58'=>'Formato di output della data',
  'tooltip_59'=>'Formato di output dell\'ora',
  'tooltip_60'=>'Abilitare i guestbook degli utenti sul sito Web?',
  'tooltip_61'=>'Cosa dovrebbe mostrare il modulo Demos SC?',
  'tooltip_62'=>'Cosa dovrebbe mostrare il modulo file SC?',
  'tooltip_63'=>'Bloccare la registrazione con lo stesso indirizzo IP?',
  'tooltip_64'=>'Il nome della tua home page',
  'transaction_invalid'=>'Transazione ID invalida',
  'upcoming_actions'=>'Azioni Imminenti',
  'update'=>'Aggiorna',
  'activate' => 'Abilitato',
  'important_text' => 'Prima di attivare questa modifica è necessario il reCaptcha APi-Keys. <br /> Procedere come segue. <br /> <br /> 1. Crea <a href="https://www.google.com/recaptcha/intro/index.html" target="_blank"> un Account reCaptcha </a>. <br /> 2. Specificare l\'indirizzo Internet. <br /> 3. Inserisci le due chiavi ricevute qui.',
  'success' => 'Completato con successo',
  'failed' => 'Processo fallito',
  'web-key' => 'Websites Key',
  'secret-key' => 'Secret key'
  'startpage' => 'Scegli Home'

);

