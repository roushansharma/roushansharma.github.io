<!DOCTYPE html> 
<html>
<head>
	<title>404 - Page not found</title>
	<meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
	<link rel="icon" href="img/roushan_logo.jpg" />
	<style type="text/css">
		*{
			margin: 0px;
			padding: 0px;
		}
		body {
    background: #FFBE00;
    font-family: 'Roboto', sans-serif;
}
.page_not_found {
    text-align: center;
    background-image: url(./img/background-1.jpg);
    background-repeat: no-repeat;
    background-position: center center;
    background-size: cover;
    height: 100vh;
}
.page_not_found h2 {
    text-transform: uppercase;
    padding-top: 10%;
    color: #18191d;
    font-weight: 700 !important;
    font-size: 3rem;
}
.page_not_found p{
	color: #535353;
    font-size: 15px;
    margin-top: 15px;
}
 .count_list {
    width: 50%;
    margin: auto;
}
.count_list li {
    display: inline-block;
    float: left;
    width: 25%;
    margin-top: 14%;
}
.count_list li h2 {
    font-size: 70px;
    line-height: normal;
    transition: 1s;
}
.count_list li p{

}
.count_list li p {
    color: #232323;
    font-size: 14px;
    line-height: normal;
    text-align: center;
    text-transform: uppercase;
    margin: 0 0 0 0;
    transition: 1s;
    font-weight: 500;
    margin-top: 10px;
}
@media only screen and (max-width: 920px){
	.count_list{
		width: 100%;
		text-align: center;
	}
	.count_list li { 
    width: 50%;
    margin-top: 5%;
}
.page_not_found h2 {
    font-size: 40px;
    width: 90%;
    margin: auto;
    padding-top: 20%;
}
.page_not_found p {
    width: 85%;
    margin: auto;
    margin-top: 20px;
    line-height: 25px;
}



}
	</style>
 
</head>
<body>

<div class="page_not_found">
	<h2>Coming Soon</h2>
	<p>Stay tuned, We are working on our website and will be back shortly.</p>
	<ul class="count_list">
		<li class="countdown__days">
			<h2 class="number"></h2>
			<p>Days</p>
		</li>
		<li class="countdown__hours">
			<h2 class="number">00</h2>
			<p>Hours</p>
		</li>
		<li class="countdown__minutes">
			<h2 class="number">00</h2>
			<p>Minutes</p>
		</li>
		<li class="countdown__seconds">
			<h2 class="number">00</h2>
			<p>Seconds</p>
		</li>
	</ul>
</div>
<script>
// setTimeout(function(){ 
// 	window.location.href = 'index.php';         
// }, 5000);      </script>

<script type="text/javascript">
	(function () {
  // Specify the deadline date
  var deadlineDate = new Date('February 10, 2020 10:30:00').getTime(); // Cache all countdown boxes into consts

  var countdownDays = document.querySelector('.countdown__days .number');
  var countdownHours = document.querySelector('.countdown__hours .number');
  var countdownMinutes = document.querySelector('.countdown__minutes .number');
  var countdownSeconds = document.querySelector('.countdown__seconds .number'); // Update the count down every 1 second (1000 milliseconds)

  setInterval(function () {
    // Get current date and time
    var currentDate = new Date().getTime(); // Calculate the distance between current date and time and the deadline date and time

    var distance = deadlineDate - currentDate; // Calculations the data for remaining days, hours, minutes and seconds

    var days = Math.floor(distance / (1000 * 60 * 60 * 24));
    var hours = Math.floor(distance % (1000 * 60 * 60 * 24) / (1000 * 60 * 60));
    var minutes = Math.floor(distance % (1000 * 60 * 60) / (1000 * 60));
    var seconds = Math.floor(distance % (1000 * 60) / 1000); // Insert the result data into individual countdown boxes

    countdownDays.innerHTML = days;
    countdownHours.innerHTML = hours;
    countdownMinutes.innerHTML = minutes;
    countdownSeconds.innerHTML = seconds;
  }, 1000);
})();
</script>
</body>
</html>