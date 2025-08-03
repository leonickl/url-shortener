<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?= config('title') ?></title>
    <style>
        :root {
            --bg-color: #ffffff;
            --text-color: #111111;
            --card-bg: #f2f2f2;
            --input-bg: #ffffff;
            --border-color: #cccccc;
            --accent: #4f46e5;
        }

        @media (prefers-color-scheme: dark) {
            :root {
            --bg-color: #0d1117;
            --text-color: #c9d1d9;
            --card-bg: #161b22;
            --input-bg: #0d1117;
            --border-color: #30363d;
            --accent: #58a6ff;
            }
        }

        body {
            margin: 0;
            padding: 0;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: var(--bg-color);
            color: var(--text-color);
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .form-container {
            background-color: var(--card-bg);
            padding: 2rem;
            border-radius: 1rem;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.2);
            max-width: 400px;
            width: 100%;
        }

        h2 {
            margin-bottom: 1.5rem;
            text-align: center;
        }

        label {
            display: block;
            margin-bottom: 0.5rem;
            font-weight: bold;
        }

        input[type="text"] {
            width: 100%;
            padding: 0.75rem;
            margin-bottom: 1.25rem;
            border: 1px solid var(--border-color);
            border-radius: 0.5rem;
            background-color: var(--input-bg);
            color: var(--text-color);
            font-size: 1rem;
        }

        button {
            width: 100%;
            padding: 0.75rem;
            background-color: var(--accent);
            color: white;
            border: none;
            border-radius: 0.5rem;
            font-size: 1rem;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        button:hover {
            background-color: darken(var(--accent), 10%);
            filter: brightness(1.1);
        }

        @media (max-width: 480px) {
            .form-container {
                padding: 1.5rem;
            }
        }
    </style>
</head>
<body>
    <?= $slot ?>
</body>
</html>