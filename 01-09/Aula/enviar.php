<?php
require_once("../classes/src/PHPMailer.php");
require_once("../classes/src/SMTP.php");
require_once("../classes/src/Exception.php");

// ** Ativacao das classes para uso **
use PHPMailer\PHPMailer\PHPMailer; // habilita username da phpmailer
use PHPMailer\PHPMailer\Exception; // habilita username da Exception
use PHPMailer\PHPMailer\SMTP; // habilita username da Exception

error_reporting (1); //p nao mostrar erros

// capturando dados do formulário
if ( !isset($_POST['destinatario']) ) {
    $_POST['destinatario']= '';
    $destinatario = $_POST['destinatario'];
    $assunto = $_POST['assunto'];
    $conteudo = $_POST['conteudo'];

    $mail = new PHPMailer(true); // instanciamento da classe
    $mail->isSMTP(); // definimos o protocolo de envio SMTP
    $mail->Host = 'smtp.hostinger.com'; // o SMTP do seu dominio de email deverá ser habilitado

    $mail->SMTPAuth = true; // habilitamos a autenticação //necessário
    $mail->Username = 'temporario@topsecuritty.com'; // email do servidor valido //cria usario temp
    $mail->Password = '@#Els2556'; // senha do email utilizado do servidor //senha para login no serve
    $mail->Port = 465; // porta de autenticação do servidor no caso é do gmail //necessário porta do server
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS; // Option for Enable implicit TLS encryption //tipo de criptografia ( a tls é padrão)
    $mail->setFrom ('temporario@topsecuritty.com'); // email do remetente
    // $mail->addReplyTo ($remetente); // um email de respostas
    $mail->addAddress($destinatario, 'Fulano de Tal'); // email do destinatario (email da pessoa que vai recebe e algum recado)
    //$mail->addAddress('email@email.com.br', 'Contato'’); // mais destinatarios
    //$mail->addCC('email@email.com.br', 'Cópia'); // email copiado
    //$mail->addBCC('email@email.com.br', 'Cópia Oculta') // email copiado ocultamente

    $mail->isHTML(true); // habilita o uso do HTML //permite que o conteudo seja escrito em HTML (caso algum sistema não seja compativel com o PHPMailer)
    $mail->Subject = $assunto; // assunto do email
    $mail->Body = '<strong>'. $conteudo . '</strong>'; // conteúdo da HTML

    $mail->AltBody = 'Texto sem HTML ou link'; // No caso da máquina cliente não suportar

    // $mail->addAttachment('/tmp/image.jpg', 'nome.jpg'); // Possivel arquivo anexado


    //depois de configurado enviar
    // Enviando o Formulário
    if ( $_POST['enviar'] )
    {
        if ( !$mail->send() )
        {
            //dá erro se não foi enviado
            echo 'Não foi possível enviar a mensagem.<br>';
            echo 'Erro: ' . $mail->ErrorInfo;
        }
        else
        {
            echo "<table align = center>
            <tr> <td style=\"font-family: 'Times New Roman', Times, serif;
            font-size: large; width: 300px; height:10px; background: rgb(176, 194, 71);
            text-align: center;\"> Mensagem de Operação </td></tr><tr>
            <td style=\"font-family: 'Times New Roman', Times, serif;
            font-size: large; width: 300px; height:100px; background: rgb(104, 71, 194);
            text-align: center;\"> Envio bem Sucedido,<br>Parabéns! </td></tr>
            </table>";
        }
    }
}