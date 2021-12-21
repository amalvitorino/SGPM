<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>INTRAT</title>


    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">


</head>

<body>

    <!-- navbar-->
    <nav class="navbar navbar-expand-lg navbar-dark bg-success">
        <div class="container-fluid">
            <a href="/"><img src="img/logo.png" alt=""></a>
            <a class="navbar-brand" href="">SPGM</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="/">voltar</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

            <div class="container">
                <br><br><br><br><br><br><br><br>
                <div class="col-sm-6">
                    <form method="post" action="">
                        <div class="mb-3">
                            <label class="form-label">Usuario</label>
                            <input type="text" class="form-control" name="numCarta" placeholder="Digite o nome do usuario">
                        </div>

                        <div class="mb-3">
                            <label class="form-label">senha</label>
                            <input type="password" class="form-control" name="nome" placeholder="Digite a senha">
                        </div>

                        <button class="btn btn-success"><a href="/registarAutomobilista" class="text-black text-decoration-none">Entrar</a></button></button>
                    </form>
                </div>
            </div>



        <!-- Option 1: Bootstrap Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

        <!--meu java script -->
        <script src="js/script.js"></script>

        <script>
            function sandMsg() {
                alert('mensagem enviada com sucesso');
            }
        </script>

</body>

</html>
