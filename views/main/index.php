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
    <header id="main-header" class="text-white bg-primary py-2">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h1><i class="fas fa-cog"></i> Dashboard</h1>
                </div>
            </div>
        </div>
    </header>

    <!-- ACTIONS -->
    <section id="actions" class="bg-light mb-4 py-4">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <a href="#" class="btn btn-block btn-primary" data-toggle="modal" data-target="#addPostModal">
                        <i class="fas fa-plus"></i> Añadir Post
                    </a>
                </div>

                <div class="col-md-3">
                    <a href="#" class="btn btn-block btn-success" data-toggle="modal" data-target="#addCategoryModal">
                        <i class="fas fa-plus"></i> Añadir Categoria
                    </a>
                </div>

                <div class="col-md-3">
                    <a href="#" class="btn btn-block btn-warning" data-toggle="modal" data-target="#addUserModal">
                        <i class="fas fa-plus"></i> Añadir Usuario
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- POSTS & INFOS -->
    <main id="posts">
        <div class="container">
            <div class="row">
                <div class="col-md-9">
                    <div class="card">
                        <div class="card-header">
                            <h4>Últimos Posts</h4>
                        </div>
                        <table class="table table-striped">
                            <thead class="thead-dark">
                                <tr>
                                    <th>#</th>
                                    <th>Título</th>
                                    <th>Categoria</th>
                                    <th>Data</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Post Uno</td>
                                    <td>Desarrollo Web</td>
                                    <td>10 de Julio de 2023</td>
                                    <td>
                                        <a href="#" class="btn btn-secondary">
                                            <i class="fas fa-angle-double-right"></i> Mas Detalles
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Post Dos</td>
                                    <td>Desarrollo Mobile</td>
                                    <td>5 de Julio de 2023</td>
                                    <td>
                                        <a href="#" class="btn btn-secondary">
                                            <i class="fas fa-angle-double-right"></i> Mas Detalles
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>Post Tres</td>
                                    <td>Desarrollo Desktop</td>
                                    <td>30 de Junio de 2023</td>
                                    <td>
                                        <a href="#" class="btn btn-secondary">
                                            <i class="fas fa-angle-double-right"></i> Mas Detalles
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>Post Cuatro</td>
                                    <td>Negocios</td>
                                    <td>22 de Junio de 2023</td>
                                    <td>
                                        <a href="#" class="btn btn-secondary">
                                            <i class="fas fa-angle-double-right"></i> Mas Detalles
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>5</td>
                                    <td>Post Cinco</td>
                                    <td>Marketing</td>
                                    <td>16 de Junio de 2023</td>
                                    <td>
                                        <a href="#" class="btn btn-secondary">
                                            <i class="fas fa-angle-double-right"></i> Mas Detalles
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>6</td>
                                    <td>Post Seis</td>
                                    <td>Desarrollo Web</td>
                                    <td>4 de Junio de 2023</td>
                                    <td>
                                        <a href="#" class="btn btn-secondary">
                                            <i class="fas fa-angle-double-right"></i> Mas Detalles
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>7</td>
                                    <td>Post Siete</td>
                                    <td>Desarrollo Mobile</td>
                                    <td>30 de Mayo de 2023</td>
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
                <div class="col-md-3">
                    <div class="card text-center text-white bg-primary mb-3">
                        <div class="card-body">
                            <h3>Posts</h3>
                            <h4 class="display-4">
                                <i class="fas fa-pencil-alt"></i> 7
                            </h4>
                            <a href="posts" class="btn btn-sm btn-outline-light">Ver Todos</a>
                        </div>
                    </div>

                    <div class="card text-center text-white bg-success mb-3">
                        <div class="card-body">
                            <h3>Categorias</h3>
                            <h4 class="display-4">
                                <i class="fas fa-folder"></i> 5
                            </h4>
                            <a href="categories" class="btn btn-sm btn-outline-light">Ver Todas</a>
                        </div>
                    </div>

                    <div class="card text-center text-white bg-warning mb-3">
                        <div class="card-body">
                            <h3>Usuarios</h3>
                            <h4 class="display-4">
                                <i class="fas fa-users"></i> 4
                            </h4>
                            <a href="users" class="btn btn-sm btn-outline-light">Ver Todos</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <!-- MODALS -->

    <!-- ADD POST MODAL -->
    <div id="addPostModal" class="modal fade">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header text-white bg-primary">
                    <h5 class="modal-title">Añadir Post</h5>
                    <button class="close" data-dismiss="modal">
                        <span class="text-white">&times;</span>
                    </button>
                </div>

                <div class="modal-body">
                    <form>
                        <div class="form-group">
                            <label for="title">Título</label>
                            <input type="text" class="form-control" />
                        </div>
                        <div class="form-group">
                            <label for="category">Categoria</label>
                            <select class="form-control">
                                <option value="">Desarrollo Web</option>
                                <option value="">Desarrollo Mobile</option>
                                <option value="">Desarrollo Desktop</option>
                                <option value="">Negócios</option>
                                <option value="">Marketing</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="image">Subir Imagen</label>
                            <div class="custom-file">
                                <input type="file" id="image" class="custom-file-input" placeholder="enviar" />
                                <label for="image" class="custom-file-label">Escoger Archivo</label>
                            </div>
                            <small class="text-muted">Tamaño máximo de 3mb</small>
                        </div>
                        <div class="form-group">
                            <label for="content">Contenido</label>
                            <textarea name="addPostEditor" class="form-control"></textarea>
                        </div>
                    </form>
                </div>

                <div class="modal-footer">
                    <button class="btn btn-primary" data-dismiss="modal">Guardar </button>
                </div>
            </div>
        </div>
    </div>

    <!-- ADD CATEGORY MODAL -->
    <div id="addCategoryModal" class="modal fade">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header text-white bg-success">
                    <h5 class="modal-title">Añadir Categoria</h5>
                    <button class="close" data-dismiss="modal">
                        <span class="text-white">&times;</span>
                    </button>
                </div>

                <div class="modal-body">
                    <form>
                        <div class="form-group">
                            <label for="category">Nombre da Categoria</label>
                            <input type="text" class="form-control" />
                        </div>
                    </form>
                </div>

                <div class="modal-footer">
                    <button class="btn btn-success" data-dismiss="modal">Guardar</button>
                </div>
            </div>
        </div>
    </div>

    <!-- ADD USER MODAL -->
    <div id="addUserModal" class="modal fade">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header bg-warning">
                    <h5 class="modal-title">Añadir Usuario</h5>
                    <button class="close" data-dismiss="modal">
                        <span class="text-white">&times;</span>
                    </button>
                </div>

                <div class="modal-body">
                    <form>
                        <div class="form-group">
                            <label for="name">Nombre</label>
                            <input type="text" class="form-control" />
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" />
                        </div>
                        <div class="form-group">
                            <label for="password">Contraseña</label>
                            <input type="password" class="form-control" />
                        </div>
                        <div class="form-group">
                            <label for="password2">Confirmar Contraseña</label>
                            <input type="password" class="form-control" />
                        </div>
                    </form>
                </div>

                <div class="modal-footer">
                    <button class="btn btn-warning" data-dismiss="modal">Guardar</button>
                </div>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>

    <script src="https://cdn.ckeditor.com/4.9.2/standard/ckeditor.js"></script>

    <script>
    // Get the current year for the copyright
    $('#year').text(new Date().getFullYear());

    // Turn simple editor to modern editor
    CKEDITOR.replace('addPostEditor');
    </script>
    <?php require "views/footer.php" ?>
</body>

</html>