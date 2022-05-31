@extends('pages.layouts.main')

@section('content')
  <div class="row main mb-1">
    <div class="col-md-12 mb-3">
      <a href="/user/transaction" class="text-decoration-none float-end text-dark"><span class="fa fa-chevron-left me-1"></span> Back</a>
      <h5 class="float-start font-semibold">{{ $title = 'Transaction Detail - INV-000001' }}</h5>
    </div>

    <div class="col-md-3 mb-3">
      <a href="/cart/1/edit" class="text-decoration-none text-dark">
        <div class="card w-100 border-0 rad-10">
          <div class="cover p-3">
            <img src="{{ asset('img/books/atomic-habits.jpg') }}" class="card-img-top h-64 w-full object-cover rounded-lg">
          </div>
          <div class="card-body top-20">
            <h6 class="font-medium">Fikih Muamalah</h6>
            <p class="top-8 color-grey fs-small text-grey font-regular">NOVEL IMPROVMENT</p>
            <span class="float-start text-danger fs-normal mt-1">2 x Rp. {{ number_format(23000) }}</span>
            <span class="float-end font-semibold">{{ (2*23000) / 1000 }}K</span>
          </div>
        </div>
      </a>
    </div>

    <div class="col-md-3 mb-3">
      <a href="" class="text-decoration-none text-dark">
        <div class="card w-100 border-0 rad-10">
          <div class="cover p-3">
            <img src="{{ asset('img/books/harry-potter.jpg') }}" class="card-img-top h-64 w-full object-cover rounded-lg">
          </div>
          <div class="card-body top-20">
            <h6 class="font-medium">Habbits</h6>
            <p class="top-8 color-grey fs-small text-grey font-regular">NOVEL IMPROVMENT</p>
            <span class="float-start text-danger fs-normal mt-1">1 x Rp. {{ number_format(53000) }}</span>
            <span class="float-end font-semibold">{{ (1*53000) / 1000 }}K</span>
          </div>
        </div>
      </a>
    </div>

    <div class="col-md-3 mb-3">
      <a href="" class="text-decoration-none text-dark">
        <div class="card w-100 border-0 rad-10">
          <div class="cover p-3">
            <img src="{{ asset('img/books/life-30.jpg') }}" class="card-img-top h-64 w-full object-cover rounded-lg">
          </div>
          <div class="card-body top-20">
            <h6 class="font-medium">Habbits</h6>
            <p class="top-8 color-grey fs-small text-grey font-regular">NOVEL IMPROVMENT</p>
            <span class="float-start text-danger fs-normal mt-1">3 x Rp. {{ number_format(12500) }}</span>
            <span class="float-end font-semibold">{{ (3*12500) / 1000 }}K</span>
          </div>
        </div>
      </a>
    </div>

    <div class="col-md-3 mb-3">
      <a href="/cart/1/edit" class="text-decoration-none text-dark">
        <div class="card w-100 border-0 rad-10">
          <div class="cover p-3">
            <img src="{{ asset('img/books/ikigai.jpg') }}" class="card-img-top h-64 w-full object-cover rounded-lg">
          </div>
          <div class="card-body top-20">
            <h6 class="font-medium">Habbits</h6>
            <p class="top-8 color-grey fs-small text-grey font-regular">NOVEL IMPROVMENT</p>
            <span class="float-start text-danger fs-normal mt-1">1 x Rp. {{ number_format(34000) }}</span>
            <span class="float-end font-semibold">{{ (1*34000) / 1000 }}K</span>
          </div>
        </div>
      </a>
    </div>

  </div>

  <h4 class="float-start font-semibold mt-3">Total : Rp. {{ number_format(54000 + 34000 + 26500 + 43000) }}.00,-</h4>
  <br>
@endsection