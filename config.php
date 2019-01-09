<?php
$steam_api_key = ""; // Steam API key, found at https://steamcommunity.com/dev/apikey

$site_description = "Polar X is a Index Page built for Gmod Communities"; // Shows up on discord & facebook.

$theme = "blue"; // night, blue, green, red, pink & purple || Changes basic look of the website.

$browser_title = 'Polar X | Index'; // Title what comes up in tab bar.
$site_title = "Polar X"; // Title of website located above the buttons.

$servers = array('45.121.211.52:27420', '139.99.173.1:27016', '139.99.173.1:27016'); // Format IP:Port

$portal = array(
    // 'URL', 'Button Name',
    '/forum' => 'Forum',
    '/store' => 'Store',
    '/bans' => 'Bans',
    'https://discord.gg/yw9r72' => 'Discord'
);

$features_enabled = "true"; # true = display features section / false = doesn't display the features section
// Icons https://fontawesome.com/icons?d=gallery&m=free
$features = array(
    array(
        'icon' => 'fa fas fa-star',
        'title' => 'Affordable',
        'desc' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit'
    ),
    array(
        'icon' => 'fa fas fa-server',
        'title' => 'High Performance',
        'desc' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit'
    ),
    array(
        'icon' => 'fa fas fa-bomb',
        'title' => 'Toxic',
        'desc' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit'
    )
);


$staff_title = "<strong>Meet The Team</strong>"; # Staff Title 
$staff = array(
    // 'Steamid64', 'Role'
    '76561198077228213' => 'Weeb',
    '76561198263693354' => 'Weeaboo',
    '76561198245331578' => 'Bae'
);

$icons = array(
    // 'ICON', 'LINK'
    'fab fa-steam-symbol' => 'https://steamcommunity.com/id/kuikomi/',
    'fab fa-discord' => 'https://discord.gg/yw9r72',
    'fab fa-twitter' => 'https://twitter.com/wardweeb',
    'icon ion-social-youtube' => '#'
);
?>
