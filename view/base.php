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
        <nav class="navbar header-top">
            <a href="/home/index" class="brand">Medrv</a>
            <ul class="nav">
                <li class="nav-item"><a href="#" class="nav-link"><span class="fa fa-envelope"></span></a></li>
                <li class="nav-item"><a href="#" class="nav-link"><span class="fa fa-bell"></span></a></li>
                <li class="nav-item"><a href="#" class="nav-link"><span class="fa fa-user"></span></a></li>
            </ul>
        </nav>

        <div class="banner">
            <div class="row">
                <div class="col-3">
                    <div class="img-box-1">
                        <img src="../img/91.jpg" alt="" class="img-fluid rounded-circle">
                    </div>
                </div>
                <div class="col-6 text-center">
                    <h1 class="text-white font-weight-bold">Bienvenue sur Medrv</h1>
                    <h5 class="text-primary font-weight-bold">Service Cardiologie</h5>
                </div>
                <div class="col-3">
                    <div class="img-box-2">
                        <img src="../img/cardiologie.png" alt="Cardiologie Image" class="img-fluid">

                    </div>
                </div>
            </div>
        </div>
    </header>

    <div class="row">
        <div class="col-sm-2">

            <div class="side-nav">

                <ul class="nav">
                    <li><a href="/home/index"><span class="fa fa-home"></span> Home</a></li>
                    <li>
                        <a href="#" id="mydropdown-1">
                            <span class="fa fa-book"></span>
                            Rendez-vous
                            <span class="fa fa-chevron-right"></span>
                            <span class="fa fa-chevron-down hide"></span>

                        </a>
                        <ul class="ml-4 list-unstyled hide" id="drop-menu-1">
                            <li> <a href="/rv/new"><span class="fa fa-plus"></span> Ajouter</a></li>
                            <li> <a href="/rv/list"><span class="fa fa-list"></span> Liste</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#" id="mydropdown-2">
                            <span class="fa fa-users"></span>
                            Gestion Personel
                            <span class="fa fa-chevron-right"></span>
                            <span class="fa fa-chevron-down hide"></span>
                        </a>
                        <ul class="ml-4 list-unstyled hide" id="drop-menu-2">
                            <li> <a href="#"><span class="fa fa-user-plus"></span> Ajouter</a></li>
                            <li> <a href="#"><span class="fa fa-list"></span> Liste</a></li>
                        </ul>
                    </li>
                    <li><a href="#"><span class="fa fa-info"></span> Aide </a></li>
                </ul>
                <button class="btn btn-sm btn-danger">Logout</button>
            </div>
        </div>
        <div class="col-sm-10">

            <?= $content_for_base ?>

        </div>
    </div>
    <?php require ROOT . DS . 'view' . DS . 'components' . DS . 'formModal.php'; ?>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="../js/script.js"></script>
</body>

</html>