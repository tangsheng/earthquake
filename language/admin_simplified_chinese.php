<?php
/**
* @version $Id: admin_simplified_chinese.php,v 1.9 2008/04/21 11:27:52 lang3 Exp $
* @package Mambors
* @copyright (C) 2004 - 2007 Mambochina.net
* @license http://www.gnu.org/copyleft/gpl.html GNU/GPL
* Mambors is Free Software based on Mambo
* Powered By mambochina.net & mambors.org
*/

/** ensure this file is being included by a parent file */
defined( '_VALID_MOS' ) or die( '��ֱֹ�ӷ��ʱ��ļ���' );

// Language and Encode of admin language
DEFINE('_A_LANGUAGE','zh_CN');
DEFINE('_A_ISO','charset=gb2312');

// needed for $alt text in toolbar item
DEFINE('_A_CANCEL','ȡ��'); 
DEFINE('_A_SAVE','����'); 
DEFINE('_A_APPLY','Ӧ��'); 
DEFINE('_A_CLOSE','�ر�'); 
DEFINE('_A_COPY','����'); 
DEFINE('_A_MOVE','�ƶ�'); 
DEFINE('_A_DELETE','ɾ��'); 
DEFINE('_A_NEXT','��һ��'); 
DEFINE('_A_BACK','����'); 
DEFINE('_A_DEFAULT','Ĭ��'); 
DEFINE('_A_RESTORE','�ָ�');

/**
* @location /../includes/mambo.php
* @desc Includes translations of several droplists and non-translated stuff
*/

//Droplist
DEFINE('_A_TOP','����');
DEFINE('_A_ALL','ȫ��');
DEFINE('_A_NONE','��');
DEFINE('_A_SELECT_IMAGE','ѡ��ͼƬ');
DEFINE('_A_NO_USER','û���û�');
DEFINE('_A_CREATE_CAT','�����ȴ���һ������');
DEFINE('_A_PARENT_BROWSER_NAV','�����ڣ������������');
DEFINE('_A_NEW_BROWSER_NAV','�´��ڣ������������');
DEFINE('_A_NEW_W_BROWSER_NAV','�´��ڣ��������������');

//Alt Hover
DEFINE('_A_PENDING','������');
DEFINE('_A_VISIBLE','���ӵ�');
DEFINE('_A_FINISHED','�ѽ���');
DEFINE('_A_MOVE_UP','����');
DEFINE('_A_MOVE_DOWN','����');


/**
* @desc Includes the main adminLanguage class which refers to var's for translations
*/
class adminLanguage {

var $RTLsupport = false;

var $A_MAIL = '����';

//templates/mambo_admin_blue/login.php
var $A_USERNAME = '�û���';
var $A_PASSWORD = '����';
var $A_WELCOME_MAMBO = '<p>��ӭʹ��Mambo��</p><p>��ʹ����Ч���û�������������¼�����̨</p>';
var $A_WARNING_JAVASCRIPT = '�����棡 Javascript ���ܱ���򿪣����ܽ��������Ĺ��������';

//templates/mambo_admin_blue/index.php
var $A_LOGIN = '��¼';
var $A_GENERATE_TIME = 'ҳ������ʱ�䣺%f ��';
var $A_LOGOUT = '�˳�';

//popups/contentwindow.php
var $A_TITLE_CPRE = '����Ԥ��';
var $A_CLOSE = '�ر�';
var $A_PRINT = '��ӡ';

//popups/modulewindow.php
var $A_TITLE_MPRE = 'ģ��Ԥ��';

//popups/pollwindow.php
var $A_TITLE_PPRE = '���ߵ���Ԥ��';
var $A_VOTE = 'ͶƱ';
var $A_RESULTS = '���';

//popups/uploadimage.php
var $A_TITLE_UPLOAD = '�ϴ��ļ�';
var $A_FILE_UPLOAD = '�ļ��ϴ�';
var $A_UPLOAD = '�ϴ�';
var $A_FILE_MAX_SIZE = '����ļ���С'; //Ken ADDED

//modules/mod_components.php
var $A_ERROR = '����';

//modules/mod_fullmenu.php
var $A_MENU_HOME = '��ҳ';
var $A_MENU_HOME_PAGE = '�����̨��ҳ';
var $A_MENU_CTRL_PANEL = '�������'; //KEN ADDED
var $A_MENU_SITE = '��վ';
var $A_MENU_SITE_MENU = '��վ�˵�';
var $A_MENU_SITE_MANAGEMENT = '��վ����'; //KEN ADDED
var $A_MENU_CONFIGURATION = '����';
var $A_MENU_LANGUAGES = '����';
var $A_MENU_MANAGE_LANG = '��������';
var $A_MENU_LANG_MANAGE = '���Թ���';
var $A_MENU_INSTALL = '��װ';
var $A_MENU_INSTALL_LANG = '��װ����';
var $A_MENU_MEDIA_MANAGE = 'ý�����';
var $A_MENU_MANAGE_MEDIA = '����ý���ļ�';
var $A_MENU_PREVIEW = 'Ԥ��';
var $A_MENU_NEW_WINDOW = '���´��ڴ�';
var $A_MENU_INLINE = 'Ƕ�봰��';
var $A_MENU_INLINE_POS = 'Ƕ�봰�ڣ�λ�ã�';
var $A_MENU_STATISTICS = 'ͳ��';
var $A_MENU_STATISTICS_SITE = '��վͳ��';
var $A_MENU_BROWSER = '�����������ϵͳ����';
var $A_MENU_PAGE_IMP = 'ҳ�����';
var $A_MENU_SEARCH_TEXT = '�����ı�';
var $A_MENU_TEMP_MANAGE = 'ģ�����';
var $A_MENU_TEMP_CHANGE = '������վģ��';
var $A_MENU_INSTALL_TEMPLATES = '��װ��վģ��';//KEN ADDED
var $A_MENU_SITE_TEMP = '��վģ��';
var $A_MENU_ADMIN_TEMP = '�����̨ģ��';
var $A_MENU_ADMIN_CHANGE_TEMP = '���������̨ģ��';
var $A_MENU_INSTALL_ADMIN_TEMPLATES = '��װ��̨ģ��';//KEN ADDED
var $A_MENU_MODUL_POS = 'ģ��λ��';
var $A_MENU_TEMP_POS = 'ģ��λ��';
var $A_MENU_USER_MANAGE = '�û�����';
var $A_MENU_MANAGE_USER = '�����û�';
var $A_MENU_ADD_EDIT = '����/�༭�û�';
var $A_MENU_MASS_MAIL = 'Ⱥ���ʼ�';
var $A_MENU_MAIL_USERS = '�����ʼ���һ���û���һ���û�';
var $A_MENU_MANAGE_STR = '������վ�ṹ';
var $A_MENU_MANAGEMENT = '�˵�����';//KEN ADDED
var $A_MENU_CONTENT = '����';
var $A_MENU_CONTENT_MANAGE = '���ݹ���';
var $A_MENU_CONTENT_MANAGERS = '���ݹ���';
var $A_MENU_CONTENT_BY_SECTION = '��Ԫ����'; //KEN ADDED
var $A_MENU_MANAGE_CONTENT = '����������Ŀ';
var $A_MENU_ITEMS = '��Ŀ';
var $A_MENU_ADDNEDIT = '����/�༭';
var $A_MENU_OTHER_MANAGE = '��������';
var $A_MENU_ITEMS_FRONT = '������ҳ��Ŀ';
var $A_MENU_ITEMS_CONTENT = '����̬������Ŀ';
var $A_MENU_CONTENT_SEC = '�������ݵ�Ԫ';
var $A_MENU_CONTENT_CAT = '�������ݷ���';
var $A_MENU_CATEGORIES = '����';
var $A_MENU_COMPONENTS = '���';
var $A_MENU_COMPONENTS_MANAGEMENT = '�������';
var $A_MENU_INST_UNST = '��װ/ж��';
var $A_MENU_INST_UNST_COMPONENTS = '��װ/ж�����';
var $A_MENU_MORE_COMP = '�������';
var $A_MENU_MORE_COMP2 = '�������...';//KEN ADDED
var $A_MENU_MODULES = 'ģ��';
var $A_MENU_INST_UNST_MODULES = '��װ/ж��ģ��';//KEN ADDED
var $A_MENU_MODULES_MANAGEMENT = 'ģ�����'; //KEN ADDED
var $A_MENU_INSTALL_CUST = '��װ����ģ��';
var $A_MENU_SITE_MOD = '��վģ��';
var $A_MENU_SITE_MOD_MANAGE = '������վģ��';
var $A_MENU_ADMIN_MOD = '��̨ģ��';
var $A_MENU_ADMIN_MOD_MANAGE = '�����̨ģ��';
var $A_MENU_MAMBOTS = '������';
var $A_MENU_INST_UNST_MAMBOTS = '��װ/ж�ش�����';//KEN ADDED
var $A_MENU_MAMBOTS_MANAGE = '����������'; //KEN ADDED
var $A_MENU_CUSTOM_MAMBOT = '��װ���ƴ�����';
var $A_MENU_SITE_MAMBOT = '��վ������';
var $A_MENU_SITE_MAMBOTS = '��վ������';
var $A_MENU_MAMBOT_MANAGE = '������վ������';
var $A_MENU_INSTALLERS = '��װ';//KEN ADDED
var $A_MENU_INSTALLERS_LIST = '��װ�б�';//KEN ADDED
var $A_MENU_TEMPLATES_SITE = 'ģ�� - ��վ';//KEN ADDED
var $A_MENU_TEMPLATES_SITE_INST = '��װ��վģ��';//KEN ADDED
var $A_MENU_TEMPLATES_ADMIN = 'ģ�� - ��̨';//KEN ADDED
var $A_MENU_TEMPLATES_ADMIN_INST = '��װ��̨ģ��';//KEN ADDED
var $A_MENU_MESSAGES = '����';
var $A_MENU_MESSAGES_MANAGEMENT = '��Ϣ����';//KEN ADDED
var $A_MENU_INBOX = '�ռ���';
var $A_MENU_PRIV_MSG = 'վ�ڶ���';
var $A_MENU_GLOBAL_CHECK = 'ȫ���Ż�';
var $A_MENU_CHECK_INOUT = '�Ż�����ȡ������Ŀ';
var $A_MENU_SYSTEM_INFO = 'ϵͳ��Ϣ';
var $A_MENU_CLEAN_CACHE = '��ջ���';
var $A_MENU_CLEAN_CACHE_ITEMS = '���������Ŀ����';
var $A_MENU_BIG_THANKS = '���ĸ�л������';
var $A_MENU_SUPPORT = '֧��';
var $A_MENU_SYSTEM = 'ϵͳ';
var $A_MENU_SYSTEM_MNG = 'ϵͳ����';

//modules/mod_latest.php
var $A_LATEST_ADDED = '�������������';

//modules/mod_logged.php
var $A_USER_LOGGED = '��ǰ��¼�û�';
var $A_USER_FORCE_LOGOUT = 'ǿ�Ƶǳ��û�';

//modules/mod_online.php
var $A_ONLINE_USERS = '�����û�';

//modules/mod_popular.php
var $A_POPULAR_MOST = '������Ŀ';
var $A_CREATED = '����';
var $A_HITS = '���';

//modules/mod_quickicon.php
var $A_MENU_MANAGER = '�˵�����';
var $A_FRONTPAGE_MANAGER = '��ҳ����';
var $A_STATIC_MANAGER = '��̬���ݹ���';
var $A_SECTION_MANAGER = '��Ԫ����';
var $A_CATEGORY_MANAGER = '�������';
var $A_ALL_MANAGER = '������Ŀ����';
var $A_GLOBAL_CONF = 'ȫ������';
var $A_HELP = '����';

//includes/menubar.html.php
var $A_NEW = '����';
var $A_PUBLISH = '����';
var $A_DEFAULT = 'Ĭ��';
var $A_ASSIGN = '����';
var $A_UNPUBLISH = 'ȡ������';
var $A_EDIT = '�༭';
var $A_DELETE = 'ɾ��';
var $A_SAVE = '����';
var $A_BACK = '����';
var $A_CANCEL = 'ȡ��';

//Alerts
var $A_ALERT_SELECT_TO = '����б���ѡ����Ŀ��';
var $A_ALERT_SELECT_PUB = '����б���ѡ����Ŀ������';
var $A_ALERT_SELECT_PUB_LIST = '����б���ѡ����Ŀ����ΪĬ��';
var $A_ALERT_ITEM_ASSIGN = '��ѡ����Ŀ������';
var $A_ALERT_SELECT_UNPUBLISH = '����б���ѡ����Ŀ��ȡ������';
var $A_ALERT_SELECT_EDIT = '����б���ѡ����Ŀ���༭';
var $A_ALERT_SELECT_DELETE = '����б���ѡ����Ŀ��ɾ��';
var $A_ALERT_CONFIRM_DELETE = 'ȷ��ɾ��ѡ�е���Ŀ��';

//Alerts
var $A_ALERT_ENTER_PASSWORD = '����������'; 
var $A_ALERT_INCORRECT = '��Ч���û������������ʼ���������';
var $A_ALERT_INCORRECT_TRY = '��Ч���û��������룬������';
var $A_ALERT_ALPHA = '�ļ���ֻ�ܰ�����ĸ�����֣������пո�';
var $A_ALERT_IMAGE_UPLOAD = '��ѡ��ͼƬ���ϴ�';
var $A_ALERT_IMAGE_EXISTS = "ͼƬ %s �Ѿ�����";
var $A_ALERT_IMAGE_FILENAME = '�ļ����ͱ����� gif, png, jpg, bmp, swf, doc, xls �� ppt';
var $A_ALERT_UPLOAD_FAILED = "�ϴ� %s ʧ��";
var $A_ALERT_UPLOAD_SUC = "�ϴ� %s �� %s �ɹ�";
var $A_ALERT_UPLOAD_SUC2 = "�ϴ� %s �� %s �ɹ�";

//includes/pageNavigation.php
var $A_OF = '/'; 
var $A_NO_RECORD_FOUND = 'û���ҵ���¼';
var $A_FIRST_PAGE = '��һҳ';
var $A_PREVIOUS_PAGE = '��һҳ';
var $A_NEXT_PAGE = '��һҳ';
var $A_END_PAGE = '���һҳ';
var $A_PREVIOUS = '��һҳ';
var $A_NEXT = '��һҳ';
var $A_END = '���һҳ';
var $A_DISPLAY = '��ʾ';
var $A_MOVE_UP = '����';
var $A_MOVE_DOWN = '����';

//DIRECTORY COMPONENTS ALL FILES
var $A_COMP_CHECKED_OUT = 'ȡ��';
var $A_COMP_TITLE = '����';
var $A_COMP_IMAGE = 'ͼƬ';
var $A_COMP_FRONT_PAGE = '��ҳ';
var $A_COMP_IMAGE_POSITION = 'ͼƬλ��';
var $A_COMP_FILTER = 'ɸѡ';
var $A_COMP_ORDERING = '��ʾ����';
var $A_COMP_ACCESS_LEVEL = '���ʼ���';
var $A_COMP_PUBLISHED = '����';
var $A_COMP_PUBLISH = '����';
var $A_COMP_UNPUBLISHED = 'δ����';
var $A_COMP_UNPUBLISH = 'ȡ������';
var $A_COMP_REORDER = '��������';
var $A_COMP_ORDER = '����';
var $A_COMP_SAVE_ORDER = '�������';
var $A_COMP_ACCESS = '����';
var $A_COMP_SECTION = '��Ԫ';
var $A_COMP_NB = '���';
var $A_COMP_ACTIVE = '���Ŀ';
var $A_COMP_DESCRIPTION = '����';
var $A_COMP_SELECT_MENU_TYPE = '��ѡ��˵�����';
var $A_COMP_ENTER_MENU_NAME = '������˵�������';
var $A_COMP_CREATE_MENU_LINK = 'ȷ�ϴ������ӵ��˵��� \n�κζ�δ����ĸ��Ľ���ʧ��';
var $A_COMP_LINK_TO_MENU = '���ӵ��˵�';
var $A_COMP_CREATE_MENU = '������ѡ��Ĳ˵��ϴ����µĲ˵���';
var $A_COMP_SELECT_MENU = 'ѡ��˵�';
var $A_COMP_MENU_TYPE_SELECT = 'ѡ��˵�����';
var $A_COMP_MENU_NAME_ITEM = '�˵�������';
var $A_COMP_MENU_LINKS = '���еĲ˵�����';
var $A_COMP_MENU_LINKS_AVAIL = '�����˵����ӾͿ���';
var $A_COMP_NONE = '��';
var $A_COMP_MENU = '�˵�';
var $A_COMP_TYPE = '����';
var $A_COMP_EDIT = '�༭';
var $A_COMP_NEW = '����';
var $A_COMP_ADD = '����';
var $A_COMP_ITEM_NAME = '��Ŀ����';
var $A_COMP_STATE = '״̬';
var $A_COMP_NAME = '����';
var $A_COMP_DEFAULT = 'Ĭ��';
var $A_COMP_CATEG = '����';
var $A_COMP_LINK_USER = '�����û�';
var $A_COMP_CONTACT = '��ϵ��';
var $A_COMP_EMAIL = 'E-mail';
var $A_COMP_PREVIEW = 'Ԥ��';
var $A_COMP_ITEMS = '��Ŀ';
var $A_COMP_ITEM = '��Ŀ';
var $A_COMP_ID = 'ID';
var $A_COMP_EXPIRED = '����';
var $A_COMP_YES = '��';
var $A_COMP_NO = '��';
var $A_COMP_EDITING = '�༭';
var $A_COMP_ADDING = '����';
var $A_COMP_HITS = '���';
var $A_COMP_SOURCE = 'Դ�ļ�';
var $A_COMP_SEL_ITEM = 'ѡ����Ŀ��';
var $A_COMP_DATE = '����';
var $A_COMP_AUTHOR = '����';
var $A_COMP_ANOTHER_ADMIN = '���ڱ���������Ա�༭��';
var $A_COMP_SAVE_UNWRT = '����������ļ�Ϊ��д';
var $A_COMP_OVERRIDE_SAVE = '����ʱԽ��д����';
var $A_COMP_ORDER_SAVED = '�µĴ����ѱ���';
var $A_COMP_NO_PARAMETERS = 'û�в���';
var $A_COMP_POSITION = 'λ��';
var $A_COMP_SHOW_ADV_DETAILS = '��ʾ�߼���ϸ';
var $A_COMP_HIDE_ADV_DETAILS = '���ظ߼���ϸ';

//components/com_admin/admin.admin.html.php
var $A_COMP_ADMIN_HOME = '��ҳ';
var $A_COMP_ADMIN_SIMP_MODE = '��ģʽ';
var $A_COMP_ADMIN_SIMP_MODE_SELECTED = '��ģʽ (��ѡ)';
var $A_COMP_ADMIN_SIMP_MODE_UNSELECTED = '��ģʽ (δѡ)';
var $A_COMP_ADMIN_ADV_MODE = '�߼�ģʽ';
var $A_COMP_ADMIN_ADV_MODE_SELECTED = '�߼�ģʽ (��ѡ)';
var $A_COMP_ADMIN_ADV_MODE_UNSELECTED = '�߼�ģʽ (δѡ)';
//var $A_COMP_ADMIN_TITLE = '�������';
var $A_COMP_ADMIN_INFO = '��Ϣ';
var $A_COMP_ADMIN_SYSTEM = 'ϵͳ��Ϣ';
var $A_COMP_ADMIN_PHP_BUILT_ON = 'PHPϵͳ������';
var $A_COMP_ADMIN_DB = '���ݿ�汾��';
var $A_COMP_ADMIN_PHP_VERSION = 'PHP�汾��';
var $A_COMP_ADMIN_SERVER = 'Web��������';
var $A_COMP_ADMIN_SERVER_TO_PHP = 'Web��������PHP�Ľӿڣ�';
var $A_COMP_ADMIN_MAMBO_VERSION = 'Mambo �汾��';
var $A_COMP_ADMIN_AGENT = '�ͻ��ˣ�';
var $A_COMP_ADMIN_SETTINGS = '��ص�PHP���ã�';
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
var $A_COMP_ADMIN_WYSIWYG = '���ӻ��༭��:';
var $A_COMP_ADMIN_CONF_FILE = 'Mambo�����ļ���';
var $A_COMP_ADMIN_PHP_INFO2 = 'PHP��Ϣ';
var $A_COMP_ADMIN_PHP_INFO = 'PHP��Ϣ';
var $A_COMP_ADMIN_PERMISSIONS='Ȩ��';
var $A_COMP_ADMIN_DIR_PERM = 'Ŀ¼Ȩ��';
var $A_COMP_ADMIN_FOR_ALL = 'Ϊ��ȫ����Mambo�Ĺ��ܺ����ԣ��뽫����Ŀ¼��Ϊ��д��';
var $A_COMP_ADMIN_CREDITS = '����';
var $A_COMP_ADMIN_APP = 'Ӧ��ϵͳ';
var $A_COMP_ADMIN_URL = '��ַ';
var $A_COMP_ADMIN_VERSION = '�汾';
var $A_COMP_ADMIN_LICENSE = '���';
var $A_COMP_ADMIN_CALENDAR = '����';
var $A_COMP_ADMIN_PUB_DOMAIN = '������';
var $A_COMP_ADMIN_ICONS = 'ͼ��';
var $A_COMP_ADMIN_INDEX = '����';
var $A_COMP_ADMIN_SITE_PREVIEW = '��վԤ��';
var $A_COMP_ADMIN_OPEN_NEW_WIN = '���´��ڴ�';

//components/com_admin/admin.admin.php
var $A_COMP_ALERT_NO_LINK = '����Ŀû�й���������';

//components/com_banners/admin.banners.html.php
var $A_COMP_BANNERS_MANAGER = '���������';
var $A_COMP_BANNERS_NAME = '����������';
var $A_COMP_BANNERS_IMPRESS_MADE = '�������';
var $A_COMP_BANNERS_IMPRESS_LEFT = 'ʣ�������';
var $A_COMP_BANNERS_CLICKS = '���';
var $A_COMP_BANNERS_CLICKS2 = '���%';
var $A_COMP_BANNERS_PUBLISHED = '����';
var $A_COMP_BANNERS_LOCK = 'ȡ��';
var $A_COMP_BANNERS_PROVIDE = '��������������ơ�';
var $A_COMP_BANNERS_SELECT_IMAGE = '��ѡ��ͼƬ��';
var $A_COMP_BANNERS_FILL_URL = '��������������ַ��';
var $A_COMP_BANNERS_BANNER = '������';
var $A_COMP_BANNERS_DETAILS = '��ϸ';
var $A_COMP_BANNERS_CLIENT = '�ͻ�����';
var $A_COMP_BANNERS_PURCHASED = '����������';
var $A_COMP_BANNERS_UNLIMITED = '������';
var $A_COMP_BANNERS_URL = '��������ַ';
var $A_COMP_BANNERS_SHOW = '��ʾ������';
var $A_COMP_BANNERS_CLICK_URL = 'Ŀ����ַ';
var $A_COMP_BANNERS_CUSTOM = '���ƺ��������';
var $A_COMP_BANNERS_RESET_CLICKS = '���������';
var $A_COMP_BANNERS_IMAGE = '������ͼƬ';
var $A_COMP_BANNERS_CLIENT_MANAGER = '������ͻ�����';
var $A_COMP_BANNERS_NO_ACTIVE = '����ĺ�������';
var $A_COMP_BANNERS_FILL_CL_NAME = '������ͻ����ơ�';
var $A_COMP_BANNERS_FILL_CO_NAME = '��������ϵ�ˡ�';
var $A_COMP_BANNERS_FILL_CO_EMAIL = '������Email��';
var $A_COMP_BANNERS_TITLE_CLIENT = '������ͻ�';
var $A_COMP_BANNERS_CONTACT_NAME = '��ϵ��';
var $A_COMP_BANNERS_CONTACT_EMAIL = 'Email';
var $A_COMP_BANNERS_EXTRA = '��ע';

//components/com_banners/admin.banners.php
var $A_COMP_BANNERS_SELECT_CLIENT = 'ѡ��ͻ�';
var $A_COMP_BANNERS_THE_CLIENT = '�ͻ� [ ';
var $A_COMP_BANNERS_EDITED = ' ] ���ڱ���������Ա�༭��';
var $A_COMP_BANNERS_DEL_CLIENT = '�޷�ɾ���ͻ�����Ϊ�������������ĺ�����';

//components/com_categories/admin.categories.html.php
var $A_COMP_CATEG_MANAGER = '������� <small><small>[ ����: ȫ�� ]</small></small>';
var $A_COMP_CATEG_CATEGS = '������� <small><small>[ %s ]</small></small>';
var $A_COMP_CATEG_NAME = '��������';
var $A_COMP_CATEG_ID = '�������';
var $A_COMP_CATEG_MUST_NAME = '�������������';
var $A_COMP_CATEG_DETAILS = '������ϸ';
var $A_COMP_CATEG_TITLE = '�������';
var $A_COMP_CATEG_TABLE = '�����б�';
var $A_COMP_CATEG_BLOG = '����Blog���';
var $A_COMP_CATEG_MESSAGE = '����';
var $A_COMP_CATEG_MESSAGE2 = '���ڱ���������Ա�༭��';
var $A_COMP_CATEG_MOVE = '�ƶ�����';
var $A_COMP_CATEG_MOVE_TO_SECTION = '�ƶ�����Ԫ';
var $A_COMP_CATEG_BEING_MOVED = '�ƶ��ķ���';
var $A_COMP_CATEG_CONTENT = '�ƶ���������Ŀ';
var $A_COMP_CATEG_MOVE_CATEG = '���ƶ����еķ���';
var $A_COMP_CATEG_ALL_ITEMS = '�Լ������е�������Ŀ��Ҳ�������еģ�';
var $A_COMP_CATEG_TO_SECTION = '��ָ���ĵ�Ԫ��';
var $A_COMP_CATEG_COPY = '���Ʒ���';
var $A_COMP_CATEG_COPY_TO_SECTION = '���Ƶ���Ԫ';
var $A_COMP_CATEG_BEING_COPIED = 'Ҫ���Ƶķ���';
var $A_COMP_CATEG_ITEMS_COPIED = '���Ƶ�������Ŀ';
var $A_COMP_CATEG_COPY_CATEGS = '���������еķ���';

//components/com_categories/admin.categories.php
var $A_COMP_CATEG_DELETE = 'ѡ��Ҫɾ���ķ���';
var $A_COMP_CATEG_CATEG_S = '����';
var $A_COMP_CATEG_CANNOT_REMOVE = '�޷�ɾ����������������¼';
var $A_COMP_CATEG_SELECT = 'ѡ�������';
var $A_COMP_CATEG_ITEM_MOVE = 'ѡ����Ŀ���ƶ�';
var $A_COMP_CATEG_MOVED_TO = '�����ƶ���';
var $A_COMP_CATEG_COPY_OF = '����';
var $A_COMP_CATEG_COPIED_TO = '���ิ�Ƶ�';
var $A_COMP_CATEG_SELECT_TYPE = 'ѡ������';
var $A_COMP_CATEG_CONTACT_CATEG_TABLE = '��ϵ�˷����б�';
var $A_COMP_CATEG_NEWSFEED_CATEG_TABLE = '����ת�������б�';
var $A_COMP_CATEG_WEBLINK_CATEG_TABLE = '��վ���ӷ����б�';
var $A_COMP_CATEG_CONTENT_CATEG_TABLE = '���ݷ����б�';
var $A_COMP_CATEG_CONTENT_CATEG_BLOG = '���ݷ���Blog���';

//components/com_checkin/admin.checkin.php
var $A_COMP_CHECK_TITLE = 'ȫ���Ż�';
var $A_COMP_CHECK_DB_T = '���ݿ���';
var $A_COMP_CHECK_NB_ITEMS = '��Ŀ��';
var $A_COMP_CHECK_IN = '�Ż�';
var $A_COMP_CHECK_TABLE = '�����';
var $A_COMP_CHECK_DONE = 'ȡ������Ŀ��ȫ���Ż�';

//components/com_config/admin.config.html.php
var $A_COMP_CONF_GC = 'ȫ������';
var $A_COMP_CONF_IS = 'Ϊ';
var $A_COMP_CONF_WRT = '��д';
var $A_COMP_CONF_UNWRT = '����д';
//var $A_COMP_CONF_SITE_PAGE = 'site-page';
var $A_COMP_CONF_OFFLINE = '��վ����';
var $A_COMP_CONF_OFFMESSAGE = '������Ϣ';
var $A_COMP_CONF_OFFMESSAGE_TIP = '��վ����ʱ��ʾ����Ϣ';
var $A_COMP_CONF_ERR_MESSAGE = 'ϵͳ������Ϣ';
var $A_COMP_CONF_ERR_MESSAGE_TIP = 'Mambo�޷��������ݿ�ʱ��ʾ����Ϣ';
var $A_COMP_CONF_SITE_NAME = '��վ����';
var $A_COMP_CONF_UN_LINKS = '��ʾδ��Ȩ������';
var $A_COMP_CONF_UN_LINKS_TIP = '����Ȩ��ע���û��Ķ������ݵ����ӣ���ʾ��δ��¼�û�����ֻ���û���¼������Ķ�ȫ�ġ�';
var $A_COMP_CONF_USER_REG = '�����û�ע��';
var $A_COMP_CONF_USER_REG_TIP = '�����û��Լ�ע��';
var $A_COMP_CONF_AC_ACT = 'ʹ���ʻ�����';
var $A_COMP_CONF_AC_ACT_TIP = '�û�ע��󣬽��յ������ʼ���ͨ���������Ӽ����ʻ���Ȼ����ܵ�¼.';
var $A_COMP_CONF_REQ_EMAIL = 'Ҫ��Ψһ��Email';
var $A_COMP_CONF_REQ_EMAIL_TIP = '�û�����ʹ����ͬ�� email ��ַ��ע��';
var $A_COMP_CONF_REG_SUBMIT = '����ע���û���������';
var $A_COMP_CONF_REG_SUBMIT_TIP = '����ע���û���ǰ̨��������';
var $A_COMP_CONF_DEBUG = '������վ';
var $A_COMP_CONF_DEBUG_TIP = '��ʾ���������Ϣ��SQL������Ϣ������������Ա������';
var $A_COMP_CONF_EDITOR = '���ӻ��༭��';
var $A_COMP_CONF_LENGTH = '�б���Ŀ��';
var $A_COMP_CONF_LENGTH_TIP = '�����̨Ĭ�ϵ��б���ʾ��Ŀ��';
var $A_COMP_CONF_SITE_ICON = '��վͼ��';
var $A_COMP_CONF_SITE_ICON_TIP = '������ջ��ļ������ڣ���ʹ��ϵͳĬ�ϵ�favicon.ico.';
//var $A_COMP_CONF_LOCAL_PG = 'Locale-page';
var $A_COMP_CONF_LOCALE = '����';
var $A_COMP_CONF_LANG = 'ǰ̨����';
var $A_COMP_CONF_ALANG = '��̨����';
var $A_COMP_CONF_TIME_SET = 'ʱ��';
var $A_COMP_CONF_DATE = '��ǰ����/ʱ��';
var $A_COMP_CONF_LOCAL = '���Ҵ���';
//var $A_COMP_CONF_CONT_PAGE = 'content-page';
var $A_COMP_CONF_CONTROL = '* ���в����������ݵ���ʾ��ʽ *';
var $A_COMP_CONF_LINK_TITLES = '���ӱ���';
var $A_COMP_CONF_MORE_LINK = '�Ķ�ȫ������';
var $A_COMP_CONF_MORE_LINK_TIP = '��������Ŀ������ʱ����ʾ�Ķ�ȫ������';
var $A_COMP_CONF_RATE_VOTE = '��Ŀ����/ͶƱ';
var $A_COMP_CONF_RATE_VOTE_TIP = '����ͶƱ��������Ŀ';
var $A_COMP_CONF_AUTHOR = '��������';
var $A_COMP_CONF_AUTHOR_TIP = '��ʾ�������ƣ�����ȫ�����ã��������ڲ˵�����Ŀ������и��ġ�';
var $A_COMP_CONF_CREATED = '�������ں�ʱ��';
var $A_COMP_CONF_CREATED_TIP = '��ʾ������Ŀ�Ĵ������ں�ʱ�䣬����ȫ�����ã��������ڲ˵�����Ŀ������и��ġ�';
var $A_COMP_CONF_MOD_DATE = '�޸����ں�ʱ��';
var $A_COMP_CONF_MOD_DATE_TIP = '��ʾ������Ŀ���޸����ں�ʱ�䣬����ȫ�����ã��������ڲ˵�����Ŀ������и��ġ�';
var $A_COMP_CONF_HITS = '���';
var $A_COMP_CONF_HITS_TIP = '��ʾ������Ŀ�ĵ���Ķ���������ȫ�����ã��������ڲ˵�����Ŀ������и��ġ�';
var $A_COMP_CONF_PDF = 'PDFͼ��';
var $A_COMP_CONF_OPT_MEDIA = 'ѡ����ã���Ϊ/media Ŀ¼����д';
var $A_COMP_CONF_PRINT_ICON = '��ӡͼ��';
var $A_COMP_CONF_EMAIL_ICON = 'Emailͼ��';
var $A_COMP_CONF_ICONS = 'ͼ��';
var $A_COMP_CONF_USE_OR_TEXT = '��ӡ������PDF�ͷ���Email ��ͼ����ı�';
var $A_COMP_CONF_TBL_CONTENTS = '��ҳ������Ŀ���';
var $A_COMP_CONF_BACK_BUTTON = '���ذ�ť';
var $A_COMP_CONF_CONTENT_NAV = '������Ŀ����';
var $A_COMP_CONF_HYPER = 'ʹ�ó����ӱ���';
//var $A_COMP_CONF_DB_PAGE = 'db-page';
var $A_COMP_CONF_HOSTNAME = '������';
var $A_COMP_CONF_DB_USERNAME = '�û���';
var $A_COMP_CONF_DB_PW = '����';
var $A_COMP_CONF_DB_NAME = '���ݿ�';
var $A_COMP_CONF_DB_PREFIX = '���ݱ�ǰ׺';
//Svar $A_COMP_CONF_S_PAGE = 'server-page';
var $A_COMP_CONF_ABS_PATH = '����·��';
var $A_COMP_CONF_LIVE = '��վ��ַ';
var $A_COMP_CONF_SECRET = '�����ı�';
var $A_COMP_CONF_GZIP = '�� GZIP ѹ��ҳ��';
var $A_COMP_CONF_CP_BUFFER = '���ϵͳ֧�ֵĻ���ѹ���������';
var $A_COMP_CONF_SESSION_TIME = 'session�Ựʱ��';
var $A_COMP_CONF_SEC = '��';
var $A_COMP_CONF_AUTO_LOGOUT = '��ʱ�������û�л���Զ��˳���¼';
var $A_COMP_CONF_ERR_REPORT = '���󱨸�';
var $A_COMP_CONF_REG_GLOBALS_EMU = 'Register Globals ģ�⣺';
var $A_COMP_CONF_REG_GLOBALS_EMU_DESC = 'Register globals ģ�⣬�������Ϊ Off �Ļ�����Щ���Ҳ���ֹͣ������';
var $A_COMP_CONF_HELP_SERVER = '����������';
var $A_COMP_CONF_FILE_CREATION = '�ļ�����';
var $A_COMP_CONF_FILE_PERM = '�ļ�Ȩ��';
var $A_COMP_CONF_FILE_DONT_CHMOD = '���ı����ļ���Ȩ�� (ʹ�÷�����Ĭ��ֵ)';
var $A_COMP_CONF_FILE_CHMOD = '�ı����ļ���Ȩ��';
var $A_COMP_CONF_FILE_CHMOD_TIP = '���´������ļ�����Ȩ�ޱ�־';
var $A_COMP_CONF_APPLY_FILE = 'Ӧ�õ������ļ�';
var $A_COMP_CONF_APPLY_FILE_TIP = 'Ӧ��Ȩ�ޱ�־����վ��<em>���������ļ�</em>��<br/><b>���ʵ���ʹ�ý��������վʧЧ��</b>';
var $A_COMP_CONF_DIR_CREATION = 'Ŀ¼����';
var $A_COMP_CONF_DIR_PERM = 'Ŀ¼Ȩ��';
var $A_COMP_CONF_DIR_DONT_CHMOD = '���ı���Ŀ¼��Ȩ�� (ʹ�÷�����Ĭ��ֵ)';
var $A_COMP_CONF_DIR_CHMOD = '�ı���Ŀ¼��Ȩ��';
var $A_COMP_CONF_DIR_CHMOD_TIP = '���´�����Ŀ¼����Ȩ�ޱ�־';
var $A_COMP_CONF_APPLY_DIR = 'Ӧ�õ�����Ŀ¼';
var $A_COMP_CONF_APPLY_DIR_TIP = 'Ӧ��Ȩ�ޱ�־����վ��<em>��������Ŀ¼</em>��<br/><b>���ʵ���ʹ�ý��������վʧЧ��</b>';
var $A_COMP_CONF_USER = '������';
var $A_COMP_CONF_GROUP = '��';
var $A_COMP_CONF_WORLD = '����';
var $A_COMP_CONF_READ = '��ȡ';
var $A_COMP_CONF_WRITE = 'д��';
var $A_COMP_CONF_EXECUTE = 'ִ��';
var $A_COMP_CONF_SEARCH = '����';
//var $A_COMP_CONF_META_PAGE = 'metadata-page';
var $A_COMP_CONF_META_DESC = '��վȫ��Ԫ����';
var $A_COMP_CONF_META_KEY = '��վȫ��Ԫ�ؼ���';
var $A_COMP_CONF_META_TITLE = '��ʾ����Ԫ��ǩ';
var $A_COMP_CONF_META_ITEMS = '���������Ŀʱ��ʾ����Ԫ��ǩ';
var $A_COMP_CONF_META_AUTHOR = '��ʾ����Ԫ��ǩ';
var $A_COMP_CONF_META_AUTHOR_TIP = '���������Ŀʱ��ʾ����Ԫ��ǩ';
//var $A_COMP_CONF_MAIL_PAGE = 'mail-page';
var $A_COMP_CONF_MAIL = '�ʼ�����';
var $A_COMP_CONF_MAIL_FROM = '������Email��ַ';
var $A_COMP_CONF_MAIL_FROM_NAME = '����������';
var $A_COMP_CONF_MAIL_SENDMAIL_PATH = 'Sendmail·��';
var $A_COMP_CONF_MAIL_SMTP_AUTH = 'SMTP��֤';
var $A_COMP_CONF_MAIL_SMTP_USER = 'SMTP�û�';
var $A_COMP_CONF_MAIL_SMTP_PASS = 'SMTP����';
var $A_COMP_CONF_MAIL_SMTP_HOST = 'SMTP����';
//var $A_COMP_CONF_CACHE_PAGE = 'cache-page';
var $A_COMP_CONF_CACHE = 'ʹ�û���';
var $A_COMP_CONF_CACHE_FOLDER = '����Ŀ¼';
var $A_COMP_CONF_CACHE_DIR = '��ǰ����Ŀ¼Ϊ';
var $A_COMP_CONF_CACHE_DIR_UNWRT = '����Ŀ¼Ϊ����д����ʹ�û��湦��֮ǰ�����ô�Ŀ¼ΪCHMOD755';
var $A_COMP_CONF_CACHE_TIME = '����ʱ��';
//var $A_COMP_CONF_STATS_PAGE = 'stats-page';
var $A_COMP_CONF_STATS = 'ͳ��';
var $A_COMP_CONF_STATS_ENABLE = '����/��ֹ�ռ���վͳ����Ϣ';
var $A_COMP_CONF_STATS_LOG_HITS = '�����ڼ�¼���ݵ��';
var $A_COMP_CONF_STATS_WARN_DATA = '���棺�������ݽ����ռ�';
var $A_COMP_CONF_STATS_LOG_SEARCH = '��¼�����ı�';
//var $A_COMP_CONF_SEO_PAGE = 'seo-page';
var $A_COMP_CONF_SEO_LBL = '���������Ż�';
var $A_COMP_CONF_SEO = '���������Ż�';
var $A_COMP_CONF_SEO_SEFU = '���������Ѻ�����';
var $A_COMP_CONF_SEO_APACHE = 'ֻ������Apache������! ����ǰ�Ȱ� htaccess.txt ����Ϊ .htaccess';
var $A_COMP_CONF_SEO_DYN = '��̬ҳ�����';
var $A_COMP_CONF_SEO_DYN_TITLE = '��̬����ҳ����⣬�����ñ��ֵ�ǰ������';
var $A_COMP_CONF_SERVER = '������';
var $A_COMP_CONF_METADATA = 'Ԫ����';
var $A_COMP_CONF_EMAIL = '�ʼ�';
var $A_COMP_CONF_CACHE_TAB = '����';

//components/com_config/admin.config.php
var $A_COMP_CONF_HIDE = '����';
var $A_COMP_CONF_SHOW = '��ʾ';
var $A_COMP_CONF_DEFAULT = 'ϵͳĬ��';
var $A_COMP_CONF_NONE = '��';
var $A_COMP_CONF_SIMPLE = '��';
var $A_COMP_CONF_MAX = '���';
var $A_COMP_CONF_MAIL_FC = 'PHP�ʼ�����';
var $A_COMP_CONF_SEND = 'Sendmail';
var $A_COMP_CONF_SMTP = 'SMTP������';
var $A_COMP_CONF_UPDATED = '�����ѱ����£�';
var $A_COMP_CONF_ERR_OCC = '���������޷��������ļ���д�룡';

//components/com_contact/admin.contact.html.php
var $A_COMP_CONT_MANAGER = '��ϵ�˹���';
var $A_COMP_CONT_FILTER = 'ɸѡ';
var $A_COMP_CONT_YOUR_NAME = '�����������ơ�';
var $A_COMP_CONT_CATEG = '��ѡ����ࡣ';
var $A_COMP_CONT_DETAILS = '��ϵ����ϸ';
var $A_COMP_CONT_POSITION = 'ְλ';
var $A_COMP_CONT_ADDRESS = '��ַ';
var $A_COMP_CONT_TOWN = '����';
var $A_COMP_CONT_STATE = 'ʡ��';
var $A_COMP_CONT_COUNTRY = '����';
var $A_COMP_CONT_POSTAL_CODE = '�ʱ�';
var $A_COMP_CONT_TEL = '�绰';
var $A_COMP_CONT_FAX = '����';
var $A_COMP_CONT_INFO = '��ע';
//var $A_COMP_CONT_PUBLISH = 'publish-page';
var $A_COMP_CONT_PUBLISHING = '����';
var $A_COMP_CONT_SITE_DEFAULT = '��վĬ��';
//var $A_COMP_CONT_IMG_PAGE = 'images-page';
var $A_COMP_CONT_IMG_INFO = 'ͼƬ';
var $A_COMP_CONT_PARAMS = '����';
var $A_COMP_CONT_PARAMETERS = '����';
var $A_COMP_CONT_PARAM_MESS = '* ���в���������ϵ�˵���ϸ��ʾ *';
var $A_COMP_CONT_PUB_TAB = '����';
var $A_COMP_CONT_IMG_TAB = 'ͼƬ';

//components/com_contact/admin.contact.php
var $A_COMP_CONT_SELECT_REC = 'ѡ���¼��';

//components/com_content/admin.content.html.php
var $A_COMP_CONTENT_ITEMS_MNG = '������Ŀ����';
var $A_COMP_CONTENT_ALL_ITEMS = '������Ŀ����';
var $A_COMP_CONTENT_START_ALWAYS = '��ʼ������';
var $A_COMP_CONTENT_START = '��ʼ';
var $A_COMP_CONTENT_FIN_NOEXP = '������û�й���';
var $A_COMP_CONTENT_FINISH = '����';
var $A_COMP_CONTENT_PUBLISH_INFO = '������Ϣ';
var $A_COMP_CONTENT_MANAGER = '����';
var $A_COMP_CONTENT_ZERO = 'ȷ�����õ����Ϊ0��\n�κ�δ����ĸ��Ľ���ʧ��';
var $A_COMP_CONTENT_MUST_TITLE = '������Ŀ�����������';
var $A_COMP_CONTENT_MUST_NAME = '������Ŀ��������';
var $A_COMP_CONTENT_MUST_SECTION = '����ѡ��Ԫ��';
var $A_COMP_CONTENT_MUST_CATEG = '����ѡ����ࡣ';
var $A_COMP_CONTENT_ITEMS = '������Ŀ';
var $A_COMP_CONTENT_IN = '������';
var $A_COMP_CONTENT_TITLE_ALIAS = '�������';
var $A_COMP_CONTENT_ITEM_DETAILS = '��Ŀ��ϸ';
var $A_COMP_CONTENT_INTRO = 'ժҪ��(����)';
var $A_COMP_CONTENT_MAIN = '���ģ�(��ѡ)';
var $A_COMP_CONTENT_PUB_INFO = '����';
var $A_COMP_CONTENT_FRONTPAGE = '��ʾ����ҳ';
var $A_COMP_CONTENT_AUTHOR = '���߱���';
var $A_COMP_CONTENT_CREATOR = '���Ĵ�����';
var $A_COMP_CONTENT_OVERRIDE = '���Ĵ���ʱ��';
var $A_COMP_CONTENT_START_PUB = '��ʼ����ʱ��';
var $A_COMP_CONTENT_FINISH_PUB = '��������ʱ��';
var $A_COMP_CONTENT_ID = '������ĿID';
var $A_COMP_CONTENT_DRAFT_UNPUB = 'δ�����Ĳݸ�';
var $A_COMP_CONTENT_RESET_HIT = '���õ����';
var $A_COMP_CONTENT_REVISED = '�޸�';
var $A_COMP_CONTENT_TIMES = '����';
var $A_COMP_CONTENT_CREATED = '����';
var $A_COMP_CONTENT_BY = '��';
var $A_COMP_CONTENT_NEW_DOC = '���ĵ�';
var $A_COMP_CONTENT_LAST_MOD = '�����޸�';
var $A_COMP_CONTENT_NOT_MOD = 'δ�޸�';
var $A_COMP_CONTENT_MOSIMAGE = 'MamboͼƬ����';
var $A_COMP_CONTENT_SUB_FOLDER = '��Ŀ¼';
var $A_COMP_CONTENT_GALLERY = 'ͼ��ͼƬ';
var $A_COMP_CONTENT_IMAGES = '����ͼƬ';
var $A_COMP_CONTENT_UP = '����';
var $A_COMP_CONTENT_DOWN = '����';
var $A_COMP_CONTENT_REMOVE = 'ɾ��';
var $A_COMP_CONTENT_EDIT_IMAGE = '�༭ѡ���ͼƬ';
var $A_COMP_CONTENT_IMG_ALIGN = 'ͼƬ����';
var $A_COMP_CONTENT_ALIGN = '����';
var $A_COMP_CONTENT_ALT = '����ı�';
var $A_COMP_CONTENT_BORDER = '�߿�';
var $A_COMP_CONTENT_IMG_CAPTION = '����';
var $A_COMP_CONTENT_IMG_CAPTION_POS = '����λ��';
var $A_COMP_CONTENT_IMG_CAPTION_ALIGN = '��������';
var $A_COMP_CONTENT_IMG_WIDTH = 'ͼƬ���';
var $A_COMP_CONTENT_APPLY = 'Ӧ��';
var $A_COMP_CONTENT_PARAM = '��������';
var $A_COMP_CONTENT_PARAM_MESS = '* ���в���ֻ������Ŀ��ϸ��ʾ *';
var $A_COMP_CONTENT_META_DATA = 'Ԫ����';
var $A_COMP_CONTENT_KEYWORDS = '�ؼ���';
//var $A_COMP_CONTENT_LINK_PAGE = 'link-page';
var $A_COMP_CONTENT_LINK_CI = '�⽫��ѡ��Ĳ˵��д���һ�� \'�˵��� - ������Ŀ\' ������';
var $A_COMP_CONTENT_LINK_NAME = '��������';
var $A_COMP_CONTENT_SOMETHING = '��ѡ��';
var $A_COMP_CONTENT_MOVE_ITEMS = '�ƶ���Ŀ';
var $A_COMP_CONTENT_MOVE_SECCAT = '�ƶ�����Ԫ/����';
var $A_COMP_CONTENT_ITEMS_MOVED = '�ƶ�����Ŀ';
var $A_COMP_CONTENT_SECCAT = '��ѡ��Ԫ/����';
var $A_COMP_CONTENT_COPY_ITEMS = '����������Ŀ';
var $A_COMP_CONTENT_COPY_SECCAT = '���Ƶ���Ԫ/����';
var $A_COMP_CONTENT_ITEMS_COPIED = '���Ƶ���Ŀ';
var $A_COMP_CONTENT_PUBLISHING = '����';
var $A_COMP_CONTENT_IMAGES2 = 'ͼƬ';
var $A_COMP_CONTENT_META_INFO = 'Ԫ����';
var $A_COMP_CONTENT_ADD_ETC = '���뵥Ԫ/����/����';
var $A_COMP_CONTENT_LINK_TO_MENU = '���ӵ��˵�';
var $A_COMP_CONTENT_EDIT_CONTENT = '�༭����';
var $A_COMP_CONTENT_EDIT_STATIC = '�༭��̬����';
var $A_COMP_CONTENT_EDIT_SECTION = '�༭��Ԫ';
var $A_COMP_CONTENT_EDIT_CATEGORY = '�༭����';
var $A_COMP_CONTENT_EDIT_USER = '�༭�û�';
//components/com_content/admin.content.php
var $A_COMP_CONTENT_CACHE = '���������';
var $A_COMP_CONTENT_MODULE = 'ģ��';
var $A_COMP_CONTENT_ANOTHER = '���ڱ���������Ա�༭��';
var $A_COMP_CONTENT_PUBLISHED = '��Ŀ�ɹ�����';
var $A_COMP_CONTENT_UNPUBLISHED = '��Ŀ�ɹ�ȡ������';
var $A_COMP_CONTENT_SEL_TOG = 'ѡ����Ŀ����';
var $A_COMP_CONTENT_SEL_DEL = 'ѡ����Ŀ��ɾ��';
var $A_COMP_CONTENT_SUCCESS_DEL = '��Ŀ�ɹ�ɾ��';
var $A_COMP_CONTENT_SEL_MOVE = 'ѡ����Ŀ���ƶ�';
var $A_COMP_CONTENT_MOVED = '��Ŀ�ɹ��ƶ�����Ԫ';
var $A_COMP_CONTENT_ERR_OCCURRED = '��������';
var $A_COMP_CONTENT_COPIED = '��Ŀ�ɹ����Ƶ���Ԫ';
var $A_COMP_CONTENT_RESET_HIT_COUNT = '�ɹ����õ����';
var $A_COMP_CONTENT_IN_MENU = '(�˵��� - ��̬����) ����';
var $A_COMP_CONTENT_SUCCESS = '�ɹ�����';
var $A_COMP_CONTENT_SELECT_CAT = 'ѡ�����';
var $A_COMP_CONTENT_SELECT_SEC = 'ѡ��Ԫ';

//components/com_content/toolbar.content.html.php
var $A_COMP_CONTENT_BAR_MOVE = '�ƶ�';
var $A_COMP_CONTENT_BAR_COPY = '����';
var $A_COMP_CONTENT_BAR_SAVE = '����';

//components/com_frontpage/admin.frontpage.html.php
var $A_COMP_FRONT_PAGE_MNG = '��ҳ����';
//var $A_COMP_FRONT_PAGE_ITEMS = '��ҳ��Ŀ';
var $A_COMP_FRONT_ORDER = '����';

//components/com_frontpage/admin.frontpage.php
var $A_COMP_FRONT_COUNT_NUM = '���� count ����������';
var $A_COMP_FRONT_INTRO_NUM = '���� intro ����������';
var $A_COMP_FRONT_WELCOME = '��ӭ����';
var $A_COMP_FRONT_IDONOT = 'û������';

//components/com_frontpage/toolbar.frontpage.html.php
var $A_COMP_FRONT_REMOVE = '�Ƴ�';

//components/com_languages/admin.languages.html.php
var $A_COMP_LANG_INSTALL = '���Թ��� <small><small>[ ��վ ]</small></small>';
var $A_COMP_LANG_LANG = '����';
var $A_COMP_LANG_EMAIL = '���� Email';
var $A_COMP_LANG_EDITOR = '���Ա༭��';
var $A_COMP_LANG_FILE = '�ļ�����';

//components/com_languages/admin.languages.php
var $A_COMP_LANG_UPDATED = '���óɹ����£�';
var $A_COMP_LANG_M_SURE = '���� ��ȷ�� configuration.php Ϊ��д��';
var $A_COMP_LANG_CANNOT = '����ɾ������ʹ�õ����ԡ�';
var $A_COMP_LANG_FAILED_OPEN = '����ʧ�ܣ��޷���';
var $A_COMP_LANG_FAILED_SPEC = '����ʧ�ܣ�û��ָ�������ԡ�';
var $A_COMP_LANG_FAILED_EMPTY = '����ʧ�ܣ�û������';
var $A_COMP_LANG_FAILED_UNWRT = '����ʧ�ܣ��ļ�����д��';
var $A_COMP_LANG_FAILED_FILE = '����ʧ�ܣ��޷����ļ���д�롣';

//components/com_mambots/admin.mambots.html.php
var $A_COMP_MAMB_ADMIN = '����';
var $A_COMP_MAMB_SITE = '��վ';
var $A_COMP_MAMB_MANAGER = '����������';
var $A_COMP_MAMB_NAME = '����������';
var $A_COMP_MAMB_FILE = '�ļ�';
var $A_COMP_MAMB_MUST_NAME = '������������������';
var $A_COMP_MAMB_MUST_FNAME = '���������������ļ�����';
var $A_COMP_MAMB_DETAILS = '��������ϸ';
var $A_COMP_MAMB_FOLDER = 'Ŀ¼';
var $A_COMP_MAMB_MFILE = '�������ļ�';
var $A_COMP_MAMB_ORDER = '����������';

//components/com_mambots/admin.mambots.php
var $A_COMP_MAMB_EDIT = '���ڱ���������Ա�༭��';
var $A_COMP_MAMB_DEL = 'ѡ�񴥷�����ɾ��';
var $A_COMP_MAMB_TO = 'ѡ�񴥷���';
var $A_COMP_MAMB_PUB = '����';
var $A_COMP_MAMB_UNPUB = 'ȡ������';
var $A_COMP_MAMB_SAVED_CHANGES = '�ɹ����津�����ı��: '; //KEN ADDED
var $A_COMP_MAMB_SAVED = '�ɹ����津����: '; //KEN ADDED
var $A_COMP_MAMB_ORDERING = '�µ���ĿĬ������������д����������Ŀ����������'; //KEN ADDED
var $A_COMP_MAMB_ORDERING_SAVED = '�ɹ����津����: '; //KEN ADDED

//components/com_massmail/admin.massmail.html.php
var $A_COMP_MASS_SUBJECT = '����������';
var $A_COMP_MASS_SELECT_GROUP = '��ѡ��Ⱥ��';
var $A_COMP_MASS_MESSAGE = '����������';
var $A_COMP_MASS_MAIL = 'Ⱥ���ʼ�';
var $A_COMP_MASS_GROUP = 'Ⱥ��';
var $A_COMP_MASS_DETAILS = '��ϸ'; //KEN ADDED
var $A_COMP_MASS_CHILD = '���ʼ�����Ⱥ��';
var $A_COMP_MASS_HTML = 'ʹ�� HTML ��ʽ����'; //KEN ADDED
var $A_COMP_MASS_SUB = '����';
var $A_COMP_MASS_MESS = '����';

//components/com_massmail/toolbar.massmail.html.php
var $A_COMP_MASS_SEND = '����';

//components/com_massmail/admin.massmail.php
var $A_COMP_MASS_ALL = '- �����û�Ⱥ�� -';
var $A_COMP_MASS_FILL = '����ȷ��д��';
var $A_COMP_MASS_SENT = '�ռ���E-mail';
var $A_COMP_MASS_USERS = '�û�';

//components/com_media/admin.media.html.php
var $A_COMP_MEDIA_MG = 'ý�����';
var $A_COMP_MEDIA_DIR = 'Ŀ¼';
var $A_COMP_MEDIA_UP = '����';
var $A_COMP_MEDIA_UPLOAD = '�ϴ�';
var $A_COMP_MEDIA_UPLOAD_MAX = '���';
var $A_COMP_MEDIA_CODE = '����';
var $A_COMP_MEDIA_CDIR = '����Ŀ¼';
var $A_COMP_MEDIA_PROBLEM = '��������';
var $A_COMP_MEDIA_EXIST = '�����ڡ�';
var $A_COMP_MEDIA_DEL = 'ɾ��';
var $A_COMP_MEDIA_INSERT = '�ڴ������ı�';
var $A_COMP_MEDIA_DEL_FILE = "ɾ���ļ� \"+file+\"?";
var $A_COMP_MEDIA_DEL_ALL = "�� \"+numFiles+\" ���ļ�/Ŀ¼�� \"+folder+\"������ɾ�� \"+folder+\"�е������ļ�/Ŀ¼  ��";
var $A_COMP_MEDIA_DEL_FOLD = "ɾ��Ŀ¼ \"+folder+\"?";
var $A_COMP_MEDIA_NO_IMG = 'û��ͼƬ��';

//components/com_media/admin.media.php
var $A_COMP_MEDIA_NO_HACK = '�벻Ҫ�޸�';
var $A_COMP_MEDIA_DIR_SAFEMODE = 'Ŀ¼��ֹ������ϵͳ����ΪSAFE MODEģʽ���ᵼ�����⡣';
var $A_COMP_MEDIA_ALPHA = 'Ŀ¼����ֻ�ܰ�����ĸ�����֣������пո�';
var $A_COMP_MEDIA_FAILED = '�ϴ�ʧ�ܡ��ļ��Ѿ�����';
var $A_COMP_MEDIA_ONLY = 'ֻ������Ϊ gif, png, jpg, bmp, pdf, swf, doc, xls ���� ppt ���ļ������ϴ�';
var $A_COMP_MEDIA_UP_FAILED = '�ϴ�ʧ��';
var $A_COMP_MEDIA_UP_COMP = '�ϴ����';
var $A_COMP_MEDIA_NOT_EMPTY = '<font color="red">�޷�ɾ��: �ǿ�!</font>';//KEN ADDED
//components/com_media/toolbar.media.html.php
var $A_COMP_MEDIA_CREATE = '����';

//components/com_menumanager/admin.menumanager.html.php
var $A_COMP_MENU_NAME = '�˵�����';
var $A_COMP_MENU_TYPE = '�˵�����';
var $A_COMP_MENU_TITLE = 'ģ�����';
var $A_COMP_MENU_ITEMS = '�˵���';//KEN ADDED
var $A_COMP_MENU_PUB = '������';//KEN ADDED
var $A_COMP_MENU_UNPUB = 'δ������';//KEN ADDED
var $A_COMP_MENU_MODULES = 'ģ����';//KEN ADDED
var $A_COMP_MENU_EDIT_NAME = '�༭�˵�����';//KEN ADDED
var $A_COMP_MENU_EDIT_ITEM = '�༭�˵���';//KEN ADDED
var $A_COMP_MENU_ID = 'ģ�����';
var $A_COMP_MENU_TIPS = '����Mamboʹ�õļ������ƣ�����Դ����ʶ��˲˵� - ����ΪΨһֵ�������ڲ˵������в�Ҫ���κοհ��ַ�';//KEN ADDED
var $A_COMP_MENU_TIPS2 = 'mod_mainmenu ģ�����ʾ���⣬������';//KEN ADDED
var $A_COMP_MENU_TIPS3 = '* һ���µ� mod_mainmenu ģ�飬�����㱣��˲˵�ʱ�Զ�������ʹ��������ı���Ϊ���⡣ *<br/><br/>�½�ģ��Ĳ�����ͨ�� "ģ����� [��վ]": ģ�� -> ��վģ�� ���༭';//KEN ADDED
var $A_COMP_MENU_ASSIGN = 'û��ģ����䵽�˵�';
var $A_COMP_MENU_ENTER = '������˵�����';
var $A_COMP_MENU_ENTER_TYPE = '������˵�����';
var $A_COMP_MENU_ENTER_TITLE = '������˵���ģ������';
var $A_COMP_MENU_DETAILS = '�˵���ϸ';
var $A_COMP_MENU_MAINMENU = '���˵�ģ�飬����˲˵�ʱ����ͬ�����ƽ��Զ�����/���¡�';
var $A_COMP_MENU_DEL = 'ɾ���˵�';
var $A_COMP_MENU_MODULE_DEL = 'ɾ���Ĳ˵�/ģ��';
var $A_COMP_MENU_ITEMS_DEL = 'ɾ���Ĳ˵���';
var $A_COMP_MENU_WILL = '* ��';
var $A_COMP_MENU_WILL2 = '�˲˵���<br />�������в˵���͹�����ģ�� *';
var $A_COMP_MENU_YOU_SURE = 'ȷ��ɾ���˲˵���\n��ɾ���˵����˵����ģ�顣';
var $A_COMP_MENU_NAME_MENU = '�����븴�Ʋ˵�������';
var $A_COMP_MENU_NAME_MOD = '��������ģ�������';
var $A_COMP_MENU_COPY = '���Ʋ˵�';
var $A_COMP_MENU_NEW = '�²˵�����';
var $A_COMP_MENU_NEW_MOD = '��ģ������';//KEN ADDED
var $A_COMP_MENU_COPIED = '���ƵĲ˵�';
var $A_COMP_MENU_ITEMS_COPIED = '���ƵĲ˵���';
var $A_COMP_MENU_MOD_MENU = '���˵�ģ�飬����˲˵�ʱ����ͬ�����ƽ��Զ�����/���ġ�';

//components/com_menumanager/admin.menumanager.php
var $A_COMP_MENU_CREATED = '�²˵�������';
var $A_COMP_MENU_UPDATED = '�˵����ģ���Ѹ���';
var $A_COMP_MENU_DETECTED = '�˵�ɾ����';
var $A_COMP_MENU_COPY_OF = '�˵��ĸ���';
var $A_COMP_MENU_CONSIST = '�����ˣ�����';
var $A_COMP_MENU_RENAME_WARNING = '�㲻�������� mainmenu �˵�����Ϊ�⽫�ƻ�Mambo����ȷ����';
var $A_COMP_MENU_EXISTS_WARNING = '���д����ƵĲ˵��Ѿ����� - ���������һ��Ψһ�Ĳ˵�����';

//components/com_menumanager/toolbar.menumanager.html.php
var $A_COMP_MENU_BAR_DEL = 'ɾ��';

//components/com_modules/admin.modules.html.php
var $A_COMP_MOD_MANAGER = 'ģ�����';
var $A_COMP_MOD_NAME = 'ģ������';
var $A_COMP_MOD_POSITION = 'λ��';
var $A_COMP_MOD_PAGES = '����ҳ��';
var $A_COMP_MOD_VARIES = '����';
var $A_COMP_MOD_ALL = 'ȫ��';
var $A_COMP_MOD_USER = '�û�';
var $A_COMP_MOD_MUST_TITLE = 'ģ������б���';
var $A_COMP_MOD_MODULE = 'ģ��';
var $A_COMP_MOD_DETAILS = 'ģ����ϸ';
var $A_COMP_MOD_SHOW_TITLE = '��ʾ����';
var $A_COMP_MOD_ORDER = 'ģ������';
var $A_COMP_MOD_CONTENT = '����';
var $A_COMP_MOD_PAGES_ITEMS = '�˵� / �˵���';
var $A_COMP_MOD_CUSTOM_OUTPUT = '�������';
var $A_COMP_MOD_MOD_POSITION = 'ģ��λ��';
var $A_COMP_MOD_ITEM_LINK = '�˵�������';
var $A_COMP_MOD_TAB_LBL = '����';

//components/com_modules/admin.modules.php
var $A_COMP_MOD_MODULES = 'ģ��';
var $A_COMP_MOD_MOD_COPIED = 'ģ���Ѹ���';//KEN ADDED
var $A_COMP_MOD_SAVED_CHANGES = '�ɹ�����ģ��ĸ���: ';//KEN ADDED
var $A_COMP_MOD_SAVED_MOD = '�ɹ�����ģ��: ';//KEN ADDED
var $A_COMP_MOD_CANNOT = '����ɾ����ֻ��ж�أ���Ϊ��Mambo����ģ�顣';
var $A_COMP_MOD_SELECT_TO = 'ѡ��ģ����';

//components/com_modules/toolbar.modules.html.php
var $A_COMP_MOD_PREVIEW = 'Ԥ��';
var $A_COMP_MOD_PREVIEW_TIP = 'ֻ��Ԥ���Զ���ģ�顣';

//components/com_newsfeeds/admin.newsfeeds.html.php
var $A_COMP_FEED_TITLE = '����ת������';
var $A_COMP_FEED_NEWS = '����ת��';
var $A_COMP_FEED_ARTICLES = '����';
var $A_COMP_FEED_CACHE = '����ʱ��(��)';
var $A_COMP_FEED_EDIT_FEED = '�༭����ת��';//KEN ADDED
var $A_COMP_FEED_FILL_NAME = '����������ת�����ơ�';
var $A_COMP_FEED_SEL_CATEG = '��ѡ����ࡣ';
var $A_COMP_FEED_FILL_LINK = '����������ת�����ӡ�';
var $A_COMP_FEED_FILL_NB = '������������ʾ������';
var $A_COMP_FEED_FILL_REFRESH = '�����뻺�����ʱ�䡣';
var $A_COMP_FEED_LINK = '����';
var $A_COMP_FEED_NB_ARTICLE = '������';
var $A_COMP_FEED_IN_SEC = '����ʱ��(��)';

//components/com_poll/admin.poll.html.php
var $A_COMP_POLL_MANAGER = '���ߵ������';
var $A_COMP_POLL_TITLE = '���ߵ������';
var $A_COMP_POLL_OPTIONS = 'ѡ��';
var $A_COMP_POLL_MUST_TITLE = '���ߵ�������б���';
var $A_COMP_POLL_NON_ZERO = '����ͶƱ֮�������ʱ����';
var $A_COMP_POLL_POLL = '���ߵ���';
var $A_COMP_POLL_SHOW = '�ڲ˵�����ʾ';
var $A_COMP_POLL_LAG = '���';
var $A_COMP_POLL_EDIT = '�༭���ߵ���';//KEN ADDED
var $A_COMP_POLL_BETWEEN = '(����ͶƱ֮���ʱ��������)';

//components/com_poll/admin.poll.php
var $A_COMP_POLL_THE = '���ߵ���';
var $A_COMP_POLL_BEING = '���ڱ���������Ա�༭��';

//components/com_poll/poll.class.php
var $A_COMP_POLL_TRY_AGAIN = 'ģ�������Ѵ��ڣ������ԡ�';

//components/com_sections/admin.sections.html.php
var $A_COMP_SECT_MANAGER = '��Ԫ����';
var $A_COMP_SECT_NAME = '��Ԫ����';
var $A_COMP_SECT_ID = '��Ԫ����';
var $A_COMP_SECT_NB_CATEG = '����';
var $A_COMP_SECT_NEW = '�µ�Ԫ';
var $A_COMP_SECT_SEL_MENU = '��ѡ��˵�';
var $A_COMP_SECT_MUST_NAME = '��Ԫ����������';
var $A_COMP_SECT_MUST_TITLE = '��Ԫ�����б���';
var $A_COMP_SECT_DETAILS = '��Ԫ��ϸ';
var $A_COMP_SECT_SCOPE = '��Χ';
var $A_COMP_SECT_SHORT_NAME = '�ڲ˵���ʾ�ļ��';
var $A_COMP_SECT_LONG_NAME = '�ڱ�����ʾ��ȫ��';
var $A_COMP_SECT_COPY = '���Ƶ�Ԫ';
var $A_COMP_SECT_COPY_TO = '���Ƶ���Ԫ';
var $A_COMP_SECT_NEW_NAME = '�µ�Ԫ����';
var $A_COMP_SECT_WILL_COPY = '���������з���<br />�Լ������е�������Ŀ��Ҳ�������еģ�<br />���µ�Ԫ��';
var $A_COMP_SECT_MENU_LINK = '�����˵����ӾͿ���';//KEN ADDED

//components/com_sections/admin.sections.php
var $A_COMP_SECT_THE = '��Ԫ';
var $A_COMP_SECT_LIST = '��Ԫ�б�';
var $A_COMP_SECT_BLOG = '��ԪBlog���';
var $A_COMP_SECT_DELETE = 'ѡ��Ԫ��ɾ��';
var $A_COMP_SECT_SEC = '��Ԫ';
var $A_COMP_SECT_CANNOT = '����ɾ���������л��з���';
var $A_COMP_SECT_SUCCESS_DEL = '�ɹ�ɾ��';
var $A_COMP_SECT_TO = 'ѡ��Ԫ��';
var $A_COMP_SECT_CANNOT_PUB = '���ܷ����յ�Ԫ';
var $A_COMP_SECT_AND_ALL = '�������з������Ŀ�Ѹ���';
var $A_COMP_SECT_IN_MENU = '�ڲ˵�';
var $A_COMP_SECT_CHANGES_SAVED = '��Ԫ�ĸ����ѱ���';//KEN ADDED
var $A_COMP_SECT_SECTION_SAVED = '��Ԫ�ѱ���';//KEN ADDED

//components/com_statistics/admin.statistics.html.php
var $A_COMP_STAT_OS = '�����������ϵͳ����ͳ��';
var $A_COMP_STAT_BR_PAGE = '�����ͳ��';
var $A_COMP_STAT_BROWSER = '�����';
var $A_COMP_STAT_OS_PAGE = '����ϵͳͳ��';
var $A_COMP_STAT_OP_SYST = '����ϵͳ';
var $A_COMP_STAT_URL_PAGE = '��ͳ��';
var $A_COMP_STAT_URL = '��';
var $A_COMP_STAT_IMPR = 'ҳ�����ͳ��';
var $A_COMP_STAT_PG_IMPR = 'ҳ�����';
var $A_COMP_STAT_SCH_ENG = '�����ı�ͳ��';
var $A_COMP_STAT_LOG_IS = '��¼';
var $A_COMP_STAT_ENABLED = '����';
var $A_COMP_STAT_DISABLED = '����';
var $A_COMP_STAT_SCH_TEXT = '�����ı�';
var $A_COMP_STAT_T_REQ = '��������';
var $A_COMP_STAT_R_RETURN = '���ؽ��';

//components/com_syndicate/admin.syndicate.html.php
var $A_COMP_SYND_SET = 'RSS �ۺ�����';

//components/com_syndicate/admin.syndicate.php
var $A_COMP_SYND_SAVED = '���óɹ�����';

//components/com_templates/admin.templates.html.php
var $A_COMP_TEMP_NO_PREVIEW = 'û�п��õ�Ԥ��';
var $A_COMP_TEMP_INSTALL = '��װ';
var $A_COMP_TEMP_TP = 'ģ��';
var $A_COMP_TEMP_PREVIEW = 'Ԥ��ģ��';
var $A_COMP_TEMP_ASSIGN = '����';
var $A_COMP_TEMP_AUTHOR_URL = '������ַ';
var $A_COMP_TEMP_EDITOR = 'ģ��༭��';
var $A_COMP_TEMP_PATH = '·����templates';
var $A_COMP_TEMP_WRT = ' - ��д';
var $A_COMP_TEMP_UNWRT = ' - ����д';
var $A_COMP_TEMP_ST_EDITOR = 'ģ�� CSS �༭��';
var $A_COMP_TEMP_NAME = '·��';
var $A_COMP_TEMP_ASSIGN_TP = '����ģ��';
var $A_COMP_TEMP_TO_MENU = '���˵���';
var $A_COMP_TEMP_PAGES = 'ҳ��';
var $A_COMP_TEMP_ = 'λ��';

//components/com_templates/admin.templates.php
var $A_COMP_TEMP_CANNOT = '�޷�ɾ������ʹ�õ�ģ�档';
var $A_COMP_TEMP_NOT_OPEN = '����ʧ�ܣ��޷���';
var $A_COMP_TEMP_FLD_SPEC = '����ʧ�ܣ�û��ָ����ģ�档';
var $A_COMP_TEMP_FLD_EMPTY = '����ʧ�ܣ�������';
var $A_COMP_TEMP_FLD_WRT = '����ʧ�ܣ��޷����ļ���д�롣';
var $A_COMP_TEMP_FLD_NOT = '����ʧ�ܣ��ļ�����д��';
var $A_COMP_TEMP_SAVED = 'λ�ñ�����';

//components/com_typedcontent/admin.typedcontent.html.php
var $A_COMP_TYPED_STATIC = '��̬���ݹ���';
var $A_COMP_TYPED_LINKS = '����';
var $A_COMP_TYPED_ARE_YOU = 'ȷ�ϴ����˵����ӵ���̬������Ŀ�� \n�κ�δ����ĸ��Ľ���ʧ��';
var $A_COMP_TYPED_CONTENT = '��̬����';
var $A_COMP_TYPED_TEXT = '���ģ�(����)';
var $A_COMP_TYPED_EXPIRES = '����';
var $A_COMP_TYPED_WILL = '����ѡ�еĲ˵����� \'�˵��� - ��̬����\' ������';
var $A_COMP_TYPED_ITEM = '��̬������Ŀ';

//components/com_typedcontent/admin.typedcontent.php
var $A_COMP_TYPED_SAVED = '��̬������Ŀ�ѱ���';
var $A_COMP_TYPED_CHG_SAVED = '��̬������Ŀ���޸��ѱ���';

//components/com_users/admin.users.html.php
var $A_COMP_USERS_ID = '�û�����';
var $A_COMP_USERS_LOG_IN = '��¼';
var $A_COMP_USERS_LAST = '�������';
var $A_COMP_USERS_BLOCKED = '����';
var $A_COMP_USERS_YOU_MUST = '���������û�����';
var $A_COMP_USERS_YOU_LOGIN = '�û���������Ч�ַ����򳤶Ȳ�����';
var $A_COMP_USERS_MUST_EMAIL = '��������Email��ַ��';
var $A_COMP_USERS_ASSIGN = '��������û���һ��Ⱥ�顣';
var $A_COMP_USERS_NO_MATCH = '���벻ƥ��';
var $A_COMP_USERS_NO_FRONTEND = '��ѡ����һ���飬��Ϊ`Public Frontend`����һ����ѡ���ѡ��';
var $A_COMP_USERS_NO_BACKEND = '��ѡ����һ���飬��Ϊ`Public Backend`����һ����ѡ���ѡ��';
var $A_COMP_USERS_DETAILS = '�û���ϸ';
var $A_COMP_USERS_EMAIL = 'Email';
var $A_COMP_USERS_PASS = '����';
var $A_COMP_USERS_VERIFY = '����ȷ��';
var $A_COMP_USERS_BLOCK = '�����û�';
var $A_COMP_USERS_SUBMI = '����֪ͨ�ʼ�';
var $A_COMP_USERS_REG_DATE = 'ע������';
var $A_COMP_USERS_VISIT_DATE = '�����������';
var $A_COMP_USERS_CONTACT = '��ϵ����Ϣ';
var $A_COMP_USERS_NO_DETAIL = 'û�д��û���������ϵ����Ϣ��<br />�뵽 \'��� -> ��ϵ�� -> ��ϵ�˹���\' ������ϸ��Ϣ��';
var $A_COMP_USERS_CHANGE_CONTACT = '������ϵ����Ϣ';
var $A_COMP_USERS_CONTACT_INFO = '��� -> ��ϵ�� -> ��ϵ�˹���';

//components/com_users/admin.users.php
var $A_COMP_USERS_SUPER_ADMIN = 'Super Administrator';
var $A_COMP_USERS_CANNOT = '����ɾ����������Ա';
var $A_COMP_USERS_NOT_DEL_SELF = '�㲻��ɾ�����Լ���';
var $A_COMP_USERS_NOT_DEL_ADMIN = '�㲻��ɾ������ `Administrator`��ֻ�� `Super Administrators` �������Ȩ��';

//components/com_users/toolbar.users.html.php
var $A_COMP_USERS_LOGOUT = 'ǿ���˳�';

//components/com_weblinks/admin.weblinks.html.php
var $A_COMP_WEBL_MANAGER = '��վ���ӹ���';
var $A_COMP_WEBL_APPROVED = '��׼';
var $A_COMP_WEBL_MUST_TITLE = '��վ������Ŀ�����������';
var $A_COMP_WEBL_MUST_CATEG = '��ѡ�����.';
var $A_COMP_WEBL_MUST_URL = '����������ַ';
var $A_COMP_WEBL_WL = '��վ����';

//components/com_installer/admin.installer.php
var $A_INSTALL_NOT_FOUND = "Ԫ���İ�װ�ļ�δ�ҵ�";
var $A_INSTALL_NOT_AVAIL = "Ԫ���İ�װ�ļ�������";
var $A_INSTALL_ENABLE_MSG = "�ļ��ϴ�����δ���ã���װ�޷���������ʹ�á���Ŀ¼��װ���ķ�������װ��";
var $A_INSTALL_ERROR_MSG_TITLE = '��װ - ����';
var $A_INSTALL_ZLIB_MSG = "zlibδ��װ������װ�޷�������";
var $A_INSTALL_NOFILE_MSG = '��δѡ���ļ�';
var $A_INSTALL_NEWMODULE_ERROR_MSG_TITLE = '�ϴ���ģ�� - ����';
var $A_INSTALL_UPLOAD_PRE = '�ϴ� ';
var $A_INSTALL_UPLOAD_POST = ' - �ϴ�ʧ��';
var $A_INSTALL_UPLOAD_POST2 = ' -  �ϴ�����';
var $A_INSTALL_SUCCESS = '�ɹ�';
var $A_INSTALL_ERROR = '����';
var $A_INSTALL_FAILED = 'ʧ��';
var $A_INSTALL_SELECT_DIR = '��ѡ��Ŀ¼';
var $A_INSTALL_UPLOAD_NEW = '�ϴ���';
var $A_INSTALL_FAIL_PERMISSION = '�޷��ı��ϴ��ļ���Ȩ�ޡ�';
var $A_INSTALL_FAIL_MOVE = '�޷��ƶ��ϴ��ļ���<code>/media</code>Ŀ¼��';
var $A_INSTALL_FAIL_WRITE = '�ϴ�ʧ�� - <code>/media</code> Ŀ¼����д��';
var $A_INSTALL_FAIL_EXIST = '�ϴ�ʧ�� - <code>/media</code> Ŀ¼�����ڡ�';

//components/com_installer/admin.installer.html.php
var $A_INSTALL_WRITABLE = '��д';
var $A_INSTALL_UNWRITABLE = '����д';
var $A_INSTALL_CONTINUE = '���� ...';
var $A_INSTALL_UPLOAD_PACK_FILE = '�ϴ���װ��';
var $A_INSTALL_PACK_FILE = '��װ����';
var $A_INSTALL_UPL_INSTALL = "�ϴ��ļ� &amp; ��װ";
var $A_INSTALL_FROM_DIR = '��Ŀ¼��װ';
var $A_INSTALL_DIR = '��װĿ¼��';
var $A_INSTALL_DO_INSTALL = '��װ';

//components/com_installer/component/component.html.php
var $A_INSTALL_COMP_INSTALLED = '�Ѱ�װ���';
var $A_INSTALL_COMP_CURRENT = '��ǰ�Ѱ�װ';
var $A_INSTALL_COMP_MENU = '����˵�����';
var $A_INSTALL_COMP_AUTHOR = '����';
var $A_INSTALL_COMP_VERSION = '�汾';
var $A_INSTALL_COMP_DATE = '����';
var $A_INSTALL_COMP_AUTH_MAIL = '����Email';
var $A_INSTALL_COMP_AUTH_URL = '������ַ';
var $A_INSTALL_COMP_NONE = '��δ��װ���������';

//components/com_installer/component/component.php
var $A_INSTALL_COMP_UPL_NEW = '�ϴ������';

//components/com_installer/language/language.php
var $A_INSTALL_LANG = '�ϴ�������';
var $A_INSTALL_BACK_LANG_MGR = '�������Թ���';

//components/com_installer/language/language.class.php
var $A_INSTALL_LANG_NOREMOVE = '���Դ���Ϊ�գ��޷�ɾ���ļ���';
var $A_INSTALL_LANG_UN_ERR = 'ж�� - ����';
var $A_INSTALL_LANG_DELETING = 'ɾ��';

//components/com_installer/mambot/mambot.html.php
var $A_INSTALL_MAMB_MAMBOTS = '������';
var $A_INSTALL_MAMB_CORE = 'ֻ��ʾ��Щ����ж�صĴ����� - һЩ���Ĵ���������ɾ����';
var $A_INSTALL_MAMB_MAMBOT = '������';
var $A_INSTALL_MAMB_TYPE = '����';
var $A_INSTALL_MAMB_AUTHOR = '����';
var $A_INSTALL_MAMB_VERSION = '�汾';
var $A_INSTALL_MAMB_DATE = '����';
var $A_INSTALL_MAMB_AUTH_MAIL = '����Email';
var $A_INSTALL_MAMB_AUTH_URL = '������ַ';
var $A_INSTALL_MOD_NO_MAMBOTS = '��δ�зǺ��ġ���������������װ��';

//components/com_installer/mambot/mambot.php
var $A_INSTALL_MAMB_INSTALL_MAMBOT = '��װ������';

//components/com_installer/module/module.html.php
var $A_INSTALL_MOD_MODS = 'ģ��';
var $A_INSTALL_MOD_FILTER = 'ɸѡ��';
var $A_INSTALL_MOD_CORE = 'ֻ��ʾ��Щ����ж�ص�ģ�� - һЩ����ģ�鲻��ɾ����';
var $A_INSTALL_MOD_MOD = 'ģ���ļ�';
var $A_INSTALL_MOD_CLIENT = '�ͻ�';
var $A_INSTALL_MOD_AUTHOR = '����';
var $A_INSTALL_MOD_VERSION = '�汾';
var $A_INSTALL_MOD_DATE = '����';
var $A_INSTALL_MOD_AUTH_MAIL = '����Email';
var $A_INSTALL_MOD_AUTH_URL = '������ַ';
var $A_INSTALL_MOD_NO_CUSTOM = '��δ�е�����ģ�鰲װ��';

//components/com_installer/module/module.php
var $A_INSTALL_MOD_INSTALL_MOD = '��װģ��';
var $A_INSTALL_MOD_ADMIN_MOD = '����ģ��';

//components/com_install/template/template.php
var $A_INSTALL_TEMPL_INSTALL = '��װ��ģ��';
var $A_INSTALL_TEMPL_SITE_TEMPL = '��վģ��';
var $A_INSTALL_TEMPL_ADMIN_TEMPL = '��̨ģ��';
var $A_INSTALL_TEMPL_BACKTTO_TEMPL = '����ģ�����';

//components/com_menus/admin.menus.html.php
var $A_COMP_MENUS_MAX_LVLS = '�����';
var $A_COMP_MENUS_MENU_ITEM = '�˵���';
var $A_COMP_MENUS_MENU_ORDER = '����';//KEN ADDED
var $A_COMP_MENUS_MENU_SAVE_ORDER = '�������';//KEN ADDED
var $A_COMP_MENUS_MENU_ITEMID = '��ĿID';//KEN ADDED
var $A_COMP_MENUS_MENU_CID = '���ID';//KEN ADDED
var $A_COMP_MENUS_MENU_CONTENT = '����';//KEN ADDED
var $A_COMP_MENUS_MENU_MISC = '����';//KEN ADDED
var $A_COMP_MENUS_MENU_NOTE = '* ע����Щ�˵����ͳ����ڶ�����У�������������ͬ�Ĳ˵����͡�';//KEN ADDED
var $A_COMP_MENUS_MENU_COM = '���';//KEN ADDED
var $A_COMP_MENUS_MENU_LINKS = '����';//KEN ADDED
var $A_COMP_MENUS_MENU_ITEM_TYPE = '�˵�������';//KEN ADDED
var $A_COMP_MENUS_MENU_HELP = '����';//KEN ADDED
var $A_COMP_MENUS_MENU_BLOGVIEW = 'ʲô�� "Blog" ��ͼ';//KEN ADDED
var $A_COMP_MENUS_MENU_TABLEVIEW = 'ʲô�� "���" ��ͼ';//KEN ADDED
var $A_COMP_MENUS_MENU_LISTVIEW = 'ʲô�� "�б�" ��ͼ';//KEN ADDED
var $A_COMP_MENUS_ADD_ITEM = '�����˵���';
var $A_COMP_MENUS_SELECT_ADD = 'ѡ�����������';
var $A_COMP_MENUS_MOVE_ITEMS = '�ƶ��˵���';
var $A_COMP_MENUS_MOVE_MENU = '�ƶ����˵�';
var $A_COMP_MENUS_BEING_MOVED = '�ƶ��Ĳ˵���';
var $A_COMP_MENUS_COPY_ITEMS = '���Ʋ˵���';
var $A_COMP_MENUS_NEXT = '��һ��';
var $A_COMP_MENUS_COPY_MENU = '���Ƶ��˵�';
var $A_COMP_MENUS_BEING_COPIED = '���ƵĲ˵���';
var $A_COMP_MENUS_SELECT_TO = '��ѡ��˵�����';
var $A_COMP_MENUS_SEFPATH = 'SEF·��';
var $A_COMP_MENUS_SEFPATH_TIP = '�������������Ѻ����ӵ�·��';

//components/com_menus/admin.menus.php
var $A_COMP_MENUS_ITEM_SAVED = '�˵����ѱ���';//KEN ADDED
var $A_COMP_MENUS_MOVED_TO = ' �˵����ƶ���';
var $A_COMP_MENUS_COPIED_TO = ' �˵���Ƶ�';
var $A_COMP_MENUS_WRAPPER = 'Ƕ��ҳ��';
var $A_COMP_MENUS_SEPERATOR = '�ָ���/ռλ��';
var $A_COMP_MENUS_LINK = '���� - ';
var $A_COMP_MENUS_STATIC = '��̬����';
var $A_COMP_MENUS_URL = '��ַ';
var $A_COMP_MENUS_CONTENT_ITEM = '������Ŀ';
var $A_COMP_MENUS_COMP_ITEM = '�����Ŀ';
var $A_COMP_MENUS_CONT_ITEM = '��ϵ����Ŀ';
var $A_COMP_MENUS_NEWSFEED = '����ת��';
var $A_COMP_MENUS_COMP = '���';
var $A_COMP_MENUS_LIST = '�б�';
var $A_COMP_MENUS_TABLE = '���';
var $A_COMP_MENUS_BLOG = 'Blog���';
var $A_COMP_MENUS_CONT_SEC = '���ݵ�Ԫ';
var $A_COMP_MENUS_CONT_CAT = '���ݷ���';
var $A_COMP_MENUS_CONTACT_CAT = '��ϵ�˷���';
var $A_COMP_MENUS_WEBLINK_CAT = '��վ���ӷ���';
var $A_COMP_MENUS_NEWS_CAT = '����ת������';
var $A_COMP_MENUS_NEW_ORDER_SAVED = '�µĴ����ѱ���';//KEN ADDED
var $A_COMP_MENUS_EDIT_NEWSFEED_TIP = '�༭������ת��';
var $A_COMP_MENUS_EDIT_CONTACT_TIP = '�༭����ϵ��';
var $A_COMP_MENUS_EDIT_CONTENT_TIP = '�༭������';
var $A_COMP_MENUS_EDIT_STATIC_TIP = '�༭�˾�̬����';

//components/com_menus/component_item_link/component_item_link.menu.html.php
var $A_COMP_MENUS_CIL_LINK_NAME = '���ӱ�����������';
var $A_COMP_MENUS_CIL_SELECT_COMP = '����ѡ�����������';
var $A_COMP_MENUS_CIL_LINK_COMP = '���';
var $A_COMP_MENUS_CIL_ON_CLICK = '����򿪷�ʽ';
var $A_COMP_MENUS_CIL_PARENT = '���˵���';
var $A_DETAILS = '��ϸ';

//components/com_menus/components/components.menu.html.php
var $A_COMP_MENUS_CMP_ITEM_NAME = '������������';
var $A_COMP_MENUS_CMP_SELECT_CMP = '��ѡ�����';
var $A_COMP_MENUS_PARAMETERS_AVAILABLE = 'һ��������µĲ˵�����в����Ϳ�����';
var $A_COMP_MENUS_CMP_ITEM_COMP = '�˵��� :: ���';

//components/com_menus/contact_category_table/contact_category_table.menu.html.php
var $A_COMP_MENUS_CMP_CCT_CATEG = '����ѡ�����';
var $A_COMP_MENUS_CMP_CCT_TITLE = '�˵������������';
var $A_COMP_MENUS_CMP_CCT_BLANK = '������գ����Զ�ʹ�÷������ơ�';
var $A_COMP_MENUS_CMP_CCT_THETITLE = '���⣺';
var $A_COMP_MENUS_CMP_CCT_THECAT = '���ࣺ';

//components/com_menus/contact_item_link/contact_item_link.menu.html.php
var $A_COMP_MENUS_CMP_CIL_LINK_NAME = '���ӱ���������';
var $A_COMP_MENUS_CMP_CIL_SEL_CONT = '����ѡ��һ����ϵ�������ӡ�';
var $A_COMP_MENUS_CMP_CIL_CONTACT = '������ϵ��';
var $A_COMP_MENUS_CMP_CIL_ONCLICK = '����򿪷�ʽ';
var $A_COMP_MENUS_CMP_CIL_HDR = '�˵��� :: ���� - ��ϵ��';

//components\com_menus\content_archive_section\content_archive_section.menu.html.php
var $A_COMP_MENUS_CMP_CAS_BLANK = '������գ����Զ�ʹ�õ�Ԫ���ơ�';

//components\com_menus\content_blog_category\content_blog_category.menu.html.php
var $A_COMP_MENUS_CMP_CBC_CATEG = '����ѡ��������';

//components\com_menus\content_blog_section\content_blog_section.menu.html.php
var $A_COMP_MENUS_CMP_CBS_SECTION = '����ѡ������Ԫ';

//components\com_menus\content_item_link\content_item_link.menu.html.php
var $A_COMP_MENUS_CMP_CIL_SEL_LINK = '����ѡ��һ��������Ŀ�����ӡ�';

//components/com_menus/wrapper/wrapper.menu.html.php
var $A_COMP_MENUS_WRAPPER_LINK = 'Ƕ��ҳ����ַ';

//components/com_menus/separator/separator.menu.html.php
var $A_COMP_MENUS_SEPARATOR_PATTERN = 'ģʽ/����';

//components/com_menus/content_typed/content_typed.menu.html.php
var $A_COMP_MENUS_TYPED_CONTENT_TO_LINK = '���Ӿ�̬����';

//components/com_menus/content_item_link/content_item_link.menu.html.php
var $A_COMP_MENUS_CONTENT_TO_LINK = '��������';

//components/com_menus/newsfeed_link/newsfeed_link.menu.html.php
var $A_COMP_MENUS_NEWSFEED_TO_LINK = '��������ת��';
var $A_COMP_MENUS_NEWSFEED_SELECT_LINK = '����ѡ��һ������ת�������ӡ�';

//components\com_menus\url\url.menu.html.php
var $A_COMP_MENUS_URL_MUST = '����������ַ';
var $A_COMP_MENUS_URL_LINK = '������ַ';


	function adminLanguage()
	{
		global $TR_STRS;
		//Menu Caption Translation for initial mambo menutype
		$TR_STRS[strtolower('mainmenu')] = '���˵�';
		$TR_STRS[strtolower('othermenu')] = '�����˵�';
		$TR_STRS[strtolower('topmenu')] = '�����˵�';
		$TR_STRS[strtolower('usermenu')] = '�û��˵�';

		//Components menu caption
		//Banners
		$TR_STRS[strtolower('Banners')] = '������';
		$TR_STRS[strtolower('Manage Banners')] = '���������';
		$TR_STRS[strtolower('Manage Clients')] = '����ͻ�';

		//Web Links
		$TR_STRS[strtolower('Web Links')] = '��վ����';
		$TR_STRS[strtolower('Weblink Items')] = '��վ������Ŀ';
		$TR_STRS[strtolower('Weblink Categories')] = '��վ���ӷ���';

		//Contacts
		$TR_STRS[strtolower('Contacts')] = '��ϵ��';
		$TR_STRS[strtolower('Manage Contacts')] = '������ϵ��';
		$TR_STRS[strtolower('Contact Categories')] = '��ϵ�˷���';

		//Polls
		$TR_STRS[strtolower('Polls')] = '���ߵ���';

		//News Feeds
		$TR_STRS[strtolower('News Feeds')] = '����ת��';
		$TR_STRS[strtolower('Manage News Feeds')] = '��������ת��';
		$TR_STRS[strtolower('Manage Categories')] = '�������';

		//Syndicate
		$TR_STRS[strtolower('Syndicate')] = 'RSS �ۺ�';

		//Mass Mail
		$TR_STRS[strtolower('Mass Mail')] = 'Ⱥ���ʼ�';

		//modules XML file
		$TR_STRS[strtolower('Count')] = '����';
		$TR_STRS[strtolower('The number of items to display (default is 5)')] = '����б���(Ĭ��Ϊ 5)';
		$TR_STRS[strtolower('The number of items to display (default is 10)')] = '����б���(Ĭ��Ϊ 10)';
		$TR_STRS[strtolower('Enable Cache')] = '���û���';
		$TR_STRS[strtolower('Select whether to cache the content of this module')] = '�Ƿ�Ϊ��ģ�������ʹ�û���';
		$TR_STRS[strtolower('No')] = '��';
		$TR_STRS[strtolower('Yes')] = '��';
		$TR_STRS[strtolower('Module Class Suffix')] = 'ģ��css��׺';
		$TR_STRS[strtolower('A suffix to be applied to the css class of the module (table.moduletable), this allows individual module styling')] = 'Ӧ�õ�ģ���css��ĺ�׺(table.moduletable)����������ģ��ʹ�ö��Ե�css���';
		$TR_STRS[strtolower('Banner')] = '������';
		$TR_STRS[strtolower('Banner client')] = '���ͻ�';
		$TR_STRS[strtolower("Reference to banner client id. Enter separated by ','!")] = "������������Ŀͻ�ID. ���ж��ID����','�ָ�!";
		$TR_STRS[strtolower('Latest News')] = '��������';
		$TR_STRS[strtolower('This module shows a list of the latest published content items.')] = '��ģ����ʾ���·����������б�';
		$TR_STRS[strtolower('Most Read Content')] = '��������';
		$TR_STRS[strtolower('This module shows a list of published content items that have been viewed the most.')] = '��ģ����ʾ������(������)�������б�';
		$TR_STRS[strtolower('Both')] = '���߶���';
		$TR_STRS[strtolower('Show')] = '��ʾ';
		$TR_STRS[strtolower('Hide')] = '����';
		$TR_STRS[strtolower('Frontpage Items')] = '��ҳ��Ŀ';
		$TR_STRS[strtolower('Show/Hide items designated for the Frontpage - only works when in Content Items only mode')] = '��ʾ/����ָ������ҳ����Ŀ - ��Ϊ������Ŀģʽ��Ч';
		$TR_STRS[strtolower('Category ID')] = '����ID';
		$TR_STRS[strtolower('Selects items from a specific Category or set of Categories (to specify more than one Category, seperate with a comma , ).')] = '��һ��ָ�������һ�����ѡ����Ŀ (���ж��ID���ö��Ÿ���)';
		$TR_STRS[strtolower('Section ID')] = '��ԪID';
		$TR_STRS[strtolower('Selects items from a specific Secion or set of Sections (to specify more than one Section, seperate with a comma , ).')] = '��һ��ָ����Ԫ��һ�鵥Ԫѡ����Ŀ (���ж��ID���ö��Ÿ���)';
		$TR_STRS[strtolower('Show Headline')] = '��ʾͷ��';
		$TR_STRS[strtolower('Show/Hide the first content item as headline')] = '��ʾ/���ص�һƪ������Ŀ��Ϊͷ������';
		$TR_STRS[strtolower('Module Title')] = 'ģ�����';
		$TR_STRS[strtolower('User defined module title, Only use when headline shown')] = '�û��Զ����ģ����⣬����ͷ����ʾʱʹ��';
		$TR_STRS[strtolower('Section/Category Style')] = '��Ԫ/������';
		$TR_STRS[strtolower('style of section/category: list or blog')] = '��Ԫ/������: �б�򲩿ͷ��';
		$TR_STRS[strtolower('List')] = '�б���';
		$TR_STRS[strtolower('Blog')] = '���ͷ��';
		$TR_STRS[strtolower('Title Length')] = '���ⳤ��';
		$TR_STRS[strtolower('The max length of item title in chars to display, Default 40')] = '���±�����ʾ����󳤶ȣ�Ĭ��Ϊ40���ַ�';
		$TR_STRS[strtolower('Date Display')] = '������ʾ';
		$TR_STRS[strtolower('The display of item created date')] = '���´������ڵ���ʾ';
		$TR_STRS[strtolower('Login Form')] = '��¼��';
		$TR_STRS[strtolower('Module Layout')] = 'ģ�鲼��';
		$TR_STRS[strtolower('The layout of login module')] = '��¼ģ��Ĳ���';
		$TR_STRS[strtolower('Vertical Compact')] = '�������';
		$TR_STRS[strtolower('Login Redirection URL')] = '��¼ת����ַ';
		$TR_STRS[strtolower('What page will the login redirect to after login, if let blank will load front page')] = '��¼��ת���ҳ�棬������ս�װ����ҳ';
		$TR_STRS[strtolower('Logout Redirection URL')] = '�˳�ת����ַ';
		$TR_STRS[strtolower('What page will the logout redirect to after logout, if let blank will load front page')] = '�˳���ת���ҳ�棬������ս�װ����ҳ';
		$TR_STRS[strtolower('Login Message')] = '��¼��ʾ';
		$TR_STRS[strtolower('Show/Hide the javascript Pop-up indicating Login Success')] = '��ʾ/���� javascript ������������ʾ��¼�ɹ�';
		$TR_STRS[strtolower('Logout Message')] = '�˳���ʾ';
		$TR_STRS[strtolower('Show/Hide the javascript Pop-up indicating Logout Success')] = '��ʾ/���� javascript ������������ʾ�˳��ɹ�';
		$TR_STRS[strtolower('Greeting')] = '�ʺ���';
		$TR_STRS[strtolower('Show/Hide the simple greeting text')] = '��ʾ/���ؼ򵥵��ʺ��ı�';
		$TR_STRS[strtolower('Name/Username')] = '����/�û���';
		$TR_STRS[strtolower('Username')] = '�û���';
		$TR_STRS[strtolower('Name')] = '����';
		$TR_STRS[strtolower('Main Menu')] = '���˵�';
		$TR_STRS[strtolower('Menu Class Suffix')] = '�˵�css��׺';
		$TR_STRS[strtolower('A suffix to be applied to the css class of the menu items')] = 'Ӧ�õ��˵����css��ĺ�׺';
		$TR_STRS[strtolower('Menu Name')] = '�˵�����';
		$TR_STRS[strtolower("The name of the menu (default is 'mainmenu')")] = "�˵�������(Ĭ��Ϊ���˵�)";
		$TR_STRS[strtolower('Menu Style')] = '�˵����';
		$TR_STRS[strtolower('The menu style')] = '�˵����';
		$TR_STRS[strtolower('Vertical')] = '����';
		$TR_STRS[strtolower('Horizontal')] = '����';
		$TR_STRS[strtolower('Flat List')] = '�����б�';
		$TR_STRS[strtolower('Show Menu Icons')] = '��ʾ�˵�ͼ��';
		$TR_STRS[strtolower('Show the Menu Icons you have selected for your menu items')] = '��ʾ��Ϊ�˵������õ�ͼ��';
		$TR_STRS[strtolower('Menu Icon Alignment')] = '�˵�ͼ�����';
		$TR_STRS[strtolower('Alignment of the Menu Icons')] = '�˵�ͼ�����';
		$TR_STRS[strtolower('Left')] = '��';
		$TR_STRS[strtolower('Right')] = '��';
		$TR_STRS[strtolower('Expand Menu')] = 'չ���˵�';
		$TR_STRS[strtolower('Expand the menu and make its sub-menus items always visible')] = 'չ���˵���ʹ�Ӳ˵�������ʾ����';
		$TR_STRS[strtolower('Indent Image')] = '����ͼƬ';
		$TR_STRS[strtolower('Choose which indent image system to utilise')] = 'ѡ��ʹ���ĸ�����ͼƬϵͳ';
		$TR_STRS[strtolower('Template')] = 'ģ��';
		$TR_STRS[strtolower('Mambo default images')] = '����Ĭ��ͼƬ';
		$TR_STRS[strtolower('Use params below')] = 'ʹ�����²���';
		$TR_STRS[strtolower('None')] = '��';
		$TR_STRS[strtolower('Indent Image 1')] = '����ͼƬ1';
		$TR_STRS[strtolower('Image for the first sub-level')] = '��1���Ӳ˵���ͼ��';
		$TR_STRS[strtolower('Indent Image 2')] = '����ͼƬ2';
		$TR_STRS[strtolower('Image for the second sub-level')] = '��2���Ӳ˵���ͼ��';
		$TR_STRS[strtolower('Indent Image 3')] = '����ͼƬ3';
		$TR_STRS[strtolower('Image for the third sub-level')] = '��3���Ӳ˵���ͼ��';
		$TR_STRS[strtolower('Indent Image 4')] = '����ͼƬ4';
		$TR_STRS[strtolower('Image for the fourth sub-level')] = '��4���Ӳ˵���ͼ��';
		$TR_STRS[strtolower('Indent Image 5')] = '����ͼƬ5';
		$TR_STRS[strtolower('Image for the fifth sub-level')] = '��5���Ӳ˵���ͼ��';
		$TR_STRS[strtolower('Indent Image 6')] = '����ͼƬ6';
		$TR_STRS[strtolower('Image for the sixth sub-level')] = '��6���Ӳ˵���ͼ��';
		$TR_STRS[strtolower('Spacer')] = '�����';
		$TR_STRS[strtolower('Spacer for Horizontal menu')] = '����˵��ļ����';
		$TR_STRS[strtolower('End Spacer')] = 'ĩ�˼����';
		$TR_STRS[strtolower('End Spacer for Horizontal menu')] = '����˵���ĩ�˼����';
		$TR_STRS[strtolower('Newsflash')] = '���ſ�Ѷ';
		$TR_STRS[strtolower('Category')] = '����';
		$TR_STRS[strtolower('A content cateogry')] = 'һ�����ݷ���';
		$TR_STRS[strtolower('Style')] = '���';
		$TR_STRS[strtolower('The style to display the category')] = '������ʾ�ķ��';
		$TR_STRS[strtolower('Randomly choose one at a time')] = 'ÿ�����ѡ��';
		$TR_STRS[strtolower('Show images')] = '��ʾͼƬ';
		$TR_STRS[strtolower('Display content item images')] = '��ʾ������Ŀ��ͼƬ';
		$TR_STRS[strtolower('Linked Titles')] = '���ӱ���';
		$TR_STRS[strtolower('Make the Item titles linkable')] = 'ʹ��Ŀ�ı��������';
		$TR_STRS[strtolower('Use Global')] = 'ʹ��ȫ������';
		$TR_STRS[strtolower('Read More')] = '�Ķ�ȫ��';
		$TR_STRS[strtolower('Show/Hide the Read More button')] = '��ʾ/�����Ķ�ȫ�İ�ť';
		$TR_STRS[strtolower('Item Title')] = '��Ŀ����';
		$TR_STRS[strtolower('Show item title')] = '��ʾ��Ŀ����';
		$TR_STRS[strtolower('No. of Items')] = '��Ŀ��';
		$TR_STRS[strtolower('No of items to display')] = '��ʾ����Ŀ��';
		$TR_STRS[strtolower('Poll')] = '���ߵ���';
		$TR_STRS[strtolower('Random Image')] = '���ͼƬ';
		$TR_STRS[strtolower('Image Type')] = 'ͼƬ����';
		$TR_STRS[strtolower('Type of image PNG/GIF/JPG etc. (default is JPG)')] = 'ͼƬ������ PNG/GIF/JPG �ȡ���Ĭ��Ϊ JPG��';
		$TR_STRS[strtolower('Image Folder')] = 'ͼƬ�ļ���';
		$TR_STRS[strtolower('Path to the image folder relative to the site url, eg: images/stories')] = 'ͼƬ�ļ����������վ���ӵ�·������ images/stories';
		$TR_STRS[strtolower('Link')] = '����';
		$TR_STRS[strtolower('A URL to redirect to if image is clicked on, eg: http://www.mamboserver.com')] = '���ͼƬʱת������ӣ��� http://www.mamboserver.com';
		$TR_STRS[strtolower('Width (px)')] = '��� (px)';
		$TR_STRS[strtolower('Image width (forces all images to be displayed with this width)')] = 'ͼƬ��� ��ǿ������ͼƬ��ʾ�ڴ˿�ȣ�';
		$TR_STRS[strtolower('Height (px)')] = '�߶� (px)';
		$TR_STRS[strtolower('Image height (forces all images to be displayed with the height)')] = 'ͼƬ�߶� ��ǿ������ͼƬ��ʾ�ڴ˸߶ȣ�';
		$TR_STRS[strtolower('Related Items')] = '�������';
		$TR_STRS[strtolower('Text')] = '�ı�';
		$TR_STRS[strtolower('Enter the text to be displayed along with the RSS links')] = '����� RSS ����һ����ʾ���ı�';
		$TR_STRS[strtolower('Show/Hide RSS 0.91 Link')] = '��ʾ/���� RSS 0.91 ����';
		$TR_STRS[strtolower('Show/Hide RSS 1.0 Link')] = '��ʾ/���� RSS 1.0 ����';
		$TR_STRS[strtolower('Show/Hide RSS 2.0 Link')] = '��ʾ/���� RSS 2.0 ����';
		$TR_STRS[strtolower('Show/Hide Atom 0.3 Link')] = '��ʾ/���� Atom 0.3 ����';
		$TR_STRS[strtolower('Show/Hide OPML Link')] = '��ʾ/���� OPML ����';
		$TR_STRS[strtolower('RSS 0.91 Image')] = 'RSS 0.91 ͼƬ';
		$TR_STRS[strtolower('Choose the image to be used')] = 'ѡ��Ҫʹ�õ�ͼ��';
		$TR_STRS[strtolower('RSS 1.0 Image')] = 'RSS 1.0 ͼƬ';
		$TR_STRS[strtolower('RSS 2.0 Image')] = 'RSS 2.0 ͼƬ';
		$TR_STRS[strtolower('Atom Image')] = 'Atom ͼƬ';
		$TR_STRS[strtolower('OPML Image')] = 'OPML ͼƬ';
		$TR_STRS[strtolower('Search Module')] = '����ģ��';
		$TR_STRS[strtolower('Box Width')] = '��������';
		$TR_STRS[strtolower('Size of the search text box')] = '�����ı���ĳߴ�';
		$TR_STRS[strtolower('The text that appears in the search text box, if left blank it will load _SEARCH_BOX from your language file')] = '��ʾ�������ı����е��ı������������������������ļ��е� _SEARCH_BOX';
		$TR_STRS[strtolower('Search Button')] = '������ť';
		$TR_STRS[strtolower('Display a Search Button')] = '��ʾһ��������ť';
		$TR_STRS[strtolower('Button Position')] = '��ťλ��';
		$TR_STRS[strtolower('Position of the button relative to the search box')] = '��ťλ�������������';
		$TR_STRS[strtolower('Top')] = '����';
		$TR_STRS[strtolower('Bottom')] = '�ײ�';
		$TR_STRS[strtolower('Button Text')] = '��ť�ı�';
		$TR_STRS[strtolower('The text that appears in the search button, if left blank it will load _SEARCH_TITLE from your language file')] = '��ʾ��������ť�ϵ��ı������������������������ļ��е� _SEARCH_TITLE';
		$TR_STRS[strtolower('Sections')] = '��Ԫ';
		$TR_STRS[strtolower('Statistics')] = 'ͳ��';
		$TR_STRS[strtolower('Server Info')] = '��������Ϣ';
		$TR_STRS[strtolower('Display server information')] = '��ʾ��������Ϣ';
		$TR_STRS[strtolower('Site Info')] = 'վ����Ϣ';
		$TR_STRS[strtolower('Display site information')] = '��ʾվ����Ϣ';
		$TR_STRS[strtolower('Hit Counter')] = '�����';
		$TR_STRS[strtolower('Display hit counter')] = '��ʾ���������';
		$TR_STRS[strtolower('Increase counter')] = '���Ӽ�����';
		$TR_STRS[strtolower('Enter the amount of hits to increase counter by')] = '�����������������Ӽ�����';
		$TR_STRS[strtolower('Template Chooser')] = 'ģ��ѡ����';
		$TR_STRS[strtolower('Max. Name Length')] = '������󳤶�';
		$TR_STRS[strtolower('This is the maximum length of the template name to display (default 20)')] = 'ģ��������ʾ����󳤶ȣ�Ĭ��Ϊ 20��';
		$TR_STRS[strtolower('Show Preview')] = '��ʾԤ��';
		$TR_STRS[strtolower('Template preview is to be shown')] = '��ʾģ���Ԥ��';
		$TR_STRS[strtolower('This is the width of the preview image (default 140)')] = 'Ԥ��ͼƬ�Ŀ�ȣ�Ĭ��Ϊ 140��';
		$TR_STRS[strtolower('This is the height of the preview image (default 90)')] = 'Ԥ��ͼƬ�ĳ��ȣ�Ĭ��Ϊ 90��';
		$TR_STRS[strtolower("Who's Online")] = "�������";
		$TR_STRS[strtolower('Display')] = '��ʾ';
		$TR_STRS[strtolower('Select what shall be shown')] = 'ѡ��Ҫ��ʾ������';
		$TR_STRS[strtolower('# of Guests/Members<br>')] = '����#λ�ÿ�/��Ա����<br>';
		$TR_STRS[strtolower('Member Names<br>')] = '��Ա����<br>';
		$TR_STRS[strtolower('Wrapper Module')] = 'Ƕ��ҳ��ģ��';
		$TR_STRS[strtolower('Url')] = '��ַ';
		$TR_STRS[strtolower('Url to site/file you wish to display within the Iframe')] = '��Iframe����ʾ����վ/�ļ�����ַ';
		$TR_STRS[strtolower('Scroll Bars')] = '������';
		$TR_STRS[strtolower('Show/Hide Horizontal & Vertical scroll bars.')] = '��ʾ/����ˮƽ�ʹ�ֱ������.';
		$TR_STRS[strtolower('Auto')] = '�Զ�';
		$TR_STRS[strtolower('Width of the IFrame Window, you can enter an absolute figure in pixels, or a relative figure by adding a %')] = 'IFrame���ڵĿ��, �����������Ե�������ֵ����Եİٷֱ���ֵ';
		$TR_STRS[strtolower('Height of the IFrame Window')] = 'IFrame���ڵĸ߶�';
		$TR_STRS[strtolower('Auto Height')] = '�Զ��߶�';
		$TR_STRS[strtolower('The height will automatically be set to the size of the external page. This will only work for pages on your own domain.')] = '���ڵĸ߶Ƚ������ⲿҳ���Զ��趨���������Լ������µ���ҳ��Ч��';
		$TR_STRS[strtolower('Auto Add')] = '�Զ�����';
		$TR_STRS[strtolower('By default http:// will be added unless it detects http:// or https:// in the url link you provide, this allow you to switch this ability off')] = 'Ĭ������ http://�����Ǽ�⵽���ṩ����ַΪ http:// ���� https://����������ص��������';

		$TR_STRS[strtolower('Search')] = '����';
		$TR_STRS[strtolower('User Menu')] = '�û��˵�';
		$TR_STRS[strtolower('Top Menu')] = '�����˵�';
		$TR_STRS[strtolower('Other Menu')] = '�����˵�';
		$TR_STRS[strtolower('Wrapper')] = 'Ƕ��ҳ��';
		$TR_STRS[strtolower('Popular')] = '��������';

		$TR_STRS[strtolower('RSS URL')] = 'RSS ��ַ';
		$TR_STRS[strtolower('Enter the URL of the RSS/RDF feed')] = '���� RSS/RDF ת������ַ';
		$TR_STRS[strtolower('Feed Description')] = 'ת������';
		$TR_STRS[strtolower('Show the description text for the whole Feed')] = '��ʾ����ת���������ı�';
		$TR_STRS[strtolower('Feed Image')] = 'ת��ͼƬ';
		$TR_STRS[strtolower('Show the image associated with the whole Feed')] = '��ʾ������ת��������ͼƬ';
		$TR_STRS[strtolower('Items')] = '��Ŀ';
		$TR_STRS[strtolower('Enter number of RSS items to display')] = '����Ҫ��ʾ�� RSS ��Ŀ������';
		$TR_STRS[strtolower('Item Description')] = '��Ŀ����';
		$TR_STRS[strtolower('Show the description or intro text of individual news items')] = '��ʾ������������Ŀ������������ı�';

		//administrator/modules XML file
		$TR_STRS[strtolower('Logged')] = '�ѵ�¼';
		$TR_STRS[strtolower('Logged in Users')] = '�ѵ�¼�û�';
		$TR_STRS[strtolower('Components')] = '���';
		$TR_STRS[strtolower('Popular Items')] = '������Ŀ';
		$TR_STRS[strtolower('Latest Items')] = '������Ŀ';
		$TR_STRS[strtolower('Menu Stats')] = '�˵�ͳ��';
		$TR_STRS[strtolower('Unread Messages')] = 'δ����Ϣ';
		$TR_STRS[strtolower('Online Users')] = '�����û�';
		$TR_STRS[strtolower('Quick Icons')] = '���ͼ��';
		$TR_STRS[strtolower('System Message')] = 'ϵͳ��Ϣ';
		$TR_STRS[strtolower('Pathway')] = '����·��';
		$TR_STRS[strtolower('Toolbar')] = '������';
		$TR_STRS[strtolower('Full Menu')] = 'ȫ���˵�';

		//mambots XML file
		$TR_STRS[strtolower('MOS Image')] = 'Mambo ͼƬ';
		$TR_STRS[strtolower('Legacy Mambot Includer')] = 'ԭ�д���������';
		$TR_STRS[strtolower('Code support')] = '����֧��';
		$TR_STRS[strtolower('SEF')] = '���������Ѻ�����';
		$TR_STRS[strtolower('MOS Rating')] = 'Mambo ��������';
		$TR_STRS[strtolower('Email Cloaking')] = 'Email ����';
		$TR_STRS[strtolower('GeSHi')] = 'GeSHi';
		$TR_STRS[strtolower('Load Module Positions')] = 'װ��ģ��λ��';
		$TR_STRS[strtolower('MOS Pagination')] = 'Mambo ��ҳ';
		$TR_STRS[strtolower('No WYSIWYG Editor')] = '�����������ñ༭��';
		$TR_STRS[strtolower('TinyMCE WYSIWYG Editor')] = 'TinyMCE ���������ñ༭��';
		$TR_STRS[strtolower('MOS Image Editor Button')] = 'Mambo ͼƬ�༭����ť';
		$TR_STRS[strtolower('MOS Pagebreak Editor Button')] = 'Mambo ��ҳ�༭����ť';
		$TR_STRS[strtolower('Search Content')] = '��������';
		$TR_STRS[strtolower('Search Weblinks')] = '������վ����';
		$TR_STRS[strtolower('Search Contacts')] = '������ϵ��';
		$TR_STRS[strtolower('Search Categories')] = '��������';
		$TR_STRS[strtolower('Search Sections')] = '������Ԫ';
		$TR_STRS[strtolower('Search Newsfeeds')] = '��������ת��';

		$TR_STRS[strtolower('Mode')] = 'ģʽ';
		$TR_STRS[strtolower('Select how the emails will be displayed')] = 'ѡ�� emails ����ʾ��ʽ';
		$TR_STRS[strtolower('Nonlinkable Text')] = '�������ӵ��ı�';
		$TR_STRS[strtolower('As linkable mailto address')] = '�����ӵ� mailto ��ַ';
		$TR_STRS[strtolower('Margin')] = 'ҳ�߾�';
		$TR_STRS[strtolower('Margin in px, of Div surrounding Image & Caption - only applies if using a Caption')] = 'Χ��ͼƬ�ͱ���� Div ��ҳ�߾࣬������Ϊ��λ - ����ʹ�ñ���ʱ��Ч';
		$TR_STRS[strtolower('Padding')] = '���';
		$TR_STRS[strtolower('Padding in px, of Div surrounding Image & Caption - only applies if using a Caption')] = 'Χ��ͼƬ�ͱ���� Div ����䣬������Ϊ��λ - ����ʹ�ñ���ʱ��Ч';
		$TR_STRS[strtolower('Wrapped by Table - Column')] = '�ñ���װ - ��';
		$TR_STRS[strtolower('Wrapped by Table - Horizontal')] = '�ñ���װ - ˮƽ��';
		$TR_STRS[strtolower('Wrapped by Divs')] = '�� Divs ��װ';
		$TR_STRS[strtolower('No wrapping - raw output')] = 'û�а�װ - ԭʼ���';
		$TR_STRS[strtolower('Site Title')] = '��վ����';
		$TR_STRS[strtolower('title and heading attibutes from mambot added to Site Title tag')] = '�Ӵ��������ӵ���վ�����ǩ�ı���(title)��С����(heading)����';

		$TR_STRS[strtolower('Functionality')] = '����';
		$TR_STRS[strtolower('Select functionality')] = 'ѡ����';
		$TR_STRS[strtolower('Basic')] = '����';
		$TR_STRS[strtolower('Advanced')] = '�߼�';
		$TR_STRS[strtolower('Text Direction')] = '���ַ���';
		$TR_STRS[strtolower('Ability to change text direction')] = '�ı����ַ��������';
		$TR_STRS[strtolower('Left to Right')] = '������';
		$TR_STRS[strtolower('Right to Left')] = '���ҵ���';
		$TR_STRS[strtolower('Prohibited Elements')] = '��ֹ��Ԫ��';
		$TR_STRS[strtolower('Elements that will be cleaned from the text')] = '�������ı��������Ԫ��';
		$TR_STRS[strtolower('Template CSS classes')] = 'ģ�� CSS ��ʽ';
		$TR_STRS[strtolower('Load CSS classes from template_css.css')] = '�� template_css.css ��ȡ CSS ��ʽ';
		$TR_STRS[strtolower('Custom CSS Classes')] = '�Զ��� CSS ��ʽ';
		$TR_STRS[strtolower('You can specify the loading of a custom CSS file - simply enter the FULL path to the css file you want loaded')] = '���Ե���ָ�����Զ��� CSS �ļ� - ֻ������� CSS �ļ�������·��';
		$TR_STRS[strtolower('Newlines')] = '����';
		$TR_STRS[strtolower('Newlines will be made into the selected option')] = 'ѡ�����еĽ�������';
		$TR_STRS[strtolower('BR Elements')] = '��BR����';
		$TR_STRS[strtolower('P Elements')] = '��P����';
		$TR_STRS[strtolower('Position of the toolbar')] = '������λ��';
		$TR_STRS[strtolower('Popup Height')] = '�������ڸ߶�';
		$TR_STRS[strtolower('Height of HTML mode pop-up window - only in Advanced Mode')] = 'HTML ģʽ�ĵ������ڸ߶� - ���ڸ߼�ģʽ����ʾ';
		$TR_STRS[strtolower('Popup Width')] = '�������ڿ��';
		$TR_STRS[strtolower('Width of HTML mode pop-up window - only in Advanced Mode')] = 'HTML ģʽ�ĵ������ڿ�� - ���ڸ߼�ģʽ����ʾ';

		//administrator/components/com_contact/contact.xml
		$TR_STRS[strtolower('Contact')] = '��ϵ��Ϣ';
		$TR_STRS[strtolower('This component shows a listing of Contact Information')] = '�������ʾһ����ϵ��Ϣ�б�';
		$TR_STRS[strtolower('Page Title')] = 'ҳ�����';
		$TR_STRS[strtolower('Show/Hide the pages Title')] = '��ʾ/����ҳ�����';
		$TR_STRS[strtolower('Text to display at the top of the page. If left blank, the Menu name will be used instead')] = '��ʾ��ҳ�涥�����ı���������գ���ʹ�ò˵�����';
		$TR_STRS[strtolower('Category List - Category')] = '�����б� - ����';
		$TR_STRS[strtolower('Show/Hide the List of Categories in Table view page')] = '���Ա������ʾ��ҳ������ʾ/���ط����б�';
		$TR_STRS[strtolower('Category Description')] = '��������';
		$TR_STRS[strtolower('Show/Hide the Description for the list of other catgeories')] = '��ʾ/�������������б������';
		$TR_STRS[strtolower('# Category Items')] = '������Ŀ��';
		$TR_STRS[strtolower('Show/Hide the number of items in each category')] = '��ʾ/����ÿ���������Ŀ��';
		$TR_STRS[strtolower('Show/Hide the Description below')] = '��ʾ/�������������';
		$TR_STRS[strtolower('Description for page, if left blank it will load _WEBLINKS_DESC from your language file')] = 'ҳ���������������գ����ȡ�����ļ�����վ����';
		$TR_STRS[strtolower('Image for page, must be located in the /images/stories folder. Default will load web_links.jpg, No image will mean an image is not loaded')] = 'ҳ���ͼƬ���������Ŀ¼ /images/stories �С�Ĭ�϶�ȡ web_links.jpg��û��ͼƬ��ζ��û��װ��ͼƬ��';
		$TR_STRS[strtolower('Image Align')] = 'ͼƬ����';
		$TR_STRS[strtolower('Alignment of the image')] = 'ͼƬ����';
		$TR_STRS[strtolower('Table Headings')] = '��ͷ';
		$TR_STRS[strtolower('Show/Hide the Table Headings')] = '��ʾ/���ر�ͷ';
		$TR_STRS[strtolower('Position Column')] = 'ְ����';
		$TR_STRS[strtolower('Show/Hide the Position column')] = '��ʾ/����ְ����';
		$TR_STRS[strtolower('Email Column')] = 'Email��';
		$TR_STRS[strtolower('Show/Hide the Email column')] = '��ʾ/����Email��';
		$TR_STRS[strtolower('Telephone Column')] = '�绰��';
		$TR_STRS[strtolower('Show/Hide the Telephone column')] = '��ʾ/���ص绰��';
		$TR_STRS[strtolower('Fax Column')] = '������';
		$TR_STRS[strtolower('Show/Hide the Fax column')] = '��ʾ/���ش�����';

		//administrator/components/com_contact/contact_items.xml
		$TR_STRS[strtolower('Contact Items')] = '��ϵ��Ŀ';
		$TR_STRS[strtolower('Parameters for individual Contact Items')] = '������ϵ��Ŀ�Ĳ���';
		$TR_STRS[strtolower('Menu Image')] = '�˵�ͼƬ';
		$TR_STRS[strtolower('A small image to be placed to the left or right of your menu item, images must be in images/stories/')] = 'һ��СͼƬ�����ڲ˵������߻��ұߣ�ͼƬ������Ŀ¼ images/stories/ ��';
		$TR_STRS[strtolower('Page Class Suffix')] = 'ҳ��css��׺';
		$TR_STRS[strtolower('A suffix to be applied to the css classes of the page, this allows individual page styling')] = 'Ӧ�õ�ҳ���css��ĺ�׺����������ҳ��ʹ�ö��Ե�css���';
		$TR_STRS[strtolower('Print Icon')] = '��ӡͼ��';
		$TR_STRS[strtolower('Show/Hide the item print button - only affects this page')] = '��ʾ/���ش�ӡͼ�� - ֻӰ���ҳ��';
		$TR_STRS[strtolower('Back Button')] = '���ذ�ť';
		$TR_STRS[strtolower('Show/Hide a Back Button, that returns you to the previously view page')] = '��ʾ/���ط��ذ�ť����������һ��ҳ��';
		$TR_STRS[strtolower('Name')] = '����';
		$TR_STRS[strtolower('Show/Hide the name info')] = '��ʾ/��������';
		$TR_STRS[strtolower('Position')] = 'ְ��';
		$TR_STRS[strtolower('Show/Hide the position info')] = '��ʾ/����ְ����';
		$TR_STRS[strtolower('Email')] = 'Email';
		$TR_STRS[strtolower('Show/Hide the email info, if you set to show the address will be protected from spambots by javascript cloaking')] = '��ʾ/����Email��';
		$TR_STRS[strtolower('Street Address')] = '��ַ';
		$TR_STRS[strtolower('Show/Hide the street address info')] = '��ʾ/���ص�ַ��Ϣ';
		$TR_STRS[strtolower('Town/Suburb')] = '����';
		$TR_STRS[strtolower('Show/Hide the suburb info')] = '��ʾ/���س�����Ϣ';
		$TR_STRS[strtolower('State')] = 'ʡ��';
		$TR_STRS[strtolower('Show/Hide the state info')] = '��ʾ/����ʡ����Ϣ';
		$TR_STRS[strtolower('Country')] = '����';
		$TR_STRS[strtolower('Show/Hide the country info')] = '��ʾ/���ع�����Ϣ';
		$TR_STRS[strtolower('Post/Zip Code')] = '�ʱ�';
		$TR_STRS[strtolower('Show/Hide the post code info')] = '��ʾ/�����ʱ�';
		$TR_STRS[strtolower('Telephone')] = '�绰';
		$TR_STRS[strtolower('Show/Hide the telephone info')] = '��ʾ/���ص绰��Ϣ';
		$TR_STRS[strtolower('Fax')] = '����';
		$TR_STRS[strtolower('Show/Hide the fax info')] = '��ʾ/���ش�����Ϣ';
		$TR_STRS[strtolower('Misc Info')] = '��ע';
		$TR_STRS[strtolower('Show/Hide the misc info')] = '��ʾ/���ر�ע��Ϣ';
		$TR_STRS[strtolower('Vcard')] = 'Vcard';
		$TR_STRS[strtolower('Show/Hide the Vcard')] = '��ʾ/���� Vcard';
		$TR_STRS[strtolower('Image')] = 'ͼƬ';
		$TR_STRS[strtolower('Show/Hide the image')] = '��ʾ/����ͼƬ';
		$TR_STRS[strtolower('Email description')] = 'Email����';
		$TR_STRS[strtolower('Show/Hide the Description Text below')] = '��ʾ/���� �����Email����';
		$TR_STRS[strtolower('Description text')] = '�����ı�';
		$TR_STRS[strtolower('The Description text for the Email form, if left blank it will use the _EMAIL_DESCRIPTION language definition')] = 'Email���������ı���������գ���ʹ�������ļ��� _EMAIL_DESCRIPTION';
		$TR_STRS[strtolower('Email Form')] = 'Email��';
		$TR_STRS[strtolower('Show/Hide the email to form')] = '��ʾ/����Email��';
		$TR_STRS[strtolower('Email Copy')] = 'Email����';
		$TR_STRS[strtolower('Show/Hide the checkbox to email a copy to the senders address')] = '��ʾ/���ذ�email���Ƶ������˵�ַ�ĸ�ѡ��';
		$TR_STRS[strtolower('Drop Down')] = '����ѡ��';
		$TR_STRS[strtolower('Show/Hide the Drop Down select list in Contact view')] = '��ʾ/������ϵ�˵�����ѡ��';
		$TR_STRS[strtolower('Icons/text')] = 'ͼ��/�ı�';
		$TR_STRS[strtolower('Use Icons, text or nothing next to the contact information displayed')] = 'ʹ��ͼ�ꡢ�ı����߿���Ϣ������ϵ����Ϣ�Ա�';
		$TR_STRS[strtolower('Icons')] = 'ͼ��';
		$TR_STRS[strtolower('Address Icon')] = '��ַͼ��';
		$TR_STRS[strtolower('Icon for the Address info')] = '��ַ��Ϣ��ͼ��';
		$TR_STRS[strtolower('Email Icon')] = 'Emailͼ��';
		$TR_STRS[strtolower('Icon for the Email info')] = 'Email��Ϣ��ͼ��';
		$TR_STRS[strtolower('Telephone Icon')] = '�绰ͼ��';
		$TR_STRS[strtolower('Icon for the Telephone info')] = '�绰��Ϣ��ͼ��';
		$TR_STRS[strtolower('Fax Icon')] = '����ͼ��';
		$TR_STRS[strtolower('Icon for the Fax info')] = '������Ϣ��ͼ��';
		$TR_STRS[strtolower('Misc Icon')] = '��עͼ��';
		$TR_STRS[strtolower('Icon for the Misc info')] = '��ע��Ϣ��ͼ��';

		//administrator/components/com_content XML files
		$TR_STRS[strtolower('Content Page')] = '����ҳ��';
		$TR_STRS[strtolower('This shows a single content page')] = '��ʾһ������������ҳ��';
		$TR_STRS[strtolower('Item Title')] = '��Ŀ����';
		$TR_STRS[strtolower('Show/Hide the items title')] = '��ʾ/������Ŀ����';
		$TR_STRS[strtolower('Make your Item titles linkable')] = 'ʹ��Ŀ���������';
		$TR_STRS[strtolower('Intro Text')] = 'ժҪ';
		$TR_STRS[strtolower('Show/Hide the intro text')] = '��ʾ/����ժҪ';
		$TR_STRS[strtolower('Section Name')] = '��Ԫ����';
		$TR_STRS[strtolower('Show/Hide the Section the item belongs to')] = '��ʾ/������Ŀ�����ĵ�Ԫ';
		$TR_STRS[strtolower('Section Name Linkable')] = '��Ԫ���ƿ�����';
		$TR_STRS[strtolower('Make the Section text a link to the actual section page')] = 'ʹ��Ԫ�������ӵ��䵥Ԫҳ��';
		$TR_STRS[strtolower('Category Name')] = '��������';
		$TR_STRS[strtolower('Show/Hide the Category the item belongs to')] = '��ʾ/������Ŀ�����ķ���';
		$TR_STRS[strtolower('Category Name Linkable')] = '�������ƿ�����';
		$TR_STRS[strtolower('Make the Category text a link to the actual Category page')] = 'ʹ�����������ӵ������ҳ��';
		$TR_STRS[strtolower('Item Rating')] = '��������';
		$TR_STRS[strtolower('Show/Hide the item rating - only affects this page')] = '��ʾ/������������ - ֻӰ���ҳ��';
		$TR_STRS[strtolower('Author Names')] = '��������';
		$TR_STRS[strtolower('Show/Hide the item author - only affects this page')] = '��ʾ/������������ - ֻӰ���ҳ��';
		$TR_STRS[strtolower('Created Date and Time')] = '��������ʱ��';
		$TR_STRS[strtolower('Show/Hide the item creation date - only affects this page')] = '��ʾ/���ش�������ʱ�� - ֻӰ���ҳ��';
		$TR_STRS[strtolower('Modified Date and Time')] = '��������ʱ��';
		$TR_STRS[strtolower('Show/Hide the item modification date - only affects this page')] = '��ʾ/���ظ�������ʱ�� - ֻӰ���ҳ��';
		$TR_STRS[strtolower('Show/Hide the item pdf button - only affects this page')] = '��ʾ/����PDFͼ�� - ֻӰ���ҳ��';
		$TR_STRS[strtolower('Show/Hide the item email button - only affects this page')] = '��ʾ/����Emailͼ�� - ֻӰ���ҳ��';
		$TR_STRS[strtolower('Key Reference')] = '�ο�����';
		$TR_STRS[strtolower('A text key that an item may be referenced by (like a help reference)')] = '�������漰��ο�������';

		//administrator/components/com_frontpage/frontpage.xml
		$TR_STRS[strtolower('Frontpage')] = '��ҳ';
		$TR_STRS[strtolower('This component shows all the published content items from your site marked Show on Frontpage.')] = '�������ʾ��վ�����б��Ϊ��ʾ����ҳ���ѷ�������.';
		$TR_STRS[strtolower('Text to display at the top of the page')] = '��ʾ��ҳ�涥�����ı�';
		$TR_STRS[strtolower('Show/Hide the Page title')] = '��ʾ/����ҳ�����';
		$TR_STRS[strtolower('# Leading')] = 'ͷ����';
		$TR_STRS[strtolower('Number of Items to display as a leading (full width) item. 0 will mean that no items will be displayed as leading.')] = '��ʾͷ������(ռ��ȫ��)��������0 ��ʾû��ʹ��ͷ����ʽ��ʾ��';
		$TR_STRS[strtolower('# Intro')] = 'ժҪ��';
		$TR_STRS[strtolower('Number of Items to display with the introduction text shown.')] = '��ʾ����ժҪ��������';
		$TR_STRS[strtolower('Columns')] = 'ժҪ����';
		$TR_STRS[strtolower('When displaying the intro text, how many columns to use per row')] = 'ÿ�п���ʾ��ժҪ������';
		$TR_STRS[strtolower('# Links')] = '��������';
		$TR_STRS[strtolower('Number of Items to display as Links.')] = '��ʾ���±������ӵ�����';
		$TR_STRS[strtolower('Items Order')] = '��������';
		$TR_STRS[strtolower('Order that the items will be displayed in.')] = '������Ŀ����ʾ����';
		$TR_STRS[strtolower('Pagination')] = '��ҳ';
		$TR_STRS[strtolower('Show/Hide Pagination support')] = '��ʾ/���ط�ҳ֧��';
		$TR_STRS[strtolower('Pagination Results')] = '��ҳ���';
		$TR_STRS[strtolower('Show/Hide Pagination Results info ( e.g 1-4 of 4 )')] = '��ʾ/���ط�ҳ�����Ϣ(�磺1-4 / 4 )';
		$TR_STRS[strtolower('Item Titles')] = '���±���';
		$TR_STRS[strtolower('Show/Hide the Read More link')] = '��ʾ/�����Ķ�ȫ������';
		$TR_STRS[strtolower('PDF Icon')] = 'PDFͼ��';

		//administrator/components/com_login/login.xml
		$TR_STRS[strtolower('Login Page Title')] = '��¼ҳ�����';
		$TR_STRS[strtolower('Login JS Message')] = '��¼��� JS ��Ϣ';
		$TR_STRS[strtolower('Login Description')] = '��¼����';
		$TR_STRS[strtolower('Show/Hide the Login Description below')] = '��ʾ/���ص�¼���������Ϣ';
		$TR_STRS[strtolower('Login Description Text')] = '��¼��ʾ�ı�';
		$TR_STRS[strtolower('Text to display on the login Page, if left blank _LOGIN_DESCRIPTION will be used')] = '���õ�¼��ʾ���ı�, ������գ���ֱ�Ӷ�ȡ�����õ������ļ��е� _LOGIN_DESCRIPTION ���趨ֵ';
		$TR_STRS[strtolower('Login Image')] = '��¼ͼƬ';
		$TR_STRS[strtolower('Image for the Login Page')] = '��¼ҳ���ͼƬ';
		$TR_STRS[strtolower('Login Image Align')] = '��¼ͼƬλ��';
		$TR_STRS[strtolower('Alignment for Login Image')] = '��¼ҳ���ͼƬλ��';
		$TR_STRS[strtolower('Logout Page Title')] = '�˳�ҳ�����';
		$TR_STRS[strtolower('What page will be redirected to after logout, if let blank will load front page')] = '�����˳����Զ���ת��ҳ�棬������գ���ֱ�ӷ��ص���ǰҳ';
		$TR_STRS[strtolower('Logout JS Message')] = '�˳���� JS ��Ϣ';
		$TR_STRS[strtolower('Logout Description')] = '�˳�����';
		$TR_STRS[strtolower('Show/Hide the Logout Description below')] = '��ʾ/�����˳����������Ϣ';
		$TR_STRS[strtolower('Logout Description Text')] = '�˳���ʾ�ı�';
		$TR_STRS[strtolower('Text to display on the logout Page, if left blank _LOGOUT_DESCRIPTION will be used')] = '�����˳���ʾ���ı�, ������գ���ֱ�Ӷ�ȡ�����õ������ļ��е� _LOGOUT_DESCRIPTION ���趨ֵ';
		$TR_STRS[strtolower('Logout Image')] = '�˳�ͼƬ';
		$TR_STRS[strtolower('Image for the Logout Page')] = '�˳�ҳ��ͼƬ';
		$TR_STRS[strtolower('Logout Image Align')] = '�˳�ͼƬλ��';
		$TR_STRS[strtolower('Alignment for Logout Image')] = '�˳�ҳ���ͼƬλ��';

		//administrator/components/com_newsfeeds/newsfeeds.xml
		$TR_STRS[strtolower('Newsfeeds')] = '����ת��';
		$TR_STRS[strtolower('This component manages RSS/RDF newsfeeds')] = '��������� RSS/RDF ����ת��';
		$TR_STRS[strtolower('Name Column')] = '������';
		$TR_STRS[strtolower('Show/Hide the Feed Name column')] = '��ʾ/����ת��������';
		$TR_STRS[strtolower('# Articles Column')] = '��������';
		$TR_STRS[strtolower('Show/Hide the # of articles in the feed')] = '��ʾ/����ת���е�������';
		$TR_STRS[strtolower('Link Column')] = '������';
		$TR_STRS[strtolower('Show/Hide the Feed Link column')] = '��ʾ/����ת��������';
		$TR_STRS[strtolower('Show/Hide the image of the feed')] = '��ʾ/����ת��ͼƬ';
		$TR_STRS[strtolower('Show/Hide the description text of the feed')] = '��ʾ/����ת���������ı�';
		$TR_STRS[strtolower('Show/Hide the description or intro text of an item')] = '��ʾ/������Ŀ������������ı�';

		//administrator/components/com_syndicate XML files
		$TR_STRS[strtolower('Syndicate')] = 'RSS �ۺ�';
		$TR_STRS[strtolower('This component controls the Syndication settings')] = '��������� RSS �ۺ�����';
		$TR_STRS[strtolower('Cache')] = '����';
		$TR_STRS[strtolower('Cache the feed files')] = '����ת���ļ�';
		$TR_STRS[strtolower('Cache Time')] = '����ʱ��';
		$TR_STRS[strtolower('Cache file will refresh every x seconds')] = '�����ļ���ˢ��ʱ��(��λ����)';
		$TR_STRS[strtolower('# Items')] = '��Ŀ����';
		$TR_STRS[strtolower('Number of Items to syndicate')] = 'RSS �ۺ���Ŀ����';
		$TR_STRS[strtolower('Title')] = '����';
		$TR_STRS[strtolower('Syndication Title')] = 'RSS �ۺϱ���';
		$TR_STRS[strtolower('Description')] = '����';
		$TR_STRS[strtolower('Syndication Description')] = 'RSS �ۺ�����';
		$TR_STRS[strtolower('Image to be included in feed')] = '������ת���е�ͼƬ';
		$TR_STRS[strtolower('Image Alt')] = 'ͼƬ����ı�';
		$TR_STRS[strtolower('Alt text for image')] = 'ͼƬ����ı�';
		$TR_STRS[strtolower('Limit Text')] = '�����ı�';
		$TR_STRS[strtolower('Limit the article text to the value indicated below')] = '�����������ֵ���������ı�����';
		$TR_STRS[strtolower('Text Length')] = '�ı�����';
		$TR_STRS[strtolower('The word length of the article text - 0 will show no text')] = '�����ı����ַ����� - 0 ������ʾ����';
		$TR_STRS[strtolower('Order')] = '����';
		$TR_STRS[strtolower('Order that the items will be displayed')] = '��Ŀ��ʾ�Ĵ���';
		$TR_STRS[strtolower('Default')] = 'Ĭ��';
		$TR_STRS[strtolower('Frontpage Ordering')] = '��ҳ��Ŀ����';
		$TR_STRS[strtolower('Oldest first')] = '����˳��';
		$TR_STRS[strtolower('Most recent first')] = '���ڷ���';
		$TR_STRS[strtolower('Title Alphabetical')] = '������ĸ˳��';
		$TR_STRS[strtolower('Title Reverse-Alphabetical')] = '������ĸ����';
		$TR_STRS[strtolower('Author Alphabetical')] = '������ĸ˳��';
		$TR_STRS[strtolower('Author Reverse-Alphabetical')] = '������ĸ����';
		$TR_STRS[strtolower('Most Hits')] = '���������ǰ';
		$TR_STRS[strtolower('Least Hits')] = '������ٵ���ǰ';
		$TR_STRS[strtolower('Ordering')] = '��Ŀ����';
		$TR_STRS[strtolower('Live Bookmarks')] = '��̬��ǩ(Live Bookmarks)';
		$TR_STRS[strtolower('Activate support for Firefox Live Bookmarks functionality')] = '���� Firefox ��̬��ǩ(Live Bookmarks)���ܵ�֧��';
		$TR_STRS[strtolower('Off')] = '��';
		$TR_STRS[strtolower('RSS 0.91')] = 'RSS 0.91';
		$TR_STRS[strtolower('RSS 1.0')] = 'RSS 1.0';
		$TR_STRS[strtolower('RSS 2.0')] = 'RSS 2.0';
		$TR_STRS[strtolower('ATOM 0.3')] = 'ATOM 0.3';
		$TR_STRS[strtolower('Bookmark file')] = '��ǩ�ļ�';
		$TR_STRS[strtolower('Special file name, if empty the default will be used.')] = 'ָ���ļ�����,���������Ĭ������.';

		//administrator/components/com_weblinks/weblinks.xml
		$TR_STRS[strtolower('Hits')] = '�����';
		$TR_STRS[strtolower('Show/Hide the Hits column')] = '��ʾ/���ص������';
		$TR_STRS[strtolower('Link Descriptions')] = '��������';
		$TR_STRS[strtolower('Show/Hide the Description text of the Links')] = '��ʾ/�������������ı�';
		$TR_STRS[strtolower('Icon')] = 'ͼ��';
		$TR_STRS[strtolower('Icon to be used to the left of the url links in Table view')] = '�ڱ����ͼ�е���ַ���������ʾ��ͼ��';

		//administrator/components/com_weblinks/weblinks_item.xml
		$TR_STRS[strtolower('This component shows a listing of Weblinks')] = '��ʾ��վ�����б�';
		$TR_STRS[strtolower('Target')] = 'Ŀ�괰��';
		$TR_STRS[strtolower('Target window when the link is clicked')] = '������Ӻ��ҳ���Ŀ�괰��';
		$TR_STRS[strtolower('Parent Window With Browser Navigation')] = '����������������ĸ�����';
		$TR_STRS[strtolower('New Window With Browser Navigation')] = '������������������´���';
		$TR_STRS[strtolower('New Window Without Browser Navigation')] = '������������������´���';

		//administrator/components/com_menus/contact_category_table/contact_category_table.xml
		$TR_STRS[strtolower('Other Categories')] = '��������';
		$TR_STRS[strtolower('When viewing a Category, Show/Hide the list of other Categories')] = '���һ������ʱ����ʾ/�������������б�';
		
		//administrator/components/com_menus/content_blog_category/content_blog_category.xml
		$TR_STRS[strtolower('Show/Hide the Category Description')] = '��ʾ/���ط��������';
		$TR_STRS[strtolower('Description Image')] = '����ͼƬ';
		$TR_STRS[strtolower('Show/Hide image of the Category Description')] = '��ʾ/���ط���������ͼƬ';

		//administrator/components/com_menus/content_blog_section/content_blog_section.xml
		$TR_STRS[strtolower('Show/Hide the Section Description')] = '��ʾ/���ص�Ԫ������';
		$TR_STRS[strtolower('Show/Hide image of the Section Description')] = '��ʾ/���ص�Ԫ������ͼƬ';
		$TR_STRS[strtolower('Category List')] = '�����б�';
		$TR_STRS[strtolower('Show/Hide the category list of section')] = '��ʾ/���ص�Ԫ�ķ����б�';
		$TR_STRS[strtolower('Category Item Count')] = '����������';
		$TR_STRS[strtolower('Show/Hide the item count of category')] = '��ʾ/���ط����������';
		$TR_STRS[strtolower('Categories per Row')] = 'ÿ�з�����';
		$TR_STRS[strtolower('Number of categories to display per row')] = 'ÿ����ʾ�ķ�����';

		//administrator/components/com_menus/content_category/content_category.xml
		$TR_STRS[strtolower('Table - Content Category')] = '��� - ���ݷ���';
		$TR_STRS[strtolower('Shows a Table view of Content items for a particular Category')] = 'Ϊ�ض������Ա������ʾ������Ŀ';
		$TR_STRS[strtolower('Date Format')] = '���ڸ�ʽ';
		$TR_STRS[strtolower('The format of the date displayed, using PHPs strftime Command Format - if left blank it will load the format from your language file')] = '������ʾ�ĸ�ʽ��ʹ��PHP�� strftime �����ʽ - ������յĻ�����ʹ�������ļ��е����ڸ�ʽ';
		$TR_STRS[strtolower('Date Column')] = '������';
		$TR_STRS[strtolower('Show/Hide the Date column')] = '��ʾ/����������';
		$TR_STRS[strtolower('Author Column')] = '������';
		$TR_STRS[strtolower('Show/Hide the Author column')] = '��ʾ/����������';
		$TR_STRS[strtolower('Hits Column')] = '�����';
		$TR_STRS[strtolower('Show/Hide the Hits column')] = '��ʾ/���ص����';
		$TR_STRS[strtolower('Navigation Bar')] = '��ҳ������';
		$TR_STRS[strtolower('Show/Hide the Navigation bar')] = '��ʾ/���ط�ҳ������';
		$TR_STRS[strtolower('Display Number')] = '��ʾ��';
		$TR_STRS[strtolower('Number of items to be displayed by default')] = 'Ĭ�ϵ���Ŀ��ʾ��';
		$TR_STRS[strtolower('Author')] = '����';

		//administrator/components/com_menus/content_section/content_section.xml
		$TR_STRS[strtolower('Table - Content Section')] = '��� - ���ݵ�Ԫ';
		$TR_STRS[strtolower('Creates a listing of Content categories for a particular section')] = 'Ϊ�ض��ĵ�Ԫ�������ݷ����б�';
		$TR_STRS[strtolower('Item List of Category')] = '���������б�';
		$TR_STRS[strtolower('Show/Hide the item list of category')] = '��ʾ/���ط���������б�';
		$TR_STRS[strtolower('Item Count')] = '�б�������';
		$TR_STRS[strtolower('The number of items to display in the item list of category(default is 5)')] = '���������б�Ҫ��ʾ����������(Ĭ����5)';
		$TR_STRS[strtolower('Item List of Section')] = '��Ԫ�����б�';
		$TR_STRS[strtolower('Show/Hide the item list of section')] = '��ʾ/���ص�Ԫ�������б�';

		//administrator/components/com_menus/newsfeed_category_table/newsfeed_category_table.xml
		$TR_STRS[strtolower('A small image to be placed to the left or right of your menu item, images must be in /images')] = 'һ��СͼƬ�����ڲ˵������߻��ұߣ�ͼƬ������Ŀ¼ /images ��';
		$TR_STRS[strtolower('Articles Column')] = '��������';
		$TR_STRS[strtolower('Show/Hide the Articles column')] = '��ʾ/������������';

		//administrator/components/com_menus/wrapper/wrapper.xml
		$TR_STRS[strtolower('Width')] = '���';
		$TR_STRS[strtolower('Height')] = '�߶�';

		//administrator/components/com_menus all XML files' name and description
		$TR_STRS[strtolower('Link - Component Item')] = '���� - �����Ŀ';
		$TR_STRS[strtolower('Creates a link to an existing Mambo Component')] = '����һ�����ӵ����е��������';
		$TR_STRS[strtolower('Component')] = '���';
		$TR_STRS[strtolower('Displays the frontend interface for a Component')] = 'Ϊ�����ʾǰ̨����';
		$TR_STRS[strtolower('Table - Contact Category')] = '��� - ��ϵ�˷���';
		$TR_STRS[strtolower('Shows a Table view of Contact items for a particular Category')] = '�Ա��ʽ��ʾһ���ض��������ϵ����Ŀ';
		$TR_STRS[strtolower('Link - Contact Item')] = '���� - ��ϵ����Ŀ';
		$TR_STRS[strtolower('Creates a link to a Published Contact Item')] = '����һ�����ӵ�һ���ѷ�������ϵ����Ŀ';
		$TR_STRS[strtolower('Blog - Content Category')] = '���ͷ�� - ���ݷ���';
		$TR_STRS[strtolower('Displays a page of content items from multiple categories in a blog format')] = '�Բ��ͷ����һ��ҳ������ʾ��������������Ŀ';
		$TR_STRS[strtolower('Blog - Content Section')] = '���ͷ�� - ���ݵ�Ԫ';
		$TR_STRS[strtolower('Displays a page of content items from multiple sections in a blog format')] = '�Բ��ͷ����һ��ҳ������ʾ�����Ԫ��������Ŀ';
		$TR_STRS[strtolower('Table - Content Category')] = '��� - ���ݷ���';
		$TR_STRS[strtolower('Shows a Table view of Content items for a particular Category')] = '�Ա������ʾһ���ض������������Ŀ';
		$TR_STRS[strtolower('Link - Content Item')] = '���� - ������Ŀ';
		$TR_STRS[strtolower('Creates a link to a published Content Item in full view')] = '����һ�����ӵ�һ���ѷ�����������Ŀ����ʾȫ��';
		$TR_STRS[strtolower('Table - Content Section')] = '��� - ���ݵ�Ԫ';
		$TR_STRS[strtolower('Creates a listing of Content categories for a particular section')] = '�Ա������ʾһ���ض���Ԫ��������Ŀ';
		$TR_STRS[strtolower('Link - Static Content')] = '���� - ��̬����';
		$TR_STRS[strtolower('Creates a link to Static Content Item')] = '����һ�����ӵ���̬������Ŀ';
		$TR_STRS[strtolower('Table - Newsfeed Category')] = '��� - ����ת������';
		$TR_STRS[strtolower('Shows a Table view of Newsfeed items for a particular Category')] = '�Ա������ʾһ���ض����������ת����Ŀ';
		$TR_STRS[strtolower('Link - Newsfeed')] = '���� - ����ת��';
		$TR_STRS[strtolower('Creates a link to an individual Published Newsfeed')] = '����һ�����ӵ�һ���ѷ���������ת����Ŀ';
		$TR_STRS[strtolower('Separator / Placeholder')] = '�ָ��� / ռλ��';
		$TR_STRS[strtolower('Creates a menu placeholder or separator')] = '����һ���˵�ռλ����ָ���';
		$TR_STRS[strtolower('Link - Url')] = '���� - ��ַ';
		$TR_STRS[strtolower('Creates url link')] = '������ַ����';
		$TR_STRS[strtolower('Table - Weblink Category')] = '��� - ��վ���ӷ���';
		$TR_STRS[strtolower('Shows a Table view of Weblink items for a particular Weblink Category')] = '�Ա������ʾһ���ض���վ���ӷ������վ������Ŀ';
		$TR_STRS[strtolower('Wrapper')] = 'Ƕ��ҳ��';
		$TR_STRS[strtolower('Creates an IFrame that will wrap an external page/site into Mambo')] = '����һ�� Iframe����װһ���ⲿҳ��/��վ����������վ';

		$TR_STRS[strtolower('Mamhoo')] = '����';
		$TR_STRS[strtolower('Mamhoo User Manager')] = '�����û�����';
		$TR_STRS[strtolower('Mamhoo User Extended Config')] = '�����û���չ����';
		$TR_STRS[strtolower('Install/Uninstall Mamhooks')] = '��װ/ж����������';
		$TR_STRS[strtolower('About Mamhoo')] = '��������';

	}


}

?>