<?php include 'connection.php'; 
$id=$_GET['id'];

$select="SELECT * FROM details WHERE id='$id'";
$data=mysqli_query($con,$select);
$row=mysqli_fetch_array($data);
?>
<div>
    <form action="" method="POST">
        <input value="<?php echo $row['firstname'] ?>" type="text" name="firstname" placeholder="firstname">
        <br><br>
        <input value="<?php echo $row['lastname'] ?>" type="text" name="lastname" placeholder="lastname">
        <br><br>
        <input value="<?php echo $row['age'] ?>" type="number" name="age" placeholder="age">
        <br><br>

        <input type="submit" name="updatebtn" value="Update">
        <button><a href="display.php">Back</a></button>
    </form>
</div>
<?php

if(isset($_POST['updatebtn'])){
    $fname=$_POST['firstname'];
    $lname=$_POST['lastname'];
    $age=$_POST['age'];

    $query="UPDATE details SET firstname='$fname',lastname='$lname',age='$age' WHERE id='$id'";
    $data=mysqli_query($con,$query);

    if($data){
        ?>
        <script type="text/javascript">
            alert("Updated successfully")
            window.open('http://localhost/crud/display.php',"_self");
        </script>
        <?php
    }
    else{
        ?>
        <script type="text/javascript">
         alert("Try again");
        </script>
        <?php
    }


}
?>