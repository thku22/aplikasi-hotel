<!-- Contact Section-->
<section class="page-section" id="contact">
    
            <div class="container">
                <!-- Contact Section Heading-->
                <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">CHECK IN</h2>
                
                <!-- Icon Divider-->
                <!-- Contact Section Form-->
                <div class="row justify-content-center">
                    <div class="col-lg-8 col-xl-7">
                    
                        <!-- * * * * * * * * * * * * * * *-->
                        <!-- * * SB Forms Contact Form * *-->
                        <!-- * * * * * * * * * * * * * * *-->
                        <!-- This form is pre-integrated with SB Forms.-->
                        <!-- To make this form functional, sign up at-->
                        <!-- https://startbootstrap.com/solution/contact-forms-->
                        <!-- to get an API token!-->
                        <form  action="<?= base_url("index.php/konsumen/proses_konsumen")?>" method="POST">
                            <!-- Name input-->
                            <div class="form-floating mb-3">
                                <input class="form-control" id="" type="text" placeholder="Enter your nama_depan..."  name="nama_depan" data-sb-validations="required" />
                                <label for="nama_depan">NAMA DEPAN</label>
                                <div class="invalid-feedback" data-sb-feedback="nama_depan:required">A nama_depan is required.</div>
                            </div>
                            <!-- Email address input-->
                            <div class="form-floating mb-3">
                                <input class="form-control" id="" name="nama_tengah" type="nama_tengah" placeholder="nama_tengah" data-sb-validations="required,nama_tengah" />
                                <label for="nama_tengah">NAMA TENGAH</label>
                                <div class="invalid-feedback" data-sb-feedback="nama_tengah:required">An nama_tengah is required.</div>
                            </div>
                            <!-- Phone number input-->
                            <div class="form-floating mb-3">
                                <input class="form-control" id="" name="nama_belakang" type="tel" placeholder="(123) 456-7890" data-sb-validations="required" />
                                <label for="nama_belakang">NAMA BELAKANG</label>
                                <div class="invalid-feedback" data-sb-feedback="nama_belakang:required">A nama_belakang number is required.</div>
                            </div>
                            <!-- Message input-->
                            <div class="form-floating mb-3">
                                <textarea class="form-control" id="" name="alamat" type="text" placeholder="Enter your alamat here..." style="height: 10rem" data-sb-validations="required"></textarea>
                                <label for="alamat">ALAMAT</label>
                                <div class="invalid-feedback" data-sb-feedback="alamat:required">A alamat is required.</div>
                            </div>
                            <div class="form-floating mb-3">
                                <input class="form-control" id="" name="kota" type="text" placeholder="Enter your kota..." data-sb-validations="required" />
                                <label for="kota">KOTA</label>
                                <div class="invalid-feedback" data-sb-feedback="kota:required">A kota is required.</div>
                            </div>   
                            <div class="form-floating mb-3">
                                <input class="form-control" id="" name="provinsi" type="text" placeholder="Enter your provinsi..." data-sb-validations="required" />
                                <label for="provinsi">PROVINSI</label>
                                <div class="invalid-feedback" data-sb-feedback="provinsi:required">A provinsi is required.</div>
                            </div>   <div class="form-floating mb-3">
                                <input class="form-control" id="" name="negara" type="text" placeholder="Enter your negara..." data-sb-validations="required" />
                                <label for="negara">NEGARA</label>
                                <div class="invalid-feedback" data-sb-feedback="negara:required">A negara is required.</div>
                            </div>   <div class="form-floating mb-3">
                                <input class="form-control" id="" name="no_identitas" type="text" placeholder="Enter your no_identitas..." data-sb-validations="required" />
                                <label for="no_identitas">NO IDENTITAS</label>
                                <div class="invalid-feedback" data-sb-feedback="no_identitas:required">A no_identitas is required.</div>
                            </div>   <div class="form-floating mb-3">
                                <input class="form-control" id="" name="no_tlp" type="text" placeholder="Enter your no_tlp..." data-sb-validations="required" />
                                <label for="no_tlp">NO TELEPON</label>
                                <div class="invalid-feedback" data-sb-feedback="no_tlp:required">A no_tlp is required.</div>
                            </div>   <div class="form-floating mb-3">
                                <input class="form-control" id="" name="email" type="text" placeholder="Enter your email..." data-sb-validations="required" />
                                <label for="email">EMAIL </label>
                                <div class="invalid-feedback" data-sb-feedback="email:required">A email is required.</div>
                            </div>
                            <!-- Submit success message-->
                            <!---->
                            <!-- This is what your users will see when the form-->
                            <!-- has successfully submitted-->
                            <div class="d-none" id="submitSuccessMessage">
                                <div class="text-center mb-3">
                                    <div class="fw-bolder">Form submission successful!</div>
                                    To activate this form, sign up at
                                    <br />
                                    <a href="https://startbootstrap.com/solution/contact-forms">https://startbootstrap.com/solution/contact-forms</a>
                                </div>
                            </div>
                            <!-- Submit error message-->
                            <!---->
                            <!-- This is what your users will see when there is-->
                            <!-- an error submitting the form-->
                            <div class="d-none" id="submitErrorMessage"><div class="text-center text-danger mb-3">Error sending message!</div></div>
                            <!-- Submit Button-->
                            <div><button class="btn btn-primary">Save</button></div>
                            
                        </form>
                        
                        <script src="//cdn.jsdeliver.net/npm/sweetalert2@11"></script>
                            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs.animate.css/4.1.1/animate.min.css" />

                            <script>
                                function tambah(){
                                    Swal.fire({
                                        icon: 'succes',
                                        title: 'berhasil ditambah!',
                                        $showClass: {
                                            popup: 'animate_animated animate_fadeInDown'
                                        },
                                        hodeClass: {
                                            popup: 'animate_animated animate_fadeInDown'
                                        }
                                    })
                                }
                            </script>
                    </div>
                </div>
            </div>
        </section>