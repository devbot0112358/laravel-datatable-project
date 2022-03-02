


{"data": ""},
columnDefs: [{
targets: -1,
render: function(data,type,row){
return '<a class="btn btn-xs btn-info" href="#">Edit</a>' +
'<form action="#" method="POST" style="display:inline">' +
    '<input type="hidden" name="_method" value="POST" />' +
    '<input type="hidden" name="_token" value="{{ csrf_token() }}" />' +
    '<input type="submit" class="btn btn-xs btn-danger" value="Delete" />'+
    '</form>';
}
}]
