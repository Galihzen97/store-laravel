@extends('layouts.admin')
@section('title')
    Administrator | User
@endsection
@section('content')

  <!-- Section Content -->
  <div class="section-content section-dashboard-home" data-aos="fade-up" >
    <div class="container-fluid">
      <div class="dashboard-heading">
        <h2 class="dashboard-title"> Admin User</h2>
        <p class="dashboard-subtitle">List Of Users</p>
      </div>
      <div class="dashboard-content">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-body">
                <a href="{{ Route('user.create')}}" class="btn btn-primary mb-3">+ Add New User </a>
                <div class="table-responsive">
                  <table id="crudTable" class="table table-hover scroll-horizontal-vertical w-100">
                    <thead>
                      <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Email</th>
                        <th>Roles</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody></tbody>
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

@endsection

@push('addon-script')
    <script>
    var datatable = $('#crudTable').DataTable({
        processing: true,
        serverSide: true,
        ordering: true,
        ajax : {
          url : '{!! url()->current() !!}', 
        },    
          columns : [
            {
              data: 'id',
              name: 'id',
              width : '3%',
              render: function (data, type, row, meta) {
                  return meta.row + 1;
              }
            },
            { data: 'name', name : 'name', },
            { data: 'email', name : 'email'},
            { data: 'roles', name : 'roles'},
            { 
              data: 'action', 
              name : 'action',
              orderrable :false,
              scarcable: false,
              width : '10%',
            },
          ]
      });
    </script>
@endpush