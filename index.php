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
            <h1>Donate For Joy (Episode 2)</h1>
            <p>September Act of Kindness<br/>One good deed can change everything</p>
        </div>
    </div>

    <!-- SECOND SECTION OF THE HOME PAGE (CAROUSEL) -->
    <div class="second-section">
        <h2>Panti Asuhan Bhakti Luhur Alma <br/>Needs Your Help !</h2>
        <div class="first-carousel-container">
            <div class="first-carousel">
                <div class="first-slide">
                    <img src="images/2.jpg" alt="Carousel picture 1" />
                </div>
                <div class="first-slide">
                    <img src="images/2.2.jpg" alt="Carousel picture 2"/>
                </div>

                <div class="first-dots-container">
                    <span class="first-dot" onclick="currentSlides(1)"></span>
                    <span class="first-dot" onclick="currentSlides(2)"></span>
                </div>
            </div>

            <p>Panti Bhakti Luhur Alma (Panti Alma) sedang mengalami ketidaknyamanan dikarenakan oleh atap yang selalu merembes ketika hujan melanda, 
                bukan hanya itu saja bahkan ada beberapa atap yang berlubang sehingga menyebabkan kebocoran yang bisa dilihat pada gambar disamping ini. 
                Sampai sekarang, belum ada yang mencoba untuk memperbaiki kebocoran tersebut, maka dari itu, PPI Sarawak ingin mengulurkan tangan untuk 
                menawarkan bantuan kepada Panti Alma.</p>
        </div>
    
        <div class="second-carousel-container">
            <p>Kebocoran tersebut terdapat pada tempat penyimpanan baju dan peralatan anak-anak, kamar mandi, teras dan juga ruang tamu. Ditambah dengan kondisi 
                cuaca yang tidak menentu dan hujan terus menerus, apakah teman-teman bisa membayangkan betapa sulit dan terganggunya anak-anak di Panti serta orang-orang 
                disana yang harus merasakan rintikkan hujan dan menanggulangi kebocoran tersebut. Jika bukan kita yang membantu mereka, siapa yang akan mengulurkan tangan 
                untuk membantu mereka? Sampai kapankan mereka harus hidup seperti ini?</p>

            <div class="second-carousel">
                <div class="second-slide">
                    <img src="images/3.JPG" alt="Carousel picture 3" />
                </div>
                <div class="second-slide">
                    <img src="images/3.3.jpg" alt="Carousel picture 4"/>
                </div>

                <div class="second-dots-container">
                    <span class="second-dot" onclick="currentSlides(1)"></span>
                    <span class="second-dot" onclick="currentSlides(2)"></span>
                </div>
            </div>
        </div>
    </div>


    <!-- THIRD SECTION OF THE HOME PAGE (VIDEO) + PROGRESS BAR AND DONATE NOW BUTTON-->

    <div class="third-section">
        <iframe width="1280" height="720" src="https://drive.google.com/file/d/1SYb2rBzY6-MQwmUk2sYTSa1ZLw1BTCUb/preview" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        <p>Dokumentasi tersebut dilakukan saat melakukan survey tempat karena Tim PPI Sarawak ingin melihat langsung apa yang sedang terjadi di Panti tersebut. 
            Tim PPI Sarawak juga menanyakan beberapa hal terkait bantuan apa yang dibutuhkan oleh Panti tersebut dan dengan tersenyum, Suster Tin (pengurus panti) 
            berkata bahwa bantuan yang kita bisa salurkan adalah bantuan untuk memperbaiki atap yang berlubang dan yang kondisinya sudah tidak memadai. Kemudian, 
            beliau juga menunjukkan tempat-tempat yang atapnya bocor dan berdampak buruk oleh hujan deras. Maka dari itu, Tim PPI Sarawak ingin mengajak teman-teman sekalian, 
            dimanapun kalian berada, untuk menyalurkan bantuan dengan menekan tombol ‘Donate Now’ dibawah ini. Berapapun yang teman-teman donasikan, walaupun kecil jumlahnya, 
            akan berarti sekali untuk teman-teman kita di Panti Alma.</p>


        <h2 class="italize-text-centered">
            <span class="animate-text animate-text-scrolled">Fundraising Goal</span>
        </h2>
        <div class="progress-bar">
            <div class="filled-bar">0</div>
        </div>
        <h3 class="italize-text-centered">Rp<span id="collected-money">4.000.000</span> / Rp<span id="targeted-money">5.000.000</span></h3>
        <button id="donate-button">Donate Now</button>

        <div id="modal">
            <div class="modal-content">
                <span id="x-sign">&times;</span>
                <h1>Rekening Tujuan Donasi</h1>
                <p>
                    Jeannyfer Claudya Halim
                    <br/>
                    BCA
                    <br/>
                    7925404136
                </p>
                <img src="images/qr.jpeg" alt="QR Code"/>
            </div>
        </div>
    </div>

    <script src="script/index.js"></script>
</body>
</html>