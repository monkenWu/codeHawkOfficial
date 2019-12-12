<!doctype html>
<html lang="zh-tw">
<head>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="author" content="ThemeStarz">
    <link rel="icon" href="assets/img/favicon.png" sizes="16x16" type="image/png">
    <link rel="icon" href="assets/img/favicon.png" sizes="32x32" type="image/png">
    <link rel="icon" href="assets/img/favicon.png" sizes="48x48" type="image/png">
    <link rel="icon" href="assets/img/favicon.png" sizes="62x62" type="image/png">
    <link rel="icon" href="assets/img/favicon.png" sizes="192x192" type="image/png">
    <?= view('basic/cssLoad') ?>
    <?= view('basic/jsLoad') ?>
    <?= view('basic/basicViewFunctions') ?>

	<title><?= $language["basic"]["webTitle"] ?></title>
</head>
<body data-spy="scroll" data-target=".navbar" class="has-loading-screen" data-bg-parallax="scroll" data-bg-parallax-speed="3">
    <div class="ts-page-wrapper" id="page-top">
        <?= view("basic/header",["lan"  => $language["basic"]]) ?>
        <main id="ts-content">
            <?php
                if($component){
                    foreach ($component as $key => $data) {
                        echo view("{$viewName}/{$data['componentName']}",[
                            "id"   => $data['componentName'],
                            "lan"  => $language[$data['componentName']]
                        ]);
                    }
                }
            ?>
        </main>
        <?= view("basic/footer",["lan"  => $language["basic"]]) ?>
    </div>
    <!--end page-->
    <script>
        if( document.getElementsByClassName("ts-full-screen").length ) {
            document.getElementsByClassName("ts-full-screen")[0].style.height = window.innerHeight + "px";
        }
    </script>
</body>
</html>
