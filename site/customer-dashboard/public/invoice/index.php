<?php
/* Database credentials. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'final');
 
/* Attempt to connect to MySQL database */
$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
else
{
    echo "HELLO";
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<meta http-equiv='Content-Type' content='text/html; charset=UTF-8' />
	
	<title> Invoice</title>
	
	<link rel='stylesheet' type='text/css' href='css/style.css' />

</head>

<body>
<!--if IE.ie-container-->
<!--if mso.mso-container-->
<button onClick="window.print()">Print this page</button>

<table style="border-collapse: collapse;table-layout: fixed;border-spacing: 0;mso-table-lspace: 0pt;mso-table-rspace: 0pt;vertical-align: top;min-width: 320px;Margin: 0 auto;background-color: #eeeeee;width:100%" cellpadding="0" cellspacing="0">
  <tbody>
      <tr style="vertical-align: top">
          <td style="word-break: break-word;border-collapse: collapse !important;vertical-align: top">
              <!--if (mso)|(IE)table(width='100%' cellpadding='0' cellspacing='0' border='0')
tr
  td(align='center' style='background-color: #eeeeee;')-->
              <div class="u-row-container" style="padding: 0px;background-color: transparent">
                  <div class="u-row" style="Margin: 0 auto;min-width: 320px;max-width: 600px;overflow-wrap: break-word;word-wrap: break-word;word-break: break-word;background-color: transparent;">
                      <div style="border-collapse: collapse;display: table;width: 100%;background-color: transparent;">
                          <!--if (mso)|(IE)table(width='100%' cellpadding='0' cellspacing='0' border='0')
tr
  td(style='padding: 0px;background-color: transparent;' align='center')
    table(cellpadding='0' cellspacing='0' border='0' style='width:600px;')
      tr(style='background-color: transparent;')-->
                          <!--if (mso)|(IE)td(align='center' width='600' style='width: 600px;padding: 0px;border-top: 0px solid transparent;border-left: 0px solid transparent;border-right: 0px solid transparent;border-bottom: 0px solid transparent;' valign='top')-->
                          <div class="u-col u-col-100" style="max-width: 320px;min-width: 600px;display: table-cell;vertical-align: top;">
                              <div style="width: 100% !important;">
                                  <!-- [if (!mso)&(!IE)] <!-->
                                  <div style="padding: 0px;border-top: 0px solid transparent;border-left: 0px solid transparent;border-right: 0px solid transparent;border-bottom: 0px solid transparent;">
                                      <!-- <![endif]-->
                                      <table style="font-family:'Open Sans',sans-serif;" role="presentation" cellpadding="0" cellspacing="0" width="100%" border="0">
                                          <tbody>
                                              <tr>
                                                  
                                              </tr>
                                          </tbody>
                                      </table><!-- [if (!mso)&(!IE)] <!-->
                                  </div><!-- <![endif]-->
                              </div>
                          </div>
                          <!--if (mso)|(IE)-->
                          <!--if (mso)|(IE)-->
                      </div>
                  </div>
              </div>
              <div class="u-row-container" style="padding: 0px;background-color: transparent">
                  <div class="u-row" style="Margin: 0 auto;min-width: 320px;max-width: 600px;overflow-wrap: break-word;word-wrap: break-word;word-break: break-word;background-color: #ffffff;">
                      <div style="border-collapse: collapse;display: table;width: 100%;background-color: transparent;">
                          <!--if (mso)|(IE)table(width='100%' cellpadding='0' cellspacing='0' border='0')
tr
  td(style='padding: 0px;background-color: transparent;' align='center')
    table(cellpadding='0' cellspacing='0' border='0' style='width:600px;')
      tr(style='background-color: #ffffff;')-->
                          <!--if (mso)|(IE)td(align='center' width='600' style='width: 600px;padding: 0px;border-top: 0px solid transparent;border-left: 0px solid transparent;border-right: 0px solid transparent;border-bottom: 0px solid transparent;' valign='top')-->
                          <div class="u-col u-col-100" style="max-width: 320px;min-width: 600px;display: table-cell;vertical-align: top;">
                              <div style="width: 100% !important;">
                                  <!-- [if (!mso)&(!IE)] <!-->
                                  <div style="padding: 0px;border-top: 0px solid transparent;border-left: 0px solid transparent;border-right: 0px solid transparent;border-bottom: 0px solid transparent;">
                                      <!-- <![endif]-->
                                      <table style="font-family:'Open Sans',sans-serif;" role="presentation" cellpadding="0" cellspacing="0" width="100%" border="0">
                                          <tbody>
                                              <tr>
                                                  <td style="overflow-wrap:break-word;word-break:break-word;padding:10px;font-family:'Open Sans',sans-serif;" align="left">
                                                      <div class="v-text-align" style="color: #47484b; line-height: 140%; text-align: center; word-wrap: break-word;">
                                                          <p style="font-size: 14px; line-height: 140%;"><strong><span style="font-size: 30px; line-height: 42px;">Monthy Payment Invoice</span></strong></p>
                                                      </div>
                                                  </td>
                                              </tr>
                                          </tbody>
                                      </table>
                                      <table style="font-family:'Open Sans',sans-serif;" role="presentation" cellpadding="0" cellspacing="0" width="100%" border="0">
                                          <tbody>
                                              <tr>
                                                  <td style="overflow-wrap:break-word;word-break:break-word;padding:2px 40px 25px;font-family:'Open Sans',sans-serif;" align="left">
                                                      <div class="v-text-align" style="color: #7a7676; line-height: 170%; text-align: left; word-wrap: break-word;">
                                                          <p style="font-size: 14px; line-height: 170%; text-align: center;"><span style="font-size: 16px; line-height: 27.2px;">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna</span></p>
                                                      </div>
                                                  </td>
                                              </tr>
                                          </tbody>
                                      </table>
                                      <table style="font-family:'Open Sans',sans-serif;" role="presentation" cellpadding="0" cellspacing="0" width="100%" border="0">
                                          <tbody>
                                              <tr>
                                                  <td style="overflow-wrap:break-word;word-break:break-word;padding:0px;font-family:'Open Sans',sans-serif;" align="left">
                                                      <table height="0px" align="center" border="0" cellpadding="0" cellspacing="0" width="90%" style="border-collapse: collapse;table-layout: fixed;border-spacing: 0;mso-table-lspace: 0pt;mso-table-rspace: 0pt;vertical-align: top;border-top: 1px solid #BBBBBB;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%">
                                                          <tbody>
                                                              <tr style="vertical-align: top">
                                                                  <td style="word-break: break-word;border-collapse: collapse !important;vertical-align: top;font-size: 0px;line-height: 0px;mso-line-height-rule: exactly;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%"><span>&nbsp;</span></td>
                                                              </tr>
                                                          </tbody>
                                                      </table>
                                                  </td>
                                              </tr>
                                          </tbody>
                                      </table><!-- [if (!mso)&(!IE)] <!-->
                                  </div><!-- <![endif]-->
                              </div>
                          </div>
                          <!--if (mso)|(IE)-->
                          <!--if (mso)|(IE)-->
                      </div>
                  </div>
              </div>
              <div class="u-row-container" style="padding: 0px;background-color: transparent">
                  <div class="u-row" style="Margin: 0 auto;min-width: 320px;max-width: 600px;overflow-wrap: break-word;word-wrap: break-word;word-break: break-word;background-color: #ffffff;">
                      <div style="border-collapse: collapse;display: table;width: 100%;background-color: transparent;">
                          <!--if (mso)|(IE)table(width='100%' cellpadding='0' cellspacing='0' border='0')
tr
  td(style='padding: 0px;background-color: transparent;' align='center')
    table(cellpadding='0' cellspacing='0' border='0' style='width:600px;')
      tr(style='background-color: #ffffff;')-->
                          <!--if (mso)|(IE)td(align='center' width='300' style='width: 300px;padding: 0px 30px;border-top: 0px solid transparent;border-left: 0px solid transparent;border-right: 0px solid transparent;border-bottom: 0px solid transparent;' valign='top')-->
                          <div class="u-col u-col-50" style="max-width: 320px;min-width: 300px;display: table-cell;vertical-align: top;">
                              <div style="width: 100% !important;">
                                  <!-- [if (!mso)&(!IE)] <!-->
                                  <div style="padding: 0px 30px;border-top: 0px solid transparent;border-left: 0px solid transparent;border-right: 0px solid transparent;border-bottom: 0px solid transparent;">
                                      <!-- <![endif]-->
                                      <table id="u_content_text_14" style="font-family:'Open Sans',sans-serif;" role="presentation" cellpadding="0" cellspacing="0" width="100%" border="0">
                                          <tbody>
                                              <tr>
                                                  <td style="overflow-wrap:break-word;word-break:break-word;padding:10px;font-family:'Open Sans',sans-serif;" align="left">
                                                      <div class="v-text-align" style="color: #615e5e; line-height: 140%; text-align: left; word-wrap: break-word;">
                                                          <p style="font-size: 14px; line-height: 140%;"><strong><span style="font-size: 14px; line-height: 19.6px;">SERVICE DESCRIPTION</span></strong></p>
                                                      </div>
                                                  </td>
                                              </tr>
                                          </tbody>
                                      </table><!-- [if (!mso)&(!IE)] <!-->
                                  </div><!-- <![endif]-->
                              </div>
                          </div>
                          <!--if (mso)|(IE)-->
                          <!--if (mso)|(IE)td(align='center' width='300' style='width: 300px;padding: 0px 30px;border-top: 0px solid transparent;border-left: 0px solid transparent;border-right: 0px solid transparent;border-bottom: 0px solid transparent;' valign='top')-->
                          <div class="u-col u-col-50" style="max-width: 320px;min-width: 300px;display: table-cell;vertical-align: top;">
                              <div style="width: 100% !important;">
                                  <!-- [if (!mso)&(!IE)] <!-->
                                  <div style="padding: 0px 30px;border-top: 0px solid transparent;border-left: 0px solid transparent;border-right: 0px solid transparent;border-bottom: 0px solid transparent;">
                                      <!-- <![endif]-->
                                      <table id="u_content_text_15" style="font-family:'Open Sans',sans-serif;" role="presentation" cellpadding="0" cellspacing="0" width="100%" border="0">
                                          <tbody>
                                              <tr>
                                                  <td style="overflow-wrap:break-word;word-break:break-word;padding:10px;font-family:'Open Sans',sans-serif;" align="left">
                                                      <div class="v-text-align" style="color: #615e5e; line-height: 140%; text-align: right; word-wrap: break-word;">
                                                          <p style="font-size: 14px; line-height: 140%;"><strong><span style="font-size: 14px; line-height: 19.6px;">#32229844</span></strong></p>
                                                      </div>
                                                  </td>
                                              </tr>
                                          </tbody>
                                      </table><!-- [if (!mso)&(!IE)] <!-->
                                  </div><!-- <![endif]-->
                              </div>
                          </div>
                          <!--if (mso)|(IE)-->
                          <!--if (mso)|(IE)-->
                      </div>
                  </div>
              </div>
              <div class="u-row-container" style="padding: 0px;background-color: transparent">
                  <div class="u-row" style="Margin: 0 auto;min-width: 320px;max-width: 600px;overflow-wrap: break-word;word-wrap: break-word;word-break: break-word;background-color: #ffffff;">
                      <div style="border-collapse: collapse;display: table;width: 100%;background-color: transparent;">
                          <!--if (mso)|(IE)table(width='100%' cellpadding='0' cellspacing='0' border='0')
tr
  td(style='padding: 0px;background-color: transparent;' align='center')
    table(cellpadding='0' cellspacing='0' border='0' style='width:600px;')
      tr(style='background-color: #ffffff;')-->
                          <!--if (mso)|(IE)td(align='center' width='600' style='width: 600px;padding: 0px;border-top: 0px solid transparent;border-left: 0px solid transparent;border-right: 0px solid transparent;border-bottom: 0px solid transparent;' valign='top')-->
                          <div class="u-col u-col-100" style="max-width: 320px;min-width: 600px;display: table-cell;vertical-align: top;">
                              <div style="width: 100% !important;">
                                  <!-- [if (!mso)&(!IE)] <!-->
                                  <div style="padding: 0px;border-top: 0px solid transparent;border-left: 0px solid transparent;border-right: 0px solid transparent;border-bottom: 0px solid transparent;">
                                      <!-- <![endif]-->
                                      <table style="font-family:'Open Sans',sans-serif;" role="presentation" cellpadding="0" cellspacing="0" width="100%" border="0">
                                          <tbody>
                                              <tr>
                                                  <td style="overflow-wrap:break-word;word-break:break-word;padding:0px;font-family:'Open Sans',sans-serif;" align="left">
                                                      <table height="0px" align="center" border="0" cellpadding="0" cellspacing="0" width="90%" style="border-collapse: collapse;table-layout: fixed;border-spacing: 0;mso-table-lspace: 0pt;mso-table-rspace: 0pt;vertical-align: top;border-top: 1px solid #BBBBBB;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%">
                                                          <tbody>
                                                              <tr style="vertical-align: top">
                                                                  <td style="word-break: break-word;border-collapse: collapse !important;vertical-align: top;font-size: 0px;line-height: 0px;mso-line-height-rule: exactly;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%"><span>&nbsp;</span></td>
                                                              </tr>
                                                          </tbody>
                                                      </table>
                                                  </td>
                                              </tr>
                                          </tbody>
                                      </table><!-- [if (!mso)&(!IE)] <!-->
                                  </div><!-- <![endif]-->
                              </div>
                          </div>
                          <!--if (mso)|(IE)-->
                          <!--if (mso)|(IE)-->
                      </div>
                  </div>
              </div>
              <div class="u-row-container" style="padding: 0px;background-color: transparent">
                  <div class="u-row no-stack" style="Margin: 0 auto;min-width: 320px;max-width: 600px;overflow-wrap: break-word;word-wrap: break-word;word-break: break-word;background-color: #ffffff;">
                      <div style="border-collapse: collapse;display: table;width: 100%;background-color: transparent;">
                          <!--if (mso)|(IE)table(width='100%' cellpadding='0' cellspacing='0' border='0')
tr
  td(style='padding: 0px;background-color: transparent;' align='center')
    table(cellpadding='0' cellspacing='0' border='0' style='width:600px;')
      tr(style='background-color: #ffffff;')-->
                          <!--if (mso)|(IE)td(align='center' width='300' style='width: 300px;padding: 0px 30px;border-top: 0px solid transparent;border-left: 0px solid transparent;border-right: 0px solid transparent;border-bottom: 0px solid transparent;' valign='top')-->
                          <div class="u-col u-col-50" style="max-width: 320px;min-width: 300px;display: table-cell;vertical-align: top;">
                              <div style="width: 100% !important;">
                                  <!-- [if (!mso)&(!IE)] <!-->
                                  <div style="padding: 0px 30px;border-top: 0px solid transparent;border-left: 0px solid transparent;border-right: 0px solid transparent;border-bottom: 0px solid transparent;">
                                      <!-- <![endif]-->
                                      <table style="font-family:'Open Sans',sans-serif;" role="presentation" cellpadding="0" cellspacing="0" width="100%" border="0">
                                          <tbody>
                                              <tr>
                                                  <td style="overflow-wrap:break-word;word-break:break-word;padding:10px;font-family:'Open Sans',sans-serif;" align="left">
                                                      <div class="v-text-align" style="color: #615e5e; line-height: 140%; text-align: left; word-wrap: break-word;">
                                                          <p style="font-size: 14px; line-height: 140%;"><span style="font-size: 14px; line-height: 19.6px;">Item One</span></p>
                                                      </div>
                                                  </td>
                                              </tr>
                                          </tbody>
                                      </table><!-- [if (!mso)&(!IE)] <!-->
                                  </div><!-- <![endif]-->
                              </div>
                          </div>
                          <!--if (mso)|(IE)-->
                          <!--if (mso)|(IE)td(align='center' width='300' style='width: 300px;padding: 0px 30px;border-top: 0px solid transparent;border-left: 0px solid transparent;border-right: 0px solid transparent;border-bottom: 0px solid transparent;' valign='top')-->
                          <div class="u-col u-col-50" style="max-width: 320px;min-width: 300px;display: table-cell;vertical-align: top;">
                              <div style="width: 100% !important;">
                                  <!-- [if (!mso)&(!IE)] <!-->
                                  <div style="padding: 0px 30px;border-top: 0px solid transparent;border-left: 0px solid transparent;border-right: 0px solid transparent;border-bottom: 0px solid transparent;">
                                      <!-- <![endif]-->
                                      <table style="font-family:'Open Sans',sans-serif;" role="presentation" cellpadding="0" cellspacing="0" width="100%" border="0">
                                          <tbody>
                                              <tr>
                                                  <td style="overflow-wrap:break-word;word-break:break-word;padding:10px;font-family:'Open Sans',sans-serif;" align="left">
                                                      <div class="v-text-align" style="color: #615e5e; line-height: 140%; text-align: right; word-wrap: break-word;">
                                                          <p style="font-size: 14px; line-height: 140%;"><span style="font-size: 14px; line-height: 19.6px;">$200</span></p>
                                                      </div>
                                                  </td>
                                              </tr>
                                          </tbody>
                                      </table><!-- [if (!mso)&(!IE)] <!-->
                                  </div><!-- <![endif]-->
                              </div>
                          </div>
                          <!--if (mso)|(IE)-->
                          <!--if (mso)|(IE)-->
                      </div>
                  </div>
              </div>
              <div class="u-row-container" style="padding: 0px;background-color: transparent">
                  <div class="u-row no-stack" style="Margin: 0 auto;min-width: 320px;max-width: 600px;overflow-wrap: break-word;word-wrap: break-word;word-break: break-word;background-color: #ffffff;">
                      <div style="border-collapse: collapse;display: table;width: 100%;background-color: transparent;">
                          <!--if (mso)|(IE)table(width='100%' cellpadding='0' cellspacing='0' border='0')
tr
  td(style='padding: 0px;background-color: transparent;' align='center')
    table(cellpadding='0' cellspacing='0' border='0' style='width:600px;')
      tr(style='background-color: #ffffff;')-->
                          <!--if (mso)|(IE)td(align='center' width='300' style='width: 300px;padding: 0px 30px;border-top: 0px solid transparent;border-left: 0px solid transparent;border-right: 0px solid transparent;border-bottom: 0px solid transparent;' valign='top')-->
                          <div class="u-col u-col-50" style="max-width: 320px;min-width: 300px;display: table-cell;vertical-align: top;">
                              <div style="width: 100% !important;">
                                  <!-- [if (!mso)&(!IE)] <!-->
                                  <div style="padding: 0px 30px;border-top: 0px solid transparent;border-left: 0px solid transparent;border-right: 0px solid transparent;border-bottom: 0px solid transparent;">
                                      <!-- <![endif]-->
                                      <table style="font-family:'Open Sans',sans-serif;" role="presentation" cellpadding="0" cellspacing="0" width="100%" border="0">
                                          <tbody>
                                              <tr>
                                                  <td style="overflow-wrap:break-word;word-break:break-word;padding:10px;font-family:'Open Sans',sans-serif;" align="left">
                                                      <div class="v-text-align" style="color: #615e5e; line-height: 140%; text-align: left; word-wrap: break-word;">
                                                          <p style="font-size: 14px; line-height: 140%;"><span style="font-size: 14px; line-height: 19.6px;">Item Two</span></p>
                                                      </div>
                                                  </td>
                                              </tr>
                                          </tbody>
                                      </table><!-- [if (!mso)&(!IE)] <!-->
                                  </div><!-- <![endif]-->
                              </div>
                          </div>
                          <!--if (mso)|(IE)-->
                          <!--if (mso)|(IE)td(align='center' width='300' style='width: 300px;padding: 0px 30px;border-top: 0px solid transparent;border-left: 0px solid transparent;border-right: 0px solid transparent;border-bottom: 0px solid transparent;' valign='top')-->
                          <div class="u-col u-col-50" style="max-width: 320px;min-width: 300px;display: table-cell;vertical-align: top;">
                              <div style="width: 100% !important;">
                                  <!-- [if (!mso)&(!IE)] <!-->
                                  <div style="padding: 0px 30px;border-top: 0px solid transparent;border-left: 0px solid transparent;border-right: 0px solid transparent;border-bottom: 0px solid transparent;">
                                      <!-- <![endif]-->
                                      <table style="font-family:'Open Sans',sans-serif;" role="presentation" cellpadding="0" cellspacing="0" width="100%" border="0">
                                          <tbody>
                                              <tr>
                                                  <td style="overflow-wrap:break-word;word-break:break-word;padding:10px;font-family:'Open Sans',sans-serif;" align="left">
                                                      <div class="v-text-align" style="color: #615e5e; line-height: 140%; text-align: right; word-wrap: break-word;">
                                                          <p style="font-size: 14px; line-height: 140%;"><span style="font-size: 14px; line-height: 19.6px;">$300</span></p>
                                                      </div>
                                                  </td>
                                              </tr>
                                          </tbody>
                                      </table><!-- [if (!mso)&(!IE)] <!-->
                                  </div><!-- <![endif]-->
                              </div>
                          </div>
                          <!--if (mso)|(IE)-->
                          <!--if (mso)|(IE)-->
                      </div>
                  </div>
              </div>
              <div class="u-row-container" style="padding: 0px;background-color: transparent">
                  <div class="u-row no-stack" style="Margin: 0 auto;min-width: 320px;max-width: 600px;overflow-wrap: break-word;word-wrap: break-word;word-break: break-word;background-color: #ffffff;">
                      <div style="border-collapse: collapse;display: table;width: 100%;background-color: transparent;">
                          <!--if (mso)|(IE)table(width='100%' cellpadding='0' cellspacing='0' border='0')
tr
  td(style='padding: 0px;background-color: transparent;' align='center')
    table(cellpadding='0' cellspacing='0' border='0' style='width:600px;')
      tr(style='background-color: #ffffff;')-->
                          <!--if (mso)|(IE)td(align='center' width='300' style='width: 300px;padding: 0px 30px;border-top: 0px solid transparent;border-left: 0px solid transparent;border-right: 0px solid transparent;border-bottom: 0px solid transparent;' valign='top')-->
                          <div class="u-col u-col-50" style="max-width: 320px;min-width: 300px;display: table-cell;vertical-align: top;">
                              <div style="width: 100% !important;">
                                  <!-- [if (!mso)&(!IE)] <!-->
                                  <div style="padding: 0px 30px;border-top: 0px solid transparent;border-left: 0px solid transparent;border-right: 0px solid transparent;border-bottom: 0px solid transparent;">
                                      <!-- <![endif]-->
                                      <table style="font-family:'Open Sans',sans-serif;" role="presentation" cellpadding="0" cellspacing="0" width="100%" border="0">
                                          <tbody>
                                              <tr>
                                                  <td style="overflow-wrap:break-word;word-break:break-word;padding:10px;font-family:'Open Sans',sans-serif;" align="left">
                                                      <div class="v-text-align" style="color: #615e5e; line-height: 140%; text-align: left; word-wrap: break-word;">
                                                          <p style="font-size: 14px; line-height: 140%;"><span style="font-size: 14px; line-height: 19.6px;">Item Three</span></p>
                                                      </div>
                                                  </td>
                                              </tr>
                                          </tbody>
                                      </table><!-- [if (!mso)&(!IE)] <!-->
                                  </div><!-- <![endif]-->
                              </div>
                          </div>
                          <!--if (mso)|(IE)-->
                          <!--if (mso)|(IE)td(align='center' width='300' style='width: 300px;padding: 0px 30px;border-top: 0px solid transparent;border-left: 0px solid transparent;border-right: 0px solid transparent;border-bottom: 0px solid transparent;' valign='top')-->
                          <div class="u-col u-col-50" style="max-width: 320px;min-width: 300px;display: table-cell;vertical-align: top;">
                              <div style="width: 100% !important;">
                                  <!-- [if (!mso)&(!IE)] <!-->
                                  <div style="padding: 0px 30px;border-top: 0px solid transparent;border-left: 0px solid transparent;border-right: 0px solid transparent;border-bottom: 0px solid transparent;">
                                      <!-- <![endif]-->
                                      <table style="font-family:'Open Sans',sans-serif;" role="presentation" cellpadding="0" cellspacing="0" width="100%" border="0">
                                          <tbody>
                                              <tr>
                                                  <td style="overflow-wrap:break-word;word-break:break-word;padding:10px;font-family:'Open Sans',sans-serif;" align="left">
                                                      <div class="v-text-align" style="color: #615e5e; line-height: 140%; text-align: right; word-wrap: break-word;">
                                                          <p style="font-size: 14px; line-height: 140%;"><span style="font-size: 14px; line-height: 19.6px;">$100</span></p>
                                                      </div>
                                                  </td>
                                              </tr>
                                          </tbody>
                                      </table><!-- [if (!mso)&(!IE)] <!-->
                                  </div><!-- <![endif]-->
                              </div>
                          </div>
                          <!--if (mso)|(IE)-->
                          <!--if (mso)|(IE)-->
                      </div>
                  </div>
              </div>
              <div class="u-row-container" style="padding: 0px;background-color: transparent">
                  <div class="u-row no-stack" style="Margin: 0 auto;min-width: 320px;max-width: 600px;overflow-wrap: break-word;word-wrap: break-word;word-break: break-word;background-color: #ffffff;">
                      <div style="border-collapse: collapse;display: table;width: 100%;background-color: transparent;">
                          <!--if (mso)|(IE)table(width='100%' cellpadding='0' cellspacing='0' border='0')
tr
  td(style='padding: 0px;background-color: transparent;' align='center')
    table(cellpadding='0' cellspacing='0' border='0' style='width:600px;')
      tr(style='background-color: #ffffff;')-->
                          <!--if (mso)|(IE)td(align='center' width='300' style='width: 300px;padding: 0px 30px;border-top: 0px solid transparent;border-left: 0px solid transparent;border-right: 0px solid transparent;border-bottom: 0px solid transparent;' valign='top')-->
                          <div class="u-col u-col-50" style="max-width: 320px;min-width: 300px;display: table-cell;vertical-align: top;">
                              <div style="width: 100% !important;">
                                  <!-- [if (!mso)&(!IE)] <!-->
                                  <div style="padding: 0px 30px;border-top: 0px solid transparent;border-left: 0px solid transparent;border-right: 0px solid transparent;border-bottom: 0px solid transparent;">
                                      <!-- <![endif]-->
                                      <table style="font-family:'Open Sans',sans-serif;" role="presentation" cellpadding="0" cellspacing="0" width="100%" border="0">
                                          <tbody>
                                              <tr>
                                                  <td style="overflow-wrap:break-word;word-break:break-word;padding:10px;font-family:'Open Sans',sans-serif;" align="left">
                                                      <div class="v-text-align" style="color: #615e5e; line-height: 140%; text-align: left; word-wrap: break-word;">
                                                          <p style="font-size: 14px; line-height: 140%;"><span style="font-size: 14px; line-height: 19.6px;">Item Four</span></p>
                                                      </div>
                                                  </td>
                                              </tr>
                                          </tbody>
                                      </table><!-- [if (!mso)&(!IE)] <!-->
                                  </div><!-- <![endif]-->
                              </div>
                          </div>
                          <!--if (mso)|(IE)-->
                          <!--if (mso)|(IE)td(align='center' width='300' style='width: 300px;padding: 0px 30px;border-top: 0px solid transparent;border-left: 0px solid transparent;border-right: 0px solid transparent;border-bottom: 0px solid transparent;' valign='top')-->
                          <div class="u-col u-col-50" style="max-width: 320px;min-width: 300px;display: table-cell;vertical-align: top;">
                              <div style="width: 100% !important;">
                                  <!-- [if (!mso)&(!IE)] <!-->
                                  <div style="padding: 0px 30px;border-top: 0px solid transparent;border-left: 0px solid transparent;border-right: 0px solid transparent;border-bottom: 0px solid transparent;">
                                      <!-- <![endif]-->
                                      <table style="font-family:'Open Sans',sans-serif;" role="presentation" cellpadding="0" cellspacing="0" width="100%" border="0">
                                          <tbody>
                                              <tr>
                                                  <td style="overflow-wrap:break-word;word-break:break-word;padding:10px;font-family:'Open Sans',sans-serif;" align="left">
                                                      <div class="v-text-align" style="color: #615e5e; line-height: 140%; text-align: right; word-wrap: break-word;">
                                                          <p style="font-size: 14px; line-height: 140%;"><span style="font-size: 14px; line-height: 19.6px;">$400</span></p>
                                                      </div>
                                                  </td>
                                              </tr>
                                          </tbody>
                                      </table><!-- [if (!mso)&(!IE)] <!-->
                                  </div><!-- <![endif]-->
                              </div>
                          </div>
                          <!--if (mso)|(IE)-->
                          <!--if (mso)|(IE)-->
                      </div>
                  </div>
              </div>
              <div class="u-row-container" style="padding: 0px;background-color: transparent">
                  <div class="u-row" style="Margin: 0 auto;min-width: 320px;max-width: 600px;overflow-wrap: break-word;word-wrap: break-word;word-break: break-word;background-color: #ffffff;">
                      <div style="border-collapse: collapse;display: table;width: 100%;background-color: transparent;">
                          <!--if (mso)|(IE)table(width='100%' cellpadding='0' cellspacing='0' border='0')
tr
  td(style='padding: 0px;background-color: transparent;' align='center')
    table(cellpadding='0' cellspacing='0' border='0' style='width:600px;')
      tr(style='background-color: #ffffff;')-->
                          <!--if (mso)|(IE)td(align='center' width='600' style='width: 600px;padding: 0px;border-top: 0px solid transparent;border-left: 0px solid transparent;border-right: 0px solid transparent;border-bottom: 0px solid transparent;' valign='top')-->
                          <div class="u-col u-col-100" style="max-width: 320px;min-width: 600px;display: table-cell;vertical-align: top;">
                              <div style="width: 100% !important;">
                                  <!-- [if (!mso)&(!IE)] <!-->
                                  <div style="padding: 0px;border-top: 0px solid transparent;border-left: 0px solid transparent;border-right: 0px solid transparent;border-bottom: 0px solid transparent;">
                                      <!-- <![endif]-->
                                      <table style="font-family:'Open Sans',sans-serif;" role="presentation" cellpadding="0" cellspacing="0" width="100%" border="0">
                                          <tbody>
                                              <tr>
                                                  <td style="overflow-wrap:break-word;word-break:break-word;padding:0px;font-family:'Open Sans',sans-serif;" align="left">
                                                      <table height="0px" align="center" border="0" cellpadding="0" cellspacing="0" width="90%" style="border-collapse: collapse;table-layout: fixed;border-spacing: 0;mso-table-lspace: 0pt;mso-table-rspace: 0pt;vertical-align: top;border-top: 1px solid #BBBBBB;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%">
                                                          <tbody>
                                                              <tr style="vertical-align: top">
                                                                  <td style="word-break: break-word;border-collapse: collapse !important;vertical-align: top;font-size: 0px;line-height: 0px;mso-line-height-rule: exactly;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%"><span>&nbsp;</span></td>
                                                              </tr>
                                                          </tbody>
                                                      </table>
                                                  </td>
                                              </tr>
                                          </tbody>
                                      </table><!-- [if (!mso)&(!IE)] <!-->
                                  </div><!-- <![endif]-->
                              </div>
                          </div>
                          <!--if (mso)|(IE)-->
                          <!--if (mso)|(IE)-->
                      </div>
                  </div>
              </div>
              <div class="u-row-container" style="padding: 0px;background-color: transparent">
                  <div class="u-row no-stack" style="Margin: 0 auto;min-width: 320px;max-width: 600px;overflow-wrap: break-word;word-wrap: break-word;word-break: break-word;background-color: #ffffff;">
                      <div style="border-collapse: collapse;display: table;width: 100%;background-color: transparent;">
                          <!--if (mso)|(IE)table(width='100%' cellpadding='0' cellspacing='0' border='0')
tr
  td(style='padding: 0px;background-color: transparent;' align='center')
    table(cellpadding='0' cellspacing='0' border='0' style='width:600px;')
      tr(style='background-color: #ffffff;')-->
                          <!--if (mso)|(IE)td(align='center' width='300' style='width: 300px;padding: 0px 30px;border-top: 0px solid transparent;border-left: 0px solid transparent;border-right: 0px solid transparent;border-bottom: 0px solid transparent;' valign='top')-->
                          <div class="u-col u-col-50" style="max-width: 320px;min-width: 300px;display: table-cell;vertical-align: top;">
                              <div style="width: 100% !important;">
                                  <!-- [if (!mso)&(!IE)] <!-->
                                  <div style="padding: 0px 30px;border-top: 0px solid transparent;border-left: 0px solid transparent;border-right: 0px solid transparent;border-bottom: 0px solid transparent;">
                                      <!-- <![endif]-->
                                      <table style="font-family:'Open Sans',sans-serif;" role="presentation" cellpadding="0" cellspacing="0" width="100%" border="0">
                                          <tbody>
                                              <tr>
                                                  <td style="overflow-wrap:break-word;word-break:break-word;padding:10px;font-family:'Open Sans',sans-serif;" align="left">
                                                      <div class="v-text-align" style="color: #615e5e; line-height: 140%; text-align: left; word-wrap: break-word;">
                                                          <p style="font-size: 14px; line-height: 140%;"><strong><span style="font-size: 14px; line-height: 19.6px;">Total</span></strong></p>
                                                      </div>
                                                  </td>
                                              </tr>
                                          </tbody>
                                      </table><!-- [if (!mso)&(!IE)] <!-->
                                  </div><!-- <![endif]-->
                              </div>
                          </div>
                          <!--if (mso)|(IE)-->
                          <!--if (mso)|(IE)td(align='center' width='300' style='width: 300px;padding: 0px 30px;border-top: 0px solid transparent;border-left: 0px solid transparent;border-right: 0px solid transparent;border-bottom: 0px solid transparent;' valign='top')-->
                          <div class="u-col u-col-50" style="max-width: 320px;min-width: 300px;display: table-cell;vertical-align: top;">
                              <div style="width: 100% !important;">
                                  <!-- [if (!mso)&(!IE)] <!-->
                                  <div style="padding: 0px 30px;border-top: 0px solid transparent;border-left: 0px solid transparent;border-right: 0px solid transparent;border-bottom: 0px solid transparent;">
                                      <!-- <![endif]-->
                                      <table style="font-family:'Open Sans',sans-serif;" role="presentation" cellpadding="0" cellspacing="0" width="100%" border="0">
                                          <tbody>
                                              <tr>
                                                  <td style="overflow-wrap:break-word;word-break:break-word;padding:10px;font-family:'Open Sans',sans-serif;" align="left">
                                                      <div class="v-text-align" style="color: #615e5e; line-height: 140%; text-align: right; word-wrap: break-word;">
                                                          <p style="font-size: 14px; line-height: 140%;"><strong><span style="font-size: 14px; line-height: 19.6px;">$1000</span></strong></p>
                                                      </div>
                                                  </td>
                                              </tr>
                                          </tbody>
                                      </table><!-- [if (!mso)&(!IE)] <!-->
                                  </div><!-- <![endif]-->
                              </div>
                          </div>
                          <!--if (mso)|(IE)-->
                          <!--if (mso)|(IE)-->
                      </div>
                  </div>
              </div>
              <div class="u-row-container" style="padding: 0px;background-color: transparent">
                  <div class="u-row" style="Margin: 0 auto;min-width: 320px;max-width: 600px;overflow-wrap: break-word;word-wrap: break-word;word-break: break-word;background-color: #ffffff;">
                      <div style="border-collapse: collapse;display: table;width: 100%;background-color: transparent;">
                          <!--if (mso)|(IE)table(width='100%' cellpadding='0' cellspacing='0' border='0')
tr
  td(style='padding: 0px;background-color: transparent;' align='center')
    table(cellpadding='0' cellspacing='0' border='0' style='width:600px;')
      tr(style='background-color: #ffffff;')-->
                          <!--if (mso)|(IE)td(align='center' width='600' style='width: 600px;padding: 0px;border-top: 0px solid transparent;border-left: 0px solid transparent;border-right: 0px solid transparent;border-bottom: 0px solid transparent;' valign='top')-->
                          <div class="u-col u-col-100" style="max-width: 320px;min-width: 600px;display: table-cell;vertical-align: top;">
                              <div style="width: 100% !important;">
                                  <!-- [if (!mso)&(!IE)] <!-->
                                  <div style="padding: 0px;border-top: 0px solid transparent;border-left: 0px solid transparent;border-right: 0px solid transparent;border-bottom: 0px solid transparent;">
                                      <!-- <![endif]-->
                                      <table style="font-family:'Open Sans',sans-serif;" role="presentation" cellpadding="0" cellspacing="0" width="100%" border="0">
                                          <tbody>
                                              <tr>
                                                  <td style="overflow-wrap:break-word;word-break:break-word;padding:0px;font-family:'Open Sans',sans-serif;" align="left">
                                                      <table height="0px" align="center" border="0" cellpadding="0" cellspacing="0" width="90%" style="border-collapse: collapse;table-layout: fixed;border-spacing: 0;mso-table-lspace: 0pt;mso-table-rspace: 0pt;vertical-align: top;border-top: 1px solid #BBBBBB;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%">
                                                          <tbody>
                                                              <tr style="vertical-align: top">
                                                                  <td style="word-break: break-word;border-collapse: collapse !important;vertical-align: top;font-size: 0px;line-height: 0px;mso-line-height-rule: exactly;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%"><span>&nbsp;</span></td>
                                                              </tr>
                                                          </tbody>
                                                      </table>
                                                  </td>
                                              </tr>
                                          </tbody>
                                      </table><!-- [if (!mso)&(!IE)] <!-->
                                  </div><!-- <![endif]-->
                              </div>
                          </div>
                          <!--if (mso)|(IE)-->
                          <!--if (mso)|(IE)-->
                      </div>
                  </div>
              </div>
              <div class="u-row-container" style="padding: 0px;background-color: transparent">
                  <div class="u-row" style="Margin: 0 auto;min-width: 320px;max-width: 600px;overflow-wrap: break-word;word-wrap: break-word;word-break: break-word;background-color: #ffffff;">
                      <div style="border-collapse: collapse;display: table;width: 100%;background-color: transparent;">
                          <!--if (mso)|(IE)table(width='100%' cellpadding='0' cellspacing='0' border='0')
tr
  td(style='padding: 0px;background-color: transparent;' align='center')
    table(cellpadding='0' cellspacing='0' border='0' style='width:600px;')
      tr(style='background-color: #ffffff;')-->
                          <!--if (mso)|(IE)td(align='center' width='600' style='width: 600px;padding: 0px;border-top: 0px solid transparent;border-left: 0px solid transparent;border-right: 0px solid transparent;border-bottom: 0px solid transparent;' valign='top')-->
                          <div class="u-col u-col-100" style="max-width: 320px;min-width: 600px;display: table-cell;vertical-align: top;">
                              <div style="width: 100% !important;">
                                  <!-- [if (!mso)&(!IE)] <!-->
                                  <div style="padding: 0px;border-top: 0px solid transparent;border-left: 0px solid transparent;border-right: 0px solid transparent;border-bottom: 0px solid transparent;">
                                      <!-- <![endif]-->
                                      <table style="font-family:'Open Sans',sans-serif;" role="presentation" cellpadding="0" cellspacing="0" width="100%" border="0">
                                          <tbody>
                                              <tr>
                                                  <td style="overflow-wrap:break-word;word-break:break-word;padding:14px;font-family:'Open Sans',sans-serif;" align="left">
                                                      <table height="0px" align="center" border="0" cellpadding="0" cellspacing="0" width="90%" style="border-collapse: collapse;table-layout: fixed;border-spacing: 0;mso-table-lspace: 0pt;mso-table-rspace: 0pt;vertical-align: top;border-top: 1px solid #ffffff;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%">
                                                          <tbody>
                                                              <tr style="vertical-align: top">
                                                                  <td style="word-break: break-word;border-collapse: collapse !important;vertical-align: top;font-size: 0px;line-height: 0px;mso-line-height-rule: exactly;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%"><span>&nbsp;</span></td>
                                                              </tr>
                                                          </tbody>
                                                      </table>
                                                  </td>
                                              </tr>
                                          </tbody>
                                      </table><!-- [if (!mso)&(!IE)] <!-->
                                  </div><!-- <![endif]-->
                              </div>
                          </div>
                          <!--if (mso)|(IE)-->
                          <!--if (mso)|(IE)-->
                      </div>
                  </div>
              </div>
              <div class="u-row-container" style="padding: 0px;background-color: transparent">
                  <div class="u-row" style="Margin: 0 auto;min-width: 320px;max-width: 600px;overflow-wrap: break-word;word-wrap: break-word;word-break: break-word;background-color: #ffffff;">
                      <div style="border-collapse: collapse;display: table;width: 100%;background-color: transparent;">
                          <!--if (mso)|(IE)table(width='100%' cellpadding='0' cellspacing='0' border='0')
tr
  td(style='padding: 0px;background-color: transparent;' align='center')
    table(cellpadding='0' cellspacing='0' border='0' style='width:600px;')
      tr(style='background-color: #ffffff;')-->
                          <!--if (mso)|(IE)td(align='center' width='300' style='width: 300px;padding: 0px 30px 30px;border-top: 0px solid transparent;border-left: 0px solid transparent;border-right: 0px solid transparent;border-bottom: 0px solid transparent;' valign='top')-->
                          <div class="u-col u-col-50" style="max-width: 320px;min-width: 300px;display: table-cell;vertical-align: top;">
                              <div style="width: 100% !important;">
                                  <!-- [if (!mso)&(!IE)] <!-->
                                  <div style="padding: 0px 30px 30px;border-top: 0px solid transparent;border-left: 0px solid transparent;border-right: 0px solid transparent;border-bottom: 0px solid transparent;">
                                      <!-- <![endif]-->
                                      <table style="font-family:'Open Sans',sans-serif;" role="presentation" cellpadding="0" cellspacing="0" width="100%" border="0">
                                          <tbody>
                                              <tr>
                                                  <td style="overflow-wrap:break-word;word-break:break-word;padding:10px;font-family:'Open Sans',sans-serif;" align="left">
                                                      <div class="v-text-align" style="color: #5c5757; line-height: 140%; text-align: left; word-wrap: break-word;">
                                                          <p style="font-size: 14px; line-height: 140%;"><strong><span style="font-size: 14px; line-height: 19.6px;">Terms and condition:</span></strong></p>
                                                          <p style="font-size: 14px; line-height: 140%;"><span style="font-size: 14px; line-height: 19.6px;">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh</span></p>
                                                      </div>
                                                  </td>
                                              </tr>
                                          </tbody>
                                      </table><!-- [if (!mso)&(!IE)] <!-->
                                  </div><!-- <![endif]-->
                              </div>
                          </div>
                          <!--if (mso)|(IE)-->
                          <!--if (mso)|(IE)td(align='center' width='300' style='width: 300px;padding: 0px 30px 30px;border-top: 0px solid transparent;border-left: 0px solid transparent;border-right: 0px solid transparent;border-bottom: 0px solid transparent;' valign='top')-->
                          <div class="u-col u-col-50" style="max-width: 320px;min-width: 300px;display: table-cell;vertical-align: top;">
                              <div style="width: 100% !important;">
                                  <!-- [if (!mso)&(!IE)] <!-->
                                  <div style="padding: 0px 30px 30px;border-top: 0px solid transparent;border-left: 0px solid transparent;border-right: 0px solid transparent;border-bottom: 0px solid transparent;">
                                      <!-- <![endif]-->
                                      <table style="font-family:'Open Sans',sans-serif;" role="presentation" cellpadding="0" cellspacing="0" width="100%" border="0">
                                          <tbody>
                                              <tr>
                                                  <td style="overflow-wrap:break-word;word-break:break-word;padding:10px;font-family:'Open Sans',sans-serif;" align="left">
                                                      <div class="v-text-align" style="color: #5c5757; line-height: 140%; text-align: left; word-wrap: break-word;">
                                                          <p style="font-size: 14px; line-height: 140%;"><strong><span style="font-size: 14px; line-height: 19.6px;">Client Information:</span></strong></p>
                                                          <p style="font-size: 14px; line-height: 140%;"><span style="font-size: 14px; line-height: 19.6px;">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh</span></p>
                                                      </div>
                                                  </td>
                                              </tr>
                                          </tbody>
                                      </table><!-- [if (!mso)&(!IE)] <!-->
                                  </div><!-- <![endif]-->
                              </div>
                          </div>
                          <!--if (mso)|(IE)-->
                          <!--if (mso)|(IE)-->
                      </div>
                  </div>
              </div>
              <div class="u-row-container" style="padding: 0px;background-color: transparent">
                  <div class="u-row" style="Margin: 0 auto;min-width: 320px;max-width: 600px;overflow-wrap: break-word;word-wrap: break-word;word-break: break-word;background-color: #0095df;">
                      <div style="border-collapse: collapse;display: table;width: 100%;background-color: transparent;">
                          <!--if (mso)|(IE)table(width='100%' cellpadding='0' cellspacing='0' border='0')
tr
  td(style='padding: 0px;background-color: transparent;' align='center')
    table(cellpadding='0' cellspacing='0' border='0' style='width:600px;')
      tr(style='background-color: #0095df;')-->
                          <!--if (mso)|(IE)td(align='center' width='600' style='width: 600px;padding: 0px;border-top: 0px solid transparent;border-left: 0px solid transparent;border-right: 0px solid transparent;border-bottom: 0px solid transparent;' valign='top')-->
                          <div class="u-col u-col-100" style="max-width: 320px;min-width: 600px;display: table-cell;vertical-align: top;">
                              <div style="width: 100% !important;">
                                  <!-- [if (!mso)&(!IE)] <!-->
                                  <div style="padding: 0px;border-top: 0px solid transparent;border-left: 0px solid transparent;border-right: 0px solid transparent;border-bottom: 0px solid transparent;">
                                      <!-- <![endif]-->
                                      <table style="font-family:'Open Sans',sans-serif;" role="presentation" cellpadding="0" cellspacing="0" width="100%" border="0">
                                          <tbody>
                                              <tr>
                                                  <td style="overflow-wrap:break-word;word-break:break-word;padding:0px;font-family:'Open Sans',sans-serif;" align="left">
                                                      <table height="0px" align="center" border="0" cellpadding="0" cellspacing="0" width="90%" style="border-collapse: collapse;table-layout: fixed;border-spacing: 0;mso-table-lspace: 0pt;mso-table-rspace: 0pt;vertical-align: top;border-top: 1px solid #BBBBBB;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%">
                                                          <tbody>
                                                              <tr style="vertical-align: top">
                                                                  <td style="word-break: break-word;border-collapse: collapse !important;vertical-align: top;font-size: 0px;line-height: 0px;mso-line-height-rule: exactly;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%"><span>&nbsp;</span></td>
                                                              </tr>
                                                          </tbody>
                                                      </table>
                                                  </td>
                                              </tr>
                                          </tbody>
                                      </table><!-- [if (!mso)&(!IE)] <!-->
                                  </div><!-- <![endif]-->
                              </div>
                          </div>
                          <!--if (mso)|(IE)-->
                          <!--if (mso)|(IE)-->
                      </div>
                  </div>
              </div>
              <div class="u-row-container" style="padding: 0px;background-color: transparent">
                  <div class="u-row" style="Margin: 0 auto;min-width: 320px;max-width: 600px;overflow-wrap: break-word;word-wrap: break-word;word-break: break-word;background-color: #ffffff;">
                      <div style="border-collapse: collapse;display: table;width: 100%;background-color: transparent;">
                          <!--if (mso)|(IE)table(width='100%' cellpadding='0' cellspacing='0' border='0')
tr
  td(style='padding: 0px;background-color: transparent;' align='center')
    table(cellpadding='0' cellspacing='0' border='0' style='width:600px;')
      tr(style='background-color: #ffffff;')-->
                          <!--if (mso)|(IE)td(align='center' width='600' style='width: 600px;padding: 0px;border-top: 0px solid transparent;border-left: 0px solid transparent;border-right: 0px solid transparent;border-bottom: 0px solid transparent;' valign='top')-->
                          <div class="u-col u-col-100" style="max-width: 320px;min-width: 600px;display: table-cell;vertical-align: top;">
                              <div style="width: 100% !important;">
                                  <!-- [if (!mso)&(!IE)] <!-->
                                  <div style="padding: 0px;border-top: 0px solid transparent;border-left: 0px solid transparent;border-right: 0px solid transparent;border-bottom: 0px solid transparent;">
                                      <!-- <![endif]-->
                                   
                                      <table style="font-family:'Open Sans',sans-serif;" role="presentation" cellpadding="0" cellspacing="0" width="100%" border="0">
                                          <tbody>
                                              <tr>
                                                  <td style="overflow-wrap:break-word;word-break:break-word;padding:9px 9px 31px;font-family:'Open Sans',sans-serif;" align="left">
                                                      <div align="center">
                                                          <div style="display: table; max-width:-1px;">
                                                              <!--if (mso)|(IE)table(width='-1' cellpadding='0' cellspacing='0' border='0')
tr
  td(style='border-collapse:collapse;' align='center')
    table(width='100%' cellpadding='0' cellspacing='0' border='0' style='border-collapse:collapse; mso-table-lspace: 0pt;mso-table-rspace: 0pt; width:-1px;')
      tr-->
                                                              <!--if (mso)|(IE)-->
                                                          </div>
                                                      </div>
                                                  </td>
                                              </tr>
                                          </tbody>
                                      </table>
                                      <table style="font-family:'Open Sans',sans-serif;" role="presentation" cellpadding="0" cellspacing="0" width="100%" border="0">
                                          <tbody>
                                              <tr>
                                                  <td style="overflow-wrap:break-word;word-break:break-word;padding:0px;font-family:'Open Sans',sans-serif;" align="left">
                                                      <table height="0px" align="center" border="0" cellpadding="0" cellspacing="0" width="90%" style="border-collapse: collapse;table-layout: fixed;border-spacing: 0;mso-table-lspace: 0pt;mso-table-rspace: 0pt;vertical-align: top;border-top: 1px solid #BBBBBB;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%">
                                                          <tbody>
                                                              <tr style="vertical-align: top">
                                                                  <td style="word-break: break-word;border-collapse: collapse !important;vertical-align: top;font-size: 0px;line-height: 0px;mso-line-height-rule: exactly;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%"><span>&nbsp;</span></td>
                                                              </tr>
                                                          </tbody>
                                                      </table>
                                                  </td>
                                              </tr>
                                          </tbody>
                                      </table><!-- [if (!mso)&(!IE)] <!-->
                                  </div><!-- <![endif]-->
                              </div>
                          </div>
                          <!--if (mso)|(IE)-->
                          <!--if (mso)|(IE)-->
                      </div>
                  </div>
              </div>
              <div class="u-row-container" style="padding: 0px;background-color: transparent">
                  <div class="u-row" style="Margin: 0 auto;min-width: 320px;max-width: 600px;overflow-wrap: break-word;word-wrap: break-word;word-break: break-word;background-color: #236fa1;">
                      <div style="border-collapse: collapse;display: table;width: 100%;background-color: transparent;">
                          <!--if (mso)|(IE)table(width='100%' cellpadding='0' cellspacing='0' border='0')
tr
  td(style='padding: 0px;background-color: transparent;' align='center')
    table(cellpadding='0' cellspacing='0' border='0' style='width:600px;')
      tr(style='background-color: #236fa1;')-->
                          <!--if (mso)|(IE)td(align='center' width='600' style='width: 600px;padding: 0px;border-top: 0px solid transparent;border-left: 0px solid transparent;border-right: 0px solid transparent;border-bottom: 0px solid transparent;' valign='top')-->
                          <div class="u-col u-col-100" style="max-width: 320px;min-width: 600px;display: table-cell;vertical-align: top;">
                              <div style="width: 100% !important;">
                                  <!-- [if (!mso)&(!IE)] <!-->
                                  <div style="padding: 0px;border-top: 0px solid transparent;border-left: 0px solid transparent;border-right: 0px solid transparent;border-bottom: 0px solid transparent;">
                                      <!-- <![endif]-->

                                  </div><!-- <![endif]-->
                              </div>
                          </div>
                          <!--if (mso)|(IE)-->
                          <!--if (mso)|(IE)-->
                      </div>
                  </div>
              </div>
              <!--if (mso)|(IE)-->
          </td>
      </tr>
  </tbody>
</table>
<!--if mso-->
<!--if IE-->
</body>

</html>