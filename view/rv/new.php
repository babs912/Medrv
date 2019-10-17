<?php require_once ROOT.DS.'view'.DS.'layouts'.DS.'_header.php'; ?>
<div class="container-fluid">
    <div class="main-content">
        <div class="row">
            <div class="col-sm-2">
                <?php require_once ROOT.DS.'view'.DS.'layouts'.DS.'_sidenav.php'; ?>
            </div>
            <div class="col-sm-10 p-0">
                <div class="mt-4">
                    <div class="row">
                        <div class="col-sm-9 p-0">
                        <div class="row">
                            <div class="col-sm-7 p-0 pl-5 pr-4">
                                    <div class="calendar ">
                                        <?= $calendar ?>
                                    </div>
                            </div>
                            <div class="col-sm-5 pl-5 p-sm-0">
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
                                    <div class="plannning">
                                        <span class="fa fa-clock-o text-white"></span>
                                        <div class="morning">
                                            <strong>Matin:</strong>
                                            <em class="start">80:30</em> - <em class="end">13:30</em>
                                        </div>
                                        <div class="after-noon">
                                            <strong>Soir:</strong>
                                            <em class="start">15:30</em> - <em class="end">17:30</em>
                                        </div>
                                    </div>
                                    <div class="patient">
                                        <small class="text-white">Patients programmes pour cette date</small>
                                        <h5 class="text-warning font-weight-bolder" id="numPatient">0</h5>
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
                        <div class="col-sm-3 p-0">
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
