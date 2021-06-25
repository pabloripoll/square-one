@include('writer._components.base-top')

<!-- MIDDLE -->
<section id="middle">

    <!-- page title -->
    <header id="page-header">
        <h1>Create new blog post</h1>
        <ol class="breadcrumb">
            <li><a href="#">{{ $data->path->module }}</a></li>
            <li class="active">{{ $data->path->section }}</li>
        </ol>
    </header>
    <!-- /page title -->

    <div id="content" class="padding-20">
        <div class="panel panel-default">
            <div class="panel-heading panel-heading-transparent">
                <strong>Title</strong>
            </div>
            <div class="panel-body">
            <input type="text" class="form-control" placeholder="type...">
            </div>
        </div>
        <div class="panel panel-default">
            <div class="panel-heading panel-heading-transparent">
                <strong>Description</strong>
            </div>
            <div class="panel-body">
                <textarea class="summernote form-control" data-height="200" data-lang="en-US"></textarea>
            </div>
        </div>
        <div class="panel panel-default">
            <div class="panel-body">
                <a href="../posts" type="button" class="btn btn-primary mt-40 ml-40">Cancel</a>
                <button type="button" class="btn btn-success mt-40">Create Post</button>
            </div>
        </div>
    </div>

</section>
<!-- /MIDDLE -->

@include('writer._components.base-bottom')