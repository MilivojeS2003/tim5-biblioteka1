@extends('layouts.layout')
@section('content')
     <!-- Content -->
     <section class="w-screen h-screen pl-[80px] py-4 text-gray-700">
            <!-- Heading of content -->
            <div class="heading mt-[7px]">
                <h1 class="pl-[30px] pb-[21px]  border-b-[1px] border-[#e4dfdf] ">
                    Dashboard
                </h1>
            </div>
            <!-- Space for content -->
            <div class="pl-[30px] scroll height-dashboard overflow-auto mt-[20px] pb-[30px]">
                <div class="flex flex-row justify-between">
                    <div class="mr-[30px]">
                        <h3 class="uppercase mb-[20px]">Aktivnosti</h3>
                        <!-- Activity Cards -->
                        @if(count($sva_izdavanja))
                        @foreach($sva_izdavanja as $i)
                        <div class="activity-card flex flex-row mb-[30px]">
                            <div class="w-[60px] h-[60px]">
                                <img class="rounded-full" src="img/profileStudent.jpg" alt="">
                            </div>
                            <div class="ml-[15px] mt-[5px] flex flex-col">
                                <div class="text-gray-500 mb-[5px]">
                                    <p class="uppercase">
                                        Izdavanje knjige
                                        <span class="inline lowercase">
                                        &nbsp; - &nbsp; prije &nbsp; @if($i->zadrzavanje($i->izdavanje_id)['check']==true)
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
                                    </p>
                                </div>
                                <div class="">
                                    <p>
                                        <a href="{{route('bibliotekar.show',$i->izdata_od)}}" class="text-[#2196f3] hover:text-blue-600">
                                            {{$i->izdata_od->ImePrezime}}
                                        </a>
                                        je izdala(o) knjigu <span class="font-medium">
                                         {{$i->knjiga->Naslov}}
                                         </span>
                                        <a href="{{route('ucenik.show',$i->izdata_za)}}" class="text-[#2196f3] hover:text-blue-600">
                                            {{$i->izdata_za->ImePrezime}}
                                        </a>
                                        dana <span class="font-medium">
                                        {{date('d.m.Y',strtotime($i->datumizdavanja))}}
                                        </span>
                                        <a href="{{route('knjiga.izdavanjedetalji',$i)}}" class="text-[#2196f3] hover:text-blue-600">
                                            pogledaj detaljnije >>
                                        </a>
                                    </p>
                                </div>
                            </div>
                        </div>
                       @endforeach
                      
                        <div class="inline-block w-full mt-4">
                            <a href="{{route('knjiga.izdate')}}" 
                                class="btn-animation block text-center w-full px-4 py-2 text-sm tracking-wider text-gray-600 transition duration-300 ease-in border-[1px] border-gray-400 rounded hover:bg-gray-200 focus:outline-none focus:ring-[1px] focus:ring-gray-300">
                                Prikazi sve
                            </a>
                        </div>
                        @else 
                        <div class="activity-card  mb-[50px]">
                        <h1 class="text-red-600">Nema aktivnih izdavanja knjiga</h1>
                       
                        </div>
                        <div class="inline-block w-full mt-4">
                            <a href="{{route('knjiga.izdate')}}" 
                                class="btn-animation block text-center w-full px-4 py-2 text-sm tracking-wider text-gray-600 transition duration-300 ease-in border-[1px] border-gray-400 rounded hover:bg-gray-200 focus:outline-none focus:ring-[1px] focus:ring-gray-300">
                                Prikazi sve
                            </a>
                        </div>
                        @endif
                    </div>
                    <div class="mr-[50px] ">
                        <h3 class="uppercase mb-[20px] text-left">
                            Rezervacije knjiga
                        </h3>
                        <div>
                        @if(count($aktivne_rezervacije))
                            <table class="w-[560px] table-auto">
                                <tbody class="bg-gray-200">
                                @foreach($aktivne_rezervacije as $ar)
                                    <tr class="bg-white border-b-[1px] border-[#e4dfdf]">
                                        <td class="flex flex-row items-center px-2 py-4">
                                            <img class="object-cover w-8 h-8 rounded-full "
                                                src="img/profileStudent.jpg" alt="" />
                                            <a href="{{route('ucenik.show',$ar->rezervisana_za)}}" class="ml-2 font-medium text-center">
                                            {{$ar->rezervisana_za->ImePrezime}}
                                            </a>
                                        <td>
                                        </td>
                                        <td class="px-2 py-2">
                                            <a href="{{route('knjiga.show',$ar->knjiga->id)}}">
                                            {{$ar->knjiga->Naslov}}
                                            </a>
                                        </td>
                                        <td class="px-2 py-2">
                                            <span class="px-[10px] py-[3px] bg-gray-200 text-gray-800 px-[6px] py-[2px] rounded-[10px]">
                                            {{date('d.m.Y',strtotime($ar->datumrezervacije))}}
                                            </span>
                                        </td>
                                        @if($ar->status->Naziv!='Rezervisana')
                                    
                                        <td class="px-2 py-2 changeStatus">
                                            <a href="{{route('knjiga.rezervacija',$ar->knjiga)}}" class="hover:text-green-500 mr-[5px]">
                                                <i class="fas fa-check reservedStatus"></i>
                                            </a>
                                            <a href="#" class="hover:text-red-500 ">
                                                <i class="fas fa-times deniedStatus"></i>
                                            </a>
                                        </td>
                                        <td class="hidden px-2 py-2 text-sm leading-5 text-blue-900 whitespace-no-wrap">
                                            <div class="inline-block px-[6px] py-[2px] font-medium bg-yellow-200 rounded-[10px]">
                                                <span class="text-xs text-yellow-700">Rezervisano</span>
                                            </div>
                                        </td>
                                        <td class="hidden px-2 py-2 text-sm leading-5 text-blue-900 whitespace-no-wrap">
                                            <div
                                                class="inline-block px-[6px] py-[2px] font-medium bg-red-200 rounded-[10px]">
                                                <span class="text-xs text-red-800">Odbijeno</span>
                                            </div>
                                        </td>
                                           
                                        
                                        @else 
                                        <td class="px-2 py-2 text-sm leading-5 text-blue-900 whitespace-no-wrap">
                                        <div
                                            class="inline-block px-[6px] py-[2px] font-medium bg-yellow-200 rounded-[10px]">
                                            <span class="text-xs text-yellow-700">Rezervisano</span>
                                        </div>
                                        </td>
                                        @endif
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            <div class="text-right mt-[5px]">
                                <a href="{{route('knjiga.svearezervacije')}}" class="text-[#2196f3] hover:text-blue-600">
                                    <i class="fas fa-calendar-alt mr-[4px]" aria-hidden="true"></i>
                                    Prikazi sve
                                </a>
                            </div>
                            @else 
                        <div class="w-[560px] table-auto">
                        <h1 class="text-red-500">Nema aktivnih aktivnosti vezanih za rezervaciju knjiga</h1>
                        <div class="text-right mt-[5px]">
                                <a href="{{route('knjiga.svearezervacije')}}" class="text-[#2196f3] hover:text-blue-600">
                                    <i class="fas fa-calendar-alt mr-[4px]" aria-hidden="true"></i>
                                    Prikazi sve
                                </a>
                            </div>
                        </div>
                        @endif
                        </div>
                        <div class="relative">
                            <h3 class="uppercase mb-[20px] text-left py-[30px]">
                                Statistika
                            </h3>
                            <div class="text-right">
                                <div class="flex pb-[30px]">
                                    <a class="w-[145px] text-[#2196f3] hover:text-blue-600" href="{{route('knjiga.izdate')}}">
                                        Izdate knjige
                                    </a>
                                    <div class="ml-[30px] bg-green-600 transition duration-200 ease-in  hover:bg-green-900 stats-bar-green h-[26px]">
                                    
                                    </div>
                                    <p class="ml-[10px] number-green text-[#2196f3] hover:text-blue-600">
                                        {{$izdavanja}}
                                    </p>
                                </div>
                                <div class="flex pb-[30px]">
                                    <a class="w-[145px] text-[#2196f3] hover:text-blue-600" href="{{route('knjiga.svearezervacije')}}">
                                        Rezervisane knjige
                                    </a>
                                    <div class="ml-[30px] bg-yellow-600 transition duration-200 ease-in  hover:bg-yellow-900 stats-bar-yellow  h-[26px]">
                                    
                                    </div>
                                    <p class="ml-[10px] text-[#2196f3] hover:text-blue-600 number-yellow">
                                        {{count($aktivne_rezervacije)}}
                                    </p>
                                </div>
                                <div class="flex pb-[30px]">
                                    <a class="w-[145px] text-[#2196f3] hover:text-blue-600" href="{{route('knjiga.svaprekoracenja')}}">
                                        Knjige u prekoracenju
                                    </a>
                                    <div class="ml-[30px] bg-red-600 transition duration-200 ease-in hover:bg-red-900 stats-bar-red h-[26px]">
                                    
                                    </div>
                                    <p class="ml-[10px] text-[#2196f3] hover:text-blue-600 number-red">
                                    {{$prekoracenja}}
                                    </p>
                                </div>
                            </div>
                            <div class="absolute h-[220px] w-[1px] bg-black top-[78px] left-[174px]">
                            </div>
                            <div class="absolute flex conte left-[175px] border-t-[1px] border-[#e4dfdf] top-[248px] pr-[87px]">
                                <p class="ml-[-13px]">
                                    0
                                </p>
                                <p class="ml-[57px]">
                                    20
                                </p>
                                <p class="ml-[57px]">
                                    40
                                </p>
                                <p class="ml-[57px]">
                                    60
                                </p>
                                <p class="ml-[57px]">
                                    80
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Content -->
@endsection