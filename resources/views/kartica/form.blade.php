@extends('layouts.app')

@section('content')

  <div class="page-content row">
    <!-- Page header -->

 
 	<div class="page-content-wrapper m-t">


<div class="sbox">
	<div class="sbox-title"> 
		<div class="sbox-tools pull-left" >
			<a href="{{ url($pageModule.'?return='.$return) }}" class="tips btn btn-xs btn-default"  title="{{ Lang::get('core.btn_back') }}" ><i class="fa  fa-arrow-left"></i></a> 
		</div>
		<div class="sbox-tools " >
			@if(Session::get('gid') ==1)
				<a href="{{ URL::to('sximo/module/config/'.$pageModule) }}" class="tips btn btn-xs btn-default" title=" {{ Lang::get('core.btn_config') }}" ><i class="fa  fa-ellipsis-v"></i></a>
			@endif 			
		</div> 

	</div>
	<div class="sbox-content"> 	

		<ul class="parsley-error-list">
			@foreach($errors->all() as $error)
				<li>{{ $error }}</li>
			@endforeach
		</ul>	

		 {!! Form::open(array('url'=>'kartica/save?return='.$return, 'class'=>'form-horizontal','files' => true , 'parsley-validate'=>'','novalidate'=>' ')) !!}
<div class="col-md-12">
						<fieldset><legend> Kartica</legend>
									
									  <div class="form-group  " >
										<label for="Id" class=" control-label col-md-4 text-left"> Id </label>
										<div class="col-md-7">
										  <input  type='text' name='id' id='id' value='{{ $row['id'] }}' 
						     class='form-control ' /> 
										 </div> 
										 <div class="col-md-1">
										 	
										 </div>
									  </div> 					
									  <div class="form-group  " >
										<label for="Skladiste" class=" control-label col-md-4 text-left"> Skladiste </label>
										<div class="col-md-7">
										  <select name='storage_id' rows='5' id='storage_id' class='select2 '   ></select> 
										 </div> 
										 <div class="col-md-1">
										 	
										 </div>
									  </div> 					
									  <div class="form-group  " >
										<label for="Artikl " class=" control-label col-md-4 text-left"> Artikl  </label>
										<div class="col-md-7">
										  <select name='artikl_id' rows='5' id='artikl_id' class='select2 '   ></select> 
										 </div> 
										 <div class="col-md-1">
										 	
										 </div>
									  </div> 					
									  <div class="form-group  " >
										<label for="Proizvodjac" class=" control-label col-md-4 text-left"> Proizvodjac </label>
										<div class="col-md-7">
										  <select name='trademark_id' rows='5' id='trademark_id' class='select2 '   ></select> 
										 </div> 
										 <div class="col-md-1">
										 	
										 </div>
									  </div> 					
									  <div class="form-group  " >
										<label for="Jedinica" class=" control-label col-md-4 text-left"> Jedinica </label>
										<div class="col-md-7">
										  <select name='unit_id' rows='5' id='unit_id' class='select2 '   ></select> 
										 </div> 
										 <div class="col-md-1">
										 	
										 </div>
									  </div> 					
									  <div class="form-group  " >
										<label for="Kod" class=" control-label col-md-4 text-left"> Kod </label>
										<div class="col-md-7">
										  <input  type='text' name='code' id='code' value='{{ $row['code'] }}' 
						     class='form-control ' /> 
										 </div> 
										 <div class="col-md-1">
										 	
										 </div>
									  </div> 					
									  <div class="form-group  " >
										<label for="Datum" class=" control-label col-md-4 text-left"> Datum </label>
										<div class="col-md-7">
										  
				<div class="input-group m-b" style="width:150px !important;">
					{!! Form::text('date', $row['date'],array('class'=>'form-control datetime', 'style'=>'width:150px !important;')) !!}
					<span class="input-group-addon"><i class="fa fa-calendar"></i></span>
				</div>
				 
										 </div> 
										 <div class="col-md-1">
										 	
										 </div>
									  </div> 					
									  <div class="form-group  " >
										<label for="In" class=" control-label col-md-4 text-left"> In </label>
										<div class="col-md-7">
										  <input  type='text' name='in' id='in' value='{{ $row['in'] }}' 
						     class='form-control ' /> 
										 </div> 
										 <div class="col-md-1">
										 	
										 </div>
									  </div> 					
									  <div class="form-group  " >
										<label for="Out" class=" control-label col-md-4 text-left"> Out </label>
										<div class="col-md-7">
										  <input  type='text' name='out' id='out' value='{{ $row['out'] }}' 
						     class='form-control ' /> 
										 </div> 
										 <div class="col-md-1">
										 	
										 </div>
									  </div> 					
									  <div class="form-group  " >
										<label for="Trenutno Stanje" class=" control-label col-md-4 text-left"> Trenutno Stanje </label>
										<div class="col-md-7">
										  <textarea name='current_state' rows='5' id='current_state' class='form-control '  
				           >{{ $row['current_state'] }}</textarea> 
										 </div> 
										 <div class="col-md-1">
										 	
										 </div>
									  </div> 					
									  <div class="form-group  " >
										<label for="Detalji" class=" control-label col-md-4 text-left"> Detalji </label>
										<div class="col-md-7">
										  <textarea name='note' rows='5' id='note' class='form-control '  
				           >{{ $row['note'] }}</textarea> 
										 </div> 
										 <div class="col-md-1">
										 	
										 </div>
									  </div> 					
									  <div class="form-group  " >
										<label for="Minimalna Kolicina" class=" control-label col-md-4 text-left"> Minimalna Kolicina </label>
										<div class="col-md-7">
										  <textarea name='min_quantity' rows='5' id='min_quantity' class='form-control '  
				           >{{ $row['min_quantity'] }}</textarea> 
										 </div> 
										 <div class="col-md-1">
										 	
										 </div>
									  </div> </fieldset>
			</div>
			
			

		
			<div style="clear:both"></div>	
				
					
				  <div class="form-group">
					<label class="col-sm-4 text-right">&nbsp;</label>
					<div class="col-sm-8">	
					<button type="submit" name="apply" class="btn btn-info btn-sm" ><i class="icon-checkmark-circle2"></i> {{ Lang::get('core.sb_apply') }}</button>
					<button type="submit" name="submit" class="btn btn-primary btn-sm" ><i class="icon-bubble-check"></i> {{ Lang::get('core.sb_save') }}</button>
					<button type="button" onclick="location.href='{{ URL::to('kartica?return='.$return) }}' " class="btn btn-warning btn-sm "><i class="icon-cancel-circle2 "></i>  {{ Lang::get('core.sb_cancel') }} </button>
					</div>	  
			
				  </div> 
		 
		 {!! Form::close() !!}
	</div>
</div>		 
</div>	
</div>			 
   <script type="text/javascript">
	$(document).ready(function() { 
		
		
		$("#storage_id").jCombo("{!! url('kartica/comboselect?filter=storage_types:id:type') !!}",
		{  selected_value : '{{ $row["storage_id"] }}' });
		
		$("#artikl_id").jCombo("{!! url('kartica/comboselect?filter=skladiste_artikl:artikl_id:ime_artikla') !!}",
		{  selected_value : '{{ $row["artikl_id"] }}' });
		
		$("#trademark_id").jCombo("{!! url('kartica/comboselect?filter=skladiste_trademark:id:name') !!}",
		{  selected_value : '{{ $row["trademark_id"] }}' });
		
		$("#unit_id").jCombo("{!! url('kartica/comboselect?filter=skladiste_unit:id:name') !!}",
		{  selected_value : '{{ $row["unit_id"] }}' });
		 

		$('.removeMultiFiles').on('click',function(){
			var removeUrl = '{{ url("kartica/removefiles?file=")}}'+$(this).attr('url');
			$(this).parent().remove();
			$.get(removeUrl,function(response){});
			$(this).parent('div').empty();	
			return false;
		});		
		
	});
	</script>		 
@stop