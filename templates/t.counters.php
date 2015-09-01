<?php
switch ($thecounter->role){
case "gas":
    ?>

<table id="example" class="table table-hover" cellspacing="0" width="100%">
        <thead>
            <tr id="capt">
                <th><span class="tsort">№ записи</span>
                </th>                
                <th><span class="tsort">Дата</span>
                </th>
                <th><span class="tsort">Показания</span>
                </th>
                <th><span class="tsort">Тариф</span>
                </th>
                <th><span class="tsort">Стоимость</span>
                </th>
                <th><span class="tsort">Действия</span>
                </th>
            </tr>
        </thead>
        <thead>
            <tr>
                <td>
                    <input id="srchId" type="text" placeholder="ID" class="form-control"/>
                </td>
                <td>
                    
                <div class='input-group date' id='srchDtD'>
                    <input type='text' class="form-control"  id='srchDt'  placeholder="Дата"/>
                    <span class="input-group-addon">
                        <span class="glyphicon glyphicon-calendar"></span>
                    </span>
                </div>                    
                </td>
                <td>
                    <input id="srchCount" type="text" placeholder="Показания" class="form-control"/>
                </td>
                                
                <td>
                    <input id="srchTarif" type="text" placeholder="Тариф" class="form-control"/>
                </td>
                <td>
                    <input id="srchCost" type="text" placeholder="Стоимость" class="form-control"/>
                </td>
                <th>
                </th>
            </tr>
         </thead>
 
        <tfoot>
            <tr>
                <th><span class="tsort">№ записи</span>
                </th>                
                <th><span class="tsort">Дата</span>
                </th>
                <th><span class="tsort">Показания</span>
                </th>
                <th><span class="tsort">Тариф</span>
                </th>
                <th><span class="tsort">Стоимость</span>
                </th>
                <th><span class="tsort">Действия</span>
                </th>
            </tr>
        </tfoot>
    </table>

<script type="text/javascript">
$(document).ready(function() {


    // DataTable
    var table = $('#example').DataTable({
        "ordering": true,
        
        "ajax": "<?=$me->siteurl?>/processors/ajax.counters.php/gas",
        "columns": [
            { "data": "rec_id" },
            { "data": "dtstamp" },
            { "data": "counter1" },
            { "data": "tarif" },
            { "data": "cost" },
            { "data": "action"}
        ]
    });
    $('#srchId').on( 'keyup change', function () {table.column(0).search( this.value ).draw();} );
    $('#srchDt').on( 'keyup change', function () {table.column(1).search( this.value ).draw();} );
    $('#srchCount').on( 'keyup change', function () {table.column(2).search( this.value ).draw();} );
    $('#srchTarif').on( 'keyup change', function () {table.column(3).search( this.value ).draw();} );
    $('#srchCost').on( 'keyup change', function () {table.column(4).search( this.value ).draw();} );
    
    


/*
    var dtp = $("#srchDtD").datetimepicker({
                    locale: 'ru',
                    format: 'DD.MM.YYYY'//,
                    //dp.hide: ($('#srchDt').on( 'keyup change', function () {table.column(4).search( this.value ).draw();} );)
                }).on("dp.change", function (e) {
                table.column(1).search($("#srchDt").val()).draw();
                console.log($("#srchDt").val());} ); 
*/

    } );
 

</script>

<?php
break;
case "water":
    ?>
<table id="example" class="table table-hover" cellspacing="0" width="100%">
        <thead>
            <tr id="capt">
                <th><span class="tsort">№ записи</span>
                </th>                
                <th><span class="tsort">Дата</span>
                </th>
                <th><span class="tsort">Водомеры 1/2</span>
                </th>
                <th><span class="tsort">Всего</span>
                </th>
                <th><span class="tsort">Тариф</span>
                </th>
                <th><span class="tsort">Стоимость</span>
                </th>
                <th><span class="tsort">Действия</span>
                </th>
            </tr>
        </thead>
        <thead>
            <tr>
                <td>
                    <input id="srchId" type="text" placeholder="ID" class="form-control"/>
                </td>
                <td>
                    
                <div class='input-group date' id='srchDtD'>
                    <input type='text' class="form-control"  id='srchDt'  placeholder="Дата"/>
                    <span class="input-group-addon">
                        <span class="glyphicon glyphicon-calendar"></span>
                    </span>
                </div>                    
                </td>
                <td>
                    <input id="srchCount1" type="text" placeholder="Показания" class="form-control"/>
                </td>
                <td>
                    <input id="srchCount" type="text" placeholder="Показания" class="form-control"/>
                </td>
                                
                <td>
                    <input id="srchTarif" type="text" placeholder="Тариф" class="form-control"/>
                </td>
                <td>
                    <input id="srchCost" type="text" placeholder="Стоимость" class="form-control"/>
                </td>
                <th>
                </th>
            </tr>
         </thead>
 
        <tfoot>
            <tr>
                <th><span class="tsort">№ записи</span>
                </th>                
                <th><span class="tsort">Дата</span>
                </th>
                <th><span class="tsort">Водомеры 1/2</span>
                </th>
                <th><span class="tsort">Всего</span>
                </th>
                <th><span class="tsort">Тариф</span>
                </th>
                <th><span class="tsort">Стоимость</span>
                </th>
                <th><span class="tsort">Действия</span>
                </th>
            </tr>
        </tfoot>
    </table>

<script type="text/javascript">
$(document).ready(function() {


    // DataTable
    var table = $('#example').DataTable({
        "ordering": true,
        
        "ajax": "<?=$me->siteurl?>/processors/ajax.counters.php/water",
        "columns": [
            { "data": "rec_id" },
            { "data": "dtstamp" },
            { "data": "counter1" },
            { "data": "counter2" },
            { "data": "tarif" },
            { "data": "cost" },
            { "data": "action"}
        ]
    });
    $('#srchId').on( 'keyup change', function () {table.column(0).search( this.value ).draw();} );
    $('#srchDt').on( 'keyup change', function () {table.column(1).search( this.value ).draw();} );
    $('#srchCount').on( 'keyup change', function () {table.column(2).search( this.value ).draw();} );
    $('#srchTarif').on( 'keyup change', function () {table.column(3).search( this.value ).draw();} );
    $('#srchCost').on( 'keyup change', function () {table.column(4).search( this.value ).draw();} );
    
    


/*
    var dtp = $("#srchDtD").datetimepicker({
                    locale: 'ru',
                    format: 'DD.MM.YYYY'//,
                    //dp.hide: ($('#srchDt').on( 'keyup change', function () {table.column(4).search( this.value ).draw();} );)
                }).on("dp.change", function (e) {
                table.column(1).search($("#srchDt").val()).draw();
                console.log($("#srchDt").val());} ); 
*/

    } );
 </script>   
<?php
break;
case "electro":
    ?>
<table id="example" class="table table-hover" cellspacing="0" width="100%">
        <thead>
            <tr id="capt">
                <th><span class="tsort">№ записи</span>
                </th>                
                <th><span class="tsort">Дата</span>
                </th>
                <th><span class="tsort">День/Ночь</span>
                </th>
                <th><span class="tsort">Всего</span>
                </th>
                <th><span class="tsort">Тариф</span>
                </th>
                <th><span class="tsort">Стоимость</span>
                </th>
                <th><span class="tsort">Действия</span>
                </th>
            </tr>
        </thead>
        <thead>
            <tr>
                <td>
                    <input id="srchId" type="text" placeholder="ID" class="form-control"/>
                </td>
                <td>
                    
                <div class='input-group date' id='srchDtD'>
                    <input type='text' class="form-control"  id='srchDt'  placeholder="Дата"/>
                    <span class="input-group-addon">
                        <span class="glyphicon glyphicon-calendar"></span>
                    </span>
                </div>                    
                </td>
                <td>
                    <input id="srchCount1" type="text" placeholder="Показания" class="form-control"/>
                </td>
                <td>
                    <input id="srchCount" type="text" placeholder="Показания" class="form-control"/>
                </td>
                                
                <td>
                    <input id="srchTarif" type="text" placeholder="Тариф" class="form-control"/>
                </td>
                <td>
                    <input id="srchCost" type="text" placeholder="Стоимость" class="form-control"/>
                </td>
                <th>
                </th>
            </tr>
         </thead>
 
        <tfoot>
            <tr>
                <th><span class="tsort">№ записи</span>
                </th>                
                <th><span class="tsort">Дата</span>
                </th>
                <th><span class="tsort">День/Ночь</span>
                </th>
                <th><span class="tsort">Всего</span>
                </th>
                <th><span class="tsort">Тариф</span>
                </th>
                <th><span class="tsort">Стоимость</span>
                </th>
                <th><span class="tsort">Действия</span>
                </th>
            </tr>
        </tfoot>
    </table>

<script type="text/javascript">
$(document).ready(function() {


    // DataTable
    var table = $('#example').DataTable({
        "ordering": true,
        
        "ajax": "<?=$me->siteurl?>/processors/ajax.counters.php/gas",
        "columns": [
            { "data": "rec_id" },
            { "data": "dtstamp" },
            { "data": "counter1" },
            { "data": "tarif" },
            { "data": "cost" },
            { "data": "action"}
        ]
    });
    $('#srchId').on( 'keyup change', function () {table.column(0).search( this.value ).draw();} );
    $('#srchDt').on( 'keyup change', function () {table.column(1).search( this.value ).draw();} );
    $('#srchCount').on( 'keyup change', function () {table.column(2).search( this.value ).draw();} );
    $('#srchTarif').on( 'keyup change', function () {table.column(3).search( this.value ).draw();} );
    $('#srchCost').on( 'keyup change', function () {table.column(4).search( this.value ).draw();} );
    
    


/*
    var dtp = $("#srchDtD").datetimepicker({
                    locale: 'ru',
                    format: 'DD.MM.YYYY'//,
                    //dp.hide: ($('#srchDt').on( 'keyup change', function () {table.column(4).search( this.value ).draw();} );)
                }).on("dp.change", function (e) {
                table.column(1).search($("#srchDt").val()).draw();
                console.log($("#srchDt").val());} ); 
*/

    } );
 </script>  
 <?php
 break;
default: break;
}