
<!DOCTYPE HTML>
<html>
    <head>
        <title>Masuk Akun</title>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
        <link rel="stylesheet" type="text/css" href="<?php echo base_url() . 'assets/css/event.css'; ?>" />
    </head>
    <body>

        <!-- Header -->
        <header id="header">
            <h1>Masuk</h1>
            <p>Selamat Datang.! Dapatkan privilege untuk mengawali ceritamu.</p>
        </header>

        <!-- Signup Form -->
        <form id="signup-form" method="post" action="<?php echo base_url() . 'c_master/login_user'; ?>">
            <input type="email" name="email" placeholder="Email" autofocus/>
            <input type="password" name="password" placeholder="Password" />
            <input type="submit" value="Log in" />
        </form>

        <!-- Footer -->
        <footer id="footer">
            <ul class="icons">
                <li><a href="<?php echo base_url(); ?>" class="icon fa-home"><span class="label">Home</span></a></li>
                <li><a href="#" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
                <li><a href="#" class="icon fa-instagram"><span class="label">Instagram</span></a></li>
                <li><a href="#" class="icon fa-facebook"><span class="label">Instagram</span></a></li>
                <li><a href="#" class="icon fa-google-plus"><span class="label">Instagram</span></a></li>
            </ul>
            <ul class="copyright">
                <li>&copy; Irwan Rosyadi S.Kom. All right reserved</li>
            </ul>
        </footer>

        <!-- Scripts -->
        <script src="<?php echo base_url() . 'assets/js/event.js'; ?>"></script>

