<?php

$name = test_input($_GET["name"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[ا-ي ف-ي]*$/",$name)) {
      echo "عليك الكتاب بي الغه العربيه";
    }

    function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

?>
