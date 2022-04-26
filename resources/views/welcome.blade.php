<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no, target-densityDpi=device-dpi" />
    <title>Orbital Media Hub - Comming soon</title>
    <link rel="icon" href="{{ asset('custom/images/fav_ico.ico') }}" type="images/ico">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="{{ asset('custom/css/style.css') }}"/>
    <script type="text/javascript" src="{{ asset('custom/js/jquery-1.12.4.js') }}"></script>
    <script type="text/javascript" src="{{ asset('custom/js/script.js') }}"></script>
</head>

<body>
<div class="hidden_overflow nightmode-font nightmode_bg">
    <div class="container">
        <div class="count-block">
            <div class="head-area">
                <a href="#" class="logo mob_logo"><img src="{{ asset('custom/images/logo.png') }}" alt="Orbital"></a>
                <div class="time-left-txt">Time Left Until <span class="down-op">Launching...</span></div>
            </div>
            <div class="middle-area">
                <div class="countdown-row">
                    <a href="#" class="logo"><img src="{{ asset('custom/images/logo.png') }}" width="100px" alt="Orbital "></a>
                    <div class="counting-row">
                        <div class="slot-type">
                            <span class="num" id="day">54</span>
                            <span class="param">days</span>
                        </div
                        ><div class="slot-type">
                            <span class="num" id="hour">08</span>
                            <span class="param">hours</span>
                        </div
                        ><div class="slot-type">
                            <span class="num" id="min">32</span>
                            <span class="param">min</span>
                        </div
                        ><div class="slot-type">
                            <div class="num _INVISIBLE_" id="second">02</div>
                            <span class="param">sec</span>
                        </div>
                    </div>
                    <div class="seconds-holder">
                        <div class="circle-holder">
                            <div class="dark_digit IE_HIDE">
                                <img src="{{ asset('custom/images/secondwhite.svg') }}" class="round" alt="Clocks seconds">
                            </div>
                            <svg class="dark_digit" width="100%" height="100%">
                                <g id="clipPath">
                                    <image xlink:href="images/secondwhite.svg" width="100%" height="100%" transform="" class="round" id="digitalsecond" alt="Clocks seconds">
                                        <animateTransform attributeName="transform"
                                                          attributeType="XML"
                                                          type="rotate"
                                                          dur="10s"
                                                          repeatCount="indefinite"/>
                                    </image>
                                </g>
                                <defs>
                                    <clipPath id="hero-clip">
                                        <rect x="94%" y="47.2%" fill="#ff0000" width="110" height="64"/>
                                    </clipPath>
                                </defs>
                            </svg>
                            <div class="down_opacity_circle">
                                <img src="{{ asset('custom/images/secondtransnightmode_.svg') }}" class="round" id="digitalsecond" alt="Clocks seconds">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="countdown-caption">
                    <h2>Welcome!</h2>
                    <p>
                        We are happy to see you, our site is almost ready.
                        <span class="dull-text">You can still reach us by filling up this form 👇</span>
                        <button class="btn btn-info mt-3" data-toggle="modal" data-target="#exampleModal">Contact us</button>
                    </p>
                </div>
            </div>
            <footer>
                <div class="social-row">
                    <ul>
                        <li>
                            <a target="_blank" href="#"><i class="icon-fb"></i></a>
                        </li
                        ><li>
                            <a target="_blank" href="#"><i class="icon-twitter"></i></a>
                        </li>
                        <li>
                            <a target="_blank" href="#"><i class="icon-in"></i></a>
                        </li
                        ><li>
                            <a target="_blank" href="https://www.youtube.com/"><i class="icon-youtube"></i></a>
                        </li>
                    </ul>
                </div>
                <p class="copyright-txt">
                    © Orbital Media Hub 2022.  Coded by
                    <a href="http://sifztech.com/" target="_blank">sifztech.com</a>
                </p>
            </footer>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content bg-dark">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Contact us </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
{{--                <label for="">Name: </label>--}}
{{--                <input type="text" class="form-control mb-3" name="" placeholder="eg. John Doe">--}}
{{--                <label for="">Email</label>--}}
{{--                <input type="email" class="form-control mb-3" name="" placeholder="example@gmail.com">--}}
{{--                <label for="">Phone Number</label>--}}
{{--                <input type="text" class="form-control mb-3" name="" placeholder="234 4455 23445">--}}
{{--                <label for="">Subject</label>--}}
{{--                <input type="text" class="form-control mb-3" name="" placeholder="Need information about your podcast">--}}
{{--                <label for="">Message</label>--}}
{{--                <textarea name="" class="form-control mb-3" id="" cols="30" rows="10" placeholder="Hi how are you doing?"></textarea>--}}


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
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-info">Save changes</button>
            </div>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>


<script src="https://www.google.com/recaptcha/api.js?render=v3_site_key"></script>
<script>
    grecaptcha.ready(() => {
        grecaptcha.render('html_element', {
            'sitekey' : 'v2_site_key'
        });
    });
</script>

</body>

</html>
