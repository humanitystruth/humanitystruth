@extends('layouts.master')
@section('content')
<div class="w3-container ht-form-control-large">
    <div class="w3-container w3-padding w3-card-4 w3-round w3-margin w3-white">
        <div class="w3-container w3-padding w3-margin">
            <h3 class="w3-center"><strong>HumanitysTruth</strong> is entirely supported by the <strong>general public</strong>. Here's how we spend our funding:</h3>
        </div>
        
        <div id="donations_pay_for" class="w3-half" style="max-height: 250px;margin-bottom:32px!important"></div>
        <div id="supported_affiliates" class="w3-half" style="max-height: 250px;margin-bottom:32px!important"></div>
        
        
        <!-- Donation payment -->
        <div id="vue_app">
            <donate-component></donate-component>
        </div>
    </div>
</div>
@stop

@section('post-scripts')
<script src="/js/app.js" type="text/javascript"></script>
<script>
    Morris.Donut({
        element: 'supported_affiliates',
        data: [
          {value: 7, label: 'freedom.press'},
          {value: 7, label: 'securedrop.org'},
          {value: 5, label: 'wikileaks.org'},
          {value: 1, label: 'torproject.org'},
          {value: 20, label: 'siriusdisclosure.com'},
          {value: 5, label: 'youtube.com/secureteam10'},
          {value: 5, label: 'infowars.com'}
        ],
        formatter: function (x) { return "$" + x + "/mo"}
    }).on('click', function(i, row){
        console.log(i, row);
    });

    Morris.Donut({
        element: 'donations_pay_for',
        data: [
          {value: 30, label: 'Servers+Fiber'},
          {value: 25, label: 'Infrastructure'},
          {value: 10, label: 'Security'},
          {value: 15, label: 'Advancing R&D'},
          {value: 15, label: 'Promoting Leaks'},
          {value: 5, label: 'Community Donations'}
        ],
        labels: ['test'],
        formatter: function (x) { return x + "%"}
    }).on('click', function(i, row){
        console.log(i, row);
    });
</script>
@stop