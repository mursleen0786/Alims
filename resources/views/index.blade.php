@extends('layouts.header')


@section('content')
<!---------------- carousel slide --------------->
<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="{{asset('images/18.jpg')}}" height="650" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="{{asset('images/13.jpg')}}" height="650" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="{{asset('images/21.jpg')}}" height="650" alt="Third slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

<!--------------- jumbotron ------------->
<div class="jumbotron">
	<div class="container">
		<h1 class="display-4">What is The Alim?</h1>
		 <p class="lead">Alim.org is a social network focused around various Islamic content, including tafsir, hadith, Muslim history, Quran translations, Quran recitations, Islamic references and provides tools for studying Islam and memorizing the Quran. Explore the new unique and institutive way to discuss and share Islamic knowledge!</p>
		  <hr class="my-4">
		<h2>The Meaning of Islam</h2>
		  <p>ISLAM is derived from the Arabic root "SALEMA": peace, purity, submission and obedience. In the religious sense, Islam means submission to the will of God and obedience to His law.<br>
		  Everything and every phenomenon in the world, other than man is administered TOTALLY by God-made laws i.e. they are obedient to God and submissive to His laws i.e. they are in the STATE OF ISLAM. Man possesses the quality of intelligence and choice, thus he is invited to submit to the good will of God and obey His law ie. become a Muslim. Submission to the good will of God, together with obedience to His beneficial law, i.e. becoming a Muslim is the best safeguard for man's peace and harmony.</p>
		    <a class="btn btn-primary btn-success" href="" role="button">Learn more</a>
		  </p>
	</div>
</div>

<!--------------- card  ------------->
<div class="container">
	<div class="card-deck">
	  <div class="card">
	    <img class="card-img-top" src="{{asset('images/quran1.jpg')}}" alt="">
	    <div class="card-body">
	      <h3 class="float-text text-Black">Quran</h3>
	      <p class="card-text">Listen to your favorite Qaris, specify repetition sequences, read comparisons of translations, view Tafseer for specific Ayah, change Arabic fonts and participate in discussions pertaining to specific Ayah or Surah.</p>
	    </div>
	  </div>
	  <div class="card">
	    <img class="card-img-top" src="{{asset('images/quran2.jpg')}}" alt="">
	    <div class="card-body">
	      <h3 class="float-text text-Black">Hadith</h3>
	      <p class="card-text">A collection of traditions containing sayings of the prophet Muhammad which, with accounts of his daily practice (the Sunna), constitute the major source of guidance for Muslims apart from the holy Qur'an.</p>
	    </div>
	  </div>
	  <div class="card">
	    <img class="card-img-top" src="{{asset('images/quran3.jpg')}}" alt="">
	    <div class="card-body">
	      <h3 class="float-text text-Black">History</h3>
	      <p class="card-text">Find out what happened during the life of the Khulfae Rashidun and other time periods throughout Islam's vast history. Read fascinating biography of the companions of the Prophet and learn how to apply those to your daily life.</p>
	    </div>
	  </div>
	</div>
</div>
<br>
<!---------------End card img ------------->


<!--------------- online quran learning ------------->
<section class="container" style="margin-top: 30px;">
  <div class="title h1 text-center">Online Quran learning</div>
  <div  class="row" style="margin-top: 20px;">
  <div class="col-6">
    <h4 >Alim Live Is The Best platform For Learning Quran</h4>
      <p>
        Learning Quran is obligatory for all Muslims. In order to improve your recitation, the I.T. department of Dawat-e-Islami, undoubtedly a non-political and non-profit organization presents its application named Madani Qaidah for its learners. It is easy to access and has a user-friendly interface. By having Madani Qaida mobile application, one can easily learn the Quran because it provides tajweed rules to its learners. It has a number of features such as video lessons, audio lessons, important notes and question answers and so on. Furthermore, it is bilingual so most people can understand and improve their Quran pronunciation. Certainly, this offline application is particularly intended for those who are facing difficulties while reciting the Quran
      </p>
      <p >We offer extensive Arabic courses for all levels and all purposes. Arabic courses are included reading, writing, speaking, comprehension and understanding the Quran.</p>
      <br>
      <a href="{{ route('contact')}}" class="mt-auto btn btn-success  ">Read More</a>
  </div>
  <div class="col-6">
    <img src="{{asset('images/102.jpg')}}" style="margin-top: 40px;">
  </div>
</div>
</section>
  
<!------------testimonial------------>
<div class="index-body">
  <div class="container" style="padding-top: 40px;">
  	<div class="text-center mb-5">
          <h1 class=" font-weight-bold">TESTINOMIALS</h1>
          <p class="font-italic text-muted mb-0">Most Trusted Online Quran Learning.</p>
          <p class="font-italic text-muted">Snippet By <a href="https://myaccount.google.com/?utm_source=OGB&tab=mk&utm_medium=app" class="text-muted">
              <u>Muhammad Mursleen</u></a>
          </p>
      </div>
      <div class="container">
  	   <div class="card-deck">
  		    <div class="card text-center">
  			    <img class="card-img-top" src="images/testimonial-icon2.png" width="20" height="170" alt="Card image cap">
  			    <div class="card-body">
  			      <h3 class="float-text text-Black">Alim Live</h3>
  			      <p class="card-text">This site has helped me tremendously in learning the tafsir and achieving high scores in my Quran exam.Definitely this website is a wonderful medium to educate youngsters on Qura'n thoughts.</p>
  		      </div>
  	</div>
  	  <div class="card text-center">
  	    <img class="card-img-top" src="images/testimonial-icon2.png" width="20" height="170" alt="Card image cap">
  	    <div class="card-body">
  	      <h3 class="float-text text-Black">Alim Live</h3>
  	      <p class="card-text">This is really a helpful post. During my practice I met a lot of young people who require this kind of assistance.Definitely this website is a wonderful medium to educate youngsters on Qura'n thoughts.  Thank you. </p>
  	    </div>
  	  </div>
  	  <div class="card text-center">
  	    <img class="card-img-top" src="images/testimonial-icon2.png" width="20" height="170" alt="Card image cap">
  	    <div class="card-body">
  	      <h3 class="float-text text-Black">Alim Live</h3>
  	      <p class="card-text">This site is just amazing and a very powerful tool for someone looking to "brush up" on the fundamentals of Qura'n and someone interested in a structured or even a solid knowledge on the same. .</p>
  	    </div>
  	  </div>
  	</div>
  </div>
</div>
</div>
@endsection()
