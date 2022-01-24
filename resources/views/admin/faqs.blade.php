@extends('admin.include.index')  
@section('content')  


<div class="container-fluid" id="grad1">
    <div class="row">
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
            Launch demo modal
          </button>
          
          <!-- Modal -->
          <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalCenterTitle">Modal title</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  ...
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                  <button type="button" class="btn btn-primary">Save changes</button>
                </div>
              </div>
            </div>
          </div>
    </div>
    <div class="row justify-content-center mt-0">

        <div class="col-sm-12">
            <div class="table-responsive">
            <table id="dtBasicExample" class="table table-striped table-bordered table-sm" cellspacing="0" width="100%">
                <thead>
                    <tr>
                        <td class="t_head"></td>
                        <td class="t_head">Question</td>
                        <td class="t_head">Answer</td>
                 
                        
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>
                            1
                        </td>
                        <td>
                            How Do I Dispose Of Hazardous Materials?
                        </td>
                        <td>
                            To check the availability of these services in your area, enter your zip code in the residential service finder.
                        </td>
                    </tr>
                    <tr>
                        <td>
                            1
                        </td>
                        <td>
                            How Do I Dispose Of Hazardous Materials?
                        </td>
                        <td>
                            To check the availability of these services in your area, enter your zip code in the residential service finder.
                        </td>
                    </tr>
                    <tr>
                        <td>
                            1
                        </td>
                        <td>
                            How Do I Dispose Of Hazardous Materials?
                        </td>
                        <td>
                            To check the availability of these services in your area, enter your zip code in the residential service finder.
                        </td>
                    </tr>
                    <tr>
                        <td>
                            1
                        </td>
                        <td>
                            How Do I Dispose Of Hazardous Materials?
                        </td>
                        <td>
                            To check the availability of these services in your area, enter your zip code in the residential service finder.
                        </td>
                    </tr>
                </tbody>
            </table>
            </div>
        </div>
    </div>
</div>



@stop