
<?php
$nome = $_POST['nome'];
$email = $_POST['email'];
$mensagem = $_POST['mensagem'];

$para = 'deoliveiragomes80@gmail.com'; // altere para o seu e-mail
$assunto = 'Mensagem do site';

$cabecalho = 'From: ' . $email . "\r\n" .
			'Reply-To: ' . $email . "\r\n" .
			'X-Mailer: PHP/' . phpversion();

mail($para, $assunto, $mensagem, $cabecalho);

echo 'Mensagem enviada com sucesso!';
?>
```
