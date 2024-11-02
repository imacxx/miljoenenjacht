<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'Miljoenenjacht' }}</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
            margin: 0;
        }

        .miljoenenjacht-container {
            position: relative;
            width: 100%;
            max-width: 1200px;
            margin: 20px auto 50px;
        }

        .container {
            position: relative;
            width: 100%;
        }

        .amount-column {
            position: absolute;
            width: 150px;
        }

        .left {
            left: 0;
        }

        .right {
            right: 0;
        }

        .amount {
            position: absolute;
            background-color: #f1c40f;
            color: #333;
            font-weight: bold;
            font-size: 1.2rem;
            padding: 12px 40px;
            text-align: center;
            border-radius: 8px;
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.2);
            cursor: pointer;
            width: 100%;
            height: 40px; /* Fixed height for calculation */
            transition: opacity 0.3s ease;
        }

        .amount.removed {
            opacity: 0;
            pointer-events: none;
        }

        .reset-button {
            /* ... existing reset button styles ... */
        }


    </style>
</head>
<body>
{{ $slot }}
</body>
</html>
