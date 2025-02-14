<?php

include "includes/topheader.php";
include "includes/menu.php";

if (isset($_GET['page'])) {
  $page = $_GET['page'];

  switch ($page) {
    case 'Home':
      include "includes/hero.php";
      include "includes/spotlights.php";
      include "includes/whatsnew.php";
      include "includes/blogs.php";
      include "includes/gallery.php";
      break;
    case 'About':
      include "includes/about.php";
      break;
    case 'Education':
      include "includes/education.php";
      include "includes/timeline.php";
      break;
    case 'Blogs':
      include "includes/blogs-title.php";
      include "includes/blogs.php";
      break;
    case 'Contact':
      include "includes/contact.php";
      break;
    case 'Learn More':
      include "includes/education.php";
      include "includes/timeline.php";
      break;
    case 'ThankYou':
      include "includes/thankyou.php";
      break;
  }
} else {
  include "includes/hero.php";
  include "includes/spotlights.php";
  include "includes/whatsnew.php";
  include "includes/blogs.php";
  include "includes/gallery.php";
}

include "includes/footer.php";
