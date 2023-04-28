<html>
  <head>
    <title>PHP Test</title>
    <link rel="stylesheet" href="css/main.css">
    
  </head>
  <body>

<!-- date -->
<marquee>
    <?php

      function displayWebsiteName(){
        return "World Wide Initiative!!!";
      }
                
       define("GREETING", "hello!");

          echo "Nadia " . GREETING . "<br><br>";
            
          if ( date('l') == 'Thursday' ){
              echo "Today is Happy " . date("l"); 
            } else if( date('l') == 'Friday' ) {
              echo "Today is Thai " . date("l") . "<br>"; 
            } else if( date('l') == 'Monday' ) {
              echo "Today is KayPinky " . date("l") . "<br>"; 
            } else if( date('l') == 'Tuesday' ) {
              echo "a smile " . date("l") . "<br>"; 
            } else if( date('l') == 'wednesday' ) {
              echo "Happy day " . date("l") . "<br>"; 
            }
          
      echo( date(' jS \o\f F') );

  echo( "<span class=\"attention\"><br><br>ATTENTION: THIS IS NOT EASY WORK. I DID THIS WITH PHP :)</span>" );
            ?>
  </marquee>
    <?php
        $websiteName = displayWebsiteName();

       echo '<h1>' . $websiteName . '</h1>'; 

    ?> 
    <ul>
      <?php

// This is your menu
$items = ["home" => "index.php", "news" => "news.php", "about" => "about.php", "contact" => "contact.php"];

foreach ($items as $linkName => $fileName)
{
  echo '<li class="name"><a href=' . $fileName . '"> ' . $linkName . '</a></li>';
}
?>
    </ul>
<?php

// Include your page
if (isset($activePage))
{
    include $activePage;   
}
// else
// {
//     // include "home.php";
// }
?>


<!--   IMG -->
<!-- mo
     -->
    <?php 
    $the_query = new WP_Query(array(
    'post_type'     => 'post',
    'post_status'   => 'publish',
    'meta_key'      => 'colors',
  ));

$results = [];
while ( $the_query->have_posts() ) {

    $the_query->the_post(); 
    $credits = get_field('colors');

    if( !empty($color) ) {

        foreach( $colors as $color ) {  
           $results [$color][]=array(
               'title' => get_the_title(),
               'img' => get_field('photo')
           );
       }
    }
}

foreach ($results as $color => $posts) {

   foreach($posts as $post) {  /* This shows multiple images but I only need one */
        echo '<img src="https://www.responsiblebusiness.com/wp-content/uploads/2018/06/photo-1488521787991-ed7bbaae773c.jpg'.$post['img']['url'].'">';
    }


   echo '<div><h2>'.$color.'</h2>';

    foreach($posts as $post) {
        echo '<div>'.$post['title'].'</div>';
    }

   echo '</div>';
}

wp_reset_postdata();?>






    

   <script src="js/jquery.js"></script>
    <script src="js/timeline.min.js"></script>
   
  </body>
</html>