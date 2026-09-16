<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <title>Dados do Cliente</title>
</head>

<body>

    <h1>Dados do Cliente</h1>

    
    <form method="POST">

        <label>Nome:</label><br>
        <input type="name" name="nome" required>
        <br>

        
        <label>E-mail:</label><br>
        <input type="email" name="email" required>

        <br><br>


        <button type="submit">Cadastrar</button>

    <?php

    
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $email = $_POST["email"];
        echo "E-mail recebido: " . $email;
    }
    ?>

</body>

</html>
