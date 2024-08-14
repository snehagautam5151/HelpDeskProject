<!DOCTYPE html>
<html>

    <head>
        <title>Help Desk</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
        <link rel="stylesheet"
            href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.14.0-beta3/dist/css/bootstrap-select.min.css">

        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous">
        </script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.14.0-beta3/dist/js/bootstrap-select.min.js">
        </script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.14.0-beta3/dist/js/i18n/defaults-*.min.js">
        </script>

        <style>
        /* Remove any default margin or padding for the body */
        body {
            margin: 0;
            padding: 0;
        }

        /* Ensure the header and sidebar are aligned */
        .navbar,
        #sidebarMenu,
        main {
            margin: 0;
            padding: 0;
        }

        /* Align sidebar with the header */
        #sidebarMenu {
            top: 0;
            height: 100vh;
        }

        /* Ensure the main content is right next to the sidebar */
        main {
            margin-left: 0;
            margin-top: 0.2rem;
        }

        /* Thicker header */
        .navbar {
            padding-top: 1rem;
            padding-bottom: 0.5rem;
        }
        </style>
    </head>

    <body>
        <nav class="navbar navbar-light navbar-expand-lg mb-0" style="background-color: #e3f2fd;">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">ITOneSolution Help Desk</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav me-auto">
                        @guest
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">Login</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register-user') }}">Register</a>
                        </li>
                        @endguest
                    </ul>
                    @auth
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('signout') }}">Logout</a>
                        </li>
                    </ul>
                    @endauth
                </div>
            </div>
        </nav>


        <div class="container-fluid">
            <div class="row">
                <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar">
                    <div class="position-sticky pt-3">
                        <ul class="nav flex-column">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="{{ route('newticket.index') }}">New
                                    Tickets</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('ticketlist.index') }}">All Tickets</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('notification.index') }}">Notifications</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('query.index') }}">pre-ticket Assitant</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('customercare.index') }}">Contacts</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('signout') }}">Logout</a>
                            </li>
                        </ul>
                    </div>
                </nav>

                <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
                    <div id="content-container">
                        <h2>Welcome to the dashboard, {{ Auth::user()->name }}!</h2>
                    </div>
                    <div>
                        @yield('content')
                    </div>
                </main>
            </div>
        </div>
    </body>

</html>