<?php
    require('./database.php');
    function escape($conn, $value) {
        return mysqli_real_escape_string($conn, $value);
    }
    $sql = "SELECT * FROM `myblog` ORDER BY `published_at`;";
    $results = mysqli_query($conn, $sql);
    if ($results === false) {
        echo mysqli_error($conn);
    } else {
        $articles = mysqli_fetch_all($results, MYSQLI_ASSOC);
    }

    $id = isset($_GET['id']) ? (int)$_GET['id'] : null;
    if ($id <= 0 || !is_numeric($id)) {
        $articles1 = null;
    } else {
        $id = escape($conn, $_GET['id']);
        $sql1 = "SELECT * FROM `myblog` WHERE id = $id";
        $results1 = mysqli_query($conn, $sql1);
        if ($results1 === false) {
            echo mysqli_error($conn);
            $articles1 = null;
        } else {
            $articles1 = mysqli_fetch_assoc($results1);
        }
    }
?>

<?php include_once('./header.php'); ?>

<main>
    <?php if (empty($articles)): ?>
        <p>Not found articles</p>
    <?php else: ?>
        <ul>
            <?php foreach ($articles as $article): ?>
                <li>
                    <article>
                        <h2><a href="./index.php?id=<?= $article['id']; ?>" style="text-decoration: none;"><?= $article['title']; ?></a></h2>
                        <p><?= $article['content']; ?></p>
                    </article>
                </li>
            <?php endforeach; ?>
        </ul>
    <?php endif; ?>

    <h2>Chi tiết bài viết</h2><br>
    <?php if (empty($articles1)): ?>
        <p>Not found articles detail</p>
    <?php else: ?>
        <article>
            <h2><?= $articles1['title']; ?></h2>
            <p><?= $articles1['content']; ?></p>
        </article>
    <?php endif; ?>
</main>

<?php require('./footer.php'); ?>