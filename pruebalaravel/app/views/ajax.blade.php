usuario ajax

<?php
$osi = '{"physical":"cables","data link":"mac address","network":"ip address","transport":"tcp","session":"application connections","presentation":"translation","application":"email"}';
$osi = json_decode($osi, true);
 
echo $osi['physical'];
echo $osi['data link'];  
echo $osi['network'];
echo $osi['transport'];
echo $osi['session'];
echo $osi['presentation'];
echo $osi['application'];
?>