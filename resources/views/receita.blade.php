<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
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

    <div class="container text-center mt-4 p-5">
        <div class="col mt-2"></div>
    <h1>{{$receita['receita']}}</h1>
    
    <img class="img-thumbnail mt-2" style="width: 300px; height: 100x;" src="{{$receita['link_imagem']}}" alt="{{$receita['receita']}}">
    
    <h2 class="mt-2">ingredientes</h2>
    <p>{{$receita['ingredientes']}}</p>
    <br>
    
    <h2>Mode de preparo</h2>
    <p class="mt-3">{{$receita['modo_preparo']}}</p>
    </div>
</body>
</html>
