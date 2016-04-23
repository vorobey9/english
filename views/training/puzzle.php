<?php include ROOT . '/views/header.php'; ?>

<div id="inscribeArea" data-idFolder="<?php echo $idFolder; ?>">
    <div>
        <h2><?php echo $dataFolder['title']; ?></h2>
        <p><?php echo $dataFolder['description']; ?></p>
    </div>
    <div>
        <div id="ansBlock" style="background-color: #2e6da4; min-width: 50px; height: 20px; margin: 0 5px; display: inline-block"></div>
        <?php
        $i = 0;
        foreach($transText[0] as $word): ?>
            <div class="wordBlock" data-active='off' onclick="addWordToAnsBlock(this);" style="background-color: #2b542c; color: white; min-width: 50px; margin: 0 5px; display: inline-block">
                <?php echo $word; ?>
            </div>
            <?php $i++;
        endforeach; ?>
        <input type="button" value="Проверить">
        <input type="button" onclick="clearAnsBlock();" value="Очистить">
    </div>
</div>

<script src="/template/js/jquery-1.11.2.min.js"
        type="text/javascript"></script>
<script src="/template/js/bootstrap.min.js"
        type="text/javascript"></script>
<script src="/template/js/jquery.mCustomScrollbar.concat.min.js" type="text/javascript"></script>
<script src="/template/js/script.js" type="text/javascript"></script>
<script src="/template/js/trainingPuzzle.js" type="text/javascript"></script>
</body>
</html>