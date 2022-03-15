<?php
require_once 'autoload.php';
$Service = new Service();
?>
<html xmlns="http://www.w3.org/1999/html">
<html class=" js cssgradients csstransforms csstransitions svg inlinesvg svgclippaths">
  <head>
    <script type="text/javascript" charset="utf8" src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
  </head>
<body class="bg-light">
<div class="container">
    <div class="py-5 text-center">
        <p class="lead"> Запись</p>
    </div>
    <form method = "POST", action = "create_event.php">


        <div class="mb-3">
            <label for="name">Имя</label>
            <div class="input-group">
                <div class="input-group-prepend">
                </div>
                <input type="text" class="form-control" name="name" value="1" placeholder="Введите имя" required="">
                <div class="invalid-feedback" style="width: 100%;">
                    Field is required.
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 mb-3">
                <label for="date">Дата записи</label>
                <input type="date" class="form-control" name="date" placeholder="">
                <div class="invalid-feedback">
                    Valid field is required.
                </div>
            </div>
        </div>
        <div class="mb-3">
            <label for="service">Услуга</label>
              <select name="service" id="" class="form-control mr-sm-2" >
            <?php
            $data = $Service->selectAll();
            foreach ($data as $d): ?>
            <option  value="<?php echo $d["ServiceId"];?>">
                            <?php echo $d["ServiceName"];  ?>
            </option>
            <?php endforeach; ?>
           </select>
        </div>

        <hr class="mb-4">
        <input type="submit"class="btn btn-dark btn-lg btn-block" >
    </form>
</div>
</body>
</html>
