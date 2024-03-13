<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="index.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Receitas</title>
</head>

<body class="bg-info">

    <nav class="navbar navbar-expand-lg bg-body-tertiary fixed-top mt-0">
        <div class="container-fluid">

            <a class="navbar-brand" href="/">Navbar</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/">Home</a>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Tipo
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="/receitas/tipo/doce">Doce</a></li>
                            <li><a class="dropdown-item" href="/receitas/tipo/salgado">Salgado</a></li>
                            <li>
                            </li>
                        </ul>
                    </li>

                </ul>


            </div>
    </nav>

    <section>
        <div class="container">
            <div class="row">
        @foreach ($receitas as $receita)
        <div class="card m-3 col-2 text-center" style="width: 18rem;">
            
            <div class="card-body mt-5">
              <h5 class="card-title">{{$receita['receita']}}</h5>
              <img src="{{$receita['link_imagem']}}" class="img-thumbnail mr-2" style="width:250px; height:200px;" alt="...">
              <a href="/receitas/{{$receita['id']}}" class="btn btn-primary mt-4">Ver receita</a>
            </div>
          </div>
        @endforeach
    </div>
    </div>
        
    </section>
        
    
</body>

</html>