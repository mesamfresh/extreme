<?php include 'header.php'; ?>
<link rel="stylesheet" href="css/styles.css">
<link rel="stylesheet" href="css/materials.css">

<style>
    /* Remove the navbar's default margin-bottom and rounded borders */
    .navbar {
        margin-bottom: 0;
        border-radius: 0;
    }

    /* Set height of the grid so .sidenav can be 100% (adjust as needed) */
    .row.content {height: 450px}

    /* Set gray background color and 100% height */
    .sidenav {
        padding-top: 20px;
        background-color: #f1f1f1;
        height: 100%;
    }

    /* Set black background color, white text and some padding */
    footer {
        background-color: #555;
        color: white;
        padding: 15px;
    }

    /* On small screens, set height to 'auto' for sidenav and grid */
    @media screen and (max-width: 767px) {
        .sidenav {
            height: auto;
            padding: 15px;
        }
        .row.content {height:auto;}

    }
    .col-md-4{
       text-align: center;
    }
    .thumbnail{
        text-align: center;
        height: 300px;
    }
</style>

<body>
<nav class="navbar navbar-inverse">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <img class="displayr" src="img/displaysafe.jpg">
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav">
                <li><a href="index.php">Home</a></li>
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Advertentie <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="start-ups.php">Start-ups</a></li>
                        <li><a href="bestaande-bedrijven.php">Bestaande bedrijven</a></li>
                    </ul>
                </li>
                <li class="active"><a href="partners.php">Partners</a></li>
                <li><a href="aanmelden.php">Aanmelden</a></li>
                <li><a href="contact.php">Contact</a></li>
            </ul>
        </div>
    </div>
</nav>
    <P><h2 class="hoofdtype1">Welkom op de Partnerspagina</h2></P>
    <p><h4 class="hoofdtype1">Hier komen grote bedrijven die je kunt aanspreken om je eigen bedrijf te starten of te verbeteren. </h4></p>
<div class="tabs">
    <div class="tab" id="tab1" onclick=
    "document.getElementById('card1').style.display='block';
            document.getElementById('card2').style.display='none';
            document.getElementById('card3').style.display='none';">
        Mediamarkt
    </div>
    <div class="tab" id="tab2" onclick=
    "document.getElementById('card1').style.display='none';
                document.getElementById('card2').style.display='block';
                document.getElementById('card3').style.display='none'">
        Shell
    </div>
    <div class="tab" id="tab3" onclick=
    "document.getElementById('card1').style.display='none';
                document.getElementById('card2').style.display='none';
                document.getElementById('card3').style.display='block'">
        Philips
    </div>
</div>
<div class="cards" id="card1" style="display: none;">
    <div class="content-left">
        Mediamarkt
        <div class="x-icon" onclick=
        "document.getElementById('card1').style.display='none';">
            x</div>
    </div>
    <div class="content-right"> Dat was makkelijk</div>
</div>
<div class="cards" id="card2" style="display: none;">
    <div class="content-left">
        Shell
        <div class="x-icon" onclick=
        "document.getElementById('card2').style.display='none';">
            x</div>
    </div>
    <div class="content-right"> Heel erg simpel</div>
</div>
<div class="cards" id="card3" style="display: none;">
    <div class="content-left">
        Philips
        <div class="x-icon" onclick=
        "document.getElementById('card3').style.display='none';">
            x</div>
    </div>
    <div class="content-right"> Nou vaker doen.</div>
</div>

</body>

