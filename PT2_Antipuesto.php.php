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


   </Style>
</head>
     <body>
          <div class="container">
               <div class="content">
                    <h2>library Expansyon cost</h2>

  <?php
        $expenditures = [
            "Lumber" => 150000,
            "Concrete" => 78000,
            "Drywall" => 69000,
            "Paint" => 12000,
            "Miscellaneous" => 20000
        ];



          <?php
          echo "<table>";
          echo "<tr>
               <th>item</th>     
               <th>Estimated Cost</th>
               <th>+10%</th>     
               <th>+15%</th>
               <th>+20%</th>
               </tr>";




               </div>
          </div>
     </body>
</html>
