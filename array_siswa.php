<?php
// buatlah data nilai siswa dengan array assosiatif
$ns1 = ['id'=>1,'nim'=>'01101', 'uts'=>80, 'uas'=>84, 'tugas'=>78];
$ns2 = ['id'=>2,'nim'=>'01102', 'uts'=>85, 'uas'=>90, 'tugas'=>88];
$ns3 = ['id'=>3,'nim'=>'01103', 'uts'=>89, 'uas'=>95, 'tugas'=>98];
//simpan seluruh data variabel array assosiatif
// ke dalam array indexing
$ar_nilai = [$ns1,$ns2,$ns3];
?>
<!-- codingan html -->
<h3 style="text-align: center"> Daftar Nilai Siswa</h3>
<table border ="1" width="100%">
<thead>
    <tr>
        <th>No</th>
        <th>NIM</th>
        <th>UTS</th>
        <th>UAS</th>
        <th>Tugas</th>
        <th>Nilai Akhir</th>
</tr>
</thead>
<tbody>
<?php 

$nomor = 1;
foreach ($ar_nilai as $x){
    echo '<tr><td>' .$nomor. '</td>';
    echo '<td>' .$x['nim']. '</td>';
    echo '<td>' .$x['uts']. '</td>';
    echo '<td>' .$x['uas']. '</td>';
    echo '<td>' .$x['tugas']. '</td>';
    $nilai_akhir = ($x['uts'] + $x['uas']+$x['tugas'])/3;
    echo '<td>'.number_format($nilai_akhir,2,',','.').'</td>';
    
    echo '</tr>';
    $nomor++;
}

?>
</tbody>
</table>