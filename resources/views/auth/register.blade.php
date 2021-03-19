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
                            <label for="first_name" class="col-md-4 col-form-label text-md-right">{{ __('first_Name') }}</label>

                            <div class="col-md-6">
                                <input id="first_name" type="text" class="form-control @error('first_name') is-invalid @enderror" name="first_name" value="{{ old('first_name') }}" required autocomplete="first_name" autofocus>

                                @error('first_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="last_name" class="col-md-4 col-form-label text-md-right">{{ __('last_Name') }}</label>

                            <div class="col-md-6">
                                <input id="last_name" type="text" class="form-control @error('last_name') is-invalid @enderror" name="last_name" value="{{ old('last_name') }}" required autocomplete="last_name" autofocus>

                                @error('last_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>





                        <div class="form-group row">
                            <label for="User_name" class="col-md-4 col-form-label text-md-right">{{ __('User_Name') }}</label>

                            <div class="col-md-6">
                                <input id="User_name" type="text" class="form-control @error('User_name') is-invalid @enderror" name="User_name" value="{{ old('User_name') }}" required autocomplete="User_name" autofocus>

                                @error('User_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                         <div class="form-group row">
                            <label for="phone" class="col-md-4 col-form-label text-md-right">{{ __('phone') }}</label>

                            <div class="col-md-6">
                                <input id="phone" type="text" class="form-control @error('phone') is-invalid @enderror" name="phone" value="{{ old('phone') }}" required autocomplete="phone">

                                @error('phone')
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
                            <label for="Street_address" class="col-md-4 col-form-label text-md-right">{{ __('Street_address') }}</label>

                            <div class="col-md-6">
                                <input id="Street_address" type="text" class="form-control @error('Street_address') is-invalid @enderror" name="Street_address" value="{{ old('Street_address') }}" required>

                                @error('Street_address')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="division_ID" class="col-md-4 col-form-label text-md-right">{{ __('division_ID') }}</label>

                            <div class="col-md-6">
                               <select class="form-control" name="division_ID">
                                   <option>
                                       Please select your District
                                   </option>
                                   @foreach($division as $div)
                                   <option value="{{$div->id}}">{{$div->division}}</option>
                                   @endforeach
                               </select>
                            </div>
                        </div>
                       

                          <div class="form-group row">
                            <label for="district_ID" class="col-md-4 col-form-label text-md-right">{{ __('district_ID') }}</label>

                            <div class="col-md-6">
                               <select class="form-control" name="district_ID">
                                   <option value="">
                                       Please select your District
                                   </option>
                                   @foreach($district as $diva)
                                   <option value="{{$diva->id}}">{{$diva->district}}</option>
                                   @endforeach
                               </select>
                            </div>
                        </div>




                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required>

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



 <ul>
        <li>US</li>
        <li>India</li>
        <li>UK</li>
        <li>Canada</li>
        <li>Australia</li>
</ul>

   <div id="divResult2"></div>


<script type="text/javascript">

    $(document).ready(function () {
            var result = '';
            $('li').each(function (index, element) {
                result += 'Index = ' + index + ', Value = ' + $(element).text() + '<br/>';
                //or
                //result += 'Index = ' + index + ', Value = ' + $(this).text() + '&lt;br/&gt;';
            });
            $('#divResult2').html(result);
    });


</script>

       <script  src="{{ asset('js/jquery-3.4.1.js') }}" > </script>
       <script  src="{{ asset('js/bootstrap.min.js') }}"> </script>
       <script  src="{{ asset('js/bootstrap.bundle.min.js') }}"> </script>
       <script  src="{{ asset('js/bootstrap.js') }}"> </script>               
       <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
       </div>
@endsection
