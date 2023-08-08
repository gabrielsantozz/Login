<?php
require_once('classes/Usuario.php');
require_once('conexao/conexao.php');

$database = new Conexao();
$db = $database->getConnection();
$usuario = new Usuario($db);

if(isset($_POST['cadastrar'])){
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $pc = $_POST['pc'];
    $problemas = $_POST['problema']; // Alterado para 'problema'

    if($usuario->cadastrar($nome, $email, $pc, $problemas)){
        echo "Cadastro realizado com sucesso";
    } else {
        echo "Erro ao cadastrar";
    }
}
?>


<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <title>Avaliação</title>
</head>
<body>
    <div class='container'  >
        <div class="text-center">
            <h1>Novas Informatica</h1>
        </div>
        <form method = "post" action = "" >
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Nome</label>
                <input type="text" class="form-control" name = "nome" placeholder="Nome">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Email</label>
                <input type="email" class="form-control" name = "email" placeholder="email@exemplo.com">
            </div>
            <div>
                <label for="exampleFormControlInput1" class="form-label">Aparelho</label>
                <select name = "pc" class="form-select form-select-sm" aria-label="Small select example">
                    <option selected>Escolha o aparelho!</option>
                    <option value="1">Notebook</option>
                    <option value="2">Computador</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Relate o problema</label>
                <textarea class="form-control" name="problema" rows="3"></textarea>
            </div>
            <div class="d-grid gap-2 col-6 mx-auto">
                <button type="submit" class="btn btn-primary">Primary</button>
            </div>
            

        </form>
    </div>

    

</body>
</html>