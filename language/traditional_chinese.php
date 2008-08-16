<?php
/**
* @version $Id: traditional_chinese.php,v 1.8  2007/12/23 11:27:52 lang3 Exp $
* @package Mambors
* @copyright (C) 2004 - 2007 Mambochina.net
* @license http://www.gnu.org/copyleft/gpl.html GNU/GPL
* Mambors is Free Software based on Mambo
* Powered By mambochina.net & mambors.org
*/

/** ensure this file is being included by a parent file */
defined( '_VALID_MOS' ) or die( '�T����X�ݥ����I' );

// Name of CMS
DEFINE('_MAMBORS','�Ҫi�㯸�t��');
DEFINE('_MAMBORS_VERSION', _MAMBORS . $_VERSION->RELEASE . '.' . $_VERSION->DEV_LEVEL );
DEFINE('_D_MAMBORS','<a href="http://www.mambochina.net" target="_blank">' . _MAMBORS . '</a> ��� <a href="http://mambo-foundation.org" target="_blank">Mambo</a> �}�o�A�O�K�O���ۥѳn��A��` GNU/GPL �}���\�i��ĳ�C<br />' . '<a href="http://www.mambochina.net" target="_blank">' . _MAMBORS_VERSION . '</a> �� <a href="http://www.mambochina.net" target="_blank">Mambo����</a> �M <a href="http://www.mambors.org" target="_blank">Mambo Resource</a> �p�X�W�j�}�o�C');

// Language and Encode of frontend language
DEFINE('_LANGUAGE','zh_TW');
DEFINE('_CHARSET','BIG5');
DEFINE('_ISO','charset=' . _CHARSET);

/** common */
DEFINE('_NOT_AUTH',"�z�L�v�X�ݦ��귽");
DEFINE('_DO_LOGIN',"�еn��.");
DEFINE('_VALID_AZ09',"�п�J�X�k��%s. ���঳�Ů�A���פj��%d�Ӧr�ŨåB�u�]�t0-9,a-z,A-Z�C");
DEFINE('_CMN_YES',"�O(Yes)");
DEFINE('_CMN_NO',"�_(No)");
DEFINE('_CMN_SHOW','���');
DEFINE('_CMN_HIDE','����');

DEFINE('_CMN_NAME',"�W��");
DEFINE('_CMN_DESCRIPTION',"�y�z");
DEFINE('_CMN_SAVE',"�O�s");
DEFINE('_CMN_CANCEL',"����");
DEFINE('_CMN_PRINT',"���L");
DEFINE('_CMN_PDF',"��XPDF");
DEFINE('_CMN_EMAIL',"E-mail");
DEFINE('_ICON_SEP','|');
DEFINE('_CMN_PARENT','�W�h���I');
DEFINE('_CMN_ORDERING',"�Ƨ�");
DEFINE('_CMN_ACCESS',"�v���ŧO");
DEFINE('_CMN_SELECT',"���");

DEFINE('_CMN_NEXT',"�U�@��");
DEFINE('_CMN_NEXT_ARROW',"&gt;&gt;");
DEFINE('_CMN_PREV',"�W�@��");
DEFINE('_CMN_PREV_ARROW',"&lt;&lt; ");

DEFINE('_CMN_SORT_NONE',"����");
DEFINE('_CMN_SORT_ASC',"����");
DEFINE('_CMN_SORT_DESC',"�ϧ�");

DEFINE('_CMN_NEW',"�s��");
DEFINE('_CMN_NONE',"�L");
DEFINE('_CMN_LEFT',"�����");
DEFINE('_CMN_RIGHT',"�k���");
DEFINE('_CMN_CENTER',"�~��");
DEFINE('_CMN_TOP','����');
DEFINE('_CMN_BOTTOM','����');

DEFINE('_CMN_PUBLISHED',"�w�g�o�G");
DEFINE('_CMN_UNPUBLISHED',"�|���o�G");

DEFINE('_CMN_EDIT_HTML','�s�� HTML');
DEFINE('_CMN_EDIT_CSS','�s�� CSS');
DEFINE('_CMN_DELETE','�R��');
DEFINE('_CMN_FOLDER',"�ؿ�");
DEFINE('_CMN_SUBFOLDER',"�l�ؿ�");
DEFINE('_CMN_OPTIONAL',"�i��");
DEFINE('_CMN_REQUIRED',"����");

DEFINE('_CMN_CONTINUE',"�~��");

DEFINE('_CMN_NEW_ITEM_LAST','�s�ر��ة�b�̫��m');
DEFINE('_CMN_NEW_ITEM_FIRST','�s�ر��ة�b�̫e��m');
DEFINE('_LOGIN_INCOMPLETE','�ж�g�m�W�M�K�X��.');
DEFINE('_LOGIN_BLOCKED','�z���n���Q����.�ЩM�޲z���pô.');
DEFINE('_LOGIN_INCORRECT','�Τ�W�αK�X�����T. �ЦA�դ@�M');
DEFINE('_LOGIN_NOADMINS','�z����n���C�t�Ω|����l��.');
DEFINE('_CMN_JAVASCRIPT','ĵ�i�IJavascript �\�ॲ�����}�A�~�ॿ�`�ާ@�C');

DEFINE('_NEW_MESSAGE','���s�u�H�C');
DEFINE('_MESSAGE_FAILED','�Τ�w�g�����c�A�u�H�o�e���ѡC');

DEFINE('_CMN_IFRAMES', '���ﶵ�N���ॿ�`�ϥΡA�D�`��ѡA�z���s����������O�J��(Inline Frames)');

DEFINE('_INSTALL_WARN','�X��w���Ҽ{�A�Ч����R�� installation �ؿ������Ҧ����M�l�ؿ��A�M���s�@�U�C');
DEFINE('_TEMPLATE_WARN','<font color=\"red\"><b>�Ҫ���󤣦s�b�I�Ьd��G</b></font>');
DEFINE('_NO_PARAMS','�����بS���Ѽ�');
DEFINE('_HANDLER','�B�z�����w�q�����C');

/** mambots */
DEFINE('_TOC_JUMPTO',"����");

/**  content */
DEFINE('_READ_MORE','�\Ū����...');
DEFINE('_READ_MORE_REGISTER','���U��\Ū����...');
DEFINE('_MORE','��h...');
DEFINE('_ON_NEW_CONTENT', "�@�g�s�峹��[ %s ]����A���D[ %s ]�A�椸[ %s ]�A����[ %s ]" );
DEFINE('_SEL_CATEGORY','- ��ܤ��� -');
DEFINE('_SEL_SECTION','- ��ܳ椸 -');
DEFINE('_SEL_AUTHOR','- ��ܧ@�� -');
DEFINE('_SEL_POSITION','- ��ܦ�m -');
DEFINE('_SEL_TYPE','- ������� -');
DEFINE('_EMPTY_CATEGORY','�����O�Ū�');
DEFINE('_EMPTY_BLOG','�S�����ب����');
DEFINE('_NOT_EXIST','�z�X�ݪ��������s�b.<br />�бq�D����ܳs���i�J.');

/** classes/html/modules.php */
DEFINE('_BUTTON_VOTE','�벼');
DEFINE('_BUTTON_RESULTS','���G');
DEFINE('_USERNAME','�Τ�W');
DEFINE('_LOST_PASSWORD','�ѰO�K�X');
DEFINE('_PASSWORD','�K�X');
DEFINE('_BUTTON_LOGIN','�n��');
DEFINE('_BUTTON_LOGOUT','�h�X�n��');
DEFINE('_NO_ACCOUNT','�S�����H');
DEFINE('_CREATE_ACCOUNT','���W���U');
DEFINE('_VOTE_POOR','�t');
DEFINE('_VOTE_BEST','�n');
DEFINE('_USER_RATING','�Τ����');
DEFINE('_RATE_BUTTON','����');
DEFINE('_REMEMBER_ME','�O���');

/** contact.php */
DEFINE('_ENQUIRY','�ݭ�');
DEFINE('_ENQUIRY_TEXT','�o�O�@�ʰݭԫH�A�q�L %s �ӦۡG');
DEFINE('_COPY_TEXT','�o�O�z�o�e�� %s �g�� %s ���������ƥ�');
DEFINE('_COPY_SUBJECT','�ƻs�G');
DEFINE('_THANK_MESSAGE','�P�±z���ӫH�I');
DEFINE('_CLOAKING','���l��a�}��spam bots�O�@�A�ݭn�ϥ� Javascript �\��Ӭd�\�C');
DEFINE('_CONTACT_HEADER_NAME','�W��');
DEFINE('_CONTACT_HEADER_POS','¾��');
DEFINE('_CONTACT_HEADER_EMAIL','Email');
DEFINE('_CONTACT_HEADER_PHONE','�q��');
DEFINE('_CONTACT_HEADER_FAX','�ǯu');
DEFINE('_CONTACTS_DESC','�����pô�H�H���C��');

/** classes/html/contact.php */
DEFINE('_CONTACT_TITLE','�pô�H');
DEFINE('_EMAIL_DESCRIPTION','�o�e Email ���pô�H�G');
DEFINE('_NAME_PROMPT',' �п�J�z���W�r�G');
DEFINE('_EMAIL_PROMPT',' �п�J�z��email�a�}�G');
DEFINE('_MESSAGE_PROMPT',' �п�J�z���������e�G');
DEFINE('_SEND_BUTTON','�o�e');
DEFINE('_CONTACT_FORM_NC','�нT�{��槹�㥿�T.');
DEFINE('_CONTACT_TELEPHONE','�q��: ');
DEFINE('_CONTACT_MOBILE','����G');
DEFINE('_CONTACT_FAX','�ǯu: ');
DEFINE('_CONTACT_EMAIL','Email�G');
DEFINE('_CONTACT_NAME','�m�W�G');
DEFINE('_CONTACT_POSITION','¾�ȡG');
DEFINE('_CONTACT_ADDRESS','�a�}�G');
DEFINE('_CONTACT_MISC','�Ƶ��G');
DEFINE('_CONTACT_SEL','����pô�H�G');
DEFINE('_CONTACT_NONE','�S���pô�H�H���C��C');
DEFINE('_EMAIL_A_COPY','�⦹�����ƻs�@����z�ۤv�� Email �a�}');
DEFINE('_CONTACT_DOWNLOAD_AS','�U����e�ƾڬ�');
DEFINE('_VCARD','VCard');

/** pageNavigation */
DEFINE('_PN_PAGE','����');
DEFINE('_PN_OF',' �@ ');
DEFINE('_PN_START','�Ĥ@��');
DEFINE('_PN_PREVIOUS','�W�@��');
DEFINE('_PN_NEXT','�U�@��');
DEFINE('_PN_END','�̫�@��');
DEFINE('_PN_DISPLAY_NR','���');
DEFINE('_PN_RESULTS','��');

/** emailfriend */
DEFINE('_EMAIL_TITLE','�oemail���B��');
DEFINE('_EMAIL_FRIEND','�oemail���B�͡C');
DEFINE('_EMAIL_FRIEND_ADDR','�z�B�ͪ�email�G');
DEFINE('_EMAIL_YOUR_NAME','�z���m�W�G');
DEFINE('_EMAIL_YOUR_MAIL','�z��email�G');
DEFINE('_SUBJECT_PROMPT',' ���D�G');
DEFINE('_BUTTON_SUBMIT_MAIL','�o�eemail');
DEFINE('_BUTTON_CANCEL','����');
DEFINE('_EMAIL_ERR_NOINFO','�z������J���Ī�email�a�}.');
DEFINE('_EMAIL_MSG',' �Ӧ� "%s" ���I���峹�C�o�O�z���B�� %s ( %s )�o�e���z���C�гq�L�H�U�챵�X�ݡG %s');
DEFINE('_EMAIL_INFO','�o�e�H�G');
DEFINE('_EMAIL_SENT','�w�g�o�e���G');
DEFINE('_PROMPT_CLOSE','����');

/** classes/html/content.php */
DEFINE('_AUTHOR_BY', ' ��Z�G');
DEFINE('_WRITTEN_BY', ' �@�̡G');
DEFINE('_LAST_UPDATED', '�̪��s');
DEFINE('_BACK','��^');
DEFINE('_LEGEND','�Ϩ�');
DEFINE('_DATE','���');
DEFINE('_ORDER_DROPDOWN','�Ƨ�');
DEFINE('_HEADER_TITLE','���D');
DEFINE('_HEADER_AUTHOR','�@��');
DEFINE('_HEADER_SUBMITTED','����');
DEFINE('_HEADER_HITS','�I��');
DEFINE('_E_EDIT','�s��');
DEFINE('_E_ADD','�s�W');
DEFINE('_E_WARNUSER','�Ш����Ϊ̫O�s�{�b�s�誺���e�C');
DEFINE('_E_WARNTITLE','������J���D');
DEFINE('_E_WARNTEXT','������J�ި�');
DEFINE('_E_WARNCAT','�п�ܤ@�Ӥ���');
DEFINE('_E_CONTENT','���e');
DEFINE('_E_TITLE','���D:');
DEFINE('_E_SECTION','�椸:');
DEFINE('_E_CATEGORY','����:');
DEFINE('_E_INTRO','�K�n');
DEFINE('_E_MAIN','����');
DEFINE('_E_MOSIMAGE','���J {mosimage}');
DEFINE('_E_IMAGES','�Ϥ�');
DEFINE('_E_GALLERY_IMAGES','�Ϯw�Ϥ�');
DEFINE('_E_CONTENT_IMAGES','����Ϥ�');
DEFINE('_E_EDIT_IMAGE','�s��Ϥ�');
DEFINE('_E_INSERT','���J');
DEFINE('_E_UP','�V�W');
DEFINE('_E_DOWN','�V�U');
DEFINE('_E_REMOVE','�R��');
DEFINE('_E_SOURCE','�ӷ��G');
DEFINE('_E_ALIGN','�ƦC�G');
DEFINE('_E_ALT','�a�B��r�G');
DEFINE('_E_BORDER','��ءG');
DEFINE('_E_CAPTION','���D');
DEFINE('_E_APPLY','����');
DEFINE('_E_PUBLISHING','�o�G');
DEFINE('_E_STATE','���A�G');
DEFINE('_E_AUTHOR_ALIAS','�@�̧O�W�G');
DEFINE('_E_ACCESS_LEVEL','�v���ŧO�G');
DEFINE('_E_ORDERING','�ƧǡG');
DEFINE('_E_START_PUB','�}�l�o�G�G');
DEFINE('_E_FINISH_PUB','�����o�G�G');
DEFINE('_E_SHOW_FP','�b������ܡG');
DEFINE('_E_HIDE_TITLE','���ü��D�G');
DEFINE('_E_METADATA','���ƾ�');
DEFINE('_E_M_DESC','�y�z�G');
DEFINE('_E_M_KEY','������G');
DEFINE('_E_SUBJECT','���D�G');
DEFINE('_E_EXPIRES','���Ĵ��G');
DEFINE('_E_VERSION','�����G');
DEFINE('_E_ABOUT','����');
DEFINE('_E_CREATED','�ЫءG');
DEFINE('_E_LAST_MOD','�̫��s�G');
DEFINE('_E_HITS','�I���G');
DEFINE('_E_SAVE','�O�s');
DEFINE('_E_CANCEL','����');
DEFINE('_E_REGISTERED','�ȵ��U�Τ�i�X��');
DEFINE('_E_ITEM_INFO','�����H��');
DEFINE('_E_ITEM_SAVED','�����w���\�O�s�C');
DEFINE('_ITEM_PREVIOUS','&lt; �W�@�g');
DEFINE('_ITEM_NEXT','�U�@�g &gt;');


/** content.php */
DEFINE('_ORDER_DROPDOWN_DA','�������');
DEFINE('_ORDER_DROPDOWN_DD','�������');
DEFINE('_ORDER_DROPDOWN_TA','���D����');
DEFINE('_ORDER_DROPDOWN_TD','���D����');
DEFINE('_ORDER_DROPDOWN_HA','�I������');
DEFINE('_ORDER_DROPDOWN_HD','�I������');
DEFINE('_ORDER_DROPDOWN_AUA','�@�̶���');
DEFINE('_ORDER_DROPDOWN_AUD','�@�̭���');
DEFINE('_ORDER_DROPDOWN_O','�Ƨ�');
DEFINE('_SELECT_CAT','��ܤ���');
DEFINE('_SELECT_SEC','��ܳ椸');

/** poll.php */
DEFINE('_ALERT_ENABLED','�������}cookie!');
DEFINE('_ALREADY_VOTE','���ѱz�w�g��L�@���F!');
DEFINE('_NO_SELECTION','�z�٨S�������ܡA�Э��s�벼');
DEFINE('_THANKS',"�P�±z���벼!");
DEFINE('_SELECT_POLL',"�Цb�C����ܧ벼");

/** classes/html/poll.php */
DEFINE('_JAN','�@��');
DEFINE('_FEB','�G��');
DEFINE('_MAR','�T��');
DEFINE('_APR','�|��');
DEFINE('_MAY','����');
DEFINE('_JUN','����');
DEFINE('_JUL','�C��');
DEFINE('_AUG','�K��');
DEFINE('_SEP','�E��');
DEFINE('_OCT','�Q��');
DEFINE('_NOV','�Q�@��');
DEFINE('_DEC','�Q�G��');
DEFINE('_POLL_TITLE','�լd���G');
DEFINE('_SURVEY_TITLE','�լd���D');
DEFINE('_NUM_VOTERS','�벼��');
DEFINE('_FIRST_VOTE','�Ĥ@�i�벼');
DEFINE('_LAST_VOTE','�̫�@�i�벼');
DEFINE('_SEL_POLL','�п�ܧ벼');
DEFINE('_NO_RESULTS','�����լd�٨S���벼�O���C');

/** registration.php */
DEFINE('_ERROR_PASS','�藍�_�A�����ӥΤ�');
DEFINE('_NEWPASS_MSG','�Τ� $checkusername �ϥΦ�email\n'
.'�Ӧ�$mosConfig_live_site ���Τ�ШD�o�e�@�ӷs�K�X.\n\n'
.' �z���s�K�X�O�G$newpass\n\n �p�G�z�S���ШD�o�e�s�K�X�A�O��ߡA�u���z�ۤv�ݨ��o�ʫH�A�S����L�H�C'
.' �p�G�O�~�o�e�K�X���ܡA�бz�Φ��s�K�X�n���A�M��A���K�X�C');
DEFINE('_NEWPASS_SUB','$_sitename �G�G $checkusername ���s�K�X');
DEFINE('_NEWPASS_SENT','�s���Τ�K�X�w�g�Ыبõo�e�I');
DEFINE('_REGWARN_NAME','�п�J�z���W�١C');
DEFINE('_REGWARN_UNAME','�п�J�Τ�W�C');
DEFINE('_REGWARN_MAIL','�п�J���Ī�email�a�}�C');
DEFINE('_REGWARN_PASS','�п�J�@�Ӧ��Ī��K�X. ���঳�Ů�A���פj��6��A�åB�u�]�t 0-9,a-z,A-Z');
DEFINE('_REGWARN_VPASS1','�ЦA����J�z���K�X.');
DEFINE('_REGWARN_VPASS2','�⦸��J���K�X����,�Э��s��J.');
DEFINE('_REGWARN_INUSE','�o�ӥΤ�W�w�g�b�ϥΤF,�Хt���@�ӥΤ�W.');
DEFINE('_REGWARN_EMAIL_INUSE', '�� e-mail �w�g�Ψӵ��U�F�C�p�G�z�ѰO�K�X���ܡA���I�� "�ѰO�K�X" �챵�A�s���K�X�N�o�e���A�C');
DEFINE('_SEND_SUB','%s�Τ᪺�ԲӸ�Ʀb%s');
DEFINE('_USEND_MSG_ACTIVATE','%s�A�z�n�I

�P�§A�b %s ���U�A�A���b��w�g�ЫءA�b�ϥΤ��e�������E�����C
�n�E���b��A���I���U�����챵�A�Χ⥦�ƻs���s���������}�G
%s

�E����z�i�H�ΥH�U�Τ�W�M�K�X�n�� %s �G

Username - %s
Password - %s');
DEFINE('_USEND_MSG', "%s�A�z�n�I

�P�§A�b %s ���U�C

�z�i�H�ε��U���Τ�W�M�K�X�n�� %s �C");
DEFINE('_USEND_MSG_NOPASS','$name�A�z�n�I,\n\n�z�w�g���� $mosConfig_live_site ���Τ�C\n'
.'�бz�ε��U���Τ�W�M�K�X�n��$mosConfig_live_site�C\n\n'
.'�Ф��n�^�_�o�ʫH�A�o�O�t�Φ۰ʵo�e���C\n');
DEFINE('_ASEND_MSG','%s�A�z�n�I

���ӷs�Τ��b %s ���U�C
�H�U�O�ԲӫH���G

�W�� - %s
e-mail - %s
�Τ�W - %s

�Ф��n�^�_�o�ʫH�A�o�O�t�Φ۰ʵo�e���C');
DEFINE('_REG_COMPLETE_NOPASS','<div class="componentheading">���U�����I</div><br />&nbsp;&nbsp;'
.'�z�{�b�i�H�n���F�C<br />&nbsp;&nbsp;');
DEFINE('_REG_COMPLETE', '<div class="componentheading">���U�����I</div><br />�z�{�b�i�H�n���F�C');
DEFINE('_REG_COMPLETE_ACTIVATE', '<div class="componentheading">���U�����I</div><br />�z���b��w�g�ЫءA�E���챵�w�g�o�e��z�� e-mail �a�}�C����e-mail����I���E���챵�A�E���z���b��A�M��~��n���t�ΡC');
DEFINE('_REG_ACTIVATE_COMPLETE', '<div class="componentheading">�E�������I</div><br />�z���b��w�g���\�E���A�z�i�H�ε��U���Τ�W�M�K�X�n���C');
DEFINE('_REG_ACTIVATE_NOT_FOUND', '<div class="componentheading">�L�Ī��E���챵�I</div><br />�t�μƾڮw�����s�b���b��A�Ϊ̸ӱb��w�g�E���F�C');

/** classes/html/registration.php */
DEFINE('_PROMPT_PASSWORD','�ѰO�K�X�F�H');
DEFINE('_NEW_PASS_DESC','�п�J�Τ�W�Memail�a�},�M���I��[�o�e�K�X]���s.<br />'
.'�z�N�ܧ֦���@�ʥ]�t�s�K�X��email�A�ϥηs�K�X�ӵn���C');
DEFINE('_PROMPT_UNAME','�Τ�W�G');
DEFINE('_PROMPT_EMAIL','E-mail �a�}�G');
DEFINE('_BUTTON_SEND_PASS','�o�e�K�X');
DEFINE('_REGISTER_TITLE','�Τ���U');
DEFINE('_REGISTER_NAME','�W�١G');
DEFINE('_REGISTER_UNAME','�Τ�W�G');
DEFINE('_REGISTER_EMAIL','E-mail�G');
DEFINE('_REGISTER_PASS','�K�X�G');
DEFINE('_REGISTER_VPASS','�K�X����G');
DEFINE('_REGISTER_REQUIRED','�� (*) �����ƾڶ��O���񶵡C');
DEFINE('_BUTTON_SEND_REG','���U');
DEFINE('_SENDING_PASSWORD','�s�K�X�N�o�e��W�zemail�a�}�C<br />����s�K�X��z�i�H�n���A�M��ק�K�X�C');

/** classes/html/search.php */
DEFINE('_SEARCH_TITLE','�j��');
DEFINE('_PROMPT_KEYWORD','�j�������');
DEFINE('_SEARCH_MATCHES','��^ %d �Ӥǰt���G');
DEFINE('_CONCLUSION','�@�@��� $totalRows ���ǰt���O��. <b>$searchword</b> ');
DEFINE('_NOKEYWORD','�S�����ǰt���O��');
DEFINE('_IGNOREKEYWORD','�b�j���ɩ����F�@�өμƭӱ`���������');
DEFINE('_SEARCH_ANYWORDS','���N�����');
DEFINE('_SEARCH_ALLWORDS','�Ҧ������');
DEFINE('_SEARCH_PHRASE','��T�u�y');
DEFINE('_SEARCH_NEWEST','�s���Ʀb�e��');
DEFINE('_SEARCH_OLDEST','�ª��Ʀb�e��');
DEFINE('_SEARCH_POPULAR','�̬y�檺');
DEFINE('_SEARCH_ALPHABETICAL','�r������');
DEFINE('_SEARCH_CATEGORY','�椸/����');

/** templates/*.php */
DEFINE('_DATE_FORMAT','Y-m-d');  //Uses PHP's DATE Command Format - Depreciated
/**
* Modify this line to reflect how you want the date to appear in your site
*
*e.g. DEFINE("_DATE_FORMAT_LC","%A, %d %B %Y %H�G%M"); //Uses PHP's strftime Command Format
*/
DEFINE('_DATE_FORMAT_LC',"%Y-%m-%d"); //Uses PHP's strftime Command Format
DEFINE('_DATE_FORMAT_LC2',"%Y-%m-%d %H:%M");
DEFINE('_SEARCH_BOX','�j��...');
DEFINE('_NEWSFLASH_BOX','�ְT�I');
DEFINE('_MAINMENU_BOX','�D���');

/** classes/html/usermenu.php */
DEFINE('_UMENU_TITLE','�Τ���');
DEFINE('_HI','�z�n, ');

/** user.php */
DEFINE('_SAVE_ERR','�Ч����g�n�D���C�@��.');
DEFINE('_THANK_SUB','�P�±z������. �z���檺���e�|�b�o�G�쯸�I���e�g�L�f��,�Э@�ߵ���.');
DEFINE('_UP_SIZE','�z����W�ǶW�L15K�����.');
DEFINE('_UP_EXISTS','�W�� $userfile_name ���Ϥ��w�g�s�b.�Э��s�R�W�z�����,�A�դ@��.');
DEFINE('_UP_COPY_FAIL','��������');
DEFINE('_UP_TYPE_WARN','�z�u��W��JPG�Ϊ�GIF�榡���Ϥ�');
DEFINE('_MAIL_SUB','�s���ݼf�֤峹');
DEFINE('_MAIL_MSG','�z�n, $adminName,\n\nA ���@�g�s���峹�ݼf�� $type, $title (�@�̡G$author )'
.'�Ӧۯ��I�G $mosConfig_live_site .\n'
.'�бz�n�� $mosConfig_live_site/administrator �Ӽf�ֳo�g $type.\n\n'
.'�Ф��n�^�_�o�ʫH�A�o�O�t�Φ۰ʵo�e���C\n');
DEFINE('_PASS_VERR1','�p�G�z�ק�F�z���K�X,�ЦA��J�@���T�{�ק�.');
DEFINE('_PASS_VERR2','�p�G�z�ק�F�z���K�X,�нT�{�⦸��J�����e�@�P.');
DEFINE('_UNAME_INUSE','���Τ�W�w�g�Q����.');
DEFINE('_UPDATE','��s');
DEFINE('_USER_DETAILS_SAVE','�z���]�m�w�g�O�s�C');
DEFINE('_USER_LOGIN','�Τ�n��');

/** components/com_user */
DEFINE('_EDIT_TITLE','�ק�z���ԲӫH��');
DEFINE('_YOUR_NAME','�m�W�G');
DEFINE('_EMAIL','e-mail�G');
DEFINE('_UNAME','�Τ�W�G');
DEFINE('_PASS','�K�X�G');
DEFINE('_VPASS','�K�X�T�{�G');
DEFINE('_SUBMIT_SUCCESS','���榨�\ ');
DEFINE('_SUBMIT_SUCCESS_DESC','�A���檺���e�w�g�浹�F�޲z��.�b�o�G�b���I�W���e,�ݭn�g�L�f��.�Э@�ߵ���.');
DEFINE('_WELCOME','�w��!');
DEFINE('_WELCOME_DESC','�w��i�J�����Τ��');
DEFINE('_CONF_CHECKED_IN','�z���X�����ز{�b���w������^�F.');
DEFINE('_CHECK_TABLE','�ˬd��');
DEFINE('_CHECKED_IN','�w�g��^ ');
DEFINE('_CHECKED_IN_ITEMS',' ����');
DEFINE('_PASS_MATCH','�K�X����');

/** components/com_banners */
DEFINE('_BNR_CLIENT_NAME','�������Ȥ��ܤ@�ӦW�١C');
DEFINE('_BNR_CONTACT','�������Ȥ��ܤ@���pô�H�C');
DEFINE('_BNR_VALID_EMAIL','�������Ȥ��ܤ@�Ӧ��Ī�E-mail�a�}�C');
DEFINE('_BNR_CLIENT','������ܤ@�ӫȤ�A');
DEFINE('_BNR_NAME','�������X�m�s�i��ܤ@�ӦW�١C');
DEFINE('_BNR_IMAGE','�������X�m�s�i��ܤ@�T�Ϥ��C');
DEFINE('_BNR_URL','�������X�m�s�i��� URL�a�}�A�Φ۩w�q���N�X�C');
/** components/com_login */
DEFINE('_ALREADY_LOGIN','�z�w�g�n���L�F!');
DEFINE('_LOGOUT','�I���o�̰h�X');
DEFINE('_LOGIN_TEXT','�еn��,�z�~�৹���X�ݥ���'); 
DEFINE('_LOGIN_SUCCESS','�n�����\ ');
DEFINE('_LOGOUT_SUCCESS','�h�X���\ ');
DEFINE('_LOGIN_DESCRIPTION','�еn���A�~��X�ݭӤH�ϰ�C');
DEFINE('_LOGOUT_DESCRIPTION','�z�w�g�n����ӤH�ϰ�C');


/** components/com_weblinks */
DEFINE('_WEBLINKS_TITLE','�챵');
DEFINE('_WEBLINKS_DESC','�U���O�@�Ǭ������I,���I���챵�i�J.');
DEFINE('_HEADER_TITLE_WEBLINKS','�챵');
DEFINE('_SECTION','�����G');
DEFINE('_SUBMIT_LINK','�W�[�@�ӷs�챵');
DEFINE('_URL','�a�}�G');
DEFINE('_URL_DESC','�y�z�G');
DEFINE('_NAME','�W�١G');
DEFINE('_WEBLINK_EXIST','�w�g���P�W���챵�s�b�A�Эקﭫ��.');
DEFINE('_WEBLINK_TITLE','�����챵���������D�C');

/** components/com_newfeeds */
DEFINE('_FEED_NAME','�s�D�ɤJ�W��');
DEFINE('_FEED_ARTICLES','�峹��');
DEFINE('_FEED_LINK','�s�D�ɤJ�챵');

/** whos_online.php */
DEFINE('_WE_HAVE', '�{�b�� ');
DEFINE('_AND', ' �M');
DEFINE('_GUEST_COUNT','$guest_array ��X��');
DEFINE('_GUESTS_COUNT','$guest_array ��X��');
DEFINE('_MEMBER_COUNT','$user_array ��|��');
DEFINE('_MEMBERS_COUNT','$user_array ��|��');
DEFINE('_ONLINE',' �b�u');
DEFINE('_NONE','�L�H�b�u');

/** modules/mod_stats.php */
DEFINE('_TIME_STAT','�ɶ�');
DEFINE('_MEMBERS_STAT','�Τ�');
DEFINE('_HITS_STAT','�I��');
DEFINE('_NEWS_STAT','�s�D');
DEFINE('_LINKS_STAT','�챵');
DEFINE('_VISITORS','�X�ݶq');

/** /adminstrator/components/com_menus/admin.menus.html.php */
DEFINE('_MAINMENU_HOME','* �����[�D���]���Ĥ@�ӵo�G����涵�A�q�{��������`����` *');
DEFINE('_MAINMENU_DEL','* �A����R���� ��� �п�ܾA���ާ@*');
DEFINE('_MENU_GROUP','* ���ǵ�������X�{�b�@�ӥH�W���դ� *');


/** administrators/components/com_users */
DEFINE('_NEW_USER_MESSAGE_SUBJECT', '�s�Τ���' );
DEFINE('_NEW_USER_MESSAGE', '%s�A�z�n�I


�޲z���b %s �s�W�F�@�ӥΤ�C

�H�U�O�Τ�W�M�K�X�A�Ψӵn�� %s�G

�Τ�W - %s
�K�X - %s


�Ф��n�^�_�o�ʫH�A�o�O�t�Φ۰ʵo�e���C');

/** administrators/components/com_massmail */
DEFINE('_MASSMAIL_MESSAGE', "�Ӧ� '%s' ���H��

�����G
" );

/** includes/mamboxml.php */
DEFINE('_DONT_USE_IMAGE','- ���ϥιϤ� -');
DEFINE('_USE_DEFAULT_IMAGE','- �ϥ��q�{�Ϥ� -');

/** global frontend translation string */
global $TR_STRS;
if (!isset($TR_STRS)){
	$TR_STRS = array();
}
$TR_STRS[strtolower('Banners')] = '��T�s�i';
$TR_STRS[strtolower('Search')] = '�j��';
$TR_STRS[strtolower('Main Menu')] = '�D���';
$TR_STRS[strtolower('User Menu')] = '�Τ���';
$TR_STRS[strtolower('Other Menu')] = '�䥦���';
$TR_STRS[strtolower('Login Form')] = '�n�����';
$TR_STRS[strtolower('Syndicate')] = 'RSS �E�X';
$TR_STRS[strtolower('Statistics')] = '�έp';
$TR_STRS[strtolower('Template Chooser')] = '�Ҫ���ܾ�';
$TR_STRS[strtolower('Sections')] = '�椸';
$TR_STRS[strtolower('Related Items')] = '�����峹';
$TR_STRS[strtolower('Wrapper')] = '�O�J����';
$TR_STRS[strtolower('Newsflash')] = '�s�D�ְT';
$TR_STRS[strtolower('Polls')] = '�b�u�լd';
$TR_STRS[strtolower("Who's Online")] = "�֦b�u";
$TR_STRS[strtolower('Random Image')] = '�H���Ϥ�';
$TR_STRS[strtolower('Top Menu')] = '�������';
$TR_STRS[strtolower('Latest News')] = '�̷s�峹';
$TR_STRS[strtolower('Popular')] = '�����峹';

?>
