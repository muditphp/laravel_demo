<html>
<link rel="stylesheet" href="<?php echo URL::asset('css/styles.css');?>" />
<script type="text/javascript" src="<?php echo URL::asset('js/jquery_functions.js'); ?>"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script type="text/javascript"> 
/* jQuery(document).ready(function(){
     jQuery("#update_rec").click(function(e) 
     {   e.preventDefault();    
	jQuery.ajax({
    url: "",
	type: "POST",
	data:  new FormData(this),
	contentType: false,
	cache: false,
	processData:false,
	success: function(data)
	{
		jQuery("table#collection").append("<tr id='newrec'>"+data+"</tr>");
	},
	error: function(){
		alert('error:-  ' + eval(error));
		}
});
}); 
	
});
*/ </script>

	    <body>
	    <div class='header'>
		<div class='title'> XYZ </div>	
		<div class='tag-line'> ....Tag Line....</div>		
	    </div>
	    <div class='navigation'> 
	    <ul> 
	    <li> <a href="../home"> Home </a></li>
	    <li> <a class='about' href='../about'>About Us </a></li>
	    <li> <a href='../record'>View Records</a></li>
	    	    </ul>
	    </div> 
	    <div class='content'>
			<div class='status'>
        @yield('status')
        </div>
	    <div class='content-left'>
        @yield('content-left')
        
        
        </div>
         <div class='content-right'>
			<h3>Fill out the form to get in touch with us..</h3>
        <!-- Form Content-->
       <?php 
        echo Form::open(array('action' => 'LoginController@try_login', 'class'=>'login_form','method' => 'PUT','id'=>'login_reg_form', 'role' => 'form','name' => 'queryform')) ;
        echo Form::token();
        echo Form::label('name', 'Enter your good name');
        echo Form::text('name','',array('class' => 'name-field','name' => 'uname'));
      
      ?> <br> <?php
       echo Form::label('email', 'E-Mail Address');
       echo Form::text('email', '',array('class' => 'email-field','placeholder' => 'abc@gmail.com','name' => 'email' ));
     ?> 
     <br> 
       <?php
       echo Form::label('message', 'Your Message : ');
       echo Form::textarea('message'); 
       echo Form::submit('Send Your Query',array('class' => 'submit','id' => 'submit_query'));
       ?>
   <!-- Code to display errors if any -->
        @if (count($errors) > 0)
   
        <ul>
		 @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
         @endforeach
          
        </ul>

        @endif
      </div>
     </div>
  </body>
</html>
