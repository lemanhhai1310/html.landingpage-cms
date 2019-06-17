<?php $title = "Trang chủ" ?>
<?php include "header.php"; ?>
<div class="uk-section-small">
    <div class="uk-container uk-container-small uk-margin-medium">
        <h2 class="cms-title uk-text-center">Khách hàng của chúng tôi</h2>
        <p class="cms-desc uk-text-center">
            Click Media & Seo là một trong những công ty về lĩnh vực Media và Seo <br>
            tốt nhất Việt Nam hiện nay. Chúng tôi chuyên cung cấp các giải pháp <br>
            hàng đầu về bán hàng, marketing và quản lý vận hành trong kinh doanh
        </p>
    </div>
    <div class="uk-container uk-container-small">
        <div class="uk-child-width-1-2 uk-child-width-1-3@m uk-grid-small uk-grid-match" uk-grid>
            <?php
            $data = array(
                array(
                    'img' => 'imgs/KH/coca-cola.png',
                    'title' => 'SEO Traffic <br/> và Keyword',
                ),
                array(
                    'img' => 'imgs/KH/chin-su.png',
                    'title' => 'Web Design, SEO <br/> và Social Media',
                ),
                array(
                    'img' => 'imgs/KH/mat-bao.png',
                    'title' => 'SEO Traffic <br/> và Keyword',
                ),

                array(
                    'img' => 'imgs/KH/zing-vn.png',
                    'title' => 'SEO Traffic <br/> và Keyword',
                ),
                array(
                    'img' => 'imgs/KH/momo.png',
                    'title' => 'Viral Content và <br/> Facebook Ads',
                ),
                array(
                    'img' => 'imgs/KH/haravan.png',
                    'title' => 'SEO Traffic, Keyword <br/> và Social Media',
                ),

                array(
                    'img' => 'imgs/KH/nhaccuatui.png',
                    'title' => 'SEO Traffic <br/> và Keyword',
                ),
                array(
                    'img' => 'imgs/KH/bitis.png',
                    'title' => 'SEO Training và <br/> Google Ads',
                ),
                array(
                    'img' => 'imgs/KH/vinamilk.png',
                    'title' => 'SEO Traffic, Keyword <br/> và Social Media',
                ),
            );
            foreach ($data as $k1 => $v1){ ?>
                <div>
                    <div class="uk-card uk-card-hover cms-card1 uk-card-default uk-text-center">
                        <div class="cms-bg-img">
                            <img src="<?= $v1['img'] ?>" alt="">
                        </div>
                        <hr>
                        <h4 class="uk-card-title"><?= $v1['title'] ?></h4>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</div>
<div class="cms-bg-gray uk-section-small">
    <div class="uk-container uk-container-small uk-margin-medium">
        <h2 class="cms-title uk-text-center">Đội ngũ nhân sự</h2>
        <p class="cms-desc uk-text-center">
            Click Media & Seo sở hữu đội ngũ nhân sự giàu kinh nghiệm <br>
            và làm việc với sự tâm huyết cao
        </p>
    </div>
    <div class="uk-container-expand">
        <div class="uk-position-relative uk-visible-toggle uk-light" tabindex="-1" uk-slider="center: true">

            <ul class="uk-slider-items uk-grid-medium uk-grid">
                <?php
                $data = array(
                    array(
                        'img' => 'imgs/founder/a-cuong-01.png',
                    ),
                    array(
                        'img' => 'imgs/founder/a-cuong-01.png',
                    ),
                    array(
                        'img' => 'imgs/founder/a-cuong-01.png',
                    ),
                    array(
                        'img' => 'imgs/founder/a-cuong-01.png',
                    ),
                    array(
                        'img' => 'imgs/founder/a-cuong-01.png',
                    ),
                    array(
                        'img' => 'imgs/founder/a-cuong-01.png',
                    ),
                );
                foreach ($data as $k1 => $v1){ ?>
                    <li class="uk-width-4-5">
                        <div class="uk-card cms-nhansu-card uk-card-default">
                            <div class="uk-grid-divider" uk-grid>
                                <div class="uk-width-auto@s">
                                    <div class="uk-flex-middle" uk-grid>
                                        <div class="uk-width-auto">
                                            <img class="cms-avatar" src="<?= $v1['img'] ?>" alt="">
                                        </div>
                                        <div class="uk-width-expand uk-hidden@s">
                                            <div class="cms-nhansu-small">CEO  |  Đồng Sáng Lập</div>
                                            <h4 class="cms-name-author">NGUYỄN HUY CƯỜNG</h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="uk-width-expand@s">
                                    <div class="cms-nhansu-small uk-visible@s">CEO  |  Đồng Sáng Lập</div>
                                    <h4 class="cms-name-author uk-visible@s">NGUYỄN HUY CƯỜNG</h4>
                                    <p>Chỗ này là cái chỗ mà anh Cường sẽ nói nói gì đó rất là nhân văn, triết học hay kiểu cao siêu của các bậc thánh nhân để cho thiên hạ thấy mình rất là tài giỏi và thành công</p>
                                </div>
                            </div>
                        </div>
                    </li>
                <?php } ?>
            </ul>

            <a class="uk-position-center-left uk-position-small uk-hidden-hover" href="#" uk-slidenav-previous uk-slider-item="previous"></a>
            <a class="uk-position-center-right uk-position-small uk-hidden-hover" href="#" uk-slidenav-next uk-slider-item="next"></a>

            <ul class="uk-slider-nav cms-nav-dot uk-dotnav uk-flex-center uk-margin"></ul>

        </div>
    </div>
</div>
<div class="uk-section-small">
    <div class="uk-container uk-container-small uk-margin-medium">
        <h2 class="cms-title uk-text-center">Dịch vụ của chúng tôi</h2>
        <p class="cms-desc uk-text-center">
            Click Media & Seo là một trong những công ty về lĩnh vực Media và Seo <br>
            tốt nhất Việt Nam hiện nay. Chúng tôi chuyên cung cấp các giải pháp <br>
            hàng đầu về bán hàng, marketing và quản lý vận hành trong kinh doanh
        </p>
    </div>
    <div class="uk-container uk-container-small">
        <div class="uk-child-width-1-2 uk-child-width-1-3@m uk-grid-small uk-grid-match" uk-grid>
            <?php
            $data = array(
                array(
                    'img' => 'imgs/dichvu/tham-dinh-website.png',
                    'title' => 'Thẩm định Website',
                ),
                array(
                    'img' => 'imgs/dichvu/tu-van-chien-luoc-seo-web.png',
                    'title' => 'Tư vấn chiến lược SEO website',
                ),
                array(
                    'img' => 'imgs/dichvu/seo-train-in-house.png',
                    'title' => 'SEO training in-house',
                ),
                array(
                    'img' => 'imgs/dichvu/seo-group.png',
                    'title' => 'SEO Keyword',
                ),
                array(
                    'img' => 'imgs/dichvu/toi-uu-luong-truy-cap-web.png',
                    'title' => 'Tối ưu lưu lượng truy cập website',
                ),
                array(
                    'img' => 'imgs/dichvu/thiet-ke-xay-dung-web.png',
                    'title' => 'Thiết kế và xây dựng website',
                ),
                array(
                    'img' => 'imgs/dichvu/quang-cao-ads.png',
                    'title' => 'Quảng cáo trên các nền tảng',
                ),
                array(
                    'img' => 'imgs/dichvu/viral-content.png',
                    'title' => 'Viral Content',
                ),
                array(
                    'img' => 'imgs/dichvu/social-media.png',
                    'title' => 'Social Media',
                ),
            );
            foreach ($data as $k1 => $v1){ ?>
                <div>
                    <div class="uk-card uk-card-hover cms-card1 uk-card-default uk-text-center">
                        <div class="uk-grid-small uk-flex-middle" uk-grid>
                            <div class="uk-width-auto">
                                <img class="cms-service-img" src="<?= $v1['img'] ?>" alt="">
                            </div>
                            <div class="uk-width-expand">
                                <h5 class="cms-service-title"><?= $v1['title'] ?></h5>
                            </div>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</div>
<div class="uk-section-small">
    <div class="uk-container uk-container-small">
        <h2 class="cms-title uk-text-center">Đối tác của chúng tôi</h2>
        <p class="cms-desc uk-text-center">
            Đã có nhiều công ty và doanh nghiệp tin tưởng chúng tôi và chọn CMS <br>
            để cộng tác trong các dự án truyền thông lớn - nhỏ của họ.
        </p>
    </div>
    <div class="uk-container">

    </div>
</div>
<?php include "footer.php"; ?>