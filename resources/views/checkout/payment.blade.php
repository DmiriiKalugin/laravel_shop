@extends('layouts.default')

@section('content')
    <div class="container">
        <div class="row">
            <header class="Section-header Section-header_sm">
                <h2 class="Section-title">Шаг 3. Способ оплаты
                </h2>
            </header>
            <div class="form-group">
                <div>
                    <label class="toggle">
                        <input type="radio" name="pay" value="online" checked="checked"/><span class="toggle-box"></span><span class="toggle-text">Онлайн картой</span>
                    </label>
                </div>
                <div>
                    <label class="toggle">
                        <input type="radio" name="pay" value="someone"/><span class="toggle-box"></span><span class="toggle-text">Онлайн со случайного чужого счета</span>
                    </label>
                </div>
            </div>
            <div class="Order-footer"><a class="btn btn_success Order-next" href="#step4">Дальше</a>
            </div>
        </div>
    </div>
@endsection
