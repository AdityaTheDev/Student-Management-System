<?php include 'connection.php'; ?>
<form action="" method="POST">
        Update ID:
        <input type="number" name="ID" placeholder="ID">
        <br><br>

        <input type="submit" name="searchbtn" value="search"><br><br>
    </form>

    <?php 
    if(isset($_POST['searchbtn'])){
        $id=$_POST['ID'];
        $query="SELECT * FROM details WHERE id='$id'";
        $data=mysqli_query($con,$query);
        $row=mysqli_fetch_array($data);

        if($row){
            ?>
            <script>
               window.open("update.php?id=<?php echo $id ?> ","_self");
            </script>
            
            <?php
        }
        else{
            ?>
            <script>
                alert('Invalid ID, Please try again.');
            </script>
            <?php
        }
    }
    ?>