@extends('layouts.master')
@section('main')
<div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">DataTable of user</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example2" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                  <a href="{{route('users.create')}}" class="action action-create">
                        <i class="fas fa-create"></i>Add
                  </a>
                  @foreach($users as $user)
                  <tr>
                    <td>{{$user->id}}</td>
                    <td>{{$user->username}}</td>
                    <td>{{$user->email}}</td>
                    <td>{{$user->phone}}</td>
                    <td> 4</td>
                    <td class="action-group ">
                      <a href="#" class="action action-view">
                        <i class="fas fa-eye"></i>
                      </a>
                      <a href="{{route('users.edit', ['id' => $user->id])}}" class="action action-edit">
                        <i class="fas fa-edit"></i>Edit
                      </a>
                      <a href="{{route('users.destroy', ['id' => $user->id])}}" class="action action-delete">
                        <i class="fas fa-trash-alt"></i>Delete
                      </a>
                    </td>
                  </tr>
                  @endforeach
                  </tbody>
                  <tfoot>
                  <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Action</th>
                  </tr>
                  </tfoot>
                </table>
                {{ $users->links() }}
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
@endsection