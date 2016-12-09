<!doctype html>
<html lang="fr">

<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Site officiel de la république des lamas</title>

<link href="style.css" rel="stylesheet" type="text/css" />
</head>

<body>
<?php>
$bdd = new PDO('mysql:host=localhost;dbname=test;charset=utf8', 'root', '');
<?>
<div id="slide1">

<div class="slide_inside">

<img  id="achirac" src="chirac.png" alt="logo alsa    créations" />	

</div> <!--.slide_inside-->	 

</div>


<div id="slide2">

<div class="slide_inside">

<h2>Bienvenue sur le site officiel <br/>de la république des lamas</h2>

<p>
<?php> 
$texte = $bdd->query('SELECT text_contenu FROM site');
echo $texte;

<?>
</p>
</div>   	

</div> 


<div id="slide3">
<div class="slide_inside">
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2628.6435009721163!2d2.361511715557911!3d48.788695879280645!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e673e24e04a9c3%3A0xc55cb3e676f95321!2sEfrei!5e0!3m2!1sfr!2sfr!4v1480691151748" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
<div class="textmap">
<h2>Addresse</h2>
<p>30-32 Avenue de la République <br> 94800 Villejuif</p>
</div>
</div>
</div>
<script>
var bottom_base = 0;
var opacity_base = 1;
var oldpos = 0;
window.onscroll = function() {myFunction()};

function myFunction() {

	var chirac = document.getElementById("achirac");
	var pos = window.pageYOffset;
	if (pos > oldpos)
	{
		if (opacity_base > 0)
		{
			opacity_base = 1 - (0.01*window.pageYOffset);
			bottom_base = 0 - (5*window.pageYOffset);
		}
	//	console.log(bottom_base);
		chirac.style.bottom = bottom_base + "px";
		chirac.style.opacity = opacity_base;
	//	console.log("up");
	}
	else if (pos < oldpos) 
	{
		if (opacity_base < 1)
		{
			opacity_base = 1 - (0.01*window.pageYOffset);
			bottom_base = 0 - (5*window.pageYOffset);

		}
	//	console.log(bottom_base);
		chirac.style.bottom = bottom_base + "px";
		chirac.style.opacity = opacity_base;
	//	console.log("down");
	}
	oldpos = pos;
//	console.log(chirac.style.opacity);
	console.log(chirac.style.bottom);
}
</script>
</body>
</html>
