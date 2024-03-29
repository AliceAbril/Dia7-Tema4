<?php 
    $title = "HTML5 Practice";
    $subtitle = "Day 4";
?>
<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title><?php echo "$title: $subtitle"; ?></title>
        <link href="css/default.css" rel="stylesheet" />
        
        <script type="text/javascript" src="Module/jquery-1.7.1.js"></script>
        
        <script type="text/javascript" src="require.js"></script>
        
        <script>
            require(["Module/Director.js","Module/Movie.js"],function(director,movie){
                    var alien = new movie();
                    alien.setTitle("Alien");
                    
                    var ridleyS = new director("Ridley Scott",["Cast is everything.", "Do what you haven't..."]);
                    alien.setDirector(ridleyS);
            })
        </script>
        
    </head>
    <body>
        <header>
            <h1><?php echo "<span class='title'>$title</span>: <span class='subtitle'>$subtitle</span>"; ?></h1>
        </header>

        <!-- add your content here -->
        <h3>-- Enjoy! --</h3>
        
        <footer>
            <div><?php echo $title; ?> v1.0 </div>
            <div>@author Alberto Miranda <a href="mailto:alberto@nextive.com">&lt;alberto@nextive.com&gt;</a></div>
            <div>@author Esteban Abait <a href="mailto:esteban.abait@nextive.com">&lt;esteban.abait@nextive.com&gt;</a></div>     
        </footer>
    </body>
</html>