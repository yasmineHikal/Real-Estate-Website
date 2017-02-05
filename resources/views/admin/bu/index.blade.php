@extends('admin.layouts.layout')

@section('title')
control RealEstate

@endsection

@section('header')

    <!-- DataTables -->


  <link rel="stylesheet" type="text/css" href="http://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.0/css/jquery.dataTables.css">
   <link rel="stylesheet" type="text/css" href="http://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.0/css/jquery.dataTables_themeroller.css">



@endsection




@section('content')

    <!-- Content Header (Page header) -->
      <section class="content-header">
        <h1>
        control RealEstate

        </h1>
        <ol class="breadcrumb">
          <li><a href="{{url('/adminpanel')}}"><i class="fa fa-dashboard"></i> Home</a></li>
          <li class="active" ><a href="{{url('/adminpanel/bu')}}">control RealEstate</a></li>

        </ol>
      </section>

      <!-- Main content -->
       <section class="content">
           <div class="row">
               <div class="col-xs-12">
                   <div class="box">
                       <div class="box-header">
                           <h3 class="box-title">control RealEstate</h3>
                       </div>
                       <!-- /.box-header -->
                       <div class="box-body">
                           <table id="data" class="table table-bordered table-hover">
                               <thead>
                               <tr>
                                     <th>#</th>
                                   <th>RealEstate name</th>
                                   <th>price</th>
                                   <th>created_at</th>
                                   <th>status</th>
                                   <th>type</th>
                                   <th>control</th>
                               </tr>
                               </thead>
                               <tbody>
    @foreach($bu as $model)
                                <tr>
                                     <th>{{$model->id}}</th>
                                     <th><a href="/adminpanel/bu/{{$model->id}}/edit">{{$model->bu_name}}</a></th>

                                   <th>{{$model->bu_price}}</th>

                                   <th>{{$model->created_at}}</th>

                                   <th>{{$model->bu_status ==1 ?'ownership':'rent' }}</th>
                                   <th>{{bu_type()[$model->bu_type] }}</th>

                                   <th>

                    <a href="/adminpanel/bu/{{$model->id}}/edit" class="btn btn-info btn-circle"><i class="fa fa-edit"></i></a>

                    <a href="/adminpanel/bu/{{$model->id}}/delete" class="btn btn-danger btn-circle"><i class="fa fa-trash-o"></i></a>

                                   </th>

                                        </tr>

                                   @endforeach
                               </tbody>
                               <tfoot>
                               <tr>
                                     <th>#</th>
                                   <th>RealEstate name</th>
                                   <th>price</th>
                                   <th>created_at</th>
                                   <th>status</th>
                                   <th>type</th>
                                    <th>control</th>

                               </tr>
                               </tfoot>
                           </table>
                       </div>
                       <!-- /.box-body -->
                   </div>
                   <!-- /.box -->


                   <!-- /.box -->
               </div>
               <!-- /.col -->
           </div>
           <!-- /.row -->
       </section>

@endsection




@section('footer')

    <!-- DataTables -->


 <script type="text/javascript" charset="utf8" src="http://ajax.aspnetcdn.com/ajax/jQuery/jquery-1.7.1.min.js"></script>
   <script type="text/javascript" charset="utf8" src="http://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.0/jquery.dataTables.min.js"></script>

    <script type="text/javascript">


        var lastIdx = null;

        $('#data thead th').each( function () {
            if($(this).index()  < 4 ){
                var classname = $(this).index() == 6  ?  'date' : 'dateslash';
                var title = $(this).html();
                $(this).html( '<input type="text" class="' + classname + '" data-value="'+ $(this).index() +'" placeholder=" search '+title+'" />' );
            }else if($(this).index() == 4){
                $(this).html( '<select><option value="0"> user</option><option value="1"> admin </option></select>' );
            }

        } );

        var table = $('#data').DataTable({
            processing: true,
            serverSide: true,
            ajax: '{{ url('/adminpanel/bu/data') }}',
            columns: [
                {data: 'id', name: 'id'},
                {data: 'bu_name', name: 'bu_name'},
                {data: 'bu_price', name: 'bu_price'},
                {data: 'created_at', name: 'created_at'},
                 {data: 'bu_status', name: 'bu_status'},
                {data: 'bu_type', name: 'bu_type'},
                {data: 'control', name: ''}
            ],
            "language": {
                "url": "#"
            },
            "stateSave": false,
            "responsive": true,
            "order": [[0, 'desc']],
            "pagingType": "full_numbers",
            aLengthMenu: [
                [25, 50, 100, 200, -1],
                [25, 50, 100, 200, "All"]
            ],
            iDisplayLength: 25,
            fixedHeader: true,

            "oTableTools": {
                "aButtons": [


                    {
                        "sExtends": "csv",
                        "sButtonText": "excel file",
                        "sCharSet": "utf16le"
                    },
                    {
                        "sExtends": "copy",
                        "sButtonText": "copy info"
                    },
                    {
                        "sExtends": "print",
                        "sButtonText": "print file",
                        "mColumns": "visible"


                    }
                ],

                "sSwfPath": "{{ Request::root()  }}/admin/cus/copy_csv_xls_pdf.swf"
            },

            "dom": '<"pull-left text-left" T><"pullright" i><"clearfix"><"pull-right text-right col-lg-6" f > <"pull-left text-left" l><"clearfix">rt<"pull-right text-right col-lg-6" pi > <"pull-left text-left" l><"clearfix"> '
            ,initComplete: function ()
            {
                var r = $('#data tfoot tr');
                r.find('th').each(function(){
                    $(this).css('padding', 8);
                });
                $('#data thead').append(r);
                $('#search_0').css('text-align', 'center');
            }

        });

        table.columns().eq(0).each(function(colIdx) {
            $('input', table.column(colIdx).header()).on('keyup change', function() {
                table
                        .column(colIdx)
                        .search(this.value)
                        .draw();
            });




        });



        table.columns().eq(0).each(function(colIdx) {
            $('select', table.column(colIdx).header()).on('change', function() {
                table
                        .column(colIdx)
                        .search(this.value)
                        .draw();
            });

            $('select', table.column(colIdx).header()).on('click', function(e) {
                e.stopPropagation();
            });
        });


        $('#data tbody')
                .on( 'mouseover', 'td', function () {
                    var colIdx = table.cell(this).index().column;

                    if ( colIdx !== lastIdx ) {
                        $( table.cells().nodes() ).removeClass( 'highlight' );
                        $( table.column( colIdx ).nodes() ).addClass( 'highlight' );
                    }
                } )
                .on( 'mouseleave', function () {
                    $( table.cells().nodes() ).removeClass( 'highlight' );
                } );




    </script>

@endsection
