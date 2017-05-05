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

		 {!! Form::open(array('url'=>'nzuriba/save?return='.$return, 'class'=>'form-horizontal','files' => true , 'parsley-validate'=>'','novalidate'=>' ')) !!}
<div class="col-md-12">
						<fieldset><legend> riba-nalog-user</legend>
				{!! Form::hidden('riba_id', $row['riba_id']) !!}					
									  <div class="form-group  " >
										<label for="Higijenski Uslovi" class=" control-label col-md-4 text-left"> Higijenski Uslovi </label>
										<div class="col-md-7">
										  <input  type='text' name='higijenski_uslovi' id='higijenski_uslovi' value='{{ $row['higijenski_uslovi'] }}' 
						     class='form-control ' /> 
										 </div> 
										 <div class="col-md-1">
										 	
										 </div>
									  </div> 					
									  <div class="form-group  " >
										<label for="Ciscenje" class=" control-label col-md-4 text-left"> Ciscenje </label>
										<div class="col-md-7">
										  <input  type='text' name='ciscenje' id='ciscenje' value='{{ $row['ciscenje'] }}' 
						     class='form-control ' /> 
										 </div> 
										 <div class="col-md-1">
										 	
										 </div>
									  </div> 					
									  <div class="form-group  " >
										<label for="Prebacivanje Ribe" class=" control-label col-md-4 text-left"> Prebacivanje Ribe </label>
										<div class="col-md-7">
										  <input  type='text' name='prebacivanje_ribe' id='prebacivanje_ribe' value='{{ $row['prebacivanje_ribe'] }}' 
						     class='form-control ' /> 
										 </div> 
										 <div class="col-md-1">
										 	
										 </div>
									  </div> 					
									  <div class="form-group  " >
										<label for="Uslovi" class=" control-label col-md-4 text-left"> Uslovi </label>
										<div class="col-md-7">
										  <input  type='text' name='uslovi' id='uslovi' value='{{ $row['uslovi'] }}' 
						     class='form-control ' /> 
										 </div> 
										 <div class="col-md-1">
										 	
										 </div>
									  </div> 					
									  <div class="form-group  " >
										<label for="Tretman" class=" control-label col-md-4 text-left"> Tretman </label>
										<div class="col-md-7">
										  <input  type='text' name='tretman' id='tretman' value='{{ $row['tretman'] }}' 
						     class='form-control ' /> 
										 </div> 
										 <div class="col-md-1">
										 	
										 </div>
									  </div> 					
									  <div class="form-group  " >
										<label for="Hranjenje" class=" control-label col-md-4 text-left"> Hranjenje </label>
										<div class="col-md-7">
										  <input  type='text' name='hranjenje' id='hranjenje' value='{{ $row['hranjenje'] }}' 
						     class='form-control ' /> 
										 </div> 
										 <div class="col-md-1">
										 	
										 </div>
									  </div> 					
									  <div class="form-group  " >
										<label for="Dnevnik Radova" class=" control-label col-md-4 text-left"> Dnevnik Radova </label>
										<div class="col-md-7">
										  <input  type='text' name='dnevnik_radova' id='dnevnik_radova' value='{{ $row['dnevnik_radova'] }}' 
						     class='form-control ' /> 
										 </div> 
										 <div class="col-md-1">
										 	
										 </div>
									  </div> 					
									  <div class="form-group  " >
										<label for="Dorast 5g" class=" control-label col-md-4 text-left"> Dorast 5g </label>
										<div class="col-md-7">
										  <input  type='text' name='dorast_5g' id='dorast_5g' value='{{ $row['dorast_5g'] }}' 
						     class='form-control ' /> 
										 </div> 
										 <div class="col-md-1">
										 	
										 </div>
									  </div> 					
									  <div class="form-group  " >
										<label for="Prodaja" class=" control-label col-md-4 text-left"> Prodaja </label>
										<div class="col-md-7">
										  
					<label class='radio radio-inline'>
					<input type='radio' name='prodaja' value ='yes'  @if($row['prodaja'] == 'yes') checked="checked" @endif > yes </label>
					<label class='radio radio-inline'>
					<input type='radio' name='prodaja' value ='no'  @if($row['prodaja'] == 'no') checked="checked" @endif > no </label> 
										 </div> 
										 <div class="col-md-1">
										 	
										 </div>
									  </div> 					
									  <div class="form-group  " >
										<label for="Uzgoj Ribe" class=" control-label col-md-4 text-left"> Uzgoj Ribe </label>
										<div class="col-md-7">
										  <input  type='text' name='uzgoj_ribe' id='uzgoj_ribe' value='{{ $row['uzgoj_ribe'] }}' 
						     class='form-control ' /> 
										 </div> 
										 <div class="col-md-1">
										 	
										 </div>
									  </div> 					
									  <div class="form-group  " >
										<label for="Status" class=" control-label col-md-4 text-left"> Status </label>
										<div class="col-md-7">
										  <input  type='text' name='status' id='status' value='{{ $row['status'] }}' 
						     class='form-control ' /> 
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
					<button type="button" onclick="location.href='{{ URL::to('nzuriba?return='.$return) }}' " class="btn btn-warning btn-sm "><i class="icon-cancel-circle2 "></i>  {{ Lang::get('core.sb_cancel') }} </button>
					</div>	  
			
				  </div> 
		 
		 {!! Form::close() !!}
	</div>
</div>		 
</div>	
</div>			 
   <script type="text/javascript">
	$(document).ready(function() { 
		
		 

		$('.removeMultiFiles').on('click',function(){
			var removeUrl = '{{ url("nzuriba/removefiles?file=")}}'+$(this).attr('url');
			$(this).parent().remove();
			$.get(removeUrl,function(response){});
			$(this).parent('div').empty();	
			return false;
		});		
		
	});
	</script>		 
@stop