@extends('layouts.admin')

@section('content')
<div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="page-breadcrumb">
                <div class="row align-items-center">
                    <div class="col-5">
                        <h4 class="page-title">Dashboard</h4>
                        <div class="d-flex align-items-center">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Library</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- End Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <!-- ============================================================== -->
                <div class="row">
                    <!-- column -->
                    <div class="col-12">
                        <div class="card">
                            
                            <div class="table-responsive">
                                <a href="{{ route('articles.create') }}" class="btn btn-success">Creat new</a>
                                <table class="table v-middle">
                                    <thead>
                                        <tr class="bg-light">
                                            <th class="border-top-0">ID</th>
                                            <th class="border-top-0">Name</th>
                                            <th class="border-top-0">Action</th>
                                            <!-- <th class="border-top-0">Technology</th> -->
                                            <!-- <th class="border-top-0">Tickets</th> -->
                                            <!-- <th class="border-top-0">Sales</th> -->
                                            <!-- <th class="border-top-0">Earnings</th> -->
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($articles as $article)
                                        <tr>
                                            
                                            <td>{{ $article->id }}</td>
                                            <td>{{ $article->name }}</td>                                        
                                            <td><a href="{{ route('articles.edit', compact('article'))}}" class="btn btn-info">EDIT</a>
                                                <form action="{{ route('articles.destroy', compact('article'))}}" method="POST">
                                                    @method('DELETE')
                                                    @csrf
                                                    <button type="submit" class="btn btn-danger">DELETE</button>
                                                </form>                                                
                                            </td>
                                            <!-- <td>
                                                <label class="label label-danger">Angular</label>
                                            </td>
                                            <td>46</td>
                                            <td>356</td>
                                            <td>
                                                <h5 class="m-b-0">$2850.06</h5>
                                            </td> -->
                                        </tr>
                                        @endforeach
                                     </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Table -->                
            </div>
            {{$articles->links()}}
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