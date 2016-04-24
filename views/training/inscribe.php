<?php include ROOT . '/views/header1.php'; ?>

<div id="inscribeArea" data-idFolder="<?php echo $idFolder; ?>">
    <div class="headInscribe">
        <h2><?php echo $dataFolder['title']; ?></h2>
        <p><?php echo $dataFolder['description']; ?></p>
    </div>
    <div class="bodyInscribe">
        <?php
        $i = 0;
        foreach($dataInscribe as $inscribe): ?>
            <div class="itemInscribe">
                <h3><?php echo $i+1 . '. ' . $transText[$i]; ?></h3>
                <input class="inscribeAnswer" id="<?php echo 'input' . $i; ?>" placeholder="введіть відповідь">
            </div>
        <?php $i++;
        endforeach; ?>

        <input type="button" id="res" value="Проверить" onclick="doItInscribe();">
    </div>
</div>
<div id="resArea"></div>

<script src="/template/js/jquery-1.11.2.min.js"
        type="text/javascript"></script>
<script src="/template/js/bootstrap.min.js"
        type="text/javascript"></script>
<script src="/template/js/jquery.mCustomScrollbar.concat.min.js" type="text/javascript"></script>
<script src="/template/js/script.js" type="text/javascript"></script>
<script src="/template/js/trainingInscribe.js" type="text/javascript"></script>
</body>
</html>