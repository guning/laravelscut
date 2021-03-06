<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>无协官网后台管理系统</title>
    <link href="https://cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="{{asset('css/mystyle.css')}}">

</head>
<body>
<div class="container">
    <nav class="navbar navbar-default" role="navigation">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand" href="#">无协官网后台</a>
            </div>
            <div>
                <ul class="nav navbar-nav navbar-left">
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown">
                            协会概况设置
                            <b class="caret"></b>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a href="/xhgk/gywx">关于无协</a></li>
                            <li class="divider"></li>
                            <li><a href="/xhgk/xrls">现任理事</a></li>
                            <li class="divider"></li>
                            <li><a href="/xhgk/bmjs">部门介绍</a></li>
                            <li class="divider"></li>
                            <li><a href="/xhgk/jsxz">技术小组</a></li>
                        </ul>
                    </li>
                </ul>
                <ul class="nav navbar-nav">
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown">
                            协会动态设置
                            <b class="caret"></b>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a href="/xhdt/jqhd">近期活动</a></li>
                            <li class="divider"></li>
                            <li><a href="/xhdt/hdbd">活动报道</a></li>
                            <li class="divider"></li>
                            <li><a href="/xhdt/zpjj">作品集锦</a></li>
                        </ul>
                    </li>
                </ul>
                <ul class="nav navbar-nav">
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown">
                            首页编辑
                            <b class="caret"></b>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a href="/sybj/lbt">轮播图</a></li>
                            <li class="divider"></li>
                            <li><a href="/sybj/sydt">首页协会动态</a></li>
                        </ul>
                    </li>
                </ul>
                <ul class="nav navbar-nav">
                    <li><a href="/yjfk/yjfk">意见反馈</a></li>
                </ul>
                <p class="navbar-text navbar-right">你好，管理员 text</p>
            </div>
        </div>
    </nav>
    <p class="text-muted">当前位置：@yield('position','text')</p >
</div>
<div class="container">
    @yield('content')
</div>
</body>
<script src="https://cdn.bootcss.com/jquery/3.2.1/jquery.min.js"></script>
<script src="{{asset('js/uploadfile.js')}}"></script>
<script type="text/javascript">
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
</script>
</html>