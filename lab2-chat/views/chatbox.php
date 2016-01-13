<form action="" method="GET">
    <div class="form-group">
        <p>Nickname:</p>
        <input type="text" id="nicknameInput" name="nickname" class="form-control" value="<?= htmlentities($nickname) ?>" placeholder="Nickname">
    </div>
    <p>Message:</p>
    <div class="form-group">
        <input type="text" id="contentInput" name="content" class="form-control" value="<?= htmlentities($content) ?>" placeholder="Insert message here" required>
    </div>
    <div class="form-group">
        <button class="btn btn-primary" type="submit">Send Message</button>
    </div>
</form>

