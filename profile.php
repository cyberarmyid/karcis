<?php
include "header.php";
include "function/getProfile.php";
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
       
            <div class="form-row">
                <div class="col-md-12">
                    <h1>Profile </h1>
                    <hr>
                    <div class="form-group">
                        <label>Nama Lengkap</label> : <?php echo $user_profile['fullname'];?>
                    </div>
                    
                    <div class="form-group">
                        <label>Email </label> : <?php echo $user_profile['email'];?>
                    </div>
                    
                    <div class="form-group">
                        <label>No Handphone</label> : <?php echo $user_profile['phone'];?>
                    </div>

                    <div class="form-group">
                        <label>Identitas (KTP/SIM/PASSPORT)</label>
                        <?php if($user_profile['identity_card']){
                            echo "<img src =".$host."identitas/".$user_profile['identity_card']." style=width:100%>";
                        } ?>
                    </div>
                </div>
            </div>
            
                <hr>
                <div class="form-row">
                    <div class="col-md-12 content-right">
                        <a href="<?php echo $host;?>editProfile.php">
                            <button class="btn btn-primary form-btn btn-grey" type="submit">EDIT</button>
                        </a>
                            
                    </div>
                </div>
       
       
</div>

<?php
include "footer.php";
?>