<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Battleship - Laravel">
    <meta name="author" content="keyner.peru@gmail.com">

    <title>Battleship - Laravel</title>

    <!-- Bootstrap Core CSS -->
    <link href="/startbootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="/startbootstrap/css/4-col-portfolio.css" rel="stylesheet">

    <link href="/css/main.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

<!-- Navigation -->
<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="/">Battleship</a>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse pull-right " id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                @if (Session::has('user'))
                <li>
                    <a href="/games/{{ Session::get('user')['id'] }}">Play!</a>
                </li>
                <li>
                    <a href="/logout">Logout {{ Session::get('user')['username'] }}</a>
                </li>
                @else
                <li>
                    <a href="/login">Log in</a>
                </li>
                @endif
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container -->
</nav>

<!-- Page Content -->
<div class="container">

    @yield('content')

    <!-- Footer -->
    <footer>
        <div class="row">
            <div class="col-lg-12">
                <p>Copyright &copy; KeynerTYC {{ date('Y') }}</p>
            </div>
        </div>
        <!-- /.row -->
    </footer>

</div>
<!-- /.container -->

<!-- jQuery -->
<script src="/startbootstrap/js/jquery.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="/startbootstrap/js/bootstrap.min.js"></script>

<!-- Main.js -->
<script src="/js/main.js"></script>

</body>

</html>
