@include('admin._components.base-top')

<!-- MIDDLE -->
<section id="middle">

    <!-- page title -->
    <header id="page-header">
        <h1>Blog posts list</h1>
        <ol class="breadcrumb">
            <li><a href="#">{{ $data->path->module }}</a></li>
            <li class="active">{{ $data->path->section }}</li>
        </ol>
    </header>
    <!-- /page title -->

    <div id="content" class="padding-20">

        <div class="panel panel-default">
            <div class="panel-body">


                <h6 class="nomargin"> 
                    About 1,280 results <small class="text-success">(0.45 seconds) </small>
                </h6>

                <hr class="nomargin-bottom margin-top-10" />

                <!-- SEARCH RESULTS -->
                <div class="clearfix search-result"><!-- item -->
                    <h4><a href="../blog/post/update">Admin &ndash; fully responsive webapp</a></h4>
                    <small class="text-success">www.stepofweb.com/</small>
                    <p>Maecenas metus nulla, commodo a sodales sed, dignissim pretium nunc. Nam et lacus neque. Ut enim massa, sodales tempor convallis et, iaculis ac massa.</p>
                </div><!-- /item -->

                <div class="clearfix search-result"><!-- item -->
                    <h4><a href="../blog/post/update">Admin &ndash; fully responsive webapp</a></h4>
                    <small class="text-danger">Dashboard / About</small>
                    <p>Maecenas metus nulla, commodo a sodales sed, dignissim pretium nunc. Nam et lacus neque. Ut enim massa, sodales tempor convallis et, iaculis ac massa.</p>
                </div><!-- /item -->

                <div class="clearfix search-result"><!-- item -->
                    <h4><a href="../blog/post/update">Admin &ndash; fully responsive webapp</a></h4>
                    <small class="text-success">Dashboard / Gallery</small>
                    <p>June 29, 2014 - Uploaded by Melisa Doe</p>
                </div><!-- /item -->

                <div class="clearfix search-result"><!-- item -->
                    <h4><a href="../blog/post/update">Admin &ndash; fully responsive webapp</a></h4>
                    <small class="text-success">www.stepofweb.com/</small>
                    <p>Maecenas metus nulla, commodo a sodales sed, dignissim pretium nunc. Nam et lacus neque. Ut enim massa, sodales tempor convallis et, iaculis ac massa.</p>
                </div><!-- /item -->

                <div class="clearfix search-result"><!-- item -->
                    <h4><a href="../blog/post/update">Admin &ndash; fully responsive webapp</a></h4>
                    <small class="text-success">Dashboard / About</small>
                </div><!-- /item -->

                <div class="clearfix search-result"><!-- item -->
                    <h4><a href="../blog/post/update">Admin &ndash; fully responsive webapp</a></h4>
                    <small class="text-success">www.stepofweb.com/</small>
                    <p>Maecenas metus nulla, commodo a sodales sed, dignissim pretium nunc. Nam et lacus neque. Ut enim massa, sodales tempor convallis et, iaculis ac massa.</p>
                </div><!-- /item -->

                <div class="clearfix search-result"><!-- item -->
                    <h4><a href="../blog/post/update">Admin &ndash; fully responsive webapp</a></h4>
                    <small class="text-success">Dashboard / About</small>
                    <p>Maecenas metus nulla, commodo a sodales sed, dignissim pretium nunc. Nam et lacus neque. Ut enim massa, sodales tempor convallis et, iaculis ac massa.</p>
                </div><!-- /item -->
                <!-- /SEARCH RESULTS -->


                <!-- PAGINATION -->
                <div class="text-center margin-top-20">
                    <ul class="pagination">
                        <li class="disabled"><a href="#">Previous</a></li>
                        <li class="active"><a href="#">1</a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#">4</a></li>
                        <li><a href="#">5</a></li>
                        <li><a href="#">Next</a></li>
                    </ul>
                </div>
                <!-- /PAGINATION -->


            </div>
        </div>

    </div>

</section>
<!-- /MIDDLE -->

@include('admin._components.base-bottom')