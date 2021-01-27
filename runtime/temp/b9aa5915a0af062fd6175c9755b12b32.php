<?php /*a:5:{s:74:"/Applications/MxSrvs/www/quanzhong/application/index/view/index/index.html";i:1611581087;s:78:"/Applications/MxSrvs/www/quanzhong/application/index/view/public/template.html";i:1611375670;s:76:"/Applications/MxSrvs/www/quanzhong/application/index/view/public/header.html";i:1611578352;s:73:"/Applications/MxSrvs/www/quanzhong/application/index/view/public/nav.html";i:1611747847;s:76:"/Applications/MxSrvs/www/quanzhong/application/index/view/public/footer.html";i:1611746762;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <title>网站</title>
    <link type="text/css" rel="styleSheet" href="/static/index/css/index.css" />
</head>
<style type="text/css">

</style>
<body>


<div class="main">
    <!-- 头部导航栏 -->
    <div class="top_view">
        <!-- 头部导航栏左边 -->
        <div class="top_view_left">
            <div class="pc_icon"></div>
            <div class="pc_title">DOUBLE PHOENIX</div>
        </div>
        <!-- 头部导航栏右边 -->
        <div class="top_view_left pc_right">
            <div class="title top_btn homeBtn" style="color: rgb(34, 126, 36);">HOME</div>
            <div class="title top_btn brandBtn">BRAND</div>
            <div class="title top_btn newsBtn">NEWS</div>
            <div class="title top_btn aboutBtn">ABOUT</div>
            <input class="tooltip search_input search_input_width input_view" placeholder="search"/>
            <div class="title language language_height zwBtn">中文</div>
            <div class="language_line"></div>
            <div class="title language language_height englishBtn">ENG</div>
        </div>
        <!-- 头部导航栏缩小后右边 -->
        <div class="background home_right"></div>
    </div>

    <div class="min_list_bg">
        <div class="min_list">
            <div class="title min_list_item homeBtn" style="color: rgb(34, 126, 36);">HOME</div>
            <div class="title min_list_item brandBtn">BRAND</div>
            <div class="title min_list_item newsBtn">NEWS</div>
            <div class="title min_list_item aboutBtn">ABOUT</div>
            <div class="min_list_item min_input"><input class="tooltip search_input min_nav_search_input_width input_view" placeholder="search"/></div>
            <div class="min_list_item min_eng" style="justify-content: center;display: flex;flex-direction: row;">
                <div class="title language language_min_nav_height zwBtn">中文</div>
                <div class="language_min_nav_line"></div>
                <div class="title language language_min_nav_height englishBtn">ENG</div>
            </div>
        </div>
    </div>

    <!-- 内容 -->
    <div class="content_view">
        <!-- 头部view -->
        <div class="header_view">
            <div class="tooltip header_view_bgView header_view_left_image" style="background: url('/uploads/<?php echo htmlentities($series['1']['cover']); ?>') no-repeat center center / 100% auto;">
                <div class="header_title header_left_title"><?php echo htmlentities($series['1']['en_name']); ?></div>
                <div class="tooltip header_button header_left_button mosaicBtn" data-id="<?php echo htmlentities($series['1']['id']); ?>">MORE</div>
            </div>
            <div class="tooltip header_view_bgView header_view_right_image " style="background: url('/uploads/<?php echo htmlentities($series['0']['cover']); ?>') no-repeat center center / 100% auto;">
                <div class="header_title header_right_title"><?php echo htmlentities($series['0']['en_name']); ?></div>
                <div class="tooltip header_button header_right_button dragonBtn mosaicBtn" data-id="<?php echo htmlentities($series['0']['id']); ?>">MORE</div>
            </div>
        </div>


<div class="home_class">
    <div class="home_top_view">BRAND</div>
    <div class="header_view">
        <!-- home_top_left_view -->
        <div class="tooltip home_view_bg_View home_view_bg_left_image" style="background: url('/uploads/<?php echo htmlentities($brand['0']['cover']); ?>') no-repeat center center / 100% auto;">
            <div class="header_title header_left_title"><?php echo htmlentities($brand['0']['en_name']); ?></div>
            <div class="tooltip header_button header_left_button" data-id="<?php echo htmlentities($brand['0']['id']); ?>">MORE</a></div>
        </div>
        <div class="tooltip home_view_bg_View  home_view_bg_right_image" style="background: url('/uploads/<?php echo htmlentities($brand['1']['cover']); ?>') no-repeat center center / 100% auto;">
            <div class="header_title header_left_title"><?php echo htmlentities($brand['1']['en_name']); ?></div>
            <div class="tooltip header_button header_left_button" data-id="<?php echo htmlentities($brand['1']['id']); ?>">MORE</div>
        </div>
    </div>
    <div class="header_view">
        <!-- home_top_left_view -->
        <div class="tooltip home_view_bg_bottom_View home_top_left_view_image_mr home_top_left_view_1_image" style="background: url('/uploads/<?php echo htmlentities($brand['2']['cover']); ?>') no-repeat center center / 100% auto;">
            <div class="header_title header_left_title"><?php echo htmlentities($brand['2']['en_name']); ?></div>
            <div class="tooltip header_button header_left_button" data-id="<?php echo htmlentities($brand['2']['id']); ?>">MORE</div>
        </div>
        <div class="tooltip home_view_bg_bottom_View home_top_left_view_image_mr home_top_left_view_2_image" style="background: url('/uploads/<?php echo htmlentities($brand['3']['cover']); ?>') no-repeat center center / 100% auto;">
            <div class="header_title header_left_title"><?php echo htmlentities($brand['3']['en_name']); ?></div>
            <div class="tooltip header_button header_left_button" data-id="<?php echo htmlentities($brand['3']['id']); ?>">MORE</div>
        </div>
        <div class="tooltip home_view_bg_bottom_View home_top_left_view_3_image" style="background: url('/uploads/<?php echo htmlentities($brand['4']['cover']); ?>') no-repeat center center / 100% auto;">
            <div class="header_title header_left_title"><?php echo htmlentities($brand['4']['en_name']); ?></div>
            <div class="tooltip header_button header_left_button" data-id="<?php echo htmlentities($brand['4']['id']); ?>">MORE</div>
        </div>
    </div>
    <!-- 消息列表 -->
    <div class="list_bg_view">

        <?php foreach($news as $v): ?>
        <div class="list_item">
            <div class="list_item_left_bg">
                <div class="list_item_left_bg_title">
                    <?php echo htmlentities($v['send_time']); ?>
                </div>
            </div>
            <div class="list_item_right_bg">
                <div class="title list_item_right_bg_title" data-id="<?php echo htmlentities($v['id']); ?>">
                    <?php echo htmlentities($v['en_title']); ?>
                </div>
                <div class="list_item_right_bg_dec">
                    <?php echo htmlentities(strip_tags($v['en_content'])); ?>
                </div>
            </div>
        </div>
        <?php endforeach; ?>
        <div class="list_bottom_button_bg">
            <div class="background list_bottom_button_bg_btn">
                MORE news
            </div>
        </div>
    </div>
</div>


<!-- 底部 -->
<div class="bottom_view">
    <div class="bottom_view_content bottom_view_content_left"></div>
    <div class="bottom_view_content bottom_view_content_center"></div>
    <div class="bottom_view_content bottom_view_content_right"></div>
</div>
</div>

<!-- 弹窗 -->
<div id="scroll_tanchuang_id" class="scroll_tanchuang">
    <!-- <div class="tanchuang_bg"> -->
        <!-- 左边文字视频 -->
        <!-- <div class="tanchuang_bg_left_view">
            <div id="tanchuang_title" class="tanchuang_title_c"></div>
            <div class="tanchuang_video_view">
                <video class="tanchuang_video" controls src="http://clips.vorwaerts-gmbh.de/big_buck_bunny.mp4" poster="images/video_cover.jpg"></video>
            </div>
            <div class="tanchuang_left_dec">
                ods ifjo iaods ifjo iafiausfis udigsfygu idfsygiufydsigsydf fydguisfgy g ydgisfuygfsdg  udgs ygiuyd d g uydfgydfygudfgdfgdsgfdfg dgfdods ifjo iafiausfis udigsfygu idfsygiufydsig dufgy sydf fydguisfgy g ydgisfuygfsdg  udgs ygiuyd d g uydfgydfygudfgdfgdsgfdfg dgfdfiausfis udigsfygu idfsygiufydsig dufgy sydf fydguisfgy g ydgisfuygfsdg  udgs ygiuyd d g uydfgydfygudfgdfgdsgfdfg dgfdods ifjo iafiausfis udigsfygu idfsygiufydsig dufgy sydf fydguisfgy g ydgisfuygfsdg  udgs ygiuyd d g uydfgydfygudfgdfgdsgfdfg dgfdods ifjo iafiausfis udigsfygu idfsygiufydsig dufgy sydf fydguisfgy g ydgisfuygfsdg  udgs ygiuyd d g uydfgydfygudfgdfgdsgfdfg dgfdods ifjo iafiausfis udigsfygu idfsygiufydsig dufgy sydf fydguisfgy g ydgisfuygfsdg  udgs ygiuyd d g uydfgydfygudfgdfgdsgfdfg dgfdods ifjo iafiausfis udigsfygu idfsygiufydsig dufgy sydf fydguisfgy g ydgisfuygfsdg  udgs ygiuyd d g uydfgydfygudfgdfgdsgfdfg dgfd
            </div>
            <div class="background tanchuang_close_button close_btn">Close</div>
        </div> -->

        <!-- 右边图片 -->
        <!-- <div class="tanchuang_bg_right_view">
            <div class="tanchuang_bg_right_view_max_image tanchuang_max_image">
                <div class="tanchuang_bg_right_view_max_image_pre tanchuang_image_pre"></div>
                <div class="tanchuang_bg_right_view_max_image_next tanchuang_image_next"></div>
            </div>
            <div class="tanchuang_bg_right_view_min_image_view">
                <div style="height: 100%;width: 100%;" >
                    <div style="display: flex;flex-direction: row;overflow-x: auto;height: 100%;">
                        <div class="tanchuang_bg_right_view_min_image_1 tanchuang_image_1" style=" background: url(/sg/3.jpg) no-repeat top center / auto 85%;"></div>
                        <div class="tanchuang_bg_right_view_min_image_1 tanchuang_image_1"></div>
                        <div class="tanchuang_bg_right_view_min_image_1 tanchuang_image_1"></div>
                        <div class="tanchuang_bg_right_view_min_image_1 tanchuang_image_1"></div>
                        <div class="tanchuang_bg_right_view_min_image_1 tanchuang_image_1"></div>
                        <div class="tanchuang_bg_right_view_min_image_1 tanchuang_image_1"></div>
                        <div class="tanchuang_bg_right_view_min_image_1 tanchuang_image_1"></div>
                        <div class="tanchuang_bg_right_view_min_image_1 tanchuang_image_1"></div>
                        <div class="tanchuang_bg_right_view_min_image_1 tanchuang_image_1"></div>
                        <div class="tanchuang_bg_right_view_min_image_1 tanchuang_image_1"></div>
                        <div class="tanchuang_bg_right_view_min_image_1 tanchuang_image_1"></div>
                    </div>
                   
                </div>
            </div>
        </div> -->
    </div>
</div>

<!-- 轮播图 -->
<div id="scroll_tanchuang_image_id" class="scroll_tanchuang_image">
    <!-- <div class="scroll_tanchuang_image_bg scroll_bg">
        <div class="tanchuang_image_close scroll_closeBtn"></div>
        <div class="tanchuang_image_bg_right_view_image_pre tanchuang_scroll_image_pre"></div>
        <div class="tanchuang_image_bg_right_view_image_next tanchuang_scroll_image_next"></div>
        <div class="tanchuang_title_bg_right_view">
            <div id="scroll_image_title" class="tanchuang_title_bg_right_view_title">Spangles</div>
            <div id="scroll_image_current" class="tanchuang_title_bg_right_view_r_title">1/5</div>
        </div>
    </div> -->
</div>
</div>
</body>

<script src="/static/index/js/zepto.min.js"></script>
<script src="/static/index/js/index.js"></script>
<script>

</script>
</html>


