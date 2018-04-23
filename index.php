<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Dashboard</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">

	<!-- Font Awesome -->
	<link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	
    <!-- Animation -->
	<link href="css/animate.css" rel="stylesheet" />
	
    <!-- MyTemplate CSS -->
    <link href="css/style.css" rel="stylesheet">
<style>	
.myButt {
  outline: none;
  border: none;
  padding: 20px;
  display: block;
  margin: 50px auto;
  cursor: pointer;
  font-size: 20px;
  background-color: transparent;
  position: relative;
  border: 2px solid #fff;
  transition: all 0.5s ease;
  -webkit-transition: all 0.5s ease;
  -moz-transition: all 0.5s ease;
  -o-transition: all 0.5s ease;
  -ms-transition: all 0.5s ease;
}
#bg{
    background-color:gray;
    
}
main
{
    background-color:gray;
}
.one {
  border-color: #fff;
  overflow: hidden;
  color: #fff;
}
.one .insider {
  background-color: #fff;
  width: 100%;
  height: 20px;
  position: absolute;
  left: -135px;
  transform: rotateZ(45deg);
  -webkit-transform: rotateZ(45deg);
  -moz-transform: rotateZ(45deg);
  -o-transform: rotateZ(45deg);
  -ms-transform: rotateZ(45deg);
}
.one:hover {
  background-color: #F44336;
  border-color: #fff;
  color: #fff;
}
.one:hover .insider {
  transition: all 0.3s ease;
  -webkit-transition: all 0.3s ease;
  -moz-transition: all 0.3s ease;
  -o-transition: all 0.3s ease;
  -ms-transition: all 0.3s ease;
  left: 135px;
}

.two {
  color: #fff;
}
.two:hover {
  border-color: #F44336;
  color: #F44336;
  animation: shakeThatBooty 0.3s linear 1;
  -webkit-animation: shakeThatBooty 0.3s linear 1;
  -moz-animation: shakeThatBooty 0.3s linear 1;
  -o-animation: shakeThatBooty 0.3s linear 1;
  -ms-animation: shakeThatBooty 0.3s linear 1;
}

@keyframes shakeThatBooty {
  33% {
    transform: rotateZ(10deg);
    -webkit-transform: rotateZ(10deg);
    -moz-transform: rotateZ(10deg);
    -o-transform: rotateZ(10deg);
    -ms-transform: rotateZ(10deg);
  }
  67% {
    transform: rotateZ(-10deg);
    -webkit-transform: rotateZ(-10deg);
    -moz-transform: rotateZ(-10deg);
    -o-transform: rotateZ(-10deg);
    -ms-transform: rotateZ(-10deg);
  }
  100% {
    transform: rotateZ(10deg);
    -webkit-transform: rotateZ(10deg);
    -moz-transform: rotateZ(10deg);
    -o-transform: rotateZ(10deg);
    -ms-transform: rotateZ(10deg);
  }
}
.three {
  color: #fff;
  border-color: transparent;
}
.three:before, .three:after {
  width: 0;
  height: 3px;
  content: " ";
  background-color: #F44336;
  position: absolute;
  top: 0;
  left: 50%;
  transition: all 0.3s ease;
  -webkit-transition: all 0.3s ease;
  -moz-transition: all 0.3s ease;
  -o-transition: all 0.3s ease;
  -ms-transition: all 0.3s ease;
}
.three:after {
  top: 100%;
}
.three:hover {
  letter-spacing: 8px;
  color: #F44336;
}
.three:hover:before, .three:hover:after {
  width: 100%;
  left: 0;
}
.three:hover:after {
  width: 100%;
  left: 0;
}

.four {
  overflow: hidden;
}
.four span {
  color: #fff;
  display: inline-block;
  transition: all 0.3s ease;
  -webkit-transition: all 0.3s ease;
  -moz-transition: all 0.3s ease;
  -o-transition: all 0.3s ease;
  -ms-transition: all 0.3s ease;
}
.four .icon {
  position: absolute;
  left: -60px;
  top: 0;
  color: #fff;
  padding: 20px;
  background-color: #F44336;
  transition: all 0.3s ease;
  -webkit-transition: all 0.3s ease;
  -moz-transition: all 0.3s ease;
  -o-transition: all 0.3s ease;
  -ms-transition: all 0.3s ease;
}
.four:hover .icon {
  left: 0px;
}
.four:hover span {
  color: #F44336;
  margin-left: 50px;
}

.five {
  overflow: hidden;
  color: #fff;
}
.five .layer {
  color: #fff;
  position: absolute;
  top: -70px;
  width: 100%;
  left: 0;
  padding: 20px 0;
  background-color: #F44336;
  transition: all 0.3s ease;
  -webkit-transition: all 0.3s ease;
  -moz-transition: all 0.3s ease;
  -o-transition: all 0.3s ease;
  -ms-transition: all 0.3s ease;
}
.five:hover .layer {
  top: 0;
}

</style>
</head>

<body>

	<header id="header-banner">
		<nav class="navbar navbar-default navbar-fixed-top fadeIn" role="navigation">
			<div class="container">
				
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#dropdown-box-1">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<div class="navbar-brand">
						<a href="#">Simcoe muskoka</a>
					</div>
				</div>
				
				<!-- Collect the nav links and other content for toggling -->
				<div class="collapse navbar-collapse navbar-right" id="dropdown-box-1">
				<ul class="nav navbar-nav">
						<li><a href="https://t2.phplivesupport.com/200375566">Live Support</a></li>
						<li><a href="pm/index.php">Live Chat</a></li>
					
				</div>
				
			</div> <!-- /.container -->
		</nav> <!-- /.nav -->
	</header>
		
	<!-- banner -->
    <section class="banner" id="home">
		<div class="container">
			<div class="slogan">
				<h2>Job Fair</h2>
				<h4>Dashboard</h4>
			</div>
			
			<div class="btn-circle-scroll fadeIn">
				<a href="#section-footer" class="btn-circle">
					<i class="fa fa-angle-double-down animated"></i>
				</a>
			</div>
			
		</div>
    </section>
	<!-- /.banner -->

	<!-- aboutus -->
    <section class="aboutus" id="aboutus">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<div class="wow bounceInLeft" data-wow-delay="0.1s"> 
						<h2>Jobs on your site</h2> 
					</div>
					<div class="col-sm-7">
                    <div class="container">
                    <form action="search.php" method="GET">
        <input type="text" name="query" />
        <input type="submit" value="Search" />
    </form>

            <div class="row">
                <table class="table table-striped table-bordered">

                  <thead>
                    <tr>
                      <th>Name</th>
                      <th>Job description</th>
                      <th>Salary</th>
                      <th>Action</th>

                    </tr>
                  </thead>
                  <tbody>
                  <?php
                   include 'jobs.php';
                   $pdo = Database::connect();
                   $sql = 'SELECT * FROM customers ORDER BY id DESC';
                   foreach ($pdo->query($sql) as $row) {
                            echo '<tr>';
                            echo '<td>'. $row['name'] . '</td>';
                            echo '<td>'. $row['description'] . '</td>';
                            echo '<td>'. $row['salary'] . '</td>';
                            echo '<td width=200>';
                            echo '<a class="btn" href="read.php?id='.$row['id'].'">Read</a>';
                            echo ' ';
                            echo '<a class="btn btn-danger" href="delete.php?id='.$row['id'].'">Delete</a>';
                            echo '</td>';
                            echo '</tr>';
                   }
                   Database::disconnect();
                  ?>
                  </tbody>
            </table>
        </div>
    </div> <!-- /container -->
                    </div>
                    <br>
                    <br>
                    <br>
					<div class="col-sm-5" id="bg">
				<button class='myButt one'>
		<div class='insider'></div>
        <a href="https://calendar.google.com/calendar/b/1/r">Calender</a>

    </button>
    <center><h2>Edit your Calendar</h2></center>
					</div>
				</div>				
			</div>
		</div>
	</section>
	<!-- /.aboutus -->
	
	<!-- services -->
    <section class="services" id="services">
		<div class="container">
			
			<div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<div class="wow bounceInLeft" data-wow-delay="0.1s">
					<h2>Download data</h2>
					</div>
				</div>				
			</div>
			
			<div class="row-padded" id="first"></div>
			<div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<div class="col-sm-7">
						<h4>job seeker</h4>
						<p>
                        <main class='container'>
	<button >
    <form method="post" action="export.php">
     <button class='myButt three' type="submit" name="export"  value="Export" />
     Active Job seekers data
     <button>
    </form>
		
</main>
                </p>
					</div>
					
					
				</div>				
			</div>
			
			<div class="row-padded" id="second"></div>
			<div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<div class="col-sm-7">
						<h4>Jobs</h4>
						<p>
                        <main class='container'>
												<form method="post" action="export1.php">
												<button class='myButt three' type="submit" name="export"  value="Export" />
												Download Jobs Data
												<button>
											 </form>
</main>
                </p>
					</div>
					
					
				</div>				
			</div>
			
			<div class="row-padded" id="third"></div>
			<div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<div class="col-sm-7">
						<h4>Employer</h4>
						<p>
						<main class='container'>
												<form method="post" action="export1.php">
												<button class='myButt three' type="submit" name="export"  value="Export" />
												Download 
												<button>
											 </form>
</main>
						</p>
					</div>
					
					<div class="col-sm-5">
						<div class="avatar">
							<div class="wow fadeIn" data-wow-delay="0.2s">
							
							</div>
						</div>
					</div>
				</div>				
			</div>
		
		</div>
	</section>
	<!-- /.services -->
	<!-- testimonials -->
    <section class="testimonials">
		<div class="container">
			
		
	<!-- /.contact us -->
	
	<!-- footer -->
	<footer id="section-footer">
		<div class="container">
			<div class="row">
				<div class="col-md-12 col-lg-12">
					<div class="wow fadeIn" data-wow-delay="0.4s">
						<div class="btn-circle-scroll">
							<a href="#header-banner" class="btn-circle">
								<i class="fa fa-angle-double-up animated"></i>
							</a>
						</div>
					</div>
				</div>
			</div>	
		</div>
	</footer>
	<!-- /.footer -->
	
	
	<!-- Core JavaScript Files -->
	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.easing.min.js"></script>	
	<script src="js/jquery.scrollTo.js"></script>
	<script src="js/wow.min.js"></script>			<!-- Reveal animation when you scroll by wow.js. It need animate.css library -->
	<!-- Custom Theme JavaScript -->
	<script src="js/custom.js"></script>

</body>

</html>
