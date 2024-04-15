<!doctype html>
<html lang="en">
   <head>
      @include('common.header')
      <meta name="csrf-token" content="{{ csrf_token() }}">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
      <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700"/>
      <link href=" {{ mix('css/app.css') }}" rel="stylesheet" type="text/css"/>
      <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
   </head>
   <body>
      <div class="app-main flex-column flex-row-fluid" id="kt_app_main">
      <!--begin::Content wrapper-->
      <div class="d-flex flex-column flex-column-fluid">
      <!--begin::Toolbar-->
      <div id="kt_app_toolbar" class="app-toolbar py-3 py-lg-6">
         <!--begin::Toolbar container-->
         <div
            id="kt_app_toolbar_container"
            class="app-container container-xxl d-flex flex-stack"
            >
            <!--begin::Page title-->
            <div
               class="page-title d-flex flex-column justify-content-center flex-wrap me-3"
               >
               <!--begin::Title-->
               <h1
                  class="page-heading d-flex text-gray-900 fw-bold fs-3 flex-column justify-content-center my-0"
                  >
                  Account Overview
               </h1>
               <!--end::Title-->
               <!--begin::Breadcrumb-->
               <ul
                  class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1"
                  >
                  <!--begin::Item-->
                  <li class="breadcrumb-item text-muted">
                     <a
                        href="/dashboard"
                        class="text-muted text-hover-primary"
                        >Home</a
                        >
                  </li>
                  <!--end::Item-->
                  <!--begin::Item-->
                  <!--end::Item-->
                  <!--begin::Item-->
                  <li class="breadcrumb-item text-muted">
                     <a
                        href="/accounts"
                        class="text-muted text-hover-primary"
                        >Accounts</a
                        >
                  </li>
                  <!--end::Item-->
                  <li class="breadcrumb-item text-muted">
                     details
                  </li>
               </ul>
               <!--end::Breadcrumb-->
            </div>
            <!--end::Page title-->
            <!--begin::Actions-->
            <div class="d-flex align-items-center gap-2 gap-lg-3">
               <!--begin::Secondary button-->
               <!--end::Secondary button-->
               <!--begin::Primary button-->
               <!--end::Primary button-->
            </div>
            <!--end::Actions-->
         </div>
         <!--end::Toolbar container-->
      </div>
      <!--end::Toolbar-->
      <!--begin::Content-->
      <div id="kt_app_content" class="app-content flex-column-fluid">
      <!--begin::Content container-->
      <div
         id="kt_app_content_container"
         class="app-container container-xxl"
         >
         <!--begin::Navbar-->
         <div class="card card-flush mb-9" id="kt_user_profile_panel">
            <!--begin::Hero nav-->
            <div class="card-header rounded-top bgi-size-cover h-200px" style="background-position: 100% 50%; background-image: url('{{ asset('images/misc/profile-head-bg.jpg') }}');">
            </div>
            <!--end::Hero nav-->
            <!--begin::Body-->
            <div class="card-body mt-n19">
               <!--begin::Details-->
               <div class="m-0">
                  <!--begin: Pic-->
                  <div
                     class="d-flex flex-stack align-items-end pb-4 mt-n19"
                     >
                     <div
                        class="symbol symbol-125px symbol-lg-150px symbol-fixed position-relative mt-n3"
                        >
                        <img
                           src="{{ asset('images/avatars/' . $account->id . '-' . $account->img_url) }}"
                           alt="image"
                           class="border border-white border-4"
                           style="border-radius: 20px"
                           />
                        <div
                           class="position-absolute translate-middle bottom-0 start-100 ms-n1 mb-9 bg-success rounded-circle h-15px w-15px"
                           ></div>
                     </div>
                     <!--begin::Toolbar-->
                     <div class="me-0">
                        <button
                           class="btn btn-icon btn-sm btn-active-color-primary justify-content-end pt-3"
                           data-kt-menu-trigger="click"
                           data-kt-menu-placement="bottom-end"
                           >
                        <i class="fonticon-settings fs-2"></i>
                        </button>
                        <!--begin::Menu 3-->
                        <div
                           class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px py-3"
                           data-kt-menu="true"
                           >
                           <!--begin::Heading-->
                           <div class="menu-item px-3">
                              <div
                                 class="menu-content text-muted pb-2 px-3 fs-7 text-uppercase"
                                 >
                                 Payments
                              </div>
                           </div>
                           <!--end::Heading-->
                           <!--begin::Menu item-->
                           <div class="menu-item px-3">
                              <a href="#" class="menu-link px-3"
                                 >Create Invoice</a
                                 >
                           </div>
                           <div class="menu-item px-3">
                              <a href="#" class="menu-link px-3"
                                 >Generate Bill</a
                                 >
                           </div>
                           <!--end::Menu item-->
                           <!--begin::Menu item-->
                           <div
                              class="menu-item px-3"
                              data-kt-menu-trigger="hover"
                              data-kt-menu-placement="right-end"
                              >
                              <a href="#" class="menu-link px-3">
                              <span class="menu-title">Subscription</span>
                              <span class="menu-arrow"></span>
                              </a>
                              <!--begin::Menu sub-->
                              <div
                                 class="menu-sub menu-sub-dropdown w-175px py-4"
                                 >
                                 <!--begin::Menu item-->
                                 <div class="menu-item px-3">
                                    <a href="#" class="menu-link px-3">Plans</a>
                                 </div>
                                 <!--end::Menu item-->
                                 <!--begin::Menu item-->
                                 <div class="menu-item px-3">
                                    <a href="#" class="menu-link px-3"
                                       >Billing</a
                                       >
                                 </div>
                                 <!--end::Menu item-->
                                 <!--begin::Menu item-->
                                 <div class="menu-item px-3">
                                    <a href="#" class="menu-link px-3"
                                       >Statements</a
                                       >
                                 </div>
                                 <!--end::Menu item-->
                                 <!--begin::Menu separator-->
                                 <div class="separator my-2"></div>
                                 <!--end::Menu separator-->
                                 <!--begin::Menu item-->
                                 <div class="menu-item px-3">
                                    <div class="menu-content px-3">
                                       <!--begin::Switch-->
                                       <label
                                          class="form-check form-switch form-check-custom form-check-solid"
                                          >
                                          <!--begin::Input-->
                                          <input
                                             class="form-check-input w-30px h-20px"
                                             type="checkbox"
                                             value="1"
                                             checked="checked"
                                             name="notifications"
                                             />
                                          <!--end::Input-->
                                          <!--end::Label-->
                                          <span
                                             class="form-check-label text-muted fs-6"
                                             >Recuring</span
                                             >
                                          <!--end::Label-->
                                       </label>
                                       <!--end::Switch-->
                                    </div>
                                 </div>
                                 <!--end::Menu item-->
                              </div>
                              <!--end::Menu sub-->
                           </div>
                        </div>
                        <!--end::Menu 3-->
                     </div>
                     <!--end::Toolbar-->
                  </div>
                  <!--end::Pic-->
                  <!--begin::Info-->
                  <div
                     class="d-flex flex-stack flex-wrap align-items-end"
                     >
                     <!--begin::User-->
                     <div class="d-flex flex-column">
                        <!--begin::Name-->
                        <div class="d-flex align-items-center mb-2">
                           <a
                              href="#"
                              class="text-gray-800 text-hover-primary fs-2 fw-bolder me-1"
                              >{{ $account->name }}</a
                              >
                           <a
                              href="#"
                              class=""
                              data-bs-toggle="tooltip"
                              data-bs-placement="right"
                              title="Account is verified"
                              >
                           <i
                              class="ki-duotone ki-verify fs-1 text-primary"
                              >
                           <span class="path1"></span>
                           <span class="path2"></span>
                           </i>
                           </a>
                        </div>
                     </div>
                     <div class="d-flex">
                     </div>
                     <!--end::Actions-->
                  </div>
                  <!--end::Info-->
               </div>
               <!--end::Details-->
            </div>
         </div>
         <!--end::Navbar-->
         <div id="tabs">
            <ul class="nav nav-tabs nav-line-tabs nav-line-tabs-2x mb-5 fs-6">
               <li class="nav-item">
                  <a class="nav-link active" id="tab1"data-bs-toggle="tab" href="#kt_tab_pane_1">Accounts</a>
               </li>
               <li class="nav-item">
                  <a class="nav-link " id="tab2" data-bs-toggle="tab" href="#kt_tab_pane_2">Users</a>
               </li>
            </ul>
            <div class="tab-content" id="myTabContent">
               <div class="tab-pane fade show active" id="kt_tab_pane_1" role="tabpanel">
                  <div class="card mb-5 mb-xl-10" id="kt_profile_details_view">
                     <!-- Card header -->
                     <div class="card-header cursor-pointer">
                        <!-- Card title -->
                        <div class="card-title m-0">
                           <h3 class="fw-bold m-0">Profile Details</h3>
                        </div>
                     </div>
                     <!-- Card header -->
                     <!-- Card body -->
                     <div class="card-body p-9">
                        <!-- Profile details -->
                        <!-- Full Name -->
                        <div class="row mb-7">
                           <label class="col-lg-4 fw-semibold text-muted">Full Name</label>
                           <div class="col-lg-8">
                              <span class="fw-bold fs-6 text-gray-800">{{ $account->name }}</span>
                           </div>
                        </div>
                        <!-- Email -->
                        <div class="row mb-7">
                           <label class="col-lg-4 fw-semibold text-muted">Email</label>
                           <div class="col-lg-8 fv-row">
                              <span class="fw-semibold text-gray-800 fs-6">{{ $account->email }}</span>
                           </div>
                        </div>
                       <!-- Billing Plan -->
<div class="row mb-7">
    <label class="col-lg-4 col-form-label fw-semibold text-muted">Billing Plan</label>
    <div class="col-lg-4 input-group">
        <select name="filter_data['billing_plan_id']" id="BillingSelect" class="form-select form-select-solid fw-bold filter-input flex-grow-1" data-column="2" data-placeholder="Select option">
            <option value="">select</option>
            @foreach ($billing as $Plan)
            <option value="{{ $Plan->id }}" @if($account->billing_plan_id == $Plan->id) selected @endif>
                {{ $Plan->plan_name }}
            </option>
            @endforeach
        </select>
    </div>
    <div class="col-lg-4 input-group">
        <input type="hidden" id="account_id" name="account_id" value="{{ $account->id }}">
        <button class="btn btn-primary btn-sm" type="button" id="Planbutton">Update</button>
    </div>
</div>

<script>
    var planButton = document.getElementById('Planbutton');

    planButton.addEventListener('click', function() {
        var selectedPlanId = document.getElementById('BillingSelect').value;
        var accountId = document.getElementById('account_id').value;

        fetch('/accounts/update-plan-name', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': '{{ csrf_token() }}'
            },
            body: JSON.stringify({
                billing_plan_id: selectedPlanId,
                account_id: accountId 
            })
        })
        .then(response => {
            if (response.ok) {
                return response.json();
            } else {
                throw new Error('Failed to update plan name');
            }
        })
        .then(data => {
            alert('Plan name updated successfully');
        })
        .catch(error => {
            console.error(error);
            alert('Failed to update plan name');
        });
    });
</script>

                        <!-- Web URL -->
                        <div class="row mb-7">
                           <label class="col-lg-4 fw-semibold text-muted">Web URL</label>
                           <div class="col-lg-8">
                              <a href="#" class="fw-semibold fs-6 text-gray-800 text-hover-primary">{{ $account->web_url }}</a>
                           </div>
                        </div>
                        <div class="row mb-7">
                           <label class="col-lg-4 fw-semibold text-muted">Frontend URL</label>
                           <div class="col-lg-8">
                              <a href="#" class="fw-semibold fs-6 text-gray-800 text-hover-primary">{{ $account->frontend_url }}</a>
                           </div>
                        </div>
                        <!-- Trial Period -->
                        <div class="row mb-7">
                           <label class="col-lg-4 col-form-label fw-semibold text-muted">Trial Ends At </label>
                           <div class="col-lg-4 input-group">
                              <!-- Datepicker input -->
                              <input type="text" class="form-control" id="trialEndDate" placeholder="Select date" aria-label="Select date" aria-describedby="changePlanButton" value="{{ $account->trial_ends_at }}">
                           </div>
                           <div class="col-lg-4 input-group">
                              <button class="btn btn-primary btn-sm" type="button" id="changePlanButton">Extend</button>
                           </div>
                           <div id="accountIdData" data-account-id="{{ $account->id }}" style="display: none;"></div>
                        </div>
                        <script>
                           document.addEventListener("DOMContentLoaded", function() {
                               flatpickr("#trialEndDate", {
                                   dateFormat: "Y-m-d", 
                                   onClose: function(selectedDates, dateStr, instance) {
                                       instance.setDate(dateStr);
                                   }
                               });
                           
                               document.getElementById('changePlanButton').addEventListener('click', function() {
                                   var trialEndDate = document.getElementById('trialEndDate').value;
                                   var accountId = document.getElementById('accountIdData').getAttribute('data-account-id');
                           
                                   fetch('/accounts/update/trial_ends_date/' + accountId, {
                                       method: 'POST',
                                       headers: {
                                           'Content-Type': 'application/json',
                                           'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
                                       },
                                       body: JSON.stringify({ trial_ends_at: trialEndDate }) 
                                   })
                                   .then(response => {
                                       if (response.ok) {
                                           alert('Trial ends date updated successfully');
                                       } else if (response.status === 419) {
                                           throw new Error('CSRF token mismatch');
                                       } else {
                                           throw new Error('Failed to update trial ends date');
                                       }
                                   })
                                   .catch(error => {
                                       console.error(error);
                                       alert('Failed to update trial ends date');
                                   });
                               });
                           });
                        </script>
                        <!--end::Input group-->
                        <!--begin::Input group-->
                        <div class="row mb-7">
                           <!--begin::Label-->
                           <label class="col-lg-4 fw-semibold text-muted"
                              >Asset Directory</label
                              >
                           <!--end::Label-->
                           <!--begin::Col-->
                           <div class="col-lg-8">
                              <span class="fw-bold fs-6 text-gray-800"
                                 >{{ $account->asset_directory }}</span
                                 >
                           </div>
                           <!--end::Col-->
                        </div>
                        <!--end::Input group-->
                        <!--begin::Input group-->
                        <div class="row mb-7">
                           <!--begin::Label-->
                           <label class="col-lg-4 fw-semibold text-muted"
                              >Platform</label
                              >
                           <!--end::Label-->
                           <!--begin::Col-->
                           <div class="col-lg-8">
                              <a
                                 href="#"
                                 class="fw-semibold fs-6 text-gray-800 text-hover-primary"
                                 >{{ $account->platform}}</a
                                 >
                           </div>
                           <!--end::Col-->
                        </div>
                        <!--end::Input group-->
                        <!--begin::Input group-->
                        <div class="row mb-7">
                           <label class="col-lg-4 fw-semibold text-muted">Status</label>
                           <div class="col-lg-8">
                              @if($account->status == 1)
                              <span class="fw-bold fs-6 text-success">Active</span>
                              @else
                              <span class="fw-bold fs-6 text-danger">Inactive</span>
                              @endif
                           </div>
                        </div>
                        <!--end::Input group-->
                        <!--begin::Input group-->
                        <div class="row mb-7">
                           <!--begin::Label-->
                           <label class="col-lg-4 fw-semibold text-muted"
                              >Created at</label
                              >
                           <!--end::Label-->
                           <!--begin::Col-->
                           <div class="col-lg-8">
                              <span class="fw-bold fs-6 text-gray-800"
                                 >{{ $account->created_at}}</span
                                 >
                           </div>
                           <!--end::Col-->
                        </div>
                        <!--end::Input group-->
                        <!--begin::Input group-->
                        <div class="row mb-10">
                           <!--begin::Label-->
                           <label class="col-lg-4 fw-semibold text-muted">
                           Updated at
                           </label>
                           <!--begin::Label-->
                           <!--begin::Label-->
                           <div class="col-lg-8">
                              <span class="fw-semibold fs-6 text-gray-800"
                                 >{{ $account->updated_at}}</span
                                 >
                           </div>
                           <!--begin::Label-->
                        </div>
                        <!-- Deactivate/Activate Account button -->
                        <div class="row mb-10 d-flex justify-content-center">
                           <div class="col-lg-8 d-flex justify-content-center">
                              @if($account->status == 1)
                              <button class="btn btn-danger" onclick="deactivateAccount({{ $account->id }})">Deactivate</button>
                              @else
                              <button class="btn btn-success" onclick="activateAccount({{ $account->id }})">Activate</button>
                              @endif
                           </div>
                        </div>
                     </div>
                     <script>
                        function deactivateAccount(accountId) {
                            var csrfToken = $('meta[name="csrf-token"]').attr('content');
                            var formData = '_token=' + encodeURIComponent(csrfToken);
                        
                            $.ajax({
                                url: '/accounts/deactivate-account/' + accountId,
                                method: 'POST',
                                data: formData,
                                success: function(response) {
                                    alert('Account deactivated successfully');
                                },
                                error: function(xhr, status, error) {
                                    console.error(error);
                                    alert('Failed to deactivate account');
                                }
                            });
                        }
                        
                        function activateAccount(accountId) {
                            var csrfToken = $('meta[name="csrf-token"]').attr('content');
                            var formData = '_token=' + encodeURIComponent(csrfToken);
                        
                            $.ajax({
                                url: '/accounts/activate-account/' + accountId,
                                method: 'POST',
                                data: formData,
                                success: function(response) {
                                    alert('Account activated successfully');
                                },
                                error: function(xhr, status, error) {
                                    console.error(error);
                                    alert('Failed to activate account');
                                }
                            });
                        }
                     </script>
                     <!-- Card body -->
                  </div>
               </div>
               <!-- User Details tab -->
               <div class="tab-pane fade" id="kt_tab_pane_2" role="tabpanel">
                  <div class="card mb-5 mb-xl-10" id="kt_profile_details_view">
                     <div class="card-header cursor-pointer">
                        <div class="card-title m-0">
                           <h3 class="fw-bold m-0">User Details</h3>
                        </div>
                        <button type="button" class="btn btn-sm btn-primary align-self-center" data-bs-toggle="modal" data-bs-target="#kt_modal_1">
                        Add User
                        </button>
                     </div>
                     <div class="modal fade" id="kt_modal_1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                           <div class="modal-content">
                              <div class="modal-header">
                                 <h5 class="modal-title" id="exampleModalLabel">Add New User</h5>
                                 <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                              </div>
                              <div class="modal-body">
                                 <form id="addUserForm">
                                    @csrf
                                    <div class="mb-3">
                                       <label for="name" class="form-label">Name</label>
                                       <input type="text" class="form-control" id="name" name="name" required>
                                    </div>
                                    <div class="mb-3">
                                       <label for="email" class="form-label">Email address</label>
                                       <input type="email" class="form-control" id="email" name="email" required>
                                    </div>
                                    <div class="mb-3">
                                       <label for="password" class="form-label">Password</label>
                                       <input type="password" class="form-control" id="password" name="password" required>
                                       <input type="hidden" id="account_id" name="account_id" value="{{ $account->id }}">
                                       <input type="hidden" id="status" name="status" value="1">
                                    </div>
                                 </form>
                              </div>
                              <div class="modal-footer">
                                 <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                 <button type="button" class="btn btn-primary" id="saveUserBtn">Save changes</button>
                              </div>
                           </div>
                        </div>
                     </div>
                     <script>
                        $(document).ready(function() {
                        $('#saveUserBtn').click(function() {
                            var formData = $('#addUserForm').serialize(); 
                            var csrfToken = $('meta[name="csrf-token"]').attr('content');
                            
                            formData += '&_token=' + csrfToken;
                        
                            $.ajax({
                                url: '/accounts/users/add',
                                method: 'POST', 
                                data: formData,
                                success: function(response) {
                                    alert('User added successfully');
                                    $('#kt_modal_1').modal('hide'); 
                                    var accountID = $('#account_id').val();
                                    var page = 2; 
                                    var tab = 'kt_tab_pane_2';
                                    var redirectUrl = '/accounts/details/' + accountID + '?page=' + page + '#' + tab;
                                    window.location.href = redirectUrl;
                                },
                                error: function(xhr, status, error) {
                                    console.error(error);
                                    alert('Failed to add user');
                                }
                            });
                        });
                        });
                        
                     </script>
                     <div id="kt_referrals_1"class="card-body p-0 tab-pane fade show active"role="tabpanel">
                        <div class="table-responsive">
                           <table class="table align-middle table-row-bordered table-row-solid gy-4 gs-9">
                              <tr>
                                 <th class="min-w-140px">ID</th>
                                 <th class="min-w-175px ps-9">Account Name</th>
                                 <th class="min-w-150px px-0">Email</th>
                                 <th class="min-w-130px">Status</th>
                                 <th class="min-w-150px">Created Time</th>
                                 <th class="min-w-150px">Last Login</th>
                                 <th class="min-w-150px">Actions</th>
                              </tr>
                              <tbody class="fs-6 fw-semibold text-gray-600">
                                 @foreach ($users as $user)
                                 <tr>
                                    <td class="min-w-140px">{{ $user->id}}  </td>
                                    <td class="min-w-175px ps-9">{{ $user->name }}  </td>
                                    <td class="min-w-150px px-0">{{ $user->email }}</td>
                                    <td class="min-w-130px"> 
                                       @if($user->status == 1)
                                       <span class="fw-bold fs-6 text-success">Active</span>
                                       @else
                                       <span class="fw-bold fs-6 text-danger">Inactive</span>
                                       @endif
                                    </td>
                                    <td class="min-w-150px">{{ $user->created_at }}</td>
                                    <td class="min-w-150px">{{ $user->last_login_at}}</td>
                                    <td>
                                       <div class="d-flex">
                                          <a href="#" class="edit-user-btn d-flex align-items-center text-decoration-none me-4" data-bs-toggle="modal" data-bs-target="#editUserModal" data-user-id="{{ $user->id }}" data-name="{{ $user->name }}" data-email="{{ $user->email }}">
                                          <i class="fas fa-edit fa-lg me-1 text-warning"></i>
                                          </a>
                                          <a href="#" onclick="event.preventDefault(); deleteUser(event, {{$user->id}});" class="text-decoration-none">
                                          <i class="fas fa-trash-alt fa-lg text-danger"></i>
                                          </a>
                                       </div>
                                    </td>
                                    <div class="modal fade" tabindex="-1" id="editUserModal">
                                       <div class="modal-dialog">
                                          <div class="modal-content">
                                             <div class="modal-header">
                                                <h3 class="modal-title">Update User</h3>
                                                <!-- Close button -->
                                                <div class="btn btn-icon btn-sm btn-active-light-primary ms-2" data-bs-dismiss="modal" aria-label="Close">
                                                   <i class="ki-duotone ki-cross fs-1"><span class="path1"></span><span class="path2"></span></i>
                                                </div>
                                             </div>
                                             <div class="modal-body">
                                                <form id="updateForm">
                                                   <div class="form-group">
                                                      <label for="name">Name</label>
                                                      <input type="text" class="form-control" id="editName" name="name" placeholder="Enter name">
                                                   </div>
                                                   <div class="form-group">
                                                      <label for="email">Email address</label>
                                                      <input type="email" class="form-control" id="editEmail" name="email" placeholder="Enter email">
                                                   </div>
                                                   <div class="form-group">
                                                      <label for="password">Password</label>
                                                      <input type="password" class="form-control" id="editPassword" name="password" placeholder="Password">
                                                   </div>
                                                   <!-- Hidden input field for status with default value of 1 -->
                                                   <input type="hidden" id="editStatus" name="status" value="1">
                                                   <!-- Hidden input field for user ID -->
                                                   <input type="hidden" id="editUserId" name="userId">
                                                </form>
                                             </div>
                                             <div class="modal-footer">
                                                <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                                                <button type="button" class="btn btn-primary" id="saveEditChangesBtn">Save changes</button>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <script>
                                       $(document).ready(function() {
                                           $('.edit-user-btn').click(function() {
                                               var userId = $(this).data('user-id');
                                               var name = $(this).data('name');
                                               var email = $(this).data('email');
                                       
                                               $('#editUserId').val(userId);
                                               $('#editName').val(name);
                                               $('#editEmail').val(email);
                                               $('#editPassword').val('');
                                           });
                                       
                                           $('#saveEditChangesBtn').off('click').on('click', function() {
                                               var formData = $('#updateForm').serialize();
                                               var userId = $('#editUserId').val();  
                                               var csrfToken = $('meta[name="csrf-token"]').attr('content'); 
                                       
                                               $.ajax({
                                                   url: '/accounts/users/' + userId, 
                                                   method: 'POST', 
                                                   headers: {
                                                       'X-CSRF-TOKEN': csrfToken 
                                                   },
                                                   data: formData,
                                                   success: function(response) {
                                                       alert('User data updated successfully');
                                                       $('#editUserModal').modal('hide');
                                                       var accountID = $('#account_id').val();
                                                   var page = 2; 
                                                   var tab = 'kt_tab_pane_2';
                                                   var redirectUrl = '/accounts/details/' + accountID + '?page=' + page + '#' + tab;
                                                   window.location.href = redirectUrl;
                                                       
                                       
                                                   },
                                                   error: function(xhr, status, error) {
                                                       console.error(error);
                                                       alert('Failed to update user data');
                                                   }
                                               });
                                           });
                                       });
                                    </script>
                                    <form id="deleteUserForm{{$user->id}}" action="{{ route('users.softDelete', ['id' => $user->id]) }}" method="POST" style="display: none;">
                                       @csrf
                                       @method('delete')
                                    </form>
                                    <script>
                                       function deleteUser(event, userId) {
                                           event.preventDefault();
                                           if (confirm('Are you sure you want to delete this user?')) {
                                               var form = document.getElementById('deleteUserForm' + userId);
                                               fetch(form.action, {
                                                   method: 'POST',
                                                   headers: {
                                                       'Content-Type': 'application/json',
                                                       'X-CSRF-TOKEN': '{{ csrf_token() }}'
                                                   },
                                                   body: JSON.stringify({
                                                       _method: 'DELETE'
                                                   })
                                               })
                                               .then(response => {
                                                   if (response.ok) {
                                                       alert('User deleted successfully'); 
                                                      
                                                   } else {
                                                       throw new Error('Failed to delete user');
                                                   }
                                               })
                                               .catch(error => {
                                                   console.error(error);
                                                   alert('Failed to delete user');
                                               });
                                           }
                                       }
                                    </script>
                                    </td>
                                 </tr>
                                 @endforeach
                              </tbody>
                           </table>
                           <div class="mt-3 d-flex justify-content-center ">
                              {!! $users->links() !!}
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <script src="{{ asset('js/app.js') }}"></script>
      <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
      <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>
      <script>
         $(function()) {
             
             function getTabFromUrl() {
                 var url = window.location.href;
                 var hashIndex = url.indexOf('#');
                 if (hashIndex !== -1) {
                     return url.substring(hashIndex + 1);
                 } else {
                     return ''; 
                 }
             }
         
             function selectTab(tab) {
                 if (tab === '') {
                    
                     tab = 'kt_tab_pane_2';
                 }
                 if ($("#" + tab).length) {
                     $("#tabs").tabs("option", "active", $("#" + tab).index());
                 }
             }
         
             $(document).on('click', '.pagination a', function(event) {
                 event.preventDefault(); 
                 
                 var page = $(this).attr('href').split('page=')[1]; 
                 var tab = '{{ $account->id }}'; 
                 var url = "/accounts/details/" + tab + "?page=" + page; 
                 
                 window.location.href = url; 
             });
         
             $('#tabs').tabs("option", "active", index);
      </script>
      <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
      <!-- Include Flatpickr library -->
      <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
      @include('common.footer')
   </body>
</html>