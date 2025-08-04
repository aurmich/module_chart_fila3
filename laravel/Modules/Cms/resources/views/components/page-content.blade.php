@foreach($blocks as $block)
<<<<<<< HEAD
<<<<<<< HEAD
=======
    {{--
    <x-dynamic-component component="blocks.ticket-list.agid" />
    --}}
>>>>>>> 54f4fa16 (.)
=======
    {{--
    <x-dynamic-component component="blocks.ticket-list.agid" />
    --}}
>>>>>>> 8e074dc7 (.)
    @include($block->view,$block->data)
@endforeach

