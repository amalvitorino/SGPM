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



    <link rel="stylesheet" href="css/style2.css">

</head>

<body>

    <!-- container principal-->
    <div class="container">

        <!-- cabecalho  -->
        <header class="header">
            <a href="/loginAdmin" class="logo">
                <i class="fas fa-road me-2"></i> INTRAT
            </a>

            <nav class="navbar">
                <a href="#home">Princimpal</a>
                <a href="/login">Pagar Multa</a>
            </nav>

            <div class="icons">
                <div class="fas fa-search" id="search-btn"></div>
                <div class="fas fa-bars" id="menu-btn"></div>
            </div>

            <div class="search-form">
                <input type="search" id="search-box" placeholder="Procure aqui...">
                <label for="search-box" class="fas fa-search"></label>
            </div>

        </header>

        <!-- header section ends -->

        <!-- home section starts  -->

        <section class="home" id="home">

            <div class="content">
                <h3>INTRAT</h3>
                <p>INSTITUTO NACIONAL DE TRANSPORTES TERRESTRES</p>
                <a href="/login" class="btn">Pagar MULTA Agora!</a>
            </div>

        </section>


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
