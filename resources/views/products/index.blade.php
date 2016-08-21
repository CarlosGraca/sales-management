@extends($layout)

@section('htmlheader_title')
	Lista Produtos
@endsection

@section('contentheader_title')
  Lista Produtos
@endsection

@section('contentheader_description')
  Lista Produtos
@endsection

@section('main-content')
      @include('shared.alert')
      <div class="row">
        <div class="col-lg-12 col-xs-6">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title"></h3>
              <div class="pull-right box-tools">
                  <!--<a href="{{ url('products/create') }}" data-remote="true" class="btn btn-success btn-sm" role="button" data-toggle="tooltip" title="Adicionar">
                       <i class="fa fa-plus"></i>
                  </a>-->
                  {!!link_to_route('products.create','New Product',null,['class'=>'btn btn-primary btn-sm','data-remote'=>'true']) !!}
              </div><!-- /. tools -->
              <hr>
            </div><!-- /.box-header -->

            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                  <tr>
                    <th>Name</th>
                    <th>Category</th>
                    <th>Brand</th>
                    <th>Stock</th>
                    <th>Price Resale</th>                    
                    <th class="actions">Actions</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($products as $product)
                  
                  <tr>
                    <td>{!! link_to_route('products.show', $product->name, $product->id) !!}</td>
                    <td>{{$product->category->name}}</td>
                    <td>{{$product->brand->name}}</td>
                    <td>{{$product->current_inventory}}</td>
                    <td>{{$product->price_resale}}</td>
                    <td class="actions">
                        <a href="{{ route('products.edit',$product->id) }}" class="btn btn-primary btn-xs">      <i class="fa fa-edit"></i>
                        </a>
                        <a href="{{ route('products.edit',$product->id) }}" class="btn btn-warning btn-xs">      <i class="fa fa-remove"></i>
                        </a>                      
                    </td>
                  </tr>
                  @endforeach
                </tbody>
                <tfoot>
                  <tr>
                    <th>Name</th>
                    <th>Category</th>
                    <th>Brand</th>
                    <th>Stock</th>
                    <th>Price Resale</th>
                    
                  </tr>
                </tfoot>
              </table>
            </div><!-- /.box-body -->
          </div><!-- /.box -->
        </div><!-- /.col -->
        
      </div><!-- /.row -->
@endsection
