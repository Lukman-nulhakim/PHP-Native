<?php 
$pasien = [
    [
        "baju koran",
        "masker bahan topo"
    ]
];
?>

<table>
    <tr>
        <th>Baju</th>
        <th>Masker</th>
        
    </tr>
    <?php foreach($pasien as $data): ?>
    <tr>
        <td><?php echo $data[0] ?></td>
        <td><?php echo $data[1] ?></td>
    </tr>
    <?php endforeach; ?>
</table>