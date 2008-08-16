<?php
/**
* @version $Id: install_traditional_chinese.php,v 1.5 2007/05/31 22:21:13 lang3 Exp $
* @package MMLi
* @copyright (C) 2000 - 2004 Miro International Pty Ltd
* @license http://www.gnu.org/copyleft/gpl.html GNU/GPL
* @edited by mic (developer@mamboworld.net) www.mamboworld.net
* Mambo is Free Software
*/
// edited for Mambo 4.5.3 by Akarawuth Tamrareang  http://www.mambohub.com
// edited by mic (mic@mamboworld.net) - 2005.01.07

/*
 install_traditional_chinese.php
 �Ҫi�㯸�t��(Mambors)�w��²�餤��y�����
 Mambo���궵�ز� http://www.mambochina.net
 2007-05-31
*/

//-- Common
define ('_INSTALL_ISO','BIG5');
define ('_INSTALL_YES', "�O");
define ('_INSTALL_NO', "�_");
define ('_INSTALL_AVAILABLE', "�i��");
define ('_INSTALL_UNAVAILABLE', "���i��");
define ('_INSTALL_WRITABLE', "�i�g");
define ('_INSTALL_ON', "�}��");
define ('_INSTALL_OFF', "����");
define ('_INSTALL_UNWRITABLE', "���i�g");
define ('_INSTALL_NEXT', "�U�@�B >>");
define ('_INSTALL_BACK', '<< �W�@�B'); // ##### new

//--Language choice
define ('_INSTALL_LANGUAGE_SECTION', "Mambo �w�˻y��");
define ('_INSTALL_LANGUAGE_DESCRIPTION', "�w�˵{�Ǯھ��s�������]�m�۰ʿ�ܦw�˻y���A���z���i��ܥt�@�ػy���Ӧw�ˡC");
define ('_INSTALL_LANGUAGE_LABEL', "�w�˻y��");
define ('_INSTALL_LANGUAGE_CHECK','�y���ˬd');
define ('_INSTALL_LANGUAGE_CHOOSE','- �п�� -');

//-- Index.php
	//--Left menu
define ('_INSTALL_LICENSE_ALERT', "�о\Ū/�����\�i��ĳ�H�~��w��");
define ('_MAMBO_WEB_INSTALLER', _MAMBORS_VERSION . " - �����w�˵{�� :: ");  //  Add Title  by Ak.
define ('_INSTALL_MAMBO', "Mambo �w�˵{��");
define ('_INSTALL_STEP_PRECHECK', "�w�˫e���ˬd");
define ('_INSTALL_STEP_LICENSE', "�\�i��ĳ");
define ('_INSTALL_STEP_1', "�Ĥ@�B");
define ('_INSTALL_STEP_2', "�ĤG�B");
define ('_INSTALL_STEP_3', "�ĤT�B");
define ('_INSTALL_STEP_4', "�ĥ|�B");
	//--Pre-check zone
define ('_INSTALL_PRECHECK_TITLE', "�w�˫e���ˬd");
define ('_INSTALL_PRECHECK_SECTION', "�w�˫e���ˬd");
define ('_INSTALL_PRECHECK_DESCRIPTION', "�p���@�������ⴣ�ܡA�Эק�Ӷ��H�T�O���`�w�ˡI");
define ('_INSTALL_PHP_VERSION','- <strong>PHP</strong> ���� >= 4.1.0');
define ('_INSTALL_PHP_ZLIB', '- <strong>zlib</strong> ���Y���');
define ('_INSTALL_PHP_XML', '- <strong>XML</strong> ���');
define ('_INSTALL_PHP_MYSQL', '- <strong>MySQL</strong> ���');
define ('_INSTALL_CONFIG_FILE','- <strong>Mambo</strong> �t�m���');
define ('_INSTALL_PHP_CONF', "�w�ˤ��M�i�H�~��A�t�m�H���N�b�w�˪��̫���ܡA�u�ݽƻs�t�m�H���O�s��configuration.php�W�ǧY�i.");
define ('_INSTALL_SESSION', "- Session �O�s���|");
define ('_INSTALL_SESSION_NOT_SET','���]�m');

	//--recommanded
define ('_INSTALL_PHP_SETTINGS_TITLE', "���˳]�m:");
define ('_INSTALL_PHP_SETTINGS_DESCRIPTION', "�H�U�O�O�ҹ� Mambo �ݮe�� PHP ���˳]�m�A�� Mambo �����i��b�]�m�������@�P�����p�U�B��C");
define ('_INSTALL_PHP_FONCTION', "PHP�]�m");
define ('_INSTALL_PHP_FONCTION_IDEAL', "���˳]�m");
define ('_INSTALL_PHP_FONCTION_ACTUAL', "��ڳ]�m");
define ('_INSTALL_PHP_MODE', "Safe Mode:");
define ('_INSTALL_PHP_ERRORS', "Display Errors:");
define ('_INSTALL_PHP_UPLOAD', "File Uploads:");
define ('_INSTALL_PHP_QUOTES_GPC', "Magic Quotes GPC:");
define ('_INSTALL_PHP_QUOTES_RUNTIME', "Magic Quotes Runtime:");
define ('_INSTALL_PHP_GLOBALS', "Register Globals:");
define ('_INSTALL_PHP_OUTBUFFER', "Output Buffering:");
define ('_INSTALL_PHP_AUTOSTART_SESSION', "Session auto start:");
	//--file permission
define ('_INSTALL_DIRFILE_PERMS', "�ؿ��M����v��:");
define ('_INSTALL_DIRFILE_PERMS_INFO', "�H�U��󧨥������i�g���v��, Mambo �~�ॿ�`�B��C�p�G�z�ݨ�u���i�g�v�A�Цb�A�Ⱦ��W�ק復���ݩʬ��i�g�I[�p: �q�LFTP�n�������ݩ�(CHMOD)��0777]�C");

//--Install.php
define ('_INSTALL_LICENSE_TITLE', "�\�i��ĳ");
define ('_INSTALL_LICENSE_TYPE', "GNU/GPL �\�i��ĳ:");
define ('_INSTALL_LICENSE_CONDITION', "*** �~��w�� Mambo ���e�z���������Ө�ĳ ***");
define ('_INSTALL_LICENSE_AGREE', "�ڱ��� GPL �\�i��ĳ");

//--Install1.php
define ('_INSTALL_DB_JS_HOSTNAME', '�п�J�D���W��');
define ('_INSTALL_DB_JS_USERNAME', '�п�J�ƾڮw�Τ�W');
define ('_INSTALL_DB_JS_BASENAME', '�п�J�ƾڮw�W��');
define ('_INSTALL_DB_JS_PASSWORD', '�п�J�ƾڮw�K�X');
define('_INSTALL_DB_PASSWORD_VERRIFY',"���� MySQL �K�X");    // Add by ninekrit
define ('_INSTALL_DB_JS_WARNING', '�z�T�w�Ҧ����]�m�����T��?\nMambo�{�b�N�ھڱz���Ѫ��]�m�إ߼ƾڮw');
define ('_INSTALL_DB_SECTION', "MySQL �ƾڮw�t�m:");
define ('_INSTALL_DB_HOSTNAME', "MySQL �D���W��");
define ('_INSTALL_DB_HOSTNAME_DESCRIPTION', '�q�`�� localhost');
define ('_INSTALL_DB_USERNAME', "MySQL �Τ�W");
define('_INSTALL_DB_USERNAME_DESC', "�ϥ� root �Τ�Ϊ̪Ŷ��Ӵ��Ѫ��Τ�W");
define ('_INSTALL_DB_PASSWORD', "MySQL �K�X");
define ('_INSTALL_DB_BASENAME', "MySQL �ƾڮw�W��");
define ('_INSTALL_DB_PREFIX', "MySQL �ƾڪ�e��");
define ('_INSTALL_DB_PREFIX_DESC', "���ǵ����D���u���@�Ӽƾڮw�A�ڭ̥i�H�Τ��P����e��ӰϤ��M�w�˦h�ӰҪi�t�ΡC<br />�`�N�G����Ϊ�e�� 'old_' �A�]���o�Ω�ƥ��ƾڪ�C");
define ('_INSTALL_DB_DROPTABLES', "�R���ª��ƾڪ�H");
define ('_INSTALL_DB_BACKUP', "�ƥ��ª��ƾڪ�H");
define ('_INSTALL_DB_BACKUP_DESCRIPTION', "�O�d���e�w�˪��Ҫi�t�μƾڮw�A��e��N�אּ old_");
define ('_INSTALL_DB_SAMPLE_DATA', "�w�˼˥��ƾڡH");
define ('_INSTALL_DB_SAMPLE_DATA_DESC',"�˥��ƾگ����z�ֳt�A�ѰҪi�㯸�t�ΡA�p�G�z�����x�Ҫi�A�Ф��n�����I");


//--Install2.php
define ('_INSTALL_DB_ERROR1', "�ƾڮw�]�m���~�Ω|���]�m�C");
define ('_INSTALL_DB_ERROR2', "MySql�Τ�W�αK�X���~�C");
define ('_INSTALL_DB_ERROR3', "�|����g�ƾڮw�W�١C");
define ('_INSTALL_DB_ERROR4', "�ƾڮw���~: ");
define ('INSTALL_DB_ERROR5', "���Ѫ��ƾڮw�K�X���ǰt�A�ЦA�դ@���C");
define ('_INSTALL_DB_DATAERROR', "�ƾڮw���J�ƾڥX��!<br />�L�k�~��w�ˡC");
define ('_INSTALL_DB_LOGERROR', "<br /><br />���~�O��:<br />\n");

define ('_INSTALL_SITE_NONAME', "�|����J�����W��");
define ('_INSTALL_JS_SITENAME', "�п�J���I�W��");
define ('_INSTALL_JS_SITEURL', "�п�J���I���}");
define ('_INSTALL_JS_PATH', "�п�J���I��������|");
define ('_INSTALL_JS_EMAIL', "�п�J���I�޲z�����p��Email");
define ('_INSTALL_JS_PASSWORD', "�п�J�޲z���K�X");
define ('_INSTALL_SITE_SECTION', "�]�m���I���W�١B���}�B������|�M�޲z��Email");
define ('_INSTALL_SITE_DESCRIPTION', "�q�`�A�q�{�����}�M������|���O���T���A�Ф��n�ק�C�p�G�����T�A�Ыt�ߪŶ��өΪ̺޲z���C");
define ('_INSTALL_SITE_NAME', "���I�W��");
define ('_INSTALL_SITE_PATH', "������|");
define ('_INSTALL_SITE_URL', "���I���}");
define ('_INSTALL_SUPERADMIN_EMAIL', "�޲z��Email");
define ('_INSTALL_SUPERADMIN_PASSWORD', "�޲z���K�X");
define ('_INSTALL_ADMIN_PW','[�`: ��ĳ��K�X�אּ�A�Q�n��]');

//--Install3.php
define ('_INSTALL_JS_CHECKEMAIL', "�������Ѥ@�Ӧ��Ī�Email�a�}�C");
define ('_INSTALL_JS_CHECKDB', "�ƾڮw�]�m���~�Ω|���]�m");
define ('_INSTALL_JS_CHECKSITENAME', "�п�J���I�W��");
define ('_INSTALL_CONF_SITE_MAINTAIN', "'�������b���@���C<br /> �еy�ԦA�ӡC'");
define ('_INSTALL_CONF_SITE_UNAVAILABLE', "'�����{�ɥX�{���D�C<br /> �гq���޲z���C'");
define ('_INSTALL_CONF_METADESC', "'Mambo - �Ҫi����د��t��'");
define ('_INSTALL_CONF_METAKEYS', "'mambo, Mambo, Mambo����, mambochina, mambo����, php, mysql, ����د�, �ۧU�د�'");
define ('_INSTALL_CONF_LANGUAGE_REF', "zh_CN");
define ('_INSTALL_CHMOD_DIR', "<u>����</u>: �ؿ��v�����\���C");
define ('_INSTALL_CHMOD_DIR_FAIL', "<u>����</u>: �ؿ��v���L�k���A�Ф�u���H�U�ؿ����v����0777:<br />");
define ('_INSTALL_JS_CHECKURL', "�|����J���I���}");
define ('_INSTALL_CONGRATULATION', "���ߧA�A" . _MAMBORS_VERSION . "�w�˦��\�I");
define ('_INSTALL_DESCRIPTION', "<p>�I���u�s�����I�v�N�i�H�s���A��Mambo���F�C�Ϊ��I���u�޲z���I�v�i��޲z��x�n���C</p>");
define ('_INSTALL_LOGIN', "�޲z���b���K�X");
define ('_INSTALL_ADMIN_USERNAME', "�Τ�W: admin");
define ('_INSTALL_ADMIN_PASSWORD', "�K�X: ");
define ('_INSTALL_VIEWSITE', "�s�����I");
define ('_INSTALL_LOGINADMIN', "�޲z���I");
define ('_INSTALL_ALERT', '�z��configuration.php�t�m���Υؿ����i�g�A�нƻs�U�ت����e�A�O�s��configuration.php�A�M��W�Ǩ�A�Ⱦ���Mambo�ؿ����C');

define ('_INSTALL_MAIL_DEL_INSTALLDIR','�`�N: ���F�w���_���A�ЧR�� installation �ؿ��A�]�A�䤤���Ҧ����M�l�ؿ�!');
define ('_INSTALL_MAIL_DEL_INSTALLDIR_RENAME','�`�N: "installation" �ؿ��w��W�� " %s "�A�@�����A�ݭn�A�ХߧY�R�����I'); // +++++ new

?>
