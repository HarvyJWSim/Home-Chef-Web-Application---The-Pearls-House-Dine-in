<!DOCTYPE html>
<?php
    include('sessionVerify.php');
    include('customiseMenu.php');
?>

<html>
<head>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<link rel="stylesheet" href="css/wholeProcess.css">


</head>
<body>
<!-- The Modal -->
<div id="myModal" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <span class="close">&times;</span>
	<br><br>
    <div class="name"><h2>
      MENUNAME
    </h2></div>
	<br><br>
	<center><div class="type"><b>Appetiser</b></div>
	<div class="pic"><br><img src="img/foodimg/1.jpg" width="200" height="100"></div>
	<div class="name">Add cuisine name here</div>
    <div class="desc">Add a description of the image here</div>
	<br>
	<div class="type"><b>Main Course</b></div>
	<div class="pic"><br><img src="img/foodimg/2.jpg" width="200" height="100"></div>
	<div class="name">Add cuisine name here</div>
    <div class="desc">Add a description of the image here</div>
	<br>
	<div class="type"><b>Dessert</b></div>
	<div class="pic"><br><img src="img/foodimg/3.jpg" width="200" height="100"></div>
	<div class="name">Add cuisine name here</div>
    <div class="desc">Add a description of the image here</div>
	</center>
	<br><br>

  </div>
</div>

	<center style="text-align:center; font:25px arial; font-weight:700; color:black; margin-top:20px;">
										Menu Preferences Filtered ...
									</center>
									<br>

									<center>
									<div class="responsive" style="margin-left:130px;">
									  <div class="gallery">
										<a href="#" type="button" class="button btn-default" id="myBtn1" style="background:transparent;">
										  <img src="(string$filePath1.$menuId[0].$filePath2)"  width="300" height="200">
										</a>
										<div class="menu">
                    <b>
                    <?php
                    echo($menuName[0]);
                    ?>
                    </b></div>
										<br>
										</div>
                    <form action="sendRequestMenuOne.php" name="first" method="post">
									  <input type="submit" class="button btn-primary " style="padding: 14px 95px;"> SELECT </a>
                    </form>
									</div>


									<div class="responsive">
									  <div class="gallery">
										<a href="#" type="button" class="button btn-default" id="myBtn2" style="background:transparent;">
										  <img src="img/foodimg/2.jpg" alt="Forest" width="300" height="200">
										</a>
										<div class="menu">
                    <b>
                      <?php
                      echo($menuName[3]);
                      ?>
                    </b></div>
										<br>
										</div>
                    <form action="sendRequestMenuTwo.php" name="first" method="post">
                    <input type="submit" class="button btn-primary " style="padding: 14px 95px;"> SELECT </a>
                    </form>									</div>

									<div class="responsive">
									  <div class="gallery">
										<a href="#" type="button" class="button btn-default" id="myBtn3" style="background:transparent;">
										  <img src="img/foodimg/3.jpg" alt="Northern Lights" width="300" height="200">
										</a>
										<div class="menu">
                      <b>
                        <?php
                        echo($menuName[6]);
                        ?>
                      </b></div>
										<br>
										</div>
                    <form action="sendRequestMenuThree.php" name="first" method="post">
                    <input type="submit" class="button btn-primary " style="padding: 14px 95px;"> SELECT </a>
                    </form>
                  </div>
									</center>

									<br><br><br><br><br><br>

									<center>
									<div class="responsive" style="margin-left:130px;">
									  <div class="gallery">
										<a href="#" type="button" class="button btn-default" id="myBtn4" style="background:transparent;">
										  <img src="img/foodimg/4.jpg" alt="Mountains" width="300" height="200">
										</a>
										<div class="menu">
                      <b>
                        <?php
                        echo($menuName[9]);
                        ?>
                      </b>
                    </div>
										<br>
										</div>
                    <form action="sendRequestMenuFour.php" name="first" method="post">
                    <input type="submit" class="button btn-primary " style="padding: 14px 95px;"> SELECT </a>
                    </form>
                  </div>

									<div class="responsive">
									  <div class="gallery">
										<a href="#" type="button" class="button btn-default" id="myBtn5" style="background:transparent;">
										  <img src="img/foodimg/5.jpg" alt="Mountains" width="300" height="200">
										</a>
										<div class="menu">
                      <b>
                        <?php
                        if ((count($menuName)) > 12)
                          echo($menuName[12]);
                        ?>
                      </b>
                  </div>
										<br>
									  </div>
                    <form action="sendRequestMenuFive.php" name="first" method="post">
                    <input type="submit" class="button btn-primary " style="padding: 14px 95px;"> SELECT </a>
                    </form>
                  </div>

									<div class="responsive">
									  <div class="gallery">
										<a href="#" type="button" class="button btn-default" id="myBtn6" style="background:transparent;">
										  <img src="img/foodimg/6.jpg" alt="Mountains" width="300" height="200">
										</a>
										<div class="menu">
                      <b>
                        <?php
                        if ((count($menuName)) > 15)
                          echo($menuName[15]);
                        ?>
                      </b>
                  </div>
										<br>
									  </div>
                    <form action="sendRequestMenuSix.php" name="first" method="post">
                    <input type="submit" class="button btn-primary " style="padding: 14px 95px;"> SELECT </a>
                    </form>
                  </div>
									</center>
									</center>
									<div class="clearfix"></div>

									<a href="#" type="submit" class="button btn-primary" style="padding: 14px 95px;"> SUBMIT </a>

<script>
	// Get the modal
	var modal = document.getElementById('myModal');

	// Get the <span> element that closes the modal
	var span = document.getElementsByClassName("close")[0];

	// When the user clicks the button, open the modal
	document.getElementById("myBtn1").onclick = function() {
		modal.style.display = "block";
	}
	// When the user clicks the button, open the modal
	document.getElementById("myBtn2").onclick = function() {
		modal.style.display = "block";
	}

	// When the user clicks the button, open the modal
	document.getElementById("myBtn3").onclick = function() {
		modal.style.display = "block";
	}
	// When the user clicks the button, open the modal
	document.getElementById("myBtn4").onclick = function() {
		modal.style.display = "block";
	}
	// When the user clicks the button, open the modal
	document.getElementById("myBtn5").onclick = function() {
		modal.style.display = "block";
	}
	// When the user clicks the button, open the modal
	document.getElementById("myBtn6").onclick = function() {
		modal.style.display = "block";
	}


	// When the user clicks on <span> (x), close the modal
	span.onclick = function() {
		modal.style.display = "none";
	}

	// When the user clicks anywhere outside of the modal, close it
	window.onclick = function(event) {
		if (event.target == modal) {
			modal.style.display = "none";
		}
	}
</script>
</body>
</html>
