<?php
    include('sessionVerify.php');
    include('retrvChefDetails.php');
?>

<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Pearl House Dine-In Home Page</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Kaushan+Script" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css">

    <!-- Custom styles -->
    <link href="css/homePgStyle.css" rel="stylesheet">
	<link href="css/table_style.css" rel="stylesheet">
	<link href="css/proposal_list.css" rel="stylesheet">

  </head>

  <body id="page-top">

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top bg-secondary" id="mainNav">
      <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="#dashboard" id="dBoard">
		<img src="img/logos/logo.png" width="130" alt="logo">
		</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          Menu
          <i class="fa fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav text-uppercase ml-auto">
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#menuRequest" id="mReq">Menu Request</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#menuProposal" id="mProp">Menu Proposal</a>
            </li>
			<li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#contact" id="cUs">Contact Us</a>
            </li>
            <li class="nav-item">
			  <div class="dropdown">
              <a class="nav-link js-scroll-trigger dropdown-toggle" href="#" id="logout" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <?php
                echo "Hi ".$_SESSION["user_first_name"];
              ?>
              </a>
			  <div class="dropdown-menu" style="background-color: rgba(255,255,255, 0.9);" aria-labelledby="logout">
				<a class="dropdown-item" href="#"><span class="fa fa-user"></span> &nbsp&nbsp&nbsp Profile</a>
				<a class="dropdown-item" href="#"><span class="fa fa-cogs"></span> &nbsp&nbsp Settings</a>
				<a class="dropdown-item" href="sessionLogout.php"><span class="fa fa-sign-out"></span> &nbsp&nbsp&nbsp Log Out</a>
			  </div>
			  </div>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- Header -->
    <header class="masthead" id="dashboard">
      <div class="container">
        <div class="intro-text">
          <div class="intro-lead-in">
            <?php
              echo "Hi ".$_SESSION["user_first_name"]. " !";
            ?>
          </div>
          <div class="intro-lead-in">Welcome to Pearl House Dine-In</div>
		  <div class="intro-subheading">Are you ready to serve new customers?</div>
        </div>
      </div>
	  <div class="container" style="background-color: rgba(255, 255, 255,0.7); border-radius: 15px; height: 450px; color: black;">
		  <p style="text-align: left; font-size: 25px; font-weight: 700; padding-top: 10px; padding-left: 20px">Your Pearl House Dine-In Activity</p>
		  <hr size="10" noshade>
		  <div class="row">
			  <div class="col-md-4">
				<div class="box">
					<h4 style="text-align: left">Bookings</h4>
					<div class="row">
						<div class="col-md-6">
							<h1 style="color: coral" id="bookingNumPend">
                <?php
                  echo $_SESSION["pending_count"];
                ?>
              </h1>
							<h6><i>pending</i></h6>
						</div>
						<vr></vr>
						<div class="col-md-6">
							<h1 style="color: coral" id="bookingNumComp">
                <?php
                  echo $_SESSION["served_count"];
                ?>
              </h1>
							<h6><i>completed</i></h6>
						</div>
					</div>
				</div>
			  </div>
			  <div class="col-md-4">
				<div class="box">
					<h4 style="text-align: left">Revenue</h4>
					<h1 style="color: coral; line-height: 45px;" id="revenueEarn">
            <?php
              echo $_SESSION["revenue"];
            ?>
          </h1>
					<h6><i>in MYR</i></h6>
				</div>
			  </div>
			  <div class="col-md-4">
				<div class="box">
					<h5 style="text-align: left; line-height: 25px">Cancellation Rate</h5>
					<h1 style="color: coral; line-height: 45px;" id="cancelRate">
            <?php
              echo $_SESSION["cancel_rate"]. " %";
            ?>
          </h1>
					<h6><i>from all bookings</i></h6>
				</div>
			  </div>
		  </div>
		  <div class="row justify-content-md-center">
			  <div class="col-md-3">
				<div class="box2">
					<h5 style="text-align: left; line-height: 25px">Service Rating</h5>
					<h1 style="color: coral; line-height: 90px; font-size: 60px" id="servRating">
            <?php
              for ($i = 0; $i < (int)$_SESSION["service_rate"]; $i++)
                echo "* ";
            ?>
          </h1>
				</div>
			  </div>
			  <div class="col-md-3">
				<div class="box2">
					<h5 style="text-align: left; line-height: 25px">Punctuality</h5>
					<h1 style="color: coral; line-height: 90px; font-size: 60px" id="punctuality">
            <?php
              for ($i = 0; $i < (int)$_SESSION["punctuality"]; $i++)
                echo "* ";
            ?>
          </h1>
				</div>
			  </div>
			  <div class="col-md-3">
				<div class="box2">
					<h5 style="text-align: left; line-height: 25px">Menu Quality</h5>
					<h1 style="color: coral; line-height: 90px; font-size: 60px" id="menuQuality">
            <?php
              for ($i = 0; $i < (int)$_SESSION["menu_quality"]; $i++)
                echo "* ";
            ?>
          </h1>
				</div>
			  </div>
		  </div>
	  </div>
    </header>

    <!-- Services -->
    <section id="menuRequest" class="dynamic-content bg-mreq">
		<div class="container">
			<div class="row">
			  <div class="col-lg-12 text-center">
				<h2 class="section-heading text-uppercase">Menu Request</h2>
				<h3 class="section-subheading text-muted">Keep track of incoming requests from customers.</h3>
			  </div>
			</div>
			<div class="row content">
			<div class="col-md-12">
				<div class="panel panel-default">
					<div class="panel-body">
						<div class="pull-right">
							<div class="btn-group" style="padding-right: 20px;">
								<button type="button" class="btn btn-success btn-filter" data-target="pagado">Completed</button>
								<button type="button" class="btn btn-warning btn-filter" data-target="pendiente">Booked</button>
								<button type="button" class="btn btn-danger btn-filter" data-target="cancelado">Cancelled</button>
								<button type="button" class="btn btn-default btn-filter" data-target="all">Todos</button>
							</div>
						</div>
						<div class="table-container" style="color:black; text-align: center;">
							<table class="table table-striped table-condensed">
							  <thead>
								  <tr>
									  <th>No.</th>
									  <th>Customer Name</th>
									  <th>Date and Time</th>
									  <th>Menu Proposal Chosen</th>
									  <th>Status</th>
									  <th>Action</th>
								  </tr>
							  </thead>
								<tbody>
									 <tr>
										<td>1</td>
										<td><?php echo($custName[0]) ?></td>
										<td><?php echo($dateTime[0]) ?></td>
										<td><a href="#"><span class="fa fa-info-circle"></span></a> <?php echo($menuProposal[0]) ?>  </td>
										<td>Pending</td>
										<td><a class='btn btn-info btn-sm' href="#" onclick="return false;"><span class="fa fa-check"></span></a> <a href="#" class="btn btn-danger btn-sm" onclick="return false;"><span class="fa fa-times"></span></a></td>
									</tr>
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>

	</div>
		</div>
    </section>

	<!-- Menu Proposal -->
    <section id="menuProposal" class="dynamic-content bg-mprop">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading text-uppercase">Menu Proposal</h2>
            <h3 class="section-subheading text-muted">Create your own dedicated menus, delights the others.</h3>
          </div>
        </div>
		<!-- Buttons -->
		<div class="row justify-content-center">
			<div class="col-lg-3" style="margin-bottom:20px; margin-right: 150px">
				<button class="btn btn-xl btn-secondary"> <i class="fa fa-check"></i> Add new menu proposal</button>
			</div>
			<div class="col-lg-3" style="margin-bottom:20px">
				<button class="btn btn-xl btn-secondary"> <i class="fa fa-times"></i> Remove menu proposal</button>
			</div>
		  </div>
        <div class="row bg-mprop-table">
			<div class="row justify-content-lg-center">
                    <div class="col-xs-12 col-sm-3 col-md-3">
                        <a href="#">
                            <img src="http://wanderluxe.theluxenomad.com/wp-content/uploads/2014/10/http-www.urchinbali.comgallery.jpg" class="img-responsive img-box img-thumbnail" alt="">
                        </a>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-6">
                        <div class="list-group">
                            <div class="list-group-item">
                                <div class="row-content">
                                    <small>
                                        <i class="glyphicon glyphicon-time"></i> Added 1 week ago
                                        <br>
                                        <span class="explore"><i class="glyphicon glyphicon-th"></i> <a href="#">Popularity: * * * * * </a></span>
                                    </small>
                                </div>
                            </div>
                        </div>
                        <h4><a href="#">My Secret Menu # 1</a></h4>
                        <p>This is my secret menu, it consist of 1 appetizer, 1 main course and etc...</p>
						<button class="btn btn-sm">Details</button>
                    </div>
                </div>
                <hr>
                <div class="row justify-content-lg-center">
                    <div class="col-xs-12 col-sm-3 col-md-3">
                        <a href="#">
                            <img src="http://wanderluxe.theluxenomad.com/wp-content/uploads/2014/09/http-barbacoabali.com_.jpg" class="img-responsive img-box img-thumbnail" alt="">
                        </a>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-6">
                        <div class="list-group">
                            <div class="list-group-item">
                                <div class="row-content">
                                    <small>
                                        <i class="glyphicon glyphicon-time"></i> Added 1 week ago
                                        <br>
                                        <span class="explore"><i class="glyphicon glyphicon-th"></i> <a href="#">Popularity: * * * * * </a></span>
                                    </small>
                                </div>
                            </div>
                        </div>
                        <h4><a href="#">My Secret Menu # 2</a></h4>
                        <p>This is my secret menu, it consist of 1 appetizer, 1 main course and etc...</p>
						<button class="btn btn-sm">Details</button>
                    </div>
                </div>
                <hr>
				<div class="row justify-content-lg-center">
                    <div class="col-xs-12 col-sm-3 col-md-3">
                        <a href="#">
                            <img src="http://wanderluxe.theluxenomad.com/wp-content/uploads/2014/10/http-www.urchinbali.comgallery.jpg" class="img-responsive img-box img-thumbnail" alt="">
                        </a>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-6">
                        <div class="list-group">
                            <div class="list-group-item">
                                <div class="row-content">
                                    <small>
                                        <i class="glyphicon glyphicon-time"></i> Added 1 week ago
                                        <br>
                                        <span class="explore"><i class="glyphicon glyphicon-th"></i> <a href="#">Popularity: * * * * * </a></span>
                                    </small>
                                </div>
                            </div>
                        </div>
                        <h4><a href="#">My Secret Menu # 3</a></h4>
                        <p>This is my secret menu, it consist of 1 appetizer, 1 main course and etc...</p>
						<button class="btn btn-sm">Details</button>
                    </div>
                </div>
                <hr>
	</div>
      </div>
    </section>


    <!-- Contact Us -->
    <section id="contact" class="dynamic-content">
      <div class="container" style="margin-top:100px; margin-bottom:100px">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading text-uppercase">Contact Us</h2> <br> <br>
            <h3 class="section-subheading text-light" style="line-height: 30px">You're not going to hit a ridiculously long phone menu when you call us. Your email isn't going to the inbox abyss, never to be seen or heard from again. At Pearl House Dine-In, we provide the exceptional service and we'd want to experience ourselves!</h3>
          <a class="btn btn-primary btn-xl text-uppercase js-scroll-trigger" href="">Contact Support</a>
          </div>
        </div>
      </div>
    </section>

    <!-- Footer -->
    <footer>
      <div class="container">
        <div class="row">
          <div class="col-md-4">
            <span class="copyright">Copyright &copy; 2017 Pearl House Dine-In.</span>
          </div>
          <div class="col-md-4">
            <ul class="list-inline social-buttons">
              <li class="list-inline-item">
                <a href="#">
                  <i class="fa fa-twitter"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="#">
                  <i class="fa fa-facebook"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="#">
                  <i class="fa fa-linkedin"></i>
                </a>
              </li>
            </ul>
          </div>
          <div class="col-md-4">
            <ul class="list-inline quicklinks">
              <li class="list-inline-item">
                <a href="#">Privacy Policy</a>
              </li>
              <li class="list-inline-item">
                <a href="#">Terms of Use</a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </footer>

    <!-- Registration / Sign Up Modals -->

    <!-- Customer Sign Up Modal -->
    <div class="portfolio-modal modal fade" id="sgCustModal" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="close-modal" data-dismiss="modal">
            <div class="lr">
              <div class="rl"></div>
            </div>
          </div>
          <div class="container">
            <div class="row">
              <div class="col-lg-8 mx-auto">
                <div class="modal-body">
                  <h2 class="text-uppercase">Customer Registration</h2>
                  <p class="item-intro text-muted">Please fill up all the information below:</p>
				  <form action=".php" method="post" style="display:inline">
                  	<ul class="list-inline">
						<li><input type="file" name="sgCustProfPic" accept="image/*" onchange="readURLCust(this);" required> <img id="sgCustProfPic" src="#" alt="Profile Picture" class="img-thumbnail"/></li>
						<li><input type="text" placeholder="First Name.." name="sgCustFName" required> </li>
						<li><input type="text" placeholder="Last Name.." name="sgCustLName" required> </li>
						<li><input type="text" placeholder="Email.." name="sgCustEmail" required> </li>
						<li><input type="password" placeholder="Password.." name="sgCustPswd" required> </li>
						<li><input type="text" placeholder="Contact Number.." name="sgCustContactNum" required> </li>
                  	</ul>
					<button type="submit" class="btn btn-primary text-uppercase btn-lg" data-dismiss="modal">
						<i class="fa fa-check"></i>
						Sign Up</button>
			      </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Chef Sign Up Modal-->
    <div class="portfolio-modal modal fade" id="sgChefModal" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="close-modal" data-dismiss="modal">
            <div class="lr">
              <div class="rl"></div>
            </div>
          </div>
          <div class="container">
            <div class="row">
              <div class="col-lg-8 mx-auto">
                <div class="modal-body">
                  <h2 class="text-uppercase">Chef Registration</h2>
                  <p class="item-intro text-muted">Please fill up all the information below:</p>
				  <form action=".php" method="post" style="display:inline">
                  	<ul class="list-inline">
						<li><input type="file" name="sgChefProfPic" accept="image/*" onchange="readURLChef(this);" required> <img id="sgChefProfPic" src="#" alt="Profile Picture" class="img-thumbnail"/></li>
						<li><input type="text" placeholder="First Name.." name="sgChefFName" required> </li>
						<li><input type="text" placeholder="Last Name.." name="sgChefLName" required> </li>
						<li><input type="text" placeholder="Email.." name="sgChefEmail" required> </li>
						<li><input type="password" placeholder="Password.." name="sgChefPswd" required> </li>
						<li><input type="text" placeholder="Contact Number.." name="sgChefContactNum" required> </li>
						<li><input type="text" placeholder="Your Expertise.." name="sgChefExpert" required> </li>
						<li><input type="text" placeholder="Any Recognition Award.." name="sgChefRecAward" required> </li>
						<li><input type="text" placeholder="Bank Account Number.." name="sgChefBankAccNum" required> </li>
						<li><input type="text" placeholder="Bank Account Name.." name="sgChefBankAccName" required> </li>
						<li><input type="text" placeholder="Bank Name.." name="sgChefBankName" required> </li>
                  	</ul>
					<button type="submit" class="btn btn-primary text-uppercase btn-lg" data-dismiss="modal">
						<i class="fa fa-check"></i>
						Sign Up</button>
			      </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Contact form JavaScript -->
    <script src="js/jqBootstrapValidation.js"></script>
    <script src="js/contact_me.js"></script>

    <!-- Custom scripts -->
    <script src="js/agency.min.js"></script>
	<script src="js/table_style.js"></script>
	<script type="text/javascript">
	$(function(){
		$("#dBoard").click(function(){
			$('#menuRequest').hide();
			$('#menuProposal').hide();
			$('#contact').hide();
			$('#dashboard').show();
		});
	});

	$(function(){
		$("#mReq").click(function(){
			$('#dashboard').hide();
			$('#menuProposal').hide();
			$('#contact').hide();
			$('#menuRequest').show();
		});
	});

	$(function(){
		$("#mProp").click(function(){
			$('#dashboard').hide();
			$('#menuRequest').hide();
			$('#contact').hide();
			$('#menuProposal').show();
		});
	});

	$(function(){
		$("#cUs").click(function(){
			$('#dashboard').hide();
			$('#menuRequest').hide();
			$('#menuProposal').hide();
			$('#contact').show();
		});
	});
	</script>
	<script>
		function readURLCust(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#sgCustProfPic')
                        .attr('src', e.target.result)
                        .width(150)
                        .height(200);
                };

                reader.readAsDataURL(input.files[0]);
            }
        }

		function readURLChef(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#sgChefProfPic')
                        .attr('src', e.target.result)
                        .width(150)
                        .height(200);
                };

                reader.readAsDataURL(input.files[0]);
            }
        }
	  </script>

  </body>

</html>
