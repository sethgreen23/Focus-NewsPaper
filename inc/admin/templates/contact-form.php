<div class="contactform-page">	
	<form id="foucsContactForm" class="foucs-contact-form" action="#" method="post" data-url="<?php echo admin_url('admin-ajax.php'); ?>">

		<div class="form-group col-6 name-fild">
			<input 
				type="text" 
				class="form-control" 
				placeholder="Your Name" 
				id="name" 
				name="name" 
				required="required" >
			<p class="form-control-msg">Your Name is Required</p>
		</div>

		<div class="form-group col-6 email-fild">
			<input 
				type="email" 
				class="form-control" 
				placeholder="Your Email" 
				id="email" 
				name="email" 
				required="required" >
			<p class="form-control-msg">Your Email is Required</p>
		</div>

		<div class="form-group col-12 texarea-fild">
			<textarea name="message" id="message" class="form-control" placeholder="Your Message" required="required"></textarea>
			<p class="form-control-msg">A Message is Required</p>
		</div>
		
		<div class="text-center col-12 btn-fild">
			<button type="stubmit" class="btn-contact-form">Submit</button>
			<h5 class="text-info form-control-msg js-form-submission">Submission in process, please wait.. <i class="fas fa-sync fa-spin"></i></h5>
			<h5 class="text-success form-control-msg js-form-success">Message Successfully submitted <i class="fas fa-check"></i></h5>
			<h5 class="text-danger form-control-msg js-form-error">There was a problem with the Contact Form, please try again!</h5>
		</div>
		
	</form>
</div>