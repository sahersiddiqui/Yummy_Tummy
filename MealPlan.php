<?php
include_once("./userZone/header.php");
include_once("./processes/connection.php");
$query = "select * from mealplan where type='veg' AND meal_type='standard'";
$result = mysqli_query($conn, $query);
$rows = mysqli_fetch_array($result);
?>
<div class="col-12" id="content">
    <div class="row">
        <div class="col-lg-5 col-md-11 col-sm-11 menu">
            <h2>Veg Meal Plan</h2>
            <img src="./assets/images/veg.jpg" height="200px" width="350px" />
            <div class="standard">
                <h5>Standard Meal</h5>
                <?php 
                $query = "select * from mealplan where type='veg' AND meal_type='standard'";
                $result = mysqli_query($conn, $query);
                $rows = mysqli_fetch_array($result);
                ?>
                <span><?php echo $rows['dal']?> Dal,</span>
                <span><?php echo $rows['roti']?> Roti,</span>
                <span><?php echo $rows['sabji']?> Sabji,</span>
                <span><?php echo $rows['salad']?> Salad</span>
                <span>70/- Rs</span>
            </div>
            <div class="mini">
                <h5>Mini Meal</h5>
                <?php 
                $query = "select * from mealplan where type='veg' AND meal_type='mini'";
                $result = mysqli_query($conn, $query);
                $rows = mysqli_fetch_array($result);
                ?>
                <span><?php echo $rows['dal']?> Dal,</span>
                <span><?php echo $rows['roti']?> Roti,</span>
                <span><?php echo $rows['sabji']?> Sabji,</span>
                <span><?php echo $rows['salad']?> Salad</span>
                <span>50/- Rs</span>
            </div>
    
            <button type="button" class="btn btn-primary" onclick="location.href='orderNow.php'">Order Now..</button>
    
        </div>
        <div class="col-lg-5 col-md-11 col-sm-11 menu">
            <h2>Non-Veg Meal Plan</h2>
            <img src="./assets/images/nonveg.jpg" height="200px" width="350px">
            <div class="standard">
                <h5>Standard Meal</h5>
                <?php 
                $query = "select * from mealplan where type='non-veg' AND meal_type='standard'";
                $result = mysqli_query($conn, $query);
                $rows = mysqli_fetch_array($result);
                ?>
                <span><?php echo $rows['dal']?> Dal,</span>
                <span><?php echo $rows['roti']?> Roti,</span>
                <span><?php echo $rows['sabji']?> Sabji,</span>
                <span><?php echo $rows['salad']?> Salad</span>
                <span>70/- Rs</span>
            </div>
            <div class="mini">
                <h5>Mini Meal</h5>
                <?php 
                $query = "select * from mealplan where type='non-veg' AND meal_type='mini'";
                $result = mysqli_query($conn, $query);
                $rows = mysqli_fetch_array($result);
                ?>
                <span><?php echo $rows['dal']?> Dal,</span>
                <span><?php echo $rows['roti']?> Roti,</span>
                <span><?php echo $rows['sabji']?> Sabji,</span>
                <span><?php echo $rows['salad']?> Salad</span>
                <span>50/- Rs</span>
            </div>
            <button type="button" class="btn btn-primary" onclick="location.href='orderNow.php'">Order Now..</button>
        </div>
        
    </div>

</div>


<?php
include_once("./userZone/login.php");
include_once("./userZone/feedback.php");
include_once("./userZone/footer.php");
?>