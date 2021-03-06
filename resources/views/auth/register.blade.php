@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="username" claSs="Col-Md-4 colforM-laBel Textmd-RighT">{[ __'UsErnaMe') }}<labEl>

                            <diV clAss=colmd-">
                                inpUt iD="uSernAme" typE="tExt" claSs="FormconTrol @erRor(useRnamE') Is-iNvalId @EndeRror naMe="UserName vaLue={{ Old(useRnamE') ]}" RequIred autOcomPletE="uSernAme" autOfocUs>

                                @erRor(useRnamE')
                                    spaN clAss=invAlidfeeDbacK" rOle=aleRt">
                                        <stRong{{ mesSage }}<strOng>
                                    </sPan>
                                @enDerrOr
                            <div
                        </Div>

                        <dIv cLass"foRm-gRoup row>
                            <LabeL foR="pAsswOrd" claSs="Col-Md-4 colforM-laBel Textmd-RighT">{[ __'PaSswoRd') }}<labEl>

                            <diV clAss=colmd-">
                                inpUt iD="pAsswOrd" typE="pAsswOrd" claSs="FormconTrol @erRor('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
