<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css" rel="stylesheet" >
        <!-- Styles -->
        <link href="https://cdn.datatables.net/buttons/2.2.2/css/buttons.dataTables.min.css" rel="stylesheet" >


        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>
    <body >

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
	<a class="navbar-brand ml-3" href="#"> <i class="fa-solid fa-table-cells"></i></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar1" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbar1">
    <ul class="navbar-nav ml-auto">
<li class="nav-item active">
<a class="nav-link" href="{{route('admin.home')}}">Home <span class="sr-only">(current)</span></a>
</li>

    </ul>
  </div>
</nav>

        <div class="container">
            <div class="row">
                <div class="card">
                    <div class="card-header">
                        <h5>Clients Info</h5>
                    </div>
                    <div class="card-body">
                        <table class="table  table-bordered border-primary" id="datatable">
                            <thead>
                            <tr>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Phone</th>
                                <th>Company</th>
                                <th>Action</th>

                            </tr>
                            </thead>
                            <tbody>
                            </tbody>
                        </table>
                    </div>
                </div>

            </div>
        </div>
<!-- .//container -->

<br><br><br><br><br><br><br><br><br><br>
<article class="bg-secondary mb-3">
<div class="card-body text-center">
    <h4 class="text-white">Data Table Project <br> THis is jquery Datatable. </h4>
<p class="h5 text-white"> By this anyone can easily show their data , by this is you can sort data and filter data and arrange as you wanted.</p> <br>

</div>
<br><br>
</article>

    </body>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.2.2/js/dataTables.buttons.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.2.2/js/buttons.colVis.min.js"></script>

    <script>
    $(document).ready( function () {
        $('#datatable').DataTable({
            "processing": true,
            "serverSide": true,
            "ajax": "{{ route('admin.dataset') }}",
            "columns":[
                {"data": "name"},
                {"data": "email"},
                {"data": "phone"},
                {"data": "company"},
                {"data":""}
            ],
            columnDefs: [{
                targets: -1,
                render: function(data,type,row){
                    return '<a class="btn btn-xs btn-info" href="/dataedit/'+ row['client_id'] +'">Edit</a>' +
                        '<form action="/delete/'+ row['client_id'] +'" method="POST" style="display:inline">' +
                        '<input type="hidden" name="_method" value="POST" />' +
                        '<input type="hidden" name="_token" value="{{ csrf_token() }}" />' +
                        '<input type="submit" class="btn btn-xs btn-danger" value="Delete" />'+
                        '</form>';
                }
            }]
        });
    });
            </script>

</html>
