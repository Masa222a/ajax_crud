<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie-edge">
    <title>Ajax_crud</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
    <!-- Add Student Data Modal -->
    <div class="modal fade" id="studentaddmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Add Data using AJAX jQuery</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          
          <form id="addform">
            <div class="modal-body">
              {{ csrf_field() }}
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
              <button type="button" class="btn btn-secondary" data-dismiss="modal">閉じる</button>
              <button type="submit" class="btn btn-primary">決定！</button>
            </div>
          </form>
          
        </div>
      </div>
    </div>
    <!-- Add Student Data Modal -->
    
    
    <!-- Edit Student Data Modal -->
    <div class="modal fade" id="studentEditModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Edit Data of Students using AJAX jQuery</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          
          <form id="editFormID">
            <div class="modal-body">
              {{ csrf_field() }}
              {{ method_field('PUT') }}
              
              <input type="hidden" name="id" id="id">
              
              <div class="form-group">
                <label>First Name</label>
                <input type="text" class="form-control" name="fname" id="fname" placeholder="Enter First Name">
              </div>
              
              <div class="form-group">
                <label>Last Name</label>
                <input type="text" class="form-control" name="lname" id="lname" placeholder="Enter Last Name">
              </div>
              
              <div class="form-group">
                <label>Course</label>
                <input type="text" class="form-control" name="course" id="course" placeholder="Enter Course">
              </div>
              
              <div class="form-group">
                <label>Section</label>
                <input type="text" class="form-control" name="section" id="section" placeholder="Enter Section">
              </div>
      
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary">Student Data Updated</button>
            </div>
          </form>
          
        </div>
      </div>
    </div>
    <!-- End of Student EDIT MODAL -->
    
    
    <!-- Delete Student Data Modal -->
    <div class="modal fade" id="studentdeleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header bg-danger">
            <h5 class="modal-title" id="exampleModalLabel">Delete Data of Students using AJAX jQuery</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          
          <form id="deleteFormID">
            
            <div class="modal-body">
              {{ csrf_field() }}
              {{ method_field('delete') }}
              
              <input type="hidden" name="id" id="delete_id">
              <p>Are you Sure !! you want to Delete this Data ?</p>
            </div>
            <div class="modal-footer bg-danger">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary">DELETE Student Data</button>
            </div>
            
          </form>
          
        </div>
      </div>
    </div>
    <!-- End of Student DELETE MODAL -->


    <div class="container">
      <div class="jumbotron">
        <div class="row">
          <h1>Laravel CRUD - AJAX jQuery using Bootstrap MODAL</h1>
          <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#studentaddmodal">
            データを追加する
          </button>
        </div>
        <br>
        <table class="table table-dark">
          <thead>
            <tr>
              <th scope="col">#ID</ht>
              <th scope="col">First Name</ht>
              <th scope="col">Last Name</ht>
              <th scope="col">コース</ht>
              <th scope="col">所属</ht>
              <th class="text-right">ACTION</ht>
            </tr>
          </thead>
          <tbody>
            @foreach ($students as $student)
              <tr>
                <td>{{ $student->id }}</td>
                <td>{{ $student->fname }}</td>
                <td>{{ $student->lname }}</td>
                <td>{{ $student->course }}</td>
                <td>{{ $student->section }}</td>
                <td>
                  <a href="#" class="btn btn-success editbtn">Edit</a>
                  <a href="#" class="btn btn-danger deletebtn">DELETE</a>
                </td>
              </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
    
    <script src="//cdnjs.cloudflare.com/ajax/libs/moment.js/2.9.0/moment.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <script>
      $('.deletebtn').on('click', function() {
        
        $('#studentdeleteModal').modal('show');
        
            $tr = $(this).closest('tr');
            
            var data = $tr.children("td").map(function() {
              return $(this).text();
            }).get();
            
            console.log(data);
            
            $('#delete_id').val(data[0]);
            
        });
        
        $('#deleteFormID').on('submit', function(e) {
          e.preventDefault();
          
          var id = $('#delete_id').val();
          
          $.ajax({
            type: "DELETE",
            url: "/studentdelete/"+id,
            data: $('#deleteFormID').serialize(),
            success: function (response) {
              console.log(response);
              $('#studentdeleteModal').modal('hide');
              alert("削除しました。");
              location.reload();
            },
            error: function(error) {
              console.log(error);
            }
          });
        });
    
    </script>  

    <script>
      $(document).ready(function() {
        
        $('.editbtn').on('click', function() {
          $('#studentEditModal').modal('show');
          $tr = $(this).closest('tr');
            
          var data = $tr.children("td").map(function() {
            return $(this).text();
          }).get();
          
          console.log(data);
          
          $('#id').val(data[0]);
          $('#fname').val(data[1]);
          $('#lname').val(data[2]);
          $('#course').val(data[3]);
          $('#section').val(data[4]);
        });
        
        $('#editFormID').on('submit', function(e) {
          e.preventDefault();
          
          var id = $('#id').val();
          
          $.ajax({
            type: "PUT",
            url: "/studentupdate/"+id,
            data: $('#editFormID').serialize(),
            success: function (response) {
              console.log(response);
              $('#studentEditModal').modal('hide');
              alert("編集しました。");
              location.reload();
            },
            error: function(error) {
              console.log(error);
            }
          });
        });
        
      });  
    </script>
    
    <script>
      $(document).ready(function() {
        
        $('#addform').on('submit', function(e){
          e.preventDefault();
          
          $.ajax({
            type: "POST",
            url: "/studentadd",
            data: $('#addform').serialize(),
            success: function (response) {
              console.log(response)
              $('#studentaddmodal').modal('hide')
              alert("保存しました。");
              // location.reload();
            },
            error: function(error){
              console.log(error)
              // alert("Data Not Saved");
            }
          });
        });
      });
    </script>
    
  </body>
</html>