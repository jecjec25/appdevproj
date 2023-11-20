<template>
    <div class="container-xxl bg-white p-0">
        <!-- Spinner Start -->
        <!-- <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div> -->
        <!-- Spinner End -->
            <headers/>        
        <!-- Header Start -->
        <div class="container-fluid header bg-white p-0">
            <div class="row g-0 align-items-center flex-column-reverse flex-md-row">
                <div class="col-md-6 p-5 mt-lg-5">
                    <h1 class="display-5 animated fadeIn mb-4"> <br> Welcome to <span class="text-primary">Calapan City,</span> Oriental Mindoro</h1>
                    <p class="animated fadeIn mb-4 pb-2">Going Green and Digital for a More Sustainable, Inclusive, and Prosperous Future for All.</p>
                    <a href="" class="btn btn-primary py-3 px-5 me-3 animated fadeIn">Get Started</a>
                </div>
                <div class="col-md-6 animated fadeIn">
                    <div class="owl-carousel header-carousel">
                        <div class="owl-carousel-item">
                            <img class="img-fluid img-cons" src="<%= BASE_URL %>img/header.jpg" alt="">
                        </div>
                        <div class="owl-carousel-item">
                            <img class="img-fluid img-cons" src="<%= BASE_URL %>img/header2.jpg" alt="">
                        </div>
                        <div class="owl-carousel-item">
                            <img class="img-fluid img-cons" src="<%= BASE_URL %>img/header3.jpg" alt="">
                        </div>
                        <div class="owl-carousel-item">
                            <img class="img-fluid img-cons" src="<%= BASE_URL %>img/header4.jpg" alt="">
                        </div>
                        <div class="owl-carousel-item">
                            <img class="img-fluid img-cons" src="<%= BASE_URL %>img/header5.jpg" alt="">
                        </div>
                        <div class="owl-carousel-item">
                            <img class="img-fluid img-cons" src="img/header6.jpg" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    // import headers from '@/inclue/header.vue'
    // export default{
    //     components:{
    //         headers
    //     }
    // }
</script>