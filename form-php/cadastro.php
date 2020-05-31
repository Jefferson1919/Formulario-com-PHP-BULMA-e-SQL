<?php
session_start();
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Contato</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
    <link rel="stylesheet" href="css/bulma.min.css" />
    <link rel="stylesheet" type="text/css" href="css/login.css">
    <link rel="shortcut icon" href="https://img.icons8.com/doodle/48/000000/name.png" />
</head>
<h1></h1>

<body>
    <section class="hero is-success is-fullheight">
        <div class="hero-body">
            <div class="container has-text-centered">
                <div class="column is-4 is-offset-4">
                    <h3 class="title has-text-grey">Formulário de Contato</h3>
                    <?php
                    if (isset($_SESSION['status_cadastro'])) :
                    ?>
                        <div class="notification is-success">
                            <p>Formulário enviado!</p>
                        </div>
                    <?php
                    endif;
                    unset($_SESSION['status_cadastro']);
                    ?>


                    <?php
                    if (isset($_SESSION['conexao_inexiste'])) :
                    ?>
                        <div class="notification is-danger">
                            Sem conexão com banco de dados.
                        </div>
                    <?php
                    endif;
                    unset($_SESSION['conexao_inexiste']);
                    ?>


                    <div class="box">
                        <form action="cadastrar.php" method="POST">
                            <div class="field">
                                <div class="control">
                                    <input name="nome" type="text" class="input is-large" placeholder="Nome e sobrenome" autofocus required>
                                </div>
                            </div>
                            <div class="field">
                                <div class="control">
                                    <input name="email" type="email" class="input is-large" placeholder="você@mail.com">
                                </div>
                            </div>
                            <div class="field">
                                <div class="control">
                                    <input name="telefone" class="input is-large" type="tel" placeholder="(xx) xxxxx-xxxx" minlength="9" required />
                                </div>
                            </div>
                            <div class="field">
                                <div class="control">
                                    <textarea name="textArea" class="textarea" placeholder="Sugestões, críticas ou dúvidas" required></textarea>
                                </div>
                            </div>
                            <button type="submit" class="button is-block is-link is-large is-fullwidth">Enviar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>

</html>