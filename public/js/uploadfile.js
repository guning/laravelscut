/**
 * Created by 罟宁 on 2017/5/2.
 */
//depend on jquery

function uploadfile(thisfile){
    //this.id = thisfile.id;
    this.file = $(thisfile)[0].files[0];
    this.re = /^image\/.*$/;
    this.formdata = new FormData();

    var deal = function(){
        if (this.re.test(this.file.type)){
            this.formdata.append('file', this.file);
            //this.formdata.append('page', this.id);
        }else{
            alert("文件类型不符合");
        }
    };

    var upload = function(){
        $.ajax({
            url : '/uploadfile',
            type : 'POST',
            data : this.formdata,
            cache : false,
            processData: false,
            contentType: false,
            success : function(data){
                console.log(data);//mes必须包含文件上传后的路径
                $(thisfile).next().val(data);
                console.log($(thisfile).next().val());
            },
            error : function(xhr){
                console.log(xhr);
            }
        });
    };
    deal();
    upload();
}