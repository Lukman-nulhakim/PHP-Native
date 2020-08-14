<?php 
$perawat = [
    [
        "baju" => "tengtop",
        "masker" => "bahan",
        "sarung_tangan" => "bahan karung",
        "sepatu" => "vans"
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
    <?php foreach($perawat as $data): ?>
    <tr>
        <td><?php echo $data['baju'] ?></td>
        <td><?php echo $data['masker'] ?></td>
        <td><?php echo $data['sarung_tangan'] ?></td>
        <td><?php echo $data['sepatu'] ?></td>
    </tr>
    <?php endforeach; ?>
    </table>