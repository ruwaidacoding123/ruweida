<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>crud operation</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
</head>
<body>
    
<div class="container">
    <div class="row justify-cintente-center">
        <div class="col-sn-8">
             <h1 class="fs-3 text-center">User info</h1>
             <button class="btn btn-success float-right m-1" id="addNew">Add new Student</button>

            <table class="table" id="studentTable">
                <thead>
                    <tr>
                        <th>id</th>
                        <th>name</th>
                        <th>class</th>
                        <th>action</th>
                    </tr>
                </thead>

                <tbody>
             
                </tbody>
            </table>

         </div>


 


<!--

here is a modal pop-up

-->

<div class="modal" tabindex="-1" id="studentModal">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Modal title</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>

      <div class="modal-body">


        <form action="" id="studentForm">

             <div class="form-group m-2">
               <input type="text" name="id" id="id" class="form-control" placeholder="Enter Student Id">
             </div>
             <div class="form-group m-2">
               <input type="text" name="name" id="name" class="form-control" placeholder="Enter Student Name">
             </div>
             <div class="form-group m-2">
               <input type="text" name="class" id="class" class="form-control" placeholder="Enter Student Class">
             </div>
             <div class="modal-footer">
                <button type="submit" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Save changes</button>
             </div>

        </form>

      </div>
     
    </div>
  </div>
</div>

    
</div>
</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
<script src="designmain.js"></script>
</body>
</html>