<div>
    <ul role="list" class="divide-y divide-gray-100 px-4">

        @foreach($milks as $milk)

            <li class="flex justify-between gap-x-6 py-5">
                <div class="flex min-w-0 gap-x-4">
                    <div class="min-w-0 flex-auto">
                        <p class="text-xl font-semibold leading-6 text-gray-900">
                            {{ $milk->amount }} ounces
                        </p>
                    </div>
                </div>
                <div class="shrink-0 sm:flex sm:flex-col sm:items-end">
                    <p class="text-sm leading-6 text-gray-900">{{ $milk->storage_type }}</p>
                    <p class="mt-1 text-xs leading-5 text-gray-500">{{ $milk->created_at }}</p>
                </div>
            </li>

        @endforeach

    </ul>
</div>
