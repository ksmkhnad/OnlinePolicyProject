<?php
require_once 'autoload.php';
$Salon = new Salon();
$Master = new Master();
?>
  <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
          <a class="navbar-brand" href="#">Журнал</a>
          <div class="collapse navbar-collapse" id="navbarCollapse">
            <form method="POST" name="salon" class="form-inline mt-2 mt-md-0">
              <select name="salon" id="salon" class="form-control mr-sm-2" >
             <?php
             $data = $Salon->selectAll();
             foreach ($data as $d): ?>
             <option  value="<?php echo $d["SalonId"];?>">
                             <?php echo $d["SalonName"];  ?>
             </option>
             <?php endforeach; ?>
            </select>
            <input  class="form-control mr-sm-2" type="submit" value="Submit" name="Submit">
            </form>
            <ul class="navbar-nav mr-auto">
              <li class="nav-item active">
                <select  class="form-control mr-sm-2" name="master">
                <option value="">Все мастера</option>
               <?php
              $ID =  $_POST['salon'];
               $data = $Master->masterBySalonId($ID);
               foreach ($data as $d): ?>
               <option value="<?php echo $d["MasterId"];?>">
                              <?php echo $d["MasterName"];?>
                       </option>
               <?php endforeach; ?>
            </select>
              </li>
              <li class="nav-item">
                <input  class="p-2 text-dark" type="date">
              </li>
            </ul>
          </div>
    </nav>
        <?php
        require_once"eventslist.php";
        ?>
