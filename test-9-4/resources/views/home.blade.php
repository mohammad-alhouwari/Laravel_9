<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Homepage</title>
    <!-- Add Bootstrap CSS link -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">Your Brand</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
               

                @php
                    $login = session('islogedin');
                @endphp
                @if ($login == 'logedin')
                    <li class="nav-item">
                        <form action="logout" method="post">
                            @csrf
                            @method('post')
                            <button type="submit" name="logout">
                                logout
                            </button>
                        </form>
                    </li>
                @else
                    <li class="nav-item">
                        <a class="nav-link" href="login">login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="register">register</a>
                    </li>
                @endif

    








            </ul>
        </div>
    </nav>

    <!-- Content -->
    <div class="container mt-4">
        <h1>Welcome to Our Simple Homepage</h1>
        <p>This is a basic Bootstrap template for a simple homepage.</p>
    </div>

    <!-- Add Bootstrap JS and jQuery scripts at the end of the body to improve page loading performance -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
