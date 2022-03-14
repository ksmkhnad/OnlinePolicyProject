<?php
require_once 'autoload.php';
$Master = new Master();
?>

            <ul class="navbar-nav mr-auto">
              <li class="nav-item active">
                <select  class="form-control mr-sm-2" name="master">
                <option value="">Все мастера</option>
               <?php
               $ID =  $d["SalonId"];
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
        <?php
        require_once"eventslist.php";
        ?>
