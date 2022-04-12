@extends('admin.dashboard')
@section('admin_content')
<div class="row wrapper border-bottom white-bg page-heading animated fadeInRight">
    <div class="col-lg-8">
        <h2>Invoice</h2>
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="{{route('/')}}">Home</a>
            </li>
            <li class="breadcrumb-item">
                Other Pages
            </li>
            <li class="breadcrumb-item active">
                <strong>Invoice</strong>
            </li>
        </ol>
    </div>
    <div class="col-lg-4">
        <div class="title-action">
            
            <a href="#" onclick="printDiv('invoice-div')" target="_blank" class="btn btn-primary"><i class="fa fa-print"></i>
                Print Invoice </a>
        </div>
    </div>

</div>

<div class="wrapper wrapper-content animated fadeInRight" id="invoice-div">

    <div class="row">
        <div class="col-lg-12">
            <div class="ibox-content p-xl">
                <div class="row">
                    <div class="col-sm-6">
                        <h5>From:</h5>
                        <address>
                            <strong>Admin, Inc.</strong><br>
                            106 Jorg Avenu, 600/10<br>
                            Chicago, VT 32456<br>
                            <abbr title="Phone">P:</abbr> (123) 601-4590
                        </address>
                    </div>

                    <div class="col-sm-6 text-right">
                        <h4>Invoice No.</h4>
                        <h4 class="text-navy">INV-000567F7-00</h4>
                        <span>To:</span>
                        <address>
                            <strong>Corporate, Inc.</strong><br>
                            112 Street Avenu, 1080<br>
                            Miami, CT 445611<br>
                            <abbr title="Phone">P:</abbr> (120) 9000-4321
                        </address>
                        <p>
                            <span><strong>Invoice Date:</strong> Marh 18, 2022</span><br />
                           
                        </p>
                    </div>
                </div>

                <div class="table-responsive m-t">
                    <table class="table invoice-table">
                        <thead>
                            <tr>
                                <th>Item List</th>
                                <th>Quantity</th>
                                <th>Unit Price</th>
                                <th>Tax</th>
                                <th>Total Price</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <div><strong>Admin Theme with psd project layouts</strong></div>
                                    <small>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                                        eiusmod tempor incididunt ut labore et dolore magna aliqua.</small>
                                </td>
                                <td>1</td>
                                <td>$26.00</td>
                                <td>$5.98</td>
                                <td>$31,98</td>
                            </tr>
                            <tr>
                                <td>
                                    <div><strong>Wodpress Them customization</strong></div>
                                    <small>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                                        eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                        Eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                    </small>
                                </td>
                                <td>2</td>
                                <td>$80.00</td>
                                <td>$36.80</td>
                                <td>$196.80</td>
                            </tr>
                            

                        </tbody>
                    </table>
                </div><!-- /table-responsive -->

                <table class="table invoice-total">
                    <tbody>
                        <tr>
                            <td><strong>Sub Total :</strong></td>
                            <td>$186.00</td>
                        </tr>
                        <tr>
                            <td><strong>TAX :</strong></td>
                            <td>$42.78</td>
                        </tr>
                        <tr>
                            <td><strong>TOTAL :</strong></td>
                            <td>$228.78</td>
                        </tr>
                    </tbody>
                </table>
                

               
            </div>
        </div>
    </div>
</div>


@endsection