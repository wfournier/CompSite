<!DOCTYPE html>
<html lang="en">
<head>
    <?php include "Shared/Head.html"; ?>
    <title>Compsci Home</title>
</head>
<body>
<?php include "Shared/Header.php"; ?>
<main style="background-color: lightgray">
    <style>
        .row {
            margin-right: 0;
            margin-left: 0;
        }
    </style>
    <div class="row">
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

            </div>
        </div>
        <div class="row" style="padding: 30px 10px 20px 10px">
            <div class="col-xs-6" style="padding: 20px 50px 0 50px">
                <div id="News" class="panel panel-primary">
                    <div class="panel-body" style="max-height: 450px;overflow-y: scroll;">
                        <h3>News</h3>
                        <ul>
                            <li>
                                <p>Here the College can put different news with the date to inform people
                                    about
                                    ongoing
                                    news</p>
                            </li>
                            <li>
                                <p>They will be able to do this in many bullet point</p>
                            </li>
                            <li>
                                <p>They will be able to do this in many bullet point</p>
                            </li>
                            <li>
                                <p>They will be able to do this in many bullet point</p>
                            </li>
                            <li>
                                <p>They will be able to do this in many bullet point</p>
                            </li>
                            <li>
                                <p>They will be able to do this in many bullet point</p>
                            </li>
                            <li>
                                <p>They will be able to do this in many bullet point</p>
                            </li>
                            <li>
                                <p>They will be able to do this in many bullet point</p>
                            </li>
                            <li>
                                <p>They will be able to do this in many bullet point</p>
                            </li>
                            <li>
                                <p>They will be able to do this in many bullet point</p>
                            </li>
                            <li>
                                <p>They will be able to do this in many bullet point</p>
                            </li>
                            <li>
                                <p>They will be able to do this in many bullet point</p>
                            </li>
                            <li>
                                <p>They will be able to do this in many bullet point</p>
                            </li>
                            <li>
                                <p>They will be able to do this in many bullet point</p>
                            </li>
                            <li>
                                <p>They will be able to do this in many bullet point</p>
                            </li>
                            <li>
                                <p>They will be able to do this in many bullet point</p>
                            </li>
                            <li>
                                <p>They will be able to do this in many bullet point</p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-xs-6" style="padding: 20px 100px 0 100px">
                <div id="fb-root"></div>
                <script>(function (d, s, id) {
                        var js, fjs = d.getElementsByTagName(s)[0];
                        if (d.getElementById(id)) return;
                        js = d.createElement(s);
                        js.id = id;
                        js.src = 'https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.11';
                        fjs.parentNode.insertBefore(js, fjs);
                    }(document, 'script', 'facebook-jssdk'));</script>
                <div class="fb-page" data-href="https://www.facebook.com/HexagonalStudio/" data-tabs="timeline"
                     data-small-header="false" data-adapt-container-width="true" data-hide-cover="false"
                     data-show-facepile="true">
                    <blockquote cite="https://www.facebook.com/HexagonalStudio/"
                                class="fb-xfbml-parse-ignore">
                        <a href="https://www.facebook.com/HexagonalStudio/">HexaGonal Studio</a></blockquote>
                </div>
            </div>
        </div>


</main>

<?php include "Shared/Footer.html"; ?>
</body>
</html>