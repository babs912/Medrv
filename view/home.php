<?php require_once ROOT.DS.'view'.DS.'layouts'.DS.'_header.php'; ?>
<div class="container-fluid">
<div class="row">
    <div class="col-sm-1">
       <?php require_once ROOT.DS.'view'.DS.'layouts'.DS.'_sidenav.php'; ?>
    </div>
    <div class="col-sm-11">
    <div class="main-info">
    <div class="row">
        <div class="col-sm-4">
            <div class="patient-info bg-success">
                <span class="fa fa-users"></span>
                <span class="title">Patients</span>
                <div class="info-value"><span>128</span></div>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="doctor-info bg-warning">
                <span class="fa fa-user-md"></span>
                <span class="title">Medecins</span>
                <div class="info-value"><span>12</span></div>

            </div>
        </div>
        <div class="col-sm-4">
            <div class="speciality-info bg-danger">
                <span class="fa fa-medkit"></span>
                <span class="title">Specialites</span>
                <div class="info-value"><span>15</span></div>
            </div>
        </div>

    </div>
</div>


    </div>
</div>

</div>
<a href="rv/new" class="add-btn"> <span class="fa fa-user-plus"></span> </a>

