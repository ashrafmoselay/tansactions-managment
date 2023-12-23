<script>if ( document.getElementsByClassName("app-content")[0] == undefined ) location.reload();</script>

@if(isset($summery))
    <div class="row">
    @foreach($summery as $k=>$v)
        <div class="col-xl-3 col-lg-6 col-12">
            <div style="background:#F4F5FA" class="card">
                <div class="card-content">
                    <div class="card-body">
                        <div class="media d-flex">
                            <div class="media-body text-left">
                                <h3 class="info">{{ $v }}</h3>
                                <h6>{{ $k }}</h6>
                            </div>
                            <div> 
                                <i class="fa-solid fa-money-bill  info font-large-2 float-right"></i> 
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
    </div>
@endif
<div class="table-responsive">
    {{ $dataTable->table([], true) }}
</div>

{{ $dataTable->scripts() }}
