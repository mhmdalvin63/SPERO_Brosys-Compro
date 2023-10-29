@extends('Template.Main')
@section('title', 'Brosys')
<link rel="stylesheet" href="../css/Brosys.css">
    
@section('content')
    <div class="page-brosys">
        <img src="{{ asset('..\images\brosys1.jpg') }}" alt="" id="brosys1">
      <div class="page-brosys-desc">
        <h1>BROSYS</h1>
        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Maxime, atque?</p>
      </div>
    </div>

    <div class="page-brosys" id="sect-2">
        <div class="row row-2">
          <div class="col-lg-6 col-md-12 col-12">
           <div class="col-content mx-5 column text-center text-white">
            <div class="column-content">
              <div class="content">
                <h1>LOREM IPSUM</h1>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Adipisci sapiente ad recusandae odit, accusamus exercitationem?</p>
              </div>
            </div>
            <a class="btn-column" href="#" role="button"><h5>Lorem Ipsum</h5></a>
            </div>
          </div>
          <div class="col-lg-6 col-md-12 col-12">
           <div class="col-content mx-5 column bg-dark text-white text-start">
            <div class="column-content">
              <div class="content">
                <h2>Lorem Ipsum Lorem Ipsum Lorem Ipsum</h2>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Adipisci sapiente ad recusandae odit, accusamus exercitationem?</p>
              </div>
            </div>
            <a class="btn-column" href="#" role="button"><h5>Lorem Ipsum</h5></a>
            </div>
          </div>
        </div>
    </div>

    <div class="page-brosys">
      <img src="{{ asset('..\images\brosys-2.jpg') }}" alt="" id="brosys1">
      <div class="page-brosys-desc-left">
        <h1>BROSYS</h1>
        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Maxime, atque?</p>
      </div>
    </div>

    {{-- <div class="page-brosys" id="sect-4"> --}}
    <div class="page-4" id="sect-4">
      <div class="row" id="row-sect-4">
        <div class="col-12 row-1 bg-black" id="grid-4">
          <div class="d-flex justify-content-around align-items-center">
            <div class="title-sect-4">
              <div class="desc-col-4">
                <h1>BROSYS</h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
              </div>
            </div>
            <div class="text-end">
              <img src="{{ asset('..\images\brosys-2.jpg') }}" alt="" class="img-sect-4">
            </div>
          </div>
        </div>
        <div class="element-2" id="par-wrapper">
         <div class="wrapper bg-black">
          <h2><iconify-icon icon="iconamoon:home"></iconify-icon></h2>
          <div class="wrapper-desc text-white">
            <h5 class="my-3">LOREM IPSUM</h5>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo obcaecati alias facilis nihil molestiae maiores rem, praesentium architecto natus placeat? Distinctio ex dolorum adipisci expedita?</p>
          </div>
         </div>
        </div>
        <div class="element-3" id="par-wrapper">
         <div class="wrapper bg-black">
          <h2><iconify-icon icon="iconamoon:home"></iconify-icon></h2>
          <div class="wrapper-desc text-white">
            <h5 class="my-3">LOREM IPSUM</h5>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo obcaecati alias facilis nihil molestiae maiores rem, praesentium architecto natus placeat? Distinctio ex dolorum adipisci expedita?</p>
          </div>
         </div>
        </div>
        <div class="element-4" id="par-wrapper">
         <div class="wrapper bg-black">
          <h2><iconify-icon icon="iconamoon:home"></iconify-icon></h2>
          <div class="wrapper-desc text-white">
            <h5 class="my-3">LOREM IPSUM</h5>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo obcaecati alias facilis nihil molestiae maiores rem, praesentium architecto natus placeat? Distinctio ex dolorum adipisci expedita?</p>
          </div>
         </div>
        </div>
      </div>
    </div>

    <div class="page-brosys">
      <img src="{{ asset('..\images\piano.jpg') }}" alt="" id="brosys1">
      <div class="page-brosys-desc-left">
        <h1>BROSYS</h1>
        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Maxime, atque?</p>
      </div>
    </div>

    <div class="page-brosys bg-black">
      <div class="sect-top d-block d-lg-flex align-items-center text-white">
        <img src="{{ asset('..\images\logo-brosys.png') }}" alt="" class="img-fluid">
        <h5>Lorem ipsum dolor sit amet consectetur adipisicing elit.</h5>
      </div>
      <div class="sect-bottom  d-block d-lg-flex gap-3">
        <div class="parent-sosmed">
          <div class="sosmed d-flex align-items-start text-white gap-2">
            <h2><iconify-icon icon="ic:outline-email"></iconify-icon></h2>
            <h5>brosys.indonesia@gmail.com</h5>
          </div>
          <div class="sosmed d-flex align-items-start text-white gap-2">
            <h2><iconify-icon icon="mdi:instagram"></iconify-icon></h2>
            <h5>BrosysID</h5>
          </div>
        </div>
        <div class="parent-sosmed">
          <div class="sosmed d-flex align-items-start text-white gap-2">
            <h2><iconify-icon icon="ic:baseline-whatsapp"></iconify-icon></h2>
            <h5>02134664736</h5>
          </div>
          <div class="sosmed d-flex align-items-start text-white gap-2">
            <h2><iconify-icon icon="ion:location-outline"></iconify-icon></h2>
            <h5>Lorem ipsum dolor sit amet consectetur adipisicing elit. <br> Optio aperiam, debitis saepe rerum maxime beatae?</h5>
          </div>
        </div>
      </div>
      <img src="{{ asset('..\images\bg-eras-2.png') }}" alt="" id="brosys6">
    </div>
@endsection