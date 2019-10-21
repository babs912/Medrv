<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../css/style.css">
    <title>Medrv</title>
</head>

<body>
   
   <div class="container">
      <div class="login-panel  border">
            <form action="/security/login" class="form" method="POST" >
               <div class="form-group">
                  <label for="username">Nom d'utilisateur</label>
                  <input  type="text" name="username" id="username" class="form-control form-control-sm" value="fall123">
               </div>
               <div class="form-group">
                  <label for="password">Mot de passe</label>
               <input type="password" name="password" id="password" class="form-control form-control-sm" value="fall1234">
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
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="../js/script.js"></script>
</body>

</html>


