@extends('pages.layouts.main')

@section('content')
  <div class="row main mb-1">
    <div class="col-md-12 mb-3">
      <a href="/cart/1/show" class="text-decoration-none float-end text-dark"><span class="fa fa-chevron-left me-1"></span> Back</a>
      <h5 class="float-start font-semibold">{{ $title = 'Checkout - INV-0000001' }}</h5>
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
  <button type="button" data-bs-toggle="modal" data-bs-target="#checkoutModal" class="btn btn-primary fs-medium p-2 float-end font-medium rad-8 px-5">Check Out</button>
  <br>

  <div class="modal fade" id="checkoutModal" tabindex="-1" aria-labelledby="checkoutModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm">
      <div class="modal-content rad-8">
        <div class="modal-header">
          <h5 class="modal-title" id="checkoutModalLabel">Checkout</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form action="/" method="post">
          @csrf
          <div class="modal-body">
            <p class="fs-normal text-center">Are you sure to buy? <br><span class="text-danger">Note : </span> Before checkout please check your order first</p>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-primary rad-8 fs-normal">Checkout Now</button>
          </div>
        </form>
      </div>
    </div>
  </div>
@endsection