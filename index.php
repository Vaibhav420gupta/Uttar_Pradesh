`<html lang="en">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Welcome to Uttar Pradesh</title>
        <!-- Bootstrap Core CSS -->
        <link href="css/bootstrap.css" rel="stylesheet">
        <!-- Custom CSS -->
        <link href="css/style.css" rel="stylesheet">
        <!-- jQuery -->
        <script src="js/jquery-3.5.1.min.js"></script>
        <!-- Bootstrap Core JavaScript -->
        <script src="js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
          
        <link rel="icon" href="img/circle.png" type="image/png" sizes="16x16">
    </head>

    <body style="padding-top: 0px;">
        <!-- Header -->
        <?php
        include'includes/header.php';
        ?>
        <div id="content">
            <!--Main banner image-->
            <div id="banner_image">
                <div class="container">	
                    <center>
                        <div id="banner_content">
                            <h1>NAMASTE UTTAR PRADESH</h1>
                            <br/><p>“THE WORLD IS A BOOK AND THOSE WHO DO NOT TRAVEL READ ONLY A PAGE.”</p>
                            <a  href="#Places" class="btn btn-danger btn-lg active">Explore Now</a>
                        </div>
                    </center>
                </div>
            </div>
            <div id="Places" style="padding: 50px 0 25px 0;"><center><h2><u>Places</u></h2></center></div>
            
            
            <div class="container">
                <div class="row text-center" id="item_list">
                    <div class="col-sm-4">
                        <a href="prayagraj.php" >
                            <div class="thumbnail">
                                <img src="img/2.jpg" alt="">
                                <div class="caption">
                                    <h3>PRAYAGRAJ</h3>
                                </div>
                            </div> 
                        </a>
                    </div>

                    <div class="col-sm-4">
                        <a href="varanasi.php" >
                            <div class="thumbnail">
                                <img src="img/3.jpg" alt="">
                                <div class="caption">
                                    <h3>VARANASI</h3>
                                </div>
                            </div> 
                        </a>
                    </div>

                    <div class="col-sm-4">
                        <a href="ayodhya.php" >
                            <div class="thumbnail">
                                <img src="img/4.jpg" alt="">
                                <div class="caption">
                                    <h3>AYODHYA</h3>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>

        <div class="container">
                <div class="row text-center" id="item_list">
                    <div class="col-sm-4">
                        <a href="lucknow.php" >
                            <div class="thumbnail">
                                <img src="img/5.jpg" alt="">
                                <div class="caption">
                                    <h3>LUCKNOW</h3>
                                </div>
                            </div> 
                        </a>
                    </div>

                    <div class="col-sm-4">
                        <a href="agra.php" >
                            <div class="thumbnail">
                                <img src="img/6.jpg" alt="">
                                <div class="caption">
                                    <h3>AGRA</h3>
                                </div>
                            </div> 
                        </a>
                    </div>

                    <div class="col-sm-4">
                        <a href="vrindhavan.php" >
                            <div class="thumbnail">
                                <img src="img/7.jpg" alt="">
                                <div class="caption">
                                    <h3>VRINDAVAN</h3>
                                    <button class="button" id="myBtn" title="Go to top">Top</button>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            						
						</div>
                    
            <?php 
        include'includes/footer.php';
        ?>
        </div>
        </body> 
</html>