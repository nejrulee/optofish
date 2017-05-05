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

		 {!! Form::open(array('url'=>'artikli/save?return='.$return, 'class'=>'form-horizontal','files' => true , 'parsley-validate'=>'','novalidate'=>' ')) !!}
<div class="col-md-12">
						<fieldset><legend> Artikli</legend>
				{!! Form::hidden('artikl_id', $row['artikl_id']) !!}					
									  <div class="form-group  " >
										<label for="Artikl Kod" class=" control-label col-md-4 text-left"> Artikl Kod </label>
										<div class="col-md-7">
										  <input  type='text' name='artikl_kod' id='artikl_kod' value='{{ $row['artikl_kod'] }}' 
						     class='form-control ' /> 
										 </div> 
										 <div class="col-md-1">
										 	
										 </div>
									  </div> 					
									  <div class="form-group  " >
										<label for="Ime Artikla" class=" control-label col-md-4 text-left"> Ime Artikla </label>
										<div class="col-md-7">
										  <input  type='text' name='ime_artikla' id='ime_artikla' value='{{ $row['ime_artikla'] }}' 
						     class='form-control ' /> 
										 </div> 
										 <div class="col-md-1">
										 	
										 </div>
									  </div> 					
									  <div class="form-group  " >
										<label for="Min Kolicina" class=" control-label col-md-4 text-left"> Min Kolicina </label>
										<div class="col-md-7">
										  <input  type='text' name='min_kolicina' id='min_kolicina' value='{{ $row['min_kolicina'] }}' 
						     class='form-control ' /> 
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
										<label for="Detalji" class=" control-label col-md-4 text-left"> Detalji </label>
										<div class="col-md-7">
										  <textarea name='detalji' rows='5' id='detalji' class='form-control '  
				           >{{ $row['detalji'] }}</textarea> 
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
					<button type="button" onclick="location.href='{{ URL::to('artikli?return='.$return) }}' " class="btn btn-warning btn-sm "><i class="icon-cancel-circle2 "></i>  {{ Lang::get('core.sb_cancel') }} </button>
					</div>	  
			
				  </div> 
		 
		 {!! Form::close() !!}
	</div>
</div>		 
</div>	
</div>			 
   <script type="text/javascript">
	$(document).ready(function() { 
		
		
		$("#trademark_id").jCombo("{!! url('artikli/comboselect?filter=skladiste_trademark:id:name') !!}",
		{  selected_value : '{{ $row["trademark_id"] }}' });
		
		$("#unit_id").jCombo("{!! url('artikli/comboselect?filter=skladiste_unit:id:name') !!}",
		{  selected_value : '{{ $row["unit_id"] }}' });
		 

		$('.removeMultiFiles').on('click',function(){
			var removeUrl = '{{ url("artikli/removefiles?file=")}}'+$(this).attr('url');
			$(this).parent().remove();
			$.get(removeUrl,function(response){});
			$(this).parent('div').empty();	
			return false;
		});		
		
	});
	</script>		 
@stop