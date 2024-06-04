<!-- child.blade.php -->
@extends('layouts.master')

@section('title', 'ទំព័រដើម')

@section('content')
<div class="col-12 col-md-10 col-lg-10">
  <div class="text-success fs-4 mt-3 mb-3"><i class="fa-solid fa-house"></i> ទំព័រដើម</div>
  <div class="row">
    <div class="col-6">
        <div class="small-box bg-success">
            <div class="inner">
            <h3>150</h3>
            <p>ការស្នើសុំស្ដុក</p>
            </div>
            <div class="icon">
            <i class="fas fa-shopping-cart"></i>
            </div>
            <a href="#" class="small-box-footer">
            មើល​ <i class="fas fa-arrow-circle-right"></i>
            </a>
        </div>
    </div>
    <div class="col-6">
        <div class="small-box bg-warning">
            <div class="inner">
            <h3>150$</h3>
            <p>ចំណាយប្រចាំថ្ងៃ</p>
            </div>
            <div class="icon">
            <i class="fa-solid fa-dollar-sign"></i>
            </div>
            <a href="#" class="small-box-footer">
            មើល​ <i class="fas fa-arrow-circle-right"></i>
            </a>
        </div>
    </div>
  </div>
  <div class="row ">
    <div class="col-6">
        <div class="small-box bg-info">
            <div class="inner">
            <h3>150$</h3>
            <p>ចំណាយប្រចាំសប្ដាហ៍</p>
            </div>
            <div class="icon">
            <i class="fa-solid fa-dollar-sign"></i>
            </div>
            <a href="#" class="small-box-footer">
            មើល​ <i class="fas fa-arrow-circle-right"></i>
            </a>
        </div>
    </div>
    <div class="col-6">
        <div class="small-box bg-danger">
            <div class="inner">
            <h3>150</h3>
            <p>អស់ស្ដុក</p>
            </div>
            <div class="icon">
            <i class="fa-solid fa-boxes-stacked"></i>
            </div>
            <a href="#" class="small-box-footer">
            មើល​ <i class="fas fa-arrow-circle-right"></i>
            </a>
        </div>
    </div>
  </div>

  <div class="row mt-5">
      <div class="col-12 col-md-8 col-lg-8">
          <div class=" shadow-box card" style="height: 300px;">
              <div class="border-bottom p-2 .bg-light-subtle">ចំណាយប្រចាំសប្ដាហ៍</div>
          </div>
      </div>
      <div class="col-12 col-md-4 col-lg-4">
         <div class=" shadow-box card" style="height: 300px;">
          <div class="fs-5 p-2 text-center border-bottom"> ព័ត៌មាន</div>
          <div></div>
         </div>
      </div>
  </div>
</div>
@endsection