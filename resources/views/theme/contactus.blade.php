<div class="container">
    <h1 style="text-align: center">Contact Us</h1>
    <div class="row">
        <div class="col-md-12">
            <form method="POST" action="{{ route('theme.index') }}">
                @csrf

                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" id="name" name="name" class="form-control @error('name') is-invalid @enderror" value="{{ old('name') }}">
                    @error('name')
                        <div class="invalid-feedback" style="color: red;">{{ $message }}</div>
                    @enderror
                </div>
 
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}">
                    @error('email')
                        <div class="invalid-feedback" style="color: red;">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="mobile">Mobile No</label>
                    <input type="text" id="mobile" name="mobile" class="form-control @error('mobile') is-invalid @enderror" value="{{ old('mobile') }}">
                    @error('mobile')
                        <div class="invalid-feedback" style="color: red;">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" id="password" name="password" class="form-control @error('password') is-invalid @enderror">
                    @error('password')
                        <div class="invalid-feedback" style="color: red;">{{ $message }}</div>
                    @enderror
                </div>

                <div class="text-center">
                    <button class="btn btn-primary">Submit</button>
                  </div>            
            </form>
        </div>
    </div>
</div>
