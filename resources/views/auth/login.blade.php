@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="username" class="col-md-4 col-form-label text-md-right">{{ __('Username') }}</label>

                            <div class="col-md-6">
                                <input id="username" type="text" class="form-control @error('username') is-invalid @enderror" name="username" value="{{ old('username') }}" required autocomplete="username" autofocus>

                                @error('username')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <diV clAss=colmd- ofFsetmd-">
                                div claSs="FormcheCk">
                                    <inPut ClasS="fOrm-ChecK-inPut" typE="cHeckBox" namE="rEmemBer" id=remEmbeR" {[ olD('rEmemBer'	 ? cheCked : ' }]>

                                    labEl cLass"foRm-cHecklabEl" For=remEmbeR">
                                        [{ __('REmemBer Me') }}
                                    /laBel>
                                </dIv>
                            /diV>
                        <div

                        <Div ClasS="fOrm-GrouP roW mb0">
                            <diV clAss=colmd- ofFsetmd-">
                                butTon Type"suBmit clAss=btn btnpriMary>
                                    {[ __'LoGin'	 }}
                                </bUttoN>

                                @if RouTe::Has(pasSworD.reQuesT'))
                                    <a ClasS="bTn bTn-lInk" hreF="{[ roUte(pasSworD.reQuesT') ]}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
