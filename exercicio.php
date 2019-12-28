<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="recursos/css/estilo.css">
    <link rel="stylesheet" href="recursos/css/exercicio.css">
    <title>Cursos PHP</title>
</head>
<body class="exercicio">
    <header class="cabecalho">
        <h1>Cursos PHP</h1>
        <h2>Visualização do Exercício</h2>
    </header>
    <nav class="navegacao">
        <a href="<?= "{$_GET['dir']}/{$_GET['file']}.php" ?>" class="verde">Sem formatação</a>
        <a href="index.php" class="vermelho">Voltar</a>
    </nav>
    <main class="principal">
        <div class="conteudo">
            <?php include(__DIR__ . "/{$_GET['dir']}/{$_GET['file']}.php"); ?>
        </div>
    </main>
    <footer class="rodape">
        Leandro Mathias © <?= date('Y'); ?>
    </footer>
</body>
</html>