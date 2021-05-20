<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <?php wp_head();   ?>
    <style>
        h1.heading {
            font-family: "Arial Black";
            width: 700px;
            margin: auto;
            margin-bottom: 70px;
            padding-bottom: 50px;
            border-bottom: 1px solid #ccc;
        }

        h3.tagline{
            font-family: Arial;
            margin:auto;
            font-size: 18px;
            margin-top: 50px;
            margin-bottom: 15px;
            width: 700px;
            text-align: center;
        }

        h2.post-title {
            margin-bottom: 30px;
        }

        .post {
            margin-bottom: 50px;
        }

        .post p{
            font-family: "Helvetica Neue";
            line-height: 1.7em;
            font-size: 18px;
        }

        .post .row:nth-child(2) {
            padding-bottom: 50px;
            border-bottom: 1px solid #ccc;

        }

        .post:last-child .row:nth-child(2){
            border-bottom:none;
        }

        .footer{
            padding-bottom: 10px;
            padding-top: 10px;
            background-color: #222;
            color:#ccc;
        }

        .tags li{
            color: #3D9970;
        }
    </style>
</head>
<body <?php body_class(); ?>>
<div class="header">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h3 class="tagline"><?php blogInfo("description"); ?></h3>
                <h1 class="align-self-center display-1 text-center heading">
                    <?php bloginfo("name"); ?>
                </h1>
            </div>
        </div>
    </div>
</div>
<div class="posts">

    <?php while (have_posts()){
        the_post();
        ?>

        <div class="post" <?php post_class(); ?>>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h2 class="post-title">
                            <?php the_title(); ?>
                        </h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <p>
                            <strong>
                                <?php the_author(); ?>
                            </strong><br/>
                            <?php the_date();?>
                        </p>
                        <ul class="list-unstyled">
                            <li>Chittagong</li>
                        </ul>
                    </div>
                    <div class="col-md-8">
                        <p>
                           <?php
                            if (has_post_thumbnail()){
                                the_post_thumbnail();
                            }
                           ?>
                        </p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut deserunt dicta doloribus error,
                            harum,
                            illo impedit incidunt ipsam ipsum necessitatibus nihil perferendis perspiciatis provident quasi
                            reiciendis saepe
                            sequi sint, voluptatum?
                        </p>

                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab accusantium adipisci aspernatur
                            beatae
                            consequatur dicta distinctio ea eaque enim eos est et eveniet exercitationem expedita hic, id,
                            minima
                            molestias necessitatibus optio perferendis quaerat quidem reiciendis rem reprehenderit
                            repudiandae
                            saepe
                            sunt totam ullam unde velit. A ab animi aperiam at beatae cum cupiditate dignissimos distinctio
                            ducimus
                            eaque est exercitationem illo labore laudantium magni maxime molestias odio quibusdam quidem,
                            sequi
                            soluta sunt ullam voluptate voluptates voluptatum? Dolores earum enim esse est, illo nemo sit
                            velit.
                            Aperiam, aspernatur cum explicabo illum iusto labore nam nobis quibusdam ratione sed suscipit
                            unde
                            voluptate voluptatibus. Alias distinctio est et laborum quis tempore! Autem consequuntur
                            cupiditate

                        </p>
                    </div>
                </div>

            </div>
        </div>

    <?php
    } ?>


</div>
<div class="footer">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                &copy; <a href="https://ashrafbd.com">Ashrafbd</a> - All Rights Reserved
            </div>
        </div>
    </div>
</div>
    <?php wp_footer();   ?>
</body>
</html>
