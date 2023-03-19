<x-layout>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">

                <form class="row g-3 p-5 bg-light border_radius_20" method="POST" action="{{route('login')}}">
                    @csrf

                    @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif

                    <div class="col-md-6">
                        <label class="form-label">Email</label>
                        <input type="email" name="email" class="form-control" value="{{ old('email') }}">
                    </div>

                    <div class="col-md-6">
                        <label class="form-label">Password</label>
                        <input type="password" name="password" class="form-control">
                    </div>

                    <div class="form-check">
                        <label class="form-check-label" for="remember">Remember me</label>
                        {{-- IMPORTANTE CHE ABBIA IL name="remember" (CoC) per essere gestito da Fortify --}}
                        <input class="form-check-input" type="checkbox" value="" name="remember" id="remember" checked>
                    </div>


                    <div class="">
                        <button type="submit" class="btn btn-outline-success px-5 mt-3"> Login! </button>
                    </div>

                </form>

            </div>
        </div>
    </div>
</x-layout>