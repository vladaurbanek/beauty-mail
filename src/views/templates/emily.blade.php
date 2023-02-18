<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>{{ isset($senderName) ? $senderName : '' }}</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=display-width, initial-scale=1.0, maximum-scale=1.0,">
    <link href="https://fonts.googleapis.com/css?family=Tangerine:400,700" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet" type="text/css">
    <style type="text/css">
        html { width: 100%; }

        body {margin: 0; padding: 0; width: 100%; -webkit-text-size-adjust: none; -ms-text-size-adjust: none;}

        img { display: block !important; border: 0; -ms-interpolation-mode: bicubic;}

        .ReadMsgBody { width: 100%;}

        .ExternalClass {width: 100%;}

        .ExternalClass, .ExternalClass p, .ExternalClass span, .ExternalClass font, .ExternalClass td, .ExternalClass div { line-height: 100%; }

        .images {display: block !important; width: 100% !important;}

        .heading {font-family: Times New Roman, cursive, serif !important; font-style: italic;}

        .MsoNormal {font-family: Poppins, Arial, Helvetica Neue, Helvetica, sans-serif !important;}

        p {margin: 0 !important; padding: 0 !important;}

        .display-button td, .display-button a {font-family: Poppins, Arial, Helvetica Neue, Helvetica, sans-serif !important;}

        .display-button a:hover {text-decoration: none !important;}

        /* MEDIA QUIRES */
        @media only screen and (min-width: 799px) {
            .saf-table {
                display: table !important;
            }

            .main-width {
                width: 600px;
            }

            .width800 {
                width: 800px !important;
                max-width: 800px !important;
            }
        }

        @media only screen and (max-width: 799px) {
            body {width: auto !important;}

            .display-width {width: 100% !important;}

            .display-width-inner {width: 600px !important;}

            .padding { padding: 0 20px !important; }

            .res-padding-full { padding: 0px !important; }

            .res-padding-left {padding-left: 0px !important;}

            .width800 {
                width: 100% !important;
                max-width: 100% !important;
            }
        }

        @media only screen and (max-width: 768px) {
            .width768 {
                max-width: 684px !important;
            }

            .child1-width {
                width: 50% !important;
                max-width: 50% !important;
            }

            .child2-width {
                width: 50% !important;
                max-width: 50% !important;
            }

            .full-width-height {
                padding-top: 40px !important;
                padding-bottom: 25px !important;
            }
        }

        @media only screen and (max-width: 680px) {
            .child1-width {
                width: 50% !important;
                max-width: 50% !important;
            }

            .child2-width {
                width: 50% !important;
                max-width: 50% !important;
            }

            .res-padding-left {
                padding-left: 40px !important;
            }

            .padding-hide {
                padding-bottom: 0px !important;
            }

            .res-attract-height {
                padding: 20px 10px 0 10px !important;
            }

            .full-width-height {
                padding-top: 50px !important;
                padding-bottom: 40px !important;
            }
        }

        @media only screen and (max-width: 660px) {
            .child1-width {
                width: 50% !important;
                max-width: 50% !important;
            }

            .child2-width {
                width: 50% !important;
                max-width: 50% !important;
            }

            .res-padding-left {
                padding-left: 30px !important;
            }

            .res-attract-height {
                padding: 20px 10px 0 10px !important;
            }

            .full-width-height {
                padding-top: 45px !important;
                padding-bottom: 20px !important;
            }
        }

        @media only screen and (max-width: 640px) {
            .res-attract-height {
                padding: 20px 10px 0 10px !important;
            }

            .child1-width, .child2-width {
                width: 50% !important;
                max-width: 50% !important;
            }

            .res-padding-left {
                padding-left: 20px !important;
            }

            .full-width-height {
                padding-top: 40px !important;
                padding-bottom: 30px !important;
            }
        }

        @media only screen and (max-width: 639px) {
            body {width: auto !important;}

            .display-width {width: 100% !important;}

            .display-width-inner,
            .display-width-child {width: 100% !important;}

            .display-width-child .button-width .display-button {width: auto !important;}

            .res-padding-full { padding: 0 20px !important; }

            .padding-hide { padding: 0px !important; }

            .padding { padding: 0 20px !important; }

            .saf-table {
                display: block !important;
            }

            .width282 {
                width: 282px !important;
            }

            .div-width {
                display: block !important;
                width: 100% !important;
                max-width: 100% !important;
            }

            .res-height20-bottom { padding-bottom: 20px !important;}

            .res-height-top { padding-top: 60px !important;}

            .full-width-height { padding-bottom: 60px !important;}

            .footer-width {width: 151px !important;}

            .height20 {height: 20px !important;}

            .height30 {height: 30px !important;}

            .hide-height, .hide-bar {display: none !important;}

            .txt-center {text-align: center !important;}

            span.unsub-width {width: 100% !important;
                display: block !important; padding-bottom: 10px !important; }

            .res-center {
                margin: 0 auto !important;
                display: table !important;
            }
        }

        @media only screen and (max-width: 480px) {
            .display-width table, .display-width-child2 table {width: 100% !important;}

            .display-width .button-width .display-button {width: auto !important;}

            .display-width-child .footer-width {width: 151px !important;}

            .display-width .width282 {
                width: 282px !important;
            }

            .div-width {
                display: block !important;
                width: 100% !important;
                max-width: 100% !important;
            }
        }

        @media only screen and (max-width: 380px) {
            .display-width table {width: 100% !important;}

            .display-width .button-width .display-button {width: auto !important;}

            .display-width-child .width282 { width: 100% !important;}
        }

        @media only screen and (max-width: 330px) {
            .res-font { font-size: 33px !important;}
        }
        @if(isset($css))
            {{ $css }}
        @endif
    </style>
</head>
<body>
<!--[if (gte mso 9)|(IE)]>
<style>
.Heading {font-family: Arial, Helvetica Neue, Helvetica, sans-serif !important;}

.MsoNormal {font-family: Arial, Helvetica Neue, Helvetica, sans-serif !important;}

.display-button td, .display-button a, a {font-family: Arial, Helvetica Neue, Helvetica, sans-serif !important;}
</style>
<![endif]-->
<!-- MENU STARTS -->
<repeater>
    <layout label='MENU STARTS'>
        <table align="center" bgcolor="#333333" border="0" cellpadding="0" cellspacing="0" width="100%">
            <tr>
                <td align="center" style="font-size:0;">
                    <!--[if (gte mso 9)|(IE)]>
                    <table aria-hidden="true" border="0" cellspacing="0" cellpadding="0" align="center" width="800"
                           style="width: 800px;">
                    <tr>
                        <td align="center" valign="top" width="800">
                    <![endif]-->
                    <div style="display:inline-block; width:100%; max-width:800px; vertical-align:top;"
                         class="width800">
                        <!-- ID:BG MENU -->
                        <table align="center" bgcolor="#51555e" border="0" class="display-width" cellpadding="0"
                               cellspacing="0" width="100%" style="max-width:800px;">
                            <tr>
                                <td align="center" class="padding">
                                    <!--[if (gte mso 9)|(IE)]>
                                    <table aria-hidden="true" border="0" cellspacing="0" cellpadding="0" align="center"
                                           width="600" style="width: 600px;">
                                    <tr>
                                        <td align="center" valign="top" width="600">
                                    <![endif]-->
                                    <div style="display:inline-block; width:100%; max-width:600px; vertical-align:top;"
                                         class="main-width">
                                        <table align="center" border="0" class="display-width-inner" cellpadding="0"
                                               cellspacing="0" width="100%" style="max-width:600px;">
                                            <tr>
                                                <td height="15" class="height30"
                                                    style="mso-line-height-rule: exactly; line-height: 15px;">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td align="center" style="font-size:0;">
                                                    <table align="center" border="0" cellpadding="0" cellspacing="0"
                                                           width="100%" style="width:100%; max-width:100%;">
                                                        <tr>
                                                            <td align="center"
                                                                style="font-size:0; width:100%; max-width:100%;">
                                                                <!--[if (gte mso 9)|(IE)]>
                                                                <table aria-hidden="true" border="0" cellspacing="0"
                                                                       cellpadding="0" align="center" width="100%"
                                                                       style="width:100%;">
                                                                <tr>
                                                                    <td align="center" valign="top" width="150">
                                                                <![endif]-->
                                                                <div
                                                                    style="display:inline-block; max-width:150px; width:100%; vertical-align:top;"
                                                                    class="div-width">
                                                                    <!--TABLE LEFT-->
                                                                    <table align="center" border="0" cellpadding="0"
                                                                           cellspacing="0" width="100%"
                                                                           style="border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt; max-width:100%; width:100%;">
                                                                        <tr>
                                                                            <td align="center">
                                                                                <table align="center" border="0"
                                                                                       cellpadding="0" cellspacing="0"
                                                                                       style="width:auto !important;">
                                                                                    <tr>
                                                                                        <!-- ID:TXT MENU -->
                                                                                        <td align="center"
                                                                                            style="color:#333333;"
                                                                                            width="150">
                                                                                            <a href="#"
                                                                                               style="color:#333333; text-decoration:none;"><img
                                                                                                    src="{{ array_key_exists('path', $logo) ? $logo['path'] : '' }}"
                                                                                                    alt="{{ isset($senderName) ? $senderName : ''}}"
                                                                                                    width="80"
                                                                                                    height="80"
                                                                                                    style="margin:0; border:0; padding:0; display:block;"
                                                                                                    editable="true"
                                                                                                    label="150x50"></a>
                                                                                        </td>
                                                                                    </tr>
                                                                                </table>
                                                                            </td>
                                                                        </tr>
                                                                    </table>
                                                                </div>
                                                                <!--[if (gte mso 9)|(IE)]>
                                                                </td>
                                                                <td align="center" valign="top" width="446">
                                                                <![endif]-->
                                                                <div
                                                                    style="display:inline-block; width:100%; max-width:446px; vertical-align:top;"
                                                                    class="div-width">
                                                                    <table align="center" border="0" cellpadding="0"
                                                                           cellspacing="0" class="display-width-child"
                                                                           width="100%"
                                                                           style="border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt; width:100%; max-width:100%;">
                                                                        <tr>
                                                                            <td align="center" style="font-size:0;">
                                                                                <!--[if (gte mso 9)|(IE)]>
                                                                                <table aria-hidden="true" border="0"
                                                                                       cellspacing="0" cellpadding="0"
                                                                                       align="center" width="100%"
                                                                                       style="width:100%;">
                                                                                <tr>
                                                                                    <td width="235">
                                                                                <![endif]-->
                                                                                <div
                                                                                    style="display:inline-block; width:100%; max-width:225px; vertical-align:top;"
                                                                                    class="div-width">
                                                                                    <table align="left" border="0"
                                                                                           cellpadding="0"
                                                                                           cellspacing="0"
                                                                                           class="display-width-child"
                                                                                           width="100%"
                                                                                           style="border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt; width:100%; max-width:210px;">
                                                                                        <tr>
                                                                                            <td width="100%"
                                                                                                style="font-size:0;">
                                                                                                &nbsp;
                                                                                            </td>
                                                                                        </tr>
                                                                                    </table>
                                                                                </div>
                                                                                <!--[if (gte mso 9)|(IE)]>
                                                                                </td>
                                                                                <td width="210">
                                                                                <![endif]-->
                                                                                <div
                                                                                    style="display:inline-block; width:100%; max-width:215px; vertical-align:top;"
                                                                                    class="div-width">
                                                                                    <!--TABLE RIGHT-->
                                                                                    <table align="right" border="0"
                                                                                           cellpadding="0"
                                                                                           cellspacing="0"
                                                                                           class="display-width-child"
                                                                                           width="100%"
                                                                                           style="border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt; width:100%; max-width:100%;">
                                                                                        <tr>
                                                                                            <td align="center"
                                                                                                style="font-size:0;">
                                                                                                <table align="center"
                                                                                                       border="0"
                                                                                                       cellpadding="0"
                                                                                                       cellspacing="0"
                                                                                                       class="display-width-child"
                                                                                                       width="100%"
                                                                                                       style="border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt; width:100%; max-width:100%;">
                                                                                                    <tr>
                                                                                                        <td align="center">
                                                                                                            <table
                                                                                                                align="center"
                                                                                                                border="0"
                                                                                                                width="100%"
                                                                                                                cellpadding="0"
                                                                                                                cellspacing="0"
                                                                                                                style="width:auto !important;">
                                                                                                                <tr>
                                                                                                                    <td height="13"
                                                                                                                        class="height10"
                                                                                                                        style="mso-line-height-rule: exactly; line-height: 13px; font-size:0;">
                                                                                                                        &nbsp;
                                                                                                                    </td>
                                                                                                                </tr>
                                                                                                                <tr>
                                                                                                                    <!-- ID:TXT MENU -->
                                                                                                                    <td align="left"
                                                                                                                        valign="middle"
                                                                                                                        class="MsoNormal"
                                                                                                                        style="color:#ac9b96; font-family: Arial, Helvetica Neue, Helvetica, sans-serif; font-weight:400; font-size:14px; line-height:24px; letter-spacing:1px; mso-line-height-rule: exactly;">
                                                                                                                        <multiline>
                                                                                                                            <a href="{{ array_key_exists('url', $link) ? $link['url'] : '' }}"
                                                                                                                               style="color:#ac9b96;text-decoration:none;">
                                                                                                                                {{ array_key_exists('name', $link) ? $link['name'] : '' }} </a>
                                                                                                                        </multiline>
                                                                                                                    </td>
                                                                                                                <tr>
                                                                                                                    <td height="13"
                                                                                                                        class="hide-height"
                                                                                                                        style="mso-line-height-rule: exactly; line-height: 13px; font-size:0;">
                                                                                                                        &nbsp;
                                                                                                                    </td>
                                                                                                                </tr>
                                                                                                            </table>
                                                                                                        </td>
                                                                                                    </tr>
                                                                                                </table>
                                                                                            </td>
                                                                                        </tr>
                                                                                    </table>
                                                                                </div>
                                                                                <!--[if (gte mso 9)|(IE)]>
                                                                                </td>
                                                                                </tr>
                                                                                </table>
                                                                                <![endif]-->
                                                                            </td>
                                                                        </tr>
                                                                    </table>
                                                                </div>
                                                                <!--[if (gte mso 9)|(IE)]>
                                                                </td>
                                                                </tr>
                                                                </table>
                                                                <![endif]-->
                                                            </td>
                                                        </tr>
                                                    </table>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td height="15" class="height30"
                                                    style="mso-line-height-rule: exactly; line-height: 15px; font-size:0;">
                                                    &nbsp;
                                                </td>
                                            </tr>
                                        </table>
                                    </div>
                                    <!--[if (gte mso 9)|(IE)]>
                                    </td>
                                    </tr>
                                    </table>
                                    <![endif]-->
                                </td>
                            </tr>
                        </table>
                    </div>
                    <!--[if (gte mso 9)|(IE)]>
                    </td>
                    </tr>
                    </table>
                    <![endif]-->
                </td>
            </tr>
        </table>
    </layout>
</repeater>
<!-- MENU ENDS -->
@section('main')
@show

@include ('beautymail::templates.emily.footer' , [
        'companyName' => isset($companyName) ? $companyName : '',
        'phone' => isset($phone) ? $phone : '',
        'email' => isset($email) ? $email : ''
    ])
</body>
</html>
