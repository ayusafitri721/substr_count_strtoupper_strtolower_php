<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UI String</title>
    <style>
        body {
            background-color: #3B6BA5;
            font-family: Arial, sans-serif;
            color: white;
        }
        .container {
            width: 500px;
            margin: 150px auto;
            background-color: #2D5A91;
            padding: 30px;
            border-radius: 20px;
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.2);
        }
        label {
            font-size: 24px;
            font-weight: bold;
            display: block;
            margin-bottom: 10px;
        }
        textarea {
            width: 100%;
            height: 150px;
            border-radius: 15px;
            border: none;
            padding: 15px;
            font-size: 18px;
            box-sizing: border-box;
        }
        button {
            width: 100%;
            padding: 15px;
            border-radius: 15px;
            border: none;
            background-color: #86D293;
            color: white;
            font-size: 18px;
            cursor: pointer;
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <div class="container">
        <form action="prosess2.php" method="post">
            <label for="kalimat">Kalimat</label>
            <textarea name="kalimat" id="kalimat" required></textarea><br><br>
            <button type="submit">Submit</button>
        </form>
    </div>
</body>
</html>
