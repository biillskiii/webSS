@extends('navbar-footer')
@section('layout')
@section('title', 'home')
@include('header')
@push('section-scripts')
    <link rel="stylesheet" type="text/css" href="{{asset('css/homeLayout.css') }}">
@endpush

<div class="home">
    <!--  section-->
    <div class="containerTentang" >
        {{-- NANTI DIGANTI TAMPILAN VIDEO --}}
        <aside>
            <img src={{asset('picture/about.png')}} class="d-block mt-6" alt="">
        </aside>

        <div class="desc mt-5">
            <div class="tentang">
                <p class="judulTentang" data-aos="fade-down">TENTANG</p>
                <div class="posLogoQM" data-aos="fade-down" >
                    <div class="subLogoQM" ><h1>?</h1></div>
                </div>
            </div>
            <p class="deskripsiTentang" data-aos="fade-up" >ScreenShot adalah badan semi otonom dibawah naungan Hima Ilmu Komputer Fakultas Matematika & Ilmu Pengetahuan Alam Universitas Negeri Semarang, yang berfokus pada bidang Multimedia & Jurnalistik.</p>
        </div>
    </div>

    <!-- tujuan section-->
    <div class="judul" data-aos="fade-up">
        <p class="judultujuan" data-aos="fade-down">TUJUAN</p>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 128 128" fill="none">
            <rect x="63.789" y="0.783722" width="89.5042" height="89.5042" transform="rotate(45 63.789 0.783722)" fill="#502BD8"/>
            <path fill-rule="evenodd" clip-rule="evenodd" d="M72.6508 50.0728H45.0896V42.8062H85.0556V82.7684H77.7891V55.211L47.6606 85.3394L42.5224 80.2012L72.6508 50.0728Z" fill="#222222"/>
        </svg>
    </div>
    <div class="tujuan">
        <div class="kartu" data-aos="fade-up">
            <div class="cardlist">
                <img src="{{asset('picture/tujuan.png')}}" alt="">
                <p class="judul">SHARING EXPERIENCE</p>
                <p>Sebagai media berbagi pengalaman untuk civitas akademika baik mahasiswa,
                    dosen maupun cendekiawan pada umumnya dalam
                    menghadapi fenomena.
                </p>
            </div>
            <div class="cardlist">
                <img src="{{asset('picture/praktek.png')}}" alt="">
                <p class="judul">EXPRESSING IDEAS</p>
                <p>Sebagai media penyampai ide dan gagasan yang berkaitan dengan pikiran
                    yang berkembang di masyarakat baik didalam maupun
                    diluar kampus.
                </p>
            </div>
            <div class="cardlist">
                <img src="{{asset('picture/Skill.png')}}" alt="">
                <p class="judul">EMPOWERING SKILLS</p>
                <p>Sebagai media penyalur aspirasi minat dan bakat
                    mahasiswa dalam rangka ikut serta memperluas wawasan dalam bidang keilmuan.
                </p>
            </div>
        </div>
    </div>
    <br><br>

    <!-- divisi section -->
    <div class="divisi" data-aos="fade-down">
        <p class="juduldivisi">DIVISI SCREENSHOT<svg xmlns="http://www.w3.org/2000/svg" width="72" height="73" viewBox="0 0 72 73" fill="none">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M42.2461 0.4375H29.8834V21.45L15.0254 6.59197L6.28366 15.3336L21.1417 30.1917H0.129272V42.5543H21.1417L6.28366 57.4124L15.0254 66.1541L29.8834 51.2961V72.3085H42.2461V51.2961L57.1041 66.1541L65.8458 57.4124L50.9878 42.5543H72.0003V30.1917H50.9878L65.8458 15.3336L57.1041 6.59197L42.2461 21.45V0.4375Z" fill="#AA55D2"/>
            </svg>
        </p>
        <div class="divisisection">
            <div class="listdivisi" data-aos="fade-right">
                <ul>
                    <li >
                        <div class="divis">
                            <svg xmlns="http://www.w3.org/2000/svg" width="64" height="65" viewBox="0 0 64 65" fill="none">
                                <path d="M58.6669 45.428H45.3336V58.7614H58.6669V45.428Z" fill="#F25E4A"/>
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M45.3336 5.42804H5.33356V58.7614H45.3336V5.42804ZM36.0002 16.0947H16.0002V26.7614H36.0002V16.0947Z" fill="#F25E4A"/>
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M58.6669 47.428H45.3336V43.428H58.6669V47.428Z" fill="#222222"/>
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M3.33356 3.42804H37.3336V7.42804H7.33356V56.7614H37.3336V60.7614H3.33356V3.42804Z" fill="#222222"/>
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M14.0002 14.0947H38.0002V28.7614H14.0002V14.0947ZM18.0002 18.0947V24.7614H34.0002V18.0947H18.0002Z" fill="#222222"/>
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M52.0002 2.59961L60.6669 11.2663V60.7614H43.3336V11.2663L52.0002 2.59961ZM47.3336 12.9231V56.7614H56.6669V12.9231L52.0002 8.25646L47.3336 12.9231Z" fill="#222222"/>
                            </svg>
                            <p class="judul">PENGURUS HARIAN</p>
                            <button id="ph" class="btn btn-light">
                                <div class="window">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="80" height="81" viewBox="0 0 80 81" fill="none">
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M67.1266 41.7829H8.17871V38.4066H67.1264L52.0017 23.2819L54.389 20.8945L73.5894 40.0949L54.389 59.2952L52.0017 56.9078L67.1266 41.7829Z" fill="#222222"/>
                                    </svg>
                                </div>
                                <div class="hp">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="21" height="21" viewBox="0 0 21 21" fill="none">
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M3.59863 7.59449L4.48252 6.7106L10.5001 12.7282L16.5178 6.7106L17.4017 7.59449L10.5001 14.496L3.59863 7.59449Z" fill="#222222"/>
                                      </svg>
                                </div>
                            </button>
                        </div>
                        <div class="card-drop">
                            <hr class="ph-drop" />
                            <div id="ph-card">
                                <div class="kartu">
                                    <img src="{{asset('picture/image 9.png')}}" class="card-img-top" alt="...">
                                    <div class="card-body">
                                    <h5 style="font-weight: 700" class="kartu-judul">PENGURUS HARIAN</h5>
                                    <p class="kartu-text">Bertanggung jawab atas arahan dan pengelolaan keseluruhan organisasi, mengelola dan mendokumentasikan administrasi, serta mengelola keuangan organisasi.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>


                    <li>
                        <div class="divis">
                            <svg xmlns="http://www.w3.org/2000/svg" width="64" height="65" viewBox="0 0 64 65" fill="none">
                                <path d="M18.6669 5.09473H45.3336V29.0947C45.3336 32.6309 43.9288 36.0223 41.4284 38.5228C38.9279 41.0233 35.5365 42.4281 32.0003 42.4281C28.464 42.4281 25.0727 41.0233 22.5722 38.5228C20.0717 36.0223 18.6669 32.6309 18.6669 29.0947V5.09473Z" fill="#F2AF4A"/>
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M16.6669 3.09473H47.3336V29.0947C47.3336 33.1614 45.7181 37.0615 42.8426 39.937C39.967 42.8126 36.0669 44.4281 32.0003 44.4281C27.9336 44.4281 24.0335 42.8126 21.158 39.937C18.2824 37.0615 16.6669 33.1614 16.6669 29.0947V3.09473ZM20.6669 7.09473V29.0947C20.6669 32.1005 21.861 34.9832 23.9864 37.1086C26.1118 39.234 28.9945 40.4281 32.0003 40.4281C35.0061 40.4281 37.8887 39.234 40.0141 37.1086C42.1396 34.9832 43.3336 32.1005 43.3336 29.0947V7.09473H20.6669Z" fill="#222222"/>
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M7.97938 39.0445C6.67275 35.89 6.00024 32.5091 6.00024 29.0947H10.0002C10.0002 31.9838 10.5693 34.8446 11.6749 37.5138C12.7805 40.1829 14.401 42.6082 16.4439 44.6511C18.4868 46.694 20.912 48.3145 23.5812 49.4201C26.2504 50.5257 29.1112 51.0947 32.0002 51.0947C34.8893 51.0947 37.7501 50.5257 40.4193 49.4201C43.0884 48.3145 45.5137 46.694 47.5566 44.6511C49.5995 42.6082 51.22 40.1829 52.3256 37.5138C53.4312 34.8446 54.0002 31.9838 54.0002 29.0947H58.0002C58.0002 32.5091 57.3277 35.89 56.0211 39.0445C54.7145 42.199 52.7993 45.0652 50.385 47.4795C47.9707 49.8938 45.1045 51.809 41.95 53.1156C38.7955 54.4222 35.4146 55.0947 32.0002 55.0947C28.5859 55.0947 25.2049 54.4222 22.0505 53.1156C18.896 51.809 16.0298 49.8938 13.6155 47.4795C11.2011 45.0652 9.286 42.199 7.97938 39.0445Z" fill="#222222"/>
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M30.0002 61.0947V53.0947H34.0002V61.0947H30.0002Z" fill="#222222"/>
                            </svg>
                            <p class="judul">JURNALISTIK</p>
                            <button id="jurnal" class="btn btn-light"><div class="window">
                                <svg xmlns="http://www.w3.org/2000/svg" width="80" height="81" viewBox="0 0 80 81" fill="none">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M67.1266 41.7829H8.17871V38.4066H67.1264L52.0017 23.2819L54.389 20.8945L73.5894 40.0949L54.389 59.2952L52.0017 56.9078L67.1266 41.7829Z" fill="#222222"/>
                                </svg>
                            </div>
                            <div class="hp">
                                <svg xmlns="http://www.w3.org/2000/svg" width="21" height="21" viewBox="0 0 21 21" fill="none">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M3.59863 7.59449L4.48252 6.7106L10.5001 12.7282L16.5178 6.7106L17.4017 7.59449L10.5001 14.496L3.59863 7.59449Z" fill="#222222"/>
                                  </svg>
                            </div></button>
                        </div>
                        <div class="card-drop">
                            <hr />
                            <div id="jurnal-card">
                                <div class="kartu">
                                    <img src="{{asset('picture/Jurnalistik/jurnal.jpg')}}" class="card-img-top" alt="...">
                                    <div class="card-body">
                                      <h5 style="font-weight: 700" class="kartu-judul">JURNALISTIK</h5>
                                      <p class="kartu-text">Bertanggung jawab atas produksi konten berita, penyusunan laporan,
                                        dan pengelolaan aspek jurnalistik dalam berbagai platform media. Divisi ini memiliki peran penting
                                        dalam menghasilkan konten berita yang akurat, relevan, dan menarik bagi audiens.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>


                    <li>
                        <div class="divis">
                            <svg xmlns="http://www.w3.org/2000/svg" width="64" height="65" viewBox="0 0 64 65" fill="none">
                                <path d="M16.0002 58.7614V37.4281H48.0002V58.7614H16.0002Z" fill="#44ED9C"/>
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M11.976 4.49379C13.6745 3.79022 15.4951 3.4281 17.3336 3.4281C19.1721 3.4281 20.9926 3.79022 22.6911 4.49379C24.3897 5.19735 25.933 6.22859 27.2331 7.52861C28.5331 8.82862 29.5643 10.372 30.2679 12.0705C30.9714 13.7691 31.3336 15.5896 31.3336 17.4281C31.3336 19.2666 30.9714 21.0871 30.2679 22.7857C29.5643 24.4842 28.5331 26.0276 27.2331 27.3276C25.933 28.6276 24.3897 29.6588 22.6911 30.3624C20.9926 31.066 19.1721 31.4281 17.3336 31.4281C15.4951 31.4281 13.6745 31.066 11.976 30.3624C10.2774 29.6588 8.73408 28.6276 7.43406 27.3276C6.13404 26.0276 5.10281 24.4842 4.39924 22.7857C3.69568 21.0871 3.33356 19.2666 3.33356 17.4281C3.33356 15.5896 3.69568 13.7691 4.39924 12.0705C5.10281 10.372 6.13404 8.82863 7.43406 7.52861C8.73408 6.22859 10.2774 5.19735 11.976 4.49379ZM17.3336 7.4281C16.0203 7.4281 14.72 7.68676 13.5067 8.18931C12.2935 8.69185 11.1911 9.42845 10.2625 10.357C9.3339 11.2856 8.59731 12.388 8.09476 13.6013C7.59222 14.8145 7.33356 16.1149 7.33356 17.4281C7.33356 18.7413 7.59222 20.0417 8.09476 21.2549C8.59731 22.4682 9.3339 23.5706 10.2625 24.4992C11.1911 25.4278 12.2935 26.1643 13.5067 26.6669C14.72 27.1694 16.0203 27.4281 17.3336 27.4281C18.6468 27.4281 19.9471 27.1694 21.1604 26.6669C22.3736 26.1644 23.476 25.4278 24.4046 24.4992C25.3332 23.5706 26.0698 22.4682 26.5724 21.2549C27.0749 20.0417 27.3336 18.7413 27.3336 17.4281C27.3336 16.1149 27.0749 14.8145 26.5724 13.6013C26.0698 12.388 25.3332 11.2856 24.4046 10.357C23.476 9.42845 22.3736 8.69185 21.1604 8.18931C19.9471 7.68676 18.6468 7.4281 17.3336 7.4281Z" fill="#222222"/>
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M36.9292 14.357C38.8045 12.4817 41.3481 11.4281 44.0002 11.4281C46.6524 11.4281 49.1959 12.4817 51.0713 14.357C52.9467 16.2324 54.0002 18.7759 54.0002 21.4281C54.0002 24.0803 52.9467 26.6238 51.0713 28.4992C49.1959 30.3745 46.6524 31.4281 44.0002 31.4281C41.3481 31.4281 38.8045 30.3745 36.9292 28.4992C35.0538 26.6238 34.0002 24.0803 34.0002 21.4281C34.0002 18.7759 35.0538 16.2324 36.9292 14.357ZM44.0002 15.4281C42.4089 15.4281 40.8828 16.0602 39.7576 17.1855C38.6324 18.3107 38.0002 19.8368 38.0002 21.4281C38.0002 23.0194 38.6324 24.5455 39.7576 25.6707C40.8828 26.796 42.4089 27.4281 44.0002 27.4281C45.5915 27.4281 47.1177 26.796 48.2429 25.6707C49.3681 24.5455 50.0002 23.0194 50.0002 21.4281C50.0002 19.8368 49.3681 18.3107 48.2429 17.1855C47.1177 16.0602 45.5915 15.4281 44.0002 15.4281Z" fill="#222222"/>
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M14.0002 35.4281H50.0002V60.7614H14.0002V35.4281ZM18.0002 39.4281V56.7614H46.0002V39.4281H18.0002Z" fill="#222222"/>
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M56.6669 56.0947V40.0947H60.6669V56.0947H56.6669Z" fill="#222222"/>
                            </svg>
                            <p class="judul">SINEMATOGRAFI</p>
                            <button id="sinema" class="btn btn-light"><div class="window">
                                <svg xmlns="http://www.w3.org/2000/svg" width="80" height="81" viewBox="0 0 80 81" fill="none">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M67.1266 41.7829H8.17871V38.4066H67.1264L52.0017 23.2819L54.389 20.8945L73.5894 40.0949L54.389 59.2952L52.0017 56.9078L67.1266 41.7829Z" fill="#222222"/>
                                </svg>
                            </div>
                            <div class="hp">
                                <svg xmlns="http://www.w3.org/2000/svg" width="21" height="21" viewBox="0 0 21 21" fill="none">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M3.59863 7.59449L4.48252 6.7106L10.5001 12.7282L16.5178 6.7106L17.4017 7.59449L10.5001 14.496L3.59863 7.59449Z" fill="#222222"/>
                                  </svg>
                            </div></button>
                        </div>
                        <div class="card-drop">
                            <hr />
                            <div id="sinema-card">
                                <div class="kartu">
                                    <img src="{{asset('picture/Sinema/sinema.jpg')}}" class="card-img-top" alt="...">
                                    <div class="card-body">
                                      <h5 style="font-weight: 700" class="kartu-judul">SINEMATOGRAFI</h5>
                                      <p class="kartu-text">Bertanggung jawab khusus dalam menghasilkan kualitas visual yang menarik
                                        dan mengesankan dalam karya sinematografi. Berfokus pada pembuatan film, produksi video,
                                        dan pengelolaan aspek visual dalam produksi audiovisual.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>

                    <li>
                        <div class="divis">
                            <svg xmlns="http://www.w3.org/2000/svg" width="64" height="65" viewBox="0 0 64 65" fill="none">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M5.33356 22.7614V52.0947H22.6669H41.3336H58.6669V22.7614H49.3336L42.6669 12.0947H21.3336L14.6669 22.7614H5.33356ZM23.3773 38.3331C22.9083 37.2007 22.6669 35.9871 22.6669 34.7614C22.6669 33.5357 22.9083 32.3221 23.3773 31.1897C23.8464 30.0573 24.5339 29.0284 25.4006 28.1617C26.2672 27.2951 27.2961 26.6076 28.4285 26.1385C29.5609 25.6695 30.7746 25.4281 32.0002 25.4281C33.2259 25.4281 34.4396 25.6695 35.5719 26.1385C36.7043 26.6076 37.7332 27.2951 38.5999 28.1617C39.4666 29.0284 40.1541 30.0573 40.6231 31.1897C41.0921 32.3221 41.3336 33.5357 41.3336 34.7614C41.3336 35.9871 41.0921 37.2007 40.6231 38.3331C40.1541 39.4655 39.4666 40.4944 38.5999 41.3611C37.7332 42.2277 36.7043 42.9152 35.5719 43.3843C34.4396 43.8533 33.2259 44.0947 32.0002 44.0947C30.7746 44.0947 29.5609 43.8533 28.4285 43.3843C27.2961 42.9152 26.2672 42.2277 25.4006 41.3611C24.5339 40.4944 23.8464 39.4655 23.3773 38.3331Z" fill="#37D7FF"/>
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M20.2251 10.0947H43.7754L50.4421 20.7614H60.6669V54.0947H3.33356V20.7614H13.5584L20.2251 10.0947ZM22.4421 14.0947L15.7754 24.7614H7.33356V50.0947H56.6669V24.7614H48.2251L41.5584 14.0947H22.4421Z" fill="#222222"/>
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M27.6631 24.2908C29.0381 23.7212 30.5119 23.4281 32.0002 23.4281C33.4885 23.4281 34.9623 23.7212 36.3373 24.2908C37.7123 24.8604 38.9617 25.6952 40.0141 26.7476C41.0665 27.8 41.9013 29.0493 42.4708 30.4244C43.0404 31.7994 43.3335 33.2731 43.3335 34.7614C43.3335 36.2497 43.0404 37.7235 42.4708 39.0985C41.9013 40.4735 41.0665 41.7229 40.0141 42.7753C38.9617 43.8277 37.7123 44.6625 36.3373 45.2321C34.9623 45.8016 33.4885 46.0948 32.0002 46.0948C30.5119 46.0948 29.0381 45.8016 27.6631 45.2321C26.2881 44.6625 25.0387 43.8277 23.9863 42.7753C22.9339 41.7229 22.0991 40.4735 21.5296 39.0985C20.96 37.7235 20.6669 36.2497 20.6669 34.7614C20.6669 33.2731 20.96 31.7994 21.5296 30.4244C22.0991 29.0493 22.9339 27.8 23.9863 26.7476C25.0387 25.6952 26.2881 24.8604 27.6631 24.2908ZM32.0002 27.4281C31.0372 27.4281 30.0836 27.6178 29.1939 27.9863C28.3041 28.3549 27.4957 28.895 26.8148 29.576C26.1338 30.2569 25.5936 31.0654 25.2251 31.9551C24.8566 32.8448 24.6669 33.7984 24.6669 34.7614C24.6669 35.7245 24.8566 36.6781 25.2251 37.5678C25.5936 38.4575 26.1338 39.2659 26.8148 39.9469C27.4957 40.6278 28.3041 41.168 29.1939 41.5366C30.0836 41.9051 31.0372 42.0948 32.0002 42.0948C32.9632 42.0948 33.9168 41.9051 34.8065 41.5366C35.6963 41.168 36.5047 40.6278 37.1857 39.9469C37.8666 39.2659 38.4068 38.4575 38.7753 37.5678C39.1439 36.6781 39.3335 35.7245 39.3335 34.7614C39.3335 33.7984 39.1439 32.8448 38.7753 31.9551C38.4068 31.0654 37.8666 30.2569 37.1857 29.576C36.5047 28.895 35.6963 28.3549 34.8065 27.9863C33.9168 27.6178 32.9632 27.4281 32.0002 27.4281Z" fill="#222222"/>
                            </svg>
                            <p class="judul">FOTOGRAFI</p>
                            <button id="foto" class="btn btn-light"><div class="window">
                                <svg xmlns="http://www.w3.org/2000/svg" width="80" height="81" viewBox="0 0 80 81" fill="none">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M67.1266 41.7829H8.17871V38.4066H67.1264L52.0017 23.2819L54.389 20.8945L73.5894 40.0949L54.389 59.2952L52.0017 56.9078L67.1266 41.7829Z" fill="#222222"/>
                                </svg>
                            </div>
                            <div class="hp">
                                <svg xmlns="http://www.w3.org/2000/svg" width="21" height="21" viewBox="0 0 21 21" fill="none">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M3.59863 7.59449L4.48252 6.7106L10.5001 12.7282L16.5178 6.7106L17.4017 7.59449L10.5001 14.496L3.59863 7.59449Z" fill="#222222"/>
                                  </svg>
                            </div></button>
                        </div>
                        <div class="card-drop">
                            <hr />
                            <div id="foto-card">
                                <div class="kartu">
                                    <img src="{{asset('picture/Fotografi/foto.jpg')}}" class="card-img-top" alt="...">
                                    <div class="card-body">
                                      <h5 style="font-weight: 700" class="kartu-judul">FOTOGRAFI</h5>
                                      <p class="kartu-text">Bertanggung jawab khusus dalam mengelola dan menciptakan karya-karya fotografi
                                        yang berkaitan dengan kegiatan organisasi. Divisi ini berperan penting dalam menghasilkan gambar dan
                                        dokumentasi yang menarik, berkualitas tinggi, dan relevan untuk keperluan komunikasi dan pemasaran organisasi.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>

                    <li>
                        <div class="divis">
                            <svg xmlns="http://www.w3.org/2000/svg" width="65" height="65" viewBox="0 0 65 65" fill="none">
                                <path d="M11.0002 24.0947L32.3335 18.7614L45.6669 32.0947L40.3335 53.428L5.66687 58.7614L11.0002 24.0947Z" fill="#726FEC"/>
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M32.7937 17.1001L47.3281 31.6345L41.547 54.7589L3.87329 60.5549L9.66924 22.8812L32.7937 17.1001ZM12.3312 25.308L7.46046 56.9677L39.1201 52.097L44.0057 32.5548L31.8734 20.4225L12.3312 25.308Z" fill="#222222"/>
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M38.5893 2.89575L61.5325 25.8389L45.3707 33.9198L30.5084 19.0575L38.5893 2.89575ZM39.4112 7.96025L34.1587 18.4652L45.9631 30.2695L56.468 25.0171L39.4112 7.96025Z" fill="#222222"/>
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M28.6062 43.822L20.6062 35.822L22.7275 33.7007L30.7275 41.7007L28.6062 43.822Z" fill="#222222"/>
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M26.7275 39.822L6.72752 59.822L4.6062 57.7007L24.6062 37.7007L26.7275 39.822Z" fill="#222222"/>
                            </svg>
                            <p class="judul">DESAIN & ANIMASI</p>
                            <button id="dna" class="btn btn-light"><div class="window">
                                <svg xmlns="http://www.w3.org/2000/svg" width="80" height="81" viewBox="0 0 80 81" fill="none">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M67.1266 41.7829H8.17871V38.4066H67.1264L52.0017 23.2819L54.389 20.8945L73.5894 40.0949L54.389 59.2952L52.0017 56.9078L67.1266 41.7829Z" fill="#222222"/>
                                </svg>
                            </div>
                            <div class="hp">
                                <svg xmlns="http://www.w3.org/2000/svg" width="21" height="21" viewBox="0 0 21 21" fill="none">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M3.59863 7.59449L4.48252 6.7106L10.5001 12.7282L16.5178 6.7106L17.4017 7.59449L10.5001 14.496L3.59863 7.59449Z" fill="#222222"/>
                                  </svg>
                            </div></button>
                        </div>
                        <div class="card-drop">
                            <hr />
                            <div id="dna-card">
                                <div class="kartu">
                                    <img src="{{asset('picture/image 9.png')}}" class="card-img-top" alt="...">
                                    <div class="card-body">
                                      <h5 style="font-weight: 700" class="kartu-judul">DESAIN & ANIMASI</h5>
                                      <p class="kartu-text">Divisi ini memiliki tanggung jawab utama dalam menciptakan konten visual
                                        yang menarik, kreatif, dan berkesan. Berfokus pada pengembangan konsep desain visual dan pembuatan
                                        animasi dalam berbagai media, seperti gambar, grafis, animasi 2D/3D, dan efek visual.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>

@endsection
