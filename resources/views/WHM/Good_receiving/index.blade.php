@extends('app')

@section('content')
<div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card mt-5">
                    <div class="card-header">
                    <div class="d-flex justify-content-between">
                            <h4 class="card-title tx-20 mg-b-0 p-2">Good Receiving</h4>
                        </div>
                        
                    </div>
                    <div class="card-body">
                        <div class="d-flex justify-content-end">
                        <!-- <a href="" class="btn btn-primary mb-2">Create User</a> -->
                        </div>
                    
                        <table class="table  mt-2" id="example1">
                            <thead>
                                <tr>
                                    <td>Doc Key </td>
                                    <td>Doc no</td>
                                    <td>Doc Date</td>
                                    <td>Incominig Qty</td>
                                    <td>receive Qty</td>
                                    <td>Action</td>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="text-center">
                                    <td>454574</td>
                                    <td>P003654</td>
                                    <td>2/12/2023</td>
                                    <td>20</td>
                                    <td>20</td>
                                    <td>
                                    <div class="dropdown">
                                        <button aria-expanded="false" aria-haspopup="true" class="btn ripple btn-primary"
                                        data-toggle="dropdown" id="dropdownMenuButton" type="button">Action<i class="fas fa-caret-down ml-1"></i></button>
                                        <div  class="dropdown-menu tx-13">
                                            <a class="dropdown-item" href="#">View</a>
                                            <a class="dropdown-item" data-toggle="modal" data-target="#staticBackdrop">receive</a>
                                        </div>
                                    </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    

   


        <div class="modal fade " id="staticBackdrop1" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content" style="width:1000px; margin-left:-240px;">
                    <div class="modal-header">
                        <h5 class="modal-title" id="staticBackdropLabel">Receiving Quantity</h5>
                        <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"><i class="fa fa-xmark"></i></button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-4">
                            <p><b>Item Code:</b>XX</p>
                            <p><b>Description</b>XX</p>
                            <hr>
                            </div>
                            <div class="col-md-4"></div>
                            <div class="col-md-4">
                            <p><b>Receiving Quantity:</b>XX</p>
                            <p><b>Total Receiving Quantity:</b>XX</p>
                            <hr>
                            </div>
                        </div>


                    <table class="table mt-2 w-100" id="example1">
                            <thead>
                                <tr>
                                    <td>Location</td>
                                    <td>UOM</td>
                                    <td>Receiving Quantity</td>
                                    <td>Remarks</td>
                                    <td>Remarks</td>
                                    <td>Action</td>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="text-center">
                                    <td><select name="" placeholder="Select Location" class="form-control" id="">
                                        <option value="">Area 1 > shelf > level 1</option>
                                        <option value="">Area 2 > shelf > level 2</option>
                                    </select></td>
                                    <td><input type="text" readonly value="UNIT" name="" id="" class="form-control"></td>
                                    <td><input type="text" placeholder="User Input" name="" id="" class="form-control"></td>
                                    <td><textarea name="" id="" placeholder="User Input" cols="30" rows="1"></textarea></td>
                                    <td><button class="btn btn-primary">print </button></td>
                                    <td>
                                        <div class="row">
                                            <div class="col-md-6"><button class="btn btn-primary" >+</button></div>
                                            <div class="col-md-6"><button class="btn btn-danger">X</button></div>
                                        
                                        
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

    @endsection