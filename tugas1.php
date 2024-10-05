<?php
    function calcAmount($jumlah, $member) {
        $d1 = 0.10; $d2 = 0.10; $d3 = 0.05;

        if ($member) {
            $jumlah *= (1 - $d1);
            if ($jumlah >= 500000) $jumlah *= (1 - $d2);
            elseif ($jumlah >= 300000) $jumlah *= (1 - $d3);
        } else {
            if ($jumlah >= 500000) $jumlah *= (1 - $d2);
        }

        return $jumlah;
    }
    echo "<h4 style='color: #333; font-weight: bold; '>Tugas Pertama - Ali Zainal Abidin - 23.240.0034</h2>";
    echo "<h2 style='color: #333; font-weight: bold;'>kalkulator harga belanjaan toko Ali</h2>";
    echo "<form action='' method='post'>";
    echo "<label for='jumlah' style='display: block; margin-bottom: 10px;'>jumlah uang:</label>";
    echo "<input type='number' name='jumlah' required style='width: 50%; padding: 10px; font-size: 18px;'>";
    echo "<br><br>";
    echo "<label for='member' style='display: block; margin-bottom: 10px;'>Member Toko Ali?</label>";
    echo "<input type='checkbox' name='member' style='width: 20px; height: 20px;'>";
    echo "<br><br>";
    echo "<input type='submit' value='kalkulasi harga' style='background-color: #4CAF50; color: #fff; padding: 10px 20px; border: none; border-radius: 5px; cursor: pointer;'>";
    echo "</form>";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $jumlah = $_POST["jumlah"];
        $member = $_POST["member"] == "on" ? true : false;

        $finalJumlah = calcAmount($jumlah, $member);

        echo "<h2 style='color: #333; font-weight: bold;'>Rincian toko Ali:</h2>";
        echo "<ul style='list-style: none; padding: 0; margin: 0;'>";
        echo "<li style='padding: 10px; border-bottom: 1px solid #ccc;'>Harga awal: <span style='font-weight: bold;'>Rp " . number_format($jumlah, 2, ',', '.') . "</span></li>";
        if ($member) {
            echo "<li style='padding: 10px; border-bottom: 1px solid #ccc;'>Member Diskon: <span style='font-weight: bold;'>10%</span></li>";
        }
        if ($jumlah >= 500000) {
            echo "<li style='padding: 10px; border-bottom: 1px solid #ccc;'>500,000 IDR Diskon: <span style='font-weight: bold;'>10%</span></li>";
        } elseif ($jumlah >= 300000) {
            echo "<li style='padding: 10px; border-bottom: 1px solid #ccc;'>300,000 IDR Diskon: <span style='font-weight: bold;'>5%</span></li>";
        }
        echo "<li style='padding: 10px; border-top: 1px solid #ccc;'>Jumlah yang perlu dibayar : <span style='font-weight: bold; font-size: 24px;'>Rp " . number_format($finalJumlah, 2, ',', '.') . "</span></li>";
        echo "</ul>";
        echo "<input type='button' value='Reset' onclick='window.location.href=\"\"' style='background-color: #e74c3c; color: #fff; padding: 10px 20px; border: none; border-radius: 5px; cursor: pointer;'>";
    }
?>