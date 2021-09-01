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

    <img src="images/panti4.jpg" alt="Foto atap bocor" id="first-picture-cover-big"/>
    <p class="main-subtitle-centered">11 September 2021 - 1 October 2021</p>

    <h1 class="italize-text-centered">All you need to know about <br/> <span class="pop-hl">Panti Asuhan Bhakti Luhur Alma</span></h1>
    <table>
        <tr>
            <td>
                <img src="images/panti6.jpg" alt="Foto depan panti" id="second-picture-cover-wide"/>
            </td>
        </tr>
        <tr>
            <td>
                <a href="https://www.google.com/maps/place/Panti+Asuhan+Anak+Bhakti+Luhur/@-0.0384866,109.3240895,15z/data=!4m5!3m4!1s0x0:0x2ab4a4f0e03dd369!8m2!3d-0.0385396!4d109.3241298" id="address-style">
                    Alamat: Jalan Wonoyoso 1 No. 9 Pontianak, Indonesia.
                </a>
            </td>
        </tr>
        <tr>
            <td>
                <p>
                    Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, 
                    a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, fr om a Lorem Ipsum passage.
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