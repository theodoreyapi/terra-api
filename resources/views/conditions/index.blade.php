<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conditions d'utilisation</title>
    <style>
        :root {
            color-scheme: light;
            --bg: #f7f8fc;
            --card: #ffffff;
            --text: #1f2937;
            --muted: #6b7280;
            --accent: #2563eb;
            --accent-soft: #dbeafe;
        }

        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            font-family: "Segoe UI", Roboto, Arial, sans-serif;
            background: linear-gradient(135deg, #eef4ff 0%, var(--bg) 100%);
            color: var(--text);
            line-height: 1.7;
        }

        .page {
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 24px;
        }

        .card {
            width: 100%;
            max-width: 900px;
            background: var(--card);
            border-radius: 24px;
            box-shadow: 0 20px 50px rgba(37, 99, 235, 0.12);
            overflow: hidden;
        }

        .hero {
            background: linear-gradient(120deg, var(--accent) 0%, #4f46e5 100%);
            color: white;
            padding: 32px 36px;
        }

        .hero h1 {
            margin: 0 0 10px;
            font-size: 2rem;
        }

        .hero p {
            margin: 0;
            opacity: 0.95;
            font-size: 1rem;
        }

        .content {
            padding: 32px 36px 36px;
        }

        .content .intro {
            margin-bottom: 20px;
            color: var(--muted);
            font-size: 1rem;
        }

        .content .box {
            background: var(--accent-soft);
            border-left: 4px solid var(--accent);
            border-radius: 14px;
            padding: 20px 22px;
            color: var(--text);
            white-space: pre-wrap;
        }

        .footer {
            margin-top: 20px;
            text-align: right;
            color: var(--muted);
            font-size: 0.95rem;
            font-style: italic;
        }

        @media (max-width: 640px) {

            .hero,
            .content {
                padding: 24px 20px;
            }

            .hero h1 {
                font-size: 1.5rem;
            }
        }
    </style>
</head>

<body>
    <div class="page">
        <div class="card">
            <div class="hero">
                <h1>Conditions d'utilisation</h1>
                <p>Merci de prendre le temps de lire attentivement nos règles avant d’utiliser nos services.</p>
            </div>

            <div class="content">
                <p class="intro">
                    Chez Terra, nous voulons que votre expérience soit claire, rassurante et respectueuse de vos droits.
                </p>

                <div class="box">
                    @php
                        $text =
                            $conditions->description ??
                            'Les conditions d’utilisation seront bientôt disponibles. Merci pour votre patience.';
                    @endphp
                    {!! nl2br(e($text)) !!}
                </div>

                <div class="footer">
                    Merci pour votre confiance et votre compréhension.
                </div>
            </div>
        </div>
    </div>
</body>

</html>
