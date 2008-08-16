<?php
/**
* @version $Id: install_simplified_chinese.php,v 1.5 2007/05/31 22:21:13 lang3 Exp $
* @package MMLi
* @copyright (C) 2000 - 2004 Miro International Pty Ltd
* @license http://www.gnu.org/copyleft/gpl.html GNU/GPL
* @edited by mic (developer@mamboworld.net) www.mamboworld.net
* Mambo is Free Software
*/
// edited for Mambo 4.5.3 by Akarawuth Tamrareang  http://www.mambohub.com
// edited by mic (mic@mamboworld.net) - 2005.01.07

/*
 install_simplified_chinese.php
 ������վϵͳ(Mambors)��װ�������������ļ�
 Mambo�й���Ŀ�� http://www.mambochina.net
 2007-05-31
*/

//-- Common
define ('_INSTALL_ISO','gb2312');
define ('_INSTALL_YES', "��");
define ('_INSTALL_NO', "��");
define ('_INSTALL_AVAILABLE', "����");
define ('_INSTALL_UNAVAILABLE', "������");
define ('_INSTALL_WRITABLE', "��д");
define ('_INSTALL_ON', "����");
define ('_INSTALL_OFF', "�ر�");
define ('_INSTALL_UNWRITABLE', "����д");
define ('_INSTALL_NEXT', "��һ�� >>");
define ('_INSTALL_BACK', '<< ��һ��'); // ##### new

//--Language choice
define ('_INSTALL_LANGUAGE_SECTION', "Mambo ��װ����");
define ('_INSTALL_LANGUAGE_DESCRIPTION', "��װ�������������������Զ�ѡ��װ���ԣ������Կ�ѡ����һ����������װ��");
define ('_INSTALL_LANGUAGE_LABEL', "��װ����");
define ('_INSTALL_LANGUAGE_CHECK','���Լ��');
define ('_INSTALL_LANGUAGE_CHOOSE','- ��ѡ�� -');

//-- Index.php
	//--Left menu
define ('_INSTALL_LICENSE_ALERT', "���Ķ�/�������Э���Լ�����װ");
define ('_MAMBO_WEB_INSTALLER', _MAMBORS_VERSION . " - ��վ��װ���� :: ");  //  Add Title  by Ak.
define ('_INSTALL_MAMBO', "Mambo ��װ����");
define ('_INSTALL_STEP_PRECHECK', "��װǰ�ļ��");
define ('_INSTALL_STEP_LICENSE', "���Э��");
define ('_INSTALL_STEP_1', "��һ��");
define ('_INSTALL_STEP_2', "�ڶ���");
define ('_INSTALL_STEP_3', "������");
define ('_INSTALL_STEP_4', "���Ĳ�");
	//--Pre-check zone
define ('_INSTALL_PRECHECK_TITLE', "��װǰ�ļ��");
define ('_INSTALL_PRECHECK_SECTION', "��װǰ�ļ��");
define ('_INSTALL_PRECHECK_DESCRIPTION', "����һ���к�ɫ��ʾ�����޸ĸ�����ȷ��������װ��");
define ('_INSTALL_PHP_VERSION','- <strong>PHP</strong> �汾 >= 4.1.0');
define ('_INSTALL_PHP_ZLIB', '- <strong>zlib</strong> ѹ��֧��');
define ('_INSTALL_PHP_XML', '- <strong>XML</strong> ֧��');
define ('_INSTALL_PHP_MYSQL', '- <strong>MySQL</strong> ֧��');
define ('_INSTALL_CONFIG_FILE','- <strong>Mambo</strong> �����ļ�');
define ('_INSTALL_PHP_CONF', "��װ��Ȼ���Լ�����������Ϣ���ڰ�װ�������ʾ��ֻ�踴��������Ϣ����Ϊconfiguration.php�ϴ�����.");
define ('_INSTALL_SESSION', "- Session ����·��");
define ('_INSTALL_SESSION_NOT_SET','δ����');

	//--recommanded
define ('_INSTALL_PHP_SETTINGS_TITLE', "�Ƽ�����:");
define ('_INSTALL_PHP_SETTINGS_DESCRIPTION', "�����Ǳ�֤�� Mambo ���ݵ� PHP �Ƽ����ã��� Mambo ���п��������ò���ȫһ�µ���������С�");
define ('_INSTALL_PHP_FONCTION', "PHP����");
define ('_INSTALL_PHP_FONCTION_IDEAL', "�Ƽ�����");
define ('_INSTALL_PHP_FONCTION_ACTUAL', "ʵ������");
define ('_INSTALL_PHP_MODE', "Safe Mode:");
define ('_INSTALL_PHP_ERRORS', "Display Errors:");
define ('_INSTALL_PHP_UPLOAD', "File Uploads:");
define ('_INSTALL_PHP_QUOTES_GPC', "Magic Quotes GPC:");
define ('_INSTALL_PHP_QUOTES_RUNTIME', "Magic Quotes Runtime:");
define ('_INSTALL_PHP_GLOBALS', "Register Globals:");
define ('_INSTALL_PHP_OUTBUFFER', "Output Buffering:");
define ('_INSTALL_PHP_AUTOSTART_SESSION', "Session auto start:");
	//--file permission
define ('_INSTALL_DIRFILE_PERMS', "Ŀ¼���ļ���Ȩ��:");
define ('_INSTALL_DIRFILE_PERMS_INFO', "�����ļ��б����п�д��Ȩ��, Mambo �����������С����������������д�������ڷ��������޸���������Ϊ��д��[��: ͨ��FTP��������ļ�����(CHMOD)Ϊ0777]��");

//--Install.php
define ('_INSTALL_LICENSE_TITLE', "���Э��");
define ('_INSTALL_LICENSE_TYPE', "GNU/GPL ���Э��:");
define ('_INSTALL_LICENSE_CONDITION', "*** ������װ Mambo ֮ǰ��������ܸ�Э�� ***");
define ('_INSTALL_LICENSE_AGREE', "�ҽ��� GPL ���Э��");

//--Install1.php
define ('_INSTALL_DB_JS_HOSTNAME', '��������������');
define ('_INSTALL_DB_JS_USERNAME', '���������ݿ��û���');
define ('_INSTALL_DB_JS_BASENAME', '���������ݿ�����');
define ('_INSTALL_DB_JS_PASSWORD', '���������ݿ�����');
define('_INSTALL_DB_PASSWORD_VERRIFY',"У�� MySQL ����");    // Add by ninekrit
define ('_INSTALL_DB_JS_WARNING', '��ȷ�����е����ö���ȷ��?\nMambo���ڽ��������ṩ�����ý������ݿ�');
define ('_INSTALL_DB_SECTION', "MySQL ���ݿ�����:");
define ('_INSTALL_DB_HOSTNAME', "MySQL ��������");
define ('_INSTALL_DB_HOSTNAME_DESCRIPTION', 'ͨ��Ϊ localhost');
define ('_INSTALL_DB_USERNAME', "MySQL �û���");
define('_INSTALL_DB_USERNAME_DESC', "ʹ�� root �û����߿ռ����ṩ���û���");
define ('_INSTALL_DB_PASSWORD', "MySQL ����");
define ('_INSTALL_DB_BASENAME', "MySQL ���ݿ�����");
define ('_INSTALL_DB_PREFIX', "MySQL ���ݱ�ǰ׺");
define ('_INSTALL_DB_PREFIX_DESC', "��Щ��������ֻ��һ�����ݿ⣬���ǿ����ò�ͬ�ı�ǰ׺�����ֺͰ�װ�������ϵͳ��<br />ע�⣺�����ñ�ǰ׺ 'old_' ����Ϊ�����ڱ������ݱ�");
define ('_INSTALL_DB_DROPTABLES', "ɾ���ɵ����ݱ�");
define ('_INSTALL_DB_BACKUP', "���ݾɵ����ݱ�");
define ('_INSTALL_DB_BACKUP_DESCRIPTION', "����֮ǰ��װ������ϵͳ���ݿ⣬��ǰ׺����Ϊ old_");
define ('_INSTALL_DB_SAMPLE_DATA', "��װ�������ݣ�");
define ('_INSTALL_DB_SAMPLE_DATA_DESC',"�������������������˽�������վϵͳ�����������Ϥ�������벻Ҫȡ����");


//--Install2.php
define ('_INSTALL_DB_ERROR1', "���ݿ����ô������δ���á�");
define ('_INSTALL_DB_ERROR2', "MySql�û������������");
define ('_INSTALL_DB_ERROR3', "��δ��д���ݿ����ơ�");
define ('_INSTALL_DB_ERROR4', "���ݿ����: ");
define ('INSTALL_DB_ERROR5', "�ṩ�����ݿ����벻ƥ�䣬������һ�Ρ�");
define ('_INSTALL_DB_DATAERROR', "���ݿ�������ݳ���!<br />�޷�������װ��");
define ('_INSTALL_DB_LOGERROR', "<br /><br />�����¼:<br />\n");

define ('_INSTALL_SITE_NONAME', "��δ������վ����");
define ('_INSTALL_JS_SITENAME', "������վ������");
define ('_INSTALL_JS_SITEURL', "������վ����ַ");
define ('_INSTALL_JS_PATH', "������վ��ľ���·��");
define ('_INSTALL_JS_EMAIL', "������վ�����Ա������Email");
define ('_INSTALL_JS_PASSWORD', "���������Ա����");
define ('_INSTALL_SITE_SECTION', "����վ������ơ���ַ������·���͹���ԱEmail");
define ('_INSTALL_SITE_DESCRIPTION', "ͨ����Ĭ�ϵ���ַ�;���·��������ȷ�ģ��벻Ҫ�޸ġ��������ȷ������ѯ�ռ��̻��߹���Ա��");
define ('_INSTALL_SITE_NAME', "վ������");
define ('_INSTALL_SITE_PATH', "����·��");
define ('_INSTALL_SITE_URL', "վ����ַ");
define ('_INSTALL_SUPERADMIN_EMAIL', "����ԱEmail");
define ('_INSTALL_SUPERADMIN_PASSWORD', "����Ա����");
define ('_INSTALL_ADMIN_PW','[ע: ����������Ϊ����Ҫ��]');

//--Install3.php
define ('_INSTALL_JS_CHECKEMAIL', "�����ṩһ����Ч��Email��ַ��");
define ('_INSTALL_JS_CHECKDB', "���ݿ����ô������δ����");
define ('_INSTALL_JS_CHECKSITENAME', "������վ������");
define ('_INSTALL_CONF_SITE_MAINTAIN', "'��վ����ά�����С�<br /> ���Ժ�������'");
define ('_INSTALL_CONF_SITE_UNAVAILABLE', "'��վ��ʱ�������⡣<br /> ��֪ͨ����Ա��'");
define ('_INSTALL_CONF_METADESC', "'Mambo - �������ܽ�վϵͳ'");
define ('_INSTALL_CONF_METAKEYS', "'mambo, Mambo, Mambo�й�, mambochina, mambo�й�, php, mysql, ���ܽ�վ, ������վ'");
define ('_INSTALL_CONF_LANGUAGE_REF', "zh_CN");
define ('_INSTALL_CHMOD_DIR', "<u>��ʾ</u>: Ŀ¼Ȩ�޳ɹ����ġ�");
define ('_INSTALL_CHMOD_DIR_FAIL', "<u>��ʾ</u>: Ŀ¼Ȩ���޷����ģ����ֹ���������Ŀ¼��Ȩ��Ϊ0777:<br />");
define ('_INSTALL_JS_CHECKURL', "��δ����վ����ַ");
define ('_INSTALL_CONGRATULATION', "��ϲ�㣬" . _MAMBORS_VERSION . "��װ�ɹ���");
define ('_INSTALL_DESCRIPTION', "<p>��������վ�㡱�Ϳ���������Mamboվ�ˡ����ߵ��������վ�㡱���й����̨��¼��</p>");
define ('_INSTALL_LOGIN', "����Ա�ʺ�����");
define ('_INSTALL_ADMIN_USERNAME', "�û���: admin");
define ('_INSTALL_ADMIN_PASSWORD', "����: ");
define ('_INSTALL_VIEWSITE', "���վ��");
define ('_INSTALL_LOGINADMIN', "����վ��");
define ('_INSTALL_ALERT', '����configuration.php�����ļ���Ŀ¼����д���븴���¿�����ݣ�����Ϊconfiguration.php��Ȼ���ϴ�����������MamboĿ¼�С�');

define ('_INSTALL_MAIL_DEL_INSTALLDIR','ע��: Ϊ�˰�ȫ�������ɾ�� installation Ŀ¼���������е������ļ�����Ŀ¼!');
define ('_INSTALL_MAIL_DEL_INSTALLDIR_RENAME','ע��: "installation" Ŀ¼�Ѹ���Ϊ " %s "��һ��������Ҫ��������ɾ������'); // +++++ new

?>
