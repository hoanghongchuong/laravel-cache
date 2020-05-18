@extends('frontend.layout')
@section('content')
<div class="container">
    <div class="row justify-content-center">
    	<div class="box-search">
    		<form class="form-inline">
			  
			  <div class="form-group mb-2">
			    <label for="" class="sr-only">Search</label>
			    <input type="text" class="form-control" id="search" placeholder="Search">
			  </div>
			  <button type="submit" class="btn btn-primary mb-2">Search</button>
			</form>
    	</div>
        <div class="pagination">
        	{!! $result->links() !!}
        </div>

        @foreach ($result as $post)
            <div class="col-md-8" style="margin-bottom: 10px">
                <div class="card">
                    <div class="card-header"><b>({{ $post->id }})</b> {{ $post->title }}</div>
                    <div class="card-body">
                        {{ $post->content }}
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection