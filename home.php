<?php
include 'Partials/header.php' ;

//fetch featured post from posts table
$featured_query = "SELECT * FROM posts ORDER BY date_time DESC LIMIT 2";
$featured_result =mysqli_query($connexion, $featured_query);

//fetch posts from posts table
$query="SELECT * FROM posts ORDER BY date_time DESC";
$posts= mysqli_query($connexion, $query);

//fetch recent posts from posts table
$recent_query = "SELECT * FROM posts ORDER BY date_time DESC LIMIT 7";
$recent_result =mysqli_query($connexion, $recent_query);

//fetch popular users posts from posts table
$popular_query = "SELECT * FROM posts 
WHERE author_id IN (
    SELECT author_id FROM posts 
    GROUP BY author_id
    HAVING COUNT(*) > 1
)
ORDER BY date_time DESC
LIMIT 12";
$popular_result= mysqli_query($connexion, $popular_query);

?>
​  <!-- DESCRIPTION --> 
<div class="box">
    <div class="infobox">
      <h1>
      Discover , Explode Your Creativity On the Web 
      </h1>
      <h2>Share Your Ideas with BlogBurst ! </h2>
      <p>
        Our website offers a collection of informative blog posts covering multiple categories, including Style, Nature, and Music, among others.
      </p>
    
  </div>
    
    <div class="display">
      <img class="display-nft" src="images\erik-mclean-2Wv9VnwzeeI-unsplash.jpg" border="0">
      <div class="infowrapper">
        <div class="info">
          <img class="info-img" src="https://images.unsplash.com/photo-1535207010348-71e47296838a?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=385&q=80" alt="unsplash-OG44d93i-NJk" border="0">
          <div>
            <p>Laura</p>
            <p>0.21 Weth</p>
          </div>
        </div>
    <div class="info2">
          <span>WE ARE HERE</span>
          <div class="iconwrapper">
            <svg width="22" height="20" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" clip-rule="evenodd" d="M5.7365 2C3.6575 2 1.5 3.8804 1.5 6.5135c0 3.1074 2.3236 5.9603 4.8612 8.1207 1.2458 1.0606 2.4954 1.9137 3.4352 2.5022.4692.2937.8593.5203 1.1305.6727L11 17.85l.0731-.0409a27.984 27.984 0 0 0 1.1304-.6727c.9399-.5885 2.1895-1.4416 3.4353-2.5022C18.1764 12.4738 20.5 9.6209 20.5 6.5135 20.5 3.8805 18.3425 2 16.2635 2c-2.1054 0-3.8008 1.389-4.552 3.6426a.75.75 0 0 1-1.423 0C9.5373 3.389 7.8418 2 5.7365 2ZM11 18.7027l.3426.6672a.7502.7502 0 0 1-.6852 0L11 18.7027ZM0 6.5135C0 3.052 2.829.5 5.7365.5 8.0298.5 9.8808 1.7262 11 3.6048 12.1192 1.7262 13.9702.5 16.2635.5 19.171.5 22 3.052 22 6.5135c0 3.8183-2.8014 7.06-5.3888 9.2628-1.3167 1.121-2.6296 2.0166-3.6116 2.6314-.4918.308-.9025.5467-1.1918.7092a19.142 19.142 0 0 1-.4301.2347l-.0248.013-.007.0036-.0021.0011c-.0003.0001-.0012.0006-.3438-.6666-.3426.6672-.3424.6673-.3426.6672l-.0033-.0017-.007-.0036-.0248-.013a19.142 19.142 0 0 1-.4301-.2347 29.324 29.324 0 0 1-1.1918-.7092c-.982-.6148-2.295-1.5104-3.6116-2.6314C2.8014 13.5735 0 10.3318 0 6.5135Z" fill="#E0E0E0"/>
            </svg>
            25
          </div>
        </div>
      </div>
    </div>
    
  </div>   
<!--  END OF DESCRIPTION -->

<!--GET STARTED-->
<div class="started">
    <p class="started-boldtext">Get Started</p>
    <p class="started-slimtext">Begin your blogging adventure with our essential tools</p>
    <div class="started-items">
      <div class="itemwrapper">
        <div class="started-items-item">
        <svg xmlns="http://www.w3.org/2000/svg" width="42" height="42" viewBox="0 0 24 24" fill="#bdbdbd">
          <path d="m18.988 2.012 3 3L19.701 7.3l-3-3zM8 16h3l7.287-7.287-3-3L8 13z"></path>
        <path d="M19 19H8.158c-.026 0-.053.01-.079.01-.033 0-.066-.009-.1-.01H5V5h6.847l2-2H5c-1.103 0-2 .896-2 2v14c0 1.104.897 2 2 2h14a2 2 0 0 0 2-2v-8.668l-2 2V19z"></path></svg>
  </div>
        <p>Get inspired for your first post</p>
      </div>
      <div class="itemwrapper">
        <div class="started-items-item">
        <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="#bdbdbd" class="bi bi-people-fill" viewBox="0 0 16 16">
          <path d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1H7Zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6Zm-5.784 6A2.238 2.238 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.325 6.325 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1h4.216ZM4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5Z"/>
        </svg>
        </div>
        <p>Customize with user accounts</p>
      </div>
      <div class="itemwrapper">
        <div class="started-items-item">
        <svg xmlns="http://www.w3.org/2000/svg" width="42" height=" 42" fill="#bdbdbd" viewBox="0 0 24 24"><path d="M12 2C9.243 2 7 4.243 7 7v3H6a2 2 0 0 0-2 2v8a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2v-8a2 2 0 0 0-2-2h-1V7c0-2.757-2.243-5-5-5zM9 7c0-1.654 1.346-3 3-3s3 1.346 3 3v3H9V7zm4 10.723V20h-2v-2.277a1.993 1.993 0 0 1 .567-3.677A2.001 2.001 0 0 1 14 16a1.99 1.99 0 0 1-1 1.723z"></path>
        </svg>
        </div>
        <p>Set up your account</p>
      </div>
      <div class="itemwrapper">
        <div class="started-items-item">
        <svg xmlns="http://www.w3.org/2000/svg" width="42" height=" 42" fill="#bdbdbd" viewBox="0 0 24 24"><path d="M12 2C6.486 2 2 6.486 2 12s4.486 10 10 10 10-4.486 10-10S17.514 2 12 2zm0 18c-4.411 0-8-3.589-8-8s3.589-8 8-8 8 3.589 8 8-3.589 8-8 8z"></path>
        <path d="M13 7h-2v6h6v-2h-4z"></path>
        </svg>
        </div>
        <p>Share your ideas over time</p>
      </div>
    </div>
  </div>
  <!-- END OF GET STARTED-->

<!-- CARDS -->
<section class="seccard">
    <div class="txt_ctn">
      <div class="text_card">
        <span><h1>Popular Categories</h1></span>
        <p>Don't miss a variety of trending topics from music and nature to style, design, and travel ...</p>
      </div>
        
        <div class="btn_prev_next">
          <button class="prev"><i class="bi bi-arrow-left-short"></i></button>
          <button class="next"><i class="bi bi-arrow-right-short"></i></button>
        </div>
        
    </div>
    
    <div class="swiper mySwiper container" >
      <div class="swiper-wrapper content" >

        <div class="swiper-slide card">

          <div class="card_content card_content_1">
            <img src="images\categorymusic1.jpg"/>
              <div class="text">
                <h2 data-splitting="">Music</h2>
                <p data-splitting="">Music encompasses a vast range of genres, styles, and sounds, all created to evoke emotions and express ideas. It is a universal language that connects people from all walks of life.</p>
              </div>
           
            </div>
        </div>

        <div class="swiper-slide card">

          <div class="card_content card_content_2">
            <img src="images\categorystyle1.jpg"/>
                <div class="text">
                  <h2 data-splitting="">Style</h2>
                  <p data-splitting=""> Fashion style is a form of art that involves the use of clothing and accessories to express oneself. It can be influenced by various factors such as personal taste, culture, and current trends.</p>
                </div>
            </div>
            
        </div>

        
        <div class="swiper-slide card">
          

          <div class="card_content card_content_3">
            <img src="images\categorytravel1.jpg"/>
                <div class="text">
                  <h2 data-splitting="">Travel</h2>
                  <p data-splitting="">Travel is a way to break free from daily routines and explore new places, people, and cultures. It can be an enriching experience that broadens one's horizons, and creates lasting memories.</p>
                </div>
             
          </div>
        </div>

        
        <div class="swiper-slide card">
          

          <div class="card_content card_content_4">
            <img src="images\categorynature1.jpeg"/>
                <div class="text">
                  <h2 data-splitting="">Nature</h2>
                  <p data-splitting="">Nature encompasses the vast and diverse array of natural environments and phenomena that make up our world, including mountains, forests, oceans, and weather patterns. </p>
                </div>
             
          </div>
        </div>

        
        <div class="swiper-slide card card_content_5">
          

          <div class="card_content">
            <img src="images\categorydesign1.jpeg"/>
                <div class="text">
                  <h2 data-splitting="">Design</h2>
                  <p data-splitting="">Design encompasses a wide range of creative fields, including graphic design, product design, architecture. It involves creation of functional and aesthetic objects and spaces.</p>
                </div>
             
          </div>
        </div>

      </div>
    </div>
  </section>
  
  <!-- Swiper JS -->
  <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
<!--END OF CARDS-->

<!--FEATURE-->
    <div class="title__posts1">
      <h2 class="headline headline-2 section-title">
      <span class="span">Editor Posts</span>
      </h2>

      <p class="section-text">
      Featured and highly rated articles
      </p>
    </div>
    
<div class="ftr">
  <!-- show fetured post if there's any  -->
  
  <?php while($featured = mysqli_fetch_assoc($featured_result)) : ?>
    
    <section class="featured">
        <div class="container featured__container">
            <div class="post__thumbnail">
                <img src="./images/<?= $featured['thumbnail']?>">
            </div>
            <div class="post__info">
              <?php
              //fetch category from categories table  using category_id of post
              $category_id = $featured['category_id'];
              $category_query = "SELECT * FROM categories WHERE id=$category_id";
              $category_result = mysqli_query($connexion, $category_query);
              $category = mysqli_fetch_assoc($category_result);
              ?>

                <a href="<?= ROOT_URL ?>category-posts.php?id=<?= $featured['category_id'] ?>" class="category__butn"><?='#'. $category['title'] ?></a>
                <h2 class="post__title"><a href="<?= ROOT_URL ?>post.php?id=<?= $featured['id'] ?>"><?= $featured['title'] ?></a></h2>
                <p class="post__body">
                <?php
                      $body = $featured['body'];
                        if (strlen($body) > 170) {
                        echo substr($body, 0, 170) . '...';
                      } else {
                      echo $body;
                      }
                    ?></p>
                <div class="post__author">
                <?php
                //fetch author from users table using author_id
                $author_id = $featured['author_id'];
                $author_query = "SELECT * FROM users WHERE id=$author_id";
                $author_result = mysqli_query($connexion, $author_query);
                $author = mysqli_fetch_assoc($author_result);
                 ?>
                    <div class="post__author-avatar">
                        <img src="./images/<?= $author['avatar'] ?>" >
                    </div>    
                    <div class="post__author-info">
                        <h5> <?= "{$author['firstname']} {$author['lastname']} "?></h5>
                        <small>
                        <?=date("M d, Y -H:i",strtotime($featured['date_time'])) ?>
                        </small>
                    </div>
                </div>    
            </div>  
        </div>
    </section> 
     
<?php endwhile ?>

</div>
 
<!--END OF FEATURE-->

<!--POSTS-->
    <section class="posts">
        <div class="container posts_container">
        <?php while($post = mysqli_fetch_assoc($posts)) : ?>
            <article class="post">
                <div class="post__thumbnail">
                  <img src="./images/<?= $post['thumbnail'] ?>">
                </div>
                <div class="post__info">
                <?php
              //fetch category from categories table  using category_id of post
              $category_id = $post['category_id'];
              $category_query = "SELECT * FROM categories WHERE id=$category_id";
              $category_result = mysqli_query($connexion, $category_query);
              $category = mysqli_fetch_assoc($category_result);
           
              ?>
                  <a href="<?= ROOT_URL ?>category-posts.php?id=<?=$post['category_id'] ?>" class="category__butn"><?='#'. $category['title'] ?></a>
                  <h3 class="post__title">
                    <a href="<?= ROOT_URL ?>post.php?id=<?= $post['id']?>"><?= $post['title'] ?></a>
                  </h3>
                  <p class="post__body-content">
                  <?php
                      $body = $post['body'];
                        if (strlen($body) > 120) {
                        echo substr($body, 0, 120) . '...';
                      } else {
                      echo $body;
                      }
                    ?>
                  </p><a href="<?= ROOT_URL ?>post.php?id=<?= $post['id']?>" class="read-more">Read More</a>
                <div class="post__author">
                <?php
                //fetch author from users table using author_id
                $author_id = $post['author_id'];
                $author_query = "SELECT * FROM users WHERE id=$author_id";
                $author_result = mysqli_query($connexion, $author_query);
                $author = mysqli_fetch_assoc($author_result);
                 ?>
                  <div class="post__author-avatar">
                    <img src="./images/<?= $author['avatar'] ?>" >
                  </div>    
                  <div class="post__author-info">
                  <h5><?= "{$author['firstname']} {$author['lastname']} "?></h5>
                    <small>
                        <?= date("M d, Y -H:i",strtotime($post['date_time'])) ?>
                    </small>
      
                  </div>
                </div>
                </div>   
            </article>
            <?php endwhile  ?>
        </div>
    </section>
    <!--END OF POSTS-->

    <!-- CATEGORY BUTTONS -->
    <div class="title__posts1">
      
    <h2 class="headline headline-2 section-title" id="tag-label">
    
      <span class="span">Popular Tags</span>
    </h2>
    <p class="section-text">
      Most searched keywords
    </p>
  </div>
<section class="category__buttons" >
  <div class=" category__buttons-container">
      
    <ul class="grid-list">
    <?php
        $all_categories_query ="SELECT * FROM categories ORDER BY date_time ASC";
        $all_categories = mysqli_query($connexion, $all_categories_query);
          ?>
      <?php while($category = mysqli_fetch_assoc($all_categories)) : ?>
      
        <li>
        <button class="card category__button">
        <img src="./images/<?= $category['category_img'] ?>" width="32" height="32" loading="lazy">
          <a href="<?= ROOT_URL ?>category-posts.php?id=<?= $category['id'] ?>"class="category__buttons-container"><?= $category['title'] ?></a>            
        </button>
      </li>
      <?php endwhile ?>
    </ul>

  </div>
</section>
<!--END OF CATEGORY BUTTONS-->
   
   <!-- RECENT POSTS -->
   <section class="section recent-post" id="recent" aria-labelledby="recent-label">
        <div class="container">

          <div class="post-main">

            <h2 class="headline headline-2 section-title">
              <span class="span">Recent posts</span>
            </h2>

            <p class="section-text">
              Don't miss the latest trends
            </p>

            <ul class="grid-list-recent">
          <?php while($recent = mysqli_fetch_assoc($recent_result)) : ?>

            <?php

              //fetch category from categories table  using category_id of post
              $category_id = $recent['category_id'];
              $category_query = "SELECT * FROM categories WHERE id=$category_id";
              $category_result = mysqli_query($connexion, $category_query);
              $category = mysqli_fetch_assoc($category_result);

              ?>

              <li>
                <div class="recent-post-card">

                  <figure class="card-banner img-holder">
                  <img src="./images/<?= $recent['thumbnail']?>" style = "border-radius: 3%;">
                  </figure>

                  <div class="card-content">

                    <h3 class="headline headline-3 card-title">
                    <a class="link hover-2" href="<?= ROOT_URL ?>post.php?id=<?= $recent['id'] ?>"><?= $recent['title'] ?></a>

                    </h3>

                    <p class="card-text">
                    <?php
                      $body = $recent['body'];
                        if (strlen($body) > 200) {
                        echo substr($body, 0, 200) . '...';
                      } else {
                      echo $body;
                      }
                      ?>
                    </p>


                    <div class="card-wrapper">
                      <div class="card-tag">
                      <a href="<?= ROOT_URL ?>category-posts.php?id=<?= $recent['category_id'] ?>" class="category__butn"><?='#'. $category['title'] ?></a>   
                      </div>
                    <?php
                    date_default_timezone_set('Europe/Paris');
                    $date_time = strtotime($recent['date_time']);
                    $current_time = time();
                    $time_diff = abs($date_time - $current_time);

                    ?>

                      <div class="wrapper">
                        <span class="span"><i class="far fa-clock"></i>&nbsp;</i>
                    <?php
                    if ($time_diff < 0) {
                        continue;
                    } elseif ($time_diff < 60) {
                        // Moins d'une minute
                        echo $time_diff . " s ago";
                    } elseif ($time_diff < 3600) {
                        // Moins d'une heure
                        $minutes = floor($time_diff / 60);
                        echo $minutes . " min ago";
                    } elseif ($time_diff < 86400) {
                        // Moins d'un jour (moins de 24 heures)
                        $hours = floor($time_diff / 3600);
                        echo $hours . " h ago";
                    } elseif ($time_diff < 604800) {
                        // Moins d'une semaine
                        $days = floor($time_diff / 86400);
                        echo $days . " day ago";
                    } elseif ($time_diff < 2592000) {
                        // Moins d'un mois (30 jours)
                        $weeks = floor($time_diff / 604800);
                        echo $weeks . " week ago";
                    } elseif ($time_diff < 31536000) {
                        // Moins d'un an (365 jours)
                        $months = floor($time_diff / 2592000);
                        echo $months . " month ago";
                    } else {
                        // Plus d'un an
                        $years = floor($time_diff / 31536000);
                        echo $years . " year ago";
                    }
                    ?></span>
                      </div>
                    </div>

                  </div>

                </div>
              </li>
            <?php endwhile ?>

            </ul>
          </div>

          <!-- POPULAR POSTS -->

          <div class="post-aside grid-list">

            <div class="card aside-card">

              <h3 class="headline headline-2 aside-title">
                <span class="span">Popular Posts</span>
              </h3>
              
              <ul class="popular-list">
              <?php while($popular = mysqli_fetch_assoc($popular_result)) : ?>
                <?php
                //fetch author from users table using author_id
                $author_id = $popular['author_id'];
                $author_query = "SELECT * FROM users WHERE id=$author_id";
                $author_result = mysqli_query($connexion, $author_query);
                $author = mysqli_fetch_assoc($author_result);
                 ?>
                <li>
                  <div class="popular-card">

                    <figure class="card-banner img-holder">
                    <img src="./images/<?= $author['avatar'] ?>" >
                    </figure>
                    
                    <div class="card-content">

                      <h4 class="headline headline-4 card-title">
                      <a class="link hover-2" href="<?= ROOT_URL ?>post.php?id=<?= $popular['id'] ?>"><?= $popular['title'] ?></a>
                      </h4>
                      <?php
                    date_default_timezone_set('Europe/Paris');
                    $date_time = strtotime($popular['date_time']);
                    $current_time = time();
                    $time_diff = abs($date_time - $current_time);

                    ?>
                      <div class="warpper">
                        <p class="card-subtitle"><?= "{$author['firstname']} {$author['lastname']} "?></p>

                        <span class="span"><i class="far fa-clock"></i>&nbsp;</i>
                        <?php
                    if ($time_diff < 0) {
                        continue;
                    } elseif ($time_diff < 60) {
                        // Moins d'une minute
                        echo $time_diff . " s ago";
                    } elseif ($time_diff < 3600) {
                        // Moins d'une heure
                        $minutes = floor($time_diff / 60);
                        echo $minutes . " min ago";
                    } elseif ($time_diff < 86400) {
                        // Moins d'un jour (moins de 24 heures)
                        $hours = floor($time_diff / 3600);
                        echo $hours . " h ago";
                    } elseif ($time_diff < 604800) {
                        // Moins d'une semaine
                        $days = floor($time_diff / 86400);
                        echo $days . " day ago";
                    } elseif ($time_diff < 2592000) {
                        // Moins d'un mois (30 jours)
                        $weeks = floor($time_diff / 604800);
                        echo $weeks . " week ago";
                    } elseif ($time_diff < 31536000) {
                        // Moins d'un an (365 jours)
                        $months = floor($time_diff / 2592000);
                        echo $months . " month ago";
                    } else {
                        // Plus d'un an
                        $years = floor($time_diff / 31536000);
                        echo $years . " year ago";
                    }
                    ?></span>
                      </div>

                    </div>

                  </div>
                </li>
                <?php endwhile ?>
          </div>

        </div>
      </section>
<?php
include 'Partials/footer.php' ;
?>