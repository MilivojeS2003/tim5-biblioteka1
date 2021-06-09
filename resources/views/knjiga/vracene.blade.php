@extends('layouts.layout')
@section('content')
     <!-- Content -->
     <section class="w-screen h-screen pl-[80px] pb-2 text-gray-700">
            <!-- Heading of content -->
            <div class="heading">
                <div class="flex flex-row justify-between border-b-[1px] border-[#e4dfdf]">
                    <div class="py-[10px] flex flex-row">
                        <div class="w-[77px] pl-[30px]">
                            <img src="img/tomsojer.jpg" alt="">
                        </div>
                        <div class="pl-[15px]  flex flex-col">
                            <div>
                                <h1>
                                    {{$knjiga->Naslov}}
                                </h1>
                            </div>
                            <div>
                                <nav class="w-full rounded">
                                    <ol class="flex list-reset">
                                        <li>
                                            <a href="{{route('knjiga.index')}}" class="text-[#2196f3] hover:text-blue-600">
                                                Evidencija knjiga
                                            </a>
                                        </li>
                                        <li>
                                            <span class="mx-2">/</span>
                                        </li>
                                        <li>
                                            <a href="{{route('knjiga.show',$knjiga)}}"
                                                class="text-[#2196f3] hover:text-blue-600">
                                                KNJIGA-{{$knjiga->id}}
                                            </a>
                                        </li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                    <div class="pt-[24px] mr-[30px]">
                        <a href="{{route('knjiga.otpis',$knjiga)}}" class="inline hover:text-blue-600">
                            <i class="fas fa-level-up-alt mr-[3px]"></i>
                            Otpisi knjigu
                        </a>
                        <a href="{{route('knjiga.izdavanje',$knjiga)}}" class="inline hover:text-blue-600 ml-[20px] pr-[10px]">
                            <i class="far fa-hand-scissors mr-[3px]"></i>
                            Izdaj knjigu
                        </a>
                        <a href="{{route('knjiga.vracanje',$knjiga)}}" class="hover:text-blue-600 inline ml-[20px] pr-[10px]">
                            <i class="fas fa-redo-alt mr-[3px] "></i>
                            Vrati knjigu
                        </a>
                        <a href="{{route('knjiga.rezervacija',$knjiga)}}" class="hover:text-blue-600 inline ml-[20px] pr-[10px]">
                            <i class="far fa-calendar-check mr-[3px] "></i>
                            Rezervisi knjigu
                        </a>
                        <p class="inline cursor-pointer text-[25px] py-[10px] pl-[30px] border-l-[1px] border-[#e4dfdf] dotsIznajmljivanjeVracene hover:text-[#606FC7]">
                            <i
                                class="fas fa-ellipsis-v"></i>
                        </p>
                        <div
                            class="relative z-10 hidden transition-all duration-300 origin-top-right transform scale-95 -translate-y-2 dropdown-iznajmljivanje-vracene">
                            <div class="absolute right-0 w-56 mt-[7px] origin-top-right bg-white border border-gray-200 divide-y divide-gray-100 rounded-md shadow-lg outline-none"
                                aria-labelledby="headlessui-menu-button-1" id="headlessui-menu-items-117" role="menu">
                                <div class="py-1">
                                    <a href="{{route('knjiga.edit',$knjiga)}}" tabindex="0"
                                        class="flex w-full px-4 py-2 text-sm leading-5 text-left text-gray-700 outline-none hover:text-blue-600"
                                        role="menuitem">
                                        <i class="fas fa-edit mr-[1px] ml-[5px] py-1"></i>
                                        <span class="px-4 py-0">Izmijeni knjigu</span>
                                    </a>
                                    <form action="{{route('knjiga.destroy',$knjiga)}}" tabindex="0"
                                      method="post"  class="flex w-full px-4 py-2 text-sm leading-5 text-left text-gray-700 outline-none hover:text-blue-600"
                                        role="menuitem">
                                        @csrf 
                                        @method('DELETE')
                                    <button type="submit"> <i class="fa fa-trash mr-[5px] ml-[5px] py-1"></i>
                                        <span class="px-4 py-0">Izbrisi knjigu</span>
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="flex flex-row height-iznajmljivanje scroll">
                <div class="w-[80%]">
                    <div class="border-b-[1px] border-[#e4dfdf] py-4  border-gray-300 pl-[30px]">
                        <a href="{{route('knjiga.show',$knjiga)}}" class="inline hover:text-blue-800">
                            Osnovni detalji
                        </a>
                        <a href="{{route('knjiga.spec',$knjiga)}}" class="inline ml-[70px] hover:text-blue-800 ">
                            Specifikacija
                        </a>
                        <a href="{{route('knjiga.iznajmljena',$knjiga)}}" class="inline ml-[70px] active-book-nav hover:text-blue-800">
                            Evidencija iznajmljivanja
                        </a>
                        <a href="#" class="inline ml-[70px] hover:text-blue-800">
                            Multimedija
                        </a>
                    </div>
                    <div class="py-4 pt-[20px] pl-[30px] text-[#2D3B48]">
                        <a href="{{route('knjiga.iznajmljena',$knjiga)}}"
                            class="py-[15px] px-[20px] w-[268px] cursor-pointer hover:bg-[#EFF3F6] rounded-[10px] inline hover:text-[#576cdf]">
                            <i class="text-[20px] far fa-copy mr-[3px]"></i>
                            Izdate knjige
                        </a>
                        <a href="#"
                            class="inline py-[15px] rounded-[10px] group px-[20px] w-[268px] text-[#576cdf] bg-[#EFF3F6] hover:text-[#576cdf] hover:bg-[#EFF3F6] ml-[20px] pr-[10px]">
                            <i class="text-[20px]  group-hover:text-[#576cdf] fas fa-file mr-[3px]"></i>
                            Vracene knjige
                        </a>
                        <a href="{{route('knjiga.prekoracenje',$knjiga)}}"
                            class="inline py-[15px] rounded-[10px] group px-[20px] w-[268px] hover:text-[#576cdf] hover:bg-[#EFF3F6] ml-[20px] pr-[10px]">
                            <i class="text-[20px] text-[#707070] group-hover:text-[#576cdf] fas fa-exclamation-triangle mr-[3px]"></i>
                            Knjige u prekoracenju
                        </a>
                        <a href="{{route('knjiga.arezervacije',$knjiga)}}"
                            class="inline py-[15px] rounded-[10px] group px-[20px] w-[268px] hover:text-[#576cdf] hover:bg-[#EFF3F6] ml-[20px] pr-[10px]">
                            <i class="text-[20px] text-[#707070] group-hover:text-[#576cdf] far fa-calendar-check mr-[3px]"></i>
                            Aktivne rezervacije
                        </a>
                        <a href="{{route('knjiga.arhrezervacije',$knjiga)}}"
                            class="inline py-[15px] rounded-[10px] group px-[20px] w-[268px] hover:text-[#576cdf] hover:bg-[#EFF3F6] ml-[20px] pr-[10px]">
                            <i class="text-[20px] text-[#707070] group-hover:text-[#576cdf] fas fa-calendar-alt  mr-[3px]"></i>
                            Arhivirane rezervacije
                        </a>
                    </div>
                    <!-- Space for content -->
                    <div class="w-full mt-[10px] ml-2 px-4">
                        <table class="overflow-hidden shadow-lg rounded-xl w-full border-[1px] border-[#e4dfdf]" id="myTable">
                            <thead class="bg-[#EFF3F6]">
                                <tr class="border-b-[1px] border-[#e4dfdf]">
                                    <th class="px-4 py-4 leading-4 tracking-wider text-left text-blue-500">
                                        <label class="inline-flex items-center">
                                            <input type="checkbox" class="form-checkbox">
                                        </label>
                                    </th>
                                    <th class="px-4 py-4 text-sm leading-4 tracking-wider text-left">Izdato uceniku</th>
                                    <th class="px-4 py-4 text-sm leading-4 tracking-wider text-left">Datum izdavanja
                                    </th>
                                    <th class="px-4 py-4 text-sm leading-4 tracking-wider text-left">Datum vracanja</th>
                                    <th class="px-4 py-4 text-sm leading-4 tracking-wider text-left">Zadrzavanje knjige
                                    </th>
                                    <th class="px-4 py-4 text-sm leading-4 tracking-wider text-left">Knjigu primio</th>
                                    <th class="px-4 py-4"> </th>
                                </tr>
                            </thead>
                            <tbody class="bg-white">
                            @foreach($knjige as $k)
                                <tr class="hover:bg-gray-200 hover:shadow-md border-b-[1px] border-[#e4dfdf]">
                                    <td class="px-4 py-3 whitespace-no-wrap">
                                        <label class="inline-flex items-center">
                                            <input type="checkbox" class="form-checkbox">
                                        </label>
                                    </td>
                                    <td class="px-4 py-3 text-sm leading-5 whitespace-no-wrap">{{$k->izdata_za->ImePrezime}}</td>
                                    <td class="px-4 py-3 text-sm leading-5 whitespace-no-wrap">
                                    {{date('d.m.Y.',strtotime($k->datumizdavanja))}}
                                    </td>
                                    <td class="px-4 py-3 text-sm leading-5 whitespace-no-wrap">
                                    {{date('d.m.Y.',strtotime( $k->datumvracanja)) }}
                                    </td>
                                    <td class="px-4 py-3 text-sm leading-5 whitespace-no-wrap">
                                    @if($k->zadrzavanje($k->izdavanje_id)['check']==true)
                               @if(substr($k->zadrzavanje($k->izdavanje_id)['mjeseci'],0,1)!="0")
                               @if(substr($k->zadrzavanje($k->izdavanje_id)['nedjelja'],1,1)!="0")
                               {{$k->zadrzavanje($k->izdavanje_id)['mjeseci']}}
                               {{$k->zadrzavanje($k->izdavanje_id)['nedjelja']}}
                               {{$k->zadrzavanje($k->izdavanje_id)['danan']}}
                               @else 
                               {{$k->zadrzavanje($k->izdavanje_id)['mjeseci']}}
                               {{$k->zadrzavanje($k->izdavanje_id)['danan']}}
                               @endif
                               @else 
                               @if(substr($k->zadrzavanje($k->izdavanje_id)['nedjelja'],1,1)!="0")
                               {{$k->zadrzavanje($k->izdavanje_id)['nedjelja']}}
                               {{$k->zadrzavanje($k->izdavanje_id)['danan']}}
                               @else 
                               {{substr($k->zadrzavanje($k->izdavanje_id)['danan'],3)}}
                               @endif
                               @endif
                               @else

                                {{$k->zadrzavanje($k->izdavanje_id)['dana']}}

                               @endif
                                         
                                       
                                    </td>
                                    <td class="px-4 py-3 text-sm leading-5 whitespace-no-wrap">
                                    {{$k->izdata_od->ImePrezime}}
                                    </td>
                                    <td class="px-6 py-3 text-sm leading-5 text-right whitespace-no-wrap">
                                        <p class="inline cursor-pointer text-[20px] py-[10px] px-[30px] border-gray-300 dotsIznajmljivanjeVraceneKnjige hover:text-[#606FC7]">
                                            <i
                                                class="fas fa-ellipsis-v"></i>
                                        </p>
                                        <div
                                            class="relative z-10 hidden transition-all duration-300 origin-top-right transform scale-95 -translate-y-2 iznajmljivanje-vracene-knjige">
                                            <div class="absolute right-0 w-56 mt-2 origin-top-right bg-white border border-gray-200 divide-y divide-gray-100 rounded-md shadow-lg outline-none"
                                                aria-labelledby="headlessui-menu-button-1"
                                                id="headlessui-menu-items-117" role="menu">
                                                <div class="py-1">
                                                    <a href="izdavanjeDetalji.php" tabindex="0"
                                                        class="flex w-full px-4 py-2 text-sm leading-5 text-left text-gray-700 outline-none hover:text-blue-600"
                                                        role="menuitem">
                                                        <i class="far fa-file mr-[10px] ml-[5px] py-1"></i>
                                                        <span class="px-4 py-0">Pogledaj detalje</span>
                                                    </a>

                                                    <a href="izdajKnjigu.php" tabindex="0"
                                                        class="flex w-full px-4 py-2 text-sm leading-5 text-left text-gray-700 outline-none hover:text-blue-600"
                                                        role="menuitem">
                                                        <i class="far fa-hand-scissors mr-[10px] ml-[5px] py-1"></i>
                                                        <span class="px-4 py-0">Izdaj knjigu</span>
                                                    </a>

                                                    <a href="vratiKnjigu.php" tabindex="0"
                                                        class="flex w-full px-4 py-2 text-sm leading-5 text-left text-gray-700 outline-none hover:text-blue-600"
                                                        role="menuitem">
                                                        <i class="fas fa-redo-alt mr-[10px] ml-[5px] py-1"></i>
                                                        <span class="px-4 py-0">Vrati knjigu</span>
                                                    </a>

                                                    <a href="rezervisiKnjigu.php" tabindex="0"
                                                        class="flex w-full px-4 py-2 text-sm leading-5 text-left text-gray-700 outline-none hover:text-blue-600"
                                                        role="menuitem">
                                                        <i class="far fa-calendar-check mr-[10px] ml-[5px] py-1"></i>
                                                        <span class="px-4 py-0">Rezervisi knjigu</span>
                                                    </a>

                                                    <a href="otpisiKnjigu.php" tabindex="0"
                                                        class="flex w-full px-4 py-2 text-sm leading-5 text-left text-gray-700 outline-none hover:text-blue-600"
                                                        role="menuitem">
                                                        <i class="fas fa-level-up-alt mr-[14px] ml-[5px] py-1"></i>
                                                        <span class="px-4 py-0">Otpisi knjigu</span>
                                                    </a>

                                                    <a href="#" tabindex="0"
                                                        class="flex w-full px-4 py-2 text-sm leading-5 text-left text-gray-700 outline-none hover:text-blue-600"
                                                        role="menuitem">
                                                        <i class="fa fa-trash mr-[10px] ml-[5px] py-1"></i>
                                                        <span class="px-4 py-0">Izbrisi knjigu</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>

                        <div class="flex flex-row items-center justify-end my-2">
                            <div>
                                <p class="inline text-md">
                                    Rows per page:
                                </p>
                                <select
                                    class=" text-gray-700 bg-white rounded-md w-[46px] focus:outline-none focus:ring-primary-500 focus:border-primary-500 text-md"
                                    name="ucenici">
                                    <option value="">
                                        20
                                    </option>
                                    <option value="">
                                        Option1
                                    </option>
                                    <option value="">
                                        Option2
                                    </option>
                                    <option value="">
                                        Option3
                                    </option>
                                    <option value="">
                                        Option4
                                    </option>
                                </select>
                            </div>

                            <div>
                                <nav class="relative z-0 inline-flex">
                                    <div>
                                        <a href="#"
                                            class="relative inline-flex items-center px-4 py-2 -ml-px font-medium leading-5 transition duration-150 ease-in-out bg-white text-md focus:z-10 focus:outline-none">
                                            1 of 1
                                        </a>
                                    </div>
                                    <div>
                                        <a href="#"
                                            class="relative inline-flex items-center px-2 py-2 font-medium leading-5 text-gray-500 transition duration-150 ease-in-out bg-white text-md rounded-l-md hover:text-gray-400 focus:z-10 focus:outline-none"
                                            aria-label="Previous"
                                            v-on:click.prevent="changePage(pagination.current_page - 1)">
                                            <svg class="w-5 h-5" viewBox="0 0 20 20" fill="currentColor">
                                                <path fill-rule="evenodd"
                                                    d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z"
                                                    clip-rule="evenodd" />
                                            </svg>
                                        </a>
                                    </div>
                                    <div v-if="pagination.current_page < pagination.last_page">
                                        <a href="#"
                                            class="relative inline-flex items-center px-2 py-2 -ml-px font-medium leading-5 text-gray-500 transition duration-150 ease-in-out bg-white text-md rounded-r-md hover:text-gray-400 focus:z-10 focus:outline-none"
                                            aria-label="Next">
                                            <svg class="w-5 h-5" viewBox="0 0 20 20" fill="currentColor">
                                                <path fill-rule="evenodd"
                                                    d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                                    clip-rule="evenodd" />
                                            </svg>
                                        </a>
                                    </div>
                                </nav>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="min-w-[20%] border-l-[1px] border-[#e4dfdf] ">
                    <div class="border-b-[1px] border-[#e4dfdf]">
                        <div class="ml-[30px] mr-[70px] mt-[20px] flex flex-row justify-between">
                            <div class="text-gray-500 ">
                                <p>Na raspolaganju:</p>
                                <p class="mt-[20px]">Rezervisano:</p>
                                <p class="mt-[20px]">Izdato:</p>
                                <p class="mt-[20px]">U prekoracenju:</p>
                                <p class="mt-[20px]">Ukupna kolicina:</p>
                            </div>
                            <div class="text-center pb-[30px]">
                                <p class="bg-green-200 text-green-700 rounded-[10px] px-[6px] py-[2px] text-[14px]">
                                 {{$knjiga->UkupnoPrimjeraka-($knjiga->IzdatoPrimjeraka+$knjiga->RezervisanoPrimjeraka)}}  primjeraka</p>
                                <a href="{{route('knjiga.arezervacije',$knjiga)}}">
                                    <p class=" mt-[16px] bg-yellow-200 text-yellow-700 rounded-[10px] px-[6px] py-[2px] text-[14px]">
                                        {{$knjiga->RezervisanoPrimjeraka}}  primjerka</p>
                                </a>
                                <a href="{{route('knjiga.izdavanje',$knjiga)}}">
                                    <p
                                        class=" mt-[16px] bg-blue-200 text-blue-800 rounded-[10px] px-[6px] py-[2px] text-[14px]">
                                        {{$knjiga->IzdatoPrimjeraka }} primjerka</p>
                                </a>
                                <a href="{{route('knjiga.prekoracenje',$knjiga)}}">
                                    <p
                                        class=" mt-[16px] bg-red-200 text-red-800 rounded-[10px] px-[6px] py-[2px] text-[14px]">
                                        {{$knjiga->u_prekoracenju()}} primjerka</p>
                                </a>
                                <p
                                    class=" mt-[16px] border-[1px] border-green-700 text-green-700 rounded-[10px] px-[6px] py-[2px] text-[14px]">
                                    {{$knjiga->UkupnoPrimjeraka}} primjerka</p>
                            </div>
                        </div>
                    </div>
                    <div class="mt-[40px] mx-[30px]">
                    @foreach($knjiga->izdate3() as $i)
                        <div class="mt-[40px] flex flex-col max-w-[304px]">
                            <div class="text-gray-500 ">
                                <p class="inline uppercase">
                                    Izdavanja knjige
                                </p>
                                <span>
                                &nbsp; - &nbsp; prije  @if($i->zadrzavanje($i->izdavanje_id)['check']==true)
                               @if(substr($i->zadrzavanje($i->izdavanje_id)['mjeseci'],0,1)!="0")
                               @if(substr($i->zadrzavanje($i->izdavanje_id)['nedjelja'],1,1)!="0")
                               {{$i->zadrzavanje($i->izdavanje_id)['mjeseci']}}
                              
                               @else 
                               {{$i->zadrzavanje($i->izdavanje_id)['mjeseci']}}
        
                               @endif
                               @else 
                               @if(substr($i->zadrzavanje($i->izdavanje_id)['nedjelja'],1,1)!="0")
                               {{$i->zadrzavanje($i->izdavanje_id)['nedjelja']}}
                                @else 
                               {{substr($i->zadrzavanje($i->izdavanje_id)['danan'],3)}}
                               @endif
                               @endif
                               @else

                                @if($i->zadrzavanje($i->izdavanje_id)['dana'])
                                par trenutaka
                                @endif

                               @endif
                                </span>
                            </div>
                            <div>
                                <p>
                                    <a href="{{route('bibliotekar.show',$i->izdata_od->id)}}" class="text-[#2196f3] hover:text-blue-600">
                                        {{$i->izdata_od->ImePrezime}}
                                    </a>
                                    je izdala(o) knjigu
                                    <a href="{{route('ucenik.show',$i->izdata_za->id)}}" class="text-[#2196f3] hover:text-blue-600">
                                        {{$i->izdata_za->ImePrezime}}
                                    </a>
                                    dana
                                    <span class="font-medium">
                                        {{date('d.m.Y',strtotime($i->datumizdavanja))}}
                                    </span>
                                </p>
                            </div>
                            <div>
                                <a href="{{route('knjiga.izdavanjedetalji',$i)}}" class="text-[#2196f3] hover:text-blue-600">
                                    pogledaj detaljnije >>
                                </a>
                            </div>
                        </div>
                       @endforeach
                        
                        <div class="mt-[40px]">
                            <a href="{{route('dashboard.aktivnosti',$knjiga)}}" class="text-[#2196f3] hover:text-blue-600">
                                <i class="fas fa-history"></i> Prikazi sve
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Content -->
@endsection