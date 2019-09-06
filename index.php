<?php
  $bg = array('bg-01.jpg', 'bg-02.jpg', 'bg-03.jpg', 'bg-04.jpg', 'bg-05.jpg', 'bg-06.jpg', 'bg-07.jpg', 'bg-08.jpg', 'bg-09.jpg', 'bg-10.jpg', 'bg-11.jpg', 'bg-12.jpg', 'bg-13.jpg', 'bg-14.jpg', 'bg-15.jpg', 'bg-16.jpg', 'bg-17.jpg', 'bg-18.jpg', 'bg-19.jpg', 'bg-20.jpg', 'bg-21.jpg', 'bg-22.jpg', 'bg-23.jpg', 'bg-24.jpg', 'bg-25.jpg', 'bg-26.jpg', 'bg-27.jpg', 'bg-28.jpg', 'bg-29.jpg', 'bg-30.jpg', 'bg-31.jpg', 'bg-32.jpg', 'bg-33.jpg' );

  $i = rand(0, count($bg)-1);
  $selectedBg = "$bg[$i]";
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>ejer | Homepage</title>
		<link rel="stylesheet" href="main.css">
		<meta name="description" content="A clean homepage with beautiful backgrounds, time, date and google search." />
		<meta name="google" content="notranslate" />
		<meta name="keywords" content="ejer, homepage, google, search, background, time, date">
		<link rel="shortcut icon" href="assets/images/icon.png">
		<link href="https://fonts.googleapis.com/css?family=Raleway:600" rel="stylesheet"> 
	</head>
	<script>
		function digi() {
		  var date = new Date(),
		      hour = date.getHours(),
		      minute = checkTime(date.getMinutes()),
		      ss = checkTime(date.getSeconds());

			var objToday = new Date(),
				weekday = new Array('Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday'),
				dayOfWeek = weekday[objToday.getDay()],
				domEnder = function() { var a = objToday; if (/1/.test(parseInt((a + "").charAt(0)))) return "th"; a = parseInt((a + "").charAt(1)); return 1 == a ? "" : 2 == a ? "" : 3 == a ? "" : "" }(),
				dayOfMonth = today + ( objToday.getDate() < 10) ? '0' + objToday.getDate() + domEnder : objToday.getDate() + domEnder,
				months = new Array('January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'),
				curMonth = months[objToday.getMonth()],
				curYear = objToday.getFullYear(),
				curHour = objToday.getHours() > 12 ? objToday.getHours() - 12 : (objToday.getHours() < 10 ? "0" + objToday.getHours() : objToday.getHours()),
				curMinute = objToday.getMinutes() < 10 ? "0" + objToday.getMinutes() : objToday.getMinutes(),
				curSeconds = objToday.getSeconds() < 10 ? "0" + objToday.getSeconds() : objToday.getSeconds(),
				curMeridiem = objToday.getHours() > 12 ? "PM" : "AM";
			var today = curMonth + " " + dayOfMonth + ", " + curYear;

			document.getElementsByTagName('h3')[0].textContent = today;

		  function checkTime(i) {
		    if( i < 10 ) {
		      i = "0" + i;
		    }
		    return i;
		  }

		if ( hour > 12 ) {
		  hour = hour - 12;
		  if ( hour == 12 ) {
		    hour = checkTime(hour);
		  document.getElementById("time").innerHTML = hour+":"+minute+":"+ss+" AM";
		  }
		  else {
		    hour = checkTime(hour);
		    document.getElementById("time").innerHTML = hour+":"+minute+":"+ss+" PM";
		  }
		}
		else {
		  document.getElementById("time").innerHTML = hour+":"+minute+":"+ss+" AM";;
		}
		var time = setTimeout(digi,1000);
		}
	</script>
	<body onload="digi()">
		<img src="assets/images/<?php echo $selectedBg; ?>">
		<div class="container">
			<h1 id="time"></h1>
			<h3 id="date"></h2>
			<form method="GET" action="https://www.google.com/search" autocomplete="off" class="form-box" id="formsearch">
	            <!-- <input autofocus="" type="text" name="q" size="35" maxlength="255" value="" placeholder="Search on Google..." id="forminput"> -->
	            <div class="group">  
		            <input required autofocus="" type="text" name="q" size="35" maxlength="255" value="" id="forminput">
				    <span class="highlight"></span>
				    <span class="bar"></span>
				    <label>Search on Google...</label>
		            <input type="hidden" name="hl" value="en">
		        </div>
	        </form>
		</div>
	</body>
</html>