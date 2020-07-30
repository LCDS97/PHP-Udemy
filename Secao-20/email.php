<?php
require_once("vendor/autoload.php");

// namespace
use Rain\Tpl;

// config
$config = array(
    "tpl_dir"       => "tpl/",
    "cache_dir"     => "cache/",
);

Tpl::configure( $config );



// create the Tpl object
$tpl = new Tpl;

// assign a variable
$tpl->assign( "name", "Luquitas" );
$tpl->assign( "version", PHP_VERSION );

// assign an array
//$tpl->assign( "week", array( "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday", "Sunday" ) );

// draw the template
$html = $tpl->draw( "index", true);

//------------------------//

$mail = new PHPMailer();

$mail->isSMTP();
$mail->SMTPDebug = 2;
$mail->Debugoutput = 'html';
$mail->Host = 'ns982.hostgator.com.br';
$mail->Port = 587;
$mail->SMTPOptions = array(
    'ssl' => array(
    'verify_peer' => false,
    'verify_peer_name' => false,
    'allow_self_signed' => true
    )
    );
$mail->SMTPSecure = 'tls';
$mail->SMTPAuth = true;
$mail->Username = "automatic@worldoflcds.com";
$mail->Password = "12345";
$mail->setFrom('automatic@worldoflcds.com', 'Curso PHP 7');
$mail->addAddress('lucas.cds1997@gmail.com', 'Luquinhas');
$mail->Subject = 'Testando o PHP Mailer com o RAIN TPL';
$mail->msgHTML($html);
$mail->AltBody = 'Plain text do alt body';

if (!$mail->send()){
    echo "Mailer Error: ".$mail->ErrorInfo;
}
else {
    echo "Mensagem enviada!";
}
?>
