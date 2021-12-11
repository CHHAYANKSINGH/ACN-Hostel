<?php include "layouts/header2.php"?>
<style>
body{
    background: url(images/donate.jpg) no-repeat center center fixed; 
    -webkit-background-size: cover;
    -moz-background-size: cover;
    -o-background-size: cover;
    background-size: cover;
	}
.container {
    color: white;
    margin-top: 1%;
    margin-bottom: 1%;
    width: 70%;
    background-color: #26262b9e;
    padding-top:2%;
    padding-bottom:2%;
    border-radius: 10%;
  }
</style>
<body>
	<div class="container">
  <center>  
		<h1>Be part of the good campaign</h1>
  	<h2>JOIN THE FIGHT AGAINST COVID 19</h2>
		<h4><p>Even a rupee donated by you, can end up saving a life.<br> You might lose 1 rupee,<br>
    but what you will gain, is blessings of a person whose life was saved because of <b>YOU</b>
		</p></h4>
		<div class="razorpay-embed-btn" data-url="https://pages.razorpay.com/pl_HO5hA61Q23siyF/view" data-text="Donate Now" data-color="#5D00A8" data-size="medium">
    </div>
  </center>  
  </div>
<script>
  (function(){
    var d=document; var x=!d.getElementById('razorpay-embed-btn-js')
    if(x){ var s=d.createElement('script'); s.defer=!0;s.id='razorpay-embed-btn-js';
    s.src='https://cdn.razorpay.com/static/embed_btn/bundle.js';d.body.appendChild(s);} else{var rzp=window['_rzp_'];
    rzp && rzp.init && rzp.init()}})();
</script>
</div>
</body>
<?php include "layouts/footer.php"?>