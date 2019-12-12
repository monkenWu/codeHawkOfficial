<section id="<?=$id?>" class="ts-block">
    <div class="container">
        <div class="ts-title">
            <h2><?=$lan["navName"]?></h2>
        </div>
        <!--end ts-title-->
        <div class="row">
            <div class="col-md-5 col-xl-5" data-animate="ts-fadeInUp" data-offset="100">
                <?php foreach ($lan["content"] as $value): ?>
                    <p><?=$value?></p>
                <?php endforeach; ?>
            </div>
            <!--end col-xl-5-->
            <div class="col-md-7 col-xl-7 text-center" data-animate="ts-fadeInUp" data-delay="0.1s" data-offset="100">
                <div class="px-3">
                    <img src="assets/img/SonarQube.png" class="mw-100 ts-shadow__lg ts-border-radius__md" alt="">
                </div>
            </div>
            <!--end col-xl-7-->
        </div>
        <!--end row-->
    </div>
    <!--end container-->
</section>