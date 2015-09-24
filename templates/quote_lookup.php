<p> A share of <?= htmlspecialchars($qt["name"]) ?> (<?= htmlspecialchars($qt["symbol"]) ?>)
    costs <b>$<?= htmlspecialchars($qt["price"]) ?></b></p>

<form action="buy.php" method="post">
    <input type="hidden" name="quote" value="<?= $qt["symbol"] ?>"/>
    <button type="submit" class="btn btn-default">Buy</button>
</form>
<div>
    <a href="quote.php">get another quote</a>
</div>
<div>
    or <a href="index.php">go back</a>
</div>