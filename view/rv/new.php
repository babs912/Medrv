<div class="container-fluid">
    <div class="main-content mt-3">
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
                        <div class="card">
                            <div class="card-header d-flex p-1">
                                <span class="fa fa-user-md"></span>
                                <div class="ml-3">
                                    <p>
                                        <span id="doctorName">Pape Senghor</span><br>
                                        <span id="doctorDomaine">Chirurgie dentaire</span>
                                    </p>
                                    <p>
                                        <span><span class="fa fa-envelope mr-2"></span id="doctorEmail">senghor.pape912@hotmail.com</span><br>
                                        <span><span class="fa fa-phone mr-"></span id="doctorPhone">777443663</span>
                                    </p>
                                    
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="times">
                                    <?=$planning?>
                                </div>
                            </div>
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
                    <ul class="doctors" id="doctorSpecialityContainer"></ul>
                </div>

            </div>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="./js/script.js"></script>
