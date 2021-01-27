var currentPage = 1;
var currentScrollImagePage = 1;
var scrollImages = new Array();

///默认选择的按钮
$('.englishBtn').css('color', 'rgb(34, 126, 36)');
// onNavListSelet(1);
// onBrandBottomImageSelect(1);
onBrandTopListSelect(1);
onBrandTopImageSelect(1);

/**
 * home_right： 界面缩小后导航栏上的菜单栏按钮
 */
// 界面缩小后点击谈框式菜单显示
$('.home_right').on('click', function() {
    $('.min_list_bg').show();
});

$('.min_list_bg').on('click', function() {
    $('.min_list_bg').hide();
});

$('.homeBtn').on('click', function() {
    onNavListSelet(1);
    $('.brand_class').hide();
    $('.home_class').show();
    $('.min_list_bg').hide();
    window.history.back(-1);
});

$('.brandBtn').on('click', function() {
    onNavListSelet(2);
    $('.home_class').hide();
    $('.brand_class').show();
    $('.min_list_bg').hide();
    window.location.href="brand.html";
});

$('.newsBtn').on('click', function() {
    $('.min_list_bg').hide();
});

$('.aboutBtn').on('click', function() {
    $('.min_list_bg').hide();
});

/**
 * all_brand_class ：   ALL BRAND模块
 * double_phoenix_class ： DOUBLE PHOENIX 模块
 */

/// 2级导航栏
$('.allBtn').on('click', function() {
    onBrandTopListSelect(1);
    $('.double_phoenix_class').hide();
    $('.all_brand_class').show();
});

$('.doubleBtn').on('click', function() {
    onBrandTopListSelect(2);
    $('.all_brand_class').hide();
    $('.double_phoenix_class').show();
});

$('.patraBtn').on('click', function() {
    onBrandTopListSelect(3);
    $('.all_brand_class').hide();
    $('.double_phoenix_class').show();
});

$('.emeBtn').on('click', function() {
    onBrandTopListSelect(4);
    $('.all_brand_class').hide();
    $('.double_phoenix_class').show();
});

$('.konnersBtn').on('click', function() {
    onBrandTopListSelect(5);
    $('.all_brand_class').hide();
    $('.double_phoenix_class').show();
});

$('.plakBtn').on('click', function() {
    onBrandTopListSelect(6);
    $('.all_brand_class').hide();
    $('.double_phoenix_class').show();
});


// 网页顶部More按钮
$('.mosaicBtn').on('click', function() {
    var id = this.getAttribute('data-id');
     // var id = 1;

    $.ajax({
        url: "/index/series/detail?id=" +id,
        method: 'get',
        processData: false,
        contentType: false,

        dataType: 'json',
        success(res) {
            if (res.success === true) {
                console.log(res.data)
                showTanChuang(res.data)
            if (res.success === false) swal('出现错误', res.err_msg, 'error');
            }
        }
    })
})

/// 
function showTanChuang(data) {
    currentPage = 1;
    var images = new Array();
    images = data.images;
    scrollImages = data.images;
    let image = "";
    if (images.length > 0) {
        image = '/uploads/' + images[0].path;
    }
    console.log(image)
    currentPage = 1;
    document.getElementById('scroll_tanchuang_id').innerHTML = onTanchuang(data.video, data.name, data.content, image);
    $('.scroll_tanchuang').show();

    let clientWidth = document.getElementById('tanchuang_bg_right_view_min_image').clientWidth;
    let hHeight = document.getElementById('tanchuang_bg_right_id').clientHeight;
    let maxImageHeight = document.getElementById('tanchuang_bg_right_view_max_id').clientHeight;
    let h = hHeight - maxImageHeight;
    let min_images_view = '';
    for (var i=0;i<images.length;i++) { 
        min_images_view = min_images_view + `<div class="tanchuang_image tanchuang_image_${i + 1}" style="height: ${h + 'px'};width: ${clientWidth / 4 + 'px'};background:url(${'/uploads/' + images[i].path}) no-repeat center center / 100% auto;"></div>`;
    }
    let d = `<div style="height: ${h + 'px'};overflow-x: auto;display: flex;flex-direction: row;">${min_images_view}</div>`
    document.getElementById('tanchuang_bg_right_view_min_image').innerHTML = d;

    document.getElementById('tanchuang_title').innerHTML = 'Twinle Mosaic';
    $('.tanchuang_bg').on('click', function(e) {
        e.stopPropagation();
    })
    

    $('.close_btn').on('click', function() {
        $('.scroll_tanchuang').hide();
    })

    for (var i=0;i<images.length;i++) { 
        let index = i + 1;
        $(`.tanchuang_image_${i + 1}`).on('click', index, function(e) {
            currentPage = index;
            onTanchuangImageSelect(currentPage, images[currentPage - 1].path);
        })
    }
    
    // 点击大图
    $('.tanchuang_max_image').on('click', function() {
        //function onScroll(image, title, imagesCount, currentCount)
        document.getElementById('scroll_tanchuang_image_id').innerHTML = onScroll(images[currentPage - 1], data.name, images.length, currentPage);
        $('.scroll_tanchuang_image').show();

        $('.tanchuang_scroll_image_pre').on('click', function(e) {
            if (currentPage != 1) {
                currentPage--;
                let im = '/uploads/' + images[currentPage - 1].path;
                $('.scroll_bg').css('background', `url(${im}) no-repeat top center / auto 85%;`)
                document.getElementById('scroll_image_current').innerHTML = `${currentPage} / ${images.length}`;
            }
            e.stopPropagation();
        })
        
        $('.tanchuang_scroll_image_next').on('click', function(e) {
            if (currentPage != images.length) {
                currentPage++;
                let im = '/uploads/' + images[currentPage - 1].path;
                console.log(im)
                $('.scroll_bg').css('background', `url(${im}) no-repeat top center / auto 85%;`)
                document.getElementById('scroll_image_current').innerHTML = `${currentPage} / ${images.length}`;
            }
            e.stopPropagation();
        })
        
        $('.scroll_closeBtn').on('click', function() {
            $('.scroll_tanchuang_image').hide();
        })
    })

    // 上一张
    $('.tanchuang_image_pre').on('click', function(e) {
        if (currentPage != 1) {
            currentPage--;
            onTanchuangImageSelect(currentPage, images[currentPage - 1].path);
        }
        e.stopPropagation();
    })

    // 下一张
    $('.tanchuang_image_next').on('click', function(e) {
        if (currentPage != images.length) {
            currentPage++;
            onTanchuangImageSelect(currentPage, images[currentPage - 1].path);
        }
        e.stopPropagation();
    })
}

// =========== 弹窗 ===========
$('.scroll_tanchuang').on('click', function() {
    currentScrollImagePage = 1;
    $('.scroll_tanchuang').hide();
})

function onTanchuang(video, title, desc, maxImage) {
    let tanchuang_title = `<div id="tanchuang_title" class="tanchuang_title_c">${1}</div>`
    let v = video  ? `<div class="tanchuang_video_view"> <video class="tanchuang_video" controls src="http://clips.vorwaerts-gmbh.de/big_buck_bunny.mp4"></video></div>` : '';
    let tanchuangBgV = `
    <div class="tanchuang_bg">
        <div class="tanchuang_bg_left_view">
            ${tanchuang_title}
            ${v}
            <div class="tanchuang_left_dec">
                ${desc}
            </div>
            <div class="background tanchuang_close_button close_btn">Close</div>
        </div>
        <div id="tanchuang_bg_right_id" class="tanchuang_bg_right_view">
            <div id="tanchuang_bg_right_view_max_id" class="tanchuang_bg_right_view_max_image tanchuang_max_image" style="background:url(${ maxImage }) no-repeat center center / 100% auto">
                <div class="tanchuang_bg_right_view_max_image_pre tanchuang_image_pre"></div>
                <div class="tanchuang_bg_right_view_max_image_next tanchuang_image_next"></div>
            </div>
            <div id="tanchuang_bg_right_view_min_image" class="tanchuang_bg_right_view_min_image_view">
            </div>
        </div>
    </div>
    `
    return tanchuangBgV;
}


function onScroll(image, title, imagesCount, currentCount) {
    let im = '/uploads/' + image.path;
    let name = image.name;
    // <!-- 轮播图 - ->
    let content = `
    <div class="scroll_tanchuang_image_bg scroll_bg" style="background: url(${im}) no-repeat top center / auto 85%;">
        <div class="tanchuang_image_close scroll_closeBtn"></div>
        <div class="tanchuang_image_bg_right_view_image_pre tanchuang_scroll_image_pre"></div>
        <div class="tanchuang_image_bg_right_view_image_next tanchuang_scroll_image_next"></div>
        <div class="tanchuang_title_bg_right_view">
            <div id="scroll_image_title" class="tanchuang_title_bg_right_view_title">${name}</div>
            <div id="scroll_image_current" class="tanchuang_title_bg_right_view_r_title">${currentCount + '/' + imagesCount}</div>
        </div>
    </div>
    `
    return content;
}

$('.scroll_tanchuang_image').on('click', function() {
    // $('.scroll_tanchuang_image').hide();
    
})




$('.dragonBtn').on('click', function() {
    currentPage = 1;
    $('.tanchuang_video_view').hide();
    document.getElementById('tanchuang_title').innerHTML = 'Novel Dragon';
    onTanchuangImageSelect(1);
    $('.scroll_tanchuang').show();
})


// all brand 
$('.all_brand_image_1').on('click', function() {
    onBrandTopImageSelect(1);
})

$('.all_brand_image_2').on('click', function() {
    onBrandTopImageSelect(2);
})

$('.all_brand_image_3').on('click', function() {
    onBrandTopImageSelect(3);
})

$('.all_brand_image_4').on('click', function() {
    onBrandTopImageSelect(4);
})

$('.all_brand_image_5').on('click', function() {
    onBrandTopImageSelect(5);
})

$('.all_brand_bottom_image_1').on('click', function() {
    onBrandBottomImageSelect(1);
})

$('.all_brand_bottom_image_2').on('click', function() {
    onBrandBottomImageSelect(2);
})

$('.all_brand_bottom_image_3').on('click', function() {
    onBrandBottomImageSelect(3);
})

$('.all_brand_bottom_image_4').on('click', function() {
    onBrandBottomImageSelect(4);
})

$('.all_brand_bottom_image_5').on('click', function() {
    onBrandBottomImageSelect(5);
})

// Double Phoenix 图片列表
$('.image_line_1').on('click', function() {
    $('.scroll_tanchuang_image').show();
})



/**
 * scroll_tanchuang_image： 轮播图类型弹窗
 * scroll_tanchuang：带有视频类的弹窗， 如果不需要视频将class: tanchuang_video_view隐藏便可
 */
// =========== 图片列表弹窗 ===========


$('.tanchuang_scroll_image_pre').on('click', function() {
    if (currentScrollImagePage != 1) {
        currentScrollImagePage--;
    }else {
        currentScrollImagePage = 5;
    }
    document.getElementById('scroll_image_current').innerHTML = `${currentScrollImagePage} / 5`;
})

$('.tanchuang_scroll_image_next').on('click', function() {
    if (currentScrollImagePage != 5) {
        currentScrollImagePage++;
    }else {
        currentScrollImagePage = 1;
    }
    document.getElementById('scroll_image_current').innerHTML = `${currentScrollImagePage} / 5`;
})







// 不做响应事件


$('.scroll_bg').on('click', function(e) {
    e.stopPropagation();
})

$('.min_input').on('click', function(e) {
    e.stopPropagation();
})

$('.min_eng').on('click', function(e) {
    e.stopPropagation();
})




// 下面小图
$('.tanchuang_image_1').on('click', function(e) {
    currentPage = 1;
    onTanchuangImageSelect(1);
})

$('.tanchuang_image_2').on('click', function(e) {
    currentPage = 2;
    onTanchuangImageSelect(2);
})

$('.tanchuang_image_3').on('click', function(e) {
    currentPage = 3;
    onTanchuangImageSelect(3);
})

$('.tanchuang_image_4').on('click', function(e) {
    currentPage = 4;
    onTanchuangImageSelect(4);
})


function onNavListSelet(index) {
    $('.homeBtn').css('color', index == 1 ? 'rgb(34, 126, 36)' : 'rgb(0, 0, 0)');
    $('.brandBtn').css('color', index == 2 ? 'rgb(34, 126, 36)' : 'rgb(0, 0, 0)');
    $('.newsBtn').css('color', index == 3 ? 'rgb(34, 126, 36)' : 'rgb(0, 0, 0)');
    $('.aboutBtn').css('color', index == 4 ? 'rgb(34, 126, 36)' : 'rgb(0, 0, 0)');
}

function onBrandTopListSelect(index) {
    $('.allBtn').css('color', index == 1 ? 'rgb(34, 126, 36)' : 'rgb(0, 0, 0)');
    $('.doubleBtn').css('color', index == 2 ? 'rgb(34, 126, 36)' : 'rgb(0, 0, 0)');
    $('.patraBtn').css('color', index == 3 ? 'rgb(34, 126, 36)' : 'rgb(0, 0, 0)');
    $('.emeBtn').css('color', index == 4 ? 'rgb(34, 126, 36)' : 'rgb(0, 0, 0)');
    $('.konnersBtn').css('color', index == 5 ? 'rgb(34, 126, 36)' : 'rgb(0, 0, 0)');
    $('.plakBtn').css('color', index == 6 ? 'rgb(34, 126, 36)' : 'rgb(0, 0, 0)');
}

function onBrandTopImageSelect(index) {
    // $('.all_brand_image_1').css('border', index == 1 ?'2px solid red' : '');
    // $('.all_brand_image_2').css('border', index == 2 ?'2px solid red' : '');
    // $('.all_brand_image_3').css('border', index == 3 ?'2px solid red' : '');
    // $('.all_brand_image_4').css('border', index == 4 ?'2px solid red' : '');
    // $('.all_brand_image_5').css('border', index == 5 ?'2px solid red' : '');
    $('.all_brand_class_bg_image_view').css('background', `url(images/${index}.jpg) no-repeat center center / 100% auto`);
}

function onBrandBottomImageSelect(index) {
    // $('.all_brand_bottom_image_1').css('border', index == 1 ?'2px solid red' : '');
    // $('.all_brand_bottom_image_2').css('border', index == 2 ?'2px solid red' : '');
    // $('.all_brand_bottom_image_3').css('border', index == 3 ?'2px solid red' : '');
    // $('.all_brand_bottom_image_4').css('border', index == 4 ?'2px solid red' : '');
    // $('.all_brand_bottom_image_5').css('border', index == 5 ?'2px solid red' : '');
    $('.all_brand_class_bg_bottom_image_view').css('background', `url(images/${index}.jpg) no-repeat center center / 100% auto`);
    
}

function onTanchuangImageSelect(index, path) {
    console.log(index);
    $('.tanchuang_max_image').css('background', `url(${ '/uploads/' + path}) no-repeat center center / 100% auto`);
}