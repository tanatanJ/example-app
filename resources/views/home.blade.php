@extends('layout.default')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @section('title','65160335')
    <style>
        .col-md-6 {
            margin: 0 auto;
        }
    </style>
</head>
<body>
    @section('content')
    <!-- left column -->
    <div class="col-md-6">
        <!-- general form elements -->
        <div class="card card-primary">
          <div class="card-header">
            <h3 class="card-title">Workshop#HTML-FORM</h3>
          </div>
          <!-- /.card-header -->
          <!-- form start -->
          <form>
            <div class="card-body">
              <div class="form-group">
                <label for="exampleInputEmail1">First Name</label>
                <input type="text" class="form-control" id="fname" placeholder="Enter First Name">
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">Last Name</label>
                <input type="text" class="form-control" id="lname" placeholder="Enter Last Name">
              </div>
              <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">Birth Date</label>
                <input type="date" class="form-control" id="date" placeholder="Enter Last Name">
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">Age</label>
                <input type="numbeer" class="form-control" id="age" placeholder="Enter Age">
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">Gentle</label>
                <select class="form-control">
                    <option>Male</option>
                    <option>Female</option>
                </select>
              </div>
              <div class="form-group">
                <label for="exampleInputFile">Picture input</label>
                <div class="input-group">
                  <div class="custom-file">
                    <input type="file" class="custom-file-input" id="exampleInputFile">
                    <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                  </div>
                  <div class="input-group-append">
                    <span class="input-group-text">Upload</span>
                  </div>
                </div>
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">Address</label>
                <textarea class="form-control" rows="3" placeholder="Enter Address"></textarea>
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">Favorite color</label>
                <input type="color" class="form-control" id="color">
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">Favorite song</label>
                <select class="form-control">
                    <option>Hiphop</option>
                    <option>Country</option>
                    <option>Jazz</option>
                </select>
              </div>
              <div class="form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">I accept Terms&Conditions</label>
              </div>
            </div>
            <!-- /.card-body -->
            <div class="card-footer">
              <button type="submit" class="btn btn-primary">Submit</button>
            </div>
          </form>
        </div>
        <!-- /.card -->
      <!--/.col (left) -->
    <!-- /.content -->
</body>
</html>



@endsection
