@extends("layouts.layout")
@section("content")
 
<!-- Content -->
<section class="w-screen h-screen pl-[80px] pb-4 text-gray-700">
            <!-- Heading of content -->
            <div class="heading">
                <div class="flex border-b-[1px] border-[#e4dfdf]">
                    <div class="pl-[30px] py-[10px] flex flex-col">
                        <div>
                            <h1>
                                Novo pismo
                            </h1>
                        </div>
                        <div>
                            <nav class="w-full rounded">
                                <ol class="flex list-reset">
                                <li>
                                        <a href="{{route('polisa.create')}}" class="text-[#2196f3] hover:text-blue-600">
                                            Settings
                                        </a>
                                    </li>
                                    <li>
                                        <span class="mx-2">/</span>
                                    </li>
                                    <li>
                                        <a href="/pismo" class="text-[#2196f3] hover:text-blue-600">
                                            Pisma
                                        </a>
                                    </li>
                                    <li>
                                        <span class="mx-2">/</span>
                                    </li>
                                    <li>
                                        <a href="#" class="text-gray-400 hover:text-blue-600">
                                            Novo pismo
                                        </a>
                                    </li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Space for content -->
            <div class="scroll height-content section-content">
           <!-- @if(Session::has('success'))
            <div class="bg-blue-100 success border-t flex items-center border-b border-blue-500 text-blue-700 px-4 py-3" role="alert">
                <p class="font-bold items-center">{{Session::get('success')}}</p>
               
            </div>
            @endif
            @if(Session::has('fail'))
            <div class="bg-blue-100 fail border-t flex items-center border-b border-blue-500 text-blue-700 px-4 py-3" role="alert">
                <p class="font-bold items-center">{{Session::get('fail')}}</p>
               
            </div>
            @endif-->
                <form method="post" action="{{route('pismo.store')}}"  class="text-gray-700 forma">
                    @csrf 
                    @method('POST') 
                    <div class="flex flex-row ml-[30px]">
                        <div class="w-[50%] mb-[150px]">
                            <div class="mt-[20px]">
                                <p>Naziv pisma <span class="text-red-500">*</span></p>
                                <input  type="text"  name="nazivPismo" id="nazivPismo" class="flex w-[90%] mt-2 px-2 py-2 text-base bg-white border border-gray-300 shadow-sm appearance-none focus:outline-none focus:ring-2 focus:ring-[#576cdf]" />
                                <div class="fail" id="validateNazivPismo">
                                @error('nazivPismo')@php echo'Polje naziv pisma je obavezno'; @endphp @enderror
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="absolute bottom-0 w-full">
                        <div class="flex flex-row">
                            <div class="inline-block w-full text-white text-right py-[7px] mr-[100px]">
                                <button type="reset"  class="btn-animation shadow-lg mr-[15px] w-[150px] focus:outline-none text-sm py-2.5 px-5 transition duration-300 ease-in bg-[#F44336] hover:bg-[#F55549] rounded-[5px]">
                                    Ponisti <i class="fas fa-times ml-[4px]"></i>
                                </button>
                                <button type="submit"   id="sacuvajPismo" type="submit"  class="btn-animation shadow-lg w-[150px] disabled:opacity-50 focus:outline-none text-sm py-2.5 px-5 transition duration-300 ease-in rounded-[5px] hover:bg-[#46A149] bg-[#4CAF50]" >
                                   Sacuvaj <i class="fas fa-check ml-[4px]"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
</section>
        <!-- End Content  onkeydown="clearErrorsNazivPismo()" onclick="validacijaPismo()" onclick="validacijaPismo()" -->

@endsection