<div class="card-body table-responsive p-0">
<table class="table table-striped text-nowrap">
    <thead>
        <tr>
            <th>Nom</th>
            <th>Prenom</th>
            <th>Email</th>
            <th>Type</th>
            <th>action</th>
        </tr>
    </thead>
    <tbody id="membre-table">
        @foreach ($membres as $item)
            <tr>
                <td>{{$item->nom}}</td>
                <td>{{$item->prenom}}</td>
                <td>{{$item->email}}</td>
                <td>{{$item->type}}</td>
                <td>
                    <a href="./edit.html" class="btn btn-sm btn-default"><i
                            class="fa-solid fa-pen-to-square"></i></a>
                    <button type="button" class="btn btn-sm btn-danger"><i
                            class="fa-solid fa-trash"></i></button>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
</div>
<div class="card-footer clearfix mb-2 mr-5">
    <ul class="pagination  m-0 float-right">
        {{$membres->links()}}
    </ul>
</div>