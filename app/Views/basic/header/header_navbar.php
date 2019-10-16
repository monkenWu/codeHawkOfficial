<nav class="navbar navbar-expand-lg navbar-dark fixed-top ts-separate-bg-element" data-bg-color="#1a1360">
    <div class="container">
        <a class="navbar-brand" href="#page-top">
            <img src="assets/img/logo-05-w.png" alt="">
        </a>
        <!--end navbar-brand-->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <!--end navbar-toggler-->
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav ml-auto">
                <a class="nav-item nav-link active ts-scroll" href="#page-top">Home <span class="sr-only">(current)</span></a>
                <?php
                    if($component){
                        foreach ($component as $key => $data) {
                            if($data['navName']){
                                echo "<a class='nav-item nav-link ts-scroll' href='#{$data['componentName']}'>{$data['navName']}</a>";
                            }
                        }
                    }
                ?>
                <a class="nav-item nav-link ts-scroll btn btn-primary btn-sm text-white ml-3 px-3 ts-width__auto" href="#download" target="_blank">造訪Git</a>
            </div>
            <!--end navbar-nav-->
        </div>
        <!--end collapse-->
    </div>
    <!--end container-->
</nav>
