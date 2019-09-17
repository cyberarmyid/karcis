<?php
include "header.php";
include "function/getMyTickets.php";
?>

<div class="container profile profile-view">
        <div class="row">
            <div class="col-md-12 alert-col relative">
            <?php
                if($_GET['status'] == 'success'){
            ?>
                <b style="display: block;position: relative;text-align:center; color: rgb(244,71,107)">Booked Success</b>
            <?php } ?>
            </div>
        </div>
       
        <div class="form-row">
                <div class="col-md-12">
                    <h1>My Tickets </h1>
                    <hr>
                    <?php
                        if ($result->num_rows > 0) {
                        // output data of each row
                            while($row = $result->fetch_assoc()) {
                    ?>
                    <div class="u_t">
                        <div class="form-group"><label>Destination</label>
                            <input class="form-control" type="text" value = "<?php echo $row['from']. " - " . $row['to'];?>" disabled>
                        </div>
                        <a href="<?php echo $host;?>myDetailTicket.php?IDBOOKING=<?php echo $row['id_booking'];?>&IDTICKET=<?php echo $row['id'];?>">
                            <button class="btn btn-primary form-btn btn-grey" type="submit">DETAIL</button>
                        </a>
                    </div>
                    <hr>
                    <?php } } ?>

                </div>
            </div>
        </div>
       
</div>

<?php
include "footer.php";
?>