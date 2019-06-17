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
    <div class="uk-container uk-container-small">
        <h2 class="cms-title uk-text-center">Đội ngũ nhân sự</h2>
        <p class="cms-desc uk-text-center">
            Click Media & Seo sở hữu đội ngũ nhân sự giàu kinh nghiệm <br>
            và làm việc với sự tâm huyết cao
        </p>
    </div>
    <div class="uk-container-expand">

    </div>
</div>
<div class="uk-section-small">
    <div class="uk-container uk-container-small">
        <h2 class="cms-title uk-text-center">Dịch vụ của chúng tôi</h2>
        <p class="cms-desc uk-text-center">
            Click Media & Seo là một trong những công ty về lĩnh vực Media và Seo <br>
            tốt nhất Việt Nam hiện nay. Chúng tôi chuyên cung cấp các giải pháp <br>
            hàng đầu về bán hàng, marketing và quản lý vận hành trong kinh doanh
        </p>
    </div>
    <div class="uk-container">

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