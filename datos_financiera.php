<?
$nombre = $_POST['nombre'];
$telefono = $_POST['telefono'];
$email = $_POST['email'];
$honeyPot = $_POST['emailSec'];

$subject="Montequin Financiera - Nuevo Cliente";
$from="montequin_financiera@viglum.ar";

$html = "Nombre:  $nombre \nTeléfono:  $telefono \nEmail:  $email \nMensaje enviado desde: https://montequincreditos.com.ar/";

$destinatario="financiera@montequin.com.ar, marketing@trompoagencia.com";


if(empty($honeyPot)){
    send_mail($subject,$html,$from,$destinatario);
    ?>

    <script type="text/javascript">
      document.location.href='gracias.html';
    </script>
    <?
}else{
    
    ?>
        <script type="text/javascript">
          document.location.href='index.html';
        </script>
    <?
    
}

function send_mail($subject,$html,$from,$destinatario)
{
  $subject=$subject; //subject 
  $header="From: <".$from.">\nReply-To: statusmail01@gmail.com\n";
  $header=$header."X-Mailer:PHP/".phpversion()."\n";
  $header=$header."MIME-Version: 1.0\r\n";
  $header=$header."Content-Type: text/plain; charset=\"UTF-8\"\r\n";
  $header=$header."Content-Transfer-Encoding: 8bit\r\n";
  mail($destinatario,$subject,$html,$header);
}

?>