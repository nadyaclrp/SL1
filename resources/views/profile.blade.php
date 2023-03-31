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
    <section id="profile" class="pt-px w-full">
        {{-- landing page --}}
            <div class="bg-gradient-to-l from-lavenderGray text-navy w-full">
                {{-- navbar --}}
                <div class=" flex flex-row justify-between font-semibold w-full h-auto p-5 ">
                    <div class="flex flex-row w-3/6 justify-start ml-3">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill="#232946" d="M7 9H2V7h5v2zm0 3H2v2h5v-2zm13.59 7l-3.83-3.83c-.8.52-1.74.83-2.76.83c-2.76 0-5-2.24-5-5s2.24-5 5-5s5 2.24 5 5c0 1.02-.31 1.96-.83 2.75L22 17.59L20.59 19zM17 11c0-1.65-1.35-3-3-3s-3 1.35-3 3s1.35 3 3 3s3-1.35 3-3zM2 19h10v-2H2v2z"/></svg>
                    </div>
                    <div class="flex flex-row justify-evenly w-3/6">
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
                    <div class=" m-4 w-3/6 pr-12 mt-16">
                        <div class="font-thin text-peach bg-navy mb-2 w-fit p-2">Education</div>
                        <h1 class="font-extrabold text-[4.5vw] mt-2 mb-2">Nadya Clarine Purba</h1>
                        <h1 class="font-normal mt-2 mb-2">Selamat datang di landing page Nadya, seorang mahasiswa inspiratif! Halaman ini adalah tempat di mana Anda dapat mengenal lebih dekat tentang Nadya, seorang mahasiswa yang menginspirasi banyak orang melalui perjuangannya dalam meraih mimpi dan mencapai tujuan hidupnya.
                            Di sini Anda akan menemukan konten-konten inspiratif yang mengulas tentang tips meraih sukses di dunia perkuliahan, kisah-kisah inspiratif, serta pengalaman-pengalaman berharga yang mungkin bisa menjadi referensi bagi Anda. Ayo, temukan inspirasi baru bersama Nadya!</h1>
                        <a class="font-medium mt-4 mb-4 " href="#biodata">Read More</a>
                    </div>
                    <div>
                    </div>
                </div>
                {{-- <svg class="animate-bounce w-6 h-6" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill="#eebbc3" d="M12 2a10 10 0 0 1 10 10a10 10 0 0 1-10 10A10 10 0 0 1 2 12A10 10 0 0 1 12 2m0 15l5-5h-3V8h-4v4H7l5 5Z"/></svg>  --}}
            </div>

            {{-- biodata --}}
            <div id="biodata" class="h-auto bg-gradient-to-b from-white to-peach text-navy  pr-32 pl-32 pt-12 pb-32">
                <h1 class="font-extrabold text-5xl text-peach text-center p-4">About Me</h1>
                {{-- <p class="font-bold">"</p> --}}
                <p class="font-medium text-center">Apa kabar teman-teman, saya adalah seorang mahasiswa IT semester 5 yang super semangat dan suka ngelucu. Sejauh ini, saya sudah melewati berbagai tantangan seperti tugas pemrograman yang menguras pikiran dan deadline yang ngeri-ngeri sedap, tapi tetap bisa melewatinya dengan selalu ngasih komentar kocak.</p>
                <p class="font-medium text-center mt-2">
                    Saya sangat suka belajar tentang hal-hal baru di bidang IT, mulai dari programming, networking, cybersecurity, hingga data science. Bahkan ketika saya sedang jenuh dengan tugas kuliah, saya masih bisa terhibur dengan video-video IT yang kocak di YouTube.
                    Saya juga suka bergabung dengan organisasi dan komunitas baru di kampus. Sejak bergabung dengan komunitas programming, saya mendapat banyak peluang untuk mengasah keterampilan saya dan mendapat teman-teman baru yang seru. Tidak jarang kami juga membuat projek atau berpartisipasi dalam coding competition bersama-sama.
                    Dan ketika saya mengikuti acara organisasi, saya selalu mencoba untuk memberikan sedikit keceriaan dengan selalu menambahkan komentar lucu di sela-sela diskusi. Walaupun saya memang suka bergurau, tapi saya tetap serius dalam mengikuti diskusi dan acara, karena saya percaya hal ini sangat penting untuk menambah wawasan dan jaringan saya di bidang IT.
                </p>
                <p class="font-medium text-center mt-2"> Jadi, itulah sedikit deskripsi tentang diri saya sebagai mahasiswa IT semester 5 yang penuh semangat, lucu dan senang bergabung dengan organisasi dan komunitas baru di kampus. Saya selalu mencoba untuk menikmati setiap momen di kampus dan terus belajar untuk mengasah keterampilan dan pengetahuan saya di bidang IT.</p>
                <p class="font-semibold text-xl text-center mt-4">Terima kasih sudah membaca!</p>
            </div>

            {{-- skills --}}
            <div id="skills" class=" h-screen bg-gradient-to-b from-peach to-lavenderGray text-navy">
                <h1 class="font-extrabold text-5xl text-navy text-center p-12">Skills</h1>
                <div class="flex flex-row justify-center p-12 ">
                    <div class="relative">
                        <div class="bg-white rounded-full w-36 h-36 mr-8 ml-8 flex justify-center items-center hover:scale-150 ease-in hover:bg-navy duration-300 ">
                            <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 32 32"><path fill="#b8c1ec" d="M30 24v-2h-2.101a4.968 4.968 0 0 0-.732-1.753l1.49-1.49l-1.414-1.414l-1.49 1.49A4.968 4.968 0 0 0 24 18.101V16h-2v2.101a4.968 4.968 0 0 0-1.753.732l-1.49-1.49l-1.414 1.414l1.49 1.49A4.968 4.968 0 0 0 18.101 22H16v2h2.101a4.968 4.968 0 0 0 .732 1.753l-1.49 1.49l1.414 1.414l1.49-1.49a4.968 4.968 0 0 0 1.753.732V30h2v-2.101a4.968 4.968 0 0 0 1.753-.732l1.49 1.49l1.414-1.414l-1.49-1.49A4.968 4.968 0 0 0 27.899 24Zm-7 2a3 3 0 1 1 3-3a3.003 3.003 0 0 1-3 3Z"/><path fill="#b8c1ec" d="M28 4H4a2.002 2.002 0 0 0-2 2v20a2.002 2.002 0 0 0 2 2h10v-2H4V12h24v3h2V6a2.002 2.002 0 0 0-2-2Zm0 6H4V6h24Z"/><circle cx="20" cy="8" r="1" fill="#b8c1ec"/><circle cx="23" cy="8" r="1" fill="#b8c1ec"/><circle cx="26" cy="8" r="1" fill="#b8c1ec"/></svg>
                            <div class="absolute opacity-0 hover:opacity-100 duration-300 inset-0 z-10 flex justify-center mt-6 text-xs hover:text-navy hover:-translate-y-12 text-white font-semibold ">4/5</div>
                        </div>
                        <h1 class="text-center font-semibold text-navy">Management</h1>  
                    </div>
                    <div class="relative">
                        <div class="bg-white rounded-full w-36 h-36 mr-8 ml-8 flex justify-center items-center hover:scale-150 ease-in hover:bg-navy duration-300 relative ">
                            <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 28 28"><path fill="#b8c1ec" d="M17.754 11c.966 0 1.75.784 1.75 1.75v6.749a5.501 5.501 0 0 1-11.002 0V12.75c0-.966.783-1.75 1.75-1.75h7.502ZM3.75 11l4.382-.002a2.73 2.73 0 0 0-.621 1.532l-.01.22v6.749c0 1.133.291 2.199.8 3.127A4.501 4.501 0 0 1 2 18.499V12.75A1.751 1.751 0 0 1 3.751 11Zm16.124-.002L24.25 11c.966 0 1.75.784 1.75 1.75v5.75a4.5 4.5 0 0 1-6.298 4.127l.056-.102c.429-.813.69-1.729.738-2.7l.008-.326V12.75c0-.666-.237-1.276-.63-1.752ZM14 3a3.5 3.5 0 1 1 0 7a3.5 3.5 0 0 1 0-7Zm8.003 1a3 3 0 1 1 0 6a3 3 0 0 1 0-6ZM5.997 4a3 3 0 1 1 0 6a3 3 0 0 1 0-6Z"/></svg>
                            <div class="absolute opacity-0 hover:opacity-100 duration-300 inset-0 z-10 flex justify-center mt-6 text-xs text-white font-semibold hover:text-navy hover:-translate-y-12">4/5</div>
                        </div>
                        <h1 class="text-center font-semibold text-navy">Team Work</h1>  
                    </div>
                    <div class="relative">
                        <div class="bg-white rounded-full w-36 h-36 mr-8 ml-8 flex justify-center items-center hover:scale-150 ease-in hover:bg-navy duration-300 ">
                            <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 48 48"><mask id="ipSBrain0"><g fill="none" stroke="#fff"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="4.667" d="M19.036 44c-.98-3.195-2.458-5.578-4.435-7.147c-2.965-2.353-7.676-.89-9.416-3.318c-1.74-2.428 1.219-6.892 2.257-9.526c1.039-2.634-3.98-3.565-3.394-4.313c.39-.499 2.927-1.937 7.609-4.316C12.987 7.794 17.9 4 26.398 4C39.144 4 44 14.806 44 21.68c0 6.872-5.88 14.276-14.256 15.873c-.749 1.09.331 3.24 3.24 6.447"/><path fill="#fff" fill-rule="evenodd" stroke-linejoin="round" stroke-width="4" d="M19.5 14.5c-.654 2.534-.46 4.314.583 5.339c1.042 1.024 2.818 1.695 5.328 2.01c-.57 3.269.125 4.802 2.083 4.6c1.958-.201 3.135-1.015 3.53-2.44c3.06.86 4.719.14 4.976-2.16c.385-3.45-1.475-6.201-2.238-6.201c-.762 0-2.738-.093-2.738-1.148s-2.308-1.65-4.391-1.65s-.83-1.405-3.69-.85c-1.907.37-3.055 1.203-3.443 2.5Z" clip-rule="evenodd"/><path stroke-linecap="round" stroke-width="4" d="M30.5 25.5c-1.017.631-2.412 1.68-3 2.5c-1.469 2.05-2.66 3.298-2.92 4.608"/></g></mask><path fill="#b8c1ec" d="M0 0h48v48H0z" mask="url(#ipSBrain0)"/></svg>
                            <div class="absolute opacity-0 hover:opacity-100 duration-300 inset-0 z-10 flex justify-center mt-6 text-xs hover:text-navy hover:-translate-y-12 text-white font-semibold">4/5</div>
                        </div>
                        <h1 class="text-center font-semibold text-navy">Creativity</h1>  
                    </div>
                    <div class="relative">
                        <div class="bg-white rounded-full w-36 h-36 mr-8 ml-8 flex justify-center items-center hover:scale-150 ease-in hover:bg-navy duration-300 ">
                            <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24"><path fill="#b8c1ec" d="M4 13a8 8 0 0 1 15.809-1.747a3.505 3.505 0 0 1 2.147 2.69c.03-.31.044-.625.044-.943c0-5.523-4.477-10-10-10S2 7.477 2 13a9.972 9.972 0 0 0 2.922 7.065a1 1 0 0 0 1.416-1.413A7.972 7.972 0 0 1 4 13Zm13.69-1.906a6 6 0 1 0-9.934 6.149a1 1 0 1 0 1.416-1.415a4 4 0 1 1 6.737-3.681a3.497 3.497 0 0 1 1.782-1.053ZM10 13a2 2 0 1 1 4 0a2 2 0 0 1-4 0Zm11 1.5a2.5 2.5 0 1 1-5 0a2.5 2.5 0 0 1 5 0Zm2 5.375C23 21.431 21.714 23 18.5 23S14 21.437 14 19.875v-.103c0-.98.794-1.772 1.773-1.772h5.454c.98 0 1.773.793 1.773 1.772v.103Z"/></svg>
                            <div class="absolute opacity-0 hover:opacity-100 duration-300 inset-0 z-10 flex justify-center mt-6 text-xs hover:text-navy hover:-translate-y-12 text-white font-semibold">4/5</div>
                        </div>
                        <h1 class="text-center font-semibold text-navy">Communication</h1>  
                    </div>
                </div>
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