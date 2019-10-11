<div class="container mt-4">

    <div class="row">
        <div class="col-9">
            <div class="calendar">
                <?= $calendar ?>
            </div>
        </div>
        <div class="col-3">
            <div class="doctor-panel">
                <select class="custom-select mr-sm-2" id="speciality">
                    <option selected>Specialite</option>
                    <div class="dropdown-divider"></div>
                    <?php foreach ($specialities as  $speciality) : ?>
                        <option value="<?= $speciality->name ?>"><?= $speciality->name ?></option>
                    <?php endforeach; ?>
                </select>
                <ul class="doctors">
                    <li>
                        <div class="doctor-item" data-planning="2,8,16,20">
                            <span class="fa fa-user-md"></span>
                            <div class="doctor-infos">
                                <span>Doctor Name</span>
                                <span>0 p</span>
                            </div>
                            <div class="time w-100 pr-3">
                                <span class="fa fa-watcher"></span>
                                <span>Matin: <strong class="float-right">08:00 - 13:30</strong> </span> <br>
                                <span>Apres-midi: <strong class="float-right">15:00 - 17:00</strong> </span>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="doctor-item" data-planning="10,8,15,13">
                            <span class="fa fa-user-md"></span>
                            <div class="doctor-infos">
                                <span>Doctor Name</span>
                                <span>0 p</span>
                            </div>
                            <div class="time w-100 pr-3">
                                <span class="fa fa-watcher"></span>
                                <span>Matin: <strong class="float-right">08:00 - 13:30</strong> </span> <br>
                                <span>Apres-midi: <strong class="float-right">15:00 - 17:00</strong> </span>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="doctor-item" data-planning="1,8,15,23">
                            <span class="fa fa-user-md"></span>
                            <div class="doctor-infos">
                                <span>Doctor Name</span>
                                <span>0 p</span>
                            </div>
                            <div class="time w-100 pr-3">
                                <span class="fa fa-watcher"></span>
                                <span>Matin: <strong class="float-right">08:00 - 13:30</strong> </span> <br>
                                <span>Apres-midi: <strong class="float-right">15:00 - 17:00</strong> </span>
                            </div>

                        </div>
                    </li>
                    <li>
                        <div class="doctor-item" data-planning="5,9,17,19">
                            <span class="fa fa-user-md"></span>
                            <div class="doctor-infos">
                                <span>Doctor Name</span>
                                <span>0 p</span>
                            </div>
                            <div class="time w-100 pr-3">
                                <span class="fa fa-watcher"></span>
                                <span>Matin: <strong class="float-right">08:00 - 13:30</strong> </span> <br>
                                <span>Apres-midi: <strong class="float-right">15:00 - 17:00</strong> </span>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="doctor-item" data-planning="12,18,17,30">
                            <span class="fa fa-user-md"></span>
                            <div class="doctor-infos">
                                <span>Doctor Name</span>
                                <span>0 p</span>
                            </div>
                            <div class="time w-100 pr-3">
                                <span class="fa fa-watcher"></span>
                                <span>Matin: <strong class="float-right">08:00 - 13:30</strong> </span> <br>
                                <span>Apres-midi: <strong class="float-right">15:00 - 17:00</strong> </span>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>

        </div>
    </div>

</div>