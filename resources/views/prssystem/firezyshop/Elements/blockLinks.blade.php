<div id="links_block_left" class="block col-md-4 links hb-animate-element bottom-to-top container">
	<h3 class="h3 title_block hidden-md-down">
					<a href="#" title="go qucikly to  :">go qucikly to  :</a>
			</h3>
	
		<div class="title h3 block_title hidden-lg-up" data-target="#tm_blocklink" data-toggle="collapse">
		<span class="">
							<a href="#" title="go qucikly to  :">go qucikly to  :</a>
					</span>
		<span class="pull-xs-right">
		  <span class="navbar-toggler collapse-icons">
			<i class="material-icons add"></i>
			<i class="material-icons remove"></i>
		  </span>
		</span>
	</div>
	
	<ul id="tm_blocklink" class="block_content ">
		<?php $count=1;
			//dd($storeTypeArr);?>
			@foreach($storeTypeArr as $item) 
			@if($count<10)
			<li>
				<a href="{{url($item['name'])}}" title="{{$item['name']}}">{{$item['name']}}</a></li>
			<li>
			<?php $count++;?>
			@endif
			@endforeach
			</ul>
</div>
