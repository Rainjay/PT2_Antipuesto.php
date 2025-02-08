<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Library Expansion</title>
     <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0e68c;
            text-align: center;
        }
        .container {
            width: 80%;
            margin: 30px auto;
            padding: 10px;
            background-color: #000;
            border: 2px solid #000;
        }
        .content {
            background-color: #f0e68c;
            padding: 15px;
        }
        table {
            width: 70%;
            margin: auto;
            border-collapse: collapse;
            border: 2px solid black;
        }
        th {
            background-color: #808080;
            color: white;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="content">
            <h2>Library Expansion Cost</h2>

            <?php
            $expenditures = [
                "Lumber" => 150000,
                "Concrete" => 78000,
                "Drywall" => 69000,
                "Paint" => 12000,
                "Miscellaneous" => 20000
   
