<h1>Assign Permission</h1>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Assign Permisison</title>

<style>
table.blueTable {
  border: 1px solid #1C6EA4;
  background-color: #EEEEEE;
  width: 100%;
  text-align: left;
  border-collapse: collapse;
}
table.blueTable td, table.blueTable th {
  border: 1px solid #AAAAAA;
  padding: 3px 2px;
}
table.blueTable tbody td {
  font-size: 13px;
}
table.blueTable tr:nth-child(even) {
  background: #D0E4F5;
}
table.blueTable thead {
  background: #1C6EA4;
  background: -moz-linear-gradient(top, #5592bb 0%, #327cad 66%, #1C6EA4 100%);
  background: -webkit-linear-gradient(top, #5592bb 0%, #327cad 66%, #1C6EA4 100%);
  background: linear-gradient(to bottom, #5592bb 0%, #327cad 66%, #1C6EA4 100%);
  border-bottom: 2px solid #444444;
}
table.blueTable thead th {
  font-size: 15px;
  font-weight: bold;
  color: #FFFFFF;
  border-left: 2px solid #D0E4F5;
}
table.blueTable thead th:first-child {
  border-left: none;
}

table.blueTable tfoot {
  font-size: 14px;
  font-weight: bold;
  color: #FFFFFF;
  background: #D0E4F5;
  background: -moz-linear-gradient(top, #dcebf7 0%, #d4e6f6 66%, #D0E4F5 100%);
  background: -webkit-linear-gradient(top, #dcebf7 0%, #d4e6f6 66%, #D0E4F5 100%);
  background: linear-gradient(to bottom, #dcebf7 0%, #d4e6f6 66%, #D0E4F5 100%);
  border-top: 2px solid #444444;
}
table.blueTable tfoot td {
  font-size: 14px;
}
table.blueTable tfoot .links {
  text-align: right;
}
table.blueTable tfoot .links a{
  display: inline-block;
  background: #1C6EA4;
  color: #FFFFFF;
  padding: 2px 8px;
  border-radius: 5px;
}
.text-center{
    text-align: center;
}
    

</style>
</head>
<body>
    <table class="blueTable">
        <thead>
        <tr>
        <th>Role</th>
        <th>Page</th>
        <th class="text-center">Create</th>
        <th class="text-center">Read</th>
        <th class="text-center">Update</th>
        <th class="text-center">Delete</th>
        <th class="text-center">Print</th>
        <th class="text-center">Export</th>
        <th class="text-center">Approve</th>
        </tr>
        </thead>
        <tbody>
        <tr>
        <td>Admin</td>
        <td>Form</td>
        <td class="text-center"><input type="checkbox" class="role-permission" data-page="form" data-key="create" data-role="Admin"><br></td>
        <td class="text-center"><input type="checkbox" class="role-permission" data-page="form" data-key="read" data-role="Admin"><br></td>
        <td class="text-center"><input type="checkbox" class="role-permission" data-page="form" data-key="update" data-role="Admin"><br></td>
        <td class="text-center"><input type="checkbox" class="role-permission" data-page="form" data-key="delete" data-role="Admin"><br></td>
        <td class="text-center"><input type="checkbox" class="role-permission" data-page="form" data-key="print" data-role="Admin"><br></td>
        <td class="text-center"><input type="checkbox" class="role-permission" data-page="form" data-key="export" data-role="Admin"><br></td>
        <td class="text-center"><input type="checkbox" class="role-permission" data-page="form" data-key="approve" data-role="Admin"><br></td>
        </tr>
        <tr>
        <td>Manager</td>
        <td>Form</td>
        <td class="text-center"><input type="checkbox" class="role-permission" data-page="form" data-key="create" data-role="Manager"><br></td>
        <td class="text-center"><input type="checkbox" class="role-permission" data-page="form" data-key="read" data-role="Manager"><br></td>
        <td class="text-center"><input type="checkbox" class="role-permission" data-page="form" data-key="update" data-role="Manager"><br></td>
        <td class="text-center"><input type="checkbox" class="role-permission" data-page="form" data-key="delete" data-role="Manager"><br></td>
        <td class="text-center"><input type="checkbox" class="role-permission" data-page="form" data-key="print" data-role="Manager"><br></td>
        <td class="text-center"><input type="checkbox" class="role-permission" data-page="form" data-key="export" data-role="Manager"><br></td>
        <td class="text-center"><input type="checkbox" class="role-permission" data-page="form" data-key="approve" data-role="Manager"><br></td>
        </tr>
        <tr>
        <td>Officer</td>
        <td>Form</td>
        <td class="text-center"><input type="checkbox" class="role-permission" data-page="form" data-key="create" data-role="Officer"><br></td>
        <td class="text-center"><input type="checkbox" class="role-permission" data-page="form" data-key="read" data-role="Officer"><br></td>
        <td class="text-center"><input type="checkbox" class="role-permission" data-page="form" data-key="update" data-role="Officer"><br></td>
        <td class="text-center"><input type="checkbox" class="role-permission" data-page="form" data-key="delete" data-role="Officer"><br></td>
        <td class="text-center"><input type="checkbox" class="role-permission" data-page="form" data-key="print" data-role="Officer"><br></td>
        <td class="text-center"><input type="checkbox" class="role-permission" data-page="form" data-key="export" data-role="Officer"><br></td>
        <td class="text-center"><input type="checkbox" class="role-permission" data-page="form" data-key="approve" data-role="Officer"><br></td>
        </tr>
        <tr>
        <td>Teacher</td>
        <td>Form</td>
        <td class="text-center"><input type="checkbox" class="role-permission" data-page="form" data-key="create" data-role="Teacher"><br></td>
        <td class="text-center"><input type="checkbox" class="role-permission" data-page="form" data-key="read" data-role="Teacher"><br></td>
        <td class="text-center"><input type="checkbox" class="role-permission" data-page="form" data-key="update" data-role="Teacher"><br></td>
        <td class="text-center"><input type="checkbox" class="role-permission" data-page="form" data-key="delete" data-role="Teacher"><br></td>
        <td class="text-center"><input type="checkbox" class="role-permission" data-page="form" data-key="print" data-role="Teacher"><br></td>
        <td class="text-center"><input type="checkbox" class="role-permission" data-page="form" data-key="export" data-role="Teacher"><br></td>
        <td class="text-center"><input type="checkbox" class="role-permission" data-page="form" data-key="approve" data-role="Teacher"><br></td>
        </tr>
        </tbody>
    </table>


    <script src="{{ url('/js/jquery.min.js') }}"></script>

    <script>
        $(document).ready(function(){
            $(document).on('click', '.role-permission', function(){
                var roleName = $(this).attr('data-role');
                var page = $(this).attr('data-page');
                var key = $(this).attr('data-key');
                var val = 0;
                if($(this).is(':checked')){ val = 1; }

                $.ajax({
                    type: "post",
                    url: "{{ url('/permission') }}",
                    data: {
                        "_token": "{{ csrf_token() }}",
                        role: roleName,
                        page: page,
                        key: key,
                        value: val
                    },
                    success: function(){
                        console.log('Assigned - ' + key + ' = ' + val + ' - to ' + roleName);
                    },
                    error: function(err){
                        console.log(err);
                    }
                });
            });
        });
    </script>
</body>
</html>