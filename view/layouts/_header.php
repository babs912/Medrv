<?php  
  $user = json_decode($_SESSION['user'])[0];
?>
<header>
    <nav class="navbar">
        <a href="/home" class="brand">Medrv</a>
        <ul class="nav d-none d-md-flex">
            <li class="nav-item"><a href="#" class="nav-link"><span class="fa fa-envelope"></span></a></li>
            <li class="nav-item"><a href="#" class="nav-link"><span class="fa fa-bell"></span></a></li>
            <li class="nav-item"><a href="#" class="nav-link"><span class="fa fa-user"></span></a></li>
        </ul>
        <span class="fa fa-bars d-block d-md-none" id="menu-bars"></span>
    </nav>
    <?php include(ROOT.DS.'view'.DS.'layouts'.DS.'_topnav.php'); ?>
    <div class="banner">
        <div class="row">
            <div class="col-3">
                <div class="img-box-1 d-flex">
                    <img src="../img/avatar/<?=$user->avatar;?>" alt="avatar" class="rounded-circle dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <h6 class="ml-2 mt-4"><?=$user->name?></h6>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="#">
                            <span class="fa fa-user"></span>
                            Profile
                        </a>
                        <a class="dropdown-item" href="#">
                            <span class="fa fa-bell"></span>
                            Notifications
                        </a>
                        <a class="dropdown-item" href="#">
                        <span class="fa fa-envelope"></span>
                            Messages
                        </a>
                        <div class="dropdown-divider"></div>
                        <a class="btn btn-sm btn-danger  ml-4 text-white" href="/security/logout">Se Deconnecter</a>
                    </div>
                </div>
            </div>
            <div class="col-6 text-center" id="wellcome">
                <h1 class="text-white font-weight-bold">Bienvenue sur Medrv</h1>
                <h5 class="text-primary font-weight-bold">Service <?= $_SESSION['service'] ?></h5>
            </div>
            <div class="col-3">
                <div class="img-box-2">
                    <img src="../img/cardiologie.png" alt="Cardiologie Image" class="img-fluid">
                </div>
            </div>
        </div>
    </div>
</header>