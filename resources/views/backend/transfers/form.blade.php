@once
    @push('style')
        <style>
            {{-- CSS Style --}}
        </style>
    @endpush
@endonce


<div class='row'>
    <div class="col-md-6">
        {{-- START from_users --}}
        <div class="form-group">
            <label>@lang('inputs.select-data', ['data' => trans('menu.from_users')])</label>
            <select class="select2 form-control" id="from_users" name="from_user_id"
                data-placeholder="--- @lang('inputs.select-data', ['data' => trans('menu.from_users')]) ---" required>
                <option></option>
                @foreach ($from_users as $id => $name)
                    <option value="{{ $id }}" @selected((isset($row) && $row->from_user_id == $id) || (!isset($row) && $loop->first))>{{ $name }}</option>
                @endforeach
            </select>
            <x-validation-error input='from_user_id' />
        </div>
        {{-- END from_users --}}
    </div>


    <div class="col-md-6">
        {{-- START to_users --}}
        <div class="form-group">
            <label>@lang('inputs.select-data', ['data' => trans('menu.to_users')])</label>
            <select class="select2 form-control" id="to_users" name="to_user_id"
                data-placeholder="--- @lang('inputs.select-data', ['data' => trans('menu.to_users')]) ---" required>
                <option></option>
                @foreach ($to_users as $id => $name)
                    <option value="{{ $id }}" @selected(isset($row) && $row->to_user_id == $id)>{{ $name }}</option>
                @endforeach
            </select>
            <x-validation-error input='to_user_id' />
        </div>
        {{-- END to_users --}}
    </div>


    <div class="col-md-12">
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
        {{-- START status --}}
        <div class="form-group">
            <label class="required">@lang('inputs.status')</label>
            @php
                $typeList = ['إنتظار'];//'قبول', 'رفض'
            @endphp
            <select name="status" class="form-control">
                @foreach ($typeList as $type)
                    <option {{ isset($row) && $row->status == $type ? 'selected' : '' }} value="{{ $type }}">
                        {{ $type }}
                    </option>
                @endforeach
            </select>
            <x-validation-error input='status' />
        </div>
        {{-- END status --}}
    </div>


    <div class="col-md-12">
        {{-- START status_note --}}
        <div class="form-group mb-5">
            <label class=''>@lang('inputs.status_note')</label>
            <textarea class="form-control" rows="5" name="status_note" placeholder="@lang('inputs.status_note')">{{ $row->status_note ?? old('status_note') }}</textarea>
            <x-validation-error input='status_note' />
        </div>
        {{-- END status_note --}}
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
