<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'Miljoenenjacht' }}</title>
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>

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

        /* Progress Bar Styles */
        .progress-bar-container {
            position: absolute;
            left: 250px; /* Adjust based on the width of the left column */
            right: 170px; /* Adjust based on the width of the right column */
            top: 0;
            text-align: center;
            padding-top: 20px;
        }

        .progress-bar {
            position: relative;
            background-color: #e0e0e0;
            height: 30px;
            border-radius: 15px;
            margin: 20px 0;
            overflow: hidden;
        }

        .progress-fill {
            background-color: #3498db;
            height: 100%;
            width: 0%;
            transition: width 0.3s ease;
        }

        .threshold-marker {
            position: absolute;
            top: -15px;
            transform: translateX(-50%);
        }

        .star-icon {
            width: 24px;
            height: 24px;
            display: block;
        }

        .progress-buttons {
            margin-top: 20px;
        }

        .progress-buttons button {
            padding: 10px 15px;
            font-size: 1rem;
            color: white;
            background-color: #3498db;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            margin: 0 5px;
        }

        .progress-buttons button:hover {
            background-color: #2980b9;
        }

        .reset-button {
            padding: 10px 20px;
            font-size: 1rem;
            color: white;
            background-color: #e74c3c;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
            margin-top: 20px;
        }

        .reset-button:hover {
            background-color: #c0392b;
        }

    </style>
</head>
<body>
{{ $slot }}
</body>
</html>
