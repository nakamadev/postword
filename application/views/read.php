<!DOCTYPE HTML>
<html>
    <head>
        <title><?php echo $story->judul; ?> | Postword</title>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
        <link rel="stylesheet" href="<?php echo base_url() . 'assets/css/main.css'; ?>" />
        <link rel="stylesheet" href="<?php echo base_url() . 'assets/css/jquery.sidr.light.css'; ?>" />
        <!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
    </head>
    <body class="no-sidebar">
        <div id="page-wrapper">

            <!-- Header -->
            <div id="header" style="background-image: url('<?php echo base_url() . 'images/' . $story->nama; ?>');">

                <!-- Inner -->
                <div class="inner">
                    <header>
                        <h1><a href="<?php echo base_url(); ?>" id="logo"><?php echo $story->nm_cat; ?></a></h1><hr />
                    </header>
                </div>

                <!-- Nav -->
                <nav id="nav">
                    <ul>
                        <li><a href="<?php echo base_url(); ?>">Home</a></li>
                        <li><a href="<?php echo base_url() . 'c_master/change/writepost'; ?>">Write a Story</a></li>

                        <?php if ($this->session->userdata('user_logged_in') == FALSE) { ?>
                            <li><a href="<?php echo base_url() . 'c_master/change/daftar'; ?>">Sign Up</a></li>
                        <?php } else { ?>
                            <li><a href="<?php echo base_url() . 'c_master/user_out'; ?>">Sign Out</a></li>
                            <li><a href="<?php echo base_url() . 'c_master/getuserartikel'; ?>">See What You've Share</a></li>
                        <?php } ?>

                        <li><a id="right-menu" href="#sidr">Category</a></li>
                    </ul>
                </nav>

            </div>

            <div id="sidr">
                <!-- Your content -->
                <ul>
                    <?php foreach ($category as $cat) { ?>
                        <li><a href="<?php echo base_url() . 'c_master/change/' . $cat->id_cat; ?>"><?php echo $cat->nm_cat . '<strong> ' . $cat->jum . '</strong>'; ?></a></li>
                    <?php } ?>
                </ul>
            </div>

            <!-- Main -->
            <div class="wrapper style1">

                <div class="container">
                    <article id="main" class="special">
                        <header>
                            <h2><a href="#"><?php echo $story->judul; ?></a></h2>
                            <p>
                                @<?php echo $story->nm_cat . ', ' . $story->tgl_post; ?>
                            </p>
                        </header>
                        <p>
                            <?php echo $story->isi; ?>
                        </p>
                        <p>
                            <a href="https://plus.google.com/share?url=http%3A//localhost/postword/c_master/read/3">Share to Google Plus</a>
                            <a href="https://www.facebook.com/sharer/sharer.php?u=http%3A//localhost/postword/">Share to Facebook</a>
                            <a href="https://twitter.com/home?status=http%3A//localhost/postword/">Share to Twitter</a>
                        </p>
                    </article>
                    <hr />
                </div>
                <section class="carousel">
                    <div class="reel">

                        <?php foreach ($artikel as $art) { ?>
                            <article>
                                <a href="<?php echo base_url() . 'c_master/read/' . $art->id_artikel; ?>" class="image featured"><img src="<?php echo base_url() . 'images/' . $art->nama; ?>" alt="" /></a>
                                <header>
                                    <h3><a href="<?php echo base_url() . 'c_master/read/' . $art->id_artikel; ?>"><?php echo $art->judul ?></a></h3>
                                </header>
                                <p><?php echo substr($art->isi, 0, 100) . '...'; ?></p>
                            </article>
                        <?php } ?>

                    </div>
                </section>

            </div>

            <!-- Footer -->
            <?php $this->load->view('footer');?>

        </div>

        <!-- Scripts -->
        <script src="<?php echo base_url() . 'assets/js/jquery.min.js'; ?>"></script>
        <script src="<?php echo base_url() . 'assets/js/jquery.dropotron.min.js'; ?>"></script>
        <script src="<?php echo base_url() . 'assets/js/jquery.scrolly.min.js'; ?>"></script>
        <script src="<?php echo base_url() . 'assets/js/jquery.onvisible.min.js'; ?>"></script>
        <script src="<?php echo base_url() . 'assets/js/skel.min.js'; ?>"></script>
        <script src="<?php echo base_url() . 'assets/js/util.js'; ?>"></script>

        <script src="<?php echo base_url() . 'assets/js/main.js'; ?>"></script>
        <script src="<?php echo base_url() . 'assets/js/jquery.sidr.min.js'; ?>"></script>
        <script>
            $(document).ready(function() {
                $('#right-menu').sidr({
                    side:'right'
                });
            });
        </script>

    </body>
</html>