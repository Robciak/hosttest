<?php 
$url ="http://localhost/GMS/1/";
$url2 ="http://localhost/GMS/1";
$idblog = $_SERVER['QUERY_STRING'];
include "../adminlogic.php";
include "../menuad.php";
include "../blog/logic.php";

?>

<?php  
    $conn = mysqli_connect("localhost", "root", "", "gms");
    $sql = "SELECT * FROM blog WHERE id = $idblog";
    $result = mysqli_query($conn, $sql);
               
    $dis = mysqli_fetch_assoc($result);
   /*  echo $dis['id']; 
    echo $dis['title']; 
    echo $dis['content'];      */      
    echo "
    <center style='item-align:right;color:white' >
        <form action='' method='post'>
        <input type='Submit' value='Zapisz'><br>
        ID<input type='number' value='$dis[id]'><br>
        Title<input type='text' value='$dis[title]'><br>
        Under Title<input type='text' value='$dis[under_title]'><br>
        Under Content<textarea name='minicontent' cols='20' rows='10'>$dis[mini_content]</textarea><br>
        Content<textarea name='content' id='content' cols='20' rows='10'>$dis[content]</textarea><br>
        
        </form>
        <button onclick='br()' title='Nowa Linia' >NL</button>
        <button onclick='b()' title='Pogrubienie'><b>B</b></button>
        <button onclick='em()' title='Przechylenie'><em>I</em></button>
        <button onclick='a()' title='HyperLink'>A</button>

        <form action='' method='POST'  enctype='multipart/form-data'><br>Dodaj zdjęcie do serwera<input type='file'name='uploadfile' value=''>
        <input type='submit' name='addimage' value='Zatwierdź'></form>
        <br>link do zdjęcia:$url2/img/blog/$filename

    </center>
    <script>
    function br() {document.getElementById('content').value += '<br>';s}
    function b() {document.getElementById('content').value += '<b></b>';}
    function em() {document.getElementById('content').value += '<em></em>';}
    function a() {document.getElementById('content').value += '<a></a>';}


    </script>";
   

                    ?>
<!-- <form action="" method="post" >
        <label><input type="submit" name="like" ><img src="data:image/png;base64,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"/></label>
    </form> -->