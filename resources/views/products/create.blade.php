@extends('products.base')

@section('main')
    <div class="breadcrumbs">
        <div class="breadcrumbs-inner">
            <div class="row m-0">
                <div class="col-sm-4">
                    <div class="page-header float-left">
                        <div class="page-title">
                            <h1>Dashboard</h1>
                        </div>
                    </div>
                </div>
                <div class="col-sm-8">
                    <div class="page-header float-right">
                        <div class="page-title">
                            <ol class="breadcrumb text-right">
                                <li><a href="#">Dashboard</a></li>
                                <li><a href="#">Table</a></li>
                                <li class="active">Data table</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="content">
        <div class="animated fadeIn">
            <div class="row">

                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <strong class="card-title">Create product</strong>
                        </div>
                        <div class="card-body">
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div><br />
                @endif
                <form method="post" action="{{route('productstore')}}">
                    @csrf
                    <div class="form-group col-md-6">
                        <label for="name">Product Name:</label>
                        <input type="text" class="form-control" name="name"/>
                    </div>

                    <div class="form-group col-md-6">
                        <label for="price">Price</label>
                        <input type="number" class="form-control" name="price"/>
                    </div>

                    <div class="form-group col-md-6">
                        <label for="description">Description:</label>
                        <textarea cols="4" rows="4" class="form-control" name="description"></textarea>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="img">Img:</label>
                        <input type="text" class="form-control" name="img"/>
                    </div>

                    <button type="submit" class="btn btn-primary-outline">Add Product</button>
                </form>
                        </div>
                    </div>
                </div>


            </div>
        </div><!-- .animated -->
    </div>
@endsection
