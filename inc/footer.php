<footer>
<div class="container-fluid w3-black" id="Contact">
<div class="row">
      <div class="col-sm-4">
	 	<div id="map" style="width: 360px; height: 150px; margin-top: 20px;">
	 	</div>
      </div>      
	  <div class="col-sm-3">
	  	<h4>Karvaan</h4>
        <address>
        	<p align="justify">Shaheed Rajguru College Of Applied Sciences for Women<br>
        	(University of Delhi)<br>
        	Vasundhara Enclave<br>
        	New Delhi-96<br>
        	<br>
        	<span class="glyphicon glyphicon-earphone"></span> 011 -22623503, 22623505<br>
        	<span class="glyphicon glyphicon-envelope"></span> <a href="#">contact@rajguru.du.ac.in</a>
			</p>
        </address>
      </div>
	 
     <div class="col-sm-3">
        <p><a href="#Contact" onClick="document.getElementById('Council').style.display='block'">Contact Student Council</a></p>

	<div id="Council" class="w3-modal">
            <div class="w3-modal-content w3-card-8">
            	<header class="w3-container w3-ana-insignia-blue"> 
             	<span onClick="document.getElementById('Council').style.display='none'" class="w3-closebtn">&times;</span>
             	<h1>--Student Council 2015-16--</h1>
            	</header>
              <div class="w3-container w3-ana-black">
				<h4> Council Members </h4>
				<img src="content/img/council.jpg"" class="img-responsive">								<hr>
				<h4> Contacts</h4>
	            <p>
                                Kaavya Raveendran &nbsp; &nbsp;&nbsp;&nbsp; +918586060380<br>
				Rimi Palmo &nbsp; &nbsp;&nbsp;&nbsp; +919582027748<br>
				Deergha Manocha &nbsp; &nbsp;&nbsp;&nbsp; +918586035957<br>
				Toshita Kalkana &nbsp; &nbsp;&nbsp;&nbsp; +919971858883<br>
				Niharika Bisht &nbsp; &nbsp;&nbsp;&nbsp; +918860715660<br>
				Simran Arora &nbsp; &nbsp;&nbsp;&nbsp; +919650254161<br>
				  
			    </p>
			  </div>
		    </div>
	       </div>				
            <p><a href="#" onClick="document.getElementById('WebTeam').style.display='block'">Contact Web team</a></p>
		   <div id="WebTeam" class="w3-modal">
            <div class="w3-modal-content w3-card-8">
            <header class="w3-container w3-ana-insignia-blue"> 
             <span onClick="document.getElementById('WebTeam').style.display='none'" class="w3-closebtn">&times;</span>
             <h1>--Web Team Members--</h1>
            </header>
            <div class="w3-container w3-ana-black">
				<h4> Team Heads </h4>
				<p>Akanksha Bhardwaj<br>
				Bhanvi Shukla<br>
				</p>
				<hr>
				<h4> Members</h4>
	          <p>
              	Akshara Rai<br>
				Chhavi Jain<br>
				Divya Dua<br>
				Koushikey Chhaparia<br>
				Meenakshi Miglani<br>
				Megha Sahni<br>
				Purva Bhatia<br>
				Reetika Chaudhary <br>  
			</p
			></div>
		 </div>
	  </div>
		
	<p><a href="#" onClick="document.getElementById('EV').style.display='block'">Contact Event Managers</a></p>
		   <div id="EV" class="w3-modal">
            <div class="w3-modal-content w3-card-8">
            	<header class="w3-container w3-ana-insignia-blue"> 
             	<span onClick="document.getElementById('EV').style.display='none'" class="w3-closebtn">&times;</span>
             	<h1>--Event Managers--</h1>
            	</header>
              <div class="w3-container w3-ana-black">
				<h4> Day 1 </h4>
				<p>Saujanya Saxena(BMS 2nd year) &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; +917042060656<br>
				Mansi Manchanda(FT 3rd year) &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; +918860818740<br>
				</p>
				<hr>
				<h4> Day 2</h4>
	            <p>
              	Avreen Chawla(CS 3rd year) &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; +919654063127<br>
				Mansi Shukla(CS 2nd year) &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; +918285426877<br>  
			    </p>
			  </div>
		    </div>
	       </div>
	  </div>
      	  <div class="col-sm-2">

        <p>Stay Up to Date With What's Happening</p>
        <div>
          <a class="btn btn-social-icon btn-twitter" href="www.twitter.com">
		  		<i class="fa fa-twitter"></i>
		  </a>
	  <a class="btn btn-social-icon btn-instagram" href="https://www.instagram.com/karvaan16/">
		  		<i class="fa fa-instagram"></i>
		  </a>
          <a class="btn btn-social-icon btn-google" href="https://plus.google.com/102665457213409576146">
		  		<i class="fa fa-google-plus"></i>
		  </a>
          <a class="btn btn-social-icon btn-facebook" href="https://www.facebook.com/Karvaan2k15/">
		  		<i class="fa fa-facebook"></i>
		  </a>
         </div>
	   </div>
</div>

<div>
<strong>
<center>&copy; All rights are reserved.</center>
<center>Website developed and maintained by the <a href="#" onClick="document.getElementById('WebTeam').style.display='block'">Web Team </a>@Karvaan-Shaheed Rajguru College</center>
</strong>
</div>
</div>
</footer>

		 <script>
		   function initialize() {
  			var mapCanvas = document.getElementById('map');
			var mapOptions = {
		    center: new google.maps.LatLng(28.598568, 77.322836),
		    zoom: 15,
		    mapTypeId: google.maps.MapTypeId.ROADMAP
 		   }
    	   var map = new google.maps.Map(mapCanvas, mapOptions);}
		   google.maps.event.addDomListener(window, 'load', initialize);
		</script>
		
		<script>
$( document ).ready(function() {

  ##get hash code at next page
  var hashcode = window.location.hash;

  ## move page to any specific position of next page
  $('html,body').animate({scrollTop: $('div#'+hashcode).offset().top},'slow');

});
</script>
		