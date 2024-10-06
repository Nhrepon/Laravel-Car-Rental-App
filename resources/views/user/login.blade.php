<x-app-layout>
<div class="flex justify-center items-center h-svh">
    <div class="p-10 flex flex-wrap gap-5 rounded bg-blue-100 w-[400px]">
        <input id="email" class="form-input rounded w-full" type="email" placeholder="Email"/>
        <input id="password" class="form-input rounded w-full" type="password" placeholder="Password"/>

        <button onclick="login()" class="bg-green-500 p-2 rounded m-auto">Login</button>
        <br>
        <div class="text-center">Don't have an account? <a class="text-green-500 font-bold" href="{{url('/user-registration')}}">Registration</a></div>
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
                let response = await axios.post('/login', {email: email, password: password});
                
                if (response.data['status'] == 'success') {
                    window.location.href = '/dashboard';
                } else {
                    errorToast("Login failed");
                }
            }
        }
    </script>
</x-app-layout>
