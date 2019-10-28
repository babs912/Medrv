<div class="modal fade" id="patientFormModal" tabindex="-1" role="dialog" aria-hidden="false">
    <div class="modal-dialog modal-xl" role="document">
        <div class="modal-content">
            <div class="modal-body pt-2">
                <div class="row mb-2">
                    <div class="col-12">
                        <span class="fa fa-close text-danger float-right"></span>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-7">
                        <div class="p-3 bg-white mb-2">
                            <div class="d-flex">
                                <input type="search" name="phone" id="search-phone" class="form-control mr-2" placeholder="77000000">
                                <input type="search" name="email" id="search-email" class="form-control" placeholder="xxx@xmail.xx" >
                            </div>
                        </div>
                        <div class="p-3 bg-white mb-2 " id="fined-patient" >
                            <?php foreach($patients as $patient): ?>
                                <div class="patient-item" data-id="<?=$patient->id?>">
                                  <span class="mr-2"><?=$patient->phone?></span>
                                  <span><?=$patient->email?></span>
                                </div>
                            <?php endforeach;?>
                        </div>
                        <div class="p-0">
                           <div class="patient-details p-2 hide p-4 bg-white">
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
                                   </div>
                               </div>
                           </div>
                        </div> 

                    </div>
                    <div class="col-md-5">
                        <div class="p-4 bg-white pb-5">
                            <h4 class="display-4 text-primary mb-4 border-bottom p-2">Enregistrer un nouveau patient</h4>
                        <form  id="patientForm" method="POST">
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-md-6 mb-2">
                                        <label for="" class="mb-1">Prenom</label><br>
                                        <input type="text" name="first_name" class="form-control form-control-sm" placeholder="Prenom">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="" class="mb-1">Nom</label><br>
                                      <input type="text" name="last_name" class="form-control form-control-sm" placeholder="Nom">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-md-6 mb-2">
                                        <label for="" class="mb-1">Genre</label><br>
                                        <label for="">
                                            <input type="radio" name="gender" value="M"> M
                                        </label>
                                        <label for="">
                                            <input type="radio" name="gender" value="F"> F
                                        </label>
                                    </div>
                                    <div class="col-md-6">
                                       <label for="" class="mb-1">Age</label><br>
                                      <input type="number" name="age" class="form-control form-control-sm" placeholder="Age">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                            <label for="" class="mb-1">Email</label><br>
                                <input type="email" name="email" class="form-control form-control-sm" placeholder="Email">
                            </div>
                            <div class="form-group">
                                <label for="" class="mb-1">Telephone</label><br>
                                <input type="phone" name="phone" class="form-control form-control-sm" placeholder="Telephone">
                            </div>
                            <div class="form-group">
                            <label for="" class="mb-1">Adresse</label><br>
                                <input type="text" name="address" class="form-control form-control-sm" placeholder="Adresse">
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