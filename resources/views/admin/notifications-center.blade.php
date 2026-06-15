 @extends('admin.layouts.master')

 @section('content')
     <section class="space-y-6">

         <article
             class="rounded-[2rem] border border-homy-gold-200 bg-gradient-to-br from-homy-gold-50 via-white to-homy-green-100/60 p-6 dark:border-homy-gold-600/35 dark:from-[#15261f] dark:via-[#12211B] dark:to-[#183629]">
             <h1 class="text-3xl font-black text-homy-green-700 dark:text-homy-gold-400"><span class="lang-ar">آخر الإشعارات
                 </span><span class="lang-en">The latest notifications</span></h1>
         </article>


         <div class="grid gap-4 sm:grid-cols-1 xl:grid-cols-1">
             @foreach ($admin->unreadNotifications as $notifi)
                 <div class="flex gap-4 items-center justify-center">

                     <form action="{{ route('admin.notifications.read', $notifi->id) }}" method="POST">
                         @csrf
                         <button type="submit">
                             <article class="kpi-card p-4 w-fit flex-1">
                                 <p class="text-xs font-black text-slate-500 dark:text-slate-300"><span
                                         class="lang-ar">{{ $notifi->data['title'] }}
                                     </span><span class="lang-en">Monthly GMV</span></p>
                                 <p class="mt-2 text-2xl font-black text-homy-green-700 dark:text-homy-gold-400">
                                     {{ $notifi->data['name'] }} {{ $notifi->data['message'] }}</p>

                             </article>
                         </button>
                     </form>

                 </div>
             @endforeach

             @if (count($admin->unreadNotifications) == 0)
                 <div class="mb-7 flex items-end justify-between gap-3">
                     <h1 class="text-4xl font-black text-homy-green-700 dark:text-homy-gold-400">
                         {{ __('messages.empty_notification') }}
                     </h1>
                 </div>
             @endif
             <div class="flex gap-4 items-center justify-center">

                 <form action="{{ route('admin.notifications.readAll') }}" method="POST">
                     @csrf
                     <x-danger-button class="mx-sm-auto">{{ __('messages.mark_all_notify_as_read') }}</x-danger-button>
                 </form>
             </div>
         </div>

     </section>
 @endsection
