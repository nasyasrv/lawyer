@extends('auth.layouts.app')
@section('contents')
        <!-- Login -->
        <div class="d-flex col-12 col-lg-4 align-items-center authentication-bg-dark p-sm-12 p-6">
          <div class="w-px-400 mx-auto mt-12 pt-5">
            <h4 class="mb-1">Selamat Datang Admin</h4>
            <p class="mb-6">Mohon login untuk masuk kedalam mode admin</p>

            <form id="formAuthentication" class="mb-6" action="{{ route('login') }}" method="POST" onsubmit="document.getElementById('loading-screen').style.display = 'flex';">
                @csrf
              <div class="mb-6">
                <label for="email" class="form-label">Email</label>
                <input
                  type="text"
                  class="form-control @error('email') is-invalid @enderror"
                  id="email"
                  name="email"
                  value="{{ old('email') }}"
                  placeholder="Enter your email"
                  autocomplete="email"
                  autofocus />
                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
              </div>
              <div class="mb-6 form-password-toggle">
                <label class="form-label" for="password">Password</label>
                <div class="input-group input-group-merge">
                  <input
                    type="password"
                    id="password"
                    class="form-control @error('password') is-invalid @enderror"
                    name="password"
                    placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
                    aria-describedby="password" />
                  <span class="input-group-text cursor-pointer"><i class="ti ti-eye-off"></i></span>
                </div>
                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
              </div>
              <button class="btn btn-primary d-grid w-100" type="submit">Sign in</button>
            </form>
            </p>
          </div>
        </div>
        <!-- /Login -->
@endsection
