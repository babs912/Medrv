<div class="modal fade" id="patientFormModal" data-keyboard="false" data-backdrop="static" tabindex="-1" role="dialog" aria-hidden="false">
    <div class="modal-dialog modal-full" role="document">
        <div class="modal-content">
            <div class="modal-body pt-2">
                <div class="row mb-2">
                    <div class="col-12">
                        <span class="fa fa-close text-danger float-right" id="closePatientFormModal"></span>
                    </div>
                </div>
                <?php include(ROOT.DS.'view'.DS.'components'.DS.'successFlash.php'); ?>
                <div class="container-fluid register-patient">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="p-3 bg-white mb-2">
                                <div class="h2 text-primary pb-2">Rechercher un patient</div>
                                <div id="notebooks">
                                    <input type="text" id="search-phone" placeholder="77xxxxxxx"/>
                                    <ul id="notebook_ul" class="mb-2">
                                        <div id="search-result-container" class="bg-danger"></div>
                                        <?php foreach($patients as $patient): ?>
                                            <li class="patient-item" data-id="<?=$patient->id?>">
                                                <span class="mr-2"><?=$patient->phone?></span>
                                                <span><?=$patient->email?></span>
                                                <div class="right top"></div>
                                            </li>
                                        <?php endforeach; ?>
                                        <li class="patient-item-search patient-item">
                                            <span class="mr-2 fined-phone"></span>
                                            <span class="fined-email"></span>
                                            <div class="right top"></div>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <div class="p-0">
                            <div class="patient-details hide p-4  bg-white">
                                <div class="row">
                                    <div class="col-sm-4 mb-2 mb-sm-0">
                                        <div class="patientProfile w-100 text-center image-fluid p-3 border-info">
                                                <img src="../img/avatar/default.png" alt="" class="rounded-circle">
                                                <h5 class="mb-2 patient-name"></h5>
                                        </div>
                                    </div>
                                    <div class="col-sm-8">
                                        <ul class="unlisted-style">
                                            <li class="mb-2">
                                                <span class="fa fa-venus mr-2"></span>
                                                <span class="patient-gender"></span>
                                                </li>
                                            <li class="mb-2">
                                                <span class="fa fa-child mr-2" aria-hidden="true"></span>
                                                <span class="patient-age"></span>
                                                </li>
                                            <li class="mb-2">
                                                <span class="fa fa-phone mr-2"></span>
                                                <span class="patient-phone"></span>
                                                </li>
                                            <li class="mb-2">
                                                <span class="fa fa-envelope mr-2"></span>
                                                <span class="patient-email"></span>
                                                </li>
                                            <li class="mb-2">
                                                    <span class="fa fa-street-view mr-2"> </span>
                                                    <span class="patient-address"></span>
                                                </li>
                                        </ul>
                                        <div class="row">
                                            <div class="col-12 mt-2 hide">
                                                <button class="btn btn-outline-primary btn-sm mr-2">
                                                    <span class="fa fa-edit mr-2"></span>
                                                    </button>
                                                    <button class="btn btn-outline-danger btn-sm ">
                                                    <span class="fa fa-trash mr-2"></span>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="mt-2">
                                        <button class="btn btn-sm btn-info" id="searched-appoint">Prendre le rendez-vous</button>      
                                    </div>
                            </div>
                            </div> 

                        </div>
                        <div class="col-lg-6 mt-3 mt-md-0">
                            <div class="p-4 bg-white pb-5">
                                <h2 class="text-primary pb-4">Enregistrer un nouveau patient</h2>
                                <div class="error-flash hide">
                                    <span class="alert alert-danger">error</span>
                                </div>
                            <form  id="patientForm" method="POST">
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-lg-6 mb-2">
                                            <label for="" class="mb-1">Prenom</label><br>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                <span class="input-group-text" >
                                                    <i class="fa fa-user"></i>
                                                </span>
                                                </div>
                                                <input type="text" name="first_name" class="form-control"  placeholder="Prenom" required>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                        
                                            <label for="" class="mb-1">Nom</label><br>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                <span class="input-group-text" >
                                                    <i class="fa fa-user"></i>
                                                </span>
                                                </div>
                                                <input type="text" name="last_name" class="form-control"  placeholder="Nom" required>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-lg-6 mb-2">
                                            <label for="" class="mb-1">Genre</label><br>
                                            <label for="">
                                                <input type="radio" name="gender" value="M"> M
                                            </label>
                                            <label for="">
                                                <input type="radio" name="gender" value="F"> F
                                            </label>
                                        </div>
                                        <div class="col-lg-6">
                                        <label for="" class="mb-1">Age</label><br>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                            <span class="input-group-text" >
                                                <i class="fa fa-child"></i>
                                            </span>
                                            </div>
                                            <input type="number" name="age" class="form-control"  placeholder="Age" required>
                                        </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                <label for="" class="mb-1">Email</label><br>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                        <span class="input-group-text" >
                                            <i class="fa fa-envelope"></i>
                                        </span>
                                        </div>
                                        <input type="email" name="email" class="form-control"  placeholder="Email" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="" class="mb-1">Telephone</label><br>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                        <span class="input-group-text" >
                                            <i class="fa fa-phone"></i>
                                        </span>
                                        </div>
                                        <input type="tel" name="phone" class="form-control"  placeholder="77 000 00 00" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                <label for="" class="mb-1">Adresse</label><br>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                        <span class="input-group-text" >
                                            <i class="fa fa-street-view"></i>
                                        </span>
                                        </div>
                                        <input type="text" name="address" class="form-control"  placeholder="Adresse" required>
                                    </div>
                                </div>
                                <div class="mt-1">
                                    <button type="submit" class="btn btn-sm btn-primary float-right" id="add-appoint">Enregister</button>
                                </div>
                            </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>