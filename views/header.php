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
    <title>Posts Blogen Theme</title>
</head>

<body>

    <nav class="navbar navbar-expand-sm navbar-dark bg-dark p-0">
        <div class="container">
            <a href="main" class="navbar-brand">Dashboard</a>
            <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div id="navbarCollapse" class="collapse navbar-collapse">

                <ul class="navbar-nav">
                    <li id="dashboard" class="nav-item px-2">
                        <a href="main" class="nav-link" onclick="changeActiveClass(event, this)">Dashboard</a>
                    </li>
                    <li id="posts" class="nav-item px-2">
                        <a href="posts" class="nav-link" onclick="changeActiveClass(event, this)">Posts</a>
                    </li>
                    <li id="categories" class="nav-item px-2">
                        <a href="categories" class="nav-link" onclick="changeActiveClass(event, this)">Categorias</a>
                    </li>
                    <li id="users" class="nav-item px-2">
                        <a href="users" class="nav-link" onclick="changeActiveClass(event, this)">Usuarios</a>
                    </li>
                </ul>

                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a href="login" class="nav-link">
                            <i class="fas fa-user-times"></i> Logout
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
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
    <script>
    document.addEventListener("DOMContentLoaded", function() {
        // Obtén el elemento de navegación activo almacenado en el almacenamiento local
        var activeNavItem = localStorage.getItem("activeNavItem");

        // Establece la clase "active" en el elemento de navegación activo
        if (activeNavItem) {
            var navItem = document.getElementById(activeNavItem);
            navItem.classList.add("active");
        }
    });

    function changeActiveClass(event, element) {
        // Obtén todos los elementos de navegación (li)
        var navItems = document.getElementsByClassName("nav-item");

        // Elimina la clase "active" de todos los elementos de navegación
        for (var i = 0; i < navItems.length; i++) {
            var navItem = navItems[i];
            navItem.classList.remove("active");
        }

        // Agrega la clase "active" al elemento padre (li) del enlace actual
        var parentElement = element.parentNode;
        parentElement.classList.add("active");

        // Almacena el ID del elemento activo en el almacenamiento local
        var activeNavItem = parentElement.id;
        localStorage.setItem("activeNavItem", activeNavItem);

        // Redirecciona al enlace
        window.location.href = element.href;

        event.preventDefault(); // Evita que se realice la acción predeterminada del enlace
    }
    </script>
</body>

</html>