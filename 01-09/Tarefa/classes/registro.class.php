<?php
require_once "../config/src/PHPMailer.php";
require_once "../config/src/SMTP.php";
require_once "../config/src/Exception.php";

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

class Registro { 
    private $login;
    private $email;
    private $tel;
    private $validado;
    private $codAcesso;
    private $bd; //banco

    //Conexão do banco
    public function dbConn($bd) {
        $this->bd = $bd;
    }

    public function setUsuario($login, $email, $tel) {
        $this->login = $login;
        $this->email = $email;
        $this->tel = $tel;
    }

    public function setRegistrar() { //enviar o código para o banco e manda o cód para o email
        $this->codAcesso = '';

        for ($i = 0; $i < 6; $i++) {
            $this->codAcesso .= rand(0, 9);
        }

        $stmt = $this->bd->prepare("INSERT INTO usuarios (login, email, telefone, codAcesso) VALUES (:login, :email, :telefone, $this->codAcesso)");
        $stmt -> bindParam(':login', $this->login);
        $stmt -> bindParam(':email', $this->email);
        $stmt -> bindParam(':telefone', $this->tel);
        echo $stmt -> execute() ?  'INSERIU' : 'NÃO INSERIU';
    
        $mail = new PHPMailer(true);

        try {
            //Config do servidor
            $mail -> SMTPDebug = SMTP::DEBUG_SERVER;        
            $mail -> SMTPOptions = array( //para funcionar o envio e corrigir o erro de servidor não encontrado
                'ssl' => array(
                'verify_peer' => false,
                'verify_peer_name' => false,
                'allow_self_signed' => true
            ));
            $mail -> isSMTP(); //envia usando SMTP
            $mail -> Host = 'smtp.gmail.com'; //Define o servidor SMTP a ser enviado
            $mail -> SMTPAuth = true; // Ativa a autenticação SMTP
            $mail -> Username = 'rtestconta@gmail.com'; //Nome SMTP 
            $mail -> Password = 'uU{nQZ&{Iiu9x{rz:Z]W'; //Senha SMTP
            $mail -> SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;  //Enable implicit TLS encryption
            $mail -> Port = 465;
            $mail -> setFrom("'rtestconta@gmail.com'","'$this->codAcesso'");
            $mail -> addAddress("'rtestconta@gmail.com'", 'testes2');     //Add a recipient /destino
            $mail -> isHTML(true);                                  //Set email format to HTML
            $mail -> Subject = '';
            $mail -> Body    = ''; //c/ html
            $mail -> AltBody = 'This is the body in plain text for non-HTML mail clients'; //s/ html
            $mail -> send(); //cria a msg e envia
            
            echo 'Email enviado com sucesso!';
        } catch (Exception $e) {
            echo 'Houve um erro ao enviar o Email.';
            $e->getMessage();
            ($mail -> ErrorInfo);
        }
    }

    public function setValidar($val) {
        $this->validado = $val;
    }

    public function setLogin ($login, $codAcesso) {
        $stmt = $this->bd -> query("SELECT email AND codAcesso FROM usuarios WHERE email = '$login' AND codAcesso = '$codAcesso'");
        $stmt -> execute();
        $user = $stmt -> fetchAll();
        var_dump($user);
        echo $user === '' ? 'LOGADO COM SUCESSO' : 'USUARIO NÃO EXISTE NA BASE DE DADOS';
    }
}