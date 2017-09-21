<?php

// save input values
$name = $_POST['name'];
$email = $_POST['email'];
$sub = $_POST['subject'];
$msg = $_POST['text'];

// setup email info
$to      = "info@zahnhofer.at";

$headers = "From: " . strip_tags($_POST['email']) . "\r\n";
$headers .= "Reply-To: ". strip_tags($_POST['email']) . "\r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";


$htmlstring = <<<EOT
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"
      xmlns:v="urn:schemas-microsoft-com:vml"
      xmlns:o="urn:schemas-microsoft-com:office:office">
<head>
  <!--[if gte mso 9]>
  <xml>
    <o:OfficeDocumentSettings>
      <o:AllowPNG/>
      <o:PixelsPerInch>96</o:PixelsPerInch>
    </o:OfficeDocumentSettings>
  </xml><![endif]-->
  <meta http-equiv="Content-type" content="text/html; charset=utf-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>
  <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
  <meta name="format-detection" content="date=no"/>
  <meta name="format-detection" content="address=no"/>
  <meta name="format-detection" content="telephone=no"/>
  <title>Email Template</title>


  <style type="text/css" media="screen">
    /* Linked Styles */
    body {
      padding: 0 !important;
      margin: 0 !important;
      display: block !important;
      background: #1e1e1e;
      -webkit-text-size-adjust: none
    }

    a {
      color: #a88123;
      text-decoration: none
    }

    p {
      padding: 0 !important;
      margin: 0 !important
    }

    /* Mobile styles */
  </style>
  <style media="only screen and (max-device-width: 480px), only screen and (max-width: 480px)" type="text/css">
    @media only screen and (max-device-width: 480px), only screen and (max-width: 480px) {
      div[class='mobile-br-5'] {
        height: 5px !important;
      }

      div[class='mobile-br-10'] {
        height: 10px !important;
      }

      div[class='mobile-br-15'] {
        height: 15px !important;
      }

      div[class='mobile-br-20'] {
        height: 20px !important;
      }

      div[class='mobile-br-25'] {
        height: 25px !important;
      }

      div[class='mobile-br-30'] {
        height: 30px !important;
      }

      th[class='m-td'],
      td[class='m-td'],
      div[class='hide-for-mobile'],
      span[class='hide-for-mobile'] {
        display: none !important;
        width: 0 !important;
        height: 0 !important;
        font-size: 0 !important;
        line-height: 0 !important;
        min-height: 0 !important;
      }

      span[class='mobile-block'] {
        display: block !important;
      }

      div[class='wgmail'] img {
        min-width: 320px !important;
        width: 320px !important;
      }

      div[class='img-m-center'] {
        text-align: center !important;
      }

      div[class='fluid-img'] img,
      td[class='fluid-img'] img {
        width: 100% !important;
        max-width: 100% !important;
        height: auto !important;
      }

      table[class='mobile-shell'] {
        width: 100% !important;
        min-width: 100% !important;
      }

      td[class='td'] {
        width: 100% !important;
        min-width: 100% !important;
      }

      table[class='center'] {
        margin: 0 auto;
      }

      td[class='column-top'],
      th[class='column-top'],
      td[class='column'],
      th[class='column'] {
        float: left !important;
        width: 100% !important;
        display: block !important;
      }

      td[class='content-spacing'] {
        width: 15px !important;
      }

      div[class='h2'] {
        font-size: 44px !important;
        line-height: 48px !important;
      }
    }
  </style>
</head>
<body class="body"
      style="padding:0 !important; margin:0 !important; display:block !important; background:#1e1e1e; -webkit-text-size-adjust:none">
<table width="100%" border="0" cellspacing="0" cellpadding="0" bgcolor="#1e1e1e">
  <tr>
    <td align="center" valign="top">


      <table width="600" border="0" cellspacing="0" cellpadding="0" class="mobile-shell">
        <tr>
          <td class="td"
              style="font-size:0pt; line-height:0pt; padding:0; margin:0; font-weight:normal; width:600px; min-width:600px; Margin:0"
              width="600">

            <div style="height: 20px"></div>
            <!-- Main -->
            <table width="100%" border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td>
                  <!-- Body -->
                  <table width="100%" border="0" cellspacing="0" cellpadding="0" bgcolor="#ffffff">
                    <tr>
                      <td class="content-spacing"
                          style="font-size:0pt; line-height:0pt; text-align:left" width="20"></td>
                      <td>
                        <table width="100%" border="0" cellspacing="0" cellpadding="0"
                               class="spacer"
                               style="font-size:0pt; line-height:0pt; text-align:center; width:100%; min-width:100%">
                          <tr>
                            <td height="35" class="spacer"
                                style="font-size:0pt; line-height:0pt; text-align:center; width:100%; min-width:100%">
                              &nbsp;
                            </td>
                          </tr>
                        </table>

                        <div class="h3-1-center"
                             style="color:#1e1e1e; font-family:Georgia, serif; min-width:auto !important; font-size:20px; line-height:16px; text-align:center">
                          You have a new message!
                        </div>
                        <table width="100%" border="0" cellspacing="0" cellpadding="0"
                               class="spacer"
                               style="font-size:0pt; line-height:0pt; text-align:center; width:100%; min-width:100%">
                          <tr>
                            <td height="10" class="spacer"
                                style="font-size:0pt; line-height:0pt; text-align:center; width:100%; min-width:100%">
                              &nbsp;
                            </td>
                          </tr>
                        </table>

                        <table width="100%" border="0" cellspacing="0" cellpadding="0"
                               class="spacer"
                               style="font-size:0pt; line-height:0pt; text-align:center; width:100%; min-width:100%">
                          <tr>
                            <td height="20" class="spacer"
                                style="font-size:0pt; line-height:0pt; text-align:center; width:100%; min-width:100%">
                              &nbsp;
                            </td>
                          </tr>
                        </table>

                        <table width="100%" border="0" cellspacing="0" cellpadding="0">
                          <tr>
                            <th class="column-top"
                                style="font-size:0pt; line-height:0pt; padding:0; margin:0; font-weight:normal; vertical-align:top; Margin:0"
                                valign="top" width="270">
                              <table width="100%" border="0" cellspacing="0"
                                     cellpadding="0">
                                <tr>
                                  <td>
                                    <table width="100%" border="0" cellspacing="0"
                                           cellpadding="0" bgcolor="#f4f4f4">
                                      <tr>
                                        <td class="content-spacing"
                                            style="font-size:0pt; line-height:0pt; text-align:left"
                                            width="20"></td>
                                        <td>
                                          <table width="100%" border="0"
                                                 cellspacing="0"
                                                 cellpadding="0"
                                                 class="spacer"
                                                 style="font-size:0pt; line-height:0pt; text-align:center; width:100%; min-width:100%">
                                            <tr>
                                              <td height="10"
                                                  class="spacer"
                                                  style="font-size:0pt; line-height:0pt; text-align:center; width:100%; min-width:100%">
                                                &nbsp;
                                              </td>
                                            </tr>
                                          </table>

                                          <div class="text-1"
                                               style="color:#d2973b; font-family:Arial, sans-serif; min-width:auto !important; font-size:14px; line-height:20px; text-align:left">
                                            <strong>Patient: $name</strong>
                                          </div>
                                          <table width="100%" border="0"
                                                 cellspacing="0"
                                                 cellpadding="0"
                                                 class="spacer"
                                                 style="font-size:0pt; line-height:0pt; text-align:center; width:100%; min-width:100%">
                                            <tr>
                                              <td height="10"
                                                  class="spacer"
                                                  style="font-size:0pt; line-height:0pt; text-align:center; width:100%; min-width:100%">
                                                &nbsp;
                                              </td>
                                            </tr>
                                          </table>

                                        </td>
                                        <td class="content-spacing"
                                            style="font-size:0pt; line-height:0pt; text-align:left"
                                            width="20"></td>
                                      </tr>
                                    </table>
                                    <table width="100%" border="0" cellspacing="0"
                                           cellpadding="0" bgcolor="#fafafa">
                                      <tr>
                                        <td class="content-spacing"
                                            style="font-size:0pt; line-height:0pt; text-align:left"
                                            width="20"></td>
                                        <td>
                                          <table width="100%" border="0"
                                                 cellspacing="0"
                                                 cellpadding="0"
                                                 class="spacer"
                                                 style="font-size:0pt; line-height:0pt; text-align:center; width:100%; min-width:100%">
                                            <tr>
                                              <td height="10"
                                                  class="spacer"
                                                  style="font-size:0pt; line-height:0pt; text-align:center; width:100%; min-width:100%">
                                                &nbsp;
                                              </td>
                                            </tr>
                                          </table>

                                          <div class="text"
                                               style="color:#1e1e1e; font-family:Arial, sans-serif; min-width:auto !important; font-size:14px; line-height:20px; text-align:left">
                                            Message: $msg
                                          </div>
                                          <table width="100%" border="0"
                                                 cellspacing="0"
                                                 cellpadding="0"
                                                 class="spacer"
                                                 style="font-size:0pt; line-height:0pt; text-align:center; width:100%; min-width:100%">
                                            <tr>
                                              <td height="15"
                                                  class="spacer"
                                                  style="font-size:0pt; line-height:0pt; text-align:center; width:100%; min-width:100%">
                                                &nbsp;
                                              </td>
                                            </tr>
                                          </table>

                                        </td>
                                        <td class="content-spacing"
                                            style="font-size:0pt; line-height:0pt; text-align:left"
                                            width="20"></td>
                                      </tr>
                                    </table>
                                  </td>
                                </tr>
                              </table>
                            </th>
                            <th class="column-top"
                                style="font-size:0pt; line-height:0pt; padding:0; margin:0; font-weight:normal; vertical-align:top; Margin:0"
                                valign="top" width="20">
                              <table width="100%" border="0" cellspacing="0"
                                     cellpadding="0">
                                <tr>
                                  <td>
                                    <div style="font-size:0pt; line-height:0pt;"
                                         class="mobile-br-15"></div>
                                  </td>
                                </tr>
                              </table>
                            </th>
                            <th class="column-top"
                                style="font-size:0pt; line-height:0pt; padding:0; margin:0; font-weight:normal; vertical-align:top; Margin:0"
                                valign="top" width="270">
                              <table width="100%" border="0" cellspacing="0"
                                     cellpadding="0">
                                <tr>
                                  <td>
                                    <table width="100%" border="0" cellspacing="0"
                                           cellpadding="0" bgcolor="#f4f4f4">
                                      <tr>
                                        <td class="content-spacing"
                                            style="font-size:0pt; line-height:0pt; text-align:left"
                                            width="20"></td>
                                        <td>
                                          <table width="100%" border="0"
                                                 cellspacing="0"
                                                 cellpadding="0"
                                                 class="spacer"
                                                 style="font-size:0pt; line-height:0pt; text-align:center; width:100%; min-width:100%">
                                            <tr>
                                              <td height="10"
                                                  class="spacer"
                                                  style="font-size:0pt; line-height:0pt; text-align:center; width:100%; min-width:100%">
                                                &nbsp;
                                              </td>
                                            </tr>
                                          </table>

                                          <div class="text-1"
                                               style="color:#d2973b; font-family:Arial, sans-serif; min-width:auto !important; font-size:14px; line-height:20px; text-align:left">
                                            <strong>Subject:</strong>
                                          </div>
                                          <table width="100%" border="0"
                                                 cellspacing="0"
                                                 cellpadding="0"
                                                 class="spacer"
                                                 style="font-size:0pt; line-height:0pt; text-align:center; width:100%; min-width:100%">
                                            <tr>
                                              <td height="10"
                                                  class="spacer"
                                                  style="font-size:0pt; line-height:0pt; text-align:center; width:100%; min-width:100%">
                                                &nbsp;
                                              </td>
                                            </tr>
                                          </table>

                                        </td>
                                        <td class="content-spacing"
                                            style="font-size:0pt; line-height:0pt; text-align:left"
                                            width="20"></td>
                                      </tr>
                                    </table>
                                    <table width="100%" border="0" cellspacing="0"
                                           cellpadding="0" bgcolor="#fafafa">
                                      <tr>
                                        <td class="content-spacing"
                                            style="font-size:0pt; line-height:0pt; text-align:left"
                                            width="20"></td>
                                        <td>
                                          <table width="100%" border="0"
                                                 cellspacing="0"
                                                 cellpadding="0"
                                                 class="spacer"
                                                 style="font-size:0pt; line-height:0pt; text-align:center; width:100%; min-width:100%">
                                            <tr>
                                              <td height="10"
                                                  class="spacer"
                                                  style="font-size:0pt; line-height:0pt; text-align:center; width:100%; min-width:100%">
                                                &nbsp;
                                              </td>
                                            </tr>
                                          </table>

                                          <div class="text"
                                               style="color:#1e1e1e; font-family:Arial, sans-serif; min-width:auto !important; font-size:14px; line-height:20px; text-align:left">
                                            $sub
                                          </div>
                                          <table width="100%" border="0"
                                                 cellspacing="0"
                                                 cellpadding="0"
                                                 class="spacer"
                                                 style="font-size:0pt; line-height:0pt; text-align:center; width:100%; min-width:100%">
                                            <tr>
                                              <td height="15"
                                                  class="spacer"
                                                  style="font-size:0pt; line-height:0pt; text-align:center; width:100%; min-width:100%">
                                                &nbsp;
                                              </td>
                                            </tr>
                                          </table>

                                        </td>
                                        <td class="content-spacing"
                                            style="font-size:0pt; line-height:0pt; text-align:left"
                                            width="20"></td>
                                      </tr>
                                    </table>

                                    <table width="100%" border="0" cellspacing="0"
                                           cellpadding="0" bgcolor="#f4f4f4" style="margin-top: 20px">
                                      <tr>
                                        <td class="content-spacing"
                                            style="font-size:0pt; line-height:0pt; text-align:left"
                                            width="20"></td>
                                        <td>
                                          <table width="100%" border="0"
                                                 cellspacing="0"
                                                 cellpadding="0"
                                                 class="spacer"
                                                 style="font-size:0pt; line-height:0pt; text-align:center; width:100%; min-width:100%">
                                            <tr>
                                              <td height="10"
                                                  class="spacer"
                                                  style="font-size:0pt; line-height:0pt; text-align:center; width:100%; min-width:100%">
                                                &nbsp;
                                              </td>
                                            </tr>
                                          </table>

                                          <div class="text-1"
                                               style="color:#d2973b; font-family:Arial, sans-serif; min-width:auto !important; font-size:14px; line-height:20px; text-align:left">
                                            <strong>Email:</strong>
                                          </div>
                                          <table width="100%" border="0"
                                                 cellspacing="0"
                                                 cellpadding="0"
                                                 class="spacer"
                                                 style="font-size:0pt; line-height:0pt; text-align:center; width:100%; min-width:100%">
                                            <tr>
                                              <td height="10"
                                                  class="spacer"
                                                  style="font-size:0pt; line-height:0pt; text-align:center; width:100%; min-width:100%">
                                                &nbsp;
                                              </td>
                                            </tr>
                                          </table>

                                        </td>
                                        <td class="content-spacing"
                                            style="font-size:0pt; line-height:0pt; text-align:left"
                                            width="20"></td>
                                      </tr>
                                    </table>
                                    <table width="100%" border="0" cellspacing="0"
                                           cellpadding="0" bgcolor="#fafafa">
                                      <tr>
                                        <td class="content-spacing"
                                            style="font-size:0pt; line-height:0pt; text-align:left"
                                            width="20"></td>
                                        <td>
                                          <table width="100%" border="0"
                                                 cellspacing="0"
                                                 cellpadding="0"
                                                 class="spacer"
                                                 style="font-size:0pt; line-height:0pt; text-align:center; width:100%; min-width:100%">
                                            <tr>
                                              <td height="10"
                                                  class="spacer"
                                                  style="font-size:0pt; line-height:0pt; text-align:center; width:100%; min-width:100%">
                                                &nbsp;
                                              </td>
                                            </tr>
                                          </table>

                                          <div class="text"
                                               style="color:#1e1e1e; font-family:Arial, sans-serif; min-width:auto !important; font-size:14px; line-height:20px; text-align:left">
                                            $email
                                          </div>
                                          <table width="100%" border="0"
                                                 cellspacing="0"
                                                 cellpadding="0"
                                                 class="spacer"
                                                 style="font-size:0pt; line-height:0pt; text-align:center; width:100%; min-width:100%">
                                            <tr>
                                              <td height="15"
                                                  class="spacer"
                                                  style="font-size:0pt; line-height:0pt; text-align:center; width:100%; min-width:100%">
                                                &nbsp;
                                              </td>
                                            </tr>
                                          </table>

                                        </td>
                                        <td class="content-spacing"
                                            style="font-size:0pt; line-height:0pt; text-align:left"
                                            width="20"></td>
                                      </tr>
                                    </table>
                                  </td>
                                </tr>
                              </table>
                            </th>
                          </tr>
                        </table>
                        <table width="100%" border="0" cellspacing="0" cellpadding="0"
                               class="spacer"
                               style="font-size:0pt; line-height:0pt; text-align:center; width:100%; min-width:100%">
                          <tr>
                            <td height="35" class="spacer"
                                style="font-size:0pt; line-height:0pt; text-align:center; width:100%; min-width:100%">
                              &nbsp;
                            </td>
                          </tr>
                        </table>

                      </td>
                      <td class="content-spacing"
                          style="font-size:0pt; line-height:0pt; text-align:left" width="20"></td>
                    </tr>
                  </table>
                  <!-- END Body -->

                </td>
              </tr>
            </table>
            <!-- END Main -->

          </td>
        </tr>
      </table>
    </td>
  </tr>
</table>
</body>
</html>
EOT;

// send email
$send = mail($to,$sub,$htmlstring,$headers);

// check if email is send or not
if ( $send ) {
    echo 'success';
}else {
    echo 'error';
}

?>
