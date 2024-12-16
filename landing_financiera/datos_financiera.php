<?
$nombre = $_POST['nombre'];
$telefono = $_POST['telefono'];
$email = $_POST['email'];

$subject="Montequin Financiera - Nuevo Cliente";
$from="montequin_financiera@viglum.ar";

$html="$nombre , $telefono , $email ( https://montequincreditos.com.ar/index.html) ";

$destinatario="montequin_financiera@viglum.ar";
send_mail($subject,$html,$from,$destinatario);

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
<script type="text/javascript">
document.location.href='index.html';
</script>