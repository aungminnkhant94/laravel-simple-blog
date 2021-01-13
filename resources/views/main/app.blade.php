<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <!-- Bootstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">


</head>
<body>
    <div id="id">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container-fluid">
                <a href="{{ route('article.index') }}" class="navbar-brand">
                    <i class="fas fa-book-reader"></i>
                    <span class="d-none d-lg-inline text-secondary ml-2">
                        SIMPLE BLOG
                    </span>
                </a>
                <a href="{{ route('add-article-form') }}" class="nav-link text-success">
                    +Add Article
                </a>  

                <li class="nav dropdown">
                    <a  class="dropdown-toggle" role="button" data-toggle="dropdown">
                        {{ Auth::user()->name }}
                    </a>

                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                         document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </div>
                </li>
            </div>

 
        </nav>
        <main class="py-4">
            @yield('content')
        </main>
        <a style="float:right;" href="logout"class="btn btn-warning">Logout</a>
        <footer class="text-center py-4 text-muted">
        &copy; Copyright 2020
        </footer>
    </div>
</body>
</html>