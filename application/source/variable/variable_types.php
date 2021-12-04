<?php
$prenom = 'Sofian';
$age = 25;
$yeux = 'brown';
$famille = array ('Amina','Abbas','Nadia','Kader');
$faim = true;
?>
<p>hello my name is <?php echo $prenom ?></p>
<p>i'm <?php echo $age ?> years old</p>
<p>my eyes are <?php echo $yeux ?></p>
<p>some of my family's members are <?php echo $famille [0],' ', $famille [1],' ',$famille[2], ' ',$famille[3]?></p>
<p> and my mom is <?php echo $famille [0] ?></p>
<p>am i hungry? <?php if($faim){
        echo("Yes");}
        else{
            echo("No");}
            ?></p>
