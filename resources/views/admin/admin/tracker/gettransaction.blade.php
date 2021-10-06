@if($reference_exist == 1)
    <div class="social-line">
    <div class="row">
        <div class="col-auto">
            <div  class="btn  btn-icon btn-round {{ $transaction->status == 0 ? 'btn-lg btn-success' : '' }}">
                <i class="now-ui-icons ui-1_send"></i>
            </div>
        </div>
        <div class="col"><hr class="bg-white"></div>
        <div class="col-auto">
            <div  class="btn  btn-icon btn-round {{ $transaction->status == 1 ? 'btn-lg btn-success' : '' }}">
                <i class="now-ui-icons shopping_box"></i>
            </div>
        </div>
        <div class="col"><hr class="bg-white"></div>
        <div class="col-auto">
           
            <div  class="btn btn-icon btn-round {{ $transaction->status == 2 ? 'btn-lg btn-success' : '' }}">
                <i class="now-ui-icons ui-1_check"></i>
            </div>
        </div>
    </div>
</div>

<div class="card mt-4">
    <h3 class="text-dark text-center">{{$transaction->reference_number}}</h3>
    <div class="card-body">
        <div class="row p-2">
            <div class="col-12 text-left">
                <h6 class="text-dark">{{$transaction->updated_at}}</h6>
                <h6 class="text-success">
                    {{ $transaction->status == 0 ? 'Sending' : '' }}
                    {{ $transaction->status == 1 ? 'Ready For Pickup' : '' }}
                    {{ $transaction->status == 2 ? 'Claimed' : '' }}
                </h6>
                
            </div>
            
        </div>
    </div>
</div>
<hr class="bg-white">
@elseif($reference_exist == 0)
    
    <div class="h6 text-center">
        Invalid Reference Number , Please Try Again.
    </div>
    <hr class="bg-white">
@endif

