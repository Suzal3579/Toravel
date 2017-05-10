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
    <div class="col-lg-2"></div>
    <div class="col-lg-6">
        <ul class="list-group">
            @foreach($values as $val)
            <li class="list-group-item">
                {{-- $val->todo because table ma column name todo xa...  --}}
                {{$val->todo}}
                {{-- Using carbon function diffForHumans() --}}
                <span class = "pull-right">{{$val->created_at->diffForHumans()}}</span>
            </li>
            @endforeach
        </ul>
    </div>
    <div class="col-lg-4">
        <ul class="list-group" style = "list-style-type:none;">
            @foreach($values as $valHere)
            <form action = "{{"todo/".$valHere->id}}" method = "post">
               {{csrf_field()}}
               {{method_field("DELETE")}}
               <li>
                    <button type = "submit" class = "btn btn-info btn-sm">
                    Delete
                    </button>
               </li>
            </form>
            @endforeach
        </ul>
    </div>
</div>
@endsection