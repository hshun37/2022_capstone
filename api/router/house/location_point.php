<?php
session_start();
include("../../db.php");
	$id = $_SESSION["id"];
    $concat="SELECT CONCAT (`COL 12`,`COL 13`) 'names' FROM house";
    $c_order= mysqli_query($db,$concat);
	$sql = "SELECT * FROM location";
	$order = mysqli_query($db, $sql);

    $locate= array();


    while($row= mysqli_fetch_array($order)) {
        $c_order=mysqli_query($db,$concat);
        while($c_row= mysqli_fetch_array($c_order)){
             if($c_row['names']==$row['name']){
                 array_push($locate,[
                     
                    'x' => $row['location_x'], 
                    'y' => $row['location_y']
                    
                 ]
             );
             
             }
         }


    }

	// for(;$row = mysqli_fetch_array($order, MYSQLI_ASSOC);) {
    //     while($c_row= mysqli_fetch_array($c_order)){
    //          if($c_row['names']==$row['name']){
    //              array_push($locate,[
    //                 'x' => $row['location_x'], 
    //                 'y' => $row['location_y']
                    
    //              ]
    //          );
             
    //          }
    //      }

    // }
  print_r($locate[0]);

?>

<script language="javascript">

    function set_array(){
        var location='<?php echo json_encode($locate);?>'
    }

</script>   
