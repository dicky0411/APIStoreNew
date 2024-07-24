<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Area Code Info</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            background-color: #f8f9fa;
            color: #333;
        }
        .json-container {
            width: 90%;
            max-width: 800px;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            font-family: monospace;
            white-space: pre-wrap;
        }
        .btn-container {
            margin-top: 20px;
            margin-left: 20px;
            text-align: center;
        }
        .btn-back {
            background-color: #000;
            color: #fff;
            border: none;
            font-size: 16px;
            cursor: pointer;
            width:60%;
            height:40px;
        }
        .btn-back:hover {
            background-color: #d400d4;
        }
        
       
    </style>
</head>
<body style="background-color:gray">
    
    <div class="json-container">
        <h1>AREA CODE INFO</h1>
        {{ $pretty_json }}
        <div class="btn-container">
        <button class="btn-back" onclick="window.location.href='{{ route('home') }}'">Back to Main UI</button>
    </div>
    </div>
    
</body>
</html>
