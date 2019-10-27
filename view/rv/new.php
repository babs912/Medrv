<div class="container-fluid">
    <div class="main-content ">
        <div class="row">
        <div class="col-sm-4 p-4">
                <div class="header">
                    <span class="fa fa-user-md"></span>
                    spacialites
                </div>
                <div class="speciality bg-white">
                    <?php foreach($specialities as $speciality): ?>
                        <div class="speciality-item" value="<?=$speciality->id?>">
                           <h5 class="speciality-name"><?=$speciality->name?></h5>
                           <div class="doctor">
                               <?php foreach($this->staffManager->findDoctorSpeciality($speciality->name) as $k=>$doctor): ?>
                               <?php if($k == 0): ?>
                               
                               <div class="doctor-item mx-2 mt-1">
                                    <input checked type="radio" data-id="<?=$doctor['id']?>" id="<?=$speciality->id?>" >
                                    <span class="fa fa-user-md"></span>
                                    <span><?=$doctor['name'];?></span>
                                    <span class="fa fa-plus float-right" data-id="<?=$doctor['id']?>"></span>
                                    <span class="fa fa-minus float-right hide"></span>
                                    <div class="doctor-infos hide border-top mt-1 py-1">
                                        <span id="email-<?=$doctor['id']?>"></span>
                                        <span id="phone-<?=$doctor['id']?>"></span>
                                    </div>
                                </div>
                                <?php endif; ?>
                                <?php endforeach; ?>
                           </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
            <div class=" col-sm-8  p-4">
                <div class="row">
                    <div class="col-sm-6 p-1">
                        <div class="header">
                            <span class="fa fa-clock-o"></span>
                            Houraires
                        </div>
                        <div class=" planning-time" id="time-panel">
                            <div class="times bg-white p-2">
                                <?=$planning?>
                            </div>
                        </div>                        
                    </div>
                    <div class="col-sm-6">
                        <div class="header">
                            <span class="fa fa-calendar"></span>
                            Dates
                        </div>
                        <div class="calendar bg-white p-2">
                            <?= $calendar ?>
                        </div>
                    </div>
                </div>
                    
            </div>
            
        </div>
    </div>
</div>
<?php require ROOT . DS . 'view' . DS . 'components' . DS . 'formModal.php'; ?>

<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="./js/script.js"></script>
