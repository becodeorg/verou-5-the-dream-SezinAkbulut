<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>The Dream</title>
</head>
<body>
<h1>EUR/AED Calculator</h1>
<p>Covert Dubai Dirham to Euro for next Dubai Trip</p>
<form action="functions.php" method="get">
  <!--  <input type="text" name="AED" placeholder="AED">
    <select name="oper">
        <label>Choose currency</label>
        <option value="add">Add</option>
        <option value="sub">Subtract</option>
    </select>
    <input type="text" name="EU" placeholder="EU">
    <button type="submit">Calculate!</button>
    -->
    <label for="input">Enter Currency:</label>
    <input type="text" name="input" placeholder="Enter Currency">
    <label for="dropdown">Choose currency:</label>
    <select name="dropdown">
        <option value="AED">AED</option>
        <option value="EU">EU</option>
    </select>
    <button type="submit" name="submit" value="Convert">Convert</button>
</form>
</body>
</html>


