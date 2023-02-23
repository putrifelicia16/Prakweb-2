<?php
//cara penulisan array
$ar_buah = array('pisang', 'mangga', 'jeruk');

// array indexed
$buah = ['alpukat', 'jeruk','mangga','pisang'];
// cara manggil array indexed
echo $buah[1];

// cetak jumlah buah 
echo '<br/>Jumlah buah' .count($buah);

// cetak seluruh buah
echo "<ol>";
foreach($buah as $fruit){
    echo "<li>$fruit</li>";
}
echo "</ol>";

//================
// tambahkan buah baru ke dalam array
$buah[] = "Durian";

// cetak seluruh buah
echo "<ol>";
foreach($buah as buas){
    echo "<li>$buas</li>";
}
echo "</ol>";
?>