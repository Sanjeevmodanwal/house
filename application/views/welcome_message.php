<style type="text/css">
    .col-23{background-color: #002633 !important;
    padding: 20px;
    padding-top: 40px;}
    #text-23{color: #757575;}
    #btn-now-1 {
    color: #fff;
    background: #C81010;
    border: 1px solid #C81010;
}
  </style>
    <!-- MAIN -->
    <main role="main">    
      <!-- Main Header -->
     <header style="background-image: url(<?= base_url('assets/front/img/header.jpg'); ?>); background-size: cover; padding: 20px;    padding-top: 228px;
    padding-bottom: 60px;">
      <div class="line">
    
                    <!-- Title -->
   <h1 class="text-white margin-bottom-30 text-size-60 text-m-size-30 text-line-height-1 text-center ">ARCHITECTS AND INTERIOR DESIGNERS IN LUCKNOW</h1>
  <p class="text-white text-size-14 margin-bottom-40 text-center ">Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis. Iriure dolor in hendrerit duis autem vel eum in vulputate velit esse molestie consequat.</p>
  <div class="line">
                      <div class="s-12 m-12 l-3 center" style="    padding-bottom: 30px;">
                        <a class="button button-white-stroke s-12" href="contact.html">Contact Us</a>
                      </div>       
                    </div>
                    
                  </div>
                </div>
              </div>
            </div>
          </div>              
        </div>      
        </div>         
      </header>
      <!---------------section-3-------------------->
            <div class="s-12 m-10 l-12 center line" style="    margin-top: -51px;">
       <section class="text-center col-12 col-23"> 
        <div class="line">
          <div class="margin">
            <div class="s-12 m-12 l-3 margin-m-bottom">
                 <form name="contactForm" class="customform" method="post">
                  <div class="line">
                  <div class="s-12"> 
                    <select id="text-23" >
                      <option>Select Category</option>
                    </select>
                  </div>
                </div>
              </form>
            </div>
            <div class="s-12 m-12 l-3 margin-m-bottom">
                 <form name="contactForm" class="customform" method="post" >
                  <div class="line">
                  <div class="s-12"> 
                     <select id="text-23">
                      <option>Select design</option>
                    </select>
                  </div>
                </div>
              </form>
            </div>
            <div class="s-12 m-12 l-3 margin-m-bottom">
                 <form name="contactForm" class="customform" method="post" >
                  <div class="line">
                  <div class="s-12"> 
                    
                    <input style="color: #fff;" name="subject" class="subject" placeholder="Search box" title="Subject" type="text" id="text-23">
                    <p class="subject-error form-error" >Search box.</p>
                  </div>
                </div>
              </form>
            </div>
            <div class="s-12 m-12 l-3 margin-m-bottom">
                 <form name="contactForm" class="customform" method="post" >
                  <div class="line">
                  <div class="s-12"> 
                    <button class="s-12 submit-form button background-primary text-white" type="submit">Submit Button</button>
                  </div>
                </div>
              </form>
            </div></div>
          </div>

                  </section>
    </div>
      <!---------------section-3-------------------->
     
<!---------------slider---------------------->
<div class="line" style="margin-top: 30px;">
          <h2 class="text-size-50 text-center" >TRENDING HOUSE DESIGNS</h2>
          <hr class="break-small background-primary break-center">
        </div>
  <div class="container my-4">
    <!--Carousel Wrapper-->
    <div id="multi-item-example" class="carousel slide carousel-multi-item" data-ride="carousel">

      <!--Controls-->
      <div class="controls-top">
        <a class="btn-floating" href="#multi-item-example" data-slide="prev"><i class="fa fa-chevron-left"></i></a>
        <a class="btn-floating" href="#multi-item-example" data-slide="next"><i class="fa fa-chevron-right"></i></a>
      </div>
      <!--/.Controls-->

      <!--Indicators-->
      <ol class="carousel-indicators">
        <li data-target="#multi-item-example" data-slide-to="0" class="active"></li>
        <li data-target="#multi-item-example" data-slide-to="1"></li>
        <li data-target="#multi-item-example" data-slide-to="2"></li>
      </ol>
      <!--/.Indicators-->

      <!--Slides-->
      <div class="carousel-inner" role="listbox">

        <!--First slide-->
		<?php 
		$i = 1;
		foreach ($get_trending_housing as $rows_th) {
			$category_name = $rows_th->category_name;
			$discription = $rows_th->discription;
			$image = $rows_th->image;
		?>
		<?php $item_class = ($i == 1) ? 'carousel-item active' : 'carousel-item'; ?>
        <div class="<?php echo $item_class; ?>">

          <div class="row">
            <div class="col-md-4">
              <div class="card mb-2">
                <img class="card-img-top" src="<?= base_url('images/'.$image.''); ?>"
                  alt="Card image cap">
                <div class="card-body">
                  <h4 class="card-title"><?php echo $category_name; ?></h4>
                  <p class="card-text"><?php echo $discription; ?></p>
                <a class="button button-dark-stroke text-size-12" href="<?= base_url('/'); ?>">GET MORE INFO</a>
                </div>
              </div>
            </div>

            <div class="col-md-4 clearfix d-none d-md-block">
              <div class="card mb-2">
                <img class="card-img-top" src="<?= base_url('images/'.$image.''); ?>"
                  alt="Card image cap">
                <div class="card-body">
                  <h4 class="card-title">Card title</h4>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                    card's content.</p>
                  <a class="button button-dark-stroke text-size-12" href="<?= base_url('/'); ?>">GET MORE INFO</a>
                </div>
              </div>
            </div>

            <div class="col-md-4 clearfix d-none d-md-block">
              <div class="card mb-2">
                <img class="card-img-top" src="<?= base_url('images/'.$image.''); ?>"
                  alt="Card image cap">
                <div class="card-body">
                  <h4 class="card-title">Card title</h4>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                    card's content.</p>
                 <a class="button button-dark-stroke text-size-12" href="<?= base_url('/'); ?>">GET MORE INFO</a>
                </div>
              </div>
            </div>
          </div>

        </div>
		<?php $i++;
		} ?>
        <!--/.First slide-->

        <!--Second slide-->
        <!--div class="carousel-item m-25">

          <div class="row">
            <div class="col-md-4">
              <div class="card mb-2">
                <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Horizontal/City/4-col/img%20(60).jpg"
                  alt="Card image cap">
                <div class="card-body">
                  <h4 class="card-title">Card title</h4>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                    card's content.</p>
                  <a class="button button-dark-stroke text-size-12" href="/">GET MORE INFO</a>
                </div>
              </div>
            </div>

            <div class="col-md-4 clearfix d-none d-md-block">
              <div class="card mb-2">
                <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Horizontal/City/4-col/img%20(47).jpg"
                  alt="Card image cap">
                <div class="card-body">
                  <h4 class="card-title">Card title</h4>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                    card's content.</p>
                 <a class="button button-dark-stroke text-size-12" href="/">GET MORE INFO</a>
                </div>
              </div>
            </div>

            <div class="col-md-4 clearfix d-none d-md-block">
              <div class="card mb-2">
                <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Horizontal/City/4-col/img%20(48).jpg"
                  alt="Card image cap">
                <div class="card-body">
                  <h4 class="card-title">Card title</h4>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                    card's content.</p>
                 <a class="button button-dark-stroke text-size-12" href="/">GET MORE INFO</a>
                </div>
              </div>
            </div>
          </div>

        </div-->
        <!--/.Second slide-->

        <!--Third slide-->
        <!--div class="carousel-item">

          <div class="row">
            <div class="col-md-4">
              <div class="card mb-2">
                <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Horizontal/Food/4-col/img%20(53).jpg"
                  alt="Card image cap">
                <div class="card-body">
                  <h4 class="card-title">Card title</h4>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                    card's content.</p>
                 <a class="button button-dark-stroke text-size-12" href="/">GET MORE INFO</a>
                </div>
              </div>
            </div>

            <div class="col-md-4 clearfix d-none d-md-block">
              <div class="card mb-2">
                <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Horizontal/Food/4-col/img%20(45).jpg"
                  alt="Card image cap">
                <div class="card-body">
                  <h4 class="card-title">Card title</h4>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                    card's content.</p>
                 <a class="button button-dark-stroke text-size-12" href="/">GET MORE INFO</a>
                </div>
              </div>
            </div>

            <div class="col-md-4 clearfix d-none d-md-block">
              <div class="card mb-2">
                <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Horizontal/Food/4-col/img%20(51).jpg"
                  alt="Card image cap">
                <div class="card-body">
                  <h4 class="card-title">Card title</h4>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                    card's content.</p>
                  <a class="button button-dark-stroke text-size-12" href="/">GET MORE INFO</a>
                </div>
              </div>
            </div>
          </div>

        </div-->
        <!--/.Third slide-->

      </div>
      <!--/.Slides-->

    </div>
    <!--/.Carousel Wrapper-->


  </div>
<!---------------slider---------------------->


            <section class=" background-white m-26" id="more"> 
        <div class="line">
          <div class="margin">
            <div class="s-12 m-12 l-4 margin-m-bottom">

            </div>
            <div class="s-12 m-12 l-4 margin-m-bottom">
              
            </div>
            <div class="s-12 m-12 l-4 margin-m-bottom">

            </div>
          </div>
        </div>
      </section>
      

            <section class=" background-white m-26" id="more"> 
        <div class="line">
          <div class="margin">
            <div class="s-12 m-12 l-4 margin-m-bottom">
              <div class=" block-bordered m-25">
                <img src="<?= base_url('assets/front/img/portfolio/thumb-02.jpg'); ?>" alt="" title="Portfolio Image 1">
                <h2 class="text-thin">Unlimited Color Variants</h2>
                <p class="margin-bottom-30">Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis</p>
                <a class="button button-dark-stroke text-size-12" href="/">GET MORE INFO</a>
              </div>
            </div>
            <div class="s-12 m-12 l-4 margin-m-bottom">
              <div class=" block-bordered m-25">
                <img src="<?= base_url('assets/front/img/portfolio/thumb-02.jpg'); ?>" alt="" title="Portfolio Image 1">
                <h2 class="text-thin">Unlimited Color Variants</h2>
                <p class="margin-bottom-30">Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis</p>
                <a class="button button-dark-stroke text-size-12" href="/">GET MORE INFO</a>
              </div>
            </div>
            <div class="s-12 m-12 l-4 margin-m-bottom">
              <div class=" block-bordered m-25">
                <img src="<?= base_url('assets/front/img/portfolio/thumb-02.jpg'); ?>" alt="" title="Portfolio Image 1">
                <h2 class="text-thin">Unlimited Color Variants</h2>
                <p class="margin-bottom-30">Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis</p>
                <a class="button button-dark-stroke text-size-12" href="/">GET MORE INFO</a>
              </div>
            </div>
          </div>
        </div>
      </section>
      
      <!-- Section 1 -->
      <section class="section background-dark">
        <div class="line">
          <h2 class="text-size-50 text-center">How we work</h2>
          <hr class="break-small background-primary break-center">
        </div>
        <div class="line">
          <div class="margin">  
            <div class="s-12 m-12 l-6">
              <p class="text-size-14 margin-m-bottom-30 text-dark"><img src="<?= base_url('assets/front/img/2.png'); ?>"></p>
            </div>
            <div class="s-12 m-12 l-6">
              <div class="line">
              <h2 class="text-size-50 m-26">1. Get in Touch With Us</h2>
              <hr class="break-small background-primary ">
              </div>
              <p class="text-size-14 c2 ">Reach us through call, mail, whatsapp, or fill our query form along with your plot details and basic requirements. One of our consultants will brief you our services and procedure.</p>
            </div>
          </div>
        </div> 
         <div class="line">
          <div class="margin">  
            <div class="s-12 m-12 l-6">
              <div class="line">
              <h2 class="text-size-50 m-26">2. Getting to Know Your Requirements</h2>
              <hr class="break-small background-primary ">
              </div>
              <p class="text-size-14 ">Reach us through call, mail, whatsapp, or fill our query form along with your plot details and basic requirements. One of our consultants will brief you our services and procedure.</p>
            </div>
            <div class="s-12 m-12 l-6">
              <p class="text-size-14 margin-m-bottom-30 text-dark"><img src="<?= base_url('assets/front/img/3.png'); ?>"></p>
            </div>
          </div>
        </div>
         <div class="line">
          <div class="margin">  
            <div class="s-12 m-12 l-6">
              <p class="text-size-14 margin-m-bottom-30 text-dark"><img src="<?= base_url('assets/front/img/4.png'); ?>"></p>
            </div>
            <div class="s-12 m-12 l-6">
               <div class="line">
              <h2 class="text-size-50 m-26">3. Concept Designing</h2>
              <hr class="break-small background-primary ">
              </div>
              <p class="text-size-14 ">Reach us through call, mail, whatsapp, or fill our query form along with your plot details and basic requirements. One of our consultants will brief you our services and procedure.</p>
            </div>
          </div>
        </div>
          <div class="line">
          <div class="margin">  
            <div class="s-12 m-12 l-6">
               <div class="line m-26">
              <h2 class="text-size-50 ">4. Correction & Modification</h2>
              <hr class="break-small background-primary ">
              </div>
              <p class="text-size-14 ">Reach us through call, mail, whatsapp, or fill our query form along with your plot details and basic requirements. One of our consultants will brief you our services and procedure.</p>
            </div>
            <div class="s-12 m-12 l-6">
              <p class="text-size-14 margin-m-bottom-30 text-dark"><img src="<?= base_url('assets/front/img/5.png'); ?>"></p>
            </div>
          </div>
        </div>
         <div class="line">
          <div class="margin">  
            <div class="s-12 m-12 l-6">
              <p class="text-size-14 margin-m-bottom-30 text-dark"><img src="<?= base_url('assets/front/img/6.png'); ?>"></p>
            </div>
            <div class="s-12 m-12 l-6">
               <div class="line m-26">
              <h2 class="text-size-50 ">3. Concept Designing</h2>
              <hr class="break-small background-primary ">
              </div>
              <p class="text-size-14 ">Reach us through call, mail, whatsapp, or fill our query form along with your plot details and basic requirements. One of our consultants will brief you our services and procedure.</p>
            </div>
          </div>
        </div>
       <div class="line">
          <div class="margin">  
            <div class="s-12 m-12 l-6">
               <div class="line m-26">
              <h2 class="text-size-50 ">4. Correction & Modification</h2>
              <hr class="break-small background-primary ">
              </div>
              <p class="text-size-14 ">Reach us through call, mail, whatsapp, or fill our query form along with your plot details and basic requirements. One of our consultants will brief you our services and procedure.</p>
            </div>
            <div class="s-12 m-12 l-6">
              <p class="text-size-14 margin-m-bottom-30 text-dark"><img src="<?= base_url('assets/front/img/7.png'); ?>"></p>
            </div>
          </div>
        </div>
      </section>
      


     
      
      <!-- Section 4 -->
      <section class="">
        <div class="line">
        <h2 class="text-size-50 text-center">Our services</h2>
        <hr class="break-small background-primary break-center"> 
        <div class="tabs background-primary-hightlight">
            <div class="tab-item tab-active">
              <a class="tab-label active-btn">Interiors</a>
              <div class="tab-content lightbox-gallery">
                <div class="s-12 m-6 l-12">
                  
                    <div class="block-bordered m-25">
                      <div class="line">
        <h2 class="text-size-50 ">Interiors</h2>
        <hr class="break-small background-primary ">
      </div>
                        <p style="font-size: 17px;">As an Interior designer in Lucknow, we know that interior designing is a combination of art and science to make functional spaces and pleasing environment. There is a great difference between an interior designer and interior decorator, the interior designer responsible for creating functional and beautiful spaces on the other hand interior decorator only focuses on beautiful and artistic spaces. Sometimes, an architect and interior designer work close to each other to solve a problem.  Interior design can vary person to person it’s not all about same space create for everyone it depends much on daily lives, profession, hobby etc. there are many steps during interior designs which interior designers follow, here we are mentioning few important steps. Interior designing is ruled by some standard strategy, By following standard strategy, like current trends, by use of standard stages and more like that we became one of the top Interior design in Lucknow.</p>
                        <ul class="tabularr">
                             <li class="top-2"><span><i  class="fa fa-chevron-right top-1" aria-hidden="true" ></i>&nbsp;&nbsp;Discussion with the client -</span> This is first and most important steps among all steps. At this step our designer discusses with client problem and takes their requirement brief, his budget, his taste, likes and dislikes etc. As we know the client is not designing background so we should consult the client what is good or bad. At last of this stage, we short out some key requirement of the client on which we work. After reviewing key requirement by the client we will move on the next step. Normally this step also called programming. You can go at this step by filling of popup our page; get in touch or easily calling at our contact number.</li>
                             <li class="top-2"><span><i class="fa fa-chevron-right top-1" aria-hidden="true"></i>&nbsp;&nbsp;Space planning or concept development – </span>This space includes a lot of research. At this stage, we design space according to the client’s key requirement following functionality by putting furniture layout designing elements. Circulation spaces etc.</li>
                            <li class="top-2"><span><i class="fa fa-chevron-right top-1" aria-hidden="true"></i>&nbsp;&nbsp;Presentation  – </span>At this stage firstly we send mood board to the client in which we send reference according to client taste having 3 options of designs after finalization of mood board we render designs according to the finalized mood board. After finalization of 3d render we move another stage of our milestone which is technical drawing and documentation.</li>
                            <li class="top-2"><span><i class="fa fa-chevron-right top-1" aria-hidden="true"></i>&nbsp;&nbsp;Technical drawing and documentations –</span> At this stage, we prepare technical drawings for bidding and execution, in which we write the specification of materials and dimensions of each detail. The technical designing process makes the bidding process easy and accurate. We will also send a quotation for the cost for execution.</li>
                            <li class="top-2"><span><i class="fa fa-chevron-right" aria-hidden="true"></i>&nbsp;&nbsp;Executions –</span> At this phase firstly client select contractors according to bid and the technical score of bids after that ensure work phages of installations. We will coordinate contractors if any problem brings. At, last of this stage contractor feedback to client if any problem found contractor fix that.</li>
                            </ul>
                   
                   </div>
                 </div>
                    </div> 
                  
                  </a>	
                </div>
                   <div class="tab-item">
              <a class="tab-label">Vastu Consulatnacy</a>
              <div class="tab-content lightbox-gallery">
                <div class="s-12 m-6 l-12">
             <div class="block-bordered m-25">
                       <div class="line">
        <h2 class="text-size-50 ">Vastu Consulatnacy</h2>
        <hr class="break-small background-primary ">
      </div>
                        <p style="font-size: 17px;">Vastu is an ancient Indian Vedic science of architecture which helps you to decide the perfect direction of requirements any building layout for harmony with nature. Vastu is a deep science of cosmic energy and it’s management. Vastu Shastra is a very old science written by Indian Rishis. It believes if anyone followed Vastu Shastra rules could live happily. It works on five elements that are Space, Air, fire, water and earth. There are some important tips of Vastu for various areas of Vastu.</p>
                        <ul class="tabularr ty">
                              <li class="top-2"><span><i class="fa fa-chevron-right top-1" aria-hidden="true"></i>&nbsp;&nbsp;Main Entrance –</span> The main entrance is the entrance point of the house as well for energies also. It’s preferred best direction according to Vastu should be North and the secondary option is east and north-east, in easy word When we come out of the house our face should be in North, east and north-east direction.</li>
                            <li class="top-2"><span><i class="fa fa-chevron-right top-1" aria-hidden="true"></i>&nbsp;&nbsp;Meditation Room or worship space – </span>A meditation area is an area where we meditate to reduce our stress and enhance peace and spiritual power. The best direction for puja room is the North-east side of the house. </li>
                              <li class="top-2"><span><i class="fa fa-chevron-right top-1" aria-hidden="true"></i>&nbsp;&nbsp;Living Room – </span>The living room basically used for relaxing and socializing purpose. It’s situated most of the time near the main entrance to make functional for visitors. The most favorable direction for the Living room is East or North direct in case of the south-facing plot we can put it in South-East direction.</li> 
                              <li class="top-2"><span><i class="fa fa-chevron-right top-1 " aria-hidden="true"></i>&nbsp;&nbsp;Master Bedroom – </span>Master bedroom is the main bedroom of the house which has more amenities than other bedrooms. It’s sometimes referred to as owner’s bedroom. The favorable direction of the master bedroom is South-West and bed should be placed in such manner that head should not be in North direction.</li>
                             <li class="top-2"><span><i class="fa fa-chevron-right top-1" aria-hidden="true"></i>&nbsp;&nbsp;Kitchen – </span>It’s a room like structure which is used to cooking. Sometimes it’s also used for the store (in case no plan for of store area). The best direction of the kitchen is South- East and the second direction of kitchen is North-west according to Vastu Shastra.</li>
                              <li class="top-2"><span><i class="fa fa-chevron-right top-1" aria-hidden="true"></i>&nbsp;&nbsp;Toilet – </span>Here, the word toilet refers to toilet room which is privately accessed for urination and defection and also takes a bath. Sometimes it’s also called a bathroom. The best direction of the toilet is West or North-west. W.C. placed in such a manner that the person never faces south or West direction.</li>
                            </ul>
                  
                </div>
      
              </div>
                
              </div>  
            </div>
              <div class="tab-item">
              <a class="tab-label">Turnkey Projects</a>
              <div class="tab-content lightbox-gallery">
                <div class="s-12 m-6 l-12">
             <div class="block-bordered m-25">
                       <div class="line">
        <h2 class="text-size-50 ">Turnkey Projects</h2>
        <hr class="break-small background-primary ">
      </div>
                        <p style="font-size: 17px;">While we started working as architectural and interior design firm, we see that most of the architectural firms and interior design firms in Lucknow and other places offer only designing service, which can be difficult, to handle execution work to the client, so we started to offer designing to execution at one place. This is a mode of architectural or interior projects in which we undertake the full project from designing to finishing on behalf of a mutual agreement. It’s a single process in which one vender compete all the project Understanding the impotence of time, we decided to save the time, energy and burden of our client we started one-stop solution for Construction and interiors work. We observed that meeting with designers, contractors and vendors is too much time taking and full of hassle and sometimes lack of technical knowledge we are unable to choose the right person for work.</p>
                        
                    
                </div>
                </a>
              </div>
                
              </div>  
            </div>
            <div class="tab-item">
              <a class="tab-label">Architectural</a>
              <div class="tab-content lightbox-gallery">
                <div class="s-12 m-6 l-12">
                
                     <div class="block-bordered m-25">
           <div class="line">
        <h2 class="text-size-50 ">Architectural</h2>
        <hr class="break-small background-primary ">
      </div>
                        <p style="font-size: 17px;">We design residential and commercial spaces like residence, hotel, hospital and schools etc in India as well across the world. Looking completion level among Architects Lucknow, we decided to provide best architectural designing service at Lucknow to benefit our clients by following new trends in designing fields. </p>
                        <p style="font-size: 17px;">There are some important phases during architectural design. There may be some other important phases during architectural design, we change in the process according to project need for example when we are working on the local project as Architect in Lucknow we add client meeting in our design phases but when we are designing online we discuss on phone for a small project.</p>
                      <ul class="tabularr">
                             <li class="top-2"><span><i class="fa fa-chevron-right top-1" aria-hidden="true"></i>&nbsp;&nbsp;Discussion with the client or programming - </span>The first steps start from listening and asking any type of question about you and your family, likes and dislikes, requirements, goals, future etc so that we can translate your expression into reality. In case of a renovation project, you must take a measurement of the old building.</li>
                             <li class="top-2"><span><i class="fa fa-chevron-right top-1" aria-hidden="true"></i>&nbsp;&nbsp;Concept development and Space planning – </span>At this stage, we research local materials used in building construction trends and many more than the design planning concept of the project according to your taste. The backbone of our concept is Vastu that is an ancient science of architecture and passive solar energy.</li>
                             
                             <li class="top-2"><span><i class="fa fa-chevron-right top-1" aria-hidden="true"></i>&nbsp;&nbsp;Presentation – </span>This next stage is the presentation stage in which we presentation, In which we first layout of building to the client and after finalization of floor plan we prepare 3d render of the project to visualize building before the construction. This is not a standard process it may change according to the project if needed.</li>
                             
                             <li class="top-2"><span><i class="fa fa-chevron-right top-1" aria-hidden="true"></i>&nbsp;&nbsp;Technical drawing and documentations  – </span>After finalization of the floor plan and 3d design, we prepare technical drawing to start work on-site, It also makes the bidding process easy and accurate. This is the longest stage of all above stage this stage includes structural designing, electrical designing plumbing designing and working drawings.</li>
                            <li class="top-2"><span><i class="fa fa-chevron-right top-1" aria-hidden="true"></i>&nbsp;&nbsp;Executions  – </span>This is the final stage of the work at this stage all the vender's works according to specifications provided by us, We also work with the contractor to answer their question, verify that material using in construction is good, correction in technical drawing and solve the problem that comes out during construction. We will also provide project progress report regular basis. On most projects, we don’t supervise construction.</li>
                             </ul>
                    
                </div>
              </a></div>  
              </div>  
            </div>
         </div>
         </div>
       </div>
     </div>
      </section>
      

      <!-----------sectio-3-------------->
      <section class="background-dark">
      <div class="line">
          <h2 class="text-size-50 text-center">Why Choose Us</h2>
          <hr class="break-small background-primary break-center">
        </div>
       <div class="line">
            <div class="margin">
              <!-- Contact Form -->
                            <div class="s-12 m-12 l-6">
           <ul>
                   <li><i class="fa fa-chevron-right" aria-hidden="true"></i> We have rich experience in almost every type of building.</li> 
                    <li><i class="fa fa-chevron-right" aria-hidden="true"></i> We always design a unique building as per your need.</li>
                    <li><i class="fa fa-chevron-right" aria-hidden="true"></i> Our service charge is reasonable.</li>
                    <li><i class="fa fa-chevron-right" aria-hidden="true"></i> Our buildings are eco-friendly and energy-efficient.</li>
                    <li><i class="fa fa-chevron-right" aria-hidden="true"></i> We take care of Vastu in our designs.</li>
                    <li><i class="fa fa-chevron-right" aria-hidden="true"></i> We provide detailed technical drawing so that, contractor make minimum mistakes.</li>
                    <li><i class="fa fa-chevron-right" aria-hidden="true"></i> We have a creative team of architects; they are also a great problem solver.</li>
                    <li><i class="fa fa-chevron-right" aria-hidden="true"></i> We will try to gain your goals in your budget.</li>
                    <li><i class="fa fa-chevron-right" aria-hidden="true"></i> We believe in the delivery of the project on time.</li>
                    <li><i class="fa fa-chevron-right" aria-hidden="true"></i> We are transparent in our procedure.</li>
                    <li><i class="fa fa-chevron-right" aria-hidden="true"></i> Our motto is 100% client satisfaction.
</li>
                    </ul>
              </div>
              <div class="s-12 m-12 l-6">
                <h2 class="margin-bottom-10">Leave Message</h2>
                <form name="contactForm" class="customform" method="post">
                  <div class="line">
                    <div class="margin">
                      <div class="s-12 m-12 l-6">
                        <input name="email" class="required email" placeholder="Your e-mail" title="Your e-mail" type="text" id="text-23">
                        <p class="email-error form-error">Please enter your e-mail.</p>
                      </div>
                      <div class="s-12 m-12 l-6">
                        <input name="name" class="name" placeholder="Your name" title="Your name" type="text" id="text-23">
                        <p class="name-error form-error ">Please enter your name.</p>
                      </div>
                    </div>
                  </div>
                  <div class="s-12"> 
                    <input name="subject" class="subject" placeholder="Subject" title="Subject" type="text" id="text-23">
                    <p class="subject-error form-error">Please enter the subject.</p>
                  </div>
                  <div class="s-12">
                    <textarea name="message" class="required message" placeholder="Your message" rows="3" id="text-23"></textarea>
                    <p class="message-error form-error">Please enter your message.</p>
                  </div>
                  <div class="s-12"><button class="s-12 submit-form button background-primary text-white" type="submit">Submit Button</button></div>
                </form>
              </div>
            </div>    
          </div>
          </section>
      <!-----------sectio-3-------------->
            <!-- Section 5 -->    
      <section class="section background-white text-center m-25">
        <div class="line">
          <h2 class="text-size-50 text-center">Testimonials</h2>
          <hr class="break-small background-primary break-center">
          <div class="carousel-default owl-carousel carousel-wide-arrows">
            <div class="item">
              <div class="s-12 m-12 l-7 center text-center">
                <img class="image-testimonial-small" src="<?= base_url('assets/front/img/testimonials-04.png'); ?>" alt="">
                <p class="h1 margin-bottom text-size-20">Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis</p>
                <p class="h1 text-size-16">Scott Star / CEO / Company</p>
              </div>
            </div>
            <div class="item"> 
              <div class="s-12 m-12 l-7 center text-center">
                <img class="image-testimonial-small" src="<?= base_url('assets/front/img/testimonials-05.png'); ?>" alt="">
                <p class="h1 margin-bottom text-size-20">Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis</p>
                <p class="h1 text-size-16">Mark Stoner / Web Developer / Company</h5>
              </div>
            </div>
            <div class="item">
              <div class="s-12 m-12 l-7 center text-center">
                <img class="image-testimonial-small" src="<?= base_url('assets/front/img/testimonials-06.png'); ?>" alt="">
                <p class="h1 margin-bottom text-size-20">Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis</p>
                <p class="h1 text-size-16">Jane Naismith / Web Designer / Company</p>
              </div>
            </div>
          </div>
          <a href="testimonial.php"><button type="button" class="button button-dark-stroke text-size-12" data-toggle="modal" data-target="#myModal" id="btn-now-1" style="margin-top: 20px;">View All</button></a>
        </div>
      </section>
    </main>
    <section class="background-dark m-25"> 
          <!-- Section 2 -->
          <div class="line">
          <h2 class="text-size-50 text-center">Faq</h2>
          <hr class="break-small background-primary break-center">
        </div>
          <div class="container py-3">
    <div class="row ">
        <div class="col-10 mx-auto">
            <div class="accordion" id="faqExample">
                <div class="card " id="text-23" style="background: #ffffff00;">
                    <div class="card-header p-2" id="headingOne">
                        <h5 class="mb-0">
                            <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                              <h4>Q: How does this work?</h4>
                            </button>
                          </h5>
                    </div>

                    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#faqExample">
                        <div class="card-body">
                            <b>Answer:</b> It works using the Bootstrap 4 collapse component with cards to make a vertical accordion that expands and collapses as questions are toggled.
                        </div>
                    </div>
                </div>
                <div class="card" id="text-23" style="background: #ffffff00;">
                    <div class="card-header p-2" id="headingTwo">
                        <h5 class="mb-0">
                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                          <h4>Q: How does this work?</h4>
                        </button>
                      </h5>
                    </div>
                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#faqExample">
                        <div class="card-body">
                            Bootstrap is the most popular CSS framework in the world. The latest version released in 2018 is Bootstrap 4. Bootstrap can be used to quickly build responsive websites.
                        </div>
                    </div>
                </div>
                <div class="card" id="text-23" style="background: #ffffff00;">
                    <div class="card-header p-2" id="headingThree">
                        <h5 class="mb-0">
                            <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                             <h4> Q. What is another question?</h4>
                            </button>
                          </h5>
                    </div>
                    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#faqExample">
                        <div class="card-body">
                            The answer to the question can go here.
                        </div>
                    </div>
                </div>
                <div class="card" id="text-23" style="background: #ffffff00;">
                    <div class="card-header p-2" id="headingThree">
                        <h5 class="mb-0">
                            <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                             <h4> Q. What is the next question?</h4>
                            </button>
                          </h5>
                    </div>
                    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#faqExample">
                        <div class="card-body">
                            The answer to this question can go here. This FAQ example can contain all the Q/A that is needed.
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!--/row-->

</div>
</section>