<!DOCTYPE html>
<html lang="pt-BR">
<head>
 <meta charset="UTF-8">
 <title>Dados do Cliente</title>
</head>
<body>
 <h1>Dados do Cliente</h1>
 <!-- Formulário para entrada dos dados -->
 <form method="POST">
 <!-- Campo para informar o e-mail -->
 <label>E-mail:</label><br>
 <input type="email" name="email" required>
 <br><br>
 <!-- Botão para enviar o formulário -->
 <button type="submit">Cadastrar</button>
 </form>
 
 <?php
// Verifica se o formulário foi enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
 // Recebe o e-mail enviado pelo formulário
 $email = $_POST["email"];
 // Obtém a conexão configurada no Render
$databaseUrl = getenv("DATABASE_URL");
// Conecta ao PostgreSQL
$conexao = pg_connect($databaseUrl);
// Salva o e-mail no banco
pg_query_params(
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
