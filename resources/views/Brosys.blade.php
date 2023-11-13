@extends('Template.Main')
@section('title_tab', 'Brosys')
<link rel="stylesheet" href="../css/Brosys.css">
    
@section('content')
    <div class="page-brosys">
        <img src="{{ asset('..\images\brosys1.jpg') }}" alt="" id="brosys1">
      <div class="page-brosys-desc">
        <h1>BROSYS</h1>
        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Maxime, atque?</p>
      </div>
    </div>

    <img src="{{ asset('..\images\lineheader3.png') }}" alt="" class="lineheader1">

    <div class="page-brosys" id="sect-2">
      {{-- <img src="{{ asset('') }}" alt=""> --}}
        <div class="row row-2">
          <div class="col-lg-6 col-md-12 col-12">
           <div class="col-content mx-5 column text-center text-white">
            <div class="column-content">
              <div class="content">
                <h1>LOREM IPSUM</h1>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Adipisci sapiente ad recusandae odit, accusamus exercitationem?</p>
              </div>
            </div>
            <a class="btn-column" href="#" role="button"><p>Lorem Ipsum</p></a>
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
            <a class="btn-column" href="#" role="button"><p>Lorem Ipsum</p></a>
            </div>
          </div>
        </div>
    </div>

    <div class="page-brosys position-relative" id="sect-3">
      <img src="{{ asset('..\images\brosys-2.jpg') }}" alt="" id="brosys-sect-3">
      <div class="page-brosys-desc-left">
        <h1>BROSYS</h1>
        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Maxime, atque?</p>
      </div>
      <div id="svg4" class="text-end">
        <img class="d-md-block d-none" src="{{ asset('../images/AssetWeb12.svg') }}" alt="Contoh SVG">
        <img class="d-md-none d-block" src="{{ asset('../images/AssetWeb12.svg') }}" alt="Contoh SVG">
      </div>
    </div>

    {{-- <div class="page-brosys" id="sect-4"> --}}
    <div class="page-4" id="sect-4">
      <div class="row" id="row-sect-4">
        <div class="col-12 row-1 bg-black" id="grid-4">
          <div class="d-flex justify-content-md-around justify-content-center align-items-center">
            <div class="title-sect-4 d-md-flex d-block text-md-start text-center">
              <img src="{{ asset('..\images\kabut.svg') }}" alt="" class="img-sect-4 d-md-none d-block">
              <div class="desc-col-4">
                <h1>BROSYS</h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
              </div>
            </div>
            <div class="text-start">
              <img src="{{ asset('..\images\kabut.svg') }}" alt="" class="img-sect-4 d-md-block d-none">
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

    <div class="page-brosys" id="sect-5">
      <img src="{{ asset('..\images\piano.jpg') }}" alt="" id="brosys1">
      <div class="page-brosys-desc-5">
        <h1>BROSYS</h1>
        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Maxime, atque?</p>
      </div>
      <div id="svg5" class="text-end">
        <img src="{{ asset('../images/AssetWeb13.svg') }}" alt="Contoh SVG">
      </div>
      <div id="svg5-1" class="text-end">
        <img src="{{ asset('../images/AssetWeb14.svg') }}" alt="Contoh SVG">
      </div>
    </div>

    <div class="page-brosys bg-black">
      <div class="sect-top d-block d-lg-flex align-items-center text-white">
        <img src="{{ asset('..\images\logo-brosys.png') }}" alt="" class="img-fluid">
        <h5>Lorem ipsum dolor sit amet consectetur adipisicing elit.</h5>
      </div>
      <div class="sect-bottom  d-block d-lg-flex gap-3">
        <div class="parent-sosmed">
          <div class="sosmed d-flex align-items-center text-white gap-2">
            <h2><iconify-icon icon="ic:outline-email"></iconify-icon></h2>
            <h5>brosys.indonesia@gmail.com</h5>
          </div>
          <div class="sosmed d-flex align-items-center text-white gap-2">
            <h2><iconify-icon icon="mdi:instagram"></iconify-icon></h2>
            <h5>BrosysID</h5>
          </div>
        </div>
        <div class="parent-sosmed">
          <div class="sosmed d-flex align-items-center text-white gap-2">
            <h2><iconify-icon icon="ic:baseline-whatsapp"></iconify-icon></h2>
            <h5>02134664736</h5>
          </div>
          <div class="sosmed d-flex align-items-center text-white gap-2">
            <h2><iconify-icon icon="ion:location-outline"></iconify-icon></h2>
            <h5>Lorem ipsum dolor sit amet consectetur adipisicing elit. <br> Optio aperiam, debitis saepe rerum maxime beatae?</h5>
          </div>
        </div>
      </div>
      <img src="{{ asset('..\images\bg-eras-2.png') }}" alt="" id="brosys6">
    </div>
@endsection