<?php

$errorMSG = "";

// NAME
if (empty($_POST["name"])) {
    $errorMSG = "Ingrese su Nombre completo ";
} else {
    $name = $_POST["name"];
}

// EMAIL
if (empty($_POST["email"])) {
    $errorMSG .= "Ingrese un email válido ";
} else {
    $email = $_POST["email"];
}

// PHONE
if (empty($_POST["phone"])) {
    $errorMSG .= "Ingrese un telefono válido ";
} else {
    $phone = $_POST["phone"];
}

// MESSAGE
if (empty($_POST["message"])) {
    $errorMSG .= "Ingrese su mensaje ";
} else {
    $message = $_POST["message"];
}


$EmailTo = "financiera@montequin.com.ar, maximilianolohr@montequin.com.ar, marcelolohr@montequin.com.ar";
$Subject = "Nuevo mensaje de Montequin Financiera";

// prepare email body text
$Body = "";
$Body .= "Nombre: ";
$Body .= $name;
$Body .= "\n";
$Body .= "Email: ";
$Body .= $email;
$Body .= "\n";
$Body .= "Telefono: ";
$Body .= $phone;
$Body .= "\n";
$Body .= "Mensaje: ";
$Body .= $message;
$Body .= "\n";

// send email
$success = mail($EmailTo, $Subject, $Body, "From:".$email);

// redirect to success page
if ($success && $errorMSG == ""){
   echo "Mensaje enviado con éxito. Gracias por comunicarte con Montequin Financiera, a la brevedad nuestros asesores se estarán contactando con usted. Saludos, atentamente.-";
}else{
    if($errorMSG == ""){
        echo "Algo salió mal, vuelva a intentarlo :(";
    } else {
        echo $errorMSG;
    }
}

?>