<!DOCTYPE html>
<html>
<head>
    <title>Employee CRUD</title>
    <link href="../resources/css/app.css" rel="stylesheet">

    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
        <div class="container">
            <a class="navbar-brand mx-auto" href="{{ route('employees.index') }}">Employees List</a>
        </div>
    </nav>

    <div class="container">
        @yield('content')
    </div>

    <footer>
        <p>&copy; 2024 Employee CRUD</p>
    </footer>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
