@extends('layouts.app')

@section('content')

<div class="wrapper">
	
    @include('component.admin-sidebar')

    <div class="dashboard-content">
        <div class="text">
            <h4>Hi ADMIN: {{ auth()->user()->firstName }}</h4>
            <div class="container-fluid">
                <div class="row ml-3 mr-3">
                <h1 class="text-uppercase mb-5" id="dashusers"><strong>Users Data Table</strong></h1>
                    <div class="col-md-12 offset-md-0 mb-5">


                        <table id="example" class="table table-striped table-hover table-bordered">
                            <thead>
                                <tr>
                                    <th>Full Name</th>
                                    <th>Username</th>
                                    <th>Email</th>
                                    <th>Contact No.</th>
                                    <th>Role</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>

                                @foreach($users as $user)
                                <tr>
                                    <td>{{$user->lastName}}, {{$user->firstName}} {{substr($user->middleName, 0, 1)}}.</td>
                                    <td>{{ $user->username }}</td>
                                    <td>{{ $user->email }}</td>
    

                                    <td>{{ $user->contactNo }}</td>
                                    <td>
                                        {{ $user->role == 1 ? 'Administrator' : 'Normal' }}
                                        {{-- @if ( $user->role == 1)
                                            Administrator
                                        @else
                                            Normal
                                        @endif --}}
                                    </td>
                                    
                                    <td><button class="btn btn-info">View</button></td>
                                </tr>
                                @endforeach
                                
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>Full Name</th>
                                    <th>Username</th>
                                    <th>Email</th>
                                    <th>Contact No.</th>
                                    <th>Role</th>
                                    <th>Action</th>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <script>
        let btn = document.querySelector("#btn-menu");
        let sidebar = document.querySelector(".sidebar");
        let searchBtn = document.querySelector(".bx-search");

        btn.onclick = function(){
            sidebar.classList.toggle("active");
        }
        searchBtn.onclick = function(){
            sidebar.classList.toggle("active");
        }

        jQuery(document).ready(function($) {
        $('#example').DataTable();
        $(document).on('click', '#example tbody tr button', function() {       
            $("#modaldata tbody tr").html("");
            $("#modaldata tbody tr").html($(this).closest("tr").html());
            $("#exampleModal").modal("show");
        });
        } );        
    </script>

</div>
@endsection