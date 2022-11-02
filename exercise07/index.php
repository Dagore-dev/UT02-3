<?php 
  require_once('../templates/header.php'); print_header('Exercise 07');
  require_once('./print_mean_form.php')
?>

<?php

if (!isset($_POST['number']))
  {
    print_mean_form(count: 0, accumulated: 0);
  }
  else
  {
    if ($_POST['number'] > -1)
    {
      $count = $_POST['count'] + 1;
      $accumulated = $_POST['accumulated'] + $_POST['number'];

      print_mean_form($count, $accumulated);
    }
    else
    {
      if ($_POST['count'] != 0)
      {
        $mean = $_POST['accumulated'] / $_POST['count'];
        $result = number_format($mean, decimals: 2);
  
        echo "<p>The mean is equal to $result.</p>";
        echo '<a href="./">Calculate another mean</a>';
      }
      else
      {
        print_mean_form($_POST['accumulated'], $_POST['count']);
        echo '<p>Try to add a non-negative integer.</p>';
      }
    }
  }

?>

<?php require_once('../templates/footer.php') ?>
