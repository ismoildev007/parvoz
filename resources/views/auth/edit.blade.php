<x-layouts.auth>
    <div class="container">
        <div class="w-50 py-4">
            <div class="contact-form">
                <div id="success"></div>

                @if(session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif

                @if($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form action="{{ route('profile.update', ['profile' => $profile->id]) }}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="control-group">
                        <input type="text" id="if" class="form-control p-2" name="name" placeholder="Ism" value="{{ $profile->name }}" required/>
                        @error('name')
                        <label for="if" class="text-danger">{{ $message }}</label>
                        @enderror
                        <p class="help-block text-danger"></p>
                    </div>
                    <div class="control-group">
                        <input type="password" id="if" class="form-control p-2" name="old_password" placeholder="Eski parolni kiriting" required/>
                        @error('old_password')
                        <label for="if" class="text-danger">{{ $message }}</label>
                        @enderror
                        <p class="help-block text-danger"></p>
                    </div>
                    <div class="control-group">
                        <input type="password" id="if" class="form-control p-2" name="new_password" placeholder="Yangi parol" required/>
                        @error('new_password')
                        <label for="if" class="text-danger">{{ $message }}</label>
                        @enderror
                        <p class="help-block text-danger"></p>
                    </div>
                    <div class="control-group">
                        <input type="password" id="if" class="form-control p-2" name="new_password_confirmation" placeholder="Yangi parolni tasdiqlash" required/>
                        @error('new_password_confirmation')
                        <label for="if" class="text-danger">{{ $message }}</label>
                        @enderror
                        <p class="help-block text-danger"></p>
                    </div>
                    <div class="control-group">
                        <button class="btn btn-outline-primary" type="submit" id="sendMessageButton">Saqlash</button>
                        <a href="{{ route('profile.index') }}" class="btn btn-outline-info" type="submit" id="sendMessageButton">Orqaga</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-layouts.auth>
