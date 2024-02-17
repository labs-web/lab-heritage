@extends('layouts.app')
@section('content')

<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">

            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title btnAdd">Ajouter membre</h3>
                </div>
                <form>
                    <div class="card-body">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Nom </label>
                            <input name="nom" type="text" class="form-control"
                                id="exampleInputEmail1">
                        </div>

                        <div class="form-group">
                            <label for="exampleInputPassword1">Prenom</label>
                            <input name="Prenom" type="text" class="form-control"
                                id="exampleInputPassword1" placeholder="Enter Prenom">
                        </div>

                        <div class="form-group">
                            <label for="exampleInputPassword1">Email</label>
                            <input name="startDate" type="email" class="form-control"
                                id="exampleInputPassword1" placeholder="Enter Email">
                        </div>
                    </div>

                    <div class="card-footer">
                        <a href="" class="btn btn-default">Cancel</a>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>
    
@endsection