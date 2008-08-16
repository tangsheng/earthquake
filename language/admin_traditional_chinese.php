<?php
/**
* @version $Id: admin_traditional_chinese.php,v 1.9 2008/04/21 11:27:52 lang3 Exp $
* @package Mambors
* @copyright (C) 2004 - 2007 Mambochina.net
* @license http://www.gnu.org/copyleft/gpl.html GNU/GPL
* Mambors is Free Software based on Mambo
* Powered By mambochina.net & mambors.org
*/

/** ensure this file is being included by a parent file */
defined( '_VALID_MOS' ) or die( '�T����X�ݥ����I' );

// Language and Encode of admin language
DEFINE('_A_LANGUAGE','zh_TW');
DEFINE('_A_ISO','charset=big5');

// needed for $alt text in toolbar item
DEFINE('_A_CANCEL','����'); 
DEFINE('_A_SAVE','�O�s'); 
DEFINE('_A_APPLY','����'); 
DEFINE('_A_CLOSE','����'); 
DEFINE('_A_COPY','�ƻs'); 
DEFINE('_A_MOVE','����'); 
DEFINE('_A_DELETE','�R��'); 
DEFINE('_A_NEXT','�U�@�B'); 
DEFINE('_A_BACK','��h'); 
DEFINE('_A_DEFAULT','�q�{'); 
DEFINE('_A_RESTORE','��_');

/**
* @location /../includes/mambo.php
* @desc Includes translations of several droplists and non-translated stuff
*/

//Droplist
DEFINE('_A_TOP','����');
DEFINE('_A_ALL','����');
DEFINE('_A_NONE','�L');
DEFINE('_A_SELECT_IMAGE','��ܹϤ�');
DEFINE('_A_NO_USER','�S���Τ�');
DEFINE('_A_CREATE_CAT','�������Ыؤ@�Ӥ���');
DEFINE('_A_PARENT_BROWSER_NAV','�����f�A�a�s�����ɯ�');
DEFINE('_A_NEW_BROWSER_NAV','�s���f�A�a�s�����ɯ�');
DEFINE('_A_NEW_W_BROWSER_NAV','�s���f�A���a�s�����ɯ�');

//Alt Hover
DEFINE('_A_PENDING','�f�z��');
DEFINE('_A_VISIBLE','�i����');
DEFINE('_A_FINISHED','�w����');
DEFINE('_A_MOVE_UP','�W��');
DEFINE('_A_MOVE_DOWN','�U��');


/**
* @desc Includes the main adminLanguage class which refers to var's for translations
*/
class adminLanguage {

var $RTLsupport = false;

var $A_MAIL = '�H�c';

//templates/mambo_admin_blue/login.php
var $A_USERNAME = '�Τ�W';
var $A_PASSWORD = '�K�X';
var $A_WELCOME_MAMBO = '<p>�w��ϥ�Mambo�I</p><p>�ШϥΦ��Ī��Τ�W�M�K�X�ӵn���޲z��x</p>';
var $A_WARNING_JAVASCRIPT = '�Iĵ�i�I Javascript �\�ॲ�����}�A�~��i�楿�`���޲z�ާ@�C';

//templates/mambo_admin_blue/index.php
var $A_LOGIN = '�n��';
var $A_GENERATE_TIME = '�����ͦ��ɶ��G%f ��';
var $A_LOGOUT = '�h�X';

//popups/contentwindow.php
var $A_TITLE_CPRE = '���e�w��';
var $A_CLOSE = '����';
var $A_PRINT = '���L';

//popups/modulewindow.php
var $A_TITLE_MPRE = '�Ҷ��w��';

//popups/pollwindow.php
var $A_TITLE_PPRE = '�b�u�լd�w��';
var $A_VOTE = '�벼';
var $A_RESULTS = '���G';

//popups/uploadimage.php
var $A_TITLE_UPLOAD = '�W�Ǥ��';
var $A_FILE_UPLOAD = '���W��';
var $A_UPLOAD = '�W��';
var $A_FILE_MAX_SIZE = '�̤j���j�p'; //Ken ADDED

//modules/mod_components.php
var $A_ERROR = '���~�I';

//modules/mod_fullmenu.php
var $A_MENU_HOME = '����';
var $A_MENU_HOME_PAGE = '�޲z��x����';
var $A_MENU_CTRL_PANEL = '����O'; //KEN ADDED
var $A_MENU_SITE = '����';
var $A_MENU_SITE_MENU = '�������';
var $A_MENU_SITE_MANAGEMENT = '�����޲z'; //KEN ADDED
var $A_MENU_CONFIGURATION = '�t�m';
var $A_MENU_LANGUAGES = '�y��';
var $A_MENU_MANAGE_LANG = '�޲z�y��';
var $A_MENU_LANG_MANAGE = '�y���޲z';
var $A_MENU_INSTALL = '�w��';
var $A_MENU_INSTALL_LANG = '�w�˻y��';
var $A_MENU_MEDIA_MANAGE = '�C��޲z';
var $A_MENU_MANAGE_MEDIA = '�޲z�C����';
var $A_MENU_PREVIEW = '�w��';
var $A_MENU_NEW_WINDOW = '�b�s���f���}';
var $A_MENU_INLINE = '�O�J���f';
var $A_MENU_INLINE_POS = '�O�J���f�]��m�^';
var $A_MENU_STATISTICS = '�έp';
var $A_MENU_STATISTICS_SITE = '�����έp';
var $A_MENU_BROWSER = '�s�����B�ާ@�t�ΡB��';
var $A_MENU_PAGE_IMP = '�����s��';
var $A_MENU_SEARCH_TEXT = '�j���奻';
var $A_MENU_TEMP_MANAGE = '�Ҫ��޲z';
var $A_MENU_TEMP_CHANGE = '�󴫺����Ҫ�';
var $A_MENU_INSTALL_TEMPLATES = '�w�˺����Ҫ�';//KEN ADDED
var $A_MENU_SITE_TEMP = '�����Ҫ�';
var $A_MENU_ADMIN_TEMP = '�޲z��x�Ҫ�';
var $A_MENU_ADMIN_CHANGE_TEMP = '�󴫺޲z��x�Ҫ�';
var $A_MENU_INSTALL_ADMIN_TEMPLATES = '�w�˫�x�Ҫ�';//KEN ADDED
var $A_MENU_MODUL_POS = '�Ҷ���m';
var $A_MENU_TEMP_POS = '�Ҫ���m';
var $A_MENU_USER_MANAGE = '�Τ�޲z';
var $A_MENU_MANAGE_USER = '�޲z�Τ�';
var $A_MENU_ADD_EDIT = '�s�W/�s��Τ�';
var $A_MENU_MASS_MAIL = '�s�o�l��';
var $A_MENU_MAIL_USERS = '�o�e�l�󵹤@�ӥΤ�Τ@�եΤ�';
var $A_MENU_MANAGE_STR = '�޲z�������c';
var $A_MENU_MANAGEMENT = '���޲z';//KEN ADDED
var $A_MENU_CONTENT = '���e';
var $A_MENU_CONTENT_MANAGE = '���e�޲z';
var $A_MENU_CONTENT_MANAGERS = '���e�޲z';
var $A_MENU_CONTENT_BY_SECTION = '�椸���e'; //KEN ADDED
var $A_MENU_MANAGE_CONTENT = '�޲z���e����';
var $A_MENU_ITEMS = '����';
var $A_MENU_ADDNEDIT = '�s�W/�s��';
var $A_MENU_OTHER_MANAGE = '�䥦�޲z';
var $A_MENU_ITEMS_FRONT = '�޲z��������';
var $A_MENU_ITEMS_CONTENT = '�޲z�R�A���e����';
var $A_MENU_CONTENT_SEC = '�޲z���e�椸';
var $A_MENU_CONTENT_CAT = '�޲z���e����';
var $A_MENU_CATEGORIES = '����';
var $A_MENU_COMPONENTS = '�ե�';
var $A_MENU_COMPONENTS_MANAGEMENT = '�ե�޲z';
var $A_MENU_INST_UNST = '�w��/����';
var $A_MENU_INST_UNST_COMPONENTS = '�w��/�����ե�';
var $A_MENU_MORE_COMP = '��h�ե�';
var $A_MENU_MORE_COMP2 = '��h�ե�...';//KEN ADDED
var $A_MENU_MODULES = '�Ҷ�';
var $A_MENU_INST_UNST_MODULES = '�w��/�����Ҷ�';//KEN ADDED
var $A_MENU_MODULES_MANAGEMENT = '�Ҷ��޲z'; //KEN ADDED
var $A_MENU_INSTALL_CUST = '�w�˩w��Ҷ�';
var $A_MENU_SITE_MOD = '�����Ҷ�';
var $A_MENU_SITE_MOD_MANAGE = '�޲z�����Ҷ�';
var $A_MENU_ADMIN_MOD = '��x�Ҷ�';
var $A_MENU_ADMIN_MOD_MANAGE = '�޲z��x�Ҷ�';
var $A_MENU_MAMBOTS = 'Ĳ�o��';
var $A_MENU_INST_UNST_MAMBOTS = '�w��/����Ĳ�o��';//KEN ADDED
var $A_MENU_MAMBOTS_MANAGE = 'Ĳ�o���޲z'; //KEN ADDED
var $A_MENU_CUSTOM_MAMBOT = '�w�˩w��Ĳ�o��';
var $A_MENU_SITE_MAMBOT = '����Ĳ�o��';
var $A_MENU_SITE_MAMBOTS = '����Ĳ�o��';
var $A_MENU_MAMBOT_MANAGE = '�޲z����Ĳ�o��';
var $A_MENU_INSTALLERS = '�w��';//KEN ADDED
var $A_MENU_INSTALLERS_LIST = '�w�˦C��';//KEN ADDED
var $A_MENU_TEMPLATES_SITE = '�Ҫ� - ����';//KEN ADDED
var $A_MENU_TEMPLATES_SITE_INST = '�w�˺����Ҫ�';//KEN ADDED
var $A_MENU_TEMPLATES_ADMIN = '�Ҫ� - ��x';//KEN ADDED
var $A_MENU_TEMPLATES_ADMIN_INST = '�w�˫�x�Ҫ�';//KEN ADDED
var $A_MENU_MESSAGES = '�u�H';
var $A_MENU_MESSAGES_MANAGEMENT = '�����޲z';//KEN ADDED
var $A_MENU_INBOX = '����c';
var $A_MENU_PRIV_MSG = '�����u�H';
var $A_MENU_GLOBAL_CHECK = '������^';
var $A_MENU_CHECK_INOUT = '��^�Ҧ����X������';
var $A_MENU_SYSTEM_INFO = '�t�ΫH��';
var $A_MENU_CLEAN_CACHE = '�M�Žw�s';
var $A_MENU_CLEAN_CACHE_ITEMS = '�M�Ť��e���ؽw�s';
var $A_MENU_BIG_THANKS = '�J�߷P�°ѻP��';
var $A_MENU_SUPPORT = '���';
var $A_MENU_SYSTEM = '�t��';
var $A_MENU_SYSTEM_MNG = '�t�κ޲z';

//modules/mod_latest.php
var $A_LATEST_ADDED = '�̪�s�W�����e';

//modules/mod_logged.php
var $A_USER_LOGGED = '��e�n���Τ�';
var $A_USER_FORCE_LOGOUT = '�j��n�X�Τ�';

//modules/mod_online.php
var $A_ONLINE_USERS = '�b�u�Τ�';

//modules/mod_popular.php
var $A_POPULAR_MOST = '��������';
var $A_CREATED = '�Ы�';
var $A_HITS = '�I��';

//modules/mod_quickicon.php
var $A_MENU_MANAGER = '���޲z';
var $A_FRONTPAGE_MANAGER = '�����޲z';
var $A_STATIC_MANAGER = '�R�A���e�޲z';
var $A_SECTION_MANAGER = '�椸�޲z';
var $A_CATEGORY_MANAGER = '�����޲z';
var $A_ALL_MANAGER = '���e���غ޲z';
var $A_GLOBAL_CONF = '�����t�m';
var $A_HELP = '���U';

//includes/menubar.html.php
var $A_NEW = '�s�W';
var $A_PUBLISH = '�o�G';
var $A_DEFAULT = '�q�{';
var $A_ASSIGN = '���t';
var $A_UNPUBLISH = '�����o�G';
var $A_EDIT = '�s��';
var $A_DELETE = '�R��';
var $A_SAVE = '�O�s';
var $A_BACK = '��h';
var $A_CANCEL = '����';

//Alerts
var $A_ALERT_SELECT_TO = '�бq�C����ܱ��ب�';
var $A_ALERT_SELECT_PUB = '�бq�C����ܱ��بӵo�G';
var $A_ALERT_SELECT_PUB_LIST = '�бq�C����ܱ��بӳ]���q�{';
var $A_ALERT_ITEM_ASSIGN = '�п�ܱ��بӤ��t';
var $A_ALERT_SELECT_UNPUBLISH = '�бq�C����ܱ��بӨ����o�G';
var $A_ALERT_SELECT_EDIT = '�бq�C����ܱ��بӽs��';
var $A_ALERT_SELECT_DELETE = '�бq�C����ܱ��بӧR��';
var $A_ALERT_CONFIRM_DELETE = '�T�{�R���襤�����ءH';

//Alerts
var $A_ALERT_ENTER_PASSWORD = '�п�J�K�X'; 
var $A_ALERT_INCORRECT = '�L�Ī��Τ�W�B�K�X�γX�ݯŧO�A�Э���';
var $A_ALERT_INCORRECT_TRY = '�L�Ī��Τ�W�αK�X�A�Э���';
var $A_ALERT_ALPHA = '���W�u��]�t�r���μƦr�A���঳�Ů�C';
var $A_ALERT_IMAGE_UPLOAD = '�п�ܹϤ��ӤW��';
var $A_ALERT_IMAGE_EXISTS = "�Ϥ� %s �w�g�s�b";
var $A_ALERT_IMAGE_FILENAME = '������������O gif, png, jpg, bmp, swf, doc, xls �� ppt';
var $A_ALERT_UPLOAD_FAILED = "�W�� %s ����";
var $A_ALERT_UPLOAD_SUC = "�W�� %s �� %s ���\ ";
var $A_ALERT_UPLOAD_SUC2 = "�W�� %s �� %s ���\ ";

//includes/pageNavigation.php
var $A_OF = '/'; 
var $A_NO_RECORD_FOUND = '�S�����O��';
var $A_FIRST_PAGE = '�Ĥ@��';
var $A_PREVIOUS_PAGE = '�W�@��';
var $A_NEXT_PAGE = '�U�@��';
var $A_END_PAGE = '�̫�@��';
var $A_PREVIOUS = '�W�@��';
var $A_NEXT = '�U�@��';
var $A_END = '�̫�@��';
var $A_DISPLAY = '���';
var $A_MOVE_UP = '�W��';
var $A_MOVE_DOWN = '�U��';

//DIRECTORY COMPONENTS ALL FILES
var $A_COMP_CHECKED_OUT = '���X';
var $A_COMP_TITLE = '���D';
var $A_COMP_IMAGE = '�Ϥ�';
var $A_COMP_FRONT_PAGE = '����';
var $A_COMP_IMAGE_POSITION = '�Ϥ���m';
var $A_COMP_FILTER = '�z��';
var $A_COMP_ORDERING = '��ܦ���';
var $A_COMP_ACCESS_LEVEL = '�X�ݯŧO';
var $A_COMP_PUBLISHED = '�o�G';
var $A_COMP_PUBLISH = '�o�G';
var $A_COMP_UNPUBLISHED = '���o�G';
var $A_COMP_UNPUBLISH = '�����o�G';
var $A_COMP_REORDER = '���s�Ƨ�';
var $A_COMP_ORDER = '����';
var $A_COMP_SAVE_ORDER = '�O�s����';
var $A_COMP_ACCESS = '�X��';
var $A_COMP_SECTION = '�椸';
var $A_COMP_NB = '�s��';
var $A_COMP_ACTIVE = '���ʱ���';
var $A_COMP_DESCRIPTION = '�y�z';
var $A_COMP_SELECT_MENU_TYPE = '�п�ܵ������';
var $A_COMP_ENTER_MENU_NAME = '�п�J��涵�W��';
var $A_COMP_CREATE_MENU_LINK = '�T�{�Ы��챵����H \n����良�O�s�����N�ᥢ�C';
var $A_COMP_LINK_TO_MENU = '�챵����';
var $A_COMP_CREATE_MENU = '�N�b�A��ܪ����W�Ыطs����涵';
var $A_COMP_SELECT_MENU = '��ܵ��';
var $A_COMP_MENU_TYPE_SELECT = '��ܵ������';
var $A_COMP_MENU_NAME_ITEM = '��涵�W��';
var $A_COMP_MENU_LINKS = '�{��������챵';
var $A_COMP_MENU_LINKS_AVAIL = '�O�s�����챵�N�i��';
var $A_COMP_NONE = '�L';
var $A_COMP_MENU = '���';
var $A_COMP_TYPE = '����';
var $A_COMP_EDIT = '�s��';
var $A_COMP_NEW = '�s�W';
var $A_COMP_ADD = '�s�W';
var $A_COMP_ITEM_NAME = '���ئW��';
var $A_COMP_STATE = '���A';
var $A_COMP_NAME = '�W��';
var $A_COMP_DEFAULT = '�q�{';
var $A_COMP_CATEG = '����';
var $A_COMP_LINK_USER = '���p�Τ�';
var $A_COMP_CONTACT = '�pô�H';
var $A_COMP_EMAIL = 'E-mail';
var $A_COMP_PREVIEW = '�w��';
var $A_COMP_ITEMS = '����';
var $A_COMP_ITEM = '����';
var $A_COMP_ID = 'ID';
var $A_COMP_EXPIRED = '�L��';
var $A_COMP_YES = '�O';
var $A_COMP_NO = '�_';
var $A_COMP_EDITING = '�s��';
var $A_COMP_ADDING = '�s�W';
var $A_COMP_HITS = '�I��';
var $A_COMP_SOURCE = '�����';
var $A_COMP_SEL_ITEM = '��ܱ��ب�';
var $A_COMP_DATE = '���';
var $A_COMP_AUTHOR = '�@��';
var $A_COMP_ANOTHER_ADMIN = '���b�Q��L�޲z���s��C';
var $A_COMP_SAVE_UNWRT = '�O�s��]�m��󬰥i�g';
var $A_COMP_OVERRIDE_SAVE = '�O�s�ɶV�L�g�O�@';
var $A_COMP_ORDER_SAVED = '�s�����Ǥw�O�s';
var $A_COMP_NO_PARAMETERS = '�S���Ѽ�';
var $A_COMP_POSITION = '��m';
var $A_COMP_SHOW_ADV_DETAILS = '��ܰ��ũ���';
var $A_COMP_HIDE_ADV_DETAILS = '���ð��ũ���';

//components/com_admin/admin.admin.html.php
var $A_COMP_ADMIN_HOME = '����';
var $A_COMP_ADMIN_SIMP_MODE = '²��Ҧ�';
var $A_COMP_ADMIN_SIMP_MODE_SELECTED = '²��Ҧ� (�w��)';
var $A_COMP_ADMIN_SIMP_MODE_UNSELECTED = '²��Ҧ� (����)';
var $A_COMP_ADMIN_ADV_MODE = '���żҦ�';
var $A_COMP_ADMIN_ADV_MODE_SELECTED = '���żҦ� (�w��)';
var $A_COMP_ADMIN_ADV_MODE_UNSELECTED = '���żҦ� (����)';
//var $A_COMP_ADMIN_TITLE = '����O';
var $A_COMP_ADMIN_INFO = '�H��';
var $A_COMP_ADMIN_SYSTEM = '�t�ΫH��';
var $A_COMP_ADMIN_PHP_BUILT_ON = 'PHP�t�����ҡG';
var $A_COMP_ADMIN_DB = '�ƾڮw�����G';
var $A_COMP_ADMIN_PHP_VERSION = 'PHP�����G';
var $A_COMP_ADMIN_SERVER = 'Web�A�Ⱦ��G';
var $A_COMP_ADMIN_SERVER_TO_PHP = 'Web�A�Ⱦ��MPHP�����f�G';
var $A_COMP_ADMIN_MAMBO_VERSION = 'Mambo �����G';
var $A_COMP_ADMIN_AGENT = '�Ȥ�ݡG';
var $A_COMP_ADMIN_SETTINGS = '������PHP�]�m�G';
var $A_COMP_ADMIN_MODE = 'Safe Mode:';
var $A_COMP_ADMIN_BASEDIR = 'Open basedir:';
var $A_COMP_ADMIN_ERRORS = 'Display Errors:';
var $A_COMP_ADMIN_OPEN_TAGS = 'Short Open Tags:';
var $A_COMP_ADMIN_FILE_UPLOADS = 'File Uploads:';
var $A_COMP_ADMIN_QUOTES = 'Magic Quotes:';
var $A_COMP_ADMIN_REG_GLOBALS = 'Register Globals:';
var $A_COMP_ADMIN_OUTPUT_BUFF = 'Output Buffering:';
var $A_COMP_ADMIN_S_SAVE_PATH = 'Session save path:';
var $A_COMP_ADMIN_S_AUTO_START = 'Session auto start:';
var $A_COMP_ADMIN_XML = 'XML enabled:';
var $A_COMP_ADMIN_ZLIB = 'Zlib enabled:';
var $A_COMP_ADMIN_DISABLED = 'Disabled Functions:';
var $A_COMP_ADMIN_WYSIWYG = '�i���ƽs�边:';
var $A_COMP_ADMIN_CONF_FILE = 'Mambo�t�m���G';
var $A_COMP_ADMIN_PHP_INFO2 = 'PHP�H��';
var $A_COMP_ADMIN_PHP_INFO = 'PHP�H��';
var $A_COMP_ADMIN_PERMISSIONS='�v��';
var $A_COMP_ADMIN_DIR_PERM = '�ؿ��v��';
var $A_COMP_ADMIN_FOR_ALL = '�������o��Mambo���\��M�S�ʡA�бN�U�C�ؿ��]���i�g�G';
var $A_COMP_ADMIN_CREDITS = '�a�A';
var $A_COMP_ADMIN_APP = '���Ψt��';
var $A_COMP_ADMIN_URL = '���}';
var $A_COMP_ADMIN_VERSION = '����';
var $A_COMP_ADMIN_LICENSE = '�\�i';
var $A_COMP_ADMIN_CALENDAR = '���';
var $A_COMP_ADMIN_PUB_DOMAIN = '������';
var $A_COMP_ADMIN_ICONS = '�ϼ�';
var $A_COMP_ADMIN_INDEX = '����';
var $A_COMP_ADMIN_SITE_PREVIEW = '�����w��';
var $A_COMP_ADMIN_OPEN_NEW_WIN = '�b�s���f���}';

//components/com_admin/admin.admin.php
var $A_COMP_ALERT_NO_LINK = '�����بS�����p���챵';

//components/com_banners/admin.banners.html.php
var $A_COMP_BANNERS_MANAGER = '��T�s�i�޲z';
var $A_COMP_BANNERS_NAME = '��T�s�i�W��';
var $A_COMP_BANNERS_IMPRESS_MADE = '�w�s����';
var $A_COMP_BANNERS_IMPRESS_LEFT = '�Ѿl�s����';
var $A_COMP_BANNERS_CLICKS = '�I��';
var $A_COMP_BANNERS_CLICKS2 = '�I��%';
var $A_COMP_BANNERS_PUBLISHED = '�o�G';
var $A_COMP_BANNERS_LOCK = '���X';
var $A_COMP_BANNERS_PROVIDE = '�п�J��T�s�i�W�١C';
var $A_COMP_BANNERS_SELECT_IMAGE = '�п�ܹϤ��C';
var $A_COMP_BANNERS_FILL_URL = '�п�J��T�s�i�����}�C';
var $A_COMP_BANNERS_BANNER = '��T�s�i';
var $A_COMP_BANNERS_DETAILS = '����';
var $A_COMP_BANNERS_CLIENT = '�Ȥ�W��';
var $A_COMP_BANNERS_PURCHASED = '�ʶR���s����';
var $A_COMP_BANNERS_UNLIMITED = '�L����';
var $A_COMP_BANNERS_URL = '��T�s�i���}';
var $A_COMP_BANNERS_SHOW = '��ܾ�T�s�i';
var $A_COMP_BANNERS_CLICK_URL = '�ؼк��}';
var $A_COMP_BANNERS_CUSTOM = '�w���T�s�i�N�X';
var $A_COMP_BANNERS_RESET_CLICKS = '�I�����k�s';
var $A_COMP_BANNERS_IMAGE = '��T�s�i�Ϥ�';
var $A_COMP_BANNERS_CLIENT_MANAGER = '��T�s�i�Ȥ�޲z';
var $A_COMP_BANNERS_NO_ACTIVE = '�E������T�s�i��';
var $A_COMP_BANNERS_FILL_CL_NAME = '�п�J�Ȥ�W�١C';
var $A_COMP_BANNERS_FILL_CO_NAME = '�п�J�pô�H�C';
var $A_COMP_BANNERS_FILL_CO_EMAIL = '�п�JEmail�C';
var $A_COMP_BANNERS_TITLE_CLIENT = '��T�s�i�Ȥ�';
var $A_COMP_BANNERS_CONTACT_NAME = '�pô�H';
var $A_COMP_BANNERS_CONTACT_EMAIL = 'Email';
var $A_COMP_BANNERS_EXTRA = '�Ƶ�';

//components/com_banners/admin.banners.php
var $A_COMP_BANNERS_SELECT_CLIENT = '��ܫȤ�';
var $A_COMP_BANNERS_THE_CLIENT = '�Ȥ� [ ';
var $A_COMP_BANNERS_EDITED = ' ] ���b�Q��L�޲z���s��C';
var $A_COMP_BANNERS_DEL_CLIENT = '�L�k�R���Ȥ�A�]���٦����b�B�@����T�s�i';

//components/com_categories/admin.categories.html.php
var $A_COMP_CATEG_MANAGER = '�����޲z <small><small>[ ���e: ���� ]</small></small>';
var $A_COMP_CATEG_CATEGS = '�����޲z <small><small>[ %s ]</small></small>';
var $A_COMP_CATEG_NAME = '�����W��';
var $A_COMP_CATEG_ID = '�����N�X';
var $A_COMP_CATEG_MUST_NAME = '�����������W��';
var $A_COMP_CATEG_DETAILS = '��������';
var $A_COMP_CATEG_TITLE = '�������D';
var $A_COMP_CATEG_TABLE = '�����C��';
var $A_COMP_CATEG_BLOG = '����Blog����';
var $A_COMP_CATEG_MESSAGE = '����';
var $A_COMP_CATEG_MESSAGE2 = '���b�Q��L�޲z���s��C';
var $A_COMP_CATEG_MOVE = '���ʤ���';
var $A_COMP_CATEG_MOVE_TO_SECTION = '���ʨ�椸';
var $A_COMP_CATEG_BEING_MOVED = '���ʪ�����';
var $A_COMP_CATEG_CONTENT = '���ʪ����e����';
var $A_COMP_CATEG_MOVE_CATEG = '�N���ʩҦC������';
var $A_COMP_CATEG_ALL_ITEMS = '�H�Τ��������Ҧ����ء]�]�N�O�ҦC���^';
var $A_COMP_CATEG_TO_SECTION = '����w���椸�C';
var $A_COMP_CATEG_COPY = '�ƻs����';
var $A_COMP_CATEG_COPY_TO_SECTION = '�ƻs��椸';
var $A_COMP_CATEG_BEING_COPIED = '�n�ƻs������';
var $A_COMP_CATEG_ITEMS_COPIED = '�ƻs�����e����';
var $A_COMP_CATEG_COPY_CATEGS = '�N�ƻs�ҦC������';

//components/com_categories/admin.categories.php
var $A_COMP_CATEG_DELETE = '��ܭn�R��������';
var $A_COMP_CATEG_CATEG_S = '����';
var $A_COMP_CATEG_CANNOT_REMOVE = '�L�k�R���A�]�䦳�U�ݰO��';
var $A_COMP_CATEG_SELECT = '��ܤ�����';
var $A_COMP_CATEG_ITEM_MOVE = '��ܱ��بӲ���';
var $A_COMP_CATEG_MOVED_TO = '�������ʨ�';
var $A_COMP_CATEG_COPY_OF = '�ƻs';
var $A_COMP_CATEG_COPIED_TO = '�����ƻs��';
var $A_COMP_CATEG_SELECT_TYPE = '�������';
var $A_COMP_CATEG_CONTACT_CATEG_TABLE = '�pô�H�����C��';
var $A_COMP_CATEG_NEWSFEED_CATEG_TABLE = '�s�D�༽�����C��';
var $A_COMP_CATEG_WEBLINK_CATEG_TABLE = '�����챵�����C��';
var $A_COMP_CATEG_CONTENT_CATEG_TABLE = '���e�����C��';
var $A_COMP_CATEG_CONTENT_CATEG_BLOG = '���e����Blog����';

//components/com_checkin/admin.checkin.php
var $A_COMP_CHECK_TITLE = '������^';
var $A_COMP_CHECK_DB_T = '�ƾڮw���';
var $A_COMP_CHECK_NB_ITEMS = '���ؼ�';
var $A_COMP_CHECK_IN = '��^';
var $A_COMP_CHECK_TABLE = '�ˬd���';
var $A_COMP_CHECK_DONE = '���X�����ؤw������^';

//components/com_config/admin.config.html.php
var $A_COMP_CONF_GC = '�����t�m';
var $A_COMP_CONF_IS = '��';
var $A_COMP_CONF_WRT = '�i�g';
var $A_COMP_CONF_UNWRT = '���i�g';
//var $A_COMP_CONF_SITE_PAGE = 'site-page';
var $A_COMP_CONF_OFFLINE = '�������u';
var $A_COMP_CONF_OFFMESSAGE = '���u����';
var $A_COMP_CONF_OFFMESSAGE_TIP = '�������u����ܪ�����';
var $A_COMP_CONF_ERR_MESSAGE = '�t�ο��~����';
var $A_COMP_CONF_ERR_MESSAGE_TIP = 'Mambo�L�k�s���ƾڮw����ܪ�����';
var $A_COMP_CONF_SITE_NAME = '�����W��';
var $A_COMP_CONF_UN_LINKS = '��ܥ����v���챵';
var $A_COMP_CONF_UN_LINKS_TIP = '�N���v�����U�Τ�\Ū�����e���챵�A��ܵ����n���Τ�A���u���Τ�n����~��\Ū����C';
var $A_COMP_CONF_USER_REG = '���\�Τ���U';
var $A_COMP_CONF_USER_REG_TIP = '���\�Τ�ۤv���U';
var $A_COMP_CONF_AC_ACT = '�ϥαb��E��';
var $A_COMP_CONF_AC_ACT_TIP = '�Τ���U��A�N����E���l��A�q�L�E���챵�E���b��A�M��~��n��.';
var $A_COMP_CONF_REQ_EMAIL = '�n�D�ߤ@��Email';
var $A_COMP_CONF_REQ_EMAIL_TIP = '�Τᤣ��ϥάۦP�� email �a�}�ӵ��U';
var $A_COMP_CONF_REG_SUBMIT = '���\���U�Τ�o��峹';
var $A_COMP_CONF_REG_SUBMIT_TIP = '���\���U�Τ�b�e�x�o��峹';
var $A_COMP_CONF_DEBUG = '�ոպ���';
var $A_COMP_CONF_DEBUG_TIP = '��ܿ��~�E�_�H���MSQL���~�H���A�ȨѶ}�o�H���ոե�';
var $A_COMP_CONF_EDITOR = '�i���ƽs�边';
var $A_COMP_CONF_LENGTH = '�C����ؼ�';
var $A_COMP_CONF_LENGTH_TIP = '�޲z��x�q�{���C����ܱ��ؼ�';
var $A_COMP_CONF_SITE_ICON = '�����ϼ�';
var $A_COMP_CONF_SITE_ICON_TIP = '�p�G�d�ũΤ�󤣦s�b�A�h�ϥΨt���q�{��favicon.ico.';
//var $A_COMP_CONF_LOCAL_PG = 'Locale-page';
var $A_COMP_CONF_LOCALE = '���a';
var $A_COMP_CONF_LANG = '�e�x�y��';
var $A_COMP_CONF_ALANG = '��x�y��';
var $A_COMP_CONF_TIME_SET = '�ɮt';
var $A_COMP_CONF_DATE = '��e���/�ɶ�';
var $A_COMP_CONF_LOCAL = '��a�N�X';
//var $A_COMP_CONF_CONT_PAGE = 'content-page';
var $A_COMP_CONF_CONTROL = '* �U�C�ѼƱ���e����ܮ榡 *';
var $A_COMP_CONF_LINK_TITLES = '�챵���D';
var $A_COMP_CONF_MORE_LINK = '�\Ū�����챵';
var $A_COMP_CONF_MORE_LINK_TIP = '���e���ئ�����ɡA��ܾ\Ū�����챵';
var $A_COMP_CONF_RATE_VOTE = '���ص���/�벼';
var $A_COMP_CONF_RATE_VOTE_TIP = '���\�벼�����e����';
var $A_COMP_CONF_AUTHOR = '�@�̦W��';
var $A_COMP_CONF_AUTHOR_TIP = '��ܧ@�̦W�١A�o�O�����]�m�A���i�H�b���M���دŧO�i����C';
var $A_COMP_CONF_CREATED = '�Ыؤ���M�ɶ�';
var $A_COMP_CONF_CREATED_TIP = '��ܤ��e���ت��Ыؤ���M�ɶ��A�o�O�����]�m�A���i�H�b���M���دŧO�i����C';
var $A_COMP_CONF_MOD_DATE = '�ק����M�ɶ�';
var $A_COMP_CONF_MOD_DATE_TIP = '��ܤ��e���ت��ק����M�ɶ��A�o�O�����]�m�A���i�H�b���M���دŧO�i����C';
var $A_COMP_CONF_HITS = '�I��';
var $A_COMP_CONF_HITS_TIP = '��ܤ��e���ت��I���\Ū�ơA�o�O�����]�m�A���i�H�b���M���دŧO�i����C';
var $A_COMP_CONF_PDF = 'PDF�ϼ�';
var $A_COMP_CONF_OPT_MEDIA = '�ﶵ���i�ΡA�]��/media �ؿ����i�g';
var $A_COMP_CONF_PRINT_ICON = '���L�ϼ�';
var $A_COMP_CONF_EMAIL_ICON = 'Email�ϼ�';
var $A_COMP_CONF_ICONS = '�ϼ�';
var $A_COMP_CONF_USE_OR_TEXT = '���L�B�ͦ�PDF�M�o�eEmail ���ϼЩΤ奻';
var $A_COMP_CONF_TBL_CONTENTS = '�h�����e���ت��';
var $A_COMP_CONF_BACK_BUTTON = '��^���s';
var $A_COMP_CONF_CONTENT_NAV = '���e���ؾɯ�';
var $A_COMP_CONF_HYPER = '�ϥζW�챵���D';
//var $A_COMP_CONF_DB_PAGE = 'db-page';
var $A_COMP_CONF_HOSTNAME = '�D���W';
var $A_COMP_CONF_DB_USERNAME = '�Τ�W';
var $A_COMP_CONF_DB_PW = '�K�X';
var $A_COMP_CONF_DB_NAME = '�ƾڮw';
var $A_COMP_CONF_DB_PREFIX = '�ƾڪ�e��';
//Svar $A_COMP_CONF_S_PAGE = 'server-page';
var $A_COMP_CONF_ABS_PATH = '������|';
var $A_COMP_CONF_LIVE = '�����a�}';
var $A_COMP_CONF_SECRET = '�[�K�奻';
var $A_COMP_CONF_GZIP = '�� GZIP ���Y����';
var $A_COMP_CONF_CP_BUFFER = '�p�G�t�Τ�����ܡA���Y�w�Ŀ�X';
var $A_COMP_CONF_SESSION_TIME = 'session�|�ܮɶ�';
var $A_COMP_CONF_SEC = '��';
var $A_COMP_CONF_AUTO_LOGOUT = '���ɶ����p�G�S�����ʱN�۰ʰh�X�n��';
var $A_COMP_CONF_ERR_REPORT = '���~���i';
var $A_COMP_CONF_REG_GLOBALS_EMU = 'Register Globals �����G';
var $A_COMP_CONF_REG_GLOBALS_EMU_DESC = 'Register globals �����A�p�G�]�m�� Off ���ܡA���ǲե�]�\�|����u�@�C';
var $A_COMP_CONF_HELP_SERVER = '���U�A�Ⱦ�';
var $A_COMP_CONF_FILE_CREATION = '���Ы�';
var $A_COMP_CONF_FILE_PERM = '����v��';
var $A_COMP_CONF_FILE_DONT_CHMOD = '�����ܷs����v�� (�ϥΪA�Ⱦ��q�{��)';
var $A_COMP_CONF_FILE_CHMOD = '���ܷs����v��';
var $A_COMP_CONF_FILE_CHMOD_TIP = '���s�Ыت����w�q�v���лx';
var $A_COMP_CONF_APPLY_FILE = '���Ψ�{�����';
var $A_COMP_CONF_APPLY_FILE_TIP = '�����v���лx�������<em>�Ҧ��{�����</em>�C<br/><b>���A���ϥαN�|�y���������ġI</b>';
var $A_COMP_CONF_DIR_CREATION = '�ؿ��Ы�';
var $A_COMP_CONF_DIR_PERM = '�ؿ��v��';
var $A_COMP_CONF_DIR_DONT_CHMOD = '�����ܷs�ؿ����v�� (�ϥΪA�Ⱦ��q�{��)';
var $A_COMP_CONF_DIR_CHMOD = '���ܷs�ؿ����v��';
var $A_COMP_CONF_DIR_CHMOD_TIP = '���s�Ыت��ؿ��w�q�v���лx';
var $A_COMP_CONF_APPLY_DIR = '���Ψ�{���ؿ�';
var $A_COMP_CONF_APPLY_DIR_TIP = '�����v���лx�������<em>�Ҧ��{���ؿ�</em>�C<br/><b>���A���ϥαN�|�y���������ġI</b>';
var $A_COMP_CONF_USER = '�Ҧ���';
var $A_COMP_CONF_GROUP = '��';
var $A_COMP_CONF_WORLD = '���@';
var $A_COMP_CONF_READ = 'Ū��';
var $A_COMP_CONF_WRITE = '�g�J';
var $A_COMP_CONF_EXECUTE = '����';
var $A_COMP_CONF_SEARCH = '�j��';
//var $A_COMP_CONF_META_PAGE = 'metadata-page';
var $A_COMP_CONF_META_DESC = '�����������y�z';
var $A_COMP_CONF_META_KEY = '��������������r';
var $A_COMP_CONF_META_TITLE = '��ܼ��D������';
var $A_COMP_CONF_META_ITEMS = '�s�����e���خ���ܼ��D������';
var $A_COMP_CONF_META_AUTHOR = '��ܧ@�̤�����';
var $A_COMP_CONF_META_AUTHOR_TIP = '�s�����e���خ���ܧ@�̤�����';
//var $A_COMP_CONF_MAIL_PAGE = 'mail-page';
var $A_COMP_CONF_MAIL = '�l��o�e';
var $A_COMP_CONF_MAIL_FROM = '�o��HEmail�a�}';
var $A_COMP_CONF_MAIL_FROM_NAME = '�o��H�m�W';
var $A_COMP_CONF_MAIL_SENDMAIL_PATH = 'Sendmail���|';
var $A_COMP_CONF_MAIL_SMTP_AUTH = 'SMTP�{��';
var $A_COMP_CONF_MAIL_SMTP_USER = 'SMTP�Τ�';
var $A_COMP_CONF_MAIL_SMTP_PASS = 'SMTP�K�X';
var $A_COMP_CONF_MAIL_SMTP_HOST = 'SMTP�D��';
//var $A_COMP_CONF_CACHE_PAGE = 'cache-page';
var $A_COMP_CONF_CACHE = '�ϥνw�s';
var $A_COMP_CONF_CACHE_FOLDER = '�w�s�ؿ�';
var $A_COMP_CONF_CACHE_DIR = '��e�w�s�ؿ���';
var $A_COMP_CONF_CACHE_DIR_UNWRT = '�w�s�ؿ������i�g�A�b�ϥνw�s�\�ध�e�г]�m���ؿ���CHMOD755';
var $A_COMP_CONF_CACHE_TIME = '�w�s�ɶ�';
//var $A_COMP_CONF_STATS_PAGE = 'stats-page';
var $A_COMP_CONF_STATS = '�έp';
var $A_COMP_CONF_STATS_ENABLE = '���\/�T��������έp�H��';
var $A_COMP_CONF_STATS_LOG_HITS = '������O�����e�I��';
var $A_COMP_CONF_STATS_WARN_DATA = 'ĵ�i�G�j�q�ƾڱN�Q����';
var $A_COMP_CONF_STATS_LOG_SEARCH = '�O���j���奻';
//var $A_COMP_CONF_SEO_PAGE = 'seo-page';
var $A_COMP_CONF_SEO_LBL = '�j�������u��';
var $A_COMP_CONF_SEO = '�j�������u��';
var $A_COMP_CONF_SEO_SEFU = '�j�������ͦn�챵';
var $A_COMP_CONF_SEO_APACHE = '�u�A�Ω�Apache�A�Ⱦ�! �E���e���� htaccess.txt ��W�� .htaccess';
var $A_COMP_CONF_SEO_DYN = '�ʺA�������D';
var $A_COMP_CONF_SEO_DYN_TITLE = '�ʺA��s�������D�A�ӧ�n��{��e�����e';
var $A_COMP_CONF_SERVER = '�A�Ⱦ�';
var $A_COMP_CONF_METADATA = '���ƾ�';
var $A_COMP_CONF_EMAIL = '�l��';
var $A_COMP_CONF_CACHE_TAB = '�w�s';

//components/com_config/admin.config.php
var $A_COMP_CONF_HIDE = '����';
var $A_COMP_CONF_SHOW = '���';
var $A_COMP_CONF_DEFAULT = '�t���q�{';
var $A_COMP_CONF_NONE = '�L';
var $A_COMP_CONF_SIMPLE = '²��';
var $A_COMP_CONF_MAX = '�̤j';
var $A_COMP_CONF_MAIL_FC = 'PHP�l����';
var $A_COMP_CONF_SEND = 'Sendmail';
var $A_COMP_CONF_SMTP = 'SMTP�A�Ⱦ�';
var $A_COMP_CONF_UPDATED = '�t�m�w�Q��s�I';
var $A_COMP_CONF_ERR_OCC = '�o�Ϳ��~�I�L�k���}�t�m���Ӽg�J�I';

//components/com_contact/admin.contact.html.php
var $A_COMP_CONT_MANAGER = '�pô�H�޲z';
var $A_COMP_CONT_FILTER = '�z��';
var $A_COMP_CONT_YOUR_NAME = '������J�W�١C';
var $A_COMP_CONT_CATEG = '�п�ܤ����C';
var $A_COMP_CONT_DETAILS = '�pô�H����';
var $A_COMP_CONT_POSITION = '¾��';
var $A_COMP_CONT_ADDRESS = '�a�}';
var $A_COMP_CONT_TOWN = '����';
var $A_COMP_CONT_STATE = '�٥�';
var $A_COMP_CONT_COUNTRY = '��a';
var $A_COMP_CONT_POSTAL_CODE = '�l�s';
var $A_COMP_CONT_TEL = '�q��';
var $A_COMP_CONT_FAX = '�ǯu';
var $A_COMP_CONT_INFO = '�Ƶ�';
//var $A_COMP_CONT_PUBLISH = 'publish-page';
var $A_COMP_CONT_PUBLISHING = '�o�G';
var $A_COMP_CONT_SITE_DEFAULT = '�����q�{';
//var $A_COMP_CONT_IMG_PAGE = 'images-page';
var $A_COMP_CONT_IMG_INFO = '�Ϥ�';
var $A_COMP_CONT_PARAMS = '�Ѽ�';
var $A_COMP_CONT_PARAMETERS = '�Ѽ�';
var $A_COMP_CONT_PARAM_MESS = '* �U�C�ѼƱ����pô�H��������� *';
var $A_COMP_CONT_PUB_TAB = '�o�G';
var $A_COMP_CONT_IMG_TAB = '�Ϥ�';

//components/com_contact/admin.contact.php
var $A_COMP_CONT_SELECT_REC = '��ܰO����';

//components/com_content/admin.content.html.php
var $A_COMP_CONTENT_ITEMS_MNG = '���e���غ޲z';
var $A_COMP_CONTENT_ALL_ITEMS = '���e���غ޲z';
var $A_COMP_CONTENT_START_ALWAYS = '�}�l�G�`�O';
var $A_COMP_CONTENT_START = '�}�l';
var $A_COMP_CONTENT_FIN_NOEXP = '�����G�S���L��';
var $A_COMP_CONTENT_FINISH = '����';
var $A_COMP_CONTENT_PUBLISH_INFO = '�o�G�H��';
var $A_COMP_CONTENT_MANAGER = '�޲z';
var $A_COMP_CONTENT_ZERO = '�T�{���m�I���Ƭ�0�H\n���󥼫O�s�����N�ᥢ�C';
var $A_COMP_CONTENT_MUST_TITLE = '���e���إ�����J���D';
var $A_COMP_CONTENT_MUST_NAME = '���e���إ�����J';
var $A_COMP_CONTENT_MUST_SECTION = '������ܳ椸�C';
var $A_COMP_CONTENT_MUST_CATEG = '������ܤ����C';
var $A_COMP_CONTENT_ITEMS = '���e����';
var $A_COMP_CONTENT_IN = '���e�b';
var $A_COMP_CONTENT_TITLE_ALIAS = '���D�O�W';
var $A_COMP_CONTENT_ITEM_DETAILS = '���ة���';
var $A_COMP_CONTENT_INTRO = '�K�n�G(����)';
var $A_COMP_CONTENT_MAIN = '����G(�i��)';
var $A_COMP_CONTENT_PUB_INFO = '�o�G';
var $A_COMP_CONTENT_FRONTPAGE = '��ܦb����';
var $A_COMP_CONTENT_AUTHOR = '�@�̧O�W';
var $A_COMP_CONTENT_CREATOR = '���Ыت�';
var $A_COMP_CONTENT_OVERRIDE = '���Ыخɶ�';
var $A_COMP_CONTENT_START_PUB = '�}�l�o�G�ɶ�';
var $A_COMP_CONTENT_FINISH_PUB = '�����o���ɶ�';
var $A_COMP_CONTENT_ID = '���e����ID';
var $A_COMP_CONTENT_DRAFT_UNPUB = '���o�G����Z';
var $A_COMP_CONTENT_RESET_HIT = '���m�I����';
var $A_COMP_CONTENT_REVISED = '�ק�';
var $A_COMP_CONTENT_TIMES = '����';
var $A_COMP_CONTENT_CREATED = '�Ы�';
var $A_COMP_CONTENT_BY = '��';
var $A_COMP_CONTENT_NEW_DOC = '�s����';
var $A_COMP_CONTENT_LAST_MOD = '�̷s�ק�';
var $A_COMP_CONTENT_NOT_MOD = '���ק�';
var $A_COMP_CONTENT_MOSIMAGE = 'Mambo�Ϥ�����';
var $A_COMP_CONTENT_SUB_FOLDER = '�l�ؿ�';
var $A_COMP_CONTENT_GALLERY = '�Ϯw�Ϥ�';
var $A_COMP_CONTENT_IMAGES = '���e�Ϥ�';
var $A_COMP_CONTENT_UP = '�V�W';
var $A_COMP_CONTENT_DOWN = '�V�U';
var $A_COMP_CONTENT_REMOVE = '�R��';
var $A_COMP_CONTENT_EDIT_IMAGE = '�s���ܪ��Ϥ�';
var $A_COMP_CONTENT_IMG_ALIGN = '�Ϥ����';
var $A_COMP_CONTENT_ALIGN = '���';
var $A_COMP_CONTENT_ALT = '���N�奻';
var $A_COMP_CONTENT_BORDER = '���';
var $A_COMP_CONTENT_IMG_CAPTION = '���D';
var $A_COMP_CONTENT_IMG_CAPTION_POS = '���D��m';
var $A_COMP_CONTENT_IMG_CAPTION_ALIGN = '���D�ƦC';
var $A_COMP_CONTENT_IMG_WIDTH = '�Ϥ��e��';
var $A_COMP_CONTENT_APPLY = '����';
var $A_COMP_CONTENT_PARAM = '�ѼƱ���';
var $A_COMP_CONTENT_PARAM_MESS = '* �U�C�Ѽƥu������ة������ *';
var $A_COMP_CONTENT_META_DATA = '���ƾ�';
var $A_COMP_CONTENT_KEYWORDS = '����r';
//var $A_COMP_CONTENT_LINK_PAGE = 'link-page';
var $A_COMP_CONTENT_LINK_CI = '�o�N�b��ܪ���椤�Ыؤ@�� \'��涵 - ���e����\' ���챵';
var $A_COMP_CONTENT_LINK_NAME = '�챵�W��';
var $A_COMP_CONTENT_SOMETHING = '�п��';
var $A_COMP_CONTENT_MOVE_ITEMS = '���ʱ���';
var $A_COMP_CONTENT_MOVE_SECCAT = '���ʨ�椸/����';
var $A_COMP_CONTENT_ITEMS_MOVED = '���ʪ�����';
var $A_COMP_CONTENT_SECCAT = '�п�ܳ椸/����';
var $A_COMP_CONTENT_COPY_ITEMS = '�ƻs���e����';
var $A_COMP_CONTENT_COPY_SECCAT = '�ƻs��椸/����';
var $A_COMP_CONTENT_ITEMS_COPIED = '�ƻs������';
var $A_COMP_CONTENT_PUBLISHING = '�o�G';
var $A_COMP_CONTENT_IMAGES2 = '�Ϥ�';
var $A_COMP_CONTENT_META_INFO = '���ƾ�';
var $A_COMP_CONTENT_ADD_ETC = '�[�J�椸/����/���D';
var $A_COMP_CONTENT_LINK_TO_MENU = '�챵����';
var $A_COMP_CONTENT_EDIT_CONTENT = '�s�褺�e';
var $A_COMP_CONTENT_EDIT_STATIC = '�s���R�A���e';
var $A_COMP_CONTENT_EDIT_SECTION = '�s��椸';
var $A_COMP_CONTENT_EDIT_CATEGORY = '�s�����';
var $A_COMP_CONTENT_EDIT_USER = '�s��Τ�';
//components/com_content/admin.content.php
var $A_COMP_CONTENT_CACHE = '�w�s�w�M��';
var $A_COMP_CONTENT_MODULE = '�Ҷ�';
var $A_COMP_CONTENT_ANOTHER = '���b�Q��L�޲z���s��C';
var $A_COMP_CONTENT_PUBLISHED = '���ئ��\�o�G';
var $A_COMP_CONTENT_UNPUBLISHED = '���ئ��\�����o�G';
var $A_COMP_CONTENT_SEL_TOG = '��ܱ��بӥ��}';
var $A_COMP_CONTENT_SEL_DEL = '��ܱ��بӧR��';
var $A_COMP_CONTENT_SUCCESS_DEL = '���ئ��\�R��';
var $A_COMP_CONTENT_SEL_MOVE = '��ܱ��بӲ���';
var $A_COMP_CONTENT_MOVED = '���ئ��\���ʨ�椸';
var $A_COMP_CONTENT_ERR_OCCURRED = '�o�Ϳ��~';
var $A_COMP_CONTENT_COPIED = '���ئ��\�ƻs��椸';
var $A_COMP_CONTENT_RESET_HIT_COUNT = '���\���m�I����';
var $A_COMP_CONTENT_IN_MENU = '(��涵 - �R�A���e) �챵';
var $A_COMP_CONTENT_SUCCESS = '���\�Ы�';
var $A_COMP_CONTENT_SELECT_CAT = '��ܤ���';
var $A_COMP_CONTENT_SELECT_SEC = '��ܳ椸';

//components/com_content/toolbar.content.html.php
var $A_COMP_CONTENT_BAR_MOVE = '����';
var $A_COMP_CONTENT_BAR_COPY = '�ƻs';
var $A_COMP_CONTENT_BAR_SAVE = '�O�s';

//components/com_frontpage/admin.frontpage.html.php
var $A_COMP_FRONT_PAGE_MNG = '�����޲z';
//var $A_COMP_FRONT_PAGE_ITEMS = '��������';
var $A_COMP_FRONT_ORDER = '�Ƨ�';

//components/com_frontpage/admin.frontpage.php
var $A_COMP_FRONT_COUNT_NUM = '�Ѽ� count �����O�Ʀr';
var $A_COMP_FRONT_INTRO_NUM = '�Ѽ� intro �����O�Ʀr';
var $A_COMP_FRONT_WELCOME = '�w����{';
var $A_COMP_FRONT_IDONOT = '�S�����e';

//components/com_frontpage/toolbar.frontpage.html.php
var $A_COMP_FRONT_REMOVE = '����';

//components/com_languages/admin.languages.html.php
var $A_COMP_LANG_INSTALL = '�y���޲z <small><small>[ ���� ]</small></small>';
var $A_COMP_LANG_LANG = '�y��';
var $A_COMP_LANG_EMAIL = '�@�� Email';
var $A_COMP_LANG_EDITOR = '�y���s�边';
var $A_COMP_LANG_FILE = '���y��';

//components/com_languages/admin.languages.php
var $A_COMP_LANG_UPDATED = '�t�m���\��s�I';
var $A_COMP_LANG_M_SURE = '���~�I �нT�{ configuration.php ���i�g�C';
var $A_COMP_LANG_CANNOT = '����R�����b�ϥΪ��y���C';
var $A_COMP_LANG_FAILED_OPEN = '�ާ@���ѡG�L�k���}';
var $A_COMP_LANG_FAILED_SPEC = '�ާ@���ѡG�S�����w���y���C';
var $A_COMP_LANG_FAILED_EMPTY = '�ާ@���ѡG�S�����e';
var $A_COMP_LANG_FAILED_UNWRT = '�ާ@���ѡG��󤣥i�g�C';
var $A_COMP_LANG_FAILED_FILE = '�ާ@���ѡG�L�k���}���Ӽg�J�C';

//components/com_mambots/admin.mambots.html.php
var $A_COMP_MAMB_ADMIN = '�޲z';
var $A_COMP_MAMB_SITE = '����';
var $A_COMP_MAMB_MANAGER = 'Ĳ�o���޲z';
var $A_COMP_MAMB_NAME = 'Ĳ�o���W��';
var $A_COMP_MAMB_FILE = '���';
var $A_COMP_MAMB_MUST_NAME = 'Ĳ�o��������J�W��';
var $A_COMP_MAMB_MUST_FNAME = 'Ĳ�o��������J���W��';
var $A_COMP_MAMB_DETAILS = 'Ĳ�o������';
var $A_COMP_MAMB_FOLDER = '�ؿ�';
var $A_COMP_MAMB_MFILE = 'Ĳ�o�����';
var $A_COMP_MAMB_ORDER = 'Ĳ�o���Ƨ�';

//components/com_mambots/admin.mambots.php
var $A_COMP_MAMB_EDIT = '���b�Q��L�޲z���s��C';
var $A_COMP_MAMB_DEL = '���Ĳ�o���ӧR��';
var $A_COMP_MAMB_TO = '���Ĳ�o��';
var $A_COMP_MAMB_PUB = '�o�G';
var $A_COMP_MAMB_UNPUB = '�����o�G';
var $A_COMP_MAMB_SAVED_CHANGES = '���\�O�sĲ�o�����ܧ�: '; //KEN ADDED
var $A_COMP_MAMB_SAVED = '���\�O�sĲ�o��: '; //KEN ADDED
var $A_COMP_MAMB_ORDERING = '�s�������q�{�Ʀb�̫�A�ƦC���ǥi�H�b���ثO�s��վ�C'; //KEN ADDED
var $A_COMP_MAMB_ORDERING_SAVED = '���\�O�sĲ�o��: '; //KEN ADDED

//components/com_massmail/admin.massmail.html.php
var $A_COMP_MASS_SUBJECT = '�п�J�D�D';
var $A_COMP_MASS_SELECT_GROUP = '�п�ܸs��';
var $A_COMP_MASS_MESSAGE = '�п�J����';
var $A_COMP_MASS_MAIL = '�s�o�l��';
var $A_COMP_MASS_GROUP = '�s��';
var $A_COMP_MASS_DETAILS = '����'; //KEN ADDED
var $A_COMP_MASS_CHILD = '�o�l�󵹤l�s��';
var $A_COMP_MASS_HTML = '�ϥ� HTML �榡�o�e'; //KEN ADDED
var $A_COMP_MASS_SUB = '�D�D';
var $A_COMP_MASS_MESS = '����';

//components/com_massmail/toolbar.massmail.html.php
var $A_COMP_MASS_SEND = '�o�e';

//components/com_massmail/admin.massmail.php
var $A_COMP_MASS_ALL = '- �Ҧ��Τ�s�� -';
var $A_COMP_MASS_FILL = '�Х��T��g���';
var $A_COMP_MASS_SENT = '����HE-mail';
var $A_COMP_MASS_USERS = '�Τ�';

//components/com_media/admin.media.html.php
var $A_COMP_MEDIA_MG = '�C��޲z';
var $A_COMP_MEDIA_DIR = '�ؿ�';
var $A_COMP_MEDIA_UP = '�V�W';
var $A_COMP_MEDIA_UPLOAD = '�W��';
var $A_COMP_MEDIA_UPLOAD_MAX = '�̤j';
var $A_COMP_MEDIA_CODE = '�N�X';
var $A_COMP_MEDIA_CDIR = '�Ыإؿ�';
var $A_COMP_MEDIA_PROBLEM = '�t�m���D';
var $A_COMP_MEDIA_EXIST = '���s�b�C';
var $A_COMP_MEDIA_DEL = '�R��';
var $A_COMP_MEDIA_INSERT = '�b����J�奻';
var $A_COMP_MEDIA_DEL_FILE = "�R����� \"+file+\"?";
var $A_COMP_MEDIA_DEL_ALL = "�� \"+numFiles+\" �Ӥ��/�ؿ��b \"+folder+\"�C�Х��R�� \"+folder+\"�����Ҧ����/�ؿ�  �C";
var $A_COMP_MEDIA_DEL_FOLD = "�R���ؿ� \"+folder+\"?";
var $A_COMP_MEDIA_NO_IMG = '�S���Ϥ��C';

//components/com_media/admin.media.php
var $A_COMP_MEDIA_NO_HACK = '�Ф��n�ק�';
var $A_COMP_MEDIA_DIR_SAFEMODE = '�ؿ��T��ЫءA�t�����Ҭ�SAFE MODE�Ҧ��A�|�ɭP���D�C';
var $A_COMP_MEDIA_ALPHA = '�ؿ��W�٥u��]�t�r���μƦr�A���঳�Ů�';
var $A_COMP_MEDIA_FAILED = '�W�ǥ��ѡC���w�g�s�b';
var $A_COMP_MEDIA_ONLY = '�u�������� gif, png, jpg, bmp, pdf, swf, doc, xls �Ϊ� ppt �����~��W��';
var $A_COMP_MEDIA_UP_FAILED = '�W�ǥ���';
var $A_COMP_MEDIA_UP_COMP = '�W�ǧ���';
var $A_COMP_MEDIA_NOT_EMPTY = '<font color="red">�L�k�R��: �D��!</font>';//KEN ADDED
//components/com_media/toolbar.media.html.php
var $A_COMP_MEDIA_CREATE = '�Ы�';

//components/com_menumanager/admin.menumanager.html.php
var $A_COMP_MENU_NAME = '���W��';
var $A_COMP_MENU_TYPE = '�������';
var $A_COMP_MENU_TITLE = '�Ҷ����D';
var $A_COMP_MENU_ITEMS = '��涵';//KEN ADDED
var $A_COMP_MENU_PUB = '�o�G��';//KEN ADDED
var $A_COMP_MENU_UNPUB = '���o�G��';//KEN ADDED
var $A_COMP_MENU_MODULES = '�Ҷ���';//KEN ADDED
var $A_COMP_MENU_EDIT_NAME = '�s����W��';//KEN ADDED
var $A_COMP_MENU_EDIT_ITEM = '�s���涵';//KEN ADDED
var $A_COMP_MENU_ID = '�Ҷ��N�X';
var $A_COMP_MENU_TIPS = '�o�OMambo�ϥΪ�ų�w�W�١A�Φb���X���ѧO����� - �������ߤ@�ȡC��ĳ�b���W�٤����n������ťզr��';//KEN ADDED
var $A_COMP_MENU_TIPS2 = 'mod_mainmenu �Ҷ�����ܼ��D�A����';//KEN ADDED
var $A_COMP_MENU_TIPS3 = '* �@�ӷs�� mod_mainmenu �Ҷ��A�N�b�A�O�s�����ɦ۰ʳЫءA�ϥΧA��J�����D�����D�C *<br/><br/>�s�ؼҶ����Ѽƥi�q�L "�Ҷ��޲z [����]": �Ҷ� -> �����Ҷ� �ӽs��';//KEN ADDED
var $A_COMP_MENU_ASSIGN = '�S���Ҷ����t����';
var $A_COMP_MENU_ENTER = '�п�J���W��';
var $A_COMP_MENU_ENTER_TYPE = '�п�J�������';
var $A_COMP_MENU_ENTER_TITLE = '�п�J��檺�Ҷ��W��';
var $A_COMP_MENU_DETAILS = '������';
var $A_COMP_MENU_MAINMENU = '�D���Ҷ��A�O�s�����ɡA�ۦP���W�ٱN�۰ʳЫ�/��s�C';
var $A_COMP_MENU_DEL = '�R�����';
var $A_COMP_MENU_MODULE_DEL = '�R�������/�Ҷ�';
var $A_COMP_MENU_ITEMS_DEL = '�R������涵';
var $A_COMP_MENU_WILL = '* �N';
var $A_COMP_MENU_WILL2 = '�����A<br />�Ψ�Ҧ���涵�M���p���Ҷ� *';
var $A_COMP_MENU_YOU_SURE = '�T�{�R�������H\n�N�R�����B��涵�M�Ҷ��C';
var $A_COMP_MENU_NAME_MENU = '�п�J�ƻs��檺�W��';
var $A_COMP_MENU_NAME_MOD = '�п�J�s�Ҷ����W��';
var $A_COMP_MENU_COPY = '�ƻs���';
var $A_COMP_MENU_NEW = '�s���W��';
var $A_COMP_MENU_NEW_MOD = '�s�Ҷ��W��';//KEN ADDED
var $A_COMP_MENU_COPIED = '�ƻs�����';
var $A_COMP_MENU_ITEMS_COPIED = '�ƻs����涵';
var $A_COMP_MENU_MOD_MENU = '�D���Ҷ��A�O�s�����ɡA�ۦP���W�ٱN�۰ʳЫ�/���C';

//components/com_menumanager/admin.menumanager.php
var $A_COMP_MENU_CREATED = '�s���ЫؤF';
var $A_COMP_MENU_UPDATED = '��涵�M�Ҷ��w��s';
var $A_COMP_MENU_DETECTED = '���R���F';
var $A_COMP_MENU_COPY_OF = '��檺�ƻs';
var $A_COMP_MENU_CONSIST = '�ЫؤF�A�]�A';
var $A_COMP_MENU_RENAME_WARNING = '�A���୫�R�W mainmenu ���A�]���o�N�}�aMambo�����T�ާ@';
var $A_COMP_MENU_EXISTS_WARNING = '�㦳���W�٪����w�g�s�b - �A������J�@�Ӱߤ@�����W��';

//components/com_menumanager/toolbar.menumanager.html.php
var $A_COMP_MENU_BAR_DEL = '�R��';

//components/com_modules/admin.modules.html.php
var $A_COMP_MOD_MANAGER = '�Ҷ��޲z';
var $A_COMP_MOD_NAME = '�Ҷ��W��';
var $A_COMP_MOD_POSITION = '��m';
var $A_COMP_MOD_PAGES = '�Ҧb����';
var $A_COMP_MOD_VARIES = '�ӧO';
var $A_COMP_MOD_ALL = '����';
var $A_COMP_MOD_USER = '�Τ�';
var $A_COMP_MOD_MUST_TITLE = '�Ҷ����������D';
var $A_COMP_MOD_MODULE = '�Ҷ�';
var $A_COMP_MOD_DETAILS = '�Ҷ�����';
var $A_COMP_MOD_SHOW_TITLE = '��ܼ��D';
var $A_COMP_MOD_ORDER = '�Ҷ��Ƨ�';
var $A_COMP_MOD_CONTENT = '���e';
var $A_COMP_MOD_PAGES_ITEMS = '��� / ��涵';
var $A_COMP_MOD_CUSTOM_OUTPUT = '�w���X';
var $A_COMP_MOD_MOD_POSITION = '�Ҷ���m';
var $A_COMP_MOD_ITEM_LINK = '��涵�챵';
var $A_COMP_MOD_TAB_LBL = '����';

//components/com_modules/admin.modules.php
var $A_COMP_MOD_MODULES = '�Ҷ�';
var $A_COMP_MOD_MOD_COPIED = '�Ҷ��w�ƻs';//KEN ADDED
var $A_COMP_MOD_SAVED_CHANGES = '���\�O�s�Ҷ������: ';//KEN ADDED
var $A_COMP_MOD_SAVED_MOD = '���\�O�s�Ҷ�: ';//KEN ADDED
var $A_COMP_MOD_CANNOT = '����R���A�u������A�]���OMambo�֤߼Ҷ��C';
var $A_COMP_MOD_SELECT_TO = '��ܼҶ���';

//components/com_modules/toolbar.modules.html.php
var $A_COMP_MOD_PREVIEW = '�w��';
var $A_COMP_MOD_PREVIEW_TIP = '�u��w���۩w�q�Ҷ��C';

//components/com_newsfeeds/admin.newsfeeds.html.php
var $A_COMP_FEED_TITLE = '�s�D�༽�޲z';
var $A_COMP_FEED_NEWS = '�s�D�༽';
var $A_COMP_FEED_ARTICLES = '�峹';
var $A_COMP_FEED_CACHE = '�w�s�ɶ�(��)';
var $A_COMP_FEED_EDIT_FEED = '�s��s�D�༽';//KEN ADDED
var $A_COMP_FEED_FILL_NAME = '�п�J�s�D�༽�W�١C';
var $A_COMP_FEED_SEL_CATEG = '�п�ܤ����C';
var $A_COMP_FEED_FILL_LINK = '�п�J�s�D�༽�챵�C';
var $A_COMP_FEED_FILL_NB = '�п�J�峹��ܼƶq�C';
var $A_COMP_FEED_FILL_REFRESH = '�п�J�w�s��s�ɶ��C';
var $A_COMP_FEED_LINK = '�챵';
var $A_COMP_FEED_NB_ARTICLE = '�峹��';
var $A_COMP_FEED_IN_SEC = '�w�s�ɶ�(��)';

//components/com_poll/admin.poll.html.php
var $A_COMP_POLL_MANAGER = '�b�u�լd�޲z';
var $A_COMP_POLL_TITLE = '�b�u�լd���D';
var $A_COMP_POLL_OPTIONS = '�ﶵ';
var $A_COMP_POLL_MUST_TITLE = '�b�u�լd���������D';
var $A_COMP_POLL_NON_ZERO = '�⦸�벼�����������ɶ����j';
var $A_COMP_POLL_POLL = '�b�u�լd';
var $A_COMP_POLL_SHOW = '�b��涵���';
var $A_COMP_POLL_LAG = '���j';
var $A_COMP_POLL_EDIT = '�s��b�u�լd';//KEN ADDED
var $A_COMP_POLL_BETWEEN = '(�⦸�벼�������ɶ����j�G��)';

//components/com_poll/admin.poll.php
var $A_COMP_POLL_THE = '�b�u�լd';
var $A_COMP_POLL_BEING = '���b�Q��L�޲z���s��C';

//components/com_poll/poll.class.php
var $A_COMP_POLL_TRY_AGAIN = '�Ҷ��W�٤w�s�b�A�Э��աC';

//components/com_sections/admin.sections.html.php
var $A_COMP_SECT_MANAGER = '�椸�޲z';
var $A_COMP_SECT_NAME = '�椸�W��';
var $A_COMP_SECT_ID = '�椸�N�X';
var $A_COMP_SECT_NB_CATEG = '����';
var $A_COMP_SECT_NEW = '�s�椸';
var $A_COMP_SECT_SEL_MENU = '�п�ܵ��';
var $A_COMP_SECT_MUST_NAME = '�椸�������W��';
var $A_COMP_SECT_MUST_TITLE = '�椸���������D';
var $A_COMP_SECT_DETAILS = '�椸����';
var $A_COMP_SECT_SCOPE = '�d��';
var $A_COMP_SECT_SHORT_NAME = '�b�����ܪ�²��';
var $A_COMP_SECT_LONG_NAME = '�b���D��ܪ�����';
var $A_COMP_SECT_COPY = '�ƻs�椸';
var $A_COMP_SECT_COPY_TO = '�ƻs��椸';
var $A_COMP_SECT_NEW_NAME = '�s�椸�W��';
var $A_COMP_SECT_WILL_COPY = '�N�ƻs�ҦC����<br />�H�Τ��������Ҧ����ء]�]�N�O�ҦC���^<br />��s�椸�C';
var $A_COMP_SECT_MENU_LINK = '�O�s�����챵�N�i��';//KEN ADDED

//components/com_sections/admin.sections.php
var $A_COMP_SECT_THE = '�椸';
var $A_COMP_SECT_LIST = '�椸�C��';
var $A_COMP_SECT_BLOG = '�椸Blog����';
var $A_COMP_SECT_DELETE = '��ܳ椸�ӧR��';
var $A_COMP_SECT_SEC = '�椸';
var $A_COMP_SECT_CANNOT = '����R���A�]�䤤�٦�����';
var $A_COMP_SECT_SUCCESS_DEL = '���\�R��';
var $A_COMP_SECT_TO = '��ܳ椸��';
var $A_COMP_SECT_CANNOT_PUB = '����o�G�ų椸';
var $A_COMP_SECT_AND_ALL = '�Ψ�Ҧ������M���ؤw�ƻs';
var $A_COMP_SECT_IN_MENU = '�b���';
var $A_COMP_SECT_CHANGES_SAVED = '�椸�����w�O�s';//KEN ADDED
var $A_COMP_SECT_SECTION_SAVED = '�椸�w�O�s';//KEN ADDED

//components/com_statistics/admin.statistics.html.php
var $A_COMP_STAT_OS = '�s�����B�ާ@�t�ΡB��έp';
var $A_COMP_STAT_BR_PAGE = '�s�����έp';
var $A_COMP_STAT_BROWSER = '�s����';
var $A_COMP_STAT_OS_PAGE = '�ާ@�t�βέp';
var $A_COMP_STAT_OP_SYST = '�ާ@�t��';
var $A_COMP_STAT_URL_PAGE = '��έp';
var $A_COMP_STAT_URL = '��';
var $A_COMP_STAT_IMPR = '�����s���έp';
var $A_COMP_STAT_PG_IMPR = '�����s��';
var $A_COMP_STAT_SCH_ENG = '�j���奻�έp';
var $A_COMP_STAT_LOG_IS = '�O��';
var $A_COMP_STAT_ENABLED = '�ҥ�';
var $A_COMP_STAT_DISABLED = '�T��';
var $A_COMP_STAT_SCH_TEXT = '�j���奻';
var $A_COMP_STAT_T_REQ = '�j������';
var $A_COMP_STAT_R_RETURN = '��^���G';

//components/com_syndicate/admin.syndicate.html.php
var $A_COMP_SYND_SET = 'RSS �E�X�]�m';

//components/com_syndicate/admin.syndicate.php
var $A_COMP_SYND_SAVED = '�]�m���\�O�s';

//components/com_templates/admin.templates.html.php
var $A_COMP_TEMP_NO_PREVIEW = '�S���i�Ϊ��w��';
var $A_COMP_TEMP_INSTALL = '�w��';
var $A_COMP_TEMP_TP = '�Ҫ�';
var $A_COMP_TEMP_PREVIEW = '�w���Ҫ�';
var $A_COMP_TEMP_ASSIGN = '���t';
var $A_COMP_TEMP_AUTHOR_URL = '�@�̺��}';
var $A_COMP_TEMP_EDITOR = '�Ҫ��s���';
var $A_COMP_TEMP_PATH = '���|�Gtemplates';
var $A_COMP_TEMP_WRT = ' - �i�g';
var $A_COMP_TEMP_UNWRT = ' - ���i�g';
var $A_COMP_TEMP_ST_EDITOR = '�Ҫ� CSS �s�边';
var $A_COMP_TEMP_NAME = '���|';
var $A_COMP_TEMP_ASSIGN_TP = '���t�Ҫ�';
var $A_COMP_TEMP_TO_MENU = '���涵';
var $A_COMP_TEMP_PAGES = '����';
var $A_COMP_TEMP_ = '��m';

//components/com_templates/admin.templates.php
var $A_COMP_TEMP_CANNOT = '�L�k�R�����b�ϥΪ��Ҫ��C';
var $A_COMP_TEMP_NOT_OPEN = '�ާ@���ѡG�L�k���}';
var $A_COMP_TEMP_FLD_SPEC = '�ާ@���ѡG�S�����w���Ҫ��C';
var $A_COMP_TEMP_FLD_EMPTY = '�ާ@���ѡG�Ť��e';
var $A_COMP_TEMP_FLD_WRT = '�ާ@���ѡG�L�k���}���Ӽg�J�C';
var $A_COMP_TEMP_FLD_NOT = '�ާ@���ѡG��󤣥i�g�C';
var $A_COMP_TEMP_SAVED = '��m�O�s�F';

//components/com_typedcontent/admin.typedcontent.html.php
var $A_COMP_TYPED_STATIC = '�R�A���e�޲z';
var $A_COMP_TYPED_LINKS = '�챵';
var $A_COMP_TYPED_ARE_YOU = '�T�{�Ыص���챵���R�A���e���ءH \n���󥼫O�s�����N�ᥢ�C';
var $A_COMP_TYPED_CONTENT = '�R�A���e';
var $A_COMP_TYPED_TEXT = '����G(����)';
var $A_COMP_TYPED_EXPIRES = '�L��';
var $A_COMP_TYPED_WILL = '�N�b�襤�����Ы� \'��涵 - �R�A���e\' ���챵';
var $A_COMP_TYPED_ITEM = '�R�A���e����';

//components/com_typedcontent/admin.typedcontent.php
var $A_COMP_TYPED_SAVED = '�R�A���e���ؤw�O�s';
var $A_COMP_TYPED_CHG_SAVED = '�R�A���e���ت��ק�w�O�s';

//components/com_users/admin.users.html.php
var $A_COMP_USERS_ID = '�Τ�N�X';
var $A_COMP_USERS_LOG_IN = '�n��';
var $A_COMP_USERS_LAST = '�̪�X��';
var $A_COMP_USERS_BLOCKED = '����';
var $A_COMP_USERS_YOU_MUST = '������J�Τ�W�C';
var $A_COMP_USERS_YOU_LOGIN = '�Τ�W�]�t�L�Ħr�šA�Ϊ��פ����C';
var $A_COMP_USERS_MUST_EMAIL = '������JEmail�a�}�C';
var $A_COMP_USERS_ASSIGN = '�������t�Τ��@�Ӹs�աC';
var $A_COMP_USERS_NO_MATCH = '�K�X���ǰt';
var $A_COMP_USERS_NO_FRONTEND = '�п�ܥt�@�ӲաA�]��`Public Frontend`���O�@�ӥi��ܪ��ﶵ';
var $A_COMP_USERS_NO_BACKEND = '�п�ܥt�@�ӲաA�]��`Public Backend`���O�@�ӥi��ܪ��ﶵ';
var $A_COMP_USERS_DETAILS = '�Τ����';
var $A_COMP_USERS_EMAIL = 'Email';
var $A_COMP_USERS_PASS = '�K�X';
var $A_COMP_USERS_VERIFY = '�K�X�T�{';
var $A_COMP_USERS_BLOCK = '����Τ�';
var $A_COMP_USERS_SUBMI = '�����q���l��';
var $A_COMP_USERS_REG_DATE = '���U���';
var $A_COMP_USERS_VISIT_DATE = '�̪�X�ݤ��';
var $A_COMP_USERS_CONTACT = '�pô�H�H��';
var $A_COMP_USERS_NO_DETAIL = '�S�����Τ����p���pô�H�H���G<br />�Ш� \'�ե� -> �pô�H -> �pô�H�޲z\' �d�\�ԲӫH���C';
var $A_COMP_USERS_CHANGE_CONTACT = '����pô�H�H��';
var $A_COMP_USERS_CONTACT_INFO = '�ե� -> �pô�H -> �pô�H�޲z';

//components/com_users/admin.users.php
var $A_COMP_USERS_SUPER_ADMIN = 'Super Administrator';
var $A_COMP_USERS_CANNOT = '����R���W�ź޲z��';
var $A_COMP_USERS_NOT_DEL_SELF = '�A����R���A�ۤv�I';
var $A_COMP_USERS_NOT_DEL_ADMIN = '�A����R����L `Administrator`�A�u�� `Super Administrators` �~���o���v��';

//components/com_users/toolbar.users.html.php
var $A_COMP_USERS_LOGOUT = '�j��h�X';

//components/com_weblinks/admin.weblinks.html.php
var $A_COMP_WEBL_MANAGER = '�����챵�޲z';
var $A_COMP_WEBL_APPROVED = '���';
var $A_COMP_WEBL_MUST_TITLE = '�����챵���إ�����J���D';
var $A_COMP_WEBL_MUST_CATEG = '�п�ܤ���.';
var $A_COMP_WEBL_MUST_URL = '������J���}';
var $A_COMP_WEBL_WL = '�����챵';

//components/com_installer/admin.installer.php
var $A_INSTALL_NOT_FOUND = "���󪺦w�ˤ�󥼧��";
var $A_INSTALL_NOT_AVAIL = "���󪺦w�ˤ�󤣥i��";
var $A_INSTALL_ENABLE_MSG = "���W�ǥ\�ॼ�ҥΡA�w�˵L�k�~��C�ШϥΡu�q�ؿ��w�ˡv����k�Ӧw�ˡC";
var $A_INSTALL_ERROR_MSG_TITLE = '�w�� - ���~';
var $A_INSTALL_ZLIB_MSG = "zlib���w�ˡA�A�w�˵L�k�~��C";
var $A_INSTALL_NOFILE_MSG = '�|����ܤ��';
var $A_INSTALL_NEWMODULE_ERROR_MSG_TITLE = '�W�Ƿs�Ҷ� - ���~';
var $A_INSTALL_UPLOAD_PRE = '�W�� ';
var $A_INSTALL_UPLOAD_POST = ' - �W�ǥ���';
var $A_INSTALL_UPLOAD_POST2 = ' -  �W�ǿ��~';
var $A_INSTALL_SUCCESS = '���\ ';
var $A_INSTALL_ERROR = '���~';
var $A_INSTALL_FAILED = '����';
var $A_INSTALL_SELECT_DIR = '�п�ܥؿ�';
var $A_INSTALL_UPLOAD_NEW = '�W�Ƿs';
var $A_INSTALL_FAIL_PERMISSION = '�L�k���ܤW�Ǥ���v���C';
var $A_INSTALL_FAIL_MOVE = '�L�k���ʤW�Ǥ���<code>/media</code>�ؿ��C';
var $A_INSTALL_FAIL_WRITE = '�W�ǥ��� - <code>/media</code> �ؿ����i�g�C';
var $A_INSTALL_FAIL_EXIST = '�W�ǥ��� - <code>/media</code> �ؿ����s�b�C';

//components/com_installer/admin.installer.html.php
var $A_INSTALL_WRITABLE = '�i�g';
var $A_INSTALL_UNWRITABLE = '���i�g';
var $A_INSTALL_CONTINUE = '�~�� ...';
var $A_INSTALL_UPLOAD_PACK_FILE = '�W�Ǧw�˥]';
var $A_INSTALL_PACK_FILE = '�w�˥]�G';
var $A_INSTALL_UPL_INSTALL = "�W�Ǥ�� &amp; �w��";
var $A_INSTALL_FROM_DIR = '�q�ؿ��w��';
var $A_INSTALL_DIR = '�w�˥ؿ��G';
var $A_INSTALL_DO_INSTALL = '�w��';

//components/com_installer/component/component.html.php
var $A_INSTALL_COMP_INSTALLED = '�w�w�˲ե�';
var $A_INSTALL_COMP_CURRENT = '��e�w�w��';
var $A_INSTALL_COMP_MENU = '�ե����챵';
var $A_INSTALL_COMP_AUTHOR = '�@��';
var $A_INSTALL_COMP_VERSION = '����';
var $A_INSTALL_COMP_DATE = '���';
var $A_INSTALL_COMP_AUTH_MAIL = '�@��Email';
var $A_INSTALL_COMP_AUTH_URL = '�@�̺��}';
var $A_INSTALL_COMP_NONE = '�|���w�˲ĤT��ե�';

//components/com_installer/component/component.php
var $A_INSTALL_COMP_UPL_NEW = '�W�Ƿs�ե�';

//components/com_installer/language/language.php
var $A_INSTALL_LANG = '�W�Ƿs�y��';
var $A_INSTALL_BACK_LANG_MGR = '��^�y���޲z';

//components/com_installer/language/language.class.php
var $A_INSTALL_LANG_NOREMOVE = '�y���N�X���šA�L�k�R�����C';
var $A_INSTALL_LANG_UN_ERR = '���� - ���~';
var $A_INSTALL_LANG_DELETING = '�R��';

//components/com_installer/mambot/mambot.html.php
var $A_INSTALL_MAMB_MAMBOTS = 'Ĳ�o��';
var $A_INSTALL_MAMB_CORE = '�u��ܨ��ǥi�H������Ĳ�o�� - �@�Ǯ֤�Ĳ�o������R���C';
var $A_INSTALL_MAMB_MAMBOT = 'Ĳ�o��';
var $A_INSTALL_MAMB_TYPE = '����';
var $A_INSTALL_MAMB_AUTHOR = '�@��';
var $A_INSTALL_MAMB_VERSION = '����';
var $A_INSTALL_MAMB_DATE = '���';
var $A_INSTALL_MAMB_AUTH_MAIL = '�@��Email';
var $A_INSTALL_MAMB_AUTH_URL = '�@�̺��}';
var $A_INSTALL_MOD_NO_MAMBOTS = '�|�����D�֤ߡB�ĤT��Ĳ�o���w�ˡC';

//components/com_installer/mambot/mambot.php
var $A_INSTALL_MAMB_INSTALL_MAMBOT = '�w��Ĳ�o��';

//components/com_installer/module/module.html.php
var $A_INSTALL_MOD_MODS = '�Ҷ�';
var $A_INSTALL_MOD_FILTER = '�z��G';
var $A_INSTALL_MOD_CORE = '�u��ܨ��ǥi�H�������Ҷ� - �@�Ǯ֤߼Ҷ�����R���C';
var $A_INSTALL_MOD_MOD = '�Ҷ����';
var $A_INSTALL_MOD_CLIENT = '�Ȥ�';
var $A_INSTALL_MOD_AUTHOR = '�@��';
var $A_INSTALL_MOD_VERSION = '����';
var $A_INSTALL_MOD_DATE = '���';
var $A_INSTALL_MOD_AUTH_MAIL = '�@��Email';
var $A_INSTALL_MOD_AUTH_URL = '�@�̺��}';
var $A_INSTALL_MOD_NO_CUSTOM = '�|�����ĤT��Ҷ��w�ˡC';

//components/com_installer/module/module.php
var $A_INSTALL_MOD_INSTALL_MOD = '�w�˼Ҷ�';
var $A_INSTALL_MOD_ADMIN_MOD = '�޲z�Ҷ�';

//components/com_install/template/template.php
var $A_INSTALL_TEMPL_INSTALL = '�w�˷s�Ҫ�';
var $A_INSTALL_TEMPL_SITE_TEMPL = '�����Ҫ�';
var $A_INSTALL_TEMPL_ADMIN_TEMPL = '��x�Ҫ�';
var $A_INSTALL_TEMPL_BACKTTO_TEMPL = '��^�Ҫ��޲z';

//components/com_menus/admin.menus.html.php
var $A_COMP_MENUS_MAX_LVLS = '�̤j�ż�';
var $A_COMP_MENUS_MENU_ITEM = '��涵';
var $A_COMP_MENUS_MENU_ORDER = '����';//KEN ADDED
var $A_COMP_MENUS_MENU_SAVE_ORDER = '�O�s����';//KEN ADDED
var $A_COMP_MENUS_MENU_ITEMID = '����ID';//KEN ADDED
var $A_COMP_MENUS_MENU_CID = '�ե�ID';//KEN ADDED
var $A_COMP_MENUS_MENU_CONTENT = '���e';//KEN ADDED
var $A_COMP_MENUS_MENU_MISC = '����';//KEN ADDED
var $A_COMP_MENUS_MENU_NOTE = '* ���G���ǵ�������X�{�b�h�Ӳդ��A�����̤��O�ۦP����������C';//KEN ADDED
var $A_COMP_MENUS_MENU_COM = '�ե�';//KEN ADDED
var $A_COMP_MENUS_MENU_LINKS = '�챵';//KEN ADDED
var $A_COMP_MENUS_MENU_ITEM_TYPE = '��涵����';//KEN ADDED
var $A_COMP_MENUS_MENU_HELP = '���U';//KEN ADDED
var $A_COMP_MENUS_MENU_BLOGVIEW = '����O "Blog" ����';//KEN ADDED
var $A_COMP_MENUS_MENU_TABLEVIEW = '����O "���" ����';//KEN ADDED
var $A_COMP_MENUS_MENU_LISTVIEW = '����O "�C��" ����';//KEN ADDED
var $A_COMP_MENUS_ADD_ITEM = '�s�W��涵';
var $A_COMP_MENUS_SELECT_ADD = '��ܲե�ӷs�W';
var $A_COMP_MENUS_MOVE_ITEMS = '���ʵ�涵';
var $A_COMP_MENUS_MOVE_MENU = '���ʨ���';
var $A_COMP_MENUS_BEING_MOVED = '���ʪ���涵';
var $A_COMP_MENUS_COPY_ITEMS = '�ƻs��涵';
var $A_COMP_MENUS_NEXT = '�U�@�B';
var $A_COMP_MENUS_COPY_MENU = '�ƻs����';
var $A_COMP_MENUS_BEING_COPIED = '�ƻs����涵';
var $A_COMP_MENUS_SELECT_TO = '�п�ܵ�涵��';
var $A_COMP_MENUS_SEFPATH = 'SEF���|';
var $A_COMP_MENUS_SEFPATH_TIP = '�]�m�j�������ͦn�챵�����|';

//components/com_menus/admin.menus.php
var $A_COMP_MENUS_ITEM_SAVED = '��涵�w�O�s';//KEN ADDED
var $A_COMP_MENUS_MOVED_TO = ' ��涵���ʨ�';
var $A_COMP_MENUS_COPIED_TO = ' ��涵�ƻs��';
var $A_COMP_MENUS_WRAPPER = '�O�J����';
var $A_COMP_MENUS_SEPERATOR = '���j��/�����';
var $A_COMP_MENUS_LINK = '�챵 - ';
var $A_COMP_MENUS_STATIC = '�R�A���e';
var $A_COMP_MENUS_URL = '���}';
var $A_COMP_MENUS_CONTENT_ITEM = '���e����';
var $A_COMP_MENUS_COMP_ITEM = '�ե����';
var $A_COMP_MENUS_CONT_ITEM = '�pô�H����';
var $A_COMP_MENUS_NEWSFEED = '�s�D�༽';
var $A_COMP_MENUS_COMP = '�ե�';
var $A_COMP_MENUS_LIST = '�C��';
var $A_COMP_MENUS_TABLE = '���';
var $A_COMP_MENUS_BLOG = 'Blog����';
var $A_COMP_MENUS_CONT_SEC = '���e�椸';
var $A_COMP_MENUS_CONT_CAT = '���e����';
var $A_COMP_MENUS_CONTACT_CAT = '�pô�H����';
var $A_COMP_MENUS_WEBLINK_CAT = '�����챵����';
var $A_COMP_MENUS_NEWS_CAT = '�s�D�༽����';
var $A_COMP_MENUS_NEW_ORDER_SAVED = '�s�����Ǥw�O�s';//KEN ADDED
var $A_COMP_MENUS_EDIT_NEWSFEED_TIP = '�s�覹�s�D�༽';
var $A_COMP_MENUS_EDIT_CONTACT_TIP = '�s�覹�pô�H';
var $A_COMP_MENUS_EDIT_CONTENT_TIP = '�s�覹���e';
var $A_COMP_MENUS_EDIT_STATIC_TIP = '�s�覹�R�A���e';

//components/com_menus/component_item_link/component_item_link.menu.html.php
var $A_COMP_MENUS_CIL_LINK_NAME = '�챵������J�W��';
var $A_COMP_MENUS_CIL_SELECT_COMP = '������ܲե���챵';
var $A_COMP_MENUS_CIL_LINK_COMP = '�ե�';
var $A_COMP_MENUS_CIL_ON_CLICK = '�I�����}�覡';
var $A_COMP_MENUS_CIL_PARENT = '����涵';
var $A_DETAILS = '����';

//components/com_menus/components/components.menu.html.php
var $A_COMP_MENUS_CMP_ITEM_NAME = '������J�W��';
var $A_COMP_MENUS_CMP_SELECT_CMP = '�п�ܲե�';
var $A_COMP_MENUS_PARAMETERS_AVAILABLE = '�@���O�s���s����涵�A�U�C�ѼƴN�i�ΤF';
var $A_COMP_MENUS_CMP_ITEM_COMP = '��涵 :: �ե�';

//components/com_menus/contact_category_table/contact_category_table.menu.html.php
var $A_COMP_MENUS_CMP_CCT_CATEG = '������ܤ���';
var $A_COMP_MENUS_CMP_CCT_TITLE = '��涵�������W��';
var $A_COMP_MENUS_CMP_CCT_BLANK = '�p�G�d�šA�N�۰ʨϥΤ����W�١C';
var $A_COMP_MENUS_CMP_CCT_THETITLE = '���D�G';
var $A_COMP_MENUS_CMP_CCT_THECAT = '�����G';

//components/com_menus/contact_item_link/contact_item_link.menu.html.php
var $A_COMP_MENUS_CMP_CIL_LINK_NAME = '�챵�������W��';
var $A_COMP_MENUS_CMP_CIL_SEL_CONT = '������ܤ@���pô�H���챵�C';
var $A_COMP_MENUS_CMP_CIL_CONTACT = '�챵�pô�H';
var $A_COMP_MENUS_CMP_CIL_ONCLICK = '�I�����}�覡';
var $A_COMP_MENUS_CMP_CIL_HDR = '��涵 :: �챵 - �pô�H';

//components\com_menus\content_archive_section\content_archive_section.menu.html.php
var $A_COMP_MENUS_CMP_CAS_BLANK = '�p�G�d�šA�N�۰ʨϥγ椸�W�١C';

//components\com_menus\content_blog_category\content_blog_category.menu.html.php
var $A_COMP_MENUS_CMP_CBC_CATEG = '�i�H��ܦh�Ӥ���';

//components\com_menus\content_blog_section\content_blog_section.menu.html.php
var $A_COMP_MENUS_CMP_CBS_SECTION = '�i�H��ܦh�ӳ椸';

//components\com_menus\content_item_link\content_item_link.menu.html.php
var $A_COMP_MENUS_CMP_CIL_SEL_LINK = '������ܤ@�Ӥ��e���ب��챵�C';

//components/com_menus/wrapper/wrapper.menu.html.php
var $A_COMP_MENUS_WRAPPER_LINK = '�O�J�������}';

//components/com_menus/separator/separator.menu.html.php
var $A_COMP_MENUS_SEPARATOR_PATTERN = '�Ҧ�/�W��';

//components/com_menus/content_typed/content_typed.menu.html.php
var $A_COMP_MENUS_TYPED_CONTENT_TO_LINK = '�챵�R�A���e';

//components/com_menus/content_item_link/content_item_link.menu.html.php
var $A_COMP_MENUS_CONTENT_TO_LINK = '�챵���e';

//components/com_menus/newsfeed_link/newsfeed_link.menu.html.php
var $A_COMP_MENUS_NEWSFEED_TO_LINK = '�챵�s�D�༽';
var $A_COMP_MENUS_NEWSFEED_SELECT_LINK = '������ܤ@�ӷs�D�༽���챵�C';

//components\com_menus\url\url.menu.html.php
var $A_COMP_MENUS_URL_MUST = '������J���}';
var $A_COMP_MENUS_URL_LINK = '�챵���}';


	function adminLanguage()
	{
		global $TR_STRS;
		//Menu Caption Translation for initial mambo menutype
		$TR_STRS[strtolower('mainmenu')] = '�D���';
		$TR_STRS[strtolower('othermenu')] = '�䥦���';
		$TR_STRS[strtolower('topmenu')] = '�������';
		$TR_STRS[strtolower('usermenu')] = '�Τ���';

		//Components menu caption
		//Banners
		$TR_STRS[strtolower('Banners')] = '��T�s�i';
		$TR_STRS[strtolower('Manage Banners')] = '�޲z��T�s�i';
		$TR_STRS[strtolower('Manage Clients')] = '�޲z�Ȥ�';

		//Web Links
		$TR_STRS[strtolower('Web Links')] = '�����챵';
		$TR_STRS[strtolower('Weblink Items')] = '�����챵����';
		$TR_STRS[strtolower('Weblink Categories')] = '�����챵����';

		//Contacts
		$TR_STRS[strtolower('Contacts')] = '�pô�H';
		$TR_STRS[strtolower('Manage Contacts')] = '�޲z�pô�H';
		$TR_STRS[strtolower('Contact Categories')] = '�pô�H����';

		//Polls
		$TR_STRS[strtolower('Polls')] = '�b�u�լd';

		//News Feeds
		$TR_STRS[strtolower('News Feeds')] = '�s�D�༽';
		$TR_STRS[strtolower('Manage News Feeds')] = '�޲z�s�D�༽';
		$TR_STRS[strtolower('Manage Categories')] = '�޲z����';

		//Syndicate
		$TR_STRS[strtolower('Syndicate')] = 'RSS �E�X';

		//Mass Mail
		$TR_STRS[strtolower('Mass Mail')] = '�s�o�l��';

		//modules XML file
		$TR_STRS[strtolower('Count')] = '�ƶq';
		$TR_STRS[strtolower('The number of items to display (default is 5)')] = '�̤j�C���(�q�{�� 5)';
		$TR_STRS[strtolower('The number of items to display (default is 10)')] = '�̤j�C���(�q�{�� 10)';
		$TR_STRS[strtolower('Enable Cache')] = '�ҥνw�s';
		$TR_STRS[strtolower('Select whether to cache the content of this module')] = '�O�_�����Ҷ������e�ϥνw�s';
		$TR_STRS[strtolower('No')] = '�_';
		$TR_STRS[strtolower('Yes')] = '�O';
		$TR_STRS[strtolower('Module Class Suffix')] = '�Ҷ�css���';
		$TR_STRS[strtolower('A suffix to be applied to the css class of the module (table.moduletable), this allows individual module styling')] = '���Ψ�Ҷ���css�������(table.moduletable)�A�o�ˤ��\�Ҷ��ϥοW�۪�css����';
		$TR_STRS[strtolower('Banner')] = '��T�s�i';
		$TR_STRS[strtolower('Banner client')] = '�s�i�Ȥ�';
		$TR_STRS[strtolower("Reference to banner client id. Enter separated by ','!")] = "���p���T�s�i���Ȥ�ID. �p���h��ID�h��','���j!";
		$TR_STRS[strtolower('Latest News')] = '�̷s�峹';
		$TR_STRS[strtolower('This module shows a list of the latest published content items.')] = '���Ҷ���̷ܳs�o�G���峹�C��C';
		$TR_STRS[strtolower('Most Read Content')] = '�����峹';
		$TR_STRS[strtolower('This module shows a list of published content items that have been viewed the most.')] = '���Ҷ���̼ܳ���(�s���̦h)���峹�C��C';
		$TR_STRS[strtolower('Both')] = '��̳���';
		$TR_STRS[strtolower('Show')] = '���';
		$TR_STRS[strtolower('Hide')] = '����';
		$TR_STRS[strtolower('Frontpage Items')] = '��������';
		$TR_STRS[strtolower('Show/Hide items designated for the Frontpage - only works when in Content Items only mode')] = '���/���ë��w������������ - �Ȭ����e���ؼҦ�����';
		$TR_STRS[strtolower('Category ID')] = '����ID';
		$TR_STRS[strtolower('Selects items from a specific Category or set of Categories (to specify more than one Category, seperate with a comma , ).')] = '�q�@�ӫ��w�����Τ@�դ�����ܱ��� (�p���h��ID�h�γr���j�})';
		$TR_STRS[strtolower('Section ID')] = '�椸ID';
		$TR_STRS[strtolower('Selects items from a specific Secion or set of Sections (to specify more than one Section, seperate with a comma , ).')] = '�q�@�ӫ��w�椸�Τ@�ճ椸��ܱ��� (�p���h��ID�h�γr���j�})';
		$TR_STRS[strtolower('Show Headline')] = '����Y��';
		$TR_STRS[strtolower('Show/Hide the first content item as headline')] = '���/���òĤ@�g�峹���ا@���Y���s�D';
		$TR_STRS[strtolower('Module Title')] = '�Ҷ����D';
		$TR_STRS[strtolower('User defined module title, Only use when headline shown')] = '�Τ�۩w�q���Ҷ����D�A�ȷ��Y����ܮɨϥ�';
		$TR_STRS[strtolower('Section/Category Style')] = '�椸/��������';
		$TR_STRS[strtolower('style of section/category: list or blog')] = '�椸/��������: �C��γիȭ���';
		$TR_STRS[strtolower('List')] = '�C����';
		$TR_STRS[strtolower('Blog')] = '�իȭ���';
		$TR_STRS[strtolower('Title Length')] = '���D����';
		$TR_STRS[strtolower('The max length of item title in chars to display, Default 40')] = '�峹���D��ܪ��̤j���סA�q�{��40�Ӧr��';
		$TR_STRS[strtolower('Date Display')] = '������';
		$TR_STRS[strtolower('The display of item created date')] = '�峹�Ыؤ�������';
		$TR_STRS[strtolower('Login Form')] = '�n�����';
		$TR_STRS[strtolower('Module Layout')] = '�Ҷ��G��';
		$TR_STRS[strtolower('The layout of login module')] = '�n���Ҷ����G��';
		$TR_STRS[strtolower('Vertical Compact')] = '�ݦV���';
		$TR_STRS[strtolower('Login Redirection URL')] = '�n����V���}';
		$TR_STRS[strtolower('What page will the login redirect to after login, if let blank will load front page')] = '�n������V�������A�p�G�d�űN�˸�����';
		$TR_STRS[strtolower('Logout Redirection URL')] = '�h�X��V���}';
		$TR_STRS[strtolower('What page will the logout redirect to after logout, if let blank will load front page')] = '�h�X����V�������A�p�G�d�űN�˸�����';
		$TR_STRS[strtolower('Login Message')] = '�n������';
		$TR_STRS[strtolower('Show/Hide the javascript Pop-up indicating Login Success')] = '���/���� javascript �u�X���f�Ӵ��ܵn�����\ ';
		$TR_STRS[strtolower('Logout Message')] = '�h�X����';
		$TR_STRS[strtolower('Show/Hide the javascript Pop-up indicating Logout Success')] = '���/���� javascript �u�X���f�Ӵ��ܰh�X���\ ';
		$TR_STRS[strtolower('Greeting')] = '�ݭԻy';
		$TR_STRS[strtolower('Show/Hide the simple greeting text')] = '���/����²�檺�ݭԤ奻';
		$TR_STRS[strtolower('Name/Username')] = '�m�W/�Τ�W';
		$TR_STRS[strtolower('Username')] = '�Τ�W';
		$TR_STRS[strtolower('Name')] = '�m�W';
		$TR_STRS[strtolower('Main Menu')] = '�D���';
		$TR_STRS[strtolower('Menu Class Suffix')] = '���css���';
		$TR_STRS[strtolower('A suffix to be applied to the css class of the menu items')] = '���Ψ��涵��css�������';
		$TR_STRS[strtolower('Menu Name')] = '���W��';
		$TR_STRS[strtolower("The name of the menu (default is 'mainmenu')")] = "��檺�W��(�q�{���D���)";
		$TR_STRS[strtolower('Menu Style')] = '��歷��';
		$TR_STRS[strtolower('The menu style')] = '��歷��';
		$TR_STRS[strtolower('Vertical')] = '�ݦV';
		$TR_STRS[strtolower('Horizontal')] = '��V';
		$TR_STRS[strtolower('Flat List')] = '�a�V�C��';
		$TR_STRS[strtolower('Show Menu Icons')] = '��ܵ��ϼ�';
		$TR_STRS[strtolower('Show the Menu Icons you have selected for your menu items')] = '��ܱz����涵�]�m���ϼ�';
		$TR_STRS[strtolower('Menu Icon Alignment')] = '���ϼй��';
		$TR_STRS[strtolower('Alignment of the Menu Icons')] = '���ϼй��';
		$TR_STRS[strtolower('Left')] = '��';
		$TR_STRS[strtolower('Right')] = '�k';
		$TR_STRS[strtolower('Expand Menu')] = '�i�}���';
		$TR_STRS[strtolower('Expand the menu and make its sub-menus items always visible')] = '�i�}���A�Ϥl����`�O��ܥX��';
		$TR_STRS[strtolower('Indent Image')] = '�Y�i�Ϥ�';
		$TR_STRS[strtolower('Choose which indent image system to utilise')] = '��ܨϥέ����Y�i�Ϥ��t��';
		$TR_STRS[strtolower('Template')] = '�Ҫ�';
		$TR_STRS[strtolower('Mambo default images')] = '�Ҫi�q�{�Ϥ�';
		$TR_STRS[strtolower('Use params below')] = '�ϥΥH�U�Ѽ�';
		$TR_STRS[strtolower('None')] = '�L';
		$TR_STRS[strtolower('Indent Image 1')] = '�Y�i�Ϥ�1';
		$TR_STRS[strtolower('Image for the first sub-level')] = '��1�Ťl��檺�ϼ�';
		$TR_STRS[strtolower('Indent Image 2')] = '�Y�i�Ϥ�2';
		$TR_STRS[strtolower('Image for the second sub-level')] = '��2�Ťl��檺�ϼ�';
		$TR_STRS[strtolower('Indent Image 3')] = '�Y�i�Ϥ�3';
		$TR_STRS[strtolower('Image for the third sub-level')] = '��3�Ťl��檺�ϼ�';
		$TR_STRS[strtolower('Indent Image 4')] = '�Y�i�Ϥ�4';
		$TR_STRS[strtolower('Image for the fourth sub-level')] = '��4�Ťl��檺�ϼ�';
		$TR_STRS[strtolower('Indent Image 5')] = '�Y�i�Ϥ�5';
		$TR_STRS[strtolower('Image for the fifth sub-level')] = '��5�Ťl��檺�ϼ�';
		$TR_STRS[strtolower('Indent Image 6')] = '�Y�i�Ϥ�6';
		$TR_STRS[strtolower('Image for the sixth sub-level')] = '��6�Ťl��檺�ϼ�';
		$TR_STRS[strtolower('Spacer')] = '���j��';
		$TR_STRS[strtolower('Spacer for Horizontal menu')] = '��V��檺���j��';
		$TR_STRS[strtolower('End Spacer')] = '���ݶ��j��';
		$TR_STRS[strtolower('End Spacer for Horizontal menu')] = '��V��檺���ݶ��j��';
		$TR_STRS[strtolower('Newsflash')] = '�s�D�ְT';
		$TR_STRS[strtolower('Category')] = '����';
		$TR_STRS[strtolower('A content cateogry')] = '�@�Ӥ��e����';
		$TR_STRS[strtolower('Style')] = '����';
		$TR_STRS[strtolower('The style to display the category')] = '������ܪ�����';
		$TR_STRS[strtolower('Randomly choose one at a time')] = '�C���H�����';
		$TR_STRS[strtolower('Show images')] = '��ܹϤ�';
		$TR_STRS[strtolower('Display content item images')] = '��ܤ��e���ت��Ϥ�';
		$TR_STRS[strtolower('Linked Titles')] = '�챵���D';
		$TR_STRS[strtolower('Make the Item titles linkable')] = '�ϱ��ت����D�i�챵';
		$TR_STRS[strtolower('Use Global')] = '�ϥΥ����]�m';
		$TR_STRS[strtolower('Read More')] = '�\Ū����';
		$TR_STRS[strtolower('Show/Hide the Read More button')] = '���/���þ\Ū������s';
		$TR_STRS[strtolower('Item Title')] = '���ؼ��D';
		$TR_STRS[strtolower('Show item title')] = '��ܱ��ؼ��D';
		$TR_STRS[strtolower('No. of Items')] = '���ؼ�';
		$TR_STRS[strtolower('No of items to display')] = '��ܪ����ؼ�';
		$TR_STRS[strtolower('Poll')] = '�b�u�լd';
		$TR_STRS[strtolower('Random Image')] = '�H���Ϥ�';
		$TR_STRS[strtolower('Image Type')] = '�Ϥ�����';
		$TR_STRS[strtolower('Type of image PNG/GIF/JPG etc. (default is JPG)')] = '�Ϥ������p PNG/GIF/JPG ���C�]�q�{�� JPG�^';
		$TR_STRS[strtolower('Image Folder')] = '�Ϥ����';
		$TR_STRS[strtolower('Path to the image folder relative to the site url, eg: images/stories')] = '�Ϥ���󧨬۹������챵�����|�A�p images/stories';
		$TR_STRS[strtolower('Link')] = '�챵';
		$TR_STRS[strtolower('A URL to redirect to if image is clicked on, eg: http://www.mamboserver.com')] = '�I���Ϥ�����V���챵�A�p http://www.mamboserver.com';
		$TR_STRS[strtolower('Width (px)')] = '�e�� (px)';
		$TR_STRS[strtolower('Image width (forces all images to be displayed with this width)')] = '�Ϥ��e�� �]�j��Ҧ��Ϥ���ܦb���e�ס^';
		$TR_STRS[strtolower('Height (px)')] = '���� (px)';
		$TR_STRS[strtolower('Image height (forces all images to be displayed with the height)')] = '�Ϥ����� �]�j��Ҧ��Ϥ���ܦb�����ס^';
		$TR_STRS[strtolower('Related Items')] = '�����峹';
		$TR_STRS[strtolower('Text')] = '�奻';
		$TR_STRS[strtolower('Enter the text to be displayed along with the RSS links')] = '��J�M RSS �챵�@�_��ܪ��奻';
		$TR_STRS[strtolower('Show/Hide RSS 0.91 Link')] = '���/���� RSS 0.91 �챵';
		$TR_STRS[strtolower('Show/Hide RSS 1.0 Link')] = '���/���� RSS 1.0 �챵';
		$TR_STRS[strtolower('Show/Hide RSS 2.0 Link')] = '���/���� RSS 2.0 �챵';
		$TR_STRS[strtolower('Show/Hide Atom 0.3 Link')] = '���/���� Atom 0.3 �챵';
		$TR_STRS[strtolower('Show/Hide OPML Link')] = '���/���� OPML �챵';
		$TR_STRS[strtolower('RSS 0.91 Image')] = 'RSS 0.91 �Ϥ�';
		$TR_STRS[strtolower('Choose the image to be used')] = '��ܭn�ϥΪ��ϼ�';
		$TR_STRS[strtolower('RSS 1.0 Image')] = 'RSS 1.0 �Ϥ�';
		$TR_STRS[strtolower('RSS 2.0 Image')] = 'RSS 2.0 �Ϥ�';
		$TR_STRS[strtolower('Atom Image')] = 'Atom �Ϥ�';
		$TR_STRS[strtolower('OPML Image')] = 'OPML �Ϥ�';
		$TR_STRS[strtolower('Search Module')] = '�j���Ҷ�';
		$TR_STRS[strtolower('Box Width')] = '�j���ؼe��';
		$TR_STRS[strtolower('Size of the search text box')] = '�j���奻�ت��ؤo';
		$TR_STRS[strtolower('The text that appears in the search text box, if left blank it will load _SEARCH_BOX from your language file')] = '��ܦb�j���奻�ؤ����奻�A�p�d�ūh���J�z���y����󤤪� _SEARCH_BOX';
		$TR_STRS[strtolower('Search Button')] = '�j�����s';
		$TR_STRS[strtolower('Display a Search Button')] = '��ܤ@�ӷj�����s';
		$TR_STRS[strtolower('Button Position')] = '���s��m';
		$TR_STRS[strtolower('Position of the button relative to the search box')] = '���s��m�۹��j����';
		$TR_STRS[strtolower('Top')] = '����';
		$TR_STRS[strtolower('Bottom')] = '����';
		$TR_STRS[strtolower('Button Text')] = '���s�奻';
		$TR_STRS[strtolower('The text that appears in the search button, if left blank it will load _SEARCH_TITLE from your language file')] = '��ܦb�j�����s�W���奻�A�p�d�ūh���J�z���y����󤤪� _SEARCH_TITLE';
		$TR_STRS[strtolower('Sections')] = '�椸';
		$TR_STRS[strtolower('Statistics')] = '�έp';
		$TR_STRS[strtolower('Server Info')] = '�A�Ⱦ��H��';
		$TR_STRS[strtolower('Display server information')] = '��ܪA�Ⱦ��H��';
		$TR_STRS[strtolower('Site Info')] = '���I�H��';
		$TR_STRS[strtolower('Display site information')] = '��ܯ��I�H��';
		$TR_STRS[strtolower('Hit Counter')] = '�I����';
		$TR_STRS[strtolower('Display hit counter')] = '����I���p�ƾ�';
		$TR_STRS[strtolower('Increase counter')] = '�W�[�p�ƾ�';
		$TR_STRS[strtolower('Enter the amount of hits to increase counter by')] = '��J�I�����`�ƨӼW�[�p�ƾ�';
		$TR_STRS[strtolower('Template Chooser')] = '�Ҫ���ܾ�';
		$TR_STRS[strtolower('Max. Name Length')] = '�W�ٳ̤j����';
		$TR_STRS[strtolower('This is the maximum length of the template name to display (default 20)')] = '�ҪO�W����ܪ��̤j���ס]�q�{�� 20�^';
		$TR_STRS[strtolower('Show Preview')] = '��ܹw��';
		$TR_STRS[strtolower('Template preview is to be shown')] = '��ܼҪ����w��';
		$TR_STRS[strtolower('This is the width of the preview image (default 140)')] = '�w���Ϥ����e�ס]�q�{�� 140�^';
		$TR_STRS[strtolower('This is the height of the preview image (default 90)')] = '�w���Ϥ������ס]�q�{�� 90�^';
		$TR_STRS[strtolower("Who's Online")] = "�b�u���p";
		$TR_STRS[strtolower('Display')] = '���';
		$TR_STRS[strtolower('Select what shall be shown')] = '��ܭn��ܪ����e';
		$TR_STRS[strtolower('# of Guests/Members<br>')] = '�{��#��X��/�|���b�u<br>';
		$TR_STRS[strtolower('Member Names<br>')] = '�|���W��<br>';
		$TR_STRS[strtolower('Wrapper Module')] = '�O�J�����Ҷ�';
		$TR_STRS[strtolower('Url')] = '���}';
		$TR_STRS[strtolower('Url to site/file you wish to display within the Iframe')] = '�bIframe����ܪ�����/��󪺺��}';
		$TR_STRS[strtolower('Scroll Bars')] = '�u�ʱ�';
		$TR_STRS[strtolower('Show/Hide Horizontal & Vertical scroll bars.')] = '���/���ä����M�����u�ʱ�.';
		$TR_STRS[strtolower('Auto')] = '�۰�';
		$TR_STRS[strtolower('Width of the IFrame Window, you can enter an absolute figure in pixels, or a relative figure by adding a %')] = 'IFrame���f���e��, �A�i�H��J���諸�����ƭȩά۹諸�ʤ���ƭ�';
		$TR_STRS[strtolower('Height of the IFrame Window')] = 'IFrame���f������';
		$TR_STRS[strtolower('Auto Height')] = '�۰ʰ���';
		$TR_STRS[strtolower('The height will automatically be set to the size of the external page. This will only work for pages on your own domain.')] = '���f�����ױN�ھڥ~�������۰ʳ]�w�A�ȹ�A�ۤv��W�U���������ġC';
		$TR_STRS[strtolower('Auto Add')] = '�۰ʼW�[';
		$TR_STRS[strtolower('By default http:// will be added unless it detects http:// or https:// in the url link you provide, this allow you to switch this ability off')] = '�q�{�W�[ http://�A���D�˴���z���Ѫ����}�� http:// �Ϊ� https://�A�o���\�A�����o�ӥ\��';

		$TR_STRS[strtolower('Search')] = '�j��';
		$TR_STRS[strtolower('User Menu')] = '�Τ���';
		$TR_STRS[strtolower('Top Menu')] = '�������';
		$TR_STRS[strtolower('Other Menu')] = '�䥦���';
		$TR_STRS[strtolower('Wrapper')] = '�O�J����';
		$TR_STRS[strtolower('Popular')] = '�����峹';

		$TR_STRS[strtolower('RSS URL')] = 'RSS ���}';
		$TR_STRS[strtolower('Enter the URL of the RSS/RDF feed')] = '��J RSS/RDF �༽�����}';
		$TR_STRS[strtolower('Feed Description')] = '�༽�y�z';
		$TR_STRS[strtolower('Show the description text for the whole Feed')] = '��ܾ���༽���y�z�奻';
		$TR_STRS[strtolower('Feed Image')] = '�༽�Ϥ�';
		$TR_STRS[strtolower('Show the image associated with the whole Feed')] = '��ܻP����༽���p���Ϥ�';
		$TR_STRS[strtolower('Items')] = '����';
		$TR_STRS[strtolower('Enter number of RSS items to display')] = '��J�n��ܪ� RSS ���ت��ƶq';
		$TR_STRS[strtolower('Item Description')] = '���شy�z';
		$TR_STRS[strtolower('Show the description or intro text of individual news items')] = '��ܳ�W���s�D���ت��y�z�Τ��Ф奻';

		//administrator/modules XML file
		$TR_STRS[strtolower('Logged')] = '�w�n��';
		$TR_STRS[strtolower('Logged in Users')] = '�w�n���Τ�';
		$TR_STRS[strtolower('Components')] = '�ե�';
		$TR_STRS[strtolower('Popular Items')] = '��������';
		$TR_STRS[strtolower('Latest Items')] = '�̷s����';
		$TR_STRS[strtolower('Menu Stats')] = '���έp';
		$TR_STRS[strtolower('Unread Messages')] = '��Ū����';
		$TR_STRS[strtolower('Online Users')] = '�b�u�Τ�';
		$TR_STRS[strtolower('Quick Icons')] = '�ֱ��ϼ�';
		$TR_STRS[strtolower('System Message')] = '�t�ή���';
		$TR_STRS[strtolower('Pathway')] = '�ɯ���|';
		$TR_STRS[strtolower('Toolbar')] = '�u����';
		$TR_STRS[strtolower('Full Menu')] = '�������';

		//mambots XML file
		$TR_STRS[strtolower('MOS Image')] = 'Mambo �Ϥ�';
		$TR_STRS[strtolower('Legacy Mambot Includer')] = '�즳Ĳ�o���m�J';
		$TR_STRS[strtolower('Code support')] = '�N�X���';
		$TR_STRS[strtolower('SEF')] = '�j�������ͦn�챵';
		$TR_STRS[strtolower('MOS Rating')] = 'Mambo �峹����';
		$TR_STRS[strtolower('Email Cloaking')] = 'Email ����';
		$TR_STRS[strtolower('GeSHi')] = 'GeSHi';
		$TR_STRS[strtolower('Load Module Positions')] = '�˸��Ҷ���m';
		$TR_STRS[strtolower('MOS Pagination')] = 'Mambo ����';
		$TR_STRS[strtolower('No WYSIWYG Editor')] = '�D�Ҩ��Y�ұo�s�边';
		$TR_STRS[strtolower('TinyMCE WYSIWYG Editor')] = 'TinyMCE �Ҩ��Y�ұo�s�边';
		$TR_STRS[strtolower('MOS Image Editor Button')] = 'Mambo �Ϥ��s�边���s';
		$TR_STRS[strtolower('MOS Pagebreak Editor Button')] = 'Mambo �����s�边���s';
		$TR_STRS[strtolower('Search Content')] = '�j�����e';
		$TR_STRS[strtolower('Search Weblinks')] = '�j�������챵';
		$TR_STRS[strtolower('Search Contacts')] = '�j���pô�H';
		$TR_STRS[strtolower('Search Categories')] = '�j������';
		$TR_STRS[strtolower('Search Sections')] = '�j���椸';
		$TR_STRS[strtolower('Search Newsfeeds')] = '�j���s�D�༽';

		$TR_STRS[strtolower('Mode')] = '�Ҧ�';
		$TR_STRS[strtolower('Select how the emails will be displayed')] = '��� emails ����ܤ覡';
		$TR_STRS[strtolower('Nonlinkable Text')] = '���i�챵���奻';
		$TR_STRS[strtolower('As linkable mailto address')] = '�i�챵�� mailto �a�}';
		$TR_STRS[strtolower('Margin')] = '����Z';
		$TR_STRS[strtolower('Margin in px, of Div surrounding Image & Caption - only applies if using a Caption')] = '��¶�Ϥ��M���D�� Div ������Z�A�H��������� - �Ȧb�ϥμ��D�ɦ���';
		$TR_STRS[strtolower('Padding')] = '��R';
		$TR_STRS[strtolower('Padding in px, of Div surrounding Image & Caption - only applies if using a Caption')] = '��¶�Ϥ��M���D�� Div ����R�A�H��������� - �Ȧb�ϥμ��D�ɦ���';
		$TR_STRS[strtolower('Wrapped by Table - Column')] = '�Ϊ��]�� - �C';
		$TR_STRS[strtolower('Wrapped by Table - Horizontal')] = '�Ϊ��]�� - ������';
		$TR_STRS[strtolower('Wrapped by Divs')] = '�� Divs �]��';
		$TR_STRS[strtolower('No wrapping - raw output')] = '�S���]�� - ��l��X';
		$TR_STRS[strtolower('Site Title')] = '�������D';
		$TR_STRS[strtolower('title and heading attibutes from mambot added to Site Title tag')] = '�qĲ�o���W�[��������D���Ҫ����D(title)�M�p���D(heading)�ݩ�';

		$TR_STRS[strtolower('Functionality')] = '�\��';
		$TR_STRS[strtolower('Select functionality')] = '��ܥ\��';
		$TR_STRS[strtolower('Basic')] = '��';
		$TR_STRS[strtolower('Advanced')] = '����';
		$TR_STRS[strtolower('Text Direction')] = '��r��V';
		$TR_STRS[strtolower('Ability to change text direction')] = '���ܤ�r��V����O';
		$TR_STRS[strtolower('Left to Right')] = '�q����k';
		$TR_STRS[strtolower('Right to Left')] = '�q�k�쥪';
		$TR_STRS[strtolower('Prohibited Elements')] = '�T�����';
		$TR_STRS[strtolower('Elements that will be cleaned from the text')] = '�N�Q�q�奻���M��������';
		$TR_STRS[strtolower('Template CSS classes')] = '�Ҫ� CSS �˦�';
		$TR_STRS[strtolower('Load CSS classes from template_css.css')] = '�q template_css.css Ū�� CSS �˦�';
		$TR_STRS[strtolower('Custom CSS Classes')] = '�۩w�q CSS �˦�';
		$TR_STRS[strtolower('You can specify the loading of a custom CSS file - simply enter the FULL path to the css file you want loaded')] = '�i�H�ɤJ���w���۩w�q CSS ��� - �u����J�� CSS ��󧹾㪺���|';
		$TR_STRS[strtolower('Newlines')] = '�s��';
		$TR_STRS[strtolower('Newlines will be made into the selected option')] = '��ܷs�檺�إߤ�k';
		$TR_STRS[strtolower('BR Elements')] = '��BR����';
		$TR_STRS[strtolower('P Elements')] = '��P����';
		$TR_STRS[strtolower('Position of the toolbar')] = '�u�����m';
		$TR_STRS[strtolower('Popup Height')] = '�u�X���f����';
		$TR_STRS[strtolower('Height of HTML mode pop-up window - only in Advanced Mode')] = 'HTML �Ҧ����u�X���f���� - �Ȧb���żҦ������';
		$TR_STRS[strtolower('Popup Width')] = '�u�X���f�e��';
		$TR_STRS[strtolower('Width of HTML mode pop-up window - only in Advanced Mode')] = 'HTML �Ҧ����u�X���f�e�� - �Ȧb���żҦ������';

		//administrator/components/com_contact/contact.xml
		$TR_STRS[strtolower('Contact')] = '�pô�H��';
		$TR_STRS[strtolower('This component shows a listing of Contact Information')] = '���ե���ܤ@���pô�H���C��';
		$TR_STRS[strtolower('Page Title')] = '�������D';
		$TR_STRS[strtolower('Show/Hide the pages Title')] = '���/���í������D';
		$TR_STRS[strtolower('Text to display at the top of the page. If left blank, the Menu name will be used instead')] = '��ܦb�����������奻�A�p�G�d�šA�N�ϥε��W��';
		$TR_STRS[strtolower('Category List - Category')] = '�����C�� - ����';
		$TR_STRS[strtolower('Show/Hide the List of Categories in Table view page')] = '�b�H��歷����ܪ����������/���ä����C��';
		$TR_STRS[strtolower('Category Description')] = '�����y�z';
		$TR_STRS[strtolower('Show/Hide the Description for the list of other catgeories')] = '���/���è䥦�����C���y�z';
		$TR_STRS[strtolower('# Category Items')] = '�������ؼ�';
		$TR_STRS[strtolower('Show/Hide the number of items in each category')] = '���/���èC�Ӥ��������ؼ�';
		$TR_STRS[strtolower('Show/Hide the Description below')] = '���/���äU�����y�z';
		$TR_STRS[strtolower('Description for page, if left blank it will load _WEBLINKS_DESC from your language file')] = '�������y�z�A�p�G�d�šA�hŪ���y����󪺺����y�z';
		$TR_STRS[strtolower('Image for page, must be located in the /images/stories folder. Default will load web_links.jpg, No image will mean an image is not loaded')] = '�������Ϥ��A������b�ؿ� /images/stories ���C�q�{Ū�� web_links.jpg�A�S���Ϥ��N���ۨS���˸��Ϥ��C';
		$TR_STRS[strtolower('Image Align')] = '�Ϥ����';
		$TR_STRS[strtolower('Alignment of the image')] = '�Ϥ����';
		$TR_STRS[strtolower('Table Headings')] = '���Y';
		$TR_STRS[strtolower('Show/Hide the Table Headings')] = '���/���ê��Y';
		$TR_STRS[strtolower('Position Column')] = '¾����';
		$TR_STRS[strtolower('Show/Hide the Position column')] = '���/����¾����';
		$TR_STRS[strtolower('Email Column')] = 'Email��';
		$TR_STRS[strtolower('Show/Hide the Email column')] = '���/����Email��';
		$TR_STRS[strtolower('Telephone Column')] = '�q����';
		$TR_STRS[strtolower('Show/Hide the Telephone column')] = '���/���ùq����';
		$TR_STRS[strtolower('Fax Column')] = '�ǯu��';
		$TR_STRS[strtolower('Show/Hide the Fax column')] = '���/���öǯu��';

		//administrator/components/com_contact/contact_items.xml
		$TR_STRS[strtolower('Contact Items')] = '�pô����';
		$TR_STRS[strtolower('Parameters for individual Contact Items')] = '�ӤH�pô���ت��Ѽ�';
		$TR_STRS[strtolower('Menu Image')] = '���Ϥ�';
		$TR_STRS[strtolower('A small image to be placed to the left or right of your menu item, images must be in images/stories/')] = '�@�Ӥp�Ϥ��A��b��涵������Υk��A�Ϥ������b�ؿ� images/stories/ ��';
		$TR_STRS[strtolower('Page Class Suffix')] = '����css���';
		$TR_STRS[strtolower('A suffix to be applied to the css classes of the page, this allows individual page styling')] = '���Ψ쭶����css�������A�o�ˤ��\�����ϥοW�۪�css����';
		$TR_STRS[strtolower('Print Icon')] = '���L�ϼ�';
		$TR_STRS[strtolower('Show/Hide the item print button - only affects this page')] = '���/���å��L�ϼ� - �u�v�T�ӭ���';
		$TR_STRS[strtolower('Back Button')] = '��^���s';
		$TR_STRS[strtolower('Show/Hide a Back Button, that returns you to the previously view page')] = '���/���ê�^���s�A���\��^�W�@�ӭ���';
		$TR_STRS[strtolower('Name')] = '�m�W';
		$TR_STRS[strtolower('Show/Hide the name info')] = '���/���ém�W';
		$TR_STRS[strtolower('Position')] = '¾��';
		$TR_STRS[strtolower('Show/Hide the position info')] = '���/����¾����';
		$TR_STRS[strtolower('Email')] = 'Email';
		$TR_STRS[strtolower('Show/Hide the email info, if you set to show the address will be protected from spambots by javascript cloaking')] = '���/����Email��';
		$TR_STRS[strtolower('Street Address')] = '�a�}';
		$TR_STRS[strtolower('Show/Hide the street address info')] = '���/���æa�}�H��';
		$TR_STRS[strtolower('Town/Suburb')] = '����';
		$TR_STRS[strtolower('Show/Hide the suburb info')] = '���/���ë����H��';
		$TR_STRS[strtolower('State')] = '�٥�';
		$TR_STRS[strtolower('Show/Hide the state info')] = '���/���ì٥��H��';
		$TR_STRS[strtolower('Country')] = '��a';
		$TR_STRS[strtolower('Show/Hide the country info')] = '���/���ð�a�H��';
		$TR_STRS[strtolower('Post/Zip Code')] = '�l�s';
		$TR_STRS[strtolower('Show/Hide the post code info')] = '���/���öl�s';
		$TR_STRS[strtolower('Telephone')] = '�q��';
		$TR_STRS[strtolower('Show/Hide the telephone info')] = '���/���ùq�ܫH��';
		$TR_STRS[strtolower('Fax')] = '�ǯu';
		$TR_STRS[strtolower('Show/Hide the fax info')] = '���/���öǯu�H��';
		$TR_STRS[strtolower('Misc Info')] = '�Ƶ�';
		$TR_STRS[strtolower('Show/Hide the misc info')] = '���/���óƵ��H��';
		$TR_STRS[strtolower('Vcard')] = 'Vcard';
		$TR_STRS[strtolower('Show/Hide the Vcard')] = '���/���� Vcard';
		$TR_STRS[strtolower('Image')] = '�Ϥ�';
		$TR_STRS[strtolower('Show/Hide the image')] = '���/���ùϤ�';
		$TR_STRS[strtolower('Email description')] = 'Email�y�z';
		$TR_STRS[strtolower('Show/Hide the Description Text below')] = '���/���� �U����Email�y�z';
		$TR_STRS[strtolower('Description text')] = '�y�z�奻';
		$TR_STRS[strtolower('The Description text for the Email form, if left blank it will use the _EMAIL_DESCRIPTION language definition')] = 'Email��檺�y�z�奻�A�p�G�d�šA�N�ϥλy����� _EMAIL_DESCRIPTION';
		$TR_STRS[strtolower('Email Form')] = 'Email���';
		$TR_STRS[strtolower('Show/Hide the email to form')] = '���/����Email���';
		$TR_STRS[strtolower('Email Copy')] = 'Email�ƻs';
		$TR_STRS[strtolower('Show/Hide the checkbox to email a copy to the senders address')] = '���/���ç�email�ƻs��o��H�a�}���_���';
		$TR_STRS[strtolower('Drop Down')] = '�U�Կ��';
		$TR_STRS[strtolower('Show/Hide the Drop Down select list in Contact view')] = '���/�����pô�H���U�Կ��';
		$TR_STRS[strtolower('Icons/text')] = '�ϼ�/�奻';
		$TR_STRS[strtolower('Use Icons, text or nothing next to the contact information displayed')] = '�ϥιϼСB�奻�Ϊ̪ūH���A�b�pô�H�H������';
		$TR_STRS[strtolower('Icons')] = '�ϼ�';
		$TR_STRS[strtolower('Address Icon')] = '�a�}�ϼ�';
		$TR_STRS[strtolower('Icon for the Address info')] = '�a�}�H�����ϼ�';
		$TR_STRS[strtolower('Email Icon')] = 'Email�ϼ�';
		$TR_STRS[strtolower('Icon for the Email info')] = 'Email�H�����ϼ�';
		$TR_STRS[strtolower('Telephone Icon')] = '�q�ܹϼ�';
		$TR_STRS[strtolower('Icon for the Telephone info')] = '�q�ܫH�����ϼ�';
		$TR_STRS[strtolower('Fax Icon')] = '�ǯu�ϼ�';
		$TR_STRS[strtolower('Icon for the Fax info')] = '�ǯu�H�����ϼ�';
		$TR_STRS[strtolower('Misc Icon')] = '�Ƶ��ϼ�';
		$TR_STRS[strtolower('Icon for the Misc info')] = '�Ƶ��H�����ϼ�';

		//administrator/components/com_content XML files
		$TR_STRS[strtolower('Content Page')] = '���e����';
		$TR_STRS[strtolower('This shows a single content page')] = '��ܤ@�ӳ�W�����e����';
		$TR_STRS[strtolower('Item Title')] = '���ؼ��D';
		$TR_STRS[strtolower('Show/Hide the items title')] = '���/���ñ��ؼ��D';
		$TR_STRS[strtolower('Make your Item titles linkable')] = '�ϱ��ؼ��D�i�챵';
		$TR_STRS[strtolower('Intro Text')] = '�K�n';
		$TR_STRS[strtolower('Show/Hide the intro text')] = '���/���úK�n';
		$TR_STRS[strtolower('Section Name')] = '�椸�W��';
		$TR_STRS[strtolower('Show/Hide the Section the item belongs to')] = '���/���ñ��ة��ݪ��椸';
		$TR_STRS[strtolower('Section Name Linkable')] = '�椸�W�٥i�챵';
		$TR_STRS[strtolower('Make the Section text a link to the actual section page')] = '�ϳ椸�W���챵���椸����';
		$TR_STRS[strtolower('Category Name')] = '�����W��';
		$TR_STRS[strtolower('Show/Hide the Category the item belongs to')] = '���/���ñ��ة��ݪ�����';
		$TR_STRS[strtolower('Category Name Linkable')] = '�����W�٥i�챵';
		$TR_STRS[strtolower('Make the Category text a link to the actual Category page')] = '�Ϥ����W���챵����������';
		$TR_STRS[strtolower('Item Rating')] = '�峹����';
		$TR_STRS[strtolower('Show/Hide the item rating - only affects this page')] = '���/���ä峹���� - �u�v�T�ӭ���';
		$TR_STRS[strtolower('Author Names')] = '�@�̦W��';
		$TR_STRS[strtolower('Show/Hide the item author - only affects this page')] = '���/���ç@�̦W�� - �u�v�T�ӭ���';
		$TR_STRS[strtolower('Created Date and Time')] = '�Ыؤ���ɶ�';
		$TR_STRS[strtolower('Show/Hide the item creation date - only affects this page')] = '���/���óЫؤ���ɶ� - �u�v�T�ӭ���';
		$TR_STRS[strtolower('Modified Date and Time')] = '������ɶ�';
		$TR_STRS[strtolower('Show/Hide the item modification date - only affects this page')] = '���/���ç�����ɶ� - �u�v�T�ӭ���';
		$TR_STRS[strtolower('Show/Hide the item pdf button - only affects this page')] = '���/����PDF�ϼ� - �u�v�T�ӭ���';
		$TR_STRS[strtolower('Show/Hide the item email button - only affects this page')] = '���/����Email�ϼ� - �u�v�T�ӭ���';
		$TR_STRS[strtolower('Key Reference')] = '�ѦҸ��';
		$TR_STRS[strtolower('A text key that an item may be referenced by (like a help reference)')] = '�峹�үA�ΩΰѦҪ����';

		//administrator/components/com_frontpage/frontpage.xml
		$TR_STRS[strtolower('Frontpage')] = '����';
		$TR_STRS[strtolower('This component shows all the published content items from your site marked Show on Frontpage.')] = '���ե���ܥ����I�Ҧ��аO����ܦb�������w�o�G���e.';
		$TR_STRS[strtolower('Text to display at the top of the page')] = '��ܦb�����������奻';
		$TR_STRS[strtolower('Show/Hide the Page title')] = '���/���í������D';
		$TR_STRS[strtolower('# Leading')] = '�Y����';
		$TR_STRS[strtolower('Number of Items to display as a leading (full width) item. 0 will mean that no items will be displayed as leading.')] = '����Y���峹(�e����e)���ƶq�A0 ��ܨS���ϥ��Y���覡��ܡC';
		$TR_STRS[strtolower('# Intro')] = '�K�n��';
		$TR_STRS[strtolower('Number of Items to display with the introduction text shown.')] = '��ܤ峹�K�n���ƶq�C';
		$TR_STRS[strtolower('Columns')] = '�K�n�C��';
		$TR_STRS[strtolower('When displaying the intro text, how many columns to use per row')] = '�C��i��ܪ��K�n�ƶq�C';
		$TR_STRS[strtolower('# Links')] = '�챵����';
		$TR_STRS[strtolower('Number of Items to display as Links.')] = '��ܤ峹���D�챵���ƶq';
		$TR_STRS[strtolower('Items Order')] = '�峹�Ƨ�';
		$TR_STRS[strtolower('Order that the items will be displayed in.')] = '���e���ت���ܦ��ǡC';
		$TR_STRS[strtolower('Pagination')] = '����';
		$TR_STRS[strtolower('Show/Hide Pagination support')] = '���/���ä������';
		$TR_STRS[strtolower('Pagination Results')] = '�������G';
		$TR_STRS[strtolower('Show/Hide Pagination Results info ( e.g 1-4 of 4 )')] = '���/���ä������G�H��(�p�G1-4 / 4 )';
		$TR_STRS[strtolower('Item Titles')] = '�峹���D';
		$TR_STRS[strtolower('Show/Hide the Read More link')] = '���/���þ\Ū�����챵';
		$TR_STRS[strtolower('PDF Icon')] = 'PDF�ϼ�';

		//administrator/components/com_login/login.xml
		$TR_STRS[strtolower('Login Page Title')] = '�n���������D';
		$TR_STRS[strtolower('Login JS Message')] = '�n���᪺ JS �H��';
		$TR_STRS[strtolower('Login Description')] = '�n���y�z';
		$TR_STRS[strtolower('Show/Hide the Login Description below')] = '���/���õn���᪺�y�z�H��';
		$TR_STRS[strtolower('Login Description Text')] = '�n�����ܤ奻';
		$TR_STRS[strtolower('Text to display on the login Page, if left blank _LOGIN_DESCRIPTION will be used')] = '�]�m�n�����ܪ��奻, �p�G�d�šA�h����Ū���A�]�m���y����󤤪� _LOGIN_DESCRIPTION ���]�w��';
		$TR_STRS[strtolower('Login Image')] = '�n���Ϥ�';
		$TR_STRS[strtolower('Image for the Login Page')] = '�n���������Ϥ�';
		$TR_STRS[strtolower('Login Image Align')] = '�n���Ϥ���m';
		$TR_STRS[strtolower('Alignment for Login Image')] = '�n���������Ϥ���m';
		$TR_STRS[strtolower('Logout Page Title')] = '�h�X�������D';
		$TR_STRS[strtolower('What page will be redirected to after logout, if let blank will load front page')] = '�]�m�h�X��۰ʸ��઺�����A�p�G�d�šA�h������^���e��';
		$TR_STRS[strtolower('Logout JS Message')] = '�h�X�᪺ JS �H��';
		$TR_STRS[strtolower('Logout Description')] = '�h�X�y�z';
		$TR_STRS[strtolower('Show/Hide the Logout Description below')] = '���/���ðh�X�᪺�y�z�H��';
		$TR_STRS[strtolower('Logout Description Text')] = '�h�X���ܤ奻';
		$TR_STRS[strtolower('Text to display on the logout Page, if left blank _LOGOUT_DESCRIPTION will be used')] = '�]�m�h�X���ܪ��奻, �p�G�d�šA�h����Ū���A�]�m���y����󤤪� _LOGOUT_DESCRIPTION ���]�w��';
		$TR_STRS[strtolower('Logout Image')] = '�h�X�Ϥ�';
		$TR_STRS[strtolower('Image for the Logout Page')] = '�h�X�����Ϥ�';
		$TR_STRS[strtolower('Logout Image Align')] = '�h�X�Ϥ���m';
		$TR_STRS[strtolower('Alignment for Logout Image')] = '�h�X�������Ϥ���m';

		//administrator/components/com_newsfeeds/newsfeeds.xml
		$TR_STRS[strtolower('Newsfeeds')] = '�s�D�༽';
		$TR_STRS[strtolower('This component manages RSS/RDF newsfeeds')] = '���ե�޲z RSS/RDF �s�D�༽';
		$TR_STRS[strtolower('Name Column')] = '�W����';
		$TR_STRS[strtolower('Show/Hide the Feed Name column')] = '���/�����༽�W����';
		$TR_STRS[strtolower('# Articles Column')] = '�峹����';
		$TR_STRS[strtolower('Show/Hide the # of articles in the feed')] = '���/�����༽�����峹��';
		$TR_STRS[strtolower('Link Column')] = '�챵��';
		$TR_STRS[strtolower('Show/Hide the Feed Link column')] = '���/�����༽�챵��';
		$TR_STRS[strtolower('Show/Hide the image of the feed')] = '���/�����༽�Ϥ�';
		$TR_STRS[strtolower('Show/Hide the description text of the feed')] = '���/�����༽���y�z�奻';
		$TR_STRS[strtolower('Show/Hide the description or intro text of an item')] = '���/���ñ��ت��y�z�Τ��Ф奻';

		//administrator/components/com_syndicate XML files
		$TR_STRS[strtolower('Syndicate')] = 'RSS �E�X';
		$TR_STRS[strtolower('This component controls the Syndication settings')] = '���ե󱱨� RSS �E�X�]�m';
		$TR_STRS[strtolower('Cache')] = '�w�s';
		$TR_STRS[strtolower('Cache the feed files')] = '�w�s�༽���';
		$TR_STRS[strtolower('Cache Time')] = '�w�s�ɶ�';
		$TR_STRS[strtolower('Cache file will refresh every x seconds')] = '�w�s��󪺨�s�ɶ�(���G��)';
		$TR_STRS[strtolower('# Items')] = '���ؼƶq';
		$TR_STRS[strtolower('Number of Items to syndicate')] = 'RSS �E�X���ؼƶq';
		$TR_STRS[strtolower('Title')] = '���D';
		$TR_STRS[strtolower('Syndication Title')] = 'RSS �E�X���D';
		$TR_STRS[strtolower('Description')] = '�y�z';
		$TR_STRS[strtolower('Syndication Description')] = 'RSS �E�X�y�z';
		$TR_STRS[strtolower('Image to be included in feed')] = '�]�t�b�༽�����Ϥ�';
		$TR_STRS[strtolower('Image Alt')] = '�Ϥ����N�奻';
		$TR_STRS[strtolower('Alt text for image')] = '�Ϥ����N�奻';
		$TR_STRS[strtolower('Limit Text')] = '����奻';
		$TR_STRS[strtolower('Limit the article text to the value indicated below')] = '�ھڤU�����ƭȭ���峹�奻����';
		$TR_STRS[strtolower('Text Length')] = '�奻����';
		$TR_STRS[strtolower('The word length of the article text - 0 will show no text')] = '�峹�奻���r�Ū��� - 0 �N����ܤ��e';
		$TR_STRS[strtolower('Order')] = '����';
		$TR_STRS[strtolower('Order that the items will be displayed')] = '������ܪ�����';
		$TR_STRS[strtolower('Default')] = '�q�{';
		$TR_STRS[strtolower('Frontpage Ordering')] = '�������ئ���';
		$TR_STRS[strtolower('Oldest first')] = '�������';
		$TR_STRS[strtolower('Most recent first')] = '����ϧ�';
		$TR_STRS[strtolower('Title Alphabetical')] = '���D�r������';
		$TR_STRS[strtolower('Title Reverse-Alphabetical')] = '���D�r���ϧ�';
		$TR_STRS[strtolower('Author Alphabetical')] = '�@�̦r������';
		$TR_STRS[strtolower('Author Reverse-Alphabetical')] = '�@�̦r���ϧ�';
		$TR_STRS[strtolower('Most Hits')] = '�I���̦h���b�e';
		$TR_STRS[strtolower('Least Hits')] = '�I���̤֪��b�e';
		$TR_STRS[strtolower('Ordering')] = '���ئ���';
		$TR_STRS[strtolower('Live Bookmarks')] = '�ʺA����(Live Bookmarks)';
		$TR_STRS[strtolower('Activate support for Firefox Live Bookmarks functionality')] = '�E�� Firefox �ʺA����(Live Bookmarks)�\�઺���';
		$TR_STRS[strtolower('Off')] = '��';
		$TR_STRS[strtolower('RSS 0.91')] = 'RSS 0.91';
		$TR_STRS[strtolower('RSS 1.0')] = 'RSS 1.0';
		$TR_STRS[strtolower('RSS 2.0')] = 'RSS 2.0';
		$TR_STRS[strtolower('ATOM 0.3')] = 'ATOM 0.3';
		$TR_STRS[strtolower('Bookmark file')] = '���Ҥ��';
		$TR_STRS[strtolower('Special file name, if empty the default will be used.')] = '���w���W��,�d�ūh�ĥ��q�{�W��.';

		//administrator/components/com_weblinks/weblinks.xml
		$TR_STRS[strtolower('Hits')] = '�I����';
		$TR_STRS[strtolower('Show/Hide the Hits column')] = '���/�����I�����';
		$TR_STRS[strtolower('Link Descriptions')] = '�챵�y�z';
		$TR_STRS[strtolower('Show/Hide the Description text of the Links')] = '���/�����챵�y�z�奻';
		$TR_STRS[strtolower('Icon')] = '�ϼ�';
		$TR_STRS[strtolower('Icon to be used to the left of the url links in Table view')] = '�b�����Ϥ������}�챵������ܪ��ϼ�';

		//administrator/components/com_weblinks/weblinks_item.xml
		$TR_STRS[strtolower('This component shows a listing of Weblinks')] = '��ܺ����챵�C��';
		$TR_STRS[strtolower('Target')] = '�ؼе��f';
		$TR_STRS[strtolower('Target window when the link is clicked')] = '�I���s���ᥴ�}�������ؼе��f';
		$TR_STRS[strtolower('Parent Window With Browser Navigation')] = '�a���s�����ɯ��檺�����f';
		$TR_STRS[strtolower('New Window With Browser Navigation')] = '�a���s�����ɯ��檺�s���f';
		$TR_STRS[strtolower('New Window Without Browser Navigation')] = '���a�s�����ɯ��檺�s���f';

		//administrator/components/com_menus/contact_category_table/contact_category_table.xml
		$TR_STRS[strtolower('Other Categories')] = '�䥦����';
		$TR_STRS[strtolower('When viewing a Category, Show/Hide the list of other Categories')] = '�s���@�Ӥ����ɡA���/���è䥦�����C��';
		
		//administrator/components/com_menus/content_blog_category/content_blog_category.xml
		$TR_STRS[strtolower('Show/Hide the Category Description')] = '���/���ä������y�z';
		$TR_STRS[strtolower('Description Image')] = '�y�z�Ϥ�';
		$TR_STRS[strtolower('Show/Hide image of the Category Description')] = '���/���ä����y�z���Ϥ�';

		//administrator/components/com_menus/content_blog_section/content_blog_section.xml
		$TR_STRS[strtolower('Show/Hide the Section Description')] = '���/���ó椸���y�z';
		$TR_STRS[strtolower('Show/Hide image of the Section Description')] = '���/���ó椸�y�z���Ϥ�';
		$TR_STRS[strtolower('Category List')] = '�����C��';
		$TR_STRS[strtolower('Show/Hide the category list of section')] = '���/���ó椸�������C��';
		$TR_STRS[strtolower('Category Item Count')] = '�����峹��';
		$TR_STRS[strtolower('Show/Hide the item count of category')] = '���/���ä������峹��';
		$TR_STRS[strtolower('Categories per Row')] = '�C�������';
		$TR_STRS[strtolower('Number of categories to display per row')] = '�C����ܪ�������';

		//administrator/components/com_menus/content_category/content_category.xml
		$TR_STRS[strtolower('Table - Content Category')] = '��� - ���e����';
		$TR_STRS[strtolower('Shows a Table view of Content items for a particular Category')] = '���S�w�����H��歷����ܤ��e����';
		$TR_STRS[strtolower('Date Format')] = '����榡';
		$TR_STRS[strtolower('The format of the date displayed, using PHPs strftime Command Format - if left blank it will load the format from your language file')] = '�����ܪ��榡�A�ϥ�PHP�� strftime �R�O�榡 - �p�G�d�Ū��ܡA�N�ϥλy����󤤪�����榡';
		$TR_STRS[strtolower('Date Column')] = '�����';
		$TR_STRS[strtolower('Show/Hide the Date column')] = '���/���ä����';
		$TR_STRS[strtolower('Author Column')] = '�@����';
		$TR_STRS[strtolower('Show/Hide the Author column')] = '���/���ç@����';
		$TR_STRS[strtolower('Hits Column')] = '�I����';
		$TR_STRS[strtolower('Show/Hide the Hits column')] = '���/�����I����';
		$TR_STRS[strtolower('Navigation Bar')] = '�����ɯ��';
		$TR_STRS[strtolower('Show/Hide the Navigation bar')] = '���/���ä����ɯ��';
		$TR_STRS[strtolower('Display Number')] = '��ܼ�';
		$TR_STRS[strtolower('Number of items to be displayed by default')] = '�q�{��������ܼ�';
		$TR_STRS[strtolower('Author')] = '�@��';

		//administrator/components/com_menus/content_section/content_section.xml
		$TR_STRS[strtolower('Table - Content Section')] = '��� - ���e�椸';
		$TR_STRS[strtolower('Creates a listing of Content categories for a particular section')] = '���S�w���椸�Ыؤ��e�����C��';
		$TR_STRS[strtolower('Item List of Category')] = '�����峹�C��';
		$TR_STRS[strtolower('Show/Hide the item list of category')] = '���/���ä������峹�C��';
		$TR_STRS[strtolower('Item Count')] = '�C��峹��';
		$TR_STRS[strtolower('The number of items to display in the item list of category(default is 5)')] = '�����峹�C��n��ܪ��峹�ƶq(�q�{�O5)';
		$TR_STRS[strtolower('Item List of Section')] = '�椸�峹�C��';
		$TR_STRS[strtolower('Show/Hide the item list of section')] = '���/���ó椸���峹�C��';

		//administrator/components/com_menus/newsfeed_category_table/newsfeed_category_table.xml
		$TR_STRS[strtolower('A small image to be placed to the left or right of your menu item, images must be in /images')] = '�@�Ӥp�Ϥ��A��b��涵������Υk��A�Ϥ������b�ؿ� /images ��';
		$TR_STRS[strtolower('Articles Column')] = '�峹����';
		$TR_STRS[strtolower('Show/Hide the Articles column')] = '���/���ä峹����';

		//administrator/components/com_menus/wrapper/wrapper.xml
		$TR_STRS[strtolower('Width')] = '�e��';
		$TR_STRS[strtolower('Height')] = '����';

		//administrator/components/com_menus all XML files' name and description
		$TR_STRS[strtolower('Link - Component Item')] = '�챵 - �ե����';
		$TR_STRS[strtolower('Creates a link to an existing Mambo Component')] = '�Ыؤ@���챵��{�����Ҫi�ե�';
		$TR_STRS[strtolower('Component')] = '�ե�';
		$TR_STRS[strtolower('Displays the frontend interface for a Component')] = '���ե���ܫe�x�ɭ�';
		$TR_STRS[strtolower('Table - Contact Category')] = '��� - �pô�H����';
		$TR_STRS[strtolower('Shows a Table view of Contact items for a particular Category')] = '�H���覡��ܤ@�ӯS�w�������pô�H����';
		$TR_STRS[strtolower('Link - Contact Item')] = '�챵 - �pô�H����';
		$TR_STRS[strtolower('Creates a link to a Published Contact Item')] = '�Ыؤ@���챵��@�Ӥw�o�G���pô�H����';
		$TR_STRS[strtolower('Blog - Content Category')] = '�իȭ��� - ���e����';
		$TR_STRS[strtolower('Displays a page of content items from multiple categories in a blog format')] = '�H�իȭ���b�@�ӭ�������ܦh�Ӥ��������e����';
		$TR_STRS[strtolower('Blog - Content Section')] = '�իȭ��� - ���e�椸';
		$TR_STRS[strtolower('Displays a page of content items from multiple sections in a blog format')] = '�H�իȭ���b�@�ӭ�������ܦh�ӳ椸�����e����';
		$TR_STRS[strtolower('Table - Content Category')] = '��� - ���e����';
		$TR_STRS[strtolower('Shows a Table view of Content items for a particular Category')] = '�H��歷����ܤ@�ӯS�w���������e����';
		$TR_STRS[strtolower('Link - Content Item')] = '�챵 - ���e����';
		$TR_STRS[strtolower('Creates a link to a published Content Item in full view')] = '�Ыؤ@���챵��@�Ӥw�o�G�����e���ءA��ܥ���';
		$TR_STRS[strtolower('Table - Content Section')] = '��� - ���e�椸';
		$TR_STRS[strtolower('Creates a listing of Content categories for a particular section')] = '�H��歷����ܤ@�ӯS�w�椸�����e����';
		$TR_STRS[strtolower('Link - Static Content')] = '�챵 - �R�A���e';
		$TR_STRS[strtolower('Creates a link to Static Content Item')] = '�Ыؤ@���챵���R�A���e����';
		$TR_STRS[strtolower('Table - Newsfeed Category')] = '��� - �s�D�༽����';
		$TR_STRS[strtolower('Shows a Table view of Newsfeed items for a particular Category')] = '�H��歷����ܤ@�ӯS�w�������s�D�༽����';
		$TR_STRS[strtolower('Link - Newsfeed')] = '�챵 - �s�D�༽';
		$TR_STRS[strtolower('Creates a link to an individual Published Newsfeed')] = '�Ыؤ@���챵��@�Ӥw�o�G���s�D�༽����';
		$TR_STRS[strtolower('Separator / Placeholder')] = '���j�� / �����';
		$TR_STRS[strtolower('Creates a menu placeholder or separator')] = '�إߤ@�ӵ�����ũΤ��j��';
		$TR_STRS[strtolower('Link - Url')] = '�챵 - ���}';
		$TR_STRS[strtolower('Creates url link')] = '�Ыغ��}�챵';
		$TR_STRS[strtolower('Table - Weblink Category')] = '��� - �����챵����';
		$TR_STRS[strtolower('Shows a Table view of Weblink items for a particular Weblink Category')] = '�H��歷����ܤ@�ӯS�w�����챵�����������챵����';
		$TR_STRS[strtolower('Wrapper')] = '�O�J����';
		$TR_STRS[strtolower('Creates an IFrame that will wrap an external page/site into Mambo')] = '�Ыؤ@�� Iframe�A�]�ˤ@�ӥ~������/�����i�J�Ҫi����';

		$TR_STRS[strtolower('Mamhoo')] = '�Ҫ�';
		$TR_STRS[strtolower('Mamhoo User Manager')] = '�Ҫ�Τ�޲z';
		$TR_STRS[strtolower('Mamhoo User Extended Config')] = '�Ҫ�Τ��X�i�]�m';
		$TR_STRS[strtolower('Install/Uninstall Mamhooks')] = '�w��/�����Ҫ�_�l';
		$TR_STRS[strtolower('About Mamhoo')] = '����Ҫ�';

	}


}

?>