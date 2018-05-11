<?php

$question = $_SESSION['question'];

?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Kanji Pazzle</title>
</head>
<body>
<div id="question">
  Q. What "kanji" can be in the center bellow ?
  <hr>
  <!-- Show table of the problem -->
  <table style="font-size: large;">
    <tr><th></th><th><?php echo $question[0]; ?></th><th></th></tr>
    <tr><th><?php echo $question[1]; ?></th><th>?</th><th><?php echo $question[2]; ?></th></tr>
    <tr><th></th><th><?php echo $question[3]; ?></th><th></th></tr>
  </table>
</div>
<hr>
<form action="solve.php" method="POST">
  Answer: <input type="text" name="answer" /><br>
  <input type="reset" value="reset" />
  <input type="submit" value="submit" /><br>
</form>
</body>
</html>