<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Finance Manager Application</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom styles -->
    <style>
        body {
            background-color: #f8f9fa;
        }

        .container {
            margin-top: 50px;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <div class="card">
                    <div class="card-body">
                        <h2 class="card-title text-center">Welcome to Personal Finance Manager</h2>
                        <p class="card-text text-center">This project is a personal finance management application
                            designed to help you manage your finances effectively.</p>
                        <div class="text-center mb-4">
                            <a href="" class="btn btn-primary me-2">Register</a>
                            <a href="" class="btn btn-secondary">Log In</a>
                            {{-- <a href="{{ route('register') }}" class="btn btn-primary me-2">Register</a> --}}
                            {{-- <a href="{{ route('login') }}" class="btn btn-secondary">Log In</a> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
