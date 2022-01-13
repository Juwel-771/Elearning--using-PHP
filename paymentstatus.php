<!-- Start Of Header -->
<?php
    include('./mainInclude/header.php');
?>
<!-- End Of Header -->

<!-- start of course banner -->
<div class="container-fluid bg-dark">
    <div class="row">
        <img src="./images/cour.jpg" alt="course" style="height: 500px; width: 100%; object-fit:cover; box-shadow: 10px;"/>
    </div>
</div>
<!-- end of course banner -->

<!-- Start Of Payment Status -->
    <div class="container">
        <h2 class="text-center my-4">Payment Status</h2>
        <form action="" method="POST">
            <div class="form-group row">
              <label for="offset-sm-3 col-form-label">Order ID: </label>
              <div>
                  <input type="text" class="form-control mx-3">
              </div>
              <div>
                  <input type="submit" class="btn btn-primary mx-4" value="view">
              </div>
            </div>
        </form>
    </div>
<!-- End Of Payment Status -->

<!-- start contact page -->
    <?php
        include('./contact.php');
    ?>
<!-- end contact page -->

<!-- start of footer -->
<?php
    include('./mainInclude/footer.php');
?>
<!-- end of footer -->
