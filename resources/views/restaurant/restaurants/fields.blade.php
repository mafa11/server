<div class="row align-items-stretch">
    <div class="col-md-4 form-group align-self-center">
        @php($lbl_logo = __('system.fields.app_light_logo'))
        <div class="d-flex  align-items-center ">
            <input type="file" name="logo" id="logo" class="d-none my-preview" accept="image/*" data-pristine-accept-message="{{ __('validation.enum', ['attribute' => strtolower($lbl_logo)]) }}" data-preview='.preview-image'>
            <label for="logo" class="mb-0">
                <div for="profile-image" class="btn btn-outline-primary waves-effect waves-light my-2 mdi mdi-upload ">
                    {{ $lbl_logo }}
                </div>
            </label>
            <div class='mx-3 '>
                @if (isset($restaurant) && $restaurant->logo_url != null)
                    <img data-src="{{ $restaurant->logo_url }}" alt="" class="avatar-xl rounded-circle img-thumbnail preview-image lazyload">
                @else
                    <div class="preview-image-default">
                        <h1 class="rounded-circle font-size text-white d-inline-block text-bold bg-primary px-4 py-3 ">{{ $restaurant->logo_name ?? 'R' }}</h1>
                    </div>
                    <img class="avatar-xl rounded-circle img-thumbnail preview-image" style="display: none;" />
                @endif
            </div>
        </div>
        @error('logo')
            <div class="pristine-error text-help">{{ $message }}</div>
        @enderror
    </div>
    <div class="col-md-4 form-group align-self-center">
        @php($lbl_logo_ligth = __('system.fields.app_dark_logo'))
        <div class="d-flex  align-items-center ">
            <input type="file" name="dark_logo" id="dark_logo" class="d-none my-preview" accept="image/*" data-pristine-accept-message="{{ __('validation.enum', ['attribute' => strtolower($lbl_logo_ligth)]) }}"
                data-preview='.preview-image1'>
            <label for="dark_logo" class="mb-0">
                <div for="profile-image" class="btn btn-outline-primary waves-effect waves-light my-2 mdi mdi-upload ">
                    {{ $lbl_logo_ligth }}
                </div>
            </label>
            <div class='mx-3 '>
                @if (isset($restaurant) && $restaurant->dark_logo_url != null)
                    <img data-src="{{ $restaurant->dark_logo_url }}" alt="" class="avatar-xl rounded-circle img-thumbnail preview-image1 lazyload">
                @else
                    {{-- <div class="preview-image-default">
                        <h1 class="rounded-circle font-size text-white d-inline-block text-bold bg-primary px-4 py-3 ">{{ $restaurant->logo_name ?? 'R' }}</h1>
                    </div> --}}
                    <img class="avatar-xl rounded-circle img-thumbnail preview-image1" style="display: none;" />
                @endif
            </div>
        </div>
        @error('dark_logo')
            <div class="pristine-error text-help">{{ $message }}</div>
        @enderror
    </div>
    <div class="col-md-4 form-group align-self-center">

        @php($lbl_cover_image = __('system.fields.cover_image'))
        <div class="d-flex  align-items-center  ">
            <input type="file" name="cover_image" id="cover_image" class="d-none my-preview" accept="image/*" data-pristine-accept-message="{{ __('validation.enum', ['attribute' => strtolower($lbl_cover_image)]) }}"
                data-preview='.preview-cover_image-image'>
            <label for="cover_image" class="mb-0">
                <div for="profile-image" class="btn btn-outline-primary waves-effect waves-light my-2 mdi mdi-upload ">
                    {{ $lbl_cover_image }}
                </div>
            </label>
            <div class='mx-3 '>
                <img class="avatar-xxl  preview-cover_image-image w-100" @if (isset($restaurant) && $restaurant->cover_image_url != null) src="{{ $restaurant->cover_image_url }}"    @else style="display: none;" @endif />
            </div>
        </div>
        @error('cover_image')
            <div class="pristine-error text-help">{{ $message }}</div>
        @enderror
    </div>
</div>
<div class="row mt-3">
    <div class="col-md-4">
        @php($lbl_restaurant_name = __('system.fields.restaurant_name'))

        <div class="mb-3 form-group @error('name') has-danger @enderror">
            <label class="form-label" for="name">{{ $lbl_restaurant_name }} <span class="text-danger">*</span></label>
            {!! Form::text('name', null, [
                'class' => 'form-control',
                'id' => 'name',
                'placeholder' => $lbl_restaurant_name,
                'required' => 'true',
                'maxlength' => 255,
                'minlength' => 2,
                'data-pristine-required-message' => __('validation.required', ['attribute' => strtolower($lbl_restaurant_name)]),
                'data-pristine-minlength-message' => __('validation.custom.invalid', ['attribute' => strtolower($lbl_restaurant_name)]),
            ]) !!}
            @error('name')
                <div class="pristine-error text-help">{{ $message }}</div>
            @enderror
        </div>
    </div>
    <div class="col-md-4">
        @php($lbl_restaurant_type = __('system.fields.restaurant_type'))
        <div class="mb-3 form-group @error('type') has-danger @enderror">
            <label class="form-label" for="restaurant">{{ $lbl_restaurant_type }} <span class="text-danger">*</span></label>
            {{ Form::select('type', App\Models\Restaurant::restaurant_type_dropdown(), null, [
                'class' => 'form-control form-select',
                'id' => 'restaurant_type',
                'required' => true,
                'data-pristine-required-message' => __('validation.custom.select_required', ['attribute' => strtolower($lbl_restaurant_type)]),
            ]) }}
            @error('type')
                <div class="pristine-error text-help">{{ $message }}</div>
            @enderror
        </div>
    </div>
    <div class="col-md-4">
        @php($lbl_contact_email = __('system.fields.contact_email'))


        <div class="mb-3 form-group @error('contact_email') has-danger @enderror">
            <label class="form-label" for="contact_email">{{ $lbl_contact_email }}</label>

            {!! Form::email('contact_email', null, [
                'class' => 'form-control',
                'id' => 'contact_email',
                'placeholder' => $lbl_contact_email,
                'data-pristine-email-message' => __('validation.custom.invalid', ['attribute' => strtolower($lbl_contact_email)]),
            ]) !!}

            @error('contact_email')
                <div class="pristine-error text-help">{{ $message }}</div>
            @enderror
        </div>
    </div>
    <div class="col-md-4">
        @php($lbl_phone_number = __('system.fields.phone_number'))

        <div class="mb-3 form-group @error('phone_number') has-danger @enderror">
            <label class="form-label" for="pristine-phone-valid">{{ $lbl_phone_number }} <span class="text-danger">*</span></label>

            {!! Form::text('phone_number', null, [
                'class' => 'form-control',
                'id' => 'pristine-phone-valid',
                'placeholder' => $lbl_phone_number,
                'maxlength' => 15,
                'required' => true,
                'data-pristine-required-message' => __('validation.required', ['attribute' => strtolower($lbl_phone_number)]),
            ]) !!}

            @error('phone_number')
                <div class="pristine-error text-help">{{ $message }}</div>
            @enderror
        </div>
    </div>
    @if (isset($create))
        <div class="col-md-4">
            @php($lbl_clone_data_into = __('system.fields.clone_data_into'))

            <div class="mb-3 form-group @error('clone_data_into') has-danger @enderror">
                <label class="form-label" for="pristine-phone-valid">{{ $lbl_clone_data_into }}</label>

                {{ Form::select('clone_data_into', ['' => __('system.users.select_restaurant')] + App\Http\Controllers\Restaurant\RestaurantController::getRestaurantsDropdown(), null, [
                    'class' => 'form-control form-select',
                    'id' => 'clone_data_into',
                ]) }}
                @error('clone_data_into')
                    <div class="pristine-error text-help">{{ $message }}</div>
                @enderror

            </div>
        </div>
    @endif
</div>
<div class="row">
    <h5 class="font-size-14 my-3">{{ __('system.fields.address_details') }}</h5>
    <div class="col-md-4">
        @php($lbl_city = __('system.fields.city'))
        <div class="mb-3 form-group @error('city') has-danger @enderror">
            <label class="form-label" for="input-city">{{ $lbl_city }} <span class="text-danger">*</span></label>
            {!! Form::text('city', null, [
                'class' => 'form-control',
                'id' => 'input-city',
                'placeholder' => $lbl_city,
                'required' => true,
                'data-pristine-required-message' => __('validation.required', ['attribute' => strtolower($lbl_city)]),
            ]) !!}

        </div>
        @error('city')
            <div class="pristine-error text-help">{{ $message }}</div>
        @enderror
    </div>
    <div class="col-md-4">
        @php($lbl_state = __('system.fields.state'))
        <div class="mb-3 form-group @error('state') has-danger @enderror">
            <label class="form-label" for="input-state">{{ $lbl_state }} <span class="text-danger">*</span></label>
            {!! Form::text('state', null, [
                'class' => 'form-control',
                'id' => 'input-state',
                'placeholder' => $lbl_state,
                'required' => true,
                'data-pristine-required-message' => __('validation.required', ['attribute' => strtolower($lbl_state)]),
            ]) !!}
        </div>
        @error('state')
            <div class="pristine-error text-help">{{ $message }}</div>
        @enderror
    </div>
    <div class="col-md-4">
        @php($lbl_country = __('system.fields.country'))

        <div class="mb-3 form-group @error('country') has-danger @enderror">
            <label class="form-label" for="input-country">{{ $lbl_country }} <span class="text-danger">*</span></label>
            {!! Form::text('country', null, [
                'class' => 'form-control',
                'id' => 'input-country',
                'placeholder' => $lbl_country,
                'required' => true,
                'data-pristine-required-message' => __('validation.required', ['attribute' => strtolower($lbl_country)]),
            ]) !!}

        </div>
        @error('country')
            <div class="pristine-error text-help">{{ $message }}</div>
        @enderror
    </div>
    <div class="col-md-4">
        @php($lbl_zip = __('system.fields.zip'))

        <div class="mb-3 form-group @error('zip') has-danger @enderror">
            <label class="form-label" for="input-zip">{{ $lbl_zip }} <span class="text-danger">*</span></label>
            {!! Form::text('zip', null, [
                'class' => 'form-control pristine-custom-pattern',
                'id' => 'input-zip',
                'placeholder' => $lbl_zip,
                'custom-pattern' => "^[0-9a-zA-z]{4,8}$",
                'required' => true,
                'maxlength' => 8,
                'data-pristine-pattern-message' => __('validation.custom.invalid', ['attribute' => strtolower($lbl_zip)]),
                'data-pristine-required-message' => __('validation.required', ['attribute' => strtolower($lbl_zip)]),
            ]) !!}
        </div>
        @error('zip')
            <div class="pristine-error text-help">{{ $message }}</div>
        @enderror
    </div>
    <div class="col-md-8">
        @php($lbl_address = __('system.fields.address'))

        <div class="mb-3 form-group @error('address') has-danger @enderror">
            <label class="form-label" for="input-address">{{ $lbl_address }} <span class="text-danger">*</span></label>
            {!! Form::textarea('address', null, [
                'class' => 'form-control',
                'id' => 'input-address',
                'placeholder' => $lbl_address,
                'minlength' => '5',
                'required' => true,
                'rows' => 2,
                'data-pristine-required-message' => __('validation.required', ['attribute' => strtolower($lbl_address)]),
                'data-pristine-minlength-message' => __('validation.custom.invalid', ['attribute' => strtolower($lbl_address)]),
            ]) !!}
        </div>
        @error('address')
            <div class="pristine-error text-help">{{ $message }}</div>
        @enderror
    </div>
</div>
