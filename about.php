<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Donate For Joy | About</title>
    <link href='css/base.css' rel='stylesheet'>
    <link href='css/about.css' rel='stylesheet'>
    <script src="script/about_animation.js" defer></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
</head>
<body>
    <?php include("navbar.php") ?>
    
    <h1 class="title-text" id="centered-title">Donate For Joy</h1>
    <p class="main-subtitle-centered">by PPI Sarawak</p>
    <h2 class="title-text" id="quotes-under-title">
        <span class="animate-text">"One good deed can change everything"</span>
    </h2>

    <img src="images/4.jpg" alt="Foto anak" id="first-picture-cover-big"/>
    <p class="main-subtitle-centered">11 September 2021 - 25 September 2021</p>

    <h1 class="italize-text-centered">All you need to know about <br/> <span class="pop-hl">Panti Asuhan Bhakti Luhur Alma</span></h1>
    <table>
        <tr>
            <td>
                <img src="images/5.jpg" alt="Foto depan panti" id="second-picture-cover-wide"/>
            </td>
        </tr>
        <tr>
            <td>
                <a href="https://www.google.com/maps/place/Panti+Asuhan+Anak+Bhakti+Luhur/@-0.0384866,109.3240895,15z/data=!4m5!3m4!1s0x0:0x2ab4a4f0e03dd369!8m2!3d-0.0385396!4d109.3241298" id="address-style">
                    Nama Panti: Panti Asuhan Bhakti Luhur Alma<br/>Alamat: Pontianak, Kota Baru, Jalan Wonoyoso 1 No. 9.
                </a>
            </td>
        </tr>
        <tr>
            <td>
                <p>
                Panti asuhan ini berdiri sejak sejak tahun 2002 dan dikelola oleh Suster Alma. Tidak semua penghuni di panti itu berasal dari kota Pontianak, ada yang berasal dari luar Pontianak. 
                Dan tidak semua anak yang menghuni di panti asuhan ini tumbuh dengan normal. Panti Alma juga menyediakan tempat untuk para penyandang cacat, baik cacat fisik maupun cacat mental. 
                Hal utama yang menjadi pertimbangan dalam perancangan panti asuhan ini adalah aksesibilitas anak penyandang cacat di dalam bangunan sebagai pengguna utama bangunan. 
                Konsep rancangan ini adalah memaksimalkan ruang – ruang yang terbentuk pada bangunan dan menerapkan konsep yang aman bagi penyandang cacat, terutama anak – anak, sehingga diharapkan dapat 
                menyediakan suatu wadah berupa panti asuhan yang memberikan kenyamanan bagi pengguna di masa mendatang. Rata-rata mereka yang dititipkan berasal dari keluarga yang tidak mampu.
                </p>
            </td>
        </tr>
    </table>

    <script>
        $(function() {
            $(".nav-bar div:nth-child(2) a").addClass("secondary-color-bg");
            $(".nav-bar div:last-child a").removeClass("secondary-color-bg");
            $(".nav-bar div:first-child a").removeClass("secondary-color-bg");
            $(".nav-bar div:last-child a").removeClass("secondary-color-bg");
        });
    </script>
</body>
</html>