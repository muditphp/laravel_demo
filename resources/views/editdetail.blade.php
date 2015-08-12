
<style>
.content-right{display:none;}
</style>
<!-- Code to extend the base layout -->
@extends("layout")
<!-- Code to add the content in section status -->
@section("status")
<?php 
/* Get the field values of selected row  */
foreach($user_rec as $rec)
{
$id = $rec->user_id;
$name = $rec->first_name;
$email = $rec->email;
$msg = $rec->message;

}
// Code for Edit form
  echo Form::open(array('action' => 'LoginController@update_rec', 'class'=>'update_rec_form','method' => 'PUT','role' => 'form')) ;
 
  echo "<h3 class='tag-line'>Your ID - ".$id."</h3>";
  echo Form::label('name',' Your new name');
  ?> <br> <?php
  echo Form::hidden('id', $id);
  echo Form::text('email', $name ,array('name' => 'fname'));
  ?> <br> <?php
  echo Form::label('email', 'New E-Mail Address'); ?> <br> <?php  
  echo Form::text('email', $email ,array('class' => 'email-field','placeholder' => 'abc@gmail.com','name' => 'u_email','value' => $rec->email  ));
  ?><br><?php
  echo Form::label('message', 'Change your Message : '); ?> <br> <?php  
  echo Form::textarea('msg',$msg);  ?> <br> <?php  
  echo Form::submit('Update Record',array('class' => 'submit','id' => 'update_rec' ));
  ?><a class='tag-line' href=<?php  echo URL::previous();  ?> > Cancel </a> <?php
       
 ?> <br> 
@stop 
