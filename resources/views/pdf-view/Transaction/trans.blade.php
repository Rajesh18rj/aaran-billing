<html lang="en">

<head>
    <title>Transaction</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-white-100 p-10">

<!-- Address  --------------------------------------------------------------------------------------------------------->

<div class="flex flex-row  justify-evenly p-2">
    <div class="flex justify-center items-center">
        <img src="{{ public_path('/storage/images/'.$cmp->get('logo'))}}" alt="company logo" class="w-[120px]"/>
    </div>

    <div class="w-full flex flex-col items-center justify-start gap-y-1.5 ">
        <h1 class="text-2xl font-bold tracking-wider  uppercase">{{$cmp->get('company_name')}}</h1>
        <p class="text-xs">{{$cmp->get('address_1')}},{{$cmp->get('address_2')}}, {{$cmp->get('city')}}</p>
        <p class="text-xs">{{$cmp->get('contact')}} - {{$cmp->get('email')}}</p>
        <p class="text-xs">{{$cmp->get('gstin')}}</p>
    </div>
</div>

<div class="border-b border-gray-200 my-2 w-full">&nbsp;</div>

<div class="my-2">
    {{$trans_type_name}}
</div>

<x-table.form>

    <!-- Table Header  ------------------------------------------------------------------------------------------------>

    <x-slot:table_header name="table_header" class="bg-green-100">

        <x-table.header-serial></x-table.header-serial>

        <x-table.header-text sort-icon="none">Contact</x-table.header-text>

        <x-table.header-text sort-icon="none">Payment</x-table.header-text>

        <x-table.header-text sort-icon="none">Receipt</x-table.header-text>

        @if( $trans_type_id != 80)
            <x-table.header-text sort-icon="none">Type</x-table.header-text>
        @endif

        <x-table.header-text sort-icon="none">Balance</x-table.header-text>

    </x-slot:table_header>

    <!-- Table Body  -------------------------------------------------------------------------------------------------->

    <x-slot:table_body name="table_body">

        @php
            $balance = 0;
            $OpenBalance = 0;
            $totalBalance = 0;
            $totalPayment = 0;
            $totalReceipt = 0;
        @endphp


        @foreach($list as $index=>$row)

            @php

                if ($row->mode_id ==82)
                {
                    $totalPayment  += floatval($row->vname + 0);
                }
                elseif($row->mode_id ==83)
                {
                    $totalReceipt  += floatval($row->vname + 0);
                }

            @endphp

                <!-- Table Row  --------------------------------------------------------------------------------------->

            <x-table.row>

                <x-table.cell-text>{{$index+1}}</x-table.cell-text>

                <x-table.cell-text>{{$row->contact->vname}}</x-table.cell-text>

                @if($row->mode_id == 82)
                    <x-table.cell-text>{{$row->vname+0}}</x-table.cell-text>
                @else
                    <x-table.cell-text></x-table.cell-text>

                @endif

                @if($row->mode_id == 83)
                    <x-table.cell-text>{{$row->vname+0}}</x-table.cell-text>
                @else
                    <x-table.cell-text></x-table.cell-text>
                @endif

                @if( $trans_type_id != 80)
                    <x-table.cell-text>{{\Aaran\Transaction\Models\Transaction::common($row->receipttype_id)}}</x-table.cell-text>
                @endif

                <x-table.cell-text>
                    {{  $balance  = $totalReceipt-$totalPayment}}
                </x-table.cell-text>

            </x-table.row>

        @endforeach

        <x-table.row>
            <x-table.cell-text colspan="2">
                Total
            </x-table.cell-text>
            <x-table.cell-text>
                {{$totalPayment}}
            </x-table.cell-text>
            <x-table.cell-text>
                {{$totalReceipt}}
            </x-table.cell-text>
            <x-table.cell-text colspan="2" class="text-center text-blue-600">
                Bal&nbsp;: {{$totalReceipt - $totalPayment }}
            </x-table.cell-text>
        </x-table.row>


    </x-slot:table_body>

</x-table.form>


</body>
</html>