

<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->

<html>
    <head>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

        <style>
            body{
                color: #c3c3c3;
                overflow-x:hidden ;
            }


            :root{
                --backgroundcolor:#1f1f21;
                --text-color:#fff;
                --main-color:#ffae00;
            }
            .spacer{
                aspect-ratio: 960/240;
                width: 100%;
                background-repeat: no-repeat;
                background-position: center;
                background-size: cover;
            }
            .layer{
                background-image: url("assets/layer.svg");
            }
            .layer2{
                background-image: url("assets/layer2.svg");
            }

            .btn{

            }

            .btn:hover{
                transform: translateY(-5px);
                background: transparent;
                color:#ffffff;
            }
            .menuBUtton{
                background: linear-gradient(130.08deg,#383528 0%,#191919 100%);
                box-shadow: 0px 20px 40px #00000070;
                border: 1px solid #3b3b3b;
                padding: 10px 20px;
                border-radius: 100px;
                align-items: center;
                cursor: pointer;
            }
            section{
              padding: 0 15%;
                position: relative;

                min-height: 400px;
            }
            .home{
                background: #1f1f21;
                position: relative;
                width: 100%;
                height: 90vh;
                display: flex;
                align-items: center;
                justify-content: space-between;
                gap: 30px;
            }


        </style>

        <link rel="stylesheet" type="text/css" href="style.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,300;0,500;0,600;0,800;1,700&display=swap" rel="stylesheet">
        <meta charset="UTF-8">
        <link rel="stylesheet"
              href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
        <title></title>
    </head>
    <body>

    <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
        <div class="container-fluid">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active" href="#">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#AboutMe">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="PortfolioPage.html">Portfolio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#contact">Contact</a>
                </li>

            </ul>
        </div>

    </nav>
    <section class="home">
        <div class="home-text">



            <div class="wrapper">
                <div class="static-text">I'm a </div>
                <ul class="dynamic-text">
                    <li><span></span></li>
                    <li><span>Developer</span></li>
                    <li><span>UI Designer</span></li>
                    <li><span>SW Tester</span></li>
                </ul>
            </div>
            <h1>Wei Siang</h1>
            <p>I do wireframe, UI design and program for website  <br>and  android apps as well as software testing.</p>
            <div class="btn">
                <a href="#" class="btn" style="display: inline-block;
                padding: 14px 34px;
                background: var(--main-color);
                color: var(--text-color);
                border: 2px solid var(--main-color);
                margin-top: 15px;
                "> Download CV</a>
            </div>
        </div>
        <div class="home-img">
                <img style="object-fit: contain" src="assets/pfp.png" width="400">
        </div>

    </section>
        <div class="layer spacer"><h1 style="color: #000000;text-align: center; transform: translate(0px,270px)">About Me</h1></div>

<!---------------------------------------------About Me--------------------------------------------*/-->

        <div class="AboutMe">

            <div class="container">
                <div class="row">
                        <div class="Aboutdes">
                        <p>Passionate with creating webpages with UI/UX User Interface,
                            dedicate to improve coding skills through Youtube and Udemy coding tutorials
                            .</p>
                        <p>I'm eager to collaborate with like-minded individuals and organizations to bring innovative projects to life.</p>
                        </div>
                    <h1 style="text-align: center;margin-top: 45px;color: #000000;">My Skills</h1>
                        <div class="container" style="padding-top: 30px">
                            <div class="row">
                                <div class="about-left">
                                    <h3 style="text-align: center">Coding
                                    </h3>
                                    <div class="container" style="padding-top: 30px" >
                                        <div class="row">
                                            <div class="col-md-4">
                                                <img src="assets/html_css.png" alt="HTML and CSS"style="width: 220px">
                                            </div>
                                            <div class="col-md-2" style="padding-left: 30px">
                                                <img src="assets/java.png" alt="Java"style="width: 100px">
                                            </div>
                                            <div class="col-md-3" style="padding-top: 20px;padding-left: 50px">
                                                <img src="assets/sql.png" alt="SQL"style="width: 100px">

                                            </div>
                                            <div class="col-md-3" style="padding-top: 25px">
                                                <img src="assets/python.png" alt="Python"style="width: 120px">

                                            </div>
                                        </div>
                                    </div>
                                    <div class="container" style="padding-top: 30px" >
                                        <div class="row">
                                            <div class="col-md-4">
                                                <img src="assets/flutter2.png" alt="Flutter"style="width: 100px;">
                                            </div>
                                            <div class="col-md-2" style="padding-left: 30px">
                                                <img src="assets/javascript.png" alt="Java"style="width: 100px">
                                            </div>
                                            <div class="col-md-3" style="padding-top: 20px;padding-left: 40px">
                                                <img src="assets/php.png" alt="SQL"style="width: 100px;padding-left:10px ">

                                            </div>
                                            <div class="col-md-3" style="padding-top: 20px;padding-left: 20px">
                                                <img src="assets/boostrap.png" alt="SQL"style="width: 100px">

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="about-right">
                                    <h3>Design

                                    </h3>
                                    <div class="container" style="padding-top: 30px;padding-left: 50px" >
                                        <div class="row">
                                            <div class="col-md-4">
                                                <img src="assets/Photoshop.png" alt="Photoshop"style="width: 100px;">
                                            </div>
                                            <div class="col-md-4" style="padding-left: 30px">
                                                <img src="assets/illustrator.png" alt="illustrator"style="width: 100px">
                                            </div>
                                            <div class="col-md-4" style="padding-left: 40px">
                                                <img src="assets/XD.png" alt="XD"style="width: 110px;padding-left:10px ">

                                            </div>

                                        </div>

                                    </div>


                                </div>
                                <div class="container"  >
                                    <div class="row">
                                        <div class="col-sm-5"></div>
                                        <div class="col-sm-7"><button class="button">Check My Portfolio</button></div>
                                    </div></div>
                                </div>
                            </div>
                            </div>

                </div>
            </div>
        </div>
        <div class="spacer layer2" style="aspect-ratio: 960/190"></div>
        <!---------------------------------------------Contact me--------------------------------------------*/-->

    <div class="contact" id="contact">
        <div class="container">
            <div class="row">
                <div class="contact-left">
                    <h1>Let's Contact</h1>
                    <p><i class="fa-solid fa-envelope"></i>kangweisiang0@gmail.com</p>
                    <p><i class="fa-solid fa-phone"></i>93702698</p>
                    <div class="social-icons">
                        <a href=" "><i class="fa-brands fa-linkedin"></i></a>
                        <a href=""><i class="fa-brands fa-instagram"></i></a>
                    </div>
                </div>

                <div class="contact-right">
                    <form>
                        <input type="text" name="Name" placeholder="Name" required>
                        <input type="email" name="Email" placeholder="Email" required>
                        <textarea name="Message" rows="6" placeholder="Your Message"></textarea>
                        <button type="submit" class="formBtn">Submit</button>
                    </form>
                </div>
            </div>
        </div>
        <br><br>

    </div>




        <img src="assets/movie_Review/m"










    </body>
</html>
<script>
    function passData(designIndex) {
        // Get the design data you want to pass
        var designData = dictionaryList[designIndex];

        // Convert the data to a JSON string
        var designDataString = JSON.stringify(designData);

        // Encode the data for safe URL transmission
        var encodedDesignData = encodeURIComponent(designDataString);

        // Build the URL with the data in the query string
        var url = "Project%20details.html?data=" + encodedDesignData;

        // Navigate to the new URL
        window.location.href = url;
    }
</script>