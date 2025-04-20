<link rel="stylesheet" type="text/css" href="public/assest/css/style.css">
 <?php
	include('include/header.php');
?>
<link rel="stylesheet" type="text/css" href="public/assest/css/style.css">

<div class="platform">
    <img src="public/assest/images/active-ai-lock-up.png" class="platform-img" alt="logo">
    <h2 class="active"> ActiveAI Security Platform </h2>
    <h3 class="essential">The Essential<br>
    cybersecurity<br>
Platform</h3>
<p class="active-essential">Delivers a proactive approach to cyber resilience in a single cybersecurity<br> platform, 
    providing preemptive visibility into security posture, real-time<br> detection, 
    and autonomous response to known and unknown threats.<br></p>

    <a href=demoform.php target="_blank" class="demo"  >

        Get Demo</a>
    <img src="public/assest/images/p1.jpg" class="platform-img" alt="logo">

</div>
<div >
    
    <h2 class="stay"> Stay ahead of adversaries </h2>


<p class="p-stay">The ActiveAI Security Platform understands your enterprise data
     in real time to deliver preventive<br> and live threat detection, with targeted autonomous
      response to shut down known and novel threats<br> without disrupting business operations.<br>
</p>
<h5 style="text-align: center;"> ACTIVE AI SECURITY</h5>
<br>

    <img src="public/assest/images/stay.jpg" class="stay-img" alt="logo">

</div>
<div class="counter text-center">
        
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-12">
                <div class="single-number">
                    <div class="icon-area">
                        <i class="fa fa-home"></i>
                    </div>
                    <span class="digit-box" data-val="92%">000%</span>
                    <span class="text-box" >Reduction in containment time<br>
                        <hr>
                        by embracing a proactive cybersecurity approach (IBM Cost of a Data Breach Report)</span>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12">
                <div class="single-number">
                    <div class="icon-area">
                        <i class="fa fa-trophy"></i>
                    </div>
                    <span class="digit-box" data-val="48%">000</span>
                    <span class="text-box">Security practitioners want better
                        integration<br>   <hr>
                        between their existing security tools (State of AI Cyber Security 2024)</span>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12">
                <div class="single-number">
                    <div class="icon-area">
                        <i class="fa fa-file-o"></i>
                    </div>
                    <span class="digit-box" data-val="200">000</span>
                    <span class="text-box">Faster SOC triage<br>   <hr>
                        AI Analyst speeds up daily triage and routine investigations (Darktrace Customer, Aviation)</span>
                </div>
            </div>
            <!--div class="col-lg-3 col-md-6 col-sm-12">
                <div class="single-number">
                    <div class="icon-area">
                        <i class="fa fa-users"></i>
                    </div>
                    <span class="digit-box" data-val="125">000</span>
                    <span class="text-box">Happy Clients</span>
                </div-->
            </div>
        </div>
    </div>

</div>


<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.1/js/bootstrap.min.js"></script>

<script type="text/javascript">
let targetElements = document.querySelectorAll(".digit-box");
let animationtiming = 3000;

targetElements.forEach((targetElement) => {
let valueOne = 0;
let valueTwo = parseInt(targetElement.getAttribute("data-val"));
let timing = Math.floor(animationtiming / valueTwo);
let counter = setInterval(function () {
    valueOne += 1;
    targetElement.textContent = valueOne;
    if (valueOne == valueTwo) {
    clearInterval(counter);
    }
}, timing);
});
</script>





</div>
<div class="elevate">
    <h7>Your data .Our AI</h7>
    <h2 class="elevate-heading">Elevate your cybersecurity <br>
    with darktrace AI</h2>
    <button class="getdemo">getdemo</button>
</div>



</body>
<?php
	include('include/footer.php');
?>

