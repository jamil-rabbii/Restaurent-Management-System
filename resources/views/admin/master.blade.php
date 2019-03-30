<!DOCTYPE HTML>
<html lang="en-US">
	<head>
		<title>ADMIN</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!--Google Font-->
		<!-- <link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet"> -->
		<!--Font-Awsome-->
		<link rel="stylesheet" href="{{asset('dashboard')}}/assets/css/all.min.css">
		<link rel="shortcut icon" href="{{asset('dashboard')}}/assets/img/TheShahibiens.jpg"/>
		<!--Bootstrap CSS-->
		<link rel="stylesheet" type="text/css" href="{{asset('dashboard')}}/assets/css/bootstrap.min.css"/>
		<!--My CSS-->
		<link rel="stylesheet" type="text/css" href="{{asset('dashboard')}}/assets/css/style.css"/>
		<!--Responsive CSS-->
		<link rel="stylesheet" type="text/css" href="{{asset('dashboard')}}/css/responsive.css"/>
	</head>
	<body>
	<header class="header_area">
		<div class="header">
			<div class="container">
				<div class="row">
					<div class="col-lg-2 col-md-1 col-sm-1">
						<div class="logo">
							<a href="#home"><span>THE Shahi</span>Bian</a>
						</div>
					</div>
					<div class="col-lg-10 col-md-11 col-sm-11">
						<div id="navbar" class="content">
							<div class="row">
								<div class="menu">
									<ul class="nav">
										<li class="current"><a href="#contact">profile</a></li>
									</ul>
								</div>
								<div class="menu_link">
                                        
                                        <a class="dropdown-item link" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                       <i class="fas fa-portrait"></i> {{ __('Logout from') }}  {{ Auth::user()->name }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>

									<!--<a href="#" class="link">log out <i class="fas fa-portrait"></i></a>-->
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>
	<section class="admin_view_area">
			<div class="container-fluid">
				<div class="row">
					<div class="col-3">
						<div class="users_view_left">
							<ul>
								<li id="my_info">booked table</li>
								<li id="blood_posts">Orderd food</li>
								<li id="users_message">users message</li>
							</ul>
						</div>
					</div>
					<div class="col-9">
						<div class="users_view_right_info" id="users_view_right_info">
							<div class="hello_massage">
								<h1>hello admin !</h1>
							</div>
							<table class="table table-dark table-striped">
							     <tr>
									<td>id</td>
									<td>1</td>
								</tr>
								<tr>
									<td>name</td>
									<td>jamil</td>
								</tr>
								<tr>
									<td>email</td>
									<td class="text_transform_none">jamil.rabbii@gmail.com</td>
								</tr>
								<tr>
									<td>phone number</td>
									<td>017*********</td>
								</tr>
								<tr>
									<td>person</td>
									<td class="text_transform_none">5</td>
								</tr>
								<tr>
									<td>expected date</td>
									<td>18/01/2020</td>
								</tr>
								<tr>
									<td>occation</td>
									<td>birthday</td>
								</tr>
								<tr>
									<td>special request</td>
									<td>nothing</td>
								</tr>
							</table>
							<div class="update">
									<a href="#" class="box_bttn">update</a>
							</div>
						</div>
						<div class="users_view_right_posts" id="users_view_right_posts">
							<div class="hello_massage">
								<h1>hello admin</h1>
							</div>
							<table class="table table-dark table-striped">
								<tr>
									<th>id</th>
									<th>name</th>
									<th>address</th>
									<th>date</th>
									<th>food number</th>
									<th>time</th>
									<th>person</th>
									<th>update</th>
									
								</tr>
								<tr>
									<td>2</td>
									<td>Tauhid</td>
									<td>akalia,sylhet</td>
									<td>20/10/2019</td>
									<td>5</td>
									<td>3:10 PM</td>
									<td>9</td>
									<td><a href="#">update</a> </td>
								</tr>
								<tr>
								    <td>3</td>
									<td>Jamil</td>
									<td>Beanibazar,sylhet</td>
									<td>18/01/2020</td>
									<td>7</td>
									<td>5:10 PM</td>
									<td>4</td>
									<td><a href="#">update</a> </td>
									
								</tr>
								
							</table>
						</div>
						<div class="users_view_right_posts" id="admin_view_users_message">
							<div class="hello_massage">
								<h1>hello admin !<br/>your message from customers.</h1>
							</div>
							<table class="table table-dark table-striped">
								<tr>
									<th>name</th>
									<th>email</th>
									<th>users message</th>			
									<th>update</th>			
								</tr>
								<tr>
									<td>najmin</td>
									<td class="text_transform_none"><a href="mailto:support@info.com"><i class="fa fa-envelope" aria-hidden="true"></i>saimanajin@gmail.com<a/></td>
									<td>food is good</td>
									<td ><a href="#">update</a> </td>
								</tr>
								
							</table>
						</div>
					</div>
				</div>
			</div>
		</section>
		<footer class="footer_area">
			<div class="container">
				<div class="footer text-center">
					<h3><span>Shahibian</span></h3>
					<div class="footer_link row">
						<i class="fab fa-facebook-f"></i>
						<i class="fab fa-twitter"></i>
						<i class="fab fa-github"></i>
						<i class="fab fa-linkedin-in"></i>
					</div>
					<p>&copy copyright - the shihibian - developed by <span>Jamil & Tahuid's</span> IT farm</p>
				</div>
			</div>
		</footer>
		<script type="text/javascript" src="{{asset('dashboard')}}/assets/js/jquery.min.js"></script>
		<script type="text/javascript" src="{{asset('dashboard')}}/assets/js/bootstrap.min.js"></script>
		<script src="{{asset('dashboard')}}/assets/js/wow.min.js"></script>
		<script type="text/javascript" src="{{asset('dashboard')}}/assets/js/main.js"></script>
		<script type="text/javascript">
			$(document).ready(function(){
				$("#my_info").click(function(){
					$("#users_view_right_posts").hide();
					$("#admin_view_users_message").hide();
					$("#users_view_right_info").show();
				});
				$("#blood_posts").click(function(){
					$("#users_view_right_posts").show();
					$("#users_view_right_info").hide();
					$("#admin_view_users_message").hide();
				});
				$("#users_message").click(function(){
					$("#users_view_right_posts").hide();
					$("#users_view_right_info").hide();
					$("#admin_view_users_message").show();
				});
				
			});
		</script>
	</body>
</html>