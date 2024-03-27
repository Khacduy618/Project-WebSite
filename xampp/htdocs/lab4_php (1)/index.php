<?php
    include_once('./database.php');
    $articles = null;
    $sql = "select * from `article` order by `published_at`;";
    $results = mysqli_query($conn,$sql);
    if($results === false){
        echo mysqli_error($conn);
    }else{
        $articles = mysqli_fetch_all($results,MYSQLI_ASSOC);
    }

    $articles1 = null;
    $id_temp = $_GET['id'];
    if(isset($id_temp) && is_numeric($id_temp)){
        $sql1 = "select * from `article` where id=".$_GET['id'];
        $results1 = mysqli_query($conn,$sql1);
        if($results1 === false) echo mysqli_error($conn); else $articles1 = mysqli_fetch_assoc($results1);
        $id_temp = null;
    }else{
        $articles1 = null;
    }


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>lab4</title>
</head>
<body>
    <?php include_once('./header.php'); ?>
    <main>
        <h2>Danh sach articles</h2> <br>
        <?php if(empty($articles)): ?>
            <p>Not found articles</p>
        <?php else: ?>
            <ul>
                <?php foreach($articles as $article): ?>
                    <li>
                        <article>
                            <a href="./index.php?id=<?php echo $article['id'] ?>" style="text-decoration: none;"><?php echo $article['title']; ?></a>
                            <p><?php echo $article['content']; ?></p>
                        </article>
                    </li>
                <?php endforeach; ?>
            </ul>
        <?php endif; ?>

        <h2>Chi tiet article</h2> <br>
        <?php if(empty($articles1)): ?>
            <p>Not found articles1</p>
        <?php else: ?>
            <ul>
                <?php foreach($articles as $article_detail): ?>
                    <li>
                        <article>
                            <h2><?php echo $article_detail['title']; ?></h2>
                            <p><?php echo $article_detail['content']; ?></p>
                        </article>
                    </li>
                <?php endforeach; ?>
            </ul>
        <?php endif; ?>
        <?php include_once('./footer.php'); ?>
    </main>
</body>
</html>