<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Zoney</title>
    <link rel="shortcut icon" type="image/ico" href="<?=base_url();?>assets/img/favicon.ico" />
    <style type="text/css">/*<![CDATA[*/@font-face{font-family:LatoLight;src:url(<?=base_url();?>assets/fonts/Lato-Light.ttf)}.ReadMsgBody{width:100%;background-color:#fff}.ExternalClass{width:100%;background-color:#fff}.ExternalClass,.ExternalClass p,.ExternalClass span,.ExternalClass font,.ExternalClass td,.ExternalClass div{line-height:100%}html{width:100%}body{-webkit-text-size-adjust:none;-ms-text-size-adjust:none;margin:0;padding:0}.im{color:#CCC !important;}table{border-spacing:0;table-layout:fixed;margin:0 auto}table table table{table-layout:auto}img{over-flow:hidden!important}table td{border-collapse:collapse}.yshortcuts a{border-bottom:none!important}a{color:#000;text-decoration:none}.textbutton a{font-family:'open sans',arial,sans-serif!important;color:#ffffff!important}.menu a{font-family:Tahoma!important;color:#99a6b5!important}@media only screen and (max-width:640px){body{width:auto!important}table[class="table-inner"]{width:85%!important}table[class="table-full"]{width:100%!important;text-align:center!important}img[class="img1"]{width:100%!important;height:auto!important}td[class="hide"]{max-height:0!important;height:0!important}}@media only screen and (max-width:479px){body{width:auto!important}table[class="table-inner"]{width:90%!important;text-align:center!important}table[class="table-full"]{width:100%!important;text-align:center!important}img[class="img1"]{width:100%!important;height:auto!important}td[class="hide"]{max-height:0!important;height:0!important}img.logo{dispaly:inline-block!important;}table td.block{dispaly:block!important;width:100%!important;float:left!important;text-align:center;}}@media only screen and (max-width:360px){body{width:auto!important}table[class="table-inner"]{width:90%!important;text-align:center!important;padding:10px!important}table[class="table-full"]{width:100%!important;text-align:center!important}img[class="img1"]{width:100%!important;height:auto!important}td[class="hide"]{max-height:0!important;height:0!important}#nomob{display:none!important}}/*]]>*/</style>
</head>
<body style="background-color:#f6f6f6; margin:0px;">
<table style="width:100%; background-color:#f6f6f6;margin:0 auto;" cellspacing="0" cellpadding="0" border="0">
    <thead style="background-color:#004274; padding:10px; box-shadow: 0 2px 2px rgba(0, 0, 0, 0.2);">
    <tr>
        <td align="center" width="100%">
            <table class="table-inner" width="600" align="center" border="0" cellspacing="0" cellpadding="0" style="padding:10px;">
                <tr>
                    <td align="left" valign="middle" class="block"><img src="<?=base_url();?>assets/img/logo-header2.png" width="242" height="" alt="" class="logo" /></td>
                    <td align="right" valign="middle" class="block">
                        <a style="border:#fff solid 1px; background-color:#004274; border-radius:4px; width:25px; height:25px; text-align:center; display:inline-block; margin:6px 5px 0 0;" href="https://www.facebook.com/neighborty/" target="_blank">
                            <img src="<?=base_url();?>assets/media/newsletter/fb.png"  width="100%" />
                        </a>
                        <a style="border:#fff solid 1px; background-color:#004274; border-radius:4px; width:25px; height:25px; text-align:center; display:inline-block; margin:6px 5px 0 0;" href="#" target="_blank">
                            <img src="<?=base_url();?>assets/media/newsletter/tw.png" width="100%" />
                        </a>
                        <a style="border:#fff solid 1px; background-color:#004274; border-radius:4px; width:25px; height:25px; text-align:center; display:inline-block; margin:6px 5px 0 0;" href="#" target="_blank">
                            <img src="<?=base_url();?>assets/media/newsletter/pint.png"  width="100%" />
                        </a>
                        <a style="border:#fff solid 1px; background-color:#004274; border-radius:4px; width:25px; height:25px; text-align:center; display:inline-block; margin:6px 5px 0 0;" href="https://www.instagram.com/neighborty_inc/" target="_blank">
                            <img src="<?=base_url();?>assets/media/newsletter/instaa.png" width="100%" />
                        </a>
                    </td>
                </tr>
            </table>
        </td>
    </tr>
    </thead>
    <tbody>
    <tr>
        <td align="center" width="100%">
            <table class="table-inner" width="600" align="center" border="0" cellspacing="0" cellpadding="0">
                <tr>
                    <td valign="middle" align="center" colspan="2" style="padding:; background-color:#00aeef; padding:10px; color:#FFF">
                        <strong style="font-family:Open sans,Arial,Sans-serif; font-size:18px; text-transform:uppercase;"><?php echo isset($headermessage) ? $headermessage : '';?></strong>
                    </td>
                </tr>

                <tr>
                    <td valign="top" colspan="2" style="padding:30px 10px 10px; background-color:#f6f6f6;">
                        <strong style="font-family:Open sans,Arial,Sans-serif; font-size:16px; color:#434343; width:100%; float:left; padding-bottom:8px; font-weight:700; border-bottom:2px solid #616161">Hello {First Name}!,</strong>
                    </td>
                </tr>

                <tr style="font-family:Open sans,Arial,Sans-serif;" data-link-color="Content Link" data-color="Content" data-size="Content" mc:edit="1-2-right-3">
                    <td valign="top" align="left" colspan="2" style="padding:25px 10px;">

                        <multiline label="content"><?=$description;?></multiline>

                    </td>
                </tr>


                <tr>
                    <td valign="top" colspan="2" style="padding:25px 10px; background-color:#f6f6f6;">
                        <div style="color:#434343; font-family:Open sans,Arial,Sans-serif; font-size:14px; line-height: 150%; text-align: left; border-top:1px solid #C5C5C5">
                            <p style="color:#464646; font-size:13px;">Sincerely,<br />Team Zoney</p>
                        </div>
                    </td>
                </tr>

            </table>
        </td>
    </tr>
    </tbody>
    <tfoot>
    <tr>
        <td align="center" colspan="2" style="background-color: #00335A; border-top: 1px solid #00243f; padding:10px 10px;">
            <table align="center" class="table-inner" width="600" border="0">
                <tr>
                    <td align="center">
                        <p style="font-family:Open sans,Arial,Sans-serif; font-size:13px; color:#FFF; font-weight:500">
                            © <a href=<?=site_url('/');?>" target="_blank" style="color:#FFF">Zoney</a> <?=date('Y');?> - All Rights Reserved.
                        </p>
                    </td>
                </tr>
            </table>
        </td>
    </tr>
    </tfoot>
</table>
</body>
</html>