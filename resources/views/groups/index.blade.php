@extends('layouts.app')
@section('content')
<div class="flex flex-col max-w-[960px]">
    <div class="flex flex-wrap justify-between gap-3 p-4">
        <p class="text-[#111518] tracking-light text-[32px] font-bold leading-tight min-w-72">Grupos</p>
        <a href="{{ route('groups.create') }}"
            class="flex min-w-[84px] max-w-[480px] cursor-pointer items-center justify-center overflow-hidden rounded-full h-8 px-4 bg-[#f0f2f5] text-[#111518] text-sm font-medium leading-normal">
            <span class="truncate">Nuevo grupo</span>
        </a>
    </div>
    <div class="px-4 py-3 @container">
        <div class="flex overflow-hidden rounded-xl border border-[#dbe1e6] bg-white">
            <table class="flex-1">
                <thead>
                    <tr class="bg-white">
                        <th class="table-a0cb13ff-4419-460c-b5b7-52f446735544-column-120 px-4 py-3 text-left text-[#111518] w-[400px] text-sm font-medium leading-normal">Name</th>
                        <th class="table-a0cb13ff-4419-460c-b5b7-52f446735544-column-240 px-4 py-3 text-left text-[#111518] w-[400px] text-sm font-medium leading-normal">
                            Description
                        </th>
                        <th class="table-a0cb13ff-4419-460c-b5b7-52f446735544-column-360 px-4 py-3 text-left text-[#111518] w-[400px] text-sm font-medium leading-normal">
                            Contacts
                        </th>
                        <th class="table-a0cb13ff-4419-460c-b5b7-52f446735544-column-480 px-4 py-3 text-left text-[#111518] w-[400px] text-sm font-medium leading-normal">Created</th>
                        <th class="table-a0cb13ff-4419-460c-b5b7-52f446735544-column-600 px-4 py-3 text-left text-[#111518] w-60 text-[#60768a] text-sm font-medium leading-normal">
                            Actions
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="border-t border-t-[#dbe1e6]">
                        <td class="table-a0cb13ff-4419-460c-b5b7-52f446735544-column-120 h-[72px] px-4 py-2 w-[400px] text-[#111518] text-sm font-normal leading-normal">Group A</td>
                        <td class="table-a0cb13ff-4419-460c-b5b7-52f446735544-column-240 h-[72px] px-4 py-2 w-[400px] text-[#60768a] text-sm font-normal leading-normal">
                            Group of users interested in technology
                        </td>
                        <td class="table-a0cb13ff-4419-460c-b5b7-52f446735544-column-360 h-[72px] px-4 py-2 w-[400px] text-[#60768a] text-sm font-normal leading-normal">100</td>
                        <td class="table-a0cb13ff-4419-460c-b5b7-52f446735544-column-480 h-[72px] px-4 py-2 w-[400px] text-[#60768a] text-sm font-normal leading-normal">
                            2023-01-15
                        </td>
                        <td class="table-a0cb13ff-4419-460c-b5b7-52f446735544-column-600 h-[72px] px-4 py-2 w-60 text-[#60768a] text-sm font-bold leading-normal tracking-[0.015em]">
                            View
                        </td>
                    </tr>
                    <tr class="border-t border-t-[#dbe1e6]">
                        <td class="table-a0cb13ff-4419-460c-b5b7-52f446735544-column-120 h-[72px] px-4 py-2 w-[400px] text-[#111518] text-sm font-normal leading-normal">Group B</td>
                        <td class="table-a0cb13ff-4419-460c-b5b7-52f446735544-column-240 h-[72px] px-4 py-2 w-[400px] text-[#60768a] text-sm font-normal leading-normal">
                            Group of users interested in sports
                        </td>
                        <td class="table-a0cb13ff-4419-460c-b5b7-52f446735544-column-360 h-[72px] px-4 py-2 w-[400px] text-[#60768a] text-sm font-normal leading-normal">50</td>
                        <td class="table-a0cb13ff-4419-460c-b5b7-52f446735544-column-480 h-[72px] px-4 py-2 w-[400px] text-[#60768a] text-sm font-normal leading-normal">
                            2023-02-20
                        </td>
                        <td class="table-a0cb13ff-4419-460c-b5b7-52f446735544-column-600 h-[72px] px-4 py-2 w-60 text-[#60768a] text-sm font-bold leading-normal tracking-[0.015em]">
                            View
                        </td>
                    </tr>
                    <tr class="border-t border-t-[#dbe1e6]">
                        <td class="table-a0cb13ff-4419-460c-b5b7-52f446735544-column-120 h-[72px] px-4 py-2 w-[400px] text-[#111518] text-sm font-normal leading-normal">Group C</td>
                        <td class="table-a0cb13ff-4419-460c-b5b7-52f446735544-column-240 h-[72px] px-4 py-2 w-[400px] text-[#60768a] text-sm font-normal leading-normal">
                            Group of users interested in music
                        </td>
                        <td class="table-a0cb13ff-4419-460c-b5b7-52f446735544-column-360 h-[72px] px-4 py-2 w-[400px] text-[#60768a] text-sm font-normal leading-normal">75</td>
                        <td class="table-a0cb13ff-4419-460c-b5b7-52f446735544-column-480 h-[72px] px-4 py-2 w-[400px] text-[#60768a] text-sm font-normal leading-normal">
                            2023-03-25
                        </td>
                        <td class="table-a0cb13ff-4419-460c-b5b7-52f446735544-column-600 h-[72px] px-4 py-2 w-60 text-[#60768a] text-sm font-bold leading-normal tracking-[0.015em]">
                            View
                        </td>
                    </tr>
                    <tr class="border-t border-t-[#dbe1e6]">
                        <td class="table-a0cb13ff-4419-460c-b5b7-52f446735544-column-120 h-[72px] px-4 py-2 w-[400px] text-[#111518] text-sm font-normal leading-normal">Group D</td>
                        <td class="table-a0cb13ff-4419-460c-b5b7-52f446735544-column-240 h-[72px] px-4 py-2 w-[400px] text-[#60768a] text-sm font-normal leading-normal">
                            Group of users interested in travel
                        </td>
                        <td class="table-a0cb13ff-4419-460c-b5b7-52f446735544-column-360 h-[72px] px-4 py-2 w-[400px] text-[#60768a] text-sm font-normal leading-normal">120</td>
                        <td class="table-a0cb13ff-4419-460c-b5b7-52f446735544-column-480 h-[72px] px-4 py-2 w-[400px] text-[#60768a] text-sm font-normal leading-normal">
                            2023-04-30
                        </td>
                        <td class="table-a0cb13ff-4419-460c-b5b7-52f446735544-column-600 h-[72px] px-4 py-2 w-60 text-[#60768a] text-sm font-bold leading-normal tracking-[0.015em]">
                            View
                        </td>
                    </tr>
                    <tr class="border-t border-t-[#dbe1e6]">
                        <td class="table-a0cb13ff-4419-460c-b5b7-52f446735544-column-120 h-[72px] px-4 py-2 w-[400px] text-[#111518] text-sm font-normal leading-normal">Group E</td>
                        <td class="table-a0cb13ff-4419-460c-b5b7-52f446735544-column-240 h-[72px] px-4 py-2 w-[400px] text-[#60768a] text-sm font-normal leading-normal">
                            Group of users interested in food
                        </td>
                        <td class="table-a0cb13ff-4419-460c-b5b7-52f446735544-column-360 h-[72px] px-4 py-2 w-[400px] text-[#60768a] text-sm font-normal leading-normal">90</td>
                        <td class="table-a0cb13ff-4419-460c-b5b7-52f446735544-column-480 h-[72px] px-4 py-2 w-[400px] text-[#60768a] text-sm font-normal leading-normal">
                            2023-05-05
                        </td>
                        <td class="table-a0cb13ff-4419-460c-b5b7-52f446735544-column-600 h-[72px] px-4 py-2 w-60 text-[#60768a] text-sm font-bold leading-normal tracking-[0.015em]">
                            View
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection