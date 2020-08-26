<!-- menghubungkan template tama -->
@extends('template')

<!-- isi bagian judul halaman -->
<!-- cara penulisan isi section yang pendek -->
<!-- @section('judul_halaman', 'halaman Beranda')
 -->

<!-- isi bagian konten -->
<!-- cara penulisan isi section yang panjang -->
@section('konten')
            <div class=" d-flex align-items-center highlight" id="utama">
                <div class="mx-auto text-center">
                    <center>
                        <table class="align-items-center">
                        <tr>
                            <td><img class="img-responsive" src="img/2.jpg"></td>
                            <td><h2 class="text-white mb-4 text-left">Kaca yang kuat <br>dan desain berbahan <br>aluminium</h2></td>
                        </tr>
                    </table>
                    </center>                
                </div>
            </div>
            <div class=" d-flex align-items-center highlight" id="utama">
                <div class="mx-auto text-center">
                    <center>
                        <table class="align-items-center">
                        <tr>
                            <td><h2 class="text-white mb-4 text-left">Layar Retina HD <br>4,7 Inch <br>Yang cemerlang</h2></td>
                            <td><img class="img-responsive" src="img/3.png"></td>
                        </tr>
                    </table>
                    </center>                
                </div>
            </div>
    <section class="about-section text-center" id="about">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 thumbnail">
                        <table>
                        <tr>
                            <td><img class="img-fluid" src="../img/A13.png" style="height:25%; width:10%;" align="left"></td>
                        </tr>
                        <tr>   
                           <td><h1 class="text-white mb-4 text-left">Senjata Rahasianya ?<br>Chip milik iPhone 11 Pro</h1>
                        <p class="text-white-50 text-left">
                            Kami membekali iPhone SE dengan otak iPhone 11 Pro. A13 Bionic adalah chip tercepat yang pernah ada di ponsel pintar mana pun. Jadi segalanya terasa lancar, baik meluncurkan aplikasi, bermain game terbaru, atau menjelajahi cara baru untuk bekerja dan bermain dengan augmented reality.
                        </p></td>
                        </tr>
                        </table>
                    </div>
                </div>
                <img class="img-fluid" src="assets/img/ipad.png" alt="" />
            </div>
        </section>
        <!-- Projects-->
        <section class="projects-section bg-light" id="projects">
            <div class="container">
                <!-- Featured Project Row-->
                <div class="row align-items-center no-gutters mb-4 mb-lg-5">
                    <div class="col-xl-8 col-lg-7"><img class="img-fluid mb-3 mb-lg-0" src="img/ph-1.png" alt="" /></div>
                    <div class="col-xl-4 col-lg-5">
                        <div class="featured-text text-center text-lg-left">
                            <p class="text-black-50 mb-0">Sistem kamera canggih dengan A13 Bionic menghadirkan mode Potret, yang memburamkan latar belakang secara artistik, sehingga subjek foto menjadi fokusnya, bahkan saat Anda selfie.</p>
                        </div>
                    </div>
                </div>
                
                <div class="mx-xl-auto">
                <h3 class="text-black mb-4 text-center"><b>Pencahayaan Potret.</b> Pilih dari enam efek kualitas studio, lalu atur intensitas cahaya agar subjek Anda mendapatkan pencahayaan terbaik.  </h3> 
                </div>   

                <!-- Project One Row-->
                <div class="row justify-content-center no-gutters mb-5 mb-lg-0">
                    <div class="col-lg-6"><center><img class="img-fluid justify-content-center" src="img/ph-2.png" alt=""/></center></div>
                    <div class="col-lg-6">
                        <div class="bg-black text-center h-100 project">
                            <div class="d-flex h-100">
                                <div class="project-text w-100 my-auto text-center text-lg-left">
                                    <h4 class="text-white">Cahaya Studio</h4>
                                    <hr class="d-none d-lg-block mb-0 ml-0" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Project Two Row-->
                <div class="row justify-content-center no-gutters">
                    <div class="col-lg-6"><center><img class="img-fluid" src="img/ph-3.png" alt="" /></center></div>
                    <div class="col-lg-6 order-lg-first">
                        <div class="bg-black text-center h-100 project">
                            <div class="d-flex h-100">
                                <div class="project-text w-100 my-auto text-center text-lg-right">
                                    <h4 class="text-white">Cahaya Alami</h4>
                                    <hr class="d-none d-lg-block mb-0 mr-0" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Project One Row-->
                <div class="row justify-content-center no-gutters mb-5 mb-lg-0">
                    <div class="col-lg-6"><center><img class="img-fluid" src="img/ph-4.png" alt="" /></center></div>
                    <div class="col-lg-6">
                        <div class="bg-black text-center h-100 project">
                            <div class="d-flex h-100">
                                <div class="project-text w-100 my-auto text-center text-lg-left">
                                    <h4 class="text-white">Cahaya Kontur</h4>
                                    <hr class="d-none d-lg-block mb-0 ml-0" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Project Two Row-->
                <div class="row justify-content-center no-gutters">
                    <div class="col-lg-6"><center><img class="img-fluid" src="img/ph-5.png" alt="" /></center></div>
                    <div class="col-lg-6 order-lg-first">
                        <div class="bg-black text-center h-100 project">
                            <div class="d-flex h-100">
                                <div class="project-text w-100 my-auto text-center text-lg-right">
                                    <h4 class="text-white">Cahaya Panggung Mono</h4>
                                    <hr class="d-none d-lg-block mb-0 mr-0" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Project One Row-->
                <div class="row justify-content-center no-gutters mb-5 mb-lg-0">
                    <div class="col-lg-6"><center><img class="img-fluid" src="img/ph-6.png" alt="" /></center></div>
                    <div class="col-lg-6">
                        <div class="bg-black text-center h-100 project">
                            <div class="d-flex h-100">
                                <div class="project-text w-100 my-auto text-center text-lg-left">
                                    <h4 class="text-white">Cahaya Panggung</h4>
                                    <hr class="d-none d-lg-block mb-0 ml-0" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Project Two Row-->
                <div class="row justify-content-center no-gutters">
                    <div class="col-lg-6"><img class="img-fluid" src="img/ph-7.png" alt="" /></div>
                    <div class="col-lg-6 order-lg-first">
                        <div class="bg-black text-center h-100 project">
                            <div class="d-flex h-100">
                                <div class="project-text w-100 my-auto text-center text-lg-right">
                                    <h4 class="text-white">Cahaya High-Key Mono</h4>
                                    <hr class="d-none d-lg-block mb-0 mr-0" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Project One Row-->
                <div class="row justify-content-center no-gutters mb-5 mb-lg-0">
                    <div class="col-lg-6"><center><img class="img-fluid" src="img/ph-6.png" alt="" /></center></div>
                    <div class="col-lg-6">
                        <div class="bg-black text-center h-100 project">
                            <div class="d-flex h-100">
                                <div class="project-text w-100 my-auto text-center text-lg-left">
                                    <h4 class="text-white">Cahaya Panggung</h4>
                                    <hr class="d-none d-lg-block mb-0 ml-0" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
@endsection