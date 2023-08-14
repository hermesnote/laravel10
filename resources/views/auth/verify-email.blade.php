<x-guest-layout>
    <div class="mb-4 text-sm text-gray-600 dark:text-gray-400">
        {{-- {{ __('Thanks for signing up! Before getting started, could you verify your email address by clicking on the link we just emailed to you? If you didn\'t receive the email, we will gladly send you another.') }} --}}
        {{ __('感謝您的註冊！ 在開始之前，您可以通過點擊我們剛剛通過電子郵件發送給您的連結來驗證您的電子郵件地址，如果您沒有收到電子郵件，我們很樂意向您發送另一封電子郵件。') }}
    </div>

    @if (session('status') == 'verification-link-sent')
        <div class="mb-4 font-medium text-sm text-green-600 dark:text-green-400">
            {{-- {{ __('A new verification link has been sent to the email address you provided during registration.') }} --}}
            {{ __('新的驗證連結已發送至您註冊時提供的電子郵件地址。') }}
        </div>
    @endif

    <div class="mt-4 flex items-center justify-between">
        <form method="POST" action="{{ route('verification.send') }}">
            @csrf

            <div>
                <x-primary-button>
                    {{ __('重新寄送驗證信') }}
                </x-primary-button>
            </div>
        </form>

        <form method="POST" action="{{ route('logout') }}">
            @csrf

            <button type="submit" class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800">
                {{ __('登出') }}
            </button>
        </form>
    </div>
</x-guest-layout>
