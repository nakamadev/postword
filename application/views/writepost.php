<!DOCTYPE HTML>
<html>
    <head>
        <title>Postword</title>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
        <link rel="stylesheet" href="<?php echo base_url() . 'assets/css/bootstrap.css'; ?>" />
        <link rel="stylesheet" href="<?php echo base_url() . 'assets/css/image-picker.css'; ?>" />
        <link rel="stylesheet" href="<?php echo base_url() . 'assets/css/main.css'; ?>" />
        <link rel="stylesheet" href="<?php echo base_url() . 'assets/css/jquery.sidr.light.css'; ?>" />
        <!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
    </head>
    <body class="no-sidebar">
        <div id="page-wrapper">

            <!-- Header -->
            <div id="header" style="background-image: url('<?php echo base_url() . 'images/a.jpg'; ?>');">

                <div class="inner">
                    <header>
                        <h1><a href="<?php echo base_url(); ?>" id="logo">Postword</a></h1>
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
                        <li><a id="simple-menu" href="#sidr">Category</a></li>
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
                    <h3><?php echo $error; ?></h3>


                    <br>
                    <article id="main" class="special">
                        <form action="<?php echo base_url() . 'c_master/add_article'; ?>" method="post" enctype="multipart/form-data">
                            <label>Story Title</label>
                            <input type="text" name="judul" placeholder="Ex : How to Make Fire from Ammonia" autofocus/>
                            <label>Category</label>
                            <select name="kategori" class="form-control">
                                <option value="">--</option>
                                <?php foreach ($category as $cat) { ?>
                                    <option value="<?php echo $cat->id_cat; ?>"><?php echo $cat->nm_cat; ?></option>
                                <?php } ?>
                            </select>
                            <br>
                            <label>Write Your Story</label>


                            <textarea id="editor1" name="editor1"></textarea>
                            <br>
                            <button class="btn btn-primary form-control" data-toggle="modal" data-target="#myModal">Select Featured Image</button>
                            <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                            <h4 class="modal-title" id="myModalLabel">Select Your Featured Image</h4>
                                        </div>
                                        <div class="modal-body">
                                            <select name="fi" id="fi">
                                                <?php foreach ($feat_im as $fi) { ?>
                                                    <option data-img-src="<?php echo base_url() . 'images/' . $fi->nama; ?>" value="<?php echo $fi->id_feat_im; ?>"><?php echo $fi->nama; ?></option>
                                                <?php } ?>
                                            </select>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                                            <button class="btn btn-primary" type="submit">Post My Story</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </article>
                </div>
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
        <script src="<?php echo base_url() . 'assets/js/bootstrap.js'; ?>"></script>
        <script src="<?php echo base_url() . 'assets/js/jquery.dropotron.min.js'; ?>"></script>
        <script src="<?php echo base_url() . 'assets/js/jquery.scrolly.min.js'; ?>"></script>
        <script src="<?php echo base_url() . 'assets/js/jquery.onvisible.min.js'; ?>"></script>
        <script src="<?php echo base_url() . 'assets/js/skel.min.js'; ?>"></script>
        <script src="<?php echo base_url() . 'assets/js/util.js'; ?>"></script>

        <script src="<?php echo base_url() . 'assets/js/main.js'; ?>"></script>
        <script src="<?php echo base_url() . 'assets/js/image-picker.js'; ?>"></script>
        <script src="<?php echo base_url() . 'assets/js/ckeditor/ckeditor.js'; ?>"></script>
        <script src="<?php echo base_url() . 'assets/js/jquery.sidr.min.js'; ?>"></script>
        <script type="text/javascript">
            $(document).ready(function() {
                $('#simple-menu').sidr();
            });
            CKEDITOR.replace('editor1');

            $("#fi").imagepicker({
                hide_select: true,
                show_label: false
            });
        </script>

    </body>
</html>