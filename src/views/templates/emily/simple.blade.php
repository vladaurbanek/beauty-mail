@extends('beautymail::templates.emily', [
    'logo' => [
        'path' => array_key_exists('path', $logo) ? $logo['path'] : '',
    ],
    'link' => [
        'appUrl' => array_key_exists('appUrl', $link) ? $link['appUrl'] : '',
        'appName' => array_key_exists('appName', $link) ? $link['appName'] : '',
    ],
    'senderName' => isset($senderName) ? $senderName : '',
    'address' => isset($address) ? $address : ''
])

@section('main')
    <repeater>
        <layout label='SIMPLE STARTS'>
            <table align="center" bgcolor="#333333" border="0" cellpadding="0" cellspacing="0" width="100%">
                <tbody>
                <tr>
                    <td align="center" style="font-size:0;">
                        <!--[if mso]>
                        <table aria-hidden="true" border="0" cellspacing="0" cellpadding="0" align="center" width="800"
                               style="width: 800px;">
                        <tr>
                            <td align="center" valign="top" width="100%" style="max-width:800px;">
                        <![endif]-->
                        <div style="display:inline-block; width:100%; max-width:800px; vertical-align:top;"
                             class="width800">
                            <!-- ID:BG SIMPLE OPTIONAL -->
                            <table align="center" bgcolor="#ffffff" border="0" cellpadding="0" cellspacing="0"
                                   class="display-width" width="100%" style="max-width:800px;">
                                <tbody>
                                <tr>
                                    <td align="center">
                                        <div style="margin:auto;">
                                            <table align="center" border="0"
                                                   cellpadding="0" cellspacing="0" class="display-width" width="100%"
                                                   style="background-color: #ffffff">
                                                <tr>
                                                    <td align="center" class="padding">
                                                        <!--[if mso]>
                                                        <table aria-hidden="true" border="0" cellspacing="0"
                                                               cellpadding="0"
                                                               align="center" width="600" style="width:600px;">
                                                        <tr>
                                                            <td align="center">
                                                        <![endif]-->
                                                        <div
                                                            style="display:inline-block; width:100%; max-width:600px; vertical-align:top;"
                                                            class="main-width">
                                                            <table align="center" border="0" class="display-width-inner"
                                                                   cellpadding="0" cellspacing="0" width="100%"
                                                                   style="max-width:600px;">
                                                                <tr>
                                                                    <td height="60"
                                                                        style="mso-line-height-rule:exactly; line-height:60px; font-size:0;">
                                                                        &nbsp;
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <!-- ID:TXT SIMPLE SUBTITLE -->
                                                                    <td align="center" class="heading"
                                                                        style="color:#B1A684; font-family: Arial, Helvetica Neue, Helvetica, sans-serif; font-weight:700; font-size:40px; line-height:50px; letter-spacing:2px;">
                                                                        <multiline> {{ $heading ?? 'MIRA INVEST GROUP'
                                                                    }}</multiline>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td height="30"
                                                                        style="mso-line-height-rule:exactly; line-height:30px; font-size:0;">
                                                                        &nbsp;
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td align="center">
                                                                        <table align="center" border="0"
                                                                               class="display-width" cellpadding="0"
                                                                               cellspacing="0" width="90%"
                                                                               style="border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt; width:90% !important; max-width:90% !important;">
                                                                            <tr>
                                                                                <td>
                                                                                    <table align="left" border="0"
                                                                                           cellpadding="0"
                                                                                           cellspacing="0"
                                                                                           width="100%"
                                                                                           style="max-width:100%;">
                                                                                        <tr>
                                                                                            <!-- ID:TXT SIMPLE HEADING -->
                                                                                            <td align="left"
                                                                                                class="MsoNormal"
                                                                                                style="color:#666666; font-family: Arial, Helvetica Neue, Helvetica, sans-serif; font-size:18px; font-weight:500; line-height:28px; letter-spacing:1px;">
                                                                                                <multiline>{{ $title ?? '' }}
                                                                                                </multiline>
                                                                                            </td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <!-- ID:BR SIMPLE HEADING BORDER -->
                                                                                            <td height="10"
                                                                                                style="border-bottom:1px solid #e5e5e5; mso-line-height-rule:exactly; line-height:10px; font-size:0;">
                                                                                                &nbsp;
                                                                                            </td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td height="10"
                                                                                                style="mso-line-height-rule:exactly; line-height:10px; font-size:0;">
                                                                                                &nbsp;
                                                                                            </td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <!-- ID:TXT SIMPLE CONTENT -->
                                                                                            <td align="left"
                                                                                                class="MsoNormal"
                                                                                                style="color:#666666; font-family: Arial, Helvetica Neue, Helvetica, sans-serif; font-size:14px; line-height:24px; font-weight:300; letter-spacing:1px;">
                                                                                                <multiline>
                                                                                                    @section('content')
                                                                                                    @show
                                                                                                </multiline>
                                                                                            </td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td height="20"
                                                                                                style="mso-line-height-rule: exactly; line-height:20px; font-size:0;">
                                                                                                &nbsp;
                                                                                            </td>
                                                                                        </tr>
                                                                                    </table>
                                                                                </td>
                                                                            </tr>
                                                                        </table>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td height="60"
                                                                        style="mso-line-height-rule:exactly; line-height:60px; font-size:0;">
                                                                        &nbsp;
                                                                    </td>
                                                                </tr>
                                                            </table>
                                                        </div>
                                                        <!--[if mso]>
                                                        </td>
                                                        </tr>
                                                        </table>
                                                        <![endif]-->
                                                    </td>
                                                </tr>
                                            </table>
                                        </div>
                                        <!--[if gte mso 9]> </v:textbox> </v:rect> <![endif]-->
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                        <!--[if mso]>
                        </td>
                        </tr>
                        </table>
                        <![endif]-->
                    </td>
                </tr>
                </tbody>
            </table>
        </layout>
    </repeater>
@endsection
