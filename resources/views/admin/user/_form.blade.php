        @if ($errors->any())
            <div class="alert alert-danger">
                <h5>{{ __('Error Occured') }}</h5>
                <ul>
                    @foreach ($errors->all() as $err)
                        <li class="text-danger">{{ $err }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <div class="row">
            <x-form.input lable="Name" type="text" name="name" :value="$user->name" required/>
        </div>

        <div class="row">
            <x-form.input lable="Email" type="email" name="email" :value="$user->email" required />
        </div>

        <div class="row">
            <x-form.input lable="Password" type="password" name="password" :value="$user->password" required/>
        </div>

        <div class="row">
            <x-form.input lable="Password" type="password" name="password" :value="$user->password" required/>
        </div>

        </div><br>

        <div class="d-flex justify-content-center">
            <button type="submit" class="btn btn-primary">{{__("Save Data")}}</button>

        </div>
        <br><br>
