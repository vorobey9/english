<html>
<head>

    <link href="/template/css/style.css" rel="stylesheet" type="text/css">
</head>
<body>
    <div id="content">

        <?php foreach ($newsList as $newsItem):?>
        <div class="post">
            <h2 class="title"><a href="/news/<?php echo $newsItem['id'];?>"><?php echo $newsItem['title'];?></a></h2>
            <p class="byline"><?php echo $newsItem['date'];?></p>
            <div class="entry">
                <p><?php echo $newsItem['short_content'];?></p>
            </div>
            <div class="meta">
                <p class="links"><a href="/news/<?php echo $newsItem['id'];?>" class="comments">Read more</a></p>
            </div>
        </div>
        <?php endforeach;?>

    </div>
</body>
</html>