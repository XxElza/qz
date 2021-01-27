<?php /*a:3:{s:73:"/Applications/MxSrvs/www/quanzhong/application/admin/view/auth/index.html";i:1611577989;s:76:"/Applications/MxSrvs/www/quanzhong/application/admin/view/public/header.html";i:1611377457;s:76:"/Applications/MxSrvs/www/quanzhong/application/admin/view/public/footer.html";i:1611375670;}*/ ?>
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
    <section class="section">
        <div class="container mt-5">
            <div class="row">
                <div class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4">
                    <div class="login-brand bg-primary shadow">
                        管理后台
                    </div>

                    <div class="card card-primary">
                        <div class="card-header">
                            <h4>登录</h4>
                        </div>

                        <div class="card-body">
                            <form method="POST" action="<?php echo url('Auth/login'); ?>" class="needs-validation" novalidate="">
                                <div class="form-group">
                                    <label for="username">账号</label>
                                    <input id="username" type="text" class="form-control" name="username" tabindex="1" required autofocus>
                                    <div class="invalid-feedback">
                                        请填写账号
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="d-block">
                                        <label for="password" class="control-label">密码</label>
                                    </div>
                                    <input id="password" type="password" class="form-control" name="password" tabindex="2" required>
                                    <div class="invalid-feedback">
                                        请填写密码
                                    </div>
                                </div>

                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary btn-lg btn-block" tabindex="4">
                                        登录
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="simple-footer">

                    </div>
                </div>
            </div>
        </div>
    </section>
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

