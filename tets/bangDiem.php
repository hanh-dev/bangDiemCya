<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./bangDiem.css">
</head>
<body>
        <!-- Logic part -->
    <?php
        ini_set('display_errors', 'Off');
        // Summarise
        function Summarise($se1, $se2, $year) {
            $result = 0;
            if($year == 1){
                $result = ($se1+$se2)/2;
            }else{
                $result = ($se1+$se2*2)/3;
            }
            return $result;
        }
        $num1 = $_POST["se1"];
        $num2 = $_POST["se2"];
        $takeYear = $_POST["year"];
        $resultSummerise = Summarise($num1, $num2, $takeYear);
        // Performance
        $checkScore = $resultSummerise;
        function Perform($check){
            if(!$check){
                return '';
            }
            elseif($check>8){
                return 'Hoc sinh gioi';
            }else{
                return 'Hoc sinh yeu';
            }
        }
        $checkPerformance = Perform($checkScore);
    ?>
    <!-- Form part -->
    <form action="bangDiem.php" method="POST">
        <div class="wrapper-form">
            <div class="form-content">
                <h2>Bang Diem Cua Em</h2>
                <div class="input-box">
                    <label for="semester1">Semester1:</label>
                    <input type="Number" name="se1">
                </div>
                <div class="input-box">
                    <label for="semester2">Semester2:</label>
                    <input type="Number" name="se2">
                </div>
                <div class="input-box">
                    <label for="year">Year:</label>
                    <select name="year" id="year">
                        <option value="1">1</option>
                        <option value="2">2</option>
                    </select>
                </div>
                <div class="input-box">
                    <label for="summarise">Summarise:</label>
                    <input type="Number" readonly value="<?php echo $resultSummerise; ?>">
                </div>
                <div class="sort">
                    <label for="sort">Xep Loai: <?php echo $checkPerformance;?></label>
                </div>
                <div class="btn">
                    <button type="submit">OK</button>
                    <button >Cancel</button>
                </div>
            </div>
        </div>
    </form>
</body>
</html>