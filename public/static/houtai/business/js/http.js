/** post jQuery ajax */
function http_post(url, data) {
    return new Promise((reslove, reject) => {
        $.ajax({
            url: url,
            type:'post',
            data: data,
            dataType:'json',
            success:function (res) {
                if (res.code == 1)  reslove(res);
                layer.msg('出错了，状态 code:' + res.code);
            },
            error: function (err) {
                console.log(err)
                layer.msg('出错了，状态 status:' + err.status);
            }
        });
    })
}