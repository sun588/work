function addCart(id,oid) {
    var url = 'http://' + location.host + '/index.php/Home/Common/addCart';
    $.post(url,{id:id,oid:oid},function (rs) {
        if(rs){
            rs = JSON.parse(rs);
            if(rs['errno'] == 1){
                alert('添加到购物车成功');
            }else {
                alert(rs['msg']);
            }
        }else {
            alert('添加购物车失败');
        }
    })
}

function addWishlist(id) {
    var url = 'http://' +  location.host + '/index.php/Home/Common/addWishlist';
    $.post(url,{id:id},function (rs) {
        if(rs){
            rs = JSON.parse(rs);
            if(rs['errno'] == 1){
                alert('添加到收藏夹成功');
            }else {
                alert(rs['msg']);
            }
        }else {
            alert('添加到收藏夹失败');
        }
    })
}

function fileAjaxUP(obj,url,callback){
    var upfile = $(obj)[0].files[0];
    formData = new FormData();
    formData.append('file',upfile);
    $.ajax({
        url: url,
        type: 'POST',
        cache: false,
        data: formData,
        processData: false,
        contentType: false,
        success:function (rs) {
            callback(rs);
        }
    })
}

function httpPost(URL, PARAMS) {
    var temp = document.createElement("form");
    temp.action = URL; temp.method = "post";
    temp.style.display = "none";
    for (var x in PARAMS) {
        var opt = document.createElement("textarea");
        opt.name = x; opt.value = JSON.stringify(PARAMS[x]);
        temp.appendChild(opt);
    }
    document.body.appendChild(temp);
    temp.submit(); return temp;
}
