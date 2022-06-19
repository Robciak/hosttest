<?php 
$conn = mysqli_connect("localhost", "root", "", "gms");
error_reporting(0);
$login = $_COOKIE['user'];
$passw = $_COOKIE['password'];
$name = "brak";
$who = 3;
$folder ="";
$filename="";
if($login == "" || $passw == ""){
  header("Location: http://localhost/GMS/1/login/");
}else{
    $sql = "SELECT * FROM users WHERE login ='$login' AND password ='$passw' ";
        $query = mysqli_query($conn, $sql);
        if(mysqli_num_rows($query) > 0 ){
          while($row = mysqli_fetch_assoc($query)){
            $name = $row['username'];
            $who = $row['group_id'];
           }
        }
        if($who == 3){
            header("Location: http://localhost/GMS/1/user/");
        }else{
            echo $who;
        }
    }


if(isset($_POST['addimage'])){
  $rand = (rand(1,1000));

        
        $filename = $_FILES["uploadfile"]["name"];
        $tempname = $_FILES["uploadfile"]["tmp_name"];   
        $filename2 = $idblog."-".$rand.".png";
        rename ($filename ,$filename2 );
        $filename = $filename2; 
        $folder = "../../img/blog/".$filename;
        //$folder = $url."image/blog/".$filename;

        if(move_uploaded_file($tempname, $folder))  {
          echo "";
      }else{
          echo "";
    }
    
}
?>