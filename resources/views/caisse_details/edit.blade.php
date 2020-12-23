@extends('templates.default')
@section('content')

<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#">
					<em class="fa fa-home"></em>
				</a></li>
				<li class="active">caisse_detail</li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">caisse_detail</h1>
			</div>
		</div><!--/.row-->
				
		
		<div class="row">
			<div class="col-lg-12">
				<div class="panel panel-default">
					<!-- <div class="panel-heading">Buttons</div> -->
					<div class="panel-body">
						<form role="form-" action="/caisse_details/{{$caisse_detail->id}}" method="POST">
						@csrf
                        @method('PUT')
						
						<table>
						<tr>
						<td>
						<div class="form-group">
						<label>Nom Compte</label> 
						<select name="compte_id" style="width:300px; height:35px ;background:gray; color:white" id="" class="form-control"
						class="@error('nom_compte') is-danger @enderror"> 
						<option value="" >Select Nom Compte</option>
						@foreach($comptes as $compte)
                        <option value="{{$compte->id}}">{{$compte->nom_compte}}</option>
						@endforeach
						@error('compte_id')
						<div class="alert alert-danger">{{$message}}</div>
						@enderror
						</select>
					</div>
					<div class="form-group">
						<label>caisse</label> 
						<select name="caisse_id" style="width:300px; height:35px ;background:gray; color:white" id="" class="form-control"
						class="@error('numero_caisse') is-danger @enderror"> 
						<option value="" >Select caisse</option>
						@foreach($caisses as $caisse)
                        <option value="{{$caisse->id}}">{{$caisse->numero_caisse}}</option>
						@endforeach
						@error('caisse_id')
						<div class="alert alert-danger">{{$message}}</div>
						@enderror
						</select>
					</div>
					

					<div class="form-group">
					<label>encaissement</label> 
									
					<input type="text"style="width:300px; height:35px ;background:gray; color:white" name="encaissement" class="form-control" placeholder="" value="{{$caisse_detail->encaissement}}">
									
					</div>
                   
				   </td>
				   <td style="width:20%"> </td>
				   <td>
					<div class="form-group">
					<label>decaissement</label> 
									
					<input type="text" style="width:300px; height:35px ;background:gray; color:white" name="decaissement" class="form-control" placeholder="" value="{{$caisse_detail->decaissement}}">
									
					</div>

					<label >libelle</label> 
									
					<input type="text" style="width:300px; height:35px ;background:gray; color:white" name="libelle" class="form-control" placeholder="" value="{{$caisse_detail->libelle}}">
									
				     </div>
					
					</td>
					</tr>
					</table>

								<div class="form-group">
									<div class="col-md-5 widget-right">
									<!-- <button type="submit" class="btn btn-sm btn-default">Save</button> -->
							<button type="submit" class="btn btn-sm btn-success">enregistrer</button>
									</div>
								</div>
					</form>
										
						</div> 
					</div>
				</div>
      
@endsection
