  <div class="form-row">
  <div class="col">
    <select  name="role_id" class="custom-select my-1 mr-sm-2" id="role">
        <option selected value="">Status</option>
        <?php foreach($roles as $role): ?>
             <option value="<?=$role->id?>"><?=$role->name?></option>
        <?php endforeach; ?>
      </select>
    </div>
    <div class="col">
      <select multiple  class="custom-select my-1 mr-sm-2" id="role">
        <option selected value="">Specialite</option>
        <?php foreach($specialities as $speciality): ?>
             <option value="<?=$speciality->id?>"><?=$speciality->name?></option>
        <?php endforeach; ?>
      </select>
    </div>
    
  </div>
    
  <div class="form-row">
    <div class="col">
      <label for="prenom">Prenom</label>
      <input name="last_name" type="text" class="form-control" placeholder="Prenom">
    </div>
    <div class="col">
    <label for="nom">Nom</label>
      <input name="first_name" type="text" class="form-control" placeholder="Nom">
    </div>
  </div>
  <div class="form-group">
    <label for="email">Email</label>
    <input name="email" type="text" class="form-control" placeholder="Email">
  </div>
  <div class="form-group">
    <label for="phone">Telephone</label>
    <input name="phone" type="text" class="form-control" placeholder="Email">
  </div>
   <div class="form-group">
     <button class="btn btn-primary">Enregistrer</button>
   </div>