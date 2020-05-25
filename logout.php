<?php
	include ("include/header.php");
?>
	
<?php
		session_unset();
		session_destroy();
	 //echo "<br><b> Thank you for visiting our site</b><br>";
   header('location:login.php');
	?>	

<div id="content_mid"><span class="title"> About Nova Computer</span><br /> 

  Look! Our product written by Bappi Ashraf. He has written various book about computer. And go on..Look! Our product written by Bappi Ashraf. He has written various book about computer. And go on.. Look! Our product written by Bappi Ashraf. He has written various book about computer. And go on..  Look! Our product written by Bappi Ashraf. He has written various book about computer. And go on.. 
  Bappi Ashraf is an actor and computer books author. He has written verious kind of computer books. 
  <?php
	echo "<font face='Verdana' size='4' color=red> 
	<b>Welcome our site $name </b></font><br />";
	echo $_SESSION['selim'];
?>
  
  
  
 </div>
 <div id="content_right">
     <span class="title">Image Gallery </span><br /> Look! here is some Image.<br />
        <img class="sample" src="images/Photoshop.jpg">
        <img class="sample" src="images/Illustrator.jpg">
        <img class="sample" src="images/Premiere.jpg">
        <img class="sample" src="images/Flash.jpg">
        <img class="sample" src="images/Word.jpg">
        <img class="sample" src="images/Excel.jpg">
        <img class="sample" src="images/Office.jpg">
        <img class="sample" class="sample" src="images/Windows.jpg">
        <img class="sample"src="images/Photoshop.jpg"/>
</div>

 <?php
	include ("include/footer.php");
?>
