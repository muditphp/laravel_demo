@extends('layout')
@section('status')
<h1> 
<!-- Code to display message after form submission-->
<?php  echo $name.' '.'ID - ';?>
<?php print_r($record);?>


</h1><span>Your Message has been sent successfully.</span>
@stop
