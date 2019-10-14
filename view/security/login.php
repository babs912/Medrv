<div class="container">
<div class="login-panel  border">
      <form action="/security/login" class="form" method="POST" >
          <div class="form-group">
             <label for="username">Nom d'utilisateur</label>
             <input type="text" name="username" id="username" class="form-control form-control-sm">
          </div>
          <div class="form-group">
            <label for="password">Mot de passe</label>
           <input type="password" name="password" id="password" class="form-control form-control-sm">
          </div>
          <div class="form-group">
            <label for="service">Service</label>
            <select name="service" class="custom-select mr-sm-2" id="service">
               <option selected>Service</option>
               <?php foreach($services as $service ) : ?>
               <option value="<?=$service->name;?>"><?=$service->name;?></option>
             <?php endforeach; ?>
            </select>
          </div>
          <div class="form-group text-center">
             <button type="submit" class="btn btn-sm btn-outline-primary">Se connecter</button>
          </div>
      </form>
</div>

</div>
