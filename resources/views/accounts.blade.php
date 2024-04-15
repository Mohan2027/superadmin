
  
   @include('common.header')
   <body>
      <div class="app-main flex-column flex-row-fluid" id="kt_app_main">
      <!-- Content wrapper -->
      <div class="d-flex flex-column flex-column-fluid">
         <!-- Toolbar -->
         <div id="kt_app_toolbar" class="app-toolbar py-3 py-lg-6">
            <div id="kt_app_toolbar_container" class="app-container container-xxl d-flex flex-stack">
               <!-- Page title -->
               <div class="page-title d-flex flex-column justify-content-center flex-wrap me-3">
                  <h1 class="page-heading d-flex text-gray-900 fw-bold fs-3 flex-column justify-content-center my-0">
                     Statements
                  </h1>
                  <!-- Breadcrumb -->
                  <ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">
                     <li class="breadcrumb-item text-muted">
                        <a href="/dashboard" class="text-muted text-hover-primary">Home</a>
                     </li>
                     <li class="breadcrumb-item">
                        <span class="bullet bg-gray-500 w-5px h-2px"></span>
                     </li>
                     <li class="breadcrumb-item text-muted">Account</li>
                  </ul>
                  <!-- End Breadcrumb -->
               </div>
               <!-- End Page title -->
            </div>
            <!-- End Toolbar container -->
         </div>
         <!-- End Toolbar -->
         <!-- Content -->
         <div id="kt_app_content" class="app-content ">
            <!-- Content container -->
            <div id="kt_app_content_container" class="app-container container-xxl">
               <!-- Navbar -->
               <!-- Nav items -->
               <!-- Row -->
               <div class="table-responsive">
                  <table class="table align-middle table-row-bordered table-row-solid gy-4 gs-9">
                     <!-- Table Header -->
                     <div class="card-toolbar d-flex justify-content-end" data-kt-user-table-toolbar="base">
                        <div id="filterTagsContainer" class="mb-3">
                        </div>
                        <!-- Filter button -->
                        <button type="button" class="btn btn-light-primary me-3" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                        <i class="ki-duotone ki-filter fs-2">
                        <span class="path1"></span>
                        <span class="path2"></span>
                        </i>Filter
                        </button>
                        <form id="filterForm" action="{{ route('accounts') }}" method="post">
                           @csrf
                           <!-- Filter menu -->
                           <div class="menu menu-sub menu-sub-dropdown w-300px w-md-325px filter-imp filter-input" data-kt-menu="true">
                              <!-- Filter Options -->
                              <div class="px-7 py-5">
                                 <div class="fs-5 text-gray-900 fw-bold">Filter Options</div>
                              </div>
                              <div class="separator border-gray-200"></div>
                              <div class="px-7 py-5" data-kt-user-table-filter="form">
                                 <!-- Account Name filter -->
                                 <div class="row align-items-center mb-3">
                                    <div class="col-5">
                                       <label class="form-label">Account Name:</label>
                                    </div>
                                    <div class="col-7">
                                       <input type="text" name="filter_data['name']" id="accountNameInput" class="form-control form-control-solid filter-input" placeholder="Account Name">
                                    </div>
                                 </div>
                                 <!-- Email filter -->
                                 <div class="row align-items-center mb-3">
                                    <div class="col-5">
                                       <label class="form-label">Email:</label>
                                    </div>
                                    <div class="col-7">
                                       <input type="text" name="filter_data['email']"  id="emailInput" class="form-control form-control-solid filter-input" placeholder="Search Email">
                                    </div>
                                 </div>
                                 <!-- Platform filter -->
                                 <div class="row align-items-center mb-3">
                                    <div class="col-5">
                                       <label class="form-label">Platform:</label>
                                    </div>
                                    <div class="col-7 filter-input">
                                       <select name="filter_data['platform']" id="platformSelect" class="form-select form-select-solid fw-bold filter-input flex-grow-1" data-column="2" data-placeholder="Select option">
                                          <option value="">Select</option>
                                          @foreach ($accounts->unique('platform') as $PlatformCheck)
                                          <option>{{ $PlatformCheck->platform }}</option>
                                          @endforeach
                                       </select>
                                    </div>
                                 </div>
                                 <!-- Status filter -->
                                 <div class="row align-items-center mb-3">
                                    <div class="col-5">
                                       <label class="form-label">Status:</label>
                                    </div>
                                    <div class="col-7 filter-input">
                                       <select name="filter_data['status']" id="statusSelect" class="form-select form-select-solid fw-bold filter-input flex-grow-1" data-column="2" data-placeholder="Select option">
                                          <option value="1">Active</option>
                                          <option value="0">Inactive</option>
                                       </select>
                                    </div>
                                 </div>
                                 <!-- Billing Plan filter -->
                                 <div class="row align-items-center mb-3">
                                    <div class="col-5">
                                       <label class="form-label">Billing Plan:</label>
                                    </div>
                                    <div class="col-7 filter-input">
    <select name="filter_data['billing_plan_id']" id="BillingSelect" class="form-select form-select-solid fw-bold filter-input flex-grow-1" data-column="2" data-placeholder="Select option">
        @php
        $currentBillingPlanId = $account->billingPlan->id ?? null; 
        @endphp
        @foreach ($billing as $Plan)
        <option value="{{$Plan->id}}" {{$Plan->id == $currentBillingPlanId ? 'selected' : ''}}>
            {{$Plan->plan_name}}
        </option>
        @endforeach
    </select>
</div>

                                 </div>
                                 <!-- Actions -->
                                 <div class="d-flex justify-content-end">
                                    <button type="reset" class="btn btn-light btn-active-light-primary fw-semibold me-2 px-6 filter-input" data-kt-menu-dismiss="true" data-kt-user-table-filter="reset">Reset</button>
                                    <input type="submit" class="btn btn-primary fw-semibold px-6 filter-input" data-kt-menu-dismiss="true" data-kt-user-table-filter="filter" value="Apply">
                                 </div>
                              </div>
                           </div>
                        </form>
                        <script>
                           $(document).ready(function() {
                               function applyFilter() {
                                   $('#filterTagsContainer').empty();
                           
                                   var filterTags = [];
                           
                                   var accountName = $('#accountNameInput').val().trim();
                                   var email = $('#emailInput').val().trim();
                                   var status = $('#statusSelect').val();
                                   var platform = $('#platformSelect').val().trim();
                                   var billingPlan = $('#BillingSelect').val().trim();
                           
                                   if (accountName !== '') {
                                       filterTags.push({ name: 'Account Name', value: accountName });
                                   }
                                   if (email !== '') {
                                       filterTags.push({ name: 'Email', value: email });
                                   }
                                   if (status !== '') {
                                       filterTags.push({ name: 'Status', value: status });
                                   }
                                   if (platform !== '') {
                                       filterTags.push({ name: 'Platform', value: platform });
                                   }
                                   if (billingPlan !== '') {
                                       filterTags.push({ name: 'Billing Plan', value: billingPlan });
                                   }
                           
                                   $.each(filterTags, function(index, tag) {
                                       var filterTagHTML = '<span class="badge bg-primary me-2">' + tag.name + ': ' + tag.value + '</span>';
                                       $('#filterTagsContainer').append(filterTagHTML);
                                   });
                           
                                  
                                   var filterData = {};
                                   $.each(filterTags, function(index, tag) {
                                       var key = tag.name.toLowerCase().replace(' ', '_');
                                       filterData[key] = tag.value;
                                   });
                           
                                  
                                   $('#filterForm').attr('action', '{{ route("accounts") }}?' + $.param({ filter_data: filterData }));
                               }
                           
                               $('[data-kt-user-table-filter="filter"]').on('click', function() {
                                   applyFilter();
                               });
                           
                               $('[data-kt-user-table-filter="reset"]').on('click', function() {
                                   $('.filter-input').val('');
                                   applyFilter();
                               });
                           
                               $('.filter-input').on('input', function() {
                                   applyFilter();
                               });
                           
                               $('#statusSelect').on('change', function() {
                                   applyFilter();
                               });
                           });
                        </script>
                        <thead class="border-gray-200 fs-5 fw-semibold bg-lighten">
                           <tr>
                              <th class="min-w-175px ps-9">Account Name</th>
                              <th class="min-w-150px px-0">Email</th>
                              <th class="min-w-150px">Status</th>
                              <th class="min-w-150px">Platform</th>
                              <th class="min-w-150px">Web URL</th>
                              <th class="min-w-150px">Billing Plan</th>
                           </tr>
                        </thead>
                        <tbody class="fs-6 fw-semibold text-gray-600">
                           @foreach ($accounts as $account)
                           <tr>
                              <td class="min-w-175px ps-9">
                                 <a href="{{ route('details.index', ['id' => $account->id]) }}">
                                 {{ $account->name }}
                                 </a>
                              </td>
                              <td class="min-w-150px">
                                 {{ $account->email }}
                              </td>
                              <td class="min-w-150px"> 
                                 @if($account->status == 1)
                                 <span class="fw-bold fs-6 text-success">Active</span>
                                 @else
                                 <span class="fw-bold fs-6 text-danger">Inactive</span>
                                 @endif
                              </td>
                              <td class="min-w-150px">{{ $account->platform }}</td>
                              <td class="min-w-150px">
                                 <a href="{{ $account->web_url }}">{{ $account->web_url }}</a>
                              </td>

                              <td class="min-w-150px">
                                 {{ $account->billingPlan->plan_name ?? '' }}
                              </td>
                           </tr>
                           @endforeach
                        </tbody>
                  </table>
                  <!-- End Table -->
                  </div>
                  <!-- End Table Responsive -->
               </div>
               <!-- End Content container -->
            </div>
            <!-- End Content -->
         </div>
         <!-- End Content wrapper -->
         <!-- Chat drawer -->
         <div id="kt_drawer_chat" class="bg-body" data-kt-drawer="true" data-kt-drawer-name="chat" data-kt-drawer-activate="true" data-kt-drawer-overlay="true" data-kt-drawer-width="{default:'300px', 'md': '500px'}" data-kt-drawer-direction="end" data-kt-drawer-toggle="#kt_drawer_chat_toggle" data-kt-drawer-close="#kt_drawer_chat_close">
            <div class="card w-100 border-0 rounded-0" id="kt_drawer_chat_messenger">
               <div class="card-header pe-5" id="kt_drawer_chat_messenger_header">
                  <div class="card-title">
                     <!-- Access menu -->
                  </div>
               </div>
            </div>
         </div>
         <!-- End Chat drawer -->
      </div>
      <!-- End App Main -->
      <!-- JavaScript -->
      <script>
         var hostUrl = "index";
      </script>
      <!-- Global Javascript Bundle (mandatory for all pages) -->
      <script src="{{ asset('js/app.js') }}"></script>
      @include('common.footer')
   </body>
</html>