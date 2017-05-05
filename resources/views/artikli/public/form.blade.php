

		 {!! Form::open(array('url'=>'artikli/savepublic', 'class'=>'form-horizontal','files' => true , 'parsley-validate'=>'','novalidate'=>' ')) !!}

	@if(Session::has('messagetext'))
	  
		   {!! Session::get('messagetext') !!}
	   
	@endif
	<ul class="parsley-error-list">
		@foreach($errors->all() as $error)
			<li>{{ $error }}</li>
		@endforeach
	</ul>		


<div class="col-md-12">
						<fieldset><legend> Artikli</legend>
									
									  <div class="form-group  " >
										<label for="Artikl Id" class=" control-label col-md-4 text-left"> Artikl Id </label>
										<div class="col-md-7">
										  <input  type='text' name='artikl_id' id='artikl_id' value='{{ $row['artikl_id'] }}' 
						     class='form-control ' /> 
										 </div> 
										 <div class="col-md-1">
										 	
										 </div>
									  </div> 					
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
										<label for="Detalji" class=" control-label col-md-4 text-left"> Detalji </label>
										<div class="col-md-7">
										  <input  type='text' name='detalji' id='detalji' value='{{ $row['detalji'] }}' 
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
										<label for="Trademark Id" class=" control-label col-md-4 text-left"> Trademark Id </label>
										<div class="col-md-7">
										  <input  type='text' name='trademark_id' id='trademark_id' value='{{ $row['trademark_id'] }}' 
						     class='form-control ' /> 
										 </div> 
										 <div class="col-md-1">
										 	
										 </div>
									  </div> 					
									  <div class="form-group  " >
										<label for="Unit Id" class=" control-label col-md-4 text-left"> Unit Id </label>
										<div class="col-md-7">
										  <input  type='text' name='unit_id' id='unit_id' value='{{ $row['unit_id'] }}' 
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
