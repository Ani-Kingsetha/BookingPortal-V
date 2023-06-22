<!DOCTYPE html>
<html lang="en">

<head>
    <title>Bus</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
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