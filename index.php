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
    <div class="first-section">
        <?php include("navbar.php") ?>
    </div>
    <div class="second-section">
        <h2>Panti Asuhan Bhakti Luhur Alma <br/>Needs Your Help !</h2>
        <div class="first-image-section">
            <img src="images/panti1.jpg" alt="First Image"/>
            <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. 
                Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum</p>
        </div>
        <div class="second-image-section">

        </div>
    </div>

    <div class="third-section">
        
    </div>

    <div class="fourth-section">
        
    </div>

    <!-- Sini tensan (Progress bar) -->
    <div class="fifth-section">
        
    </div>
  
    

    <script>
        $(function() {
            $(".nav-bar div:nth-child(2) a").removeClass("secondary-color-bg");
            $(".nav-bar div:last-child a").removeClass("secondary-color-bg");
            $(".nav-bar div:first-child a").removeClass("secondary-color-bg");
            $(".nav-bar div:first-child a").addClass("secondary-color-bg");
        });
    </script>

</body>
</html>