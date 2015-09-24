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
    var table = $('#example').DataTable( {
        "processing": true,
        "serverSide": true,
        "ajax": "<?=$me->siteurl?>/ajax/tabler.php"
    } );
        $('#example tbody').on( 'click', 'tr', function () {
        
 
            var s=$(this).children(0)[0].innerHTML;
            console.log(s);
            return location.href = "<?=$me->siteurl?>/index.php/book:"+s;
    } );

} );

</script>