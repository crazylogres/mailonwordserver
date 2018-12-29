<?php
add_action( 'phpmailer_init', 'mailer_config', 10, 1);
function mailer_config(PHPMailer $mailer){
  $mailer->IsSMTP();
  $mailer->Host = "smtp.gmail.com"; // your SMTP server
  $mailer->Port = 587;
  $mailer->SMTPDebug = 2; // write 0 if you don't want to see client/server communication in page
  $mailer->CharSet  = "utf-8";
  $mailer->Secure="tls";
}

add_filter( 'wp_mail_content_type', create_function( '', 'return "text/html";' ) );
?>