@extends('admin.main')

@section('position', '协会概况 -> 关于无协')

@section('content')
<div>
<form action="">
    <label>协会简介</label>
    <textarea name="xhjj" rows="10"></textarea>
    <label>上传协会简介图片</label>
    <div>
        <button type="button" class="btn btn-default" onclick="$(this).next().click();">上传图片</button>
        <input type="file" accept="image/*" onchange="uploadfile(this)" style="display: none"/>
        <input style="display: none" name="xxxUrl" value=""/>
    </div>
    <br/><br/>
    <label>品牌活动</label>
    <textarea name="pphd" rows="10"></textarea>
    <div>
        <div style="float: left">
            <label>上传品牌活动图片1&nbsp;&nbsp;</label>
            <div>
                <button type="button" class="btn btn-default" onclick="$(this).next().click();">上传图片</button>
                <input type="file" accept="image/*" onchange="uploadfile(this)" style="display: none"/>
                <input style="display: none" name="xxxUrl" value=""/>
            </div>
        </div>
        <div style="float: left">
            <label>&nbsp;&nbsp;&nbsp;上传品牌活动图片2</label>
            <div>
                <button type="button" class="btn btn-default" onclick="$(this).next().click();">上传图片</button>
                <input type="file" accept="image/*" onchange="uploadfile(this)" style="display: none"/>
                <input style="display: none" name="xxxUrl" value=""/>
            </div>
        </div>
    </div>
    <br/>
    <div>
        <button type="button" class="btn btn-primary btn-submit">提交</button>
        <button type="button" class="btn btn-primary btn-review">预览</button>
    </div>
</form>
</div>
@endsection