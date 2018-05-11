<?php
$answer = $_POST["answer"];
//echo $answer;

session_start();

$question = $_SESSION["question"];
$correct_answer = $question[4];

$is_correct = ($answer === $correct_answer);
session_destroy();
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Kanji Pazzle | Answer</title>
</head>
<body>
Your answer (<?php echo $answer; ?>) is ...<br>
<?php if ($is_correct): ?>
  <span style="color:'blue'; font-size:large;"><i>Correct!!!!!!!!!</i></span>
<?php else: ?>
  <span style="color:'red'; font-size:large;"><i>Incorrect...</i></span>
<?php endif; ?>
<hr>
<p>
  Answer: <strong><?php echo $correct_answer; ?></strong>
</p>
<p><a href="index.php">Try again?</a></p>
</body>
</html>
