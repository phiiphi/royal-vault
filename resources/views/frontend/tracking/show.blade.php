@extends('layouts.app')
@section('content')
<div class="container mx-auto px-4 sm:px-8">
  <div class="py-8">
    <div>
      <h2 class="text-2xl font-semibold leading-tight">Despository</h2>
    </div>
    <div class="-mx-4 sm:-mx-8 px-4 sm:px-8 py-4 overflow-x-auto">
      <div class="inline-block min-w-full shadow-md rounded-lg overflow-hidden">
          <table class="table-auto">
              @foreach($codes as $code)
              <tr>
                  <th class="w-1/2 px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider">
                        Despositor Name
                    </th>
                    <td class="w-1/2 px-5 py-5 border-b border-gray-200 bg-white text-sm">
                        <div class="flex">
                            <div class="ml-3">
                                <p class="text-gray-900 whitespace-no-wrap">
                                    {{$code->depositor_name}}
                                </p>
                            </div>
                        </div>
                    </td>
                </tr>

                <tr>
                    <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider">
                        Next Of King
                    </th>
                    <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                        <div class="flex">
                            <div class="ml-3">
                                <p class="text-gray-900 whitespace-no-wrap">
                                    {{$code->next_of_kin}}
                                </p>
                            </div>
                        </div>
                    </td>
                </tr>

                <tr>
                    <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider">
                        Item Desciption
                    </th>
                    <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                        <div class="flex">
                            <div class="ml-3">
                                <p class="text-gray-900 whitespace-no-wrap">
                                    {{$code->description}}
                                </p>
                            </div>
                        </div>
                    </td>
                </tr>

                <tr>
                    <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider">
                        Date Issued
                    </th>
                    <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                        <div class="flex">
                            <div class="ml-3">
                                <p class="text-gray-900 whitespace-no-wrap">
                                    {{$code->date_issued}}
                                </p>
                            </div>
                        </div>
                    </td>
                </tr>

                <tr>
                    <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider">
                        Due Date
                    </th>
                    <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                        <div class="flex">
                            <div class="ml-3">
                                <p class="text-gray-900 whitespace-no-wrap">
                                    {{$code->due_date}}
                                </p>
                            </div>
                        </div>
                    </td>
                </tr>

                <tr>
                    <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider">
                        Monthly Charges
                    </th>
                    <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                        <div class="flex">
                            <div class="ml-3">
                                <p class="text-gray-900 whitespace-no-wrap">
                                    {{$code->next_of_kin}}
                                </p>
                            </div>
                        </div>
                    </td>
                </tr>

                <tr>
                    <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider">
                        Storage Charges
                    </th>
                    <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                        <div class="flex">
                            <div class="ml-3">
                                <p class="text-gray-900 whitespace-no-wrap">
                                    {{$code->next_of_kin}}
                                </p>
                            </div>
                        </div>
                    </td>
                </tr>

                <tr>
                    <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider">
                        Status
                    </th>
                    <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                        <div class="flex">
                            <div class="ml-3">
                                <p class="text-gray-900 whitespace-no-wrap">
                                    {{$code->status}}
                                </p>
                            </div>
                        </div>
                    </td>
                </tr>
            @endforeach
        </table>
        <!-- <table class="min-w-full leading-normal">
          <thead>
            <tr>
                <th
                    class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider">
                    Despositor Name
                </th>
                <th
                    class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider">
                    Next Of Kin
                </th>
                <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider">
                    Item Descrption
                </th>
                <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider">
                    Date Issued
                </th>
                <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider">
                    Due Date
                </th>
                <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider">
                    Monthly Charges
                </th>
                <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider">
                    Storage Charges
                </th>
                <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider">
                    Status
                </th>
                <th
                class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100"
              ></th>
            </tr>
          </thead>
          <tbody>
            @foreach($codes as $code)
            <tr>
                <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                    <div class="flex">
                        <div class="ml-3">
                            <p class="text-gray-900 whitespace-no-wrap">
                                {{$code->depositor_name}}
                            </p>
                        </div>
                    </div>
              </td>
              <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                <p class="text-gray-900 whitespace-no-wrap">
                    {{$code->next_of_kin}}
                </p>
              </td>
              <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                <p class="text-gray-900 whitespace-no-wrap">
                    {{$code->description}}
                </p>
              </td>
              <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                <p class="text-gray-900 whitespace-no-wrap">
                    {{$code->date_issued}}
                </p>
              </td>
              <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                <p class="text-gray-900 whitespace-no-wrap">
                    {{$code->due_date}}
                </p>
              </td>
              <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                <p class="text-gray-900 whitespace-no-wrap">
                    {{$code->monthly_charges}}
                </p>
              </td>
              <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                <p class="text-gray-900 whitespace-no-wrap">
                    {{$code->storage_charges}}
                </p>
              </td>
              <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                <span
                  class="relative inline-block px-3 py-1 font-semibold text-green-900 leading-tight"
                >
                  <span
                    aria-hidden
                    class="absolute inset-0 bg-green-200 opacity-50 rounded-full"
                  ></span>
                  <span class="relative">{{$code->status}}</span>
                </span>
              </td>
              <td
                class="px-5 py-5 border-b border-gray-200 bg-white text-sm text-right"
              >
                <button
                  type="button"
                  class="inline-block text-gray-500 hover:text-gray-700"
                >
                  <svg
                    class="inline-block h-6 w-6 fill-current"
                    viewBox="0 0 24 24"
                  >
                    <path
                      d="M12 6a2 2 0 110-4 2 2 0 010 4zm0 8a2 2 0 110-4 2 2 0 010 4zm-2 6a2 2 0 104 0 2 2 0 00-4 0z"
                    />
                  </svg>
                </button>
              </td>
            </tr>
            @endforeach
          </tbody>
        </table> -->
      </div>
    </div>
  </div>
  @endsection