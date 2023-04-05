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
            <a href="#home" class="active">Главная</a>
            <a href="#about" class="nav">Обо мне</a>
            <a href="#services" class="nav">Сервисы</a>
            <a href="#portfolio" class="nav">Последнии Работы</a>
            <a href="#contact" class="nav">Контакты</a>
        </nav>
    </header>

    <!-- design of home section -->
    <section class="home" id="home">
        <div class="home-content">
            <h3>Greetings, It's Me</h3>
            <h1>Vitalina Smulko</h1>
            <h3>And I'm a <span class="multiple-text"></span></h3>
            <p>Я чувствую, что вы должны немного знать о мастере, которому можно довериться. <br>
                Я надеюсь, что после прочтения этого вы почувствуете уверенность в том, что я именно тот мастер, который вам нужен <br>
                Меня зовут Виталина <br>, я мастер перманентного макияжа (PMU) европейского уровня.
                До специализации в гиперреализме я 2 года занималась микроблейдингом.
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
            <p>Я никогда не был довольна результатами даже самого лучшего микроблейдинга, поэтому я не чувствовала себя вправе предлагать услугу, которую я считала ошибочной в своей основной технике.
                Я знала, что должен быть лучший метод для достижения результатов, к которым я стремилась, но я еще не открыла его.
  

             Меня всегда разочаровывал тот факт, что микроблейдинг выглядел неестественно.
             Эти фальшивые результаты были не тем, что я хотела бы как клиент.
             Я бы не была удовлетворена, и в результате я знала, что должена найти лучшее решение для своих клиентов.
             Моя конечная цель, когда я отправилась на поиски, состояла в том, чтобы найти лучший способ воссоздать естественные брови.  
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
                <p>Чтобы мои результаты всегда были однородными, я выполняю свои процедуры, используя лучшее оборудование, доступное в отрасли. <br>
                     В качестве тату-машинок я использую Bishop Wand Shader и Cheyenne Sol Terra. Кроме того, я использую только высококачественные пигменты европейского производства и одноразовые иглы премиум-класса.
                      Пигменты, которые я использую, не обладают магнитными свойствами и имеют стабильные цветные частицы, обеспечивающие длительный естественный цвет. Я практикую правильную асептику, использую СИЗ высшего качества и с гарантией.</p>
                <a href="#" class="btn">Read More</a>
            </div>
        </div>

        <div class="services-container">
            <div class="services-box">
                <i class='bx bxs-pencil' ></i>
                <h3>Ресницы</h3>
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
                <h4>Перманент бровей</h4>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil, aliquam!
                </p>
                <a href="#"><i class='bx bxs-florist'></i></a>
            </div>
        </div>

        <div class="portfolio-box">
            <img  src="images/lips.jpg" alt="">
            <div class="portfolio-layer">
                <h4>Перманент губ</h4>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil, aliquam!
                </p>
                <a href="#"><i class='bx bxs-florist'></i></a>
            </div>
        </div>
        <div class="portfolio-box">
            <img  src="images/brow1.jpg" alt="">
            <div class="portfolio-layer">
                <h4>Перманент бровей</h4>
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
        <h2 class="heading">Напишите <span>Мне!</span></h2>

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