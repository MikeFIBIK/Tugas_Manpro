<style>
    .custom-font-size {
        font-size: 20px; /* Adjust the font size as needed */
    }
</style>

<div class="d-flex flex-column flex-shrink-0 p-3 text-bg-success" style="width: 230px; min-height: 100%; margin: 0; padding: 0;">
    <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-white text-decoration-none">
     <svg class="bi pe-none" width="40" height="32"><use xlink:href="#bootstrap"/></svg>
      
        <div class="d-flex align-items-center text-white">
            <img class="me-3" src="{{ url('./assets/media/icons/logo.png') }}" width="50" height="50">
            <div class="lh-1">
                <h1 class="h4 mb-0 text-white lh-1">LOGO</h1>
            </div>
        </div>
      
    </a>
    <hr>
    <ul class="nav nav-pills flex-column">
      <li class="nav-item">
        <a href="{{ url('/pasien') }}" class="nav-link text-white custom-font-size" aria-current="page">
          <svg class="bi pe-none me-2" width="16" height="30"><use xlink:href="#pasien"/></svg>
          Pasien
        </a>
      </li>
      <li>
        <a href="{{ url('/dokter') }}" class="nav-link text-white custom-font-size">
          <svg class="bi pe-none me-2" width="16" height="30"><use xlink:href="#speedometer2"/></svg>
          Dokter
        </a>
      </li>
      <li>
        <a href="{{ url('/hasil') }}" class="nav-link text-white custom-font-size">
          <svg class="bi pe-none me-2" width="16" height="30"><use xlink:href="#table"/></svg>
          Hasil Uji
        </a>
      </li>
    </ul>
  </div>
