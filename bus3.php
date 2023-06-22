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

                    <!-- details -->
                    <div class="container con-width">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="row">
                                    <div class="col-md-8">
                                        <div class="row">
                                            <div class="col-md-6"
                                                style="color: black;font-size: xx-large;font-weight: 700;">Egloo
                                                Travels</div>
                                            <div class="col-md-6 text-end">
                                                <div style="color: black;">1 Seat selected</div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="mt-2" style="color: rgb(155, 154, 154);">21:30 ,5 April to
                                                    5:45 PM ,6 April</div>
                                            </div>
                                            <div class="col-md-6 text-end h6">
                                                <div style="color: rgb(155, 154, 154);">Seat Number:38</div>
                                            </div>
                                        </div>
                                        <div class="row text-dark mt-5">
                                            <div class="col-md-5">
                                                <div class="h4"><strong>20:30 PM</strong></div>
                                                <div class=""> <strong>Chennai </strong><span
                                                        class="text-muted">,21:30,5
                                                        April,Thu</span></div>
                                                <div class="h6 text-muted">Koyambedu</div>
                                            </div>
                                            <div class="col-md-2 d-flex align-items-md-center mt-4 mb-4">
                                                <img src="images/Arrow.png" alt="arrow" width="100">
                                            </div>
                                            <div class="col-md-5">
                                                <div class="h4"><strong>03:30 AM</strong></div>
                                                <div class=""> <strong>Madurai </strong><span
                                                        class="text-muted">,03:00,6
                                                        April,Fri</span></div>
                                                <div class="h6 text-muted">MGR Bus Stand</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 mt-2" style="border: 1px #007BFF solid; border-radius: 10px;">
                                        <div class="container">
                                            <div class="row mt-3">
                                                <div class="col-md-12 p-2"
                                                    style="border:1px solid;border-radius: 10px; text-align: center;background-image: radial-gradient( circle 897px at 9% 80.3%,  #007BFF 6%, #363198 70.2% );">
                                                    Continue to Book Now
                                                </div>
                                            </div>
                                            <div class="row mt-5" style="color: rgb(112, 110, 110);">
                                                <div class="col-md-12">
                                                    Base Fare <span style="float: right;">Rs.800</span>
                                                </div>
                                            </div>
                                            <div class="row" style="color: rgb(112, 110, 110);">
                                                <div class="col-md-12">
                                                    Tax <span style="float: right;">Rs.0.00</span>
                                                </div>
                                            </div>
                                            <div class="row u-color mt-2 mb-3">
                                                <div class="col-md-12">
                                                    Total Base Price <span
                                                        style="float: right; color: rgb(112, 110, 110);">Rs.800</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="mt-5">
                                    <div class="row" style="color: black;">
                                        <div class="col-md-12"><b>Enter Traveler Details</b></div>
                                    </div>
                                    <div class="row mt-2" style="color: black;">
                                        <div class="col-md-3">
                                            <div><span style="color: #2a2a2b;">Name :</span></div>
                                            <div class="mt-2">
                                                <div class="mb-3"
                                                    style="border: 1px solid rgb(170, 167, 167);border-radius: 5px;">
                                                    <input type="text" class="form-control" aria-describedby="helpId"
                                                        placeholder="">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div><span style="color: #2a2a2b;">Age :</span></div>
                                            <div class="mt-2">
                                                <div class="mb-3"
                                                    style="border: 1px solid rgb(170, 167, 167);border-radius: 5px;">
                                                    <input type="text" class="form-control" aria-describedby="helpId"
                                                        placeholder="">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div><span style="color: #2a2a2b;">Gender :</span></div>
                                            <div class="mt-2">
                                                <div class="mb-3"
                                                    style="border: 1px solid rgb(170, 167, 167);border-radius: 5px;">
                                                    <input type="text" class="form-control" name="" id=""
                                                        aria-describedby="helpId" placeholder="">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="mt-4">
                                    <div class="row" style="color: black;">
                                        <div class="col-md-12"><b>Enter Contact Details</b></div>
                                    </div>
                                    <div class="row mt-3" style="color: black;">
                                        <div class="col-md-4">
                                            <div><span style="color: #2a2a2b;">Phone :</span></div>
                                            <div class="mt-2">
                                                <div class="mb-3"
                                                    style="border: 1px solid rgb(170, 167, 167);border-radius: 5px;">
                                                    <input type="text" class="form-control" name="" id=""
                                                        aria-describedby="helpId" placeholder="">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row" style="color: black;">
                                        <div class="col-md-4">
                                            <div><span style="color: #2a2a2b;">Email-ID :</span></div>
                                            <div class="mt-2">
                                                <div class="mb-3"
                                                    style="border: 1px solid rgb(170, 167, 167);border-radius: 5px;">
                                                    <input type="text" class="form-control" name="" id=""
                                                        aria-describedby="helpId" placeholder="">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="mt-4">
                                    <div class="row">
                                        <div class="col-md-9">
                                            <div class="u-color" style="font-size: larger;">
                                                <span><b>Enter GST Details (Optional)</b></span>
                                                <span style="float: right;cursor:pointer;" id="gstS"><img src="images/plus.png" width="20" height="20"
                                                        alt="plus" data-bs-toggle="collapse"
                                                        data-bs-target="#gst"></span>
                                                <span id="gstH" style="display: none;float: right;cursor:pointer;"><img src="images/minus.png"
                                                        width="20" height="20" alt="minus" data-bs-toggle="collapse"
                                                        data-bs-target="#gst"></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mt-3 collapse" style="color: black;" id="gst">
                                        <div class="col-md-4">
                                            <div><span style="color: #2a2a2b;">Enter GST Number :</span></div>
                                            <div class="mt-2">
                                                <div class="mb-3"
                                                    style="border: 1px solid rgb(170, 167, 167);border-radius: 5px;">
                                                    <input type="text" class="form-control" name="" id=""
                                                        aria-describedby="helpId" placeholder="">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div><span style="color: #2a2a2b;">Enter GST Company Number :</span></div>
                                            <div class="mt-2">
                                                <div class="mb-3"
                                                    style="border: 1px solid rgb(170, 167, 167);border-radius: 5px;">
                                                    <input type="text" class="form-control" name="" id=""
                                                        aria-describedby="helpId" placeholder="">
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
        $(document).ready(() => {
            $('#gstS').click(() => {
                $('#gstS').css({ "display": "none" });
                $('#gstH').css({ "display": "block" });
            });
            $('#gstH').click(() => {
                $('#gstH').css({ "display": "none" });
                $('#gstS').css({ "display": "block" });
            });
        });
    </script>
</body>

</html>