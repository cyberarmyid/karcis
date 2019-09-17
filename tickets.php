<?php
include "header.php";
include "function/getTickets.php";
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
            <div class="col">
                <form action="<?php echo $host;?>function/actBookingTicket.php" method="POST">
                    <div class="card cards-shadown cards-hover">
                        <div class="card-header">
                            <div class="cardheader-text">
                                <h4 id="heading-card"><?php echo $row['from']." ".$row['to'];?></h4>
                                <p class="sub-text-color">seats: <?php echo $row['seats'];?></p>
                            </div>
                        </div>
                        <div class="card-body">
                            <p class="card-text cardbody-sub-text">Rp<?php echo number_format($row['price'],2,',','.'); ?></p>
                        </div>
                        <input type="hidden" value="<?php echo $row['seats'];?>" name="seats[<?php echo $no;?>]">
                        <input type="hidden" value="<?php echo $row['id'];?>" name="id_ticket[<?php echo $no;?>]">
                        <button class="btn btn-primary btn-block" type="submit" name="submit" value="<?php echo $no;?>" style="margin: 0 auto;border: none;width: 50%;top: -20px;">Booking</button>
                    </div>
                </form>
            </div>
            <?php $no++; }  } ?>
          
        </div>
       
</div>

<?php include "footer.php";?>
