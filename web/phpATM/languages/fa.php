<?php
/***************************************************************************
 *                                   fa.php
 *                            -------------------
 *   begin                : Tuesday', Aug 15', 2002
 *   copyright            : ('C) 2002 Bugada Andrea
 *   email                : phpATM@free.fr
 *
 *   $Id$
 *
 *
 ***************************************************************************/

/***************************************************************************
 *
 *   This program is free software; you can redistribute it and/or modify
 *   it under the terms of the GNU General Public License as published by
 *   the Free Software Foundation; either version 2 of the License', or
 *   ('at your option) any later version.
 *
 ***************************************************************************/

$headerpage="header.htm";    // The optional header file 
$footerpage="footer.htm";    // The optional footer file 
$infopage="info.htm";        // The optional info file 

$charsetencoding="windows-1256";                 // The encoding for national symbols (i.e. for cyryllic  must be "windows-1251")
$uploadcentercaption="PHP Advanced Transfer Manager";
$uploadcentermessage="phpATM";

$mess=array(
"0" => "",
"1" => "January",
"2" => "February",
"3" => "March",
"4" => "April",
"5" => "May",
"6" => "June",
"7" => "July",
"8" => "August",
"9" => "September",
"10" => "October",
"11" => "November",
"12" => "December",
"13" => "�����",
"14" => "�����",
"15" => "��� ����",
"16" => "������",
"17" => "��� ����",
"18" => "����� ����� ����",
"19" => "�������",
"20" => "������� ����",
"21" => "���� ����",
"22" => "�������� �� ���� ����",
"23" => "������",
"24" => "�����",
"25" => "���� ����",
"26" => "����",
"27" => "�ǁ ����",
"28" => "����",
"29" => "�ѐ�� �� ���",
"30" => "��� ���� �ǘ ��.",
"31" => "���� �� ��� ���� ����",
"32" => "�ѐ�� �� ���",
"33" => "������ �� ������� ���� !",
"34" => "��� ���� � ���� �� ������ ����",
"35" => "�ѐ��",
"36" => "The file",
"37" => "��� ���� �� ������ �������  ��",
"38" => "���� �� ���",
"39" => "���� ��� ���",
"40" => "��� ���� �� ������ �������  ��",
"41" => "���� ��� ��� ��� �� ������ ����� ���� ��",
"42" => "�ј� ����� ����",
"43" => "��� ������� ������� ���",
"44" => "���� ������ �� ���� ���� �����",
"45" => "���� �� ��� �� ������ ���",
"46" => "������ ����� :",
"47" => "�����/����",
"48" => "���ј����",
"49" => "It is prohibited to upload file with name %s!",
"50" => "������� ������ ���� ���� ���",
"51" => "������",
"52" => "������ �����",
"53" => "�����",
"54" => "��� �����",
"55" => "���� ����",
"56" => "�����",
"57" => "��� ������",
"58" => "��� ���",
"59" => "��� ����� ����",
"60" => "�����",
"61" => "������",
"62" => "�� ����",
"63" => "��������",
"64" => "��� ����",
"65" => "����",
"66" => "����",
"67" => "�������",
"68" => "����� ����",
"69" => "File has been mailed to %s address.",
"70" => "���� ������� ��� �� ��� ������: %s",
"71" => ">>> ������� ���� <<<",
"72" => "Logout",
"73" => "���� ����",
"74" => "�� ���",
"75" => "?����� ������",
"76" => "����� �������",
"77" => "���� ����",
"78" => "��� �������",
"79" => "��� �����",
"80" => "��� ������ �� ���� ��� ��� ������ �� ����.",
"81" => "������� ��",
"82" => "����/����� ���� �������",
"83" => "?���� ���",
"84" => "������ ����",
"85" => "������ ���� �����",
"86" => "���� ���� ���",
"88" => "���� ���� ����� ���� �� ���� ����",
"89" => "��� ��� ����� ����� �� ���� �������� ����� �� ���� ���� �� ���� ���� ���� ��� �� ���� �������� ����� �� ���.",
"90" => "������� ����: ",
"91" => "���� �� ���� ��� ��� ���� ����� ���� �� ���� ����.",
"92" => "��� ����: ",
"93" => "���� ��� ������ � ���� ��� ��� �� �������.",
"94" => "���� ��� ��� ����.",
"95" => "Registration is not necessary. You can register if you wish add your name to all your uploaded files. Nobody other can use your name to upload their files.",

"96" => "����� ������ ���.",
"97" => "ʘ��� ����",
"98" => "���� ��� ������ � ���� ��� ��� �� ���� ����",
"99" => "��� ��� ��� ���� ��Ͽ ����� ��� ���� ���� ��� ��� !",
"100" => "���� ��� ��� �� ������ ���� ��Ͽ",
"101" => "Please, go %s back %s and try again.",
"102" => "��� �� ������ �� ���� ���� ��� ���.",
"103" => "User name is invalid. The name must be not longer than 12 symbols and can consists of latin symbols and digits only. Name can also contain '-', '_', and space symbols inside.",
"104" => "The '%s' you picked has been taken.",
"105" => "ʘ��� ���� ���",
"106" => "���� ��� ��� ������ �����.",
"107" => "���� ����� ��� ������ ���.",
"108" => "������ ���� ��� ��� �� ������ ���� �� ��� ��� ���� ���� ��� ����� ���� ��� ����� �� ���",
"109" => "You can %s enter to Upload Center here. %s",
"110" => "���� ����� ��� �� �� ���� � ��� ���� �� ���� ��� ������� ��� ��� ���� �� ���� ��� ���� ���.",
"111" => "��� ����� ������ �� ����� �� ������ ����.",
"112" => "���� ���� ����",
"113" => "���� ���� ������ ��� �� ���� ����",
"114" => "�� �� ��� ������� ���� ������ ���",
"115" => "���� ������ ��� ���� ���� ��.",
"116" => "Please %s enter here %s.",
"117" => "��� ������ �� �� �� ��� ������� ���� ��� ������ �� ����.",
"118" => "���� ������ ��� ���� ���� ���.",
"119" => "�� �� ����� �� ��� ������ �� ������� ������ �� Ȑ���.",
"120" => "����� ���� ���� ���",
"121" => "���� ��� ����",
"122" => "The entered account name does not exists.",
"123" => "��� ���� ����� ��� �� ������ ���.",
"124" => "���� ��� ���� ��� �� ���� �������� ������� ��.",
"125" => "��� ���� ���� ����� ���� ���� ����� ����� ��� ����",
"126" => "����� ���� ���� ���������",
"127" => "��� �������",
"128" => "������� ��� ����� ���� ��.",
"129" => "���� ��� ��� ����� ���� ��.",
"130" => "���� ��� ���� ��� �� ���� ����",
"131" => "��� ���� ���� ��� ���� ��� �� ���� ����",
"132" => "��� ����",
"133" => "������� ����",
"134" => "����  & ���� �����",
"135" => "���� ������� ������",
"136" => "���� ������ ��� ����� �����:",
"137" => "��� ������ ������",
"138" => "������(��� ����Ǎ�)",
"139" => "����� ����� ����(��� ����� ",
"140" => "���� ������ '%s' �� ������ ����� ���� ��",
"141" => "Latest",
"142" => "���",
"143" => "New e-mail address takes effect after confirmation. Confirmation code has been e-mailed to your new mail address. See instructions inside the letter.",
"144" => "",
"145" => "���� ���� �������� �� ����� ����.",
"146" => "����� ��",
"147" => "����� ����",
"148" => "�� ���� ����� ����.",
"149" => "���� �� ���� ������ � �� ������ ���� �� ���� ����",
"150" => "��� ���� ����� ���� ��� '%s' ����� ��.",
"151" => "������� ����",
"152" => "������ ���� ����",
"153" => "Files e-mailed",
"154" => "����� ���� ������",
"155" => "����� ���� �������",
"156" => "�����",
"157" => "����� ����",
"158" => "������ �����",
"159" => "���� �����",
"160" => "?���:",
"161" => "���� ������",
"162" => "�ǘ ���� ���� ������",
"163" => "Shown %s account(s) of %s",
"164" => "Ԙ� ���� �� �ј� ������� ����",
"165" => "����� ���� ������",
"166" => "����� ����",
"167" => "File %s has been changed succesfully",
"168" => "����� ����",
"169" => "�ǘ ����",
"170" => "�ǘ ���� ������",
"171" => "��ژ� ����",
"172" => "���",
"173" => "��",
"174" => "����",
"175" => "��� ����",
"176" => "��� ����",
"177" => "Sorry, but server could not execute the mail program.",
"178" => "��� ���� ��� ��� �� �Ԙ� ����� ���� �ѐ���� � ���� ����.",
"179" => "���� �ѐ���� � ��� ����.",
"180" => "���� ��� �� ������ �ǘ ��.",
"181" => "��� ����� ������ ��� ���� �� �ǘ ����.",
"182" => "���ј���� �� ������ �ǘ ��",
"183" => "��� ����� ������ ��� ���ј���� �� �ǘ ����",
"184" => "���ј���� �� ������ ����� ��.",
"185" => "��� ����� ����� ���� ���ј���� �� ������.",
"186" => "����� ���� ���ј���� ����",
"187" => "��� ���ј����",
"188" => "��� �������",
"189" => "��� ���ј���� ���� ����� ��� ���� ��� ���� �� ������ ����.",
"190" => "��� ���� ��� ���ј���� �� ���� ����",
"191" => "����� ����",
"192" => "��� ����",
"193" => "����� ���� ����/������ ���ј����",
"194" => "�� ������ ��� ��� ����� ���.",
"195" => "��� ����� ������ ��� ���� �� ����� �����.",
"196" => "���� ���� ��� ������ �� ����.���������� �� �� ����.",
"197" => "�� �����",
"198" => "����� ��� ����� ��� ���� ������ ����� �� ����",
"199" => "����� ���� ����� ���",
"200" => "����� ���� ������ ���",
"201" => "����� ��� ����� ��� ��� ��� ��� ��� ���� �� ����",
"999" => "������� ����",
//
// New strings introduced in version 1.02
//
"202" => "The url you provided is not valid",
"203" => "���� ���� ����",
"204" => "����� ���� �� ���� ���� ����",

//
// New strings introduced in version 1.10
//
"205" => "�� ��� �� ����� Ȑ�����",
"206" => "��� ����� ����� ���: ���� ��� ��� ��� ���� �� ����.",
"207" => "���� �� �� ��� ���� ��� ���� ��� ����� ���� ������.",
"208" => "���� �� �� ��� ���� ������ ���� ���� ��� ���.",
"209" => "���� ������� ����� �� ���� ���� ���� Ȑ����.",

//
// New strings introduced in version 1.12
//
"210" => "Daily allowed Mb exceeded",
"211" => "Monthly allowed Mb exceeded",
"212" => "Daily allowed download Mb exceeded",
"213" => "Monthly allowed download Mb exceeded",
"214" => "����� ���� ����",
"215" => "����� ����",
"216" => "��� ��� ����� ����� �� �� ������ �ǘ ����.",
"217" => "��� ����� ����� ��� ���� �� ������.",
"218" => "��� ���� �� ����� �� �� ���� ���� �� ���� �� ���� ������ ����� ���.",
"219" => "������ ����"

);

//
// Send file e-mail configuration
//
$sendfile_email_subject = 'Requested file';
$sendfile_email_body = '
Here the file you requested by mail

';
$sendfile_email_end = 'Regards,';

//
// Digest e-mail configuration
//
$digest_email_subject = "Everyday digest";

//
// Confirm new e-mail configuration
//
$confirm_email_subject = 'Confirm new e-mail';
$confirm_email_body = 'Dear %s,

Because your security is importance to us, your new e-mail address will need to be confirmed upon receipt.

Your personal confirmation code is: %s

Activating e-mail address is simple:
1. Visit us at %s and we will guide you through the process
2. Enter your account name and confirmation code.
3. Click on the \'Confirm\' button.

';
$confirm_email_end = 'Regards,';

//
// Send password e-mail configuration
//
$chpass_email_subject = 'New password';
$chpass_email_body = 'Dear user,

Your new password is %s

';
$chpass_email_end = 'Regards,';

//
// Confirm registration e-mail configuration
//
$register_email_subject = 'Confirm registration';
$register_email_body = 'Dear %s,

Thank You for registration.

Because your security is importance to us, your account will need to be activated upon receipt.

Your personal activation code is: %s
(please note: this is not your password)

Activating Your account is simple:
1. Visit us at %s and we will guide you through the process
2. Enter your account name and activation code.
3. Click on the \'Activate account\' button.

';
$register_email_end = 'Regards,';
?>