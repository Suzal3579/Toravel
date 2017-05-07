@extends("layout.layout")

@section("title","Create")

@section("body")
<br><br><br>
<div class="row">
    <div class="col-lg-8"></div>
    <div class="col-lg-4">
        <a href="/todo" class="btn btn-info">Back</a>
    </div>
</div><br><br><br>
<div class="row">
    <div class="col-lg-3"></div>
    <div class="col-lg-6">
        <form class="form-horizontal" action="/todo" method="post">
            {{csrf_field()}}
            <fieldset>
                <legend>Enter The Field</legend>
                <div class="form-group">
                    <div class="col-lg-12">
                        {{-- tala ko textarea ko val affai return garrdo raixa k gari laravel le .... name mattra diye puggney --}}
                        <textarea class="form-control" name = "todo" rows="5" id="textArea"></textarea>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-lg-12">
                        <div class="col-lg-10">
                            <button type="reset" class="btn btn-danger">Cancel</button>
                        </div>
                        <div class="col-lg-2">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </div>
                </div>
            </fieldset>
        </form>
    </div>
    <div class="col-lg-3"></div>
</div>
<br><br>
@endsection