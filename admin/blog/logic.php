<?php

    // Don't display server errors 
    ini_set("display_errors", "on");
    error_reporting(0);
    // Initialize a database connection
    $conn = mysqli_connect("localhost", "root", "", "gms");

    // Destroy if not possible to create a connection
    if(!$conn){
        echo "<h3>Not able to establish Database Connection<h3>";
    }

    // Get data to display on index page
    $sql = "SELECT * FROM data";
    
    $query = mysqli_query($conn, $sql);
    
    if(isset($_POST['like'])){
        $like = 10;

        $sql = "UPDATE blog SET like = $like WHERE id = $idblog";
        
        mysqli_query($conn, $sql);
    }
    // Create a new post
    if(isset($_REQUEST['new_post'])){
        $title = $_REQUEST['title'];
        $undertitle = $_REQUEST['undertitle'];
        $content = $_REQUEST['content'];
        $minicontent = $_REQUEST['minicontent'];
        $mydate=getdate(date("U"));
        $rand = (rand(1,1000));

        
        $filename = $_FILES["uploadfile"]["name"];
        $tempname = $_FILES["uploadfile"]["tmp_name"];   
        $filename2 = "$mydate[year]$mydate[mon]$mydate[mday]$mydate[hours]$mydate[minutes]$mydate[seconds]$rand.png";
        rename ($filename ,$filename2 );
        $filename = $filename2; 
        $folder = "image/".$filename;

        $sql = "INSERT INTO blog(title,under_title,mini_content, content, filename) VALUES('$title','$undertitle','$minicontent', '$content','$filename')";
      

       


        

        mysqli_query($conn, $sql);
        

        //echo $sql;
        
        if (move_uploaded_file($tempname, $folder))  {
            echo "<center><h3 style='color:white'>Image uploaded successfully</h3></center>";
        }else{
            echo "<center><h3 style='color:white'>Failed to upload image</h3></center>";
      }
     

        header("Location: http://localhost/GMS/1/admin/blog/create.php?info=added");
        exit();
    }
    

    // Get post data based on id
    if(isset($_REQUEST['id'])){
        $id = $_REQUEST['id'];
        $sql = "SELECT * FROM blog WHERE id = $id";
        

        $query = mysqli_query($conn, $sql);
        
    }

    // Delete a post
    if(isset($_REQUEST['delete'])){
        $id = $_REQUEST['id'];

        $sql = "DELETE FROM blog WHERE id = $id";
        

        mysqli_query($conn, $sql);
        

        header("Location: index.php");
        exit();
    }

    // Update a post
    if(isset($_POST['update'])){
        $id = $_POST['idk'];
        $title = $_POST['title'];
        $undertitle = $_POST['undertitle'];
        $minicontent = $_POST['minicontent'];
        $content = $_POST['content'];
        $mydate=getdate(date("U"));
        $rand = (rand(1,1000));
        
        
        /* $filename = $_FILES["uploadfile"]["name"];
        $tempname = $_FILES["uploadfile"]["tmp_name"];   
        $filename2 = "$mydate[year]$mydate[mon]$mydate[mday]$mydate[hours]$mydate[minutes]$mydate[seconds]$rand.png";
        rename ($filename ,$filename2 );
        $filename = $filename2; 
        $folder = "image/".$filename; */
        



        /* $sql = "UPDATE blog SET title = '$title' , mini_content = '$minicontent', content = '$content', filename = '$filename'  WHERE id = $id";
         */
        $sql = "UPDATE blog SET title = '$title' ,under_title = '$undertitle' , mini_content = '$minicontent', content = '$content'  WHERE id = $id";
        
        mysqli_query($conn, $sql);
        
        
        if (move_uploaded_file($tempname, $folder))  {
            echo '<script type ="text/JavaScript">';  
            echo 'Image uploaded successfully';  
            echo '</script>';
        }else{
            echo '<script type ="text/JavaScript">';  
            echo 'Failed to upload image';  
            echo '</script>';
        }

       // header("Location: index.php");
        //exit();
    }



    if(isset($_REQUEST['change_image'])){
        $id = $_REQUEST['id'];
        $title = $_REQUEST['title'];
        $undertitle = $_REQUEST['undertitle'];
        $minicontent = $_REQUEST['minicontent'];
        $content = $_REQUEST['content'];
        $mydate=getdate(date("U"));
        $rand = (rand(1,1000));

        
        $filename = $_FILES["uploadfile"]["name"];
        $tempname = $_FILES["uploadfile"]["tmp_name"];   
        $filename2 = "$mydate[year]$mydate[mon]$mydate[mday]$mydate[hours]$mydate[minutes]$mydate[seconds]$rand.png";
        rename ($filename ,$filename2 );
        $filename = $filename2; 
        $folder = "image/".$filename;

        $sql = "UPDATE blog SET title = '$title' ,under_title = '$undertitle' ,mini_content = '$minicontent', content = '$content', filename = '$filename'  WHERE id = $id";
      

       


        

        mysqli_query($conn, $sql);
        

        echo $sql;
        
        if (move_uploaded_file($tempname, $folder))  {
            echo "Image uploaded successfully";
        }else{
            echo "Failed to upload image";
      }
     

        header("Location: index.php");
        exit();
    }
    if(isset($_REQUEST['change_img'])){
        $conn = mysqli_connect("localhost", "root", "", "gms");
        $id = $_REQUEST['id'];
        
        $mydate=getdate(date("U"));
        $rand = (rand(1,1000));
        $filename = $_FILES["change_img"]["name"];
        $tempname = $_FILES["change_img"]["tmp_name"];   
        $filename2 = "$mydate[year]$mydate[mon]$mydate[mday]$mydate[hours]$mydate[minutes]$mydate[seconds]$rand.png";
        rename ($filename ,$filename2 );
        $filename = $filename2; 
        $folder = "image/".$filename;
    
        $sql = "UPDATE users SET logo_patch = '$filename'  WHERE id = $id";
      
        mysqli_query($conn, $sql);
        
        
        
         
        
    }
?>
