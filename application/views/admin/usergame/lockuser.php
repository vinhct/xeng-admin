<div class="content-wrapper">



    <?php if ($admin_info->Status == "A" || $admin_info->Status == "W" || $admin_info->Status == "S" || $admin_info->Status == "D")  : ?>
    <section class="content-header">
        <h1>
            Khóa tài khoản <span style="color: #0000FF"><?php echo $nickname ?></span>
        </h1>
        <input type="hidden" id="nickname" value="<?php echo $nickname ?>">
        <input type="hidden" id="status" value="<?php echo $status ?>">
        <input type="hidden" id="daochuoi" value="<?php echo $daochuoi ?>">
        <input type="hidden" id="txtaction" value="">
    </section>
    <section class="content">
    <div class="row">
    <div class="col-xs-12">
    <div class="box box-body">

    <label id="resultsearch" style="color: red;"></label>
    <div class="box-body">
        <div class="form-group">
            <div class="row">
                <div class="col-md-1 col-sm-1 col-xs-12">
                    <label for="exampleInputEmail1">Cấm login:</label>
                </div>
                <div class="col-md-2 col-sm-2 col-xs-12">
                    <input type="checkbox" name="role" value="0" class="minimal">
                </div>
                <div class="col-md-1 col-sm-1 col-xs-12">
                    <label for="exampleInputEmail1">Cấm đổi thưởng</label>
                </div>
                <div class="col-md-2 col-sm-2 col-xs-12">
                    <input type="checkbox" name="role" value="1" class="minimal">
                </div>
                <div class="col-md-1 col-sm-1 col-xs-12">
                    <label for="exampleInputEmail1">Login sandbox</label>
                </div>
                <div class="col-md-2 col-sm-2 col-xs-12">
                    <input type="checkbox" name="role" value="2" class="minimal">
                </div>
                <div class="col-md-1 col-sm-1 col-xs-12">
                    <label for="exampleInputEmail1">Cấm chuyển tiền</label>
                </div>
                <div class="col-md-2 col-sm-2 col-xs-12">
                    <input type="checkbox" name="role" value="3" class="minimal">
                </div>
            </div>

        </div>


        <div class="form-group">
            <div class="row">
                <div class="col-md-1 col-sm-1 col-xs-12">
                    <label for="exampleInputEmail1">Cấm chơi sâm:</label>
                </div>
                <div class="col-md-2 col-sm-2 col-xs-12">
                    <input type="checkbox" name="role" value="8" class="minimal">
                </div>
                <div class="col-md-1 col-sm-1 col-xs-12">
                    <label for="exampleInputEmail1">Cấm chơi ba cây</label>
                </div>
                <div class="col-md-2 col-sm-2 col-xs-12">
                    <input type="checkbox" name="role" value="9" class="minimal">
                </div>
                <div class="col-md-1 col-sm-1 col-xs-12">
                    <label for="exampleInputEmail1">Cấm Binh</label>
                </div>
                <div class="col-md-2 col-sm-2 col-xs-12">
                    <input type="checkbox" name="role" value="10" class="minimal">
                </div>
                <div class="col-md-1 col-sm-1 col-xs-12">
                    <label for="exampleInputEmail1">Cấm chơi tlmn</label>
                </div>
                <div class="col-md-2 col-sm-2 col-xs-12">
                    <input type="checkbox" name="role" value="11" class="minimal">
                </div>
            </div>
        </div>
        <div class="form-group">
            <div class="row">
                <div class="col-md-1 col-sm-1 col-xs-12">
                    <label for="exampleInputEmail1">Cấm chơi tá lả</label>
                </div>
                <div class="col-md-2 col-sm-2 col-xs-12">
                    <input type="checkbox" name="role" value="12" class="minimal">
                </div>
                <div class="col-md-1 col-sm-1 col-xs-12">
                    <label for="exampleInputEmail1">Cấm chơi liêng</label>
                </div>
                <div class="col-md-2 col-sm-2 col-xs-12">
                    <input type="checkbox" name="role" value="13" class="minimal">
                </div>
                <div class="col-md-1 col-sm-1 col-xs-12">
                    <label for="exampleInputEmail1">Cấm chơi xì tố</label>
                </div>
                <div class="col-md-2 col-sm-2 col-xs-12">
                    <input type="checkbox" name="role" value="14" class="minimal">
                </div>
                <div class="col-md-1 col-sm-1 col-xs-12">
                    <label for="exampleInputEmail1">Cấm chơi xóc xóc</label>
                </div>
                <div class="col-md-2 col-sm-2 col-xs-12">
                    <input type="checkbox" name="role" value="15" class="minimal">
                </div>
            </div>
        </div>
        <div class="form-group">
            <div class="row">
                <div class="col-md-1 col-sm-1 col-xs-12">
                    <label for="exampleInputEmail1">Cấm chơi bài cào</label>
                </div>
                <div class="col-md-2 col-sm-2 col-xs-12">
                    <input type="checkbox" name="role" value="16" class="minimal">
                </div>
                <div class="col-md-1 col-sm-1 col-xs-12">
                    <label for="exampleInputEmail1">Cấm chơi Poker</label>
                </div>
                <div class="col-md-2 col-sm-2 col-xs-12">
                    <input type="checkbox" name="role" value="17" class="minimal">
                </div>
                <div class="col-md-1 col-sm-1 col-xs-12">
                    <label for="exampleInputEmail1">Cấm chơi xizack</label>
                </div>
                <div class="col-md-2 col-sm-2 col-xs-12">
                    <input type="checkbox" name="role" value="23" class="minimal">
                </div>
                <div class="col-md-1 col-sm-1 col-xs-12">
                    <label for="exampleInputEmail1">Cấm chơi xóc đĩa</label>
                </div>
                <div class="col-md-2 col-sm-2 col-xs-12">
                    <input type="checkbox" name="role" value="24" class="minimal">
                </div>
            </div>
        </div>
        <div class="form-group">
            <div class="row">
                <div class="col-md-1 col-sm-1 col-xs-12">
                    <label for="exampleInputEmail1">Cấm chơi caro</label>
                </div>
                <div class="col-md-2 col-sm-2 col-xs-12">
                    <input type="checkbox" name="role" value="25" class="minimal">
                </div>
                <div class="col-md-1 col-sm-1 col-xs-12">
                    <label for="exampleInputEmail1">Cấm chơi cờ tướng</label>
                </div>
                <div class="col-md-2 col-sm-2 col-xs-12">
                    <input type="checkbox" name="role" value="26" class="minimal">
                </div>
                <div class="col-md-1 col-sm-1 col-xs-12">
                    <label for="exampleInputEmail1">Cấm cờ vua</label>
                </div>
                <div class="col-md-2 col-sm-2 col-xs-12">
                    <input type="checkbox" name="role" value="27" class="minimal">
                </div>
                <div class="col-md-1 col-sm-1 col-xs-12">
                    <label for="exampleInputEmail1">Cấm chơi pokertour</label>
                </div>
                <div class="col-md-2 col-sm-2 col-xs-12">
                    <input type="checkbox" name="role" value="28" class="minimal">
                </div>

            </div>
        </div>
        <div class="form-group">
            <div class="row">
                <div class="col-md-1 col-sm-1 col-xs-12">
                    <label for="exampleInputEmail1">Cấm chơi cờ úp</label>
                </div>
                <div class="col-md-2 col-sm-2 col-xs-12">
                    <input type="checkbox" name="role" value="29" class="minimal">
                </div>
                <div class="col-md-1 col-sm-1 col-xs-12">
                    <label for="exampleInputEmail1">Cấm chơi hàm cá mập</label>
                </div>
                <div class="col-md-2 col-sm-2 col-xs-12">
                    <input type="checkbox" name="role" value="30" class="minimal">
                </div>
            </div>
        </div>
        <div class="form-group">
            <div class="row">
                <div class="col-md-1 col-sm-1 col-xs-12">
                    <label for="exampleInputEmail1">Lý do</label>
                </div>
                <div class="col-md-2 col-sm-2 col-xs-12">
                    <input type="text"  id="txtlydo" class="form-control" placeholder="Nhập lý do khóa">
                </div>
                <div class="col-md-1 col-sm-2 col-xs-12">
                </div>
                <div class="col-md-1 col-sm-2 col-xs-12">
                    <input type="button" id="openuser" value="Cập nhật" class="btn btn-success">
                </div>
            </div>
        </div>
    </div>

    </div>
    </div>
    </div>
    </section>
        <?php else: ?>
        <section class="content-header">
            <h1>
                Bạn không được phân quyền
            </h1>
        </section>
<?php endif; ?>
</div>
<script type="text/javascript">
    $(document).ready(function () {
        var position = getpositiontostring('1', $("#daochuoi").val()).join(',');
        var res = position.split(",");
        $.each($("input[name='role']"), function () {
            for (var i = 0; i < res.length; i++) {
                if ($(this).val() == res[i]) {
                    $(this).attr('checked', 'checked');
                }
            }
        });
    });
    $("#openuser").click(function () {
        var lst_role = [];
        var lst_role_txt = [];
        var lst_role1 = [];


        $.each($("input[name='role']:checked"), function () {
            lst_role.push($(this).val());
            lst_role_txt.push(getlockuser($(this).val()));
        });

        $.each($("input:checkbox:not(:checked)"), function () {
            lst_role1.push($(this).val());
        });
        if($("#txtlydo").val() == ""){
            alert("Bạn chưa nhập lý do khóa");
            return false;
        }
        if (lst_role.length > 0) {
            $("#txtaction").val(lst_role_txt.join(','));
            updateStatusUser(lst_role.join(','), 1)
            var statuslock = 1;
        }else{
            var statuslock = 0;
        }

        if (lst_role1.length > 0) {
            updateStatusUser(lst_role1.join(','), 0)
        }

        $.ajax({
            url: "<?php echo admin_url('usergame/loglockuser') ?>",
            type: "POST",
            data: {
                txtlydo : $("#txtlydo").val(),
                nickname : $("#nickname").val(),
                txtaction : $("#txtaction").val(),
                statuslock : statuslock
            },
            dataType: "json"

        });


    });
    function updateStatusUser(action, type) {
        var request = $.ajax({
            url: "<?php echo admin_url('usergame/lockuserajax') ?>",
            type: "POST",
            data: {
                nickname : $("#nickname").val(),
                action: action,
                type: type
            },
            dataType: "json",
            success: function (result) {
                $.ajax({
                    url: "<?php echo admin_url('usergame/messlockuser') ?>",
                    type: "POST",
                    data: {
                    },
                    dataType: "json"

                });
            }

        });

        request.done(function (msg) {
            location.href = "<?php echo admin_url("usergame")  ?>";
        });


    }
    function getpositiontostring(substring, string) {
        var a = [], i = -1;
        while ((i = string.indexOf(substring, i + 1)) >= 0) a.push(i);
        return a;
    }
    function getlockuser(count) {
        var strresult="";
        switch (count) {
            case "0":
                strresult = " Cấm Login";
                break;
            case "1":
                strresult = "Cấm Đổi thưởng";
                break;
            case "2":
                strresult = "Login sandbox";
                break;
            case "3":
                strresult = "Cấm Chuyển tiền";
                break;
            case "8":
                strresult = "Cấm Chơi sâm";
                break;
            case "9":
                strresult = "Cấm Chơi ba cây";
                break;
            case "10":
                strresult = "Cấm Chơi binh";
                break;
            case "11":
                strresult = "Cấm Chơi tlmn";
                break;
            case "12":
                strresult = "Cấm Chơi tá lả";
                break;
            case "13":
                strresult = "Cấm Chơi liêng";
                break;
            case "14":
                strresult = "Cấm Chơi xì tố";
                break;
            case "15":
                strresult = "Cấm Chơi xóc xóc";
                break;
            case "16":
                strresult = "Cấm Chơi bài cào";
                break;
            case "17":
                strresult = "Cấm Chơi poker";
                break;
            case "23":
                strresult = "Cấm Chơi xì dzach";
                break;
            case "24":
                strresult = "Cấm Chơi xóc đĩa";
                break;
            case "25":
                strresult = "Cấm Chơi caro";
                break;
            case "26":
                strresult = "Cấm Chơi cờ tướng";
                break;
            case "27":
                strresult = "Cấm Chơi cờ vua";
                break;
				  case "28":
                strresult = "Cấm Chơi PokerTour";
                break;
            case "29":
                strresult = "Cấm Chơi Cờ úp";
                break;
            case "30":
                strresult = "Cấm Chơi Hàm Cá Mập";
                break;
        }
        return strresult;
    }

</script>
