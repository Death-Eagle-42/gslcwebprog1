@section('title', 'Insert Staff')
@include('home')

@extends('footer')

<h1>Insert Staff</h1>
        <form action="/stores" method="POST">
          @csrf

            <div class="form-group">
              <label for="name">Full Name</label>
              <input type="text" class="form-control" name="name" id="name" placeholder="Name">
            </div>

            <div class="form-group">
              <label for="sid">ID</label>
              <input type="number" class="form-control" name="sid" id="sid" placeholder="Staff Id">
            </div>

            <div class="form-group">
                <label for="position">Position</label>
                <input type="text" class="form-control" name="position" id="position" placeholder="Position">
              </div>

            <button class="btn btn-primary">Add Staff</button>

        </form>
    </div>

</body>
</html>
