<?php
require '../verifica.php';
if(isset($_SESSION['idUser']) && !empty($_SESSION['idUser'])): ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SGI</title>
    <link rel="stylesheet" href="/sgi/css/components/produtos.css">
</head>
<body>
    <section>
        <?php
            include $_SERVER['DOCUMENT_ROOT'] . "/sgi/php/conexao.php";
            $produto = $_POST['produto'];
            $marca = $_POST['marca'];

            $sql = "UPDATE `produtos` SET `produto` = `$produto`, `marca` = `$marca` WHERE id)";
            $sql = $pdo->prepare($sql);

            if($sql->execute()){
                echo "$produto atualizado com sucesso!";
            }else{
                echo "$produto não foi atualizado!";
            }
        ?>
    </section>
    <a href="index.php?pg=cadastrar-produtos"><button>CADASTRAR NOVO PRODUTO</button></a>
    <a href="index.php?pg=produtos"><button>VISUALIZAR PRODUTOS</button></a>
</body>
</html>

<?php else: header("Location: /sgi/login.php"); endif; ?>