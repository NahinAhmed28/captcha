@extends('layouts.app')
@section('content')



    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-primary">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div class="panel-heading">Form Fill UP </div>
                    <div class="panel-body">
                        <form class="form-horizontal" role="form" method="POST" action="{!! route('form.store') !!}">
                            {!! csrf_field() !!}


                            <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                <label class="col-md-4 control-label">Name</label>
                                <div class="col-md-6">
                                    <input type="text" class="form-control" name="name" value="{{ old('name') }}">
                                    @if ($errors->has('name'))
                                        <span class="help-block">
                                             <div class="alert alert-danger mt-1 mb-1"> <strong>{{ $errors->first('name') }}</strong> </div>
                                    </span>
                                    @endif
                                </div>
                            </div>


                            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                <label class="col-md-4 control-label">E-Mail Address</label>


                                <div class="col-md-6">
                                    <input type="email" class="form-control" name="email" value="{{ old('email') }}">


                                    @if ($errors->has('email'))
                                        <span class="help-block">
                                             <div class="alert alert-danger mt-1 mb-1"> <strong>{{ $errors->first('email') }}</strong> </div>
                                    </span>
                                    @endif
                                </div>
                            </div>



                            <div class="form-group{{ $errors->has('phone') ? ' has-error' : '' }}">
                                <label for="phone" class="col-md-4 control-label">Phone</label>


                                <div class="col-md-6">
                                    <input id="phone" type="text" class="form-control" name="phone" value="{{ old('phone') }}">


                                    @if ($errors->has('phone'))
                                        <span class="help-block">
                                                     <div class="alert alert-danger mt-1 mb-1"> <strong>{{ $errors->first('phone') }}</strong> </div>
                                                </span>
                                    @endif
                                </div>
                            </div>


                            <div class="form-group{{ $errors->has('subject') ? ' has-error' : '' }}">
                                <label for="subject" class="col-md-4 control-label">Subject</label>


                                <div class="col-md-6">
                                    <input id="subject" type="text" class="form-control" name="subject" value="{{ old('subject') }}">


                                    @if ($errors->has('subject'))
                                        <span class="help-block">
                                                     <div class="alert alert-danger mt-1 mb-1"> <strong>{{ $errors->first('subject') }}</strong> </div>
                                                </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('message') ? ' has-error' : '' }}">
                                <label for="message" class="col-md-4 control-label">Message</label>


                                <div class="col-md-6">
                                            <textarea id="message" type="text" class="form-control" name="message" >{{ old('message') }}
                                            </textarea>


                                    @if ($errors->has('message'))
                                        <span class="help-block">
                                                     <div class="alert alert-danger mt-1 mb-1"> <strong>{{ $errors->first('message') }}</strong> </div>
                                                </span>
                                    @endif
                                </div>
                            </div>



                            <div class="row">
                                <div class="col-xs-12 col-sm-12 col-md-6">
                                    <div class="form-group">
                                        <strong>Recaptcha:</strong>
                                        {!! NoCaptcha::renderJs() !!}
                                        {!! NoCaptcha::display() !!}
                                        @error('g-recaptcha-response')
                                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-4">
                                    <br/>
                                    <button type="submit" class="btn btn-primary">
                                        <i class="fa fa-btn fa-user"></i>Submit
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
