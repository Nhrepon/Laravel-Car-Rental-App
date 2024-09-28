<x-app-layout>
<div class="flex justify-center items-center h-svh">
    <form action="" class="p-10 flex flex-wrap gap-5 rounded bg-blue-100 w-[400px]">
        <input id="email" class="form-input rounded w-full" type="email" placeholder="Email"/>
        <input id="password" class="form-input rounded w-full" type="password" placeholder="Password"/>

        <button onclick="login()" class="bg-green-500 p-2 rounded m-auto" type="submit">Login</button>
        <br>
        <div class="text-center">Don't have an account? <a class="text-green-500 font-bold" href="{{url('/create')}}">Registration</a></div>
    </form>

    <script>
        async function login() {
            let email = document.getElementById('email').value;
            let password = document.getElementById('password').value;
            if (email.length == 0) {
                alert('Please enter email');
            } else if (password.length == 0) {
                alert('Please enter password');
            } else {
                let response = await axios.post('/login', {email: email, password: password});
                let result = response.data;
                if (result.status == 'success') {
                    window.location.href = '/dashboard';
                } else {
                    alert("Login failed");
                }
            }
        }
    </script>
</div>
</x-app-layout>
