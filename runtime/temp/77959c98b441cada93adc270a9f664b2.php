<?php /*a:5:{s:76:"/Applications/MxSrvs/www/quanzhong/application/admin/view/product/index.html";i:1611499476;s:78:"/Applications/MxSrvs/www/quanzhong/application/admin/view/public/template.html";i:1611498471;s:76:"/Applications/MxSrvs/www/quanzhong/application/admin/view/public/header.html";i:1611377457;s:74:"/Applications/MxSrvs/www/quanzhong/application/admin/view/public/menu.html";i:1611409369;s:76:"/Applications/MxSrvs/www/quanzhong/application/admin/view/public/footer.html";i:1611375670;}*/ ?>
<!DOCTYPE html>
<html lang="zh-Hans-CN">

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <title>管理后台 | 网站内容管理平台</title>

    <!-- General CSS Files -->
    <link rel="stylesheet" href="/static/admin/css/bootstrap.min.css">
    <link rel="stylesheet" href="/static/admin/css/fontawesome.all.css">

    <!-- CSS Libraries -->
    <link rel="stylesheet" href="/static/vendor/chocolat/css/chocolat.css">
    <link rel="stylesheet" href="/static/vendor/daterangepicker/css/daterangepicker.css">
    <link rel="stylesheet" href="/static/vendor/summernote/summernote-bs4.css">

    <!-- Template CSS -->
    <link rel="stylesheet" href="/static/admin/css/style.css">
    <link rel="stylesheet" href="/static/admin/css/components.css">
</head>

<body>


<div id="app">
    <div class="main-wrapper">
        <div class="navbar-bg"></div>
        <nav class="navbar navbar-expand-lg main-navbar">
            <form class="form-inline mr-auto">
                <ul class="navbar-nav mr-3">
                    <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg"><i class="fas fa-bars"></i></a></li>
                    <li><a href="#" data-toggle="search" class="nav-link nav-link-lg d-sm-none"><i class="fas fa-search"></i></a></li>
                </ul>
            </form>
            <ul class="navbar-nav navbar-right">
                <li class="dropdown"><a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg nav-link-user">
                        <img alt="image" src="/static/admin/img/avatar/avatar-1.png" class="rounded-circle mr-1">
                        <div class="d-sm-none d-lg-inline-block"><?php echo htmlentities(app('session')->get('admin.username')); ?></div>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right">
                        <a href="<?php echo url('User/detail', ['id' => app('session')->get('admin.id')]); ?>" class="dropdown-item has-icon">
                            <i class="far fa-user"></i> 个人中心
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="javascript:;" class="dropdown-item has-icon text-danger logout">
                            <i class="fas fa-sign-out-alt"></i> 退出登录
                        </a>
                    </div>
                </li>
            </ul>
        </nav>

        <div class="main-sidebar">
    <aside id="sidebar-wrapper">

        <ul class="sidebar-menu">
            <li class="menu-header">Brand</li>
            <li  class="images-li"><a class="nav-link" href="<?php echo url('Brand/index'); ?>"><i class="fas fa-images"></i> <span>品牌管理</span></a></li>

            <li class="menu-header">Series</li>
            <li  class="abouts-li"><a class="nav-link" href="<?php echo url('Series/index'); ?>"><i class="fas fa-sitemap"></i> <span>系列管理</span></a></li>

            <li class="menu-header">Product</li>
            <li  class="partners-li"><a class="nav-link" href="<?php echo url('Product/index'); ?>"><i class="fas fa-hands-helping"></i> <span>产品管理</span></a></li>

            <li class="menu-header">News</li>
            <li  class="news-li"><a class="nav-link" href="<?php echo url('News/index'); ?>"><i class="far fa-newspaper"></i> <span>新闻资讯管理</span></a></li>
        </ul>
    </aside>
</div>


        <div class="main-content">
            <section class="section">
                
<div class="section-header">
    <div class="section-header-breadcrumb">
        <div class="breadcrumb-item active"><a href="<?php echo url('Index/index'); ?>">控制台</a></div>
        <div class="breadcrumb-item">产品管理</div>
    </div>
</div>

<div class="section-body">
    <h2 class="section-title">产品管理</h2>

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <div class="card-header-form mr-auto">
                        <form>
                            <div class="input-group">
                                <select class="form-control rounded-0" name="type">
                                    <option value="" <?php echo request()->type == $vo['id'] ? 'selected' : ''; ?>>所有</option>
                                    <?php if(is_array($series) || $series instanceof \think\Collection || $series instanceof \think\Paginator): $i = 0; $__LIST__ = $series;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                                    <option value="<?php echo htmlentities($vo['id']); ?>" <?php echo request()->type == $vo['id'] ? 'selected' : ''; ?>><?php echo htmlentities($vo['name']); ?></option>
                                    <?php endforeach; endif; else: echo "" ;endif; ?>
                                </select>
                                <div class="input-group-append"><button class="btn btn-light rounded-0" type="submit">筛选</button></div>
                            </div>
                        </form>
                    </div>

                    <div class="card-header-form ml-auto">
                        <a href="<?php echo url('product/detail'); ?>" class="btn btn-icon icon-left btn-primary"><i class="far fa-edit"></i> 创建</a>
                    </div>
                </div>

                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered table-md">
                            <tr>
                                <th width="30">#</th>
                                <th>标题</th>
                                <th>图片</th>
                                <th width="200">操作</th>
                            </tr>
                            <?php if(is_array($data) || $data instanceof \think\Collection || $data instanceof \think\Paginator): $key = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;?>
                            <tr>
                                <td><?php echo htmlentities($key); ?></td>
                                <td><?php echo htmlentities($vo['name']); ?></td>
                                <td>
                                    <?php if($vo['path']): ?>
                                    <div class="chocolat-parent">
                                        <a class="chocolat-image" href="/uploads/<?php echo htmlentities($vo['path']); ?>" title="<?php echo htmlentities($vo['name']); ?>">
                                            <img width="100" src="/uploads/<?php echo htmlentities($vo['path']); ?>" />
                                        </a>
                                    </div>
                                    <?php endif; ?>
                                </td>
                                <td>
                                    <a href="<?php echo url('product/detail', ['id' => $vo['id']]); ?>" class="btn btn-icon icon-left btn-primary mr-3"><i class="far fa-edit"></i> 编辑</a>
                                    <a href="javascript:;" class="btn btn-icon icon-left btn-danger" onclick="delImage('<?php echo htmlentities($vo['id']); ?>')"><i class="fas fa-times"></i> 删除</a>
                                </td>
                            </tr>
                            <?php endforeach; endif; else: echo "" ;endif; ?>
                        </table>
                    </div>
                </div>

                <div class="card-footer text-right">
                    <nav class="d-inline-block">
                        <?php echo $data; ?>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>

            </section>
        </div>
        <footer class="main-footer">
        </footer>
    </div>
</div>

<!-- General JS Scripts -->
<script src="/static/admin/js/jquery-3.3.1.min.js"></script>
<script src="/static/admin/js/popper.min.js"></script>
<script src="/static/admin/js/bootstrap.min.js"></script>
<script src="/static/admin/js/jquery.nicescroll.min.js"></script>
<script src="/static/admin/js/moment.min.js"></script>
<script src="/static/admin/js/stisla.js"></script>

<!-- JS Libraies -->
<script src="/static/vendor/chocolat/js/chocolat.js"></script>
<script src="/static/vendor/daterangepicker/js/daterangepicker.js"></script>
<script src="/static/vendor/jquery_upload_preview/js/jquery.uploadPreview.js"></script>
<script src="/static/vendor/sweetalert/js/sweetalert.min.js"></script>
<script src="/static/vendor/summernote/summernote-bs4.js"></script>
<script src="/static/vendor/summernote/lang/summernote-zh-CN.min.js"></script>


<!-- Template JS File -->
<script src="/static/admin/js/scripts.js"></script>
<script src="/static/admin/js/custom.js"></script>

<script type="text/javascript">
$(function() {
    var controller = '<?php echo request()->controller(); ?>';
    $('.main-sidebar .sidebar-menu .' + controller.toLowerCase() + '-li').addClass('active');
    $('.main-sidebar .sidebar-menu .' + controller.toLowerCase() + '-li .dropdown-menu').show();
})
</script>

</body>
</html>



<script type="text/javascript">
    function delImage(id) {
        swal({
            title: '确定删除该数据？',
            icon: 'warning',
            buttons: ['取消', '确认'],
            dangerMode: true,
        })
            .then((willDelete) => {
                if (! willDelete)
                    return;

                $.ajax({
                    url: "<?php echo url('product/destroy'); ?>",
                    method: 'post',
                    data: {id: id},
                    dataType: 'json',
                    success(res) {
                        if (res.success === true) {
                            swal('操作成功', {buttons: false, icon: 'success'});
                            setTimeout(function () { location.reload() }, 1500)
                        }
                        if (res.success === false) swal('出现错误', res.err_msg, 'error');
                    }
                })
            });
    }
</script>

