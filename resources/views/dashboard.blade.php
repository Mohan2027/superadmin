@include('common.header')
<div class="d-flex flex-column flex-column-fluid">
   <div id="kt_app_toolbar" class="app-toolbar py-3 py-lg-6">
      <div
         id="kt_app_toolbar_container"
         class="app-container container-xxl d-flex flex-stack"
         >
         <div
            class="page-title d-flex flex-column justify-content-center flex-wrap me-3"
            >
            <h1
               class="page-heading d-flex text-gray-900 fw-bold fs-3 flex-column justify-content-center my-0"
               >
               Dashboard
            </h1>
         </div>
         <div class="d-flex align-items-center gap-2 gap-lg-3">
         </div>
      </div>
   </div>
   <div id="kt_app_content" class="app-content flex-column-fluid">
      <div
         id="kt_app_content_container"
         class="app-container container-xxl"
         >
         <div class="row g-5 g-xl-10 mb-xl-10">
            <div
               class="col-md-6 col-lg-6 col-xl-6 col-xxl-3 mb-md-5 mb-xl-10"
               >
               <div class="card card-flush h-md-50 mb-xl-10">
                  <div class="card-header pt-5">
                     <div class="card-title d-flex flex-column">  
                        <span class="fs-2hx fw-bold text-gray-900 me-2 lh-1 ls-n2">{{ $accountCount }}</span><br>
                        <span class="text-gray-500 pt-1 fw-semibold fs-6">Total Number of Accounts</span>      
                     </div>
                  </div>
                  <div class="card-body d-flex flex-column justify-content-end pe-0">
                     <span class="fs-6 fw-bolder text-gray-800 d-block mb-2">Accounts</span>
                     <div class="symbol-group symbol-hover flex-nowrap">
                        @php
                        $accountCount = $accounts->count();
                        $remainingCount = $accountCount > 6 ? $accountCount - 6 : 0;
                        @endphp
                        @foreach($accounts->take(6) as $account)
                        <a href="/accounts" class="symbol-link" data-bs-toggle="tooltip" title="{{ $account->name }}">
                           <div class="symbol symbol-35px symbol-circle">
                              <span class="symbol-label bg-warning text-inverse-warning fw-bold">{{ strtoupper(substr($account->name, 0, 1)) }}</span>
                           </div>
                        </a>
                        @endforeach
                        @if($remainingCount > 0)
                        <a href="/accounts" class="symbol-link" data-bs-toggle="tooltip" title="View {{ $remainingCount }} more accounts">
                           <div class="symbol symbol-35px symbol-circle">
                              <span class="symbol-label bg-warning text-inverse-warning fw-bold">+{{ $remainingCount }}</span>
                           </div>
                        </a>
                        @endif
                     </div>
                  </div>
               </div>
               <div class="card card-flush h-md-50 mb-xl-10">
                  <div class="card-header pt-5">
                     <div class="card-title d-flex flex-column">
                        @foreach($monthlyAccountData as $monthlyData)
                        <span class="fs-2hx fw-bold text-gray-900 me-2 lh-1 ls-n2">{{ $monthlyData->account_count }}</span><br>
                        @endforeach
                        <span class="text-gray-500 pt-1 fw-semibold fs-6"
                           >New Accounts This Month</span
                           >
                     </div>
                  </div>
                  <div
                     class="card-body d-flex flex-column justify-content-end pe-0"
                     >
                     <span
                        class="fs-6 fw-bolder text-gray-800 d-block mb-2"
                        >Accounts</span
                        >
                     <div class="symbol-group symbol-hover flex-nowrap">
                        @php
                        $accountCount = $accounts->count();
                        $remainingCount = $accountCount > 6 ? $accountCount - 6 : 0;
                        @endphp
                        @foreach($accounts->take(6) as $account)
                        <a href="/accounts" class="symbol-link" data-bs-toggle="tooltip" title="{{ $account->name }}">
                           <div class="symbol symbol-35px symbol-circle">
                              <span class="symbol-label bg-warning text-inverse-warning fw-bold">{{ strtoupper(substr($account->name, 0, 1)) }}</span>
                           </div>
                        </a>
                        @endforeach
                        @if($remainingCount > 0)
                        <a href="/accounts" class="symbol-link" data-bs-toggle="tooltip" title="View {{ $remainingCount }} more accounts">
                           <div class="symbol symbol-35px symbol-circle">
                              <span class="symbol-label bg-warning text-inverse-warning fw-bold">+{{ $remainingCount }}</span>
                           </div>
                        </a>
                        @endif
                     </div>
                  </div>
               </div>
            </div>
            <div class="col-lg-12 col-xl-12 col-xxl-9 mb-5 mb-xl-0">
               <div class="card card-flush overflow-hidden h-md-100">
                  <div class="card-header py-5">
                     <h3 class="card-title align-items-start flex-column">
                        <span class="card-label fw-bold text-gray-900"
                           >Total Number of Accounts</span
                           >
                        <span class="text-gray-500 mt-1 fw-semibold fs-6"
                           >Users from all channels</span
                           >
                     </h3>
                  </div>
                  <div
                     class="card-body d-flex justify-content-between flex-column pb-1 px-0"
                     >
                     <div class="px-9 mb-5">
                        <div class="d-flex mb-2">
                           <span class="fs-2hx fw-bold text-gray-800 me-2 lh-1 ls-n2"
                              >Total Accounts Count :</span
                              >
                           <span class="fs-2hx fw-bold text-gray-800 me-2 lh-1 ls-n2">{{ $accountCount }}</
                        </div>
                        <span class="fs-6 fw-semibold text-gray-500"
                           ></span
                           >
                     </div>
                     <canvas id="myLineChart" style="width: 600px; height: 300px;"></canvas>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
@include('common.footer')
<script>
   var hostUrl = "index";
</script>
<script src="{{ asset('js/app.js') }}"></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script src="{{ asset('js/line-chart.js') }}"></script>
</body>
</html>


