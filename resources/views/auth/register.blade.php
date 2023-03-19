<x-layout>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                {{-- ROTTA HIDDEN --}}
                <form class="row g-3 p-5 bg-light border_radius_20" method="POST" action="{{route('register')}}" enctype="multipart/form-data">
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
                        <label for="name" class="form-label">Nome Utente</label>
                        <input type="text" name="name" class="form-control" id="name" value="{{ old('platform') }}">
                    </div>
                    <div class="col-md-6">
                        <label class="form-label">Email</label>
                        <input type="email" name="email" class="form-control" value="{{ old('platform') }}">
                    </div>
                    
                    <div class="col-md-6">
                        <label class="form-label">Password</label>
                        <input type="password" name="password" class="form-control">
                    </div>
                    <div class="col-md-6">
                        <label class="form-label">Conferma Password</label>
                        <input type="password" name="password_confirmation" class="form-control">
                    </div>
                    
                    <div class="col-12 d-flex justify-content-center">
                        <button type="submit" class="btn btn-outline-success px-5 mt-3">
                            Registrati!
                        </button>
                    </div>
                    
                </form>
            </div>
        </div>
    </div>
</x-layout>