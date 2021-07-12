<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200;300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="recursos\css\estilo.css">

    <title>Curso PHP</title>
</head>
<body>
   <header class="cabecalho">
       <h1>Curso PHP</h1>
       <h2>Índice dos exercícios</h2>
   </header>
   <main class="principal">
       <div class="conteudo">
           <nav class="modulos">
               <div class="modulo verde">
                   <h3>Módulo 01 - Básico</h3>
                   <ul>
                       <li><a href="exercicio.php?dir=teste&file=teste">Exercício A</a></li>
                   
                   </ul>
               </div>
           </nav>

       </div>

   </main>
   <footer class="rodape">
       Rhamon estudo © <?= date('Y'); ?>
   </footer>
</body>
</html>