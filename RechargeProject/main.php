<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

include 'config.php';
error_reporting(0);

session_start();



?>

<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Bootstrap demo</title>

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

  <!-- jQuery -->
  <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

  <!-- jQuery UI -->
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

  <style>
    /* Remove the blue background and text color change on accordion buttons */
    .accordion-button {
      background-color: transparent !important;
      color: #000 !important;
      /* Set your desired text color */
    }

    /* Remove the blue background and text color change on active and hover states */
    .accordion-button.active,
    .accordion-button:hover {
      background-color: transparent !important;
      color: #000 !important;
      /* Set your desired text color */
      outline: none !important;
      box-shadow: none !important;
    }
  </style>
</head>



<body>

  <!-- main navbar-->

  <nav class="navbar navbar-dark shadow-sm " style="background-color:#36B3B8;">
    <div class="container-fluid ps-0 pe-0">
      <a class="navbar-brand">HELLO HAITHAM!</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasDarkNavbar" aria-controls="offcanvasDarkNavbar">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="offcanvas offcanvas-start text-bg-dark" style="width:300px;" tabindex="-1" id="offcanvasDarkNavbar" aria-labelledby="offcanvasDarkNavbarLabel">

        <div class="offcanvas-header" style="background-color: white;">
          <h5 class="offcanvas-title" id="offcanvasDarkNavbarLabel">Haitham</h5>
          <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body" style="background-color: #36B3B8;">
          <ul class="navbar-nav justify-content-end flex-grow-1 ">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Link</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Dropdown
              </a>
              <ul class="dropdown-menu dropdown-menu-dark">
                <li><a class="dropdown-item" href="#">Action</a></li>
                <li><a class="dropdown-item" href="#">Another action</a></li>
                <li>
                  <hr class="dropdown-divider">
                </li>
                <li><a class="dropdown-item" href="#">Something else here</a></li>
              </ul>
            </li>
          </ul>
          <form class="d-flex mt-3" role="search">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-success" type="submit">Search</button>
          </form>
        </div>
      </div>
    </div>
  </nav>


  <!-- my balance-->
  <div class="accordion accordion-flush shadow-sm " id="accordionFlushExample">
    <div class="accordion-item">
      <h2 class="accordion-header mt-n1" id="flush-headingOne" style="height: 45px;">
        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
          My Balance
        </button>
      </h2>
      <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
        <div class="accordion-body">5,000,000 LBP </div>
      </div>
    </div>

  </div>





  <!--categories-->
  <div class="mt-5 ms-4" style="color: #36B3B8;">
    CATEGORIES
  </div>

  <!-- navbar for cards-->
  <div class="container-fluid p-0">
    <ul class="nav nav-tabs mt-3 " id="myTab" role="tablist">
      <li class="nav-item " role="presentation">
        <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home-tab-pane" type="button" role="tab" aria-controls="home-tab-pane" aria-selected="true" style="font-size: small;color:black">MOBILE RECHARGES</button>
      </li>
      <li class="nav-item" role="presentation">
        <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile-tab-pane" type="button" role="tab" aria-controls="profile-tab-pane" aria-selected="false" style="font-size: small; color:black">INTERNET CARDS</button>
      </li>
      <li class="nav-item" role="presentation">
        <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile-tab-pane" type="button" role="tab" aria-controls="profile-tab-pane" aria-selected="false" style="font-size: small; color:black">OTHER</button>
      </li>


    </ul>
  </div>
  <!-- tab content-->
  <div class="container-fluid">
    <div class="tab-content" id="myTabContent">


      <div class="tab-pane fade show active" id="home-tab-pane" role="tabpanel" aria-labelledby="home-tab" tabindex="0">

        <div class="row mt-4 ms-5 justify-content-start">

          <div class="col">
            <a data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
              <img src="img/touch/touch.png" height="60px" width="65px">
            </a>
          </div>

          <div class="col">
            <a data-bs-toggle="collapse" href="#collapseExampl" role="button" aria-expanded="false" aria-controls="collapseExample">
              <img src="img/alfa/alfa.png" height="55px" width="60px">
            </a>
          </div>

        </div>




        <div class="collapse mt-3" id="collapseExample">
          <div class="card card-body border-start-0 border-end-0 border-bottom-0 border-top-0 p-0" style="width:fit-content">



            <!-- start of cards-->


            <!-- Credit transfer-->
            <div class="border-top mt-3">
              <h6 class="mt-2"><b>Credit Transfer</b></h6>
            </div>
            <div>
              <a href="mtc_credits.php">
                <img class="rounded border shadow-sm  " src="img/touch/touchc.png" height="70px" width="100px">
              </a>
            </div>


            <!-- validity-->
            <div class="border-top mt-3">
              <h6 class="mt-2"><b>Validity</b></h6>
            </div>
            <div class="row align-items-start ">

              <!--30 days validity -->
              <div class="col-4">
                <a href="mtc_30d.php">
                  <img class="rounded border shadow-sm  " src="img/touch/30d.jpg" height="70px" width="100px">
                </a>
              </div>




              <!--60 days validity -->
              <div class="col-4">
                <div data-toggle="modal" data-target="#val60">
                  <img class="rounded border shadow-sm" src="img/touch/60d.jpg" height="70px" width="100px">
                </div>
                <div class="modal fade" id="val60">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <!-- Modal Header -->
                      <div class="modal-header rounded shadow-sm" style="background-color: #36B3B8;height:40px">

                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                      </div>
                      <!-- Modal body -->
                      <div class="modal-body">
                        <p>
                          <img class="rounded border shadow-sm mt-2 ms-3" src="img/touch/60d.jpg" height="200px" width="300px">
                        <div class="input-group flex-nowrap mt-4" style="width: 180px;">
                          <span class="input-group-text" id="addon-wrapping">To</span>
                          <input type="text" class="form-control" placeholder="" aria-label="Username" aria-describedby="addon-wrapping">
                        </div>



                        <div class=" mt-2 input-group flex-nowrap" style="width: 160px;">
                          <span class="input-group-text" id="addon-wrapping">Price</span>
                          <input type="text" class="form-control" placeholder="1,000,000" aria-label="Username" aria-describedby="addon-wrapping">
                        </div>

                        <div class="mt-2">
                          <span class="input-group-text rounded-0" id="addon-wrapping" style="width: 120px;">Cards Used</span>
                        </div>


                        <div class="form-check ms-2 mt-2">
                          <input class="form-check-input " type="radio" name="flexRadioDefault" id="flexRadioDefault1" checked>
                          <label class="form-check-label " for="flexRadioDefault1">
                            1x <img src="img/touch/15.15.png" height="35px" width="45px">
                          </label>
                        </div>
                        <div class="form-check ms-2 mt-2 mb-2">
                          <input class="form-check-input " type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                          <label class="form-check-label " for="flexRadioDefault1">
                            2x <img src="img/touch/7.58.png" height="35px" width="45px">
                          </label>
                        </div>






                        <div class="input-group mt-2 " style="width: 215px;">
                          <label class="input-group-text" for="inputGroupSelect01">Dollars To</label>
                          <select class="form-select" id="inputGroupSelect01">
                            <option value="1">Haitham</option>
                            <option value="2">Abbas</option>


                          </select>
                        </div>

                        <div class=" mt-3 input-group flex-nowrap" style="width: 150px;">
                          <span class="input-group-text" id="addon-wrapping">Value</span>
                          <input type="text" class="form-control" value="750,000" aria-label="Username" aria-describedby="addon-wrapping">
                        </div>



                        </p>
                      </div>
                      <!-- Modal footer -->
                      <div class="d-grid gap-2 col-6 mx-auto mt-3 mb-4">
                        <button type="button" class="btn" data-dismiss="modal" style="background-color: #36B3B8;color:white">Confirm</button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>


              <!--90 days validity -->
              <div class="col-4">
                <div data-toggle="modal" data-target="#myModal">
                  <img class="rounded border shadow-sm" src="img/touch/90d.png" height="70px" width="100px">
                </div>
                <div class="modal fade" id="myModal">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <!-- Modal Header -->
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                      </div>
                      <!-- Modal body -->
                      <div class="modal-body">
                        <p>
                        <div class="input-group flex-nowrap" style="width: 180px;">
                          <span class="input-group-text" id="addon-wrapping">To</span>
                          <input type="text" class="form-control" placeholder="haitham khansa" aria-label="Username" aria-describedby="addon-wrapping">
                        </div>

                        <div class="input-group mt-2 " style="width: 165px;">
                          <label class="input-group-text" for="inputGroupSelect01">From</label>
                          <select class="form-select" id="inputGroupSelect01">
                            <option selected>iPocket</option>
                            <option value="1">Wish</option>
                            <option value="2">Other</option>
                            <option value="3"></option>
                          </select>
                        </div>

                        <div class=" mt-2 input-group flex-nowrap" style="width: 150px;">
                          <span class="input-group-text" id="addon-wrapping">Pice</span>
                          <input type="text" class="form-control" placeholder="1,000,000" aria-label="Username" aria-describedby="addon-wrapping">
                        </div>

                        <div class=" mt-5 input-group flex-nowrap" style="width: 150px;">
                          <span class="input-group-text" id="addon-wrapping">Value</span>
                          <input type="text" class="form-control" value="750,000" aria-label="Username" aria-describedby="addon-wrapping">
                        </div>



                        </p>
                      </div>
                      <!-- Modal footer -->
                      <div class="modal-footer">
                        <button type="button" class="btn" data-dismiss="modal" style="background-color: #36B3B8;color:white">Confirm</button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>




            </div>


            <div class="row align-items-start mt-3">

              <!--validity 180 days-->
              <div class="col-4">
                <div data-toggle="modal" data-target="#validity">
                  <img class="rounded border shadow-sm" src="img/touch/180d.png" height="70px" width="100px">
                </div>
                <div class="modal fade" id="validity">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <!-- Modal Header -->
                      <div class="modal-header rounded shadow-sm" style="background-color: #36B3B8;height:40px">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                      </div>
                      <!-- Modal body -->
                      <div class="modal-body">
                        <p>

                          <img class="rounded border shadow-sm mt-2 ms-3" src="img/touch/30d.jpg" height="200px" width="300px">

                        <div class="input-group flex-nowrap mt-5" style="width: 180px;">
                          <span class="input-group-text" id="addon-wrapping">To</span>
                          <input type="text" class="form-control" placeholder="" aria-label="Username" aria-describedby="addon-wrapping">
                        </div>



                        <div class=" mt-2 input-group flex-nowrap" style="width: 160px;">
                          <span class="input-group-text" id="addon-wrapping">Price</span>
                          <input type="text" class="form-control" placeholder="1,000,000" aria-label="Username" aria-describedby="addon-wrapping">
                        </div>

                        <div class="input-group mt-2 " style="width: 215px;">
                          <label class="input-group-text" for="inputGroupSelect01">Dollars To</label>
                          <select class="form-select" id="inputGroupSelect01">
                            <option value="1">Haitham</option>
                            <option value="2">Abbas</option>


                          </select>
                        </div>

                        <div class=" mt-5 input-group flex-nowrap" style="width: 150px;">
                          <span class="input-group-text" id="addon-wrapping">Value</span>
                          <input type="text" class="form-control" value="750,000" aria-label="Username" aria-describedby="addon-wrapping">
                        </div>



                        </p>
                      </div>
                      <!-- Modal footer -->
                      <div class="d-grid gap-2 col-6 mx-auto mt-5 mb-5">
                        <button type="button" class="btn shadow" data-dismiss="modal" style="background-color: #36B3B8;color:white"><b>CONFIRM</b></button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>



              <div class="col-4">
                <div data-toggle="modal" data-target="#val60">
                  <img class="rounded border shadow-sm" src="img/touch/360d.png" height="70px" width="100px">
                </div>
                <div class="modal fade" id="val60">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <!-- Modal Header -->
                      <div class="modal-header">
                        <h5 style="color: #36B3B8;">VALIDITY FOR 60 DAYS</h5>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                      </div>
                      <!-- Modal body -->
                      <div class="modal-body">
                        <p>
                        <div class="input-group flex-nowrap" style="width: 180px;">
                          <span class="input-group-text" id="addon-wrapping">To</span>
                          <input type="text" class="form-control" placeholder="" aria-label="Username" aria-describedby="addon-wrapping">
                        </div>



                        <div class=" mt-2 input-group flex-nowrap" style="width: 160px;">
                          <span class="input-group-text" id="addon-wrapping">Price</span>
                          <input type="text" class="form-control" placeholder="1,000,000" aria-label="Username" aria-describedby="addon-wrapping">
                        </div>

                        <div class="mt-2">
                          <span class="input-group-text" id="addon-wrapping" style="width: 100px;">Cards Used</span>
                          <div class="border" style="width:100px;">
                            <div class="form-check ms-2 mt-2">
                              <input class="form-check-input " type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                              <label class="form-check-label " for="flexRadioDefault1">
                                1x <img src="img/touch/15.15.png" height="35px" width="45px">
                              </label>
                            </div>
                            <div class="form-check ms-2 mt-2">
                              <input class="form-check-input " type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                              <label class="form-check-label " for="flexRadioDefault1">
                                2x <img src="img/touch/7.58.png" height="35px" width="45px">
                              </label>
                            </div>
                          </div>
                        </div>




                        <div class="input-group mt-2 " style="width: 215px;">
                          <label class="input-group-text" for="inputGroupSelect01">Dollars To</label>
                          <select class="form-select" id="inputGroupSelect01">
                            <option value="1">Haitham</option>
                            <option value="2">Abbas</option>


                          </select>
                        </div>

                        <div class=" mt-5 input-group flex-nowrap" style="width: 150px;">
                          <span class="input-group-text" id="addon-wrapping">Value</span>
                          <input type="text" class="form-control" value="750,000" aria-label="Username" aria-describedby="addon-wrapping">
                        </div>



                        </p>
                      </div>
                      <!-- Modal footer -->
                      <div class="modal-footer">
                        <button type="button" class="btn" data-dismiss="modal" style="background-color: #36B3B8;color:white">Confirm</button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

            </div>


            <!-- vouchers-->
            <div class="border-top mt-3">
              <h6 class="mt-2"><b>Vouchers</b></h6>
            </div>
            <div class="row align-items-start ">

              <!--1$ -->
              <div class="col-4">
                <div data-toggle="modal" data-target="#validity">
                  <img class="rounded border shadow-sm" src="img/touch/1.png" height="70px" width="100px">
                </div>
                <div class="modal fade" id="validity">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <!-- Modal Header -->
                      <div class="modal-header rounded shadow-sm" style="background-color: #36B3B8;height:40px">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                      </div>
                      <!-- Modal body -->
                      <div class="modal-body">
                        <p>

                          <img class="rounded border shadow-sm mt-2 ms-3" src="img/touch/30d.jpg" height="200px" width="300px">

                        <div class="input-group flex-nowrap mt-5" style="width: 180px;">
                          <span class="input-group-text" id="addon-wrapping">To</span>
                          <input type="text" class="form-control" placeholder="" aria-label="Username" aria-describedby="addon-wrapping">
                        </div>



                        <div class=" mt-2 input-group flex-nowrap" style="width: 160px;">
                          <span class="input-group-text" id="addon-wrapping">Price</span>
                          <input type="text" class="form-control" placeholder="1,000,000" aria-label="Username" aria-describedby="addon-wrapping">
                        </div>

                        <div class="input-group mt-2 " style="width: 215px;">
                          <label class="input-group-text" for="inputGroupSelect01">Dollars To</label>
                          <select class="form-select" id="inputGroupSelect01">
                            <option value="1">Haitham</option>
                            <option value="2">Abbas</option>


                          </select>
                        </div>

                        <div class=" mt-5 input-group flex-nowrap" style="width: 150px;">
                          <span class="input-group-text" id="addon-wrapping">Value</span>
                          <input type="text" class="form-control" value="750,000" aria-label="Username" aria-describedby="addon-wrapping">
                        </div>



                        </p>
                      </div>
                      <!-- Modal footer -->
                      <div class="d-grid gap-2 col-6 mx-auto mt-5 mb-5">
                        <button type="button" class="btn shadow" data-dismiss="modal" style="background-color: #36B3B8;color:white"><b>CONFIRM</b></button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>


              <!--1.67$  -->
              <div class="col-4">
                <div data-toggle="modal" data-target="#val60">
                  <img class="rounded border shadow-sm" src="img/touch/1.67.png" height="70px" width="100px">
                </div>
                <div class="modal fade" id="val60">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <!-- Modal Header -->
                      <div class="modal-header rounded shadow-sm" style="background-color: #36B3B8;height:40px">

                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                      </div>
                      <!-- Modal body -->
                      <div class="modal-body">
                        <p>
                          <img class="rounded border shadow-sm mt-2 ms-3" src="img/touch/60d.jpg" height="200px" width="300px">
                        <div class="input-group flex-nowrap mt-4" style="width: 180px;">
                          <span class="input-group-text" id="addon-wrapping">To</span>
                          <input type="text" class="form-control" placeholder="" aria-label="Username" aria-describedby="addon-wrapping">
                        </div>



                        <div class=" mt-2 input-group flex-nowrap" style="width: 160px;">
                          <span class="input-group-text" id="addon-wrapping">Price</span>
                          <input type="text" class="form-control" placeholder="1,000,000" aria-label="Username" aria-describedby="addon-wrapping">
                        </div>

                        <div class="mt-2">
                          <span class="input-group-text rounded-0" id="addon-wrapping" style="width: 120px;">Cards Used</span>
                        </div>


                        <div class="form-check ms-2 mt-2">
                          <input class="form-check-input " type="radio" name="flexRadioDefault" id="flexRadioDefault1" checked>
                          <label class="form-check-label " for="flexRadioDefault1">
                            1x <img src="img/touch/15.15.png" height="35px" width="45px">
                          </label>
                        </div>
                        <div class="form-check ms-2 mt-2 mb-2">
                          <input class="form-check-input " type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                          <label class="form-check-label " for="flexRadioDefault1">
                            2x <img src="img/touch/7.58.png" height="35px" width="45px">
                          </label>
                        </div>






                        <div class="input-group mt-2 " style="width: 215px;">
                          <label class="input-group-text" for="inputGroupSelect01">Dollars To</label>
                          <select class="form-select" id="inputGroupSelect01">
                            <option value="1">Haitham</option>
                            <option value="2">Abbas</option>


                          </select>
                        </div>

                        <div class=" mt-3 input-group flex-nowrap" style="width: 150px;">
                          <span class="input-group-text" id="addon-wrapping">Value</span>
                          <input type="text" class="form-control" value="750,000" aria-label="Username" aria-describedby="addon-wrapping">
                        </div>



                        </p>
                      </div>
                      <!-- Modal footer -->
                      <div class="d-grid gap-2 col-6 mx-auto mt-3 mb-4">
                        <button type="button" class="btn" data-dismiss="modal" style="background-color: #36B3B8;color:white">Confirm</button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>


              <!--3.79$ -->
              <div class="col-4">
                <div data-toggle="modal" data-target="#myModal">
                  <img class="rounded border shadow-sm" src="img/touch/3.79.png" height="70px" width="100px">
                </div>
                <div class="modal fade" id="myModal">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <!-- Modal Header -->
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                      </div>
                      <!-- Modal body -->
                      <div class="modal-body">
                        <p>
                        <div class="input-group flex-nowrap" style="width: 180px;">
                          <span class="input-group-text" id="addon-wrapping">To</span>
                          <input type="text" class="form-control" placeholder="haitham khansa" aria-label="Username" aria-describedby="addon-wrapping">
                        </div>

                        <div class="input-group mt-2 " style="width: 165px;">
                          <label class="input-group-text" for="inputGroupSelect01">From</label>
                          <select class="form-select" id="inputGroupSelect01">
                            <option selected>iPocket</option>
                            <option value="1">Wish</option>
                            <option value="2">Other</option>
                            <option value="3"></option>
                          </select>
                        </div>

                        <div class=" mt-2 input-group flex-nowrap" style="width: 150px;">
                          <span class="input-group-text" id="addon-wrapping">Pice</span>
                          <input type="text" class="form-control" placeholder="1,000,000" aria-label="Username" aria-describedby="addon-wrapping">
                        </div>

                        <div class=" mt-5 input-group flex-nowrap" style="width: 150px;">
                          <span class="input-group-text" id="addon-wrapping">Value</span>
                          <input type="text" class="form-control" value="750,000" aria-label="Username" aria-describedby="addon-wrapping">
                        </div>



                        </p>
                      </div>
                      <!-- Modal footer -->
                      <div class="modal-footer">
                        <button type="button" class="btn" data-dismiss="modal" style="background-color: #36B3B8;color:white">Confirm</button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>




            </div>


            <div class="row mt-3 align-items-start ">

              <!--4.5$ -->
              <div class="col-4">
                <div data-toggle="modal" data-target="#validity">
                  <img class="rounded border shadow-sm" src="img/touch/4.50.png" height="70px" width="100px">
                </div>
                <div class="modal fade" id="validity">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <!-- Modal Header -->
                      <div class="modal-header rounded shadow-sm" style="background-color: #36B3B8;height:40px">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                      </div>
                      <!-- Modal body -->
                      <div class="modal-body">
                        <p>

                          <img class="rounded border shadow-sm mt-2 ms-3" src="img/touch/30d.jpg" height="200px" width="300px">

                        <div class="input-group flex-nowrap mt-5" style="width: 180px;">
                          <span class="input-group-text" id="addon-wrapping">To</span>
                          <input type="text" class="form-control" placeholder="" aria-label="Username" aria-describedby="addon-wrapping">
                        </div>



                        <div class=" mt-2 input-group flex-nowrap" style="width: 160px;">
                          <span class="input-group-text" id="addon-wrapping">Price</span>
                          <input type="text" class="form-control" placeholder="1,000,000" aria-label="Username" aria-describedby="addon-wrapping">
                        </div>

                        <div class="input-group mt-2 " style="width: 215px;">
                          <label class="input-group-text" for="inputGroupSelect01">Dollars To</label>
                          <select class="form-select" id="inputGroupSelect01">
                            <option value="1">Haitham</option>
                            <option value="2">Abbas</option>


                          </select>
                        </div>

                        <div class=" mt-5 input-group flex-nowrap" style="width: 150px;">
                          <span class="input-group-text" id="addon-wrapping">Value</span>
                          <input type="text" class="form-control" value="750,000" aria-label="Username" aria-describedby="addon-wrapping">
                        </div>



                        </p>
                      </div>
                      <!-- Modal footer -->
                      <div class="d-grid gap-2 col-6 mx-auto mt-5 mb-5">
                        <button type="button" class="btn shadow" data-dismiss="modal" style="background-color: #36B3B8;color:white"><b>CONFIRM</b></button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>


              <!--7.58$  -->
              <div class="col-4">
                <a href="7.58.php">
                  <img class="rounded border shadow-sm  " src="img/touch/7.58.png" height="70px" width="100px">
                </a>
              </div>



              <!--15.15$ -->
              <div class="col-4">
                <div data-toggle="modal" data-target="#myModal">
                  <img class="rounded border shadow-sm" src="img/touch/15.15.png" height="70px" width="100px">
                </div>
                <div class="modal fade" id="myModal">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <!-- Modal Header -->
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                      </div>
                      <!-- Modal body -->
                      <div class="modal-body">
                        <p>
                        <div class="input-group flex-nowrap" style="width: 180px;">
                          <span class="input-group-text" id="addon-wrapping">To</span>
                          <input type="text" class="form-control" placeholder="haitham khansa" aria-label="Username" aria-describedby="addon-wrapping">
                        </div>

                        <div class="input-group mt-2 " style="width: 165px;">
                          <label class="input-group-text" for="inputGroupSelect01">From</label>
                          <select class="form-select" id="inputGroupSelect01">
                            <option selected>iPocket</option>
                            <option value="1">Wish</option>
                            <option value="2">Other</option>
                            <option value="3"></option>
                          </select>
                        </div>

                        <div class=" mt-2 input-group flex-nowrap" style="width: 150px;">
                          <span class="input-group-text" id="addon-wrapping">Pice</span>
                          <input type="text" class="form-control" placeholder="1,000,000" aria-label="Username" aria-describedby="addon-wrapping">
                        </div>

                        <div class=" mt-5 input-group flex-nowrap" style="width: 150px;">
                          <span class="input-group-text" id="addon-wrapping">Value</span>
                          <input type="text" class="form-control" value="750,000" aria-label="Username" aria-describedby="addon-wrapping">
                        </div>



                        </p>
                      </div>
                      <!-- Modal footer -->
                      <div class="modal-footer">
                        <button type="button" class="btn" data-dismiss="modal" style="background-color: #36B3B8;color:white">Confirm</button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>




            </div>

            <div class="row mt-3 align-items-start ">

              <!--22.73$ -->
              <div class="col-4">
                <div data-toggle="modal" data-target="#validity">
                  <img class="rounded border shadow-sm" src="img/touch/22.73.png" height="70px" width="100px">
                </div>
                <div class="modal fade" id="validity">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <!-- Modal Header -->
                      <div class="modal-header rounded shadow-sm" style="background-color: #36B3B8;height:40px">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                      </div>
                      <!-- Modal body -->
                      <div class="modal-body">
                        <p>

                          <img class="rounded border shadow-sm mt-2 ms-3" src="img/touch/30d.jpg" height="200px" width="300px">

                        <div class="input-group flex-nowrap mt-5" style="width: 180px;">
                          <span class="input-group-text" id="addon-wrapping">To</span>
                          <input type="text" class="form-control" placeholder="" aria-label="Username" aria-describedby="addon-wrapping">
                        </div>



                        <div class=" mt-2 input-group flex-nowrap" style="width: 160px;">
                          <span class="input-group-text" id="addon-wrapping">Price</span>
                          <input type="text" class="form-control" placeholder="1,000,000" aria-label="Username" aria-describedby="addon-wrapping">
                        </div>

                        <div class="input-group mt-2 " style="width: 215px;">
                          <label class="input-group-text" for="inputGroupSelect01">Dollars To</label>
                          <select class="form-select" id="inputGroupSelect01">
                            <option value="1">Haitham</option>
                            <option value="2">Abbas</option>


                          </select>
                        </div>

                        <div class=" mt-5 input-group flex-nowrap" style="width: 150px;">
                          <span class="input-group-text" id="addon-wrapping">Value</span>
                          <input type="text" class="form-control" value="750,000" aria-label="Username" aria-describedby="addon-wrapping">
                        </div>



                        </p>
                      </div>
                      <!-- Modal footer -->
                      <div class="d-grid gap-2 col-6 mx-auto mt-5 mb-5">
                        <button type="button" class="btn shadow" data-dismiss="modal" style="background-color: #36B3B8;color:white"><b>CONFIRM</b></button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>



              <!--77.22$ -->
              <div class="col-4">
                <div data-toggle="modal" data-target="#validity">
                  <img class="rounded border shadow-sm" src="img/touch/77.28.png" height="70px" width="100px">
                </div>
                <div class="modal fade" id="validity">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <!-- Modal Header -->
                      <div class="modal-header rounded shadow-sm" style="background-color: #36B3B8;height:40px">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                      </div>
                      <!-- Modal body -->
                      <div class="modal-body">
                        <p>

                          <img class="rounded border shadow-sm mt-2 ms-3" src="img/touch/30d.jpg" height="200px" width="300px">

                        <div class="input-group flex-nowrap mt-5" style="width: 180px;">
                          <span class="input-group-text" id="addon-wrapping">To</span>
                          <input type="text" class="form-control" placeholder="" aria-label="Username" aria-describedby="addon-wrapping">
                        </div>



                        <div class=" mt-2 input-group flex-nowrap" style="width: 160px;">
                          <span class="input-group-text" id="addon-wrapping">Price</span>
                          <input type="text" class="form-control" placeholder="1,000,000" aria-label="Username" aria-describedby="addon-wrapping">
                        </div>

                        <div class="input-group mt-2 " style="width: 215px;">
                          <label class="input-group-text" for="inputGroupSelect01">Dollars To</label>
                          <select class="form-select" id="inputGroupSelect01">
                            <option value="1">Haitham</option>
                            <option value="2">Abbas</option>


                          </select>
                        </div>

                        <div class=" mt-5 input-group flex-nowrap" style="width: 150px;">
                          <span class="input-group-text" id="addon-wrapping">Value</span>
                          <input type="text" class="form-control" value="750,000" aria-label="Username" aria-describedby="addon-wrapping">
                        </div>



                        </p>
                      </div>
                      <!-- Modal footer -->
                      <div class="d-grid gap-2 col-6 mx-auto mt-5 mb-5">
                        <button type="button" class="btn shadow" data-dismiss="modal" style="background-color: #36B3B8;color:white"><b>CONFIRM</b></button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>


            </div>


            <!-- Others-->
            <div class="border-top mt-3">
              <h6 class="mt-2"><b>Others</b></h6>
            </div>
            <div class="row align-items-start ">

              <!--start -->
              <div class="col-4">
                <div data-toggle="modal" data-target="#validity">
                  <img class="rounded border shadow-sm" src="img/touch/start.png" height="70px" width="100px">
                </div>
                <div class="modal fade" id="validity">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <!-- Modal Header -->
                      <div class="modal-header rounded shadow-sm" style="background-color: #36B3B8;height:40px">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                      </div>
                      <!-- Modal body -->
                      <div class="modal-body">
                        <p>

                          <img class="rounded border shadow-sm mt-2 ms-3" src="img/touch/30d.jpg" height="200px" width="300px">

                        <div class="input-group flex-nowrap mt-5" style="width: 180px;">
                          <span class="input-group-text" id="addon-wrapping">To</span>
                          <input type="text" class="form-control" placeholder="" aria-label="Username" aria-describedby="addon-wrapping">
                        </div>



                        <div class=" mt-2 input-group flex-nowrap" style="width: 160px;">
                          <span class="input-group-text" id="addon-wrapping">Price</span>
                          <input type="text" class="form-control" placeholder="1,000,000" aria-label="Username" aria-describedby="addon-wrapping">
                        </div>

                        <div class="input-group mt-2 " style="width: 215px;">
                          <label class="input-group-text" for="inputGroupSelect01">Dollars To</label>
                          <select class="form-select" id="inputGroupSelect01">
                            <option value="1">Haitham</option>
                            <option value="2">Abbas</option>


                          </select>
                        </div>

                        <div class=" mt-5 input-group flex-nowrap" style="width: 150px;">
                          <span class="input-group-text" id="addon-wrapping">Value</span>
                          <input type="text" class="form-control" value="750,000" aria-label="Username" aria-describedby="addon-wrapping">
                        </div>



                        </p>
                      </div>
                      <!-- Modal footer -->
                      <div class="d-grid gap-2 col-6 mx-auto mt-5 mb-5">
                        <button type="button" class="btn shadow" data-dismiss="modal" style="background-color: #36B3B8;color:white"><b>CONFIRM</b></button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>


              <!--smart  -->
              <div class="col-4">
                <div data-toggle="modal" data-target="#val60">
                  <img class="rounded border shadow-sm" src="img/touch/smart.png" height="70px" width="100px">
                </div>
                <div class="modal fade" id="val60">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <!-- Modal Header -->
                      <div class="modal-header rounded shadow-sm" style="background-color: #36B3B8;height:40px">

                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                      </div>
                      <!-- Modal body -->
                      <div class="modal-body">
                        <p>
                          <img class="rounded border shadow-sm mt-2 ms-3" src="img/touch/60d.jpg" height="200px" width="300px">
                        <div class="input-group flex-nowrap mt-4" style="width: 180px;">
                          <span class="input-group-text" id="addon-wrapping">To</span>
                          <input type="text" class="form-control" placeholder="" aria-label="Username" aria-describedby="addon-wrapping">
                        </div>



                        <div class=" mt-2 input-group flex-nowrap" style="width: 160px;">
                          <span class="input-group-text" id="addon-wrapping">Price</span>
                          <input type="text" class="form-control" placeholder="1,000,000" aria-label="Username" aria-describedby="addon-wrapping">
                        </div>

                        <div class="mt-2">
                          <span class="input-group-text rounded-0" id="addon-wrapping" style="width: 120px;">Cards Used</span>
                        </div>


                        <div class="form-check ms-2 mt-2">
                          <input class="form-check-input " type="radio" name="flexRadioDefault" id="flexRadioDefault1" checked>
                          <label class="form-check-label " for="flexRadioDefault1">
                            1x <img src="img/touch/15.15.png" height="35px" width="45px">
                          </label>
                        </div>
                        <div class="form-check ms-2 mt-2 mb-2">
                          <input class="form-check-input " type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                          <label class="form-check-label " for="flexRadioDefault1">
                            2x <img src="img/touch/7.58.png" height="35px" width="45px">
                          </label>
                        </div>






                        <div class="input-group mt-2 " style="width: 215px;">
                          <label class="input-group-text" for="inputGroupSelect01">Dollars To</label>
                          <select class="form-select" id="inputGroupSelect01">
                            <option value="1">Haitham</option>
                            <option value="2">Abbas</option>


                          </select>
                        </div>

                        <div class=" mt-3 input-group flex-nowrap" style="width: 150px;">
                          <span class="input-group-text" id="addon-wrapping">Value</span>
                          <input type="text" class="form-control" value="750,000" aria-label="Username" aria-describedby="addon-wrapping">
                        </div>



                        </p>
                      </div>
                      <!-- Modal footer -->
                      <div class="d-grid gap-2 col-6 mx-auto mt-3 mb-4">
                        <button type="button" class="btn" data-dismiss="modal" style="background-color: #36B3B8;color:white">Confirm</button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>


              <!--sss-->
              <div class="col-4 mb-5 ">
                <div data-toggle="modal" data-target="#myModal">
                  <img class="rounded border shadow-sm" src="img/touch/sss.png" height="70px" width="100px">
                </div>
                <div class="modal fade" id="myModal">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <!-- Modal Header -->
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                      </div>
                      <!-- Modal body -->
                      <div class="modal-body">
                        <p>
                        <div class="input-group flex-nowrap" style="width: 180px;">
                          <span class="input-group-text" id="addon-wrapping">To</span>
                          <input type="text" class="form-control" placeholder="haitham khansa" aria-label="Username" aria-describedby="addon-wrapping">
                        </div>

                        <div class="input-group mt-2 " style="width: 165px;">
                          <label class="input-group-text" for="inputGroupSelect01">From</label>
                          <select class="form-select" id="inputGroupSelect01">
                            <option selected>iPocket</option>
                            <option value="1">Wish</option>
                            <option value="2">Other</option>
                            <option value="3"></option>
                          </select>
                        </div>

                        <div class=" mt-2 input-group flex-nowrap" style="width: 150px;">
                          <span class="input-group-text" id="addon-wrapping">Pice</span>
                          <input type="text" class="form-control" placeholder="1,000,000" aria-label="Username" aria-describedby="addon-wrapping">
                        </div>

                        <div class=" mt-5 input-group flex-nowrap" style="width: 150px;">
                          <span class="input-group-text" id="addon-wrapping">Value</span>
                          <input type="text" class="form-control" value="750,000" aria-label="Username" aria-describedby="addon-wrapping">
                        </div>



                        </p>
                      </div>
                      <!-- Modal footer -->
                      <div class="modal-footer">
                        <button type="button" class="btn" data-dismiss="modal" style="background-color: #36B3B8;color:white">Confirm</button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>




            </div>




















          </div>
        </div>



        <div class="collapse mt-3" id="collapseExampl">
          <div class="card card-body">
            <div class="row">
              <div class="col">
                <img class="rounded" src="img/alfa/alfa77.28.png" height="70px" width="100px">
              </div>
              <div class="col">
                <img class="rounded" src="img/alfa/alfa77.28.png" height="70px" width="100px">
              </div>
              <div class="col">
                <img class="rounded" src="img/alfa/alfa77.28.png" height="70px" width="100px">
              </div>
            </div>



            <div class="tab-pane fade" id="profile-tab-pane" role="tabpanel" aria-labelledby="profile-tab" tabindex="0"></div>
            <div class="tab-pane fade" id="contact-tab-pane" role="tabpanel" aria-labelledby="contact-tab" tabindex="0">hi</div>




          </div>











          <!-- Add Bootstrap CSS -->
          <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

          <!-- Add Bootstrap JS and jQuery -->




          <!--
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

-<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
 
-<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
-<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>
-->

          <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>

</html>