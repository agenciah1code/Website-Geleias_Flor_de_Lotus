<?php
// Adiciona o arquivo class.phpmailer.php - você deve especificar corretamente o caminho da pasta com o este arquivo.
require_once("PHPMailerAutoload.php");
// Inicia a classe PHPMailer
$mail = new PHPMailer();

// DEFINIÇÃO DOS DADOS DE AUTENTICAÇÃO - Você deve auterar conforme o seu domínio!
$mail->IsSMTP(); // Define que a mensagem será SMTP
$mail->Host = "hds01ca.pagliahost.com.br"; // Seu endereço de host SMTP
$mail->SMTPAuth = true; // Define que será utilizada a autenticação -  Mantenha o valor "true"
$mail->Port = 465; // Porta de comunicação SMTP - Mantenha o valor "587"
$mail->SMTPSecure = true; // Define se é utilizado SSL/TLS - Mantenha o valor "false"
$mail->SMTPAutoTLS = true; // Define se, por padrão, será utilizado TLS - Mantenha o valor "false"
$mail->Username = 'contato@geleiasflordelotus.com.br'; // Conta de email existente e ativa em seu domínio
$mail->Password = '8&gKhoONh%2$$2kz'; // Senha da sua conta de email

// DADOS DO REMETENTE
$mail->Sender = "contato@geleiasflordelotus.com.br"; // Conta de email existente e ativa em seu domínio
$mail->From = "contato@geleiasflordelotus.com.br"; // Sua conta de email que será remetente da mensagem
$mail->FromName = "Formulário de Contato (Site)"; // Nome da conta de email

// DADOS DO DESTINATÁRIO
$mail->AddAddress('contato@geleiasflordelotus.com.br', 'Contato - Geleias Flor de Lótus'); // Define qual conta de email receberá a mensagem
//$mail->AddAddress('recebe2@geleiasflordelotus.com.br'); // Define qual conta de email receberá a mensagem
$mail->AddCC('cristina@geleiasflordelotus.com.br'); // Define qual conta de email receberá uma cópia
$mail->AddCC('gilberto@geleiasflordelotus.com.br'); // Define qual conta de email receberá uma cópia
//$mail->AddBCC('copiaoculta@dominio.info'); // Define qual conta de email receberá uma cópia oculta

// Definição de HTML/codificação
$mail->IsHTML(true); // Define que o e-mail será enviado como HTML
$mail->CharSet = 'utf-8'; // Charset da mensagem (opcional)

// DEFINIÇÃO DA MENSAGEM
$mail->Subject  = "Formulário de Contato do Site (".$_POST['nome'].")"; // Assunto da mensagem
$mail->Body .= " Nome: ".$_POST['nome']."<br>"; // Texto da mensagem
$mail->Body .= " E-mail: ".$_POST['e-mail']."<br>"; // Texto da mensagem
$mail->Body .= " Telefone: ".$_POST['telefone']."<br>"; // Texto da mensagem
$mail->Body .= " Setor: ".$_POST['setor']."<br>"; // Texto da mensagem
$mail->Body .= " Mensagem: ".nl2br($_POST['mensagem'])."<br>"; // Texto da mensagem

// PÁGINA QUE SERÁ EXIBIBA APÓS O ENVIO

$exibir_apos_enviar='/index.php';

// ENVIO DO EMAIL
$enviado = $mail->Send();
// Limpa os destinatários e os anexos
$mail->ClearAllRecipients();

// Exibe uma mensagem de resultado do envio (sucesso/erro)
if ($enviado) {
	echo "<script>window.location='$exibir_apos_enviar'
	alert('E-mail enviado com sucesso! Obrigado por entrar em contato conosco, em breve seu e-mail será respondido');
	</script>";
} else {
	echo "<script>window.location='$exibir_apos_enviar'
	alert('Não foi possível enviar o e-mail. $mail->ErrorInfo');
	</script>";
}