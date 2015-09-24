<?php if (isset($action)): ?>
<form action="<?= $action ?>.php" method="post">
    <?php else: ?>
    <form action="quote.php" method="post">
        <?php endif ?>
        <fieldset>
            <div class="form-group">
                <input autofocus class="form-control" name="quote" placeholder="Symbol" type="text"/>
            </div>
            <div>
                <button type="submit" class="btn btn-default">Get quote</button>
            </div>
        </fieldset>
    </form>
    <div>
        or <a href="index.php">go back</a>
    </div>