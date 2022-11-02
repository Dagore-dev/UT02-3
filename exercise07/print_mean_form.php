<?php

function print_mean_form (int $count, int $accumulated): void
{
  echo <<<FORM
      <form action="./exercise07/" method="post">
      <label for="number">Number</label>
      <input type="number" name="number" id="number" required>
      
      <input type="hidden" name="count" value="$count">
      <input type="hidden" name="accumulated" value="$accumulated">
      
      <input type="submit" value="Send">
    </form>
  FORM;
}

?>
