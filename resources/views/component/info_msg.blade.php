@if($error = Session::get('Error'))
<script>
    $(document).ready(function(){
       $("#msg_modal").modal("show"); 
    });
    
    setTimeout(function(){
       $("#msg_modal").modal("hide")
    }, 3000);
 </script>
 
<div class="modal fade bd-example-modal-sm" id="msg_modal" tabindex="-1" role="dialog" aria-labelledby="success_reg_modal" aria-hidden="true">
    <div class="modal-dialog modal-sm text-center">
        <div class="modal-content">
            <p class="mt-3"><i style="font-size: 5em;" class="fal fa-times-circle text-danger"></i></p>
            <h5 style="margin-top:-3%; color: rgb(46, 46, 46)">Error</h5>
            <p class="text-dark">{{ $error }}</p>
            <p><button type="button" data-bs-dismiss="modal" aria-label="Close"class="btn ok-close-btn">OK</button></p>
        </div>
        
    </div>
</div>

@endif