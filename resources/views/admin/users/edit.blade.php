@extends('admin.layout.webapp')
@section('content')
    <div class="right_col" role="main">
        <div class="">
            <div class="page-title">
                <div class="title_left">
                    <h3>Edit {{ !empty($title)?$title:'' }}</h3>
                </div>
            </div>
            <div class="clearfix"></div>

            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <div class="x_panel">
                        <div class="x_title">
                            <h2>{{ !empty($title)?$title:'' }} <small>{{ __('Register') }}</small></h2>
                            <ul class="nav navbar-right panel_toolbox">
                                <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                </li>
                            </ul>
                            <div class="clearfix"></div>
                        </div>
                        <div class="x_content">
                            <form class="form-horizontal form-label-left" method="POST"
                                  action="{{ route('post.update',$record->id) }}" enctype="multipart/form-data"
                                  novalidate>
                                @csrf
                                <input type="hidden" name="_method" value="PUT">
                                @if(auth()->user()->role_id != '1')
                                    <div class="item form-group">
                                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="role_id">Select
                                            Role <span class="required">*</span>
                                        </label>
                                        <div class="col-md-6 col-sm-6">
                                            <select name="role_id" id="role_id"
                                                    class="form-control"
                                                    required="required">
                                                <option value="">Select Role</option>
                                                @if (!empty($role))
                                                    @foreach($role as $roles)
                                                        <option
                                                            value="{{$roles->id}}" {{ (!empty($record->role_id == $roles->id)?"selected":"") }}>{{ $roles->name ?? '' }}</option>
                                                    @endforeach
                                                @endif
                                            </select>
                                        </div>
                                    </div>

                                @endif

                                <div class="item form-group">
                                    <label class="col-form-label col-md-3 col-sm-3 label-align"
                                           for="name">{{ucwords(str_replace('_',' ','name'))}} <span
                                            class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6">
                                        <input id="name" class="form-control @error('name') is-invalid @enderror"
                                               name="name" value="{{ $record->name ?? "" }}"
                                               data-validate-length-range="6" data-validate-words="2"
                                               placeholder="both name(s) e.g Jon Doe" required="required"
                                               autocomplete="name" autofocus type="text">
                                        @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="item form-group">
                                    <label class="col-form-label col-md-3 col-sm-3 label-align"
                                           for="email">{{ __('E-Mail Address') }} <span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6">
                                        <input type="email" id="email"
                                               class="form-control @error('email') is-invalid @enderror" name="email"
                                               value="{{ $record->email ?? "" }}" required="required"
                                               autocomplete="email">
                                        @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="item form-group">
                                    <label class="col-form-label col-md-3 col-sm-3 label-align" for="email">Confirm
                                        Email <span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6">
                                        <input type="email" id="email2" name="confirm_email"
                                               data-validate-linked="email" required="required"
                                               value="{{ $record->email ?? "" }}" class="form-control"
                                               autocomplete="email">
                                    </div>
                                </div>
                                <div class="item form-group">
                                    <label class="col-form-label col-md-3 col-sm-3 label-align"
                                           for="phone">{{ucwords(str_replace('_',' ','phone'))}} <span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6">
                                        <input type="text" id="phone" name="phone" required="required"
                                               placeholder="{{ucwords(str_replace('_',' ','phone'))}}"
                                               data-validate-length-range="10,15" value="{{ $record->phone ?? "" }}"
                                               class="form-control @error('phone') is-invalid @enderror">
                                        @error('phone')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="item form-group">
                                    <label class="col-form-label col-md-3 col-sm-3 label-align"
                                           for="date_of_birth">{{ucwords(str_replace('_',' ','date_of_birth'))}} <span
                                            class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6">
                                        <input type="date" id="date_of_birth" name="date_of_birth" required="required"
                                               placeholder="{{ucwords(str_replace('_',' ','date_of_birth'))}}"
                                               value="{{ $record->date_of_birth ?? "" }}"
                                               class="form-control @error('date_of_birth') is-invalid @enderror">
                                        @error('date_of_birth')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="item form-group">
                                    <label class="col-form-label col-md-3 col-sm-3 label-align"
                                           for="facebook">{{ucwords(str_replace('_',' ','facebook'))}}
                                    </label>
                                    <div class="col-md-6 col-sm-6">
                                        <input type="url" id="facebook" name="facebook"
                                               placeholder="{{ucwords(str_replace('_',' ','facebook'))}}"
                                               value="{{ $record->facebook ?? "" }}"
                                               class="form-control">
                                    </div>
                                </div>

                                <div class="item form-group">
                                    <label class="col-form-label col-md-3 col-sm-3 label-align"
                                           for="instagram">{{ucwords(str_replace('_',' ','instagram'))}}
                                    </label>
                                    <div class="col-md-6 col-sm-6">
                                        <input type="url" id="instagram" name="instagram"
                                               placeholder="{{ucwords(str_replace('_',' ','instagram'))}}"
                                               value="{{ $record->instagram ?? "" }}"
                                               class="form-control">
                                    </div>
                                </div>

                                <div class="item form-group">
                                    <label class="col-form-label col-md-3 col-sm-3 label-align"
                                           for="twitter">{{ucwords(str_replace('_',' ','twitter'))}}
                                    </label>
                                    <div class="col-md-6 col-sm-6">
                                        <input type="url" id="twitter" name="twitter"
                                               placeholder="{{ucwords(str_replace('_',' ','twitter'))}}"
                                               value="{{ $record->twitter ?? "" }}"
                                               class="form-control">
                                    </div>
                                </div>

                                <div class="item form-group">
                                    <label class="col-form-label col-md-3 col-sm-3 label-align"
                                           for="about">{{ucwords(str_replace('_',' ','about'))}} <span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6">
                                        <textarea id="about" name="about" required="required"
                                                  class="form-control @error('about') is-invalid @enderror">{{ $record->about ?? "" }}</textarea>
                                        @error('about')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="item form-group">
                                    <label class="col-form-label col-md-3 col-sm-3 label-align"
                                           for="address">{{ucwords(str_replace('_',' ','address'))}} <span
                                            class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6">
                                        <textarea id="address" name="address" required="required"
                                                  class="form-control @error('address') is-invalid @enderror">{{ $record->address ?? "" }}</textarea>
                                        @error('address')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="item form-group @error('password') bad @enderror">
                                    <label for="password"
                                           class="col-form-label col-md-3 label-align">{{ __('Password') }}</label>
                                    <div class="col-md-6 col-sm-6">
                                        <input id="password" type="password" name="password"
                                               class="form-control @error('password') is-invalid @enderror"
                                               autocomplete="new-password">
                                    </div>
                                    @error('password')
                                    <div class="text-danger">{{$message}}</div>
                                    @enderror
                                </div>
                                <div class="item form-group">
                                    <label for="password-confirm" class="col-form-label col-md-3 col-sm-3 label-align ">Repeat
                                        Password</label>
                                    <div class="col-md-6 col-sm-6">
                                        <input id="password-confirm" type="password" name="password_confirmation"
                                               data-validate-linked="password" class="form-control"
                                               autocomplete="new-password">
                                    </div>
                                </div>

                                <div class="item form-group">
                                    <label class="col-form-label col-md-3 col-sm-3 label-align" for="image">Profile
                                        Picture <span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <div class="input-group-btn">
                                            <div class="image-upload">
                                                <img
                                                    src="{{asset(!empty($record->image)?$record->image:'assets/admin/images/placeholder.png')}}"
                                                    class="img-responsive">
                                                <div class="file-btn">
                                                    <input type="file" id="image" name="image" accept=".jpg,.png">
                                                    <input type="text" name="image" value=""
                                                           hidden="{{asset(!empty($record->image)?$record->image:'')}}">
                                                    <label class="btn btn-info">Upload</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="ln_solid"></div>
                                <div class="form-group">
                                    <div class="col-md-6 offset-md-3">
                                        <a href="{{ action('admin\DashboardController@index') }}"
                                           class="btn btn-primary">Cancel</a>
                                        <button id="send" type="submit" class="btn btn-success">Submit</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('page_js')
    <script src="{{asset('assets/admin/validator/validator.js')}}"></script>
@endsection
