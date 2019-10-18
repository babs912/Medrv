<?php require_once ROOT.DS.'view'.DS.'layouts'.DS.'_header.php'; ?>
<div class="container-fluid">
    <div class="main-content">
        <div class="row">
            <div class="col-xl-1">
                <?php require_once ROOT.DS.'view'.DS.'layouts'.DS.'_sidenav.php'; ?>
            </div>
            <div class="col-xl-11 col-lg-12 p-0">
                <div class="mt-4">
                    <div class="row">
                        <div class="col-md-9 p-0">
                        <div class="row">
                            <div class="col-md-6 p-0 pl-5 pr-4">
                                    <div class="calendar ">
                                        <?= $calendar ?>
                                    </div>
                            </div>
                            <div class="col-md-5 pl-6 p-sm-0">
                                    <div class="doctor-details p-2 hide ">
                                    <div class="profile">
                                        <img src="../img/91.jpg" alt="" class="rounded-circle" id="avatar">
                                        <div class="text">
                                            <span> <span class="fa fa-user-md"></span> <strong class="font-weight-bolder" id="doctorName"></strong> </span><br>
                                            <span> <span class="fa fa-envelope"></span> <em id="doctorEmail"></em> </span><br>
                                            <span> <span class="fa fa-phone"></span>  <em id="doctorPhone"></em> </span><br>
                                        </div>
                                    </div>
                                        <div class="domaine">
                                        <span>Domaine: <em id="doctorDomaine"></em></span>

                                        </div>
                                    <div class="plannning mb-2">
                                        <div class="hours d-flex">
                                           <span class="fa fa-clock-o text-muted "> </span>
                                           <div>
                                                <p class="ml-3 ">
                                                    <strong>Matin:</strong>
                                                    <em class="start">80:30</em> - <em class="end">13:30</em>
                                                </p>
                                                <p >
                                                    <strong>Soir:</strong>
                                                    <em class="start">15:30</em> - <em class="end">17:30</em>
                                                </p>
                                            </div> 
                                        </div>
                                    </div>
                                    <div class="patient mb-2 text-center">
                                        <small class="text-warning font-weight-bolder" ><em id="numPatient"></em> Patients</small>
                                    </div>
                                    <div class="actions text-center">
                                    <button disabled class="btn btn-lg btn-success" data-toggle="modal" data-target="#patientFormModal" data-whatever="@getbootstrap" id="loadModal"> 
                                        <span class="fa fa-user-plus"></span>
                                        Ajouter une patient
                                        </button>
                                    </div>
                                    
                                    </div>
                            </div>
                        </div>
                        
                        </div>
                        <div class="col-md-3 p-0">
                            <div class="doctor-panel">
                                <div class="speciality-select">
                                    <h5 class="text-white text-center font-weight-bold">Choisir une Specialite</h5>
                                    <select class="custom-select mr-sm-2" id="speciality">
                                        <option selected>Specialite</option>
                                        <div class="dropdown divider"></div>
                                        <?php foreach ($specialities as  $speciality) : ?>
                                            <option value="<?php echo $speciality->name ?>"><?= $speciality->name ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>

                                <ul class="doctors" id="doctorSpecialityContainer">
                                
                                </ul>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
