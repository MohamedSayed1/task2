@extends('admin.layout.index')

@section('title')
    - customer - add
@endsection


@section('content')

    <div class="content-wrapper">
        <section class="users-edit">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-content">
                            <div class="card-body">
                                <!-- Nav-tabs -->
                                <ul class="nav nav-tabs" role="tablist">
                                    <li class="nav-item">
                                        <a href="#account" role="tab" id="account-tab"
                                           class="nav-link d-flex align-items-center active" data-toggle="tab"
                                           aria-controls="account" aria-selected="true">
                                            <i class="ft-user mr-1"></i>
                                            <span class="d-none d-sm-block">اضافة عميل </span>
                                        </a>
                                    </li>
                                    <!-- <li class="nav-item">
                                        <a href="#information" role="tab" id="information-tab" class="nav-link d-flex align-items-center" data-toggle="tab" aria-controls="information" aria-selected="false">
                                            <i class="ft-info mr-1"></i>
                                            <span class="d-none d-sm-block">Information</span>
                                        </a>
                                    </li> -->
                                </ul>
                                <div class="tab-content">
                                    <!-- Account content starts -->
                                    <div class="tab-pane fade mt-2 show active" id="account" role="tabpanel"
                                         aria-labelledby="account-tab">


                                        <!-- Account form starts -->
                                        <form method="post" action="{{url('dashboard/client/add')}}">
                                            <div class="row">
                                                <div class="col-12 col-md-6">
                                                    <div class="form-group">
                                                        <div class="controls">
                                                            <label for="users-edit-username">الاسم </label>
                                                            <input type="text" id="users-edit-username"
                                                                   class="form-control" name="name" value="{{old('name')}}" placeholder="الاسم " required
                                                                   aria-invalid="false">
                                                            @if ($errors->has('name'))
                                                                <span class="help-block">
                                                                     <strong class="text-danger">{{ $errors->first('name') }}</strong>
                                                               </span>
                                                            @endif
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="controls">
                                                            <label for="mob1">رقم الموبايل 1</label>
                                                            <input type="tel" id="mob1" name="phone1" value="{{old('phone1')}}" class="form-control"
                                                                   placeholder="رقم الموبايل " required
                                                                   aria-invalid="false" maxlength="11">

                                                            @if ($errors->has('phone1'))
                                                                <span class="help-block">
                                                                     <strong class="text-danger">{{ $errors->first('phone1') }}</strong>
                                                               </span>
                                                            @endif
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="controls">
                                                            <label for="mob2">رقم الموبايل 2</label>
                                                            <input type="tel" name="phone2" value="{{old('phone2')}}" id="mob2" class="form-control"
                                                                   placeholder="رقم الموبايل " required
                                                                   aria-invalid="false" maxlength="11">

                                                            @if ($errors->has('phone2'))
                                                                <span class="help-block">
                                                                     <strong class="text-danger">{{ $errors->first('phone2') }}</strong>
                                                               </span>
                                                            @endif
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-12 col-md-6">
                                                    <div class="form-group">
                                                        <div class="controls">
                                                            <label for="mob3">رقم المتابعة </label>
                                                            <input type="tel" id="mob3" name="phone_tracking" value="{{old('phone_tracking')}}" class="form-control"
                                                                   placeholder="رقم المتابعة " required
                                                                   aria-invalid="false" maxlength="11">
                                                            @if ($errors->has('phone_tracking'))
                                                                <span class="help-block">
                                                                     <strong class="text-danger">{{ $errors->first('phone_tracking') }}</strong>
                                                               </span>
                                                            @endif
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="controls">
                                                            <label for="users-edit-address">العوان </label>
                                                            <input type="text" id="users-edit-address"
                                                                   class="form-control" name="address" value="{{old('address')}}" placeholder="العنوان " required
                                                                   aria-invalid="false">
                                                            @if ($errors->has('address'))
                                                                <span class="help-block">
                                                                     <strong class="text-danger">{{ $errors->first('address') }}</strong>
                                                               </span>
                                                            @endif
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="controls">
                                                            <label for="users-edit-company">الوظيفة </label>
                                                            <input type="text" id="users-edit-company" name="job" value="{{old('job')}}"
                                                                   class="form-control" placeholder="الوظيفة ">

                                                            @if ($errors->has('job'))
                                                                <span class="help-block">
                                                                     <strong class="text-danger">{{ $errors->first('job') }}</strong>
                                                               </span>
                                                            @endif
                                                        </div>
                                                    </div>
                                                </div>

                                                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                                                <div
                                                    class="col-12 d-flex flex-sm-row flex-column justify-content-end mt-3 mt-sm-2">
                                                    <button type="submit" class="btn btn-primary mb-2 mb-sm-0 mr-sm-2">
                                                        Save Changes
                                                    </button>
                                                    <button type="reset" class="btn btn-secondary">Cancel</button>
                                                </div>
                                            </div>
                                        </form>
                                        <!-- Account form ends -->
                                    </div>
                                    <!-- Account content ends -->


                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </div>

@endsection
