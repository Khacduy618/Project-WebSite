<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>My Blog</title>
<style>
  body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
  }
  .post {
    margin-bottom: 20px;
  }
  h2 {
    margin-bottom: 5px;
  }
</style>
</head>
<body>

<h1>My Blog</h1>

<?php
$posts = array(
    "First post" => "This is the first of many posts!",
    "Second post" => "Another interesting post!",
    "An interesting post" => "Will this is interesting",
    "Read this!" => "You must read all about this now",
    "An interesting post" => "Yet more interesting information"
);

foreach ($posts as $title => $content) {
    echo "<div class='post'>";
    echo "<h2>$title</h2>";
    echo "<p>$content</p>";
    echo "</div>";
}
?>

</body>
</html>