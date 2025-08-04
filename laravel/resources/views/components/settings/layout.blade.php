<div class="flex items-start max-md:flex-col">
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    <div class="me-10 w-full pb-4 md:w-[220px]">
=======
    <div class="mr-10 w-full pb-4 md:w-[220px]">
>>>>>>> aurmich/dev
=======
    <div class="mr-10 w-full pb-4 md:w-[220px]">
>>>>>>> 54f4fa16 (.)
=======
    <div class="me-10 w-full pb-4 md:w-[220px]">
>>>>>>> e9942509 (fix: session)
        <flux:navlist>
            <flux:navlist.item :href="route('settings.profile')" wire:navigate>{{ __('Profile') }}</flux:navlist.item>
            <flux:navlist.item :href="route('settings.password')" wire:navigate>{{ __('Password') }}</flux:navlist.item>
            <flux:navlist.item :href="route('settings.appearance')" wire:navigate>{{ __('Appearance') }}</flux:navlist.item>
        </flux:navlist>
    </div>

    <flux:separator class="md:hidden" />

    <div class="flex-1 self-stretch max-md:pt-6">
        <flux:heading>{{ $heading ?? '' }}</flux:heading>
        <flux:subheading>{{ $subheading ?? '' }}</flux:subheading>

        <div class="mt-5 w-full max-w-lg">
            {{ $slot }}
        </div>
    </div>
</div>
