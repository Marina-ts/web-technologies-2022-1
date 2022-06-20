<?php
include_once 'model/products.php';
include_once 'model/comments.php';

$id = $_GET['id'];

if (!$id) {
    header('location: /index.php');
}

$product = productById($id)[0];
$comments = commentById($id);

if(array_key_exists('create-comment', $_POST)) {
    createComment($id ,$_POST['comment_text']);
    header("Refresh: 0");
    exit();
}
else if(array_key_exists('delete-comment', $_POST)) {
    deleteComment($_POST["id"]);
    header("Refresh: 0");
    exit();
}
else if(array_key_exists('update-comment', $_POST)) {
    updateComment($_POST["id"], $_POST["changed_comment_text"]);
    header("Refresh: 0");
    exit();
}
?>

<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php if ($product): ?>
    <div style="display:flex;flex-direction: column;">
        <strong><?=$product['name']?></strong>
        <div>
            <?=$product['description']?>
        </div>
        <div>
            Цена: <?=$product['price']?>
        </div>
        <img src="<?=$product['image']?>" alt="" height="200px" style="object-fit: cover;width: fit-content">
    </div>

<div style="margin-top: 20px;">
    <form method="POST">
        <span>Оставьте отзыв: </span>
        <input type="text" name="comment_text" style=" width: 500px;">
        <button name="create-comment" type="submit">Отправить</button>
    </form>
</div>

<?php else: ?>
    <div>
        Не найдено товара с id = <?=$id?>
    </div>
<?php endif; ?>

<div style="margin-top: 20px;">
<?php if ($comments): ?>
        <? foreach ($comments as $comment): ?>
            <div style="display:flex;justify-content:space-between; 
            border:1px solid blue; padding: 10px">
                <form method="POST">
                    <input type='hidden' name='id' value="<?=$comment['id']?>" />
                    <input type="text" style="width: 601px;" 
                           name="changed_comment_text" value="<?=$comment['text']?>">
                    <button name="update-comment" type="submit">
                        Изменить комментарий
                    </button>
                </form>
                <div>
                    <form method="POST">
                        <input type='hidden' name='id' value="<?=$comment['id']?>" />
                        <button name="delete-comment" type="submit">
                            Удалить
                        </button>
                    </form>
                </div>
            </div>
        <?endforeach;?>
</div>

<?php else: ?>
<div>
    Отзывов ещё нет
</div>
<?php endif; ?>

</body>
</html>