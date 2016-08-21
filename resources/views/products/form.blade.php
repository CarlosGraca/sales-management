@include('shared.alert')
<div class="row">
  <div class="col-md-3">
     {!! Form::label('name','Name:') !!}
    {!! Form::text('name', null, ['class'=>'form-control']) !!}
  </div>
  <div class="col-md-3">
     {!! Form::label('description','Description:') !!}
    {!! Form::textarea('description', null, ['class'=>'form-control','rows'=>'2'])  !!}
  </div>
  <div class="col-md-3">
    {!! Form::label('price_cost','Price Cost:') !!}
    {!! Form::text('price_cost', null, ['class'=>'form-control']) !!}
  </div>
</div>
</br>
		<div class="col-xs-3">
			{!! Form::label('name','Name:') !!}
			{!! Form::text('name', null, ['class'=>'form-control']) !!}
		</div>

		<div class="col-xs-3">
			{!! Form::label('description','Description:') !!}
			{!! Form::textarea('description', null, ['class'=>'form-control','rows'=>'2'])  !!}
		</div>
		<div class="col-xs-3">
			{!! Form::label('price_cost','Price Cost:') !!}
			{!! Form::text('price_cost', null, ['class'=>'form-control']) !!}
		</div>
		<div class="col-xs-3">
			{!! Form::label('price_resale','Price Resale:') !!}
			{!! Form::text('price_resale', null, ['class'=>'form-control']) !!}
		</div>
		<div class="col-xs-3">
		    {!! Form::label('category_id','Category:') !!}
		    {!! Form::select('category_id',$categories,$product->category_id, ['class'=>'form-control select2'])  !!}    
		</div>
		<div class="col-xs-3">
		    {!! Form::label('brand_id','Brand:') !!}
		    {!! Form::select('brand_id',$brands,$product->brand_id, ['class'=>'form-control select2'])  !!}    
		</div>
		<div class="col-xs-3">
		    {!! Form::label('measurement_unit_id','Measurement Unit:') !!}
		    {!! Form::select('measurement_unit_id',$units,$product->measurement_unit_id, ['class'=>'form-control select2'])  !!}    
		</div>
		<div class="col-xs-3">
		    {!! Form::label('provider_id','Provider:') !!}
		    {!! Form::select('provider_id',$providers,$product->provider_id, ['class'=>'form-control select2'])  !!}    
		</div>	
<div class="col-xs-3">
	{!! Form::submit($submitButtonText, ['class'=>'btn btn-primary'])  !!}
</div>