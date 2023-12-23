@extends('layouts.backend')
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card ">
                <div class="card-header ">
                    <form id="myForm" action="" method="get">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group ">
                                    <input placeholder="الفترة من" autocomplete="off" style="direction: rtl;" id="fromdate" name="fromdate" value="{{request()->fromdate}}" type="date" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <input placeholder="الفترة إلى" autocomplete="off" style="direction: rtl;" id="todate" name="todate" value="{{request()->todate}}" type="date" class="form-control">
                                </div>
                            </div>
                            
                            <div class="col-md-4">
                                <button  type="submit" class="btn btn-primary ">بحث</button>
                                <button onclick="setAllEmpty()" type="button" class="btn btn-warning "><i class="fa fa-undo"></i></button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="card">
       
        {{-- START INCLUDE TABLE HEADER --}}
        @include('backend.includes.cards.table-header')
        {{-- START INCLUDE TABLE HEADER --}}


        <div class="card-content collpase show">
            <div id="search-form-body"></div>

            <div class="card-body" id="load-data"></div>
        </div>
    </div>
@endsection
@once
@push('script')
    
    <script>
        function setAllEmpty() {
            var inputs = document.getElementsByTagName("input");
            for (var i = 0; i < inputs.length; i++) {
                inputs[i].value = "";
            }
            $("#type").val("").trigger( "change");
            $("#statuses").val("").trigger( "change");
        }
    </script>
@endpush
@endonce
