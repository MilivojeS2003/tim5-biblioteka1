@extends('layouts.layout')
@section('content')
<section class="w-screen h-screen pl-[80px] pb-2 text-gray-700">
           
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
                        <p class="inline cursor-pointer text-[25px] py-[10px] pl-[30px] border-l-[1px] border-[#e4dfdf] dotsKnjigaSpecifikacija hover:text-[#606FC7]">
                            <i
                                class="fas fa-ellipsis-v"></i>
                        </p>
                        <div
                            class="relative z-10 hidden transition-all duration-300 origin-top-right transform scale-95 -translate-y-2 dropdown-knjiga-specifikacija">
                            <div class="absolute right-0 w-56 mt-[7px] origin-top-right bg-white border border-gray-200 divide-y divide-gray-100 rounded-md shadow-lg outline-none"
                                aria-labelledby="headlessui-menu-button-1" id="headlessui-menu-items-117" role="menu">
                                <div class="py-1">
                                    <a href="{{route('knjiga.edit',$knjiga->id)}}" tabindex="0"
                                        class="flex w-full px-4 py-2 text-sm leading-5 text-left text-gray-700 outline-none hover:text-blue-600"
                                        role="menuitem">
                                        <i class="fas fa-edit mr-[1px] ml-[5px] py-1"></i>
                                        <span class="px-4 py-0">Izmijeni knjigu</span>
                                    </a>
                                    <form action="{{route('knjiga.destroy',$knjiga->id)}}" tabindex="0"
                                     method="post"   class="flex w-full px-4 py-2 text-sm leading-5 text-left text-gray-700 outline-none hover:text-blue-600"
                                        role="menuitem">
                                        @csrf 
                                        @method('DELETE')
                                     <button type="submit"><i class="fa fa-trash mr-[5px] ml-[5px] py-1"></i>
                                        <span class="px-4 py-0">Izbrisi knjigu</span>
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="flex flex-row overflow-auto height-osnovniDetalji">
                <div class="w-[80%]">
                    <div class="border-b-[1px] py-4 text-gray-500 border-[#e4dfdf] pl-[30px]">
                        <a href="{{route('knjiga.show',$knjiga->id)}}" class="inline hover:text-blue-800">
                            Osnovni detalji
                        </a>
                        <a href="#" class="inline ml-[70px] active-book-nav hover:text-blue-800">
                            Specifikacija
                        </a>
                        <a href="{{route('knjiga.iznajmljena',$knjiga)}}" class="inline ml-[70px] hover:text-blue-800">
                            Evidencija iznajmljivanja
                        </a>
                        <a href="evidencijaKnjigaMultimedija.php" class="inline ml-[70px] hover:text-blue-800">
                            Multimedija
                        </a>
                    </div>
                    <div class="">
                        <!-- Space for content -->
                        <div class="pl-[30px] section- mt-[20px]">
                            <div class="flex flex-row justify-between">
                                <div class="mr-[30px]">
                                    <div class="mt-[20px]">
                                        <span class="text-gray-500 text-[14px]">Broj strana</span>
                                        <p class="font-medium">{{$knjiga->BrojStrana}}</p>
                                    </div>
                                    <div class="mt-[40px]">
                                        <span class="text-gray-500 text-[14px]">Pismo</span>
                                        <p class="font-medium">{{$knjiga->pismo->Naziv}}</p>
                                    </div>
                                    <div class="mt-[40px]">
                                        <span class="text-gray-500 text-[14px]">Jezik</span>
                                        <p class="font-medium">{{$knjiga->jezik->Naziv}}</p>
                                    </div>
                                    <div class="mt-[40px]">
                                        <span class="text-gray-500 text-[14px]">Povez</span>
                                        <p class="font-medium">{{$knjiga->povez->Naziv}}</p>
                                    </div>
                                    <div class="mt-[40px]">
                                        <span class="text-gray-500 text-[14px]">Format</span>
                                        <p class="font-medium">{{$knjiga->format->Naziv}}</p>
                                    </div>
                                    <div class="mt-[40px]">
                                        <span class="text-gray-500 text-[14px]">International Standard Book Number
                                            (ISBN)</span>
                                        <p class="font-medium">{{$knjiga->ISBN}}</p>
                                    </div>
                                </div>
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
                                <p class=" bg-green-200 text-green-700 rounded-[10px] px-[6px] py-[2px] text-[14px]">
                                {{$knjiga->UkupnoPrimjeraka-
                                ($knjiga->IzdatoPrimjeraka+$knjiga->RezervisanoPrimjeraka)
                                }}  primjeraka</p>
                                <a href="{{route('knjiga.arezervacije',$knjiga)}}"><p
                                    class=" mt-[16px] bg-yellow-200 text-yellow-700 rounded-[10px] px-[6px] py-[2px] text-[14px]">
                                    {{$knjiga->RezervisanoPrimjeraka}} primjerka</p></a>
                                    <a href="{{route('knjiga.iznajmljena',$knjiga)}}"><p
                                    class=" mt-[16px] bg-blue-200 text-blue-800 rounded-[10px] px-[6px] py-[2px] text-[14px]">
                                    {{$knjiga->IzdatoPrimjeraka}} primjerka</p></a>
                                    <a href="{{route('knjiga.prekoracenje',$knjiga)}}"> <p
                                    class=" mt-[16px] bg-red-200 text-red-800 rounded-[10px] px-[6px] py-[2px] text-[14px]">
                                    {{$knjiga->u_prekoracenju()}} primjerka</p></a>
                                <p
                                    class=" mt-[16px] border-[1px] border-green-700 text-green-700 rounded-[10px] px-[6px] py-[2px] text-[14px]">
                                    {{$knjiga->UkupnoPrimjeraka}} primjeraka</p>
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
                            <a href="{{route('dashboard.aktivnosti',$knjiga)}}"
                                class="text-[#2196f3] hover:text-blue-600">
                                <i class="fas fa-history"></i> Prikazi sve
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            
        </section>   
@endsection