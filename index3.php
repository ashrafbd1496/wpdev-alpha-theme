<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>
        <?php bloginfo('name'); ?>
    </title>
</head>
<body>
    <?php
        while ( have_posts()){
            the_post();

            echo "<h2>";
            the_title();
            echo "</h2>";

        }
    ?>






</body>
</html>