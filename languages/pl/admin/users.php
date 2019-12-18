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

  'about_myself'=>'O mnie',
  'access_denied'=>'Odmowa dostępu',
  'actions'=>'Akcje',
  'activate'=>'Aktywuj',
  'active'=>'Aktywny',
  'activity'=>'Aktywność',
  'add_new_user'=>'Dodaj nowego Użytkownika',
  'add_to_clan'=>'Dodaj do Drużyny',
  'admin'=>'Administrator',
  'avatar'=>'Avatar',
  'back'=>'Wstecz',
  'banish'=>'Banuj',
  'banned'=>'Zbanowany',
  'ban_for'=>'Zbanuj na',
  'ban_status'=>'Status Bana',
  'ban_until'=>'Banuj do',
  'ban_user'=>'Banuj Użytkownika',
  'birthday'=>'Data urodzenia',
  'clan_history'=>'Historia klanu',
  'clan_homepage'=>'Strona klanu',
  'can_not_copy_file'=>'BŁĄD: Nie można skopiować pliku z serwera!',
  'clan_irc'=>'Klanowe IRC',
  'clanmember'=>'Członek klanu',
  'clanname'=>'Nazwa klanu',
  'clantag'=>'Tag klanu',
  'connection'=>'Połączenie',
  'country'=>'Państwo',
  'cpu'=>'Procesor',
  'days'=>'dni',
  'del'=>'Usuń',
  'delete_avatar'=>'Usuń Avatar',
  'delete_picture'=>'Usuń Zdjęcie',
  'edit_ban'=>'Edytuj Bana',
  'edit_profile'=>'Edytuj Profil',
  'email'=>'E-Mail',
  'error_avatar'=>'BŁĄD: Avatar jest za duży (max. 90x90)',
  'error_picture'=>'BŁĄD: Obraz jest za duży (max. 230x210)',
  'female'=>'Kobieta',
  'firstname'=>'Imię',
  'gender'=>'Płeć',
  'general'=>'Główne',
  'graphiccard'=>'Karta Graficzna',
  'homepage'=>'Strona domowa www',
  'icq'=>'ICQ',
  'inactive'=>'Nieaktywny',
  'invalid_format'=>'BŁĄD: Nieprawidłowy format obrazu (dozwolone: *. gif, *. jpg lub *. png)',
  'keyboard'=>'Klawiatura',
  'lastname'=>'Nazwisko',
  'mainboard'=>'Płyta główna',
  'male'=>'Mężczyzna',
  'max_90x90'=>'(max. 90x90)',
  'max_285x250'=>'(max. 285x250)',
  'moderator'=>'Moderator',
  'month'=>'miesiąc\e',
  'monitor'=>'Monitor',
  'mouse'=>'Mysz',
  'mousepad'=>'Podkładka',
  'nickname'=>'Nick',
  'not_available'=>'Niedostępne',
  'no_users'=>'Nie znaleziono użytkowników',
  'password'=>'Hasło',
  'permanently'=>'Banuj na zawsze',
  'personal'=>'Prywatne',
  'picture'=>'Zdjęcie',
  'pictures'=>'Obrazki',
  'position'=>'Pozycja',
  'profile'=>'Profil',
  'ram'=>'RAM',
  'really_ban'=>'Czy na pewno zbanować',
  'really_delete'=>'Czy na pewno usunąć tego użytkownika?',
  'really_unban'=>'Czy na pewno odbanować',
  'reason'=>'Powód',
  'registered_since'=>'Zarejestrowany od',
  'remove_ban'=> 'Usunąć bana?',
  'rights'=>'Uprawnienia',
  'signatur'=>'Sygnatura',
  'sort'=>'Sortowanie',
  'soundcard'=>'Karta dzwiękowa',
  'squad'=>'Drużyna',
  'status'=>'Status',
  'superadmin'=>'Superadministrator',
  'town'=>'Miasto',
  'transaction_invalid'=>'Transakcja ID nieprawidłowa!',
  'to_clan'=>'Dodaj do drużyny',
  'to_sort'=>'Sortuj',
  'undo_ban'=>'Odbanuj',
  'upload_failed'=>'Błąd: Nie udało się załadować',
  'user'=>'Użytkownik',
  'user_exists'=>'Użytkownik już istnieje',
  'user_id'=>'ID Użytkownika',
  'username'=>'Login',
  'users'=>'Użytkownicy',
  'users_available'=>'Użytkowników dostępnych',
  'usersearch'=>'Szukaj użytkownika',
  'exactsearch'=>'Dokładniej',
  'various'=>'Różne',
  'weeks'=>'tygodni\e',
  'you_cant_ban'=>'Nie można zbanować tego użytkownika! (Superadministrator)',
  'you_cant_ban_yourself'=>'Nie możesz zbanować siebie!',
  'social-media'=>'Media społecznościowe',
  'twitch'=>'Twitch',
  'youtube'=>'Youtube',
  'twitter'=>'Twitter',
  'instagram'=>'Instagram',
  'facebook'=>'Facebook'
);
?>