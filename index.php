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