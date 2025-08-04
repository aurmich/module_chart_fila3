@foreach($blocks as $block)
<<<<<<< HEAD
=======
    {{--
    <x-dynamic-component component="blocks.ticket-list.agid" />
    --}}
>>>>>>> 54f4fa16 (.)
    @include($block->view,$block->data)
@endforeach

