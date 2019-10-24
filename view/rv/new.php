<div class="container-fluid">
    <div class="main-content mt-3">
        <div class="row">
            <div class=" col-md-8  p-4 bg-white">
                <div class="row">
                    <div class="col-md-6 p-0 pl-5 p-2 ">
                        <div class="calendar  activate-panel">
                            <?= $calendar ?>
                        </div>
                    </div>
                    <div class="col-md-5 p-2 p-sm-0">
                        <div class="card planning-time activate-panel" id="time-panel">
                            <div class="card-body">
                                <div class="times">
                                    <?=$planning?>
                                </div>
                            </div>
                        </div>                        
                    </div>
                </div>
                    
            </div>
            <div class="offset-1 col-md-3 p-0 bg-white">
                <div class="speciality">
                    <?php foreach($specialities as $speciality): ?>
                        <div class="speciality-item">
                           <h5 class="speciality-name"><?=$speciality->name?></h5>
                           <div class="doctor">
                               <?php foreach($this->staffManager->findDoctorSpeciality($speciality->name) as $k=>$doctor): ?>
                                <div class="doctor-item mx-2 mt-1">
                                        <?php if($k == 0): ?>
                                            <input checked type="radio" name="<?=$speciality->name?>" id="">
                                        <?php else: ?>
                                            <input  type="radio" name="<?=$speciality->name?>" id="">
                                        <?php endif; ?>
                                        <span class="fa fa-user-md"></span>
                                        <span><?=$doctor['name'];?></span>
                                        <span class="fa fa-plus float-right"></span>
                                        <span class="fa fa-minus float-right hide"></span>
                                    <div class="doctor-infos hide border-top mt-1 py-1">
                                        <span>Doctor name</span><br>
                                        <span>Doctor name</span><br>
                                        <span>Doctor name</span><br>
                                        <span>Doctor name</span><br>
                                    </div>
                                </div>
                                <?php endforeach; ?>
                           </div>
                           
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="./js/script.js"></script>
