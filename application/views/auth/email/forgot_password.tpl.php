<body style="background:#F1F1F1;">
    <table style="margin-top:30px;" width="600" align="center" cellpadding="0" cellspacing="0">
    	<tr><td style="padding:10px;"></td> </tr>
        <tr style="background:#ffffff;">
            <td><img src="<?= site_url('images/mail/header.jpg'); ?>" alt="RE:media, mejora las noticias" /></td>
        </tr>
        <tr style="background:#ffffff;">
            <td style="font-size:14px; color:#7F7F7F; line-height:21px; font-family:Arial, helvetica;padding:0px 50px;">
                <h1 style="font-size:21px; font-style:italic; color:#3D87B7;"><? printf( _('Reestablecer contraseña para %s'), $username); ?></h1>
                <? $anchor = site_url('auth/reset_password/'. $forgotten_password_code); ?>
                <p><? printf( _('Haz click para <a href="%s">restablecer tu contraseña</a>.'), $anchor); ?></p>
            </td>
        </tr>
        <tr>
            <td><img src="<?= site_url('images/mail/footer.jpg'); ?>" alt="<? _e('RE:media, mejora las noticias'); ?>" /></td>
        </tr>
        <tr>
            <td style="font-size:12px; color:#7F7F7F; font-style:italic; font-family:Arial, helvetica;padding:0px 10px;">
                <p><? _e('Este es un mail automático, no lo respondas. Si quieres contactarnos escribe a <a href="mailto:comunidad@remedia.la">comunidad@remedia.la</a>'); ?>
                <p><? _e('Recibes este correo por ser re:mediante, por usar RE:media.'); ?></p>
                <p><? _e('<a href="http://remedia.la">remedia.la</a>'); ?></p>
        </tr>
    </table>
</body>
</html>
