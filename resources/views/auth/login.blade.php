<x-layouts.auth>
    <div class="col-xl-4 col-md-5">
        <div class="card">
            <div class="card-body p-4">

                <div class="text-center w-75 mx-auto auth-logo mb-4">
                    <a href="javascript:void(0)" class="logo-dark">
                        <span><img src="/front/favicon-32x32.png" alt="Branding" data-eio="l" style="width: 70px; color:black;"></span>
                    </a>

                    <a href="javascript:void(0)" class="logo-light">
                        <span><img src="/front/favicon-32x32.png" alt="Branding" data-eio="l" style="width: 70px;color:black;"></span>
                    </a>
                </div>

                <form action="{{ route('authenticate') }}" method="post">
                    @csrf

                    <div class="form-group mb-3">
                        <label class="form-label" for="emailaddress">Email address</label>
                        <input class="form-control" type="email" id="emailaddress" required name="email" placeholder="Enter your email">
                        @error('email')
                        <label class="text-danger" for="">Ro'yhatdan o'tmagan email bilan kirish taqiqlanadi</label>
                        @enderror
                    </div>

                    <div class="form-group mb-3">
                        <a href="#" class="text-muted float-end"><small></small></a>
                        <label class="form-label" for="password">Password</label>
                        <input class="form-control" type="password" name="password" required id="password" placeholder="Enter your password">
                        @error('password')
                        <label class="text-danger" for="">Parol xato</label>
                        @enderror
                    </div>


                    <div class="form-group mb-0 text-center">
                        <button class="btn btn-primary w-100" type="submit"> Log In </button>
                    </div>

                </form>
            </div> <!-- end card-body -->
        </div>
        <!-- end card -->

        
        <!-- end row -->

    </div>
</x-layouts.auth>

