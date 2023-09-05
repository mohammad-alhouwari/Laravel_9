<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Page</title>
    <!-- Include Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap/dist/css/bootstrap.min.css">
</head>

<body style="background-color: rgb(108, 202, 202);">
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        Register
                    </div>
                    <div class="card-body">
                        <form method="POST" action="register">
                            @csrf
                            @method('post')
                            <div class="mb-3">
                                <label for="name" class="form-label">Name</label>
                                <input type="text" class="form-control" id="name" name="name" placeholder="Enter your name"
                                    required>
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label">Email address</label>
                                <input type="email" class="form-control" id="email" name="email" placeholder="Enter your email"
                                    required>
                            </div>
                            <div class="mb-3">
                                <label for="password" class="form-label">Password</label>
                                <input type="password" class="form-control" name="password" id="password"
                                    placeholder="Enter your password" required>
                            </div>
                            {{-- <div class="mb-3">
                                <label for="confirm-password" class="form-label">Confirm Password</label>
                                <input type="password" class="form-control" id="confirm-password"
                                    placeholder="Confirm your password" required>
                            </div> --}}
                            <button type="submit" class="btn btn-primary">Register</button>
                        </form>
                        <a href="login" class="">login</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Include Bootstrap JS and Popper.js (for Bootstrap functionality) -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap/dist/js/bootstrap.min.js"></script>
</body>

</html>
