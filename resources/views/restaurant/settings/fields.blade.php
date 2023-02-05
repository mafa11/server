<div class="row">
    <div class="col-md-4 ">
        @php($lbl_app_name = __('system.fields.app_name'))
        <div class="mb-3 form-group @error('app_name') has-danger @enderror">
            <label class="form-label" for="app_name">{{ $lbl_app_name }} <span class="text-danger">*</span></label>
            {!! Form::text('app_name', config('app.name'), [
                'class' => 'form-control',
                'id' => 'app_name',
                'placeholder' => $lbl_app_name,
                'required' => 'true',
                'maxlength' => 50,
                'minlength' => 1,
                'pattern' => "/^[a-zA-Z0-9 ]+$/i",
                'data-pristine-required-message' => __('validation.required', ['attribute' => strtolower($lbl_app_name)]),
                'data-pristine-pattern-message' => __('validation.custom.invalid', ['attribute' => strtolower($lbl_app_name)]),
                'data-pristine-minlength-message' => __('validation.custom.invalid', ['attribute' => strtolower($lbl_app_name)]),
            ]) !!}
            @error('app_name')
                <div class="pristine-error text-help">{{ $message }}</div>
            @enderror
        </div>
    </div>
    <div class="col-md-4">
        @php($lbl_app_currency = __('system.fields.select_app_currency'))
        <div class="mb-3 form-group @error('app_currency') has-danger @enderror">
            <label class="form-label" for="input-app_currency">{{ $lbl_app_currency }} <span class="text-danger">*</span></label>
            {!! Form::select('app_currency', getAllCurrencies(), config('app.currency'), [
                'class' => 'form-select choice-picker',
                'id' => 'input-app_currency',
                'data-remove_attr' => 'data-type',
                'required' => 'true',
            ]) !!}

            @error('app_currency')
                <div class="pristine-error text-help">{{ $message }}</div>
            @enderror
        </div>
    </div>

</div>

<div class="row">
    <h5 class="font-size-14 my-3">{{ __('system.fields.app_date_time_settings') }}</h5>
    <div class="col-md-4">
        @php($lbl_app_timezone = __('system.fields.app_timezone'))

        <div class="mb-3 form-group @error('app_timezone') has-danger @enderror">
            <label class="form-label" for="input-app_timezone">{{ $lbl_app_timezone }} <span class="text-danger">*</span></label>
            {!! Form::select('app_timezone', App\Http\Controllers\Restaurant\EnvSettingController::GetTimeZones(), config('app.timezone'), [
                'class' => 'form-control form-select',
                'id' => 'input-app_timezone',
                'required' => 'true',
            ]) !!}

            @error('app_timezone')
                <div class="pristine-error text-help">{{ $message }}</div>
            @enderror
        </div>
    </div>
    <div class="col-md-4">
        @php($lbl_app_date_time_format = __('system.fields.app_date_time_format'))

        <div class="mb-3 form-group @error('app_date_time_format') has-danger @enderror">
            <label class="form-label" for="input-app_date_time_format">{{ $lbl_app_date_time_format }} <span class="text-danger">*</span></label>
            {!! Form::select('app_date_time_format', App\Http\Controllers\Restaurant\EnvSettingController::GetDateFormat(), config('app.date_time_format'), [
                'class' => 'form-control form-select',
                'id' => 'input-app_date_time_format',
                'required' => 'true',
            ]) !!}

            @error('app_date_time_format')
                <div class="pristine-error text-help">{{ $message }}</div>
            @enderror
        </div>
    </div>
    <div class="col-md-4">
        @php($lbl_app_defult_language = __('system.fields.select_app_defult_language'))
        <div class="mb-3 form-group @error('app_defult_language') has-danger @enderror">
            <label class="form-label" for="input-app_defult_language">{{ $lbl_app_defult_language }} <span class="text-danger">*</span></label>
            {!! Form::select('app_defult_language', $languages_array, config('app.app_locale'), [
                'class' => 'form-control form-select',
                'id' => 'input-app_defult_language',
                'required' => 'true',
            ]) !!}

            @error('app_defult_language')
                <div class="pristine-error text-help">{{ $message }}</div>
            @enderror
        </div>
    </div>
</div>


<div class="row">
    <h5 class="font-size-14 my-3">{{ __('system.fields.app_smtp_settings') }}</h5>
    <div class="col-md-4">
        @php($lbl_app_smtp_host = __('system.fields.app_smtp_host'))

        <div class="mb-3 form-group @error('app_smtp_host') has-danger @enderror">
            <label class="form-label" for="input-app_smtp_host">{{ $lbl_app_smtp_host }} <span class="text-danger">*</span></label>
            {!! Form::text('app_smtp_host', config('mail.mailers.smtp.host'), [
                'class' => 'form-control',
                'id' => 'input-app_smtp_host',
                'required' => 'true',
                'pattern' => '/^[a-zA-Z0-9_-]+[.]{1}[a-zA-Z0-9_-]+[.]{1}[a-zA-Z0-9_-]+$/',
            ]) !!}

            @error('app_smtp_host')
                <div class="pristine-error text-help">{{ $message }}</div>
            @enderror
        </div>
    </div>
    <div class="col-md-4">
        @php($lbl_app_smtp_port = __('system.fields.app_smtp_port'))

        <div class="mb-3 form-group @error('app_smtp_port') has-danger @enderror">
            <label class="form-label" for="input-app_smtp_port">{{ $lbl_app_smtp_port }} <span class="text-danger">*</span></label>
            {!! Form::select('app_smtp_port', ['25' => 25, '465' => 465, '587' => 587, '2525' => 2525], config('mail.mailers.smtp.port'), [
                'class' => 'form-control form-select',
                'id' => 'input-app_smtp_port',
                'required' => 'true',
            ]) !!}

            @error('app_smtp_port')
                <div class="pristine-error text-help">{{ $message }}</div>
            @enderror
        </div>
    </div>
    <div class="col-md-4">
        @php($lbl_app_smtp_encryption = __('system.fields.app_smtp_encryption'))

        <div class="mb-3 form-group @error('app_smtp_encryption') has-danger @enderror">
            <label class="form-label" for="input-app_smtp_encryption">{{ $lbl_app_smtp_encryption }} <span class="text-danger">*</span></label>
            {!! Form::select('app_smtp_encryption', ['ssl' => 'ssl', 'tls' => 'tls', 'STARTTLS' => 'STARTTLS'], config('mail.mailers.smtp.encryption'), [
                'class' => 'form-control form-select',
                'id' => 'input-app_smtp_encryption',
                'required' => 'true',
            ]) !!}

            @error('app_smtp_encryption')
                <div class="pristine-error text-help">{{ $message }}</div>
            @enderror
        </div>
    </div>
    <div class="col-md-4 ">
        @php($lbl_app_smtp_username = __('system.fields.app_smtp_username'))
        <div class="mb-3 form-group @error('app_smtp_username') has-danger @enderror">
            <label class="form-label" for="app_smtp_username">{{ $lbl_app_smtp_username }} <span class="text-danger">*</span></label>
            {!! Form::text('app_smtp_username', config('mail.mailers.smtp.username'), [
                'class' => 'form-control pristine-custom-pattern',
                'id' => 'app_smtp_username',
                'placeholder' => $lbl_app_smtp_username,
                'required' => 'true',
                'custom-pattern' => '^((?!\${.*}).)*$',
                'maxlength' => 50,
                'minlength' => 2,
                'data-pristine-required-message' => __('validation.required', ['attribute' => strtolower($lbl_app_smtp_username)]),
                'data-pristine-pattern-message' => __('validation.custom.invalid', ['attribute' => strtolower($lbl_app_smtp_username)]),
                'data-pristine-minlength-message' => __('validation.custom.invalid', ['attribute' => strtolower($lbl_app_smtp_username)]),
            ]) !!}
            @error('app_smtp_username')
                <div class="pristine-error text-help">{{ $message }}</div>
            @enderror
        </div>
    </div>
    <div class="col-md-4 ">
        @php($lbl_app_smtp_password = __('system.fields.app_smtp_password'))
        <div class="mb-3 form-group @error('app_smtp_password') has-danger @enderror">
            <label class="form-label" for="app_smtp_password">{{ $lbl_app_smtp_password }} <span class="text-danger">*</span></label>


            <input class="form-control pristine-custom-pattern" id="app_smtp_password" placeholder="Password" required="true" minlength="2" custom-pattern='^((?!\${.*}).)*$'
                data-pristine-required-message="{{ __('validation.required', ['attribute' => strtolower($lbl_app_smtp_password)]) }}"
                data-pristine-pattern-message="{{ __('validation.custom.invalid', ['attribute' => strtolower($lbl_app_smtp_password)]) }}"
                data-pristine-minlength-message="{{ __('validation.custom.invalid', ['attribute' => strtolower($lbl_app_smtp_password)]) }}" name="app_smtp_password" type="password" value="{{ config('mail.mailers.smtp.password') }}">

            @error('app_smtp_username')
                <div class="pristine-error text-help">{{ $message }}</div>
            @enderror
        </div>
    </div>
    <div class="col-md-4 ">
        @php($lbl_app_smtp_from_address = __('system.fields.app_smtp_from_address'))
        <div class="mb-3 form-group @error('app_smtp_from_address') has-danger @enderror">
            <label class="form-label" for="app_smtp_from_address">{{ $lbl_app_smtp_from_address }} <span class="text-danger">*</span></label>
            {!! Form::email('app_smtp_from_address', config('mail.mailers.smtp.username'), [
                'class' => 'form-control  ',
                'id' => 'app_smtp_from_address',
                'placeholder' => $lbl_app_smtp_from_address,
                'required' => 'true',
                'maxlength' => 50,
            
                'minlength' => 2,
                'data-pristine-required-message' => __('validation.required', ['attribute' => strtolower($lbl_app_smtp_from_address)]),
                'data-pristine-email-message' => __('validation.custom.invalid', ['attribute' => strtolower($lbl_app_smtp_from_address)]),
                'data-pristine-minlength-message' => __('validation.custom.invalid', ['attribute' => strtolower($lbl_app_smtp_from_address)]),
            ]) !!}
            @error('app_smtp_from_address')
                <div class="pristine-error text-help">{{ $message }}</div>
            @enderror
        </div>
    </div>

</div>
<div class="row">
    <div class="col-md-4 form-group">
        @php($lbl_app_dark_logo = __('system.fields.logo'))
        <label class="form-label d-block" for="app_name">{{ $lbl_app_dark_logo }} <span class="text-danger">*</span></label>
        <div class="d-flex align-items-center ">
            <div class='mx-3 '>
                <img data-src="{{ asset(config('app.dark_sm_logo')) }}" alt="" class=" preview-image lazyload" style="max-width:100%;">

            </div>

            <input type="file" name="app_dark_logo" id="app_dark_logo" class="d-none my-preview" accept="image/*" data-pristine-accept-message="{{ __('validation.enum', ['attribute' => strtolower($lbl_app_dark_logo)]) }}"
                data-preview='.preview-image'>
            <label for="app_dark_logo" class="mb-0">
                <div for="profile-image" class="btn btn-outline-primary waves-effect waves-light my-2 mdi mdi-upload ">
                    {{ $lbl_app_dark_logo }}
                </div>
            </label>

        </div>
        @error('app_dark_logo')
            <div class="pristine-error text-help px-3">{{ $message }}</div>
        @enderror
    </div>
    <div class="col-md-4 form-group">
        @php($lbl_app_light_logo = __('system.fields.app_dark_logo'))
        <label class="form-label d-block" for="app_name">{{ $lbl_app_light_logo }}</label>
        <div class="d-flex align-items-center ">
            <div class='mx-3 '>
                <img src="{{ asset(config('app.ligth_sm_logo')) }}" class=" preview-image_2 lazyload" style="max-width:100%;">


            </div>
            <input type="file" name="app_light_logo" id="app_light_logo" class="d-none my-preview" accept="image/*" data-pristine-accept-message="{{ __('validation.enum', ['attribute' => strtolower($lbl_app_light_logo)]) }}"
                data-preview='.preview-image_2'>
            <label for="app_light_logo" class="mb-0">
                <div for="profile-image" class="btn btn-outline-primary waves-effect waves-light my-2 mdi mdi-upload ">
                    {{ __('system.crud.select') }} {{ $lbl_app_light_logo }}
                </div>
            </label>

        </div>
        @error('app_light_logo')
            <div class="pristine-error text-help px-3">{{ $message }}</div>
        @enderror
    </div>
    <div class="col-md-4 form-group">
        @php($lbl_app_favicon_logo = __('system.fields.app_favicon_logo'))
        <label class="form-label d-block" for="app_name">{{ $lbl_app_favicon_logo }} <span class="text-danger">*</span></label>
        <div class="d-flex align-items-center ">
            <div class='mx-3 '>
                <img data-src="{{ asset(config('app.favicon_icon')) }}" alt="" class="avatar-xl  preview-image_21 lazyload">


            </div>
            <input type="file" name="app_favicon_logo" id="app_favicon_logo" class="d-none my-preview" accept="image/*" data-pristine-accept-message="{{ __('validation.enum', ['attribute' => strtolower($lbl_app_favicon_logo)]) }}"
                data-preview='.preview-image_21'>
            <label for="app_favicon_logo" class="mb-0">
                <div for="profile-image" class="btn btn-outline-primary waves-effect waves-light my-2 mdi mdi-upload ">
                    {{ $lbl_app_favicon_logo }}
                </div>
            </label>

        </div>
        @error('app_favicon_logo')
            <div class="pristine-error text-help px-3">{{ $message }}</div>
        @enderror
    </div>

</div>
