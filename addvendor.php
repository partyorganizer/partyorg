<?php
$db = mysqli_connect('localhost','root','','partyorg');

if(isset($_POST['add'])){
    
    $vname=$_POST['vname'];
    $email=$_POST['email'];
    $type=$_POST['type'];
    $desc=mysqli_real_escape_string($db,$_POST['desc']);
    $location=$_POST['location'];
    $price=$_POST['price'];
    $insta=$_POST['instagram'];
    $twitter=$_POST['twitter'];
    $phone=$_POST['tel'];
    $map=$_POST['map'];

    //$category=$_POST['category'];
    
    $sql="INSERT INTO vendor(v_name,description,location_id,start_price,phone,email,instgram,twitter,google_maps,type_id) VALUES('".$vname."','".$desc."','".$location."','".$price."',
    '".$phone."','".$email."','".$insta."','".$twitter."','".$map."','".$type."')";
    
    $query = mysqli_query($db,$sql);
    
    if($query===TRUE){
      ?>
        <html>
            <body>
            <script> alert('The New Vendor '+'<?php echo $vname; ?>'+' has been added sucessfully!'); 
            window.location = "vendor.php";
            </script>
            </body>
        </html>
        <?php  
    } else {
        ?>
        <html>
        <body>
            <script> alert('There was a proplem adding the new vendor.!'); 
            window.location = "vendor.php";
            </script>
        </body>
        </html>
        <?php 
    }
}
?>