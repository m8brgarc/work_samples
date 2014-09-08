<?php
    $page = explode('/', $_SERVER['PHP_SELF']);
    $page = end($page);
    $logged_in = !empty($_SESSION['logged_in'])?true:false;
?>
<header class="fixed">
    <nav class="top-bar" data-topbar role="navigation">
        <ul class="title-area">
            <li class="name">
                <h1><a href="#">My PHP Practice Site</a></h1>
            </li>
            <li class="toggle-topbar menu-icon"><a href="#"><span></span></a></li>
        </ul>

        <section class="top-bar-section">
            <ul class="right">
                <li <?=$page=='index.php'?'class="active"':'';?>><a href="index.php">Home</a></li>
                <li <?=$page=='about.php'?'class="active"':'';?>><a href="about.php">About Us</a></li>
                <li <?=$page=='products.php'?'class="active"':'';?>><a href="products.php">Products</a></li>
                <li <?=$page=='blog.php'?'class="active"':'';?>><a href="blog.php">Blog</a></li>
                <li <?=$page=='calendar.php'?'class="active"':'';?>><a href="calendar.php">Calendar</a></li>
                <li <?=$page=='articles.php'?'class="active"':'';?>><a href="articles.php">Articles</a></li>
                <li <?=$page=='contact.php'?'class="active"':'';?>><a href="contact.php">Contact Us</a></li>
                <?php if($logged_in){?>
                    <li <?=$page=='preferences.php'?'class="active"':'';?>><a href="preferences.php">Preferences</a></li>
                    <li <?=$page=='login.php'?'class="active"':'';?>><a href="logout.php">Logout</a></li>
                <?php } ?>
                <li <?=$page=='login.php'?'class="active"':'';?>><a href="login.php">Login</a></li>
            </ul>
        </section>
    </nav>
</header>