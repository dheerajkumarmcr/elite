<?php
session_start();
if(!isset($_SESSION['user_id'])){
header('location:../index.php');	
}
?>
<?php 
        
            if(isset($_POST['name'])){
                $name = $_POST["name"];  
                $id = $_POST["id"];
            $photo = "";
            // Check if a photo was uploaded
         if (isset($_FILES['photo'])) {
             $photo = $_FILES['photo']['name'];
             $photo_temp = $_FILES['photo']['tmp_name'];
           
             // Move the uploaded photo to a permanent location
             move_uploaded_file($photo_temp, 'uploads/' . $photo);
           }
            include 'dbcon.php';
            //code after connection is successfull
            //update query
            $qry = "UPDATE image SET name='$name', image='$photo' WHERE id='$id'";
            $result = mysqli_query($con,$qry); //query executes

            if(!$result){
                echo"ERROR!!";
            }else {

                header('Location:view_image.php');

            }

            }else{
                echo"<h3>YOU ARE NOT AUTHORIZED TO REDIRECT THIS PAGE. GO BACK to <a href='index.php'> DASHBOARD </a></h3>";
            }
?>