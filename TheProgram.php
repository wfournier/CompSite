<!DOCTYPE html>
<html lang="en">
<head>
    <?php include "Shared/Head.html"; ?>
    <title>Compsci Home</title>
</head>
<body>
<main style="background-color: lightgray">
    <style>
        .row {
            margin-right: 0;
            margin-left: 0;
        }
    </style>
    <?php include "Shared/HeaderProg.php"; ?>
    <div class="row">
        <h1>About the Program</h1>
        <div class="col-xs-12" id="carouselCol">
            <div id="myCarousel" class="carousel slide" data-ride="carousel">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                    <li data-target="#myCarousel" data-slide-to="1"></li>
                    <li data-target="#myCarousel" data-slide-to="2"></li>
                </ol>

                <!-- Wrapper for slides -->
                <div class="carousel-inner" id="carousel">
                    <div class="item active" id="about">
                        <a href="About.php">
                            <div class="carousel-caption">
                                <h3>About</h3>
                            </div>
                        </a>
                    </div>

                    <div class="item" id="classes">
                        <a href="Classes.php">
                            <div class="carousel-caption">
                                <h3>Classes</h3>
                            </div>
                        </a>
                    </div>

                    <div class="item" id="requirements">
                        <a href="Requirements.php">
                            <div class="carousel-caption">
                                <h3>Requirements</h3>
                            </div>
                        </a>
                    </div>
                </div>

                <!-- Left and right controls -->
                <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#myCarousel" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
    </div>
    <div class="row">

        <div class="row">
            <div class="col-xs-12">
                <p>a</p>
                <p>a</p><p>a</p><p>a</p>
                <p>a</p>
                <p>a</p>
                <p>a</p><p>a</p><p>a</p>
                <p>a</p>
                <p>a</p><p>a</p>
            </div>
        </div>
        <div class="row" style="padding: 30px 10px 20px 10px">

        </div>
    </div>

</main>

<?php include "Shared/Footer.html"; ?>
</body>
</html>