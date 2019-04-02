
<?php 
use Illuminate\Http\Request;

/*Start Feedback Table:Data Retrive*/
$id=session()->get('id');
$name=session()->get('name');
$message=session()->get('message');
/*End FEEDBACK Table:Data Retrive*/


/*Start ORDERS Table:Data Retrive*/
$id=session()->get('id');
$name=session()->get('name');
$address=session()->get('address');
$date=session()->get('date');
$foodnumber=session()->get('foodnumber');
$time=session()->get('time');
$person=session()->get('person');
/*End ORDERS Table:Data Retrive*/

/*Start RESERVATION Table:Data Retrive*/
$id=session()->get('id');
$name=session()->get('name');
$email=session()->get('email');
$phone=session()->get('phone');
$person=session()->get('person');
$date=session()->get('date');
$occation=session()->get('occation');
$request=session()->get('request');
/*End RESERVATION Table:Data Retrive*/

$feedback=\DB::table('feedback')->get(); /*feedback table connection to the database*/
$orders=\DB::table('orders')->get(); /*orders table connection to the database*/

$reservations=\DB::table('reservations')->get();
 ?>

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
							<a href="#">THE ShahiBian</a>
						</div>
					</div>
					<div class="col-lg-10 col-md-11 col-sm-11">
						<div id="navbar" class="content">
							<div class="row">
								<div class="menu">
									<ul class="nav">
										<li class="current"><a href="#contact">{{ Auth::user()->name }}</a></li>
									</ul>
								</div>
								<div class="menu_link">
                                        
                                        <a class="dropdown-item link" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                       <i class="fas fa-portrait"></i> {{ __('Logout') }}
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
					<div class="col-2">
						<div class="users_view_left">
							<ul>
								<li id="my_info">booked table</li>
								<li id="blood_posts">Orderd food</li>
								<li id="users_message">users message</li>
							</ul>
						</div>
					</div>
					<div class="col-10">
						<div class="users_view_right_info" id="users_view_right_info">
							<div class="hello_massage">
								<h1>hello admin !<br/>{{ Auth::user()->name }}</h1>
							</div>
							 <h3 style="color:red;text-align: center">{{Session::get('message')}}</h3>
							<table class="table table-dark table-striped">
								<tr>
									<th>ID</th>
									<th>Name</th>
									<th>Email</th>
									<th>Phone Number</th>
									<th>Person</th>
									<th>Expected date</th>
									<th>Occation</th>
									<th>Special request</th>
									<th>Edit</th>
									<th>Delete</th>
									
								</tr>
								<?php $i=1;
									foreach ($reservations as $data):
							 	?>
								<tr>
									<td>{{$i}}</td>
									<td>{{$data->name}}</td>
									<td>{{$data->email}}</td>
									<td>{{$data->phone}}</td>
									<td>{{$data->person}}</td>
									<td>{{$data->date}}</td>
									<td>{{$data->occation}}</td>
									<td>{{$data->request}}</td>
									<td><a href="{{url('/reservation/edit/'.$data->id)}}">Edit</a> </td>
									<td><a href="{{url('/reservation/delete/ '.$data->id)}}">Delete</a> </td>
								</tr>
								<?php 
							  		$i++;
							  		endforeach;
								?>
							</table>
						</div>
						<div class="users_view_right_posts" id="users_view_right_posts">
							<div class="hello_massage">
								<h1>hello admin!<br/>{{ Auth::user()->name }}</h1>
							</div>
							<h3 style="color:red;text-align: center">{{Session::get('message')}}</h3>
							<table class="table table-dark table-striped">
								<tr>
									<th>ID</th>
									<th>Name</th>
									<th>Address</th>
									<th>Date</th>
									<th>Food Number</th>
									<th>Time</th>
									<th>Person</th>
									<th>Edit</th>
									<th>Delete</th>
									
								</tr>
								<?php $i=1;
									foreach ($orders as $data):
							 	?>
								<tr>
									<td>{{$i}}</td>
									<td>{{$data->name}}</td>
									<td>{{$data->address}}</td>
									<td>{{$data->date}}</td>
									<td>{{$data->foodnumber}}</td>
									<td>{{$data->time}}</td>
									<td>{{$data->person}}</td>
									<td><a href="{{url('/order/edit/'.$data->id)}}">Edit</a> </td>
									<td><a href="{{url('/order/delete/ '.$data->id)}}">Delete</a> </td>
								</tr>
								<?php 
							  		$i++;
							  		endforeach;
								?>
							</table>
						</div>
						<div class="users_view_right_posts" id="admin_view_users_message">
							<div class="hello_massage">
								<h1>hello admin !{{ Auth::user()->name }}<br/>your message from customers.</h1>
							</div>
							<table class="table table-dark table-striped">
							  <h3 style="color:red;text-align: center">{{Session::get('message')}}</h3>
								<tr>
									<th>ID</th>
									<th>Name</th>
									<th>Email</th>
									<th>Users Message</th>			
									<th>Edit</th>
									<th>Delete</th>			
								</tr>
								 
							 <?php 
								 $i=1;
								foreach ($feedback as $data):
								?>
								<tr>
									<td>{{$i}}</td>
									<td>{{$data->name}}</td>
									<td class="text_transform_none"><i class="fa fa-envelope" aria-hidden="true"></i>{{$data->email}}</td>
									<td>{{$data->message}}</td>
									<td ><a href="{{url('/feedback/edit/'.$data->id)}}">Edit</a></td>
									<td ><a href="{{url('/feedback/delete/ '.$data->id)}}">Delete</a></td>
								</tr>
								<?php 
							  		$i++;
							  		endforeach;
								?>
							</table>
						</div>
					</div>
				</div>
			</div>
		</section>
		<footer class="footer_area">
			<div class="container">
				<div class="footer text-center">
					<h3>The Sahebian's</h3>
					<div class="footer_link row">
						<i class="fab fa-facebook-f"></i>
						<i class="fab fa-twitter"></i>
						<i class="fab fa-github"></i>
						<i class="fab fa-linkedin-in"></i>
					</div>
					<p>&copy copyright - the shihibian - developed by <a href="https://github.com/jamil-rabbii">Jamil</a> & <a href="https://github.com/jamil-rabbii">Tahuid</a></p>
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