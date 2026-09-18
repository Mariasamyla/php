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
      // Verifica se o formulário foi enviado
       if ($_SERVER["REQUEST_METHOD"] == "POST") {
       
          $email = $_POST["email"]; // Recebe o e-mail enviado pelo formulário
       
       $databaseUrl = getenv("DATABASE_URL"); // Obtém a conexão configurada no Render
     
        $conexao = pg_connect($databaseUrl); // Conecta ao PostgreSQL
       
       pg_query_params( // Salva o e-mail no banco
       $conexao,
       "INSERT INTO usuarios (email) VALUES ($1)",
         array($email)
);
      // Mostra a confirmação
         echo "Cadastro realizado com sucesso!"; 
}
     ?>


</body>

</html>
