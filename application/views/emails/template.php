<body style="background:#F1F1F1;">
    <table style="margin-top:30px;" width="600" align="center" cellpadding="0" cellspacing="0">
    	<tr><td style="padding:10px;"></td> </tr>
        <tr style="background:#ffffff;">
            <td><img src="<?= site_url('images/mail/header.jpg'); ?>" alt="<? _e('Remedia.la, mejora las noticias'); ?>" /></td>
        </tr>
        <tr style="background:#ffffff;">
            <td style="font-size:14px; color:#7F7F7F; line-height:21px; font-family:Arial, helvetica;padding:0px 50px;">
                <h1 style="font-size:21px; font-style:italic; color:#3D87B7;"><?= $title ?></h1>
                <?= $content ?>
            </td>
        </tr>
        <tr>
            <td><img src="<?= site_url('images/mail/footer.jpg'); ?>" alt="<? _e('Remedia.la, mejora las noticias'); ?>" /></td>
        </tr>
        <tr>
            <td style="font-size:12px; color:#7F7F7F; font-style:italic; font-family:Arial, helvetica;padding:0px 10px;">
                <? $link = site_url('usuario/editar'); ?>
                <p><? printf(_('Este es un mail automático, no lo respondas. Si quieres contactarnos escribe a <a href="mailto:comunidad@remedia.la">comunidad@remedia.la</a>. Recibes este correo porque eres usuario de RE:media.
                Puedes personalizar las notificaciones que quieres recibir en <a href="%s">tu perfil</a>. Remedia.la, arregla las noticias. Un proyecto financiado por gente como tú para mejorar la información.'), $link); ?>
 </p>
            </td>
        </tr>
    </table>
</body>
</html>
