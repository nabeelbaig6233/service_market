@extends('admin.layout.webapp')
@section('page_css')
    <!-- Datatables -->
    <link href="{{ asset('assets/admin/datatables/datatables.net-bs/css/dataTables.bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/admin/datatables/datatables.net-buttons-bs/css/buttons.bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/admin/datatables/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/admin/datatables/datatables.net-responsive-bs/css/responsive.bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/admin/datatables/datatables.net-scroller-bs/css/scroller.bootstrap.min.css') }}" rel="stylesheet">
@endsection

@section('content')

{{-- Banner Modal--}}
<div class="modal fade" id="bannerModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <form id="bannerImage" action="{{route("banner.create")}}">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title text-dark" id="exampleModalLongTitle">Banner Image</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

                    <div class="row">
                        <div class="col-12">
                            <div class="form-group">
                                <input type="file" class="custom-file-input" required name="banner_image" />
                                <label class="custom-file-label">Select Banner Image</label>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="input-group-sm">
                                <div class="input-group-prepend">
                                    <p class="input-group-text">Type Website URL</p>
                                </div>
                                <input type="text" class="form-control" required name="banner_url" />

                            </div>
                        </div>
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary save">Save changes</button>
            </div>

        </div>
        </form>
    </div>
</div>
{{--End--}}

    <div class="right_col" role="main">
        <div class="">
            <div class="page-title">
                <div class="title_left">
                    <h3>{{ !empty($title)?$title:'' }} <small>View</small></h3>
                </div>


            </div>

            <div class="clearfix"></div>

            <div class="row">


                <div class="col-md-12 col-sm-12 ">
                    <div class="x_panel">
                        <div class="x_title">
                            <h2>{{ !empty($title)?$title:'' }} <small>View</small></h2>
                            <ul class="nav navbar-right panel_toolbox">
                                <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                </li>
                                <li><a class="close-link"><i class="fa fa-close"></i></a>
                                </li>
                            </ul>
                            <div class="clearfix"></div>
                        </div>
                        <div class="x_content">
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="card-box table-responsive">
                                        <table id="example1" class="table table-striped table-bordered" style="width:100%">
                                            <thead>
                                            <button type="button" class="btn btn-info" id="add_banner" data-target="#bannerModal" data-toggle="modal">Add Banner</button>
                                            <tr>
                                                <th>{{ucwords(str_replace('_',' ','id'))}}</th>
                                                <th>{{ucwords(str_replace('_',' ','image'))}}</th>
                                                <th>{{ucwords(str_replace('_',' ','link'))}}</th>
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
                    </div>
                </div>


            </div>
        </div>
    </div>


    <div id="confirmModal" class="modal fade" role="dialog">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header"  style="background-color: #343a40;
            color: #fff;">
                    <h2 class="modal-title">Confirmation</h2>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <h4 align="center" style="margin: 0;">Are you sure you want to delete this ?</h4>
                </div>
                <div class="modal-footer">
                    <button type="button" id="ok_delete" name="ok_delete" class="btn btn-danger">Delete</button>
                    <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('page_js')
    <!-- DataTable -->
    <script src="{{asset('assets/admin/datatables/datatables.net/js/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('assets/admin/datatables/datatables.net-bs/js/dataTables.bootstrap.min.js')}}"></script>
    <script src="{{asset('assets/admin/datatables/datatables.net-buttons/js/dataTables.buttons.min.js')}}"></script>
    <script src="{{asset('assets/admin/datatables/datatables.net-buttons-bs/js/buttons.bootstrap.min.js')}}"></script>
    <script src="{{asset('assets/admin/datatables/datatables.net-buttons/js/buttons.flash.min.js')}}"></script>
    <script src="{{asset('assets/admin/datatables/datatables.net-buttons/js/buttons.html5.min.js')}}"></script>
    <script src="{{asset('assets/admin/datatables/datatables.net-buttons/js/buttons.print.min.js')}}"></script>
    <script src="{{asset('assets/admin/datatables/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js')}}"></script>
    <script src="{{asset('assets/admin/datatables/datatables.net-keytable/js/dataTables.keyTable.min.js')}}"></script>
    <script src="{{asset('assets/admin/datatables/datatables.net-responsive/js/dataTables.responsive.min.js')}}"></script>
    <script src="{{asset('assets/admin/datatables/datatables.net-responsive-bs/js/responsive.bootstrap.js')}}"></script>
    <script src="{{asset('assets/admin/datatables/datatables.net-scroller/js/dataTables.scroller.min.js')}}"></script>
    <script src="{{asset('assets/admin/jszip/dist/jszip.min.js')}}"></script>
    <script src="{{asset('assets/admin/pdfmake/build/pdfmake.min.js')}}"></script>
    <script src="{{asset('assets/admin/pdfmake/build/vfs_fonts.js')}}"></script>
    <script>
        $(document).ready(function () {
            var DataTable = $("#example1").DataTable({
                dom: "Blfrtip",
                buttons: [{
                    extend: "copy",
                    className: "btn-sm"
                }, {
                    extend: "csv",
                    className: "btn-sm"
                }, {
                    extend: "excel",
                    className: "btn-sm"
                }, {
                    extend: "pdfHtml5",
                    className: "btn-sm"
                }, {
                    extend: "print",
                    className: "btn-sm"
                }],
                responsive: true,
                processing: true,
                serverSide: true,
                pageLength: 10,
                ajax: {
                    url: `{{route('banner')}}`,
                },
                columns: [
                    {data: 'id', name: 'id'},
                    {data: 'image', name: 'image'},
                    {data: 'link', name: 'link'},
                    {data: 'action', name: 'action', orderable: false}
                ]
            });

            $("#bannerModal").on('hide.bs.modal', function(){
                $("#bannerImage").trigger('reset');
                $('.save').removeAttr("data-action");
                $('.save').removeAttr("data-id");
            });


            $(document).on('click','.edit',function () {
                $('.save').attr("data-action","edit");
                let id=$(this).attr('id');
                $('.save').attr("data-id",id);
                $.ajax({
                   type:'GET',
                   url:`{{url('/admin/banner')}}/${id}`,
                   success:function (data) {
                       $("[name='banner_url']").val(data.link);
                       $("#bannerModal").modal('show');
                   },
                    error:function (error) {
                        console.log(error);
                    }
                });
            });


            $("#bannerImage").submit(function (e) {
                e.preventDefault();
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': '{{csrf_token()}}'
                    }
                });
                var formData=new FormData();
                formData.append('banner_image',$("[name='banner_image']")[0].files[0]);
                formData.append('banner_url',$("[name='banner_url']").val());
                var edit=$(".save").attr("data-action");
                let id=$('.save').attr('data-id');
                $('.save').addClass('disabled');
                if(edit=="edit"){
                    $.ajax({
                        url:`{{url('/admin/banner')}}/${id}`,
                        type:'POST',
                        data:formData,
                        contentType: false,
                        processData: false,
                        success:function (data) {
                            $("#bannerModal").modal('hide');
                            $('.save').removeClass('disabled');
                            DataTable.ajax.reload();
                            js_success("Updated Successfully");
                        },
                        error:function (error) {
                            console.log(error);
                        }
                    })

                }else{
                    $.ajax({
                        url:'{{route('banner.create')}}',
                        type:'POST',
                        data:formData,
                        contentType: false,
                        processData: false,
                        success:function (data) {
                            var res=parseInt(data);
                            $("#bannerModal").modal('hide');
                            $('.save').removeClass('disabled');
                            if(res==1){
                                DataTable.ajax.reload();
                                js_success("Banner Created Successfully");
                            }else{
                                js_error("Only 5 Banner's Are Allowed");
                            }
                        },
                        error:function (error) {
                            console.log(error);
                        }
                    })
                }

            });



            var delete_id;
            $(document,this).on('click','.delete',function(){
                delete_id = $(this).attr('id');
                $('#confirmModal').modal('show');
            });
            $(document).on('click','#ok_delete',function(){
                $.ajax({
                    type:"delete",
                    url:`{{url('admin/'.request()->segment(2).'/destroy/')}}/${delete_id}`,
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    beforeSend: function(){
                        $('#ok_delete').text('Deleting...');
                        $('#ok_delete').attr("disabled",true);
                    },
                    success: function (data) {
                        DataTable.ajax.reload();
                        $('#ok_delete').text('Delete');
                        $('#ok_delete').attr("disabled",false);
                        $('#confirmModal').modal('hide');
                        js_success(data);
                    }
                })
            });

        })
    </script>
@endsection
