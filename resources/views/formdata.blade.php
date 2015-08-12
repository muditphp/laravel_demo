<style>
.content-right{display:none;}
.content-left {
display:none;
}
table {
  text-align: left;
  width: 100%;
}


</style>
<!-- Code to extend the base layout -->
@extends('layout')
<!-- Code to add the content in section status -->
@section('status')
<h1> 
Record
</h1>
<?php 
// Code to Display all the records
$html ='';
$html .= '<table border=1px><th>User ID</th><th>Name</th> <th> Email</th> <th>Message</th><th>Edit</th><th>Delete</th>';
foreach($record as $rec)
{
	$html .= '<tr><td>'.$rec->user_id.'</td>';
	$html .= '<td>'.$rec->first_name.'</td>';
	$html .= '<td>'.$rec->email.'</td>';
	$html .= '<td>'.$rec->message.'</td>';
	$html .= "<td><a href='/editrecord?id=".$rec->user_id."'>";
    $html .= Html::image('icons/edit.png', 'Edit', array( 'width' => 50, 'height' => 50 )) ;
    $html .="</a></td>";
	$html .= "<td><a href='/delrecord?id=".$rec->user_id."'>";
    $html .= Html::image('icons/delete.png', 'DELETE', array( 'width' => 50, 'height' => 50 )) ;
    $html .="</a></td></tr>";   
   
}

echo $html;
?>

@stop
@section('form')

@stop
