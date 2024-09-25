<x-app-layout>
<div class="flex justify-center items-center w-full h-svh">
    <form action="{ route('registration') }" class="p-10 flex flex-wrap gap-5 rounded bg-blue-100 w-[400px]">
        <input class="form-input rounded w-full" type="text" placeholder="Name"/>
        <input class="form-input rounded w-full" type="email" placeholder="Email"/>
        <input class="form-input rounded w-full" type="password" placeholder="Password"/>
        <button class="bg-green-500 p-2 rounded m-auto" type="submit">Create</button>
        <br>
        <div class="text-center">Already have an account? <a class="text-green-500 font-bold" href="/login">Login</a></div>
    </form>
</div>
</x-app-layout>
