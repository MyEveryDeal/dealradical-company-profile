
<?php if (!str_ends_with($_SERVER['REQUEST_URI'], 'index.php')) {?> 
        <section class="page-title centred" style="background-image: url(assets/images/background/page-title-2.jpg);">
            <div class="auto-container">
                <div class="content-box clearfix">
                    <h1><?php echo $_SESSION['page-title-content-box']?? 'DealRadicals'?> </h1>
                    <ul class="bread-crumb clearfix">
                        <li><a href="index.php">Home</a></li>
                        <?php echo $_SESSION['page-title-bread-crumb']?? ''?>
                    </ul>
                </div>
            </div>
        </section>
    <?php } ?>