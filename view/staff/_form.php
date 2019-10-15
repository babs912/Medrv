<form>
  <div class="form-group">
      <label class="my-1 mr-2" for="role">Status</label>
      <select name="role" class="custom-select my-1 mr-sm-2" id="role">
        <option selected>Status</option>
        <?php foreach($roles as $role): ?>
             <option value="<?=$role->name?>"><?=$role->name?></option>
        <?php endforeach; ?>
      </select>
  </div>

  <div class="form-row">
    <div class="col">
      <select name="service" class="custom-select my-1 mr-sm-2" id="role">
        <option selected>Service</option>
        <?php foreach($roles as $role): ?>
             <option value="<?=$role->name?>"><?=$role->name?></option>
        <?php endforeach; ?>
      </select>
    </div>
    <div class="col">
    <select multiple name="role" class="custom-select my-1 mr-sm-2" id="role">
        <option selected>Specialite</option>
        <?php foreach($roles as $role): ?>
             <option value="<?=$role->name?>"><?=$role->name?></option>
        <?php endforeach; ?>
      </select>
    </div>
  </div>

  <div class="form-row">
    <div class="col">
      <label for="prenom">Prenom</label>
      <input name="prenom" type="text" class="form-control" placeholder="Prenom">
    </div>
    <div class="col">
    <label for="nom">Nom</label>
      <input name="nom" type="text" class="form-control" placeholder="Nom">
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
</form>