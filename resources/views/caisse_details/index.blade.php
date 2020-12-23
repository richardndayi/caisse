@extends('templates.default')
@section('content')
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#">
					<em class="fa fa-home"></em>
				</a></li>
				<li class="active">caisse_details</li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header"> caisse_details</h1>
			</div>
		</div><!--/.row-->
				
		
		<div class="row">
			<div class="col-lg-12">
				<div class="panel panel-default">
					<!-- <div class="panel-heading">Buttons</div> -->
					<div class="panel-body">
            <div>
                    <a href="{{url('caisse_details/create')}}" type="button" class="btn btn-sm btn-info">New</a> 

</div> 
	  <div class="col-md-12">
	  @foreach($caisses as $caisse)
	 <div class="form-group">
	<label>solde anterieur</label> 
									
	<input type="text"style="width:300px; height:35px " name="solde" class="form-control" placeholder="" value="{{$caisse->solde}}">
	@endforeach							
	</div>       
	<!-- <table>
	<tbody>
	@foreach($caisse_details as $caisse_detail)
	 <tr>
	 <td>{{$caisse_detail->solde}}</td>
	 </tr>
	 @endforeach
    </tbody>
	</table> -->

<div class="table-responsive">
<table id="datatable" class="table table-bordered table-hover table-striped">
<legend> details caisse </legend>
<thead>

<tr>
<td>ID</td>
<td>compte</td>
<td>caisse</td>
<td>encaissement</td>
<td>decaissement</td>
<td>libelle</td>

<td>solde</td>

<td>Action</td>

</tr>
</thead>


<tbody>
@foreach($caisse_details as $caisse_detail)
<tr>
<td>{{$caisse_detail->id}}</td>

<td>{{$caisse_detail->nom_compte}} &nbsp {{$caisse_detail->numero_compte}} </td> 
<td>{{$caisse_detail->numero_caisse}} </td>
<td>{{$caisse_detail->encaissement}} 
<td>{{$caisse_detail->decaissement}}</td>
<td>{{$caisse_detail->libelle}}</td>
<td>{{$caisse_detail->solde}}</td>



<td> <a href="caisse_details/edit/{{$caisse_detail->id}}" type="button" class="btn btn-sm btn-primary">
<span class="glyphicon glyphicon-edit">modifier</span></a>
<form action="caisse_details/destroy/{{$caisse_detail->id}}" method="POST">
@csrf
<button type="submit" value="" class="btn btn-sm btn-danger">Delete</button> 
</form>
</td>
</tr>

@endforeach
</tbody>
<tfoot>
<tr>
<td>total</td>
<td> </td>
<td> </td>
<td> </td>
<td> </td>
<td> </td>
<td> </td>
<td> total</td>
</tfoot>
</tr>
</table>
      
@endsection()