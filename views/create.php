<div class="form-container">

    <h2><?= config('title') ?></h2>

    <form action="/" method="POST">
        <label for="long-url">Long URL</label>
        <input type="text" id="long-url" name="long" placeholder="https://example.com/very/long/url" required />

        <label for="short-url">Custom Short URL (optional)</label>
        <input type="text" id="short-url" name="short" placeholder="shortname" />

        <button type="submit">Shorten</button>
    </form>

</div>
