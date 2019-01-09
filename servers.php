<?php
require('config.php');
require('query.php');

echo '<div class="container">
    <h2 class="text-uppercase text-center" style="color:rgb(49,52,55);margin-top:5px;margin-bottom:60px;font-size:28PX;"><strong>Servers</strong></h2>
    <div class="row">';
foreach ($servers as $server_ip) {
    $server = query_source($server_ip);

    if ($server['status'] != 1) {
        echo '<div class="project-card-no-image" style="margin-left:30px;width:350px;"><h3>'.$server_ip.'</h3>Is offline!<br></br></div>';
    } else {
        echo '<div class="project-card-no-image" style="margin-left:30px;width:350px;">
        <h3 style="font-size:20px;margin-bottom:6px;">'.substr($server['name'],0,30).'</h3>
        <h3 style="font-size:15px;margin-bottom:6px;"><b>Gamemode:</b> '.$server['description'].'</h3>
        <h3 style="font-size:15px;margin-bottom:6px;"><b>Players:</b> '.$server['players'].'/'.$server['playersmax'].'</h3>
        <h3 style="font-size:15px;"><b>Map:</b> '.substr($server['map'],0,30).'</h3><a class="btn btn-outline-primary btn-sm" role="button" href="steam://connect/'.$server_ip.'">Connect</a>
        <div class="tags"></div>
        </div>';
        }
    }
echo '</div>
</div>';    
?>