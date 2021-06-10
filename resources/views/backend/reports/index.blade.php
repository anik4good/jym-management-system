<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">
    <title>Hello, world!</title>
    <style>
        #invoice {
            padding: 30px;
        }

        .invoice {
            position: relative;
            background-color: #FFF;
            min-height: 680px;
            padding: 15px
        }

        .invoice header {
            padding: 10px 0;
            margin-bottom: 20px;
            border-bottom: 1px solid #3989c6
        }

        .invoice .company-details {
            text-align: right
        }

        .invoice .company-details .name {
            margin-top: 0;
            margin-bottom: 0
        }

        .invoice .contacts {
            margin-bottom: 20px
        }

        .invoice .invoice-to {
            text-align: left
        }

        .invoice .invoice-to .to {
            margin-top: 0;
            margin-bottom: 0
        }

        .invoice .invoice-details {
            text-align: right
        }

        .invoice .invoice-details .invoice-id {
            margin-top: 0;
            color: #3989c6
        }

        .invoice main {
            padding-bottom: 50px
        }

        .invoice main .thanks {
            margin-top: -100px;
            font-size: 2em;
            margin-bottom: 50px
        }

        .invoice main .notices {
            padding-left: 6px;
            border-left: 6px solid #3989c6
        }

        .invoice main .notices .notice {
            font-size: 1.2em
        }

        .invoice table {
            width: 100%;
            border-collapse: collapse;
            border-spacing: 0;
            margin-bottom: 20px
        }

        .invoice table td, .invoice table th {
            padding: 15px;
            background: #eee;
            border-bottom: 1px solid #fff
        }

        .invoice table th {
            white-space: nowrap;
            font-weight: 400;
            font-size: 16px
        }

        .invoice table td h3 {
            margin: 0;
            font-weight: 400;
            color: #3989c6;
            font-size: 1.2em
        }

        .invoice table .qty, .invoice table .total, .invoice table .unit {
            text-align: right;
            font-size: 1.2em
        }

        .invoice table .no {
            color: #fff;
            font-size: 1.6em;
            background: #3989c6
        }

        .invoice table .unit {
            background: #ddd
        }

        .invoice table .total {
            background: #3989c6;
            color: #fff
        }

        .invoice table tbody tr:last-child td {
            border: none
        }

        .invoice table tfoot td {
            background: 0 0;
            border-bottom: none;
            white-space: nowrap;
            text-align: right;
            padding: 10px 20px;
            font-size: 1.2em;
            border-top: 1px solid #aaa
        }

        .invoice table tfoot tr:first-child td {
            border-top: none
        }

        .invoice table tfoot tr:last-child td {
            color: #3989c6;
            font-size: 1.4em;
            border-top: 1px solid #3989c6
        }

        .invoice table tfoot tr td:first-child {
            border: none
        }

        .invoice footer {
            width: 100%;
            text-align: center;
            color: #777;
            border-top: 1px solid #aaa;
            padding: 8px 0
        }

        @media print {
            .invoice {
                font-size: 11px !important;
                overflow: hidden !important
            }

            .invoice footer {
                position: absolute;
                bottom: 10px;
                page-break-after: always
            }

            .invoice > div:last-child {
                page-break-before: always
            }
        }
    </style>
</head>
<body>
<!--Author      : @arboshiki-->
<div id="invoice">
    <div class="toolbar hidden-print">
        <hr>
    </div>
    <div class="invoice overflow-auto">
        <div style="min-width: 600px">
            <header>
                <div class="row">
                    <div class="col">
                        <a target="_blank" href="https://lobianijs.com">
                            <img
                                src="https://www.amifit.net/wp/wp-content/uploads/2021/02/cropped-output-onlinepngtools-1-147x149.png"
                                data-holder-rendered="true"/>
                        </a>
                    </div>
                    <div class="col company-details">
                        <h2 class="name">
                            <a target="_blank" href="https://lobianijs.com">
                                Ami Fit
                            </a>
                        </h2>
                        <div>455 Foggy Heights, AZ 85004, US</div>
                        <div>(123) 456-789</div>
                        <div>company@example.com</div>
                    </div>
                </div>
            </header>
            <main>
                <div class="text-gray-light align-content-center">CLIENT INFROMATION:</div>
                <hr>
                <div class="row contacts">
                    <div class="col invoice-to">
                        <h5 class="invoice-id">Basic</h5>
                        <hr>
                        <div class="address">Name: {{$diets->user->name}}</div>
                        <div class="address">Age: {{$diets->user->userprofile->age}}</div>
                        <div class="address">Sex: {{$diets->user->userprofile->gender}}</div>
                        <div class="address">Dietary restrictions: {{$diets->user->userprofile->age}}</div>
                        <div class="address">Allergy indication: {{$diets->user->userprofile->gender}}</div>
                        <div class="address">Exercise: {{$diets->user->userprofile->gender}}</div>
                        <div class="address">Gym access: {{$diets->user->userprofile->gender}}</div>
                        <div class="address">Medicine: {{$diets->user->userprofile->gender}}</div>
                    </div>
                    <div class="col invoice-details">
                        <h5 class="invoice-id">Advanced</h5>
                        <hr>
                        <div class="address">Health condition: {{$diets->user->userprofile->gender}}</div>
                        <div class="address">Blood pressure: {{$diets->user->userprofile->gender}}</div>
                        <div class="address">Diabetes: {{$diets->user->userprofile->gender}}</div>
                        <div class="address">Current BMI: {{$diets->user->userprofile->bmi}}</div>
                        <div class="address">Current Ponderal Index Status: {{$diets->user->userprofile->ponderalindex}}</div>
                        <div class="address">Current Body fat Status: {{$diets->user->userprofile->bodyfat}}</div>
                        <div class="address">Current BMR status: {{$diets->user->userprofile->bmr}}</div>
                        <div class="address">Current BSA status: {{$diets->user->userprofile->bsa}}</div>

                    </div>
                </div>
                <hr>
                <div class="notices">
                    <div>Diet Name:</div>
                    <div class="notice">{{$diets->name}}</div>
                </div>
                <hr>
                <div class="row contacts">
                    <div class="col invoice-to">
                        <h2 class="to">Breakfast</h2>
                    </div>
                    <div class="col invoice-details">
                        <div class="date">Time: {{$morning_time}}</div>
                    </div>
                </div>
                <table border="0" cellspacing="0" cellpadding="0">
                    <thead>
                    <tr>
                        <th class="text-left">#</th>
                        <th class="text-left">Food name</th>
                        <th class="text-right">SERVING</th>
                        <th class="text-right">Calories</th>
                        <th class="text-right">Fat</th>
                        <th class="text-right">Protein</th>
                        <th class="text-right">Carbohydrates</th>

                    </tr>
                    </thead>
                    <tbody>
                    @foreach($morning as $key=>$roww)
                        @php
                            $row=  \App\Models\Food::where('id',$roww->food_id)->first();
                        @endphp
                    <tr>
                        <td class="text-left">{{$key+1}}</td>
                        <td class="text-left"><h3>
                              {{$row->name}}
                        </td>
                        <td class="qty">{{$row->calories}}</td>
                        <td class="qty">{{$row->calories}}</td>
                        <td class="qty">{{$row->fat}}</td>
                        <td class="qty">{{$row->protein}}</td>
                        <td class="qty">{{$row->carbohydrate}}</td>
                    </tr>
                    @endforeach
                    <tr>
                        <td class="no">Total</td>
                        <td class="text-left">

                        </td>
                        <td class="text-left">

                        </td>
                        <td class="total">{{$morning_all['calories']}}</td>
                        <td class="total">{{$morning_all['fat']}}</td>
                        <td class="total">{{$morning_all['protein']}}</td>
                        <td class="total">{{$morning_all['carbohydrate']}}</td>
                    </tr>

                    </tbody>

                </table>
                <div class="notices">
                    <div>Additional:</div>
                    <div class="notice">Black Tea, no sugar @ 11:30</div>
                </div>
                <hr>






                <div class="row contacts">
                    <div class="col invoice-to">
                        <h2 class="to">Morning</h2>
                    </div>
                    <div class="col invoice-details">
                        <div class="date">Due Date: 30/10/2018</div>
                    </div>
                </div>
                <table border="0" cellspacing="0" cellpadding="0">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th class="text-left">DESCRIPTION</th>
                        <th class="text-right">HOUR PRICE</th>
                        <th class="text-right">HOURS</th>
                        <th class="text-right">TOTAL</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td class="no">04</td>
                        <td class="text-left"><h3>
                                <a target="_blank" href="https://www.youtube.com/channel/UC_UMEcP_kF0z4E6KbxCpV1w">
                                    Youtube channel
                                </a>
                            </h3>
                            <a target="_blank" href="https://www.youtube.com/channel/UC_UMEcP_kF0z4E6KbxCpV1w">
                                Useful videos
                            </a>
                            to improve your Javascript skills. Subscribe and stay tuned :)
                        </td>
                        <td class="unit">$0.00</td>
                        <td class="qty">100</td>
                        <td class="total">$0.00</td>
                    </tr>
                    </tbody>
                    <tfoot>
                    <tr>
                        <td colspan="2"></td>
                        <td colspan="2">SUBTOTAL</td>
                        <td>$5,200.00</td>
                    </tr>
                    <tr>
                        <td colspan="2"></td>
                        <td colspan="2">TAX 25%</td>
                        <td>$1,300.00</td>
                    </tr>
                    <tr>
                        <td colspan="2"></td>
                        <td colspan="2">GRAND TOTAL</td>
                        <td>$6,500.00</td>
                    </tr>
                    </tfoot>
                </table>
                <div class="thanks">Thank you!</div>
                <div class="notices">
                    <div>NOTICE:</div>
                    <div class="notice">A finance charge of 1.5% will be made on unpaid balances after 30 days.</div>
                </div>
            </main>
            <footer>
                Invoice was created on a computer and is valid without the signature and seal.
            </footer>
        </div>
        <!--DO NOT DELETE THIS div. IT is responsible for showing footer always at the bottom-->
        <div></div>
    </div>
</div>
</body>
</html>
