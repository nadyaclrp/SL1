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
                    <div class=" m-4 w-3/6 pr-12 mt-16">
                        <div class="font-thin text-peach bg-navy mb-2 w-fit p-2">Education</div>
                        <h1 class="font-extrabold text-[4.5vw] mt-2 mb-2">Nadya Clarine Purba</h1>
                        <h1 class="font-normal mt-2 mb-2">Selamat datang di landing page Nadya, seorang mahasiswa inspiratif! Halaman ini adalah tempat di mana Anda dapat mengenal lebih dekat tentang Nadya, seorang mahasiswa yang menginspirasi banyak orang melalui perjuangannya dalam meraih mimpi dan mencapai tujuan hidupnya.
                            Di sini Anda akan menemukan konten-konten inspiratif yang mengulas tentang tips meraih sukses di dunia perkuliahan, kisah-kisah inspiratif, serta pengalaman-pengalaman berharga yang mungkin bisa menjadi referensi bagi Anda. Ayo, temukan inspirasi baru bersama Nadya!</h1>
                        <a class="font-medium mt-4 mb-4" href="#biodata">Read More</a>
                    </div>
                    <div>
                    </div>
                </div> 
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
                <p class="font-medium text-center mt-2"> Jadi, itulah sedikit deskripsi tentang diri saya sebagai mahasiswa IT semester 5 yang penuh semangat, lucu dan senang bergabung dengan organisasi dan komunitas baru di kampus. Saya selalu mencoba untuk menikmati setiap momen di kampus dan terus belajar untuk mengasah keterampilan dan pengetahuan saya di bidang IT. Terima kasih sudah membaca!</p>
                {{-- <p class="font-bold">"</p> --}}
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