<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Modul WEB</title>

    <!-- Bootstrap core CSS -->
    <link href="bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="bower_components/font-awsome/web-fonts-with-css/css/fontawesome-all.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="bower_components/bootstrap/dist/css/navbar-top-fixed.css" rel="stylesheet">
</head>

<body>

<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
    <a class="navbar-brand" href="#">Judul Program</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a class="nav-link" href="index.php">Home</a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="#">List Data <span class="sr-only">(current)</span></a>
            </li>
        </ul>
    </div>
</nav>

<main role="main" class="container">
    <div class="jumbotron">
        <h2>Contoh List Data dalam bentuk Table</h2>
        <table class="table table-bordered table-hover table-light">
            <thead>
                <tr>
                    <th><b>NO</b></th>
                    <th><b>NIM</b></th>
                    <th><b>NAMA</b></th>
                    <th><b>SMT</b></th>
                    <th colspan="2">Action</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>04xxxxxx</td>
                    <td>M. Husnul Hakim</td>
                    <td>2</td>
                    <td><div class="btn btn-primary"><span class="fas fa-edit"></span> Edit</div></td>
                    <td><div class="btn btn-danger"><span class="fas fa-trash"></span> Hapus</div></td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>04xxxxxx</td>
                    <td>Ramadhan</td>
                    <td>2</td>
                    <td><div class="btn btn-primary"><span class="fas fa-edit"></span> Edit</div></td>
                    <td><div class="btn btn-danger"><span class="fas fa-trash"></span> Hapus</div></td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>04xxxxxx</td>
                    <td>Rizka P</td>
                    <td>2</td>
                    <td><div class="btn btn-primary"><span class="fas fa-edit"></span> Edit</div></td>
                    <td><div class="btn btn-danger"><span class="fas fa-trash"></span> Hapus</div></td>
                </tr>
                <tr>
                    <td>4</td>
                    <td>04xxxxxx</td>
                    <td>Asep</td>
                    <td>2</td>
                    <td><div class="btn btn-primary"><span class="fas fa-edit"></span> Edit</div></td>
                    <td><div class="btn btn-danger"><span class="fas fa-trash"></span> Hapus</div></td>
                </tr>
            </tbody>
        </table>
    </div>
</main>

<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="bower_components/jquery/dist/jquery.min.js"></script>
<script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
</body>
</html>
