<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>The Dream</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <style>
        body {
            height: 100vh;
            width: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .container{
            max-width: 300px !important;
            background-color:#212529;
            padding: 2rem;
            border-radius: 1rem;
        }
        h1{
            color: white;
        }
        span{
            color: seagreen;
        }
    </style>
</head>
<body>
<div class="container">
<h1>AED/EUR Calculator</h1>

    <?php
    if (isset($_GET["submit"])) {
        $from = $_GET["from"];
        $to = $_GET["to"];
        $amount = $_GET["amount"];

        if ($from == "AED" && $to == "EUR") {
            $output = $amount * 0.2485;
            echo "<span>" . number_format($output, 2) . " Euro" . "</span>";
        } else if ($from == "EUR" && $to == "AED") {
            $output = $amount * 4.0237;
            echo "<span>" . number_format($output, 2) . " Dubai Dirham" . "</span>";
        }

    }
    ?>


<form action="index.php" method="get">
  <!--  <input type="text" name="AED" placeholder="AED">
    <select name="oper">
        <label>Choose currency</label>
        <option value="add">Add</option>
        <option value="sub">Subtract</option>
    </select>
    <input type="text" name="EU" placeholder="EU">
    <button type="submit">Calculate!</button>
    -->
    <div class="form-group">
    <label for="from">From:</label>
    <input type="text" name="from" class="form-control" placeholder="Enter Currency">
    </div>

    <div class="form-group">
    <label for="to">To:</label>
    <input type="text" name="to" class="form-control" placeholder="Enter Currency">
    </div>

    <div class="form-group">
        <label for="amount">Amount:</label>
        <input type="text" name="amount" class="form-control" placeholder="Amount">
    </div>

    <input type="submit" name="submit" class="btn btn-success" value="Convert">
</form>
</div>
</body>
</html>


