@section('mytitle', '| Dashboard')

@extends('layouts.app')

@section('content')
<div class="container">

    @include('component.user-sidebar')

    <div class="dashboard-content">
        <div class="text">
            

            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">

                        <div class="row justify-content-center">
                            <div class="col">
                                <div>
                                    
                                    
                                    
                                </div>
                            </div>
                        </div>

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
