<?php

if(isset($_POST['nome']) && !empty($_POST['nome']) && isset($_POST['email']) && !empty($_POST['email'])) {
    $nome = $_POST['nome'];
    $mail = $_POST['email'];
    
    $sql = "INSERT INTO user (user_name, user_mail)
            SELECT :nome, :mail
            WHERE NOT EXISTS (
                SELECT 1
                FROM user
                WHERE user_mail = :mail
            );
        ";
    
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':nome', $nome);
    $stmt->bindParam(':mail', $mail);

    if($stmt->execute()) {
        if($stmt->rowCount() > 0) {
            $msg = "<h2>Usuário cadastrado com sucesso</h2>";
        } else {
            $msg = "<h2>O email já existe na tabela</h2>";
        }
    } else {
        $msg = "<h2>Não foi possível efetuar o cadastro</h2>";
    }
}

