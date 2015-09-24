<table class="table">
    <thead>
    <tr>
        <th class="historyAction">Action</th>
        <th class="historySymbol">Symbol</th>
        <th class="historyShares">Shares</th>
        <th class="historyPrice">Price</th>
        <th class="historyTime">Time</th>
    </tr>
    </thead>

    <tbody>

    <?php foreach ($history as $position): ?>
        <tr class="<?= $position["action"] ?>">
            <td class="historyAction"><?= $position["action"] ?></td>
            <td class="historySymbol"><?= $position["symbol"] ?></td>
            <td class="historyShares"><?= $position["shares"] ?></td>
            <td class="historyPrice">$ <?= $position["price"] ?></td>
            <td class="historyTime"><?= $position["time"] ?></td>
        </tr>
    <?php endforeach ?>
    </tbody>


</table>

<br/>
<div>
    <a href="index.php">go back</a>
</div>

