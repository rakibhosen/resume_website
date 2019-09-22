@extends('backend.layout.master')

@section('content')

<div class="main-panel">
     <div class="content-wrapper">
          <div class="card">
            <div class="card-header">
            <!-- start  modal Button trigger modal -->
<button type="button" class="btn btn-primary float-right" data-toggle="modal" data-target="#exampleModalCenter">
 Add social
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Add</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

        <form action="{{ route('admin.social.store') }}" method="post"  enctype="multipart/form-data">
                     {{ csrf_field() }}
               
                          
              <div class="form-group">
              <label for="exampleInputEmail1">Facebook link</label>
              <input type="text" class="form-control" name="facebook" >
            </div>

            <div class="form-group">
              <label for="exampleInputEmail1">Google link</label>
              <input type="text" class="form-control" name="google" >
            </div>

            <div class="form-group">
              <label for="exampleInputEmail1">linkedin link</label>
              <input type="text" class="form-control" name="linkedin" >
            </div>

            <div class="form-group">
              <label for="exampleInputEmail1">youtube link</label>
              <input type="text" class="form-control" name="facebook" >
            </div>
      
       
      

          <div class="modal-social">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save</button>
      </div>
                
       </form>
      </div>
  
    </div>
  </div>
</div>
            </div>
                <div class="card-body">
                
     <!-- ====== table start ===== -->
     <table class="table table-dark">
  <thead>
    <tr>
     <th>#</th>
     <th scope="col">Name</th>
     <th scope="col"> Title</th>
  

     <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
 
    @foreach($socials as $social)
    <tr>
      <td>{{$loop->index+1}}</td>
      <td>{{ $social->facebook }}</td>
      <td>{{ $social->google }}</td>
      <td>{{ $social->linkedin }}</td>
      <td>{{ $social->youtube }}</td>

    <td><a href="#edit_social{{ $social->id }}" data-toggle="modal" class="btn btn-primary">Edit</a>

     <a href="#delete_social{{ $social->id }}" class="btn btn-danger" data-toggle="modal" >Delete</a>
      </td>

<!-- delete Modal............ -->
<div class="modal fade" id="delete_social{{ $social->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel "style="color:#0000;">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       <h5>Are you sure ?</h5>
      </div>
      <div class="modal-social">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

        <form action="{{route('admin.social.delete',$social->id) }}" method="post">
          {{ csrf_field() }}
        <button type="submit" class="btn btn-primary">Yes</button>
        </form>

      </div>
    </div>
  </div>
</div>
<!-- edit modal ......................-->
            

<!-- Modal -->
<div class="modal fade" id="edit_social{{ $social->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Update social</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

      <form action="{{ route('admin.social.update',$social->id) }}" method="post"  enctype="multipart/form-data">
             {{ csrf_field() }}
                        
             <div class="form-group">
              <label for="exampleInputEmail1">Facebook link</label>
              <input type="text" class="form-control" name="facebook" >
            </div>

            <div class="form-group">
              <label for="exampleInputEmail1">Google link</label>
              <input type="text" class="form-control" name="google" >
            </div>

            <div class="form-group">
              <label for="exampleInputEmail1">linkedin link</label>
              <input type="text" class="form-control" name="linkedin" >
            </div>

            <div class="form-group">
              <label for="exampleInputEmail1">youtube link</label>
              <input type="text" class="form-control" name="facebook" >
            </div>
      


          <div class="modal-social">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save</button>
      </div>
                
       </form>
      </div>
  
    </div>
  </div>
      </td>

    </tr>
    @endforeach

  </tbody>
</table>
     <!-- ====== table end ===== -->
              </div>
              </div>
          </div>
        </div>

@endsection