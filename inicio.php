<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <title>Centro Educacional Porto Seguro</title>
</head>

<body data-spy="scroll" data-target="#main-nav" id="home">
    <nav class="navbar navbar-expand-sm bg-dark navbar-dark fixed-top" id="main-nav">
        <div class="container">
            <a href="index.html" class="navbar-brand">Centro Educacional Porto Seguro</a>
            <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a href="#home" class="nav-link">Início</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <header id="home-section">
        <div class="dark-overlay">
            <div class="home-inner container">
                <div class="row">
                    <div class="col-lg-8 d-none d-lg-block">
                        <h1 class="display-4">A
                            <strong>MELHOR ESTRUTURA</strong> DE UMA ESCOLA
                            <strong>PRIVADA!</strong>
                        </h1>
                        <div class="d-flex">
                            <div class="p-4 align-self-start">
                                <i class="fas fa-check fa-2x"></i>
                            </div>
                            <div class="py-4 align-self-end" style="font-size: 25px;">
                                Educação Infantil ao Ensino Médio
                            </div>
                        </div>

                        <div class="d-flex">
                            <div class="p-4 align-self-start">
                                <i class="fas fa-check fa-2x"></i>
                            </div>
                            <div class="py-4 align-self-end" style="font-size: 25px;">
                                Disciplinas inovadoras
                            </div>
                        </div>

                        <div class="d-flex">
                            <div class="p-4 align-self-start">
                                <i class="fas fa-check fa-2x"></i>
                            </div>
                            <div class="py-4 align-self-end" style="font-size: 25px;">
                                Ensino Pitágoras
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="card bg-primary text-center card-form">
                            <div class="card-body">
                                <h3>Bem Vindo</h3>
                                <p>Porque Evoluir é a Nossa Meta</p>
                                <form action="actions/con1.php" method="post">
                                    <fieldset>
                                        <div class="form-group">
                                            <input type="text" class="form-control form-control-lg" placeholder="Nome" name="nome">
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control form-control-lg" placeholder="senha" name="senha" id="login" required>
                                        </div>
                                        <div>
                                            <input type="submit" value="Entrar" class="btn btn-outline-light btn-block">
                                        </div>
                                    </fieldset>

                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="js/scripts.js"></script>
    <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
    <!-- * *                               SB Forms JS                               * *-->
    <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
    <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
    <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
    <script src="http://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>

    <script>
        // Get the current year for the copyright
        $('#year').text(new Date().getFullYear());

        // Init Scrollspy
        $('body').scrollspy({
            target: '#main-nav'
        });

        // Smooth Scrolling
        $("#main-nav a").on('click', function(event) {
            if (this.hash !== "") {
                event.preventDefault();

                const hash = this.hash;

                $('html, body').animate({
                    scrollTop: $(hash).offset().top
                }, 800, function() {

                    window.location.hash = hash;
                });
            }
        });
    </script>
</body>

</html>