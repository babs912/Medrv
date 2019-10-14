<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../css/style.css">
    <title>Medrv</title>
</head>

<body>
    <header>
        <nav class="navbar">
            <a href="/home" class="brand">Medrv</a>
            <ul class="nav">
                <li class="nav-item"><a href="#" class="nav-link"><span class="fa fa-envelope"></span></a></li>
                <li class="nav-item"><a href="#" class="nav-link"><span class="fa fa-bell"></span></a></li>
                <li class="nav-item"><a href="#" class="nav-link"><span class="fa fa-user"></span></a></li>
            </ul>
        </nav>

        <div class="banner">
            <div class="row">
                <div class="col-3">
                    <div class="img-box-1"><img src="../img/91.jpg" alt="" class="img-fluid rounded-circle"></div>
                </div>
                <div class="col-6 text-center">
                    <h1 class="text-white font-weight-bold">Bienvenue sur Medrv</h1>
                    <h5 class="text-primary font-weight-bold">Service <?= $_SESSION['service'] ?></h5>
                </div>
                <div class="col-3">
                    <div class="img-box-2"><img src="../img/cardiologie.png" alt="Cardiologie Image" class="img-fluid"></div>
                </div>
            </div>
        </div>
    </header>
    <div class="container-fluid">

        <div class="row">
            <div class="col-sm-1 mt-5">

                <div class="side-nav">

                    <ul class="list-unstyled p-0 ">
                        <li>
                            <a href="/home">
                                <span class="fa fa-home"></span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span class="fa fa-book"></span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span class="fa fa-users"></span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span class="fa fa-info"></span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-sm-11">
            

                <?= $content_for_base ?>

            </div>
        </div>
        <?php require ROOT . DS . 'view' . DS . 'components' . DS . 'formModal.php'; ?>

    </div>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="../js/script.js"></script>
</body>

</html>