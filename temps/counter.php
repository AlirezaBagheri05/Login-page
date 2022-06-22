<div class="container">
    <div class="row center_1 padding_btm">
        <div class="four col-md-3">
                     <?PHP
                                $date_1 = get_dates('users');
                                $sum = null;
                                foreach ($date_1 as  $value) {
                                    $sum += 1;
                                }
                                $max = 10;
                       ?>
            <div class="cl_white counter-box colored"> <i class="fa fa-thumbs-o-up"></i> <span class="counter"><?PHP echo $sum; ?></span>
                <p> نفر ثبت شده</p>
            </div>
        </div>
        <div class="four col-md-3">
            <div class="counter-box"> <i class="fa fa-group"></i> <span class="counter"><?PHP echo $max; ?></span>
                <p>نفر ظرفیت</p>
            </div>
        </div>
    </div>
    <div class="progress counter_1">
        <?PHP 
        $dan = ($sum/$max)*100;
        $dan = round($dan);
        $dan .= '%';
        ?>
        
    <div class="progress-bar " role="progressbar" style="width:<?PHP echo $dan; ?>;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"><?PHP echo $dan; ?></div>
    </div>
</div>
