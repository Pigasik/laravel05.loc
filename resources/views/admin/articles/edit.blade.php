@extends('layouts.admin')

@section('content')
<div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            @include('partials.header', ['name' => 'Articles'])
            <!-- ============================================================== -->
            <!-- End Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <!-- Row -->
                <div class="row">
                    <!-- Column -->
                    <!-- Column -->
                    <!-- Column -->
                    <div class="col-lg-12 col-xlg-12 col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <form action="{{ route('articles.update', ['article' => $article]) }}" method="POST" class="form-horizontal form-material mx-2">
                                    @method('PUT')
                                    @csrf
                                    <div class="form-group">
                                        <label class="col-md-12">Name</label>
                                        <div class="col-md-12">
                                            <input name="name" type="text" class="form-control form-control-line" value="{{ $article->name }}">
                                        </div>
                                    </div>
                                    @if($errors->has('name'))
                                            @foreach ($errors->get('name') as $error)
                                                {{$error}}
                                            @endforeach
                                        @endif
                                    <div class="form-group">
                                        <label class="col-md-12">Content</label>
                                        <div class="col-md-12">
                                            <input name="content" type="text" class="form-control form-control-line" value="{{ $article->content }}">
                                        </div>
                                    </div>
                                    @if($errors->has('content'))
                                            @foreach ($errors->get('content') as $error)
                                                {{$error}}
                                            @endforeach
                                        @endif
                                    <div class="form-group">
                                        <label class="col-md-12">Image</label>
                                        <div class="col-md-12">
                                            <img src="{{ $article->image }}" alt="">
                                            <input type="file" name="image" class="form-control">                                            
                                        </div>
                                    </div>
                                    @if($errors->has('image'))
                                            @foreach ($errors->get('image') as $error)
                                                {{$error}}
                                            @endforeach
                                        @endif  
                                    <div class="form-group">
                                        <div class="col-sm-12">
                                            <button type="submit" class="btn btn-success text-white">Save</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                </div>
                <!-- Row -->
                <!-- ============================================================== -->
                <!-- End PAge Content -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Right sidebar -->
                <!-- ============================================================== -->
                <!-- .right-sidebar -->
                <!-- ============================================================== -->
                <!-- End Right sidebar -->
                <!-- ============================================================== -->
            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
            <footer class="footer text-center">
                All Rights Reserved by Xtreme Admin. Designed and Developed by <a
                    href="https://www.wrappixel.com">WrapPixel</a>.
            </footer>
            <!-- ============================================================== -->
            <!-- End footer -->
            <!-- ============================================================== -->
</div>
@endsection