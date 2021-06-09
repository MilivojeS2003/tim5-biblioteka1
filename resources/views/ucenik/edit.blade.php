@extends('layouts.layout')
@section('content')
<section class="w-screen h-screen pl-[80px] pb-4 text-gray-700">
            <!-- Heading of content -->
            <div class="heading">
                <div class="flex border-b-[1px] border-[#e4dfdf]">
                    <div class="pl-[30px] py-[10px] flex flex-col">
                        <div>
                            <h1 class="">
                                Izmijeni podatke
                            </h1>
                        </div>
                        <div>
                            <nav class="w-full rounded">
                                <ol class="flex list-reset">
                                    <li>
                                        <a href="{{route('ucenik.index')}}" class="text-[#2196f3] hover:text-blue-600">
                                            Svi ucenici
                                        </a>
                                    </li>
                                    <li>
                                        <span class="mx-2">/</span>
                                    </li>
                                    <li>
                                        <a href="#" class="text-gray-400 hover:text-blue-600">
                                            Izmijeni podatke
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
                <form method="post" action="{{route('ucenik.update',$u->id)}}" class="text-gray-700 text-[14px] forma">
                  @csrf 
                  @method('PUT')
                    <div class="flex flex-row ml-[30px]">
                        <div class="w-[50%] mb-[100px]">
                            <div class="mt-[20px]">
                                <span>Ime i prezime <span class="text-red-500">*</span></span>
                                <input type="text" name="imePrezimeUcenikEdit" id="imePrezimeUcenikEdit" value="{{$u->ImePrezime}}" class="flex w-[90%] mt-2 px-2 py-2 text-base bg-white border border-gray-300 shadow-sm appearance-none focus:outline-none focus:ring-2 focus:ring-[#576cdf]" onkeydown="clearErrorsNameUcenikEdit()"/>
                                <div class="fail" id="validateNameUcenikEdit">
                                @error('imePrezimeUcenikEdit')@php echo "Ime i prezime ucenika je obavezno polje"; @endphp @enderror
                                
                                </div>
                            </div>

                            <div class="mt-[20px]">
                                <span>Tip korisnika</span>
                                <select class="flex w-[90%] mt-2 px-2 py-2 border bg-gray-300 border-gray-300 shadow-sm focus:outline-none focus:ring-2 focus:ring-[#576cdf]" name="tip_korisnika" >
                                    <option ></option>
                                    @foreach($tip as $t)
                                    <option @php if($u->tipkorisnika->Naziv==$t->Naziv){echo 'selected';} @endphp value="{{$t->id}}">
                                        {{$t->Naziv}}
                                    </option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="mt-[20px]">
                                <span>JMBG <span class="text-red-500">*</span></span>
                                <input type="text" name="jmbgUcenikEdit" id="jmbgUcenikEdit" value="{{$u->JMBG}}" class="flex w-[90%] mt-2 px-2 py-2 text-base bg-white border border-gray-300 shadow-sm appearance-none focus:outline-none focus:ring-2 focus:ring-[#576cdf]" onkeydown="clearErrorsJmbgUcenikEdit()"/>
                                <div class="fail" id="validateJmbgUcenikEdit">
                                @error('jmbgUcenikEdit')@php echo "JMBG ucenika je obavezno polje"; @endphp @enderror
                                
                                </div>
                            </div>

                            <div class="mt-[20px]">
                                <span>E-mail <span class="text-red-500">*</span></span>
                                <input type="email" name="emailUcenikEdit" id="emailUcenikEdit" value="{{$u->email}}" class="flex w-[90%] mt-2 px-2 py-2 text-base bg-white border border-gray-300 shadow-sm appearance-none focus:outline-none focus:ring-2 focus:ring-[#576cdf]" onkeydown="clearErrorsEmailUcenikEdit()"/>
                                <div id="validateEmailUcenikEdit">
                                @error('emailUcenikEdit')@php echo "Email ucenika je obavezno polje"; @endphp @enderror
                                
                                </div>
                            </div>

                            <div class="mt-[20px]">
                                <span>Korisnicko ime <span class="text-red-500">*</span></span>
                                <input type="text" name="usernameUcenikEdit" id="usernameUcenikEdit" value="{{$u->ImePrezime}}" class="flex w-[90%] mt-2 px-2 py-2 text-base bg-white border border-gray-300 shadow-sm appearance-none focus:outline-none focus:ring-2 focus:ring-[#576cdf]" onkeydown="clearErrorsUsernameUcenikEdit()"/>
                                <div class="fail" id="validateUsernameUcenikEdit">
                                @error('usernameUcenikEdit')@php echo "Usernam ucenika je obavezno polje"; @endphp @enderror
                                  
                                </div>
                            </div>

                            <div class="mt-[20px]">
                                <span>Sifra <span class="text-red-500">*</span></span>
                                <input type="password" name="pwUcenikEdit" id="pwUcenikEdit" value="{{$u->password}}" class="flex w-[90%] mt-2 px-2 py-2 text-base bg-white border border-gray-300 shadow-sm appearance-none focus:outline-none focus:ring-2 focus:ring-[#576cdf]" onkeydown="clearErrorsPwUcenikEdit()"/>
                                <div  class="fail" id="validatePwUcenikEdit">
                                @error('pwUcenikEdit')@php echo "Sifra ucenika je obavezno polje"; @endphp @enderror
                                
                                </div>
                            </div>

                            <div class="mt-[20px]">
                                <span>Ponovi sifru <span class="text-red-500">*</span></span>
                                <input type="password" name="pw2UcenikEdit" id="pw2UcenikEdit" value="{{$u->password}}" class="flex w-[90%] mt-2 px-2 py-2 text-base bg-white border border-gray-300 shadow-sm appearance-none focus:outline-none focus:ring-2 focus:ring-[#576cdf]" onkeydown="clearErrorsPw2UcenikEdit()"/>
                                <div class="fail" id="validatePw2UcenikEdit">
                                @error('pw2UcenikEdit')@php echo "Ponovljena sifra ucenika je obavezno polje i mora da se poklapa"; @endphp @enderror
                              </div>
                            </div>
                        </div>

                        <div class="mt-[50px]">
                            <label class="mt-6 cursor-pointer">
                                <div id="empty-cover-art" class="relative w-48 h-48 py-[48px] text-center border-2 border-gray-300 border-solid">
                                    <div class="py-4">
                                        <svg class="mx-auto feather feather-image mb-[15px]" xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round">
                                            <rect x="3" y="3" width="18" height="18" rx="2" ry="2"></rect>
                                            <circle cx="8.5" cy="8.5" r="1.5"></circle>
                                            <polyline points="21 15 16 10 5 21"></polyline>
                                        </svg>
                                        <span class="px-4 py-2 mt-2 leading-normal">Add photo</span>
                                        <input type='file' class="hidden" :accept="accept" onchange="loadFileStudent(event)" />
                                    </div>
                                    <img src="img/profileStudent.jpg" id="image-output-student" class="absolute w-48 h-[188px] bottom-0" />	
                                </div>
                            </label>  
                        </div>
                    </div>

                    <div class="absolute bottom-0 w-full">
                        <div class="flex flex-row">
                            <div class="inline-block w-full text-right py-[7px] mr-[100px] text-white">
                                <button type="reset"
                                        class="btn-animation shadow-lg mr-[15px] w-[150px] focus:outline-none text-sm py-2.5 px-5 transition duration-300 ease-in bg-[#F44336] hover:bg-[#F55549] rounded-[5px]">
                                            Ponisti <i class="fas fa-times ml-[4px]"></i> 
                                </button>
                                <button id="sacuvajUcenikaEdit" type="submit"
                                        class="btn-animation shadow-lg w-[150px] disabled:opacity-50 focus:outline-none text-sm py-2.5 px-5 transition duration-300 ease-in rounded-[5px] hover:bg-[#46A149] bg-[#4CAF50]" onclick="validacijaUcenikEdit()">
                                            Sacuvaj <i class="fas fa-check ml-[4px]"></i> 
                                </button>
                            </div>
                        </div>        
                    </div>
                    
                </form>
            </div>
        </section>
@endsection