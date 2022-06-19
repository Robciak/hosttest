<?php 
   $url ="http://localhost/GMS/1/";
   $url2 ="http://localhost/GMS/1";
   include "../adminlogic.php";
   include "../menuad.php";
   include "../blog/logic.php";
   
?>

        <div class="app-main">
          <div class="main-header-line">
            <h1>Blog Creator</h1>
          </div>
          
         
        
          <label><input type="radio" id="wyb" name="wyboradmin" value="view" onclick="view()" /><a style="color:white">view</a></label><br>
          <label><input type="radio" id="wyb" name="wyboradmin" value="create" onclick="create()"/><a style="color:white">create</a></label><br>
          <label><input type="radio" id="wyb" name="wyboradmin" value="edit" onclick="edit()"/><a style="color:white">edit</a></label><br>
          



          <div name="view" id="view">
            <?php  
                $conn = mysqli_connect("localhost", "root", "", "gms");
                $sql = "SELECT * FROM blog ";
                $result = mysqli_query($conn, $sql);
                echo "<style>table, th, td {margin-left:-15px;border:1px solid white;color:white;}</style>
                <table>
                <tr>
                        <td>id</td>
                        <td>title</td>
                        <td>under title</td>
                        <td>mini content</td>
                        <td>content</td>
                        <td>filename</td>
                        <td></td>
                        <label><td><a href='edit.php'><img src='image/refresh-arrow.png' /></a></td></label>
                      </tr>";
                while($dis = mysqli_fetch_assoc($result)){
                echo "<tr>
                <iframe id='myIframe' name='myIframe' width='0' height='0' frameborder='0'></iframe>
                        <form method='post' name='formupdate' action='' target='myIframe'>
                        <td><input type='number' name='idk' value='$dis[id]'</td>
                        <td><input type='text' name='title' placeholder='Blog Title' value='$dis[title]'</td>
                        <td><input type='text' name='undertitle' placeholder='Blog Under Title' value='$dis[under_title]'</td>
                        <td><textarea name='minicontent' cols='20' rows='10'>$dis[mini_content]</textarea></td>
                        <td><textarea name='content' cols='20' rows='10'>$dis[content]</textarea></td>
                        <td><img style='max-height:50px;width:auto;'  src='$url2/admin/blog/image/$dis[filename]'</td>
                        <td><input type='submit' name='update' value='UPDATE'></td>
                        <td><button><a href='$url2/admin/blog/single_view.php?$dis[id]'>link</a></button></td>
                        </form>
                    </tr>";
               }
                echo "</table>";?>
          </div>













  </div>
              








  <script>
    var elementt = document.getElementById("3");
   elementt.classList.add("active");
   function view() {window.open("<?php echo $url?>admin/blog/view.php","_self");}
    function create() {window.open("<?php echo $url?>admin/blog/create.php","_self");}
    function edit() {window.open("<?php echo $url?>admin/blog/edit.php","_self");}
  </script>

<?php //include "js.php"; ?>
      
</body>

</html>