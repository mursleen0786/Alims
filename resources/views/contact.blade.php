@extends('layouts.header')

@section('content')
			<div class="container" style="padding-bottom: 40px; ">
			   	<h2 class="card-title" style="text-align: center; padding-top: 40px;">Online Arabic Classes</h2>
					<h5 class="card-text" style="padding-top: 70px;">We have a vast variety of Quran Reading Courses, Hifzul Quran Courses, Tajweedul Quran Courses, Islamic Studies Courses, Arabic language Courses and Urdu language courses so you can have the choice to choose the course which is best suited to your individual needs. We also provide certificate if a student completes any of our courses. Our online courses are offered for all over the year and you do not have to wait to join your desirable courses.<br><br>

					Ijaazah Courses for Ladies
					Alim Live offers special Ijaazah courses for Ijaazah in Hifzul Quran & Ijaazah in Qira’t & Tajweed. These courses are offered for ladies with highly qualified and experienced teachers from Jamiatul Azhar (Al-Azhar University). This course is offered online for the adults who are already able to read the Quran and want Ijaazah or want to learn quran With Tajweed or more styles of Qira’t.Female teachers who deliver online Quran courses for ladies are highly qualified in Qirat and Tajweed. They have degree in Qira’t & Tajweed.</h5>
		    </div>
<div style="padding-bottom: 40px; padding-top: 40px;background: linear-gradient(to right,#16222A,#002c5b); color: white;">
	<div class="container text-center" >
		<div class="row">
			<div class="col-lg-12">
				<h1><b>Contact Us</b></h1>
			</div>
		</div>
	</div>
	<br/>
	<section class="container-fluid">
		<div class="row">
	    	<div class="col-lg-6">
		      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3402.7658726242576!2d74.33979171462974!3d31.475626056500555!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39190427235b67ed%3A0x80c2ec5016353f7d!2sInformation%20Technology%20University%20(ITU)!5e0!3m2!1sen!2s!4v1608353349034!5m2!1sen!2s" width="100%" height="500" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
		    </div>
			<div class="col-lg-6">
		      	<form action="{{route('store.contact')}}" method="post">
		      		@csrf
		       	    <div class="form-group">
			          <label>Name</label>
			          <input type="text" placeholder="Write name here" class="form-control" name="cname" required="">
			        </div>
			        <div class="form-group">
			          <label>Email</label>
			          <input type="text" placeholder="email here" class="form-control" name="cemail" required="">
			        </div>
			        <div class="form-group">
			          <label>Courses</label>
				         <select name="services" class="form-control" >
				         <option>Select Class</option>
				         <option>Tajweed</option>
				         <option>Nazra</option>
				         <option>Arabic</option>
				         </select>
			        </div>
			        <div class="form-group">
			          <label>Write message here</label>
			          <textarea class="form-control" name="message" rows="5" cols="10"></textarea> </div>
			        <div class="form-group">
		          <button class="btn btn-success">Send Message</button>
		        </form>  
		    </div>
	    </div>
	</section>
</div>
@endsection
