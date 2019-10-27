<?php  
  $user = json_decode($_SESSION['user'])[0];
?>
<header>
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
                <h1 class="text-white font-weight-bold mt-2"><?= $_SESSION['service'] ?></h1>
            </div>
            <div class="col-3">
                <div class="img-box-2">
                    <img src="../img/cardiologie.png" alt="Cardiologie Image" class="img-fluid">
                </div>
            </div>
        </div>
    </div>
</header>