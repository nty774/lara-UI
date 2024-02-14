<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-primary">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Navbar</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Link</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Dropdown
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled">Disabled</a>
                    </li>
                </ul>
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>

    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="card m-3">
                    <div class="card-body">
                        <i class="bi bi-bank2"></i>
                        <i class="bi bi-facebook"></i>
                        <i class="bi bi-amazon"></i>
                        <i class="bi bi-bank2"></i>

                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-6">
                <div class="border m-3 p-3 bg-white animate__animated animate__backInDown">
                    <h1 class="text-primary">Min Ga lar Par</h1>

                    <p class="text-muted"> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolore enim eaque
                        dolorem corrupti
                        pariatur nulla id culpa voluptatem harum saepe, odio magni distinctio ducimus minima. Dicta,
                        perspiciatis. Sequi, eos ducimus!</p>

                    <button class="btn btn-primary" id="showModel"> Show Model</button>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-6">
                <div class="border bg-white p-4 m-3">
                    <h1 class="text-primary">Sweet Alert Test</h1>
                    <button class="btn btn-primary" id="checkbtn">Check</button>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-6">
                <div class="border bg-white p-4 m-3">
                    <h1 class="text-primary">Scrollreveal js </h1>
                    <ul class="list-group" id="ul">
                        <li class="list-group-item">apple</li>
                        <li class="list-group-item">oragne</li>
                        <li class="list-group-item">banana</li>
                        <li class="list-group-item">mango</li>
                        <li class="list-group-item">pineapple</li>


                    </ul>
                </div>
            </div>
        </div>

    </div>

    {{-- <!-- Button trigger modal -->
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
        Launch static backdrop modal
    </button> --}}

    <!-- Modal -->
    <div class="modal fade" id="btnModel" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="staticBackdropLabel">Modal title</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    ...
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Understood</button>
                </div>
            </div>
        </div>
    </div>

    <script src="{{ asset('js/app.js') }}"></script>
</body>

</html>
