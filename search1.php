<?php 
include("two.php");
if(isset($_POST['input'])){
    $input=$_POST['input'];
    $sql="SELECT * FROM prod where name like '{$input}%";
$res=mysqli_query($conn,$sql);
if(mysqli_num_rows($res)>0){
?>

<table class="table table-bordered table-stripped mt-2">
<thead><th>Id</th><th>Name</th></thead>
<tr>
    <?php
    while($row==mysqli_fetwch_assoc($res)){
    $id=$row["id"]
    $name=$row["title"]
    ?>

    </tr>
</table>
<?php
}
else{
    echo "no result found"
}
}
?>