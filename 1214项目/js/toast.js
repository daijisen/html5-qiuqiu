/**
 * Created by 代纪 on 2016/12/13.
 */
$(function() {
    $(document).on("pageInit", function() {
        $("#show-toast").click(function() {
            $.toast("操作成功");
        });
    });
    $.init();
});
