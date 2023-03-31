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
                        <a class="font-medium mt-4 mb-4 hover:underline" href="#biodata">Read More</a>
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
            <div id="experiences" class=" h-screen bg-gradient-to-b from-lavenderGray to-white justify-center">
                <h1 class="font-extrabold text-5xl text-navy text-center p-16">Collab Project</h1>
                <div class="flex flex-row justify-center mb-8 mt-8">
                    <div class="flex-col bg-navy rounded-xl w-auto h-auto pr-5 pl-5 pb-4 pt-4 mr-8 ml-8 flex ">
                        <div class="bg-white w-56 h-36 rounded-lg opacity-1 bg-contain mix-blend-hard-light" style="background-image: url('https://img.freepik.com/free-photo/closeup-hand-using-pen-mouse-working-with-computer-wooden-table_53876-30173.jpg?w=740&t=st=1680240005~exp=1680240605~hmac=6c562b49ed56abb6c5a4b6648cbd02cde3c4562b432f34f1aef1f9b5f8575183')" ></div>
                        <div class="mt-4 text-white hover:text-peach">
                            <h1 class="font-thin text-xs">Application</h1>
                            <h1 class="font-semibold">Fugemy</h1>
                            <h1 class="font-thin text-xs mt-3">Description</h1>
                            <h1 class="font-semibold">Education Application</h1>
                        </div>
                    </div>
                    <div class="flex-col bg-navy rounded-xl w-auto h-auto pr-5 pl-5 pb-4 pt-4 mr-8 ml-8 flex ">
                        <div class="bg-white w-56 h-36 rounded-lg opacity-1 bg-contain mix-blend-hard-light" style="background-image: url('https://img.freepik.com/free-photo/woman-scanning-qr-code-pay-bills_329181-4280.jpg?w=900&t=st=1680247470~exp=1680248070~hmac=6b56cb45769b2214f3d701cc71cfdcf51df2a0223ce6057e0ec279622d7b7b25')" ></div>
                        <div class="mt-4 text-white hover:text-peach">
                            <h1 class="font-thin text-xs">Application</h1>
                            <h1 class="font-semibold">Foundly</h1>
                            <h1 class="font-thin text-xs mt-3">Description</h1>
                            <h1 class="font-semibold">Object Recognition</h1>
                        </div>
                    </div>
                    <div class="flex-col bg-navy rounded-xl w-auto h-auto pr-5 pl-5 pb-4 pt-4 mr-8 ml-8 flex ">
                        <div class="bg-white w-56 h-36 rounded-lg opacity-1 bg-contain mix-blend-hard-light" style="background-image: url('https://img.freepik.com/free-photo/top-view-office-desk-with-growth-chart-hands-using-calculator_23-2148780626.jpg?w=900&t=st=1680247876~exp=1680248476~hmac=db492b7f36058f774ae8e3f00e97f23aaaf75d2348f25071f05352098b9827c8')" ></div>
                        <div class="mt-4 text-white hover:text-peach">
                            <h1 class="font-thin text-xs">Application</h1>
                            <h1 class="font-semibold">PoorBye</h1>
                            <h1 class="font-thin text-xs mt-3">Description</h1>
                            <h1 class="font-semibold">Financial Application</h1>
                        </div>
                    </div>
                    <div class="flex-col bg-navy rounded-xl w-auto h-auto pr-5 pl-5 pb-4 pt-4 mr-8 ml-8 flex ">
                        <div class="bg-white w-56 h-36 rounded-lg opacity-1 bg-contain mix-blend-hard-light" style="background-image: url('https://img.freepik.com/premium-photo/nurse-holding-virtual-screen_13339-70952.jpg?w=826')" ></div>
                        <div class="mt-4 text-white hover:text-peach">
                            <h1 class="font-thin text-xs">Application</h1>
                            <h1 class="font-semibold">Heart Prediction</h1>
                            <h1 class="font-thin text-xs mt-3">Description</h1>
                            <h1 class="font-semibold">Machine Learning</h1>
                        </div>
                    </div>
                </div>
            </div>

            {{-- education --}}
            <div id="education" class="h-fit bg-gradient-to-b from-white to-lavenderGray">
                {{-- Academic history --}}
                <div class="flex flex-row p-12">
                    <div class="w-5/6 flex flex-row">
                        <div>
                            <div class="mt-28 flex flex-row">
                                <svg class="" fill="#b8c1ec" height="173px" width="173px" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 483.013 483.013" xml:space="preserve"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M477.043,219.205L378.575,48.677c-7.974-13.802-22.683-22.292-38.607-22.292H143.041c-15.923,0-30.628,8.49-38.608,22.292 L5.971,219.205c-7.961,13.801-7.961,30.785,0,44.588l98.462,170.543c7.98,13.802,22.685,22.293,38.608,22.293h196.926 c15.925,0,30.634-8.491,38.607-22.293l98.469-170.543C485.003,249.99,485.003,233.006,477.043,219.205z"></path> </g>
                                </svg>
                                <div class="flex-col ml-1 my-auto">
                                    <h1 class="text-navy font-bold text-3xl -ml-[7.2vw] mt-5 ">2008</h1>
                                    <h1 class="text-lavenderGray font-bold text-2xl -mt-12 ">TK</h1>
                                    <h1 class="text-navy text-l -mt-2">Kuntum Mekar, Bukittingi</h1>
                                </div>
                            </div>
                        </div>
                        <div class=" flex-col -ml-16">
                            <div class="flex flex-row">
                                <svg class="" fill="#b8c1ec" height="173px" width="173px" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 483.013 483.013" xml:space="preserve"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M477.043,219.205L378.575,48.677c-7.974-13.802-22.683-22.292-38.607-22.292H143.041c-15.923,0-30.628,8.49-38.608,22.292 L5.971,219.205c-7.961,13.801-7.961,30.785,0,44.588l98.462,170.543c7.98,13.802,22.685,22.293,38.608,22.293h196.926 c15.925,0,30.634-8.491,38.607-22.293l98.469-170.543C485.003,249.99,485.003,233.006,477.043,219.205z"></path> </g>
                                </svg>
                                <div class="flex-col ml-1 my-auto">
                                    <h1 class="text-navy font-bold text-4xl -ml-[9.7vw] mt-3">2009</h1>
                                    <h1 class="text-lavenderGray font-bold text-2xl -mt-10">SD</h1>
                                    <h1 class="text-navy text-l -mt-2">Fransiskus, Bukittingi</h1>
                                </div>

                            </div>
                            <div class="-mt-12 ml-32 flex flex-row">
                                <svg class="" fill="#b8c1ec" height="173px" width="173px" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 483.013 483.013" xml:space="preserve"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M477.043,219.205L378.575,48.677c-7.974-13.802-22.683-22.292-38.607-22.292H143.041c-15.923,0-30.628,8.49-38.608,22.292 L5.971,219.205c-7.961,13.801-7.961,30.785,0,44.588l98.462,170.543c7.98,13.802,22.685,22.293,38.608,22.293h196.926 c15.925,0,30.634-8.491,38.607-22.293l98.469-170.543C485.003,249.99,485.003,233.006,477.043,219.205z"></path> </g></svg>
                                <div class="flex-col ml-1 my-auto">
                                    <h1 class="text-navy font-bold text-4xl -ml-[9.6vw] ">2015</h1>
                                    <h1 class="text-lavenderGray font-bold text-2xl -mt-11">SMP</h1>
                                    <h1 class="text-navy text-l -mt-2">Fatima 2, Sibolga</h1>
                                </div>
                            </div>
                            <div class="-mt-12 flex flex-row ml-64" >
                                <svg fill="#b8c1ec" height="173px" width="173px" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 483.013 483.013" xml:space="preserve"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M477.043,219.205L378.575,48.677c-7.974-13.802-22.683-22.292-38.607-22.292H143.041c-15.923,0-30.628,8.49-38.608,22.292 L5.971,219.205c-7.961,13.801-7.961,30.785,0,44.588l98.462,170.543c7.98,13.802,22.685,22.293,38.608,22.293h196.926 c15.925,0,30.634-8.491,38.607-22.293l98.469-170.543C485.003,249.99,485.003,233.006,477.043,219.205z"></path> </g></svg>
                                <div class="flex-col ml-1 my-auto">
                                    <h1 class="text-navy font-bold text-4xl -ml-[8.3vw] mt-4">2018</h1>
                                    <h1 class="text-lavenderGray font-bold text-2xl -mt-12">SMA</h1>
                                    <h1 class="text-navy text-l -mt-2">SMAN 3, Sibolga</h1>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="mt-28 -ml-18 flex flex-row">
                                <svg class="" fill="#b8c1ec" height="173px" width="173px" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 483.013 483.013" xml:space="preserve"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M477.043,219.205L378.575,48.677c-7.974-13.802-22.683-22.292-38.607-22.292H143.041c-15.923,0-30.628,8.49-38.608,22.292 L5.971,219.205c-7.961,13.801-7.961,30.785,0,44.588l98.462,170.543c7.98,13.802,22.685,22.293,38.608,22.293h196.926 c15.925,0,30.634-8.491,38.607-22.293l98.469-170.543C485.003,249.99,485.003,233.006,477.043,219.205z"></path> </g>
                                </svg>
                                <div class="flex-col ml-1 my-auto">
                                    <h1 class="text-navy font-bold text-3xl -ml-[7.2vw] mt-6">2021</h1>
                                    <h1 class="text-lavenderGray font-bold text-2xl -mt-12">College</h1>
                                    <h1 class="text-navy text-l -mt-2">Binus University X PPTI BCA</h1>
                                </div>
                            </div>
                        </div>    
                    </div>
                    <h1 class="font-extrabold text-5xl text-navy text-center p-16 m-auto">Academic History</h1>
                </div>
                {{-- Achievement --}}
                <div class="flex-row h-fit flex justify-center mr-20 ml-4">
                    <h1 class="font-extrabold text-5xl text-navy text-center p-16 m-auto">Achievement</h1>
                    <div class="flex flex-row h-fit">
                        <div class="mt-24 w-24 mr-2 ml-2 items-center">
                            <h1 class="text-center text-navy font-semibold text-sm">Semifinalist of Provincial Level Mathematics Competition</h1>
                            <h1 class="text-center text-navy font-normal mb-2 text-sm">Sumatera Barat</h1>
                            <div class="bg-[#E18A8A] rounded-full p-8 text-center font-semibold text-navy">2014</div>
                            <svg class="-mb-0 h-fit m-auto" width="10" height="350" viewBox="0 0 10 350" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect width="10" height="350" fill="#E18A8A"/>
                            </svg>
                        </div>
                        <div class=" mt-24 w-24 mr-2 ml-2 items-center ">
                            <h1 class="text-center text-navy font-semibold text-sm">1st Place in City Level Environmental Knowledge Competition</h1>
                            <h1 class="text-center text-navy font-normal mb-2 text-sm">Sibolga</h1>
                            <div class="bg-[#968AE1] rounded-full p-8 text-center font-semibold text-navy">2016</div>
                            <svg class=" h-fit m-auto" width="10" height="370" viewBox="0 0 10 370" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect width="10" height="370" fill="#968AE1"/>
                                </svg>
                                
                        </div>
                        <div class=" mt-24 w-24 mr-2 ml-2 items-center">
                            <h1 class="text-center text-navy font-semibold text-sm">Rank 2 Indonesian Language Debate at City Level</h1>
                            <h1 class="text-center text-navy font-normal mb-2 text-sm">Sibolga</h1>
                            <div class="bg-[#968AE1] rounded-full p-8 text-center font-semibold text-navy">2016</div>
                            <svg class=" h-fit m-auto" width="10" height="370" viewBox="0 0 10 370" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect width="10" height="370" fill="#968AE1"/>
                            </svg>   
                        </div>
                        <div class=" mt-24 w-24 mr-2 ml-2 items-center ">
                            <h1 class="text-center text-navy font-semibold text-sm">Rank 3 Bible Savvy at City Level</h1>
                            <h1 class="text-center text-navy font-normal mb-2 text-sm">Sibolga</h1>
                            <div class="bg-[#21D4D4] rounded-full p-8 text-center font-semibold text-navy">2017</div>
                            <svg class=" h-fit m-auto" width="10" height="410" viewBox="0 0 10 410" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect width="10" height="410" fill="#21D4D4"/>
                            </svg>
                                   
                        </div>
                        <div class=" mt-24 w-24 mr-2 ml-2 items-center ">
                            <h1 class="text-center text-navy font-semibold text-sm">Rank 4 Math Olympiad at City Level</h1>
                            <h1 class="text-center text-navy font-normal mb-2 text-sm">Sibolga</h1>
                            <div class="bg-[#59B15D] rounded-full p-8 text-center font-semibold text-navy">2018</div>
                            <svg class=" h-fit m-auto" width="10" height="410" viewBox="0 0 10 410" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect width="10" height="410" fill="#59B15D"/>
                                </svg>
                                
                                   
                        </div>
                        <div class=" mt-24 w-24 mr-2 ml-2 items-center ">
                            <h1 class="text-center text-navy font-semibold text-sm">Rank 5 Computer Olympiad at City Level</h1>
                            <h1 class="text-center text-navy font-normal mb-2 text-sm">Sibolga</h1>
                            <div class="bg-[#D3CB1E] rounded-full p-8 text-center font-semibold text-navy">2020</div>
                            <svg class=" h-fit m-auto" width="10" height="390" viewBox="0 0 10 390" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect width="10" height="390" fill="#B1AD59"/>
                            </svg>                                   
                        </div>
                        <div class=" mt-24 w-24 mr-2 ml-2 items-center ">
                            <h1 class="text-center text-navy font-semibold text-sm">Rank 4 3x3 Basketball Tournament at City Level</h1>
                            <h1 class="text-center text-navy font-normal mb-2 text-sm">Sibolga</h1>
                            <div class="bg-[#D3CB1E] rounded-full p-8 text-center font-semibold text-navy">2020</div>
                            <svg class=" h-fit m-auto" width="10" height="390" viewBox="0 0 10 390" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect width="10" height="390" fill="#B1AD59"/>
                            </svg>    
                        </div>
                        <div class=" mt-24 w-24 mr-2 ml-2 items-center ">
                            <h1 class="text-center text-navy font-semibold text-sm">Top 12 Ideas YNFEST PPA/PPTI</h1>
                            <h1 class="text-center text-navy font-normal mb-2 text-sm">Bogor</h1>
                            <div class="bg-[#D441AB] rounded-full p-8 text-center font-semibold text-navy">2023</div>
                            <svg class=" h-fit m-auto" width="10" height="410" viewBox="0 0 10 410" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect width="10" height="410" fill="#D441AB"/>
                            </svg>
                        </div>
                    </div>
                </div>
            </div>

            {{-- reach --}}
            <div id="reach" class="h-96 bg-green-500 ">
                
            </div>

        </section>
</body>
</html>