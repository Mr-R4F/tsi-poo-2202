<?php


require_once '../src/PHPMailer.php';
require_once '../src/SMTP.php';
require_once '../src/Exception.php';

// ** Ativacao das classes para uso **
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP; //deg apenas

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

        for ($i = 0; $i < 6; $i++) { //gera código
            $this->codAcesso .= rand(0, 9);
        }

        $stmt = $this->bd->prepare("INSERT INTO usuarios (login, email, telefone, codAcesso) VALUES (?, ?, ?, $this->codAcesso)");
        $stmt -> bind_param('sss', $this->login, $this->email, $this->tel);
        echo $stmt -> execute() ?  'INSERIU' : 'NÃO INSERIU';
    
        $mail = new PHPMailer(true);

        try {
            //Config do servidor
            //$mail -> SMTPDebug = SMTP::DEBUG_SERVER;        
            $mail -> SMTPOptions = array( //para funcionar o envio e corrigir o erro de servidor não encontrado
                'ssl' => array(
                'verify_peer' => false,
                'verify_peer_name' => false,
                'allow_self_signed' => true
            ));
            $mail -> isSMTP();
            $mail -> Host = 'smtp.gmail.com';
            $mail -> SMTPAuth = true;
            $mail -> Username = 'rtestconta@gmail.com';
            $mail -> Password = 'rdqeiflpwpwswgcm';
            $mail -> SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
            $mail -> Port = 465;

            $mail -> setFrom("$this->email", 'teste'); //de
            $mail -> addAddress("$this->email", 'testes2');//Add a recipient /destino //para
            $mail -> isHTML(true); //Set email format to HTML
            $mail -> Subject = 'Senha de acesso';
            $mail -> Body    = "$this->codAcesso"; //c/ html
            $mail -> AltBody = 'This is the body in plain text for non-HTML mail clients'; //s/ html

            $mail -> send(); //cria a msg e envia
            
            echo ' Email enviado com sucesso!';
        } catch (Exception $e) {
            echo 'Houve um erro ao enviar o Email.';
            $e->getMessage($e);
            ($mail -> ErrorInfo);
        }
    }

    public function setValidar() {
        $stmt = $this->bd -> query("SELECT codAcesso FROM usuarios WHERE codAcesso = {$_POST['senha']}");
        $sen = $stmt -> fetch_All(MYSQLI_ASSOC);

        if (empty($sen)) {
            $this->validado = false;
            $stmt = $this->bd -> query("UPDATE usuarios SET validado = $this->validado WHERE codAcesso = {$_POST['senha']}");
            echo 'ERRO, O CÓDIGO INFORMADO É INVÁLIDO';
        } else {
            $this->validado = true;
            $stmt = $this->bd -> query("UPDATE usuarios SET validado = $this->validado WHERE codAcesso = {$_POST['senha']}");
            echo  'AÇÃO BEM SUCEDIDA, USE ESTE CÓDIGO COMO SENHA DE LOGIN';
        }
    }

    public function setLogin ($login, $codAcesso) {
        $stmt = $this->bd -> query("SELECT email AND codAcesso FROM usuarios WHERE email = '$login' AND codAcesso = '$codAcesso' AND validado = TRUE");
        $user = $stmt -> fetch_All(MYSQLI_ASSOC);
        echo empty($user) ? 'USUARIO NÃO EXISTE NA BASE DE DADOS OU NÃO FOI VALIDADO' : 'LOGADO COM SUCESSO, BEM VINDO! :D'. header('Location: ../../php/index.php');
    }
}