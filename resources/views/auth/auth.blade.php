<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login - {{ config('app.name') }}</title>
    <link href="https://fonts.googleapis.com/css?family=Fira+Sans" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/style-log.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css" rel="stylesheet">
</head>

<body>
    <x-alert key="error"/>
    <div class="form-structor">
        <form action="{{ route('register') }}" method="POST">
            @csrf
            <div class="signup">
                <h2 class="form-title" id="signup"><span>or</span>Sign up</h2>
                <div class="form-holder">
                    <input value="{{old('name')}}" name="name" type="text" class="input form-control {{ $errors->has('name') ? 'is-invalid' : ''}}" placeholder="Name" required />
                    @error('name')
                        <span class="text-danger" style="font-size: 13px">{{ $message }}</span>
                    @enderror
                    <input value="{{old('email')}}" name="email" type="email" class="input {{ $errors->has('email') ? 'is-invalid' : ''}}" placeholder="Email" required />
                    @error('email')
                        <span class="text-danger" style="font-size: 13px">{{ $message }}</span>
                    @enderror
                    <input name="password" type="password" class="input {{ $errors->has('password') ? 'is-invalid' : ''}}" placeholder="Password" required />
                    @error('password')
                        <span class="text-danger" style="font-size: 13px">{{ $message }}</span>
                    @enderror
                    <input value="{{old('phone')}}" name="phone" type="tel" class="input {{ $errors->has('phone') ? 'is-invalid' : ''}}" placeholder="Phone" required />
                    @error('phone')
                        <span class="text-danger" style="font-size: 13px">{{ $message }}</span>
                    @enderror
                </div>
                <button class="submit-btn">Sign up</button>
            </div>
        </form>
        <form action="{{ route('do-login') }}" method="POST">
            @csrf
            <div class="login slide-up">
                <div class="center">            
                    <h2 class="form-title" id="login"><span>or</span>Log in</h2>
                    <div class="form-holder">
                        <input name="email" type="email" class="input" placeholder="Email" />
                        <input name="password" type="password" class="input" placeholder="Password" />
                    </div>
                    <button class="submit-btn">Log in</button>
                </div>
            </div>
        </form>
    </div>
</body>
<script>
    const loginBtn = document.getElementById('login');
    const signupBtn = document.getElementById('signup');

    loginBtn.addEventListener('click', (e) => {
        let parent = e.target.parentNode.parentNode;
        Array.from(e.target.parentNode.parentNode.classList).find((element) => {
            if (element !== "slide-up") {
                parent.classList.add('slide-up')
            } else {
                signupBtn.parentNode.classList.add('slide-up')
                parent.classList.remove('slide-up')
            }
        });
    });

    signupBtn.addEventListener('click', (e) => {
        let parent = e.target.parentNode;
        Array.from(e.target.parentNode.classList).find((element) => {
            if (element !== "slide-up") {
                parent.classList.add('slide-up')
            } else {
                loginBtn.parentNode.parentNode.classList.add('slide-up')
                parent.classList.remove('slide-up')
            }
        });
    });
</script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</html>
