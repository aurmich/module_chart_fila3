<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules\Password;
use Illuminate\Validation\ValidationException;
use Livewire\Volt\Component;

new class extends Component {
    public string $current_password = '';
    public string $password = '';
    public string $password_confirmation = '';

    /**
     * Update the password for the currently authenticated user.
     */
    public function updatePassword(): void
    {
        try {
            $validated = $this->validate([
                'current_password' => ['required', 'string', 'current_password'],
                'password' => ['required', 'string', Password::defaults(), 'confirmed'],
            ]);
        } catch (ValidationException $e) {
            $this->reset('current_password', 'password', 'password_confirmation');

            throw $e;
        }

        Auth::user()->update([
            'password' => Hash::make($validated['password']),
        ]);

        $this->reset('current_password', 'password', 'password_confirmation');

        $this->dispatch('password-updated');
    }
}; ?>

<section class="w-full">
    @include('partials.settings-heading')

    <x-settings.layout :heading="__('Update password')" :subheading="__('Ensure your account is using a long, random password to stay secure')">
        <form wire:submit="updatePassword" class="mt-6 space-y-6">
            <flux:input
<<<<<<< HEAD
                wire:model="current_password"
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
                wire:model="current_password"
=======
                wire:model.live="current_password"
>>>>>>> aurmich/dev
=======
                wire:model="current_password"
>>>>>>> 54f4fa16 (.)
=======
                wire:model.live="current_password"
>>>>>>> 7440f060 (delete duplicate folder + add .md)
=======
                wire:model="current_password"
>>>>>>> e9942509 (fix: session)
>>>>>>> aurmich/dev
                :label="__('Current password')"
                type="password"
                required
                autocomplete="current-password"
            />
            <flux:input
<<<<<<< HEAD
                wire:model="password"
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
                wire:model="password"
=======
                wire:model.live="password"
>>>>>>> aurmich/dev
=======
                wire:model="password"
>>>>>>> 54f4fa16 (.)
=======
                wire:model.live="password"
>>>>>>> 7440f060 (delete duplicate folder + add .md)
=======
                wire:model="password"
>>>>>>> e9942509 (fix: session)
>>>>>>> aurmich/dev
                :label="__('New password')"
                type="password"
                required
                autocomplete="new-password"
            />
            <flux:input
<<<<<<< HEAD
                wire:model="password_confirmation"
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
                wire:model="password_confirmation"
=======
                wire:model.live="password_confirmation"
>>>>>>> aurmich/dev
=======
                wire:model="password_confirmation"
>>>>>>> 54f4fa16 (.)
=======
                wire:model.live="password_confirmation"
>>>>>>> 7440f060 (delete duplicate folder + add .md)
=======
                wire:model="password_confirmation"
>>>>>>> e9942509 (fix: session)
>>>>>>> aurmich/dev
                :label="__('Confirm Password')"
                type="password"
                required
                autocomplete="new-password"
            />

            <div class="flex items-center gap-4">
                <div class="flex items-center justify-end">
                    <flux:button variant="primary" type="submit" class="w-full">{{ __('Save') }}</flux:button>
                </div>

                <x-action-message class="me-3" on="password-updated">
                    {{ __('Saved.') }}
                </x-action-message>
            </div>
        </form>
    </x-settings.layout>
</section>
