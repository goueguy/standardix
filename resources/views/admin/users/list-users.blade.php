@extends('layouts.admin')
@section('title', 'Utilisateurs')
@section('content')

<div class="container">
       <!-- /.row -->
       <div class="row">
        <div class="col-12 mt-2">
          <div class="card">
            <div class="card-header ">
              <h3 class="card-title">Liste</h3>
              <div class="card-tools">
                <div class="input-group input-group-sm" style="width: 150px;">
                  <input type="text" name="table_search" class="form-control float-right" placeholder="Search">
                  <div class="input-group-append">
                    <button type="submit" class="btn btn-default">
                      <i class="fas fa-search"></i>
                    </button>
                  </div>
                </div>
              </div>
              <div class="card-tools">
                <div class="input-group input-group-sm" style="width: 80px;">
                  <div class="input-group-append">
                    <a href="{{route('users.add')}}" class="btn btn-primary">Ajouter</a>
                  </div>
                </div>
              </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body table-responsive p-0">
              <table class="table table-hover text-nowrap">
                <thead>
                  <tr>
                    <th>ID</th>
                    <th>Nom</th>
                    <th>Prénoms</th>
                    <th>Email</th>
                    <th>Contact</th>
                    <th>Niveau Accès</th>
                    <th>Cv</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>1</td>
                    <td>keita</td>
                    <td>karim</td>
                    <td>keita@gmail.com</td>
                    <td>0709909290</td>
                    <td>Admin</td>
                    <td>keita_cv.pdf</td>
                    <td>
                        <a href="{{route('users.view')}}"><i class="fas fa-eye"></i></a>
                        <a href="#"><i class="fas fa-trash"></i></a>
                        <a href="{{route('users.edit')}}"><i class="fas fa-edit"></i></a>
                    </td>
                  </tr>
                  <tr>
                    <td>2</td>
                    <td>keita</td>
                    <td>karim</td>
                    <td>keita@gmail.com</td>
                    <td>0709909290</td>
                    <td>Admin</td>
                    <td>keita_cv.pdf</td>
                    <td>
                        <a href="#"><i class="fas fa-eye"></i></a>
                        <a href="#"><i class="fas fa-trash"></i></a>
                        <a href="#"><i class="fas fa-edit"></i></a>
                    </td>
                  </tr>
                  <tr>
                    <td>3</td>
                    <td>keita</td>
                    <td>karim</td>
                    <td>keita@gmail.com</td>
                    <td>0709909290</td>
                    <td>Admin</td>
                    <td>keita_cv.pdf</td>
                    <td>
                        <a href="#"><i class="fas fa-eye"></i></a>
                        <a href="#"><i class="fas fa-trash"></i></a>
                        <a href="#"><i class="fas fa-edit"></i></a>
                    </td>
                  </tr>

                </tbody>
              </table>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
      </div>
</div>
@endsection
