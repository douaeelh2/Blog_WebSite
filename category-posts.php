<?php
include 'Partials/header.php' ;

//fetch posts from database if it set
if(isset($_GET['id'])) {
  $id = filter_var($_GET['id'], FILTER_SANITIZE_NUMBER_INT);
  $query = "SELECT * FROM posts WHERE category_id=$id ORDER BY date_time DESC";
  $posts = mysqli_query($connexion, $query);
  // $post = mysqli_fetch_assoc($result);
  
  }else{
    header('location: ' . ROOT_URL . 'blog.php');
    die();
  
  }
?>
  
    <header class="category__title">   
      <h2>
       <?php
              //fetch category from categories table  using category_id of post
        $category_id = $id;
        $category_query = "SELECT * FROM categories WHERE id=$id";
        $category_result = mysqli_query($connexion, $category_query);
        $category = mysqli_fetch_assoc($category_result);  
        echo $category['title'];  
    ?> 
    </h2>  

    </header>
    
     
    <!-- END OF CATEGORY TITLE-->

    <?php if (mysqli_num_rows($posts) > 0) : ?>
    <section class="posts">
        <div class="container posts_container">
        <?php while($post = mysqli_fetch_assoc($posts)) : ?>
            <article class="post">
                <div class="post__thumbnail">
                  <img src="./images/<?= $post['thumbnail'] ?>">
                </div>
                <div class="post__info" style="margin-top : 5px;" >
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
                    ?></p>
                    <a href="<?= ROOT_URL ?>post.php?id=<?= $post['id']?>" class="read-more">Read More</a>
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
                  <h5> <?= "{$author['firstname']} {$author['lastname']} "?></h5>
                    <small>
                        <?= date("M d, Y -H:i",strtotime($post['date_time'])) ?>
                    </small>
      
                  </div>
                </div>   
            </article>
            <?php endwhile  ?>
        </div>
    </section>
<?php else : ?>
<div class="alert__message error lg">
  <p>No posts found for this category</p>
</div>
<?php endif ?>
<!-- CATEGORY BUTTONS -->
    
<section class="category__buttons" >
  <div class=" category__buttons-container">
      <div class="title__posts1">
      
    <h2 class="headline headline-2 section-title" id="tag-label">
    
      <span class="span">Popular Tags</span>
    </h2>
    <p class="section-text">
      Most searched keywords
    </p>
  </div>
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
<?php
include 'Partials/footer.php' ;
?>