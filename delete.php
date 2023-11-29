<?php include 'connection.php';
$id=$_GET['id'];
$query="DELETE FROM details WHERE id='$id'";

$data=mysqli_query($con,$query);
if($data){
    ?>
    <script type="text/javascript">
        alert("Data deleted Successfully");
        window.open('http://localhost/crud/display.php',"_self")
    </script>
    <?php
}
else{
    ?>
    <script type="text/javascript">
        alert("Try again");
        window.open('http://localhost/crud/display.php',"_self")
    </script>
    <?php
}

?>