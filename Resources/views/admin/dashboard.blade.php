<x-theme theme="admin.sidebar">
    <x-theme-layout>

        <!-- Module Title Bar -->
        @if(Module::has('Titlebar'))
            @livewire('TitleBar', ['actions'=>$actions])
        @endif
        <!-- end -->


        사이트...










        {{-- Admin Rule Setting --}}
        @include('jinytable::setActionRule')
    </x-theme-layout>
</x-theme>

