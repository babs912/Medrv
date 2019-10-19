<div class="container">
   <div class="row">
     <div class="col-md-8">
     <h2>Liste des patients</h2>
     <form class="form-inline">
      <input class="form-control mr-sm-2" type="search" placeholder="Patient" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
        <div class="patient-list-panel mt-2 p-2">
        <?php foreach($rvs as $rv): ?>
          <div class="card mb-1">
            <div class="card-header d-flex p-2">
              <img width=60 height=60 src="../img/avatar/default.png" alt="" class="rounded-circle">
              <div class="ml-3">
                <span><?=$rv->first_name; ?></span><br>
                <span><?=$rv->last_name; ?></span>
              </div>
              <div class="ml-3">
                <span><span class="fa fa-venus mr-2"></span><?php echo ($rv->gender == "H")? "Homme": "Femme"; ?></span><br>
                <span><span class="fa fa-child mr-2" aria-hidden="true"></span><?=$rv->age." ans"; ?></span>
              </div>
              <div class="ml-3">
                <span><span class="fa fa-envelope mr-2"></span> <?=$rv->email; ?></span><br>
                <span><span class="fa fa-mobile mr-3"></span><?=$rv->phone; ?></span>
              </div>
              <div class="ml-3">
                <span><span class="fa fa-calendar mr-2"></span><?=$rv->planned_at; ?></span><br>
                <span><span class="fa fa-street-view mr-2"> </span><?=$rv->address; ?></span>
              </div>
            </div>
            <div class="card-body p-1">
              <span class="fa fa-chevron-right float-right"></span>
              <span class="fa fa-chevron-down float-right hide"></span>


              
            <div class="details">
                
            </div>
            </div>
          </div>
        <?php endforeach;?>
        </div>
     </div>
     <div class="col-md-4"></div>
   </div>
   