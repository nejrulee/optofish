

		 {!! Form::open(array('url'=>'nabavka/savepublic', 'class'=>'form-horizontal','files' => true , 'parsley-validate'=>'','novalidate'=>' ')) !!}

	@if(Session::has('messagetext'))
	  
		   {!! Session::get('messagetext') !!}
	   
	@endif
	<ul class="parsley-error-list">
		@foreach($errors->all() as $error)
			<li>{{ $error }}</li>
		@endforeach
	</ul>		


<div class="col-md-12">
						<fieldset><legend> Nabavka</legend>
									
									  <div class="form-group  " >
										<label for="Nabavka Id" class=" control-label col-md-4 text-left"> Nabavka Id </label>
										<div class="col-md-7">
										  <input  type='text' name='nabavka_id' id='nabavka_id' value='{{ $row['nabavka_id'] }}' 
						     class='form-control ' /> 
										 </div> 
										 <div class="col-md-1">
										 	
										 </div>
									  </div> 					
									  <div class="form-group  " >
										<label for="Artikl" class=" control-label col-md-4 text-left"> Artikl </label>
										<div class="col-md-7">
										  <input  type='text' name='artikl' id='artikl' value='{{ $row['artikl'] }}' 
						     class='form-control ' /> 
										 </div> 
										 <div class="col-md-1">
										 	
										 </div>
									  </div> 					
									  <div class="form-group  " >
										<label for="Kolicina" class=" control-label col-md-4 text-left"> Kolicina </label>
										<div class="col-md-7">
										  <input  type='text' name='kolicina' id='kolicina' value='{{ $row['kolicina'] }}' 
						     class='form-control ' /> 
										 </div> 
										 <div class="col-md-1">
										 	
										 </div>
									  </div> 					
									  <div class="form-group  " >
										<label for="Vrijeme" class=" control-label col-md-4 text-left"> Vrijeme </label>
										<div class="col-md-7">
										  
				<div class="input-group m-b" style="width:150px !important;">
					{!! Form::text('vrijeme', $row['vrijeme'],array('class'=>'form-control datetime', 'style'=>'width:150px !important;')) !!}
					<span class="input-group-addon"><i class="fa fa-calendar"></i></span>
				</div>
				 
										 </div> 
										 <div class="col-md-1">
										 	
										 </div>
									  </div> 					
									  <div class="form-group  " >
										<label for="Proizvodjac" class=" control-label col-md-4 text-left"> Proizvodjac </label>
										<div class="col-md-7">
										  <input  type='text' name='proizvodjac' id='proizvodjac' value='{{ $row['proizvodjac'] }}' 
						     class='form-control ' /> 
										 </div> 
										 <div class="col-md-1">
										 	
										 </div>
									  </div> 					
									  <div class="form-group  " >
										<label for="Detalji" class=" control-label col-md-4 text-left"> Detalji </label>
										<div class="col-md-7">
										  <input  type='text' name='detalji' id='detalji' value='{{ $row['detalji'] }}' 
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
					<button type="submit" name="apply" class="btn btn-info btn-sm" ><i class="fa  fa-check-circle"></i> {{ Lang::get('core.sb_apply') }}</button>
					<button type="submit" name="submit" class="btn btn-primary btn-sm" ><i class="fa  fa-save "></i> {{ Lang::get('core.sb_save') }}</button>
				  </div>	  
			
		</div> 
		 
		 {!! Form::close() !!}
		 
   <script type="text/javascript">
	$(document).ready(function() { 
		
		 

		$('.removeCurrentFiles').on('click',function(){
			var removeUrl = $(this).attr('href');
			$.get(removeUrl,function(response){});
			$(this).parent('div').empty();	
			return false;
		});		
		
	});
	</script>		 
