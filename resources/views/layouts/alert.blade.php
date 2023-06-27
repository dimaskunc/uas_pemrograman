@if (Session::has('sukses'))
  <div class="col-md-6 px-5" >
    <div role="alert" style="position: absolute; z-index: 30; right: 10px; top: 100px;" class="alert alert-info alert-dismissible fade show">
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
               <span class="fa fa-check"></span> <strong>Sukses</strong>
                <hr class="message-inner-separator">
                <p>
                    {{ Session::get('sukses') }}</p>
            </div>

  </div>


@elseif (Session::has('gagal'))
<div class="col-md-6 px-5" >
    <div role="alert" style="position: absolute; z-index: 30; right: 10px; top: 100px;" class="alert alert-info alert-dismissible fade show">
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
               <span class="fa fa-times"></span> <strong>Terjadi Kesalahan</strong>
                <hr class="message-inner-separator">
                <p>
                    {{ Session::get('gagal') }}</p>
            </div>

  </div>
  

@endif