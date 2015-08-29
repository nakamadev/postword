<!DOCTYPE HTML>
<html>
    <head>
        <title>POSTWORD | <?php echo $header->nm_cat; ?></title>
        
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />

        <link rel="stylesheet" href="<?php echo base_url() . 'assets/css/main.css'; ?>" />
        <link rel="stylesheet" href="<?php echo base_url() . 'assets/css/jquery.sidr.light.css'; ?>" />

    </head>
    <body class="left-sidebar">
        <div id="page-wrapper">

            <!-- Header -->
            <?php $this->load->view('mnheader'); ?>

            <!-- Main -->
            <div class="wrapper style1">

                <div class="container">
                    <div class="row 200%">
                        <div class="4u 12u(mobile)" id="sidebar">
                            <hr class="first" />
                            <section>
                                <p>
                                    <?php echo $header->header; ?>
                                </p>
                            </section>
                            <hr />
                            <section>
                                <header>
                                    <h3><a href="#">Related Stories</a></h3>
                                </header>
                                <?php foreach ($artikel as $art) { ?>
                                    <div class="row 50%">
                                        <div class="4u">
                                            <a href="<?php echo base_url() . 'c_master/read/' . $art->id_artikel; ?>" class="image fit"><img src="<?php echo base_url() . 'images/' . $art->nama; ?>" alt="" /></a>
                                        </div>
                                        <div class="8u">
                                            <h4><?php echo $art->judul; ?></h4>
                                            <p>
                                                <?php echo substr($art->isi, 0, 100) . '...'; ?>
                                            </p>
                                        </div>
                                    </div>
                                <?php }; ?>
                                <footer>
                                    <a href="#" class="button">Load More Stories</a>
                                </footer>
                            </section>
                        </div>
                        <div class="8u 12u(mobile) important(mobile)" id="content">
                            <article id="main">
                                <header>
                                    <h2><a href="#">Artikel <?php echo $art->nm_cat; ?> Paling Hits</a></h2>
                                    <p>
                                        <?php echo $art->judul; ?>
                                    </p>
                                </header>
                                <a href="#" class="image featured"><img src="<?php echo base_url() . 'images/' . $art->nama; ?>" alt="" /></a>
                                <p>
                                    <?php echo $art->isi; ?>
                                </p>
                            </article>
                        </div>
                    </div>
                    <hr />
                </div>
                <section class="carousel">
                    <div class="reel">

                        <?php foreach ($art_lain as $lain) { ?>
                            <article>
                                <a href="<?php echo base_url() . 'c_master/read/' . $lain->id_artikel; ?>" class="image featured"><img src="<?php echo base_url() . 'images/' . $lain->nama; ?>" alt="" /></a>
                                <header>
                                    <h3><a href="<?php echo base_url() . 'c_master/read/' . $lain->id_artikel; ?>"><?php echo $lain->judul ?></a></h3>
                                </header>
                                <p><?php echo substr($lain->isi, 0, 100) . '...'; ?></p>
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