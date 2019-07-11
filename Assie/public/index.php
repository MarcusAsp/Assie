<?php 
    require_once('./includes/header.php');
?>
        <section class="about_brand">
            <section>
                <h1>FASHION BY PEOPLE<br>FOR PEOPLE</h1>
                <p class="introText" id="introText">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut cursus dolor non quam ullamcorper placerat. Duis eu enim vel lectus tincidunt mattis ac ac sem. Sed vulputate lacus nibh, non venenatis risus ornare consectetur. Donec rutrum aliquet congue. Donec bibendum blandit nisi, sit amet mollis justo accumsan ac. Praesent rhoncus posuere vestibulum. Aliquam tellus nulla, eleifend a cursus at, vulputate eget elit.
                </p>
                <span class="readMoreText" id="readMoreText">Read more</span>
            </section>
            <aside>
                <img src="../pictures/icons/symbol.png">
            </aside>
        </section>
        <article class="news">
            <aside>
                <img src="../pictures/bild_web.png">
            </aside>
            <section>
                <h2>New <span>Fashion</span> In Store</h2>
                <p class="newsText" id="newsText">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quiepakis nostrud exercitation ullamco laboris nsi ut aliquip ex ea comepmodo consetquat. Duis aute irure dolor in reprehenderit in voluptate velit esse cfgillum dolore eutpe fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt inpeku culpa qui officia deserunt mollit anim id est laborum.
                    <br><br><br>
                    Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium poeyi doloremque laudantium, totam rem aperiam, eaque ipsa quae apsb illo inventore veritatis et quasi architecto beiatae vitae dicta sunt explicabo.
                    <br><br><br>
                    Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, seprid quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliqueam quaerat voluptatem.
                </p>
                <span class="readMoreNews" id="readMoreNews">Read more</span>
                <a href="#">S H O P</a>
            </section>
        </article>
        <section class="fashionists">
            <h2>Top Fashionists</h2>
            <section>
<?php 
                
        include_once('./src/fashionist.inc.php');
        $fashionistaObj = new Fashionist();
        $topFashionists = $fashionistaObj->topFashionists();
        $currentIndex = 1;
foreach($topFashionists as $fashionist){      
    if ($currentIndex == 2) {
        echo '<div class="top-row">';
    }elseif ($currentIndex == 4) {
        echo '<div class="top-row2">';
    }
?>
                <section class="top top-fashionist-<?php echo($currentIndex);?>">
                    <article>
                        <a href="#">
                        <img src="<?php echo($fashionist['picPath']);?>" alt="top fashionist nr<?php echo($currentIndex);?>">
                        <figcaption>"<?php echo($fashionist['quote']); ?>"</figcaption>
                        </a>
                    </article>
                    <h2><?php echo($fashionist['fName']." ".$fashionist['lName']); ?></h2>
                    <label>Top <?php echo($currentIndex);?></label>
                </section>
<?php
    if ($currentIndex == 3) {
        echo '</div>';
    }elseif ($currentIndex == 5) {
        echo '</div>';
    }
    $currentIndex++;
}             
?>
            </section>
        </section>
<?php 
require_once('./includes/footer.php');
?>