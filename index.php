<?php include 'connection.php';  ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
</head>

<body>
    <div>
        <script>
        function handleClick(){
            window.open("http://localhost/crud/display.php","_self")
        }
        function handleSearch(){
            window.open("http://localhost/crud/search.php","_self")
        }
    </script>
    <form action="" method="POST">
        First Name :<input type="text" name="firstname" placeholder="firstname">
        <br><br>
        Last Name :<input type="text" name="lastname" placeholder="lastname">
        <br><br>
        Age :<input type="number" name="age" placeholder="age">
        <br><br>

        <input type="submit" name="savebtn" value="save"><br><br>
    </form>
    <button onClick="handleClick()">Display</button>
    <button onClick="handleSearch()">Search</button>
    
</div>
<?php

if(isset($_POST['savebtn'])){
    $fname=$_POST['firstname'];
    $lname=$_POST['lastname'];
    $age=$_POST["age"];

    $query="INSERT INTO details(firstname,lastname,age) VALUES('$fname','$lname','$age')";

    $data=mysqli_query($con,$query);

    if($data){
        ?>
        <script type="text/javascript">
            alert("Data saved successfully")
        </script>
        <?php
    }
    else{
        ?>
        <script type="text/javascript">
         alert("Please try again")
        </script>
        <?php
    }
}

?>


</body>
</html>