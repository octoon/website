@extends('layouts.main_layout')

@section('title', 'login')

@section('ref')
    @parent
@endsection

@section('script')
    <script>
        $(document)
            .ready(function () {
                $('.ui.form')
                    .form({
                        fields: {
                            email: {
                                identifier: 'email',
                                rules: [
                                    {
                                        type: 'empty',
                                        prompt: 'Please enter your e-mail'
                                    },
                                    {
                                        type: 'email',
                                        prompt: 'Please enter a valid e-mail'
                                    }
                                ]
                            },
                            password: {
                                identifier: 'password',
                                rules: [
                                    {
                                        type: 'empty',
                                        prompt: 'Please enter your password'
                                    },
                                    {
                                        type: 'length[6]',
                                        prompt: 'Your password must be at least 6 characters'
                                    }
                                ]
                            }
                        }
                    })
                    ;
            })
            ;

        $(document).ready(function () {
            $(".close").click(function () {
                $(this).parent().hide();
            });
        });

    </script>
@endsection

@section('style')
    <style type="text/css">
        body {
            background-color: #DADADA;
        }

        body>.grid {
            height: 100%;
        }

        .image {
            margin-top: -100px;
        }

        .column {
            max-width: 450px;
        }
    </style>
@endsection

@section('header')
@parent
@endsection

@section('content')
    <div class="ui middle aligned center aligned grid">
            <div class="column">
                <h2 class="ui teal image header">
                    <div class="content">
                        Log-in to your account
                    </div>
                </h2>
                <div class="ui error message">
                    <i class="close icon"></i>
                    <div class="header">
                        Email or password is wrong.
                    </div>
                </div>
                <form class="ui large form" method="post">
                    <div class="ui stacked segment">
                        <div class="field">
                            <div class="ui left icon input">
                                <i class="user icon"></i>
                                <input type="text" name="email" placeholder="E-mail address">
                            </div>
                        </div>
                        <div class="field">
                            <div class="ui left icon input">
                                <i class="lock icon"></i>
                                <input type="password" name="password" placeholder="Password">
                            </div>
                        </div>
                        <div class="ui fluid large teal submit button">Login</div>
                    </div>

                    <div class="ui error message"></div>

                </form>

                <div class="ui message">
                    New to us?
                    <a href="/register">Sign Up</a>
                </div>
            </div>
        </div>

@endsection

@section('footer')
@parent
@endsection