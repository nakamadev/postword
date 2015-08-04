<!DOCTYPE HTML>
<html>
    <head>
        <title>Technology | Postword</title>
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
                                    <h2><a href="#"><?php echo $art->nm_cat; ?> Section</a></h2>
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
            <div id="footer">
                <div class="container">
                    <div class="row">

                        <!-- Tweets -->
                        <section class="4u 12u(mobile)">
                            <header>
                                <h2 class="icon fa-twitter circled"><span class="label">Tweets</span></h2>
                            </header>
                            <ul class="divided">
                                <li>
                                    <article class="tweet">
                                        Amet nullam fringilla nibh nulla convallis tique ante sociis accumsan.
                                        <span class="timestamp">5 minutes ago</span>
                                    </article>
                                </li>
                                <li>
                                    <article class="tweet">
                                        Hendrerit rutrum quisque.
                                        <span class="timestamp">30 minutes ago</span>
                                    </article>
                                </li>
                                <li>
                                    <article class="tweet">
                                        Curabitur donec nulla massa laoreet nibh. Lorem praesent montes.
                                        <span class="timestamp">3 hours ago</span>
                                    </article>
                                </li>
                                <li>
                                    <article class="tweet">
                                        Lacus natoque cras rhoncus curae dignissim ultricies. Convallis orci aliquet.
                                        <span class="timestamp">5 hours ago</span>
                                    </article>
                                </li>
                            </ul>
                        </section>

                        <!-- Posts -->
                        <section class="4u 12u(mobile)">
                            <header>
                                <h2 class="icon fa-file circled"><span class="label">Posts</span></h2>
                            </header>
                            <ul class="divided">
                                <li>
                                    <article class="post stub">
                                        <header>
                                            <h3><a href="#">5 Ways the Internet Is Helping You Fight Against Anxiety</a></h3>
                                        </header>
                                        <span class="timestamp">3 hours ago</span>
                                    </article>
                                </li>
                                <li>
                                    <article class="post stub">
                                        <header>
                                            <h3><a href="#">Bake the Best Chocolate Chip Cookies by Knowing What to Tweak</a></h3>
                                        </header>
                                        <span class="timestamp">6 hours ago</span>
                                    </article>
                                </li>
                                <li>
                                    <article class="post stub">
                                        <header>
                                            <h3><a href="#">3 Steps To Easy Meal Planning For Busy People (With A Quick Recipe!)</a></h3>
                                        </header>
                                        <span class="timestamp">Yesterday</span>
                                    </article>
                                </li>
                                <li>
                                    <article class="post stub">
                                        <header>
                                            <h3><a href="#">NASA's Kepler Discovers First Earth-Size Planet In The 'Habitable Zone' of Another Star</a></h3>
                                        </header>
                                        <span class="timestamp">2 days ago</span>
                                    </article>
                                </li>
                            </ul>
                        </section>

                        <!-- Photos -->
                        <section class="4u 12u(mobile)">
                            <header>
                                <h2 class="icon fa-camera circled"><span class="label">Photos</span></h2>
                            </header>
                            <div class="row 25%">
                                <div class="6u">
                                    <a href="#" class="image fit"><img src="<?php echo base_url(); ?>images/a.jpg" alt="" /></a>
                                </div>
                                <div class="6u$">
                                    <a href="#" class="image fit"><img src="<?php echo base_url(); ?>images/b.jpg" alt="" /></a>
                                </div>
                                <div class="6u">
                                    <a href="#" class="image fit"><img src="<?php echo base_url(); ?>images/c.jpg" alt="" /></a>
                                </div>
                                <div class="6u$">
                                    <a href="#" class="image fit"><img src="<?php echo base_url(); ?>images/d.jpg" alt="" /></a>
                                </div>
                                <div class="6u">
                                    <a href="#" class="image fit"><img src="<?php echo base_url(); ?>images/e.jpg" alt="" /></a>
                                </div>
                                <div class="6u$">
                                    <a href="#" class="image fit"><img src="<?php echo base_url(); ?>images/f.jpg" alt="" /></a>
                                </div>
                                <div class="6u">
                                    <a href="#" class="image fit"><img src="<?php echo base_url(); ?>images/g.jpg" alt="" /></a>
                                </div>
                                <div class="6u$">
                                    <a href="#" class="image fit"><img src="<?php echo base_url(); ?>images/h.jpg" alt="" /></a>
                                </div>
                                <div class="6u">
                                    <a href="#" class="image fit"><img src="<?php echo base_url(); ?>images/i.jpg" alt="" /></a>
                                </div>
                                <div class="6u$">
                                    <a href="#" class="image fit"><img src="<?php echo base_url(); ?>images/j.jpg" alt="" /></a>
                                </div>
                            </div>
                        </section>

                    </div>
                    <hr />
                    <div class="row">
                        <div class="12u">

                            <!-- Contact -->
                            <section class="contact">
                                <header>
                                    <h3>Wanna know more about us ?</h3>
                                </header>
                                <p>Visit our backlink to see incredible work we've been doing</p>
                                <ul class="icons">
                                    <li><a href="#" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
                                    <li><a href="#" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
                                    <li><a href="#" class="icon fa-instagram"><span class="label">Instagram</span></a></li>
                                    <li><a href="#" class="icon fa-pinterest"><span class="label">Pinterest</span></a></li>
                                    <li><a href="#" class="icon fa-dribbble"><span class="label">Dribbble</span></a></li>
                                    <li><a href="#" class="icon fa-linkedin"><span class="label">Linkedin</span></a></li>
                                </ul>
                            </section>

                            <!-- Copyright -->
                            <div class="copyright">
                                <ul class="menu">
                                    <li>&copy; Postword. All rights reserved.</li><li>Design: <a href="http://html5up.net">Nakama</a></li>
                                </ul>
                            </div>

                        </div>

                    </div>
                </div>
            </div>

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
                $('#simple-menu').sidr();
            });
        </script>

    </body>
</html>