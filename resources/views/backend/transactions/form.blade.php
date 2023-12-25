@once
    @push('style')
        <style>
            {{-- CSS Style --}}
        </style>
    @endpush
@endonce


<div class='row'>
    <div style="{{ !canUser('users-index')?'display: none':''  }}"  class="col-md-12">
        {{-- START users --}}
        <div class="form-group">
            <label>@lang('inputs.select-data', ['data' => trans('menu.the user')])</label>
            <select class="select2 form-control" id="users" name="user_id" data-placeholder="--- @lang('inputs.select-data', ['data' => trans('menu.the user')]) ---">
                <option></option>
                @foreach ($users as $id => $name)
                    <option  value="{{ $id }}"  @selected((isset($row) && $row->user_id == $id)|| (!isset($row) && $loop->first))>{{ $name }}</option>
                @endforeach
            </select>
            <x-validation-error input='user_id' />
        </div>
        {{-- END users --}}
    </div>

    <div class="col-md-6">
        {{-- START transaction_date --}}
        <div class="form-group">
            <label class="required">@lang('inputs.transaction_date')</label>
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text"> <i class="fa fa-pencil"></i> </span>
                </div>
                <input type="date" class="form-control" name="transaction_date" required value="{{ $row->transaction_date ?? date('Y-m-d') }}"  placeholder="@lang('inputs.transaction_date')">
            </div>
            <x-validation-error input='transaction_date' />
        </div>
        {{-- END transaction_date --}}
    </div>
    <div class="col-md-6">
        {{-- START title --}}
        <div class="form-group">
            <label class="required">@lang('inputs.title')</label>
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text"> <i class="fa fa-pencil"></i> </span>
                </div>
                <input type="text" class="form-control" name="title" required
                    value="{{ $row->title ?? old('title') }}" placeholder="@lang('inputs.title')">
            </div>
            <x-validation-error input='title' />
        </div>
        {{-- END title --}}
    </div>


    <div class="col-md-6">
        {{-- START type --}}
        <div class="form-group">
            <label class="required">@lang('inputs.type')</label>
            @php
                $typeList = ['سحب', 'ايداع'];
            @endphp
            <select name="type" class="form-control">
                @foreach ($typeList as $type)
                    <option {{ isset($row) && $row->type == $type ? 'selected' : '' }} value="{{ $type }}">{{ $type }}
                    </option>
                @endforeach
            </select>
            <x-validation-error input='type' />
        </div>
        {{-- END type --}}
    </div>


    <div class="col-md-6">
        {{-- START amount --}}
        <div class="form-group">
            <label class="required">@lang('inputs.amount')</label>
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text"> <i class="fa fa-pencil"></i> </span>
                </div>
                <input type="number" class="form-control" name="amount" required
                    value="{{ $row->amount ?? old('amount') }}" placeholder="@lang('inputs.amount')">
            </div>
            <x-validation-error input='amount' />
        </div>
        {{-- END amount --}}
    </div>


    <div class="col-md-12">
        {{-- START note --}}
        <div class="form-group mb-5">
            <label class=''>@lang('inputs.note')</label>
            <textarea class="form-control" rows="5" name="note" placeholder="@lang('inputs.note')">{{ $row->note ?? old('note') }}</textarea>
            <x-validation-error input='note' />
        </div>
        {{-- END note --}}
    </div>



</div>


@once
    @push('script')
        <script>
            $(function() {
                {{-- JS Code --}}
            })
        </script>
    @endpush
@endonce
