<?php
/**
* @version $Id: simplified_chinese.php,v 1.8  2007/12/14 11:27:52 lang3 Exp $
* @package Mambors
* @copyright (C) 2004 - 2007 Mambochina.net
* @license http://www.gnu.org/copyleft/gpl.html GNU/GPL
* Mambors is Free Software based on Mambo
* Powered By mambochina.net & mambors.org
*/

/** ensure this file is being included by a parent file */
defined( '_VALID_MOS' ) or die( '��ֱֹ�ӷ��ʱ��ļ���' );

// Name of CMS
DEFINE('_MAMBORS','������վϵͳ');
DEFINE('_MAMBORS_VERSION', _MAMBORS . $_VERSION->RELEASE . '.' . $_VERSION->DEV_LEVEL );
DEFINE('_D_MAMBORS','<a href="http://www.mambochina.net" target="_blank">' . _MAMBORS . '</a> ���� <a href="http://mambo-foundation.org" target="_blank">Mambo</a> ����������ѵ������������ѭ GNU/GPL ��Դ���Э�顣<br />' . '<a href="http://www.mambochina.net" target="_blank">' . _MAMBORS_VERSION . '</a> �� <a href="http://www.mambochina.net" target="_blank">Mambo�й�</a> �� <a href="http://www.mambors.org" target="_blank">Mambo Resource</a> ������ǿ������');

// Language and Encode of frontend language
DEFINE('_LANGUAGE','zh_CN');
DEFINE('_CHARSET','gb2312');
DEFINE('_ISO','charset=' . _CHARSET);

/** common */
DEFINE('_NOT_AUTH',"����Ȩ���ʴ���Դ");
DEFINE('_DO_LOGIN',"���¼.");
DEFINE('_VALID_AZ09',"������Ϸ���%s. �����пո񣬳��ȴ���%d���ַ�����ֻ����0-9,a-z,A-Z��");
DEFINE('_CMN_YES',"��(Yes)");
DEFINE('_CMN_NO',"��(No)");
DEFINE('_CMN_SHOW','��ʾ');
DEFINE('_CMN_HIDE','����');

DEFINE('_CMN_NAME',"����");
DEFINE('_CMN_DESCRIPTION',"����");
DEFINE('_CMN_SAVE',"����");
DEFINE('_CMN_CANCEL',"ȡ��");
DEFINE('_CMN_PRINT',"��ӡ");
DEFINE('_CMN_PDF',"���PDF");
DEFINE('_CMN_EMAIL',"E-mail");
DEFINE('_ICON_SEP','|');
DEFINE('_CMN_PARENT','�ϲ���');
DEFINE('_CMN_ORDERING',"����");
DEFINE('_CMN_ACCESS',"Ȩ�޼���");
DEFINE('_CMN_SELECT',"ѡ��");

DEFINE('_CMN_NEXT',"��һҳ");
DEFINE('_CMN_NEXT_ARROW',"&gt;&gt;");
DEFINE('_CMN_PREV',"��һҳ");
DEFINE('_CMN_PREV_ARROW',"&lt;&lt; ");

DEFINE('_CMN_SORT_NONE',"˳��");
DEFINE('_CMN_SORT_ASC',"˳��");
DEFINE('_CMN_SORT_DESC',"����");

DEFINE('_CMN_NEW',"�½�");
DEFINE('_CMN_NONE',"��");
DEFINE('_CMN_LEFT',"�����");
DEFINE('_CMN_RIGHT',"�Ҷ���");
DEFINE('_CMN_CENTER',"����");
DEFINE('_CMN_TOP','����');
DEFINE('_CMN_BOTTOM','�ײ�');

DEFINE('_CMN_PUBLISHED',"�Ѿ�����");
DEFINE('_CMN_UNPUBLISHED',"��δ����");

DEFINE('_CMN_EDIT_HTML','�༭ HTML');
DEFINE('_CMN_EDIT_CSS','�༭ CSS');
DEFINE('_CMN_DELETE','ɾ��');
DEFINE('_CMN_FOLDER',"Ŀ¼");
DEFINE('_CMN_SUBFOLDER',"��Ŀ¼");
DEFINE('_CMN_OPTIONAL',"��ѡ");
DEFINE('_CMN_REQUIRED',"����");

DEFINE('_CMN_CONTINUE',"����");

DEFINE('_CMN_NEW_ITEM_LAST','�½���Ŀ�������λ��');
DEFINE('_CMN_NEW_ITEM_FIRST','�½���Ŀ������ǰλ��');
DEFINE('_LOGIN_INCOMPLETE','����д�����������.');
DEFINE('_LOGIN_BLOCKED','���ĵ�¼������.��͹���Ա��ϵ.');
DEFINE('_LOGIN_INCORRECT','�û��������벻��ȷ. ������һ��');
DEFINE('_LOGIN_NOADMINS','�����ܵ�¼��ϵͳ��δ��ʼ��.');
DEFINE('_CMN_JAVASCRIPT','���棡Javascript ���ܱ���򿪣���������������');

DEFINE('_NEW_MESSAGE','���¶��š�');
DEFINE('_MESSAGE_FAILED','�û��Ѿ���ס�ռ��䣬���ŷ���ʧ�ܡ�');

DEFINE('_CMN_IFRAMES', '��ѡ���������ʹ�ã��ǳ��ź��������������֧��Ƕ����(Inline Frames)');

DEFINE('_INSTALL_WARN','���ڰ�ȫ���ǣ�����ȫɾ�� installation Ŀ¼�е������ļ�����Ŀ¼��Ȼ��ˢ��һ�¡�');
DEFINE('_TEMPLATE_WARN','<font color=\"red\"><b>ģ���ļ������ڣ�����ң�</b></font>');
DEFINE('_NO_PARAMS','����Ŀû�в���');
DEFINE('_HANDLER','������δ�������͡�');

/** mambots */
DEFINE('_TOC_JUMPTO',"��ת");

/**  content */
DEFINE('_READ_MORE','�Ķ�ȫ��...');
DEFINE('_READ_MORE_REGISTER','ע����Ķ�ȫ��...');
DEFINE('_MORE','����...');
DEFINE('_ON_NEW_CONTENT', "һƪ��������[ %s ]�ύ������[ %s ]����Ԫ[ %s ]������[ %s ]" );
DEFINE('_SEL_CATEGORY','- ѡ����� -');
DEFINE('_SEL_SECTION','- ѡ��Ԫ -');
DEFINE('_SEL_AUTHOR','- ѡ������ -');
DEFINE('_SEL_POSITION','- ѡ��λ�� -');
DEFINE('_SEL_TYPE','- ѡ������ -');
DEFINE('_EMPTY_CATEGORY','�����ǿյ�');
DEFINE('_EMPTY_BLOG','û����Ŀ����ʾ');
DEFINE('_NOT_EXIST','�����ʵ�ҳ�治����.<br />������˵�ѡ�����ӽ���.');

/** classes/html/modules.php */
DEFINE('_BUTTON_VOTE','ͶƱ');
DEFINE('_BUTTON_RESULTS','���');
DEFINE('_USERNAME','�û���');
DEFINE('_LOST_PASSWORD','��������');
DEFINE('_PASSWORD','����');
DEFINE('_BUTTON_LOGIN','��¼');
DEFINE('_BUTTON_LOGOUT','�˳���¼');
DEFINE('_NO_ACCOUNT','û���˻���');
DEFINE('_CREATE_ACCOUNT','����ע��');
DEFINE('_VOTE_POOR','��');
DEFINE('_VOTE_BEST','��');
DEFINE('_USER_RATING','�û�����');
DEFINE('_RATE_BUTTON','����');
DEFINE('_REMEMBER_ME','��ס��');

/** contact.php */
DEFINE('_ENQUIRY','�ʺ�');
DEFINE('_ENQUIRY_TEXT','����һ���ʺ��ţ�ͨ�� %s ���ԣ�');
DEFINE('_COPY_TEXT','���������͸� %s ���� %s ����Ϣ�ĸ���');
DEFINE('_COPY_SUBJECT','���ƣ�');
DEFINE('_THANK_MESSAGE','��л�������ţ�');
DEFINE('_CLOAKING','���ʼ���ַ��spam bots��������Ҫʹ�� Javascript ���������ġ�');
DEFINE('_CONTACT_HEADER_NAME','����');
DEFINE('_CONTACT_HEADER_POS','ְ��');
DEFINE('_CONTACT_HEADER_EMAIL','Email');
DEFINE('_CONTACT_HEADER_PHONE','�绰');
DEFINE('_CONTACT_HEADER_FAX','����');
DEFINE('_CONTACTS_DESC','��վ��ϵ����Ϣ�б�');

/** classes/html/contact.php */
DEFINE('_CONTACT_TITLE','��ϵ��');
DEFINE('_EMAIL_DESCRIPTION','���� Email ����ϵ�ˣ�');
DEFINE('_NAME_PROMPT',' �������������֣�');
DEFINE('_EMAIL_PROMPT',' ����������email��ַ��');
DEFINE('_MESSAGE_PROMPT',' ������������Ϣ���ݣ�');
DEFINE('_SEND_BUTTON','����');
DEFINE('_CONTACT_FORM_NC','��ȷ�ϱ�������ȷ.');
DEFINE('_CONTACT_TELEPHONE','�绰: ');
DEFINE('_CONTACT_MOBILE','�ֻ���');
DEFINE('_CONTACT_FAX','����: ');
DEFINE('_CONTACT_EMAIL','Email��');
DEFINE('_CONTACT_NAME','������');
DEFINE('_CONTACT_POSITION','ְ��');
DEFINE('_CONTACT_ADDRESS','��ַ��');
DEFINE('_CONTACT_MISC','��ע��');
DEFINE('_CONTACT_SEL','ѡ����ϵ�ˣ�');
DEFINE('_CONTACT_NONE','û����ϵ����Ϣ�б�');
DEFINE('_EMAIL_A_COPY','�Ѵ���Ϣ����һ�ݵ����Լ��� Email ��ַ');
DEFINE('_CONTACT_DOWNLOAD_AS','���ص�ǰ����Ϊ');
DEFINE('_VCARD','VCard');

/** pageNavigation */
DEFINE('_PN_PAGE','ҳ��');
DEFINE('_PN_OF',' �� ');
DEFINE('_PN_START','��һҳ');
DEFINE('_PN_PREVIOUS','��һҳ');
DEFINE('_PN_NEXT','��һҳ');
DEFINE('_PN_END','���һҳ');
DEFINE('_PN_DISPLAY_NR','��ʾ');
DEFINE('_PN_RESULTS','��');

/** emailfriend */
DEFINE('_EMAIL_TITLE','��email������');
DEFINE('_EMAIL_FRIEND','��email�����ѡ�');
DEFINE('_EMAIL_FRIEND_ADDR','�����ѵ�email��');
DEFINE('_EMAIL_YOUR_NAME','����������');
DEFINE('_EMAIL_YOUR_MAIL','����email��');
DEFINE('_SUBJECT_PROMPT',' ���⣺');
DEFINE('_BUTTON_SUBMIT_MAIL','����email');
DEFINE('_BUTTON_CANCEL','ȡ��');
DEFINE('_EMAIL_ERR_NOINFO','������������Ч��email��ַ.');
DEFINE('_EMAIL_MSG',' ���� "%s" վ������¡������������� %s ( %s )���͸����ġ���ͨ���������ӷ��ʣ� %s');
DEFINE('_EMAIL_INFO','�����ˣ�');
DEFINE('_EMAIL_SENT','�Ѿ����͸���');
DEFINE('_PROMPT_CLOSE','�ر�');

/** classes/html/content.php */
DEFINE('_AUTHOR_BY', ' Ͷ�壺');
DEFINE('_WRITTEN_BY', ' ���ߣ�');
DEFINE('_LAST_UPDATED', '�������');
DEFINE('_BACK','����');
DEFINE('_LEGEND','ͼ��');
DEFINE('_DATE','����');
DEFINE('_ORDER_DROPDOWN','����');
DEFINE('_HEADER_TITLE','����');
DEFINE('_HEADER_AUTHOR','����');
DEFINE('_HEADER_SUBMITTED','�ύ');
DEFINE('_HEADER_HITS','���');
DEFINE('_E_EDIT','�༭');
DEFINE('_E_ADD','����');
DEFINE('_E_WARNUSER','��ȡ�����߱������ڱ༭�����ݡ�');
DEFINE('_E_WARNTITLE','�����������');
DEFINE('_E_WARNTEXT','������������');
DEFINE('_E_WARNCAT','��ѡ��һ������');
DEFINE('_E_CONTENT','����');
DEFINE('_E_TITLE','����:');
DEFINE('_E_SECTION','��Ԫ:');
DEFINE('_E_CATEGORY','����:');
DEFINE('_E_INTRO','ժҪ');
DEFINE('_E_MAIN','����');
DEFINE('_E_MOSIMAGE','���� {mosimage}');
DEFINE('_E_IMAGES','ͼƬ');
DEFINE('_E_GALLERY_IMAGES','ͼ��ͼƬ');
DEFINE('_E_CONTENT_IMAGES','����ͼƬ');
DEFINE('_E_EDIT_IMAGE','�༭ͼƬ');
DEFINE('_E_INSERT','����');
DEFINE('_E_UP','����');
DEFINE('_E_DOWN','����');
DEFINE('_E_REMOVE','ɾ��');
DEFINE('_E_SOURCE','��Դ��');
DEFINE('_E_ALIGN','���У�');
DEFINE('_E_ALT','�������֣�');
DEFINE('_E_BORDER','�߿�');
DEFINE('_E_CAPTION','����');
DEFINE('_E_APPLY','Ӧ��');
DEFINE('_E_PUBLISHING','����');
DEFINE('_E_STATE','״̬��');
DEFINE('_E_AUTHOR_ALIAS','���߱�����');
DEFINE('_E_ACCESS_LEVEL','Ȩ�޼���');
DEFINE('_E_ORDERING','����');
DEFINE('_E_START_PUB','��ʼ������');
DEFINE('_E_FINISH_PUB','��ɷ�����');
DEFINE('_E_SHOW_FP','����ҳ��ʾ��');
DEFINE('_E_HIDE_TITLE','���ر��⣺');
DEFINE('_E_METADATA','Ԫ����');
DEFINE('_E_M_DESC','������');
DEFINE('_E_M_KEY','�ؼ��ʣ�');
DEFINE('_E_SUBJECT','���⣺');
DEFINE('_E_EXPIRES','��Ч�ڣ�');
DEFINE('_E_VERSION','�汾��');
DEFINE('_E_ABOUT','����');
DEFINE('_E_CREATED','������');
DEFINE('_E_LAST_MOD','�����£�');
DEFINE('_E_HITS','�����');
DEFINE('_E_SAVE','����');
DEFINE('_E_CANCEL','ȡ��');
DEFINE('_E_REGISTERED','��ע���û��ɷ���');
DEFINE('_E_ITEM_INFO','ҳ����Ϣ');
DEFINE('_E_ITEM_SAVED','ҳ���ѳɹ����档');
DEFINE('_ITEM_PREVIOUS','&lt; ��һƪ');
DEFINE('_ITEM_NEXT','��һƪ &gt;');


/** content.php */
DEFINE('_ORDER_DROPDOWN_DA','����˳��');
DEFINE('_ORDER_DROPDOWN_DD','���ڽ���');
DEFINE('_ORDER_DROPDOWN_TA','����˳��');
DEFINE('_ORDER_DROPDOWN_TD','���⽵��');
DEFINE('_ORDER_DROPDOWN_HA','���˳��');
DEFINE('_ORDER_DROPDOWN_HD','�������');
DEFINE('_ORDER_DROPDOWN_AUA','����˳��');
DEFINE('_ORDER_DROPDOWN_AUD','���߽���');
DEFINE('_ORDER_DROPDOWN_O','����');
DEFINE('_SELECT_CAT','ѡ�����');
DEFINE('_SELECT_SEC','ѡ��Ԫ');

/** poll.php */
DEFINE('_ALERT_ENABLED','�����cookie!');
DEFINE('_ALREADY_VOTE','�������Ѿ�Ͷ��һƱ��!');
DEFINE('_NO_SELECTION','����û���κ�ѡ��������ͶƱ');
DEFINE('_THANKS',"��л����ͶƱ!");
DEFINE('_SELECT_POLL',"�����б���ѡ��ͶƱ");

/** classes/html/poll.php */
DEFINE('_JAN','һ��');
DEFINE('_FEB','����');
DEFINE('_MAR','����');
DEFINE('_APR','����');
DEFINE('_MAY','����');
DEFINE('_JUN','����');
DEFINE('_JUL','����');
DEFINE('_AUG','����');
DEFINE('_SEP','����');
DEFINE('_OCT','ʮ��');
DEFINE('_NOV','ʮһ��');
DEFINE('_DEC','ʮ����');
DEFINE('_POLL_TITLE','������');
DEFINE('_SURVEY_TITLE','�������');
DEFINE('_NUM_VOTERS','ͶƱ��');
DEFINE('_FIRST_VOTE','��һ��ͶƱ');
DEFINE('_LAST_VOTE','���һ��ͶƱ');
DEFINE('_SEL_POLL','��ѡ��ͶƱ');
DEFINE('_NO_RESULTS','���ε��黹û��ͶƱ��¼��');

/** registration.php */
DEFINE('_ERROR_PASS','�Բ���δ�ҵ����û�');
DEFINE('_NEWPASS_MSG','�û� $checkusername ʹ�ô�email\n'
.'����$mosConfig_live_site ���û�������һ��������.\n\n'
.' �����������ǣ�$newpass\n\n �����û�������������룬���ģ�ֻ�����Լ���������ţ�û�������ˡ�'
.' �������������Ļ��������ô��������¼��Ȼ���ٸ������롣');
DEFINE('_NEWPASS_SUB','$_sitename ���� $checkusername ��������');
DEFINE('_NEWPASS_SENT','�µ��û������Ѿ����������ͣ�');
DEFINE('_REGWARN_NAME','�������������ơ�');
DEFINE('_REGWARN_UNAME','�������û�����');
DEFINE('_REGWARN_MAIL','��������Ч��email��ַ��');
DEFINE('_REGWARN_PASS','������һ����Ч������. �����пո񣬳��ȴ���6λ������ֻ���� 0-9,a-z,A-Z');
DEFINE('_REGWARN_VPASS1','���ٴ�������������.');
DEFINE('_REGWARN_VPASS2','������������벻��,����������.');
DEFINE('_REGWARN_INUSE','����û����Ѿ���ʹ����,����ȡһ���û���.');
DEFINE('_REGWARN_EMAIL_INUSE', '�� e-mail �Ѿ�����ע���ˡ��������������Ļ������� "��������" ���ӣ��µ����뽫���͸��㡣');
DEFINE('_SEND_SUB','%s�û�����ϸ������%s');
DEFINE('_USEND_MSG_ACTIVATE','%s�����ã�

��л���� %s ע�ᣬ����ʻ��Ѿ���������ʹ��֮ǰ�����ȼ�������
Ҫ�����ʻ���������������ӣ���������Ƶ�������д򿪣�
%s

������������������û����������¼ %s ��

Username - %s
Password - %s');
DEFINE('_USEND_MSG', "%s�����ã�

��л���� %s ע�ᡣ

��������ע����û����������¼ %s ��");
DEFINE('_USEND_MSG_NOPASS','$name�����ã�,\n\n���Ѿ���Ϊ $mosConfig_live_site ���û���\n'
.'������ע����û����������¼$mosConfig_live_site��\n\n'
.'�벻Ҫ�ظ�����ţ�����ϵͳ�Զ����͵ġ�\n');
DEFINE('_ASEND_MSG','%s�����ã�

�и����û����� %s ע�ᡣ
��������ϸ��Ϣ��

���� - %s
e-mail - %s
�û��� - %s

�벻Ҫ�ظ�����ţ�����ϵͳ�Զ����͵ġ�');
DEFINE('_REG_COMPLETE_NOPASS','<div class="componentheading">ע����ɣ�</div><br />&nbsp;&nbsp;'
.'�����ڿ��Ե�¼�ˡ�<br />&nbsp;&nbsp;');
DEFINE('_REG_COMPLETE', '<div class="componentheading">ע����ɣ�</div><br />�����ڿ��Ե�¼�ˡ�');
DEFINE('_REG_COMPLETE_ACTIVATE', '<div class="componentheading">ע����ɣ�</div><br />�����ʻ��Ѿ����������������Ѿ����͵����� e-mail ��ַ���յ�e-mail�������������ӣ����������ʻ���Ȼ����ܵ�¼ϵͳ��');
DEFINE('_REG_ACTIVATE_COMPLETE', '<div class="componentheading">������ɣ�</div><br />�����ʻ��Ѿ��ɹ������������ע����û����������¼��');
DEFINE('_REG_ACTIVATE_NOT_FOUND', '<div class="componentheading">��Ч�ļ������ӣ�</div><br />ϵͳ���ݿ��в����ڴ��ʻ������߸��ʻ��Ѿ������ˡ�');

/** classes/html/registration.php */
DEFINE('_PROMPT_PASSWORD','���������ˣ�');
DEFINE('_NEW_PASS_DESC','�������û�����email��ַ,Ȼ����[��������]��ť.<br />'
.'�����ܿ��յ�һ������������email��ʹ������������¼��');
DEFINE('_PROMPT_UNAME','�û�����');
DEFINE('_PROMPT_EMAIL','E-mail ��ַ��');
DEFINE('_BUTTON_SEND_PASS','��������');
DEFINE('_REGISTER_TITLE','�û�ע��');
DEFINE('_REGISTER_NAME','���ƣ�');
DEFINE('_REGISTER_UNAME','�û�����');
DEFINE('_REGISTER_EMAIL','E-mail��');
DEFINE('_REGISTER_PASS','���룺');
DEFINE('_REGISTER_VPASS','����У�飺');
DEFINE('_REGISTER_REQUIRED','�� (*) �ŵ��������Ǳ����');
DEFINE('_BUTTON_SEND_REG','ע��');
DEFINE('_SENDING_PASSWORD','�����뽫���͵�����email��ַ��<br />�յ�������������Ե�¼��Ȼ���޸����롣');

/** classes/html/search.php */
DEFINE('_SEARCH_TITLE','����');
DEFINE('_PROMPT_KEYWORD','�����ؼ���');
DEFINE('_SEARCH_MATCHES','���� %d ��ƥ����');
DEFINE('_CONCLUSION','һ���ҵ� $totalRows ��ƥ��ļ�¼. <b>$searchword</b> ');
DEFINE('_NOKEYWORD','û���ҵ�ƥ��ļ�¼');
DEFINE('_IGNOREKEYWORD','������ʱ������һ�������������Ĺؼ���');
DEFINE('_SEARCH_ANYWORDS','����ؼ���');
DEFINE('_SEARCH_ALLWORDS','���йؼ���');
DEFINE('_SEARCH_PHRASE','��ȷ����');
DEFINE('_SEARCH_NEWEST','�µ�����ǰ��');
DEFINE('_SEARCH_OLDEST','�ɵ�����ǰ��');
DEFINE('_SEARCH_POPULAR','�����е�');
DEFINE('_SEARCH_ALPHABETICAL','��ĸ˳��');
DEFINE('_SEARCH_CATEGORY','��Ԫ/����');

/** templates/*.php */
DEFINE('_DATE_FORMAT','Y-m-d');  //Uses PHP's DATE Command Format - Depreciated
/**
* Modify this line to reflect how you want the date to appear in your site
*
*e.g. DEFINE("_DATE_FORMAT_LC","%A, %d %B %Y %H��%M"); //Uses PHP's strftime Command Format
*/
DEFINE('_DATE_FORMAT_LC',"%Y-%m-%d"); //Uses PHP's strftime Command Format
DEFINE('_DATE_FORMAT_LC2',"%Y-%m-%d %H:%M");
DEFINE('_SEARCH_BOX','����...');
DEFINE('_NEWSFLASH_BOX','��Ѷ��');
DEFINE('_MAINMENU_BOX','���˵�');

/** classes/html/usermenu.php */
DEFINE('_UMENU_TITLE','�û��˵�');
DEFINE('_HI','����, ');

/** user.php */
DEFINE('_SAVE_ERR','��������дҪ���ÿһ��.');
DEFINE('_THANK_SUB','��л�����ύ. ���ύ�����ݻ��ڷ�����վ��֮ǰ�������,�����ĵȴ�.');
DEFINE('_UP_SIZE','�������ϴ�����15K���ļ�.');
DEFINE('_UP_EXISTS','��Ϊ $userfile_name ��ͼƬ�Ѿ�����.���������������ļ�,����һ��.');
DEFINE('_UP_COPY_FAIL','����ʧ��');
DEFINE('_UP_TYPE_WARN','��ֻ���ϴ�JPG����GIF��ʽ��ͼƬ');
DEFINE('_MAIL_SUB','�µĴ��������');
DEFINE('_MAIL_MSG','����, $adminName,\n\nA ��һƪ�µ����´���� $type, $title (���ߣ�$author )'
.'����վ�㣺 $mosConfig_live_site .\n'
.'������¼ $mosConfig_live_site/administrator �������ƪ $type.\n\n'
.'�벻Ҫ�ظ�����ţ�����ϵͳ�Զ����͵ġ�\n');
DEFINE('_PASS_VERR1','������޸�����������,��������һ��ȷ���޸�.');
DEFINE('_PASS_VERR2','������޸�����������,��ȷ���������������һ��.');
DEFINE('_UNAME_INUSE','���û����Ѿ���ռ��.');
DEFINE('_UPDATE','����');
DEFINE('_USER_DETAILS_SAVE','���������Ѿ����档');
DEFINE('_USER_LOGIN','�û���¼');

/** components/com_user */
DEFINE('_EDIT_TITLE','�޸�������ϸ��Ϣ');
DEFINE('_YOUR_NAME','������');
DEFINE('_EMAIL','e-mail��');
DEFINE('_UNAME','�û�����');
DEFINE('_PASS','���룺');
DEFINE('_VPASS','����ȷ�ϣ�');
DEFINE('_SUBMIT_SUCCESS','�ύ�ɹ�');
DEFINE('_SUBMIT_SUCCESS_DESC','���ύ�������Ѿ������˹���Ա.�ڷ�����վ����֮ǰ,��Ҫ�������.�����ĵȴ�.');
DEFINE('_WELCOME','��ӭ!');
DEFINE('_WELCOME_DESC','��ӭ���뱾վ�û���');
DEFINE('_CONF_CHECKED_IN','��ȡ������Ŀ���ڶ���ȫ���Ż���.');
DEFINE('_CHECK_TABLE','����');
DEFINE('_CHECKED_IN','�Ѿ��Ż� ');
DEFINE('_CHECKED_IN_ITEMS',' ��Ŀ');
DEFINE('_PASS_MATCH','���벻��');

/** components/com_banners */
DEFINE('_BNR_CLIENT_NAME','������ͻ�ѡ��һ�����ơ�');
DEFINE('_BNR_CONTACT','������ͻ�ѡ��һ����ϵ�ˡ�');
DEFINE('_BNR_VALID_EMAIL','������ͻ�ѡ��һ����Ч��E-mail��ַ��');
DEFINE('_BNR_CLIENT','����ѡ��һ���ͻ���');
DEFINE('_BNR_NAME','��������Ĺ��ѡ��һ�����ơ�');
DEFINE('_BNR_IMAGE','��������Ĺ��ѡ��һ��ͼƬ��');
DEFINE('_BNR_URL','��������Ĺ��ѡ�� URL��ַ�����Զ���Ĵ��롣');
/** components/com_login */
DEFINE('_ALREADY_LOGIN','���Ѿ���¼����!');
DEFINE('_LOGOUT','��������˳�');
DEFINE('_LOGIN_TEXT','���¼,��������ȫ���ʱ�վ'); 
DEFINE('_LOGIN_SUCCESS','��¼�ɹ�');
DEFINE('_LOGOUT_SUCCESS','�˳��ɹ�');
DEFINE('_LOGIN_DESCRIPTION','���¼�����ܷ��ʸ�������');
DEFINE('_LOGOUT_DESCRIPTION','���Ѿ���¼����������');


/** components/com_weblinks */
DEFINE('_WEBLINKS_TITLE','����');
DEFINE('_WEBLINKS_DESC','������һЩ���վ��,�������ӽ���.');
DEFINE('_HEADER_TITLE_WEBLINKS','����');
DEFINE('_SECTION','���ࣺ');
DEFINE('_SUBMIT_LINK','����һ��������');
DEFINE('_URL','��ַ��');
DEFINE('_URL_DESC','������');
DEFINE('_NAME','���ƣ�');
DEFINE('_WEBLINK_EXIST','�Ѿ���ͬ�������Ӵ��ڣ����޸�����.');
DEFINE('_WEBLINK_TITLE','��վ���ӱ����б��⡣');

/** components/com_newfeeds */
DEFINE('_FEED_NAME','���ŵ�������');
DEFINE('_FEED_ARTICLES','������');
DEFINE('_FEED_LINK','���ŵ�������');

/** whos_online.php */
DEFINE('_WE_HAVE', '������ ');
DEFINE('_AND', ' ��');
DEFINE('_GUEST_COUNT','$guest_array λ�ÿ�');
DEFINE('_GUESTS_COUNT','$guest_array λ�ÿ�');
DEFINE('_MEMBER_COUNT','$user_array λ��Ա');
DEFINE('_MEMBERS_COUNT','$user_array λ��Ա');
DEFINE('_ONLINE',' ����');
DEFINE('_NONE','��������');

/** modules/mod_stats.php */
DEFINE('_TIME_STAT','ʱ��');
DEFINE('_MEMBERS_STAT','�û�');
DEFINE('_HITS_STAT','���');
DEFINE('_NEWS_STAT','����');
DEFINE('_LINKS_STAT','����');
DEFINE('_VISITORS','������');

/** /adminstrator/components/com_menus/admin.menus.html.php */
DEFINE('_MAINMENU_HOME','* �˲˵�[���˵�]�ĵ�һ�������Ĳ˵��Ĭ��Ϊ��վ��`��ҳ` *');
DEFINE('_MAINMENU_DEL','* �㲻��ɾ���� �˵� ��ѡ���ʵ��Ĳ���*');
DEFINE('_MENU_GROUP','* ��Щ�˵����ͳ�����һ�����ϵ����� *');


/** administrators/components/com_users */
DEFINE('_NEW_USER_MESSAGE_SUBJECT', '���û�����' );
DEFINE('_NEW_USER_MESSAGE', '%s�����ã�


����Ա�� %s ������һ���û���

�������û��������룬������¼ %s��

�û��� - %s
���� - %s


�벻Ҫ�ظ�����ţ�����ϵͳ�Զ����͵ġ�');

/** administrators/components/com_massmail */
DEFINE('_MASSMAIL_MESSAGE', "���� '%s' ���ż�

��Ϣ��
" );

/** includes/mamboxml.php */
DEFINE('_DONT_USE_IMAGE','- ��ʹ��ͼƬ -');
DEFINE('_USE_DEFAULT_IMAGE','- ʹ��Ĭ��ͼƬ -');

/** global frontend translation string */
global $TR_STRS;
if (!isset($TR_STRS)){
	$TR_STRS = array();
}
$TR_STRS[strtolower('Banners')] = '������';
$TR_STRS[strtolower('Search')] = '����';
$TR_STRS[strtolower('Main Menu')] = '���˵�';
$TR_STRS[strtolower('User Menu')] = '�û��˵�';
$TR_STRS[strtolower('Other Menu')] = '�����˵�';
$TR_STRS[strtolower('Login Form')] = '��¼��';
$TR_STRS[strtolower('Syndicate')] = 'RSS �ۺ�';
$TR_STRS[strtolower('Statistics')] = 'ͳ��';
$TR_STRS[strtolower('Template Chooser')] = 'ģ��ѡ����';
$TR_STRS[strtolower('Sections')] = '��Ԫ';
$TR_STRS[strtolower('Related Items')] = '�������';
$TR_STRS[strtolower('Wrapper')] = 'Ƕ��ҳ��';
$TR_STRS[strtolower('Newsflash')] = '���ſ�Ѷ';
$TR_STRS[strtolower('Polls')] = '���ߵ���';
$TR_STRS[strtolower("Who's Online")] = "˭����";
$TR_STRS[strtolower('Random Image')] = '���ͼƬ';
$TR_STRS[strtolower('Top Menu')] = '�����˵�';
$TR_STRS[strtolower('Latest News')] = '��������';
$TR_STRS[strtolower('Popular')] = '��������';

?>
