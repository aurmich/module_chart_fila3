<?php

use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Livewire\Attributes\Layout;
use Livewire\Volt\Component;

new #[Layout('components.layouts.auth')] class extends Component {
    public string $name = '';
    public string $email = '';
    public string $password = '';
    public string $password_confirmation = '';

    /**
     * Handle an incoming registration request.
     */
    public function register(): void
    {
        $validated = $this->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:' . User::class],
            'password' => ['required', 'string', 'confirmed', Rules\Password::defaults()],
        ]);

        $validated['password'] = Hash::make($validated['password']);

        event(new Registered(($user = User::create($validated))));

        Auth::login($user);

        $this->redirectIntended(route('dashboard', absolute: false), navigate: true);
    }
}; ?>

<div class="flex flex-col gap-6">
    <x-auth-header :title="__('Create an account')" :description="__('Enter your details below to create your account')" />

    <!-- Session Status -->
    <x-auth-session-status class="text-center" :status="session('status')" />

    <form wire:submit="register" class="flex flex-col gap-6">
        <!-- Name -->
        <flux:input
<<<<<<< HEAD
<<<<<<< HEAD
            wire:model="name"
=======
            wire:model.live="name"
>>>>>>> aurmich/dev
=======
            wire:model="name"
>>>>>>> 54f4fa16 (.)
            :label="__('Name')"
            type="text"
            required
            autofocus
            autocomplete="name"
            :placeholder="__('Full name')"
        />

        <!-- Email Address -->
        <flux:input
<<<<<<< HEAD
<<<<<<< HEAD
            wire:model="email"
=======
            wire:model.live="email"
>>>>>>> aurmich/dev
=======
            wire:model="email"
>>>>>>> 54f4fa16 (.)
            :label="__('Email address')"
            type="email"
            required
            autocomplete="email"
            placeholder="email@example.com"
        />

        <!-- Password -->
        <flux:input
<<<<<<< HEAD
<<<<<<< HEAD
            wire:model="password"
=======
            wire:model.live="password"
>>>>>>> aurmich/dev
=======
            wire:model="password"
>>>>>>> 54f4fa16 (.)
            :label="__('Password')"
            type="password"
            required
            autocomplete="new-password"
            :placeholder="__('Password')"
<<<<<<< HEAD
<<<<<<< HEAD
            viewable
=======
>>>>>>> aurmich/dev
=======
>>>>>>> 54f4fa16 (.)
        />

        <!-- Confirm Password -->
        <flux:input
<<<<<<< HEAD
<<<<<<< HEAD
            wire:model="password_confirmation"
=======
            wire:model.live="password_confirmation"
>>>>>>> aurmich/dev
=======
            wire:model="password_confirmation"
>>>>>>> 54f4fa16 (.)
            :label="__('Confirm password')"
            type="password"
            required
            autocomplete="new-password"
            :placeholder="__('Confirm password')"
<<<<<<< HEAD
<<<<<<< HEAD
            viewable
=======
>>>>>>> aurmich/dev
=======
>>>>>>> 54f4fa16 (.)
        />

        <div class="flex items-center justify-end">
            <flux:button type="submit" variant="primary" class="w-full">
                {{ __('Create account') }}
            </flux:button>
        </div>
    </form>

<<<<<<< HEAD
<<<<<<< HEAD
    <div class="space-x-1 rtl:space-x-reverse text-center text-sm text-zinc-600 dark:text-zinc-400">
        <span>{{ __('Already have an account?') }}</span>
=======
    <div class="space-x-1 text-center text-sm text-zinc-600 dark:text-zinc-400">
        {{ __('Already have an account?') }}
>>>>>>> aurmich/dev
=======
    <div class="space-x-1 text-center text-sm text-zinc-600 dark:text-zinc-400">
        {{ __('Already have an account?') }}
>>>>>>> 54f4fa16 (.)
        <flux:link :href="route('login')" wire:navigate>{{ __('Log in') }}</flux:link>
    </div>
</div>
