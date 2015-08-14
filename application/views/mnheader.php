<div id="headerback" style="background-image: url('<?php echo base_url() . 'images/' . $fi->nama; ?>');
     left:10;
     right:10;
     -webkit-filter: blur(5px);
     -moz-filter: blur(5px);
     -o-filter: blur(5px);
     -ms-filter: blur(5px);
     filter: blur(5px);
     z-index: 1;">
</div>

<div id="header">
    <!-- Inner -->
    <div class="inner">
        <header>
            <h1><a href="<?php echo base_url(); ?>" id="logo">Postword</a></h1>
            <hr />
            <p>Place for Startup Writers</p>
        </header>
        <footer>
            <a href="#main" class="button circled scrolly">Let's Go</a>
        </footer>
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