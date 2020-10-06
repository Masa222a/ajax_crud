<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie-edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>

<!-- Add Student Data Modal -->
<div class="modal fade" id="studentaddmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
    <form id="addform">
      <div class="modal-body">
        <div class="form-group">
          <label>First Name</label>
          <input type="text" class="form-control" name="fname" placeholder="Enter First Name">
        </div>
        
        <div class="form-group">
          <label>Last Name</label>
          <input type="text" class="form-control" name="lname" placeholder="Enter Last Name">
        </div>
        
        <div class="form-group">
          <label>Course</label>
          <input type="text" class="form-control" name="course" placeholder="Enter Course">
        </div>
        
        <div class="form-group">
          <label>Section</label>
          <input type="text" class="form-control" name="section" placeholder="Enter Section">
        </div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save Student Data</button>
      </div>
    </form>
    </div>
  </div>
</div>

    <div class="container">
      <div class="jumbotron">
        <div class="row">
          <h1>Laravel CRUD - AJAX jQuery using Bootstrap MODAL</h1>
          <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#studentaddmodal">
            Student Add Data
          </button>
        </div>
      </div>
    </div>
    
    <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    
  </body>
</html>