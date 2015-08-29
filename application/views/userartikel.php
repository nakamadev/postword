<!DOCTYPE HTML>
<html>
    <head>
        <title>Your Account | Postword</title>
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
            <div id="header" style="background-image: url('<?php echo base_url() . 'images/b.jpg'; ?>');">

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
                        <table class="table table-bordered table-responsive">
                            <thead>
                                <tr>
                                    <th>No.</th>
                                    <th>Title</th>
                                    <th>Story</th>
                                    <th>Posted</th>
                                    <th>Category</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $no = 1;
                                if ($userartikel == '') {
                                    ?>
                                    <tr>
                                        <td colspan="6" style="text-align:center;"><h2>Oops., You've share nothing yet.</h2></td>
                                    </tr>
                                    <?php
                                } else {
                                    foreach ($userartikel as $ua) {?>
                                        <tr>
                                            <td><?php echo $no; ?></td>
                                            <td><strong><?php echo $ua->judul; ?></strong></td>
                                            <td><blockquote><?php echo substr($ua->isi, 0, 400) . '...'; ?></blockquote></td>
                                            <td><?php echo $ua->tgl_post; ?></td>
                                            <td><?php echo $ua->nm_cat; ?></td>
                                            <td><a class="btn btn-primary" href="<?php echo base_url() . 'c_master/edit/' . $ua->id_artikel . '/kjahsd810239809'; ?>">Edit</a><a class="btn btn-danger" href="<?php echo base_url() . 'c_master/delete/' . $ua->id_artikel; ?>">Delete</a></td>
                                        </tr>
                                        <?php $no++;
                                    }
                                }
                                ?>
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>No.</th>
                                    <th>Title</th>
                                    <th>Story</th>
                                    <th>Posted</th>
                                    <th>Category</th>
                                    <th>Action</th>
                                </tr>
                            </tfoot>
                        </table>
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