@extends('layouts.admin')

@section('content')
<div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            @include('partials.header', ['name' => 'Categories'])
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
                                <a href="{{ route('categories.create') }}" class="btn btn-success">Creat new</a>
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
                                        @foreach ($categories as $category)
                                        <tr>
                                            
                                            <td>{{ $category->id }}</td>
                                            <td>{{ $category->name }}</td>                                        
                                            <td><a href="{{ route('categories.edit', compact('category'))}}" class="btn btn-info">EDIT</a>
                                                <form action="{{ route('categories.destroy', compact('category'))}}" method="POST">
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