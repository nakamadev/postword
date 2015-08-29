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
                        <?php } else { ?>
                            <li><a href="<?php echo base_url() . 'c_master/user_out'; ?>">Sign Out</a></li>
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
                    <h3><?php echo $error; ?></h3>
                    <br>
                    <article id="main" class="special">
                        <form action="<?php echo base_url() . 'c_master/daftar'; ?>" method="post">
                            <label>Nama Lengkap</label>
                            <input type="text" name="nama" placeholder="" autofocus required/>
                            <label>Email</label>
                            <input type="email" name="email" placeholder="" required/>
                            <label>Password</label>
                            <input type="password" name="pass" placeholder="" required/>
                            <label>Retype Password</label>
                            <input type="password" name="repass" placeholder="" required/>
                            <br>
                            <button class="btn btn-primary" type="submit">Register</button>
                        </form>
                    </article>
                </div>
            </div>

            <!-- Footer -->
            <?php $this->load->view('minifooter');?>


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
                $('#right-menu').sidr({
                    side: 'right'
                });
            });
            CKEDITOR.replace('editor1');

            $("#fi").imagepicker({
                hide_select: true,
                show_label: false
            });
        </script>

    </body>
</html>