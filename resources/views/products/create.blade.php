@extends($layout)

@section('main-content')

	{!! Form::open(['route'=>'products.store', 'data-remote'=>$remote,'id'=>'products-form', 'class'=>'form-inline']) !!}
	    @include('products.form', array('submitButtonText'=>'Add Product'))
	{!! Form::close() !!}

@endsection
