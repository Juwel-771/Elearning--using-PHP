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

<!-- Start of Course details -->
<div class="container mt-5">
    <div class="row">
        <div class="col-md-4">
            <img src="images/card_1.jpg" class="card-img-top" alt="Guitar">
        </div>
        <div class="col-md-8">
            <div class="card-body">
                <h5 class="card-title">Course Name: Lear Guitar</h5>
                <p class="card-text">Description: Lorem ipsum dolor, sit amet consectetur adipisicing elit. Reprehenderit cumque repellendus, dolor delectus sint eius.</p>
                <p class="card-text">Duration: 10 Days</p>
                <form action="" method="POST">
                    <p class="card-text d-inline">Price: <small><del>&#8377 2000</del></small><span class="font-weight-bolder">&#8377 200</span></p>

                    <button type="submit" class="btn btn-primary text-white font-weight-bolder float-right" name="buy">Buy</button>
                </form>
            </div>
        </div>
    </div>
        <div class="container">
            <div class="row">
                <table class="table table-bordered table-hover">
                    <thead>
                        <tr>
                            <th scope="col">Lesson No: </th>
                            <th scope="col">Lesson Name: </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td>Introduction</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
</div>
<!-- End of Course details -->

<!-- start of footer -->
<?php
    include('./mainInclude/footer.php');
?>
<!--