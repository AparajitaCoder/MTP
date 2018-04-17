@extends('user.layout.app')
@section('content')
<section class="content">
	
	
	<div class="col-md-5">
        @if($page == "sponser")
    		<div class="para-desc">
    			<p> Here we post the names of top ten idea competion winners and public challenge solution providers winners </p>
    		</div>

        @elseif($page == "metec")
            <div class="para-desc">
                <p>Metec employees can share idea/ get technical and adminration support</p>
            </div>

        @endif
	</div>
	
	<div class="col-md-7 login-sec right-sec">		
         @include('common.notify')
            <div class="panel panel-default">            
                <div class="short-heading">Login</div>
               
                <div class="panel-body">
                	<div class="login-reg">
                		<p> If you have account please login or <a href="#_">register</a>  </p>
                	</div>
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/user/login') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                        	<div class="col-md-4 pull-left">
                            	<label for="email" class="control-label">E-Mail Address</label>
                            </div>

                            <div class="col-md-8">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="Type your Email address here.." />

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                        	<div class="col-md-4 pull-left">
                            	<label for="password" class="col-md-4 control-label">Password</label>
                           	</div>

                            <div class="col-md-8">
                                <input id="password" type="password" class="form-control" name="password" placeholder="Password" />

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember"> Remember Me
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-4">
                                <button type="submit" class="btn yellow-btn">
                                    Login
                                </button>

                                <a class="btn btn-link" href="{{ url('/user/password/reset') }}">
                                    Forgot Your Password?
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
	</div> 		
	 
	
</section>

@endsection