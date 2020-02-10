<?php
$json = file_get_contents("https://jsonexercise2-aguilar.herokuapp.com/json.php");

$data = json_decode($json,true);
$list = $data['shoes'];


?>

<table border="1px">
    <tr>
        <td>Shoe Name</td>
        <td>Shoe Brand</td>
        <td>Shoe Type</td>
        <td>Shoe Cost</td>
    </tr>
<?php
foreach($list as $value){
    ?>
    <tr>
        <td><?php echo $value['shoe_Name'];?></td>
        <td><?php echo $value['shoe_Brand'];?></td>
        <td><?php echo $value['shoe_Type'];?></td>
        <td><?php echo $value['shoe_Cost'];?></td>
    </tr>
<?php
}
?>
</table>
