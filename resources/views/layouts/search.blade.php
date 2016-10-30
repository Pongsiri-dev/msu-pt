<?php
$conn = mysqli_connect("localhost", "root", "", "msu_pt");
mysqli_set_charset($conn, "utf8");
?>
<style>
    @media only screen and (max-device-width: 480px) {
        /* styles for mobile browsers smaller than 480px; (iPhone) */
        .col-xs-12 h2 {
            background-color: #00bcd4;
        }

        .col-xs-3, .col-xs-3 h2 {
            background-color: #00bcd4;
        }

        input {
            border: 1px solid black;
        }

    }
</style>
<div class="container">
    <div class="row">
        <div class="col-md-12" id="src">
            <div class="row">
                <div class="col-xs-12"><h1 style="font-family: 'ThaiNeue'; font-size: 48px;">ค้นหางาน</h1></div>
            </div>
            <form action="{{url('search')}}" method="post" enctype="multipart/form-data">
                <input type="hidden" name="_token" value="<?php echo csrf_token();?>">
                <div class="row">
                    <div class=" col-xs-2"></div>
                    <div class=" col-xs-3">
                        <label for="ex2"><h2 style="font-family: 'ThaiNeue';">ประเภทงาน</h2></label>
                        <?php
                        $cate = "SELECT * FROM category";
                        $cate_query = mysqli_query($conn, $cate);
                        ?>
                        <select class="form-control txtSize" name="cate" style="border: 1px solid #000000;;font-family: 'ThaiNeue';font-size:14pt;">
                            <option value="0">-- เลือกประเภทงาบ --</option>
                            <?php
                            while ($values = mysqli_fetch_array($cate_query)){
                            ?>
                            <option value="<?php echo $values['c_id'] ?>" class="opt"><?php echo $values['c_name'] ?></option>
                            <?php }?>
                        </select>

                    </div>
                    <div class="col-xs-2">
                        <label for="ex2"><h2 style="font-family: 'ThaiNeue';">ราคา</h2></label>
                        <input class="form-control" id="ex2" type="number" style="border:1px solid #000000;" name="price_st" required placeholder="฿ บาท">
                    </div>
                    <div class="col-xs-2">
                        <label for="ex2"><h2 style="font-family: 'ThaiNeue';">ถึง</h2></label>
                        <input class="form-control" id="ex2" type="number" style="border:1px solid #000000;" name="price_fn" required placeholder="฿ บาท">
                    </div>

                    <div class="col-xs-2">
                        <button type="submit" class="w3-btn w3-white w3-border"
                                style="margin-top: 35%;position: absolute;font-family: 'ThaiNeue';font-size: large">
                            <i class="fa fa-search"></i>&nbsp;ค้นหา
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <hr style="border: 1px solid #8c8c8c">
</div>
