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

		 {!! Form::open(array('url'=>'nzumrijest/save?return='.$return, 'class'=>'form-horizontal','files' => true , 'parsley-validate'=>'','novalidate'=>' ')) !!}
<div class="col-md-12">
						<fieldset><legend> nzumrijest</legend>
				{!! Form::hidden('mrijest_id', $row['mrijest_id']) !!}					
									  <div class="form-group  " >
										<label for="Vrsta" class=" control-label col-md-4 text-left"> Vrsta </label>
										<div class="col-md-7">
										  <input  type='text' name='vrsta' id='vrsta' value='{{ $row['vrsta'] }}' 
						     class='form-control ' /> 
										 </div> 
										 <div class="col-md-1">
										 	
										 </div>
									  </div> 					
									  <div class="form-group  " >
										<label for="Bazen" class=" control-label col-md-4 text-left"> Bazen </label>
										<div class="col-md-7">
										  <input  type='text' name='bazen' id='bazen' value='{{ $row['bazen'] }}' 
						     class='form-control ' /> 
										 </div> 
										 <div class="col-md-1">
										 	
										 </div>
									  </div> 					
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
										<label for="Tretman" class=" control-label col-md-4 text-left"> Tretman </label>
										<div class="col-md-7">
										  <input  type='text' name='tretman' id='tretman' value='{{ $row['tretman'] }}' 
						     class='form-control ' /> 
										 </div> 
										 <div class="col-md-1">
										 	
										 </div>
									  </div> 					
									  <div class="form-group  " >
										<label for="Prebacivanje Matica" class=" control-label col-md-4 text-left"> Prebacivanje Matica </label>
										<div class="col-md-7">
										  <input  type='text' name='prebacivanje_matica' id='prebacivanje_matica' value='{{ $row['prebacivanje_matica'] }}' 
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
										<label for="Omamljivanje" class=" control-label col-md-4 text-left"> Omamljivanje </label>
										<div class="col-md-7">
										  <input  type='text' name='omamljivanje' id='omamljivanje' value='{{ $row['omamljivanje'] }}' 
						     class='form-control ' /> 
										 </div> 
										 <div class="col-md-1">
										 	
										 </div>
									  </div> 					
									  <div class="form-group  " >
										<label for="Mrijest" class=" control-label col-md-4 text-left"> Mrijest </label>
										<div class="col-md-7">
										  <input  type='text' name='mrijest' id='mrijest' value='{{ $row['mrijest'] }}' 
						     class='form-control ' /> 
										 </div> 
										 <div class="col-md-1">
										 	
										 </div>
									  </div> 					
									  <div class="form-group  " >
										<label for="Ispiranje" class=" control-label col-md-4 text-left"> Ispiranje </label>
										<div class="col-md-7">
										  <input  type='text' name='Ispiranje' id='Ispiranje' value='{{ $row['Ispiranje'] }}' 
						     class='form-control ' /> 
										 </div> 
										 <div class="col-md-1">
										 	
										 </div>
									  </div> 					
									  <div class="form-group  " >
										<label for="Lokalni Uzgoj" class=" control-label col-md-4 text-left"> Lokalni Uzgoj </label>
										<div class="col-md-7">
										  <input  type='text' name='lokalni_uzgoj' id='lokalni_uzgoj' value='{{ $row['lokalni_uzgoj'] }}' 
						     class='form-control ' /> 
										 </div> 
										 <div class="col-md-1">
										 	
										 </div>
									  </div> 					
									  <div class="form-group  " >
										<label for="Pakovanje" class=" control-label col-md-4 text-left"> Pakovanje </label>
										<div class="col-md-7">
										  <input  type='text' name='pakovanje' id='pakovanje' value='{{ $row['pakovanje'] }}' 
						     class='form-control ' /> 
										 </div> 
										 <div class="col-md-1">
										 	
										 </div>
									  </div> 					
									  <div class="form-group  " >
										<label for="Inkubator" class=" control-label col-md-4 text-left"> Inkubator </label>
										<div class="col-md-7">
										  <input  type='text' name='inkubator' id='inkubator' value='{{ $row['inkubator'] }}' 
						     class='form-control ' /> 
										 </div> 
										 <div class="col-md-1">
										 	
										 </div>
									  </div> 					
									  <div class="form-group  " >
										<label for="Tretmani" class=" control-label col-md-4 text-left"> Tretmani </label>
										<div class="col-md-7">
										  <input  type='text' name='tretmani' id='tretmani' value='{{ $row['tretmani'] }}' 
						     class='form-control ' /> 
										 </div> 
										 <div class="col-md-1">
										 	
										 </div>
									  </div> 					
									  <div class="form-group  " >
										<label for="Transport" class=" control-label col-md-4 text-left"> Transport </label>
										<div class="col-md-7">
										  <input  type='text' name='transport' id='transport' value='{{ $row['transport'] }}' 
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
					<button type="button" onclick="location.href='{{ URL::to('nzumrijest?return='.$return) }}' " class="btn btn-warning btn-sm "><i class="icon-cancel-circle2 "></i>  {{ Lang::get('core.sb_cancel') }} </button>
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
			var removeUrl = '{{ url("nzumrijest/removefiles?file=")}}'+$(this).attr('url');
			$(this).parent().remove();
			$.get(removeUrl,function(response){});
			$(this).parent('div').empty();	
			return false;
		});		
		
	});
	</script>		 
@stop