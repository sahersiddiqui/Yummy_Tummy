<?php
include_once("./userZone/header.php");

?>
<div class="col" id="content">
    <div class="menu">

        <h2>Veg Meal Plan</h2>
        <img src="../images/veg.jpg" height="200px" width="350px" />
        <div class="standard">
            <h3>Standard Meal</h3>
            <?php include '../processes/connection.php';
            $query = "select * from mealplan";
            $result = mysqli_query($conn, $query);
            while ($rows = mysqli_fetch_array($result)) { ?>
                <p> <?php echo $rows['stndveg']; ?></p>
            <?php
            } ?>
            <!--p>4 Roti<br/>1 Dal<br/>1 Veg Sabji<br/>1 Rice<br/>1Salad/Raita/Dessert<br/><br/>Rs. 80* per Meal</p-->
        </div>
        <div class="Mini">
            <h3>Mini Meal</h3> <?php include '../processes/connection.php';
                                $query = "select * from mealplan";
                                $result = mysqli_query($conn, $query);
                                while ($rows = mysqli_fetch_array($result)) { ?>
                <p> <?php echo $rows['miniveg']; ?></p>
            <?php
                                } ?>
        </div>

        <input type="button" value="Order Now.." onclick="location.href='orderNow.php'" />

    </div>
    <div class="menu">
        <h2>Non-Veg Meal Plan</h2>
        <img src="../images/nonveg.jpg" height="200px" width="350px">
        <div class="standard">
            <h3>Standard Meal</h3>
            <?php include '../processes/connection.php';
            $query = "select * from mealplan";
            $result = mysqli_query($conn, $query);
            while ($rows = mysqli_fetch_array($result)) { ?>
                <p> <?php echo $rows['stndnonveg']; ?></p>
            <?php
            } ?>
        </div>
        <div class="Mini">
            <h3>Mini Meal</h3>
            <?php include '../processes/connection.php';
            $query = "select * from mealplan";
            $result = mysqli_query($conn, $query);
            while ($rows = mysqli_fetch_array($result)) { ?>
                <p> <?php echo $rows['mininonveg']; ?></p>
            <?php
            } ?>
        </div>
        <input type="button" value="Order Now.." onclick="location.href='orderNow.php'" />
    </div>

</div>

<?php
include_once("./userZone/login.php");
include_once("./userZone/feedback.php");
include_once("./userZone/footer.php");
?>