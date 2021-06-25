@include('writer._components.base-top')

<!-- MIDDLE -->
<section id="middle">

    <!-- page title -->
    <header id="page-header">
        <h1>Dashboard</h1>
        <ol class="breadcrumb">
            <li><a href="#">{{ $data->path->module }}</a></li>
            <li class="active">{{ $data->path->section }}</li>
        </ol>
    </header>
    <!-- /page title -->

    <div id="content" class="padding-20">
        content here...
    </div>
</section>
<!-- /MIDDLE -->

@include('writer._components.base-bottom')