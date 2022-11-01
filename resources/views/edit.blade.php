@section('title', 'Edit Staff')
@include('home')

@extends('footer')

<h1>Edit Staff</h1>
        <form action="/update/{{$staff->id}}" method="POST">
          @csrf
          @method('put')

            <div class="form-group">
              <label for="name">Full Name</label>
              <input type="text" class="form-control" value="{{$staff->name}}" name="name" id="name" placeholder="Name">
            </div>

            <div class="form-group">
              <label for="sid">Staff Id</label>
              <input type="number" class="form-control" value="{{$staff->nim}}" name="sid" id="sid" placeholder="Staff Id">
            </div>

            <div class="form-group">
                <label for="position">Grade</label>
                <input type="text" class="form-control" value="{{$staff->grade}}" name="position" id="position" placeholder="Position">
              </div>

              <a href="/list" class="btn btn-success">Back</a>
            <button class="btn">Save Edit</button>

        </form>
    </div>

</body>
</html>
