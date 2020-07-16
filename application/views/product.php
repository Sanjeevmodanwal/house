<style type="text/css">
	.col-26{background-color: #fff; padding: 20px;}
</style>

<style type="text/css">
.modal,body.modal-open {
    padding-right: 0!important
}

body.modal-open {
    overflow: auto
}

body.scrollable {
    overflow-y: auto
}

.modal-footer {
  display: flex;
  justify-content: flex-start;
  .btn {
    position: absolute;
    right: 10px;
  }
}
</style>

<style type="text/css">
.embed-responsive-16by9::before {
    padding-top: 56.25%;
    display: none;
}

  .border-1{border-right: 1px solid #d5d4d4;
    border-bottom: 1px solid #d5d4d4;}
    .border-2{
    border-bottom: 1px solid #d5d4d4;}
     .border-3{
    border-top: 1px solid #d5d4d4;border-right: 1px solid #d5d4d4;}
        .border-4{
    border-right: 1px solid #d5d4d4;}
    .pt-20{padding: 20px;
    padding-top: 0px;}
    .pb-20{padding: 20px;
    padding-bottom: 0px;}
.border-1 h5{color: #212529;}
.border-4 h5{color: #212529;}
.border-2 h5{color: #212529;}
#bol h5{color: #212529;}
.modal,body.modal-open {
    padding-right: 0!important
}

body.modal-open {
    overflow: auto
}

body.scrollable {
    overflow-y: auto
}

.modal-footer {
  display: flex;
  justify-content: flex-start;
  .btn {
    position: absolute;
    right: 10px;
  }
}
.image {
  display: block;
  width: 100%;
  height: auto;
}
.overlay {
    position: absolute;
    top: 0;
    bottom: 0;
    left: 0;
    right: 0;
    height: 63%;
    width: 100%;
    opacity: 0;
    transition: .3s ease;
    background-color: #0000008c;
}

.col-63:hover .overlay {
  opacity: 1;
}

.icon {
  color: white;
  font-size: 30px;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  text-align: center;
}

.fa-user:hover {
  color: #eee;
}
.u1{width: 33%;}
.image {
  opacity: 1;
  display: block;
  width: 100%;
  height: auto;
  transition: .5s ease;
  backface-visibility: hidden;
}

.middle {
  transition: .5s ease;
  opacity: 0;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  text-align: center;
}

.on:hover .image {
  opacity: 0.3;
}

.on:hover .middle {
  opacity: 1;
}

.text {
  background-color: #4CAF50;
  color: white;
  font-size: 16px;
  padding: 16px 32px;
}
#fonts{    font-size: 35px;
    position: relative;
    top: -90px;}
#cross{font-size: 25px;
    float: right;
    color: #fff;
    margin-right: 15px;
        position: relative;
    top: -3px;}
.modalbox{background-color: #002633 !important;}
.modalbox2{    padding: 30px;
    background: #002633 !important;} 
    #heart{color: #002633;}
    #heart:hover{color: red;}
#heart-2 {
    box-shadow: 0 10px 16px 0 rgba(0,0,0,0.2),0 6px 20px 0 rgba(0,0,0,0.19) !important;
    position: absolute;
    right: 8px;
    background: #fff;
    padding: 10px;
    border-radius: 30px;
    top: 10px;
}
</style>

      <!-- MAIN -->
    <main role="main">    
      <!-- Main Header -->
      <header>
        <div class="carousel-default owl-carousel carousel-main carousel-nav-white background-dark ">
          <div class="item" style="background-image: url(<?= base_url('assets/front/img/header.jpg'); ?>);
    background-size: cover;">
        <section class="section">

        <div class="line">
          <div class="margin">  
            <div class="s-12 m-12 l-7">
          <div class="line">
          <h2 class="text-size-50 pull-left">Product</h2>
          <hr class="break-small background-primary ">
          </div>
         <span style="color: #fff;">No global movement springs from individuals. It takes an entire team united behind something big. Together, we work hard, we laugh a lot, we brainstorm nonstop, we use hundreds of Post-Its a week, and we give the best high-fives in team.
    </span>

    </div>
            <div class="s-12 m-12 l-5" >
        
    <div style="float: right;">
    <span><a href="index.html" style="color: #fff;">Home</a></span ><span style="color: #fff;">&nbsp;&nbsp;/&nbsp;&nbsp;</span><span><a href="product.html" style="color: #fff;">product</a></span>
    </div>
    </div>
    </section>
    </div>              
</div>
 </header>  
<section class="background-dark" style="padding: 40px;">
  <!-------------------row 1 end---------------------------->
<div class="container">

<!-- Grid row -->
<div class="row">

 
<?php foreach ($get_products_list as $rows_th) {
	$product_id = $rows_th->id;
	$title = $rows_th->title;
	$width = $rows_th->width;
	$depth = $rows_th->depth;
	$story = $rows_th->story;
	$image = $rows_th->img;

?>

  <div class="col-lg-4 col-md-6 mb-4"> 
    <div class="card">
    <div class="modal fade" id="modalP-<?php echo $product_id; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
          <div class="modalbox">
             <a href="#"><span id="cross" aria-hidden="true" data-dismiss="modal" style="font-size: 25px;float: right;">&times;</span></a>
          </div>
          <div class="modal-body mb-0 p-0">
            <div class="embed-responsive embed-responsive-16by9 z-depth-1-half modalbox2">
             <img src="<?= base_url('images/'.$image.''); ?>" style="width: 100%;">
            </div>
          </div>
         
        </div>
      </div>
    </div>
  <div class="on">
   <i class="fa fa-heart-o" id="heart-2"></i>
  <a><img class="img-fluid z-depth-1" src="<?= base_url('images/'.$image.''); ?>" alt="<?php echo $title; ?>" data-toggle="modal" data-target="#modalP-<?php echo $product_id; ?>" class="image">
  <div class="middle">
   <a href="" data-toggle="modal" data-target="#modalP-<?php echo $product_id; ?>"><i  class="fa fa-search-plus" aria-hidden="true" id="fonts"></i></a> 
  </div>
  </a>
</div>
        <div class="card-body">
          <div class="row">
            <div class="col-lg-8">
            <div class="row">
            <div class="col-lg-8">
            <h4 class="card-title" style="color: #002633"><?php echo $title; ?></h4>
            </div>
            
          </div>
            </div>
          </div>

          <div class="row text-center">
            <div class="col-lg-4 col-md-4 col-xs-4 border-1 u1">
              <h5><?php echo $width; ?></h5>
            </div>
            <div class="col-lg-4 col-md-4 col-xs-4 border-1 u1">
               <h5><?php echo $depth; ?></h5>
            </div>
            <div class="col-lg-4 col-md-4 col-xs-4 border-2 u1">
               <h5><?php echo $story; ?></h5>
            </div>
          </div>
           <div class="row text-center">
            <div class="col-lg-4 col-md-4 col-xs-4 border-4 u1">
              <h5>Width</h5>
            </div>
            <div class="col-lg-4 col-md-4 col-xs-4 border-4 u1">
               <h5>Depth</h5>
            </div>
            <div class="col-lg-4 col-md-4 col-xs-4  u1">
               <h5 style="color: #002633">Story</h5>
            </div>
          </div>
          <a class="button button-dark-stroke text-size-12"  href="#" style="margin-top: 20px;">View Details</a>
        </div>
</div>
  </div>
<?php } ?>
  
</div>
 <!---------------------------card Three start------------------------->
 <!---------------------------card fourth start------------------------->

  <center> 
  <div class="row">
		  <div class="col-lg-12 text-center">
			<a class="button button-dark-stroke text-size-12" href="#" style="border: 1px solid #fff;color: #fff;">LOAD MORE</a>
		  </div>
   </div>
   </center>
</div>

</section>
<div class="container">
  <div class="line">
          <h2 class="text-size-50 text-center">Featured Projects</h2>
          <hr class="break-small background-primary break-center">
        </div>
<!---------------------------card fourth start------------------------->
<!-- Grid row -->
<div class="row">

  <!-- Grid column -->
  <div class="col-lg-4 col-md-12 mb-4">
     <div class="card">
    <div class="modal fade" id="modal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
          <div class="modalbox">
             <a href="#"><span id="cross" aria-hidden="true" data-dismiss="modal" style="font-size: 25px;float: right;">&times;</span></a>
          </div>
          <div class="modal-body mb-0 p-0">
            <div class="embed-responsive embed-responsive-16by9 z-depth-1-half">
             <img src="<?= base_url('assets/front/img/portfolio/thumb-04.jpg'); ?>" style="width: 100%;">
            </div>
          </div>
        </div>
      </div>
    </div>
       <div class="on">
        <i class="fa fa-heart-o" id="heart-2"></i>
        <a><img class="img-fluid z-depth-1" src="<?= base_url('assets/front/img/portfolio/thumb-04.jpg'); ?>" alt="video"data-toggle="modal" data-target="#modal2" class="image">
          <div class="middle">
          <a href="" data-toggle="modal" data-target="#modal2"><i  class="fa fa-search-plus" aria-hidden="true" id="fonts"></i></a> 
         </div>
        </a>
      </div>
           <div class="card-body">
         <div class="row">
            <div class="col-lg-8">
            <h4 class="card-title" style="color: #002633">Title</h4>
            </div>
            
          </div>
          <div class="row text-center">
            <div class="col-lg-4 col-md-4 col-xs-4 border-1 u1">
              <h5>30</h5>
            </div>
            <div class="col-lg-4 col-md-4 col-xs-4 border-1 u1">
               <h5>60</h5>
            </div>
            <div class="col-lg-4 col-md-4 col-xs-4 border-2 u1">
               <h5>2</h5>
            </div>
          </div>
           <div class="row text-center">
            <div class="col-lg-4 col-md-4 col-xs-4 border-4 u1">
              <h5>Width</h5>
            </div>
            <div class="col-lg-4 col-md-4 col-xs-4 border-4 u1">
               <h5>Depth</h5>
            </div>
            <div class="col-lg-4 col-md-4 col-xs-4  u1">
               <h5 style="color: #002633">Story</h5>
            </div>
          </div>
          <a class="button button-dark-stroke text-size-12"  href="#" style="    margin-top: 20px;">View Details</a>
        </div>
</div>
  </div>
 <!---------------------------card fourth end------------------------->
 <!---------------------------card five start------------------------->
  <div class="col-lg-4 col-md-6 mb-4">
     <div class="card">
    <div class="modal fade" id="modal5" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
          <div class="modalbox">
             <a href="#"><span id="cross" aria-hidden="true" data-dismiss="modal" style="font-size: 25px;float: right;">&times;</span></a>
          </div>
          <div class="modal-body mb-0 p-0">
            <div class="embed-responsive embed-responsive-16by9 z-depth-1-half">
             <img src="<?= base_url('assets/front/img/portfolio/thumb-05.jpg'); ?>" style="width: 100%;">
            </div>
            </div>
        </div>
      </div>
    </div>
    <i class="fa fa-heart-o" id="heart-2"></i>
    <a><img class="img-fluid z-depth-1" src="<?= base_url('assets/front/img/portfolio/thumb-05.jpg'); ?>" alt="video"
        data-toggle="modal" data-target="#modal5">
      <div class="middle">
   <a href="" data-toggle="modal" data-target="#modal5"><i  class="fa fa-search-plus" aria-hidden="true" id="fonts"></i></a> 
  </div></a>
           <div class="card-body">
         <div class="row">
            <div class="col-lg-8">
            <h4 class="card-title" style="color: #002633">Title</h4>
            </div>
            
          </div>
          <div class="row text-center">
            <div class="col-lg-4 col-md-4 col-xs-4 border-1 u1">
              <h5>30</h5>
            </div>
            <div class="col-lg-4 col-md-4 col-xs-4 border-1 u1">
               <h5>60</h5>
            </div>
            <div class="col-lg-4 col-md-4 col-xs-4 border-2 u1">
               <h5>2</h5>
            </div>
          </div>
           <div class="row text-center">
            <div class="col-lg-4 col-md-4 col-xs-4 border-4 u1">
              <h5>Width</h5>
            </div>
            <div class="col-lg-4 col-md-4 col-xs-4 border-4 u1">
               <h5>Depth</h5>
            </div>
            <div class="col-lg-4 col-md-4 col-xs-4  u1">
               <h5 style="color: #002633">Story</h5>
            </div>
          </div>
          <a class="button button-dark-stroke text-size-12"  href="#" style="    margin-top: 20px;">View Details</a>
        </div>
</div>
  </div>
 <!---------------------------card five end------------------------->
 <!---------------------------card six start------------------------->
  <div class="col-lg-4 col-md-6 mb-4">
     <div class="card">
    <div class="modal fade" id="modal3" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
          <div class="modalbox">
             <a href="#"><span id="cross" aria-hidden="true" data-dismiss="modal" style="font-size: 25px;float: right;">&times;</span></a>
          </div>
          <div class="modal-body mb-0 p-0">
            <div class="embed-responsive embed-responsive-16by9 z-depth-1-half">
             <img src="<?= base_url('assets/front/img/portfolio/thumb-06.jpg'); ?>" style="width: 100%;">
            </div>
          </div>
        </div>
      </div>
    </div>
    <i class="fa fa-heart-o" id="heart-2"></i>
    <a><img class="img-fluid z-depth-1" src="<?= base_url('assets/front/img/portfolio/thumb-06.jpg'); ?>" alt="video"
        data-toggle="modal" data-target="#modal3">
        <div class="middle">
   <a href="" data-toggle="modal" data-target="#modal3"><i  class="fa fa-search-plus" aria-hidden="true" id="fonts"></i></a> 
  </div>
      </a>
           <div class="card-body">
         <div class="row">
            <div class="col-lg-8">
            <h4 class="card-title" style="color: #002633">Title</h4>
            </div>
            
          </div>
          <div class="row text-center">
            <div class="col-lg-4 col-md-4 col-xs-4 border-1 u1">
              <h5>30</h5>
            </div>
            <div class="col-lg-4 col-md-4 col-xs-4 border-1 u1">
               <h5>60</h5>
            </div>
            <div class="col-lg-4 col-md-4 col-xs-4 border-2 u1">
               <h5>2</h5>
            </div>
          </div>
           <div class="row text-center">
            <div class="col-lg-4 col-md-4 col-xs-4 border-4 u1">
              <h5>Width</h5>
            </div>
            <div class="col-lg-4 col-md-4 col-xs-4 border-4 u1">
               <h5>Depth</h5>
            </div>
            <div class="col-lg-4 col-md-4 col-xs-4  u1">
               <h5 style="color: #002633">Story</h5>
            </div>
          </div>
          <a class="button button-dark-stroke text-size-12"  href="#" style="    margin-top: 20px;">View Details</a>
        </div>

  </div>
</div>
 <!---------------------------card six end------------------------->
</div>
 <!---------------------------card seven start------------------------->
</div>

<div class="container">
  <div class="row">
    <div class="col-lg-12">
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque fringilla massa vel lacinia semper. Donec dictum rutrum metus eu rutrum. Quisque vel rhoncus ipsum. Maecenas id augue consequat, molestie elit ut, rhoncus enim. Nullam tincidunt leo eget euismod facilisis. Sed eros eros, consectetur sed efficitur id, dictum eu diam. Vestibulum faucibus ut nunc ornare rhoncus. Praesent viverra eros eu ipsum placerat, nec euismod arcu egestas. Proin efficitur et augue vel semper. Proin dapibus elit eget aliquam placerat. </p>
    </div>
  </div>
</div>
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
<!-- Section 5 -->    
</main>
 <!-- FOOTER -->