<br><br><br>
<!--Card-->
<div class="col-md-3">
<!--Card-->
<div class="card testimonial-card">
    <!--Bacground color-->
    <div class="card-up">
    	 <img src="<?= get_image_url('cover.jpg'); ?>">
    </div>

    <!--Avatar-->
    <div class="avatar avatar-bg"><img src="<?= get_image_url($org_info->org_img); ?>" class="img-circle img-responsive">
    </div>

    <div class="card-block">
        <!--Name-->
        <h4 class="card-title"><?= $org_info->o_first_name .' '. $org_info->o_last_name; ?></h4>
        <hr>
        <!--Quotation-->
        <p><i class="fa fa-quote-left"></i> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eos, adipisci</p>
    </div>
 </div>
 </div>

<!--/.Card-->

<div class="col-md-9">
	<div class="card testimonial-card">
		<div class="card-block">
	    <h4>About me</h4>
            <hr>
            
            <div class="col-md-6 company">
            <h5 ><i class="fa fa-building"></i> Company Name</h5> 
            <p>Company Name hereeeee</p>
            </div>

           
            
            <div class="col-md-6 contact-info">
            <h5 ><i class="fa fa-lg fa-mobile"></i> Contact Info</h5>
            <p><i class="fa fa-phone"></i> 09099596749</p> 
            <p><i class="fa fa-fax"></i> 09093156284</p> 
            <p><i class="fa fa-inbox"></i> 09079281599</p>
            </div>

            <div class="col-md-6 skills">
            <h5 ><i class="fa fa-user"></i> Skills</h5> 

			<ul style="list-style-type:none;">
			<li>Coffee</li>
			<li>Tea</li>
			<li>Milk</li>
			</ul>
			</div>
			
           
           <div class="container" >
            <!--Social Icons-->

            <div class="col-md-12">
            <hr> 
            <ul class="inline-ul">
                <li><a class="icons-sm fb-ic"><i class="fa fa-facebook"></i></a></li>
                <li><a class="icons-sm tw-ic"><i class="fa fa-twitter"></i></a></li>
                <li><a class="icons-sm gplus-ic"><i class="fa fa-google-plus"></i></a></li>
                <li><a class="icons-sm li-ic"><i class="fa fa-linkedin"></i></a></li>
            </ul>
            </div>
    </div>       
	</div>
 </div>