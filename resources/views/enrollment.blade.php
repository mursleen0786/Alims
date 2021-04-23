@extends('layouts.header')

@section('content')
<div class="container">
	<center>
		<div class="col-lg-6" style="margin-top: 20px;margin-bottom: 20px; padding: 30px; border: solid 20px;">
			<form action="{{route('store.enrollment')}}" method="post">
			      	@csrf
			       	    <div class="form-group">
				          <label>Name</label>
				          <input type="text" placeholder="Write name here" class="form-control" name="ename" required="">
				        </div>
				        <div class="form-group">
				          <label>Email</label>
				          <input type="text" placeholder="email here" class="form-control" name="eemail" required="">
				        </div>
				        <div class="form-group">
				          <label>Phone</label>
				          <input type="text" placeholder="phone here" class="form-control" name="ephone" required="">
				        </div>
				        <div class="form-group">
				          <label>course</label>
				          <input type="text" placeholder="course here" class="form-control" name="ecourse" required="">
				        </div>
				   
			          <button class="btn btn-success">Send Message</button>
			</form>
		</div>	  
	</center>
</div>
@endsection