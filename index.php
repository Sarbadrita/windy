<!DOCTYPE html>
<html>
	<!-- Windy 0.4 Initial -->
<head>
	<title>Windy</title>

	<!-- Style CSS -->
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Roboto:700|Poppins|Poppins:300|Raleway:300|Comfortaa|Satisfy|Quicksand|Poiret One|Raleway:500">
	<script src="https://kit.fontawesome.com/df1fe34d47.js" crossorigin="anonymous"></script>
</head>
<body>
<!-- Background Image -->
	<div class="bg"></div>
    <div class="header">
        <h1>Windy</h1>
	</div>
	
	<div class="search">
		<form autocomplete="off">
			<div class="autocomplete">
				<input id="inputloc" type="text" placeholder="Search location..." name="location">
				<button id="currentloc" type="button" onclick="getLocation()"><a><i class="fas fa-location-arrow"></i></a></button>
				<button id="subform" type="submit"><a><i class="fas fa-search"></i></a></button>
			</div>
		</form>
	</div>

	<div class="container">
		<!-- Weather Widget -->
		<div class="widget">
			<div class="left">
				<img src="images/cloud.svg" class="icon">
				<h5 class="weather-status">Partly Cloudy</h5>
			</div>
			<div class="right">
				<h5 class="city">Kolkata</h5>
				<h5 class="degree">12&#176;c</h5>
			</div>
			<div class="bottom">
				<div>
					Wind Speed <span>22 kmph</span>
				</div>
				<div>
					Cloud Cover <span>22%</span>
				</div>
				<div>
					Pressure <span>1010 mb</span>
				</div>
			</div>
		</div>
		<!-- End of weather widget -->
	</div>
    
    
    
    <div class="container2">
		<!-- Weather Widget -->
		<div class="widget2">
			<div class="mid">
				<h6>Wednesday</h6>
				<div>13&#176;c</div>
                <div >Clear</div>
            </div>
        </div>
    </div>
    <div class="container3">
		<!-- Weather Widget -->
		<div class="widget3">
			<div class="mid1">
                <h6>Thursday</h6>
				<div>11&#176;c</div>
                <div>Clear</div>
            </div>
        </div>
    </div>
    <div class="container4">
		<!-- Weather Widget -->
		<div class="widget4">
			<div class="mid2">
                <h6>Friday</h6>
				<div>15&#176;c</div>
                <div>Cloudy</div>
            </div>
        </div>
    </div>
    <div class="footer">
    	<h2>Hello! I am Windy</h2>
        <h2>your weather assistant, just ask me and get weather forcasts as fast as wind</h2>
	</div>
	
	<script src="app.js"></script>

</body>
</html>