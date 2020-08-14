<?php 
$dokter = [
    [
        "baju" => "bikini",
        "masker" => "jaitan topo",
        "sarung_tangan" => "bahan kulit onta",
        "sepatu" => "karet"
    ]
];

?>

<table>
    <tr>
        <th>baju</th>
        <th>masker</th>
        <th>sarung tangan</th>
        <th>sepatu</th>
    </tr>
    <?php foreach($dokter as $data): ?>
    <tr>
        <td><?php echo $data['baju'] ?></td>
        <td><?php echo $data['masker'] ?></td>
        <td><?php echo $data['sarung_tangan'] ?></td>
        <td><?php echo $data['sepatu'] ?></td>
    </tr>
    <?php endforeach; ?>
    </table>