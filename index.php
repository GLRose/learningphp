<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Php Stuff</title>
  </head>
  <body>
    <form method="GET">
      <input type="text" name="person">
      <button>SUBMIT</button>
    </form>
    <?php
    //in this code you create a php variable, set the form method to GET, assign the input to the php variable
    //when the name is entered and submitted in the input box it will display text that was entered into input
      $name = $_GET['person'];
      echo $name." is a handsome fellow";
    ?>
  </body>
</html>
