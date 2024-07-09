<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Directions</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }
        .container {
            width: 80%;
            margin: auto;
            overflow: hidden;
        }
        header {
            background: #333;
            color: #fff;
            padding-top: 30px;
            min-height: 70px;
            border-bottom: #77b5fe 3px solid;
        }
        header h1 {
            text-align: center;
            text-transform: uppercase;
            margin: 0;
        }
        .directions, .map {
            background: #fff;
            padding: 20px;
            margin: 20px 0;
            border: 1px solid #ddd;
            border-radius: 5px;
        }
        .directions h2, .map h2 {
            margin-top: 0;
        }
        footer {
            background: #333;
            color: #fff;
            text-align: center;
            padding: 10px 0;
            margin-top: 20px;
            border-top: #77b5fe 3px solid;
        }
        #map {
            width: 100%;
            height: 400px;
            background: url('https://via.placeholder.com/600x400') no-repeat center center;
            background-size: cover;
        }
    </style>
</head>
<body>
    <div class="container">
        <header>
            <h1>How to Find Us</h1>
        </header>
        <section class="directions">
            <h2>Directions to Our Office</h2>
            <p>Our office is located at 1234 Main Street, Hometown, Mombasa.</p>
            <ol>
                <li>From the highway, take exit 42.</li>
                <li>Head east on Elm Street for 2 miles.</li>
                <li>Turn right onto Main Street.</li>
                <li>Our office is on the left, next to the coffee shop.</li>
            </ol>
        </section>
        <section class="map">
            <h2>Map</h2>
            <div id="map"></div>
        </section>
    </div>
    <footer>
        <p>&copy; 2024 Our Company</p>
    </footer>
</body>
</html>
