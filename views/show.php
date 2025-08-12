<style>

    .details-container {
        background-color: var(--card-bg);
        padding: 2rem;
        border-radius: 1rem;
        box-shadow: 0 4px 20px rgba(0, 0, 0, 0.2);
        max-width: 500px;
        width: 100%;
    }

    h2 {
        margin-bottom: 1.5rem;
        text-align: center;
    }

    .detail {
        margin-bottom: 1rem;
    }

    .label {
        font-weight: bold;
        margin-bottom: 0.25rem;
        display: block;
    }

    .value {
        background-color: var(--input-bg);
        padding: 0.75rem;
        border: 1px solid var(--border-color);
        border-radius: 0.5rem;
        word-break: break-word;
    }

    a.button {
        display: inline-block;
        margin-top: 1.5rem;
        text-align: center;
        padding: 0.75rem 1.5rem;
        background-color: var(--accent);
        color: white;
        text-decoration: none;
        border-radius: 0.5rem;
        font-size: 1rem;
        transition: background-color 0.3s ease;
    }

    a.button:hover {
        : brightness(1.1);
    }

</style>

<div class="details-container">
    <h2>Short URL Details</h2>

    <div class="detail">
        <span class="label">Original URL</span>
        <div class="value"><?= $record->long ?></div>
    </div>

    <div class="detail">
        <span class="label">Shortened URL</span>
        <div class="value"><?= 'https://'.config('domain').'/s/'.$record->short ?></div>
    </div>

    <div class="detail">
        <span class="label">Created On</span>
        <div class="value">August 3, 2025</div>
    </div>

    <a class="button" href="/">Shorten Another URL</a>
</div>
