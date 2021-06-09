@extends('layouts.layout')
@section('content')
<section class="w-screen h-screen pl-[80px] py-4 text-gray-700">
            <!-- Heading of content -->
            <div class="heading mt-[7px]">
                <div class="border-b-[1px] border-[#e4dfdf]">
                    <div class="pl-[30px] pb-[21px]">
                        <h1>
                            Settings
                        </h1>
                    </div>
                </div>
            </div>
            <div class="py-4 text-gray-500 border-b-[1px] border-[#e4dfdf] pl-[30px]">
                <a href="{{route('polisa.create')}}" class="inline hover:text-blue-800 active-book-nav">
                    Polisa
                </a>
                <a href="{{route('kategorija.index')}}" class="inline ml-[70px] hover:text-blue-800">
                    Kategorije
                </a>
                <a href="{{route('zanr.index')}}" class="inline ml-[70px] hover:text-blue-800">
                    Zanrovi
                </a>
                <a href="{{route('izdavac.index')}}" class="inline ml-[70px] hover:text-blue-800">
                    Izdavac
                </a>
                <a href="{{route('povez.index')}}" class="inline ml-[70px] hover:text-blue-800">
                    Povez
                </a>
                <a href="{{route('format.index')}}" class="inline ml-[70px] hover:text-blue-800">
                    Format
                </a>
                <a href="{{route('pismo.index')}}" class="inline ml-[70px] hover:text-blue-800">
                    Pismo
                </a>
            </div>
            <div class="height-ucenikProfile pb-[30px] scroll">
                <!-- Space for content -->
                <div class="section- mt-[20px]">
                <form method="post" action="{{route('polisa.store')}}"  class="text-gray-700 forma">
                    @csrf 
                    @method('POST') 
                    <div class="flex flex-col">
                        <div class="pl-[30px] flex border-b-[1px] border-[#e4dfdf]  pb-[20px]">
                            <div>
                                <h3>
                                    Rok za rezervaciju
                                </h3>
                                <p class="pt-[15px] max-w-[400px]">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Earum eligendi nihil, vel
                                    necessitatibus saepe laboriosam! Perspiciatis laboriosam culpa veritatis ea
                                    voluptatum commodi tempora unde, dolorum debitis quia id dicta vitae.
                                </p>
                                <div class="fail" id="validateNazivPismo">
                                @error('rok_rezervacije')@php echo'Polje rok rezervacije je obavezno'; @endphp @enderror
                                </div>
                            </div>
                            <div class="relative flex ml-[60px] mt-[20px]">
                                <input type="text" name="rok_rezervacije"
                                    class="h-[50px] flex-1 w-full px-4 py-2 text-sm text-gray-700 placeholder-gray-400 bg-white border-[1px]  border-[#e4dfdf]  rounded-lg shadow-sm appearance-none focus:outline-none focus:ring-2 focus:ring-blue-600 focus:border-transparent"
                                    placeholder="..." />
                                <p class="ml-[10px] mt-[10px]">dana</p>
                                
                            </div>
                        </div>
                        <div class="pl-[30px] flex border-b-[1px] border-[#e4dfdf]  py-[20px]">
                            <div>
                                <h3>
                                    Rok vracanja
                                </h3>
                                <p class="pt-[15px] max-w-[400px]">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Earum eligendi nihil, vel
                                    necessitatibus saepe laboriosam! Perspiciatis laboriosam culpa veritatis ea
                                    voluptatum commodi tempora unde, dolorum debitis quia id dicta vitae.
                                </p>
                                <div class="fail" id="validateNazivPismo">
                                @error('rok_vracanja')@php echo'Polje rok vracanja je obavezno'; @endphp @enderror
                                </div>
                            </div>
                            <div class="relative flex ml-[60px] mt-[20px]">
                                <input type="text" name="rok_vracanja"
                                    class="h-[50px] flex-1 w-full px-4 py-2 text-sm text-gray-700 placeholder-gray-400 bg-white border-[1px]  border-[#e4dfdf]  rounded-lg shadow-sm appearance-none focus:outline-none focus:ring-2 focus:ring-blue-600 focus:border-transparent"
                                    placeholder="..." />
                                <p class="ml-[10px] mt-[10px]">dana</p>
                               
                            </div>
                        </div>
                        <div class="pl-[30px] flex border-b-[1px] border-[#e4dfdf]  py-[20px]">
                            <div>
                                <h3>
                                    Rok konflikta
                                </h3>
                                <p class="pt-[15px] max-w-[400px]">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Earum eligendi nihil, vel
                                    necessitatibus saepe laboriosam! Perspiciatis laboriosam culpa veritatis ea
                                    voluptatum commodi tempora unde, dolorum debitis quia id dicta vitae.
                                </p>
                                <div class="fail" id="validateNazivPismo">
                                @error('rok_konflikta')@php echo'Polje rok konflikta je obavezno'; @endphp @enderror
                                </div>
                            </div>
                            <div class="relative flex ml-[60px] mt-[20px]">
                                <input type="text" name="rok_konflikta"
                                    class="h-[50px] flex-1 w-full px-4 py-2 text-sm text-gray-700 placeholder-gray-400 bg-white border-[1px]  border-[#e4dfdf]  rounded-lg shadow-sm appearance-none focus:outline-none focus:ring-2 focus:ring-blue-600 focus:border-transparent"
                                    placeholder="..." />
                                <p class="ml-[10px] mt-[10px]">dana</p>
                               
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
            </div>
        </section>
        <!-- End Content -->
@endsection