<!DOCTYPE html>
<html lang="pt-br">
    <head>

        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Contato</title>
    
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@300;400;600&display=swap" rel="stylesheet">
    
        <link rel="stylesheet" href="../bootstrap/bootstrap.min.css">
        <link rel="stylesheet" href="../CSS/produtos-page.css">
        <link rel="stylesheet" href="../CSS/produtos-homepage.css">
        <link rel="stylesheet" href="../CSS/homepage-carousel-quemsomos.css">
        <link rel="stylesheet" href="../CSS/header.css">
        <link rel="stylesheet" href="../CSS/footer.css">
        <link rel="stylesheet" href="../CSS/contato.css">
        
    </head>
    
    <body>
        <header>      
            <nav class="navbar navbar-expand-lg bg-light">
                <div class="container">
                    <a class="navbar-brand" href="#">Navbar</a>
                    </button>
                    <div class="navbar-collapse" id="navbarNavAltMarkup">
                        <div class="navbar-nav">
                            <a class="nav-link active" aria-current="page" href="/View/index.html">Home</a>
                            <a class="nav-link" href="/View/produtos.html" target="_blank">Produtos</a>
                            <a class="nav-link" href="/View/contato.html">Contato e Localização</a>
                        </div>
                    </div>
                </div>
            </nav>
        </header>

        <main class="container row justify-content-center">
            <div class="col-4 maps">
                <h3 class="titulo-principal">Nosso estabelecimento</h3>
                <p>Nosso estabelecimento está localizado no coração da cidade.</p>
    
                <div class="mapa-conteudo">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3656.449840476995!2d-46.63452594912678!3d-23.58819478459436!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce5a2b2ed7f3a1%3A0xab35da2f5ca62674!2sCaelum%20-%20Escola%20de%20Tecnologia!5e0!3m2!1spt-BR!2sbr!4v1651699061692!5m2!1spt-BR!2sbr" width="100%" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>

            <form class="col-5 forms">
                <div class="form-group">
                  <label for="nameField">Nome / Name</label>
                  <input type="text" class="form-control" id="nameField">
                </div>
                <div class="form-group">
                  <label for="emailAndPhone">Email and Phone / Email e Telefone</label>
                  <input type="text" class="form-control" id="emailAndTelephone">
                </div>
                <div class="form-group">
                    <label for="subject">Subject / Assunto</label>
                    <input type="text" class="form-control" id="subject">
                </div>
                <div class="form-group">
                    <label for="textArea">Free text / Texto Livre</label>
                    <textarea class="form-control" id="textArea" rows="3"></textarea>
                  </div>
            </form>

        </main>

    <script src="../bootstrap/bootstrap.min.js"></script>
    </body>
    
    </html>