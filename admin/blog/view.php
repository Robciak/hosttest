<?php 
   $url ="http://localhost/GMS/1/";
   $url2 ="http://localhost/GMS/1";
   include "../adminlogic.php";
   include "../menuad.php";
   include "../blog/logic.php";
?>
<style> </style>

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
                echo " <style>table, th, td {border:1px solid white;color:white;}</style> 
                <table>
                <tr>
                        <td>id</td>
                        <td>title</td>
                        <td>under title</td>
                        <td>mini content</td>
                        <td>content</td>
                        <td>filename</td>

                      </tr>";
                while($dis = mysqli_fetch_assoc($result)){
                echo "<tr>
                        <td>$dis[id]</td>
                        <td>$dis[title]</td>
                        <td>$dis[under_title]</td>
                        <td>$dis[mini_content]</td>
                        <td>$dis[content]</td>
                        <td><img style='max-height:50px;width:auto;'  src='$url2/admin/blog/image/$dis[filename]' /></td>
                        
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