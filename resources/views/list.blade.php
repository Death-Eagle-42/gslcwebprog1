@section('title', 'Insert Staff')
@include('home')

@extends('footer')

    <div class="container_2">
      <div class="row">
        @foreach($staff as $staff)
          <div class="col-lg-4">
            <div class="card" style="width: 18rem;">
              <div class="card-body">
                <h5 class="card-title">{{$staff->sid}}</h5>
                <p class="card-text">Name: {{$staff->name}}</p>
                <p class="card-text">Position: {{$staff->position}}</p>

              <a href="/update/{{$staff->id}}" class="btn">Edit</a>

                <form action="/delete/{{$staff->id}}" method="POST">
                    @csrf
                    @method('delete')
                   <button class="btn">Delete</button>
                </form>
              </div>
            </div>
          </div>
        @endforeach
      </div>
    </div>
</body>
</html>
