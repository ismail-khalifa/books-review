@extends('layouts.app')

@section('content')
<h2>All Books</h2>
    <div class="relative overflow-x-auto">
        <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        #
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Title
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Author
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Published at
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Reviews
                    </th>

                </tr>
            </thead>
            <tbody>
                @foreach ($books as $book)
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="px-6 py-4">
                            {{ $book['id'] }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $book['title'] }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $book['author'] }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $book['created_at'] }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $book['reviews_count'] }}
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
