
<!DOCTYPE html>
<html>
    <head>
       <title>Beats - Music washes away from the soul the dust of everyday life</title>
	   <meta name="viewport" content="width=device-width, initial-scale=1.0" >
	   <link href = "css/bootstrap.min.css" rel = "stylesheet">
	   <link href = "css/styles.css" rel = "stylesheet">
	   <script src="./audiojs/audio.min.js"></script>
		<script>
			audiojs.events.ready(function() {
			audiojs.createAll();
			});
		</script>
    </head>
	<body>
		
			<div id ="myCarousel" class = "carousel slide">
		    <ol class = "carousel-indicators middle">
			   <li data-target = "#myCarousel" data-slide-to = "0" class = "active"></li>
			   <li data-target = "#myCarousel" data-slide-to = "1"></li>
			   <li data-target = "#myCarousel" data-slide-to = "2"></li>
			</ol>
			
			<div id = "test1" class = "carousel-inner">
			   <div class ="item active">
			      <img src = "img/slide1.jpg" alt = "MIL" class = "img-responsive">
				  <div class = "carousel-caption text-bottom">
				     <h1></h1>
					 <p></p>
					 <!-- <p><a class="btn btn-lg btn-info pull-right">Sign Up</a></p> !-->
				  </div>
			   </div>		   
			   <div class ="item">
			      <img src = "img/slide2.jpg" alt = "BS" class = "img-responsive">
				     <div class = "carousel-caption">
				     <h1></h1>
					 <p></p>
				  </div>
			   </div>
			   <div class ="item">
			      <img src = "img/slide3.jpg." alt = "JuliaMartin" class = "img-responsive">
				     <div class = "carousel-caption">
				     <h1></h1>
					 <p></p>
				  </div>
			   </div>
			   
			</div>
			
			<a class = "carousel-control left" href = "#myCarousel" data-slide = "prev">
			    <span class = "icon-prev"></span>
			</a>
			<a class = "carousel-control right" href = "#myCarousel" data-slide = "next">
			    <span class = "icon-next"></span>
			</a>
		    </div>
	    
		<div class = "navbar navbar-inverse navbar-fixed-top">
		    <div class = "containter">
			       <a href = "#" class ="navbar-brand active"></a>
				   <div class="col-xs-5 col-sm-3 pull-right">
                      <form class="navbar-form" role="search" action = "search.php" method="post">
                       <div class="input-group">
                        <input type="text" class="form-control" placeholder="Search Beats or Artists" name="search" id="srch-term">
                        <div class="input-group-btn">
                          <button class="btn btn-default" type="submit" value="Search"><span class="glyphicon glyphicon-search"></span></button>
                        </div>
                       </div>
                      </form>
                    </div>
			       <button class = "navbar-toggle" data-toggle = "collapse" data-target = ".navHeaderCollapse">
				       <span class = "icon-bar"></span>
					   <span class = "icon-bar"></span>
					   <span class = "icon-bar"></span>
				   </button>
				   <div class = "collapse navbar-collapse navHeaderCollapse">
				       <ul class = "nav navbar-nav">
						  <li><a id="test1Btn" href = "#here" class="testBtn">Home</a></li>
						  <li><a id="test2Btn" href = "#">AccountName</a></li>
						  <li><a id="test3Btn" href = "#test3" class = "dropdown-toggle" data-toggle = "dropdown" data-hover="dropdown">New Arrival<b class = "caret"></b></a>
						    <ul class = "dropdown-menu">
						      <li><a href = "#"> Hip Hop </a></li>
							  <li><a href = "#"> Trap </a></li>
							  <li><a href = "#"> Dubstep </a></li>
							  <li><a href = "#"> Electro </a></li>
						    </ul>
						  </li>
						  <li><a id="test4Btn" href = "#test4" class="testBtn">Popular</a></li>
						  <li><a id="test5Btn" href = "#test5" href = "#" class = "dropdown-toggle" data-toggle = "dropdown" data-hover="dropdown">Recommended<b class = "caret"></b></a>
						    <ul class = "dropdown-menu">
						      <li><a href = "#"> Editor </a></li>
							  <li><a href = "#"> Customer </a></li>
							  <li><a href = "#"> Random </a></li>
						    </ul>
						  </li>
						  <li><a id="test6Btn" href = "#test6" href = "#" class = "dropdown-toggle" data-toggle = "dropdown" data-hover="dropdown">About<b class = "caret"></b></a>
						    <ul class = "dropdown-menu">
							<li><a href = "#contact" data-toggle="modal">Contact</a></li>
						    </ul>
						  </li>
						  <li><a href = "#">Buy</a></li>
						  
						  
					   </ul>
				   
				   </div>
				   
				   
			</div>
			
		</div>
		
		<div id="test3" class = "container">
		    <h1>New Arrival</h1>
		    <div class = "row">
			  <div class = "col-md-3 column">
				<img alt="140x140" src="img/alrocco1.jpg">
				<div><audio src="mp3/rm.mp3" preload="none"></audio></div>
			    <h3><a href = "#">Jetlag</a></h3> <h4><a href = "#"> Al Rocco</a></h4>
				<div class="pull-left"><a class = "btn btn-info">$5.00</a></div>
                <div class="pull-right"><a href = "#" class = "btn btn-warning">Available Now! </a></div>
			  </div>
			  <div class = "col-md-3 column">
				<img alt="140x140" src="img/alrocco3.jpg">
				<div><audio src="mp3/ai.mp3" preload="auto"  autoplay="autoplay" loop="loop"></audio></div>
			    <h3><a href = "#">Ain't nobody got it</a></h3> <h4><a href = "#"> Al Rocco</a></h4>
                <div class="pull-left"><a class = "btn btn-danger">$3.00</a></div>
                <div class="pull-right"><a href = "#" class = "btn btn-warning">Pre-order </a></div>
			  </div>
			  <div class = "col-md-3 column">
				<img alt="140x140" src="img/alrocco2.jpg">				
				<div><audio src="mp3/turntup.mp3" preload="none" ></audio></div>
			    <h3><a href = "#">Turnt up</a></h3> <h4><a href = "#"> Al Rocco</a></h4>
                <div class="pull-left"><a class = "btn btn-info">$5.00</a></div>
                <div class="pull-right"><a href = "#" class = "btn btn-warning">Available Now! </a></div>
			  </div>
			  <div class = "col-md-3 column">
				<img alt="140x140" src="img/alrocco4.jpg">
				<div><audio src="mp3/hl.mp3" preload="none"></audio></div>
			    <h3><a href = "#">High Low</a></h3> <h4><a href = "#"> Al Rocco</a></h4>
                <div class="pull-left"><a class = "btn btn-info">$5.00</a></div>
                <div class="pull-right"><a href = "#" class = "btn btn-warning">Pre-order </a></div>
			  </div>
			</div>
		  </div>
        
		<div id="test4" class = "container">
			<h1>Popular</h1>
		    <div class = "row">
			  <div class = "col-md-3 column">
				<img alt="140x140" src="img/Kt.jpg">
			    <h3><a href = "#">99 Problems(Remix)</a></h3> <h4><a href = "#"> K Theory</a></h4>
                <div class="pull-right"><a href = "#" class = "btn btn-info">Coming soon </a></div>
			  </div>
			  <div class = "col-md-3 column">
				<img alt="140x140" src="img/Kt2.jpg">
			    <h3><a href = "#">Serial Killer(Remix)</a></h3> <h4><a href = "#"> K Theory</a></h4>
                <div class="pull-left"><a class = "btn btn-danger">$3.00</a></div>
                <div class="pull-right"><a href = "#" class = "btn btn-warning">Available Now! </a></div>
			  </div>
			  <div class = "col-md-3 column">
				<img alt="140x140" src="img/Kt3.jpg">
			    <h3><a href = "#">UBS (2013 VIP Mix)</a></h3> <h4><a href = "#"> K Theory</a></h4>
                <div class="pull-right"><a href = "#" class = "btn btn-info">Coming soon </a></div>
			  </div>
			  <div class = "col-md-3 column">
				<img alt="140x140" src="img/Kt4.jpg">
			    <h3><a href = "#">Trouble</a></h3> <h4><a href = "#"> K Theory</a></h4>
                <div class="pull-right"><a href = "#" class = "btn btn-info">Coming soon </a></div>
			  </div>
			</div>
		 </div>
		
		<div id="test5" class = "container">
			<h1>Recommended</h1>
		    <div class = "row">
			  <div class = "col-md-3 column">
				<img alt="140x140" src="img/Jbo.jpg">
			    <h3><a href = "#">World Wide</a></h3> <h4><a href = "#"> J.Bo Escobar</a></h4>
                <div class="pull-right"><a href = "#" class = "btn btn-info">Coming soon </a></div>
			  </div>
			  <div class = "col-md-3 column">
				<img alt="140x140" src="img/Jbo1.jpg">
			    <h3><a href = "#">Bad B!tch feat. Alrocco</a></h3> <h4><a href = "#"> J.Bo Escobar</a></h4>
                <div class="pull-right"><a href = "#" class = "btn btn-info">Coming soon </a></div>
			  </div>
			  <div class = "col-md-3 column">
				<img alt="140x140" src="img/Jbo2.jpg">
			    <h3><a href = "#">Smoke Fly feat.  Alrocco</a></h3> <h4><a href = "#"> J.Bo Escobar</a></h4>
                <div class="pull-right"><a href = "#" class = "btn btn-info">Coming soon </a></div>
			  </div>
			  <div class = "col-md-3 column">
				<img alt="140x140" src="img/Jbo3.jpg">
			    <h3><a href = "#">CHAPLIN MIXTAPE</a></h3> <h4><a href = "#"> J.Bo Escobar</a></h4>
                <div class="pull-right"><a href = "#" class = "btn btn-info">Coming soon </a></div>
			  </div>
			</div>
		  </div> 
		
		<div id="test6" class = "container">
		    <h1>About</h1>
		    <div class = "row">
			  <div class = "col-md-4">
			    <h3>Project Description</h3> 
				<p>Developed with WAMP by Duoling Liang</p>
				<p>Instructor: Maria</p>
				<p>Music Store</p>
			  </div>
			  <div class = "col-md-4">
			    <h3>Address</h3> 
				<p>500 El Camino Real</p>
				<p>Santa Clara, CA 95053</p>
				<p>United States</p>
			  </div>
			  <div class = "col-md-4">
			    <h3>Contact</h3> 
				<p>dliang@scu.edu</p>
				
			  </div>
			</div>
		  </div> 

		  <div class = "modal fade" id = "contact" role = "dialog">
			<div class = "modal-dialog">
				<div class = "modal-content">
					<form class = "form-horizontal">
						<div class = "modal-header">
							<h2>Contact Me</h2>
						</div>
						<div class = "modal-body">
							<div class="form-group">
								<label for ="contact-name" class ="col-lg-2 control-label"></label>
								<input tpe = "name" class ="form-control" id = "contact-name" placeholder = "your name">
							</div>
							<div class="form-group">
								<label for ="contact-email" class ="col-lg-2 control-label"></label>
								<input tpe = "email" class ="form-control" id = "contact-email" placeholder = "your@example.com">
							</div>
							<div class="form-group">
								<label for ="contact-msg" class ="col-lg-2 control-label"></label>

									<textarea class = "form-control" row = "8" placeholder = "No more than 225 words."></textarea>

							</div>
						</div>
						<div class = "modal-footer">
							<a class = "btn btn-default" data-dismiss = "modal">Close</a>
							<button class = "btn btn-primary" type = "submit">Send</button>
						</div>
					</form>
				</div>
			</div>
		  </div>
		  

		  <script src = "http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
		  <script src = "js/bootstrap.js"></script>
		  <script src = "js/bootstrap-hover-dropdown.js"></script>
		  
		  <script type="text/javascript" src="js/scrolld.js"></script>
		  
		  <script type = "text/javascript">
		  
             var $ = jQuery.noConflict();
             $(document).ready(function() { 
             $('#myCarousel').carousel({ interval: 3000, cycle: true });
             }); 
          </script>
		  <script type="text/javascript">
             $("[id*='Btn']").stop(true).on('click',function(e){e.preventDefault();$(this).scrolld();});
          </script>
	</body>
</html>