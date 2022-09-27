<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" href="img/EQUIPE_Cyberpunk-removebg-preview.png" type="image/x-icon">
    <title>Cyberpunk Games</title>
</head>

<body>
    <div class="wrap">

        <header>
            <a href="index.html" title="Página inicial"><img src="/img/EQUIPE_Cyberpunk-removebg-preview.png"
                    alt="Logotipo de Cyberpunk Games "></a>
            <h1><a href="index.html"> Cyberpunk Games</a><small>Encontre o mundo dos Games Aqui</small></h1>
        </header>

        <nav id="menu">

                    <a href="/" title="Página inicial">
                        <i class="fa-solid fa-house fa-fw"></i>
                        <span>Início</span>
                    </a>
                    <a href="/contatos/" title="Faça contato">
                        <i class="fa-solid fa-comments fa-fw"></i>
                        <span>Contatos</span>

                        <a href="/about" title="Sobre...">
                            <i class="fa-solid fa-circle-info fa-fw"></i>
                            <span>Sobre</span>
                        </a>
                    </a>
                    <div class="dropdown">
                        <button class="dropbtn">Computador</button>
                        <div class="dropdown-content">
                            <a href="#">Steam</a>
                            <a href="#">Origin</a>
                            <a href="#">EA Play</a>
                        </div>
                    </div>

                    <div id="usuario">
                        <a href="/login.php" title="Logue-se...">
                            <i class="fa-solid fa-user fa-fw"></i>
                            <span>Entrar</span>
                        </a>
                    </div>
                    <div class="registra">
                        <a href="/Cadastro.php" title="Logue-se...">
                            <i class="fa-solid fa-user fa-fw"></i>
                            <span>Registra-Se</span>
                        </a>
                    </div>
                </nav>
        <main>
        <section>
                <img class="banner-da-frente" src="img/banner-da-frente.jpg" alt="banner-da-frente">
        </section>
            <article>
                <form action="action_page.php" style="border:1px solid #ccc">
                    <div class="container">
                      <h1>Sign Up</h1>
                      <p>Please fill in this form to create an account.</p>
                      <hr>
                  
                      <label for="email"><b>Email</b></label>
                      <input type="text" placeholder="Enter Email" name="email" required>
                  
                      <label for="psw"><b>Password</b></label>
                      <input type="password" placeholder="Enter Password" name="psw" required>
                  
                      <label for="psw-repeat"><b>Repeat Password</b></label>
                      <input type="password" placeholder="Repeat Password" name="psw-repeat" required>
                  
                      <label>
                        <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Remember me
                      </label>
                      <div class="clearfix">
                        <button type="submit" class="signupbtn">Sign Up</button>
                      </div>
                    </div>
                  </form>
            </article>
        </main>

