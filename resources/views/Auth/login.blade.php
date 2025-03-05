<x-layout>
    <div class="flex flex-row items-center justify-center min-h-screen">
        <div class="w-full max-w-md bg-white p-8 rounded-lg shadow-md">
            <h1 class="text-3xl font-bold text-center text-gray-800 mb-4">Login</h1>
            <p class="text-center text-gray-600 mb-6">
                by <a target="_blank" href="https://www.haryc.me/" class="text-blue-500 hover:underline">haryc_</a>
            </p>
            <form method="POST" action="{{ route('login') }}" class="space-y-4">
                @csrf
                <div>
                    <label for="user" class="block text-sm font-medium text-gray-700">Username or Email</label>
                    <input type="text" name="usernameOrEmail" id="usernameOrEmail"
                        class="w-full px-4 py-2 mt-1 border border-gray-300 rounded-lg focus:ring focus:ring-blue-200 focus:outline-none"
                        placeholder="username or email">
                </div>
                <div>
                    <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
                    <input type="password" name="password" id="password"
                        class="w-full px-4 py-2 mt-1 border border-gray-300 rounded-lg focus:ring focus:ring-blue-200 focus:outline-none"
                        placeholder="password">
                </div>
                <button type="submit"
                    class="w-full py-2 text-white bg-blue-600 rounded-lg hover:bg-blue-700 focus:ring focus:ring-blue-200 focus:outline-none">Sign
                    In</button>
            </form>
        </div>
    </div>
</x-layout>
