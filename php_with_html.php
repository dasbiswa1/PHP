<?php 
$h2_color = "green";
echo "<h1 style = 'color:green' >php with html</h1>";
echo "<br>";
echo "<h3 style = 'color:blue' >php with html</h3>";
?>

<!-- you can create multiple php tag in same page -->
<?php
$name = "anil sidhu";
echo "<h2 style = 'color : orange'>My name is $name</h2>";
?>

<!-- php in html -->
<h1>
    <?php echo $name; ?>
</h1>

<h1 style = 'color : red' >
    My real name is <?php echo $name; ?>
</h1>

<h2 style = "color : <?php echo $h2_color; ?>"><?php echo "this is h2 tag"?></h2>
<h2 style = "color : <?php echo $h2_color; ?>"><?php echo "this is h2 tag"?></h2>
<h2 style = "color : <?php echo $h2_color; ?>"><?php echo "this is h2 tag"?></h2>
