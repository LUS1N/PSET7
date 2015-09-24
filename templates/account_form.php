<h2>Change password:</h2>
<form action="account.php" method="post">
    <fieldset>
        <div class="form-group">
            <input autofocus class="form-control" name="oldPW" placeholder="Old password" type="password"/>
        </div>
        <div class="form-group">
            <input class="form-control" name="newPw" placeholder="New password" type="password"/>
        </div>
        <div class="form-group">
            <input class="form-control" name="newPwRepeat" placeholder="New password (repeat)" type="password"/>
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-default">Change password</button>
        </div>
    </fieldset>
</form>