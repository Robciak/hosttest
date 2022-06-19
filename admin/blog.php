<?php $url ="http://localhost/GMS/1/";
  include "adminlogic.php";
  include "menuad.php";
  include "blog/logic.php";
?>

        <div class="app-main">
          <div class="main-header-line">
            <h1>Blog Creator</h1>
          </div>
          
         
          <label><input type="radio" id="wyb" name="wyboradmin" value="view" onclick="view()" /><a style="color:white">view</a></label><br>
          <label><input type="radio" id="wyb" name="wyboradmin" value="create" onclick="create()"/><a style="color:white">create</a></label><br>
          <label><input type="radio" id="wyb" name="wyboradmin" value="edit" onclick="edit()"/><a style="color:white">edit</a></label><br>
         



          
         


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