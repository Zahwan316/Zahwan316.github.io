<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kalkulator BMI</title>
    <link rel="stylesheet" href="mystyle.css">
</head>
<body>
    <main>
        <div class="box">
            <div class="title-box">
                <h2>BMI Calculator</h2>
            </div>
            <div class="main-box">
                <form action="hasil.php" method="post" style='width:100%'>
                    <ul>
                        <li>
                            <label for="">Masukan Berat Badan(kg)</label>
                            <input type="number" name="weight" id="" class='weight-input'>
                        </li>
                        <li>
                            <label for="">Masukan Tinggi Badan(cm)</label>
                            <div class="btn-group">
                                <input type="number" name="height" id="" class='height-input'>
                                <input type="submit" value="Hitung" class='btn-submit'>
                            </div>
                        </li>
                    </ul>
                </form>
            </div>
        </div>
    </main>
</body>
</html>