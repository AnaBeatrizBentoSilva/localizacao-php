<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>WEBSERVICE</title>
</head>
<body >
    <!-- Formulário para buscar CEP, enviando para o arquivo "buscarCEP.php" via método POST -->
    <form action="buscarCEP.php" method="post">

    <!-- Campo de entrada de texto para o CEP -->
    <input name="txtCEP" type="text" placeholder="CEP Ex.: 140000">

    <!-- Botão para realizar a busca -->
    <button name="btnBuscar">Buscar</button>
    </form>
</body>
</html>


