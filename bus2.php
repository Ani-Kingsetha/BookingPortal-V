<!DOCTYPE html>
<html lang="en">

<head>
    <title>Bus</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="js/bootstrap_js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="css/bootstrap_css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bus_style.css">
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
</head>
<style>
    .bus-banner {
        background-repeat: no-repeat;
        background-position: center;
        background-size: cover;
        background-image: url('images/bus_banner.png');
        height: 100%;
        width: 100%;
    }

    .seat {
        background-color: #cac9c9;
        color: #fff;
        /* padding: 15px; */
        /* margin: 5px; */
        border-radius: 10px;
        padding-left: 30px;
        /* padding-top: 2px; */
        /* padding-bottom: 2px; */
        padding-right: 30px;
        font-size: 18px;
        font-weight: bold;
        cursor: pointer;
    }

    .seat.selected {
        background-color: #fcfeff;
        border: 1px #007BFF solid;
        color: black;
    }

    .bre-fs {
        font-size: 16px;
        font-weight: 400;
        color: #6c757d;
    }
</style>

<body>
<body class="frontend-page header-normal   ">
		<div class="bravo_wrap">
		<div class="bravo_topbar">
			<div class="container">
				<div class="content">
					<div class="topbar-left">
					
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
                                    class="col-md-3 hei u-bg border d-flex justify-content-center align-items-sm-center text-center">
                                    <div class="input-group">
                                        <input type="submit" class="form-control u-bg fs-fw-co" value="Modify Search">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- seating selection -->
                    <div class="container con-width">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="row">
                                    <div class="col-md-3">
                                        <div class="" style="border: 1px #007BFF solid;border-radius: 6px;">
                                            <div class="row mt-2 mb-2 ms-2">
                                                <div class="col">
                                                    <div class="text-dark col">
                                                        <span class="text-muted h5">Boarding Point</span>
                                                        <span class="ms-1" data-bs-toggle="collapse"
                                                            data-bs-target="#bp" style="cursor: pointer; float: right;"><img
                                                                src="images/drop.png" width="35px" height="35px"></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <hr style="color: #6c757d;">
                                            <div class="row mt-2 mb-2 ms-2">
                                                <div class="collapse show " id="bp">
                                                    <ul class="list-group list-group-flush">
                                                        <li class="list-group-item">
                                                            <span class="me-2 text-dark">MGR Bus Stand</span>
                                                            <input class="form-check-input" type="radio" id="" style="float: right;">
                                                        </li>
                                                        <li class="list-group-item">
                                                            <span class="me-2">Periyar Bus Stand</span>
                                                            <input class="form-check-input" type="radio" id="" style="float: right;">
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <hr style="color: #6c757d;">
                                            <div class="row mt-2 mb-2 ms-2">
                                                <div class="text-dark col">
                                                    <span class="text-muted h5">Dropping Point</span>
                                                    <span class="ms-1" data-bs-toggle="collapse" data-bs-target="#dp"
                                                        style="cursor: pointer;float: right;"><img src="images/drop.png" width="35px"
                                                            height="35px"></span>
                                                </div>
                                            </div>
                                            <hr style="color: #6c757d;">
                                            <div class="row mt-2 mb-2 ms-2">
                                                <div class="collapse show" id="dp">
                                                    <ul class="list-group list-group-flush">
                                                        <li class="list-group-item">
                                                            <span class="me-2 text-dark">Koyambedu</span>
                                                            <input class="form-check-input" type="radio" id="" style="float: right;">
                                                        </li>
                                                        <li class="list-group-item">
                                                            <span class="me-2">Vandalur</span>
                                                            <input class="form-check-input" type="radio" id="" style="float: right;">
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-9">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="row">
                                                    <div class="col-md-6"
                                                        style="color: black;font-size: xx-large;font-weight: 700;">Egloo
                                                        Travels</div>
                                                    <div class="col-md-6 text-end">
                                                        <div style="color: black;">Rs.1500</div>
                                                        <span style="color: rgb(155, 154, 154);">(A/C Sleeper)</span>
                                                    </div>
                                                </div>
                                                <div class="mt-2" style="color: rgb(155, 154, 154);">21:30 ,5 April to
                                                    5:45 PM ,6 April</div>
                                                <div class="mt-3" style="color: black;">Select Seats</div>
                                            </div>
                                        </div>
                                        <!-- upper breth -->
                                        <div class="row mt-3 justify-content-center">
                                            <div class="bre-fs"><span>Upper Breth</span></div>
                                            <div class="col-md-12">
                                                <div class="card mt-3"
                                                    style="border-color: #007BFF;border-radius: 8px;">
                                                    <div class="card-body text-center">
                                                        <div class="row mt-3">
                                                            <div class="col-md-2"></div>
                                                            <div class="col-md-8 text-end">
                                                                <span class="seat mb-3" data-seat="1A">1A</span>
                                                                <span class="seat mb-3" data-seat="2A">2A</span>
                                                                <span class="seat mb-3" data-seat="3A">3A</span>
                                                                <span class="seat mb-3" data-seat="4A">4A</span>
                                                                <span class="seat mb-3" data-seat="5A">5A</span>
                                                                <span class="seat mb-3" data-seat="6A">6A</span>
                                                            </div>
                                                        </div>
                                                        <div class="row mt-3">
                                                            <div class="col-md-2"></div>
                                                            <div class="col-md-8 text-end">
                                                                <span class="seat mb-3" data-seat="1A">1A</span>
                                                                <span class="seat mb-3" data-seat="2A">2A</span>
                                                                <span class="seat mb-3" data-seat="3A">3A</span>
                                                                <span class="seat mb-3" data-seat="4A">4A</span>
                                                                <span class="seat mb-3" data-seat="5A">5A</span>
                                                                <span class="seat mb-3" data-seat="6A">6A</span>
                                                            </div>
                                                        </div>
                                                        <div class="row mt-3">
                                                            <div class="col-md-2"></div>
                                                            <div class="col-md-8 text-end">
                                                                <span class="seat mb-3" data-seat="6A">6A</span>
                                                            </div>
                                                        </div>
                                                        <div class="row mt-3">
                                                            <div class="col-md-2"></div>
                                                            <div class="col-md-8 text-end">
                                                                <span class="seat mb-3" data-seat="1A">1A</span>
                                                                <span class="seat mb-3" data-seat="2A">2A</span>
                                                                <span class="seat mb-3" data-seat="3A">3A</span>
                                                                <span class="seat mb-3" data-seat="4A">4A</span>
                                                                <span class="seat mb-3" data-seat="5A">5A</span>
                                                                <span class="seat mb-3" data-seat="6A">6A</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- lower breth -->
                                        <div class="row mt-3 justify-content-center">
                                            <div class="bre-fs"><span>Lower Breth</span></div>
                                            <div class="col-md-12">
                                                <div class="card mt-3"
                                                    style="border-color: #007BFF;border-radius: 8px;">
                                                    <div class="card-body text-center">
                                                        <div class="row mt-3">
                                                            <div class="col-md-2"></div>
                                                            <div class="col-md-8 text-end">
                                                                <span class="seat mb-3" data-seat="1A">1A</span>
                                                                <span class="seat mb-3" data-seat="2A">2A</span>
                                                                <span class="seat mb-3" data-seat="3A">3A</span>
                                                                <span class="seat mb-3" data-seat="4A">4A</span>
                                                                <span class="seat mb-3" data-seat="5A">5A</span>
                                                                <span class="seat mb-3" data-seat="6A">6A</span>
                                                            </div>
                                                        </div>
                                                        <div class="row mt-3">
                                                            <div class="col-md-2"></div>
                                                            <div class="col-md-8 text-end">
                                                                <span class="seat mb-3" data-seat="1A">1A</span>
                                                                <span class="seat mb-3" data-seat="2A">2A</span>
                                                                <span class="seat mb-3" data-seat="3A">3A</span>
                                                                <span class="seat mb-3" data-seat="4A">4A</span>
                                                                <span class="seat mb-3" data-seat="5A">5A</span>
                                                                <span class="seat mb-3" data-seat="6A">6A</span>
                                                            </div>
                                                        </div>
                                                        <div class="row mt-3">
                                                            <div class="col-md-2"></div>
                                                            <div class="col-md-8 text-end">
                                                                <span class="seat mb-3" data-seat="6A">6A</span>
                                                            </div>
                                                        </div>
                                                        <div class="row mt-3">
                                                            <div class="col-md-2"></div>
                                                            <div class="col-md-8 text-end">
                                                                <span class="seat mb-3" data-seat="1A">1A</span>
                                                                <span class="seat mb-3" data-seat="2A">2A</span>
                                                                <span class="seat mb-3" data-seat="3A">3A</span>
                                                                <span class="seat mb-3" data-seat="4A">4A</span>
                                                                <span class="seat mb-3" data-seat="5A">5A</span>
                                                                <span class="seat mb-3" data-seat="6A">6A</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row justify-content-center align-items-center g-2 mt-4">
                                            <div class="col-md-12">
                                                <div class="row">
                                                    <div class="col-md-7">
                                                        <div class="mb-3">
                                                            <label for="" class="form-label text-muted h4">Email
                                                                Id:</label>
                                                            <input type="email" class="form-control border" name="email"
                                                                id="">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row mt-4">
                                                    <div class="col-md-7">
                                                        <div class="mb-3">
                                                            <label for=""
                                                                class="form-label text-muted h4">Phone:</label>
                                                            <div class="input-group">
                                                                <input type="text" class="border input-group-text"
                                                                    name="" id="" style="width: 50px;">
                                                                <input type="text" class="form-control border"
                                                                    name="email">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row text-dark text-center mt-4 h5">
                                                    <div class="col">OR</div>
                                                </div>
                                                <div class="row ms-1 mt-4"></div>
                                                <div class="col u-bg text-center pt-1 pb-1" style="border-radius: 6px;">
                                                    Login in With Google</div>
                                            </div>
                                            <div class="row ms-1 mt-4"></div>
                                            <div class="col a-bg text-center pt-1 pb-1" style="border-radius: 6px;">
                                                Login in With Facebook</div>
                                        </div>
                                        <div class="mt-5">
                                            <div class="row">
                                                <div class="col text-dark h4">Seats Selected</div>
                                                <div class="col text-end">
                                                    <div class="text-dark h5 me-2">Price</div>
                                                    <span class="u-color">Rs.<span id="amt">0.00</span></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mt-2">
                                            <div class="row">
                                                <div class="col text-dark h5"><span id="noseat">No</span> Seats Selected
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row ms-1 mt-4"></div>
                                        <div class="col u-bg text-center pt-1 pb-1" style="border-radius: 6px;">Book as
                                            a Guest</div>
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

            const seats = document.querySelectorAll('.seat');

            seats.forEach(seat => {
                seat.addEventListener('click', () => {
                    seat.classList.toggle('selected');
                    const no_seats = document.querySelectorAll('.selected').length;
                    if(no_seats>0){
                        $('#noseat').html(no_seats);
                        $('#amt').html(no_seats*1500);
                    }
                    else{
                        $('#noseat').html("No");
                        $('#amt').html("0.00");
                    }
                });
            });

        });
    </script>
    <!-- <script src="js/bootstrap_js/bootstrap.bundle.js"></script>
    
    <script src="js/bootstrap_js/bootstrap.min.js"></script> -->
</body>

</html>