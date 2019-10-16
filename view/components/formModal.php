<div class="modal fade" id="patientFormModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title text-center" id="exampleModalLabel">
                    <span class="text-info font-weight-bold">Rendez-vous</span> <br>
                    <span class="text-warning font-weight-bold">08:15 - 08:30</span>
                </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true" class="text-danger">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div id="errors"></div>
                <form id="patientForm">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="">Sexe:</label> <br>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="gender" id="inlineRadio1" value="H">
                                    <label class="form-check-label" for="inlineRadio1">Homme</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="gender" id="inlineRadio2" value="F">
                                    <label class="form-check-label" for="inlineRadio2">Femme</label>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-2">
                            <div class="form-group">
                                <label for="">Age:</label>
                                <input name="age" type="number" class="form-control form-control-sm">

                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="">Nom:</label>
                                <input name="first_name" type="text" class="form-control form-control-sm">

                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Prénom:</label>
                                <input name="last_name" type="text" class="form-control form-control-sm">
                            </div>

                        </div>

                    </div>

                    <div class="row">
                        <div class="col-sm-4">
                            <div class="form-group">
                                <div class="form-group">
                                    <label>Email:</label>
                                    <input name="email" type="text" class="form-control form-control-sm">
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="form-group">
                                <div class="form-group">
                                    <label>Téléphone:</label>
                                    <input name="phone" type="tel" class="form-control form-control-sm">
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="form-group">
                                <div class="form-group">
                                    <label>Adresse:</label>
                                    <input name="address" type="text" class="form-control form-control-sm">
                                </div>
                            </div>
                        </div>
                    </div>

                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Annuler</button>
                <button type="button" class="btn btn-success" id="add-appoint">Enregistrer</button>
            </div>
        </div>
    </div>
</div>