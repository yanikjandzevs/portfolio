<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>My Job</title>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>

    <!-- header design -->
    <header class="header">
        <a href="#" class="logo">Me & Job</a>
        <i class='bx bx-menu' id="menu-icon"></i>

        <nav class="navbar">
            <a href="ru.php" class="language">RU</a>
            <a href="index.php" class="language">EN</a>
            <a href="lv.php" class="language">LV</a>
            <a href="#home" class="active">Home</a>
            <a href="#about" class="nav">About</a>
            <a href="#services" class="nav">Services</a>
            <a href="#portfolio" class="nav">Latest Works</a>
            <a href="#contact" class="nav">Contact</a>
        </nav>
    </header>

    <!-- design of home section -->
    <section class="home" id="home">
        <div class="home-content">
            <h3>Greetings, It's Me</h3>
            <h1>Vitalina Smulko</h1>
            <h3>And I'm a <span class="multiple-text"></span></h3>
            <p>I feel you should know a bit about the artist you choose to put your trust into. <br> 
                I hope reading the following makes you feel confident that I am right artist for You <br>
                My name is Vitalina <br> and I am a European trained permanent makeup (PMU) master level artist.
                Prior to specializing in hyperrealism I used to do microblading for 2 years. 
                <?php include("conn.php"); ?> 
            </p>
            <div class="social-media">
                <a href="https://www.facebook.com/vitalinysh"><i class='bx bxl-facebook-circle' ></i></a>
                <a href="https://instagram.com/vitalinysh.lbp?igshid=YmMyMTA2M2Y="><i class='bx bxl-instagram' ></i></a>
            </div>
        </div>

        <div class="home-img">
            <img class="main-img" src="images/rsz_img-20230325-wa0002.png" alt="">
        </div>
    </section>

    <!-- about section -->

    <section class="about" id="about">
        <div class="about-img">
            <img src="images/rsz_1img-20230325-wa0004.png" alt="">
        </div>
        
        <div class="about-content">
            <h2 class="heading">About <span>Me</span></h2>
            <h3>Permanent Master</h3>
            <p>I was never happy with the results of even the best microblading, therefore, I didn't feel right offering a service I considered flawed in it’s core technique. 
                I knew there had to be a better method to accomplish the results I was after but I hadn’t yet discovered it. 
  

             I was always let down with the fact that microblading didn't look natural. 
             These fake looking results weren't what I would have wanted as a paying client. 
             I would not have been satisfied and as a result I knew I had to find a better solution for my clients.  
             My ultimate goal when I set out on my hunt was to discover the best way to recreate natural looking eye brows.  
            </p>
        <a href="#" class="btn">Read More</a>
        </div>
    </section>
    
    <!-- service design -->
    <section class="services" id="services">
        <h2 class="heading">My <span>Works</span></h2>
        <div class="services-container">
            <div class="services-box">
                <i class='bx bxl-sketch'></i>
                <h3>Permanent</h3>
                <p>In order to ensure my results are always uniform I perform my procedures using the best equipment available in the industry. <br>
                     I use a Bishop Wand Shader and a Cheyenne Sol Terra as my tattoo machines. Also, I only use the highest quality European made pigments and premium quality disposable needles.
                      The pigments I use are not magnetic and have stable colour particles giving long lasting natural colour. I practice proper aseptic technique, utilize top quality PPE and I am fully insured.</p>
                <a href="#" class="btn">Read More</a>
            </div>
        </div>

        <div class="services-container">
            <div class="services-box">
                <i class='bx bxs-pencil' ></i>
                <h3>Lashes</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia voluptatibus dignissimos quasi. Aspernatur, nesciunt! Animi modi earum aut dolorem dignissimos.</p>
                <a href="#" class="btn">Read More</a>
            </div>
        </div>
    </section>

    <!-- portfolio sec. -->

    <section class="portfolio" id="portfolio">
        <h2 class="heading">Latest <span>Works</span></h2>

       <div class="portfolio-container">
        <div class="portfolio-box">
            <img  src="images/latest-job.jpg" alt="">
            <div class="portfolio-layer">
                <h4>Brow Permanent</h4>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil, aliquam!
                </p>
                <a href="#"><i class='bx bxs-florist'></i></a>
            </div>
        </div>

        <div class="portfolio-box">
            <img  src="images/lips.jpg" alt="">
            <div class="portfolio-layer">
                <h4>Lips Permanent</h4>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil, aliquam!
                </p>
                <a href="#"><i class='bx bxs-florist'></i></a>
            </div>
        </div>
        <div class="portfolio-box">
            <img  src="images/brow1.jpg" alt="">
            <div class="portfolio-layer">
                <h4>Brow Permanent</h4>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil, aliquam!
                </p>
                <a href="#"><i class='bx bxs-florist'></i></a>
            </div>
        </div>
        
       </div>
    </section>

    <?php
    include("insert.php")
    ?>
    <!-- section for contact, email -->
    <section class="contact" id="contact">
        <h2 class="heading">Contact <span>Me!</span></h2>

        <form action="insert.php" method="get">
            <div class="input-box">
                <input type="text" placeholder="Full Name" name="name" >
                <input type="email" placeholder="Email Adress" name="email">
            </div>
            <div class="input-box">
                <input type="number" placeholder="Mobile Number" name="number">
                
            </div>
            <textarea name="message" id="" cols="30" rows="10" placeholder="Your Message"></textarea>
            <input type="submit" value="Send Message" class="btn" name="SubmitForm">
        </form>
    </section>

    <!-- design of footer -->
    <footer class="footer">
        <div class="footer-text">
            <p>Copyright &copy; 2023 by Jani.K | All Rights Reserved.</p>
        </div>

        <div class="footer-iconTop">
            <a href="#home"><i class='bx bx-up-arrow-alt' ></i></a>
        </div>
    </footer>

    <!-- scroll reveal -->
    <script src="https://unpkg.com/scrollreveal"></script>

    <!-- typed js -->
    <script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>


    <script src="script.js"></script>
</body>
</html>