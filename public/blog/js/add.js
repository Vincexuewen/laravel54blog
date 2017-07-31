/**
 * Created by xuewen.zeng on 2017/6/22.
 */
//删除datatables行操作
function del(obj,id,url) {
    swal({
            title: "您确定要删除这条信息吗?",
            text: "删除后将无法恢复，请谨慎操作！!",
            type: "warning",
            showCancelButton: true,
            confirmButtonColor: "#DD6B55",
            confirmButtonText: "是的，我要删除！",
            cancelButtonText: "让我再考虑一下...",
            closeOnConfirm: false,
            closeOnCancel: false
        },
        function(isConfirm) {
            if(isConfirm) {
                $.ajax({
                    type: 'post',
                    url: url,
                    data: {
                        id: id
                    },
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                    },
                    dataType: 'JSON',
                    success: function(res) {
                        if(res.code == 200) {
                            if(res.msg == 'success'){
                                $(obj).parents("tr").remove();
                                swal({
                                    title: '删除成功！',
                                    text: '您已经永久删除了这条信息。',
                                    type: 'success',
                                    timer: 2000,
                                    showConfirmButton: false
                                }, function() {
                                    window.location.reload();
                                })
                            }else{
                                swal("操作失败！", "请重新操作！", "error");
                            }
                        }else{
                            swal("页面错误！","error");
                        }
                    }
                })
            } else {
                swal("已取消", "您取消了删除操作", "error");
            }
        });
}