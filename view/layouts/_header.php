<?php  
  $user = json_decode($_SESSION['user'])[0];
?>
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
                <div class="img-box-1">
                    <img src="../img/avatar/<?=$user->avatar;?>" alt="avatar" class="rounded-circle">
                    <h6 class="mt-2"><?=$user->name?></h6>
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