<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Donate For Joy | Home</title>
    <link href='css/base.css' rel='stylesheet'>
    <link href='css/index.css' rel='stylesheet'>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
</head>
<body>
    <!-- FIRST SECTION OF THE HOME PAGE  -->
    <div class="first-section">
        <?php include("navbar.php") ?>
        <div class="first-section-image-content">
            <h1>Help The Children By Donating</h1>
            <p> Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, 
                when an unknown printer took a galley of type and scrambled it to make a type specimen book</p>
        </div>
    </div>

    <!-- SECOND SECTION OF THE HOME PAGE (CAROUSEL) -->
    <div class="second-section">
        <h2>Panti Asuhan Bhakti Luhur Alma <br/>Needs Your Help !</h2>
        <div class="first-carousel-container">
            <div class="first-carousel">
                <div class="first-slide">
                    <img src="images/panti1.jpg" alt="Picture of the kids" />
                </div>
                <div class="first-slide">
                    <img src="images/panti2.jpg" alt="Picture of the orphanage's ceiling"/>
                </div>
                <div class="first-slide">
                    <img src="images/panti3.jpg" alt="Picture of the orphanage's ceiling"/>
                </div>

                <div class="first-dots-container">
                    <span class="first-dot" onclick="currentSlides(1)"></span>
                    <span class="first-dot" onclick="currentSlides(2)"></span>
                    <span class="first-dot" onclick="currentSlides(3)"></span>
                </div>
            </div>

            <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum</p>
        </div>
    
        <div class="second-carousel-container">
            <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum</p>

            <div class="second-carousel">
                <div class="second-slide">
                    <img src="images/panti4.JPG" alt="Picture of the kids" />
                </div>
                <div class="second-slide">
                    <img src="images/panti5.jpg" alt="Picture of the orphanage's ceiling"/>
                </div>
                <div class="second-slide">
                    <img src="images/panti6.jpg" alt="Picture of the orphanage's ceiling"/>
                </div>

                <div class="second-dots-container">
                    <span class="second-dot" onclick="currentSlides(1)"></span>
                    <span class="second-dot" onclick="currentSlides(2)"></span>
                    <span class="second-dot" onclick="currentSlides(3)"></span>
                </div>
            </div>
        </div>
    </div>


    <!-- THIRD SECTION OF THE HOME PAGE (VIDEO) + PROGRESS BAR AND DONATE NOW BUTTON-->

    <div class="third-section">
        <iframe width="1280" height="720" src="https://www.youtube.com/embed/sKtCP6htHqw" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        <p>Contrary to popular belief, Lorem Ipsum is not simply random text. 
            It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. 
            Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, 
            ooked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, 
            and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, 
            written in 45 BC. </p>


        <!-- 
            *****************
            Tensan works here
            ***************** 
        -->
        <h2 class="italize-text-centered">
            <span class="animate-text animate-text-scrolled">Fundraising Goal</span>
        </h2>
        <div class="progress-bar">
            <div class="filled-bar">0</div>
        </div>
        <h3 class="italize-text-centered">Rp<span id="collected-money">4.562.000</span> / Rp<span id="targeted-money">5.000.000</span></h3>
        <button id="donate-button">Donate Now</button>

        <div id="modal">
            <div class="modal-content">
                <span id="x-sign">&times;</span>
                <p>
                    Jeannyfer Claudya Halim
                    <br/>
                    BCA
                    <br/>
                    1234567890
                </p>
            </div>
        </div>
    </div>

    <script src="script/index.js"></script>
</body>
</html>