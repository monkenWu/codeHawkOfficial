<section id="<?=$id?>" class="ts-block" data-bg-image="assets/img/bg-shapes-03.png" data-bg-size="inherit" data-bg-position="left" data-bg-repeat="no-repeat">
    <div class="container">
        <div class="row">
            <div class="col-md-7 col-xl-7 text-center">
                <div class="position-relative">
                    <figure class="p-5" data-animate="ts-zoomInShort" data-delay="0.1s">
                        <img src="assets/img/feature.png" class="mw-100" alt="">
                    </figure>
                    <figure class="position-absolute ts-bottom__0 ts-left__0 ts-z-index__2" data-animate="ts-zoomInShort" data-delay="0.2s">
                        <img src="assets/img/feature-logo.png" class="mw-100 d-inline-block " alt="">
                    </figure>
                </div>
            </div>
            <!--end col-xl-7-->
            <div class="col-md-5 col-xl-5" data-animate="ts-fadeInUp" data-offset="100">
                <div class="ts-title">
                    <h2><?=$lan["title"]?></h2>
                </div>
                <!--end ts-title-->
                <p><?=$lan["intro"]?></p>
                <!--features list-->
                <ul class="list-unstyled ts-list-divided">
                    <?php foreach ($lan["collapse"] as $key => $value): ?>
                        <li>
                            <a href="#feature-<?=$key?>" class="ts-font-color__black" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="feature-<?=$key?>">
                                <h6 class="my-2"><?=$value["title"]?></h6>
                            </a>
                            <div class="collapse" id="feature-<?=$key?>">
                                <p><?=$value["content"]?></p>
                            </div>
                            <!--end collapse-->
                        </li>
                    <?php endforeach; ?>
                </ul>
                <!--end features list-->
            </div>
            <!--end col-xl-5-->
        </div>
        <!--end row-->
    </div>
    <!--end container-->
</section>