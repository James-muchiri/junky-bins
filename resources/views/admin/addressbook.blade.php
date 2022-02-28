@extends('admin.include.index')  
@section('content')  


<style>
    input:not([type]), input[type=text], input[type=password], input[type=email], input[type=url], input[type=time], input[type=date], input[type=datetime], input[type=datetime-local], input[type=tel], input[type=number], input[type=search], textarea.materialize-textarea {
    background-color: transparent;
    border: none;
    border-bottom: 1px solid #9e9e9e;
    border-radius: 0;
    outline: none;
    height: 3rem;
    width: 80%;
    font-size: 1rem;
    margin: 0 0 20px 0;
    padding: 5;
    box-shadow: none;
    box-sizing: content-box;
    transition: all 0.3s;
}
</style>
         

  

<div class="row no-m-t no-m-b">
<div class="col s12 m12 l12">
<div class="card card-transparent">
    <div class="card-content">
            <a class="btn waves-effect waves-light light-green darken-4" data-toggle="modal" data-target="#Createaddressbook">New Address Book</a> &nbsp;
   
    </div>
</div>
</div>
</div>

<div class="row no-m-t no-m-b">
<div class="col s12 m12 l12">
 <div class="card card-white">   
    <div class="card-content">
  
        <div class="row">
            <div class="col-sm-6">

                <span class="card-title">
                    <div class="dropdown">
                    <a class="dropdown-button btn light-blue darken-4" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">With Selected</a>
                  
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                            <li><a href="#" onclick="bulkaction('delete','inbox-form','Are you sure you want to delete the selected item(s)?');"> <i class="fa fa-trash"></i> Delete</a></li>
                </ul>
                      </div>


                    </span>
                   



            </div>
            <div class="col-sm-6">
                <form action="acustomer" method="get">
                    <div class="input-field col s12">
                       <i class="fa fa-search prefix"></i>
                       <input class="search_input "type="text" name="sc" value="" placeholder="Search...">
                    </div>
                    </form> 
            </div>
    
        </div>
    
    <div class="container table-responsive py-5"> 
       <table class="table table-striped table-bordered table-hover">
                    <thead class="thead-dark">
            <tr>
                <th><input type="checkbox" class="filled-in" id="selectall"><label for="selectall"></label></th>
                <th data-field="id">ID</th>
                <th data-field="date">Title</th>
                <th data-field="type">Description</th>
                <th data-field="type">Contacts</th>                
                <th data-field="date">Created On</th>
                <th data-field="date">Status</th>
                <th data-field="action"></th>
            </tr>
         </thead>
         
         <tbody>
            <form action="acustomer" method="post" id="inbox-form"></form>
                <input type="hidden" id="bulkaction" name="action" value="">
                <tr class="">
                     <td><input type="checkbox" class="filled-in bulk" id="bulk24" value="24]" name="bulk[24]"> <label for="bulk24"></label></td>
                     <td>24</td>
                     <td>Keelan</td>
                     <td>Harris</td>
               
                  
                     <td>2020-11-15</td>
                     <td><span class="green-text">Active
                     </span></td><td> 
                     <a class="hoverable" href="acustomer?v=24"><i class="fa fa-eye"></i> Manage</a>                                                          </td>
                </tr>
                <tr class="">
                     <td><input type="checkbox" class="filled-in bulk" id="bulk23" value="23]" name="bulk[23]"> <label for="bulk23"></label></td>
                     <td>23</td>
                     <td>proeubwp1|</td>
                     <td>prir</td>
                   
                     
                     <td>2020-11-01</td>
                     <td><span class="green-text">Active
                     </span></td><td> 
                     <a class="hoverable" href="acustomer?v=23"><i class="fa fa-eye"></i> Manage</a>                                                          </td>
                </tr>
                <tr class="">
                     <td><input type="checkbox" class="filled-in bulk" id="bulk22" value="22]" name="bulk[22]"> <label for="bulk22"></label></td>
                     <td>22</td>
                     <td>test</td>
                     <td>test</td>
                     
                   
                     <td>2020-10-25</td>
                     <td><span class="green-text">Active
                     </span></td><td> 
                     <a class="hoverable" href="acustomer?v=22"><i class="fa fa-eye"></i> Manage</a>                                                          </td>
                </tr>
                <tr class="">
                     <td><input type="checkbox" class="filled-in bulk" id="bulk21" value="21]" name="bulk[21]"> <label for="bulk21"></label></td>
                     <td>21</td>
                     <td>pranav</td>
                     <td>PS </td>
                    
                   
                     <td>2020-09-24</td>
                     <td><span class="green-text">Active
                     </span></td><td> 
                     <a class="hoverable" href="acustomer?v=21"><i class="fa fa-eye"></i> Manage</a>                                                          </td>
                </tr>
                <tr class="">
                     <td><input type="checkbox" class="filled-in bulk" id="bulk20" value="20]" name="bulk[20]"> <label for="bulk20"></label></td>
                     <td>20</td>
                     <td>GALAXT</td>
                     <td>WIFI</td>
                    
                   
                     <td>2020-09-21</td>
                     <td><span class="green-text">Active
                     </span></td><td> 
                     <a class="hoverable" href="acustomer?v=20"><i class="fa fa-eye"></i> Manage</a>                                                          </td>
                </tr>
       
               
            
         </tbody>
    </table>  
    </div>
  </div>
</div>          
</div>
</div>



  <!-- Modal -->
<div class="modal fade" id="Createaddressbook" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalCenterTitle">Create Customer</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body" style="width:inherit">
            <form action="acustomer" method="post" id="add_contact" onsubmit="return false;">
              
                <div class="row">
                    <div class="form-group col-sm-6">
                      <label for="email">First Name</label>
                      <input type="text" class="form-control" id="email" placeholder="First Name" >
                    </div>
                    <div class="form-group col-sm-6">
                      <label for="pwd">Last Name</label>
                      <input type="text" class="form-control" id="pwd" placeholder="last Name">
                    </div>
                  </div>
                     
                
                    <div class="form-group">
                      <label for="email">Email</label>
                      <input type="email" class="form-control" id="email" placeholder="Email" >
                    </div>
                    <div class="form-group ">
                      <label for="pwd">Phonenumber</label>
                      <input type="text" class="form-control" id="pwd" placeholder="Phonenumber">
                    </div>
                  
              
                  <div class="form-group">
                    <label for="x">Input with units</label>
                    <input type="text" class="form-control" id="x" placeholder="Input with units">
                  
                  </div>
                <h4>To recieve subscription messages</h4>
                  <div class="radio-group">
                    <div class="radio">
                      <input type="radio" class="radio-option" id="r1" name="optradio">
                      <label class="radio-option-label" for="r1">
                        <div class="radio-option-label-text">Yes</div>
                      </label>
                    </div>
                    <br>
                    <div class="radio">
                      <input type="radio" class="radio-option" id="r2" name="optradio">
                      <label class="radio-option-label" for="r2">
                        <div class="radio-option-label-text">No</div>
                      </label>
                    </div>
                    <br>
                
                  </div>
              
              
                </form>
                
              
               
      
                 
                
                 
             
        <div class="modal-footer">
          <button type="button btn waves-effect waves-light red" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <a class="btn waves-effect waves-light red" data-dismiss="modal">Cancel</a>
        </form>
    
        </div>
      </div>
    </div>
  </div>


  
<script>
    
</script>
@stop