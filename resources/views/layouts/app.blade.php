<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
    <link rel="icon" href="images/favicon.ico" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css?family=Oxygen" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css">
    <title>South Midlands Powerlifting</title>
</head>
<body>

<!-- navbar  -->
<nav class="navbar navbar-inverse">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.html">South Midlands Powerlifting</a>
        </div>
        <div class="collapse navbar-collapse" id="navbar">
            <ul class="nav navbar-nav">
                <li class="active"><a href="index.html"><span class="glyphicon glyphicon-home"></span> Home</a></li>
                <li><a href="/events"><span class="glyphicon glyphicon-calendar"></span> Events</a></li>
                <li><a href="/results"><span class="glyphicon glyphicon-list-alt"></span> Results</a></li>
                <li><a href="/records"><span class="glyphicon glyphicon-book"></span> Records</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right hidden-sm hidden-md">
                <li><a href="https://www.britishpowerlifting.org/buy-membership" target="_blank"><span
                                class="glyphicon glyphicon-edit"></span> Join British Powerlifting</a></li>
                <li class="hidden-md hidden-sm hidden-lg"><a class="socialMedia" target="_blank"
                                                             title="Find us on Facebook"
                                                             href="https://www.facebook.com/groups/418230201685242/"><i
                                class="fa fa-facebook-square fa-2x" aria-hidden="true"> <span class="media-font-change">Facebook</span></i></a>
                </li>
                <li class="visable-xs hidden-sm hidden-md hidden-lg"><a class="socialMedia" target="_blank"
                                                                        title="Find us on Instagram"
                                                                        href="https://www.instagram.com/smpowerlifting/"><i
                                class="fa fa-instagram fa-2x" aria-hidden="true"> <span class="media-font-change">Instagram</span></i></a>
                </li>
            </ul>
        </div>
    </div>
</nav>


<!-- Jumotron -->
<div class="jumbotron hidden-xs">
    <div class="col-xs-3 col-md-3 col-md-offset-9 col-xs-offset-9">
        <a class="socialMedia" target="_blank" title="Find us on Facebook"
           href="https://www.facebook.com/groups/418230201685242/"><i class="fa fa-facebook-square fa-2x"
                                                                      aria-hidden="true"></i></a>
        <a class="socialMedia" target="_blank" title="Find us on Instagram"
           href="https://www.instagram.com/smpowerlifting/"><i class="fa fa-instagram fa-2x" aria-hidden="true"></a></i>
    </div>

</div>


@yield('content')


<!-- division icons footer -->
<br>
<div class="container-fluid">
    <div class="row">

        <!-- SMPL side logo - hidden when in xs -->
        <div class="col-sm-2 col-sm-offset-1 hidden-xs"><img src="images/smpa_left.png" alt="" class="bottomImage"/>
        </div>

        <!-- blank column to nest other rows in - hidden in xs -->
        <div class="col-sm-6 hidden-xs">
            <div class="row">
                <div class="col-sm-3 col-sm-offset-1" id="vcenterEpa"><a href="https://www.englishpowerlifting.co.uk"
                                                                         target="_blank"><img src="images/epa_EPA.jpg"
                                                                                              alt="English Powerlifting Association"
                                                                                              class="bottomImage centerText"/></a>
                </div>
                <div class="col-sm-4"><a href="index.html"><img src="images/smpl_circle_333.png"
                                                                alt="South Midlands Powerlifting Association"
                                                                class="bottomImage centerText"/></a></div>
                <div class="col-sm-3" id="vcenterBpow"><a href="https://www.britishpowerlifting.org/"
                                                          target="_blank"><img src="images/BritishPowerlifting.png"
                                                                               alt="British Powerlifting"
                                                                               class="bottomImage centerText"/></a>
                </div>
            </div>
            <!-- IPF logo -->
            <div class="row">
                <div class="col-sm-8 col-sm-offset-2"><a href="http://www.powerlifting-ipf.com/" target="_blank"><img
                                src="images/ipf_international_powerlifting_federation.png"
                                alt="International Powerlifting Federation" class="bottomImage centerText"/></a></div>
            </div>
        </div>

        <!-- blank column to nest other rows in - only for xs -->
        <div class="col-xs-offset-2 col-xs-8 hidden-sm hidden-md hidden-lg">
            <div class="row">
                <div class="col-xs-offset-3 col-xs-6"><a href="index.html"><img src="images/smpl_circle_333.png"
                                                                                alt="South Midlands Powerlifting Association"
                                                                                class="bottomImage centerText"/></a>
                </div>
                <div class="col-xs-5 col-xs-offset-1"><a href="https://www.englishpowerlifting.co.uk"
                                                         target="_blank"><img src="images/epa_EPA.jpg"
                                                                              alt="English Powerlifting Association"
                                                                              class="bottomImage centerText"/></a></div>
                <div class="col-xs-5" id=><a href="https://www.britishpowerlifting.org/" target="_blank"><img
                                src="images/BritishPowerlifting.png" alt="British Powerlifting"
                                class="bottomImage centerText"/></a></div>
            </div>

            <!-- IPF logo -->
            <div class="row">
                <div class="col-xs-12"><a href="http://www.powerlifting-ipf.com/" target="_blank"><img
                                src="images/ipf_international_powerlifting_federation.png"
                                alt="International Powerlifting Federation" class="bottomImage centerText"/></a></div>
            </div>
        </div>

        <!-- SMPL side logo - hidden when in xs -->
        <div class="col-sm-2 hidden-xs"><img src="images/smpa_right.png" alt="" class="bottomImage"/></div>


    </div>
</div>

</body>
</html>
