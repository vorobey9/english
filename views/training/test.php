<?php include ROOT . '/views/header1.php'; ?>

<div id="testArea" data-idFolder="<?php echo $idFolder; ?>">
    <div class="headTest">
        <h2><?php echo $dataFolder['title']; ?></h2>
        <p><?php echo $dataFolder['description']; ?></p>
    </div>
    <div class="bodyTest">
        <?php
        $i = 0;
        foreach($dataTests as $test): ?>
        <div class="itemTest">
            <h3><?php echo $i+1 . '. '. $test['text']; ?></h3>

            <label class="labelTest" for="<?php echo $test['answerA']; ?>"><?php echo $test['answerA']; ?></label>
            <input class="inputTest <?php echo 'input'.$i; ?>" id="<?php echo $test['answerA']; ?>" name="<?php echo $test['id']; ?>" type="radio">

            <label class="labelTest" for="<?php echo $test['answerB']; ?>"><?php echo $test['answerB']; ?></label>
            <input class="inputTest <?php echo 'input'.$i; ?>" id="<?php echo $test['answerB']; ?>" name="<?php echo $test['id']; ?>" type="radio">

            <label class="labelTest" for="<?php echo $test['answerC']; ?>"><?php echo $test['answerC']; ?></label>
            <input class="inputTest <?php echo 'input'.$i; ?>" id="<?php echo $test['answerC']; ?>" name="<?php echo $test['id']; ?>" type="radio">

            <label class="labelTest" for="<?php echo $test['answerD']; ?>"><?php echo $test['answerD']; ?></label>
            <input class="inputTest <?php echo 'input'.$i; ?>" id="<?php echo $test['answerD']; ?>" name="<?php echo $test['id']; ?>" type="radio">
        </div>
        <?php $i++;
        endforeach; ?>

        <input type="button" id="res" value="Проверить" onclick="doItTest();">

    </div>
</div>

<div id="resArea"></div>

<script src="/template/js/jquery-1.11.2.min.js"
        type="text/javascript"></script>
<script src="/template/js/bootstrap.min.js"
        type="text/javascript"></script>
<script src="/template/js/jquery.mCustomScrollbar.concat.min.js" type="text/javascript"></script>
<script src="/template/js/script.js" type="text/javascript"></script>
<script src="/template/js/trainingTest.js" type="text/javascript"></script>
</body>
</html>