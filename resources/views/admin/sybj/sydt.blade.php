@extends('admin.main')

@section('position', '首页编辑 -> 首页协会动态')

@section('content')
    <div>
        <form action="">
            <table class="table">
                <thead>
                <tr>
                    <th>图片</th>
                    <th>标题</th>
                    <th>摘要</th>
                    <th>跳转链接</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <th>
                        <div>
                            <button type="button" class="btn btn-default" onclick="$(this).next().click();">上传图片</button>
                            <input type="file" accept="image/*" onchange="uploadfile(this)" style="display: none"/>
                            <input style="display: none" name="xxxUrl" value=""/>
                        </div>
                    </th>
                    <th><input type="text"/></th>
                    <th><input type="text"/></th>
                    <th><input type="text"/></th>
                </tr>
                <tr>
                    <th>
                        <div>
                            <button type="button" class="btn btn-default" onclick="$(this).next().click();">上传图片</button>
                            <input type="file" accept="image/*" onchange="uploadfile(this)" style="display: none"/>
                            <input style="display: none" name="xxxUrl" value=""/>
                        </div>
                    </th>
                    <th><input type="text"/></th>
                    <th><input type="text"/></th>
                    <th><input type="text"/></th>
                </tr>
                <tr>
                    <th>
                        <div>
                            <button type="button" class="btn btn-default" onclick="$(this).next().click();">上传图片</button>
                            <input type="file" accept="image/*" onchange="uploadfile(this)" style="display: none"/>
                            <input style="display: none" name="xxxUrl" value=""/>
                        </div>
                    </th>
                    <th><input type="text"/></th>
                    <th><input type="text"/></th>
                    <th><input type="text"/></th>
                </tr>
                </tbody>
            </table>
            <br/>
            <div>
                <button type="button" class="btn btn-primary btn-submit">提交</button>
                <button type="button" class="btn btn-primary btn-review">预览</button>
            </div>
        </form>
    </div>
@endsection