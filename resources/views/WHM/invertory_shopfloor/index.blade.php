@extends('app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                <div class="card-header">
                    <h5>Inventory ShopFloor</h5>
                </div>
                    <div class="card-body"  style="background:#effaff; border-radius:5px; height:400px;">
                        <div class="row">
                            <div class="col-md-3">
                                <div class="card" style="box-shadow:1px 1px 5px 5px #707078;  width:180px;">
                                    <div class="card-header">
                                        <h6 class="text-center m-0 p-0" style="background:pink;">Area 1</h6>
                                    </div>
                                    <div class="card-body text-center">
                                        <span type="button" data-toggle="modal" data-target="#staticBackdrop">shelf - 1: 1200</span>
                                        <span type="button" data-toggle="modal" data-target="#staticBackdrop">shelf - 2: 200</span>
                                    </div>
                                    <div class="card-footer">
                                        <h6 class="text-center m-0 p-0" style="background:pink;">Total: 1400</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                            <div class="card" style="box-shadow:1px 1px 5px 5px #707078;  width:180px;">
                                    <div class="card-header">
                                        <h6 class="text-center m-0 p-0" style="background:pink;">Area 2</h6>
                                    </div>
                                    <div class="card-body text-center">
                                        <span  type="button" data-toggle="modal" data-target="#staticBackdrop">shelf - 1: 1200</span>
                                        <span  type="button" data-toggle="modal" data-target="#staticBackdrop">shelf - 2: 200</span>
                                    </div>
                                    <div class="card-footer">
                                        <h6 class="text-center m-0 p-0" style="background:pink;">Total: 1400</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Button trigger modal -->
      

        <!-- Modal -->
        <div class="modal fade " id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="staticBackdropLabel">Area A > Shelf - 3</h5>
                        <!-- <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"><i class="fa "></i></button> -->
                    </div>
                    <div class="modal-body w-100">
                        <table class="table w-100" id="example1">
                            <thead>
                                <tr>
                                    <td>Levels</td>
                                    <td>Item Code</td>
                                    <td>Total</td>
                                    <td>acrion</td>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>R1</td>
                                    <td>Item 1</td>
                                    <td>20</td>
                                    <td><button class="btn-sm  btn-primary float-end" data-toggle="modal" data-target="#staticBackdrop1">Submit</button></td>
                                </tr>
                                <tr>
                                    <td>R2</td>
                                    <td>Item B</td>
                                    <td>200</td>
                                    <td><button class="btn-sm  btn-primary float-end" data-toggle="modal" data-target="#staticBackdrop1">Submit</button></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>



        <div class="modal fade " id="staticBackdrop1" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="staticBackdropLabel">Area A > Shelf -1 > R1</h5>
                        <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"><i class="fa fa-xmark"></i></button>
                    </div>
                    <div class="modal-body">
                        <table class="table w-100" id="example2">
                            <thead>
                                <tr>
                                    <td>Item Code</td>
                                    <td>Description</td>
                                    <td>action</td>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Item A</td>
                                    <td>Item AA </td>
                                    <td>20</td>
                                </tr>
                                <tr>
                                    <td>Item B</td>
                                    <td>Item BB </td>
                                    <td>200</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
@endsection