<?php
        $center = $row['name'];
        $pais = $row['country'];
        $img = $row['img'];
?>
<style> div{ width: 500px; height: 200px; background: white; border: 3px solid black; text-align: left; color: black;} </style>
<center>
<div>
<center>
<a href='http://localhost/EduMap/center.php?center=<?php echo $center; ?>'><strong> <?php echo $center; ?> </strong></a> (<?php echo $pais; ?>)<br>
<img height="120px" src="data:image/png;base64,<?php echo base64_encode($img); ?>"><br><br><br><br>