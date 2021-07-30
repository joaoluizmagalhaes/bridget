<?php 
	require_once get_template_directory() . '/config/config.php';

	//This function send email with Resume attached
	add_action( 'wp_ajax_sendContactForm', 'sendContactForm');
	add_action( 'wp_ajax_nopriv_sendContactForm','sendContactForm');

	function sendContactForm(){
	   	$data = $_POST;

        ob_start(); ?>

        <div id="wrapper" dir="ltr" style="background-color: #ffffff; margin: 0; padding: 70px 0; width: 100%; -webkit-text-size-adjust: none;">
            <table border="0" cellpadding="0" cellspacing="0" height="100%" width="100%">
                <tr>
                    <td align="center" valign="top">
                        <div id="template_header_image">
                            <p style="margin-top: 0;"><img src="http://bridget.com.br/testes/wp-content/uploads/2021/07/logo-bridget.svg" alt="Bridget" style="border: none; display: inline-block; font-size: 14px; font-weight: bold; height: auto; outline: none; text-decoration: none; text-transform: capitalize; vertical-align: middle; max-width: 100%; margin-left: 0; margin-right: 0;"></p>
                        </div>
                        <table border="0" cellpadding="0" cellspacing="0" width="600" id="template_container" style="background-color: #fffdfb; border: 1px solid #e5e5e5; box-shadow: 0 1px 4px rgba(0, 0, 0, 0.1); border-radius: 3px;">
                            <tr>
                                <td align="center" valign="top">
                                    <!-- Header -->
                                    <table border="0" cellpadding="0" cellspacing="0" width="100%" id="template_header" style='background-color: #19325A; color: #ffffff; border-bottom: 0; font-weight: bold; line-height: 100%; vertical-align: middle; font-family: Roboto, Arial, sans-serif; border-radius: 3px 3px 0 0;'>
                                        <tr>
                                            <td id="header_wrapper" style="padding: 36px 48px; display: block;">
                                                <h1 style='font-family: Roboto, Arial, sans-serif; font-size: 30px; font-weight: 600; line-height: 150%; margin: 0; text-align: center; color: #ffffff;'>Contato via site!</h1>
                                            </td>
                                        </tr>
                                    </table>
                                    <!-- End Header -->
                                </td>
                            </tr>
                            <tr>
                                <td align="center" valign="top">
                                    <!-- Body -->
                                    <table border="0" cellpadding="0" cellspacing="0" width="600" id="template_body">
                                        <tr>
                                            <td valign="top" id="body_content" style="background-color: #fffdfb;">
                                                <!-- Content -->
                                                <table border="0" cellpadding="20" cellspacing="0" width="100%">
                                                    <tr>
                                                        <td valign="top" style="padding: 48px 48px 32px;">
                                                            <div id="body_content_inner" style='color: #55514e; font-family: Roboto, Arial, sans-serif; font-size: 14px; line-height: 150%; text-align: left;'>
                                                                <p style="margin: 0 0 16px; color: #7a7786">Nome: <?= esc_html($_POST['nome'] ) ?></p>
                                                                <p style="margin: 0 0 16px; color: #7a7786">Telefone: <?= esc_html($_POST['telefone'] ) ?></p>
                                                                <p style="margin: 0 0 16px; color: #7a7786">Email: <?= esc_html($_POST['email'] ) ?></p>
                                                                <p style="margin: 0 0 16px; color: #7a7786">Mensagem: <?= esc_html($_POST['mensagem'] ) ?></p>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                </table>
                                                <!-- End Content -->
                                            </td>
                                        </tr>
                                    </table>
                                    <!-- End Body -->
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
                <tr>
                    <td align="center" valign="top">
                        <!-- Footer -->
                        <table border="0" cellpadding="10" cellspacing="0" width="600" id="template_footer">
                            <tr>
                                <td valign="top" style="padding: 0; border-radius: 6px;">
                                    <table border="0" cellpadding="10" cellspacing="0" width="100%">
                                        <tr>
                                            <td colspan="2" valign="middle" id="credit" style='border-radius: 6px; border: 0; color: #807d7a; font-family: Roboto, Arial, sans-serif; font-size: 12px; line-height: 150%; text-align: center; padding: 24px 0;'>
                                                <p style="margin: 0 0 16px; color: ">Copyright © Bridget - Todos os direitos reservados</p>
                                            </td>
                                        </tr>
                                    </table>
                                </td>
                            </tr>
                        </table>
                        <!-- End Footer -->
                    </td>
                </tr>
            </table>
        </div>

        <?php 
        $mensagem = ob_get_clean();         

      	$assunto = "Mensagem via site Bridget!";

      	$mail_sent = mailing('contato@bridget.com.br', $assunto, $mensagem);

        if ($mail_sent === true) {
            return true;
        } else { 
            return false;
        } // End else

	    //Always use exit() in ajax request handler function end
	    exit();
	}

	//This function send email message
	add_action( 'wp_ajax_sendNewsletter',  'sendNewsletter');
	add_action( 'wp_ajax_nopriv_sendNewsletter','sendNewsletter');

	function sendNewsletter(){
	   	$data = $_POST;
	   
	   	$mensagem = 'Email cadastrado no Site do Motel bridget para envio de Newsletter: ' . $_POST['email'];

      	$assunto = "Cadastro para Newsletter";

      	$mail_sent = mailing('contato@motelbridget.com.br', $assunto, $mensagem);

        if ($mail_sent === true) {
            return true;
        } else { 
            return false;
        } // End else

	    //Always use exit() in ajax request handler function end
	    exit();
	}

	function mailing($to, $subject, $message, $attachment = null) {

        require_once get_template_directory() . '/plugins/mail/mailer/PHPMailerAutoload.php';

        $from              = NCN_MAILER_FROM;
        $namefrom          = NCN_MAILER_NAME;
        $mail              = new PHPMailer();
        $mail->IsSMTP();   // enable SMTP
        $mail->SMTPDebug   = 3;
        $mail->Debugoutput = 'html';
        $mail->CharSet     = 'UTF-8';
        $mail->SMTPAuth    = true;   // user and password
        $mail->SMTPSecure  = "ssl";    // options: 'ssl', 'tls' , ''
        $mail->Host        = NCN_MAILER_HOST;
        $mail->Port        = NCN_MAILER_PORT;
        $mail->Username    = NCN_MAILER_FROM;
        $mail->Password    = NCN_MAILER_PASS;


        $mail->setFrom($from, $namefrom);   // From (origin)
        $mail->addCC($from, $namefrom);      // There is also addBCC
        $mail->Subject = $subject;
        //$mail->AltBody  = $altmess;
        $mail->Body = $message;
        $mail->isHTML(true);   // Set HTML type
            
        $mail->addAddress($to);

        return $mail->send();

    }