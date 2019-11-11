<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="./style/stylesheet.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
      
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class='container'>
            <a class="navbar-brand" href="index.php">Gaming Forumas  </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="index.php">Namai <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="forum.php">Forumas</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="gallery.php">Galerija</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="login.php">Prisijungti</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="register.php">Registracija</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="settings.php">Nustatymai</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Atsijungti</a>
                </li>
                <li class="nav-item">
                        <a class="nav-link" href="adminpanel.php">Admin</a>
                </li>
            </ul>
            <form class="form-inline my-2 my-lg-0" method="POST" action="search.php">
                    <input class="form-control mr-sm-2" type="search" placeholder="Raktažodis paieškai" aria-label="Search">
                    <button class="btn btn-outline-light my-2 my-sm-0" type="submit">Ieškoti</button>
                </form>
            </div>
        
        </div>
    </nav>

    <div class='container'>
        <h1>Nuotraukos įkėlimas</h1>
        <div class="file-upload-form--small">
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroupFileAddon01">Įkelti</span>
                </div>
                <div class="custom-file">
                    <input type="file" class="custom-file-input" id="inputGroupFile01"
                    aria-describedby="inputGroupFileAddon01">
                    <label class="custom-file-label" for="inputGroupFile01">Pasirinkti nuotrauką</label>
                </div>
            </div>
            <div class="form-group">
                <label for="inputFor">Etiketės</label>
                <input type="text" class="form-control" id="inputFor" placeholder="fortnite;dance;gaming">
            </div>
            <div class="form-group">
                <label for="comment">Aprašymas:</label>
                <textarea class="form-control" rows="5" id="comment"></textarea>
                <button type="button" class="btn btn-danger">Įkelti</button>
            </div>
        </div>

        <form class="form-inline my-2 my-lg-0" method="POST" action="search.php">
            <input class="form-control mr-sm-2" type="search" placeholder="Raktažodis paieškai" aria-label="Search">
            <button class="btn btn-primary" type="submit">Ieškoti</button>
        </form>
        <figure class="figure">
                <a href="viewphoto.php"><img src="./img/1.png" id="imageInput" alt="fortnite dance" class="img-thumbnail rounded"></a>
            <figcaption class="figure-caption">Nuotraukos aprasymas</figcaption>
            <button type="button" class="btn btn-primary btn-sm">
                Pamėgti <span class="badge badge-light">4</span>
            </button>
            <a href="viewphoto.php"><button class="btn btn-primary btn-sm">Komentuoti</button></a>
            <a href="#"><button class="btn btn-danger btn-sm">Ištrinti</button></a>
        </figure>
        <figure class="figure">
                <a href="viewphoto.php"><img src="./img/2.png" id="imageInput" alt="fortnite dance" class="img-thumbnail rounded"></a>
            <figcaption class="figure-caption">Nuotraukos aprasymas</figcaption>
            <button type="button" class="btn btn-primary btn-sm">
                Pamėgti <span class="badge badge-light">4</span>
            </button>
            <a href="viewphoto.php"><button class="btn btn-primary btn-sm">Komentuoti</button></a>
        </figure>
        <figure class="figure">
            <a href="viewphoto.php"><img src="./img/3.png" id="imageInput" alt="fortnite dance" class="img-thumbnail rounded"></a>
            <figcaption class="figure-caption">Nuotraukos aprasymas</figcaption>
            <button type="button" class="btn btn-primary btn-sm">
                Pamėgti <span class="badge badge-light">4</span>
            </button>
            <a href="viewphoto.php"><button class="btn btn-primary btn-sm">Komentuoti</button></a>
        </figure>
    </div>
      
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>