<?php include 'connection.php'
?>
<button onClick="handleClick()">Home</button><br><br>
<script>
    function handleClick(){
        window.open("http://localhost/crud/index.php","_self")
    }
</script>
 <form action="" method="POST">
        Search ID:
        <input type="number" name="ID" placeholder="ID">
        <br><br>

        <input type="submit" name="searchbtn" value="search"><br><br>
    </form>
<?php

if(isset($_POST['searchbtn'])){
    $id=$_POST['ID'];
    ?>

    <table border="1px" cellpadding="10px" cellspacing="0">
        <tr>
            <td>First Name</td>
            <td>Last Name</td>
            <td>Age</td>
        </tr>
    <?php
    $query="SELECT * FROM details WHERE id='$id'";
    $data=mysqli_query($con,$query);
    $result=mysqli_num_rows($data);

    if($result){
        while($row=mysqli_fetch_array($data)){
            ?>
            <tr>
                <td><?php echo $row['firstname'];  ?></td>
                <td><?php echo $row['lastname'];  ?></td>
                <td><?php echo $row['age'];  ?></td>
            </tr>
            <?php
        }
    }
}
else{
    ?>
    <tr>
        <td>No record found</td>
    </tr>
    <?php
}
?>
</table>
