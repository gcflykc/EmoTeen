<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $para = "gota7@proton.me";
    $assunto = "Nova resposta do formulário emocional";

    $mensagem = "";
    foreach ($_POST as $campo => $valor) {
        $mensagem .= ucfirst($campo) . ": " . $valor . "\n";
    }

    $cabecalhos = "From: formulario@seusite.com\r\n";
    $cabecalhos .= "Reply-To: no-reply@seusite.com\r\n";

    if (mail($para, $assunto, $mensagem, $cabecalhos)) {
        echo "Formulário enviado com sucesso!";
    } else {
        echo "Erro ao enviar o formulário.";
    }
}
?>
