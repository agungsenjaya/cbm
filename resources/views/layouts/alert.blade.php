<div class="position-fixed bottom-0 end-0 p-3" style="z-index: 11">
@if(Session::has('success'))
<div id="liveToast" class="toast bg-success text-white p-2" role="alert" aria-live="assertive" aria-atomic="true">
    <div class="toast-header bg-success text-white">
      <i class="bi bi-check-circle-fill me-2"></i>
      <strong class="me-auto">Success</strong>
      <button type="button" class="btn-close btn-close-white" data-bs-dismiss="toast" aria-label="Close"></button>
    </div>
    <div class="toast-body">
      {{ Session::get('success') }}
    </div>
  </div>
  @elseif(Session::has('failed'))
  <div id="liveToast" class="toast bg-danger text-white p-2" role="alert" aria-live="assertive" aria-atomic="true">
    <div class="toast-header bg-danger text-white">
      <i class="bi bi-x-octagon-fill me-2"></i>
      <strong class="me-auto">Failed</strong>
      <button type="button" class="btn-close btn-close-white" data-bs-dismiss="toast" aria-label="Close"></button>
    </div>
    <div class="toast-body">
      {{ Session::get('failed') }}
    </div>
  </div>
  @endif

  <div id="liveMod" class="toast bg-success text-white p-2" role="alert" aria-live="assertive" aria-atomic="true">
    <div class="toast-header bg-success text-white">
      <i class="bi bi-check-circle-fill me-2"></i>
      <strong class="me-auto">Success</strong>
      <button type="button" class="btn-close btn-close-white" data-bs-dismiss="toast" aria-label="Close"></button>
    </div>
    <div class="toast-body">
      Data berhasil dimasukan kedalam database
    </div>
  </div>

</div>