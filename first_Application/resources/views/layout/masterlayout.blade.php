@include('component.header')


@hasSection ('page')
@yield('page')

@else
    <h1 class="p-4 mb-4 text-sm text-red-800 rounded-lg bg-red-50 dark:bg-gray-800 dark:text-red-400">No Content find</h1>
@endif



@include('component.footer')