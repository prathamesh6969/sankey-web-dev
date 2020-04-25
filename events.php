<html lang="en">

<head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="X-UA-Compatible" content="IE=Edge" />

        <meta name="description"
                content="Sankey Solutions :  World's First Technology Services Company Designed As An Innovation Lab">
        <meta name="keywords"
                content="Sankey Solutions, sankey, Sankey, solutions, Solutions, technology solutions, technologies, management, gep, innovation, IT, Computer Science">
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
                integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
                crossorigin="anonymous"></script>
            <link rel="stylesheet" href="css/style.css">
            <link rel="stylesheet" href="css/works.css">
            <link rel="stylesheet" type="text/css" href="css/animate.css">
            <link rel="stylesheet" type='text/css' media='all' href="css/events.css">
            <link rel="stylesheet" href="css/reveal-css/reset.css">
            <link rel="stylesheet" href="css/reveal-css/reveal.css">
            <!-- <link rel="stylesheet" href="css/reveal-css/theme/black.css"> -->
        
        <link rel="icon" href="assets/favicon.jpg" type="image/gif" sizes="16x16">
        <title>Sankey Solutions : World's First Technology Services Company Designed As An Innovation Lab</title>
</head>

<body>
        <?php
            $link = mysqli_connect("localhost", "root", "root", "demo");

            if($link === false){
            die("ERROR: Could not connect. " . mysqli_connect_error());
            }
        ?>
        <div class="top-nav">
            <a href="index.html"><img src="assets/logo.png" alt="Sankey solutions"></a>
            <div id="top-nav-content">
                <a href="writetoceo.html" >WRITE TO CEO</a>
                <div class="mobile-menu-icon">
                    <img src="./assets/Hamburger2.svg" id="portrait" alt="">
                    <img src="./assets/events/hamburger.svg" id="landscape" alt=""></div>
            </div>
        </div>
        <div class="events-list animated fadeInUp" style="transition-duration: 10s;">
            <div class="events-title">
                Events
            </div>
            <div class="events-inner-list">
            <?php
                $sql = "SELECT * FROM events ORDER BY e_date DESC"; 
                if($result = mysqli_query($link, $sql)){
                    if(mysqli_num_rows($result) > 0){
                        while($row = mysqli_fetch_array($result)){
                            $sid = $row['sid'];
            ?>
            <div class="events-box" onclick="changeSlide(<?php echo $sid ?>)">
                    <div class="square-box">                  
                        <?php echo date('j M Y',strtotime($row['e_date']));?>
                    </div>
                    <div class="vertical-line"></div>
                    <div class="events-caption">
                        <?php
                            $sql = "SELECT * FROM events"; 
                        ?> 
                        <h3>
                            <?php echo $row['e_name'];?>
                        </h3>
                        <h5>
                            <?php echo $row['e_location'];?>
                        </h5>
                    </div>
                </div>
                <div class="horizontal-line"></div>
                <?php }?>
                <?php mysqli_free_result($result);
                } else{
                echo "No records matching your query were found.";
                }
                } else{
                echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
                }?>
            </div>
            </div>
            <div class="mobile-events-list animated fadeInUp" style="transition-duration: 10s;">
                <div class="events-title">
                    Events
                </div>
                <div class="events-inner-list">
                    <?php
                    $sql = "SELECT * FROM events ORDER BY e_date DESC"; 
                    if($result = mysqli_query($link, $sql)){
                        if(mysqli_num_rows($result) > 0){
                            while($row = mysqli_fetch_array($result)){
                    ?>
                    <div class="events-box" id="<?php echo $row['eid'];?>" onclick="changeSlide(this.id)">
                        <div class="square-box">
                            <?php echo date('j M Y',strtotime($row['e_date']));?>
                        </div>
                        <div class="vertical-line"></div>
                        <div class="events-caption">
                            <h3><?php echo $row['e_name'];?></h3>
                            <h5><?php echo $row['e_location'];?></h5>
                        </div>
                    </div>
                    <div class="horizontal-line"></div>
                    <?php }?>
                    <?php mysqli_free_result($result);
                    } else{
                    echo "No records matching your query were found.";
                    }
                    } else{
                    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
                    }?>
                </div>
            </div>
        <div class="reveal" id="revealplugin">
            <div class="slides animated fadeInRight">
                <?php
                    $sql = "SELECT * FROM events ORDER BY e_date DESC"; 
                    if($result = mysqli_query($link, $sql)){
                        if(mysqli_num_rows($result) > 0){
                            while($row = mysqli_fetch_array($result)){
                ?>
                <section id="<?php echo $row['sid'];?>">
                    <span class="close"></span>
                    <div class="events-image" style="width: 80%">
                        <img src="<?php echo $row['e_image'];?>" style="width:100%;height: 100%;object-fit:contain">
                    </div>
                    <div class="events-header">
                        <div class="events-name">
                            <?php echo $row['e_name'];?>
                        </div>
                        <div class="events-date-place">
                            <?php echo $row['e_location'];?>
                            <span class="pipe-symbol">&#124;</span>
                            <?php echo date('j M Y',strtotime($row['e_date']));?>
                        </div>
                    </div>
                    <div class="awards-name">
                        <?php echo $row['e_title'];?>
                    </div>
                    <div class="events-description">
                        <?php echo $row['e_content'];?>
                    </div>
                    <div class="read-more">
                        <a href="<?php echo $row['e_link'];?>" target="_blank">
                            <u>Read More</u>
                            <!-- <i class="fa fa-instagram fa-lg" id="social-icon"></i>    -->
                        </a>
                    </div>
                    <div class="mobile-navigation-button">
                        <div class="left-button" onclick="changeSlidePrev()">
                        </div>
                        <div class="right-button" onclick="changeSlideNext()">
                        </div>
                    </div>
                </section>
                <?php }?>
                <?php mysqli_free_result($result);
                } else{
                echo "No records matching your query were found.";
                }
                } else{
                echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
                }?>
            </div>
        </div>    

        <div class="footer animated fadeInUp animation-2x" style="background-color: black">
                <div class="copyright-text">
                    Copyright <span>&#9400;</span> 2019 Sankey Solutions, All rights reserved
                </div>
                <div class="connect ">
                <div class="connect-item "> <a href="https://www.facebook.com/sankeysolutions/?epa=SEARCH_BOX" target="_blank"><i class="fa fa-facebook-square fa-lg"></i></a></div>
                <div class="connect-item "><a href="https://www.instagram.com/sankey_solutions/" target="_blank"><i class="fa fa-instagram fa-lg"></i></a></div>
                <div class="connect-item "><a href="https://twitter.com/sankeysolutions" target="_blank"><i class="fa fa-twitter-square fa-lg"></i></a></div> 
                <div class="connect-item "><a href="https://www.linkedin.com/company/sankey-solutions/" target="_blank"><i class="fa fa-linkedin fa-lg"></i></i></a></div> 
                </div>
        </div>
        <div class="right-nav">
            <div class="right-nav-content" id="journey"><a id="journey-link" href="journey.html">JOURNEY</a></div>
            <div class="right-nav-content" id="team"><a id="team-link" href="team.html" >TEAM</a></div>
            <div class="right-nav-content" id="services"><a id="services-link" href="services.html" >SERVICES</a></div>
            <div class="right-nav-content" id="technology"><a id="technology-link" href="technologies.html">TECHNOLOGIES</a></div>
            <div class="right-nav-content" id="blogs"><a id="blogs-link" href="home/" >BLOGS</a></div>
            <div class="right-nav-content" id="events"><a id="events-link" href="events.html" >EVENTS</a></div>
            <div class="right-nav-content" id="works"><a id="works-link" href="works.html" >WORKS</a></div>
    </div>
    <div class="left-nav">
            <div id="career"><a id="career-link" href="careers.html" >CAREERS</a></div>
            <div id="contactus" ><a id="contactus-link" href="contactus.html" >CONTACT US</a></div>
    </div>
        <div class="mobile-menu">
                <div class="mobile-menu-exit"><i class="fa fa-times-circle fa-lg"></i></div>
                <div class="mobile-menu-item">
                        <div class="menu-item animation-1x "><a href="journey.html">JOURNEY</a></div>
                        <div class="menu-item animation-2x1"><a href="team.html">TEAM</a></div>
                        <div class="menu-item animation-3x"><a href="services.html">SERVICES</a></div>
                        <div class="menu-item animation-4x"><a href="technologies.html">TECHNOLOGIES</a></div>
                        <div class="menu-item animation-5x"><a href="home/">BLOGS</a></div>
                        <div class="menu-item animation-6x"><a href="events.html" >EVENTS</a></div>
                        <div class="menu-item animation-7x"><a href="works.html" >WORKS</a></div>
                        <div class="menu-item animation-8x"><a href="careers.html">CAREERS</a></div>
                        <div class="menu-item animation-9x"><a href="contactus.html">CONTACT US</a></div>
                </div>
                <div class="mobile-menu-footer">
                    <div class="social-icons">
                        <div class="connect-item animation-1x" > <a href="https://www.facebook.com/sankeysolutions/?epa=SEARCH_BOX"><i class="fa fa-facebook-square fa-lg"></i></a></div>
                        <div class="connect-item animation-3x"><a href="https://www.instagram.com/sankey_solutions/"><i class="fa fa-instagram fa-lg"></i></a></div>
                        <div class="connect-item animation-5x" ><a href="https://www.linkedin.com/company/sankey-solutions/"><i class="fa fa-linkedin fa-lg"></i></i></a></div> 
                        <div class="connect-item animation-7x" ><a href="https://twitter.com/sankeysolutions"><i class="fa fa-twitter-square fa-lg"></i></a></div> 
                    </div>
                    <div class="copyright-text">
                    Copyright <span>&#9400;</span> 2019 Sankey Solutions, All rights reserved
                    </div> 
                </div>
    </div>
        <?php
            mysqli_close($link);
        ?>
        <!--JavaScript -->
        <script src="js/reveal.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script>
            Reveal.initialize({
                width:'100%',
                height:'100%',
                controls: false,
                });
            
            function changeSlidePrev(){
                Reveal.prev();
            }
            function changeSlideNext(){
                Reveal.next();
            }
            // const count = new CountUp('client-count',0, 54);

            // $(document).ready(function () {
            //     $("#intercon").css({'background-color': '#54C5D0'});
            // });

            $('.mobile-events-list').click(function(){
                $('.mobile-events-list').css({'display' : 'none'});
                $('.reveal').css({'display' : 'flex'
                });
            });

            $('.close').click(function(){
                $('.reveal').css({'display' : 'none'
                });
                $('.mobile-events-list').css({'display' : 'flex'});
            });

            function changeSlide(x)
            {
                console.log(x);
                var indices = Reveal.getIndices( document.getElementById( x ) );
                // console.log(indices);
                Reveal.navigateTo(indices.h,indices.v);   
            }

            // function change(y){
            //     console.log(y);
            //     $(".square-box").css({'background-color' : '#54C5D0'});
            // }
            //mobile-menu
            $('.mobile-menu-icon').click(function () {
                    $('.mobile-menu').toggleClass('open');
                    $('.menu-item').toggleClass('animated fadeInLeft');
                    $('.connect-item').toggleClass('animated fadeInUpBig');
            });
            $(".mobile-menu-exit").click(function () {
                    $('.menu-item').removeClass('animated fadeInLeft ');
                    $('.connect-item').removeClass('animated fadeInUpBig');
                    $('.mobile-menu').removeClass('open');
            });

            $(document).ready(function(){
                $('#events-link').css({
                    "color" : "#03729B"
                });
            });
        </script>
</body>
</html>