@extends("layout.layout") 
@section("title","To Do App")
@section("body")

<br><br><br>
<div class="row">
    <div class="col-lg-8"></div>
    <div class="col-lg-4">
        <a href="todo/create" class="btn btn-info">Create Item</a>
    </div>
</div>
<br><br>
<div class="row">
    <div class="col-lg-3"></div>
    <div class="col-lg-6">
        <ul class="list-group">
            <li class="list-group-item">
                This is nice
            </li>
        </ul>
    </div>
    <div class="col-lg-3"></div>
</div>

@endsection