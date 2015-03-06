<?php
$Name = $_POST['userName'];
$Email = $_POST['userEmail'];
$Phone = $_POST['userPhone'];
$Message = $_POST['userMessage'];
$message_sent = '<h2 class="messageBox">Your message has been sent.</h2>';
$message_failed = '<h2 class="messageBox">Sorry, your message has not been sent. Please, meake sure you have correctly filled all the fields and try again.</h2>';

$message = '
<html>
<head>
<title>SunnyK Website</title>
<style type="text/css">
body,#bodyTable,#bodyCell{height:100%!important;margin:0;padding:0;width:100%!important}table{border-collapse:collapse}img,a img{border:0;outline:0;text-decoration:none}h1,h2,h3,h4,h5,h6{margin:0;padding:0}p{margin:1em 0;padding:0}a{word-wrap:break-word}
.ReadMsgBody{width:100%}.ExternalClass{width:100%}.ExternalClass,.ExternalClass p,.ExternalClass span,.ExternalClass font,.ExternalClass td,.ExternalClass div{line-height:100%}table,td{mso-table-lspace:0;mso-table-rspace:0}#outlook a{padding:0}img{-ms-interpolation-mode:bicubic}
body,table,td,p,a,li,blockquote{-ms-text-size-adjust:100%;-webkit-text-size-adjust:100%}#bodyCell{padding:0}.mcnImage{vertical-align:bottom}.mcnTextContent img{height:auto!important}body,#bodyTable{background-color:#969696}#bodyCell{border-top:0}h1{color:#606060!important;display:block;font-family:Helvetica;font-size:40px;font-style:normal;font-weight:bold;line-height:125%;letter-spacing:-1px;margin:0;text-align:left}
h2{color:#404040!important;display:block;font-family:Helvetica;font-size:26px;font-style:normal;font-weight:bold;line-height:125%;letter-spacing:-.75px;margin:0;text-align:left}h3{color:#606060!important;display:block;font-family:Helvetica;font-size:18px;font-style:normal;font-weight:bold;line-height:125%;letter-spacing:-.5px;margin:0;text-align:left}
h4{color:#808080!important;display:block;font-family:Helvetica;font-size:16px;font-style:normal;font-weight:bold;line-height:125%;letter-spacing:normal;margin:0;text-align:left}#templatePreheader{background-color:#fff;border-top:0;border-bottom:0}.preheaderContainer .mcnTextContent,.preheaderContainer .mcnTextContent p{color:#606060;font-family:Helvetica;font-size:11px;line-height:125%;text-align:left}
.preheaderContainer .mcnTextContent a{color:#606060;font-weight:normal;text-decoration:underline}#templateHeader{background-color:#fff;border-top:0;border-bottom:0}.headerContainer .mcnTextContent,.headerContainer .mcnTextContent p{color:#606060;font-family:Helvetica;font-size:15px;line-height:150%;text-align:left}
.headerContainer .mcnTextContent a{color:#6dc6dd;font-weight:normal;text-decoration:underline}#templateBody{background-color:#fff;border-top:0;border-bottom:0}.bodyContainer .mcnTextContent,.bodyContainer .mcnTextContent p{color:#606060;font-family:Helvetica;font-size:15px;line-height:150%;text-align:left}
.bodyContainer .mcnTextContent a{color:#6dc6dd;font-weight:normal;text-decoration:underline}#templateFooter{background-color:#f2f2f2;border-top:0;border-bottom:0}.footerContainer .mcnTextContent,.footerContainer .mcnTextContent p{color:#606060;font-family:Helvetica;font-size:11px;line-height:125%;text-align:left}
.footerContainer .mcnTextContent a{color:#606060;font-weight:normal;text-decoration:underline}@media only screen and (max-width:480px){body,table,td,p,a,li,blockquote{-webkit-text-size-adjust:none!important}}@media only screen and (max-width:480px){body{width:100%!important;min-width:100%!important}
}@media only screen and (max-width:480px){table[class=mcnTextContentContainer]{width:100%!important}}@media only screen and (max-width:480px){table[class=mcnBoxedTextContentContainer]{width:100%!important}}@media only screen and (max-width:480px){table[class=mcpreview-image-uploader]{width:100%!important;display:none!important}
}@media only screen and (max-width:480px){img[class=mcnImage]{width:100%!important}}@media only screen and (max-width:480px){table[class=mcnImageGroupContentContainer]{width:100%!important}}@media only screen and (max-width:480px){td[class=mcnImageGroupContent]{padding:9px!important}
}@media only screen and (max-width:480px){td[class=mcnImageGroupBlockInner]{padding-bottom:0!important;padding-top:0!important}}@media only screen and (max-width:480px){tbody[class=mcnImageGroupBlockOuter]{padding-bottom:9px!important;padding-top:9px!important}
}@media only screen and (max-width:480px){table[class=mcnCaptionTopContent],table[class=mcnCaptionBottomContent]{width:100%!important}}@media only screen and (max-width:480px){table[class=mcnCaptionLeftTextContentContainer],table[class=mcnCaptionRightTextContentContainer],table[class=mcnCaptionLeftImageContentContainer],table[class=mcnCaptionRightImageContentContainer],table[class=mcnImageCardLeftTextContentContainer],table[class=mcnImageCardRightTextContentContainer]{width:100%!important}
}@media only screen and (max-width:480px){td[class=mcnImageCardLeftImageContent],td[class=mcnImageCardRightImageContent]{padding-right:18px!important;padding-left:18px!important;padding-bottom:0!important}}@media only screen and (max-width:480px){td[class=mcnImageCardBottomImageContent]{padding-bottom:9px!important}
}@media only screen and (max-width:480px){td[class=mcnImageCardTopImageContent]{padding-top:18px!important}}@media only screen and (max-width:480px){td[class=mcnImageCardLeftImageContent],td[class=mcnImageCardRightImageContent]{padding-right:18px!important;padding-left:18px!important;padding-bottom:0!important}
}@media only screen and (max-width:480px){td[class=mcnImageCardBottomImageContent]{padding-bottom:9px!important}}@media only screen and (max-width:480px){td[class=mcnImageCardTopImageContent]{padding-top:18px!important}}@media only screen and (max-width:480px){table[class=mcnCaptionLeftContentOuter] td[class=mcnTextContent],table[class=mcnCaptionRightContentOuter] td[class=mcnTextContent]{padding-top:9px!important}
}@media only screen and (max-width:480px){td[class=mcnCaptionBlockInner] table[class=mcnCaptionTopContent]:last-child td[class=mcnTextContent]{padding-top:18px!important}}@media only screen and (max-width:480px){td[class=mcnBoxedTextContentColumn]{padding-left:18px!important;padding-right:18px!important}
}@media only screen and (max-width:480px){td[class=mcnTextContent]{padding-right:18px!important;padding-left:18px!important}}@media only screen and (max-width:480px){table[class=templateContainer]{width:100%!important}}@media only screen and (max-width:480px){h1{font-size:24px!important;line-height:125%!important}
}@media only screen and (max-width:480px){h2{font-size:20px!important;line-height:125%!important}}@media only screen and (max-width:480px){h3{font-size:18px!important;line-height:125%!important}}@media only screen and (max-width:480px){h4{font-size:16px!important;line-height:125%!important}
}@media only screen and (max-width:480px){table[class=mcnBoxedTextContentContainer] td[class=mcnTextContent],td[class=mcnBoxedTextContentContainer] td[class=mcnTextContent] p{font-size:18px!important;line-height:125%!important}}@media only screen and (max-width:480px){table[id=templatePreheader]{display:block!important}
}@media only screen and (max-width:480px){td[class=preheaderContainer] td[class=mcnTextContent],td[class=preheaderContainer] td[class=mcnTextContent] p{font-size:14px!important;line-height:115%!important}}@media only screen and (max-width:480px){td[class=headerContainer] td[class=mcnTextContent],td[class=headerContainer] td[class=mcnTextContent] p{font-size:18px!important;line-height:125%!important}
}@media only screen and (max-width:480px){td[class=bodyContainer] td[class=mcnTextContent],td[class=bodyContainer] td[class=mcnTextContent] p{font-size:18px!important;line-height:125%!important}}@media only screen and (max-width:480px){td[class=footerContainer] td[class=mcnTextContent],td[class=footerContainer] td[class=mcnTextContent] p{font-size:14px!important;line-height:115%!important}
}@media only screen and (max-width:480px){td[class=footerContainer] a[class=utilityLink]{display:block!important}}
</style>
</head>
<body leftmargin="0" marginwidth="0" topmargin="0" marginheight="0" offset="0">
<center>
<table align="center" border="0" cellpadding="0" cellspacing="0" height="100%" width="100%" id="bodyTable">
<tr>
<td align="center" valign="top" id="bodyCell">
<table border="0" cellpadding="0" cellspacing="0" width="100%">
<tr>
<td align="center" valign="top">
<table border="0" cellpadding="0" cellspacing="0" width="100%" id="templatePreheader">
<tr>
<td align="center" valign="top">
<table border="0" cellpadding="0" cellspacing="0" width="600" class="templateContainer">
<tr>
<td valign="top" class="preheaderContainer" style="padding-top:9px;">
<table border="0" cellpadding="0" cellspacing="0" width="100%" class="mcnTextBlock">
<tbody class="mcnTextBlockOuter">
<tr>
<td valign="top" class="mcnTextBlockInner">
<table align="left" border="0" cellpadding="0" cellspacing="0" width="600" class="mcnTextContentContainer">
<tbody><tr>
<td valign="top" class="mcnTextContent" style="padding-top:9px; padding-right: 18px; padding-bottom: 9px; padding-left: 18px;">
<h1 style="line-height: 20.7999992370605px;"><span style="color:#be48c9">Sunny K</span></h1>
</td></tr></tbody></table></td></tr></tbody></table></td></tr></table></td></tr></table></td></tr>
<tr>
<td align="center" valign="top"> <table border="0" cellpadding="0" cellspacing="0" width="100%" id="templateHeader">
<tr>
<td align="center" valign="top">
<table border="0" cellpadding="0" cellspacing="0" width="600" class="templateContainer">
<tr>
<td valign="top" class="headerContainer" style="padding-top:10px; padding-bottom:10px;"><table border="0" cellpadding="0" cellspacing="0" width="100%" class="mcnTextBlock">
<tbody class="mcnTextBlockOuter">
<tr>
<td valign="top" class="mcnTextBlockInner">
<table align="left" border="0" cellpadding="0" cellspacing="0" width="600" class="mcnTextContentContainer">
<tbody><tr>
<td valign="top" class="mcnTextContent" style="padding-top:9px; padding-right: 18px; padding-bottom: 9px; padding-left: 18px;">
<h3 style="line-height: 20.7999992370605px;">Makeup Artist and Creative Hair Stylist</h3>
</td></tr></tbody></table></td></tr></tbody></table></td></tr></table></td></tr></table></td></tr>
<tr>
<td align="center" valign="top">
<table border="0" cellpadding="0" cellspacing="0" width="100%" id="templateBody">
<tr>
<td align="center" valign="top">
<table border="0" cellpadding="0" cellspacing="0" width="600" class="templateContainer">
<tr>
<td valign="top" class="bodyContainer" style="padding-top:10px; padding-bottom:10px;"><table border="0" cellpadding="0" cellspacing="0" width="100%" class="mcnDividerBlock">
<tbody class="mcnDividerBlockOuter">
<tr>
<td class="mcnDividerBlockInner" style="padding: 10px 18px;">
<table class="mcnDividerContent" border="0" cellpadding="0" cellspacing="0" width="100%" style="border-top-width: 3px;border-top-style: solid;border-top-color: #BE48C9;">
<tbody><tr>
<td>
<span></span>
</td></tr></tbody></table></td></tr></tbody>
</table><table border="0" cellpadding="0" cellspacing="0" width="100%" class="mcnTextBlock">
<tbody class="mcnTextBlockOuter">
<tr>
<td valign="top" class="mcnTextBlockInner">
<table align="left" border="0" cellpadding="0" cellspacing="0" width="600" class="mcnTextContentContainer">
<tbody><tr>
<td valign="top" class="mcnTextContent" style="padding-top:9px; padding-right: 18px; padding-bottom: 9px; padding-left: 18px;">
<h1><span style="font-size:13px; line-height:1.6em">You have received an e-mail from:</span></h1>
<p>Name: ' . $Name . '<br>
E-Mail: ' . $Email . '<br>
Telephone: ' . $Phone . '</p>
<p>Message:<br>' . $Message . '</p>
</td></tr></tbody></table></td></tr></tbody></table></td></tr></table></td></tr></table></td></tr>
<tr>
<td align="center" valign="top">
<table border="0" cellpadding="0" cellspacing="0" width="100%" id="templateFooter">
<tr>
<td align="center" valign="top">
<table border="0" cellpadding="0" cellspacing="0" width="600" class="templateContainer">
<tr>
<td valign="top" class="footerContainer" style="padding-top:10px; padding-bottom:10px;"><table border="0" cellpadding="0" cellspacing="0" width="100%" class="mcnTextBlock">
<tbody class="mcnTextBlockOuter">
<tr>
<td valign="top" class="mcnTextBlockInner">
<table align="left" border="0" cellpadding="0" cellspacing="0" width="600" class="mcnTextContentContainer">
<tbody><tr>
<td valign="top" class="mcnTextContent" style="padding-top:9px; padding-right: 18px; padding-bottom: 9px; padding-left: 18px;">
<em>Copyright &copy; <?php echo date("Y") ?> | All rights reserved.</em><br>
<br>
<strong>For any information or support regarding this message, please contact the web administrator at:</strong>
<a href="mailto:andreasonny83@gmail.com" target="_blank">andreasonny83@gmail.com</a>
</td></tr></tbody></table></td></tr></tbody></table></td></tr></table></td></tr></table></td></tr></table></td></tr>
</table>
</center>
</body>
</html>';

$to = "sunnykb@hotmail.com";
$admin = 'andreasonny83@gmail.com';

$headers = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=utf-8' . "\r\n";
$headers .= 'From: SunnyKB.com' . "\r\n";

if ( isset( $_POST['Submit'] ) ) {
	if ( $Name && $Email && $Phone && $Message ) {
		print( $message_sent );
		mail( "$to", "$subject", $message, $headers );
		// mail( "$admin", "$subject", $message, $headers ); // send a copy to webadmin
	}
	else {
		print( $message_failed );
	}
}
?>