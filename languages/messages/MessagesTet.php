<?php
/** Tetum (Tetun)
 *
 * @addtogroup Language
 *
 * @author MF-Warburg
 * @author Siebrand
 * @author SPQRobin
 */

$skinNames = array(
	'standard'    => 'Klásiku',
	'cologneblue' => 'Kolónia azúl',
	'myskin'      => 'MySkin',
	'chick'       => 'Manu',
);

$namespaceNames = array(
	NS_MEDIA          => 'Media',
	NS_SPECIAL        => 'Espesiál',
	NS_MAIN	          => '',
	NS_TALK	          => 'Diskusaun',
	NS_USER           => "Uza-na'in",
	NS_USER_TALK      => "Diskusaun_Uza-na'in",
	# NS_PROJECT set by $wgMetaNamespace
	NS_PROJECT_TALK   => 'Diskusaun_$1',
	NS_IMAGE          => 'Imajen',
	NS_IMAGE_TALK     => 'Diskusaun_Imajen',
	NS_MEDIAWIKI      => 'MediaWiki',
	NS_MEDIAWIKI_TALK => 'Diskusaun_MediaWiki',
	NS_TEMPLATE       => 'Template',
	NS_TEMPLATE_TALK  => 'Diskusaun_Template',
	NS_HELP           => 'Ajuda',
	NS_HELP_TALK      => 'Diskusaun_Ajuda',
	NS_CATEGORY       => 'Kategoría',
	NS_CATEGORY_TALK  => 'Diskusaun_Kategoría',
);

$specialPageAliases = array(
	'Watchlist'                 => array( "Lista_hateke" ),
	'Recentchanges'             => array( "Mudansa_foufoun_sira" ),
	'Upload'                    => array( "Tau_iha_arkivu_laran" ),
	'Imagelist'                 => array( "Lista_imajen" ),
	'Newimages'                 => array( "Imajen_foun" ),
	'Listusers'                 => array( "Lista_uza-na'in" ),
	'Statistics'                => array( "Estatístika" ),
	'Randompage'                => array( "Pájina_ruma" ),
	'Shortpages'                => array( "Pájina_badak" ),
	'Longpages'                 => array( "Pájina_naruk" ),
	'Protectedpages'            => array( "Pájina_sira-ne'ebé_proteje_tiha" ),
	'Allpages'                  => array( "Pájina_hotu" ),
	'Ipblocklist'               => array( "Lista_ema_sira-ne'ebé_blokeiu_tiha" ),
	'Specialpages'              => array( "Pájina_espesiál_sira" ),
	'Whatlinkshere'             => array( "Pájina_sira_ne'ebé_bá_iha_ne'e" ),
	'Movepage'                  => array( "Book" ),
	'Categories'                => array( "Kategoría" ),
	'Version'                   => array( "Versaun" ),
	'Allmessages'               => array( "Mensajen_hotu" ),
	'Blockip'                   => array( "Blokeiu" ),
	'Undelete'                  => array( "Restaurar" ),
	'Userrights'                => array( "Kuana" ),
	'Mypage'                    => array( "Ha'u-nia_pájina" ),
	'Listadmins'                => array( "Lista_administradór" ),
	'Search'                    => array( "Buka" ),
);

$messages = array(
# User preference toggles
'tog-hideminor' => "Lá'os hatudu osan-rahun sira iha mudansa foufoun sira",

'underline-always' => 'Sempre',
'underline-never'  => 'Nunka',

# Dates
'sunday'        => 'Loron-domingu',
'monday'        => 'Loron-segunda',
'tuesday'       => 'Loron-tersa',
'wednesday'     => 'Loron-kuarta',
'thursday'      => 'Loron-kinta',
'friday'        => 'Loron-sesta',
'saturday'      => 'Loron-sábadu',
'january'       => 'Janeiru',
'february'      => 'Fevereiru',
'march'         => 'Marsu',
'april'         => 'Abríl',
'may_long'      => 'Maiu',
'june'          => 'Juñu',
'july'          => 'Jullu',
'august'        => 'Agostu',
'september'     => 'Setembru',
'october'       => 'Outubru',
'november'      => 'Novembru',
'december'      => 'Dezembru',
'january-gen'   => 'Janeiru nian',
'february-gen'  => 'Fevereiru nian',
'march-gen'     => 'Marsu nian',
'april-gen'     => 'Abríl nian',
'may-gen'       => 'Maiu nian',
'june-gen'      => 'Juñu nian',
'july-gen'      => 'Jullu nian',
'august-gen'    => 'Agostu nian',
'september-gen' => 'Setembru nian',
'october-gen'   => 'Outubru nian',
'november-gen'  => 'Novembru nian',
'december-gen'  => 'Dezembru nian',

# Bits of text used by many pages
'categories'      => 'Kategoría',
'pagecategories'  => '{{PLURAL:$1|Kategoría|Kategoría}}',
'category_header' => 'Artigu iha kategoría "$1"',
'category-empty'  => "''Iha kategoría ne'e agora pájina lá'os.''",

'about'          => 'Kona-ba',
'article'        => 'Pájina',
'qbfind'         => 'Hetan',
'qbedit'         => 'Edita',
'qbpageoptions'  => "Pájina ne'e",
'qbmyoptions'    => "Ha'u-nia pájina sira",
'qbspecialpages' => 'Pájina espesiál sira',
'moredotdotdot'  => 'Barak liu...',
'mypage'         => "Ha'u-nia pájina",
'mytalk'         => "Ha'u-nia diskusaun",
'anontalk'       => "Diskusaun ba IP ne'e",
'navigation'     => 'Hatudu-dalan',

'errorpagetitle'    => 'Sala',
'tagline'           => 'Husi {{SITENAME}}',
'help'              => 'Ajuda',
'search'            => 'Buka',
'searchbutton'      => 'Buka',
'go'                => 'Bá',
'searcharticle'     => 'Pájina',
'history'           => 'Istória pájina',
'history_short'     => 'Istória',
'info_short'        => 'Informasaun',
'printableversion'  => 'Versaun ba impresaun',
'permalink'         => 'Ligasaun mahelak',
'print'             => 'Imprime',
'edit'              => 'Edita',
'editthispage'      => "Edita pájina ne'e",
'delete'            => 'Halakon',
'deletethispage'    => "Halakon pájina ne'e",
'undelete_short'    => 'Restaurar {{PLURAL:$1|versaun ida|$1 versaun}}',
'protect'           => 'Proteje',
'protectthispage'   => "Proteje pájina ne'e",
'unprotect'         => 'La proteje',
'unprotectthispage' => "La proteje pájina ne'e",
'newpage'           => 'Pájina foun',
'talkpage'          => "Diskusaun kona-ba pájina ne'e",
'talkpagelinktext'  => 'Diskusaun',
'specialpage'       => 'Pájina espesiál',
'postcomment'       => 'Tau tan komentáriu ida',
'talk'              => 'Diskusaun',
'toolbox'           => 'Kaixa besi nian',
'userpage'          => "Haree pájina uza-na'in",
'projectpage'       => 'Haree pájina projetu nian',
'imagepage'         => 'Haree pájina imajen nian',
'mediawikipage'     => 'Haree pájina mensajen nian',
'viewhelppage'      => 'Haree pájina ajuda',
'categorypage'      => 'Haree pájina kategoría nian',
'viewtalkpage'      => 'Haree diskusaun',
'otherlanguages'    => 'Iha lian seluk',
'protectedpage'     => "Pájina ne'ebé naproteje",
'jumptonavigation'  => 'hatudu-dalan',
'jumptosearch'      => 'buka',

# All link text and link target definitions of links into project namespace that get used by other message strings, with the exception of user group pages (see grouppage) and the disambiguation template definition (see disambiguations).
'aboutsite'         => 'Kona-ba {{SITENAME}}',
'aboutpage'         => 'Project:Kona-ba',
'copyright'         => 'Testu pájina nian iha $1 okos.',
'currentevents'     => 'Mamosuk atuál sira',
'currentevents-url' => 'Project:Mamosuk atuál sira',
'disclaimers'       => 'Avisu legál',
'disclaimerpage'    => 'Project:Avisu legál',
'edithelppage'      => 'Help:Edita',
'mainpage'          => 'Pájina Mahuluk',
'portal'            => 'Portál komunidade nian',
'portal-url'        => 'Project:Portál komunidade nian',
'privacy'           => 'Polítika privasidade nian',
'privacypage'       => 'Project:Polítika privasidade nian',
'sitesupport'       => 'Fó donativu ida',

'badaccess-group0' => "Ó la bele halo ne'e.",
'badaccess-group1' => "Ba halo ne'e tenke iha lubu $1.",
'badaccess-group2' => "Ba halo ne'e tenke iha lubu ida husi $1.",
'badaccess-groups' => "Ba halo ne'e tenke iha lubu ida husi $1.",

'versionrequired'     => 'Presiza MediaWiki versaun $1',
'versionrequiredtext' => "Presiza MediaWiki versaun $1 ba uza pájina ne'e. Haree [[Special:Version|pájina versaun]].",

'ok'                      => 'OK',
'retrievedfrom'           => 'Husi "$1"',
'youhavenewmessages'      => 'Ó iha $1 ($2).',
'newmessageslink'         => 'mensajen foun',
'youhavenewmessagesmulti' => 'Ó iha mensajen foun sira iha $1',
'editsection'             => 'edita',
'editold'                 => 'edita',
'editsectionhint'         => 'Edita parte $1 pájina nian',
'showtoc'                 => 'hatudu',
'hidetoc'                 => 'subar',
'thisisdeleted'           => 'Haree ka restaurar $1?',
'viewdeleted'             => 'Haree $1?',

# Short words for each namespace, by default used in the namespace tab in monobook
'nstab-main'      => 'Pájina',
'nstab-user'      => "Pájina uza-na'in",
'nstab-special'   => 'Espesiál',
'nstab-project'   => 'Pájina projetu nian',
'nstab-mediawiki' => 'Mensajen',
'nstab-help'      => 'Pájina ajuda',
'nstab-category'  => 'Kategoría',

# Main script and global functions
'nosuchspecialpage' => "Pájina espesiál ne'e lá'os",

# General errors
'error' => 'Sala',

# Login and logout pages
'yourname'                  => "Naran uza-n'in:",
'nologinlink'               => 'Registrar',
'createaccount'             => "Registrar uza-na'in",
'userexists'                => "Uza-na'in ne'e ona iha wiki. Favór ida lori naran seluk.",
'youremail'                 => 'Diresaun korreiu eletróniku:',
'username'                  => "Naran uza-na'in:",
'uid'                       => "Uza-na'in ID:",
'yourlanguage'              => 'Lian:',
'email'                     => 'Korreiu eletróniku',
'prefs-help-email-required' => 'Haruka diresaun korreiu eletróniku.',
'accountcreated'            => "Registrar tiha uza-na'in",
'loginlanguagelabel'        => 'Lian: $1',

# Password reset dialog
'resetpass_text' => "<!-- Hakerek testu iha ne'e -->",

# Edit page toolbar
'link_tip'     => 'Ligasaun ba laran',
'extlink_tip'  => "Ligasaun ba li'ur (tau tan http://)",
'image_sample' => 'Ezemplu.jpg',
'media_sample' => 'Ezemplu.ogg',

# Edit pages
'minoredit'         => "Ne'e osan-rahun",
'watchthis'         => "Hateke pájina ne'e",
'anoneditwarning'   => 'Ó lá\'os "log-in" iha momentu.',
'blockedtitle'      => "Uza-na'in nablokeiu",
'newarticle'        => '(Foun)',
'noarticletext'     => "Iha momentu lá'os testu iha pájina ne'e, bele [[Special:Search/{{PAGENAME}}|buka naran pájina nian]] iha pájina seluk ka [{{fullurl:{{FULLPAGENAME}}|action=edit}} edita pájina ne'e].",
'editing'           => 'Edita $1',
'editingcomment'    => 'Edita $1 (komentáriu)',
'yourtext'          => 'Ó-nia testu',
'yourdiff'          => 'Diferensa sira',
'nocreate-loggedin' => 'Ó la iha kuana kria pájina foun iha {{SITENAME}}.',

# Account creation failure
'cantcreateaccounttitle' => "La bele registrar uza-na'in",

# History pages
'currentrev'          => 'Versaun atuál',
'previousrevision'    => '←Versaun tuan liu',
'nextrevision'        => 'Versaun foun liu→',
'currentrevisionlink' => 'Versaun atuál',
'cur'                 => 'atuál',
'next'                => 'oinmai',
'page_first'          => 'uluk',
'histfirst'           => 'sedu liu hotu',
'historyempty'        => '(mamuk)',

# Revision feed
'history-feed-item-nocomment' => '$1 iha $2', # user at time

# Revision deletion
'rev-delundel'        => 'hatudu/subar',
'revisiondelete'      => 'Halakon/restaurar versaun',
'revdelete-hide-user' => "Subar naran edita-na'in/IP",

# Search results
'prevn'       => 'molok $1',
'nextn'       => 'oinmai $1',
'powersearch' => 'Buka',

# Preferences page
'prefs-rc'          => 'Mudansa foufoun sira',
'prefs-watchlist'   => 'Lista hateke',
'textboxsize'       => 'Edita',
'searchresultshead' => 'Buka',

# User rights
'userrights-lookup-user'    => "Filak lubu uza-na'in",
'userrights-user-editname'  => "Hakerek naran uza-na'in ida-nian:",
'editusergroup'             => "Filak lubu uza-na'in",
'userrights-editusergroup'  => "Filak lubu uza-na'in",
'userrights-groupsmember'   => 'Membru iha:',
'userrights-available-none' => "Ó la bele filak lubu uza-na'in.",

# Groups
'group'            => 'Lubu:',
'group-bot'        => 'Bot sira',
'group-sysop'      => 'Administradór sira',
'group-bureaucrat' => 'Burokrata sira',
'group-all'        => '(hotu)',

'group-bot-member'        => 'Bot',
'group-sysop-member'      => 'Administradór',
'group-bureaucrat-member' => 'Burokrata',

'grouppage-bot'        => '{{ns:project}}:Bot sira',
'grouppage-sysop'      => '{{ns:project}}:Administradór sira',
'grouppage-bureaucrat' => '{{ns:project}}:Burokrata sira',

# User rights log
'rightslogtext' => "Ne'e lista ba filak lubu uza-na'in.",
'rightsnone'    => '(mamuk)',

# Recent changes
'recentchanges'   => 'Mudansa foufoun sira',
'rcshowhideminor' => '$1 osan-rahun sira',
'rcshowhidebots'  => '$1 bot sira',
'diff'            => 'diferensa',
'hist'            => 'istória',
'hide'            => 'Hamsumik',
'show'            => 'Hatudu',
'minoreditletter' => 'o',
'newpageletter'   => 'F',
'boteditletter'   => 'b',

# Recent changes linked
'recentchangeslinked' => 'Muda sira',

# Upload
'upload'          => 'Tau iha arkivu laran',
'uploadbtn'       => 'Tau iha arkivu laran',
'watchthisupload' => "Hateke pájina ne'e",

# Image list
'ilsubmit'           => 'Buka',
'filehist-deleteall' => 'halakon hotu',
'filehist-deleteone' => "halakon ne'e",
'filehist-current'   => 'atuál',
'filehist-datetime'  => 'Loron/Tempu',
'filehist-user'      => "Uza-na'in",
'filehist-comment'   => 'Komentáriu',
'imagelist_name'     => 'Naran',
'imagelist_user'     => "Uza-na'in",

# File reversion
'filerevert-comment' => 'Komentáriu:',

# File deletion
'filedelete'         => 'Halakon $1',
'filedelete-comment' => 'Komentáriu:',
'filedelete-submit'  => 'Halakon',

# Random page
'randompage' => 'Pájina ruma',

# Statistics
'statistics' => 'Estátistika',

'brokenredirects-edit'   => '(edita)',
'brokenredirects-delete' => '(halakon)',

# Miscellaneous special pages
'nlinks'            => '$1 ligasaun',
'nmembers'          => '$1 membru',
'allpages'          => 'Pájina hotu',
'longpages'         => 'Pájina naruk',
'listusers'         => "Lista uza-na'in",
'specialpages'      => 'Pájina espesiál sira',
'newpages'          => 'Pájina foun',
'newpages-username' => "Naran uza-na'in:",
'ancientpages'      => 'Pájina tuan liu hotu sira',
'move'              => 'Book',
'movethispage'      => "Book pájina ne'e",

'groups'         => "Lubu uza-na'in",
'alphaindexline' => "$1 to'o $2",
'version'        => 'Versaun',

# Special:Log
'specialloguserlabel' => "Uza-na'in:",

# Special:Allpages
'nextpage'     => 'Pájina oinmai ($1)',
'allarticles'  => 'Pájina hotu',
'allpagesnext' => 'Oinmai',

# Special:Listusers
'listusers-submit' => 'Hatudu',

# E-mail user
'emailuser'       => "Haruka korreiu eletróniku ba uza-na'in ne'e",
'defemailsubject' => '{{SITENAME}} korreiu eletróniku',
'noemailtitle'    => "Lá'os diresaun korreiu eletróniku",
'emailsend'       => 'Haruka',

# Watchlist
'watchlist'            => "Ha'u-nia lista hateke",
'mywatchlist'          => "Ha'u-nia lista hateke",
'watch'                => 'Hateke',
'watchthispage'        => "Hateke pájina ne'e",
'unwatch'              => 'La hateke',
'watchlist-hide-bots'  => 'Hamsumik edita "bot" sira',
'watchlist-hide-own'   => "Hamsumik edita ha'u-nia",
'watchlist-show-minor' => 'Hatudu osan-rahun',
'watchlist-hide-minor' => 'Subar osan-rahun',

'enotif_newpagetext'           => "Ne'e pájina foun.",
'enotif_impersonal_salutation' => "Uza-na'in {{SITENAME}} nian",
'changed'                      => 'filak',
'created'                      => 'kria',

# Delete/protect/revert
'deletepage'          => 'Halakon pájina',
'excontent'           => "testu iha pájina: '$1'",
'excontentauthor'     => "testu iha pájina: '$1' (no ema ida de'it ne'ebé kontribui '[[Special:Contributions/$2|$2]]')",
'exblank'             => 'pájina mamuk',
'deletesub'           => '(Halakon "$1")',
'deletedarticle'      => 'halakon "[[$1]]"',
'dellogpage'          => 'Lista halakon',
'deletionlog'         => 'lista halakon',
'protectedarticle'    => 'proteje "[[$1]]"',
'protectcomment'      => 'Komentáriu:',
'protect-level-sysop' => "de'it administradór",

# Restrictions (nouns)
'restriction-edit' => 'Edita',
'restriction-move' => 'Book',

# Undelete
'undelete'           => 'Haree pájina halakon tiha',
'undeletebtn'        => 'Restaurar',
'undeletecomment'    => 'Komentáriu:',
'undeletedarticle'   => 'restaurar "[[$1]]"',
'undeletedrevisions' => 'restaurar $1 versaun',

# Contributions
'contributions' => "Kontribuisaun uza-na'in",
'mycontris'     => "Ha'u-nia kontribuisaun",

'sp-contributions-newbies'  => "Hatudu de'it kontribuisaun uza-na'in foun sira-nia",
'sp-contributions-search'   => 'Buka kontribuisaun',
'sp-contributions-username' => "Diresaun IP ka naran uza-na'in:",
'sp-contributions-submit'   => 'Buka',

# What links here
'whatlinkshere'       => "Artigu sira ne'ebé bá iha ne'e",
'whatlinkshere-title' => "Pájina sira ne'ebé bá $1",
'whatlinkshere-page'  => 'Pájina:',
'linkshere'           => "Pájina sira ne'e link ba '''[[:$1]]''':",
'whatlinkshere-prev'  => '{{PLURAL:$1|oinmai|oinmai $1}}',
'whatlinkshere-next'  => '{{PLURAL:$1|molok|molok $1}}',
'whatlinkshere-links' => '← ligasaun',

# Block/unblock
'blockip'                 => "Blokeiu uza-na'in",
'ipboptions'              => '2 hours:2 hours,1 loron:1 day,3 Loron:3 days,1 semana:1 week,2 semana:2 weeks,1 fulan:1 month,3 fulan:3 months,6 fulan:6 months,1 tinan:1 year,infinite:infinite', # display1:time1,display2:time2,...
'ipbotheroption'          => 'seluk',
'ipblocklist-username'    => "Naran uza-na'in ka IP:",
'ipblocklist-submit'      => 'Buka',
'blocklink'               => 'blokeiu',
'contribslink'            => 'kontribuisaun',
'block-log-flags-noemail' => 'korreiu eletróniku blokeiu',
'ipb_already_blocked'     => '"$1" nablokeiu tiha ona',

# Move page
'movepage'                => 'Book pájina',
'movearticle'             => 'Book pájina:',
'movepagebtn'             => 'Book pájina',
'movepage-moved'          => '<big>\'\'\'Ó book "$1" ba "$2"\'\'\'</big>', # The two titles are passed in plain text as $3 and $4 to allow additional goodies in the message.
'1movedto2'               => 'book tiha [[$1]] ba [[$2]]',
'movelogpage'             => 'Lista book',
'delete_and_move'         => 'Halakon ho book',
'delete_and_move_confirm' => 'Sin, halakon pájina',

# Namespace 8 related
'allmessagesname'    => 'Naran',
'allmessagescurrent' => 'Testu atuál',

# Tooltip help for the actions
'tooltip-ca-protect'      => "Proteje pájina ne'e",
'tooltip-ca-delete'       => "Halakon pájina ne'e",
'tooltip-ca-move'         => "Buka pájina ne'e",
'tooltip-search'          => 'Buka iha {{SITENAME}}',
'tooltip-n-mainpage'      => 'Vizita Pájina Mahuluk',
'tooltip-n-recentchanges' => "Lista mudansa foufoun sira iha wiki ne'e.",
'tooltip-n-randompage'    => 'Hola pájina ruma',
'tooltip-t-contributions' => "Haree lista kontribuisaun uza-na'in ne'e nian",
'tooltip-t-specialpages'  => 'Lista pájina espesiál hotu nian',
'tooltip-ca-nstab-user'   => "Haree pájina uza-na'in",

# Browsing diffs
'previousdiff' => '←Diferensa molok',
'nextdiff'     => 'Diferensa oinmai→',

# Special:Newimages
'showhidebots' => '($1 bot sira)',

# 'all' in various places, this might be different for inflected languages
'recentchangesall' => 'hotu',
'imagelistall'     => 'hotu',
'watchlistall2'    => 'hotu',
'namespacesall'    => 'hotu',
'monthsall'        => 'hotu',

# Table pager
'table_pager_next'  => 'Pájina oinmai',
'table_pager_prev'  => 'Pájina molok',
'table_pager_first' => 'Pájina uluk',

# Auto-summaries
'autosumm-new' => 'Pájina foun: $1',

);
