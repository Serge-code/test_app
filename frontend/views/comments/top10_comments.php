<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h1>Топ 10 комментариев</h1>
<? use yii\helpers\Url;?>
<div>
    <form action="<?=Url::to('top10_comments');?>" method="get">
        <label>Владельцы статьи</label>
        <select name="id">
            <? foreach ($authors as $author) { ?>
                <option value="<?=$author->id;?>"><?=$author->name;?></option>
            <? } ?>
        </select>
        <button type="submit">Найти</button>
    </form>

    <h4>Комментарии</h4>
    <? foreach ($comments as $comment) { ?>
        <p><?=$comment['text']?></p>
    <? } ?>
</div>
</body>
</html>
