<!DOCTYPE HTML>
<html>
    <head>
        <title>POSTWORD | Everyone Can Post the Word</title>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />

        <link rel="stylesheet" href="<?php echo base_url() . 'assets/css/main.css'; ?>" />
        <link rel="stylesheet" href="<?php echo base_url() . 'assets/css/jquery.sidr.light.css'; ?>" />

    </head>
    <body class="homepage">
        <div id="page-wrapper">

            <!-- Header -->

            <?php $this->load->view('mnheader') ?>

            <!-- Main -->
            <div class="wrapper style2">

                <div class="container">
                    <article class="banner" id="main" class="container special">

                        <header>
                            <h2><a href="#">Story of The Day</a></h2>
                            <p>

                                <?php echo $fi->judul; ?>
                            </p>
                        </header>
                        <p>
                            <?php echo substr($fi->isi, 0, 900) . ' ...'; ?>
                        </p>
                        <footer>
                            <a href="<?php echo base_url() . 'c_master/read/' . $fi->id_artikel; ?>" class="button">Continue Reading</a>
                        </footer>
                    </article>

                </div>

            </div>

            <!-- Banner -->
            <section class="banner">
                <header>
                    <h2>Here's Our Popular <strong>Story</strong></h2>
                    <p>
                        Stories that written by many <a href="#">Great People</a>.
                        Write <strong>freely</strong> as an <a href="#">Anonimous</a> Person.
                    </p>
                </header>
            </section>

            <!-- Carousel -->
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
                    side: 'right'
                });
            });
        </script>

    </body>
</html>