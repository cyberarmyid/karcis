<?php
include "header.php";

$id_booking = @$_GET['IDBOOKING'];
$id_ticket = @$_GET['IDTICKET'];

@session_start();
    
$id = @$_SESSION['id'];

if(!$id){
    header('location:'.$host.'signin.php');
}

// get data user
$user = "SELECT tickets.*, booking.id as id_booking FROM booking LEFT JOIN tickets ON tickets.id = booking.id_ticket WHERE booking.id = $id_booking AND tickets.id = $id_ticket";

$result = $conn->query($user);

var_dump($result->fetch_assoc());

?>

<div class="container profile profile-view">
        <div class="row">
            <div class="col-md-12 alert-col relative">
            <?php
                if(@$_GET['status'] == 'success'){
            ?>
                <b style="display: block;position: relative;text-align:center; color: rgb(244,71,107)">Profile Updated</b>
            <?php } ?>
            </div>
        </div>
        <div class="row space-rows">
            <?php
                $no = 1;
                if ($result->num_rows > 0) {
                // output data of each row
                    while($row = $result->fetch_assoc()) {
            ?>
            <div class="col-md-4">
                    <div class="card cards-shadown cards-hover">
                        <div class="card-header">
                            <div class="cardheader-text">
                                <h4 id="heading-card"><?php echo $row['from']." ".$row['to'];?></h4>
                                <p class="sub-text-color">Status: Belum Dibayar</p>
                            </div>
                        </div>
                        <div class="card-body">
                            <p class="card-text cardbody-sub-text">Rp<?php echo number_format($row['price'],2,',','.'); ?></p>
                        </div>

                    </div>
            </div>
            <?php $no++; }  } ?>
          
        </div>
       
</div>

<?php include "footer.php";?>