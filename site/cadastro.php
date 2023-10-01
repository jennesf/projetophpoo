<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/style2.css">
    <title>star guardian</title>
</head>
<body>
    <header class="cbl">
    <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a class="index.php" href="index.php">home</a></li>
          <li><a href="login.php">login</a></li>
          <li><a href="#">cadastro</a></li>
          <li><a href="contato.php">contato</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->
    </header>
   <main class="menu">
    
   <div class="form">
   <form method="post" action="processar-cadastro.php">
            <label for="nome">nome</label>
            <input type="text" id="nome" name="nome" 
            placeholder="Digite seu nome" required>
            
            <label for="email">e-mail</label>
            <input type="email" id="email" name="email" 
            placeholder="Digite seu email" required>

            <label for="senha">senha</label>
            <input type="password" id="senha" name="senha" 
            placeholder="Digite uma senha" required>
           
            <label for="confirmarsenha">confirmar Senha</label>
            <input type="password" id="confirmarsenha" name="confirmarsenha" 
            placeholder="Digite uma senha" required>
        <?php 
            if(isset($_GET["erro"])){
                //echo "erro! senha e confirmar senha não são iguais";
            ?>
                <label for="erro">Senha e confirmar senha não são iguais</label>
            <?php } ?>

            <input type="submit" name="cadastro" class="botao-cadastro" 
            value="Cadastrar usuario"/>
        </form>
    </div>
    
   </main>
    <footer class="rodape"></footer>
</body>
</html>