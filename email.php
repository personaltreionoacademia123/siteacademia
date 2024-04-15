<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Resultado</title>
</head>
<body>
  <header>
    <h1>Agendado</h1>
  </header>
<main>
<?php
// Verifica se o formulário foi submetido
if ($_SERVER["REQUEST_METHOD"] == "GET") 
{
    // Recupera os dados do formulário
    $nome = $_GET['nomecompleto'];
    $email = $_GET['email'];
    $data = $_GET['data']; // Obtendo a variável data do formulário

    // Configurações para enviar e-mail
    $destinatario = "personaltreinoacademia@gmail.com"; // Substitua pelo seu endereço de e-mail
    $assunto = "Novo agendamento de aula experimental";

    // Monta o corpo do e-mail
    $corpo .= "Agendamento para o dia: ". $data . "\n"??""; // Incluindo a data no corpo do e-mail
    $corpo .= "Nome:" .$nome . "\n"??"";
    $corpo .= "E-mail: " . $email??"";

    // Envia o e-mail
    if (mail($destinatario, $assunto, $corpo??"")){
        echo ".";
    } 
    else{
        echo "Erro ao enviar o e-mail.";
    }
}
?>
  <p><a href="javascript:history.go(-1)">Voltar para a página anterior</a>"</p>
</main>
</body>
</html>











