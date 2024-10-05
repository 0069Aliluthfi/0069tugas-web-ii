<?php
function hitung_total_belanja($total_belanja, $is_member) {
    $diskon = 0;

    if ($is_member) {
        if ($total_belanja > 1000000) {
            $diskon = 0.25;
        } elseif ($total_belanja >= 500000) {
            $diskon = 0.20;
        } else {
            $diskon = 0.10;}
    } else {
        if ($total_belanja > 1000000) {
            $diskon = 0.10;
        } elseif ($total_belanja >= 500000) {
            $diskon = 0.05;}
    }

    $total_setelah_diskon = $total_belanja * (1 - $diskon);

    return $total_setelah_diskon;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $total_belanja = (float)$_POST["total_belanja"];
    $is_member = isset($_POST["is_member"]);

    $total_yang_dibayar = hitung_total_belanja($total_belanja, $is_member);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hitung Total Belanja</title>
</head>
<body>
    <h2>Form Hitung Total Belanja</h2>
    <form method="post" action="">
        <label for="total_belanja">Total Belanja (Rp):</label>
        <input type="number" name="total_belanja" id="total_belanja" required><br><br>

        <label for="is_member">
            <input type="checkbox" name="is_member" id="is_member">
            Member
        </label><br><br>

        <input type="submit" value="Hitung">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        echo "<h3>Total yang harus dibayar: Rp " . number_format($total_yang_dibayar, 2, ',', '.') . "</h3>";
    }
    ?>
</body>
</html>
