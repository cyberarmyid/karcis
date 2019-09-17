<?php
include "header.php";
include "function/getProfile.php";
?>

<div class="container profile profile-view">
        <div class="row">
            <div class="col-md-12 alert-col relative">
            <?php
                if($_GET['status'] == 'success'){
            ?>
                <b style="display: block;position: relative;text-align:center; color: rgb(244,71,107)">Profile Updated</b>
            <?php } ?>
            </div>
        </div>
       
        <form action="<?php echo $host;?>function/actUpdateProfile.php" method="post" enctype="multipart/form-data">
            <div class="form-row">
                <div class="col-md-12">
                    <h1>Profile </h1>
                    <hr>
                    <div class="form-group"><label>Nama Lengkap</label><input class="form-control" type="text" autocomplete="off" name="fullname" value="<?php echo $user_profile['fullname'];?>"></div>
                    <div class="form-group"><label>Email </label><input class="form-control" type="email" autocomplete="off" value="<?php echo $user_profile['email'];?>" disabled></div>
                    <div class="form-group"><label>No Handphone</label><input class="form-control" type="text" autocomplete="off" name="phone" value="<?php echo $user_profile['phone'];?>"></div>
                    <div class="form-group">
                        <label>Identitas (KTP/SIM/PASSPORT)</label>
                        <?php if($user_profile['identity_card']){
                            echo "<img src =".$host."identitas/".$user_profile['identity_card']." style=width:100%>";
                        } ?>
                        <input type="file" class="form-control" name="userfile" style="padding: 3px;">
                    </div>
                </div>
            </div>
            
                <hr>
                <div class="form-row">
                    <div class="col-md-12 content-right">
                        <button class="btn btn-primary form-btn btn-grey" type="submit">SAVE</button>
                    </div>
                </div>
        </form>
       
</div>

<?php
include "footer.php";
?>