@extends('layouts.listingLayout')
@section('content')
<a href="{{route('all.listing')}}" class="inline-block text-black ml-4 mb-4"
                ><i class="fa-solid fa-arrow-left"></i> Back
            </a>
            <div class="mx-4">
                <div class="bg-green-50 border border-gray-200 rounded p-6">

           
                    <div
                        class="flex flex-col items-center justify-center text-center"
                    >
                        <img
                            class="w-48 mr-6 mb-6"
                            src="{{ asset('images/no-image.png')}}"
                            alt=""
                        />
                        

                        <h3 class="text-2xl mb-2">{{$listing->title}}</h3>
                        <h3 class="text-2xl mb-2">Location: {{$listing->location}}</h3>
                        <h3 class="text-2xl mb-2 fa-solid fa-mobile"> {{$listing->number}}</h3>
                        <p>Contact only if you are eligible</p>
                        <x-listing-tags :tagsCsv="$listing->tags"></x-listing-tags>
                        <div class="border border-gray-200 w-full mb-6"></div>
                        <div>
                            <h3 class="text-3xl font-bold mb-4">
                                Tuition Description
                            </h3>
                            <div class="text-lg space-y-6 w-13">
                                {{$listing->description}}
   
                            </div>
                            {{-- <a href="{{'storage/'.$problem->p_file}}" class="underline text-green-500 hover:text-black">{{$problem->p_file ? 'Attatched File' : ''}}</a> --}}
                            
                           {{--  @if ($problem->email != auth()->user()->email)
                                <a
                                    href="mailto:{{$problem->email}}"
                                    class="block bg-laravel text-white mt-6 py-2 rounded-xl hover:opacity-80"
                                    ><i class="fa-solid fa-envelope"></i>
                                    Contact</a
                                >
                            @endif --}}
                             
                        </div>
                    </div>
                </div>
                {{-- <x-card class="mt-4 p-2 flex space-x-6">
                    <a href="/problems/{{$problem->id}}/edit">
                        <i class="fa-solid fa-pencil">
                            Edit
                        </i>
                    </a>
                    <form method="POST" action="/problems/{{$problem->id}}">
                        @csrf
                        @method('DELETE')
                        <button class="text-red-500">
                            <i class="fa-solid fa-trash"></i> Delete
                        </button>
                    </form>
                </x-card>
            </div>  --}}
@endsection
