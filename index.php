<?php
require('config.php');
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?php echo $site_description; ?>">
    <title><?php echo $browser_title;?></title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:300,400,700">
    <link rel="stylesheet" href="assets/fonts/fontawesome-all.min.css">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/fonts/ionicons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/pikaday/1.6.1/css/pikaday.min.css">
    <link rel="stylesheet" href="https://daneden.github.io/animate.css/animate.min.css">
    <link rel="stylesheet" href="assets/css/styles.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
</head>
<script type="text/javascript">
        var loadContent = function() {
            $('#servers').load('servers.php');
        };
        $(document).ready(function() {
            $.ajaxSetup({ cache: false });
            loadContent();
            setInterval(loadContent, 5000);
        });
</script>
<body>
    <?php
    if ($theme == 'blue') {
        echo '<style>.highlight-blue{color:#fff;background-color:#1e6add;padding:50px 0}.feature-wrap .fa:hover{background:#0EA0FF;border:3px solid #64c2ff;box-shadow:0 0 0 5px #64c2ff inset;color:#fff}.feature-wrap{margin-bottom:35px;overflow:hidden}.feature-wrap .fa{background:#fff;border:3px solid #fff;border-radius:100%;box-shadow:0 0 0 5px #f2f2f2 inset;color:#0EA0FF;float:left;font-size:48px;height:110px;line-height:110px;margin:3px 25px 3px 3px;transition:all .5s ease 0s;width:110px}.project-card-no-image{border-top:4px solid #0ea0ff;}</style>';
        $bg_color = '#1e6add';
    } elseif ($theme == 'night') {
        echo '<style>.highlight-blue{color:#fff;background-color:#0f141c;padding:50px 0}.feature-wrap .fa:hover{background:#0f141c;border:3px solid #0f141c;box-shadow:0 0 0 5px #1c2330 inset;color:#fff}.feature-wrap{margin-bottom:35px;overflow:hidden}.feature-wrap .fa{background:#fff;border:3px solid #fff;border-radius:100%;box-shadow:0 0 0 5px #0f141c inset;color:#0f141c;float:left;font-size:48px;height:110px;line-height:110px;margin:3px 25px 3px 3px;transition:all .5s ease 0s;width:110px}.project-card-no-image{border-top:4px solid #0f141c;}</style>';
        $bg_color = '#0f141c';
    } elseif ($theme == 'green') {
        echo '<style>.highlight-blue{color:#fff;background-color:#1cdd4d;padding:50px 0}.feature-wrap .fa:hover{background:#1cdd4d;border:3px solid #1cdd4d;box-shadow:0 0 0 5px #1cdd4d inset;color:#fff}.feature-wrap{margin-bottom:35px;overflow:hidden}.feature-wrap .fa{background:#fff;border:3px solid #fff;border-radius:100%;box-shadow:0 0 0 5px #1cdd4d inset;color:#1cdd4d;float:left;font-size:48px;height:110px;line-height:110px;margin:3px 25px 3px 3px;transition:all .5s ease 0s;width:110px}.project-card-no-image{border-top:4px solid #1cdd4d;}</style>';
        $bg_color = '#1cdd4d';
    } elseif ($theme == 'red') {
        echo '<style>.highlight-blue{color:#fff;background-color:#dd1c2c;padding:50px 0}.feature-wrap .fa:hover{background:#dd1c2c;border:3px solid #dd1c2c;box-shadow:0 0 0 5px #dd1c2c inset;color:#fff}.feature-wrap{margin-bottom:35px;overflow:hidden}.feature-wrap .fa{background:#fff;border:3px solid #fff;border-radius:100%;box-shadow:0 0 0 5px #dd1c2c inset;color:#dd1c2c;float:left;font-size:48px;height:110px;line-height:110px;margin:3px 25px 3px 3px;transition:all .5s ease 0s;width:110px}.project-card-no-image{border-top:4px solid #dd1c2c;}</style>';
        $bg_color = '#dd1c2c';
    } elseif ($theme == 'pink') {
        echo '<style>.highlight-blue{color:#fff;background-color:#dd1c89;padding:50px 0}.feature-wrap .fa:hover{background:#dd1c89;border:3px solid #dd1c89;box-shadow:0 0 0 5px #dd1c89 inset;color:#fff}.feature-wrap{margin-bottom:35px;overflow:hidden}.feature-wrap .fa{background:#fff;border:3px solid #fff;border-radius:100%;box-shadow:0 0 0 5px #dd1c89 inset;color:#dd1c89;float:left;font-size:48px;height:110px;line-height:110px;margin:3px 25px 3px 3px;transition:all .5s ease 0s;width:110px}.project-card-no-image{border-top:4px solid #dd1c89;}</style>';
        $bg_color = '#dd1c89';
    } elseif ($theme == 'purple') {
        echo '<style>.highlight-blue{color:#fff;background-color:#991cdd;padding:50px 0}.feature-wrap .fa:hover{background:#991cdd;border:3px solid #991cdd;box-shadow:0 0 0 5px #991cdd inset;color:#fff}.feature-wrap{margin-bottom:35px;overflow:hidden}.feature-wrap .fa{background:#fff;border:3px solid #fff;border-radius:100%;box-shadow:0 0 0 5px #991cdd inset;color:#991cdd;float:left;font-size:48px;height:110px;line-height:110px;margin:3px 25px 3px 3px;transition:all .5s ease 0s;width:110px}.project-card-no-image{border-top:4px solid #991cdd;}</style>';
        $bg_color = '#991cdd';
    }
    if ($steam_api_key == "") {
        echo '<div class="alert alert-danger" role="alert" style="text-align:center;">Steam API Key is <b>BLANK!</b><br>Please edit config.php</div>';
    } else {
        echo '<main class="page projets-page"></main>
        <div class="highlight-blue" style="margin-bottom:-50px;">
            <div class="container">
                <div class="intro">
                    <h2 class="text-center" style="margin-bottom:2px;">'.$site_title.'</h2>
                </div>
                <div class="buttons">';
                foreach ($portal as $link => $name) {
                    echo '<a class="btn btn-primary" role="button" href="'.$link.'">'.$name.'</a>';
                }
        echo '</div>
        </div>
    </div>';
    echo '<section class="pulse animated portfolio-block project-no-images">
    <div id="servers"></div>
    </section>';
    if ($features_enabled == 'true') {
        echo '<div class="pulse animated">
        <div class="container" style="margin-top:-75px;">
        <div class="row">';
        foreach ($features as $item) {
            echo '<div class="col-md-4">
            <div class="feature-wrap"><i class="'.$item['icon'].'"></i>
            <h2>'.$item['title'].'</h2>
            <h3>'.$item['desc'].'</h3>
            </div>
        </div>';
        }
        echo '</div>
        </div>
        </div>';
    }
    echo '<div style="padding-top:50px;" class="highlight-blue">
        <div class="container">
            <div class="row">
                <div class="col-md-12" style="height:55px;">
                    <h2 class="text-uppercase text-center" style="margin-top:8px;margin-bottom:50px;font-size:28PX;">'.$staff_title.'</h2>
                </div>
            </div>
        </div>
    </div>
    <div class="team-boxed" style="background-color:'.$bg_color.'">
        <div class="container">
            <div class="intro"></div>
        <div class="row people" style="padding-top:0px;">';
        foreach ($staff as $steamid64 => $role) {
            $api_url = "http://api.steampowered.com/ISteamUser/GetPlayerSummaries/v0002/?key=$steam_api_key&steamids=$steamid64";
            $json = json_decode(file_get_contents($api_url), true);
            
            echo '<div class="col-md-6 col-lg-4 item">
            <div class="box"><img class="rounded-circle" src="'.$json["response"]["players"][0]["avatarfull"].'">
                <h3 class="name">'.$json["response"]["players"][0]["personaname"].'</h3>
                <p class="title" style="color:rgb(49,52,55);">'.$role.'</p><a href="https://steamcommunity.com/profiles/'.$json["response"]["players"][0]["steamid"].'" target="_blank"><button class="btn btn-primary" type="button">STEAM</button></a></div>
            </div>';
        }
        echo '</div>
        </div>
        </div>
        <footer class="page-footer" style="height:0px;padding-top:0px;padding-bottom:0px;"></footer>
        <div class="social-icons" style="padding-top:50px;padding-bottom:50px;">';
        foreach ($icons as $icon => $link) {
            echo '<a href="'.$link.'"><i class="'.$icon.'" data-bs-hover-animate="pulse"></i></a>';
        }
        echo '</div>';
    }
    ?>

    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pikaday/1.6.1/pikaday.min.js"></script>
    <script src="assets/js/script.min.js"></script>
</body>

</html>