<?php header('X-UA-Compatible:IE=edge,chrome=1');?>
<!DOCTYPE html>
<?php get_header(); ?>
 
    <body>
        <!--[if lt IE 7]>
            <p class="chromeframe">You are using an outdated browser. <a href="http://browsehappy.com/">Upgrade your browser today</a> or <a href="http://www.google.com/chromeframe/?redirect=true">install Google Chrome Frame</a> to better experience this site.</p>
        <![endif]-->

        <!-- This code is taken from http://twitter.github.com/bootstrap/examples/hero.html -->

        
        <header id='site-header'>
            <div class="container-fluid">
                <div 'fluid-row'>
                    <div class='span10' id='title'>
                        <h1 >The Dawn of a New Era</h1>
                        Premier International Yu-Gi-Oh! Online Duel System<br />
                        Sponsored by KaibaCorporation
                    </div>
                    <div class='span2' id='server'>
                        <div id='server-status' class='serverinfo'>
                            Status<span> Active</span>
                        </div>
                        <div id='server-games' class='serverinfo'>
                             Games<span> ### </span>
                        </div>
                        <div id='server-players' class='serverinfo'>
                            Players<span> ### </span>
                        </div>
                        <div id='server-registered' class='serverinfo'>
                            Registered<span> #### </span>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <div id='effect1'></div>
        <div id='site-body'>
            <div class='container-fluid'>
                <div class='span8'>
                    <p class='underlined'>YGOPro: The Dawn of a New Era (TDOANE) is an international effort to bring a free Yu-Gi-Oh! experience to users accross the globe. The core software was developed by 'Floruohydride' and features automatic card effects with proper rulings, current and pass formats. KaibaCorporation adds a special program wrapper to smooth out user interface and usablity issues, it provides free servers, statistics, forums, chat, and a host of related services to better the game experience.
                    </p>
                     <div id='main-download'>
                       Download<br />
                      The Dawn of a New Era 2.2.3 YGOPro 1.02e English Anime Edition
                    </div>
                </div>
                <div class='span4'>
                    <img src='http://tdoane.com/wp-content/themes/YGOPROURIUI/images/big-kc.png' />
                </div>

            </div>
        </div><!-- /site-body/ -->
        <footer id='site-footer'>
            <div class="container-fluid">
                By using this website and accompining software you agree to our terms of service.
            </div>
        </footer>
        <?php get_footer();?>
    </body>
</html>
