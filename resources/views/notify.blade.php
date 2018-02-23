@if(Session::has('message'))
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="block">
                <p class="alert {{ Session::get('alert-class') }}  alert-dismissable txt-algn-center" >
                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                    {{ Session::get('message') }}
                </p>
            </div>
        </div>
    </div>
</div>
@endif
