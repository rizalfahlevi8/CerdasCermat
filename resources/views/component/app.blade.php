<!DOCTYPE html>

<html :class="{ 'theme-dark': dark }" x-data="data()" lang="en">
@include('component.head')

<body>
    <div class="flex h-screen bg-gray-50 dark:bg-gray-900" :class="{ 'overflow-hidden': isSideMenuOpen }">
        <!-- Start::app-sidebar -->
        @include('component.sidebar')
        <!-- End::app-sidebar -->
        <div class="flex flex-col flex-1 w-full">
            <!-- app-header -->
            @include('component.header')
            <!-- /app-header -->
            <main class="h-full overflow-y-auto">
                @yield('content')
            </main>
        </div>
    </div>
</body>