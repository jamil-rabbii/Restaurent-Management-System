
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

/*Start Menu Table:Data Retrive*/
$id=session()->get('id');
$pictures=session()->get('pictures');
$PlatterName=session()->get('PlatterName');
$item_1=session()->get('item_1');
$price_1=session()->get('price_1');
$item_2=session()->get('item_2');
$price_1=session()->get('price_2');
$item_1=session()->get('item_3');
$price_1=session()->get('price_3');
$item_1=session()->get('item_4');
$price_1=session()->get('price_4');
$item_1=session()->get('item_5');
$price_1=session()->get('price_5');

/*End RESERVATION Table:Data Retrive*/


$feedback=\DB::table('feedback')->get(); /*feedback table connection to the database*/
$orders=\DB::table('orders')->get(); /*orders table connection to the database*/
$reservations=\DB::table('reservations')->get(); /*reservation table connection to the database*/
$menu=\DB::table('specialmenus')->get(); /*specialmenus table connection to the database*/
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

		<!--From CSS-->
		<link rel="stylesheet"  href="{{asset('frontend')}}/assets/css/style.css">
        <link rel="stylesheet"  href="{{asset('frontend')}}/assets/css/responsive.css">
        <link rel="shortcut icon" href="{{asset('frontend')}}/assets/favicon/TheShahibiens.jpg" type="image/x-icon"/>


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
					<div class="col-1">
						<div class="users_view_left">
							<ul>
								<li class="active" id="booked_table">booked table</li>
								<li id="order_food">Orderd food</li>
								<li id="users_message">users message</li>
								<li id="menu_insert">menu insert</li>
								<li id="menu_show">menu show</li>
							</ul>
						</div>
					</div>
					<div class="col-11">
						<div class="users_view_right_info" id="users_view_right_info">
							<div class="hello_massage">
								<h1>hello,<br/>{{ Auth::user()->name }}</h1>
							</div>
							 <h3 style="color:red;text-align: center">{{Session::get('reservationmessage')}}</h3>
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
								<h1>hello,<br/>{{ Auth::user()->name }}</h1>
							</div>
							<h3 style="color:red;text-align: center">{{Session::get('ordermessage')}}</h3>
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
								<h1>hello,{{ Auth::user()->name }}<br/>your message from customers.</h1>
							</div>
							<table class="table table-dark table-striped">
							  <h3 style="color:red;text-align: center">{{Session::get('feedmessage')}}</h3>
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
                 <section id="reservation" data-scroll-index="4" >
				         <div class="container users_view_right_posts" id="menu_insert_from_admin">
				            <div class="row">
				               <div class="col-lg-8 col-sm-12">
				                  <div class="booking-left section_100">
				                     <div class="site-heading">
				                     	<h3>Hello,<br/>{{ Auth::user()->name }} please insert menu</h3>
				                     </div>
				                      <h3 style="color:red;text-align: center">{{Session::get('insertmenu')}}</h3>
				                     <div class="booking-form ">
				                        <form action="menuinsert" method="post" enctype="multipart/form-data">
				                          <!-- {{ csrf_field() }} -->
				                          @csrf
				                           <div class="row">
				                               <div class="col-md-6">
				                                 <p>
				                                    <input type="file" name="pictures">
				                                 </p>
				                              </div>
				                              <div class="col-md-6">
				                                 <p>
				                                    <input type="text" placeholder="Platter Name" name="pname" value="" required>
				                                 </p>
				                              </div>
				                           </div>
				                           <div class="row">
				                              <div class="col-md-6">
				                                 <p>
				                                    <input type="text" placeholder="item-1" name="item_1" value="" required>
				                                 </p>
				                              </div>
				                              <div class="col-md-6">
				                                 <p>
				                                    <input type="number" placeholder="Price" name="price_1" value="" required>
				                                 </p>
				                              </div>
				                           </div>
				                            <div class="row">
				                              <div class="col-md-6">
				                                 <p>
				                                    <input type="text" placeholder="item-2" name="item_2" value="" >
				                                 </p>
				                              </div>
				                              <div class="col-md-6">
				                                 <p>
				                                    <input type="number" placeholder="Price_2" name="price_2" value="">
				                                 </p>
				                              </div>
				                           </div>
				                            <div class="row">
				                              <div class="col-md-6">
				                                 <p>
				                                    <input type="text" placeholder="item-3" name="item_3" value="" >
				                                 </p>
				                              </div>
				                              <div class="col-md-6">
				                                 <p>
				                                    <input type="number" placeholder="Price" name="price_3" value="" >
				                                 </p>
				                              </div>
				                           </div>
				                            <div class="row">
				                              <div class="col-md-6">
				                                 <p>
				                                    <input type="text" placeholder="item-4" name="item_4" value="" >
				                                 </p>
				                              </div>
				                              <div class="col-md-6">
				                                 <p>
				                                    <input type="number" placeholder="Price" name="price_4" value="" >
				                                 </p>
				                              </div>
				 							</div>
				 							<div class="row">
				                              <div class="col-md-6">
				                                 <p>
				                                    <input type="text" placeholder="item-5" name="item_5" value="" >
				                                 </p>
				                              </div>
				                              <div class="col-md-6">
				                                 <p>
				                                    <input type="number" placeholder="Price" name="price_5" value="" >
				                                 </p>
				                              </div>
				 							</div>
				                           <div class="row">
				                              <div class="col-md-12">
				                                <input type="hidden" name="id" value="">
				                                 <p>
				                                    <button type="submit">insert menu</button>
				                                 </p>
				                              </div>
				                           </div>
				                        </form>
				                     </div>
				                  </div>
				               </div>
				               <div class="col-md-4">
				                  <div class="booking-right">
				                     <img src="{{asset('frontend')}}/assets/images/book.png" alt="book image" />
				                  </div>
				               </div>
				            </div>
				         </div>
     			 </section>


                        <div class="users_view_right_posts" id="menu_show_from_admin">
							<div class="hello_massage">
								<h1>hello admin!<br/>{{ Auth::user()->name }}</h1>
							</div>
							 <h3 style="color:red;text-align: center">{{Session::get('deletemenu')}}</h3>
							<table class="table table-dark table-striped">
							  <tr>
									<th>ID</th>
									<th>Menu Image</th>
									<th>Platter Name</th>
									<th>Item-1</th>
									<th>Price</th>
									<th>Item-2</th>
									<th>Price</th>
									<th>Item-3</th>
									<th>Price</th>
									<th>Item-4</th>
									<th>Price</th>
									<th>Item-5</th>
									<th>Price</th>
									<th>Edit</th>
									<th>Delete</th>						
								</tr>
								<?php $i=1;
									foreach ($menu as $data):
							 	?>
								<tr>
									<td>{{$i}}</td>
									<td> <img src="{{$data->pictures}}"/></td>
									<td>{{$data->PlatterName}}</td>
									<td>{{$data->item_1}}</td>
									<td>{{$data->price_1}}</td>
									<td>{{$data->item_2}}</td>
									<td>{{$data->price_2}}</td>
									<td>{{$data->item_3}}</td>
									<td>{{$data->price_3}}</td>
									<td>{{$data->item_4}}</td>
									<td>{{$data->price_4}}</td>
									<td>{{$data->item_5}}</td>
									<td>{{$data->price_5}} </td>
									<td ><a href="">Edit</a></td>
									<td ><a href="{{url('/menu/delete/ '.$data->id)}}">Delete</a></td>
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
				$("#booked_table").click(function(){
					$("#users_view_right_posts").hide();
					$("#admin_view_users_message").hide();
					$("#users_view_right_info").show();
					$("#menu_show_from_admin").hide();
					$("#menu_insert_from_admin").hide();

				});
				$("#order_food").click(function(){
					$("#users_view_right_posts").show();
					$("#users_view_right_info").hide();
					$("#admin_view_users_message").hide();
					$("#menu_show_from_admin").hide();
					$("#menu_insert_from_admin").hide();
				});
				$("#users_message").click(function(){
					$("#users_view_right_posts").hide();
					$("#users_view_right_info").hide();
					$("#admin_view_users_message").show();
					$("#menu_show_from_admin").hide();
					$("#menu_insert_from_admin").hide();
				});
				$("#menu_show").click(function(){
					$("#users_view_right_posts").hide();
					$("#users_view_right_info").hide();
					$("#admin_view_users_message").hide();
					$("#menu_show_from_admin").show();
					$("#menu_insert_from_admin").hide();
				});
				$("#menu_insert").click(function(){
					$("#users_view_right_posts").hide();
					$("#users_view_right_info").hide();
					$("#admin_view_users_message").hide();
					$("#menu_show_from_admin").hide();
					$("#menu_insert_from_admin").show();
				});

			});

           /* active js*/
            $(function(){
			$('.users_view_left ul li').click(function () {
			$('.users_view_left ul li').removeClass('active');
			$(this).addClass('active');
			});
		 });
		
			
		</script>
	</body>
</html>