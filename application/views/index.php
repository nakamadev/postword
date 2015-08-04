<!DOCTYPE HTML>
<html>
    <head>
        <title>Postword</title>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />

        <link rel="stylesheet" href="<?php echo base_url() . 'assets/css/main.css'; ?>" />
        <link rel="stylesheet" href="<?php echo base_url() . 'assets/css/jquery.sidr.light.css'; ?>" />

    </head>
    <body class="homepage">
        <div id="page-wrapper">

            <!-- Header -->
            <?php $this->load->view('mnheader')?>

            <!-- Main -->
            <div class="wrapper style2">

                <div class="container">
                    <article class="banner" id="main" class="container special">

                        <header>
                            <h2><a href="#">Story of The Day</a></h2>
                            <p>
                                5 Ways the Internet Is Helping You Fight Against Anxiety
                            </p>
                        </header>
                        <p>
                            If you often feel anxious and tend to worry about one thing after another, we’ve got good news. Recent studies suggest the Internet can be a useful tool for those combating anxiety and depression. Now, instead of feeling guilty for the time you spend in cyberspace, you can feel reassured there are actually benefits that come with some of you online activities.

                            Benefits for Seniors and Teens
                            Recent research has discovered that seniors in particular can benefit from going online. The series of studies, conducted between 2002 and 2008, found that “16 percent of people who didn’t use the Internet reported suffering from depression, while only nine percent of those who did stated the same.”

                            For isolated populations, like seniors, being able to reach out and connect with other people without having to drive or even leave the house, is a godsend.

                            Another group found to benefit from time spent online is teenagers. Research conducted by a team at the University of Sydney showed that adolescents benefit more from anxiety and depression treatment that is acombination of online self-help tools and in-person counselling.
                        </p>
                        <footer>
                            <a href="#" class="button">Continue Reading</a>
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