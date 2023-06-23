<!DOCTYPE html>
<html lang="en">

<head>
    <title>Bus</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="fYS1Lasq6wuuXtFwYK46uqlP8NEodobjCbSWeCsL">
		<link rel="icon" type="image/png" href="uploads/demo/general/favicon.jpg" />
		<meta name="description" content />
		<meta property="og:url" content="index.html" />
		<meta property="og:type" content="article" />
		<meta property="og:title" content="Home Page" />
		<meta property="og:description" content />
		<meta property="og:image" content />
		<meta name="twitter:card" content="summary_large_image">
		<meta name="twitter:title" content="Home Page">
		<meta name="twitter:description" content>
		<meta name="twitter:image" content>
		<link rel="canonical" href="index.html" />
		<link href="libs/bootstrap/css/bootstrap.css" rel="stylesheet">
		<link href="libs/font-awesome/css/font-awesome.css" rel="stylesheet">
		<link href="libs/ionicons/css/ionicons.min.css" rel="stylesheet">
		<link href="libs/icofont/icofont.min.css" rel="stylesheet">
		<link href="libs/select2/css/select2.min.css" rel="stylesheet">
		<link href="dist/frontend/css/notification.css" rel="newest stylesheet">
		<link href="dist/frontend/css/app.css?_ver=3.2.1" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="libs/daterange/daterangepicker.css">
		<link rel="dns-prefetch" href="http://fonts.gstatic.com/">
		<link rel="stylesheet" id="google-font-css-css" href="https://fonts.googleapis.com/css?family=Poppins%3A300%2C400%2C500%2C600&amp;display=swap" type="text/css" media="all" />
		<script>
			var bookingCore = {
			    url:'/',
			    url_root:'/',
			    admin_url:'//admin',
			    booking_decimals:0,
			    thousand_separator:'.',
			    decimal_separator:',',
			    currency_position:'left',
			    currency_symbol:'$',
			    currency_rate:'1',
			    date_format:'MM/DD/YYYY',
			    map_provider:'gmap',
			    map_gmap_key:'',
			    map_options:{
			        map_lat_default:'',
			        map_lng_default:'',
			        map_clustering:'on',
			        map_fit_bounds:'on',
			    },
			    routes:{
			        login:'//login',
			        register:'//register',
			        checkout:'//booking/doCheckout'
			    },
			    currentUser: 0,
			    isAdmin : 0,
			    rtl: false,
			    markAsRead:'//notify/markAsRead',
			    markAllAsRead:'//notify/markAllAsRead',
			    loadNotify : '//notify/notifications',
			    pusher_api_key : '',
			    pusher_cluster : '',
			    language: 'en',
			    module:{}
			};
			                        bookingCore.module.hotel = 'hotel.html';
			                            bookingCore.module.space = 'space.html';
			                            bookingCore.module.car = 'car.html';
			                            bookingCore.module.event = 'event.html';
			                            bookingCore.module.tour = 'tour.html';
			                            bookingCore.module.flight = 'flight.html';
			                            bookingCore.module.boat = 'boat.html';
			            var i18n = {
			    warning:"Warning",
			    success:"Success",
			    confirm_delete:"Do you want to delete?",
			    confirm:"Confirm",
			    cancel:"Cancel",
			};
			var daterangepickerLocale = {
			    "applyLabel": "Apply",
			    "cancelLabel": "Cancel",
			    "fromLabel": "From",
			    "toLabel": "To",
			    "customRangeLabel": "Custom",
			    "weekLabel": "W",
			    "first_day_of_week": 1,
			    "daysOfWeek": [
			        "Su",
			        "Mo",
			        "Tu",
			        "We",
			        "Th",
			        "Fr",
			        "Sa"
			    ],
			    "monthNames": [
			        "January",
			        "February",
			        "March",
			        "April",
			        "May",
			        "June",
			        "July",
			        "August",
			        "September",
			        "October",
			        "November",
			        "December"
			    ],
			};
		</script>
		<link href="custom-css.css" rel="stylesheet">
		<link href="libs/carousel-2/owl.carousel.css" rel="stylesheet">
    <script src="js/bootstrap_js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="css/bootstrap_css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bus_style.css">
</head>
<style>
    .bus-banner {
        background-repeat: no-repeat;
        background-position: center;
        background-size: cover;
        background-image: url('images/bus_banner.png');
        height: 100%;
        
    }
</style>

<body>
<body class="frontend-page header-normal   ">
		<div class="bravo_wrap">
		<div class="bravo_topbar">
			<div class="container">
				<div class="content">
					<div class="topbar-left">
						<!--<div class="socials">
							<a href="#"><i class="fa fa-facebook"></i></a>
							<a href="#"><i class="fa fa-linkedin"></i></a>
							<a href="#"><i class="fa fa-google-plus"></i></a>
						</div>
						<span class="line"></span>
                        -->
                
					</div>
					<div class="topbar-right">
						<ul class="topbar-items">
							<li class="dropdown">
								<ul class="dropdown-menu text-left sf-hidden"></ul>
							</li>
							<li class="login-item">
								<a href="#login" data-toggle="modal" data-target="#login" class="login">Login</a>
							</li>
							<li class="signup-item">
								<a href="#register" data-toggle="modal" data-target="#register" class="signup">Sign Up</a>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<div class="bravo_header">
			<div class="container">
				<div class="content">
					<div class="header-left">
						<a href="index.html" class="bravo-logo">
						<img src="uploads/demo/general/logo.png" alt="UrTripo Aviation" width="45%">
						</a>
						<div class="bravo-menu">
							<ul class="main-menu menu-generated">
								<li class=" depth-0">
									<a target href="index.html">
										Home
									</a>
								</li>
								<li class=" depth-0">
									<a target href="flight.html">
										Flights
									</a>
								</li>
								<li class=" depth-0">
									<a target href="hotel.html">
										Hotels
									</a>
								</li>
								<li class=" depth-0">
									<a target href="bus.html">
										Bus
									</a>
								</li>
								<li class=" depth-0">
									<a target href="package.html">
										Packages
									</a>
								</li>
							</ul>
						</div>
					</div>
					<div class="header-right">
						<button class="bravo-more-menu">
						<i class="fa fa-bars"></i>
						</button>
					</div>
				</div>
			</div>
			<div class="bravo-menu-mobile" style="display:none;">
				<div class="user-profile">
					<div class="b-close"><i class="icofont-scroll-left"></i></div>
					<div class="avatar"></div>
					<ul>
						<li>
							<a href="#login" data-toggle="modal" data-target="#login" class="login">Login</a>
						</li>
						<li>
							<a href="#register" data-toggle="modal" data-target="#register" class="signup">Sign Up</a>
						</li>
					</ul>
				</div>
				<div class="g-menu">
					<ul class="main-menu menu-generated">
					<li class=" depth-0">
						<a target href="index.html">Home</a>
					</li>
					<li class=" depth-0">
						<a target href="hotel.html">Hotel </a>
					</li>
					<li class=" depth-0">
						<a target href="tour.html">Flights</a>
					</li>
					<li class=" depth-0">
						<a target href="space.html">Bus</a>
					</li>
					<li class=" depth-0">
						<a target href="car.html">Packages</a>
					</li>
				</div>
			</div>
    <div class="banner-outer">
        <div class="bus-banner">
            <div style="background: rgba(61, 61, 61, 0.2); height:auto;" class="shadow-lg">
                <div class="bus-banner-inner fs-fw-co">
                    <div class="container con-width"><br>
                        <div class="row" style="margin-bottom: 3px;">
                            <div class="col-md-4">Search for Bus</div>
                        </div>
                        <div class="sha mb-5 rounded">
                            <div class="row">
                                <div
                                    class="col-md-3 hei bg-white border d-flex align-items-md-center justify-content-center">
                                    <div>
                                        <div class="primary u-color">From</div>
                                        <div>
                                            <div class="input-group">
                                                <input type="text" class="form-control fs-co" placeholder="From">
                                                <span class="input-group-text"><img src="images/down.png" alt="img"
                                                        width="20px" height="20px"></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div
                                    class="col-md-3 hei bg-white border d-flex align-items-md-center justify-content-center">
                                    <div>
                                        <div class="primary u-color">To</div>
                                        <div>
                                            <div class="input-group">
                                                <input type="text" class="form-control fs-co" placeholder="To">
                                                <span class="input-group-text"><img src="images/down.png" alt="img"
                                                        width="20px" height="20px"></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div
                                    class="col-md-3 hei bg-white border d-flex align-items-md-center justify-content-center">
                                    <div>
                                        <div class="primary u-color">Date of Journey</div>
                                        <div>
                                            <div class="input-group">
                                                <input type="text" class="form-control fs-co" placeholder="Date"
                                                    id="set-date">
                                                <span class="input-group-text"><img src="images/date.png" alt="img"
                                                        width="20px" height="20px"></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div
                                    class="col-md-3 hei u-bg border d-flex justify-content-center align-items-md-center text-center">
                                <div class="input-group">
                                    <input type="submit" class="form-control u-bg fs-fw-co" value="Modify Search">
                                </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- listing -->
                    <div class="container con-width fs-co">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="row">
                                    <div class="col-md-3">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="cen">
                                                    <div class="row">
                                                        <div class="col">
                                                            <div class="border ">
                                                                <div class="fs-co d-flex align-items-md-center mb-3 ms-2 mt-2">Filter
                                                                    By</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col">
                                                            <div class="border " >
                                                                <div class="h4" style="margin-left: 10px;">
                                                                    <div class="mt-3 mb-4" data-bs-toggle="collapse" data-bs-target="#price" style="cursor: pointer;">
                                                                        <span class="" style="font-weight: 500;">Filter Price</span>
                                                                        <span class="" style="float:right"><img src="images/drop.png" width="35px" height="35px"></span>
                                                                    </div>
                                                                    <div id="price" class="collapse show">
                                                                        <div class="form me-1">
                                                                            <input class="form-range" min="" max="" name="" id="customRange" type="range">
                                                                        </div>
                                                            
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col">
                                                            <div class="border ">
                                                                <div class="h4" style="margin-left: 10px;">
                                                                    <div class="mt-3 mb-4" data-bs-toggle="collapse" data-bs-target="#type" style="cursor: pointer;">
                                                                        <span class="" style="font-weight: 500;">Bus Type</span>
                                                                        <span class="" style="float:right"><img src="images/drop.png" width="35px" height="35px"></span>
                                                                    </div>
                                                                    <div id="type" class="collapse show">
                                                                        <ul class="list-group list-group-flush" style="font-size: 12px;font-weight: 400;">
                                                                            <li class="list-group-item"><input type="checkbox" id=""><span class="ms-2">AC Seater</span>
                                                                            </li>
                                                                            <li class="list-group-item"><input type="checkbox" id=""><span class="ms-2">AC
                                                                                    Sleeper</span>
                                                                            </li>
                                                                            <li class="list-group-item"><input type="checkbox" id=""><span class="ms-2">Non AC
                                                                                    Seater</span></li>
                                                                            <li class="list-group-item"><input type="checkbox" id=""><span class="ms-2">Non AC
                                                                                    Sleeper</span></li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col">
                                                            <div class="border ">
                                                                <div class="h4" style="margin-left: 10px;">
                                                                    <div class="mt-3 mb-4" data-bs-toggle="collapse" data-bs-target="#boarding" style="cursor: pointer;">
                                                                        <span class="" style="font-weight: 500;">Boarding
                                                                            Points</span>
                                                                        <span class="" style="float:right"><img src="images/drop.png" width="35px" height="35px"></span>
                                                                    </div>
                                                                    <div id="boarding" class="collapse show">
                                                                        <ul class="list-group list-group-flush" style="font-size: 12px;font-weight: 400;">
                                                                            <li class="list-group-item"><input type="checkbox" id=""><span class="ms-2">MGR Bus
                                                                                    Stand</span></li>
                                                                            <li class="list-group-item"><input type="checkbox" id=""><span class="ms-2">Periyar Bus
                                                                                    Stand</span></li>
                                                                            <li class="list-group-item"><input type="checkbox" id=""><span class="ms-2">Sellur</span>
                                                                            </li>
                                                                            <li class="list-group-item"><input type="checkbox" id=""><span class="ms-2">K K Nagar</span>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col">
                                                            <div class="border ">
                                                                <div class="h4" style="margin-left: 10px;">
                                                                    <div class="mt-3 mb-4" data-bs-toggle="collapse" data-bs-target="#dropping" style="cursor: pointer;">
                                                                        <span class="" style="font-weight: 500;">Dropping
                                                                            Points</span>
                                                                        <span class="" style="float:right"><img src="images/drop.png" width="35px" height="35px"></span>
                                                                    </div>
                                                                    <div id="dropping" class="collapse show">
                                                                        <ul class="list-group list-group-flush" style="font-size: 12px;font-weight: 400;">
                                                                            <li class="list-group-item"><input type="checkbox" id=""><span class="ms-2">Koyambedu</span>
                                                                            </li>
                                                                            <li class="list-group-item"><input type="checkbox" id=""><span class="ms-2">Chengalpattu</span>
                                                                            </li>
                                                                            <li class="list-group-item"><input type="checkbox" id=""><span class="ms-2">Tambaram</span>
                                                                            </li>
                                                                            <li class="list-group-item"><input type="checkbox" id=""><span class="ms-2">Vandalur</span>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-9 mt-3">
                                        <div class="row">
                                            <div class="col-md-12 ms-3 me-2">
                                                <div>
                                                    <div class="">
                                                        <div class="row mb-4">
                                                            <div class="col-md-6 fs-co fw-bold"><span>22</span> Busses
                                                                found</div>
                                                            <div class="col-md-6 rcmd-align">
                                                                <span class="fs-co" id="fs-co">Sort by:</span>
                                                                <span class="ms-2 rcmd">
                                                                    <select name="Recommended" style="font-size:15px" id="rcmd"
                                                                        class="border border-2 form-select-sm fs-co fw-300">
                                                                        <option value="">Recommended</option>
                                                                        <option value="">Price (Low to High)</option>
                                                                        <option value="">Price (High to Low)</option>
                                                                    </select>
                                                                </span>
                                                            </div>
                                                        </div>
                                                        <div class="a-bg bus-list-header"
                                                            style="border-top-left-radius: 10px;border-top-right-radius: 10px;">
                                                            <div class="row fs-fw-co text-center"
                                                                style="font-size: 12px;padding: 4px;">
                                                                <div class="col-md-1"></div>
                                                                <div class="col-md-2">Travel Operator</div>
                                                                <div class="col-md-2">Boarding Point</div>
                                                                <div class="col-md-2">Duration</div>
                                                                <div class="col-md-2">Drop Point</div>
                                                                <div class="col-md-2">Price</div>
                                                                <div class="col-md-1"></div>
                                                            </div>
                                                        </div>
                                                        <div class="row" >
                                                            <div class="col-md-12">
                                                                <div class="border border-primary bod-rad">
                                                                    <div class="row hei-bus-list">
                                                                        <div class="col-md-1"></div>
                                                                        <div
                                                                            class="col-md-2 text-center d-flex justify-content-center align-items-md-center">
                                                                            <div>
                                                                                <img src="images/bus icon.png"
                                                                                    width="70" height="70">
                                                                                <div class="">
                                                                                    <span style="color: gray;"
                                                                                        class="fs-co">Egloo
                                                                                        Travels</span>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div
                                                                            class="col-md-2 text-center d-flex justify-content-center align-items-md-center">
                                                                            <div>
                                                                                <span class="fs-co u-color">14: 00
                                                                                    AM</span><br>
                                                                                <span class="fs-co-li">Koyambedu Bus
                                                                                    Stand, Chennai</span>
                                                                            </div>
                                                                        </div>
                                                                        <div
                                                                            class="col-md-2 text-center d-flex justify-content-center align-items-md-center">
                                                                            <div>
                                                                                <span class="fs-co u-color">8h
                                                                                    10min</span><br>
                                                                            </div>
                                                                        </div>
                                                                        <div
                                                                            class="col-md-2 text-center d-flex justify-content-center align-items-md-center">
                                                                            <div>
                                                                                <span class="fs-co u-color">06: 00
                                                                                    AM</span><br>
                                                                                <span class="fs-co-li">MGR Bus Stand,
                                                                                    Madurai</span>
                                                                            </div>
                                                                        </div>
                                                                        <div
                                                                            class="col-md-2 text-center d-flex justify-content-center align-items-md-center">
                                                                            <div>
                                                                                <span
                                                                                    class="fs-co u-color bolder">RS.700</span><br>
                                                                                <span class="fs-co-li">
                                                                                    <button class="btn btn-sm a-bg"
                                                                                        style="color: white;">Book
                                                                                        Now</button>
                                                                                </span>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-1"></div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <script src="js/jquery/jquery-3.6.4.min.js"></script>
    <script>
        $(document).ready(function () {

            // $("#pop").click(function () {
            //     $("#get-date").datepicker();
            // });

            // $('#get-date').attr("min", "2023-04-14");
            // $('#get-date').on('change', function () {
            //     var date = $(this).val();
            //     const d = new Date(date);
            //     $("#set-date").val(d.toDateString());
            // });

            // $('#set-date').val('2023-04-16');
        })
    </script>
    <!-- <script src="js/bootstrap_js/bootstrap.bundle.js"></script>
    
    <script src="js/bootstrap_js/bootstrap.min.js"></script> -->
</body>

</html>