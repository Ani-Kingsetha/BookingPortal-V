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