@extends('mylayouts.main')

@section('container')
    
<div class="content-wrapper">
    <!-- Content -->

    <div class="container-xxl flex-grow-1 container-p-y">
      <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Forms /</span> Basic Inputs</h4>

      <div class="row">

        <div class="col-xl-6">
          <!-- HTML5 Inputs -->
          <div class="card mb-4">
            <h5 class="card-header">HTML5 Inputs</h5>
            <div class="card-body">
              <div class="mb-3 row">
                <label for="html5-text-input" class="col-md-2 col-form-label">Name</label>
                <div class="col-md-10">
                  <input class="form-control" type="text" value="" id="html5-text-input" placeholder="Name User"/>
                </div>
              </div>
              <div class="mb-3 row">
                <label for="html5-email-input" class="col-md-2 col-form-label">Email User</label>
                <div class="col-md-10">
                  <input class="form-control" type="email" placeholder="john@example.com" id="html5-email-input"/>
                </div>
              </div>
              <div class="mb-3 row">
                <label for="html5-password-input" class="col-md-2 col-form-label">Password</label>
                <div class="col-md-10">
                  <input class="form-control" type="password" placeholder="password" id="html5-password-input" />
                </div>
              </div>
              <div class="mb-3 row">
                <label for="exampleDataList" class="col-form-label col-md-2">Datalist example</label>
                <div class="col-md-10">
                    <input
                      class="form-control"
                      list="datalistOptions"
                      id="exampleDataList"
                      placeholder="Type to search..."
                    />
                    <datalist id="datalistOptions">
                      <option value="San Francisco"></option>
                      <option value="New York"></option>
                      <option value="Seattle"></option>
                      <option value="Los Angeles"></option>
                      <option value="Chicago"></option>
                    </datalist>
                </div>
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>
    <!-- / Content -->

    <div class="content-backdrop fade"></div>
  </div>

@endsection