<?php
session_start();
$url = "http://localhost/GMS/1/";
include "include/header.php";
//include "include/menu.php";

?>

<div id="mySidebar" style="z-index: 3;" class="sidebar">
        <div class="logo-menu"><span><b>G</b>ame<b>M</b>ind<b>S</b>et</span></div>
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
        <div class="posi"><div id="App"><div onclick="btnhrefhome()" class="hextec-button2"><div class="centralize"><span class="button--icon mdi mdi-close"></span></div><div class="confirm-button"><div class="button--inner-border"><div class="button--inner">
          <span class="button--text">Główna</a></span></div><div class="button--left-clip-mend"></div></div></div></div></div></div>
          <br>
        <?php 
          
        
        
        ?>
        <div class="posi"><div id="App"><div onclick="btnhreflogin()" class="hextec-button2"><div class="centralize"><span class="button--icon mdi mdi-close"></span></div><div class="confirm-button"><div class="button--inner-border"><div class="button--inner">
          <span class="button--text">LOGIN</a></span></div><div class="button--left-clip-mend"></div></div></div></div></div></div>
        <br>
        <div class="posi"><div id="App"><div onclick="btnhref1()" class="hextec-button2"><div class="centralize"><span class="button--icon mdi mdi-close"></span></div><div class="confirm-button"><div class="button--inner-border"><div class="button--inner">
          <span class="button--text">TRAINING</a></span></div><div class="button--left-clip-mend"></div></div></div></div></div></div>
        <br>
        <div class="posi"><div id="App"><div onclick="btnhref1()" class="hextec-button2"><div class="centralize"><span class="button--icon mdi mdi-close"></span></div><div class="confirm-button"><div class="button--inner-border"><div class="button--inner">
          <span class="button--text">LEARN</a></span></div><div class="button--left-clip-mend"></div></div></div></div></div></div>
        <br>
        <div class="posi"><div id="App"><div onclick="btnhref1()" class="hextec-button2"><div class="centralize"><span class="button--icon mdi mdi-close"></span></div><div class="confirm-button"><div class="button--inner-border"><div class="button--inner">
          <span class="button--text">ACHIEVEMENTS</a></span></div><div class="button--left-clip-mend"></div></div></div></div></div></div>
        <br>
        <div class="posi"><div id="App"><div onclick="btnhref1()" class="hextec-button2"><div class="centralize"><span class="button--icon mdi mdi-close"></span></div><div class="confirm-button"><div class="button--inner-border"><div class="button--inner">
          <span class="button--text">O MNIE</a></span></div><div class="button--left-clip-mend"></div></div></div></div></div></div>
      </div>

      <div id="main">
        <button class="openbtn"  onclick="openNav()"><!--☰-->
          <div class="g-menu" style="z-index: 2;"> <div class="posi"><div id="App"><div class="hextec-button"><div class="cancel-button centralize"><img class="img" src="<?php echo $url ?>/img/icons/test.jpg" /><span class="button--icon mdi mdi-close"></span></div><div class="confirm-button"><div class="button--inner-border"><div class="button--inner">
            <span class="button--text">MENU</span></div><div class="button--left-clip-mend"></div></div></div></div></div></div></div></button>  
        
      </div>
      <link rel="stylesheet" href="<?php echo $url ?>css/menu.css">
      <script>
  function openNav() {
    document.getElementById("mySidebar").style.width = "250px";
   // document.getElementById("main").style.marginLeft = "250px";
  }
  
  function closeNav() {
    document.getElementById("mySidebar").style.width = "0";
    //document.getElementById("main").style.marginLeft= "0";
  }
  function btnhref1() {
  window.open("https://www.w3schools.com","_self");
}
function btnhreflogin() {
  window.open("<?php echo $url?>login/","_self");
}
function btnhrefhome() {
  window.open("<?php echo $url?>","_self");
}
  </script>
<div class="arrow1">
    <img src="<?php echo $url?>img/hangtag.svg" />
    <div class="relarr download-component" onclick="btnhref1()" style="z-index: 1;">
      <button class="download-button">ZACZNIJ TERAZ </button>
    </div>
  </div>















<?php
include "include/footer.php";





?>