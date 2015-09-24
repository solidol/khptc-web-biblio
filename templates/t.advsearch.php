
<div class="row">
    <div class="col-xs-12">
    <div class="col-xs-3">
        <input type="text" class="form-control" placeholder="Автор" id="author" name="author">
    </div> 
    <div class="col-xs-3">
        <input type="text" class="form-control" placeholder="Назва" id="bname" name="bname">
    </div>
    <div class="col-xs-3">
       <input type="text" class="form-control" placeholder="Рік" id="year" name="year">
    </div>
    <div class="col-xs-3">
       <input type="text" class="form-control" placeholder="ББК" id="bbk" name="bbk">
    </div>
    </div>
</div>
<br/>
<div class="row">
    <div class="col-xs-12">
    <div class="col-xs-3">
        <input type="text" class="form-control" placeholder="Видавництво" id="printer" name="printer">
    </div>
    <div class="col-xs-3">
        <input type="text" class="form-control" placeholder="ISBN" id="isbn" name="isbn">
    </div>
    <div class="col-xs-3">
       <input type="text" class="form-control" placeholder="Мова" id="lang" name="lang">
    </div>
    <div class="col-xs-3">
       <input type="text" class="form-control" placeholder="Категорія" id="cat" name="cat">
    </div>
    </div>
</div>

<table id="example" class="table table-hover display" cellspacing="0" width="100%">
        <thead>
            <tr>
                <th>ID</th>
                <th width="150">Автор</th>
                <th>Назва книги</th>
                <th>Рік</th>
                <th>Мова</th>
            </tr>
        </thead>
 
        <tfoot>
            <tr>
                <th>ID</th>
                <th>Автор</th>
                <th>Назва книги</th>
                <th>Рік</th>
                <th>Мова</th>
            </tr>
        </tfoot>
    </table>





<script>

$(document).ready(function() {
    $('#example_filter').css('style','display: none');
    var table = $('#example').DataTable( {
        "processing": true,
        "serverSide": true,
        
        "ajax": "<?=$me->siteurl?>/ajax/tabler.php"
    } );
    
    $('#author').on('keyup change', function(){table.column(1).search(this.value).draw();});
    $('#bname').on('keyup change', function(){table.column(2).search(this.value).draw();});
    $('#year').on('keyup change', function(){table.column(3).search(this.value).draw();});
    
        $('#example tbody').on( 'click', 'tr', function () {
            var s=$(this).children(0)[0].innerHTML;
            console.log(s);
            return location.href = "<?=$me->siteurl?>/index.php/book:"+s;
    } );

} );

</script>