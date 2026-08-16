@extends('seller.layouts.master', ['title' => __('titles.messages')])

@section('content')

    <section data-tab-group data-tab-default="inbox" class="space-y-5">
        <article
            class="rounded-[1.5rem] border border-homy-gold-200 bg-white/90 p-5 dark:border-homy-gold-600/35 dark:bg-[#12211B]/85">
            <h1 class="text-2xl font-black text-homy-green-700 dark:text-homy-gold-400">
                <span class="lang-ar">التعليقات على المنتجات</span>
                <span class="lang-en">Product Comments</span>
            </h1>
            <p class="mt-2 text-sm font-semibold text-slate-500 dark:text-slate-300">
                <span class="lang-ar">هنا يمكنك إرسال رد على التعليقات و سيتم نشره مباشرة</span>
                <span class="lang-en">Here you can send a reply to the comments, and it will be published directly.</span>
            </p>
        </article>

        <div
            class="rounded-[1.5rem] border border-homy-gold-200 bg-white/90 p-5 dark:border-homy-gold-600/35 dark:bg-[#12211B]/85">
            <h2 class="text-lg font-black text-homy-green-700 dark:text-homy-gold-400">
                <span class="lang-ar">تعليقات العملاء على المنتجات</span>
                <span class="lang-en">Customer Product Comments</span>
            </h2>

            @if ($comments->isEmpty())
                <p class="mt-4 text-sm font-semibold text-slate-500 dark:text-slate-300">
                    <span class="lang-ar">لا توجد تعليقات بعد.</span>
                    <span class="lang-en">No comments yet.</span>
                </p>
            @else
                <div class="mt-4 space-y-4">
                    @foreach ($comments as $comment)
                        <article class="rounded-xl border border-homy-gold-200 p-4 dark:border-homy-gold-600/35">
                            <p class="text-sm font-black text-homy-green-700 dark:text-homy-gold-400">
                                {{ $comment->user->full_name }} - {{ $comment->product->name }}
                            </p>

                            <p class="mt-2 text-sm font-semibold text-slate-600 dark:text-slate-300">
                                {{ $comment->buyer_comment }}
                            </p>

                            @if ($comment->replies->count())
                                <div class="mt-3 space-y-2">
                                    @foreach ($comment->replies as $reply)
                                        <div class="rounded-xl bg-homy-gold-50 p-3 dark:bg-homy-green-700/25">
                                            <p class="text-xs font-black text-homy-green-700 dark:text-homy-gold-400">
                                                ردك:
                                            </p>
                                            <p class="mt-1 text-sm font-semibold text-slate-600 dark:text-slate-300">
                                                {{ $reply->body }}
                                            </p>
                                        </div>
                                    @endforeach
                                </div>
                            @else
                                <p class="mt-3 text-xs font-bold text-slate-400">
                                    <span class="lang-ar">لم يتم الرد بعد</span>
                                    <span class="lang-en">No reply yet</span>
                                </p>
                            @endif

                            <form action="{{ route('seller.comments.reply', $comment) }}" method="POST"
                                class="mt-3 flex gap-2">
                                @csrf
                                <input type="text" name="body" placeholder="اكتب ردك..."
                                    class="flex-1 rounded-xl border border-homy-gold-200 px-4 py-2 text-sm font-semibold dark:border-homy-gold-600/35 dark:bg-[#173326]">
                                <button type="submit"
                                    class="rounded-xl bg-homy-green-700 px-4 py-2 text-sm font-black text-white">
                                    <span class="lang-ar">رد</span>
                                    <span class="lang-en">Reply</span>
                                </button>
                            </form>
                        </article>
                    @endforeach
                </div>
            @endif
        </div>
    </section>
@endsection
