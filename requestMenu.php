<html>

<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<link rel="stylesheet" href="css/wholeProcessSteps.css">

<script language="javascript">
    function sendEventType(id)
    {
      var cookieString = "event_type = " + id;
      document.cookie = cookieString;
    }

    function sendPaxCount(id)
    {
      var cookieString = "pax_count = " + id;
      document.cookie = cookieString;
    }

    function sendDateTime()
    {
      var cookieString = "date_time = " + document.getElementById('date').value + " " + document.getElementById('time').value + ":00";
      document.cookie = cookieString;
    }

    function sendCuisineClass(id)
    {
      var cookieString = "cuisine_class = " + id;
      document.cookie = cookieString;
    }

    function sendGlobalCuisineType(id)
    {
      var cookieString = "global_cuisine_type = " + id;
      document.cookie = cookieString;
    }

</script>
</head>

<body>

<!-- The Whole Process -->
<div class="container">
    <div class="row">
    	<section>
        <div class="wizard">
			<!-- The Process Tab -->
            <div class="wizard-inner">
                <div class="connecting-line"></div>
                <ul class="nav nav-tabs" role="tablist">

					<!-- Find Chef -->
                    <li role="presentation" class="active">
                        <a href="#step1" data-toggle="tab" aria-controls="step1" role="tab" title="Search" >
                            <span class="round-tab">
                                <i class="material-icons" style="margin-top:18px;">search</i>
                            </span>
                        </a>
                    </li>
					<!-- Event purpose -->
                    <li role="presentation" class="disabled">
                        <a href="#step2" data-toggle="tab" aria-controls="step2" role="tab" title="Event">
                            <span class="round-tab">
                                 <i class="fa fa-cutlery" style="margin-top:18px;"></i>
                            </span>
                        </a>
                    </li>
					<!-- Pax num -->
                    <li role="presentation" class="disabled">
                        <a href="#step3" data-toggle="tab" aria-controls="step3" role="tab" title="Num of pax">
                            <span class="round-tab">
                                <i class="material-icons" style="margin-top:18px;">people</i>
                            </span>
                        </a>
                    </li>
					<!-- Appointment Date & Time -->
                    <li role="presentation" class="disabled">
                        <a href="#step4" data-toggle="tab" aria-controls="step4" role="tab" title="Appointment">
                            <span class="round-tab">
                                <i class="fa fa-calendar" style="margin-top:18px;"></i>
                            </span>
                        </a>
                    </li>
					<!-- Food Budget class -->
					<li role="presentation" class="disabled">
                        <a href="#step5" data-toggle="tab" aria-controls="step5" role="tab" title="Budget class">
                            <span class="round-tab">
                                <i class="glyphicon glyphicon-star-empty" style="margin-top:18px;"></i>
                            </span>
                        </a>
					<!-- Cuisine Type -->
                    </li> <li role="presentation" class="disabled">
                        <a href="#step6" data-toggle="tab" aria-controls="step6" role="tab" title="Type of cuisines">
                            <span class="round-tab">
                                <i class="material-icons" style="margin-top:18px;">room_service</i>
                            </span>
                        </a>
                    </li>
					<!-- Allergic -->
					<li role="presentation" class="disabled">
                        <a href="#step7" data-toggle="tab" aria-controls="step7" role="tab" title="Allergic">
                            <span class="round-tab">
                                <i class="glyphicon glyphicon-grain" style="margin-top:18px;"></i>
                            </span>
                        </a>
                    </li>
					<!-- Allergic Type -->
					 <li role="presentation" class="disabled">
                        <a href="#step8" data-toggle="tab" aria-controls="step8" role="tab" title="Type of allergic">
                            <span class="round-tab">
                               <i class="fa fa-frown-o" style="margin-top:18px;"></i>
                            </span>
                        </a>
                    </li>

					<!-- Cuisine Menu Filteration -->
					<li role="presentation" class="disabled">
                        <a href="#step9" data-toggle="tab" aria-controls="step9" role="tab" title="Menu Filtered">
                            <span class="round-tab">
                                <i class="fa fa-list" style="margin-top:18px;"></i>
                            </span>
                        </a>
                    </li>

                </ul>
            </div>


                <div class="tab-content">
					<!-- Process 1 : Find Chef -->
                    <div class="tab-pane active" role="tabpanel" id="step1">
                        <div style="background-image:url('img/button/buttonPro.png');">
							 <center>
							 <img src="img/button/buttonPro.png"width="850px" /><br>
										<button type="button" class="button btn-primary next-step" style="padding: 14px 95px;">CONTINUE</button>
							 </center>
                        </div>

                    </div>
					<!-- Process 2 : Event purpose -->
                    <div class="tab-pane" role="tabpanel" id="step2">
                        <div class="step">

                                <center style="text-align:center; font:25px arial; font-weight:700; color:black; margin-top:40px; margin-bottom:10px;">
									I am looking for a private Chef for...
									<br>
										<a href="#" type="button" class="button btn-primary next-step" id="1" onClick="sendEventType(this.id)" style="background:transparent;"> <img src="img/button/Pro2button1.png"width="200px" /> </a>
										<a href="#" type="button" class="button btn-primary next-step" id="2" onClick="sendEventType(this.id)" style="background:transparent;"> <img src="img/button/Pro2button2.png"width="200px" /> </a>
										<a href="#" type="button" class="button btn-primary next-step" id="3" onClick="sendEventType(this.id)" style="background:transparent;"> <img src="img/button/Pro2button3.png"width="200px" /> </a>
										<br>
										<a href="#" type="button" class="button btn-primary next-step" id="4" onClick="sendEventType(this.id)" style="background:transparent;"> <img src="img/button/Pro2button4.png"width="200px" /></a>
										<a href="#" type="button" class="button btn-primary next-step" id="Others" style="background:transparent;"> <img src="img/button/Pro2button5.png"width="200px" /> </a>
			                    </center>

                        </div>
                        <ul class="list-inline pull-right">
                            <li><button type="button" class="button btn-default prev-step">Previous</button></li>
                        </ul>
                    </div>
					<!-- Process 3 : Pax num -->
                    <div class="tab-pane" role="tabpanel" id="step3">
                        <div class="step">

										<center style="text-align:center; font:25px arial; font-weight:700; color:black; margin-top:40px; margin-bottom:10px;">
											Number of pax that we want to request is ...
										<br>
										<a href="#" type="button" class="button btn-primary next-step" id="2" onClick="sendPaxCount(this.id)" style="background:transparent;">
										<img src="img/button/Pro3button1.png"width="200px" /> </a>
										<a href="#" type="button" class="button btn-primary next-step" id="3" onClick="sendPaxCount(this.id)" style="background:transparent;">
										<img src="img/button/Pro3button2.png"width="200px" /> </a>
										<br>
										<a href="#" type="button" class="button btn-primary next-step" id="7" onClick="sendPaxCount(this.id)" style="background:transparent;">
										<img src="img/button/Pro3button3.png"width="200px" /></a>
										<a href="#" type="button" class="button btn-primary next-step" id="13" onClick="sendPaxCount(this.id)" style="background:transparent;">
										<img src="img/button/Pro3button4.png"width="200px" /> </a>
									</center>
                        </div>
                        <ul class="list-inline pull-right">
                            <li><button type="button" class="button btn-default prev-step">Previous</button></li>
                        </ul>
                    </div>
					<!-- Process 4 : Appointment Date & Time -->
					<div class="tab-pane" role="tabpanel" id="step4">
                        <div class="step">

									<center style="text-align:center; font:25px arial; font-weight:700; color:black; margin-top:40px; margin-bottom:20px;">
										Set appointment Date and Time at ...
									<br><br>

									<center>
										<label for="date">Date</label>
										<input type="date" class="form-control" id="date"  placeholder="Eg: 1/1/18" style="width:450px;">

										<label for="time">Time</label>
										<input type="time" class="form-control" id="time" placeholder="Eg: 14:00"  style="width:450px;">


									</center>
									<br>
									<a href="#" type="submit" class="button btn-primary next-step" onClick="sendDateTime()" style="padding: 14px 95px;"> SUBMIT </a>
									</center>
						</div>
                        <ul class="list-inline pull-right">
                            <li><button type="button" class="button btn-default prev-step">Previous</button></li>
                        </ul>
                    </div>
					<!-- Process 5 : Food Budget class -->
					<div class="tab-pane" role="tabpanel" id="step5">
                        <div class="step">

									<center style="text-align:center; font:25px arial; font-weight:700; color:black; margin-top:40px; margin-bottom:20px;">
										I prefer food budget class ..
									<br>
										<a href="#" type="button" class="button btn-primary next-step" id="1" onClick="sendCuisineClass(this.id)" style="background:transparent;">
										<img src="img/button/Pro5button1.png"width="200px" /> </a>
										<a href="#" type="button" class="button btn-primary next-step" id="2" onClick="sendCuisineClass(this.id)" style="background:transparent;">
										<img src="img/button/Pro5button2.png"width="200px" /> </a>
										<a href="#" type="button" class="button btn-primary next-step" id="3" onClick="sendCuisineClass(this.id)" style="background:transparent;">
										<img src="img/button/Pro5button3.png"width="200px" /> </a>
										<a href="#" type="button" class="button btn-primary next-step" id="4" onClick="sendCuisineClass(this.id)" style="background:transparent;">
										<img src="img/button/Pro5button4.png"width="200px" /></a>
									</center>
						</div>
                        <ul class="list-inline pull-right">
                            <li><button type="button" class="button btn-default prev-step">Previous</button></li>
                        </ul>
                    </div>
					<!-- Process 6 : Cuisine Type -->
					<div class="tab-pane" role="tabpanel" id="step6">
                        <div class="step">

									<center style="text-align:center; font:25px arial; font-weight:700; color:black; margin-top:40px; margin-bottom:20px;">
										My choice of global cuisines preferences are ...
									<br>
										<a href="#" type="button" class="button btn-primary next-step" id="Malaysian" onClick="sendGlobalCuisineType(this.id)" style="background:transparent;">
										<img src="img/button/Pro6button1.png"width="200px" /> </a>
										<a href="#" type="button" class="button btn-primary next-step" id="Asian" onClick="sendGlobalCuisineType(this.id)" style="background:transparent;">
										<img src="img/button/Pro6button2.png"width="200px" /> </a>
										<a href="#" type="button" class="button btn-primary next-step" id="African" onClick="sendGlobalCuisineType(this.id)" style="background:transparent;">
										<img src="img/button/Pro6button3.png"width="200px" /> </a>
										<br>
										<a href="#" type="button" class="button btn-primary next-step" id="European" onClick="sendGlobalCuisineType(this.id)" style="background:transparent;">
										<img src="img/button/Pro6button4.png"width="200px" /></a>
										<a href="#" type="button" class="button btn-primary next-step" id="American" onClick="sendGlobalCuisineType(this.id)" style="background:transparent;">
										<img src="img/button/Pro6button5.png"width="200px" /> </a>
										<a href="#" type="button" class="button btn-primary next-step" id="Other" onClick="sendGlobalCuisineType(this.id)" style="background:transparent;">
										<img src="img/button/Pro6button6.png"width="200px" /> </a>
									</center>
						</div>
                        <ul class="list-inline pull-right">
                            <li><button type="button" class="button btn-default prev-step">Previous</button></li>
                        </ul>
                    </div>
					<!-- Process 7 : Allergic -->
					<div class="tab-pane" role="tabpanel" id="step7">
                        <div class="step">

									<center style="text-align:center; font:25px arial; font-weight:700; color:black; margin-top:40px; margin-bottom:20px;">
										Do you have allegic to any type of food ?...
									<br>
  										<a href="#" type="button" class="button btn-primary next-step" id="y" style="background:transparent;">
										<img src="img/button/Pro7button1.png"width="190px" /> </a>
										<a href="menuPreferences.php" type="button" class="button btn-default next-step" id="n" style="background:transparent;">
										<img src="img/button/Pro7button2.png"width="200px" /> </a>
									</center>

						</div>
                        <ul class="list-inline pull-right">
                            <li><button type="button" class="button btn-default prev-step">Previous</button></li>
                        </ul>
                    </div>
					<!-- Process 8 : Allergic Type-->
					<div class="tab-pane" role="tabpanel" id="step8">
                        <div class="step">

									<center style="text-align:center; font:25px arial; font-weight:700; color:black; margin-top:40px; margin-bottom:20px;">
										Specifically...
									<br>
										<div class="container">

										<div class="control-group">

                            <form action="menuPreferences.php" method="post">
	                                    <input type="checkbox" name="allergic_id[]" value="1"/>
                                        <label class="control control--checkbox"><img src="img/button/Pro8button-1.png"width="120px" /> <br>Vegetarian
                                        <div class="control__indicator"></div>
                                        </label>

										                  <input type="checkbox" name="allergic_id[]" value="2"/>
	                                    <label class="control control--checkbox"><img src="img/button/Pro8button-2.png"width="120px" /> <br>No gluten
                                        <div class="control__indicator"></div>
                                        </label>

	                                    <input type="checkbox" name="allergic_id[]" value="3"/>
	                                    <label class="control control--checkbox"> <img src="img/button/Pro8button-3.png"width="120px" /> <br>No nuts
                                        <div class="control__indicator"></div>
                                        </label>

	                                    <input type="checkbox" name="allergic_id[]" value="4"/>
	                                    <label class="control control--checkbox"><img src="img/button/Pro8button-4.png"width="120px" /> <br>No shellfish
                                        <div class="control__indicator"></div>
                                        </label>

	                                    <input type="checkbox" name="allergic_id[]" value="5"/>
	                                    <label class="control control--checkbox"><img src="img/button/Pro8button-5.png"width="120px" /> <br>No dairy
                                        <div class="control__indicator"></div>
                                        </label>

                                        <button type="submit" class="button btn-primary next-step" style="padding: 14px 95px;"> SUBMIT </a>
                              </form>
                                        </div>

                                        </div>
									</center>

						</div>
                        <ul class="list-inline pull-right">
                            <li><button type="button" class="button btn-default prev-step">Previous</button></li>
                        </ul>
                    </div>



				</div>
		</div>
        </section>
	</div>


</div>


<script>
$(document).ready(function () {
    //Initialize tooltips
    $('.nav-tabs > li a[title]').tooltip();

    //Wizard
    $('a[data-toggle="tab"]').on('show.bs.tab', function (e) {

        var $target = $(e.target);

        if ($target.parent().hasClass('disabled')) {
            return false;
        }
    });


    $(".next-step").click(function (e) {

        var $active = $('.wizard .nav-tabs li.active');
        $active.next().removeClass('disabled');
        nextTab($active);

    });
    $(".prev-step").click(function (e) {

        var $active = $('.wizard .nav-tabs li.active');
        prevTab($active);

    });
});


	function nextTab(elem) {
		$(elem).next().find('a[data-toggle="tab"]').click();
	}
	function prevTab(elem) {
		$(elem).prev().find('a[data-toggle="tab"]').click();
	}


//according menu

$(document).ready(function()
{
    //Add Inactive Class To All Accordion Headers
    $('.accordion-header').toggleClass('inactive-header');

	//Set The Accordion Content Width
	var contentwidth = $('.accordion-header').width();
	$('.accordion-content').css({});

	//Open The First Accordion Section When Page Loads
	$('.accordion-header').first().toggleClass('active-header').toggleClass('inactive-header');
	$('.accordion-content').first().slideDown().toggleClass('open-content');

	// The Accordion Effect
	$('.accordion-header').click(function () {
		if($(this).is('.inactive-header')) {
			$('.active-header').toggleClass('active-header').toggleClass('inactive-header').next().slideToggle().toggleClass('open-content');
			$(this).toggleClass('active-header').toggleClass('inactive-header');
			$(this).next().slideToggle().toggleClass('open-content');
		}

		else {
			$(this).toggleClass('active-header').toggleClass('inactive-header');
			$(this).next().slideToggle().toggleClass('open-content');
		}
	});

	return false;
});
</script>
</body>
</html>
