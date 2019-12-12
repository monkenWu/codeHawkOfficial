<section id="<?= $id ?>" class="ts-block text-center">
    <div class="container">
        <div class="ts-title">
            <h2><?=$lan["title"]?></h2>
        </div>
        <!--end ts-title-->
        <div class="row">
            <div class="col-sm-6 col-md-4 col-xl-4">
                <figure data-animate="ts-fadeInUp">
                    <figure class="icon mb-5 p-2">
                        <img src="assets/img/icon-code.png" alt="">
                        <div class="ts-svg ts-svg__organic-shape-01" data-animate="ts-zoomInShort"></div>
                    </figure>
                    <h4> <?= $lan["iconOneTitle"] ?> </h4>
                    <p> <?= $lan["iconOneContent"] ?> </p>
                </figure>
            </div>
            <!--end col-xl-4-->
            <div class="col-sm-6 col-md-4 col-xl-4">
                <figure data-animate="ts-fadeInUp" data-delay="0.1s">
                    <figure class="icon mb-5 p-2">
                        <img src="assets/img/icon-lcd-chart.png" alt="">
                        <div class="ts-svg ts-svg__organic-shape-02" data-animate="ts-zoomInShort"></div>
                    </figure>
                    <h4> <?= $lan["iconTwoTitle"] ?> </h4>
                    <p> <?= $lan["iconTwoContent"] ?> </p>
                </figure>
            </div>
            <!--end col-xl-4-->
            <div class="col-sm-6 offset-sm-4 col-md-4 offset-md-0 col-xl-4">
                <figure data-animate="ts-fadeInUp" data-delay="0.2s">
                    <figure class="icon mb-5 p-2">
                        <img src="assets/img/icon-open.png" alt="">
                        <div class="ts-svg ts-svg__organic-shape-03" data-animate="ts-zoomInShort"></div>
                    </figure>
                    <h4> <?= $lan["iconThreeTitle"] ?> </h4>
                    <p> <?= $lan["iconThreeContent"] ?> </p>
                </figure>
            </div>
            <!--end col-xl-4-->
        </div>
        <!--end row-->
    </div>
    <!--end container-->
</section>