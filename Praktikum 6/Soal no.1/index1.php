<?php 
    require_once 'No.1.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>


    <title>Praktikum 6</title>
</head>
<body>
    <div class="container">
        <h2 class="text-center">Praktikum 6</h2>
        <div class="row">
            <div class="col-5 mx-auto border p-3 mt-2">
                <h4 class="text-center">Soal NO. 1</h4>
                <?= $truck->getMaxLoad(); ?> <br>
                <?= $truck->addBox(4000); ?> <br>
                <?= $truck->addBox(11000); ?> <br>
                <?= $truck->addBox(2000); ?> <br>
                <?= $truck->addBox(7000); ?> <br>
                <?php 
                echo "Butuh Bahan Bakar " . $truck->calcFuelNeeds() . ' Liter'. '<br>';
                ?>
                <br>
                <?= $riverBarge->addBox(4000); ?> <br>
                <?= $riverBarge->addBox(11000); ?> <br>
                <?= $riverBarge->addBox(2000); ?> <br>
                <?= $riverBarge->addBox(7000); ?> <br>
                <?= $riverBarge->addBox(10000); ?> <br>
                <?php 
                echo 'Maksimal muatan Perahu ' . $riverBarge->getMaxLoad() . '<br>';
                echo "Butuh Bahan Bakar " . $riverBarge->calcFuelNeeds() . ' Liter';
                ?>
            </div>
        </div>
    </div>
</body>

</html>