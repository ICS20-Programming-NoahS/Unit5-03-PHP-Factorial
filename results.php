<?php

  // Initialize the product as 1
  $product = 1;

  // Get the user number
  $userNumber = intval($_POST["user-number"]);

   // If the user enters a negative number
  if ($userNumber < 0) {
    echo "Please do not enter a negative number!";
    
    // Exits the function early if user enters a negative number
    return;
  }

  if ($userNumber == 0) {
    $product = 1;
  } else {
    $counter = $userNumber;
    do {
      // Multiply the current value of product with counter
      $product = $product * $counter;
      $counter--;
    } while ($counter >= 1);
  }

  // Display the factorial of the user's number
  echo "The factorial of " . $userNumber . " is " . $product . ".";
?>