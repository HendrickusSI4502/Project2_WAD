<!DOCTYPE html>
<html>
<head>
    <title>Kalkulator hendrikus</title>
    <style>
        body {
            text-align: center;
        }
        Calculator {
            margin: 0 auto;
            width: 300px;
        }
    </style>
</head>
<body>
    <div id="kalkulator">
        <h2>Calculator</h2>
        <form action="" method="post">

            <input type="number" name="num1" placeholder="Enter angka">

            <select name="num2">
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
                <option value="7">7</option>
                <option value="8">8</option>
                <option value="9">9</option>
            </select>

            <button type="submit" name="hitung">hitung</button>
        </form>
        <p>hasil:

            <?php
            if (isset($_POST['hitung'])) {
                $num1 = (float)$_POST["num1"];
                $num2 = (float)$_POST["num2"];
                $result = 0;

                $result = $num1*$num2;
                // print hasil
                echo "Maka $num1 dikali $num2 hasilnya adalah $result";
            }
            ?>
        </p>
    </div>
</body>
</html>

