@extends('layout.master')
@section('content')
<div class="row mt-4">
<div class="col-lg-12 mb-lg-0 mb-4">
<div class="card z-index-2 h-100">
  {{-- common for all pages --}}
<div class="card-header pb-0">
        <h6>Details</h6>
              @if (session('status'))
              <div class="row">
               <h6 class="alert alert-success">{{ session('status') }}</h6>
              </div>
              @endif

            </div>
            <div class="card-body px-0 pt-0 pb-2">
              <div class="table-responsive p-0">
                <table class="table align-items-center mb-0">
                  <thead>
                    <tr>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity 0">User</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity 0">Role</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity 0 ps-2">Activity</th>
                    </tr>
                  </thead>
                <tbody>

              @foreach ($manageUser as $User) 
                <tr>
                  <td>
                    <div class="d-flex px-2 py-1">
                      <div>
                        <img src="{{ asset('picture/'.$User->picture) }}" class="avatar avatar-sm me-3" alt="user6">
                      </div>
                      <div class="d-flex flex-column justify-content-center">
                        <h6 class="mb-0 text-sm">{{ $User->name }}</h6>
                        <p class="text-xs text-secondary mb-0">{{ $User->email }}</p>
                      </div>
                    </div>
                  </td>
                  <td>
                    <p class="text-xs font-weight-bold mb-0">{{ $User->role }}</p>
                  </td>
                   <td class="align-middle text-center text-sm">
                    @if(($User->status) == 1)
                        <span class="badge badge-sm bg-gradient-success">Active</span>    
                    @endif
                  </td>
                @endforeach
                </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div> 
      <p></p>
</div>
</div>
</div>
@endsection
@push('customScript')
<script src="{{ asset('./admin_assets/customJs/deleteUser.js') }}"></script> 
@endpush