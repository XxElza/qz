<?php /*a:5:{s:74:"/Applications/MxSrvs/www/quanzhong/application/index/view/index/brand.html";i:1611755286;s:78:"/Applications/MxSrvs/www/quanzhong/application/index/view/public/template.html";i:1611375670;s:76:"/Applications/MxSrvs/www/quanzhong/application/index/view/public/header.html";i:1611578352;s:73:"/Applications/MxSrvs/www/quanzhong/application/index/view/public/nav.html";i:1611747847;s:76:"/Applications/MxSrvs/www/quanzhong/application/index/view/public/footer.html";i:1611746762;}*/ ?>
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


<div class="brand_class"  style="display: flex;">
    <!-- 品牌页头部按钮列表 -->
    <div class="brand_top_view">
        <div class="title brand_top_btn allBtn">ALL BRAND</div>
        <?php foreach($brand as $v): ?>
        <div class="title brand_top_btn" data-id="<?php echo htmlentities($v['id']); ?>"><?php echo htmlentities($v['en_name']); ?></div>
        <?php endforeach; ?>
    </div>

    <!-- All Brand -->
    <div class="all_brand_class">
        <div class="all_brand_class_bg">
            <div class="tooltip all_brand_class_bg_image_view" style="background: url('/uploads/<?php echo htmlentities($brand['0']['cover']); ?>') no-repeat center center / 100% auto">
                <div style="display: flex;flex-direction: row;">
                    <?php foreach($brand['0']['series'] as $v): ?>
                    <div class="tooltip all_brand_image_item_1 all_brand_image_1" style="background: url('/uploads/<?php echo htmlentities($v['cover']); ?>') no-repeat center center / 100% auto;width:20%;height: 80px;"></div>
                    <?php endforeach; ?>

                </div>
            </div>
            <div class="all_brand_content_view">
            <div class="all_brand_content_view_logo" style="background: url('/uploads/<?php echo htmlentities($brand['0']['logo']); ?>') no-repeat center center / 50% 50%;"></div>
                <div class="all_brand_content_test_view">
                    <div class="title all_brand_content_test">
                        <?php echo htmlentities(strip_tags($brand['0']['en_desc'])); ?>
                    </div>
                    <div class="background all_brand_button" data-id="<?php echo htmlentities($brand['0']['id']); ?>">MORE</div>
                </div>
            </div>
        </div>
    </div>

    <div class="all_brand_class">
        <div class="all_brand_class_bg">
            <div class="all_brand__bottom_content_view">
                <div class="all_brand_bottom_content_view_logo" style="background: url('/uploads/<?php echo htmlentities($brand['1']['logo']); ?>') no-repeat center center / 50% 25%;"></div>
                <div class="all_brand_content_test_view">
                    <div class="title all_brand_content_test">
                        <?php echo htmlentities(strip_tags($brand['1']['en_desc'])); ?>
                    </div>
                    <div class="background all_brand_bottom_button" data-id="<?php echo htmlentities($brand['1']['id']); ?>">MORE</div>
                </div>
            </div>
            <div class="tooltip all_brand_class_bg_bottom_image_view" style="background: url('/uploads/<?php echo htmlentities($brand['1']['cover']); ?>') no-repeat center center / 100% auto">
                <div style="display: flex;flex-direction: row;">
                    <?php foreach($brand['1']['series'] as $v): ?>
                    <div class="tooltip all_brand_image_bottom_item_1 all_brand_bottom_image_1" style="background: url('/uploads/<?php echo htmlentities($v['cover']); ?>') no-repeat center center / 100% auto;width:20%;height: 80px;"></div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>

        <div class="all_brand_class_bg">
            <div class="all_brand__bottom_3_content_view">
                <div class="tooltip all_brand_image_bottom_3_item_1" style=" background: url('/uploads/<?php echo htmlentities($brand['2']['cover']); ?>') no-repeat center center / 100% auto;">
                    <div class="background all_brand_image_bottom_3_item_left_title">MORE</div>
                    <div class="all_brand_image_bottom_3_item_left_image" style="background: url('/uploads/<?php echo htmlentities($brand['2']['logo']); ?>') no-repeat center center / 100% 100%;"></div>
                </div>
                <div class="tooltip all_brand_image_bottom_3_item_2" style=" background: url('/uploads/<?php echo htmlentities($brand['3']['cover']); ?>') no-repeat center center / 100% auto;">
                    <div class="all_brand_image_bottom_3_item_center_image" style="background: url('/uploads/<?php echo htmlentities($brand['3']['logo']); ?>') no-repeat center center / 100% 100%;"></div>
                    <div class="background all_brand_image_bottom_3_item_center_title">MORE</div>
                </div>
                <div class="tooltip all_brand_image_bottom_3_item_3" style=" background: url('/uploads/<?php echo htmlentities($brand['4']['cover']); ?>') no-repeat center center / 100% auto;">
                    <div class="all_brand_image_bottom_3_item_right_image" style="background: url('/uploads/<?php echo htmlentities($brand['4']['logo']); ?>') no-repeat center center / 100% 100%;"></div>
                    <div class="background all_brand_image_bottom_3_item_right_title">MORE</div>
                </div>
            </div>
        </div>

        <div class="all_brand_class_bg">
            <div class="all_brand_fine_base_image_view">
                <div class="all_brand_fine_base_image"></div>
            </div>
            <div class="all_brand_fine_base">
                <div class="all_brand_fine_base_content_view">
                    <div class="all_brand_fine_base_content_view_image"></div>
                    <div class="title all_brand_fine_base_content_title">FINE BASE</div>
                    <div class="title all_brand_fine_base_test">
                        This is Double Phoenix brand asasa discription. This is fake text.
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- 系列循环 -->
    <?php foreach($brand as $v): ?>
    <div class="double_phoenix_class">
        <div class="double_phoenix_top_view">
            <div class="double_phoenix_top_view_left"></div>
            <div class="double_phoenix_top_view_right">
                <!--<video class="brand_video" controls src="http://clips.vorwaerts-gmbh.de/big_buck_bunny.mp4" poster="images/video_cover.jpg"></video>-->
                <div class="brand_title"><?php echo htmlentities($v['en_desc']); ?></div>
            </div>
        </div>


        <div class="phoenix_image_list">
            <div class="image_line">
                <?php foreach($v['series'] as $vv): ?>
                <div class="tooltip image_line_1 mosaicBtn" data-id="<?php echo htmlentities($vv['id']); ?>" style="background: url('/uploads/<?php echo htmlentities($vv['cover']); ?>') no-repeat center center / 100% auto;"></div>
                <?php endforeach; ?>
            </div>
        </div>


    </div>
    <?php endforeach; ?>


    <!-- 品牌页底部按钮列表 -->
    <div class="brand_top_view">
        <div class="title brand_top_btn homeBtn">HOME</div>
        <div class="title brand_top_btn brandBtn" style="color: rgb(34, 126, 36);">BRAND</div>
        <div class="title brand_top_btn newsBtn">NEWS</div>
        <div class="title brand_top_btn aboutBtn">ABOUT</div>
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


