<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css"
        integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Dashboard Web</title>
</head>

<body>
    <?php require "views/header.php" ?>
    <!-- HEADER -->
    <header id="main-header" class="text-white bg-success py-2">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h1><i class="fas fa-folder"></i> Categorias</h1>
                </div>
            </div>
        </div>
    </header>

    <!-- SEARCH -->
    <section id="search" class="bg-light mb-4 py-4">
        <div class="container">
            <div class="row">
                <div class="col-md-6 ml-auto">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Buscar Categorias..." />
                        <div class="input-group-append">
                            <button class="btn btn-success">Buscar</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CATEGORIES -->
    <main id="categories">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="card">
                        <div class="card-header">
                            <h4>Nuestras Categorias</h4>
                        </div>
                        <table class="table table-striped">
                            <thead class="thead-dark">
                                <tr>
                                    <th>#</th>
                                    <th>Título</th>
                                    <th>Data</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Desarrollo Web</td>
                                    <td>10 de Julio de 2020</td>
                                    <td>
                                        <a href="#" class="btn btn-secondary">
                                            <i class="fas fa-angle-double-right"></i> Mas Detalles
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Desarrollo Mobile</td>
                                    <td>5 de Julio de 2020</td>
                                    <td>
                                        <a href="#" class="btn btn-secondary">
                                            <i class="fas fa-angle-double-right"></i> Mas Detalles
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>Desarrollo Desktop</td>
                                    <td>30 de Junio de 2020</td>
                                    <td>
                                        <a href="#" class="btn btn-secondary">
                                            <i class="fas fa-angle-double-right"></i> Mas Detalles
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>Negocios</td>
                                    <td>22 de Junio de 2020</td>
                                    <td>
                                        <a href="#" class="btn btn-secondary">
                                            <i class="fas fa-angle-double-right"></i> Mas Detalles
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>5</td>
                                    <td>Marketing</td>
                                    <td>16 de Junio de 2020</td>
                                    <td>
                                        <a href="#" class="btn btn-secondary">
                                            <i class="fas fa-angle-double-right"></i> Mas Detalles
                                        </a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>

    <script>
    // Get the current year for the copyright
    $('#year').text(new Date().getFullYear());
    </script>
    <?php require "views/footer.php" ?>
</body>

</html>