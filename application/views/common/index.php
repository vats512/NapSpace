<script type="text/javascript">
$('.people_div').scroll(
function()
{
	$('.lister').fadeIn();
	
});

</script>
<style type="text/css">
	body
	{
		background-image: url("/hhspg/img/banner.jpg"); 
		-webkit-background-size: 100% 40%;
		-moz-background-size: 100% 40%;
		-o-background-size: 100% 40%;
		background-size: 100% 40%;
		background-repeat: no-repeat;
	}
	#bottom_div
	{
		background: #fafafa;
		overflow-y: auto;
		padding: 20px 0px;

	}
	.why_div
	{
		padding-top: 20px;
		background: #fff;
		overflow-y: auto;
		padding-bottom: 10px;

	}
	.border-left
	{
		border-left:  1px solid #ccc;
	}
	.city_div
	{
		cursor: pointer;
	}
	.city_div:hover img
	{
		 opacity: 0.8;
	}
	.city_txt
	{
		color: white;
		position: absolute;
		z-index: 5;
		left: 15%;
		top: 20%;
	}
	.description
	{
		display: none;
	}
	.explore_div
	{
		display: none;
	}
	.work_div
	{
		background-image: url("/hhspg/img/how.png"); 
		transition: background 1s linear;
		min-height:400px;

	}
	.people_div
	{
		background-image: url("/hhspg/img/why.png"); 
		
		min-height:400px;	
	}
	.owner_div
	{
		background-image: url("/hhspg/img/for.png"); 
		min-height:400px;	
	}
</style>
<script type="text/javascript" src="js/typed.js"></script>
<script type="text/javascript" src="js/index.js"></script>
<link rel="stylesheet" type="text/css" href="css/font-awesome.css">

<div class="container-fluid" id="center">
	<div id="intro_container">
		<h1 class="text-center welcome" style="color:black">Rent. Simply. Smartly.</h1>
		<h3 class="text-center" id="anim_header">
			<span id="type_anim_1"></span>
			<span id="type_anim_2"></span>
		</h3>
	</div>
	<div id="search_container">
		<form action="home/search" method="GET" id="search_form">
			<div id="city_div" class="pull-left">
				<select class="center_input" name="city" id="city" data-placeholder="City">
					<option value="Ahmedabad" selected>Ahmedabad</option>
					<option value="Jaipur">Jaipur</option>
					<option value="Kota">Kota</option>
				</select>
			</div>
			<div id="area_div" class="pull-left">
				<input type="search" class="center_input" name="area" id="area" placeholder="Search by locality..." autocomplete="off" autofocus="true" />
				<div id="search_list" style="display: none">
					
				</div>
			</div>
			<div id="gender_div" class="pull-left">
				<select class="center_input" name="gender" id="gender" placeholder="Homes for..">
					<option value="">Homes for..</option>
					<option value="male">&#9794; Male</option>
					<option value="female">&#9792; Female</option>
				</select>
			</div>
			<div id="search_btn_div" class="pull-left">
				<button type="button" id="search_pgs" class="btn center_input" style="background:#2e64ba">
					<span class="glyphicon glyphicon-search"></span>
					 Search
				</button>
			</div>
		</form>
	</div>
</div>

	<div class="col-sm-2 col-sm-offset-10"><a href="owner"><img src="img/owner.png"/></a></div>
<div class="clearfix"></div><br/>
<div id="bottom_div" style="background: #fafafa">
	<h1 class="text-center">Our cities</h1>
	<br>

	<div class="col-sm-12">
		<div class="col-sm-offset-1 col-sm-3 city_div">
			<h1 class="city_txt">Ahmedabad</h1>
			<img src="img/ahmedabad.jpg" style="height: 200px; width: 250px;"/>
			<p class="description">
				Amongst the whistling packages of the IIM students, and the hustling midnight munchies of Manekchowk, in business capital state of the country (yes, Gujarat) resides the city of Karnavati. Wait, what? Well, that’s what the ace town of Ahmedabad was known by, until the 1400s, when Ahmed Shah I conquered the town and named it ‘Ahmedabad’. 

				Now, the stats that Ahmedabad is the 7th most populated city in the country. What you should know, is why should Ahmedabad be considered, or wait, known as the best city to live in India because its humble, authentic, modern, 
				divine, active, educational hub, alcohol free and beautiful.
				
				So if you are moving to Ahmedabad or planning to do so for any of reason we are here to serve you the right accommodation at right place at right price. 

			</p>
			<div class="explore_div">
				<br/>
				<div class="col-sm-offset-4 col-sm-4">
					<a href="home/search?city=Ahmedabad">
						<button class="btn btn-info">
							Explore 
							<span class="glyphicon glyphicon-share"></span>
						</button>
					</a>
				</div>
			</div>
		</div>
		<div class="col-sm-offset-1 col-sm-3 city_div">
			<h1 class="city_txt">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Jaipur</h1>
			<img src="img/jaipur.jpg" style="height: 200px; width: 250px;"/>
			<p class="description">
				Jaipur  founded by the king Maharaja Sawai Jai Singh which gave the city it’s name – JAIPUR. The capital of the largest state of India – Rajasthan, is not only famous for it’s rich history but also for it’s rich culture and heritage that included several palaces and forts. The largest city of Royal state of Rajasthan was painted for the British Royal visit. The walls of this classic holiday destination are enriched with the melodious art that speaks more about the richness of its history. What you should know, is why should Jaipur be considered, or wait, known as the best city to live in.
So if you are going for college or searching out a job, whether you are foodie or not, whether you love shopping or not. This city fits in all culture so if planning to move we are here to serve you right accommodation at right place at right price.

			</p>
			<div class="explore_div">
				<br/>
				<div class="col-sm-offset-4 col-sm-4">
					<a href="home/search?city=Jaipur">
						<button class="btn btn-info">
							Explore 
							<span class="glyphicon glyphicon-share"></span>
						</button>
					</a>
				</div>
			</div>	
		</div>
		<div class="col-sm-offset-1 col-sm-3 city_div">
			<h1 class="city_txt">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Kota</h1>
			<img src="img/kota.jpg" style="height: 200px; width: 250px;"/>
			<p class="description">
Kota stands in the first place when it comes to education. Apart from the coaching institutes, Kota is home for three distinctive universities which includes; University of Kota, Rajasthan Technical University and Vardhman Mahaveer Open University. Besides, it also consists of 1 private dental college, 1 government medical college, 15 general colleges, 6 engineering colleges and several MBA colleges.
All this happened in the last three decades. And needless to say, the best results of IIT, JEE, medical and engineering entrance exams are scored only by students from Kota. Kota’s coaching centers claim to have produced close to one-third of all students selected to the country’s IITs and every year at least a couple of students make it to the top ten of the all-important All India Rank or AIR.
If planning to move in this education hub we are here to serve you right accommodation at right place at right price.
			</p>
			<div class="explore_div">
				<br/>
				<div class="col-sm-offset-4 col-sm-4">
					<a href="home/search?city=Kota">
						<button class="btn btn-info">
							Explore 
							<span class="glyphicon glyphicon-share"></span>
						</button>
					</a>
				</div>
			</div>	
		</div>
	</div>
</div>
<div class="work_div col-sm-12">
	<div class="col-sm-offset-4">
		<h1 style="color:black;font-family: calibri">How it works?</h1>
	</div>
	<br>
	<div class="col-sm-4">
		<ul class="lister" style="color:black;font-size:30px;line-height:200%;font-weight:bolder;">
			<li>Choose city</li>
			<li>Choose locality</li>
			<li>Find a perfect home</li>
			<li>Login to find details</li>
			<li>Schedule a visit</li>

		</ul>

	</div>
</div>
<div class="people_div col-sm-12">
	<div class="col-sm-offset-4">
		<h1 style="color:white;font-family: calibri">Why people love NapSace?</h1>
	</div>
	<br>
	<div class="col-sm-4">
		<ul class="lister" style="color:white;font-size:30px;line-height:200%">
			<li>Hassle free</li>
			<li>Affordable for singles</li>
			<li>Ready to move</li>
			<li>Flexibility to visit</li>
			<li>No brokerage</li>

		</ul>

	</div>
</div>
<div class="owner_div col-sm-12">
	<div class="col-sm-offset-3">
		<h1 style="color:black;font-family: calibri">For owners</h1>
	</div>
	<br>
	<div class="col-sm-4">
		<ul class="lister" style="color:black;font-size:30px;line-height:200%;font-weight:bolder;">
			<li>Monetise your space</li>
			<li>Get details of tenants online</li>
			<li>One month free trial</li>
			<li>No brokerage</li>
			<li>Easy way for marketing</li>

		</ul>

	</div>
</div>