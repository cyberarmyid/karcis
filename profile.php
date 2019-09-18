<?php
include "header.php";
include "function/getProfile.php";
?>

<div style="background: rgb(175, 61, 86); height: auto; padding-top: 3rem; padding-bottom: 3rem">

    <?php
        if(@$_GET['status'] == 'success'){
    ?>
        <div style="
            width: 80%;
            background-color: #ffffff;
            padding: 1rem 2rem;
            border-radius: 4px;
            color: #505e6c;
            margin: 0 auto 1rem;
            box-shadow: 1px 1px 5px rgba(0,0,0,0.1);"
        >
            <b style="color: rgb(244,71,107)">Profile Updated</b>
        </div>
    <?php } ?>


    <div style="
        width: 80%;
        height: auto;
        background-color: #ffffff;
        padding: 2rem;
        border-radius: 4px;
        color: #505e6c;
        margin: 0 auto;
        box-shadow: 1px 1px 5px rgba(0,0,0,0.1);"
    >
        <h4>Profile</h4>
        <hr style="border-top: 1px solid rgba(175, 61, 86, 0.4);"/>

        <div class="row mx-auto pb-4">
            <div class="col-md-6">
                <div class="row pb-2 pt-3">
                    <span style="color: #858585; font-size: 0.9rem">Nama Lengkap</span>
                </div>
                <div class="row pb-2">
                    <span style="color: #505e6c; font-size: 1.25rem"><?php echo $user_profile['fullname'];?></span>
                </div>
                <div class="row pb-2 pt-3">
                    <span style="color: #858585; font-size: 0.9rem">Email</span>
                </div>
                <div class="row pb-2">
                    <span style="color: #505e6c; font-size: 1.25rem"><?php echo $user_profile['email'];?></span>
                </div>
                <div class="row pb-2 pt-3">
                    <span style="color: #858585; font-size: 0.9rem">Nomor Handphone</span>
                </div>
                <div class="row pb-2">
                    <span style="color: #505e6c; font-size: 1.25rem"><?php echo $user_profile['phone'];?></span>
                </div>
            </div>
            <div class="col-md-6">
                <div class="row pb-2 pt-3">
                    <span style="color: #858585; font-size: 0.9rem">Identitas (KTP/SIM/PASSPORT)</span>
                </div>
                <div class="center pb-4 pt-4">
                    <?php if($user_profile['identity_card']){
                        echo "<img src =".$host."identitas/".$user_profile['identity_card']." style='width: 180px'>";
                    } ?>
                </div>
            </div>
        </div>

        <hr style="border-top: 1px solid rgba(175, 61, 86, 0.4);"/>

        <div class="row mt-4">
            <div class="col-md-12 content-right">
                <a href="<?php echo $host;?>editProfile.php">
                    <button class="btn btn-secondary p-0 m-0" style="width: 180px; height: 50px; border-radius: 4px;" type="submit">EDIT</button>
                </a>
            </div>
        </div>
    </div>
</div>

<?php
include "footer.php";
?>