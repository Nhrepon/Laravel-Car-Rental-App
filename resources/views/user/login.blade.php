<x-app-layout>
    <div class="container-fluid">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="d-flex justify-content-center align-items-center m-auto vh-100">
                        <div class="card shadow p-3">
                            <div class="card-body d-flex flex-column gap-3">
                                <input id="email" class="form-control rounded" type="email" placeholder="Email" />
                                <input id="password" class="form-control rounded" type="password" placeholder="Password" />
                                <button onclick="login()" class="btn btn-success text-center">Login</button>
                                <br>
                                <div class="text-center">Don't have an account? <a class="text-green-500 font-bold" href="{{url('/user-registration')}}">Registration</a></div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <script>
        async function login() {
            let email = document.getElementById('email').value;
            let password = document.getElementById('password').value;
            if (email.length == 0) {
                errorToast('Please enter email');

            } else if (password.length == 0) {
                errorToast('Please enter password');
            } else {
                let response = await axios.post('/login', {
                    email: email,
                    password: password
                });

                if (response.data['status'] == 'success') {

                    window.location.href = '/dashboard';
                } else {
                    errorToast("Login failed");
                }
            }
        }
    </script>
</x-app-layout>