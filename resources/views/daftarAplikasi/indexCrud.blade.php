@extends('layout.tempWeb')

@section('kontenpage')

<body>

    <div class="container mt-5">
        <div class="row">
            <div class="col-lg-8">
                <h1>Kegiatan </h1>
                <button class="btn btn-primary" onclick="create()">+ Tambah Kegiatan</button>
                <table class="table">
                    <thead>
                        <tr>
                        <th>id</th>
                        <th>Nama Kegiatan</th>
                        <th>Deskripsi Kegiatan</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                
                    <tbody id="data">
                        <input class="form-control" type="hidden" id="nik_user" name="nik_user" value="7235822" />
                        <input class="form-control" type="hidden" id="company" name="company" value="A000" />
                    </tbody>
                    
                </table>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Kegiatan</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <div class="modal-body">
                    <div id="page" >

                        <div class="p2">
                            
                            <div class="form-group">
                                <label for="namaKegiatan">Nama Kegiatan</label>
                                <input type="text" name="namaKegiatan" id="namaKegiatan" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="descKegiatan">Deskripsi Kegiatan</label>
                                <input type="text" name="descKegiatan" id="descKegiatan" class="form-control">
                            </div>
                            <div class="form-group mt-2">
                                <button class="btn btn-success" onClick="store()">Create</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
    integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
    integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
    </script>
    <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
    
    <script>
        var emp_no = $("#nik_user").val();
        var company = $("#company").val();
        var year = 2023;
        $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
        });
        
        
        $(document).ready(function () {
            read()
        });
        // read database
        function read(){
            $.ajax({
            // type: "get", // Use "post" method for storing data
            type:"post",
            // url: "{{ url('read') }}",
            // url: "http://localhost:9096/api/tjsl/myTjsl?nik="+emp_no+"&tahun="+2023,
            url:"http://localhost:9096/api/tjsl/listKegiatan",
            data: {
                // namaKegiatan: namaKegiatan,
                // descKegiatan: descKegiatan, 
                nik:emp_no,
                tahun: year,
                // _token: '{{csrf_token()}}' // Send both name and description to the server
            },
            success:function(data){
                var arr=data.data
                $('#data').html('')
                // arr.forEach((x,i) => {
                //     var html=`<tr>
                //         <td>${i+1}</td>
                //         <td>${x.namaKegiatan}</td>
                //         <td>${x.descKegiatan}</td>
                //         <td>
                //             <button class="btn btn-warning" onclick="show()">Edit</button>
                //             <button class="btn btn-danger" onclick="">Delete</button>
                //         </td>
                //     </tr>`
                //     $('#data').append(html)
                // });
                arr.forEach((x,i) => {
                    var html=`<tr>
                        <td>${i+1}</td>
                        <td>${x.nama_kegiatan}</td>
                        <td>${x.deskripsi_kegiatan}</td>
                        <td>
                            <button class="btn btn-warning" onclick="show()">Edit</button>
                            <button class="btn btn-danger" onclick="">Delete</button>
                        </td>
                    </tr>`
                    $('#data').append(html)
                });
            }
        });
        }
        
        function create(){
            $("#exampleModal").modal('show');
                // $.get("{{ url('create' )}}",{},function(data,status){
                //     $("#page").html(data);
                // });
                
            }

        
    // untuk proses create data
    function store() {
        var namaKegiatan = $("#namaKegiatan").val();
        var descKegiatan = $("#descKegiatan").val(); // Get the value of the description input field
       
        $.ajax({
            type: "post", // Use "post" method for storing data
            // headers:{'Access-Control-Allow-Origin' :'http://127.0.0.1:9096/'},
            // url: "{{ url('store') }}",
            url: "http://localhost:9096/api/tjsl/storeMasterKegiatan",
            data: {
                // namaKegiatan: namaKegiatan,
                // descKegiatan: descKegiatan, 
                nik:emp_no,
                nama_kegiatan: namaKegiatan,
                deskripsi_kegiatan: descKegiatan, 
                // _token: '{{csrf_token()}}' // Send both name and description to the server
            },
            success: function(data) {
                $(".btn-close").click();
                read()
                // console.log(data);
            }
            
        });
    }

    // Untuk modal halaman edit (show)
    function show(id) {
            $.get("{{ url('show') }}/" + id, {}, function(data, status) {
                $("#exampleModalLabel").html('Edit Kegiatan')
                $("#page").html(data);
                $("#exampleModal").modal('show');
            });
        }
    </script>
</body>
</html>