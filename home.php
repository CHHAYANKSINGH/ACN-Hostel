<?php include "layouts/header2.php"?>
<style>
    /*Tabs*/
    section {
    padding: 6px 0;
    }

    section .section-title {
        text-align: center;
        color: #000000;
        margin-bottom: 50px;
        text-transform: uppercase;
    }
    #tabs{
      background: #ffffff;
        color: rgb(0, 0, 0);
    }
    #tabs h6.section-title{
        color: rgb(0, 0, 0);
    }

    #tabs .nav-tabs .nav-item.show .nav-link, .nav-tabs .nav-link.active {
        color: #000000;
        background-color: transparent;
        border-color: transparent transparent #4f4b4b;
        font-size: 25px;
        font-weight: bold;
    }
    #tabs .nav-item:hover{
      background-color: rgb(123, 121, 119);
    }
    #tabs .nav-tabs .nav-link {
        padding-right: 8%;
        border: 1px solid transparent;
        border-top-left-radius: .25rem;
        border-top-right-radius: .25rem;
        color: rgb(0, 0, 0);
    }
    #tabs .tab-pane{
      font-size: 20px;
    }
    #tabs #neonShadow{
      border-radius: 50px;
      animation: glow 1s infinite ;
    }
    #tabs #neonShadow2{
      border-radius: 50px;
      animation: glow 1s infinite ;
    }
    
    @keyframes glow{
      0%{
      box-shadow: 5px 5px 20px rgb(93, 52, 168),-5px -5px 20px rgb(93, 52, 168);}
      
      50%{
      box-shadow: 5px 5px 20px rgb(81, 224, 210),-5px -5px 20px rgb(81, 224, 210)
      }
      100%{
      box-shadow: 5px 5px 20px rgb(93, 52, 168),-5px -5px 20px rgb(93, 52, 168)
      }
    }
    @media all and (max-width: 768px) {
      .res-img{
      width: 100%;
      max-width: 400px;
      height: auto;
      }
      #tabs .nav-tabs .nav-link {
        padding-right: 50%;
        border: 1px solid transparent;
        border-top-left-radius: .25rem;
        border-top-right-radius: .25rem;
        color: rgb(0, 0, 0);
    }
    }
</style>
<body>
<section id="tabs">
	<div class="container">
		<h6 class="section-title h1">Corona-Virus {Covid-19}</h6>
    <marquee direction="left" style="color: red;">DO NOT BELIEVE IN RUMOURS!!! #GETVACCINATED</marquee>
		<div class="row">
			<div class="col-xs-12 ">
				<nav>
					<div class="nav nav-tabs nav-fill" id="nav-tab" role="tablist">
						<a class="nav-item nav-link active" id="nav-overview-tab" data-toggle="tab" href="#nav-overview" role="tab" aria-controls="nav-overview" aria-selected="true">Overview</a>
						<a class="nav-item nav-link active" id="nav-prevention-tab" data-toggle="tab" href="#nav-prevention" role="tab" aria-controls="nav-prevention" aria-selected="false">Prevention</a>
						<a class="nav-item nav-link active" id="nav-symptoms-tab" data-toggle="tab" href="#nav-symptoms" role="tab" aria-controls="nav-symptoms" aria-selected="false">Symptoms</a>
            <a class="nav-item nav-link active" id="nav-vaccination-tab" data-toggle="tab" href="#nav-vaccination" role="tab" aria-controls="nav-vaccination" aria-selected="false">MythBusters about Vaccination</a>
					</div>
				</nav>
				<div class="tab-content py-3 px-3 px-sm-0" id="nav-tabContent">
					<div class="tab-pane fade" id="nav-overview" role="tabpanel" aria-labelledby="nav-overview-tab"><br>
            <img src="images/c1.jpg" class="res-img" width="450" height="450" align="left">
            <ul>
						<li>Coronavirus disease (COVID-19) is an infectious disease caused by a newly discovered coronavirus.</li>
            <li>Most people infected with the COVID-19 virus will experience mild to moderate respiratory illness and recover without requiring special treatment.  Older people, and those with underlying medical problems like cardiovascular disease, diabetes, chronic respiratory disease, and cancer are more likely to develop serious illness.</li>
            <li>The best way to prevent and slow down transmission is to be well informed about the COVID-19 virus, the disease it causes and how it spreads. Protect yourself and others from infection by washing your hands or using an alcohol based rub frequently and not touching your face.</li>
            <li>The COVID-19 virus spreads primarily through droplets of saliva or discharge from the nose when an infected person coughs or sneezes, so it’s important that you also practice respiratory etiquette (for example, by coughing into a flexed elbow).</li>
            </ul>
          </div>
					<div class="tab-pane fade" id="nav-prevention" role="tabpanel" aria-labelledby="nav-prevention-tab"><br>
						<p>To prevent infection and to slow transmission of COVID-19, do the following:</p>
            <ul>
              <li>Wash your hands regularly with soap and water, or clean them with alcohol-based hand rub.</li>
              <li>Maintain at least 1 metre distance between you and people coughing or sneezing.</li>
              <li>Avoid touching your face.</li>
              <li>Cover your mouth and nose when coughing or sneezing.</li>
              <li>Stay home if you feel unwell.</li>
              <li>Refrain from smoking and other activities that weaken the lungs.</li>
              <li>Practice physical distancing by avoiding unnecessary travel and staying away from large groups of people.</li>
            </ul>
          </div>
					<div class="tab-pane fade" id="nav-symptoms" role="tabpanel" aria-labelledby="nav-symptoms-tab"><br>
						<p>COVID-19 affects different people in different ways. Most infected people will develop mild to moderate illness and recover without hospitalization.</p>
            <p>Most common symptoms:</p>
            <ul>
              <li>fever</li>
              <li>dry cough</li>
              <li>tiredness</li>
            </ul>
            <p>Less common symptoms:</p>
            <ul>
            <li>aches and pains.</li>
            <li>sore throat</li>
            <li>diarrhoea</li>
            <li>conjunctivitis</li>
            <li>headache</li>
            <li>loss of taste or smell</li>
            <li>a rash on skin, or discolouration of fingers or toes</li>
            </ul>
            <p>Serious symptoms:</p>
            <ul>
              <li>difficulty breathing or shortness of breath.</li>
              <li>chest pain or pressure</li>
              <li>loss of speech or movement.</li>
            </ul>
            <p>Seek immediate medical attention if you have serious symptoms.  Always call before visiting your doctor or health facility. </p>
            <p>People with mild symptoms who are otherwise healthy should manage their symptoms at home.</p>
            <p>On average it takes 5–6 days from when someone is infected with the virus for symptoms to show, however it can take up to 14 days. </p>
          </div>
          <div class="tab-pane fade" id="nav-vaccination" role="tabpanel" aria-labelledby="nav-vaccination-tab"><br>
            <img src="images/vaccine.jpg" class="res-img" width="350" height="250" style="border-radius: 100%;" align="right">
						<p>According to medical experts, vaccination is one of the most efficient public health interventions. The World Health Organisation (WHO) says that immunisation or vaccination shields a person from life-threatening diseases such as polio, tetanus, and diphtheria and lowers the risk of spreading diseases to others. Vaccines have proven to be successful in eradicating diseases such as smallpox and polio. Vaccines trigger the body's own immune system to act and safeguard the individual against the subsequent infections, say experts. Dr Vishal Sehgal, Medical Director, Portea Medical says that about 2-3 million deaths can be prevented every year globally with proper immunisation.</p>
            <b><p>Register yourself for vaccination:</p></b>
            <center><button id="neonShadow" onclick="window.open('https://selfregistration.cowin.gov.in/ ','_blank')"><span>Register Now!</span></button></center>
            
            <h1>Common Myths About Vaccination Busted By Experts</h1>
            <b><p>Myth: Vaccines can cause severe side-effects like autism in children and even death</p></b>
            <strong>FACT:</strong><p> This is one of the most common myths around vaccines among a lot of people, said Dr Vishal Sehgal, Medical Director, Portea Medical. According to him, autism has been falsely linked with some vaccines MMR (Measles, Mumps, and Rubella) vaccine but a number of studies have been undertaken that have proved that there is no association between immunisation and autism. He said that such rumours get wind because in most cases, children are diagnosed with autism around the same time as their immunisation schedule. He further asserted that vaccinations do not cause any fatal disease or death. Side-effects of vaccines are rare and mild that include fever or slight pain in the area where the vaccine was administered but these wane away soon, he said.
            </p>
            <b><p>Myth: Vaccines are not required, maintaining proper hygiene is enough to protect from viruses</p></b>
            <strong>FACT:</strong><p>Experts say that while maintaining proper hygiene and sanitation will ensure a better standard of life and reduce the risk of infection, it will not protect against such infectious diseases that can spread despite cleanliness and good living conditions. Dr Sehgal said that delaying or denying vaccination will make people vulnerable to a number of infection.</p></b>

            <b><p>Myths: Administering vaccines during pregnancy may harm mother, child or both</p></b>
            <strong>FACT:</strong><p>Fact: Dr Sehgal asserted that immunisation is a part of preventive medical care and is important for pregnant women to protect the health and life of both - woman and baby.</p>

            <b><p>Myths: Adults do not need to get vaccines</p></b>
            <strong>FACT:</strong><p> Vaccines are helpful at all stages of life- right from infancy to childhood to adult life and old age, said Dr Sehgal. He added, 'Adult vaccination is not so common in India but it really needs to become a part of our public healthcare system as the adults too need protection from various deadly diseases like human papillomavirus vaccine, hepatitis A and B, pneumococcal among others. Our senior citizens who are very susceptible to pneumonia and must be given the pneumococcal vaccine. Rubella vaccination is given to females who are of reproductive age group. The human papillomavirus vaccine is given to prevent cervical cancer in women. Then there are also travel immunisation which people should take while travelling to other countries. Like Indian citizens travelling to Africa should take the yellow fever vaccine. Similarly, vaccination against disease like typhoid, tuberculosis can be taken while travelling to European countries.
            </p>

            <b><p>Myth: Once I receive the COVID-19 vaccine, I no longer need to wear a mask.</p></b>
            <strong>FACT:</strong><p>Masking, handwashing and physical distancing remain necessary in public until a sufficient number of people are immune.</p>

            <b><p>For more details visit:</p></b>
            <center><button id="neonShadow2" onclick="window.open('https://pib.gov.in/PressReleasePage.aspx?PRID=1722078','_blank')"><span>Visit pib gov site</span></button></center><br>
          </div>
				</div>
			
			</div>
		</div>
	</div>
</section>
<script>
  document.getElementById("nav-overview-tab").click();
</script>
</body>
<?php include "layouts/footer.php"?>