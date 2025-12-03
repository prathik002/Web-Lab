<html>
<head>
<title>Electricity Bill Calculator</title>
<style>
input {
    border: solid 2px;
    padding: 5px;
    font-size: 20px;
}
button {
    padding: 10px 20px;
    font-size: 20px;
}
</style>
</head>

<body>
<h1>PHP - Calculate Electricity Bill</h1>

<form method="POST">
    <input type="number" name="units" placeholder="Enter units consumed" required />
    <button type="submit" name="unit-submit">Calculate</button>
</form>

</body>

<?php
$result_str = "";

if (isset($_POST['unit-submit'])) {
    $units = $_POST['units'];

    if (!empty($units)) {
        $result = calculate_bill($units);
        $result_str = "<h2>Total amount for $units units = ₹ $result</h2>";
        echo $result_str;
    }
}

function calculate_bill($units) {

    $unit_cost_first = 3.25;
    $unit_cost_second = 4.05;
    $unit_cost_third = 5.10;
    $unit_cost_fourth = 6.95;
    $unit_cost_fifth = 8.20;

    if ($units <= 50) 
       {
        $fixed_charge = 40;
        $bill = ($units * $unit_cost_first) + $fixed_charge;
       } 
    elseif ($units > 50 && $units <= 100)
       {
        $temp = 50 * $unit_cost_first;
        $remaining_units = $units - 50;
        $fixed_charge = 65;
        $bill = $temp + ($remaining_units * $unit_cost_second) + $fixed_charge;
       } 
    elseif ($units > 100 && $units <= 200) 
       {
        $temp = (50 * $unit_cost_first) + (50 * $unit_cost_second);
        $remaining_units = $units - 100;
        $fixed_charge = 120;
        $bill = $temp + ($remaining_units * $unit_cost_third) + $fixed_charge;
       } 
    elseif ($units > 200 && $units <= 300)
       {
        $temp = (50 * $unit_cost_first) + (50 * $unit_cost_second) + (100 * $unit_cost_third);
        $remaining_units = $units - 200;
        $fixed_charge = 150;
        $bill = $temp + ($remaining_units * $unit_cost_fourth) + $fixed_charge;
       } 
    else 
       {
        $temp = (50 * $unit_cost_first) + (50 * $unit_cost_second) + (100 * $unit_cost_third) + (100 * $unit_cost_fourth);
        $remaining_units = $units - 300;
        $fixed_charge = 200;
        $bill = $temp + ($remaining_units * $unit_cost_fifth) + $fixed_charge;
       }

    return number_format((float)$bill, 2, '.', '');
}
?>
</html>

