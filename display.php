<?php include 'connection.php'; ?>

<button onClick="handleClick()">Home</button><br><br>
<script>
    function  handleClick(){
        window.open("http://localhost/crud/index.php","_self")
    }
</script>
<table border="1px" cellpadding="10px" cellspacing="0">
    <tr>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Age</th>
        <th colspan="2">Actions</th>
    </tr>
    <?php
    $query="SELECT * FROM details";
    $data=mysqli_query($con,$query);
    $result=mysqli_num_rows($data);

    if($result){
        while($row=mysqli_fetch_array($data)){
            ?>
            <tr>
                <td><?php echo $row['firstname'];  ?></td>
                <td><?php echo $row['lastname'];  ?></td>
                <td><?php echo $row['age'];  ?></td>
                <td><a href="update.php?id=<?php echo $row['id'];  ?>">Update</a></td>
                <td><a onClick="return confirm('Are you sure you want to delete?')" href="delete.php?id=<?php echo $row['id'];  ?>">Delete</a></td>
            </tr>
            <?php
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