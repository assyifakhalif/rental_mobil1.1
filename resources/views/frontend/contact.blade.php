@extends('layouts.frontend')

@section('content')
<!-- Header-->
<header class="bg-dark py-5">
    <div class="container px-4 px-lg-5 my-5">
      <div class="text-center text-white">
        <h1 class="display-4 fw-bolder">Kontak Kami</h1>
      </div>
    </div>
  </header>
  
  <!-- Section-->
  <section class="py-5">
    <div class="container px-4 px-lg-5 mt-5">
      @if (session()->has('message'))
                  <div class="alert alert-{{ session()->get('alert-type') }} alert-dismissible fade show" role="alert">
                         {{ session()->get('message') }}
                    </div>
                    @endif

                    @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
      <div class="row justify-content-center">
        <div class="col-lg-10 m-auto">
          <div class="contact-form">
            <form action="{{ route('contact.store') }}" method="POST">
              @csrf
              <div class="row">
                <div class="col-lg-6 col-md-6 mb-2">
                  <div class="name-input form-group">
                    <input
                      type="text"
                      name="nama"
                      class="form-control"
                      placeholder="Isikan nama lengkap"
                    />
                  </div>
                </div>
                <div class="col-lg-6 col-md-6 mb-2">
                  <div class="email-input form-group">
                    <input
                      type="email"
                      name="email"
                      class="form-control"
                      placeholder="Isikan alamat email"
                    />
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-lg-12 col-md-6 mb-2">
                  <div class="subject-input form-group">
                    <input
                      type="text"
                      class="form-control"
                      name="subject"
                      placeholder="Isikan subject email"
                    />
                  </div>
                </div>
              </div>
              <div class="message-input form-group mb-3">
                <textarea
                  name="pesan"
                  cols="30"
                  rows="10"
                  placeholder="Isikan pesan anda"
                  class="form-control"
                ></textarea>
              </div>
              <div class="input-submit form-group">
                <button
                  type="submit"
                  style="height: 50px; width: 400px; margin: 0 auto"
                  class="d-block btn btn-primary"
                >
                  Kirim Pesan
                </button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection