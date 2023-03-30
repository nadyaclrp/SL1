<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    {{-- import vite tailwind --}}
    @vite('resources/css/app.css')

    {{-- Fonts --}}
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

    <title>Profile</title>

    <style>
        body {
            font-family: 'Poppins', sans-serif;
        }
    </style>

</head>
<body>
    <section id="profile" class="pt-px w-full bg-fixed">
        {{-- landing page --}}
            <div class="bg-gradient-to-l from-lavenderGray text-navy w-full">
                {{-- navbar --}}
                <div class=" flex flex-row justify-between font-semibold w-full h-auto p-5 ">
                    <div class="flex flex-row w-3/6 justify-start ml-3">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill="#232946" d="M7 9H2V7h5v2zm0 3H2v2h5v-2zm13.59 7l-3.83-3.83c-.8.52-1.74.83-2.76.83c-2.76 0-5-2.24-5-5s2.24-5 5-5s5 2.24 5 5c0 1.02-.31 1.96-.83 2.75L22 17.59L20.59 19zM17 11c0-1.65-1.35-3-3-3s-3 1.35-3 3s1.35 3 3 3s3-1.35 3-3zM2 19h10v-2H2v2z"/></svg>
                    </div>
                    <div class="flex flex-row justify-evenly w-3/6 ">
                        <a class="hover:bg-peach hover:rounded-lg active:bg-peach focus:outline-none focus:ring focus:ring-peach" href="#biodata">Biodata</a>
                        <a class="hover:bg-peach hover:rounded-lg active:bg-peach focus:outline-none focus:ring focus:ring-peach" href="#skills">Skills</a>
                        <a class="hover:bg-peach hover:rounded-lg active:bg-peach focus:outline-none focus:ring focus:ring-peach" href="#experiences">Experiences</a>
                        <a class="hover:bg-peach hover:rounded-lg active:bg-peach focus:outline-none focus:ring focus:ring-peach" href="#education">Education</a>
                        <a class="hover:bg-peach hover:rounded-lg active:bg-peach focus:outline-none focus:ring focus:ring-peach"  href="#reach">Reach</a>
                    </div>  
                </div>

                <div class="flex p-1 justify-between w-full">
                    {{-- <div class="w-3/6 p-2 m-2 bg-black  bg-fixed" style="background-image: url('nadya.jpg')"></div> --}}
                    <div class="m-4 w-3/6 h-screen relative border-green-600">
                        <div class="flex absolute mx-auto w-full h-full -bottom-0"><img class="fw-5/6 h-5/6 mr-auto ml-auto mt-auto mb-0" src="{{('nadyaRemove.png')}}"></div>
                        <span class="-z-5">
                            <svg viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg">
                                <path fill="#EEBBC3" d="M41.6,-70.4C51.5,-58.3,55.6,-42.8,56.4,-29.2C57.2,-15.6,54.8,-4.1,56.3,10.4C57.8,24.8,63.1,42.1,59,56.4C54.8,70.8,41.2,82.4,25.6,86.6C10.1,90.9,-7.4,87.8,-20.4,79.5C-33.5,71.2,-42,57.5,-48,44.8C-54,32.2,-57.5,20.5,-61.8,7.3C-66.1,-5.8,-71.3,-20.4,-65.8,-29C-60.2,-37.6,-43.9,-40.2,-31.1,-51C-18.4,-61.9,-9.2,-80.9,3.3,-86C15.8,-91.2,31.7,-82.5,41.6,-70.4Z" transform="translate(100 100)" />
                            </svg>
                        </span>
                    </div>
                    <div class=" m-4 w-3/6">
                        <h1 class="font-thin mb-5">Education</h1>
                        <h1 class="font-bold mt-2 mb-2">Nadya Clarine Purba</h1>
                        <h1 class="font-thin mt-2 mb-2">deskripsi dikit</h1>
                        <a class="font-normal mt-4 mb-4">Read More</a>
                    </div>
                    <div>
                    </div>
                </div> 
            </div>

            {{-- biodata --}}
            <div id="biodata" class="h-96 bg-black ">
                
            </div>

            {{-- skills --}}
            <div id="skills" class="h-96 bg-red-600 ">
                
            </div>

            {{-- experiences --}}
            <div id="experiences" class="h-96 bg-amber-700 ">
                
            </div>

            {{-- education --}}
            <div id="education" class="h-96 bg-slate-600 ">
                
            </div>

            {{-- reach --}}
            <div id="reach" class="h-96 bg-green-500 ">
                
            </div>

        </section>
</body>
</html>