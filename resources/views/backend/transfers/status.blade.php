@if ($row->status == 'قبول') 
<div class="alert alert-danger" role="alert">
    <h4 style=" color: #0f0e0e; font-weight: bold; ">لا يمكن تغيير حالة هذا التحويل لانه تم قبوله </h4>
  </div>
@else
<form action="{{ routeHelper('transfers.updateStatus', $row->id) }}" method="post">
    <div class="card">
        <div class="card-header bg-main">
            <h3 class="card-title white">تعديل حالة التحويل</h3>
        </div>
        <div class="card-content">
            <div class="card-body">
                @csrf
                <div class="row">
                    <div class="col-md-12">
                        {{-- START statuses --}}
                        <div class="form-group">
                            <label>@lang('inputs.select-data', ['data' => trans('menu.the status')])</label>
                            @php
                                $typeList = ['إنتظار', 'قبول', 'رفض'];
                            @endphp
                            <select name="status" class="form-control">
                                @foreach ($typeList as $type)
                                    <option {{ isset($row) && $row->status == $type ? 'selected' : '' }}
                                        value="{{ $type }}">
                                        {{ $type }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                        {{-- END statuses --}}
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
            </div>
        </div>
        <div class="card-footer">
            <button type="submit" class="btn btn-primary" data-toggle="tooltip" title=""
                data-original-title="تقديم النموذج" aria-describedby="tooltip507624">
                <i class="fas fa-save"></i> حفظ
            </button>
        </div>
    </div>
</form>
@endif