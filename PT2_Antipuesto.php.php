<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Library Expansion</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #fff84c;
            text-align: center;
            margin: 0;
            padding: 0;
        }
        .container {
            width: 80%;
            margin: 20px auto;
            padding: 10px;
            background-color: #fff84c;
            border: 2px solid black;
            box-shadow: 3px 3px 10px rgba(0, 0, 0, 0.2);
            border-radius: 5px;
        }
       .content {
            background-color: #f0e68c;
            padding: 15px;
            border-radius: 5px;

        }
        table {


         width: 75%;
          margin: auto;
        border-collapse: collapse;
         border: 1px solid black;
            background-color: white;
      }
        h1 {
            color: blue;
            font-size: 22px;
   }
        h3 {
            color: red;
            font-size: 18px;
      }
        th, td {
            border: 1px solid black;
            padding: 8px;
            text-align: center;
        }
        th {
            background-color: #d3d3d3; 
  }
        tr:nth-child(even) {
            background-color: #ffffe0;
      }
        .total {
            font-weight: bold;
            color: green;
     }
        .footer {
            margin-top: 15px;
            font-size: 14px;
            font-style: italic;
            padding: 5px;
            background-color: #f0e68c;
            border-radius: 5px;
        }
    </style>
</head>    
<body>
<div class="container">

     <div class="content">
            <h2>Library Expansion Cost</h2>
        <h3>Cost Estimates</h3>
 <?php
          $expenditures = [
                "Lumber" => 150000,
                "Concrete" => 78000,
                "Drywall" => 69000,
                "Paint" => 12000,
     "Miscellaneous" => 20000
            ];

            $totalOriginal = $total10 = $total15 = $total20 = 0;
          echo "<table>";
     echo "<tr>
                    <th>Item</th>     
                    <th>Estimated Cost</th>
                    <th>+10%</th>     
                    <th>+15%</th>
                    <th>+20%</th>
                  </tr>";
  foreach ($expenditures as $item => $cost) {
              $increase10 = $cost * 1.10;
                $increase15 = $cost * 1.15;
                $increase20 = $cost * 1.20;

                $totalOriginal += $cost;
                $total10 += $increase10;
                $total15 += $increase15;
                $total20 += $increase20;

         echo "<tr>
              <td>$item</td>
                        <td>\$" . number_format($cost, 2) . "</td>
                        <td>\$" . number_format($increase10, 2) . "</td>
                        <td>\$" . number_format($increase15, 2) . "</td>
                        <td>\$" . number_format($increase20, 2) . "</td>
                    </tr>";
            }

            echo "<tr>
          <td><strong>Total Expenditures:</strong></td>
                    <td class='total'>\$" . number_format($totalOriginal, 2) . "</td>
                    <td class='total'>\$" . number_format($total10, 2) . "</td>
                    <td class='total'>\$" . number_format($total15, 2) . "</td>
                    <td class='total'>\$" . number_format($total20, 2) . "</td>
           </tr>";

            echo "</table>";
            ?>
        <div class="footer">
                Created by: <em>Rainjay Antipuesto</em>
            </div>
</body>
</html>

