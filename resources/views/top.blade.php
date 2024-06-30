<x-guest-layout>

    <div class="text-gray-600 body-font">
        <div class="container px-5 py-24 mx-auto flex flex-wrap ">
            <div class="lg:w-2/6 md:w-3/4 md:pr-16 lg:pr-0 pr-0">
                <h1 class="title-font font-medium text-3xl text-gray-900 mt-5">ドライブ・ツーリングの行き先探しに</h1>
                <p class="leading-relaxed mt-4">現在地から次の目的地をランダムに決定してくれます。</p>
            </div>
            <div class="lg:w-2/5 md:w-1/1 bg-gray-100 rounded-lg p-8 flex flex-col md:ml-auto w-full mt-10 md:mt-0">
                <h2 class="text-gray-900 text-lg font-medium title-font mb-5">ログイン</h2>

                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="relative mb-4">
                        <x-input-label for="username" :value="'ユーザー名'" />
                        <x-text-input id="username" type="text" name="username" :value="old('username')" required autofocus autocomplete="username" />

                    </div>
                    <div class="relative mb-4">
                        <x-input-label for="password" :value="'パスワード'" />
                        <x-text-input id="password" type="password" name="password" :value="old('password')" required autocomplete="current-password" />
                    </div>
                    <div class="flex gap-5">
                        <button class="text-white bg-gray-400 border-0 py-2 px-8 focus:outline-none hover:bg-gray-500 rounded text-lg">ログイン</button>
                        <button type="button" onclick="location.href='{{ route('register') }}' "
                            class="text-white bg-green-500 border-0 py-2 px-8 focus:outline-none hover:bg-green-600 rounded text-lg">新規登録</button>
                    </div>
                    <x-input-error :messages="$errors->get('username')" class="mt-2" />
                </form>

            </div>
        </div>
    </div>
</x-guest-layout>
